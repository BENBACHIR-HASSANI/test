<script setup>
import { Link } from "@inertiajs/vue3";

// import Header from "../composants/Header.vue";
</script>
<template>
    <div class="min-h-screen bg-gray-100">
        <div
            class="sidebar h-full min-h-screen w-[3.35rem] overflow-hidden border-r hover:w-56 hover:bg-white hover:shadow-lg"
        >
            <div class="flex h-screen flex-col justify-between pt-2 pb-6">
                <div>
                    <div class="w-max p-2.5">
                        <!-- <h3 class="text-3xl font-bold mb-12 ">Harp</h3> -->
                        <img
                            src="https://tailus.io/images/logo.svg"
                            class="w-32"
                            alt=""
                        />
                    </div>
                    <ul class="mt-0 space-y-2 tracking-wide">
                        <li class="min-w-max">
                            <Link
                                :href="route('dashboard')"
                                aria-label="dashboard"
                                class="relative flex items-center space-x-4 bg-gradient-to-r from-purple-300 to-purple-500 px-4 py-3 text-white"
                            >
                                <svg
                                    class="-ml-1 h-6 w-6"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                >
                                    <path
                                        d="M6 8a2 2 0 0 1 2-2h1a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2V8ZM6 15a2 2 0 0 1 2-2h1a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2v-1Z"
                                        class="fill-current text-purple-400 dark:fill-slate-600"
                                    ></path>
                                    <path
                                        d="M13 8a2 2 0 0 1 2-2h1a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2V8Z"
                                        class="fill-current text-purple-200 group-hover:text-purple-300"
                                    ></path>
                                    <path
                                        d="M13 15a2 2 0 0 1 2-2h1a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-1Z"
                                        class="fill-current group-hover:text-sky-300"
                                    ></path>
                                </svg>
                                <span class="-mr-1 font-medium">Dashboard</span>
                            </Link>
                        </li>
                        <li class="min-w-max">
                            <Link
                                :href="route('user.index')"
                                class="group flex items-center space-x-4 rounded-md px-4 py-3 text-gray-600"
                            >
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="h-5 w-5"
                                    viewBox="0 0 20 20"
                                    fill="currentColor"
                                >
                                    <!-- <path class="fill-current text-gray-300 group-hover:text-purple-300" d="M4 4a2 2 0 00-2 2v1h16V6a2 2 0 00-2-2H4z" /> -->
                                    <path
                                        class="fill-current text-gray-600 group-hover:text-purple-600"
                                        fill-rule="evenodd"
                                        d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z"
                                        clip-rule="evenodd"
                                    />
                                </svg>
                                <span class="group-hover:text-gray-700"
                                    >Users</span
                                >
                            </Link>
                        </li>
                        <li class="min-w-max">
                            <Link
                                :href="route('package')"
                                class="bg group flex items-center space-x-4 rounded-full px-4 py-3 text-gray-600"
                            >
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="h-5 w-5"
                                    viewBox="0 0 20 20"
                                    fill="currentColor"
                                >
                                    <path
                                        class="fill-current text-gray-300 group-hover:text-purple-300"
                                        fill-rule="evenodd"
                                        d="M2 6a2 2 0 012-2h4l2 2h4a2 2 0 012 2v1H8a3 3 0 00-3 3v1.5a1.5 1.5 0 01-3 0V6z"
                                        clip-rule="evenodd"
                                    />
                                    <path
                                        class="fill-current text-gray-600 group-hover:text-purple-600"
                                        d="M6 12a2 2 0 012-2h8a2 2 0 012 2v2a2 2 0 01-2 2H2h2a2 2 0 002-2v-2z"
                                    />
                                </svg>
                                <span class="group-hover:text-gray-700"
                                    >Package</span
                                >
                            </Link>
                            <div class="pt-2 pl-4">
                                <ul
                                    class="flex flex-col pl-2 text-gray-500 border-l border-gray-700"
                                >
                                    <li>
                                        <Link
                                            :href="route('type.index')"
                                            class="inline-block w-full px-4 py-2 text-xs rounded hover:bg-purple-600 hover:text-white focus:outline-none     "
                                            >Type</Link
                                        >
                                    </li>
                                    <li>
                                        <Link
                                            href="#"
                                            class="inline-block w-full px-4 py-2 text-xs rounded hover:bg-purple-600 hover:text-white focus:outline-none     "
                                            >Table</Link
                                        >
                                    </li>
                                    <li>
                                        <Link
                                        :href="route('version.index')"
                                            class="inline-block w-full px-4 py-2 text-xs rounded hover:bg-purple-600 hover:text-white focus:outline-none     "
                                            >Version</Link
                                        >
                                    </li>
                                    <li>
                                        <Link
                                        :href="route('env_source.index')"
                                            class="inline-block w-full px-4 py-2 text-xs rounded hover:bg-purple-600 hover:text-white focus:outline-none     "
                                            >Env Source</Link
                                        >
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="min-w-max">
                            <Link
                                :href="route('environement')"
                                class="group flex items-center space-x-4 rounded-md px-4 py-3 text-gray-600"
                            >
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="h-5 w-5"
                                    viewBox="0 0 20 20"
                                    fill="currentColor"
                                >
                                    <path
                                        class="fill-current text-gray-600 group-hover:text-purple-600"
                                        d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"
                                    />
                                    <path
                                        class="fill-current text-gray-300 group-hover:text-purple-300"
                                        d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"
                                    />
                                </svg>
                                <span class="group-hover:text-gray-700"
                                    >Environnement</span
                                >
                            </Link>
                        </li>
                        <li class="min-w-max">
                            <Link
                                :href="route('migration')"
                                class="group flex items-center space-x-4 rounded-md px-4 py-3 text-gray-600"
                            >
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="h-5 w-5"
                                    viewBox="0 0 20 20"
                                    fill="currentColor"
                                >
                                    <path
                                        class="fill-current text-gray-600 group-hover:text-purple-600"
                                        fill-rule="evenodd"
                                        d="M2 5a2 2 0 012-2h8a2 2 0 012 2v10a2 2 0 002 2H4a2 2 0 01-2-2V5zm3 1h6v4H5V6zm6 6H5v2h6v-2z"
                                        clip-rule="evenodd"
                                    />
                                    <path
                                        class="fill-current text-gray-300 group-hover:text-purple-300"
                                        d="M15 7h1a2 2 0 012 2v5.5a1.5 1.5 0 01-3 0V7z"
                                    />
                                </svg>
                                <span class="group-hover:text-gray-700"
                                    >Migration</span
                                >
                            </Link>
                        </li>
                        <li class="min-w-max">
                            <Link
                                :href="route('test')"
                                class="group flex items-center space-x-4 rounded-md px-4 py-3 text-gray-600"
                            >



             

                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="h-5 w-5"
                                    viewBox="0 0 20 20"
                                    fill="currentColor"
                                >
                                    
                                    <path
                                        class="fill-current text-gray-300 group-hover:text-purple-300"
                                        d="M21 16.811c0 .864-.933 1.405-1.683.977l-7.108-4.062a1.125 1.125 0 010-1.953l7.108-4.062A1.125 1.125 0 0121 8.688v8.123zM11.25 16.811c0 .864-.933 1.405-1.683.977l-7.108-4.062a1.125 1.125 0 010-1.953L9.567 7.71a1.125 1.125 0 011.683.977v8.123z" 
                                    />
                                </svg>
                                <span class="group-hover:text-gray-700"
                                    >Test</span
                                >
                            </Link>
                        </li>

                        
                       
                    </ul>
                </div>
                <div class="w-max -mb-3">
                    <Link
                        href="#"
                        class="group flex items-center space-x-4 rounded-md px-4 py-3 text-gray-600"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-5 w-5 group-hover:fill-purple-600"
                            viewBox="0 0 20 20"
                            fill="currentColor"
                        >
                            <path
                                fill-rule="evenodd"
                                d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z"
                                clip-rule="evenodd"
                            />
                        </svg>
                        <span class="group-hover:text-gray-700">Compte</span>
                    </Link>
                </div>
            </div>
        </div>
    </div>
</template>
