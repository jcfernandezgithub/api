<template>
  <div class="pt-3">
    <div class="card">
      <div class="card-header">{{ item.name }}</div>
      <div class="card-body">{{ item.description }}</div>
    </div>
  </div>
</template>

<script>
export default {
  props: ["item"]
};
</script>
