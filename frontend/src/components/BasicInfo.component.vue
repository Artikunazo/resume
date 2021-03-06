<template lang="en">
    <div class="col md-6 lg-6 home__description--personal-information">
      <h3>Personal information</h3>
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

.home__description--personal-information {
  color: white;
  margin-top: 10px;
}

.home__description--personal-information h3 {
  margin-bottom: 30px;
  color: #bcbcbc;
  font-weight: normal;
  font-size: 1.25em;
}

.home__description--personal-information dl {
  margin-top: 22px;
}

.home__description--personal-information dl dt {
  font-weight: bold;
}

.home__description--personal-information dl dd {
  font-size: 0.9em;
}

.home__description--personal-information dl dt {
  text-transform: capitalize;
}
</style>
