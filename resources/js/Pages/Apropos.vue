<template>
	<div>
		<Head title="À propos – Julien Kennel, développeur web freelance" />

		<div class="hero hero-inner" style="background: url('images/fond_noir_1.jpg') center/cover no-repeat fixed;">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-6 mx-auto text-center">
						<div class="intro-wrap">
							<h1 class="mb-0">A propos</h1>
							<p class="text-white">

							</p>
						</div>
					</div>
				</div>
			</div>
		</div>


		<section class="py-5 bg-light">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-md-6">
						<img
						src="https://images.unsplash.com/photo-1504384308090-c894fdcc538d?auto=format&fit=crop&w=800&q=80"
						alt="Portrait professionnel"
						class="img-fluid rounded shadow"
						/>
					</div>
					<div class="col-md-6">
						<h1 class="display-5 fw-bold mb-4">À propos de moi</h1>
						<p class="lead">
							Je suis Julien Kennel, développeur web freelance basé à Saverne dans le Bas-Rhin. J’accompagne mes clients dans la création de sites internet et d’applications sur mesure, avec une vision centrée sur l’utilisateur final.
						</p>
					</div>
				</div>
			</div>
		</section>

		<section class="py-5">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-md-6 order-md-2">
						<img
						src="https://images.unsplash.com/photo-1517433456452-f9633a875f6f?auto=format&fit=crop&w=800&q=80"
						alt="Apprentissage développement web"
						class="img-fluid rounded shadow"
						/>
					</div>
					<div class="col-md-6 order-md-1">
						<h2 class="mb-4">Mon parcours</h2>
						<p>
							J’ai découvert le développement web par passion, en commençant en autodidacte. Curieux de nature, je me suis rapidement formé aux technologies modernes comme
							<strong>Vue.js</strong>, <strong>Laravel</strong>, <strong>Inertia.js</strong> et <strong>PostgreSQL</strong>.
						</p>
						<p>
							Au fil des projets, j’ai acquis une solide expérience dans la conception d’outils web performants et sur mesure, en collaborant avec des PME, des indépendants et des collectivités.
						</p>
					</div>
				</div>
			</div>
		</section>


		<section class="py-5 bg-light">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-md-6">
						<img
						src="https://images.unsplash.com/photo-1551836022-d5d88e9218df?auto=format&fit=crop&w=800&q=80"
						alt="Réunion et échanges"
						class="img-fluid rounded shadow"
						/>
					</div>
					<div class="col-md-6">
						<h2 class="mb-4">Mon approche</h2>
						<p>
							Ma priorité, c’est de comprendre vos besoins métiers avant d’écrire la moindre ligne de code. Chaque projet débute par une phase d’écoute active et d’échange approfondi.
							Je travaille principalement en <strong>méthode agile</strong> : nous avançons étape par étape, avec des points réguliers pour ajuster, affiner et améliorer.
						</p>
						<p>
							Vous êtes impliqué tout au long du processus, et vos retours sont essentiels à la réussite du projet. Mon objectif est simple : créer des outils qui vous ressemblent et qui
							<strong>facilitent réellement votre quotidien</strong>.
						</p>
					</div>
				</div>
			</div>
		</section>

		<!-- Bloc 4 : Image à droite -->
		<section class="py-5">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-md-6 order-md-2">
						<img
						src="https://images.unsplash.com/photo-1516259762381-22954d7d3ad2?auto=format&fit=crop&w=800&q=80"
						alt="Productivité et outils digitaux"
						class="img-fluid rounded shadow"
						/>
					</div>
					<div class="col-md-6 order-md-1">
						<h2 class="mb-4">Ma vision du développement</h2>
						<p>
							Pour moi, le développement web ne se résume pas à créer un site ou une application : il s’agit de <strong>résoudre des problèmes concrets</strong>, de
							<strong>gagner du temps</strong>, et d’<strong>améliorer les processus</strong>. Un bon outil est invisible : il s’intègre naturellement dans votre façon de travailler.
						</p>
						<p>
							Je conçois des solutions simples, robustes, évolutives, avec une attention particulière portée à l’<strong>ergonomie</strong>, la <strong>performance</strong> et la <strong>durabilité</strong>.
							Mon credo : <em>le bon outil au bon endroit, pour les bonnes personnes.</em>
						</p>
					</div>
				</div>
			</div>
		</section>

		<!-- Bloc 5 : Travaillons ensemble (centré) -->
		<section class="py-5 bg-light text-center">
			<div class="container">
				<h2 class="mb-3">Un projet en tête ?</h2>
				<p class="mb-4">
					Que vous souhaitiez moderniser un outil existant ou créer une solution sur mesure, je serai ravi d’en discuter avec vous.
				</p>
				<a href="#contact" class="btn btn-primary btn-lg">Discutons ensemble</a>
			</div>
		</section>

		</div>
</template>

<script setup>
import { Head, Link } from '@inertiajs/vue3';
</script>