<script setup>
// import {Link} from '@inertiajs/vue3'
defineProps({
    user: Object,

});
</script>
<template>
<span>
   
    {{ user.first_name }}
    {{ user.last_name }},
    {{ user.trigramme_user }},
    {{ user.email }},
    {{ user.stat_id }},
    {{ user.password }},
    {{ user.confirm_password }},
    {{ user.tel }},
    {{ user.role }}

    
         
</span>
   
</template>


