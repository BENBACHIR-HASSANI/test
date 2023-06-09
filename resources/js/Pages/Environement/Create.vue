<script setup>
import { useForm } from "@inertiajs/vue3";
const form = useForm({
    name: null,
    
});

// const create = () => form.post('/env_source');
const create = () => form.post(route('env_source.index'));
</script>
<template>
    <div class="h-screen w-full bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col my-8">

        <form @submit.prevent="create">
        
        
            <div class="-mx-3 md:flex mb-6">
                <div class="md:w-full px-3">
                    <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-first-name">
                    Name</label>
                    <input v-model="form.name" type=" text" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" />
                    <div class="text-red-400 text-xs italic mt-1" v-if="form.errors.name">{{ form.errors.name }}</div>
                </div>
            </div>
            
            <div>
                <button
                class=" mt-6 inline-flex px-5 py-3 text-white bg-blue-600 hover:bg-blue-700 focus:bg-blue-700 rounded-md mb-3"
                    type="Submit"
                >
                    Create
                </button>
            </div>
        </form>
    </div>
</template>

<script>
import IndexLayout from "../../Layouts/IndexLayout.vue";

export default {
    layout: IndexLayout,
};
</script>