<template>
    <article>
        <img v-if="post.cover" :src="`/images/${post.cover}`" alt="">

        <div>
            <h3> {{ post.title }} </h3>
            <!-- Stampo dati delle Relazioni  -->
            <p v-if="post.category"> {{ post.category.name }} </p>
            <ul>
                <li v-for="tag in post.tags" :key="tag.id"> {{ tag.name }} </li>
            </ul>
            <p> {{ post.created_at }} </p>
        </div>

    </article>
    
</template>

<script>
export default {
    props: {
        post: {
            type: Object,
            required: true
        }
    }
}
</script>

<style>

</style>