<template>
    <textarea class="w-100" v-model="message" @keydown.enter="send" placeholder="Message..."></textarea>
</template>

<script>
    export default {
        name: "MessageComposer",
        data() {
            return {
                message: ''
            };
        },
        methods: {
            send() {
                if (this.message === '') {
                    return;
                }
                console.log(this.message);
                this.$emit('send', this.message);
                this.message = '';
            }
        }
    }
</script>

<style scoped>

</style>
