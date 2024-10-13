<script setup>
import GuestLayout from '@/Layouts/GuestLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head, useForm } from '@inertiajs/vue3';

defineProps({
    status: {
        type: String,
    },
});

const form = useForm({
    email: '',
});

const submit = () => {
    form.post(route('password.email'));
};
</script>

<template>
    <GuestLayout>
        <Head title="Password Reset" />

        <div class="container reset-container">
            <div class="reset-form">

        <h2 class="text-center">Password Reset</h2>
        <p class="text-muted text-center fw-lighter">Enter your email to reset your password.</p>

        <div class="alert alert-danger text text-center">
            <span class="bi bi-exclamation-triangle-fill display-5"></span><br>
            If you didn't use real email, we can't recovery your account.
        </div>
        
        
        <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
            {{ status }}
        </div>

        <form @submit.prevent="submit">
            <div>
                <InputLabel for="email" value="Email" /> <span class="text-danger">*</span>

                <TextInput
                    id="email"
                    type="email"
                    placeholder="Email"
                    v-model="form.email"
                    required
                    autofocus
                    autocomplete="username"/>

                <InputError :message="form.errors.email" />
            </div>

            <div class="form-check-label mt-4 my-2">
                <PrimaryButton :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                    Submit
                </PrimaryButton>
            </div>
        </form>
    </div>
</div>
<div class="min-vh-100"></div>
    </GuestLayout>
</template>
 
<style>

    .reset-container {
        max-width: 500px;
        margin: 100px auto;
        transform: translate(0%, 5%);
    }

    .reset-form {
        background-color: #fff;
        padding: 30px;
        border-radius: 15px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        padding-bottom: 15px;
    }

    .form-check-input {
        cursor: pointer;
    }

    .reset-link {
        text-align: center;
        margin-top: 20px;
    }

    [data-bs-theme="dark"] .reset-form {
        background-color: #343a40;
    }

    .min-vh-100 {
        min-height: 6vh !important;
    }
</style>