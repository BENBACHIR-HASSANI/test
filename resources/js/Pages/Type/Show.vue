<script setup>
import TypeElement from '../../composants/TypeElement.vue';

// import {Link} from '@inertiajs/vue3'
defineProps({
    type: Object,
});
</script>
<template>
<div>
  <TypeElement :type="type"/>
         
</div>
   
</template>
