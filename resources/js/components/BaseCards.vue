<template>
    <div>
        BaseCards
    </div>
</template>
<script>
    import Box from "./card/box"
    import {CChartLineSimple, CChartBarSimple} from '../components/charts/index.js'
    import socialBox from "./card/socialBox";
    import statBox from "./card/statBox";
    import traffic from "./card/traffic";
    import card from "./card/card";

    export default {
        components: {Box, CChartLineSimple, CChartBarSimple, socialBox,statBox,traffic,card},
        name: "BaseCards",
        props: [
            'bamWam'
        ],
        data() {
            return {
                showChartBox: true
            };
        },
        created() {
            console.log(this.bamWam);
        }
    }
</script>
