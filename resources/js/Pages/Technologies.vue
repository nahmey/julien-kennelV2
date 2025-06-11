<template>
	<div>
		<div class="hero hero-inner">
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

		<div class="untree_co-section">
			<div class="container">
				<h2 class="mb-5">Frameworks</h2>
				<div class="d-flex flex-wrap justify-content-between">
					<div class="col-6 col-md-6 col-lg-3" v-for="data in frameworks">
						<div class="media-1">
							<a href="#" class="d-block mb-3">
								<img :src="base_url + data.src" alt="Image" class="img-fluid">
							</a>
							<div class="d-flex">
								<div>
									<h3><a href="#">{{data.nom}}</a></h3>
									<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="cta-section" style="background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('images/computer_10.jpg') no-repeat center / cover fixed;">
			<div class="container mt-5 pt-4 pb-4 text-white">
				<h2 class="mb-5">Langages de programmation</h2>
				<div class="row">
					<div class="card-body col-6 col-md-6 col-lg-3 h-100" v-for="data in langages">
						<div class="media-2">
							<a href="#" class="d-block mb-3">
								<img :src="base_url + data.src" alt="Image" class="img-fluid">
							</a>
							<div class="d-flex">
								<div>
									<h3><a href="#" class="text-white">{{data.nom}}</a></h3>
									<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="untree_co-section">
			<div class="container mt-5">
				<h2 class="mb-5">Base de données</h2>
				<div class="row">
					<div class="col-6 col-md-6 col-lg-3" v-for="data in bdds">
						<div class="media-1">
							<a href="#" class="d-block mb-3">
								<img :src="base_url + data.src" alt="Image" class="img-fluid">
							</a>
							<div class="d-flex">
								<div>
									<h3><a href="#">{{data.nom}}</a></h3>
									<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="cta-section pt-4 pb-4 text-white">
			<div class="container mt-5">
				<h2 class="mb-5">CMS et autres</h2>
				<div class="row">
					<div class="col-6 col-md-6 col-lg-3" v-for="data in cms">
						<div class="media-1">
							<a href="#" class="d-block mb-3">
								<img :src="base_url + data.src" alt="Image" class="img-fluid">
							</a>
							<div class="d-flex">
								<div>
									<h3><a href="#" class="text-white">{{data.nom}}</a></h3>
									<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

<!-- 					
					<div class="col-6 col-md-6 col-lg-3">
					<div class="media-1">
					<a href="#" class="d-block mb-3"><img src="images/hero-slider-2.jpg" alt="Image" class="img-fluid"></a>
					<div class="d-flex">
					<div>
					<h3><a href="#">Discovering Best</a></h3>
					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
					</div>
					</div>
					</div>
					</div>
					<div class="col-6 col-md-6 col-lg-3">
					<div class="media-1">
					<a href="#" class="d-block mb-3"><img src="images/hero-slider-3.jpg" alt="Image" class="img-fluid"></a>
					<div class="d-flex">
					<div>
					<h3><a href="#">A New Moments of Life</a></h3>
					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
					</div>
					</div>
					</div>
					</div>
					<div class="col-6 col-md-6 col-lg-3">
					<div class="media-1">
					<a href="#" class="d-block mb-3"><img src="images/hero-slider-4.jpg" alt="Image" class="img-fluid"></a>
					<div class="d-flex">
					<div>
					<h3><a href="#">Joy To Your Journey</a></h3>
					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
					</div>
					</div>
					</div>
					</div> -->
				<!-- </div> -->
			<!-- </div> -->
		</div>
	</div>
</template>

<script setup>
import { ref, inject } from 'vue';

const base_url = inject('base_url');

const frameworks = ref([
	{
		id: 1,
		nom: 'Laravel',
		description : '',
		src: '/images/logo/laravel.png'
	},
	{
		id: 2,
		nom: 'Vue JS',
		description : '',
		src: '/images/logo/vuejs.png'
	},
	{
		id: 3,
		nom: 'CodeIgniter',
		description : '',
		src: '/images/logo/codeigniter.png'
	}
]);

const langages = ref([
	{
		id: 1,
		nom: 'PHP',
		description : '',
		src: '/images/logo/php.png'
	},
	{
		id: 2,
		nom: 'Javascript',
		description : '',
		src: '/images/logo/js.png'
	},
	// {
	// 	id: 3,
	// 	nom: 'Jquery',
	// 	description : '',
	// 	src: '/images/logo/jquery.png'
	// },
	{
		id: 4,
		nom: 'HTML',
		description : '',
		src: '/images/logo/html.png'
	},
	{
		id: 3,
		nom: 'CSS',
		description : '',
		src: '/images/logo/css.png'
	}
])

const bdds = ref([
	{
		id: 1,
		nom: 'PostgreSQL',
		description : '',
		src: '/images/logo/postgresql.png'
	},
	{
		id: 2,
		nom: 'MySQL',
		description : '',
		src: '/images/logo/mysql.png'
	}
]);

const cms = ref([
	{
		id: 1,
		nom: 'Wordpress',
		description : '',
		src: '/images/logo/wordpress.jpg'
	},
	{
		id: 2,
		nom: 'Leaflet',
		description : '',
		src: '/images/logo/leaflet.png'
	}
]);

</script>