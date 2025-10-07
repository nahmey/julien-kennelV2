<template>
  <div class="col-12 col-sm-6 col-md-6 col-lg-3">
    <div class="counter-wrap">
      <div class="counter text-vert-fonce">
        <span class="counter text-vert-fonce">+</span>
        <span ref="numberElement">{{ formattedNumber }}</span>
      </div>
      <span class="caption">{{ title }}</span>
    </div>
  </div>
</template>

<script setup>
import { ref, computed, onMounted, onUnmounted } from 'vue'

const props = defineProps({
  title: { type: String, required: true },
  number: { type: Number, required: true },
  duration: { type: Number, default: 2000 },
})

const numberElement = ref(null)
const displayedNumber = ref(0)
let observer = null

// Formate le nombre avec des espaces comme séparateurs
const formattedNumber = computed(() => {
  return new Intl.NumberFormat('fr-FR', {
    style: 'decimal',
    useGrouping: true,
    minimumFractionDigits: 0,
    maximumFractionDigits: 0,
  }).format(displayedNumber.value)
})

const animateNumber = (target, duration) => {
  const startTime = Date.now()
  const startNumber = 0

  const updateNumber = () => {
    const elapsed = Date.now() - startTime
    const progress = Math.min(elapsed / duration, 1)
    const easeProgress = 1 - Math.pow(1 - progress, 4) // Easing "out-quart"
    displayedNumber.value = Math.floor(startNumber + (target - startNumber) * easeProgress)

    if (progress < 1) {
      requestAnimationFrame(updateNumber)
    } else {
      displayedNumber.value = target
    }
  }

  requestAnimationFrame(updateNumber)
}

const setupObserver = () => {
  observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          animateNumber(props.number, props.duration)
          observer.unobserve(entry.target)
        }
      })
    },
    { threshold: 0.1 }
  )

  if (numberElement.value) {
    observer.observe(numberElement.value)
  }
}

onMounted(() => {
  setupObserver()
})

onUnmounted(() => {
  if (observer) observer.disconnect()
})
</script>

<style scoped>
/* Conserve ton CSS existant */
.counter {
  font-size: 2rem;
  font-weight: bold;
}

.text-vert-fonce {
  color: #2a5d4a; /* Exemple, adapte à ta couleur */
}

.caption {
  display: block;
  margin-top: 8px;
  font-size: 1rem;
}
</style>
