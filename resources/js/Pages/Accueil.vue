<template>
	<div>
		<div class="hero">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-7">
						<div class="intro-wrap">
							<h1 class="mb-5"><span class="d-block">Développeur Web spécialisé dans la création</span> <span class="typed-words"></span></h1>
						</div>
					</div>
					<div class="col-lg-5">
						<div class="slides">
							<img :src="base_url + '/images/computer_3_bis.jpg'" alt="Image" class="img-fluid active">
							<img :src="base_url + '/images/computer_4_bis.jpg'" alt="Image" class="img-fluid">
							<img :src="base_url + '/images/computer_1_bis.jpg'" alt="Image" class="img-fluid">
							<img :src="base_url + '/images/computer_2_bis.jpg'" alt="Image" class="img-fluid">
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="untree_co-section">
			<div class="container">
				<div class="row mb-5 justify-content-center">
					<div class="col-lg-6 text-center">
						<h2 class="section-title text-center mb-3">Mes Services</h2>
						<p>Développeur Web depuis plus de 6 ans, je réalise pour vous des applications métier et sites internet sur mesure selon vos besoins.</p>
					</div>
				</div>
				<div class="row align-items-stretch">
					<div class="col-lg-4 order-lg-1">
						<div class="h-100"><div class="frame h-100"><div class="feature-img-bg h-100" style="background-image: url('images/computer_4_bis.jpg');"></div></div></div>
					</div>

					<div class="col-12 col-sm-6 col-lg-4 feature-1-wrap d-md-flex flex-md-column order-lg-1" >
						<div class="feature-1 d-md-flex">
							<div class="align-self-center">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-layout-grid mb-4"><rect width="7" height="7" x="3" y="3" rx="1"/><rect width="7" height="7" x="14" y="3" rx="1"/><rect width="7" height="7" x="14" y="14" rx="1"/><rect width="7" height="7" x="3" y="14" rx="1"/></svg>
								<!-- <span class="flaticon-restaurant display-4 text-primary"></span> -->
								<h3>Applications Web logiciels métier</h3>
								<p class="mb-0">Je développe pour vous des logiciels métiers sur mesure, en fonction de vos besoins, pour répondre à vos problématiques.</p>
							</div>
							
						</div>

						<div class="feature-1 ">
							<div class="align-self-center">
								<!-- <span class="flaticon-mail display-4 text-primary"></span> -->
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-database mb-4"><ellipse cx="12" cy="5" rx="9" ry="3"/><path d="M3 5V19A9 3 0 0 0 21 19V5"/><path d="M3 12A9 3 0 0 0 21 12"/></svg>

								<h3>Bases de données</h3>
								<p class="mb-0">Vous avez besoin de créer ou gérer votre base de données ? Mon expérience en SQL sont là pour y répondre.</p>
							</div>
						</div>

					</div>

					<div class="col-12 col-sm-6 col-lg-4 feature-1-wrap d-md-flex flex-md-column order-lg-3" >

						<div class="feature-1 d-md-flex">
							<div class="align-self-center">
								<!-- <span class="flaticon-house display-4 text-primary"></span> -->
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-panels-top-left mb-4"><rect width="18" height="18" x="3" y="3" rx="2"/><path d="M3 9h18"/><path d="M9 21V9"/></svg>

								<h3>Sites internet</h3>
								<p class="mb-0">Besoin d'un site internet rapide, éfficace et moderne pour montrer votre visibilité ? Je suis là pour vous apporter toute mon expérience.</p>
							</div>
						</div>

