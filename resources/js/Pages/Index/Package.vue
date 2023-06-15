<script setup>
import { Link } from "@inertiajs/vue3";
</script>
<template>
    <div class="w-96 h-full rounded-lg flex-shrink-0 flex-grow">
        <div
            class="flex flex-col space-y-6 md:space-y-0 md:flex-row justify-between"
        >
            <div class="mr-6">
                <h1 class="text-4xl font-semibold mb-2">Package</h1>
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

        <div class="flex flex-wrap items-start justify-end -mb-3">
            <Link
                :href="route('forms')"
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

        <div class="mt-12 overflow-x-auto dark:text-gray-100">
            <table class="w-full text-xs">
                <thead class="dark:bg-gray-700">
                    <tr class="text-left">
                        <th class="p-3">Réf</th>
                        <th class="p-3">Nom</th>
                        <th class="p-3">Type</th>
                        <th class="p-3">QC</th>
                        <th class="p-3">Version</th>
                        <th class="p-3">CSR</th>
                        <th class="p-3">Date</th>
                        <th class="p-3">Env Source</th>
                        <th class="p-3">Projet</th>
                        <th class="p-3">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr
                        class="border-b border-opacity-20 dark:border-gray-700 dark:bg-gray-900"
                    >
                        <td class="p-3">
                            <p>1</p>
                        </td>
                        <td class="p-3">
                            <p>JCM</p>
                        </td>
                        <td class="p-3">
                            <p>DSN</p>
                        </td>
                        <td class="p-3">
                            <p>7898</p>
                        </td>
                        <td class="p-3">
                            <p>G2R18C00</p>
                        </td>
                        <td class="p-3">
                            <p>12768</p>
                        </td>
                        <td class="p-3">
                            <p>01 Feb 2022</p>
                        </td>
                        <td class="p-3">
                            <p>FHHD103</p>
                        </td>
                        <td class="p-3">
                            <p>FT_PAIE_000002_JMC_78945</p>
                        </td>
                        <td class="p-3">
                            <span
                                class="px-3 py-1 font-semibold rounded-md dark:bg-green-400 dark:text-gray-900"
                            >
                                <span>Obselete</span>
                            </span>
                        </td>
                    </tr>
                    <tr
                        class="border-b border-opacity-20 dark:border-gray-700 dark:bg-gray-900"
                    >
                        <td class="p-3">
                            <p>1</p>
                        </td>
                        <td class="p-3">
                            <p>JCM</p>
                        </td>
                        <td class="p-3">
                            <p>DSN</p>
                        </td>
                        <td class="p-3">
                            <p>7756</p>
                        </td>
                        <td class="p-3">
                            <p>G2R18C00</p>
                        </td>
                        <td class="p-3">
                            <p>12768</p>
                        </td>
                        <td class="p-3">
                            <p>01 Feb 2022</p>
                        </td>
                        <td class="p-3">
                            <p>FHHD103</p>
                        </td>
                        <td class="p-3">
                            <p>FT_PAIE_000002_JMC_78945</p>
                        </td>
                        <td class="p-3">
                            <span
                                class="px-3 py-1 font-semibold rounded-md dark:bg-violet-400 dark:text-gray-900"
                            >
                                <span>Generer</span>
                            </span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>

<script>
import IndexLayout from "../../Layouts/IndexLayout.vue";
export default {
    layout: IndexLayout,
};
</script>
