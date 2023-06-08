<script setup>
import { useForm } from "@inertiajs/vue3";
const form = useForm({
    name: null,
    
});

// const create = () => form.post('/env_source');
const create = () => form.post(route('env_source.index'));
</script>
<template>
    <form @submit.prevent="create">
      
       
        <div class="sm:col-span-3">
                <label 
        
                class="block text-sm font-medium leading-6 text-gray-900" >Name</label>
                <input v-model="form.name" type=" text" />
                <div v-if="form.errors.name">{{form.errors.name}}</div>
                

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
