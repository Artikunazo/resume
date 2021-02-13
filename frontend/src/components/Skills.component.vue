<template lang="en">
<div id="skills" class="row section">
<div class="col">
  <h2>Skills</h2>
     <ol class="skills">
        <li v-for="skill in skills" v-html="skill.description" class="skills__item"></li>
    </ol>
    </div>
    </div>
</template>
<script>
export default {
  props: ["skills"]
};
</script>
<style scoped>
.skills__item {
  display: inline-block;
  border: 1px solid var(--red-main);
  border-radius: 10px;
  padding: 15px;
  margin: 10px;
  background-color: var(--red-main);
}
</style>
