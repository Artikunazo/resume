<template>
  <div id="curriculum" class="container-liquid">
    <menu-component></menu-component>

    <div class="row">
      <div class="col lg-4 justify-self-end-lg">
        <div id="main-info" class="main-info">
          <figure class="main-info__profile">
            <picture class="certification">
              <!-- <source srcset="@/assets/img/profile.jp2" type="image/jp2" /> --><!-- format supported by safari -->
              <source srcset="@/assets/img/profile.webp" type="image/webp" />
              <!-- format supported on many browsers -->
              <source srcset="@/assets/img/profile.jpeg" type="image/jpeg" />
              <!-- common supported format -->
              <img src="@/assets/img/profile.jpeg" alt="" /><!-- default -->
            </picture>
            <figcaption>Arturo Casas</figcaption>
          </figure>
          <p class="main-info__description">Web Developer</p>
          <social :networks="allInfo.socialNetworks"></social>
        </div>
      </div>

      <div class="col lg-8 container-centered">
        <div id="home" class="row section home">
          <div class="col home__about-me">
            <h2>About me</h2>
            <div class="home__description">
              <aboutme :description="allInfo.aboutme.description"></aboutme>

              <hr class="hr" />

              <div class="row">
                <basic-info :info="allInfo.basicInfo"></basic-info>
                <languages :languages="allInfo.languages"></languages>
              </div>
            </div>
          </div>
        </div>

        <tech-skills
          :skills="allInfo.techSkills.techSkills"
          :frameworks="allInfo.techSkills.frameworks"
        ></tech-skills>

        <skills :skills="allInfo.skills"></skills>

        <experience :experiencesList="allInfo.experiences"></experience>

        <education :educationList="allInfo.education"></education>

        <div id="contact" class="row section">
          <contact></contact>
          <social :networks="allInfo.socialNetworks"></social>
        </div>

        <footer-component></footer-component>
      </div>
    </div>
    <!-- End Container -->
  </div>
</template>

<script>
import { Utilities } from "@/assets/js/utilities.js";

/* Import components */
import aboutme from "@/components/Aboutme.component";
import basicInfo from "@/components/BasicInfo.component";
import contact from "@/components/Contact.component";
import education from "@/components/Education.component";
import experience from "@/components/Experience.component";
import languages from "@/components/Languages.component";
import techSkills from "@/components/TechSkills.component";
import skills from "@/components/Skills.component";
import social from "@/components/SocialNetworks.component";
import MenuComponent from "./components/Menu.component.vue";
import FooterComponent from "./components/Footer.component.vue";

export default {
  name: "curriculum",
  data() {
    return {
      allInfo: {
        aboutme: {},
        basicInfo: [{}],
        education: [{}],
        experience: [{}],
        languages: [{}],
        techSkills: [{}],
        skills: [{}],
        social: [{}]
      }
    };
  },
  methods: {
    getAllInfo() {
      Utilities.sendRequest("all-info").then(response => {
        this.allInfo = response;
      });
    }
  },
  components: {
    aboutme,
    "basic-info": basicInfo,
    contact,
    education,
    experience,
    languages,
    techSkills,
    skills,
    social,
    MenuComponent,
    FooterComponent
  },
  created() {
    this.getAllInfo();
  }
};
</script>

<style scoped>
.container-centered {
  margin: 0 20px;
}

.main-info {
  background-color: var(--red-main);
  text-align: center;
  padding: 30px 20px 20px;
  margin-top: 30px;
}
.main-info figure img {
  width: 195px;
  height: 195px;
  border-radius: 50%;
}

.main-info figure figcaption {
  text-transform: uppercase;
  margin-top: 33px;
  margin-bottom: 0.625em;
  vertical-align: middle;
  font-size: 1.625em;
  font-weight: bold;
  color: white;
}
.main-info__description {
  color: #bcbcbc;
  text-align: center;
  margin-bottom: 0.625em;
}

.social-networks ul li a {
  color: white;
}

@media (min-width: 992px) {
  .container-centered {
    margin-top: 0;
  }
  .main-info {
    position: sticky;
    -webkit-position: sticky;
    -moz-position: sticky;
    -ms-position: sticky;
    top: 98px;
  }
  .navbar {
    overflow: hidden;
  }
}
</style>
