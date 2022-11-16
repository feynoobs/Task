<script>
export default {
    data() {
        return {
            greeting: "fuga fuga!",
        };
    },
};
</script>

<template>
    <p class="greeting">{{ greeting }}</p>
</template>

<style>
.greeting {
    color: red;
    font-weight: bold;
}
</style>
