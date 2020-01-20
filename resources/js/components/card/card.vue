<template>

    <div class="card">
        <div class="card-header">
            <i class="icon-drop"></i>{{title}}
        </div>
        <div class="card-body">
                <div class="row">
                    <slot></slot>
                </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "card",
        props : ['title'],
    }
</script>

<style scoped>

</style>
