# CSR not reflect on head title but SSR ok problem solution done

[Events - Inertia.js](https://inertiajs.com/events)

```php
import { router } from '@inertiajs/vue3'
```

```php
router.on('navigate', (event) => {
console.log(Navigated to ${event.detail.page.url})
})
```

```php
router.on('navigate', (event) => {
  document.getElementsByTagName("title")[0].innerHTML ="Product Page";
});
```

```jsx
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
```

```jsx
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
```