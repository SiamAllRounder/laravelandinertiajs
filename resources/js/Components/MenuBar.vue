<template>
    <h1>Salam from menu bar</h1>
    <Link href="/">Home</Link> 
    
    <Link href="/product">Product</Link>
</template>

<script setup>
import { Link } from '@inertiajs/vue3'
</script>

<style scoped>
h1 {
    color: blue;
}
</style>