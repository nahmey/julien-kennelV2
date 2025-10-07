<template>
	<section class="untree_co-section">
		<!-- <div class="container"> -->
<!-- 			<div>
				Découvrez une sélection de projets que j’ai conçus : sites web, applications et logiciels métiers, tous pensés pour répondre à des besoins concrets et faciliter le travail au quotidien. Chaque réalisation est le fruit d’un accompagnement personnalisé, d’un développement sur mesure et d’une attention particulière portée à l’expérience utilisateur.
			</div> -->
			<ul class="nav" role="tablist">
				<li
				v-for="(tab, index) in tabs"
				:key="tab.id"
				class="nav-item"
				role="presentation"
				>
					<button
					:class="['btn btn-light mr-2 mr-md-4', { active: activeTab === tab.id }]"
					@click="setActiveTab(tab.id)"
					:id="`${tab.id}-tab`"
					type="button"
					role="tab"
					:aria-controls="tab.id"
					:aria-selected="activeTab === tab.id"
					>
						{{ tab.title }}
					</button>
				</li>
			</ul>
		<!-- </div> -->
	</section>
	<section class="untree_co-section">
		<!-- <div class="container"> -->
			<div class="tab-content">
				<!-- On encapsule tout dans un seul div -->
				<transition name="fade" mode="out-in">
					<div :key="activeTab">
						<div
						v-for="tab in tabs"
						:key="tab.id"
						v-show="activeTab === tab.id"
						:class="['tab-pane', 'fade', { 'show active': activeTab === tab.id }]"
						:id="tab.id"
						role="tabpanel"
						:aria-labelledby="`${tab.id}-tab`"
						>
							<slot :name="tab.id"></slot>
						</div>
					</div>
				</transition>
			</div>
		<!-- </div> -->
	</section>
</template>



<script setup>
import { ref } from 'vue';

const props = defineProps({
	tabs: {
		type: Array,
		required: true,
		validator: (tabs) => tabs.every(tab => tab.id && tab.title)
	},
		defaultTab: {
		type: String,
		default: ''
	}
});

const activeTab = ref(props.defaultTab || props.tabs[0]?.id);

const setActiveTab = (tabId) => {
	activeTab.value = tabId;
};
</script>