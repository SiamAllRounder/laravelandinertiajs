<template>
    <MenuBar />

    <h1>Salam From Product Page</h1>
</template>


<script setup>
import MenuBar from '../Components/MenuBar.vue';
import { router } from '@inertiajs/vue3'

router.on('navigate', (event) => {
  document.getElementsByTagName("title")[0].innerHTML ="Product Page";
});
</script>

<style scoped>
h1 {
    color: limegreen;
}
</style>