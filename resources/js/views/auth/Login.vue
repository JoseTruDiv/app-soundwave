<script setup lang="ts">
  import FormLogin from '../components/widgets/FormLogin.vue';
  import '../../../css/style.css';
  import FormLoginMobile from '../components/widgets/FormLoginMobile.vue';
</script>

<template>
  <div class="fond-img-login">
    <div class="content-login row flex-column justify-center align-center">
      <FormLogin/>
      <FormLoginMobile/>
    </div>
  </div>
</template>
