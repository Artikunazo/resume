<template>
  <div class="col">
    <p><strong>Hi! I'm Arturo Casas</strong></p>
    <p v-html="description"></p>
  </div>
</template>
<script>
export default {
  props: ["description"]
};
</script>
<style scope></style>
