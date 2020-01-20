<template>

    <div class="container-fluid">

        <div class="animated fadeIn">
            <div class="row">
                <div class="col-sm-6 col-lg-3">
                    <box :classBg="'bg-primary'" :number="4521"
                         :label="'کاربران انلاین'">

                        <template v-slot:menu>
                            <div class="btn-group float-left">
                                <button type="button" class="btn btn-transparent dropdown-toggle p-0"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="icon-settings"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-left">
                                    <a class="dropdown-item" href="#">عملیات</a>
                                    <a class="dropdown-item" href="#">عملیات</a>
                                    <a class="dropdown-item" href="#">لرم اپیسوم</a>
                                </div>
                            </div>
                        </template>

                        <template v-slot:chart>

                            <div class="chart-wrapper px-3" style="height:70px;">
                                <!--            <canvas id="card-chart1" class="chart" height="70"></canvas>-->
                                <CChartLineSimple
                                    pointed
                                    class="chart"
                                    style="height:70px"
                                    :data-points="[65, 59, 84, 84, 51, 55, 40]"
                                    point-hover-background-color="primary"
                                    label="اعضا"
                                    labels="months"
                                />
                            </div>

                        </template>
                    </box>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <box :classBg="'bg-info'" :chartShow="showChartBox" :number="1.823" :label="'کاربران انلاین'">

                        <template v-slot:menu>
                            <button type="button" class="btn btn-transparent p-0 float-left">
                                <i class="icon-location-pin"></i>
                            </button>
                        </template>

                        <template v-slot:chart>

                            <div class="chart-wrapper px-3" style="height:70px;">
                                <!--            <canvas id="card-chart1" class="chart" height="70"></canvas>-->
                                <CChartLineSimple
                                    pointed
                                    class="chart"
                                    style="height:70px"
                                    :data-points="[65, 59, 84, 84, 51, 55, 40]"
                                    point-hover-background-color="primary"
                                    label="اعضا"
                                    labels="months"
                                />
                            </div>

                        </template>
                    </box>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <box :classBg="'bg-warning'" :chartShow="showChartBox" :number="9.823" :label="'کاربران انلاین'">

                        <template v-slot:chart>

                            <div class="chart-wrapper" style="height:70px;">
                                <!--            <canvas id="card-chart1" class="chart" height="70"></canvas>-->
                                <CChartLineSimple
                                    class="mt-3"
                                    style="height:50px"
                                    background-color="rgba(255,255,255,.2)"
                                    :data-points="[78, 81, 80, 45, 34, 12, 40]"
                                    :options="{ elements: { line: { borderWidth: 2.5 }}}"
                                    point-hover-background-color="warning"
                                    label="Members"
                                    labels="months"
                                />
                            </div>

                        </template>

                    </box>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <box :classBg="'bg-danger'" :number="4521"
                         :label="'کاربران انلاین'">

                        <template v-slot:menu>
                            <div class="btn-group float-left">
                                <button type="button" class="btn btn-transparent dropdown-toggle p-0"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="icon-settings"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-left">
                                    <a class="dropdown-item" href="#">عملیات</a>
                                    <a class="dropdown-item" href="#">عملیات</a>
                                    <a class="dropdown-item" href="#">لرم اپیسوم</a>
                                </div>
                            </div>
                        </template>

                        <template v-slot:chart>

                            <div class="chart-wrapper px-3" style="height:70px;">
                                <!--            <canvas id="card-chart1" class="chart" height="70"></canvas>-->
                                <CChartBarSimple
                                    class="mt-3 mx-3"
                                    style="height:50px"
                                    background-color="rgb(250, 152, 152)"
                                    label="Members"
                                    labels="months"
                                />
                            </div>

                        </template>
                    </box>
                </div>

            </div>
            <!--/.row-->

            <div class="row">
                <card :title="'تست'">
                    <div class="col-md-4">
                        <div class="p-3 mb-3 bg-primary">اصلی</div>
                    </div>
                    <div class="col-md-4">
                        <div class="p-3 mb-3 bg-secondary">کمکی</div>
                    </div>
                    <div class="col-md-4">
                        <div class="p-3 mb-3 bg-success">موفقیت</div>
                    </div>
                    <div class="col-md-4">
                        <div class="p-3 mb-3 bg-danger">اخطار</div>
                    </div>
                    <div class="col-md-4">
                        <div class="p-3 mb-3 bg-warning">هشدار</div>
                    </div>
                    <div class="col-md-4">
                        <div class="p-3 mb-3 bg-info">اطلاعات</div>
                    </div>
                    <div class="col-md-4">
                        <div class="p-3 mb-3 bg-light">روشن</div>
                    </div>
                    <div class="col-md-4">
                        <div class="p-3 mb-3 bg-dark">تاریک</div>
                    </div>
                </card>
                <traffic></traffic>
            </div>
            <!--/.card-->

            <div class="row">

                <div class="col-sm-6 col-lg-3">
                    <socialBox class-social="facebook" class-social-icon="fa-facebook"
                               number-one="55665" label-one="FEEDS"
                               number-two="55665" label-two="LIKES">

                    </socialBox>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <socialBox class-social="twitter" class-social-icon="fa-twitter"
                               number-one="15665" label-one="followers"
                               number-two="11.665" label-two="tweets">
                    </socialBox>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <socialBox class-social="linkedin" class-social-icon="fa-linkedin"
                               number-one="999" label-one="contacts"
                               number-two="155" label-two="feeds">

                    </socialBox>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <socialBox class-social="google-plus" class-social-icon="fa-google-plus"
                               number-one="88999" label-one="followers"
                               number-two="105" label-two="circles">

                    </socialBox>
                </div>
            </div>
            <!--/.row-->

            <div class="row">
                <div class="col-md-12">
                    <statBox></statBox>
                </div>
                <!--/.col-->
            </div>
            <!--/.row-->
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

    export default {
        components: {Box, CChartLineSimple, CChartBarSimple, socialBox,statBox,traffic,card},
        name: "Dasboard",
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
