<template>
  <div>
    <navigation-component></navigation-component>
    <div class="container mt-3">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <body-component v-for="item in items" :key="item.id" :item="item"></body-component>
        </div>
        <side-component></side-component>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      items: [
        {
          id: 1,
          name: "Item #1",
          description: "This is the description.",
          created_at: "10122019 20:00:01"
        },
        {
          id: 2,
          name: "Item #2",
          description: "This is the description.",
          created_at: "10122019 20:00:01"
        }
      ]
    };
  }
};
</script>