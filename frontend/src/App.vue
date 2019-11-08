<template>
  <div id="app">
    <img alt="Vue logo" src="./assets/logo.png">
    <HelloWorld msg="Welcome to Your Vue.js App"/>
  </div>
</template>

<script>
import HelloWorld from './components/HelloWorld.vue';
import Echo from "laravel-echo";


export default {
  name: 'app',
  components: {
    HelloWorld
  },
  created() {
    window.io = require('socket.io-client');

    window.Echo = new Echo({
      broadcaster: 'socket.io',
      host: window.location.hostname + ':6001'
    });
  }
}
</script>

<style>
#app {
  font-family: 'Avenir', Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
