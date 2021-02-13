<template>
  <div class="col md-6 lg-6 home__description--languages">
    <h4>Languages</h4>
    <dl v-for="(lang, index) in languages" :key="index">
      <dt>{{ lang.language }}</dt>
      <dd>
        <div class="progress-bar">
          <span class="fill" :style="{ width: lang.percent + '%' }"></span>
        </div>
      </dd>
    </dl>
  </div>
</template>
<script>
export default {
  props: ["languages"]
};
</script>
<style scoped>
.progress-bar {
  width: 100%;
  background-color: var(--lightgray-custom);
  height: 25px;
  border-radius: 25px;
  position: relative;
}
.progress-bar .fill {
  background-color: var(--red-main);
  position: absolute;
  height: 100%;
  border-radius: 25px;
}
</style>
