<template>

        <div class="social-box " :class="classSocial">
            <i class="fa" :class="classSocialIcon"></i>
            <ul>
                <li>
                    <strong>{{numberOne}}</strong>
                    <span>{{labelOne}}</span>
                </li>
                <li>
                    <strong>{{numberTwo}}</strong>
                    <span>{{labelTwo}}</span>
                </li>
            </ul>
        </div>
        <!--/.social-box-->
    <!--/.col-->

<!--    <div class="col-sm-6 col-lg-3">-->
<!--        <div class="social-box twitter">-->
<!--            <i class="fa fa-twitter"></i>-->
<!--            <div class="chart-wrapper">-->
<!--                <canvas id="social-box-chart-2" height="90"></canvas>-->
<!--            </div>-->
<!--            <ul>-->
<!--                <li>-->
<!--                    <strong>973k</strong>-->
<!--                    <span>followers</span>-->
<!--                </li>-->
<!--                <li>-->
<!--                    <strong>1.792</strong>-->
<!--                    <span>tweets</span>-->
<!--                </li>-->
<!--            </ul>-->
<!--        </div>-->
<!--        &lt;!&ndash;/.social-box&ndash;&gt;-->
<!--    </div>-->
<!--    &lt;!&ndash;/.col&ndash;&gt;-->

<!--    <div class="col-sm-6 col-lg-3">-->

<!--        <div class="social-box linkedin">-->
<!--            <i class="fa fa-linkedin"></i>-->
<!--            <div class="chart-wrapper">-->
<!--                <canvas id="social-box-chart-3" height="90"></canvas>-->
<!--            </div>-->
<!--            <ul>-->
<!--                <li>-->
<!--                    <strong>500+</strong>-->
<!--                    <span>contacts</span>-->
<!--                </li>-->
<!--                <li>-->
<!--                    <strong>292</strong>-->
<!--                    <span>feeds</span>-->
<!--                </li>-->
<!--            </ul>-->
<!--        </div>-->
<!--        &lt;!&ndash;/.social-box&ndash;&gt;-->
<!--    </div>-->
<!--    &lt;!&ndash;/.col&ndash;&gt;-->

<!--    <div class="col-sm-6 col-lg-3">-->
<!--        <div class="social-box google-plus">-->
<!--            <i class="fa fa-google-plus"></i>-->
<!--            <div class="chart-wrapper">-->
<!--                <canvas id="social-box-chart-4" height="90"></canvas>-->
<!--            </div>-->
<!--            <ul>-->
<!--                <li>-->
<!--                    <strong>894</strong>-->
<!--                    <span>followers</span>-->
<!--                </li>-->
<!--                <li>-->
<!--                    <strong>92</strong>-->
<!--                    <span>circles</span>-->
<!--                </li>-->
<!--            </ul>-->
<!--        </div>-->
<!--        &lt;!&ndash;/.social-box&ndash;&gt;-->
<!--    </div>-->
    <!--/.col-->
</template>

<script>
    export default {
        props: ['classSocial','classSocialIcon','numberOne','labelOne','numberTwo','labelTwo']
    }
</script>

<style scoped>

</style>
