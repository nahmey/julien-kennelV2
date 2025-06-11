<template>
	<div>

		<TypingEffect :base_url="base_url" />

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
						<div class="h-100">
							<div class="frame h-100">
								<div class="feature-img-bg h-100" style="background-image: url('images/computer_4_bis.jpg');">
								</div>
							</div>
						</div>
					</div>

					<div class="col-12 col-sm-6 col-lg-4 feature-1-wrap d-md-flex flex-md-column order-lg-1" >
						<div class="feature-1 d-md-flex" v-for="service in services_col_1">
							<div class="align-self-center">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" :class="service.icone + ' lucide mb-4'"><rect width="7" height="7" x="3" y="3" rx="1"/><rect width="7" height="7" x="14" y="3" rx="1"/><rect width="7" height="7" x="14" y="14" rx="1"/><rect width="7" height="7" x="3" y="14" rx="1"/></svg>
								<h3>{{service.titre}}</h3>
								<p class="mb-0">{{service.description}}</p>
							</div>
						</div>
					</div>

					<div class="col-12 col-sm-6 col-lg-4 feature-1-wrap d-md-flex flex-md-column order-lg-3" >
						<div class="feature-1 d-md-flex" v-for="service in services_col_2">
							<div class="align-self-center">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" :class="service.icone + ' lucide mb-4'"><rect width="7" height="7" x="3" y="3" rx="1"/><rect width="7" height="7" x="14" y="3" rx="1"/><rect width="7" height="7" x="14" y="14" rx="1"/><rect width="7" height="7" x="3" y="14" rx="1"/></svg>
								<h3>{{service.titre}}</h3>
								<p class="mb-0">{{service.description}}</p>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>

		<div class="untree_co-section count-numbers py-5">
		<div class="container">
			<div class="row d-flex justify-content-between w-100 text-center">
				<div class="col-12 col-sm-6 col-md-6 col-lg-3">
					<div class="counter-wrap">
						<div class="counter text-vert-fonce">
							+<span class="" data-number="2000000">0</span>
						</div>
						<span class="caption">Lignes de codes</span>
					</div>
				</div>
				<div class="col-12 col-sm-6 col-md-6 col-lg-3">
					<div class="counter-wrap">
						<div class="counter text-vert-fonce">
							+<span class="" data-number="40">0</span>
						</div>
						<span class="caption">Applications et sites web</span>
					</div>
				</div>
				<div class="col-12 col-sm-6 col-md-6 col-lg-3">
					<div class="counter-wrap">
						<div class="counter text-vert-fonce">
							+<span class="" data-number="6">0</span>
						</div>
						<span class="caption">Années d'expériences</span>
					</div>
				</div>
			</div>
		</div>
	</div>



<!-- 	<div class="cta-section">
		<div class="container">
			<div class="row d-flex flex-wrap w-100 justify-content-between">
				<div>
					<img :src="base_url + '/images/site_cenl/site_cenl_1.JPG'" alt="Image" class="img-fluid" style="width: 400px; height: 420px;" />
				</div>

				<div class="frame h-100">
					<div class="feature-img-bg h-100" style="background-image: url('images/computer_4_bis.jpg');width: 400px; height: 420px;"></div>
				</div>

				<div class="text-center h-100">
						<div class="KS5 jzS mQ8 un8 C9i TB_" style="height: 50%; width: 100%;">
							<div class="X8m zDA IZT tBJ dyH iFc sAJ swG">
								<div class="zI7 iyn Hsu" style="font-size: 60px; color: rgb(195, 25, 82); font-weight: bold;">
									Mes réalisations
								</div>
							</div>

							<div class="X8m zDA IZT tBJ dyH iFc sAJ swG">
								<div class="tNl zI7 iyn Hsu" style="font-size: 24px; color: rgb(195, 25, 82); text-align: center; max-width: 400px;">Que souhaitez-vous tester ensuite&nbsp;? Pensez à quelque chose que vous appréciez, par exemple «&nbsp;repas facile poulet&nbsp;», et voyez les résultats.
								</div>
							</div>

							<div class="Jea KS5 i1W jX8 mQ8 wOW zI7 iyn Hsu">
								<a aria-label="Explorer" class="nrl _74 NtY S9z Lfz CCY DyB mQ8 KS5 RCK Hsu USg adn F10 xD4 i1W V92 Il7" data-test-id="explore-button-search" href="/ideas/cuisine-et-boissons/931387085757/" rel="" tabindex="0">
									<div class="KS5 hs0 mQ8 un8 b23 TB_">
										<div class="xuA">
											<div class="B1n tg7 tBJ dyH iFc sAJ H2s">Explorer
											</div>
										</div>
									</div>
								</a>
							</div>
						</div>
					</div>
			</div>
		</div>
	</div> -->

	<!-- <Test /> -->










	<div class="cta-section p-4" style="background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('images/computer_10.jpg') no-repeat center / cover fixed;">
		<div class="container p-4">
			<div class="row text-center justify-content-center mb-5">
				<div class="col-lg-7">
					<h2 class="text-center text-white">Mes réalisations</h2>
				</div>
			</div>
