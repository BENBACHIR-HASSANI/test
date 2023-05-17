<script setup>
import { Link } from "@inertiajs/vue3";
</script>
<template>
    <div
        class="flex flex-col space-y-6 md:space-y-0 md:flex-row justify-between"
    >
        <div class="mr-6">
            <h1 class="text-4xl font-semibold mb-2">Micration</h1>
            <h2 class="text-gray-600 ml-0.5">Mobile UX/UI Design course</h2>
        </div>
        <div class="flex flex-wrap items-start justify-end -mb-3">
            <button
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
                Create new dashboard
            </button>
        </div>
    </div>
    <div>
        <!-- <div class="container mx-auto sm:p-4 dark:text-gray-100"> -->

        <div class="overflow-x-auto dark:text-gray-100">
            <table class="w-full text-xs">
                <thead class="dark:bg-gray-700">
                    <tr class="text-left">
                        <th class="p-3">Invoice #</th>
                        <th class="p-3">Client</th>
                        <th class="p-3">Issued</th>
                        <th class="p-3">Due</th>
                        <th class="p-3 text-right">Amount</th>
                        <th class="p-3">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr
                        class="border-b border-opacity-20 dark:border-gray-700 dark:bg-gray-900"
                    >
                        <td class="p-3">
                            <p>97412378923</p>
                        </td>
                        <td class="p-3">
                            <p>Microsoft Corporation</p>
                        </td>
                        <td class="p-3">
                            <p>14 Jan 2022</p>
                            <p class="dark:text-gray-400">Friday</p>
                        </td>
                        <td class="p-3">
                            <p>01 Feb 2022</p>
                            <p class="dark:text-gray-400">Tuesday</p>
                        </td>
                        <td class="p-3 text-right">
                            <p>$15,792</p>
                        </td>
                        <td class="p-3 text-right">
                            <span
                                class="px-3 py-1 font-semibold rounded-md dark:bg-violet-400 dark:text-gray-900"
                            >
                                <span>Pending</span>
                            </span>
                        </td>
                    </tr>
                    <tr
                        class="border-b border-opacity-20 dark:border-gray-700 dark:bg-gray-900"
                    >
                        <td class="p-3">
                            <p>97412378923</p>
                        </td>
                        <td class="p-3">
                            <p>Tesla Inc.</p>
                        </td>
                        <td class="p-3">
                            <p>14 Jan 2022</p>
                            <p class="dark:text-gray-400">Friday</p>
                        </td>
                        <td class="p-3">
                            <p>01 Feb 2022</p>
                            <p class="dark:text-gray-400">Tuesday</p>
                        </td>
                        <td class="p-3 text-right">
                            <p>$275</p>
                        </td>
                        <td class="p-3 text-right">
                            <span
                                class="px-3 py-1 font-semibold rounded-md dark:bg-violet-400 dark:text-gray-900"
                            >
                                <span>Pending</span>
                            </span>
                        </td>
                    </tr>
                    <tr
                        class="border-b border-opacity-20 dark:border-gray-700 dark:bg-gray-900"
                    >
                        <td class="p-3">
                            <p>97412378923</p>
                        </td>
                        <td class="p-3">
                            <p>Coca Cola co.</p>
                        </td>
                        <td class="p-3">
                            <p>14 Jan 2022</p>
                            <p class="dark:text-gray-400">Friday</p>
                        </td>
                        <td class="p-3">
                            <p>01 Feb 2022</p>
                            <p class="dark:text-gray-400">Tuesday</p>
                        </td>
                        <td class="p-3 text-right">
                            <p>$8,950,500</p>
                        </td>
                        <td class="p-3 text-right">
                            <span
                                class="px-3 py-1 font-semibold rounded-md dark:bg-violet-400 dark:text-gray-900"
                            >
                                <span>Pending</span>
                            </span>
                        </td>
                    </tr>
                    <tr
                        class="border-b border-opacity-20 dark:border-gray-700 dark:bg-gray-900"
                    >
                        <td class="p-3">
                            <p>97412378923</p>
                        </td>
                        <td class="p-3">
                            <p>Nvidia Corporation</p>
                        </td>
                        <td class="p-3">
                            <p>14 Jan 2022</p>
                            <p class="dark:text-gray-400">Friday</p>
                        </td>
                        <td class="p-3">
                            <p>01 Feb 2022</p>
                            <p class="dark:text-gray-400">Tuesday</p>
                        </td>
                        <td class="p-3 text-right">
                            <p>$98,218</p>
                        </td>
                        <td class="p-3 text-right">
                            <span
                                class="px-3 py-1 font-semibold rounded-md dark:bg-violet-400 dark:text-gray-900"
                            >
                                <span>Pending</span>
                            </span>
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
