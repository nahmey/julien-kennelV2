<template>
	<div>
		<Head title="Réalisations | Sites internet et logiciels métier | Julien Kennel" />

		<div class="hero hero-inner pb-0">
            <div class="bg-fixed"></div>
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-6 mx-auto text-center">
						<div class="intro-wrap">
							<h1 class="mb-0">Réalisations</h1>
							<p class="text-white">
								Découvrez mon portfolio de projets digitaux réalisés pour mes clients
							</p>
						</div>
					</div>
				</div>

				<Tabs :tabs="myTabs" default-tab="tous">
					<template #tous>
						<h2 class="mb-4 text-white">Toutes mes réalisations</h2>
						<RealisationsComponent :chunked="chunkedAll" />
					</template>
					<template #site_web>
						<h2 class="mb-4 text-white">Sites web</h2>
						<RealisationsComponent :chunked="chunkedSites" />
					</template>
					<template #application>
						<h2 class="mb-4 text-white">Logiciels métier</h2>
						<RealisationsComponent :chunked="chunkedApps"/>
					</template>
				</Tabs>
			</div>
		</div>
	</div>
</template>

<script setup>
import { inject, computed } from 'vue';
import { Head, Link } from '@inertiajs/vue3';
import Tabs from '@/Components/TabsComponent.vue';
import RealisationsComponent from '@/Components/RealisationsComponent.vue'

const props = defineProps(['sites', 'applications']);

const base_url = inject('base_url');

const myTabs = [
	{ id: 'tous', title: 'Tous' },
	{ id: 'site_web', title: 'Sites web' },
	{ id: 'application', title: 'Logiciels métier' }
];

const chunkedSites = computed(() => {
    const result = [];
    for (let i = 0; i < props.sites.length; i += 2) {
        result.push(props.sites.slice(i, i + 2));
    }
    return result;
});

const chunkedApps = computed(() => {
    const result = [];
    for (let i = 0; i < props.applications.length; i += 2) {
        result.push(props.applications.slice(i, i + 2));
    }
    return result;
});

const chunkedAll = computed(() => {
    // 1. Fusionner les deux tableaux
    const merged = [...props.sites, ...props.applications];

    // 2. Trier par id (suppose que chaque élément a un champ `id`)
    merged.sort((a, b) => a.id - b.id);

    // 3. Regrouper par paires
    const result = [];
    for (let i = 0; i < merged.length; i += 2) {
        result.push(merged.slice(i, i + 2));
    }

    return result;
});

</script>

<style>


.gal-item {
    position: relative;
    overflow: hidden;
    border-radius: 8px;
    transition: transform 0.3s ease; /* Animation pour le zoom */
    height: 350px!important;
}

.gal-item::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    /* Dégradé de base */
    background: linear-gradient(
        to bottom,
        rgba(0, 0, 0, 0) 0%,
        rgba(0, 0, 0, 0.1) 30%,
        rgba(0, 0, 0, 0.7) 100%
    );
    z-index: 1;
    transition: background 0.3s ease; /* Animation pour le dégradé */
}

.gal-item:hover {
    transform: scale(1.01); /* Légèrement agrandit la carte au survol */
    cursor: pointer;
}

.gal-item:hover::before {
    /* Assombrit légèrement le fond au survol */
    background: linear-gradient(
        to bottom,
        rgba(0, 0, 0, 0.1) 0%,
        rgba(0, 0, 0, 0.5) 30%,
        rgba(0, 0, 0, 0.9) 100%
    );
}

.card-overlay {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    padding: 20px;
    color: white;
    z-index: 2;
    text-align: left;
    transition: transform 0.3s ease; /* Animation pour le texte */
}

.gal-item:hover .card-overlay {
    transform: translateY(-5px); /* Légèrement remonte le texte pour un effet dynamique */
}

.card-overlay h3 {
    margin-bottom: 10px;
    font-size: 1.5rem;
}

.card-overlay p {
    margin-bottom: 15px;
    font-size: 1rem;
}

.card-overlay .btn {
    background-color: rgba(255, 255, 255, 0.2);
    border-color: rgba(255, 255, 255, 0.3);
    color: white;
    padding: 8px 16px;
    border-radius: 4px;
    text-decoration: none;
    display: inline-block;
    transition: all 0.3s ease;
}

.card-overlay .btn:hover {
    background-color: rgba(255, 255, 255, 0.4);
    transform: translateY(-2px);
}

</style>