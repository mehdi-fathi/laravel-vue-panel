<template>

    <div class="card text-white"
         :class="classBg">

        <div class="card-body pb-0">
            <slot name="menu"></slot>
            <h4 class="mb-0">{{number}}</h4>
            <p>{{label}}</p>
        </div>

        <slot name="chart"></slot>
    </div>
</template>

<script>
    import { CChartLineSimple, CChartBarSimple } from '../charts/index.js'
    export default {
        props : ['number','label','classBg'],
        components: { CChartLineSimple, CChartBarSimple }
    }
</script>

<style scoped>

</style>
