<script setup>
import { onMounted } from "vue";
import { Link } from "@inertiajs/inertia-vue3";

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
    <Link :href="route('fuga')">fuga</Link>
    a
</template>
