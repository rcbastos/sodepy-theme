/**
 * Sodepy Theme — Main JavaScript
 * Vanilla JS, no jQuery. ES2020+.
 */
( function () {
	'use strict';

	/* =========================================================
	   1. HEADER STICKY — cambia apariencia al hacer scroll
	   ========================================================= */
	const header = document.querySelector( '.site-header' );

	if ( header ) {
		const onHeaderScroll = () => {
			header.classList.toggle( 'is-scrolled', window.scrollY > 60 );
		};
		window.addEventListener( 'scroll', onHeaderScroll, { passive: true } );
		onHeaderScroll();
	}

	/* =========================================================
	   2. SMOOTH SCROLL — anclas de menú one-page
	   ========================================================= */
	document.addEventListener( 'click', ( e ) => {
		const link = e.target.closest( 'a[href^="#"]' );
		if ( ! link ) return;

		const targetId = link.getAttribute( 'href' ).slice( 1 );
		if ( ! targetId ) return;

		const target = document.getElementById( targetId );
		if ( ! target ) return;

		e.preventDefault();

		const headerHeight = header ? header.offsetHeight : 0;
		const top = target.getBoundingClientRect().top + window.scrollY - headerHeight - 8;

		window.scrollTo( { top, behavior: 'smooth' } );

		// Cerrar menú móvil si está abierto
		const mobileMenu = document.querySelector( '.wp-block-navigation__responsive-container.is-menu-open' );
		if ( mobileMenu ) {
			const closeBtn = mobileMenu.querySelector( '.wp-block-navigation__responsive-container-close' );
			closeBtn?.click();
		}
	} );

	/* =========================================================
	   3. VIDEO AUTOPLAY AL ENTRAR EN VIEWPORT
	      Aplica a .video-autoplay-section y al hero
	   ========================================================= */
	const videoSections = document.querySelectorAll( '.video-autoplay-section, .hero-section' );

	if ( videoSections.length && 'IntersectionObserver' in window ) {
		const videoObserver = new IntersectionObserver(
			( entries ) => {
				entries.forEach( ( entry ) => {
					const video = entry.target.querySelector( 'video' );
					if ( ! video ) return;

					if ( entry.isIntersecting ) {
						// Fade in y reproducir
						video.style.opacity = '1';
						video.play().catch( () => {} );
					} else {
						// Pausar al salir del viewport (ahorra CPU/batería)
						video.pause();
					}
				} );
			},
			{ threshold: 0.15 }
		);

		videoSections.forEach( ( section ) => videoObserver.observe( section ) );
	}

	/* =========================================================
	   4. ANIMACIONES DE ENTRADA — elementos aparecen al scrollear
	   ========================================================= */
	if ( 'IntersectionObserver' in window ) {
		const animEls = document.querySelectorAll(
			'.service-card, .portfolio-item, .testimonial-card, .stat-item, .section-header, .problem-card, .process-step, .why-us-card'
		);

		const animObserver = new IntersectionObserver(
			( entries ) => {
				entries.forEach( ( entry ) => {
					if ( entry.isIntersecting ) {
						entry.target.classList.add( 'is-visible' );
						animObserver.unobserve( entry.target );
					}
				} );
			},
			{ threshold: 0.1, rootMargin: '0px 0px -40px 0px' }
		);

		animEls.forEach( ( el, i ) => {
			el.style.setProperty( '--anim-delay', `${ i * 0.05 }s` );
			animObserver.observe( el );
		} );
	}

	/* =========================================================
	   5. PORTFOLIO FILTERS — filtrar por categoría sin recarga
	   ========================================================= */
	const filterContainers = document.querySelectorAll( '[data-portfolio-filters]' );

	filterContainers.forEach( ( container ) => {
		const section  = container.closest( '.portfolio-section' );
		const items    = section?.querySelectorAll( '.portfolio-item' );
		if ( ! items?.length ) return;

		// Recoger categorías únicas de los items
		const categories = new Set();
		items.forEach( ( item ) => {
			item.querySelectorAll( '.wp-block-post-terms a' ).forEach( ( a ) => {
				categories.add( a.textContent.trim() );
			} );
		} );

		// Crear botones de filtro
		const allBtn = createFilterBtn( 'Todos', true );
		container.appendChild( allBtn );

		categories.forEach( ( cat ) => {
			const btn = createFilterBtn( cat, false );
			container.appendChild( btn );
		} );

		container.addEventListener( 'click', ( e ) => {
			const btn = e.target.closest( '.portfolio-filter-btn' );
			if ( ! btn ) return;

			container.querySelectorAll( '.portfolio-filter-btn' ).forEach( ( b ) => {
				b.classList.remove( 'is-active' );
				b.setAttribute( 'aria-pressed', 'false' );
			} );
			btn.classList.add( 'is-active' );
			btn.setAttribute( 'aria-pressed', 'true' );

			const filter = btn.dataset.filter;

			items.forEach( ( item ) => {
				if ( filter === 'all' ) {
					item.hidden = false;
					return;
				}
				const hasCategory = [ ...item.querySelectorAll( '.wp-block-post-terms a' ) ]
					.some( ( a ) => a.textContent.trim() === filter );
				item.hidden = ! hasCategory;
			} );
		} );
	} );

	function createFilterBtn( label, isActive ) {
		const btn = document.createElement( 'button' );
		btn.type              = 'button';
		btn.className         = 'portfolio-filter-btn' + ( isActive ? ' is-active' : '' );
		btn.dataset.filter    = isActive ? 'all' : label;
		btn.setAttribute( 'aria-pressed', isActive ? 'true' : 'false' );
		btn.textContent       = label;
		return btn;
	}

	/* =========================================================
	   6. AÑO Y NOMBRE DEL SITIO EN EL FOOTER
	   ========================================================= */
	document.querySelectorAll( '.footer-year' ).forEach( ( el ) => {
		el.textContent = new Date().getFullYear();
	} );

	document.querySelectorAll( '.site-name-footer' ).forEach( ( el ) => {
		const siteTitle = document.querySelector( '.wp-site-blocks title' )?.textContent
			|| document.title.split( ' – ' )[ 0 ]
			|| document.title.split( ' — ' )[ 0 ]
			|| '';
		if ( siteTitle ) el.textContent = siteTitle;
	} );

	/* =========================================================
	   7. MOBILE MENU — mejorar accesibilidad del menú nativo de WP
	   ========================================================= */
	document.addEventListener( 'keydown', ( e ) => {
		if ( e.key === 'Escape' ) {
			const mobileOpen = document.querySelector(
				'.wp-block-navigation__responsive-container.is-menu-open'
			);
			if ( mobileOpen ) {
				mobileOpen.querySelector( '.wp-block-navigation__responsive-container-close' )?.click();
			}
		}
	} );

	/* =========================================================
	   8. LAZY LOAD manual para videos (no hero) — carga src cuando
	      el elemento esté cerca del viewport
	   ========================================================= */
	const lazySources = document.querySelectorAll( 'source[data-src]' );

	if ( lazySources.length && 'IntersectionObserver' in window ) {
		const lazyObserver = new IntersectionObserver(
			( entries ) => {
				entries.forEach( ( entry ) => {
					if ( ! entry.isIntersecting ) return;
					const source = entry.target;
					const src    = source.dataset.src;
					if ( src ) {
						source.src = src;
						delete source.dataset.src;
						source.parentElement?.load();
					}
					lazyObserver.unobserve( source );
				} );
			},
			{ rootMargin: '200px' }
		);

		lazySources.forEach( ( src ) => lazyObserver.observe( src ) );
	}

} )();
