<script setup>
import { useForm } from "@inertiajs/vue3";
const form = useForm({
    prefix:null,
    name: null,
    
});

// const create = () => form.post('/version');
const create = () => form.post(route('version.index'));
</script>
<template>
    <div class="h-screen w-full bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col my-8">

    <form @submit.prevent="create">
      
        <!-- <div class="-mx-3 md:flex mb-6">
            <div class="md:w-full px-3">
                <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-password">
                Email
                </label>
                <input v-model="form.email" name="email" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 mb-3" id="grid-password" type="text" placeholder="jean.marc@dxc.com">
                <p class="text-red-400 text-xs italic mt-1" v-if="form.errors.email">{{form.errors.email}}</p>

            </div>
        </div> -->
        <div class="-mx-3 md:flex mb-6">
                <div class="md:w-full px-3">
                    <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-first-name">
                    Version Name</label>
                    <input v-model="form.name" type=" text" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" />
                    <div class="text-red-400 text-xs italic mt-1" v-if="form.errors.name">{{ form.errors.name }}</div>
                </div>
            </div>
            <div class="-mx-3 md:flex mb-6">
                <div class="md:w-full px-3">
                    <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-first-name">
                    Next Index</label>
                    <input v-model="form.prefix" type=" text" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" />
                    <div class="text-red-400 text-xs italic mt-1" v-if="form.errors.prefix">{{ form.errors.prefix }}</div>
                </div>
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
    </div>
</template>


<script>
import IndexLayout from "../../Layouts/IndexLayout.vue";

export default {
    layout: IndexLayout,
};
</script>
