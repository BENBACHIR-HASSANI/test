<script setup>
// import {Link} from '@inertiajs/vue3'
defineProps({
    type: Object,
});
</script>
<template>
<span>
    {{ type.name }},
    {{ type.nextIndex }}
         
</span>
   
</template>
