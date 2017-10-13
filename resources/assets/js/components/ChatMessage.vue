<template>
    <div>
        <p>{{ message }}</p>
        <span>{{ user }}</span>
    </div>
</template>

<script>
export default {

  name: 'ChatMessage',

  data () {
    return {
        message : "Here is the message",
        user : "Resal Ramdahadi"
    };
  }
};
</script>

<style lang="css" scoped>
</style>
