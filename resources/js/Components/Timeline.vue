<template>
	<div class="timeline-container mt-4">
		<div class="timeline-line"></div>

		<div 
		v-for="(item, index) in timelineItems" 
		:key="index"
		class="timeline-item"
		:class="{ 'left': index % 2 === 0, 'right': index % 2 === 1 }"
		:data-aos="index % 2 === 0 ? 'fade-right' : 'fade-left'"
		>
			<!-- Contenu à gauche pour les éléments pairs -->
			<div v-if="index % 2 === 0" class="timeline-content">
				<h3 class="timeline-title" :class="item.color">{{ item.title }}</h3>
				<p class="timeline-description"><span v-html="item.description"></span></p>
			</div>

			<!-- Zone centrale avec bulle année et connecteur -->
			<div class="timeline-center">
				<!-- Connecteur vers la gauche -->
				<div v-if="index % 2 === 0" class="timeline-connector left-connector"></div>

				<!-- Bulle année -->
				<div class="timeline-bubble" :class="(index % 2 === 0 ? 'm-50-left' : 'm-50-right') + ' '+ item.color">
					<!-- <span class="timeline-year">{{ item.year }}</span> -->
				</div>

				<!-- Connecteur vers la droite -->
				<div v-if="index % 2 === 1" class="timeline-connector right-connector"></div>
			</div>

			<!-- Contenu à droite pour les éléments impairs -->
			<div v-if="index % 2 === 1" class="timeline-content">
				<h3 class="timeline-title" :class="item.color">{{ item.title }}</h3>
				<p class="timeline-description"><span v-html="item.description"></span></p>
			</div>
		</div>
	</div>
</template>

<script>
import { ref, onMounted } from 'vue'

export default {
	name: 'TimelineComponent',
	setup() {
		const timelineItems = ref([
			{
				year: 'Qui suis-je ?',
				title: "Qui suis-je ?",
				description: '<p>Je suis Julien Kennel, développeur web freelance basé à Saverne dans le Bas-Rhin.</p><p>J’accompagne mes clients dans la création de sites internet et d’applications sur mesure, avec une vision centrée sur l’utilisateur final.</p>',
				color: 'black'
			},
			{
				year: 'Mon parcours',
				title: 'Mon parcours',
				description: "<p>J’ai découvert le développement web par passion, en commençant en autodidacte. Curieux de nature, je me suis rapidement formé aux technologies modernes comme Vue.js, Laravel, Inertia.js et PostgreSQL.</p><p>Au fil des projets, j’ai acquis une solide expérience dans la conception d’outils web performants et sur mesure, en collaborant avec des PME, des indépendants et des collectivités.</p>",
				color: 'black'
			},
			{
				year: 'Mon approche',
				title: 'Mon approche',
				description: "<p>Ma priorité, c’est de comprendre vos besoins métiers avant d’écrire la moindre ligne de code. Chaque projet débute par une phase d’écoute active et d’échange approfondi. Je travaille principalement en méthode agile : nous avançons étape par étape, avec des points réguliers pour ajuster, affiner et améliorer.</p><p> Vous êtes impliqué tout au long du processus, et vos retours sont essentiels à la réussite du projet. Mon objectif est simple : créer des outils qui vous ressemblent et qui facilitent réellement votre quotidien.</p>",
				color: 'black'
			},
			{
				year: 'Ma vision du développement',
				title: 'Ma vision du développement',
				description: '<p>Pour moi, le développement web ne se résume pas à créer un site ou une application : il s’agit de résoudre des problèmes concrets, de gagner du temps, et d’améliorer les processus. Un bon outil est invisible : il s’intègre naturellement dans votre façon de travailler.</p><p>Je conçois des solutions simples, robustes, évolutives, avec une attention particulière portée à l’ergonomie, la performance et la durabilité. Mon credo : le bon outil au bon endroit, pour les bonnes personnes.</p>',
				color: 'black'
			},
		])

		onMounted(() => {
			// AOS est déjà initialisé dans votre application principale
		})

		return {
			timelineItems
		}
	}
}
</script>

<style scoped>
.m-50-left{
margin-left: 50px;
}
.m-50-right{
margin-right: 50px;
}

