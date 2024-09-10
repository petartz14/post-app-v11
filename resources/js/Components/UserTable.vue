<script setup>
import Table from "@/Components/Table.vue";

import { router } from "@inertiajs/vue3";

defineProps({
    items: Array,
});

const deleteUser = (item) => {
    router.delete("/user/" + item.id);
};
</script>

<template>
    <div>
        <div class="pl-4 text-lg tracking-wider">Users Table</div>
        <Table :items="items" :headers="['id', 'username', 'email']">
            <template #action="{ item }">
                <button
                    type="submit"
                    @click="deleteUser(item)"
                    class="border border-red-700 py-0.5 px-2 text-sm text-red-700 hover:bg-red-700 hover:text-white rounded-md"
                >
                    Delete
                </button>
            </template>
        </Table>
    </div>
</template>
