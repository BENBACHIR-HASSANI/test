<script setup>
import { useForm } from "@inertiajs/vue3";
const props =defineProps({
    env_source:Object,
});
const form = useForm({
    
    name: props.env_source.name,

});


// const update = () => form.put(`/env_source/${props.env_source.id}`);
const update = () => form.put(route('env_source.update',{env_source:props.env_source.id}));

</script>
<template>
    <form @submit.prevent="update">
        
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
