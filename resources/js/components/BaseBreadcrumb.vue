<template>
    <div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <i class="fa fa-align-justify"></i> Bootstrap Breadcrumb
                        <div class="card-actions">

                        </div>
                    </div>
                    <div class="card-body">
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item active" aria-current="page">صفحه اصلی</li>
                            </ol>
                        </nav>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">صفحه اصلی</a></li>
                                <li class="breadcrumb-item active" aria-current="page">کتابخانه</li>
                            </ol>
                        </nav>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">صفحه اصلی</a></li>
                                <li class="breadcrumb-item"><a href="#">کتابخانه</a></li>
                                <li class="breadcrumb-item active" aria-current="page">داده</li>
                            </ol>
                        </nav>
                        <nav class="breadcrumb">
                            <a class="breadcrumb-item" href="#">صفحه اصلی</a>
                            <a class="breadcrumb-item" href="#">کتابخانه</a>
                            <a class="breadcrumb-item" href="#">داده</a>
                            <span class="breadcrumb-item active">Bootstrap</span>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

    </div>
</template>
<script>
    import Box from "./card/box"
    import {CChartLineSimple, CChartBarSimple} from '../components/charts/index.js'
    import socialBox from "./card/socialBox";
    import statBox from "./card/statBox";
    import traffic from "./card/traffic";
    import card from "./card/card";
    import blockquoteComponent from "./card/blockquoteComponent";

    export default {
        components: {Box, CChartLineSimple, CChartBarSimple, socialBox, statBox, traffic, card, blockquoteComponent},
        name: "BaseBreadcrumb",
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
