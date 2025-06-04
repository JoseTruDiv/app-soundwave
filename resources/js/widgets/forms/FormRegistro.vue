<script setup lang="ts">
    import { ref } from 'vue';
    import { useForm } from '@inertiajs/vue3';
    import Logo_SoundWave from '../logos/Logo_SoundWave.vue';
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
            <div id="divForm" class="box-input py-1 w-100">
                <form class="row-column g-1" action="http://appsoundwavedomain.local/back/public/addUser" method="post">
                    <input class="input-login" type="text" name="nameUser" id="nameUser" placeholder="Email o username...">
                    <input class="input-login" type="password" name="passUser" id="passUser" placeholder="Password...">
                    <input class="input-login" type="password" name="passUser" id="passUser" placeholder="Repeat password...">
                    <div class="w-100">
                        <button type="submit" style="outline: none;border: none;" class="btn-login">sign up</button>
                    </div>
                </form>
            </div>
            <div class="d-flex justify-center pb-1">
                <ButtonGoogle/>
            </div>
            <div class="text-center">
                <p class="text"><a class="a-link d-flex align-center w-100 justify-center" href="/" style="text-decoration: none;gap: 5px;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8"/>
                </svg> Volver</a></p>
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