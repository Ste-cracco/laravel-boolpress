<template>
    <div>
        <router-view></router-view>
        <!-- <h1> {{ title }} </h1>

        <div class="container_posts">
            <PostCard  v-for="post in posts" :key="post.id" :post="post"/>
                
        </div> -->
    </div>
</template>

<script>
import PostCard from '../components/PostCard.vue'

    export default {
        components: {
            PostCard
        },

        data() {
            return {
                title: 'ciao',
                posts: []
            }
        },
        methods: {
            fetchPosts() {
                axios.get('/api/posts').then((res) => {
                    const { posts } = res.data
                    this.posts = posts
                })
            }
        },
        beforeMount() {
            this.fetchPosts()
        }
    }
</script>

<style>

.container_posts{
    display: flex;
    display: grid;
    grid-template-columns: 1fr 1fr 1fr;
}

.container_posts article {
    margin: 50px 15px;
}

</style>