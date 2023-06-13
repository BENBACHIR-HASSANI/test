<script setup>
import {Link} from '@inertiajs/vue3'
import Pagination from "../../composants/Pagination.vue"
defineProps({
    user: Object,
});
</script>

<template>
    <div class="w-96 h-full rounded-lg  flex-grow">
     <div class="flex flex-col space-y-6 md:space-y-0 md:flex-row justify-between">
           <div class="mr-6">
             <h1 class="text-4xl font-semibold mb-2">Utilisateurs</h1>
           </div>
           <div class="flex flex-wrap items-start justify-end -mb-3">
             
             <Link :href="route('user.create')" class="inline-flex px-5 py-3 text-white bg-purple-600 hover:bg-purple-700 focus:bg-purple-700 rounded-md ml-6 mb-3">
               <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="flex-shrink-0 h-6 w-6 text-white -ml-1 mr-2">
                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
               </svg>
               Ajouter
             </Link>
           </div>
         </div>
         
         <div>
 
        
             <div class="my-2 flex sm:flex-row flex-col">
                 <div class="flex flex-row mb-1 sm:mb-0">
                     <div class="relative">
                         <select
                             class="appearance-none h-full rounded-l border block appearance-none w-full bg-white border-gray-400 text-gray-700 py-2 px-4 pr-8 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                             <option>5</option>
                             <option>10</option>
                             <option>20</option>
                         </select>
                         <div
                             class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                             <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                 <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                             </svg>
                         </div>
                     </div>
                     <div class="relative">
                         <select
                             class="appearance-none h-full rounded-r border-t sm:rounded-r-none sm:border-r-0 border-r border-b block appearance-none w-full bg-white border-gray-400 text-gray-700 py-2 px-4 pr-8 leading-tight focus:outline-none focus:border-l focus:border-r focus:bg-white focus:border-gray-500">
                             <option>All</option>
                             <option>Active</option>
                             <option>Inactive</option>
                         </select>
                         <div
                             class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                             <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                 <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                             </svg>
                         </div>
                     </div>
                 </div>
                 <div class="block relative">
                     <span class="h-full absolute inset-y-0 left-0 flex items-center pl-2">
                         <svg viewBox="0 0 24 24" class="h-4 w-4 fill-current text-gray-500">
                             <path
                                 d="M10 4a6 6 0 100 12 6 6 0 000-12zm-8 6a8 8 0 1114.32 4.906l5.387 5.387a1 1 0 01-1.414 1.414l-5.387-5.387A8 8 0 012 10z">
                             </path>
                         </svg>
                     </span>
                     <input placeholder="Search"
                         class="appearance-none rounded-r rounded-l sm:rounded-l-none border border-gray-400 border-b block pl-8 pr-6 py-2 w-full bg-white text-sm placeholder-gray-400 text-gray-700 focus:bg-white focus:placeholder-gray-600 focus:text-gray-700 focus:outline-none" />
                 </div>
             </div>
             <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                 <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                     <table class="min-w-full leading-normal">
                         <thead>
                             <tr>
                                 <th
                                    scope="col"
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                     Nom complet
                                 </th>
                                 <th
                                    scope="col"
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                     Adresse mail
                                 </th>
                                 <th
                                    scope="col"
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                     Trigramme
                                 </th>
                                 <th
                                    scope="col"
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                     Rôle
                                 </th>
                                 <th
                                    scope="col"
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                     Action
                                 </th>
                                 <!-- <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Created at
                                </th> -->
                                 <!-- <th
                                     class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                     Status
                                 </th> -->
                             </tr>
                         </thead>
                         <tbody>
                             <tr v-for="user in user.data" :key="user.id">
                                 <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                     <div class="flex items-center">
                                         <!-- <div class="flex-shrink-0 w-10 h-10">
                                             <img class="w-full h-full rounded-full"
                                                 src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2.2&w=160&h=160&q=80"
                                                 alt="" />
                                         </div> -->
                                         <div class="ml-3">
                                             <p class="text-gray-900 whitespace-no-wrap">
                                                {{ user.first_name }} {{ user.last_name }}
                                             </p>
                                         </div>
                                     </div>
                                 </td>
                                 <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                     <div class="flex items-center">
                                         
                                         <div class="ml-1">
                                             <p class="text-gray-900 whitespace-no-wrap">
                                                {{ user.email }} 
                                             </p>
                                         </div>
                                     </div>
                                 </td>
                                 <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                     <div class="flex items-center">
                                        
                                         <div class="ml-1">
                                             <p class="text-gray-900 whitespace-no-wrap">
                                                {{ user.trigramme_user }}
                                             </p>
                                         </div>
                                     </div>
                                 </td>
                                 <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                     <div class="flex items-center">
                                       
                                         <div class="ml-1">
                                             <p class="text-gray-900 whitespace-no-wrap">
                                                {{ user.role}} 
                                             </p>
                                         </div>
                                     </div>
                                 </td>
                                 
                                 
                                 <td
                                    class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 "
                                >
                                   <!-- <Link :href="`/user/${user.id}/edit`">
                                    Edite </Link> -->
                                    <Link :href="route('user.show',{user:user.id})" as="button" class="bg-purple-600 hover:bg-purple-500 text-white font-medium p-2 rounded-md">
                                    Afficher</Link>
                                   <Link :href="route('user.edit',{user:user.id})" as="button" class="bg-indigo-600 mx-3 hover:bg-indigo-500 text-white font-medium p-2 rounded-md">
                                    Modifier </Link>
                                    
                                   <!-- <Link :href="`/user/${user.id}`" method="DELETE" as="button">
                                    Delete</Link> -->
                                   <Link :href="route('user.destroy',{user:user.id})" method="DELETE" as="button"  class="bg-red-600 hover:bg-red-500 text-white font-medium p-2 rounded-md">
                                    Supprimer</Link>
                                   
                                </td>
                                 <!-- <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                     <p class="text-gray-900 whitespace-no-wrap">{{ user.role }}</p>
                                 </td>
                                 <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                     <p class="text-gray-900 whitespace-no-wrap">
                                        {{ user.created_at }}
                                     </p>
                                 </td> -->
                                 <!-- <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                     <span
                                         class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                         <span aria-hidden
                                             class="absolute inset-0 bg-green-200 opacity-50 rounded-full"></span>
                                         <span class="relative">Activo</span>
                                     </span>
                                 </td> -->
                             </tr>
                         </tbody>
                     </table>
                     <!-- <div
                         class="px-5 py-5 bg-white border-t flex flex-col xs:flex-row items-center xs:justify-between          ">
                         <span class="text-xs xs:text-sm text-gray-900">
                             Showing 1 to 4 of 50 Entries
                         </span>
                         <div class="inline-flex mt-2 xs:mt-0">
                             <button
                                 class="text-sm bg-gray-300 hover:bg-gray-400 text-gray-800 font-semibold py-2 px-4 rounded-l">
                                 Prev
                             </button>
                             <button
                                 class="text-sm bg-gray-300 hover:bg-gray-400 text-gray-800 font-semibold py-2 px-4 rounded-r">
                                 Next
                             </button>
                         </div>
                     </div> -->
                 </div>
             </div>
         </div>
               <!-- pagination -->
               <div v-if="user.data.length"
                 class="w-full flex justify-center mt-8 mb-8">
<Pagination :links="user.links"/>

</div>
     </div>
 
 
 </template>

<script>
import IndexLayout from "../../Layouts/IndexLayout.vue";
import UsersElement from "../../composants/UsersElement.vue";
export default {
    layout: IndexLayout,
    components: {UsersElement}
};
</script>