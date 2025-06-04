<script setup lang="ts">
import { ref } from 'vue';
import { useForm } from '@inertiajs/vue3';
import Logo_SoundWave from '../logos/Logo_SoundWave.vue';
import ButtonGoogle from '../social/ButtonGoogle.vue';

const form = useForm({
    email: '', 
    password: '',
    password_confirmation: '',
});

const submit = () => {
    form.post(route('register'), { 
        onFinish: () => form.reset('password', 'password_confirmation'), 
    });
};
</script>

<template>
    <div class="box-login-xxl px-2 py-3 row-column align-center justify-center g-1">
        <div class="w-80 g-1">
            <Logo_SoundWave/>
            <div id="divForm" class="box-input py-1 w-100">
                <form @submit.prevent="submit" class="row-column g-1">
                    <input
                        class="input-login"
                        type="email" name="email"
                        id="email"
                        placeholder="Email o username..."
                        v-model="form.email"
                        required />
                    <div v-if="form.errors.email" class="text-red-500 text-xs mt-1">{{ form.errors.email }}</div>

                    <input
                        class="input-login"
                        type="password"
                        name="password"
                        id="password"
                        placeholder="Password..."
                        v-model="form.password"
                        required
                    />
                    <div v-if="form.errors.password" class="text-red-500 text-xs mt-1">{{ form.errors.password }}</div>

                    <input
                        class="input-login"
                        type="password"
                        name="password_confirmation"
                        id="password_confirmation"
                        placeholder="Repeat password..."
                        v-model="form.password_confirmation"
                        required
                    />
                    <div v-if="form.errors.password_confirmation" class="text-red-500 text-xs mt-1">{{ form.errors.password_confirmation }}</div>

                    <div class="w-100">
                        <button
                            type="submit"
                            style="outline: none;border: none;"
                            class="btn-login"
                            :disabled="form.processing" >
                            sign up
                        </button>
                    </div>
                </form>
            </div>
            <div class="d-flex justify-center pb-1">
                <ButtonGoogle/>
            </div>
            <div class="text-center">
                <p class="text">
                    <a class="a-link d-flex align-center w-100 justify-center" href="/" style="text-decoration: none;gap: 5px;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8"/>
                        </svg> Volver
                    </a>
                </p>
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