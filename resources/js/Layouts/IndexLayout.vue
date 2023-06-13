<script setup>
import { Link } from "@inertiajs/vue3";
import Sider from "../composants/Sider.vue";
import Header from "../composants/Header.vue";
import {ref, onMounted} from "vue";
const showNotification = ref(false);

onMounted(() => {
    showNotification.value = true;
    setTimeout(() => (showNotification.value = false), 3000)
});

</script>
<template>
    

<div class=" flex min-h-screen bg-gray-100">

 
       
        <!-- sider -->
        <Sider></Sider>
        <div class="w-full h-full flex flex-col justify-between">
           
            <!-- header -->
            <Header></Header>
            <!-- contain -->
            <div class="fixed top-6 right-6 m-6" v-if="$page.props.flash.success && showNotification">
                <div :class="'bg-green-200 text-green-900 rounded-lg shadow-md p-6 pr-10'" style="min-width: 240px">
                    <Link href="../" class="opacity-75 cursor-pointer absolute top-0 right-0 py-2 px-3 hover:opacity-100">
                        ×
                    </Link>
                    <div  class="flex items-center">
                        {{ $page.props.flash.success }}
                    </div>
                </div>
            </div>
            <main class="max-w-full h-full flex relative overflow-y-hidden">
      <!-- Container -->
            <div class="h-full w-full m-12  flex flex-wrap items-start justify-start rounded-tl grid-flow-col auto-cols-max gap-4 ">
        <!-- Container -->
          
                <slot>Default</slot>
                </div>
            </main>
        </div>

    </div>
</template>