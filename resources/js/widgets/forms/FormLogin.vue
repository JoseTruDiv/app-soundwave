<script setup lang="ts">
    import Logo_SoundWave from '../logos/Logo_SoundWave.vue';
    import { ref } from 'vue';
    import ButtonGoogle from '../social/ButtonGoogle.vue';

    const inputActive = ref(0);
    const openFormOFF = ref(false);
    const openFormON = ref(true);

    const activeInput = ()=>{
        inputActive.value = 1;
        openFormOFF.value = true;
        openFormON.value = false;
    }

</script>

<template>
    <div class="box-login-xxl px-2 py-3 row-column align-center justify-center g-1">
        <div class="w-80 g-1">
                <Logo_SoundWave/>
            <div id="divForm" class="box-input py-1 w-100" v-show="inputActive!==0">
                <form class="row-column g-1" action="" method="post">
                    <input class="input-login" type="text" name="nameUser" id="nameUser" placeholder="Email o username...">
                    <input class="input-login" type="password" name="passUser" id="passUser" placeholder="Password...">
                    <div class="w-100">
                        <button type="submit" style="outline: none;border: none;" class="btn-login">Login here</button>
                    </div>
                </form>
            </div>
            <div class="d-flex justify-center">
                <a @click="activeInput" id="openFormLogin" class="btn-login" :class="{'openFormOFF':openFormOFF,'openFormON':openFormON}">Login here</a>
            </div>
            <div class="d-flex justify-center pb-1">
                <ButtonGoogle/>
            </div>
            <div class="text-center">
                <p class="text">¿No tienes cuenta?, <a class="a-link" href="/registro">REGISTRATÉ</a></p>
            </div>
        </div>
    </div>
</template>


<style>

    .openFormOFF{
        display: none;
        padding: 0px;
    }

    .openFormON{
        display: block;
        margin: 1rem 0rem;
    }

</style>