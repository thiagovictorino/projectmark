<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Create a post
            </h2>
        </template>
        <div class="py-12">
            <div class="max-w-7xl mx-auto px-8">
                <div class="flex justify-center bg-white overflow-hidden shadow-xl sm:rounded-lg p-6 lg:p-8">
                    <div class="lg:w-1/2">
                        <form method="POST" @submit.prevent="submit">
                            <div>
                                <Label value="Title" />
                                <Input class="block mt-1 w-full" type="text" v-model="form.title" autofocus />
                                <div class="text-red-700" v-if="$page.errors.title">{{ $page.errors.title[0] }}</div>
                            </div>

                            <div class="mt-4">
                                <Label value="Content" />
                                <input class="block mt-1 w-full" type="hidden" name="description" v-model="form.description" />
                                <div class="text-red-700" v-if="$page.errors.description">{{ $page.errors.description[0] }}</div>
                                <RichText @change="content => form.description = content"></RichText>
                            </div>
                            <Button class="mt-4">
                                Save
                            </Button>
                        </form>
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
    import Label from "../../Jetstream/Label";
    import Input from "../../Jetstream/Input";
    import RichText from "../../Jetstream/RichText";

    export default {
        components: {
            RichText,
            Button,
            Input,
            Label,
            AppLayout
        },
        props: {
            posts: {
                type: Object
            }
        },
        data() {
            return {
                form: {
                    title: null,
                    description: null,
                },
            }
        },
        methods: {
            submit() {
                this.$inertia.post('/admin/posts', this.form);
            },
        },
    }
</script>
