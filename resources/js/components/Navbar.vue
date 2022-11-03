<template>
    <header>
        <nav class="container">
            <div class="flex container_navbar">
                <div class="logo">
                    LOGO
                </div>
                <ul class="flex menu">
                    <li> <router-link to="/"> Home </router-link> </li>
                    <li> <router-link to="contatti"> Contatti </router-link> </li>
                    <li> <router-link to="/blog"> Blog </router-link> </li>
                </ul>

            </div>
        </nav>
    </header>
</template>

<script>
export default {

}
</script>

<style lang="scss" scoped>

    .navbar_container {
        justify-content: space-between;
        align-items: center;
    }

    .menu {
        margin-left: auto;
        gap: 10px;
    }

</style>