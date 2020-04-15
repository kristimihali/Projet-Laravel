<template>
<ul class="navbar-nav ml-auto" >
    <li class="nav-item" v-for="item in menuList">
        <router-link class="nav-link" :to="{ name: item.path }">{{ item.title }}</router-link>
    </li>
    <li class="nav-item" v-for="item in menuStatic">
        <a class="nav-link" :href="item.path">{{ item.title }}</a>
    </li>
</ul>
</template>
<script>
    export default {
        name:"vuejs-menu",
        data() {
            var domain = location.protocol+'//'+location.hostname+(location.port ? ':'+location.port : '');

            return {
                menuList: [
                    { title:'Home', path: 'home' }
                ],
                menuStatic: [
                    { title:'Articles', path: domain + '/articles'},
                    { title:'Contact', path:  domain + '/contact' }
                ]
            }
        }
    }
</script>