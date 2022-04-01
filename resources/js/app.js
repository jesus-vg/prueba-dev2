require("./bootstrap");

import Alpine from "alpinejs";

window.Alpine = Alpine;

Alpine.start();

// aqui importamos nuestras propias librerias
import { createApp } from "vue";

const app = createApp({
    /* root component options */
});

// aqui importamos nuestros componentes
app.component(
    "eliminar-vendedor",
    require("./components/vendedor/EliminarVendedor.vue").default
);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

app.mount("#app");
