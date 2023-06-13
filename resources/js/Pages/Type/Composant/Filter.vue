<script setup>

import { useForm } from "@inertiajs/vue3";


const props = defineProps({
    filters: Object,

});
const filterForm=useForm({
    name:props.filters.name ?? null,


})
 const filter=()=>{
    filterForm.get(
        route('type.index'),
        {
        preserveState: true,
        preserveScroll: true,
        }
    )

 }
  const clear=()=>{
    filterForm.name=null
    filter()
  

  }

</script>



<template>
     <form @submit.prevent="filter">
        <div class="my-2 flex sm:flex-row flex-col">
                    <!-- <div class="flex flex-row mb-1 sm:mb-0">
                     
                        <div class="relative">
                            <select v-model="filterForm.name" 
                                class="appearance-none h-full rounded-r border-t sm:rounded-r-none sm:border-r-0 border-r border-b block appearance-none w-full bg-white border-gray-400 text-gray-700 py-2 px-4 pr-8 leading-tight focus:outline-none focus:border-l focus:border-r focus:bg-white focus:border-gray-500"
                            >
                            <option disabled :value="null">Name</option>
                          
                            <option  v-for= "env_source in props.env_s"
                                :key="env_source.id" :value="env_source.id">{{ env_source.name }}</option>
                       
                            </select>
                         
                      </div>
                    </div> -->
                    <div class="block relative">
                        <span
                            class="h-full absolute inset-y-0 left-0 flex items-center pl-2"
                        >
                            <svg
                                viewBox="0 0 24 24"
                                class="h-4 w-4 fill-current text-gray-500"
                            >
                                <path
                                    d="M10 4a6 6 0 100 12 6 6 0 000-12zm-8 6a8 8 0 1114.32 4.906l5.387 5.387a1 1 0 01-1.414 1.414l-5.387-5.387A8 8 0 012 10z"
                                ></path>
                            </svg>
                        </span>
                        <input v-model="filterForm.name"
                            placeholder="Search"
                            class="appearance-none rounded-r rounded-l sm:rounded-l-none border border-gray-400 border-b block pl-8 pr-6 py-2 w-full bg-white text-sm placeholder-gray-400 text-gray-700 focus:bg-white focus:placeholder-gray-600 focus:text-gray-700 focus:outline-none"
                        />
                    </div>
                    <button type="submit" class="btn-normal">Filter</button>
                     <button type="reset" @click="clear" class="btn-primary">Clear</button>
                </div>
  </form>
        
</template>