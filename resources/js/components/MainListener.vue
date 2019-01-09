<template>
    <div></div>
</template>

<script>
//

export default {
    props: {
        keys: {
            type: [Array, Object],
            required: true
        }
    },

    mounted () {
        let _this = this

        Echo.channel(this.keys.posts)
            .listen('NewPostEvent', function (message) {
                _this.$snotify.success('Check your feed now', 'New Message!')
                console.log(message)
            })

        /*this.keys.forEach(function (channelKey) {
            //
        })*/


    }
}
</script>
