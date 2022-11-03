<template>
    <div>
        <Navbar />
        <router-view></router-view>
    </div>
</template>

<script>
import Navbar from '../components/Navbar.vue'

    export default {
        components: { Navbar }
    }

    
</script>

<style lang="scss">

    .flex {
        display: flex;
    }

    ul, li, menu {
        list-style: none;
    }

</style>