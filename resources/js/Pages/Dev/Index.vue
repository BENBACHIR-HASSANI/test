<script setup>
import { Link } from "@inertiajs/vue3";
</script>

<template>
    <div>Index</div>
    <Link href="/hello">Show Page</Link>
</template>

<script>
import DevLayout from "../../Layouts/DevLayout.vue";

export default {
    layout:DevLayout,
};
</script>