<script setup>
import { computed } from 'vue';
import GuestLayout from '@/Layouts/GuestLayout.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import { Head, useForm } from '@inertiajs/vue3';

const props = defineProps({
    status: {
        type: String,
    },
});

const form = useForm({});

const submit = () => {
    form.post(route('verification.send'));
};

const verificationLinkSent = computed(() => props.status === 'verification-link-sent');
</script>

<template>
    <GuestLayout>
        <Head title="Verify Your Email" />

        <div class="container verify-container">
            <div class="verify-form">

        <h2 class="text-center">Verify Your Email Address</h2>
        <div class="text text-center m-3">
            <span class="bi bi-envelope-fill display-5 color-succes"></span>
        </div>

        <div class="text-muted text-center fw-lighter">
            Just Click on the link in that email to complete your registion.
            If you don't see it, you may need to <b>check your spam</b> 
            folder. <br><br> You can resent it, If you didn't receive your email.
        </div>

        <div class="mt-4 alert alert-success text text-center fw-lighter" v-if="verificationLinkSent">
            Sent verify link to your email again!.
        </div>

        <form @submit.prevent="submit">
            <div class="mt-4 flex items-center justify-between">
                <PrimaryButton :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                    Resend Verification Email
                </PrimaryButton>
            </div>
        </form>
        <div class="text text-center pt-2">
            <a
            :href="route('logout')"
            method="post"
            as="button"
            >Log Out
        </a>
        </div>
            </div>
        </div>
    </GuestLayout>
</template>

<style>

    .verify-container {
        max-width: 500px;
        margin: 100px auto;
        transform: translate(0%, 5%);
    }

    .verify-form {
        background-color: #fff;
        padding: 30px;
        border-radius: 15px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        padding-bottom: 15px;
    }

    .form-check-input {
        cursor: pointer;
    }

    .verify-link {
        text-align: center;
        margin-top: 20px;
    }

    [data-bs-theme="dark"] .verify-form {
        background-color: #343a40;
    }

    .min-vh-100 {
        min-height: 6vh !important;
    }
</style>