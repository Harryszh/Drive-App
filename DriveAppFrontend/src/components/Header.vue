
<!-- Header.vue -->
<template>
  <header>
    <h1>Meine Anwendung</h1>
    <nav>
      <RouterLink to="/">Home</RouterLink>
      <RouterLink to="/login">Login</RouterLink>
    </nav>
  </header>
</template>

<script setup>
import { RouterLink } from 'vue-router';
</script>

<style scoped>
header {
  background-color: blue;
  color: white;
  padding: 10px;
}
</style>