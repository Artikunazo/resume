<template>
  <div id="education" class="row section">
    <div class="col education">
      <h2>Education</h2>
      <ul>
        <li v-for="(education, index) in educationList" :key="index">
          <div class="education__university" v-if="index === 0">
            <h3>{{ education.title }}</h3>
            <h4>{{ education.school }}</h4>
            <p>{{ education.date }}</p>
            <a :href="education.info" target="_blank" rel="noreferrer">{{
              education.info
            }}</a>
          </div>

          <div v-else>
            <picture class="education__certification">
              <source :srcset="education.info.jp2" type="image/jp2" />
              <!-- format supported by safari -->
              <source :srcset="education.info.webp" type="image/webp" />
              <!-- format supported on many browsers -->
              <source :srcset="education.info.jpg" type="image/jpg" />
              <!-- common supported format -->
              <img :src="education.info.jpg" alt="" />
              <!-- default -->
            </picture>
          </div>

          <hr class="hr" />
        </li>
      </ul>
    </div>
  </div>
</template>

<script>
export default {
  props: ["educationList"]
};
</script>

<style scoped>
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
