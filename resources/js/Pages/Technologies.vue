<template>
	<div>
		<Head title="Technologies | Julien Kennel, développeur web freelance" />

		<div class="hero hero-inner">
			<div class="bg-fixed-fond-1"></div>
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-6 mx-auto text-center">
						<div class="intro-wrap">
							<h1 class="mb-0">Technologies</h1>
							<p class="text-white">
								Mes technologies préférées que j'utilise au quotidien.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="untree_co-section bg-light">
			<div class="container"  data-aos="fade-up">
				<!-- <h2 class="mb-5">Frameworks</h2> -->
				<div class="d-flex flex-wrap justify-content-between">
					<div class="row col-12 col-md-6">
						<div class="col-6 col-md-4 mb-4" v-for="data in technologies">
							<div class="card h-100 border-0 shadow-sm rounded-lg text-center p-4 transition-all hover-transform hover-shadow">
								<div class="mb-2">
									<img :src="base_url + data.src" alt="Image" class="img-fluid col-8">
								</div>
								<p class="font-weight-bold mb-0">{{data.nom}}</p>
							</div>
						</div>
					</div>
					<div class="col-12 col-md-6">
						<h2>Fiabilité et sécurité</h2>
						<p class="lead mt-4">
							Découvrez les technologies qui composent mon environnement de développement.
						</p>

						<p class="lead mt-4">
							Du front-end au back-end, j’utilise un écosystème complet et cohérent : frameworks modernes pour des interfaces dynamiques, langages robustes pour la logique métier, et outils performants pour le déploiement et la maintenance.
						</p>

						<p class="lead mt-4">
							Ce choix réfléchi de technologies me permet d’assurer la fiabilité, la sécurité et la performance de chaque application, tout en facilitant leur évolution dans le temps.
						</p>
					</div>
				</div>
			</div>
		</div>

<!-- 		<div class="untree_co-section" style="background: url('images/fond_noir_2.jpg') center/cover no-repeat fixed;">
			<div class="container pt-4 pb-4 text-white">
				<h2 class="mb-5">Langages de programmation</h2>
				<div class="row">
					<div class="row col-12 col-md-8">
						<div class="col-6 col-md-3 mb-4" v-for="data in langages">
							<div class="card h-100 border-0 shadow-sm rounded-lg text-center p-4 transition-all hover-transform hover-shadow">
								<div class="mb-2">
									<img :src="base_url + data.src" alt="Image" class="img-fluid col-8">
								</div>
								<p class="font-weight-bold mb-0 text-dark">{{data.nom}}</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> -->

<!-- 		<div class="untree_co-section bg-light">
			<div class="container mt-5">
				<h2 class="mb-5">Base de données et autre</h2>
				<div class="row">
					<div class="row col-12 col-md-6">
						<div class="col-6 col-md-4 mb-4" v-for="data in bdds">
							<div class="card h-100 border-0 shadow-sm rounded-lg text-center p-4 transition-all hover-transform hover-shadow">
								<div class="mb-2">
									<img :src="base_url + data.src" alt="Image" class="img-fluid col-8">
								</div>
								<p class="font-weight-bold mb-0">{{data.nom}}</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> -->

<!-- 		<div class="cta-section bg-light pt-4 pb-4">
			<div class="container mt-5">
				<h2 class="mb-5">Autres</h2>
				<div class="row">
					<div class="col-12 col-md-6 col-lg-3" v-for="data in cms">
						<div class="media-1">
							<a href="#" class="d-block mb-3">
								<img :src="base_url + data.src" alt="Image" class="img-fluid">
							</a>
							<div class="d-flex">
								<div>
									<h3><a href="#" class="text-white">{{data.nom}}</a></h3>
									<p>{{data.description}}</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> -->
	</div>
</template>

<script setup>
import { ref, inject } from 'vue';
import { Head, Link } from '@inertiajs/vue3';

const base_url = inject('base_url');

