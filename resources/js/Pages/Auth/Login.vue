<script setup>
import Checkbox from '@/Components/Checkbox.vue';
import GuestLayout from '@/Layouts/GuestLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';

defineProps({
    canResetPassword: {
        type: Boolean,
    },
    status: {
        type: String,
    },
});

const form = useForm({
    email: '',
    password: '',
    remember: false,
});

const submit = () => {
    form.post(route('login'), {
        onFinish: () => form.reset('password'),
    });
};
</script>

<template>
    <GuestLayout>
        <Head title="Log in" />
        <div class="container login-container">
            <div class="login-form">

        <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
            {{ status }}
        </div>

        <h2 class="text-center mb-4">Login to ConZone</h2>

        <form @submit.prevent="submit">
            <div class="mb-3">
                <InputLabel for="email" value="Email" />

                <TextInput
                    id="email"
                    type="email"
                    placeholder="Username/Email/Phone"
                    v-model="form.email"
                    required
                    autofocus
                    autocomplete="username"
                />

                <InputError :message="form.errors.email" />
            </div>

            <div class="mb-2">
                <InputLabel for="password" value="Password" />

                <TextInput
                    id="password"
                    type="password"
                    placeholder="Password"
                    v-model="form.password"
                    required
                    autocomplete="current-password"
                />

                <InputError :message="form.errors.password" />
            </div>

            <div class="pt-2 form-check">
                <label class="form-check-label">
                    <Checkbox name="remember" v-model:checked="form.remember" />
                    <span>Remember me</span>
                </label>
            </div>

            <div class="form-check-label pt-2">
                <PrimaryButton :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                    Log in
                </PrimaryButton>
                <div class="forgot-password py-2 text-center">
                    <Link
                        v-if="canResetPassword"
                        :href="route('password.request')"
                        class="text-primary">
                        Forgot your password?
                    </Link>
                </div>
            </div>
        </form>
        <hr>
        <div class="signup-link">
                <p>Don't have an account? <a href="/register" class="text-primary">Register</a></p>
        </div>
        </div>
    </div>
    <div class="min-vh-100"></div>
    </GuestLayout>
</template>

<style>

    .login-container {
        max-width: 500px;
        margin: 50px auto;
        transform: translate(0%, 15%);
    }

    .login-form {
        background-color: #fff;
        padding: 30px;
        border-radius: 15px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        padding-bottom: 5px;
    }

    .form-check-input {
        cursor: pointer;
    }

    .signup-link {
        text-align: center;
        margin-top: 20px;
    }

    [data-bs-theme="dark"] .login-form {
        background-color: #282c31;
    }

    .min-vh-100 {
        min-height: 12vh !important;
    }
</style>