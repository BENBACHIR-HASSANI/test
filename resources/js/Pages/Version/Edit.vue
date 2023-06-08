<script setup>
import { useForm } from "@inertiajs/vue3";
const props =defineProps({
    version:Object,
});
const form = useForm({
    prefix: props.version.prefix,
    name: props.version.name,

});


// const update = () => form.put(`/version/${props.version.id}`);
const update = () => form.put(route('version.update',{version:props.version.id}));

</script>
<template>
    <form @submit.prevent="update">
        <div class="sm:col-span-3">
            <label class="block text-sm font-medium leading-6 text-gray-900"
                >NexIndex</label
            >
            <input v-model="form.prefix" type=" text" />
            <div v-if="form.errors.prefix">{{ form.errors.prefix }}</div>
        </div>
        <div class="sm:col-span-3">
            <label class="block text-sm font-medium leading-6 text-gray-900"
                >Name</label
            >
            <input v-model="form.name" type=" text" />
            <div v-if="form.errors.name">{{ form.errors.name }}</div>
        </div>

        <div>
            <button
                class="bg-indigo-600 text-white font-medium p-2 rounded-md"
                type="Submit"
            >
                Edit
            </button>
        </div>
    </form>
</template>
<style scoped>
div {
    padding: 2px;
}
</style>
