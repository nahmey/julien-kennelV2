<template>
  <Modal :title="application.nom" :closeModal="close_modal">
    <div class="mt-4">
      <section class="untree_co-section pt-0 pb-0">
        <div class="container">
          <div class="d-flex flex-wrap justify-content-between">
            <!-- Colonne de gauche : Images -->
            <div
              class="project-images col-12 col-md-6 p-3"
              @mouseover="showZoomIcon = true"
              @mouseleave="showZoomIcon = false"
            >
              <div class="zoom-icon-container">
                <ZoomIn class="zoom-icon" />
              </div>
              <CarouselRealisation
                :images="application.images"
                :autoPlay="false"
                :interval="5000"
              />
            </div>
            <!-- Colonne de droite : Description et fonctionnalités -->
            <div class="project-details col-12 col-md-6 p-3 d-flex flex-column">
              <span class="text-white txt-info-app" v-html="application.description_complete"></span>
            </div>
          </div>
        </div>
      </section>

      <section class="ftco-section pb-4">
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
import { ref, inject } from 'vue';
import Modal from '@/Components/Modal.vue';
import CarouselRealisation from '@/Components/CarouselRealisation.vue';
import { ZoomIn } from 'lucide-vue-next';

const props = defineProps(['application']);
const base_url = inject('base_url');
const close_modal = ref(false);
const showZoomIcon = ref(false);

const closeModal = () => {
  close_modal.value = true;
};
</script>


<style>
.project-images {
  position: relative;
  border-radius: 0 0 0 10px;
  display: flex;
  flex-direction: column;
  overflow: hidden;
}

/* Conteneur de l'icône de loupe */
.zoom-icon-container {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  display: flex;
  justify-content: center;
  align-items: center;
  z-index: 10;
  pointer-events: none;
  opacity: 0;
  transition: opacity 0.3s ease-in-out;
}

/* Style de l'icône de loupe */
.zoom-icon {
  width: 38px;
  height: 38px;
  color: white;
  background-color: rgba(0, 0, 0, 0.6);
  border-radius: 50%;
  padding: 8px;
  opacity: 0.9;
  transition: transform 0.2s ease, opacity 0.2s ease;
}

/* Afficher l'icône au survol */
.project-images:hover .zoom-icon-container {
  opacity: 1;
}

/* Effet de surbrillance au survol */
.zoom-icon:hover {
  opacity: 1;
  transform: scale(1.05);
}
</style>


