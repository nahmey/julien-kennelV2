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

		<nav class="site-nav">
			<div class="container">
				<div class="site-navigation">
					<Link :href="route('accueil')" class="logo m-0">
						<img :src="base_url + '/images/logo/logo_jk_v1.png'" class="col-1" /> Julien Kennel
					</Link>

					<ul class="js-clone-nav d-none d-lg-inline-block text-left site-menu float-right">
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
							<Link :href="route('apropos')">
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
import { watch, inject, ref } from 'vue';

const page = usePage()
const base_url = inject('base_url');
const active_route = route().current() ? ref(route().current()) : ref('accueil');
const active_route_class = 'active';

/*
 * Watch 
 */
router.on('finish', (event) => {
    active_route.value = route().current()
})

// const hideMenu = () => 
// {
//     let menu = document.getElementById('navbarToggleExternalContent');
//     menu.classList.remove('show');
// }

// const redirectToHome = () =>
// {
//     router.visit(route('programme'))
// }

</script>