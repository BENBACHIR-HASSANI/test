<script setup>
import { Link } from "@inertiajs/vue3";
</script>
<template>
    <div>Index</div>
    <Link href="/show">Allez a la page 2</Link>
</template>
<script>
 import IndexLayout from "../../Layouts/IndexLayout.vue";
 export default {
  layout: IndexLayout,
}

</script>
