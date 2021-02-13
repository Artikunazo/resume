<template>
  <div class="row row__navbar">
    <div class="lg-4"></div>
    <div class="col lg-8">
      <nav class="navbar text-center">
        <ul class="navbar__menu">
          <li>
            <a href="#home" title="Home">
              <picture class="certification">
                <!-- <source srcset="@/assets/img/profile.jp2" type="image/jp2" /> -->
                <!-- format supported by safari -->
                <source srcset="@/assets/img/profile.webp" type="image/webp" />
                <!-- format supported on many browsers -->
                <source srcset="@/assets/img/profile.jpeg" type="image/jpeg" />
                <!-- common supported format -->
                <img src="@/assets/img/profile.jpeg" alt="" />
                <!-- default -->
              </picture>
            </a>
          </li>
          <li>
            <a href="#tech-skills" title="Technical Skills">
              <i class="fas fa-code"></i>
            </a>
          </li>
          <li>
            <a
              href="https://github.com/Artikunazo"
              target="_blank"
              rel="noreferrer"
              title="Portfolio"
            >
              <i class="fab fa-github"></i>
            </a>
          </li>
          <li>
            <a href="#skills" title="Skills">
              <i class="fas fa-brain"></i>
            </a>
          </li>
          <li>
            <a href="#experience" title="Experience">
              <i class="fas fa-briefcase"></i>
            </a>
          </li>
          <li>
            <a href="#education" title="Education">
              <i class="fas fa-user-graduate"></i>
            </a>
          </li>
          <li>
            <a href="#contact" title="contact">
              <i class="fas fa-envelope"></i>
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </div>
</template>

<script>
export default {};
</script>

<style scoped>
.row__navbar {
  position: sticky;
  -webkit-position: sticky;
  -moz-position: sticky;
  -ms-position: sticky;
  top: 0;
  background-color: var(--background);
  z-index: 9999;
}
.navbar {
  width: 100%;
  color: white;
  overflow-x: scroll;
  white-space: nowrap;
}
.navbar__menu {
  margin: 10px 0;
  max-width: 1000px;
}
.navbar__menu li {
  display: inline-block;
  margin: 0 15px;
}

.navbar__menu li a {
  text-decoration: none;
  font-size: 2.2em;
  color: white;
}

.navbar__menu li a img {
  border-radius: 50%;
  width: 42px;
  height: 42px;
  vertical-align: bottom;
}
@media (min-width: 992px) {
  .navbar {
    overflow: hidden;
  }
}
</style>
