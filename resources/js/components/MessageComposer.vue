<template>
    <div>
        <textarea class="w-100" v-model="message" @keydown.enter="send" placeholder="Message..."></textarea>
    </div>
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
            send(e) {
                e.preventDefault();
                if (this.message == '') {
                    return;
                }

                this.$emit('send', this.message);
                this.message = '';
            }
        }
    }
</script>

<style scoped>

</style>
