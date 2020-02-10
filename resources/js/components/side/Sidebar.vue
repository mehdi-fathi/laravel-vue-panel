<template>
    <div class="sidebar">
        <nav class="sidebar-nav">

            <ul class="nav">
                <div v-for="item in menu">
                    <div v-if="item.type === 'item'">
                        <li class="nav-item">
                            <router-link :to="item.route" class="nav-link">
                                <i :class="item.icon"></i> {{ item.text }}
                                <span v-if="item.label" class="badge badge-primary">
                            {{ item.label.text }}
                    </span>
                            </router-link>
                        </li>
                    </div>
                    <div v-else-if="item.type === 'parent-item'">

                        <li class="nav-item nav-dropdown">
                            <a class="nav-link nav-dropdown-toggle" href="#">
                                <i :class="item.icon"></i> {{ item.text }}
                            </a>

                            <ul class="nav-dropdown-items">
                                <li v-for="itemSub in item.items" class="nav-item">

                                    <router-link :to="itemSub.route" class="nav-link">
                                        <i :class="itemSub.icon"></i> {{ itemSub.text }}
                                    </router-link>
                                </li>
                            </ul>
                        </li>

                    </div>
                    <div v-else-if="item.type === 'nav-title'">

                        <li class="nav-title">
                            {{ item.text }}
                        </li>

                    </div>
                </div>
            </ul>

        </nav>
        <button class="sidebar-minimizer brand-minimizer" type="button"></button>
    </div>
</template>
<script>

    export default {
        name: 'Sidebar',
        data() {
            return {
                menu: null
            }
        },
        mounted() {
            axios
                .get('http://127.0.0.1:8000/users/menu')
                .then(response => (this.menu = response.data))
        }
    }
</script>

<style scoped>

</style>
