<template>
	<div>
		<Head title="Julien Kennel | Développeur web à Saverne | Création de site internet" />

		<TypingEffect :base_url="base_url" />

		<section class="untree_co-section pt-0">
			<div class="container">
				<div class="row mb-5 justify-content-center">
					<div class="col-lg-6 text-center">
						<h2 class="section-title text-center mb-3">Mes Services</h2>
						<p class="lead">Développeur Web depuis plus de 6 ans, je réalise pour vous des logiciels métier et sites internet sur mesure selon vos besoins.</p>
						<div class="mt-auto">
							<Link :href="route('a-propos')" class="btn btn-dark btn-block">
								En découvrir plus sur moi
							</Link>
		              	</div>
					</div>
				</div>
				<div class="d-flex flex-wrap align-items-stretch pt-4">
					<div class="col-lg-4 order-lg-1" data-aos="fade-up">
						<div class="h-100">
							<div class="frame h-100">
								<div class="feature-img-bg h-100" style="background-image: url('images/computer_4_bis.jpg');">
								</div>
							</div>
						</div>
					</div>

					<div class="col-12 col-sm-6 col-lg-4 feature-1-wrap d-md-flex flex-md-column order-lg-1" >
						<div class="feature-1 d-md-flex" v-for="(service, key) in services_col_1" :style="{background: key === 1 ? 'linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url(\'images/fond_noir_1.jpg\') no-repeat center / cover' : ''}" data-aos="fade-up">
							<div class="align-self-center">
								<component :is="getIconComponent(service.icon)" :class="key === 1 ? 'text-white mb-4' : 'mb-4'"/>
								<h3 :class="key === 1 ? 'text-light' : ''">{{service.titre}}</h3>
								<p :class="key === 1 ? 'text-light mb-0' : 'mb-0'">{{service.description}}</p>
							</div>
						</div>
					</div>

					<div class="col-12 col-sm-6 col-lg-4 feature-1-wrap d-md-flex flex-md-column order-lg-3 mt-4 mt-md-0" >
						<div class="feature-1 d-md-flex" v-for="(service, key) in services_col_2" :style="{background: key === 0 ? 'linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url(\'images/fond_noir_1.jpg\') no-repeat center / cover' : ''}" data-aos="fade-up">
							<div class="align-self-center">
								<component :is="getIconComponent(service.icon)" :class="key === 0 ? 'text-white mb-4' : 'mb-4'"/>
								<h3 :class="key === 0 ? 'text-light' : ''">{{service.titre}}</h3>
								<p :class="key === 0 ? 'text-light mb-0' : 'mb-0'">{{service.description}}</p>
							</div>
						</div>

