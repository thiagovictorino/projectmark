<template>
    <div :class="`bg-${color}-100 border border-${color}-400 text-${color}-700 px-4 py-3 rounded relative`" role="alert">
        <strong class="font-bold">{{ title }}</strong>
        <span class="block sm:inline"><slot></slot></span>
    </div>
</template>

<script>
export default {
name: "Alert",
    props: {
        color: {
            type: String,
            default: 'green'
        },
        title: {
            type: String,
            required: true
        }
    }
}
</script>

<style scoped>

</style>
