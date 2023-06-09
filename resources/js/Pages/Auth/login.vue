<template>
  <div class="relative px-4 py-10 bg-white shadow-lg sm:rounded-3xl sm:p-20">
    <div class="max-w-md mx-auto">
      <div>
        <h1 class="text-2xl font-semibold">Login</h1>
      </div>
      <form @submit.prevent="login">
        <div class="divide-y divide-gray-200">
          <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
            <div class="flex flex-col">
              <label for="email" class="leading-loose">Email</label>
              <input
                id="email"
                v-model="form.email"
                name="email"
                type="text"
                class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600"
              />

              <div class="text-red-400 text-xs mt-1 italic" v-if="form.errors.email">
                {{ form.errors.email }}
              </div>
             
            </div>

            <div class="flex flex-col">
              <label for="password" class="leading-loose">Password</label>
              <input
                id="password"
                v-model="form.password"
                name="password"
                type="password"
                class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600"
              />

              <div class="text-red-400 text-xs mt-1 italic" v-if="form.errors.password">
                {{ form.errors.password }}
              </div>
            </div>

            <div class="relative">
              <button class="bg-purple-500 text-white rounded-md px-2 py-1" type="submit">Submit</button>
            </div>

            <div class="flex mt-6 justify-center text-xs">
              <a class="text-blue-400 hover:text-blue-500" href="/forgotPassword">Forgot Password</a>
              <!-- <span class="mx-2 text-gray-300">/</span>
              <Link class="text-blue-400 hover:text-blue-500" href="/register">Register</Link> -->
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</template>

<script setup>
import { useForm, Link } from "@inertiajs/vue3";

const form = useForm({
  email: null,
  password: null,
})

const login = () => form.post(route("login.store"));

</script>

<script>
import AuthenticateLayout from "../../Layouts/AuthenticateLayout.vue";

export default {
  layout: AuthenticateLayout,

  props: {
    errors: Object,
  },
};
</script>
