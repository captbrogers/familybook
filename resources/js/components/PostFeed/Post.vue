<template>
    <article class="post flex flex-col border-b border-grey-light mb-4 py-4">
        <p class="text-sm">{{ post.user.full_name }}</p>
        <p class="my-3">{{ post.body }}</p>
        <p class="text-sm"><timeago :datetime="post.created_at" :auto-update="60"></timeago></p>
    </article>
</template>

<script>
//

export default {
    name: 'Post',

    props: {
        post: {
            type: Object,
            required: true
        }
    },

    mounted () {
        //
    }
}
</script>
