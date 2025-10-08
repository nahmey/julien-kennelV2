<template>
  <transition name="fade">
    <button
      v-if="isVisible"
      @click="scrollToTop"
      class="scroll-to-top"
      aria-label="Revenir en haut"
    >
      <!-- <i class="fas fa-arrow-up"></i> -->
      <ArrowUp strokeWidth="3" />
    </button>
  </transition>
</template>

<script setup>
import { ArrowUp } from 'lucide-vue-next';
import { ref, onMounted, onBeforeUnmount } from 'vue';

const isVisible = ref(false);

const onScroll = () => {
  isVisible.value = window.scrollY > 200;
};

const scrollToTop = () => {
  window.scrollTo({ top: 0, behavior: 'smooth' });
};

onMounted(() => {
  window.addEventListener('scroll', onScroll);
});

onBeforeUnmount(() => {
  window.removeEventListener('scroll', onScroll);
});
</script>

<style scoped>

/* Transition fade */
.fade-enter-active,
.fade-leave-active {
  transition: opacity 0.4s ease, transform 0.3s ease;
}
.fade-enter-from,
.fade-leave-to {
  opacity: 0;
  transform: scale(0.9);
}
.fade-enter-to,
.fade-leave-from {
  opacity: 1;
  transform: scale(1);
}

.scroll-to-top {
  position: fixed;
  bottom: 1.5rem;
  right: 1.5rem;
  background-color: #99D98F;
  color: #fff;
  border: none;
  border-radius: 50%;
  width: 48px;
  height: 48px;
  font-size: 1.2rem;
  display: flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
  z-index: 9999;
  box-shadow: 0 2px 8px rgba(0, 0, 0, 0.2);
}
.scroll-to-top:hover {
  transform: scale(1.1);
}

@media (max-width: 768px) {
  .scroll-to-top {
    bottom: 1rem;
    right: 1rem;
  } 
}
</style>
