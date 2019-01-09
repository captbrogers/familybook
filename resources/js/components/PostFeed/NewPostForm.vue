<template>
    <form :action="actionUrl" method="POST" v-on:submit.prevent="submitPost">
        <input class="border border-grey p-2" placeholder="say something" v-model="postBody">
        <button type="submit">Post</button>
    </form>
</template>

<script>
export default {
    props: {
        actionUrl: {
            type: String,
            required: true
        }
    },

    data () {
        return {
            postBody: ''
        }
    },

    mounted () {
        //
    },

    methods: {
        submitPost () {
            let _this = this

            axios.post(this.actionUrl, {body: _this.postBody})
                .then(function (resp) {
                    _this.$snotify.success(resp.data.message, 'Done')
                    console.log(resp.data)
                })
                .catch(function (erro) {
                    _this.$snotify.error('Sorry, please try again later.', 'Error')
                    console.error(erro.data)
                })
        }
    }
}
</script>
