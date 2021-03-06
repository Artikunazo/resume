<template>
  <div id="tech-skills" class="row section">
    <div class="col tech-skills">
      <h2 class="tech-skills__title">Technical Skills</h2>
      <div class="row">
        <div class="col-6 xs-12" v-for="skill in skills" :key="skill.id">
          <div
            class="row text-center card"
            v-if="frameworks[skill.technologyName].length > 0"
          >
            <div class="col-4 xs-12 card__header">
              <h3 class="card__title">{{ skill.technologyName }}</h3>
            </div>
            <div class="col-8 xs-12 card__body">
              <ul>
                <li
                  v-for="framework in frameworks[skill.technologyName]"
                  :key="framework.framework"
                >
                  <p>{{ framework.framework }}</p>
                </li>
              </ul>
            </div>
          </div>

          <div class="row card--no-frameworks" v-else>
            <div class="col">
              <h3 class="card__title">{{ skill.technologyName }}</h3>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  props: ["skills", "frameworks"]
};
</script>
<style scoped>
.card,
.card--no-frameworks {
  height: 100px;
  margin: 15px;
}
.card__header,
.card__body,
.card--no-frameworks {
  display: flex;
  justify-content: center;
  align-items: center;
}
.card--no-frameworks {
  background-color: var(--red-main);
  border-radius: 8px;
}

.card__header {
  background-color: var(--red-main);
  border-radius: 8px 0px 0px 8px;
}

.card__body {
  background-color: var(--background-input);
  border-radius: 0px 8px 8px 0px;
}
.card__title {
  font-size: 1.35em;
}

.tech-skills__individual-skill {
  width: 100%;
  margin: 25px 0;
}

.tech-skills__individual-skill--tech,
.tech-skills__individual-skill--frameworks {
  display: inline-block;
  margin: 0;
  padding: 0;
}

.tech-skills__individual-skill--frameworks {
  vertical-align: top;
}
.text-center {
  text-align: center;
}
@media (max-width: 575.98px) {
  .card__header {
    border-radius: 8px 8px 0px 0px;
  }

  .card__body {
    border-radius: 0px 0px 8px 8px;
  }
  .card__body,
  .card__header {
    padding: 10px;
  }
}
</style>
