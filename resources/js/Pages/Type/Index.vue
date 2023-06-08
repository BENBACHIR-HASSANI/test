<script setup>
import {Link} from '@inertiajs/vue3'
defineProps({
    type: Array,
});
</script>
<template>
    <div class="w-96 h-full rounded-lg  flex-grow">
                <div
                    class="flex flex-col space-y-6 md:space-y-0 md:flex-row justify-between"
                >
                    <div class="mr-6">
                        <h1 class="text-4xl font-semibold mb-2">Types</h1>
                    </div>
                    <div class="flex flex-wrap items-start justify-end -mb-3">
            <Link
                :href="route('type.create')"
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
                New Type
            </Link>
        </div>
                </div>

                <div class="my-2 flex sm:flex-row flex-col">
                    <div class="flex flex-row mb-1 sm:mb-0">
                        <div class="relative">
                            <select
                                class="appearance-none h-full rounded-l border block appearance-none w-full bg-white border-gray-400 text-gray-700 py-2 px-4 pr-8 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            >
                                <option>5</option>
                                <option>10</option>
                                <option>20</option>
                            </select>
                            <div
                                class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700"
                            >
                                <svg
                                    class="fill-current h-4 w-4"
                                    xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20"
                                >
                                    <path
                                        d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"
                                    />
                                </svg>
                            </div>
                        </div>
                        <div class="relative">
                            <select
                                class="appearance-none h-full rounded-r border-t sm:rounded-r-none sm:border-r-0 border-r border-b block appearance-none w-full bg-white border-gray-400 text-gray-700 py-2 px-4 pr-8 leading-tight focus:outline-none focus:border-l focus:border-r focus:bg-white focus:border-gray-500"
                            >
                                <option>All</option>
                                <option>Active</option>
                                <option>Inactive</option>
                            </select>
                            <div
                                class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700"
                            >
                                <svg
                                    class="fill-current h-4 w-4"
                                    xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20"
                                >
                                    <path
                                        d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"
                                    />
                                </svg>
                            </div>
                        </div>
                    </div>
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
                        <input
                            placeholder="Search"
                            class="appearance-none rounded-r rounded-l sm:rounded-l-none border border-gray-400 border-b block pl-8 pr-6 py-2 w-full bg-white text-sm placeholder-gray-400 text-gray-700 focus:bg-white focus:placeholder-gray-600 focus:text-gray-700 focus:outline-none"
                        />
                    </div>
                </div>
                <div class="overflow-hidden">
                    <table class="min-w-full">
                        <thead class="bg-white border-b">
                            <tr>
                                <th
                                    scope="col"
                                    class="text-sm font-medium text-gray-900 px-6 py-4 text-left"
                                >
                                    Type Name
                                </th>
                                <th
                                    scope="col"
                                    class="text-sm font-medium text-gray-900 px-6 py-4 text-left"
                                >
                                    Next Index
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
                                v-for="type in type"
                                :key="type.id" >
                                <td
                                    class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900"
                                >
                                    {{ type.name }}
                                </td>
                                <td
                                    class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900"
                                >
                                    {{ type.nextIndex }}
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
                                   <!-- <Link :href="`/type/${type.id}/edit`">
                                    Edite </Link> -->
                                    <Link :href="route('type.show',{type:type.id})"  as="button"  class="bg-purple-600 hover:bg-indigo-500 text-white font-medium p-2 rounded-md">
                                            Show </Link>
                                   <Link :href="route('type.edit',{type:type.id})"  class="bg-indigo-600 mx-3 hover:bg-indigo-500 text-white font-medium p-2 rounded-md">
                                    Edite </Link>
                                    
                                   <!-- <Link :href="`/type/${type.id}`" method="DELETE" as="button">
                                    Delete</Link> -->
                                   <Link :href="route('type.destroy',{type:type.id})" method="DELETE" as="button"  class="bg-red-600 hover:bg-indigo-500 text-white font-medium p-2 rounded-md">
                                    Delete</Link>
                                   
                                </td>
                            
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
      
</template>

<script>
import IndexLayout from "../../Layouts/IndexLayout.vue";
import TypeElement from '../../composants/TypeElement.vue';
export default {
    layout: IndexLayout,
    components: { TypeElement }
};
</script>