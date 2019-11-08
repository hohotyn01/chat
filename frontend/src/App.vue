<template>
  <div id="app">
    <div class="container heights-vh">
      <enter class="mb-5"></enter>
      <registration></registration>
    </div>
  </div>
</template>

<script>
  import Echo from "laravel-echo";
  import Enter from './components/Enter.vue';
  import Registration from './components/Registration.vue';


  export default {
    name: 'app',
    components: {
      Registration,
      Enter,
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

  .heights {
    height: 100%
  }

  .heights-vh {
    height: 100vh
  }

</style>
