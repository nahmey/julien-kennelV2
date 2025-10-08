<template>
	<Modal :title="application.nom" :closeModal="close_modal">
		<div class="mt-4">
			<section class="untree_co-section pt-0 pb-0">
				<div class="container">
<!-- 					<div class="row mb-5 justify-content-center">
						<div class="col-lg-6 text-center">
							<h2 class="section-title text-center mb-3 text-white">{{application.nom}}</h2>
						</div>
					</div> -->

 					<div class="d-flex flex-wrap justify-content-between">
 						<!-- Colonne de gauche : Images -->
					    <div class="project-images col-12 col-md-6 p-3">
					    	<CarouselRealisation
					    	:images="application.images"
						    :autoPlay="false"
						    :interval="5000"
						  	/>
					    </div>

					    <!-- Colonne de droite : Description et fonctionnalités -->
					    <div class="project-details col-12 col-md-6 p-3 d-flex flex-column">
<!-- 					      <div class="project-tech mb-3 text-white">
					      	techno
					        <span v-for="tech in application.technologies" :key="tech" class="badge badge-secondary mr-1">
					          {{ tech }}
					        </span>
					      </div> -->
					      <span class="text-white" v-html="application.description_complete"></span>
					</div>

<!-- 						<div class="col-12 col-md-6">
							<img :src="base_url + '/' + application.image" class="img-fluid" />
						</div>

						<div class="col-12 col-md-6">
							<span v-html="application.description_complete"></span>
						</div> -->
					</div>

					<!-- {{application}} -->
				</div>
			</section>
			

		    <section class="ftco-section">
	    		<div class="col-md-12 text-right mt-4" @click.prevent="closeModal()">
		    		<button class="btn btn-light">
			    		<i class="fas fa-times-circle"></i> Fermer
			    	</button>
			    </div>
		    </section>
		</div>
	</Modal>
</template>

<script setup>
import { ref, inject, onMounted } from 'vue';
import Modal from '@/Components/Modal.vue';
import CarouselRealisation from '@/Components/CarouselRealisation.vue';


const props = defineProps(['application'])

const base_url = inject('base_url');
const close_modal = ref(false);

const closeModal = () => {
    close_modal.value = true;
}

</script>

<style>
.project-images {
  /*background: white;*/
  border-radius: 0 0 0 10px;
  display: flex;
  flex-direction: column;
}

.project-details {
  /*background: white;*/
  border-radius: 0 0 10px 0;
  padding: 1.5rem;
}

.carousel-item img {
  max-height: 300px;
  object-fit: contain;
  margin: 0 auto;
}

.img-thumbnail {
  border: 2px solid transparent;
}

.active-thumb {
  border-color: #6e8efb !important;
}

/*.nav-tabs {
  border-bottom: 1px solid #dee2e6;
}*/

/*.nav-tabs .nav-link {
  color: #495057;
  font-weight: 500;
  border: none;
  border-bottom: 2px solid transparent;
}

.nav-tabs .nav-link.active {
  color: #6e8efb;
  border-bottom-color: #6e8efb;
}*/

/*.tab-content {
  overflow-y: auto;
  max-height: 300px;
  padding-right: 10px;
}*/
</style>