<template>
	<!-- subtle-digital-pattern.jpg -->
	<div class="hero" style="background: url('images/fond_noir_1.jpg') center/cover no-repeat fixed;">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-7">
					<div class="intro-wrap">
						<h1 class="mb-5 mt-5">
							<span class="d-block">Développeur <span class="text-vert-fonce">Web</span> spécialisé dans la création</span>
							<span class="typed-words text-vert-fonce">
								<span class="fixed-d ">D</span>{{ displayedText }}
							</span>
						</h1>
					</div>
				</div>
<!-- 				<div class="col-lg-5 d-none d-sm-block">
					<div class="slides">
						<img 
						v-for="(image, index) in images" 
						:key="index"
						:src="base_url + image.path"
						:alt="image.alt"
						:class="['img-fluid', { active: currentWordIndex === index }]"
						/>
					</div>
				</div> -->
			</div>
		</div>
	</div>
</template>

<script setup>
import { ref, onMounted, onUnmounted } from 'vue';

const props = defineProps({
	base_url: {
		type: String,
		default: ''
	}
});

const images = [
	{ path: '/images/computer_3_bis.jpg', alt: 'Image' },
	{ path: '/images/computer_1_bis.jpg', alt: 'Image' },
	{ path: '/images/computer_2_bis.jpg', alt: 'Image' }
];

// Mots sans le 'D' initial
const words = [
	"e logiciels métiers",
	"e sites web",
	"e base de données"
];

const displayedText = ref('');
const currentWordIndex = ref(0);
const charIndex = ref(0);
const isDeleting = ref(false);
let timeoutId = null;

const TYPE_SPEED = 80;
const WAIT_TIME = 4000;

const type = () => {
	const currentWord = words[currentWordIndex.value];

	if (!isDeleting.value && charIndex.value <= currentWord.length) {
		displayedText.value = currentWord.substring(0, charIndex.value + 1);
		charIndex.value++;
		timeoutId = setTimeout(type, TYPE_SPEED);
	} else if (!isDeleting.value && charIndex.value > currentWord.length) {
		timeoutId = setTimeout(() => {
		isDeleting.value = true;
		type();
	}, WAIT_TIME);
	} else if (isDeleting.value && charIndex.value > 0) {
		displayedText.value = currentWord.substring(0, charIndex.value - 1);
		charIndex.value--;
		timeoutId = setTimeout(type, TYPE_SPEED);
	} else if (isDeleting.value && charIndex.value <= 0) {
		isDeleting.value = false;
		currentWordIndex.value = (currentWordIndex.value + 1) % words.length;
		charIndex.value = 0;
		timeoutId = setTimeout(type, TYPE_SPEED);
	}
};

onMounted(() => {
	timeoutId = setTimeout(type, 1);
});

onUnmounted(() => {
	if (timeoutId) {
		clearTimeout(timeoutId);
	}
});
</script>

<style scoped>

.slides{
	background-color: black!important;
}




/*.hero {
position: relative;
}

.slides img {
display: none;
width: 100%;
height: auto;
transition: opacity 0.3s ease-in-out;
}

.slides img.active {
display: block;
}

.typed-words {
min-height: 1.5em;
}

.fixed-d {
display: inline-block;
}*/
</style>