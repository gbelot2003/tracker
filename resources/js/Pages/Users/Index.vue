<script setup>
import Pagination from "../../Components2/Pagination.vue"
import AppLayout from '@/Layouts/AppLayout3.vue';
import { router } from '@inertiajs/vue3'
import debounce from "lodash/debounce";
import { Link } from '@inertiajs/vue3';
import { ref, watch } from 'vue';


const props = defineProps({
    users: Object,
    filters: Object,
});

let search = ref(props.filters.search);

watch(
    search,
    debounce(function (value) {
        router.get(
            "/users",
            { search: value },
            { preserveState: true, replace: true }
        );
    }, 500)
);

</script>

<template>
    <AppLayout title="Profile">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                User Administration
            </h2>
        </template>

        <div>
            <div class="block">
                <div class="">
                    <div class="columns">
                        <div class="column"></div>
                        <div class="column field is-grouped">
                            <div class="control is-expanded">
                                <input v-model="search" class="input" type="text" placeholder="Search..." />
                            </div>
                        </div>
                    </div>
                    <Pagination :pages="users.meta.links" />
                    <div class="table-container">
                        <table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth">
                            <thead class="text-xs text-gray-800 uppercase bg-blue-200 dark:bg-gray-700 dark:text-gray-40">
                                <th scope="col" class="font-bold px-6 py-3 text-left">ID</th>
                                <th scope="col" class="font-bold px-6 py-3 text-left">Email</th>
                                <th scope="col" class="font-bold px-6 py-3 text-left">Name</th>
                                <th scope="col" class="font-bold px-6 py-3 text-left">Rol</th>
                                <th scope="col" class="font-bold px-6 py-3 text-left">Enterprice</th>
                                <th scope="col" class="font-bold px-6 py-3 text-left">Status</th>
                                <th scope="col" class="font-bold px-6 py-3">Edit</th>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700"
                                    v-for="user in users.data" :key="user.id">
                                    <td class="px-6 py-4 text-left">
                                        <div class="text-sm font-medium text-gray-900">
                                            {{ user.id }}
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-left">
                                        <div class="text-sm font-medium text-gray-900">
                                            {{ user.email }}
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-left">
                                        <div class="text-sm font-medium text-gray-900">
                                            {{ user.name }}
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-left">
                                        <div class="text-sm font-medium text-gray-900">
                                            rol
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-left">
                                        <div class="text-sm font-medium text-gray-900">
                                            Enterprice
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-left">
                                        <div class="text-sm font-medium text-gray-900">
                                            {{ user.status }}
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-left">
                                        <div class="text-sm font-medium text-gray-900">
                                            Edit
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                    <Pagination :pages="users.meta.links" />
                </div>

            </div>
        </div>

    </AppLayout>
</template>
