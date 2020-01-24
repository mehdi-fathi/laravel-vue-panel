<template>

    <div class="card" :class="cardClass">
        <div v-if="type === 'header'" class="card-header">
            <i v-if="titleIcon" :class="titleIcon"></i>{{title}}

            <slot name="header"></slot>
        </div>
        <div class="card-body">
                <slot></slot>
        </div>
        <div v-if="type === 'footer'" class="card-footer">
            <i :class="titleIcon"></i> {{title}}
        </div>
    </div>
</template>

<script>
    export default {
        name: "card",
        props: {
            type: {
                default: 'header',
                type: String
            },
            title: {
                default: 'test',
                type: String
            },
            titleIcon: {
                default: '',
                type: String
            },
            cardClass:{
                default: '',
                type: String
            },
            collapseClass:{
                default: '',
                type: String
            },
            collapseId:{
                default: '',
                type: String
            }
        },

    }
</script>

<style scoped>

</style>
