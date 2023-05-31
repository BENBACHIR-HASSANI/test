<script setup>
import { useForm } from "@inertiajs/vue3";
const form = useForm({
    name: null,
});

const create = () => form.post(route("env.store"));
</script>
<template>
    <form @submit.prevent="create">
        <div class="sm:col-span-3">
            <label
                for="ENV"
                class="block text-sm font-medium leading-6 text-gray-900"
                >Environnement Source</label
            >
            <input type="text" v-model="form.name" />
        </div>
        <div>
            <button
                class="bg-indigo-600 text-white font-medium p-2 rounded-md"
                type="Submit"
            >
                Create
            </button>
        </div>
    </form>
</template>
<style scoped>
div {
    padding: 2px;
}
</style>
