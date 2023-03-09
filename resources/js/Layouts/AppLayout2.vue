<script setup>
import { ref } from 'vue';
import { Head, Link, router } from '@inertiajs/vue3';
import ApplicationMark from '@/Components/ApplicationMark.vue';
import Banner from '@/Components/Banner.vue';
import Dropdown from '@/Components/Dropdown.vue';
import DropdownLink from '@/Components/DropdownLink.vue';
import NavLink from '@/Components/NavLink.vue';
import ResponsiveNavLink from '@/Components/ResponsiveNavLink.vue';
import Aside from '../Components2/Aside.vue';
import Block from '../Components2/Block.vue'
import Dropbox from '../Components2/Dropbox.vue'
import Content from '../Components2/Content.vue'
defineProps({
    title: String,
});

const showingNavigationDropdown = ref(false);

const switchToTeam = (team) => {
    router.put(route('current-team.update'), {
        team_id: team.id,
    }, {
        preserveState: false,
    });
};

const logout = () => {
    router.post(route('logout'));
};
</script>

<template>
    <div class="container">

        <Head :title="title" />

        <Banner />

        <div>
            <Dropbox></Dropbox>
        </div>
        <div class="notification is-primary">
            This container is <strong>centered</strong> on desktop and larger viewports.
        </div>

        <div class="columns">
            <div class="column is-one-fifth">
                <Aside></Aside>
            </div>

            <div class="column is-half">

                <Content></Content>
            </div>

            <div class="column">

                <Block></Block>
                <Block></Block>
                <Block></Block>
                <Block></Block>
                <Block></Block>
            </div>
        </div>
        <div>

        </div>

    </div>
    <footer class="footer">
        <div class="content has-text-centered">
            <p>
                <strong>Bulma</strong> by <a href="https://jgthms.com">Jeremy Thomas</a>. The source code is licensed
                <a href="http://opensource.org/licenses/mit-license.php">MIT</a>. The website content
                is licensed <a href="http://creativecommons.org/licenses/by-nc-sa/4.0/">CC BY NC SA 4.0</a>.
            </p>
        </div>
    </footer>
</template>
