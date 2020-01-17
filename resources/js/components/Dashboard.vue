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

            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-5">
                            <h4 class="card-title mb-0">ترافیک سایت</h4>
                            <div class="small text-muted">
                                بهمن 96
                            </div>
                        </div>
                        <!--/.col-->
                        <div class="col-sm-7 d-none d-md-block">
                            <button type="button" class="btn btn-primary float-right"><i
                                class="icon-cloud-download"></i></button>
                            <div class="btn-group btn-group-toggle float-right mr-3" data-toggle="buttons">
                                <label class="btn btn-outline-secondary">
                                    <input type="radio" name="options" id="option1" autocomplete="off"> روز
                                </label>
                                <label class="btn btn-outline-secondary active">
                                    <input type="radio" name="options" id="option2" autocomplete="off" checked=""> ماه
                                </label>
                                <label class="btn btn-outline-secondary">
                                    <input type="radio" name="options" id="option3" autocomplete="off"> سال
                                </label>
                            </div>
                        </div>
                        <!--/.col-->
                    </div>
                    <!--/.row-->
                    <div class="chart-wrapper" style="height:300px;margin-top:40px;">
                        <canvas id="main-chart" class="chart" height="300"></canvas>
                    </div>
                </div>
                <div class="card-footer">
                    <ul>
                        <li>
                            <div class="text-muted">بازدید</div>
                            <strong>29.703 کاربر (40%)</strong>
                            <div class="progress progress-xs mt-2">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 40%"
                                     aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </li>
                        <li class="d-none d-md-table-cell">
                            <div class="text-muted">جدید</div>
                            <strong>24.093 کاربر (20%)</strong>
                            <div class="progress progress-xs mt-2">
                                <div class="progress-bar bg-info" role="progressbar" style="width: 20%"
                                     aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </li>
                        <li>
                            <div class="text-muted">بازدید صفحات</div>
                            <strong>78.706 بازدید (60%)</strong>
                            <div class="progress progress-xs mt-2">
                                <div class="progress-bar bg-warning" role="progressbar" style="width: 60%"
                                     aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </li>
                        <li class="d-none d-md-table-cell">
                            <div class="text-muted">کاربر جدید</div>
                            <strong>22.123 کاربر (80%)</strong>
                            <div class="progress progress-xs mt-2">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 80%"
                                     aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </li>
                        <li class="d-none d-md-table-cell">
                            <div class="text-muted">Bounce Rate</div>
                            <strong>40.15%</strong>
                            <div class="progress progress-xs mt-2">
                                <div class="progress-bar" role="progressbar" style="width: 40%" aria-valuenow="40"
                                     aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </li>
                    </ul>
                </div>
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

    export default {
        components: {Box, CChartLineSimple, CChartBarSimple, socialBox,statBox},
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
