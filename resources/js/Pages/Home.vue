<script setup>
import Button from "@/Components/Button.vue";
import PostTable from "@/Components/PostTable.vue";
import UserTable from "@/Components/UserTable.vue";

import { router } from "@inertiajs/vue3";

defineProps({
    users: Array,
    posts: Array,
});

const importUserData = () => {
    router.post("/store-bulk-users");
};
const importPostData = () => {
    router.post("/store-bulk-posts");
};
</script>

<template>
    <div class="my-6 space-x-3">
        <Button @click.prevent="importUserData">Import User Data</Button>
        <Button @click.prevent="importPostData">Import Post Data</Button>
    </div>
    <UserTable :items="users" />
    <PostTable :items="posts" />
</template>