<!-- :autoplay="2000" -->
			<carousel :items-to-show="3" :wrap-around="true"  :transition="1500" :autoplay="10000">
				<slide v-for="site in carousel_sites" :key="site.id">
					<div class="item">
						<a class="media-thumb m-1" :href="base_url + '/images/hero-slider-2.jpg'" data-fancybox="gallery">
							<div class="media-text text-left">
								<h3>{{site.titre}}</h3>
								<span class="location">Consulter</span>
							</div>
							<img :src="base_url + site.src" alt="Image" class="img-fluid" />
						</a>
					</div>
				</slide>

				<template #addons>
					<navigation />
					<div class="pt-50px">
						<pagination />
					</div>
				</template>
			 </carousel>

<!-- 			<div class="owl-carousel owl-3-slider">

				<div class="item" v-for="site in carousel_sites">
					<a class="media-thumb" :href="base_url + '/images/hero-slider-2.jpg'" data-fancybox="gallery">
						<div class="media-text">
							<h3>{{site.titre}}</h3>
							<span class="location">Italy</span>
						</div>
						<img :src="base_url + '/images/site_kuntz_ramonage/site_kuntz_ramonage_1.JPG'" alt="Image" class="img-fluid">
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
			</div> -->

		</div>
	</div>

	<div class="untree_co-section testimonial-section" >
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-7 text-center">
					<h2 class="section-title text-center mb-5">Avis google</h2>

					<carousel :items-to-show="1" :wrap-around="true"  :transition="1500" :autoplay="10000">
						<slide v-for="avis in avis_googles" :key="avis.id">
							<div class="item">
								<div class="testimonial mx-auto">
									<figure class="img-wrap">
										<!-- <img :src="base_url + '/images/person_2.jpg'" alt="Image" class="img-fluid"> -->
										<img :src="avis.avatar" alt="Image" class="img-fluid">
									</figure>
									<h3 class="name">{{avis.prenom}} {{avis.nom}}</h3>
									<blockquote>
										<p>&ldquo;{{avis.avis}}&rdquo;</p>
									</blockquote>
								</div>
<!-- 								<a class="media-thumb m-1" :href="base_url + '/images/hero-slider-2.jpg'" data-fancybox="gallery">
									<div class="media-text text-left">
										<h3>{{site.titre}}</h3>
										<span class="location">Consulter</span>
									</div>
									<img :src="base_url + site.src" alt="Image" class="img-fluid" />
								</a> -->
							</div>
						</slide>

						
							<template #addons >
								<div class="pt-50px">
									<pagination />
								</div>
							</template>
					 </carousel>
<!-- 
					<div class="owl-single owl-carousel no-nav">

						<div class="testimonial mx-auto" v-for="avis in avis_googles">
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

					</div> -->

				</div>
			</div>
		</div>
	</div>



	</div>
</template>

<script setup>
import { ref, inject, onMounted } from 'vue';

import 'vue3-carousel/dist/carousel.css'
import { Carousel, Slide, Pagination, Navigation } from 'vue3-carousel';

import TypingEffect from '@/Components/TypingEffect.vue';
import Test from '@/Pages/Test.vue';

const base_url = inject('base_url');
const carousel_sites = ref([]);
const avis_googles = ref([]);

const services_col_1 = [
		{
			titre: 'Applications Web logiciels métier',
			description: 'Je développe pour vous des logiciels métiers sur mesure, en fonction de vos besoins, afin de répondre à vos problématiques.',
			icon: 'lucide-layout-grid'
		},
		{
			titre: 'Bases de données',
			description: 'Vous avez besoin de créer ou gérer votre base de données ? Mon expérience en SQL sont là pour y répondre.',
			icon: 'lucide-database'
		}
	]

	const services_col_2 = [
		{
			titre: 'Sites internet',
			description: "Besoin d'un site internet rapide, éfficace et moderne pour montrer votre visibilité ? Je suis là pour vous apporter toute mon expérience.",
			icon: 'lucide-panels-top-left'
		},
	]

const loadData = () => 
{
	axios.get(base_url+'/accueil_realisations')
	.then(response => response.data)
	.then(data => {
		carousel_sites.value = data;
	})
	.catch((error) => {
		console.log(error)
	})
	.finally(() => {
        // loading.value = false;
    });
}

const getAvisGoogle = () =>
{
	axios.get(base_url+'/get_avis_google')
	.then(response => response.data)
	.then(data => {
		avis_googles.value = data;
		console.log(data);
		// carousel_sites.value = data;
	})
	.catch((error) => {
		console.log(error)
	})
	.finally(() => {
        // loading.value = false;
    });
}

onMounted(() => {
	loadData();
	getAvisGoogle();
})

</script>


<style>
.carousel__prev{
	margin-left: -20px;
}
.carousel__next {
	margin-right: -20px;
}

.carousel__slide {
	padding: 15px;
}
</style>