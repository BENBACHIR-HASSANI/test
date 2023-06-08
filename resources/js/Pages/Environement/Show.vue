<script setup>
import Env_SourceElement from '../../composants/Env_SourceElement.vue';

// import {Link} from '@inertiajs/vue3'
defineProps({
    env_source: Object,
});
</script>
<template>
<div>
  <Env_SourceElement :env_source="env_source"/>
         
</div>
   
</template>
