<template lang="en">
    <div class="col md-6 lg-6 home__description--personal-information">
      <h4>Personal information</h4>
        <dl v-for="art in info">
            <dt>{{ art.name }}</dt>
            <dd>{{ art.info }}</dd>
        </dl>
    </div>
</template>

<script>
export default {
  props: ["info"]
};
</script>

<style scope>
.home__about-me {
  color: white;
}

.home__description {
  line-height: 1.875em;
}

.home__description--personal-information,
.home__description--languages {
  color: white;
  margin-top: 10px;
}

.home__description--personal-information h4,
.home__description--languages h4 {
  margin-bottom: 30px;
  color: #bcbcbc;
  font-weight: normal;
  font-size: 1.25em;
}

.home__description--personal-information dl,
.home__description--languages dl {
  margin-top: 22px;
}

.home__description--personal-information dl dt,
.home__description--languages dl dt {
  font-weight: bold;
}

.home__description--personal-information
  dl
  dd
  .home__description--languages
  dl
  dd {
  font-size: 0.9em;
}

.home__description--personal-information dl dt {
  text-transform: capitalize;
}
</style>
