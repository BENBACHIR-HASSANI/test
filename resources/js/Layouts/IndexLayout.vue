<script setup>

import { Link } from "@inertiajs/vue3";
</script>
<template>
    <Link href="/">PAGE 1</Link>&nbsp;
    <Link href="/show">PAGE 2</Link>

    <slot>Default</slot>
</template>
