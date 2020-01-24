<template>
    <div class="card text-white text-center" :class="classBg">
        <div class="card-body">
            <blockquote class="card-bodyquote">
                <slot name="body"></slot>
                <footer>
                    {{footerText}}
                    <cite :title="footerTitle">{{footerTitle}}</cite>
                </footer>
            </blockquote>
        </div>
    </div>
</template>

<script>
    export default {
        name: "blockquoteComponent",

        props: {
            classBg: {
                default: 'bg-primary',
                type: String
            },
            footerText: {
                default: '',
                type: String
            },
            footerTitle: {
                default: '',
                type: String
            },
        }
    }
</script>

<style scoped>

</style>
