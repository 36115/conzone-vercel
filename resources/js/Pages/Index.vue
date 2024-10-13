<script setup>

import GuestLayout from '@/Layouts/GuestLayout.vue';
import { Head } from '@inertiajs/vue3';

</script>

<template>
    
    <Head title="Home" />
    <GuestLayout>
            <div class="hero-section d-flex align-items-center justify-content-center text-white">
                <div class="hero-content text-center">
                    <h1 class="display-4 fw-bold">ConZone</h1>
                    <p class="lead mb-4">The ultimate gaming community for PC, console, and mobile gamers.</p>
                    <a :href="route('register')" class="btn btn-light btn-lg rounded-pill px-4">Join Now</a> <a href="/about" class="btn btn-outline-light btn-lg rounded-pill px-4">Learn More</a>
                </div>
            </div>

            <div class="container my-5">
                <div class="row">
                    <div class="col-lg-8 mx-auto text-center">
                        <h2 class="section-title">Why Join ConZone?</h2>
                        <p class="mb-4">ConZone is more than just a forum - it's a thriving community of gamers from all platforms. Whether you're a PC enthusiast, console loyalist, or mobile gamer, you'll find your place here.</p>
                    </div>
                </div>
            </div>

            <div class="bg-light py-5">
                <div class="container">
                    <h2 class="section-title text-center mb-5">Our Features</h2>
                    <div class="row g-4">
                        <div class="col-md-4">
                            <div class="card h-100 border-0 shadow-sm">
                                <div class="card-body text-center">
                                    <i class="bi bi-people-fill fs-1 text-primary mb-3"></i>
                                    <h5 class="card-title">Vibrant Community</h5>
                                    <p class="card-text">Connect with gamers from around the world and share your passion.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card h-100 border-0 shadow-sm">
                                <div class="card-body text-center">
                                    <i class="bi bi-newspaper fs-1 text-primary mb-3"></i>
                                    <h5 class="card-title">Latest Gaming News</h5>
                                    <p class="card-text">Stay updated with the newest releases, patches, and gaming events.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card h-100 border-0 shadow-sm">
                                <div class="card-body text-center">
                                    <i class="bi bi-controller fs-1 text-primary mb-3"></i>
                                    <h5 class="card-title">Multi-Platform Support</h5>
                                    <p class="card-text">Discuss games across PC, console, and mobile platforms all in one place.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container my-5">
                <div class="text-center">
                    <h2 class="section-title">Ready to join the conversation?</h2>
                    <p class="lead mb-4">Don't miss out on the latest discussions, news, and gaming insights. Join ConZone today and be part of our growing community!</p>
                    <a :href="route('register')" class="btn btn-primary btn-lg rounded-pill px-4">Register Now</a>
                    <p class="text my-4">Already have an account? <a :href="route('login')" class="text-primary">Login</a></p>
                </div>
            </div>
        </GuestLayout>

</template>

<style>
    .hero-section {
        background: url('https://images.unsplash.com/photo-1607799279861-4dd421887fb3?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D') no-repeat center center;
        background-size: cover;
        height: 650px;
        position: relative;
    }

    .hero-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(0, 0, 0, 0.6);
    }

    .hero-content {
        position: relative;
        z-index: 2;
    }

    .section-title {
        position: relative;
        display: inline-block;
        padding-bottom: 10px;
        margin-bottom: 20px;
    }

    .card {
        border-radius: 15px;
        transition: transform 0.3s ease-in-out;
    }

    .card:hover {
        transform: translateY(-5px);
    }

    .btn-lg {
        padding-left: 2rem;
        padding-right: 2rem;
    }

    @media (max-width: 767.98px) {
        .display-4 {
            font-size: 2.5rem;
        }
    }

    [data-bs-theme="dark"] .card {
        background-color: #2b3035;
        color: #fff;
    }

    [data-bs-theme="dark"] .text-dark {
        color: #f8f9fa !important;
    }

    [data-bs-theme="light"] .card {
        background-color: #f8f9fa;
        color: #000;
    }

    [data-bs-theme="light"] .bg-light {
        background-color: #f8f9fa !important;
    }

    [data-bs-theme="light"] .text-dark {
        color: #212529 !important;
    }
</style>