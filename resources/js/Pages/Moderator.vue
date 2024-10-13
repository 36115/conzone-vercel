<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import "bootstrap/dist/css/bootstrap.min.css";
</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 p-6">
                    <div class="card p-6">
                        <h2 class="py-3 text-center">Moderator Pannel</h2>
                        <h3 class="text h-3 my-3">
                            <i class="bi bi-stars"></i> Manage Topic
                        </h3>
                    </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
