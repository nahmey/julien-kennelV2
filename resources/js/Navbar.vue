<template>
	<div>
		<div class="site-mobile-menu site-navbar-target">
			<div class="site-mobile-menu-header">
				<div class="site-mobile-menu-close">
					<span class="icofont-close js-menu-toggle"></span>
				</div>
			</div>
			<div class="site-mobile-menu-body"></div>
		</div>
		<!-- Navbar avec effet de couleur au scroll -->
		<nav class="site-nav" :class="{ 'scrolled': isScrolled }">
			<div class="container">
				<div class="site-navigation d-flex justify-content-between">
					<Link :href="route('accueil')" class="logo m-0">
						<img :src="base_url + '/images/logo/logo_jk_v1.png'" class="logo-navbar" /> Julien Kennel
					</Link>
					<ul class="js-clone-nav d-none d-lg-inline-block text-left site-menu float-right mt-auto mb-auto">
						<li :class="[(active_route === 'accueil' ? active_route_class : '')]">
							<Link :href="route('accueil')">
								Accueil
							</Link>
						</li>
						<li :class="[(active_route === 'realisations' ? active_route_class : '')]">
							<Link :href="route('realisations')">
								Réalisations
							</Link>
						</li>
						<li :class="[(active_route === 'technologies' ? active_route_class : '')]">
							<Link :href="route('technologies')">
								Technologies
							</Link>
						</li>
						<li>
							<Link :href="route('a-propos')">
								A propos
							</Link>
						</li>
						<li>
							<Link :href="route('accueil')">
								Contact
							</Link>
						</li>
					</ul>
					<a href="#" class="burger ml-auto float-right site-menu-toggle js-menu-toggle d-inline-block d-lg-none light" data-toggle="collapse" data-target="#main-navbar">
						<span></span>
					</a>
				</div>
			</div>
		</nav>
	</div>
</template>
<script setup>
import { Link, usePage, router } from '@inertiajs/vue3';
import { watch, inject, ref, onMounted, onUnmounted } from 'vue';

const page = usePage()
const base_url = inject('base_url');
const active_route = route().current() ? ref(route().current()) : ref('accueil');
const active_route_class = 'active';

const isScrolled = ref(false);

const handleScroll = () => {
	isScrolled.value = window.scrollY > 50
}

onMounted(() => {
	window.addEventListener('scroll', handleScroll)
})

onUnmounted(() => {
	window.removeEventListener('scroll', handleScroll)
})

/*
 * Watch 
 */
router.on('finish', (event) => {
    active_route.value = route().current()
})

</script>

<style scoped>
/* Navbar fixe avec animation de couleur au scroll */
.site-nav {
	position: fixed !important;
	top: 0 !important;
	left: 0 !important;
	right: 0 !important;
	width: 100% !important;
	z-index: 1050 !important;
	
	/* État initial : couleur sombre */
	background-color: transparent !important;
	color: white;
	
	/* Animation fluide */
	transition: all 0.4s ease-in-out;
	transform: translateZ(0); /* Optimisation GPU */
}

/* État lors du scroll : couleur blanche */
.site-nav.scrolled {
	background-color: white !important;
	color: #242323;
	box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

/* Animation du logo et texte */
.site-nav .logo,
.site-nav .site-menu a {
	transition: color 0.4s ease-in-out;
}

/* État initial : texte blanc */
.site-nav .logo,
.site-nav .site-menu a {
	color: white !important;
}

/* État scrollé : texte sombre */
.site-nav.scrolled .logo,
.site-nav.scrolled .site-menu a {
	color: #242323 !important;
}

/* Animation du burger menu mobile */
.site-nav .burger span,
.site-nav .burger span::before,
.site-nav .burger span::after,
.site-nav .burger.light span,
.site-nav .burger.light::before,
.site-nav .burger.light::after {
	background-color: white;
	transition: background-color 0.4s ease-in-out;
}

/* État scrollé : burger noir */
.site-nav.scrolled .burger span,
.site-nav.scrolled .burger span::before,
.site-nav.scrolled .burger span::after,
.site-nav.scrolled .burger.light span,
.site-nav.scrolled .burger.light::before,
.site-nav.scrolled .burger.light::after {
	background-color: #242323 !important;
}

/* Optionnel : effet hover adaptatif */
.site-nav .site-menu a:hover {
	opacity: 0.8;
	transition: opacity 0.2s ease;
}

/* Animation plus fluide avec backdrop-filter quand scrollé */
.site-nav.scrolled {
	backdrop-filter: blur(10px);
	-webkit-backdrop-filter: blur(10px);
}
.site-nav.scrolled {
    padding: 0.5rem 0; /* Navbar plus compacte au scroll */
}

.logo-navbar{
	height: 50px;
	width: 50px;
}

/* CORRECTION : Style pour l'élément actif du menu */
/* État initial (navbar sombre) : élément actif en vert */
.site-nav .site-navigation .site-menu > li.active > a {
	color: #99D98F !important;
}
</style>