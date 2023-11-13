# Third Vue Js Part

Step 1 Move On To → `resources\js`

Step 2 Make A Directory Name Pages → `resources\js\Pages`

Also Make → `Components` Directory Or, etc.

Step 3 config → `app.js`

replace this

```php
import './bootstrap';
```

with this → ****Initialize the Inertia app → `Vue` 3 Selected**

resources\js\app.js Now

```php
import { createApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/vue3'

createInertiaApp({
  resolve: name => {
    const pages = import.meta.glob('./Pages/**/*.vue', { eager: true })
    return pages[`./Pages/${name}.vue`]
  },
  setup({ el, App, props, plugin }) {
    createApp({ render: () => h(App, props) })
      .use(plugin)
      .mount(el)
  },
})
```

Step 4 Install Core `Vue`

```php
npm i vue
```

Now Move On to Configuring `Vite` 

Search Query

`vue npm`

[vue npm - Google Search](https://www.google.com/search?q=vue+npm&rlz=1C1ONGR_enBD1061BD1061&oq=vue+npm&gs_lcrp=EgZjaHJvbWUyCQgAEEUYORiABDIHCAEQABiABDIHCAIQABiABDIHCAMQABiABDIHCAQQABiABDIHCAUQABiABDIHCAYQABiABDIHCAcQABiABDIHCAgQABiABDIHCAkQABiABNIBCDI1NjdqMGoxqAIAsAIA&sourceid=chrome&ie=UTF-8)

[npm: vue](https://www.npmjs.com/package/vue)