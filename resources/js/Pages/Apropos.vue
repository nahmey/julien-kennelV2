<template>
	<div>
		<Head title="À propos | Julien Kennel, développeur web freelance à Saverne" />

		<div class="hero hero-inner pb-0" style="background: url('images/fond_noir_1.jpg') center/cover no-repeat fixed;">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-6 mx-auto text-center mb-4 pb-4">
						<div class="intro-wrap">
							<h1 class="mb-0">A propos</h1>
							<p class="text-white">
								En savoir plus sur moi
							</p>
						</div>
					</div>
				</div>

				<Timeline />

			</div>
		</div>

		<section class="py-5 bg-light text-center">
			<div class="container">
				<h2 class="mb-3">Un projet en tête ?</h2>
				<p class="mb-4 lead">
					Que vous souhaitiez moderniser un outil existant ou créer une solution sur mesure, je serai ravi d’en discuter avec vous.
				</p>
				<Link :href="route('contacts')" class="btn btn-dark btn-lg">Discutons ensemble</Link>
			</div>
		</section>

		</div>
</template>

<script setup>
import { Head, Link } from '@inertiajs/vue3';
import Timeline from '@/Components/Timeline.vue';
</script>