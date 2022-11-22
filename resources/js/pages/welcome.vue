<script setup>
import { onMounted } from 'vue';
import { InertiaLink, InertiaHead } from '@inertiajs/inertia-vue3';

const props = defineProps({
    greeting: String,
});
onMounted(() => {
    console.log("Welcome Page mounted");
});
function methodName() {
    props.greeting = new Date();
}
</script>

<template>
    <InertiaHead v-bind:title="'aaa'" />
    <h1 v-on:click="methodName">{{props.greeting }} Inertia.js</h1>
    <InertiaLink v-bind:href="route('fuga')">fuga</InertiaLink>
</template>
