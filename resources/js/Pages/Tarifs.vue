<template>
	<div>
		<Head title="Tarifs | Création de site internet et logiciels | Julien Kennel" />

		<div class="hero hero-inner" style="background: url('images/fond_noir_2.jpg') center/cover no-repeat fixed;">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-6 mx-auto text-center">
						<div class="intro-wrap">
							<h1 class="mb-0">Tarifs</h1>
							<p class="text-white">
								Découvrez mes tarifs
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<section class="py-5 text-center">
			<div class="container">
				<h2 class="mb-3">Choisissez la formule adaptée à votre projet</h2>
				<p class="mb-0">
					Que vous ayez besoin d’un site vitrine simple ou d’une application métier complexe, je propose plusieurs forfaits pour répondre précisément à vos besoins, avec transparence sur les technologies, la sécurité, et les délais.
				</p>
			</div>
		</section>

		<section class="py-5 bg-light">
			<div class="container">
				<div class="d-flex flex-wrap">
					<div class="col-12 col-md-6 p-4" v-for="forfait in forfaits" data-aos="fade-up">
						<div class="card h-100 border-0 shadow-sm rounded-lg hover-shadow transition-all ">
							<div class="card-body d-flex flex-column p-4 p-md-5">
								<h3 class="card-title font-weight-bold h4 mb-3">{{forfait.nom}}</h3>
								<p class="card-text text-muted mb-4">
									{{forfait.sous_titre}}
								</p>
								<div class="mb-4">
									<span class="h2 font-weight-bold">A partir de {{forfait.prix}}€</span>
								</div>
								<ul class="list-unstyled mb-5">
									<li class="d-flex align-items-start mb-3" v-for="(contenu, titre) in forfait.contenus">
										<svg class="bi bi-check-circle-fill text-primary mr-2 mt-1" width="1em" height="1em" viewBox="0 0 20 20" fill="currentColor">
											<path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
										</svg>
										<span>{{ Object.keys(contenu)[0] }}: {{ Object.values(contenu)[0] }}</span>
									</li>
								</ul>
								<div class="mt-auto pt-3">
									<Link :href="route('contacts')" class="btn btn-outline-dark btn-block">
										Discuter de mon projet
									</Link>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="py-5" style="background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('images/fond_noir_1.jpg') no-repeat center / cover fixed;">
			<div class="container">
				<div class="row align-items-center" data-aos="fade-up">
					<div class="col-md-6 order-md-2 text-white">
						<h2>Applications métiers / projets complexes : sur devis</h2>
						<p>
							Vous avez un besoin spécifique ou un outil métier à développer ? Je conçois des applications web sur mesure, connectées à vos données, adaptées à vos processus internes, souvent bien au-delà d’un simple site vitrine.
						</p>
						<p>
							<strong>Exemples :</strong>
						</p>
						<ul>
							<li>Portail de gestion interne</li>
							<li>Tableaux de bord interactifs</li>
							<li>Gestion de planning ou ressources</li>
							<li>Cartographie de données métier (VueLeaflet + PostGIS)</li>
							<li>Interfaces métiers connectées à une API ou à un SSO</li>
						</ul>
						<p class="mt-3">
							👉 Chaque projet fait l’objet d’un devis personnalisé, établi après réception de votre cahier des charges ou d’un échange sur vos besoins.
						</p>
					</div>
					<div class="col-md-6 order-md-1">
						<img :src="base_url + '/images/computer_4_bis.jpg'" alt="Projets complexes et applications métiers" class="img-fluid rounded shadow" />
					</div>
				</div>
			</div>
		</section>

		<section class="py-5">
			<div class="container">
				<div class="d-flex flex-wrap" data-aos="fade-up">
					<div class="col-12 col-md-6 order-md-1">
						<div class="card h-100 border-0 shadow-sm rounded-lg hover-shadow transition-all ">
							<div class="card-body d-flex flex-column p-4 p-md-5">
								<h3 class="card-title font-weight-bold h4 mb-3">Options & Modules additionnels</h3>
								<p class="card-text text-muted mb-4">
								
								</p>
								<ul class="list-unstyled mb-5">
									<li class="d-flex align-items-start mb-3" v-for="contenu in options.contenus">
										<svg class="bi bi-check-circle-fill text-primary mr-2 mt-1" width="1em" height="1em" viewBox="0 0 20 20" fill="currentColor">
											<path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
										</svg>
										<span>{{contenu}}</span>
									</li>
								</ul>
							</div>
						</div>
					</div>

					<div class="col-md-6 order-md-2">
						<div class="card h-100 border-0 shadow-sm rounded-lg hover-shadow transition-all"  style="background: url('images/fond_noir_2.jpg') no-repeat center / cover;">
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
</template>

<script setup>
import { ref, inject } from 'vue';
import { Head, Link } from '@inertiajs/vue3';

const base_url = inject('base_url')

const options = ref({
	contenus: [
		'Carte interactive (VueLeaflet + PostGIS) : à partir de 300€',
		'Authentification avancée (rôles + permissions) : 150€',
		'Import/Export CSV (backend Laravel) : 100€ – 200€',
		'Site multilingue : 200 – 400 EUR',
		'Hébergement géré (1 site/app) : à partir de 120€ / an',
		'Formation à l’admin (1h visio + guide PDF) : 100€',
	]
})

const forfaits = ref([
{
	id: 1,
	nom: 'Essentiel',
	sous_titre: 'Vitrine simple (1 à 5 pages)',
	prix: '750',
	contenus: [
		{ Contenu: 'Accueil, À propos, Services, Contact, Mentions légales' },
		{ Technos: 'Laravel + Vue 3' },
		{ Responsive: 'Oui (mobile/tablette/desktop)' },
		{ Sécurité: 'Base Laravel (CSRF, validation, etc.)' },
		{ Hébergement: 'Non inclus' },
		{ 'Durée estimée': '~15 heures' },
	]
},
{
id: 2,
	nom: 'Standard',
	sous_titre: 'Vitrine étendue (6 à 10 pages)',
	prix: '1250',
	contenus: [
		{ Contenu: 'Comme Essentiel + pages supplémentaires (équipe, portfolio…)' },
		{ Structure: 'Mise en page modulaire, sections réutilisables' },
		{ Design: 'CSS custom ou framework type bootstrap / Tailwind' },
		{ 'Durée estimée': '~25 heures' },
	]
},

{
	id: 3,
	nom: 'Dynamique',
	sous_titre: 'Vitrine avec back-office simple (actualités)',
	prix: '1750',
	contenus: [
		{ Contenu: 'Jusqu’à 10 pages' },
		{ Admin: 'Module actualités/blog (CRUD avec upload d’image)' },
		{ Sécurité : 'Authentification / rôles' },
		{ Technos : 'Laravel API + Vue 3 admin-panel' },
		{ 'Durée estimée': '~35 heures' },
	]
},

{
	id: 3,
	nom: 'Sur-Mesure',
	sous_titre: 'Vitrine + back-office avancé',
	prix: '2500',
	contenus: [
		{ Contenu: ' Jusqu’à 15 pages + modules dynamiques' },
		{ Admin: 'Actualités, galerie, témoignages, carte interactive, utilisateurs, filtres, statistiques…' },
		{ Sécurité : 'Auth avec rôles, validation, permissions' },
		{ Technos : 'Laravel backend + Vue 3 SPA ou Inertia' },
		{ Cartographie  : 'VueLeaflet + données PostgreSQL (PostGIS)' },
		{ 'Durée estimée': '~35 heures' },
	]
}

])


</script>