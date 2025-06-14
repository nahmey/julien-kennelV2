<template>
	<div>
		<Head title="Contact – Julien Kennel, création de site web à Saverne" />

		<div class="hero hero-inner" style="background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('images/computer_3_bis.jpg') no-repeat center / cover fixed;">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-6 mx-auto text-center">
						<div class="intro-wrap">
							<h1 class="mb-0">Contact</h1>
							<p class="text-white">
								<!-- Mes technologies préférées que j'utilise au quotidien. -->
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="untree_co-section">
			<div class="container">
				<div class="row mb-5 justify-content-center">
					<div class="col-lg-6 text-center">
						<h2 class="section-title text-center mb-3">Contactez-moi</h2>
						<p class="lead text-center mb-5">
							Vous avez un projet, une question ou souhaitez un devis ? N’hésitez pas à me contacter par téléphone ou par email.
						</p>
					</div>
				</div>
				<div class="row align-items-stretch">
					<div class="col-12 col-sm-6 col-lg-4 feature-1-wrap d-md-flex flex-md-column order-lg-1">
						<div class="feature-1 d-md-flex mb-4 h-100">
							<div class="align-self-center">
								<svg xmlns="http://www.w3.org/2000/svg" 
								width="24" height="24" viewBox="0 0 24 24" fill="none" 
								stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" 
								class="lucide phone mb-4">
								<path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.86 19.86 0 0 1-8.63-3.07
								19.5 19.5 0 0 1-6-6 19.86 19.86 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72
								12.49 12.49 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45
								12.49 12.49 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
								</svg>
								<h3>Téléphone</h3>
									<p class="mb-0">
									<a href="tel:+33674118211" class="text-decoration-none">06.74.11.82.11</a>
								</p>
							</div>
						</div>
					</div>

					<!-- Email -->
					<div class="col-12 col-sm-6 col-lg-4 feature-1-wrap d-md-flex flex-md-column order-lg-1">
						<div class="feature-1 d-md-flex mb-4 h-100">
							<div class="align-self-center">
								<svg xmlns="http://www.w3.org/2000/svg" 
								width="24" height="24" viewBox="0 0 24 24" fill="none" 
								stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" 
								class="lucide mail mb-4">
								<path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
								<polyline points="22,6 12,13 2,6"/>
								</svg>
								<h3>Email</h3>
								<p class="mb-0"><a href="mailto:kennel.julien@gmail.com" class="text-decoration-none">kennel.julien@gmail.com</a></p>
							</div>
						</div>
					</div>

					<!-- Adresse -->
					<div class="col-12 col-sm-6 col-lg-4 feature-1-wrap d-md-flex flex-md-column order-lg-1">
					<div class="feature-1 d-md-flex mb-4 h-100">
					<div class="align-self-center">
					<svg xmlns="http://www.w3.org/2000/svg" 
					width="24" height="24" viewBox="0 0 24 24" fill="none" 
					stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" 
					class="lucide map-pin mb-4">
					<path d="M21 10c0 6-9 12-9 12S3 16 3 10a9 9 0 0 1 18 0z"/>
					<circle cx="12" cy="10" r="3"/>
					</svg>
					<h3>Adresse</h3>
					<p class="mb-0">
					3 Passage Achille Demange 67700 Saverne France
					</p>
					</div>
					</div>
					</div>
					</div>
			</div>
		</div>
	</div>
</template>

<script setup>
import { ref } from 'vue';
import { Head, Link } from '@inertiajs/vue3';

</script>