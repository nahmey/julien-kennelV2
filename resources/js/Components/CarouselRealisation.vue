<template>
  <div class="carousel-container">
    <!-- Image principale (zoomable) -->
    <div
      class="carousel-main-slide"
      @mouseenter="pauseAutoPlay"
      @mouseleave="resumeAutoPlay"
      @click="toggleZoom"
    >
      <img
        :src="images[currentIndex]"
        :alt="'Slide ' + (currentIndex + 1)"
        class="carousel-main-image"
      />
    </div>

    <!-- Flèches de navigation (hors zoom) -->
    <button class="carousel-arrow left" @click="prevSlide">
      &#10094;
    </button>
    <button class="carousel-arrow right" @click="nextSlide">
      &#10095;
    </button>

    <!-- Miniatures -->
    <div class="carousel-thumbnails">
      <img
        v-for="(image, index) in images"
        :key="index"
        :src="image"
        :alt="'Thumbnail ' + (index + 1)"
        class="thumbnail"
        :class="{ 'active': index === currentIndex }"
        @click="goToSlide(index)"
      />
    </div>

    <!-- Lightbox avec navigation -->
    <div
      v-if="isZoomed"
      class="zoom-overlay"
      @click="toggleZoom"
      @keydown.esc="toggleZoom"
      tabindex="0"
    >
      <button class="zoom-arrow left" @click.stop="prevSlide">
        &#10094;
      </button>
      <img
        :src="images[currentIndex]"
        class="zoomed-image"
        @click.stop
      />
      <button class="zoom-arrow right" @click.stop="nextSlide">
        &#10095;
      </button>
      <div class="zoom-close" @click.stop="toggleZoom">
        &times;
      </div>
    </div>
  </div>
</template>

<script setup>
import { ref, onMounted, onUnmounted, onBeforeUnmount } from 'vue';

const props = defineProps({
  images: {
    type: Array,
    required: true,
  },
  autoPlay: {
    type: Boolean,
    default: false,
  },
  interval: {
    type: Number,
    default: 3000,
  },
});

const currentIndex = ref(0);
const isZoomed = ref(false);
let autoPlayInterval = null;

// Navigation
const nextSlide = () => {
  currentIndex.value = (currentIndex.value + 1) % props.images.length;
};

const prevSlide = () => {
  currentIndex.value =
    (currentIndex.value - 1 + props.images.length) % props.images.length;
};

// Aller à une image via miniature
const goToSlide = (index) => {
  currentIndex.value = index;
};

// Zoom
const toggleZoom = () => {
  isZoomed.value = !isZoomed.value;
  if (isZoomed.value) {
    document.addEventListener('keydown', handleKeyDown);
  } else {
    document.removeEventListener('keydown', handleKeyDown);
  }
};

// Navigation clavier en mode zoom
const handleKeyDown = (e) => {
  if (e.key === 'ArrowRight') {
    nextSlide();
  } else if (e.key === 'ArrowLeft') {
    prevSlide();
  } else if (e.key === 'Escape') {
    toggleZoom();
  }
};

// Auto-play
const startAutoPlay = () => {
  if (props.autoPlay) {
    autoPlayInterval = setInterval(nextSlide, props.interval);
  }
};

const stopAutoPlay = () => {
  if (autoPlayInterval) {
    clearInterval(autoPlayInterval);
  }
};

const pauseAutoPlay = () => stopAutoPlay();
const resumeAutoPlay = () => startAutoPlay();

// Cycle de vie
onMounted(startAutoPlay);
onUnmounted(stopAutoPlay);
onBeforeUnmount(() => {
  document.removeEventListener('keydown', handleKeyDown);
});
</script>

<style scoped>
.carousel-container {
  position: relative;
  width: 100%;
  max-width: 100%;
  margin: 0 auto;
}

.carousel-main-slide {
  position: relative;
  height: 400px;
  overflow: hidden;
  border-radius: 8px;
  cursor: pointer;
}

.carousel-main-image {
  width: 100%;
  height: 100%;
  object-fit: contain;
  transition: transform 0.3s ease;
}

.carousel-arrow {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  background: rgba(0, 0, 0, 0.5);
  color: white;
  border: none;
  padding: 10px 20px;
  cursor: pointer;
  font-size: 18px;
  border-radius: 50%;
  z-index: 10;
}

.carousel-arrow:hover {
  background: rgba(0, 0, 0, 0.8);
}

.carousel-arrow.left {
  left: 10px;
}

.carousel-arrow.right {
  right: 10px;
}

.carousel-thumbnails {
  display: flex;
  gap: 10px;
  margin-top: 10px;
  justify-content: center;
  flex-wrap: wrap;
}

.thumbnail {
  width: 80px;
  height: 60px;
  object-fit: cover;
  border-radius: 4px;
  cursor: pointer;
  opacity: 0.7;
  transition: opacity 0.3s, transform 0.3s, border 0.3s;
}

.thumbnail:hover {
  opacity: 1;
  transform: scale(1.05);
}

.thumbnail.active {
  opacity: 1;
  border: 2px solid #6e8efb;
}

/* Lightbox */
.zoom-overlay {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0.95);
  display: flex;
  justify-content: center;
  align-items: center;
  z-index: 1000;
}

.zoomed-image {
  max-width: 90%;
  max-height: 90%;
  object-fit: contain;
  border-radius: 4px;
  margin: 0 50px;
}

.zoom-arrow {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  background: rgba(0, 0, 0, 0.5);
  color: white;
  border: none;
  padding: 10px 20px;
  cursor: pointer;
  font-size: 24px;
  border-radius: 50%;
  z-index: 1001;
}

.zoom-arrow.left {
  left: 20px;
}

.zoom-arrow.right {
  right: 20px;
}

.zoom-arrow:hover {
  background: rgba(0, 0, 0, 0.8);
}

.zoom-close {
  position: absolute;
  top: 20px;
  right: 20px;
  background: none;
  border: none;
  color: white;
  font-size: 36px;
  cursor: pointer;
  z-index: 1001;
}
</style>
