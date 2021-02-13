<template>
  <div class="col social-networks text-center">
    <ul>
      <li v-for="(social, index) in networks" :key="index">
        <a
          :href="social.link"
          v-html="social.icon"
          rel="noreferrer"
          target="_blank"
        >
        </a>
      </li>
    </ul>
  </div>
</template>

<script>
export default {
  props: ["networks"]
};
</script>
<style></style>
