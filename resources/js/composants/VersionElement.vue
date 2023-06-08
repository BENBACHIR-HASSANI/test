<script setup>
// import {Link} from '@inertiajs/vue3'
defineProps({
    version: Object,
});
</script>
<template>
<span>
    {{ version.name }},
    {{ version.prefix }}
         
</span>
   
</template>
