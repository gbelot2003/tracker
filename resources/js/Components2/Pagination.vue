<script setup>
import { Link } from '@inertiajs/vue3';
const props = defineProps({
    pages: Array,
});

</script>

<template>
    <nav class="pagination is-rounded" role="navigation" aria-label="pagination">
        <ul class="pagination-list">
            <li v-for="page in pages" :key="page.url">
                <Component :is="page.url ? 'Link' : 'span'" :href="page.url"  v-html="page.label"
                :class="{
                    'pagination-ellipsis': ! page.url,
                    'pagination-link is-current': page.active,
                    'pagination-link': page.url
                }"
                />
            </li>
        </ul>

    </nav>
</template>

