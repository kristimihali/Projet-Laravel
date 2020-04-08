<template>
<ul class="navbar-nav ml-auto" >
    <li class="nav-item" v-for="item in menuList">
        <a class="nav-link" :href="item.path">{{ item.title }}</a>
    </li>
</ul>
</template>
<script>
    export default {
        name:"vuejs-menu",
        data() {
            return {
                menuList: [
                    { title:'Home', path: '/' },
                    { title:'Articles', path: '/articles'},
                    { title:'Contact', path: '/contact' }
                ]
            }
        }
    }
</script>