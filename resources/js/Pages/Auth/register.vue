<script setup>
import { Link } from "@inertiajs/vue3";
</script>
<template>
    <div class="relative px-4 py-10 bg-white shadow-lg sm:rounded-3xl sm:p-20">
        <div class="max-w-md mx-auto">
            <div>
                <h1 class="text-2xl font-semibold">Enregistrer un nouveau compte</h1>
            </div>
            <form >
      <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="name">Nom</label>
        <input class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500"
          type="text" id="name" name="name" placeholder="John Doe">
      </div>
      <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="email">Adresse mail</label>
        <input class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500"
          type="email" id="email" name="email" placeholder="john@example.com">
      </div>
      <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="password">Mot de pase</label>
        <input class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500"
          type="password" id="password" name="password" placeholder="********">
      </div>
      <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="confirm-password">Confirmer le mot de passe</label>
        <input class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500"
          type="password" id="confirm-password" name="confirm-password" placeholder="********">
      </div>
      <button
      class="bg-purple-500 text-white rounded-md px-2 py-1" type="submit">Enregister</button>
    </form>
        </div>
    </div>
</template>

<script>
import AuthenticateLayout from "../../Layouts/AuthenticateLayout.vue";
export default {
    layout: AuthenticateLayout,
};
</script>
