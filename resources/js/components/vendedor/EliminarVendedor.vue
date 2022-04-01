<template>
    <button class="px2 py-2" @click="eliminarVendedor()">Eliminar</button>
</template>

<script>
export default {
    props: {
        id: {
            type: Number,
            required: true,
        },
        nombre: {
            type: String,
            required: true,
        },
    },
};
</script>

<style></style>
