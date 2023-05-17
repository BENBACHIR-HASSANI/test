<script setup>
import { Link } from "@inertiajs/vue3";
import Sider from "../composants/Sider.vue";
import Header from "../composants/Header.vue";
</script>
<template>
    <div class="flex bg-gray-100 min-h-screen">
    <!-- <body class="flex bg-gray-100 min-h-screen"> -->
        <!-- sider -->
  <Sider></Sider>
    <div class="flex-grow text-gray-800">
    <!-- <div class=" container flex-grow text-gray-800"> -->
        <!-- header -->
      <Header></Header>
      <!-- contenue -->
      <main class="p-6 sm:p-10 space-y-6">
        <slot>Default</slot>
      </main>
    </div>
  </div>
  </template>