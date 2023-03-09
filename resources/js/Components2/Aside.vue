<script setup>
import { Link } from '@inertiajs/vue3'

</script>

<template>
    <aside class="menu grey-lighter">
        <p class="menu-label">
            General
        </p>
        <ul class="menu-list">
            <li><Link class="is-active" href="/dashboard">Dashboard</Link></li>
            <li><Link class="" href="/user/profile">Profile</Link></li>
        </ul>
        <p class="menu-label">
            Administration
        </p>
        <ul class="menu-list">
            <li><a>Team Settings</a></li>
            <li>
                <a class="">Manage Your Team</a>
                <ul>
                    <li><a>Members</a></li>
                    <li><a>Plugins</a></li>
                    <li><a>Add a member</a></li>
                </ul>
            </li>
            <li><a>Invitations</a></li>
            <li><a>Cloud Storage Environment Settings</a></li>
            <li><a>Authentication</a></li>
        </ul>
        <p class="menu-label">
            Transactions
        </p>
        <ul class="menu-list">
            <li><a>Payments</a></li>
            <li><a>Transfers</a></li>
            <li><a>Balance</a></li>
        </ul>
    </aside>
</template>
