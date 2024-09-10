<script setup>
defineProps({
    items: Array,
    headers: Array,
});
</script>

<template>
    <div class="mt-6 flow-root">
        <div class="shadow-md">
            <div class="inline-block w-full align-middle overflow-auto">
                <table class="min-w-full border-separate border-spacing-0">
                    <thead>
                        <tr class="bg-gray-200">
                            <th
                                scope="col"
                                v-for="header in headers"
                                class="py-4 px-3 whitespace-nowrap text-left text-xs font-medium uppercase tracking-wide text-gray-500 backdrop-blur backdrop-filter"
                            >
                                {{ header }}
                            </th>
                            <th
                                scope="col"
                                class="relative py-3.5 pl-3 pr-4 sm:pr-0"
                            >
                                <span class="sr-only">Action</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="(item, index) in items">
                            <td
                                v-for="header in headers"
                                :key="index"
                                :class="[
                                    index !== items - 1
                                        ? 'border-b border-gray-200'
                                        : '',
                                    'p-3 text-sm text-gray-900',
                                ]"
                            >
                                <span>{{ item[header] }}</span>
                                <span>{{ item["user"][header] }}</span>
                            </td>
                            <td
                                :class="[
                                    index !== items - 1
                                        ? 'border-b border-gray-200'
                                        : '',
                                    'whitespace-nowrap p-3 text-sm text-gray-900',
                                ]"
                            >
                                <slot name="action" :item="item" />
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</template>
