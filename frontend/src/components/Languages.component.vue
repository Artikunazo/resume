<template>
  <div class="col md-6 lg-6 home__description--languages">
    <h3>Languages</h3>
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
.home__description--languages h3 {
  margin-bottom: 30px;
  color: #bcbcbc;
  font-weight: normal;
  font-size: 1.25em;
}
.home__description--languages dl {
  margin-top: 22px;
}
.home__description--languages dl dt {
  font-weight: bold;
}
.home__description--languages dl dd {
  font-size: 0.9em;
}
.home__description--languages {
  color: white;
  margin-top: 10px;
}
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
