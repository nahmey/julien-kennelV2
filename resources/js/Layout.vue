<template>

	<Navbar></Navbar>

	<transition name="fade" mode="out-in">
		<slot />
	</transition>
</template>

<script setup>
import Navbar from '@/Navbar.vue';
</script>