<!-- 						<div class="feature-1 d-md-flex" v-for="service in services_col_2">
							<div class="align-self-center">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" :class="service.icone + ' lucide mb-4'"><rect width="7" height="7" x="3" y="3" rx="1"/><rect width="7" height="7" x="14" y="3" rx="1"/><rect width="7" height="7" x="14" y="14" rx="1"/><rect width="7" height="7" x="3" y="14" rx="1"/></svg>
								<h3>{{service.titre}}</h3>
								<p class="mb-0">{{service.description}}</p>
							</div>
						</div> -->
					</div>

				</div>
			</div>
		</section>

		<section class="untree_co-section count-numbers py-5">
			<div class="container">
				<div class="row d-flex justify-content-between w-100 text-center">
					<!-- Compteur 1 -->
			        <Counter
			          title="Lignes de codes"
			          :number="2000000"
			          suffix="+"
			          colorClass="bg-vert-fonce"
			          :duration="2000"
			        />

			        <!-- Compteur 2 -->
			        <Counter
			          title="Applications et sites web"
			          :number="40"
			          suffix="+"
			          colorClass="bg-vert-fonce"
			          :duration="2000"
			          :startDelay="500"
			        />

			        <!-- Compteur 3 -->
			        <Counter
			          title="Années d'expériences"
			          :number="6"
			          suffix="+"
			          colorClass="bg-vert-fonce"
			          :duration="2000"
			          :startDelay="1000"
			        />
				</div>
			</div>
		</section>

		<section class="cta-section p-4" style="background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('images/fond_noir_1.jpg') no-repeat center / cover fixed;">
			<div class="container p-4" data-aos="fade-up">
				<div class="row text-center justify-content-center mb-5">
					<div class="col-lg-7">
						<h2 class="text-center text-white">Mes réalisations</h2>
						<div class="mt-auto">
							<Link :href="route('realisations')" class="btn btn-outline-light btn-block">
								Découvrir toutes mes réalisations
							</Link>
		              	</div>
					</div>
				</div>

				<carousel
				:touchDrag="false"
				:breakpoints="{
					700: {
						itemsToShow: 1,
						snapAlign: 'center',
					},
					1000: {
						itemsToShow: 3,
						snapAlign: 'start',
					}
				}"
			    :wrap-around="true"  
			    :transition="1500"
			    :autoplay="10000"
			    >
					<slide v-for="site in carousel_sites" :key="site.id">
						<div class="item">
							<a class="media-thumb m-1" :href="site.lien" target="_blank" data-fancybox="gallery">
								<div class="media-text text-left">
									<h3>{{site.titre}}</h3>
									<span class="location">Consulter</span>
								</div>
								<div :style="'background: linear-gradient(rgba(0, 0, 0, 0.8) 0%,rgba(0, 0, 0, 0.1) 50%,rgba(0, 0, 0, 0.0) 100%), url('+base_url + site.src+') no-repeat center / cover fixed;height: 400px;width: 300px'">

								</div>
							</a>
						</div>
					</slide>

					<template #addons>
						<navigation />
						<div class="pt-50px">
							<pagination class="pagintation-realisations" />
						</div>
					</template>
				 </carousel>
			</div>
		</section>

		<section class="untree_co-section testimonial-section" >
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-7 text-center" data-aos="fade-up">
						<h2 class="section-title text-center mb-5">Avis google</h2>

						<carousel :items-to-show="1" :wrap-around="true"  :transition="1500" :autoplay="10000">
							<slide v-for="avis in avis_googles" :key="avis.id">
								<div class="item">
									<div class="testimonial mx-auto">
										<figure class="img-wrap">
											<img :src="avis.avatar" alt="Avatar Image" class="img-fluid">
										</figure>
										<h3 class="name">{{avis.prenom}} {{avis.nom}}</h3>
										<blockquote>
											<p>&ldquo;{{avis.avis}}&rdquo;</p>
										</blockquote>
									</div>
								</div>
							</slide>

							
								<template #addons >
									<div class="pt-50px">
										<pagination />
									</div>
								</template>
						 </carousel>
					</div>
				</div>
			</div>
		</section>
	</div>
</template>

<script setup>
import { ref, inject, onMounted } from 'vue';
import { Head, Link } from '@inertiajs/vue3';
import { Globe, LayoutDashboard, Database, Server } from 'lucide-vue-next';

import 'vue3-carousel/dist/carousel.css'
import { Carousel, Slide, Pagination, Navigation } from 'vue3-carousel';

import TypingEffect from '@/Components/TypingEffect.vue';
import Counter from '@/Components/CounterSection.vue';

const base_url = inject('base_url');
const carousel_sites = ref([]);
const avis_googles = ref([]);

const services_col_1 = [
	{
		titre: 'Applications Web logiciels métier',
		description: 'Je développe pour vous des logiciels métiers sur mesure, en fonction de vos besoins, afin de répondre à vos problématiques.',
		icon: 'LayoutDashboard'
	},
	{
		titre: 'Bases de données',
		description: 'Vous avez besoin de concevoir ou gérer votre base de données ? Mon expérience en SQL sont là pour y répondre.',
		icon: 'Database'
	}
]

const services_col_2 = [
	{
		titre: 'Sites internet',
		description: "Besoin de créer un site internet rapide, éfficace et moderne pour montrer votre visibilité ? Je suis là pour vous apporter toute mon expérience.",
		icon: 'Globe'
	},
	{
		titre: 'Hébergement',
		description: "J’héberge vos sites et applications sur des serveurs rapides et sécurisés, afin de garantir stabilité, performance et tranquillité d’esprit.",
		icon: 'Server'
	}
]

const getIconComponent = (iconName) =>
{
    const iconMap = {
        Globe: Globe,
        LayoutDashboard: LayoutDashboard,
        Database: Database,
        Server: Server,
    };

    return iconMap[iconName];
}

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
		// console.log(data);
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