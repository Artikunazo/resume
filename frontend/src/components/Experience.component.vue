<template lang="en">
<div id="experience" class="row section">
  <div class="col timeline">
    <h2>Work experience</h2>
    <ol>
      <li v-for="experience in experiencesList">
        <div class="timeline__item">
          <h3>{{ experience.agency }} <small>{{ `${experience.start }${experience.exit}` }}</small></h3>
          <p>{{ experience.position }}</p>
          <p v-html="experience.responsabilities"></p>
        </div>
      </li>
    </ol>
  </div>
  </div>
</template>
<script>
export default {
  props: ["experiencesList"]
};
</script>
<style scope>
.timeline ol {
  margin: 10px 0 0 0;
  list-style-type: none;
}

.timeline ol > li {
  position: relative;
  margin: 0;
  padding: 0 0 1em 1.2em;
}

.timeline ol li::after {
  color: var(--red-main);
  background-color: var(--red-main);
  border-radius: 50%;
  content: "\f111";
  left: 0;
  position: absolute;
  top: 4px;
  font-family: "Font Awesome 5 Free";
}

.timeline ol li::before {
  background-color: var(--red-main);
  content: "";
  position: absolute;
  bottom: 0;
  top: 0;
  left: 6.5px;
  width: 3px;
}

.timeline__item {
  padding: 0 10px;
}

.timeline__item p {
  color: #bcbcbc !important;
}

.timeline__item h3 small {
  font-size: 0.75em;
  float: right;
}

.skills {
  list-style-type: disc;
  margin-left: 15px;
}
</style>
