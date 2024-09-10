<script setup>
import Table from "@/Components/Table.vue";
import Modal from "@/Components/MOdal.vue";
import { ref } from "vue";
import { router } from "@inertiajs/vue3";

defineProps({
    items: Array,
});

let selected = ref({});

let show = ref(false);

const showModal = (item) => {
    show.value = true;
    selected.value = item;
};

const deletePost = () => {
    router.delete("/post/" + selected.value.id);
    show.value = false;
};
</script>

<template>
    <div class="mt-6">
        <div class="pl-4 text-lg tracking-wider">Posts Table</div>
        <Table :items="items" :headers="['id', 'title', 'username']">
            <template #action="{ item }">
                <a :href="'/post/' + item.id" class="text-blue-600 mr-2">
                    View
                </a>
                <button
                    type="submit"
                    @click="showModal(item)"
                    class="border border-red-700 py-0.5 px-2 text-sm text-red-700 hover:bg-red-700 hover:text-white rounded-md"
                >
                    Delete
                </button>
            </template>
        </Table>

        <Modal :show="show">
            <div class="p-10">
                <div>Are you sure you want to delete this post?</div>
                <div class="space-x-3 pt-6 flex">
                    <button
                        @click.prevent="show = false"
                        class="border rounded-md py-1 px-3 ml-auto bg-white"
                    >
                        Cancel
                    </button>
                    <button
                        @click.prevent="deletePost"
                        class="rounded-md py-1 px-3 bg-red-600 text-white"
                    >
                        Delete
                    </button>
                </div>
            </div>
        </Modal>
    </div>
</template>
