<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                See here all posts created by You
            </h2>
        </template>
        <div class="py-12">
            <div class="max-w-7xl mx-auto px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg sm:p-6 lg:p-8">
                    <div v-if="posts.data.length > 0">
                        <div class="flex align-center">
                            <div class="flex-grow">
                                <div v-if="$page.flash.success" class="mr-4">
                                    <Alert title="Success!">{{ $page.flash.success }}</Alert>
                                </div>
                                <div v-if="$page.flash.error" class="mr-4">
                                    <Alert title="Error!" color="red">{{ $page.flash.error }}</Alert>
                                </div>
                            </div>
                            <div class="">
                                <inertia-link href="/admin/posts/create">
                                    <Button class="mt-1">New Post</Button>
                                </inertia-link>
                            </div>
                        </div>
                        <div class="mt-3">
                            <Table :posts="posts.data" :ordering="posts.ordering" />
                        </div>
                        <div class="mt-2 flex justify-center">
                            <Pagination :pagination="posts.meta" :ordering="posts.ordering" />
                        </div>
                    </div>
                    <div v-else class="flex justify-center align-center">
                        <div>
                            <div class="text-3xl color-gray-400 m-4">You haven't published any posts yet.</div>
                            <div class="text-center">
                                <inertia-link href="/admin/posts/create">
                                    <Button class="text-base">Create now a great one!</Button>
                                </inertia-link>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
    import AppLayout from '../../Layouts/AppLayout'
    import Welcome from '../../Jetstream/Welcome'
    import Button from "../../Jetstream/Button";
    import Table from "./Table";
    import Pagination from "./Pagination";
    import Alert from "../../Jetstream/Alert";

    export default {
        components: {
            Alert,
            Pagination,
            Table,
            Button,
            AppLayout
        },
        props: {
            posts: {
                type: Object
            }
        }
    }
</script>
