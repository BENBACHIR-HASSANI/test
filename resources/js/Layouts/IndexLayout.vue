<script setup>
import { Link } from "@inertiajs/vue3";
import Sider from "../composants/Sider.vue";
import Header from "../composants/Header.vue";


</script>
<template>
    
<!-- 
<aside class="fixed left-0 top-0 z-10 h-screen w-[calc(3.73rem)] border-r border-gray-300/40 bg-white dark:bg-gray-900 dark:border-gray-700 hover:w-56 hover:shadow-2xl">
    
<div class="flex flex-col justify-between">

</div>
<div class="h-16 border-b border-gray-300 flex items-center">
    
</div>

</aside>


<main class="w-[calc(100%-3.73rem)] ml-auto">
    <div class="2xl:container mx-auto space-y-6">
        <div class="h-16 border-b border-gray-300/40 dark:border-gray-700">

        </div>

   
    <div class="px-4 lg:px-12">
    <div class="h-96 flex justify-center items-center rounded-2xl border border-dashed border-gray-300/40 dark:border-gray-700">
        <span class="text-gray-500 dark:text-gray-200">Content</span>
    </div>
    </div>
</div>
    <slot>Default</slot>

</main> -->
<div class=" flex min-h-screen bg-gray-100">

 
       
        <!-- sider -->
        <Sider></Sider>
        <div class="w-full h-full flex flex-col justify-between">
           
            <!-- header -->
            <Header></Header>
            <!-- contain -->
            <main class="max-w-full h-full flex relative overflow-y-hidden">
      <!-- Container -->
            <div class="h-full w-full m-12  flex flex-wrap items-start justify-start rounded-tl grid-flow-col auto-cols-max gap-4 ">
        <!-- Container -->
            <div class="fixed top-12 right-10 m-6" v-if="$page.props.flash.success">
                <div :class="'bg-green-200 text-green-900 rounded-lg shadow-md p-6 pr-10'" style="min-width: 240px">
                    <button class="opacity-75 cursor-pointer absolute top-0 right-0 py-2 px-3 hover:opacity-100">
                        ×
                    </button>
                    <div  class="flex items-center">
                        {{ $page.props.flash.success }}
                    </div>
                </div>
            </div>
                <slot>Default</slot>
                </div>
            </main>
        </div>

    </div>
</template>
