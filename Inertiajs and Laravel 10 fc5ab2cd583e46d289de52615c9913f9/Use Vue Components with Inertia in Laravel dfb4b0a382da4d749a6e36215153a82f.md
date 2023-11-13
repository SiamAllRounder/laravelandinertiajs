# Use Vue Components with Inertia in Laravel

![Untitled](Use%20Vue%20Components%20with%20Inertia%20in%20Laravel%20dfb4b0a382da4d749a6e36215153a82f/Untitled.png)

![Untitled](Use%20Vue%20Components%20with%20Inertia%20in%20Laravel%20dfb4b0a382da4d749a6e36215153a82f/Untitled%201.png)

```jsx
<template>
    <MenuBar/>
    <h1> Salamoon Alaikoom From Laravel 10 & Inertia Js</h1>
</template>

<script setup>
import MenuBar from '../Components/MenuBar.vue';
</script>
```

`resources\js\Components\MenuBar.vue`

```jsx
<template>
    <h1>Salam from menu bar</h1>
</template>

<style scoped>

h1 {
    color: blue;
}
</style>
```

```jsx
<template>
    <MenuBar/>

    <h1>Salam From Product Page</h1>
</template>

<script setup>
import MenuBar from '../Components/MenuBar.vue';
</script>

<style scoped>
h1 {
    color: limegreen;
}
</style>
```