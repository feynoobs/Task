<script setup>
import { onMounted } from "vue";

defineProps({
    greeting: String,
});
onMounted(() => {
    console.log("Welcome Page mounted");
    greeting = 'hage';
});
</script>
<template>
    <h1>{{ greeting }} Inertia.js</h1>
</template>
