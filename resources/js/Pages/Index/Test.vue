<script setup>
import { Link } from "@inertiajs/vue3";
</script>
<template>
     <div class="w-96 h-full rounded-lg flex-shrink-0 flex-grow">
    <div class="flex flex-col space-y-6 md:space-y-0 md:flex-row justify-between">
          <div class="mr-6">
            <h1 class="text-4xl font-semibold mb-2">Test</h1>
          </div>
          
        </div>
  


       
        
            <div class="mt-12 overflow-x-auto dark:text-gray-100">
                <table class="w-full text-xs">
                    <thead class="dark:bg-gray-700">
                        <tr class="text-left">
                            <th class="p-3">Env d'integration</th>
                            <th class="p-3">Statut</th>
                            <th class="p-3">CSR ID</th>
                            <th class="p-3">Developpeur</th>
                          
                        </tr>
                    </thead>
                    <tbody>
                        <tr
                            class="border-b border-opacity-20 dark:border-gray-700 dark:bg-gray-900"
                        >
                            <td class="p-3">
                                <p>1</p>
                            </td>
                            <td class="p-3 ">
                                <span
                                    class="px-3 py-1 font-semibold rounded-md dark:bg-green-400 dark:text-gray-900"
                                >
                                    <span>Obselete</span>
                                </span>
                            </td>
                            
                            
                            
                            
                            <td class="p-3">
                                <p>12768</p>
                                
                            </td>
                            <td class="p-3">
                                <p>JCM</p>
                            </td>
                            
                           
                        </tr>
                      
                       
                    </tbody>
                </table>
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
