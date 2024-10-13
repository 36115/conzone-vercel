<script setup>

import DropdownLink from '@/Components/DropdownLink.vue';

defineProps({
    canLogin: {
        type: Boolean,
    },
    canRegister: {
        type: Boolean,
    }
});

</script>

<template v-if="canLogin">
    
    <div v-if="$page.props.auth.user" class="dropdown">
        <a class="btn btn-primary rounded-pill btn-nav dropdown-toggle" id="userDropdown" data-bs-toggle="dropdown">
            <i class="bi bi-person me-2"></i>
            <div id="text-username" class="d-inline-flex flex-column">
                <span class="fw-bold">Hi, {{ $page.props.auth.user.displayname }}!</span>
                <small id="username" class="text-muted">@{{ $page.props.auth.user.name }}</small>
            </div>
        </a>
        <ul class="dropdown-menu" aria-labelledby="userDropdown">
            <div class="p-3 px-1 py-1 mx-2">
                <i class="bi bi-person-circle me-2"></i>
                <div id="text-username" class="d-inline-flex flex-column">
                    <span class="fw-bold">{{ $page.props.auth.user.displayname }}</span>
                    <small id="username" class="text-muted">@{{ $page.props.auth.user.name }}</small>
                    <a class="fw-light" :href="route('profile.edit')">Edit Profile</a>
                </div>
            </div>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/feeds">Feeds</a></li>
            <li><a class="dropdown-item" href="/forum/recent">Recent Posts</a></li>
            <li><a class="dropdown-item" href="/forum/unread">Unread & Updated Posts</a></li>
            <li><a class="dropdown-item" :href="route('settings')">Settings</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a>
                    <DropdownLink class="dropdown-item logout" :href="route('logout')" method="POST" as="button">
                        Log out
                    </DropdownLink>
            </a></li>
        </ul>
    </div>

    <template v-else>
        <a :href="route('login')"
            class="btn btn-primary rounded-pill btn-nav me-3 p-3">
            <i class="bi bi-box-arrow-in-right"></i> Login / Register
        </a>
    </template>
</template>