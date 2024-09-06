<template>
    <!-- component -->
    <div class="bg-white dark:bg-gray-900">
        <div class="flex justify-center h-screen">
            <img class="hidden bg-cover lg:block lg:w-2/3" :src="banner" />

            <div
                class="flex items-center w-full max-w-md px-6 mx-auto lg:w-2/6"
            >
                <div class="flex-1">
                    <div class="text-center">
                        <img
                            class="mx-auto h-24 w-auto bg-gray-800 p-4 rounded-lg"
                            :src="logo"
                            alt="Your Company"
                        />
                        <p class="mt-4 text-gray-700 text-md">
                            ระบบนำเสนอข้อมูล ( Dashboard )
                        </p>
                        <p class="text-gray-400 text-sm">
                            สำนักวิทยบริการ มหาวิทยาลัยมหาสารคาม
                        </p>
                    </div>

                    <div class="mt-6">
                        <form @submit.prevent='login()'>
                            <div>
                                <label
                                    for="email"
                                    class="block mb-2 text-sm text-gray-600 dark:text-gray-200"
                                    >: Email</label
                                >
                                <input
                                    type="email"
                                    class="block w-full px-4 py-2 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40"
                                    v-model="auth.email"
                                    required
                                />
                            </div>

                            <div class="mt-2">
                                <div class="flex justify-between mb-2">
                                    <label
                                        for="password"
                                        class="text-sm text-gray-600 dark:text-gray-200"
                                        >: Password</label
                                    >
                                </div>

                                <input
                                    type="password"
                                    class="block w-full px-4 py-2 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40"
                                    v-model="auth.password"
                                    required
                                />
                            </div>

                            <div class="mt-6">
                                <button
                                    class="w-full px-4 py-2 tracking-wide text-white transition-colors duration-200 transform bg-gray-700 rounded-md hover:bg-gray-800"
                                >
                                    Sign in
                                </button>
                            </div>
                        </form>

                        <p class="mt-6 text-sm text-center text-gray-400">
                            หากพบปัญหาการใช้งาน กรุณาติดต่อ โทร. 2404
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import Swal from "sweetalert2";
import "boxicons";

export default {
    mounted() {
        console.log("Component mounted.");
    },
    data() {
        return {
            banner: "/img/1.jpg",
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
                await this.$store.dispatch("login", this.auth);
                this.$router.push({ name: "home" });
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
