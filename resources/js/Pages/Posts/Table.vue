<template>
    <div class="flex flex-col">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead>
                        <tr>
                            <th class="w-3/4 px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase">
                                Title
                            </th>
                            <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase">
                                <div class="hidden md:block">
                                    <inertia-link :href="`/admin/posts?column=created_at&order=${getOrderToggled()}`">Published At {{ getOrderChar() }}</inertia-link>
                                </div>
                            </th>
                            <th class="px-6 py-3 bg-gray-50"></th>
                        </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                        <tr v-for="post in posts" :key="post.id">
                            <td class="w-3/4 px-6 py-4 whitespace-no-wrap">
                                <div class="text-sm leading-5 text-gray-900">
                                    {{ post.title }}
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="hidden md:block">
                                    <div class="text-sm leading-5 text-gray-900">
                                        {{ post.published_at }}
                                    </div>
                                </div>

                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap text-right text-sm leading-5 font-medium">
                                <a :href="`/posts/${post.id}`" class="text-indigo-600 hover:text-indigo-900">Visit</a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "Table",
    props: {
        posts: {
            type: Array
        },
        ordering: {
            type: Object
        },
    },
    methods: {
        getOrderToggled() {
            return this.ordering.order === 'asc'?'desc':'asc';
        },
        getOrderChar() {
            return this.ordering.order === 'asc'?'↑':'↓';
        }
    }
}
</script>

<style scoped>

</style>
