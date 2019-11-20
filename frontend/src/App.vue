<template>
  <div id="app">
    <div class="container heights-vh">
      <chat class="mb-5"></chat>
      <enter class="mb-5"></enter>
      <registration></registration>
    </div>
  </div>
</template>

<script>
  import Echo from "laravel-echo";
  import Chat from './components/Chat.vue';
  import Enter from './components/Enter.vue';
  import Registration from './components/Registration.vue';


  export default {
    name: 'app',
    components: {
      Chat,
      Enter,
      Registration,
    },
    created() {
      window.io = require('socket.io-client');
      window.Echo = new Echo({
        broadcaster: 'socket.io',
        host: window.location.hostname + ':6001',
        auth:
          {
            headers:
                    {
                      'Authorization': 'Bearer ' + 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9jaGF0LmxvY1wvYXBpXC9sb2dpbiIsImlhdCI6MTU3NDA5MjI1NywiZXhwIjoxNTc0MDk1ODU3LCJuYmYiOjE1NzQwOTIyNTcsImp0aSI6InMzY01ReVRpbmtxaDdpaUoiLCJzdWIiOjEwLCJwcnYiOiI4N2UwYWYxZWY5ZmQxNTgxMmZkZWM5NzE1M2ExNGUwYjA0NzU0NmFhIn0.5itWmriDc9wp0VEdqcwYqDvMyzhHo3S0GZQEjvRITcQ'
                    }
          }
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
