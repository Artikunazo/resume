<template>
  <div id="education" class="row section">
    <div class="col education">
      <h2>Education</h2>
      <div class="row">
        <div
          class="card "
          :class="[index === 0 ? 'col-12' : 'col-6']"
          v-for="(education, index) in educationList"
          :key="index"
        >
          <div class="row">
            <div class="col card__image">
              <a :href="education.site" target="_blank" rel="noreferrer"
                ><img :src="education.logo" :alt="`Logo de ${education.school}`"
              /></a>
            </div>
            <div
              class="col text-center card__body"
              v-if="education.title != 'Courses'"
            >
              <h3>{{ education.title }}</h3>
              <p>{{ education.date }}</p>
              <a
                :href="education.site"
                target="_blank"
                rel="noreferrer"
                title="Go to website"
                >Go to website <i class="fas fa-external-link-alt"></i
              ></a>
            </div>
            <div class="col text-center card__body" v-else>
              <a
                :href="education.site"
                target="_blank"
                rel="noreferrer"
                title="Go to profile"
                >Go to profile <i class="fas fa-external-link-alt"></i
              ></a>
            </div>
          </div>

          <!-- {{education.title != 'Courses' ? countRows = 1 : countRows++}} -->
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: ["educationList"],
  methods: {
    getImageUrl(imageName) {
      return require("@/assets/img/" + imageName);
    }
  }
};
</script>

<style scoped>
.card {
  padding: 10px;
}
.card__image img {
  width: 100%;
  border-top-left-radius: 10px;
  border-top-right-radius: 10px;
  min-height: 170px;
  vertical-align: bottom;
}
.card:not(:first-of-type) {
  margin-top: 25px;
}
.card__body {
  background-color: var(--red-main);
  padding: 10px;
  border-bottom-left-radius: 10px;
  border-bottom-right-radius: 10px;
}
.card__body a {
  text-decoration: none;
}
.education {
  margin-top: 20px;
}
.education > ul > li > div img {
  max-width: 100%;
}
.education__university {
  margin: 30px auto;
}
.education__university > h3 {
  margin: 0;
  font-size: 1.2em;
}
.education__university > h3 small {
  font-weight: normal;
  text-transform: lowercase;
}
.education__university > h4 {
  font-size: 1.2em;
}
.education__university .hr {
  margin: 10px 0;
}
.education__certification {
  margin-top: 30px;
}
</style>
