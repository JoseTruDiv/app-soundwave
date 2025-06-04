<script setup lang="ts">  
  import FormLogin from '@/widgets/forms/FormLogin.vue';
  import FormLoginMobile from '@/widgets/forms/FormLoginMobile.vue';
</script>

<template>
  <div class="fond-img-login">
    <div class="content-login row flex-column justify-center align-center">
      <FormLogin/>
      <FormLoginMobile/>
    </div>
  </div>
</template>