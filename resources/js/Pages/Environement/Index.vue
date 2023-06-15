<script setup>
import {Link} from '@inertiajs/vue3'
import Pagination from "../../composants/Pagination.vue"


defineProps({

    env_source: Object,
    filters:Object
});
</script>
<template>


   <div class="w-96 h-full rounded-lg  flex-grow">
  

                <div
                    class="flex flex-col space-y-6 md:space-y-0 md:flex-row justify-between"
                >
                    <div class="mr-6">
                        <h1 class="text-4xl font-semibold mb-2">Environnement source</h1>
                    </div>
                    <div class="flex flex-wrap items-start justify-end -mb-3">
            <Link
                :href="route('env_source.create')"
                class="inline-flex px-5 py-3 text-white bg-purple-600 hover:bg-purple-700 focus:bg-purple-700 rounded-md ml-6 mb-3"
            >
                <svg
                    aria-hidden="true"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                    class="flex-shrink-0 h-6 w-6 text-white -ml-1 mr-2"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M12 6v6m0 0v6m0-6h6m-6 0H6"
                    />
                </svg>
                Ajouter
            </Link>
        </div>
                </div>
                <Filter :filters="filters"/>

          
                <div class="overflow-hidden">
                    <table class="min-w-full">
                        <thead class="bg-white border-b">
                            <tr>
                                <th
                                    scope="col"
                                    class="text-sm font-medium text-gray-900 px-6 py-4 text-left"
                                >
                                    Nom
                                </th>
                              

                                <th
                                    scope="col"
                                    class="text-sm font-medium text-gray-900 px-6 py-4 text-left"
                                >
                                    Statut
                                </th>
                                <th
                                    scope="col"
                                    class="text-sm font-medium text-gray-900 px-6 py-4 text-left"
                                >
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr
                                class="bg-gray-100 border-b"
                                v-for="env_source in env_source.data"
                                :key="env_source.id" >
                                <td
                                    class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900"
                                >
                                    {{ env_source.name }}
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 text-sm">
                                    <span
                                        class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                        <span aria-hidden
                                            class="absolute inset-0 bg-green-300 opacity-50 rounded-full"></span>
                                        <span class="relative">Activo</span>
                                    </span>
                                </td>
                                <td
                                    class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 "
                                >
                                   <!-- <Link :href="`/env_source/${env_source.id}/edit`">
                                    Edite </Link> -->
                                    <!--<Link :href="route('env_source.show',{env_source:env_source.id})" as="button"  class="bg-purple-600 hover:bg-indigo-500 text-white font-medium p-2 rounded-md">
                                            Afficher </Link>-->
                                   <Link :href="route('env_source.edit',{env_source:env_source.id})"  class="bg-indigo-600 mx-3 hover:bg-indigo-500 text-white font-medium p-2 rounded-md">
                                    Modifier </Link>
                                    
                                   <!-- <Link :href="`/env_source/${env_source.id}`" method="DELETE" as="button">
                                    Delete</Link> -->
                                   <Link :href="route('env_source.destroy',{env_source:env_source.id})" method="DELETE" as="button"  class="bg-red-600 hover:red-500 text-white font-medium p-2 rounded-md">
                                    Supprimer</Link>
                                   
                                </td>
                            
                            </tr>
                        </tbody>
                    </table>
                </div>
          <!-- pagination -->
                <div v-if="env_source.data.length"
                 class="w-full flex justify-center mt-8 mb-48">
<Pagination :links="env_source.links"/>

</div>
            </div>
      
</template>

<script>
import IndexLayout from "../../Layouts/IndexLayout.vue";
import Env_SourceElement from '../../composants/Env_SourceElement.vue';

import Filter from './Composant/Filter.vue';

export default {
    layout: IndexLayout,
    components: { Env_SourceElement, Filter }
};
</script>