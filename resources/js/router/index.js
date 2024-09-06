import { createRouter, createWebHistory } from "vue-router";
import Welcome from "../components/Welcome.vue";
import Home from "../components/Home.vue";
import Dashboard from "../components/Dashboard.vue";
import Original from "../components/Original.vue"

import store from "../store";

const routes = [
    {
        path: "/",
        name: "welcome",
        component: Welcome,
    },
    {
        path: "/home",
        name: "home",
        component: Home,
        redirect: {
            name: "dashboard",
        },
        meta: {
            guard: "auth",
        },
        children: [
            {
                path: "/dashboard",
                name: "dashboard",
                component: Dashboard,
                meta: {
                    guard: "auth",
                },
            },
        ],
    },
    {
        path: "/original",
        name: "original",
        component: Original,
        meta: {
            guard: "auth",
        },
    }
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

router.beforeEach((to, from, next) => {
    if (store.getters.user) {
        if (to.matched.some((route) => route.meta.guard === "guest"))
            next({ name: "home" });
        else next();
    } else {
        if (to.matched.some((route) => route.meta.guard === "auth"))
            next({ name: "login" });
        else next();
    }
});

export default router;
