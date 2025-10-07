<template>

	<Navbar></Navbar>

	<div>
		<transition name="fade" mode="out-in">
			<slot />
		</transition>
	</div>

	<ScrollToTop />

	<Footer></Footer>
</template>

<script setup>
import Navbar from '@/Navbar.vue';
import Footer from '@/Footer.vue';
import ScrollToTop from '@/Components/ScrollToTop.vue';
</script>