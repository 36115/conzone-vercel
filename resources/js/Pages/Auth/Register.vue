<script setup>
import Checkbox from '@/Components/Checkbox.vue';
import GuestLayout from '@/Layouts/GuestLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';

const form = useForm({
    name: '',
    email: '',
    password: '',
    password_confirmation: '',
});

const submit = () => {
    form.post(route('register'), {
        onFinish: () => form.reset('password', 'password_confirmation'),
    });
};
</script>

<template>
    <GuestLayout>
        <Head title="Register" />
        
        <div class="container register-container">
            <div class="register-form">

        <h2 class="text-center mb-4">Register</h2>
        <p class="text-muted text-center fw-lighter">Create your account and talk with your community.</p>

        <form @submit.prevent="submit">

            <div class="mb-3">
                <InputLabel for="name" value="Username" /> <span class="text-danger">*</span>

                <div class="input-group mb-3">
                    <span class="input-group-text rounded-start-pill" id="handle">@</span>                                
                    <input id="name" type="text" class="form-control rounded-end-pill fw-lighter" placeholder="Username only contain letters, numbers, and underscores" v-model="form.name" ref="input" required autocomplete="name" aria-describedby="handle"/>
                </div>

                <InputError :message="form.errors.name" />
            </div>

            <div class="mb-3">
                <InputLabel for="email" value="Email" /> <span class="text-danger">*</span>

                <TextInput
                    id="email"
                    type="email"
                    placeholder="Use Your Real Email Address"
                    v-model="form.email"
                    required
                    autocomplete="email"
                />

                <InputError :message="form.errors.email" />
            </div>

            <div class="mb-2">
                <InputLabel for="password" value="Password" /> <span class="text-danger">*</span>

                <TextInput
                    id="password"
                    type="password"
                    placeholder="At least 8 character"
                    v-model="form.password"
                    required
                    autocomplete="new-password"
                />

                <InputError :message="form.errors.password" />
            </div>

            <div class="mb-2">
                <InputLabel for="password_confirmation" value="Confirm Password" /> <span class="text-danger">*</span>

                <TextInput
                    id="password_confirmation"
                    type="password"
                    placeholder="Repeat your password"
                    v-model="form.password_confirmation"
                    required
                    autocomplete="new-password"
                />

                <InputError :message="form.errors.password_confirmation" />
            </div>

            <div class="pt-2 form-check">
                <label class="form-check-label">
                    <Checkbox name="agreeTerms" required />
                    <span>I agree to <a href="/terms" class="text-muted me-2">Terms</a>and <a href="/privacy-policy" class="text-muted me-2">Privacy Policy</a><span class="text-danger">*</span></span>
                </label>
            </div>

            <div class="form-check-label pt-2">
                <PrimaryButton :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                    Register
                </PrimaryButton>
            </div>
        </form>
        <hr>
        <div class="register-link">
                <p>Already have an account? <a href="/login" class="text-primary">Login</a></p>
        </div>
        </div>
    </div>
<div class="min-vh-100"></div>
    </GuestLayout>
</template>
    
<style>

    .register-container {
        max-width: 700px;
        margin: 10px auto;
        transform: translate(0%, 15%);
    }

    .register-form {
        background-color: #fff;
        padding: 30px;
        border-radius: 15px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        padding-bottom: 5px;
    }

    .form-check-input {
        cursor: pointer;
    }

    .register-link {
        text-align: center;
        margin-top: 20px;
    }

    [data-bs-theme="dark"] .register-form {
        background-color: #282c31;
    }

    .min-vh-100 {
        min-height: 12vh !important;
    }
</style>