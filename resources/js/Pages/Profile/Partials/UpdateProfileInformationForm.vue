<script setup>
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Link, useForm, usePage } from '@inertiajs/vue3';

defineProps({
    mustVerifyEmail: {
        type: Boolean,
    },
    status: {
        type: String,
    },
});

const user = usePage().props.auth.user;

const form = useForm({
    displayname: user.displayname,
    name: user.name,
    email: user.email,
    bio: user.bio,
});
</script>

<template>
    <section>
        <header>
            <h2>Profile Edit</h2>
        </header>

        <div @submit.prevent="form.patch(route('profile.update'))" class="container-xl px-4 mt-4">
            <div class="row">
                <div class="col-xl-4">
                    <!-- Profile picture card-->
                    <div class="card mb-4 mb-xl-0">
                        <div class="card-header">Profile Picture</div>
                        <div class="card-body text-center d-flex flex-column align-items-center"> 
                            <img class="img-account-profile rounded-circle mb-3" src="http://bootdey.com/img/Content/avatar/avatar1.png" alt="">
                            <div class="small font-italic text-muted mb-4">JPG or PNG no larger than 5 MB</div> 
                            <button class="btn btn-primary" type="button">Upload new image</button>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8">
                    <!-- Account details card-->
                    <div class="card mb-4">
                        <div class="card-header">Your Info</div>
                        <div class="card-body">
                            <form>

                                <!-- Form Group (Display Name)-->
                                <div class="mb-3">
                                    <InputLabel for="displayname" value="Display Name" />

                                    <TextInput
                                        id="dsname"
                                        type="text"
                                        v-model="form.displayname"
                                        autocomplete="dsname"
                                    />

                                    <InputError class="mt-2" :message="form.errors.displayname" />
                                </div>

                                <!-- Form Group (Username)-->
                                <div class="mb-3">
                                    <InputLabel for="name" value="Username" />
                                    <div class="input-group mb-3">
                                        <span class="input-group-text rounded-start-pill" id="handle">@</span>                                
                                        <input id="user" type="text" class="form-control rounded-end-pill fw-lighter" v-model="form.name" ref="input" required autocomplete="name" aria-describedby="handle"/>
                                    </div>

                                    <InputError class="mt-2" :message="form.errors.name" />
                                </div>
                                
                                <!-- Form Group (Email Address)-->
                                <div class="mb-3">
                                    <InputLabel for="email" value="Email" />

                                    <TextInput
                                        id="email"
                                        type="email"
                                        class="mt-1 block w-full"
                                        v-model="form.email"
                                        required
                                        autocomplete="email"
                                    />

                                    <InputError class="mt-2" :message="form.errors.email" />
                                </div>

                                <div v-if="mustVerifyEmail && user.email_verified_at === null">
                                    <p>
                                        Your email address is unverified.
                                        <Link
                                            :href="route('verification.send')"
                                            method="post"
                                            as="button"
                                            class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                            Click here to re-send the verification email.
                                        </Link>
                                    </p>

                                    <div
                                        v-show="status === 'verification-link-sent'"
                                        class="mt-2 font-medium text-sm text-green-600">
                                        A new verification link has been sent to your email address.
                                    </div>
                                </div>

                                <!-- Form Group (Bio)-->
                                <div class="mb-3">
                                    <InputLabel for="bio" value="Bio" />

                                    <textarea 
                                        id="bio" 
                                        type="text"
                                        v-model="form.bio"
                                        autocomplete="bio"
                                        class="form-control fw-lighter" 
                                        rows="5"
                                        >Passionate gamer and tech enthusiast.
                                    </textarea>

                                    <InputError class="mt-2" :message="form.errors.bio" />
                                </div>

                                <p v-if="form.recentlySuccessful" class="text-success"> Profile Saved Success!.</p>
                                <div class="flex items-center gap-4">
                                    <PrimaryButton :disabled="form.processing">Save Changes</PrimaryButton>

                                    <Transition
                                        enter-active-class="transition ease-in-out"
                                        enter-from-class="opacity-0"
                                        leave-active-class="transition ease-in-out"
                                        leave-to-class="opacity-0"
                                    >
                                    </Transition>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container-xl px-4 mt-4">
        
    </div>
</template>

<style>
        .img-account-profile {
            height: 10rem;
            width: 10rem;
        }
        .card-header {
            font-weight: 500;
            padding: 1rem 1.35rem;
            background-color: rgba(33, 40, 50, 0.03);
            border-bottom: 1px solid rgba(33, 40, 50, 0.125);
        }
</style>