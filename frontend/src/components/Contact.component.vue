<template>
  <div class="col">
    <h2>Contact me</h2>
    <form class="contact" v-on:submit.prevent="sendForm">
      <div class="contact__element">
        <label for="ipName" class="contact__element--label"
          >Your name
          <input
            name="ipName"
            type="text"
            class="contact__element--input"
            v-model="form.name.value"
            required
          />
        </label>
      </div>
      <div class="contact__element">
        <label for="ipEmail"
          >Your E-mail
          <input
            name="ipEmail"
            type="email"
            class="contact__element--input"
            v-model="form.email.value"
            required
          />
        </label>
      </div>
      <div class="contact__element">
        <label for="ipSubject"
          >Subject
          <input
            name="ipSubject"
            type="text"
            class="contact__element--input"
            v-model="form.subject.value"
            required
          />
        </label>
      </div>
      <div class="contact__element">
        <label for="ipComment"
          >Your comment
          <textarea
            name="ipComment"
            type="text"
            class="contact__element--textarea"
            v-model="form.comment.value"
            required
            rows="4"
            cols="50"
          ></textarea>
        </label>
      </div>
      <div class="contact__element">
        <button type="submit" class="contact__element--button primary-button">
          Send
        </button>
      </div>
    </form>

    <div class="row" v-if="formBadFields.length > 0">
      <div class="col">
        <p>Por favor, corrige los siguientes campos:</p>
        <ul>
          <li v-for="badField in formBadFields" :key="badField">
            {{ badField }}
          </li>
        </ul>
      </div>
    </div>
  </div>
</template>

<script>
import { Utilities } from "@/assets/js/utilities.js";

export default {
  data() {
    return {
      form: {
        name: {
          value: "",
          regex: /^([a-zA-ZÀ-ÿ\u00f1\u00d1\s]+|[a-zA-ZÀ-ÿ\u00f1\u00d1\s]+\s{1}[a-zA-ZÀ-ÿ\u00f1\u00d1\s]{1,}|[a-zA-ZÀ-ÿ\u00f1\u00d1\s]+\s{1}[a-zA-ZÀ-ÿ\u00f1\u00d1\s]{3,}\s{1}[a-zA-ZÀ-ÿ\u00f1\u00d1\s]{1,})$/g,
          isValid: false
        },
        email: {
          value: "",
          regex: /^[^@]+@[^@]+\.[a-zA-Z]{2,}$/g,
          isValid: false
        },
        subject: {
          value: "",
          regex: /^([a-zA-ZÀ-ÿ\u00f1\u00d1\s]+|[a-zA-ZÀ-ÿ\u00f1\u00d1\s]+\s{1}[a-zA-ZÀ-ÿ\u00f1\u00d1\s]{1,}|[a-zA-ZÀ-ÿ\u00f1\u00d1\s]+\s{1}[a-zA-ZÀ-ÿ\u00f1\u00d1\s]{3,}\s{1}[a-zA-ZÀ-ÿ\u00f1\u00d1\s]{1,})$/g,
          isValid: false
        },
        comment: {
          value: "",
          regex: /^([a-zA-ZÀ-ÿ\u00f1\u00d1\s]+|[a-zA-ZÀ-ÿ\u00f1\u00d1\s]+\s{1}[a-zA-ZÀ-ÿ\u00f1\u00d1\s]{1,}|[a-zA-ZÀ-ÿ\u00f1\u00d1\s]+\s{1}[a-zA-ZÀ-ÿ\u00f1\u00d1\s]{3,}\s{1}[a-zA-ZÀ-ÿ\u00f1\u00d1\s]{1,})$/g,
          isValid: false
        }
      },
      formBadFields: []
    };
  },
  methods: {
    isFormValid() {
      let countFields = Object.keys(this.form).length;
      Object.keys(this.form).forEach((element, key) => {
        let item = this.form[element],
          regexObj = new RegExp(item.regex);

        if (regexObj.test(item.value)) {
          this.formBadFields.splice(key, 1);
        } else {
          countFields--;
          this.formBadFields[key] = element;
        }
      });

      if (countFields === Object.keys(this.form).length) {
        return true;
      }

      return false;
    },
    sendForm(e) {
      e.preventDefault();
      if (this.isFormValid()) {
        //Send data
        Utilities.sendRequest(
          "send-form",
          "POST",
          JSON.stringify(this.form)
        ).then(response => {
          this.form.name.value = "";
          this.form.email.value = "";
          this.form.subject.value = "";
          this.form.comment.value = "";
          alert(response.message);
          window.location.reload();
        });
      } else {
        alert("Algunos campos del formulario tienen contenido no aceptado");
      }
    }
  }
};
</script>

<style scope>
.contact__element {
  margin: 15px 0;
  width: 100%;
}

.contact__element--label {
  font-weight: lighter;
}

.contact__element:last-child {
  text-align: center;
}

.contact__element--textarea {
  max-width: 100%;
  background-color: var(--background-input);
  width: 100%;
  display: block;
  border: none;
  color: white;
  padding: 2px 5px;
  max-height: 300px;
}

.contact__element--input {
  background-color: var(--background-input);
  width: 100%;
  display: block;
  border: none;
  height: 2em;
  color: white;
  padding: 2px 5px;
}
</style>