<!-- 						<div class="feature-1 d-md-flex">
							<div class="align-self-center">
								<span class="flaticon-phone-call display-4 text-primary"></span>
								<h3>24/7 Support</h3>
								<p class="mb-0">Even the all-powerful Pointing has no control about the blind texts.</p>
							</div>
						</div> -->

					</div>

				</div>
			</div>
		</div>

		<div class="untree_co-section count-numbers py-5">
		<div class="container">
			<div class="row d-flex justify-content-between w-100 text-center">
				<div class="col-12 col-sm-6 col-md-6 col-lg-3">
					<div class="counter-wrap">
						<div class="counter">
							+<span class="" data-number="2000000">0</span>
						</div>
						<span class="caption">Lignes de codes</span>
					</div>
				</div>
				<div class="col-12 col-sm-6 col-md-6 col-lg-3">
					<div class="counter-wrap">
						<div class="counter">
							+<span class="" data-number="40">0</span>
						</div>
						<span class="caption">Applications et sites web</span>
					</div>
				</div>
				<div class="col-12 col-sm-6 col-md-6 col-lg-3">
					<div class="counter-wrap">
						<div class="counter">
							+<span class="" data-number="6">0</span>
						</div>
						<span class="caption">Années d'expériences</span>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="untree_co-section">
		<div class="container">
			<div class="row text-center justify-content-center mb-5">
				<div class="col-lg-7"><h2 class="section-title text-center">Mes réalisations</h2></div>
			</div>

			<div class="owl-carousel owl-3-slider">

				<div class="item">
					<a class="media-thumb" :href="base_url + '/images/site_cenl/site_cenl_1.JPG'" data-fancybox="gallery">
						<div class="media-text">
							<h3>Pragser Wildsee</h3>
							<span class="location">Italy</span>
						</div>
						<img :src="base_url + '/images/site_cenl/site_cenl_1.JPG'" alt="Image" class="img-fluid">
					</a> 
				</div>

				<div class="item">
					<a class="media-thumb" :href="base_url + '/images/hero-slider-2.jpg'" data-fancybox="gallery">
						<div class="media-text">
							<h3>Oia</h3>
							<span class="location">Greece</span>
						</div>
						<img :src="base_url + '/images/site_pole_gestion/site_pole_gestion_1.JPG'" alt="Image" class="img-fluid">
					</a> 
				</div>

				<div class="item">
					<a class="media-thumb" :href="base_url + '/images/hero-slider-3.jpg'" data-fancybox="gallery">
						<div class="media-text">
							<h3>Perhentian Islands</h3>
							<span class="location">Malaysia</span>
						</div>
						<img :src="base_url + '/images/site_kuntz_ramonage/site_kuntz_ramonage_1.JPG'" alt="Image" class="img-fluid">
					</a> 
				</div>

<!-- 				<div class="item">
					<a class="media-thumb" href="images/hero-slider-3.jpg" data-fancybox="gallery">
						<div class="media-text">
							<h3>Perhentian Islands</h3>
							<span class="location">Malaysia</span>
						</div>
						<img src="images/site_kuntz_ramonage/site_kuntz_ramonage_1.JPG" alt="Image" class="img-fluid">
					</a> 
				</div> -->


<!-- 				<div class="item">
					<a class="media-thumb" href="images/hero-slider-4.jpg" data-fancybox="gallery">
						<div class="media-text">
							<h3>Rialto Bridge</h3>
							<span class="location">Italy</span>
						</div>
						<img src="images/hero-slider-4.jpg" alt="Image" class="img-fluid">
					</a> 
				</div>

				<div class="item">
					<a class="media-thumb" href="images/hero-slider-5.jpg" data-fancybox="gallery">
						<div class="media-text">
							<h3>San Francisco, United States</h3>
							<span class="location">United States</span>
						</div>
						<img src="images/hero-slider-5.jpg" alt="Image" class="img-fluid">
					</a> 
				</div>

				<div class="item">
					<a class="media-thumb" href="images/hero-slider-1.jpg" data-fancybox="gallery">
						<div class="media-text">
							<h3>Lake Thun</h3>
							<span class="location">Switzerland</span>
						</div>
						<img src="images/hero-slider-2.jpg" alt="Image" class="img-fluid">
					</a> 
				</div> -->

			</div>

		</div>
	</div>

	<div class="untree_co-section testimonial-section mt-5">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-7 text-center">
					<h2 class="section-title text-center mb-5">Testimonials</h2>

					<div class="owl-single owl-carousel no-nav">
						<div class="testimonial mx-auto">
							<figure class="img-wrap">
								<img :src="base_url + '/images/person_2.jpg'" alt="Image" class="img-fluid">
							</figure>
							<h3 class="name">Adam Aderson</h3>
							<blockquote>
								<p>&ldquo;There live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
							</blockquote>
						</div>

						<div class="testimonial mx-auto">
							<figure class="img-wrap">
								<img :src="base_url + '/images/person_3.jpg'" alt="Image" class="img-fluid">
							</figure>
							<h3 class="name">Lukas Devlin</h3>
							<blockquote>
								<p>&ldquo;There live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
							</blockquote>
						</div>

						<div class="testimonial mx-auto">
							<figure class="img-wrap">
								<img :src="base_url + '/images/person_4.jpg'" alt="Image" class="img-fluid">
							</figure>
							<h3 class="name">Kayla Bryant</h3>
							<blockquote>
								<p>&ldquo;There live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
							</blockquote>
						</div>

					</div>

				</div>
			</div>
		</div>
	</div>



	</div>
</template>

<script setup>
import { inject } from 'vue';

const base_url = inject('base_url');

</script>