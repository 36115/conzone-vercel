<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
</script>

<template>
    <Head title="Feeds" />

    <AuthenticatedLayout>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 p-6">
                    <div class="card p-6">
                        <h2 class="py-3 text-center">Feeds</h2>
                        <h3 class="text h-3 my-3">
                            <i class="bi bi-stars"></i> Newest Post
                        </h3>
                    </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