@media (max-width: 768px) {
  .timeline-container {
    overflow-x: hidden; /* Empêche le débordement horizontal */
  }

  .m-50-left, .m-50-right {
    margin-left: 0;
    margin-right: 0;
  }

  .timeline-content {
    width: calc(100% - 80px); /* Ajustez la largeur pour éviter le débordement */
    margin-left: 55px !important;
    box-sizing: border-box; /* Inclut les marges et le padding dans la largeur */
  }

  .timeline-item {
    overflow: hidden; /* Empêche le contenu de dépasser */
    width: 100%;
  }

  /* Assurez-vous que les animations ne causent pas de débordement */
  [data-aos="fade-right"],
  [data-aos="fade-left"] {
    width: 100%;
    box-sizing: border-box;
  }

  /* Ajustez les styles pour les bulles et les connecteurs */
  .timeline-bubble {
    margin-left: 0;
    margin-right: 0;
  }

  .timeline-connector {
    display: none; /* Masquez les connecteurs sur mobile si nécessaire */
  }
}

.timeline-container {
position: relative;
max-width: 1200px;
margin: 0 auto;
padding: 40px 20px;
}

.timeline-line {
position: absolute;
left: 50%;
top: 0;
bottom: 0;
width: 2px;
/*background-color: #ddd;*/
background-image: linear-gradient(to bottom, white, #101010);
transform: translateX(-50%);
}

.timeline-item {
position: relative;
margin-bottom: 50px;
display: flex;
align-items: center;
width: 100%;
}

.timeline-item.left {
justify-content: flex-start;
}

.timeline-item.right {
justify-content: flex-end;
}

.timeline-content {
width: 35%;
padding: 25px;
background: #f8f9fa;
border-radius: 8px;
box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
position: relative;
}

/* Flèches pointant vers les bulles - plus éloignées */
.timeline-item.left .timeline-content::after {
content: '';
position: absolute;
top: 50%;
right: -12px;
width: 0;
height: 0;
border: 12px solid transparent;
border-left-color: #f8f9fa;
transform: translateY(-50%);
}

.timeline-item.right .timeline-content::after {
content: '';
position: absolute;
top: 50%;
left: -12px;
width: 0;
height: 0;
border: 12px solid transparent;
border-right-color: #f8f9fa;
transform: translateY(-50%);
}

.timeline-title {
font-size: 1.3rem;
font-weight: bold;
margin-bottom: 15px;
letter-spacing: 1px;
text-transform: uppercase;
}

.timeline-title.cyan {
color: #17a2b8;
}

.timeline-title.red {
color: #dc3545;
}

.timeline-title.orange {
color: #fd7e14;
}

.timeline-title.green {
color: #28a745;
}

.timeline-description {
color: #6c757d;
line-height: 1.6;
margin-bottom: 0;
font-size: 0.95rem;
}

.timeline-center {
position: absolute;
left: 50%;
transform: translateX(-50%);
display: flex;
align-items: center;
z-index: 2;
}

.timeline-bubble {
/*width: 80px;
height: 80px;
border-radius: 50%;
display: flex;
align-items: center;
justify-content: center;
border: 4px solid white;
box-shadow: 0 3px 15px rgba(0, 0, 0, 0.2);
flex-shrink: 0;*/
}


.timeline-year {
/*color: white;*/
font-weight: bold;
font-size: 1.1rem;
}

.timeline-connector {
height: 2px;
width: 60px;
background-image: repeating-linear-gradient(
to right,
#495057 0px,
#495057 6px,
transparent 6px,
transparent 12px
);
}

.left-connector {
margin-right: 10px;
}

.right-connector {
margin-left: 10px;
}

/* Points sur la ligne centrale */
.timeline-item::before {
content: '';
position: absolute;
left: 50%;
top: 50%;
width: 8px;
height: 8px;
background-color: #495057;
border-radius: 50%;
transform: translate(-50%, -50%);
z-index: 1;
}

/* Responsive Design */
@media (max-width: 768px) {
.timeline-line {
left: 40px;
}

.timeline-item {
flex-direction: row !important;
justify-content: flex-start !important;
margin-bottom: 60px;
}

.timeline-item.left,
.timeline-item.right {
flex-direction: row;
justify-content: flex-start;
}

.timeline-content {
width: calc(100% + 120px);
margin-left: 30px;
order: 2;
}

.timeline-center {
position: absolute;
left: 0;
transform: none;
order: 1;
}

.timeline-bubble {
width: 70px;
height: 70px;
}

.timeline-year {
font-size: 1rem;
}

.timeline-connector {
display: none;
}

.timeline-item::before {
left: 40px;
}

.timeline-item.left .timeline-content::after,
.timeline-item.right .timeline-content::after {
left: -12px;
right: auto;
border-left-color: transparent;
border-right-color: #f8f9fa;
}
}
</style>