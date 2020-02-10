<template>

    <div class="app-body">

            <Sidebar></Sidebar>

        <main class="main">
            <!-- Breadcrumb -->
            <Breadcrump></Breadcrump>

            <aside class="aside-menu">
                <!--@include('panel.sections.side.side-menu')-->
                <SideMenu></SideMenu>
            </aside>


            <main>
                <div class="container-fluid">
                    <div class="animated fadeIn">
                        <router-view></router-view>
                    </div>
                </div>
            </main>

        </main>
    </div>
</template>

<script>
    import Box from "./card/box"
    import {CChartLineSimple, CChartBarSimple} from '../components/charts/index.js'
    import socialBox from "./card/socialBox";
    import statBox from "./card/statBox";
    import traffic from "./card/traffic";
    import Sidebar from "./side/Sidebar";
    import Breadcrump from "./side/Breadcrump";
    import SideMenu from "./side/SideMenu";

    export default {
        components: {
            Breadcrump,
            Box,
            CChartLineSimple,
            CChartBarSimple,
            socialBox,
            statBox,
            traffic,
            Sidebar,
            SideMenu
        },
        name: "App",
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
