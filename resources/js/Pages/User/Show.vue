<script setup>
import { Link, useForm } from "@inertiajs/vue3";
const props =defineProps({
    user:Object,

});
const form = useForm({
    first_name: props.user.first_name,
    last_name: props.user.last_name,
    trigramme_user: props.user.trigramme_user,
    email: props.user.email,
    password: props.user.password,
    confirm_password: props.user.confirm_password,
    stat_id: props.user.stat_id,
    stat_id: props.user.stat_id,
    tel: props.user.tel,
    role: props.user.role,


});


// const update = () => form.put(`/version/${props.version.id}`);
const update = () => form.put(route('user.update',{user:props.user.id}));

</script>
<template>
    <div class="h-screen w-full bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col my-8">
     
       <form @submit.prevent="update">
       <div class="-mx-3 md:flex mb-6">
       <div class="md:w-1/2 px-3 mb-6 md:mb-0">
         <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-first-name">
          Prénom
         </label>
         <input v-model="form.first_name" name="first_name" class="appearance-none block w-full text-grey-darker rounded py-3 px-4 mb-3" id="grid-first-name" type="text" placeholder="Jean" disabled style="background-color: lightgrey;">
       </div>
       <div class="md:w-1/2 px-3">
         <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-last-name">
           Nom
         </label>
         <input v-model="form.last_name" name="last_name" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" id="grid-last-name" type="text" placeholder="Marc" disabled style="background-color: lightgrey;">

       </div>
     </div>
     <div class="-mx-3 md:flex mb-6">
       <div class="md:w-full px-3">
         <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-email">
           Adresse mail
         </label>
         <input v-model="form.email" name="email" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 mb-3" id="grid-password" type="text" placeholder="jean.marc@dxc.com" disabled style="background-color: lightgrey;">

       </div>
     </div>
     <!-- <div class="-mx-3 md:flex mb-6">
       <div class="md:w-1/2 px-3 mb-6 md:mb-0">
         <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-password">
          Password
         </label>
         <input v-model="form.password" name="password" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" id="grid-first-name" type="password" placeholder="****************" disabled style="background-color: lightgrey;">
       </div>
       <div class="md:w-1/2 px-3">
         <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-confirm-password">
           Confirm password
         </label>
         <input v-model="form.confirm_password" name="confirm_password" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" id="grid-last-name" type="password" placeholder="****************" disabled style="background-color: lightgrey;">
       </div>
     </div> -->
    
     <div class="-mx-3 md:flex mb-6">
       <div class="md:w-1/2 px-3 mb-6 md:mb-0">
         <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-trigramme-user">
          Trigramme
         </label>
         <input v-model="form.trigramme_user" name="trigramme_user" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" id="grid-first-name" type="text" placeholder="JMC" disabled style="background-color: lightgrey;">

       </div>
       <div class="md:w-1/2 px-3">
         <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-stat-id">
           Stat ID
         </label>
         <input v-model="form.stat_id" name="stat_id" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" id="grid-last-name" type="text" placeholder="" disabled style="background-color: lightgrey;">

       </div>
     </div>
     <div class="-mx-3 md:flex mb-6">
       <div class="md:w-1/2 px-3 mb-6 md:mb-0">
           <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-role">
           Rôle
         </label>
         <input v-model="form.role" name="role" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" id="grid-last-name" type="text" placeholder="" disabled style="background-color: lightgrey;">
         <!-- <div class="relative">
           <select v-model="form.role" name="role" class="block appearance-none w-full bg-grey-lighter border border-grey-lighter text-grey-darker py-3 px-4 pr-8 rounded" id="grid-state">
             <option>Administrator</option>
             <option>Integration manager</option>
             <option>Developer</option>
           </select>
       </div> -->
       </div>
       <div class="md:w-1/2 px-3">
         <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-tel">
          Numéro de téléphone
         </label>
         <input v-model="form.tel" name="tel" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" id="grid-last-name" type="text" placeholder="00 33 7 67 65 67 97" disabled style="background-color: lightgrey;">

       </div>
     </div>
     <div>
        <Link href="/user" type="Submit" class=" mt-3 inline-flex px-5 py-3 text-white bg-gray-600 hover:bg-gray-700 focus:bg-gray-700 rounded-md ml-6 mb-3"
>
          Annuler
        </Link>
      </div>
     <!-- <Link href="../user" class=" mt-6 inline-flex px-5 py-3 text-white bg-purple-600 hover:bg-purple-700 focus:bg-purple-700 rounded-md ml-6 mb-3">     
       Cancel
     </Link> -->
   </form>
   </div>
   </template>

<script>
import IndexLayout from "../../Layouts/IndexLayout.vue";

export default {
    layout: IndexLayout,
    components: { Link }
};
</script>
