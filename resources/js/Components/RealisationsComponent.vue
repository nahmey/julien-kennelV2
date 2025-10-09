<template>
	<div class="gallery">
        <div v-for="(chunk, chunkIndex) in chunked" :key="chunkIndex" class="row mb-4">
            
            <!-- Première colonne de la paire -->
            <a @click.prevent="showApp(chunk[0])" class="col-12 col-md-7 mb-4 mb-md-0":class="{ 'order-md-2': chunkIndex % 2 === 1 }" v-if="chunk[0] && chunk[0].type === 'application'">
                <div v-if="chunk[0]" class="card border p-0 gal-item position-relative" :style="{ background: 'linear-gradient(to bottom, rgba(255, 255, 255, 0) 0%, rgba(0, 0, 0, 0.5) 100%),center / cover url('+base_url+'/'+chunk[0].image+')'}">
                    <span class="badge badge-danger position-absolute" style="top:10px; left:10px">Logiciel métier</span>
                    <div class="card-overlay">
                        <h3 class="font-weight-bold">{{ chunk[0].nom }}</h3>
                        <p class="mb-0">{{ chunk[0].description }}</p>

                        <span class="text-vert-fonce font-weight-bold">
                    		En savoir plus →
                    	</span>
                    </div>
                </div>
            </a>

            <a :href="chunk[0].url" target="_blank" class="col-12 col-md-7 mb-4 mb-md-0" :class="{ 'order-md-2': chunkIndex % 2 === 1 }" v-if="chunk[0] && chunk[0].type === 'site'">
                <div v-if="chunk[0]" class="card border p-0 gal-item position-relative" :style="{ background: 'linear-gradient(to bottom, rgba(255, 255, 255, 0) 0%, rgba(0, 0, 0, 0.5) 100%),center / cover url('+base_url+'/'+chunk[0].image+')'}">
                    <span class="badge badge-info position-absolute" style="top:10px; left:10px">Site web</span>
                    <div class="card-overlay">
                        <h3 class="font-weight-bold">{{ chunk[0].nom }}</h3>
                        <p class="mb-0">{{ chunk[0].description }}</p>
                        <span class="text-vert-fonce font-weight-bold">
                            Voir le projet → {{chunk[0].type}}
                        </span>
                    </div>
                </div>
            </a>


            <!-- Deuxième colonne de la paire -->
            <a @click.prevent="showApp(chunk[1])" class="col-12 col-md-5" :class="{ 'order-md-1': chunkIndex % 2 === 1 }" v-if="chunk[1] && chunk[1].type === 'application'">
                <div v-if="chunk[1]" class="card border p-0 gal-item position-relative" :style="{ background: 'linear-gradient(to bottom, rgba(255, 255, 255, 0) 0%, rgba(0, 0, 0, 0.5) 100%),center / cover url('+base_url+'/'+chunk[1].image+')'}">
                	<span class="badge badge-danger position-absolute" style="top:10px; left:10px">Logiciel métier</span>
                    <div class="card-overlay">
                        <h3 class="font-weight-bold">{{ chunk[1].nom }}</h3>
                        <p class="mb-0">{{ chunk[1].description }}</p>
                        <span class="text-vert-fonce font-weight-bold">
                    		En savoir plus →
                    	</span>
                    </div>
                </div>
            </a>

            <a :href="chunk[1].url" target="_blank" class="col-12 col-md-5" :class="{ 'order-md-1': chunkIndex % 2 === 1 }" v-if="chunk[1] && chunk[1].type === 'site'">
                <div v-if="chunk[1]" class="card border p-0 gal-item position-relative" :style="{ background: 'linear-gradient(to bottom, rgba(255, 255, 255, 0) 0%, rgba(0, 0, 0, 0.5) 100%),center / cover url('+base_url+'/'+chunk[1].image+')'}">
                    <span class="badge badge-info position-absolute" style="top:10px; left:10px">Site web</span>
                    <div class="card-overlay">
                        <h3 class="font-weight-bold">{{ chunk[1].nom }}</h3>
                        <p class="mb-0">{{ chunk[1].description }}</p>
                        <span class="text-vert-fonce font-weight-bold">
                            Voir le projet →
                        </span>
                    </div>
                </div>
            </a>
        </div>

        <ApplicationInfo
        v-if="show_modal && application"
        :application="application"
        @hideModal="hideModal"
        />

    </div>
</template>

<script setup>
import { inject, ref } from 'vue';
import ApplicationInfo from '@/Pages/ApplicationInfo.vue';

const base_url = inject('base_url');

const props = defineProps(['chunked']);

const show_modal = ref(false);
const application = ref([]);

const hideModal = () => {
    application.value = [];
    show_modal.value = false;
}

const showApp = (app) =>
{
    application.value = app;
    show_modal.value = true;
}

</script>