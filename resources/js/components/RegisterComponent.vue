<template>
  <div class="card">
    <header class="card-header">
      <a href class="float-right btn btn-outline-primary mt-1">Log in</a>
      <h4 class="card-title mt-2">Sign up</h4>
    </header>
    <article class="card-body">
      <form>
        <div class="form-row">
          <div class="col form-group">
            <label>First name</label>
            <input
              type="text"
              name="name"
              class="form-control"
              placeholder="Name..."
              v-model="user.name"
            >
          </div>
          <!-- form-group end.// -->
          <div class="col form-group">
            <label>Last name</label>
            <input
              type="text"
              class="form-control"
              name="last_name"
              placeholder="Last name..."
              v-model="user.last_name"
            >
          </div>
          <!-- form-group end.// -->
        </div>
        <!-- form-row end.// -->
        <div class="form-group">
          <label>Email address</label>
          <input
            type="email"
            name="email"
            v-model="user.email"
            class="form-control"
            placeholder="Email address.."
          >
          <small class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <!-- form-group end.// -->
        <div class="form-group">
          <label for>Image</label>
          <input class="form-control-file" type="file" @change="onFileSelected">
        </div>
        <!-- form-row.// -->
        <div class="form-group">
          <label>Create password</label>
          <input
            name="password"
            v-model="user.password"
            class="form-control"
            type="password"
            placeholder="Create password"
          >
        </div>
        <div class="form-group">
          <label>Confirm password</label>
          <input
            name="password_confirmation"
            class="form-control"
            type="password"
            placeholder="Confirm password"
            v-model="user.password_confirmation"
          >
        </div>
        <!-- form-group end.// -->
        <div class="form-group">
          <button
            type="submit"
            class="btn btn-primary btn-block"
            v-on:click.prevent="signup"
          >Register</button>
        </div>
        <!-- form-group// -->
        <small class="text-muted">
          By clicking the 'Sign Up' button, you confirm that you accept our
          <br>Terms of use and Privacy Policy.
        </small>
      </form>
    </article>
    <!-- card-body end .// -->
    <div class="border-top card-body text-center">
      Have an account?
      <a href>Log In</a>
    </div>
  </div>
  <!-- card.// -->
</template>


<script>
import VueResource from "vue-resource";
const endpoint = "http://homestead.test/api/v1/signup";

export default {
  data() {
    return {
      user: [
        {
          name: "",
          last_name: "",
          email: "",
          image: null,
          password: "",
          password_confirmation: ""
        }
      ]
    };
  },

  methods: {
    signup() {
      let formData = new FormData();

      formData.append("name", this.user.name);
      formData.append("last_name", this.user.last_name);
      formData.append("email", this.user.email);
      formData.append("image", this.user.image);
      formData.append("password", this.user.password);
      formData.append("password_confirmation", this.user.password_confirmation);

      this.$http
        .post("http://homestead.test/api/v1/signup", formData)
        .then(function(data) {
          console.log(data);
      });
    },
    onFileSelected(event) {
      var file = event.target.files[0];
      this.user.image = file;
    }
  }
};
</script>
