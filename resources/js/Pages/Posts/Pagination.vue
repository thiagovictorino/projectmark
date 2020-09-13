<template>
    <ul v-if="pages.length > 1" class="flex list-reset border border-grey-light rounded w-auto font-sans">
        <li class="border-r" v-if="pagination.current_page > 1">
            <inertia-link
                class="block text-indigo-600 hover:text-indigo-900 px-3 py-2"
                :href="`/admin/posts?page=${pagination.current_page - 1}&column=${ordering.column}&order=${ordering.order}`"
            >
                &laquo;
            </inertia-link>
        </li>
        <li v-for="page in pages" :key="page" >
            <inertia-link
                :class="[page == pagination.current_page ? 'text-indigo-600 hover:text-indigo-900 border-r':'text-indigo-300 hover:text-indigo-700 border-r border-grey-light', 'block px-3 py-2']"
                :href="`/admin/posts?page=${page}&column=${ordering.column}&order=${ordering.order}`"
            >
                {{ page }}
            </inertia-link>
        </li>
        <li v-if="pagination.current_page < pagination.last_page">
            <inertia-link
                class="block text-indigo-600 hover:text-indigo-900 px-3 py-2"
                :href="`/admin/posts?page=${pagination.current_page + 1}&column=${ordering.column}&order=${ordering.order}`"
            >
                &raquo;
            </inertia-link>
        </li>
    </ul>
</template>

<script>
export default {
    name: "Pagination",
    props: {
        pagination: {
            type: Object,
            required: true
        },
        ordering: {
            type: Object,
            required: true
        },
        offset: {
            type: Number,
            default: 4
        }
    },
    computed: {
        pages() {
            if (!this.pagination.to) {
                return null;
            }
            let from = this.pagination.current_page - this.offset;
            if (from < 1) {
                from = 1;
            }
            let to = from + (this.offset * 2);
            if (to >= this.pagination.last_page) {
                to = this.pagination.last_page;
            }
            let pages = [];
            for (let page = from; page <= to; page++) {
                pages.push(page);
            }
            return pages;
        },
    }
}
</script>
