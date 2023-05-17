<script setup>
import { Link } from "@inertiajs/vue3";
import header from "../composants/AuthUi/header.vue"

</script>
<template>
    <!-- component -->
<div class="min-h-screen bg-gray-100 py-6 flex flex-col justify-center sm:py-12">
	<div class="relative py-3 sm:max-w-xl sm:mx-auto">
		<div
			class="absolute inset-0 bg-gradient-to-r from-purple-300   to-purple-500  shadow-lg transform -skew-y-6 sm:skew-y-0 sm:-rotate-6 sm:rounded-3xl">
		</div>
		<slot>Default</slot>
	</div>
</div>
        

    
             

      
</template>
