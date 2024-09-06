<template>
    <div class="min-h-full">
        <!-- Replace with your content -->
        <main>
            <router-view v-slot="{ Component, route }">
                <transition name="fade" mode="out-in">
                    <div :key="route.name">
                        <component :is="Component"> </component>
                    </div>
                </transition>
            </router-view>
        </main>
    </div>
</template>

<script>
import Swal from "sweetalert2";

export default {
    data() {
        return {
            logo: "/img/library.png",
            auth: {
                email: "",
                password: "",
            },
            showError: false,
        };
    },
    methods: {
        async login() {
            try {
                await this.$store.dispatch("login", this.auth); //dispatch ส่งค่าไปยัง store ของ vuex
                this.$router.push({ name: "home" }); //หากสำเร็จให้เปิด router ชื่อ home แบบ SPA
            } catch (err) {
                Swal.fire({
                    icon: "error",
                    title: "ผิดพลาด",
                    text: "กรุณาตรวจสอบ Email, Password",
                    timer: 1500,
                });
            }
        },
    },
};
</script>
