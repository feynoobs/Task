<script setup>
import { onMounted } from "vue";
import { Link } from "@inertiajs/inertia-vue3";

const props = defineProps({
    greeting: String,
});
onMounted(() => {
    console.log("Welcome Page mounted");
});
</script>
<template>
    <h1>{{ props.greeting }} Inertia.js</h1>
    <Link :href="route('fuga')">fuga</Link>
    a
</template>
