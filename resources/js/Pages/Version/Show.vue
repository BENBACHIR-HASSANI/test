<script setup>
import VersionElement from '../../composants/VersionElement.vue';

// import {Link} from '@inertiajs/vue3'
defineProps({
    version: Object,
});
</script>
<template>
<div>
  <VersionElement :version="version"/>
         
</div>
   
</template>
