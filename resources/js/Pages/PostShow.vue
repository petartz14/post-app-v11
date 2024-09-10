<script setup>
defineProps({
    post: Object,
});
</script>

<template>
    <div class="my-6">
        <div class="border relative rounded-md p-6">
            <div
                class="absolute bg-white px-2 tracking-wider text-lg -top-4 left-3"
            >
                Author Details
            </div>
            <div class="grid md:grid-cols-2">
                <div class="space-y-2">
                    <div>
                        Name:
                        <span class="font-semibold">{{ post.user.name }}</span>
                    </div>
                    <div>
                        Email:
                        <span class="font-semibold">{{ post.user.email }}</span>
                    </div>
                    <div>
                        Phone #:
                        <span class="font-semibold">{{ post.user.phone }}</span>
                    </div>
                    <div>
                        Website:
                        <span class="font-semibold">{{
                            post.user.website
                        }}</span>
                    </div>
                </div>
                <div class="space-y-2">
                    <div>
                        Address:
                        <div class="font-semibold">
                            {{ post.user.address.suite }},
                            {{ post.user.address.street }},
                            {{ post.user.address.city }},
                            {{ post.user.address.zipcode }}
                        </div>
                    </div>
                    <div>
                        Company:
                        <div class="font-semibold">
                            {{ post.user.company.name }}
                        </div>
                        <div class="font-semibold">
                            {{ post.user.company.catchPhrase }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="border relative rounded-md p-6 mt-6">
            <div
                class="absolute bg-white px-2 tracking-wider text-lg -top-4 left-3"
            >
                Post Details
            </div>
            <div class="space-y-2">
                <div>
                    Title:
                    <span class="font-semibold">{{ post.title }}</span>
                </div>
                <div>
                    Body:
                    <div class="font-semibold pl-5">{{ post.body }}</div>
                </div>
            </div>
        </div>
        <div class="mt-4">
            <a
                href="/"
                class="mt-4 border border-red-700 py-1 px-3 text-red-700 hover:bg-red-700 hover:text-white rounded-md"
            >
                Back
            </a>
        </div>
    </div>
</template>