const technologies = ref([
	{
		id: 1,
		nom: 'Laravel',
		description : 'Laravel est un framework PHP moderne et puissant, conçu pour rendre le développement web plus rapide et structuré. Il propose une syntaxe élégante, une sécurité intégrée et une gestion simplifiée des bases de données.',
		src: '/images/logo/laravel.png'
	},
	{
		id: 2,
		nom: 'Vue JS',
		description : 'Vue.js est un framework JavaScript progressif pour créer des interfaces utilisateurs dynamiques. Léger, flexible et facile à intégrer, il permet de construire des applications web réactives, modernes et performantes.',
		src: '/images/logo/vuejs.png'
	},
	{
		id: 3,
		nom: 'CodeIgniter',
		description : 'CodeIgniter est un framework PHP rapide et léger, parfait pour les projets nécessitant des performances élevées. Facile à prendre en main, il offre une structure claire, tout en laissant une grande liberté aux développeurs.',
		src: '/images/logo/codeigniter.png'
	},
	{
		id: 4,
		nom: 'PHP',
		description : 'PHP est un langage de script côté serveur largement utilisé pour développer des sites web dynamiques. Il est rapide, simple à apprendre et bien intégré à de nombreux systèmes de gestion de bases de données.',
		src: '/images/logo/php.png'
	},
	{
		id: 5,
		nom: 'Javascript',
		description : 'JavaScript est un langage de programmation essentiel pour le web, permettant d’ajouter des interactions, des animations et des fonctionnalités dynamiques aux pages et applications en ligne modernes.',
		src: '/images/logo/js.png'
	},
	{
		id: 6,
		nom: 'HTML',
		description : 'HTML est le langage standard pour structurer le contenu des pages web. Il définit les titres, paragraphes, images, liens et formulaires, et constitue la base indispensable de toute interface utilisateur en ligne.',
		src: '/images/logo/html.png'
	},
	{
		id: 7,
		nom: 'CSS',
		description : 'CSS est un langage de style utilisé pour mettre en forme les pages HTML. Il permet de contrôler l’apparence visuelle d’un site, comme les couleurs, les polices, les marges ou la disposition des éléments.',
		src: '/images/logo/css.png'
	},
	{
		id: 8,
		nom: 'PostgreSQL',
		description : 'PostgreSQL est un système de gestion de base de données open-source puissant et robuste. Il supporte des requêtes complexes, une haute fiabilité et est idéal pour les projets de grande envergure.',
		src: '/images/logo/postgresql.png'
	},
	{
		id: 9,
		nom: 'MySQL',
		description : 'MySQL est un système de gestion de base de données relationnelle très répandu. Rapide et fiable, il permet de stocker, organiser et interroger efficacement les données d’un site ou d’une application.',
		src: '/images/logo/mysql.png'
	}
	// {
	// 	id: 10,
	// 	nom: 'Leaflet',
	// 	description : 'Leaflet est une bibliothèque JavaScript légère et moderne pour créer des cartes interactives. Facile à utiliser et très performante, elle permet d’intégrer des cartes dynamiques avec marqueurs, popups et couches personnalisées.',
	// 	src: '/images/logo/leaflet.png'
	// }
]);

const langages = ref([
	{
		id: 1,
		nom: 'PHP',
		description : 'PHP est un langage de script côté serveur largement utilisé pour développer des sites web dynamiques. Il est rapide, simple à apprendre et bien intégré à de nombreux systèmes de gestion de bases de données.',
		src: '/images/logo/php.png'
	},
	{
		id: 2,
		nom: 'Javascript',
		description : 'JavaScript est un langage de programmation essentiel pour le web, permettant d’ajouter des interactions, des animations et des fonctionnalités dynamiques aux pages et applications en ligne modernes.',
		src: '/images/logo/js.png'
	},
	{
		id: 4,
		nom: 'HTML',
		description : 'HTML est le langage standard pour structurer le contenu des pages web. Il définit les titres, paragraphes, images, liens et formulaires, et constitue la base indispensable de toute interface utilisateur en ligne.',
		src: '/images/logo/html.png'
	},
	{
		id: 3,
		nom: 'CSS',
		description : 'CSS est un langage de style utilisé pour mettre en forme les pages HTML. Il permet de contrôler l’apparence visuelle d’un site, comme les couleurs, les polices, les marges ou la disposition des éléments.',
		src: '/images/logo/css.png'
	}
])

const bdds = ref([
	{
		id: 1,
		nom: 'PostgreSQL',
		description : 'PostgreSQL est un système de gestion de base de données open-source puissant et robuste. Il supporte des requêtes complexes, une haute fiabilité et est idéal pour les projets de grande envergure.',
		src: '/images/logo/postgresql.png'
	},
	{
		id: 2,
		nom: 'MySQL',
		description : 'MySQL est un système de gestion de base de données relationnelle très répandu. Rapide et fiable, il permet de stocker, organiser et interroger efficacement les données d’un site ou d’une application.',
		src: '/images/logo/mysql.png'
	},
	{
		id: 3,
		nom: 'Leaflet',
		description : 'Leaflet est une bibliothèque JavaScript légère et moderne pour créer des cartes interactives. Facile à utiliser et très performante, elle permet d’intégrer des cartes dynamiques avec marqueurs, popups et couches personnalisées.',
		src: '/images/logo/leaflet.png'
	}
]);

const cms = ref([
	// {
	// 	id: 1,
	// 	nom: 'Wordpress',
	// 	description : '',
	// 	src: '/images/logo/wordpress.jpg'
	// },
	{
		id: 2,
		nom: 'Leaflet',
		description : 'Leaflet est une bibliothèque JavaScript légère et moderne pour créer des cartes interactives. Facile à utiliser et très performante, elle permet d’intégrer des cartes dynamiques avec marqueurs, popups et couches personnalisées.',
		src: '/images/logo/leaflet.png'
	}
]);

</script>

<style>
  .transition-all {
    transition: all 0.3s ease;
  }
  .hover-transform:hover {
    transform: translateY(-5px);
    cursor: pointer;
  }
  .hover-shadow:hover {
    box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15) !important;
  }
  .card {
    height: 100%;
  }
</style>