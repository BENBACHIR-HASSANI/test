<template>
    <div class="relative px-4 py-10 bg-white shadow-lg sm:rounded-3xl sm:p-20">
       <div class="max-w-md mx-auto">
           <div>
               <h1 class="text-2xl font-semibold">Mot de passe oublié</h1>
           </div>
               <div class="divide-y divide-gray-200">
                   <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                       <form @submit.prevent="submitForm">
                       
                           <div class="flex flex-col">
                               <label for="email" class="leading-loose">Adresse mail</label>
                               <!-- v-model="form.email" -->
   
                               <input
                                   id="email"
                                   name="email"
                                   type="text"
                                   class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600"
                                   v-model="submitForm.email"
                               />
                               <!-- <p v-if="errors.email" class="text-red-500">{{ errors.email[0] }}</p> -->
   
                           </div>
                           <br/>
                           <div class="relative">
                               <button class="bg-purple-500 text-white rounded-md px-2 py-1" type="submit">
                                Réinitialiser
                               </button>
                           </div> 
                       </form>
                   </div>
               </div>
       </div>
   </div>
   </template>
   
   <script setup>
   import { useForm, Link } from "@inertiajs/vue3";
   
   
       const { data, post, processing, errors } = useForm({
         email: '',
       });
   
       const submitForm = () => {
         post(route('password.email')
       //   , {
       //     onSuccess: () => {
       //       // Redirect to a success page or show a success message
       //     },
       //   }
         );
       };
   
       // return {
       //   form: data,
       //   submitForm,
       //   processing,
       //   errors,
       // };
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
   
   <!-- <script>
   import AuthenticateLayout from "../../Layouts/AuthenticateLayout.vue";
   export default {
       layout: AuthenticateLayout ,
   };
   </script> -->