# Use Inertia Link Component for Vue Js in Laravel

[Pages - Inertia.js](https://inertiajs.com/pages)

![Untitled](Use%20Inertia%20Link%20Component%20for%20Vue%20Js%20in%20Laravel%201367260c63164386a2061ff258796056/Untitled.png)

```jsx
<Link href="/">Home</Link>
<Link href="/about">About</Link>
<Link href="/contact">Contact</Link>
```

`resources\js\Components\MenuBar.vue`

```jsx
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
```

```jsx
<script setup>
import { Link } from '@inertiajs/vue3'
</script>
```

```jsx
<template>
<main>
<header>
<Link href="/">Home</Link>
<Link href="/about">About</Link>
<Link href="/contact">Contact</Link>
</header>
<article>
<slot />
</article>
</main>
</template>
```

![Untitled](Use%20Inertia%20Link%20Component%20for%20Vue%20Js%20in%20Laravel%201367260c63164386a2061ff258796056/Untitled%201.png)

![Untitled](Use%20Inertia%20Link%20Component%20for%20Vue%20Js%20in%20Laravel%201367260c63164386a2061ff258796056/Untitled%202.png)