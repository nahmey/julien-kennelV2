<template>
	<div class="gallery">
        <div v-for="(chunk, chunkIndex) in chunkedSites" :key="chunkIndex" class="row mb-4">
            <!-- Première colonne de la paire -->
            <a :href="chunk[0].url" target="_blank" 
                class="col-12 col-md-7 mb-4 mb-md-0"
                :class="{ 'order-md-2': chunkIndex % 2 === 1 }"
            >
                <div
                    v-if="chunk[0]"
                    class="card border p-0 gal-item position-relative"
                    :style="{ background: 'center / cover url('+base_url + '/' + chunk[0].image+')'}"
                    style="height:350px"
                >
                <span class="badge badge-info position-absolute" style="top:10px; left:10px">Site web</span>
                    <div class="card-overlay">
                        <h3 class="font-weight-bold">{{ chunk[0].nom }}</h3>
                        <p class="mb-0">{{ chunk[0].description }}</p>
                        <!-- <button class="btn btn-light">Voir le projet →</button> -->
                        <span class="text-vert-fonce font-weight-bold">
                    		Voir le projet →
                    	</span>
                    </div>
                </div>
            </a>

            <!-- Deuxième colonne de la paire -->
            <a :href="chunk[1].url" target="_blank" 
                class="col-12 col-md-5"
                :class="{ 'order-md-1': chunkIndex % 2 === 1 }"
            >
                <div
                    v-if="chunk[1]"
                    class="card border p-0 gal-item position-relative"
                    :style="{ background: 'center / cover url('+base_url + '/' + chunk[1].image+')'}"
                    style="height:350px"
                >
                	<span class="badge badge-info position-absolute" style="top:10px; left:10px">Site web</span>
                    <div class="card-overlay">
                        <h3 class="font-weight-bold">{{ chunk[1].nom }}</h3>
                        <p class="mb-0">{{ chunk[1].description }}</p>
                        <span class="text-vert-fonce font-weight-bold">
                    		Voir le projet →
                    	</span>
                        <!-- <button class="btn btn-light">Voir le projet →</button> -->
                    </div>
                </div>
            </a>
        </div>
    </div>
</template>

<script setup>
import { inject } from 'vue';
const base_url = inject('base_url');
const props = defineProps(['chunkedSites']);
</script>