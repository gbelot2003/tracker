<script setup>
import { Link } from '@inertiajs/vue3'
console.log(route().current())
</script>

<template>
    <aside class="menu grey-lighter">
        <p class="menu-label">
            Administration
        </p>
        <ul class="menu-list">
            <li>
                <Link :class="{ 'is-active': route().current('dashboard') }" href="/dashboard">Dashboard
                </Link>
            </li>
            <li>
                <Link :class="{ 'is-active': route().current('profile.show') }" href="user/profile">Profile</Link>
            </li>
            <li>
                <Link :class="{ 'is-active': route().current('users.index') }" href="/users">Users And Permissions</Link>
            </li>
        </ul>
    </aside>
</template>
