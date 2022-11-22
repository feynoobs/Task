<script setup lang="ts">
import { ref, unref } from 'vue';
import { InertiaLink, InertiaHead } from '@inertiajs/inertia-vue3';
import axios from 'axios';
const email = ref<String>('');
const password = ref<String>('');
const keep = ref<Boolean>(false);

function login()
{
    axios.get('/sanctum/csrf-cookie')
        .then((res) => {
            axios.post(route('post'), {
                email:  unref(email),
                password: unref(password),
                keep: unref(keep),
            })
            .then((res) => {

            })
            .catch((err) => {
                console.log(err);
            })
        })
        .catch((err) => {
            console.log(err);
        });
}
</script>

<template>
    <form v-on:submit.prevent="login"  method="post">
        <div><input type="email" v-model="email" required placeholder="email"></div>
        <div><input type="text" v-model="password" required placeholder="password"></div>
        <div><input type="checkbox" v-model="keep"></div>
        <div><input type="submit" value="ログイン"></div>
    </form>
</template>

<style scoped>
</style>
