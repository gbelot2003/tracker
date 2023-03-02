<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
const props = defineProps({
    users: Object,
    filters: Object,
    can: Object,
});

</script>

<template>
    <AppLayout title="Profile">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                User Administration
            </h2>
        </template>

        <div>
            <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-100 dark:bg-gray-700 dark:text-gray-40">
                            <th scope="col" class="font-bold px-6 py-3 text-left">ID</th>
                            <th scope="col" class="font-bold px-6 py-3 text-left">Email</th>
                            <th scope="col" class="font-bold px-6 py-3 text-left">Name</th>
                            <th scope="col" class="font-bold px-6 py-3 text-left">Status</th>
                            <th scope="col" class="font-bold px-6 py-3">Edit</th>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700" v-for="user in users.data"
                                :key="user.id">
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

            </div>
        </div>

    </AppLayout>
</template>
