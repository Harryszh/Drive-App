<script setup>
import { RouterLink, RouterView } from 'vue-router'
import Header from './components/Header.vue';
import Footer from './components/Footer.vue'
import HelloWorld from './components/HelloWorld.vue'
</script>

<template>
  <div>
    <Header />
    <main>
      <RouterView />
    </main>
    <Footer />
  </div>
</template>

<style>
 body{
  margin: 0;
 }
 main{
  padding-top: 60px;
 }
 



</style>
