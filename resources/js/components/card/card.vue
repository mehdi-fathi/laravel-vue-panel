<template>

    <div class="card">
        <div class="card-header">
            <i :class="titleIcon"></i>{{title}}
        </div>
        <div class="card-body ">
            <div class="row">
                <slot></slot>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "card",
        props: {
            title: {
                default: 'test',
                type: String
            },
            titleIcon: {
                default: 'icon-drop',
                type: String
            }
        },
    }
</script>

<style scoped>

</style>
