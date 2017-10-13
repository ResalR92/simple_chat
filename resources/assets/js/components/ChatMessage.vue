<template>
    <div class="chat-message">
        <p>{{ message.message }}</p>
        <span>{{ message.user.name }}</span>
    </div>
</template>

<script>
export default {

  name: 'ChatMessage',
  props:['message'],
  data () {
    return {

    };
  }
};
</script>

<style>
  .chat-message {
    padding: 1rem;
  }
  .chat-message > p {
    margin-bottom : .5rem;
  }
</style>
