<template>
    <div class="chat-log">
        <chat-message v-for="message in messages" :message="message"></chat-message>
    </div>
</template>

<script>
export default {

  name: 'ChatLog',
  props : ['messages'],
  data () {
    return {

    };
  }
};
</script>

<style scoped>
    .chat-log .chat-message:nth-child(even) {
        background-color: #ccc;
    }
</style>
