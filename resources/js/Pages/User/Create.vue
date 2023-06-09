<script setup>
import { useForm } from "@inertiajs/vue3";
const form = useForm({
    first_name: null,
    last_name: null,
    trigramme_user: null,
    email: null,
    stat_id: null,
    password: null,
    confirm_password: null,
    tel: null,
    role: null
    
});

// const create = () => form.post('/version');
const create = () => form.post(route('user.index'));
</script>
<template>
  
    <div class="relative h-screen w-full bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col my-8">
     
       <form @submit.prevent="create">
       <div class="-mx-3 md:flex mb-6">
       <div class="md:w-1/2 px-3 mb-6 md:mb-0">
         <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-first-name">
          First name
         </label>
         <input v-model="form.first_name" name="first_name" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" id="grid-first-name" type="text" placeholder="Jean">
         <p class="text-red-400 text-xs italic mt-1" v-if="form.errors.first_name">{{form.errors.first_name}}</p>
       </div>
       <div class="md:w-1/2 px-3">
         <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-last-name">
           Last name
         </label>
         <input v-model="form.last_name" name="last_name" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" id="grid-last-name" type="text" placeholder="Marc">
         <p class="text-red-400 text-xs italic mt-1" v-if="form.errors.last_name">{{form.errors.last_name}}</p>

       </div>
     </div>
     <div class="-mx-3 md:flex mb-6">
       <div class="md:w-full px-3">
         <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-password">
           Email
         </label>
         <input v-model="form.email" name="email" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 mb-3" id="grid-password" type="text" placeholder="jean.marc@dxc.com">
         <p class="text-red-400 text-xs italic mt-1" v-if="form.errors.email">{{form.errors.email}}</p>

       </div>
     </div>
     <div class="-mx-3 md:flex mb-6">
       <div class="md:w-1/2 px-3 mb-6 md:mb-0">
         <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-first-name">
          Password
         </label>
         <input v-model="form.password" name="password" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" id="grid-first-name" type="password" placeholder="****************">
         <p class="text-red-400 text-xs italic mt-1" v-if="form.errors.password">{{form.errors.password}}</p>
       </div>
       <div class="md:w-1/2 px-3">
         <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-last-name">
           Confirm password
         </label>
         <input v-model="form.confirm_password" name="confirm_password" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" id="grid-last-name" type="password" placeholder="****************">
         <p class="text-red-400 text-xs italic mt-1" v-if="form.errors.confirm_password">{{form.errors.confirm_password}}</p>
       </div>
     </div>
     <div class="-mx-3 md:flex mb-6">
       <div class="md:w-1/2 px-3 mb-6 md:mb-0">
         <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-first-name">
          Trigram
         </label>
         <input v-model="form.trigramme_user" name="trigramme_user" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" id="grid-first-name" type="text" placeholder="JMC">
         <p class="text-red-400 text-xs italic mt-1" v-if="form.errors.trigramme_user">{{form.errors.trigramme_user}}</p>

       </div>
       <div class="md:w-1/2 px-3">
         <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-last-name">
           Stat ID
         </label>
         <input v-model="form.stat_id" name="stat_id" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" id="grid-last-name" type="text" placeholder="">
         <p class="text-red-400 text-xs italic mt-1" v-if="form.errors.stat_id">{{form.errors.stat_id}}</p>

       </div>
     </div>
     <div class="-mx-3 md:flex mb-6">
       <div class="md:w-1/2 px-3 mb-6 md:mb-0">
           <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-state">
           Role
         </label>
         <input v-model="form.role" name="role" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" id="grid-last-name" type="text" placeholder="00 33 7 67 65 67 97">
         <p class="text-red-400 text-xs italic mt-1" v-if="form.errors.role">{{form.errors.role}}</p>
         <!-- <div class="relative">
           <select v-model="form.role" name="role" class="block appearance-none w-full bg-grey-lighter border border-grey-lighter text-grey-darker py-3 px-4 pr-8 rounded" id="grid-state">
             <option>Administrator</option>
             <option>Integration manager</option>
             <option>Developer</option>
           </select>
       </div> -->
       </div>
       <div class="md:w-1/2 px-3">
         <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-last-name">
           Phone number
         </label>
         <input v-model="form.tel" name="tel" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" id="grid-last-name" type="text" placeholder="00 33 7 67 65 67 97">
         <p class="text-red-400 text-xs italic mt-1" v-if="form.errors.tel">{{form.errors.tel}}</p>

       </div>
     </div>
     <button type="Submit" class=" mt-6 inline-flex px-5 py-3 text-white bg-blue-600 hover:bg-blue-700 focus:bg-blue-700 rounded-md mb-3">
       Create
     </button>
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
};
</script>