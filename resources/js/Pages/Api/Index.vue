<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import ShowApi from "@/Components/ShowApi.vue";
import { Link, Head } from "@inertiajs/vue3";
import Article from "@/Components/Article.vue";
</script>

<template>
    <Head title="Articles" />

    <AuthenticatedLayout>
        <div class="py-12 flex justify-center">
            <ShowApi />
        </div>
    </AuthenticatedLayout>
</template>
