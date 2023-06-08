<script setup>
import {  Link } from "@inertiajs/vue3";

</script>

<template>
  
  <header class="h-16 w-full flex items-center relative justify-end px-5 space-x-10  bg-gradient-to-r from-purple-300   to-purple-500 ">
    
    <div class="flex flex-shrink-0 items-center space-x-4 text-white">
        
        <!-- user name-->
   
       <Link :href="route('profil')" class="text-md font-medium " v-if="$page.props.user.name"><span>{{ $page.props.user.name }}</span></Link>
          
         
         
        
        
  
       
     
      <!--deconnexion-->
      <Link href="/logout" method="post" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-purple-100 dark:hover:bg-purple-700">
			<svg class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
				fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
				<path fill-rule="evenodd"
					d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z"
					clip-rule="evenodd"></path>
			</svg>
			<span class="flex-1 ml-3 whitespace-nowrap">Logout</span>
		</Link>
    	</div>
    </header>

    
</template>


