<script setup>
import { Link } from "@inertiajs/vue3";
</script>
<template>
    <!-- <div class="h-screen bg-purple-500 py-20 px-3"> -->
        <div class="w-full flex items-center justify-center">
            <div class="bg-white w-1/2 mt-10 rounded-lg">
               <div class="flex  items-center justify-center pt-10 flex-col">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
  <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
</svg>

                <h1 class="text-gray-800 font-semibold text-xl mt-5" v-if="$page.props.user">{{ $page.props.user.first_name }} {{ $page.props.user.last_name }}</h1>
                <h1 class="ttext-gray-400 text-sm p-4" v-if="$page.props.user">{{ $page.props.user.trigramme_user }}</h1>
                <h1 class="text-gray-400 text-sm p-4 text-center" v-if="$page.props.user">{{ $page.props.user.email }}</h1>
              
        </div> 
        <div class="flex justify-between p-4">
            <div>
                <h1 class="text-xs uppercase text-gray-500" v-if="$page.props.user">{{ $page.props.user.role }}</h1>
                <h1 class="text-xs text-yellow-500">Harp Team</h1>
            </div>
            <Link href="../user/1/edit" class="text-xs text-gray-500 rounded-lg border-2 py-1 px-2 dark:hover:bg-purple-700 border-purple-500">Edit</Link>

        </div>


    </div>
        </div>



        <!-- </div> -->
</template>

<script>
import IndexLayout from "../../Layouts/IndexLayout.vue";
export default {
    layout: IndexLayout,
};
</script>
