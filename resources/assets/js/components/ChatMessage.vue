<template>
    <div class="chat-message">
        <p>{{ message.message }}</p>
        <span>{{ message.user }}</span>
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

<style scoped>
</style>
