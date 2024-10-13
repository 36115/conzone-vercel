<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import DeleteUserForm from './Partials/DeleteUserForm.vue';
import UpdatePasswordForm from './Partials/UpdatePasswordForm.vue';
import { Head } from '@inertiajs/vue3';

defineProps({
    mustVerifyEmail: {
        type: Boolean,
    },
    status: {
        type: String,
    },
});
</script>

<template>
    <Head title="Settings" />

    <AuthenticatedLayout>
        <template #header>
            <h2>Account Settings</h2>
            <nav class="nav nav-borders">
                <a class="nav-link active nav-settings" href="#">Security</a>
                <a class="nav-link nav-settings d-none" href="/">Text</a>
            </nav>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">

                <div class="p-4 sm:p-8 shadow sm:rounded-lg">
                    <UpdatePasswordForm class="max-w-xl" />
                </div>

                <div class="p-4 sm:p-8 shadow sm:rounded-lg">
                    <DeleteUserForm class="max-w-xl" />
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
<style>
    .nav-borders .nav-link.active {
        color: var(--bs-primary);
        border-radius: 1px !important;
        border-bottom-color: var(--bs-primary);
        border-bottom-width: 0.2rem;
        border-bottom-style: solid;
        margin-left: 1rem;
        margin-right: 1rem;
        transition: all 0.3s ease;
    }
    .nav-settings {
        border-bottom-width: 0.15rem;
        border-radius: 1px !important;
        transition: all 0.3s ease;
    }
    .nav-settings:hover {
        border-bottom-style: solid;
        transition: all 0.3s ease;
    }
</style>