<template>
    <MenuBar/>
    <h1> Salamoon Alaikoom From Laravel 10 & Inertia Js</h1>
</template>

<script setup>
import { router } from '@inertiajs/vue3'
import MenuBar from '../Components/MenuBar.vue';
router.on('navigate', (event) => {
    document.getElementsByTagName("title")[0].innerHTML ="Home Page";

});
</script>