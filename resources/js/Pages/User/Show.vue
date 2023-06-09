<script setup>
import UsersElement from "../../composants/UsersElement.vue";

// import {Link} from '@inertiajs/vue3'
defineProps({
    user: Object,
});
</script>
<template>
<div>
  <UsersElement :user="user"/>
         
</div>
   
</template>
