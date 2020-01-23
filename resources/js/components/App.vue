<template>
    <div>

        <div class="app-body">

            <div class="sidebar">
                <Sidebar></Sidebar>
            </div>

            <main class="main">
                <!-- Breadcrumb -->
                <Breadcrump></Breadcrump>

            <aside class="aside-menu">
                <!--@include('panel.sections.side.side-menu')-->
                <SideMenu></SideMenu>
            </aside>


            <main>
                <router-view></router-view>
            </main>

            </main>
        </div>

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
        components: {Breadcrump, Box, CChartLineSimple, CChartBarSimple, socialBox,statBox,traffic,Sidebar,SideMenu},
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
