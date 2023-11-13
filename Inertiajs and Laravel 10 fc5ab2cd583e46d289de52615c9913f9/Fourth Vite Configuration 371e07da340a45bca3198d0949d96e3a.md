# Fourth Vite Configuration

![Untitled](Fourth%20Vite%20Configuration%20371e07da340a45bca3198d0949d96e3a/Untitled.png)

Search Query

```php
@vitejs/plugin-vue
```

[@vitejs/plugin-vue - Google Search](https://www.google.com/search?q=@vitejs/plugin-vue&rlz=1C1ONGR_enBD1061BD1061&oq=@vite&gs_lcrp=EgZjaHJvbWUqBwgAEAAYgAQyBwgAEAAYgAQyBggBEEUYOTIHCAIQABiABDIHCAMQABiABDIHCAQQABiABDIHCAUQABiABDIHCAYQABiABDIHCAcQABiABDIHCAgQABiABDIHCAkQABiABNIBCDQyODhqMGoxqAIAsAIA&sourceid=chrome&ie=UTF-8)

Step 1 install `vite js` plugin view

```bash
npm i @vitejs/plugin-vue
```

![Untitled](Fourth%20Vite%20Configuration%20371e07da340a45bca3198d0949d96e3a/Untitled%201.png)

[npm: @vitejs/plugin-vue](https://www.npmjs.com/package/@vitejs/plugin-vue)

[npm: @vitejs/plugin-vue](https://www.npmjs.com/package/@vitejs/plugin-vue)

Step 2 Add This Import On to `Vite` Config `Js` 

```bash
import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue'

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
});
```

Step 3  Add `vue`() On to `Vite` Config `Js` 

```bash
import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue'

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
        vue()
    ],
});
```

![Untitled](Fourth%20Vite%20Configuration%20371e07da340a45bca3198d0949d96e3a/Untitled%202.png)

![Untitled](Fourth%20Vite%20Configuration%20371e07da340a45bca3198d0949d96e3a/Untitled%203.png)

done now move onto build first `vue js` application