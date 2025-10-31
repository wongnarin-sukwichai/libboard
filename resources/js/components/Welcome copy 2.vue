<template>
    <body class="py-5 md:py-0">
        <!-- BEGIN: Mobile Menu -->
        <div
            class="mobile-menu md:hidden"
            :class="modalMenu === true ? 'mobile-menu--active' : ''"
        >
            <div class="mobile-menu-bar">
                <router-link to="/" class="flex mr-auto">
                    <img class="w-16" :src="logo" />
                </router-link>
                <div class="mr-4">
                    <box-icon
                        name="menu"
                        size="sm"
                        color="white"
                        @click="showMenu()"
                    ></box-icon>
                </div>
            </div>
            <div class="scrollable overflow-auto">
                <div class="mobile-menu-toggler">
                    <box-icon
                        name="x-circle"
                        color="white"
                        class="w-8 h-8"
                        @click="closeMenu()"
                    ></box-icon>
                </div>
                <ul class="scrollable__content py-2">
                    <li>
                        <a href="/" class="menu menu--active">
                            <div class="menu__icon">
                                <box-icon name="home" color="white"></box-icon>
                            </div>
                            <div class="menu__title">
                                Dashboard
                                <i
                                    data-lucide="chevron-down"
                                    class="menu__sub-icon transform rotate-180"
                                ></i>
                            </div>
                        </a>
                    </li>

                    <li class="menu__devider my-6"></li>
                    <li>
                        <a
                            href="https://lookerstudio.google.com/reporting/2a02ed26-a199-42b1-bc6c-ce8b1dd6874e"
                            target="_blank"
                            class="menu"
                        >
                            <div class="menu__icon">
                                <box-icon
                                    type="logo"
                                    name="google"
                                    color="white"
                                >
                                </box-icon>
                            </div>
                            <div class="menu__title">
                                Looker Studio
                                <i
                                    data-lucide="chevron-down"
                                    class="menu__sub-icon"
                                ></i>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- END: Mobile Menu -->

        <!-- BEGIN: Top Bar -->
        <div
            class="top-bar-boxed top-bar-boxed--simple-menu h-[70px] md:h-[65px] z-[51] border-b border-white/[0.08] mt-12 md:mt-0 -mx-3 sm:-mx-8 md:-mx-0 px-3 md:border-b-0 relative md:fixed md:inset-x-0 md:top-0 sm:px-8 md:px-10 md:pt-10 md:bg-gradient-to-b md:from-slate-100 md:to-transparent dark:md:from-darkmode-700"
        >
            <div class="h-full flex items-center">
                <!-- BEGIN: Logo -->
                <a href="" class="logo -intro-x hidden md:flex xl:w-[180px]">
                    <img
                        alt="Midone - HTML Admin Template"
                        class="logo__image w-20"
                        :src="logo"
                    />
                </a>
                <!-- END: Logo -->
                <!-- BEGIN: Breadcrumb -->
                <nav aria-label="breadcrumb" class="-intro-x h-[45px] mr-auto">
                    <ol class="breadcrumb breadcrumb-light">
                        <li class="breadcrumb-item">
                            <a href="#">Application</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Dashboard
                        </li>
                    </ol>
                </nav>
                <!-- END: Breadcrumb -->

                <!-- BEGIN: Search -->
                <div class="intro-x relative mr-3 sm:mr-6">
                    <div class="search hidden sm:block">
                        <input
                            type="text"
                            class="search__input form-control border-transparent"
                            placeholder="Search..."
                            @click="searchHistory()"
                        />
                        <box-icon
                            name="search"
                            color="#64748b"
                            class="search__icon"
                        ></box-icon>
                    </div>
                </div>
                <!-- END: Search -->

                <!-- END: Account Menu -->
            </div>
        </div>
        <!-- END: Top Bar -->
        <div class="flex overflow-hidden" v-if="isReady">
            <!-- BEGIN: Side Menu -->
            <nav class="side-nav side-nav--simple">
                <ul>
                    <li>
                        <a
                            href="javascript:;.html"
                            class="side-menu side-menu--active"
                        >
                            <div class="side-menu__icon">
                                <box-icon
                                    name="home"
                                    color="#64748b"
                                ></box-icon>
                            </div>
                            <div class="side-menu__title">
                                Dashboard
                                <div class="side-menu__sub-icon">
                                    <i data-lucide="chevron-down"></i>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a
                            href="https://lookerstudio.google.com/reporting/2a02ed26-a199-42b1-bc6c-ce8b1dd6874e"
                            target="_blank"
                            class="side-menu"
                        >
                            <div class="side-menu__icon">
                                <box-icon
                                    type="logo"
                                    name="google"
                                    color="#64748b"
                                >
                                </box-icon>
                            </div>
                            <div class="side-menu__title">
                                Dashboard
                                <div class="side-menu__sub-icon">
                                    <i data-lucide="chevron-down"></i>
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- END: Side Menu -->

            <!-- BEGIN: Content -->
            <div class="content">
                <div class="grid grid-cols-12 gap-6">
                    <div class="col-span-12 2xl:col-span-9">
                        <div class="grid grid-cols-12 gap-6">
                            <!-- BEGIN: Welcome Text -->
                            <div class="col-span-12 mt-6 -mb-6 intro-y">
                                <transition name="fade" mode="out-in">
                                    <div
                                        class="alert alert-dismissible show box bg-primary text-gray-200 flex items-center mb-6"
                                        role="alert"
                                        v-show="showWelcome"
                                    >
                                        <span class="flex items-center"
                                            ><box-icon
                                                name="smile"
                                                color="#cbd5e1"
                                                class="mr-2"
                                            ></box-icon>
                                            ยินดีต้อนรับเข้าสู่ระบบแดชบอร์ด |
                                            สำนักวิทยบริการ มหาวิทยาลัยมหาสารคาม
                                        </span>
                                        <div
                                            class="btn-close"
                                            data-tw-dismiss="alert"
                                            aria-label="Close"
                                        >
                                            <box-icon
                                                name="x"
                                                color="#cbd5e1"
                                                class="hover:cursor-pointer hover:scale-90"
                                                @click="welcome()"
                                            ></box-icon>
                                        </div>
                                    </div>
                                </transition>
                            </div>

                            <!-- BEGIN: Dashboard -->
                            <div
                                class="col-span-12 sm:col-span-6 lg:col-span-4 xl:col-span-3 mt-2"
                            >
                                <div class="intro-y flex items-center h-10">
                                    <h2
                                        class="text-lg font-medium truncate mr-5"
                                    >
                                        สถิติผู้เข้าใช้บริการ
                                    </h2>
                                    <select
                                        class="sm:ml-auto mt-3 sm:mt-0 sm:w-auto form-select box"
                                    >
                                        <!-- <option value="daily">รายวัน</option> -->
                                        <option value="monthly">รายวัน</option>
                                        <!-- <option value="yearly">รายปี</option> -->
                                    </select>
                                </div>
                                <div class="report-box-2 intro-y mt-5">
                                    <div class="box p-5">
                                        <div class="flex items-center">
                                            จำนวน / คน
                                            <div class="dropdown ml-auto">
                                                <a
                                                    class="dropdown-toggle w-5 h-5 block -mr-2"
                                                    href="javascript:;"
                                                    aria-expanded="false"
                                                    data-tw-toggle="dropdown"
                                                >
                                                    <i
                                                        data-lucide="more-vertical"
                                                        class="w-5 h-5 text-slate-500"
                                                    ></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="text-2xl font-medium mt-2">
                                            55
                                        </div>
                                        <div
                                            class="border-b border-slate-200 flex pb-2 mt-4"
                                        >
                                            <div class="text-slate-500 text-xs">
                                                <!-- Page views per second -->
                                            </div>
                                            <div
                                                class="text-success flex text-xs font-medium tooltip cursor-pointer ml-auto"
                                                title="49% Lower than last month"
                                            >
                                                <!-- 49% -->
                                                <i
                                                    data-lucide="chevron-up"
                                                    class="w-4 h-4 ml-0.5"
                                                ></i>
                                            </div>
                                        </div>
                                        <div
                                            class="mt-2 border-b broder-slate-200"
                                        >
                                            <div class="-mb-1.5 -ml-2.5">
                                                <div class="h-[220px]">
                                                    <canvas
                                                        ref="repPatron"
                                                    ></canvas>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="flex mt-3 text-gray-400 text-xs font-light"
                                        >
                                            <div># ข้อมูลวันที่</div>
                                            <div class="ml-auto">
                                                {{
                                                    moment().format(
                                                        "DD MMMM YYYY"
                                                    )
                                                }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END: Visitors -->

                            <!-- BEGIN: General Report -->
                            <div
                                class="col-span-12 lg:col-span-8 xl:col-span-5 mt-2"
                            >
                                <div
                                    class="intro-y block sm:flex items-center h-10"
                                >
                                    <h2
                                        class="text-lg font-medium truncate mr-5"
                                    >
                                        สถิติยืม-คืนหนังสือ
                                    </h2>
                                    <select
                                        class="sm:ml-auto mt-3 sm:mt-0 sm:w-auto form-select box"
                                    >
                                        <!-- <option value="daily">รายวัน</option> -->
                                        <option value="monthly">
                                            รายเดือน
                                        </option>
                                        <!-- <option value="yearly">รายปี</option> -->
                                    </select>
                                </div>
                                <div class="flex justify-center">
                                    <div class="h-auto w-full">
                                        <canvas
                                            class="hover:cursor-pointer"
                                            ref="repBook"
                                        ></canvas>
                                    </div>
                                </div>
                                <div class="report-box-2 intro-y mt-12 sm:mt-5">
                                    <div class="box sm:flex">
                                        <div
                                            class="px-8 py-4 flex flex-col justify-center flex-1"
                                        >
                                            <div
                                                class="relative text-3xl font-medium mt-4"
                                            >
                                                <box-icon
                                                    name="book"
                                                    size="sm"
                                                    color="#f59e0b"
                                                ></box-icon>
                                                <span
                                                    class="text-sm text-gray-400 pl-2"
                                                    >จำนวน</span
                                                >
                                                <span class="text-md px-2">{{
                                                    55
                                                }}</span>
                                                <span
                                                    class="text-sm text-gray-400"
                                                    >รายการยืม</span
                                                >
                                            </div>

                                            <div
                                                class="mt-4 text-slate-300 text-xs p-2 border border-dashed rounded-lg"
                                            >
                                                # ข้อมูลประจำปี
                                                {{ moment().format("YYYY") }}
                                            </div>
                                        </div>
                                        <div
                                            class="px-8 py-4 flex flex-col justify-center flex-1 sm:border-t-0 sm:border-l border-slate-200 border-dashed"
                                        >
                                            <div
                                                class="relative text-3xl font-medium mt-4"
                                            >
                                                <box-icon
                                                    name="book"
                                                    size="sm"
                                                    color="#f59e0b"
                                                ></box-icon>
                                                <span
                                                    class="text-sm text-gray-400 pl-2"
                                                    >จำนวน</span
                                                >
                                                <span class="text-md px-2">{{
                                                    55
                                                }}</span>
                                                <span
                                                    class="text-sm text-gray-400"
                                                    >รายการคืน</span
                                                >
                                            </div>

                                            <button
                                                class="btn btn-outline-secondary border-dashed w-full py-1 px-2 mt-4"
                                            >
                                                Request AI Analysis
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END: General Report -->

                            <!-- BEGIN: Users By Age -->
                            <div
                                class="col-span-12 sm:col-span-6 lg:col-span-4 xl:col-span-4 mt-2 lg:mt-6 xl:mt-2"
                            >
                                <div class="intro-y flex items-center h-10">
                                    <h2
                                        class="text-lg font-medium truncate mr-5"
                                    >
                                        สถิติฐานข้อมูลออนไลน์
                                    </h2>
                                </div>
                                <div class="report-box-2 intro-y mt-5">
                                    <div class="box p-5">
                                        <!-- ✅ ใช้ flex แยกซ้าย (ข้อความ) / ขวา (กราฟ) -->
                                        <div
                                            class="flex flex-col md:flex-row items-center md:items-start md:space-x-8"
                                        >
                                            <!-- 🔹 ส่วนข้อความอ้างอิง -->
                                            <div
                                                class="w-full md:w-1/2 text-gray-200 text-sm"
                                            >
                                                <p class="text-xs mb-4">
                                                    * ผู้เข้าใช้งานมากที่สุด 5
                                                    อันดับ
                                                </p>

                                                <ul class="space-y-2">
                                                    <li
                                                        class="flex items-center space-x-2"
                                                    >
                                                        <span
                                                            class="w-5 h-3 rounded-sm bg-sky-400"
                                                        ></span>
                                                        <span>ACM</span>
                                                    </li>
                                                    <li
                                                        class="flex items-center space-x-2"
                                                    >
                                                        <span
                                                            class="w-5 h-3 rounded-sm bg-blue-400"
                                                        ></span>
                                                        <span>IEL</span>
                                                    </li>
                                                    <li
                                                        class="flex items-center space-x-2"
                                                    >
                                                        <span
                                                            class="w-5 h-3 rounded-sm bg-amber-400"
                                                        ></span>
                                                        <span>Emerald</span>
                                                    </li>
                                                    <li
                                                        class="flex items-center space-x-2"
                                                    >
                                                        <span
                                                            class="w-5 h-3 rounded-sm bg-orange-400"
                                                        ></span>
                                                        <span>ACS</span>
                                                    </li>
                                                    <li
                                                        class="flex items-center space-x-2"
                                                    >
                                                        <span
                                                            class="w-5 h-3 rounded-sm bg-pink-400"
                                                        ></span>
                                                        <span
                                                            >SpringerLink</span
                                                        >
                                                    </li>
                                                </ul>
                                            </div>

                                            <!-- 🔹 ส่วนกราฟ -->
                                            <div
                                                class="w-full md:w-1/2 flex justify-center"
                                            >
                                                <canvas
                                                    ref="repDB"
                                                    class="max-w-[220px] mt-3"
                                                ></canvas>
                                            </div>
                                        </div>

                                        <!-- ปุ่มด้านล่าง -->
                                        <button
                                            class="btn btn-outline-secondary border-dashed w-full py-1 px-2 mt-6"
                                            @click="dbModalShow()"
                                        >
                                            แสดงรายการทั้งหมด
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <!-- END: Users By Age -->

                            <!-- BEGIN: Weekly Top Products -->

                            <!-- BEGIN: Users By Age -->
                            <div
                                class="col-span-12 sm:col-span-6 lg:col-span-4 xl:col-span-4 mt-2 lg:mt-6 xl:mt-2"
                            >
                                <div class="intro-y flex items-center h-10">
                                    <h2
                                        class="text-lg font-medium truncate mr-5"
                                    >
                                        สถิติสืบค้นผ่าน WebOPAC
                                    </h2>
                                </div>
                                <div class="report-box-2 intro-y mt-5">
                                    <div class="box p-5">
                                        <div class="tab-content mt-6">
                                            <div
                                                class="tab-pane active"
                                                id="active-users"
                                                role="tabpanel"
                                                aria-labelledby="active-users-tab"
                                            >
                                                <div class="relative">
                                                    <div class="h-[208px]">
                                                        <canvas
                                                            class="mt-3"
                                                            ref="repWeb"
                                                        ></canvas>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="flex mt-3 text-gray-400 text-xs font-light"
                                        >
                                            <div># ข้อมูลเดือน</div>
                                            <div class="ml-auto">
                                                {{
                                                    moment().format("MMMM YYYY")
                                                }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END: WebOpac -->

                            <!-- BEGIN: Users By Age -->
                            <div
                                class="col-span-12 sm:col-span-6 lg:col-span-4 xl:col-span-8 mt-2 lg:mt-6 xl:mt-2"
                            >
                                <div class="intro-y flex items-center h-10">
                                    <h2
                                        class="text-lg font-medium truncate mr-5"
                                    >
                                        สถิติจองพื้นที่ออนไลน์
                                    </h2>
                                </div>
                                <div class="report-box-2 intro-y mt-5">
                                    <div class="box p-5">
                                        <div class="tab-content mt-6">
                                            <div
                                                class="tab-pane active"
                                                id="active-users"
                                                role="tabpanel"
                                                aria-labelledby="active-users-tab"
                                            >
                                                <div class="relative">
                                                    <div class="h-[208px]">
                                                        <canvas
                                                            class="mt-3"
                                                            ref="repDbOnline"
                                                        ></canvas>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="flex mt-3 text-gray-400 text-xs font-light"
                                        >
                                            <div># ข้อมูลเดือน</div>
                                            <div class="ml-auto">
                                                {{
                                                    moment().format("MMMM YYYY")
                                                }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END: Users By Age -->
                        </div>
                    </div>
                    <div class="col-span-12 2xl:col-span-3">
                        <div class="2xl:border-l -mb-10 pb-10">
                            <div
                                class="2xl:pl-6 grid grid-cols-12 gap-x-6 2xl:gap-x-0 gap-y-6"
                            >
                                <!-- BEGIN: Recent Activities -->
                                <div
                                    class="col-span-12 md:col-span-6 xl:col-span-4 2xl:col-span-12 mt-3"
                                >
                                    <div class="intro-x flex items-center h-10">
                                        <h2
                                            class="text-lg font-medium truncate mr-5"
                                        >
                                            สถิติรับฟังเสียงผู้ใช้ (VOC)
                                        </h2>
                                        <!-- <a
                                              href=""
                                              class="ml-auto text-primary truncate"
                                              >Show More</a
                                          > -->
                                    </div>
                                    <div
                                        class="mt-5 relative before:block before:absolute before:w-px before:h-[85%] before:bg-slate-200 before:dark:bg-darkmode-400 before:ml-5 before:mt-5"
                                    >
                                        <div
                                            v-for="(voc, index) in vocList"
                                            :key="index"
                                            class="intro-x relative flex items-center mb-3"
                                        >
                                            <div
                                                class="before:block before:absolute before:w-20 before:h-px before:bg-slate-200 before:dark:bg-darkmode-400 before:mt-5 before:ml-5"
                                            >
                                                <div
                                                    class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden"
                                                >
                                                    <!-- color="#075985" -->
                                                    <box-icon
                                                        name="user-voice"
                                                        color="white"
                                                        size="md"
                                                    ></box-icon>
                                                </div>
                                            </div>
                                            <div
                                                class="box px-5 py-3 ml-4 flex-1 zoom-in"
                                            >
                                                <div class="flex items-center">
                                                    <div
                                                        class="font-medium text-balance break-all"
                                                    >
                                                        {{ voc?.detail ?? "" }}
                                                    </div>
                                                </div>
                                                <div
                                                    class="flex text-slate-500 mt-1 text-xs"
                                                >
                                                    <span
                                                        >{{ voc?.name ?? "" }}
                                                        *** :
                                                    </span>
                                                    <span class="pl-2">
                                                        {{
                                                            moment(
                                                                voc?.created_at ??
                                                                    ""
                                                            ).format("L") ?? ""
                                                        }}</span
                                                    >
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="intro-x relative flex items-center mb-3"
                                        >
                                            <div
                                                class="before:block before:absolute before:w-20 before:h-px before:bg-slate-200 before:dark:bg-darkmode-400 before:mt-5 before:ml-5"
                                            >
                                                <div
                                                    class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden"
                                                >
                                                    <box-icon
                                                        name="bar-chart"
                                                        color="white"
                                                        size="md"
                                                    ></box-icon>
                                                </div>
                                            </div>
                                            <div
                                                class="box px-5 py-3 ml-4 flex-1 zoom-in overflow-auto"
                                            >
                                                <div
                                                    class="flex justify-center"
                                                >
                                                    <div
                                                        class="h-auto"
                                                        v-if="isReady"
                                                    >
                                                        <canvas
                                                            class=""
                                                            ref="reportVocBar"
                                                        ></canvas>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="intro-x relative flex items-center mb-3"
                                        >
                                            <div
                                                class="before:block before:absolute before:w-20 before:h-px before:bg-slate-200 before:dark:bg-darkmode-400 before:mt-5 before:ml-5"
                                            >
                                                <div
                                                    class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden"
                                                >
                                                    <box-icon
                                                        name="bar-chart"
                                                        color="white"
                                                        size="md"
                                                    ></box-icon>
                                                </div>
                                            </div>
                                            <div
                                                class="box px-5 py-3 ml-4 flex-1 zoom-in overflow-auto"
                                            >
                                                <div
                                                    class="flex justify-center"
                                                >
                                                    <div
                                                        class="h-[208px]"
                                                        v-if="isReady"
                                                    >
                                                        <canvas
                                                            class=""
                                                            ref="reportVocTwo"
                                                        ></canvas>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- END: Recent Activities -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Content -->
        </div>

        <div v-else class="flex justify-center items-center">
            <box-icon name="loader-alt" size="lg" animation="spin"></box-icon>
        </div>

        <!-- BEGIN: Dark Mode Switcher-->
        <div
            data-url="simple-menu-dark-dashboard-overview-2.html"
            class="dark-mode-switcher cursor-pointer shadow-md fixed bottom-0 right-0 box dark:bg-dark-2 border rounded-full w-40 h-12 flex items-center justify-center z-50 mb-10 mr-10"
        >
            <div class="mr-4 text-gray-700 dark:text-gray-300">Dark Mode</div>
            <div
                class="dark-mode-switcher__toggle border"
                :class="
                    isDarkMode === true
                        ? 'dark-mode-switcher__toggle--active'
                        : ''
                "
                @click="darkMode()"
            ></div>
        </div>
        <div></div>
        <!-- END: Dark Mode Switcher-->
    </body>

    <!-- Modal Show -->
    <transition name="fade" mode="out-in">
        <div
            class="fixed inset-0 flex items-center justify-center z-50 bg-black bg-opacity-50"
            v-if="dbModal"
        >
            <!-- Content ของ modal -->
            <div
                class="bg-gray-800 p-6 rounded-lg lg:w-1/3 h-3/4 overflow-y-auto"
            >
                <p class="text-lg text-white">
                    ** สถิติฐานข้อมูลออนไลน์ทั้งหมด **
                </p>
                <hr class="border-dashed" />
                <div class="mt-5">
                    <div class="intro-y">
                        <div
                            class="box px-4 py-4 mb-3 flex items-center zoom-in"
                        >
                            <div
                                class="w-10 h-10 flex-none image-fit rounded-md overflow-hidden"
                            >
                                <img alt="Midone - HTML Admin Template" />
                            </div>
                            <div class="ml-4 mr-auto">
                                <div class="font-medium">abc</div>
                                <div class="text-slate-500 text-xs mt-0.5">
                                    wongnarin.s@msu.ac.th
                                </div>
                            </div>
                            <div
                                class="py-1 px-2 rounded-full text-xs bg-success text-white cursor-pointer font-medium"
                            >
                                5
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="border-dashed" />
                <div class="mt-2 flex justify-end">
                    <button
                        class="bg-red-500 text-white px-4 py-2 rounded"
                        @click="dbModalShow()"
                    >
                        close
                    </button>
                </div>
            </div>
        </div>
    </transition>
</template>

<script>
import axios from "axios";
import "boxicons";
import moment from "moment"; //format date thai
import "moment/dist/locale/th";
moment.locale("th");

import {
    Chart,
    BarController,
    BarElement,
    CategoryScale,
    LinearScale,
    Tooltip,
    Legend,
} from "chart.js";

Chart.register(
    BarController,
    BarElement,
    CategoryScale,
    LinearScale,
    Tooltip,
    Legend
);

export default {
    async mounted() {
        await this.loadAllData();
        this.isReady = true;

        this.$nextTick(() => {
            setTimeout(() => {
                this.repIncome();
                this.repBookReturn();
                this.repDbOnline();
                // this.repWebOPAC();
                this.repVoc();
            }, 500);
        });
    },
    data() {
        return {
            isReady: false,
            logo: "/img/library.png",
            isDarkMode: true,
            showWelcome: true,
            modalMenu: false,
            dbModal: false,
            moment: moment,
            vocList: "",
            chart: null,
            intervalId: null,
            progressIndex: 0,
            fullData: [],
            labels: [],
        };
    },
    methods: {
        async loadAllData() {
            await Promise.all([
                this.repIncome(),
                this.repBookReturn(),
                this.repDbOnline(),
                // this.repWebOPAC(),
                this.repVoc(),
            ]);
        },
        dbModalShow() {
            this.dbModal = !this.dbModal;
        },
        showMenu() {
            this.modalMenu = true;
        },
        darkMode() {
            if (this.isDarkMode == false) {
                this.isDarkMode = true;
                document.documentElement.classList.add("dark"); //add class ที่ <html> ใน welcome.blade.php
            } else {
                this.isDarkMode = false;
                document.documentElement.classList.remove("dark");
            }
        },
        welcome() {
            this.showWelcome = false;
        },
        async repIncome() {
            
            this.fullData = [12, 9, 14, 20, 16, 10, 18, 23, 19, 25, 22, 17];
            this.labels = [
                "08.00",
                "08.10",
                "08.20",
                "08.30",
                "08.40",
                "08.50",
                "09.00",
                "08.10",
                "08.20",
                "08.30",
                "08.40",
                "08.50",
            ];

            console.log("Canvas:", this.$refs.repPatron);
console.log("Context:", this.$refs.repPatron?.getContext("2d"));

            Chart.defaults.font.family = "Anuphan";
            const ctx = this.$refs.repPatron;

            // ✅ สร้างกราฟเริ่มต้น
            this.chart = new Chart(ctx, {
                type: "line",
                data: {
                    labels: [],
                    datasets: [
                        {
                            label: "จำนวนผู้เข้าใช้บริการ",
                            data: [],
                            fill: false,
                            borderColor: "rgba(59,130,246,0.9)",
                            backgroundColor: "rgba(59,130,246,0.7)",
                            tension: 0.3,
                            borderWidth: 2,
                            pointRadius: 4,
                            pointHoverRadius: 6,
                        },
                    ],
                },
                options: {
                    responsive: true,
                    animation: { duration: 800, easing: "easeOutQuart" },
                    scales: {
                        x: {
                            ticks: { color: "white" },
                            grid: { display: false },
                        },
                        y: {
                            beginAtZero: true,
                            ticks: { color: "white" },
                            grid: { color: "rgba(255,255,255,0.1)" },
                        },
                    },
                    plugins: {
                        legend: { labels: { color: "white" } },
                        tooltip: {
                            backgroundColor: "#333",
                            titleColor: "#fff",
                            bodyColor: "#fff",
                        },
                    },
                },
            });

            // ✅ เริ่มแสดงผลทีละจุด
            this.startProgressiveDisplay();
        },
        startProgressiveDisplay() {
            this.progressIndex = 0;
            this.chart.data.labels = [];
            this.chart.data.datasets[0].data = [];

            // ล้าง interval เดิมถ้ามี
            if (this.intervalId) clearInterval(this.intervalId);

            this.intervalId = setInterval(() => {
                if (this.progressIndex < this.fullData.length) {
                    // เพิ่มข้อมูลทีละเดือน
                    this.chart.data.labels.push(
                        this.labels[this.progressIndex]
                    );
                    this.chart.data.datasets[0].data.push(
                        this.fullData[this.progressIndex]
                    );
                    this.chart.update();
                    this.progressIndex++;
                } else {
                    clearInterval(this.intervalId); // หยุดเมื่อครบ
                }
            }, 1000); //
        },
        async repBookReturn() {
            // ตัวอย่างข้อมูล
            const borrowData = [12, 9, 14, 20, 16, 10, 18, 23, 19, 25, 22, 17]; // ยืม
            const returnData = [8, 7, 12, 18, 14, 9, 15, 21, 16, 22, 20, 14]; // คืน

            // ตั้งค่าฟอนต์
            Chart.defaults.font.family = "Anuphan";
            const ctx = this.$refs.repBook; // ✅ ต้องมี .getContext('2d')

            // สร้างกราฟ
            new Chart(ctx, {
                type: "bar",
                data: {
                    labels: [
                        "01",
                        "02",
                        "03",
                        "04",
                        "05",
                        "06",
                        "07",
                        "08",
                        "09",
                        "10",
                        "11",
                        "12",
                    ],
                    datasets: [
                        {
                            label: "ยืมหนังสือ",
                            data: borrowData,
                            backgroundColor: "#4bc0c0", // 🟢 เขียว
                            borderColor: "#fff",
                            borderWidth: 2,
                            borderRadius: 8,
                            borderSkipped: false,
                        },
                        {
                            label: "คืนหนังสือ",
                            data: returnData,
                            backgroundColor: "#36a2eb", // 🔵 ฟ้า
                            borderColor: "#fff",
                            borderWidth: 2,
                            borderRadius: 8,
                            borderSkipped: false,
                        },
                    ],
                },
                options: {
                    responsive: true,
                    interaction: { mode: "index", intersect: false }, // Hover แสดงทั้งคู่
                    animation: { duration: 2000, easing: "easeOutBounce" },
                    plugins: {
                        legend: {
                            display: true,
                            labels: {
                                color: "white",
                                font: { family: "Anuphan" },
                            },
                        },
                        tooltip: {
                            backgroundColor: "#333",
                            titleColor: "#fff",
                            bodyColor: "#fff",
                        },
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            ticks: { color: "white" },
                            grid: { color: "rgba(255,255,255,0.1)" },
                        },
                        x: {
                            ticks: { color: "white" },
                            grid: { display: false },
                        },
                    },
                },
            });
        },
        async repDbOnline() {
            const labels = ["ACM", "IEL", "ACS", "Emerald", "SpringerLink"];
            const data = [12, 9, 14, 29, 32]; // ตัวอย่างข้อมูล

            Chart.defaults.font.family = "Anuphan";
            const ctx = this.$refs.repDB;

            new Chart(ctx, {
                type: "doughnut",
                data: {
                    labels: labels,
                    datasets: [
                        {
                            label: "",
                            data: data,
                            backgroundColor: [
                                "#4bc0c0",
                                "#36a2eb",
                                "#ff9f40",
                                "#ffcd56",
                                "#ff6384",
                            ],
                            borderColor: [
                                "#4bc0c0",
                                "#36a2eb",
                                "#ff9f40",
                                "#ffcd56",
                                "#ff6384",
                            ],
                            borderWidth: 3,
                            borderColor: "#fff",
                            borderWidth: 2,
                            hoverOffset: 15,
                        },
                    ],
                },
                options: {
                    responsive: true,
                    animation: {
                        animateScale: true,
                        animateRotate: true,
                        duration: 2000,
                        easing: "easeOutBack",
                    },
                    plugins: {
                        legend: {
                            display: false,
                            position: "top",
                            labels: {
                                color: "white", // <- ใส่ตรงนี้!
                            },
                        },
                        tooltip: {
                            backgroundColor: "#333",
                            titleColor: "#fff",
                            bodyColor: "#fff",
                        },
                    },
                },
            });
        },
        async repWebOPAC() {
            const data = [12, 9, 14, 20, 16, 10, 18, 23, 19, 25, 22, 17];
            const labels = [
                "มกราคม",
                "กุมภาพันธ์",
                "มีนาคม",
                "เมษายน",
                "พฤษภาคม",
                "มิถุนายน",
                "กรกฎาคม",
                "สิงหาคม",
                "กันยายน",
                "ตุลาคม",
                "พฤศจิกายน",
                "ธันวาคม",
            ];

            Chart.defaults.font.family = "Anuphan";
            const ctx = this.$refs.repWeb;

            this.chart = new Chart(ctx, {
                type: "line",
                data: {
                    labels,
                    datasets: [
                        {
                            label: "จำนวนผู้เข้าใช้บริการ",
                            data: data,
                            fill: true,
                            borderColor: "rgba(34,197,94,1)", // 🟢 เส้นเขียวหลัก
                            backgroundColor: "rgba(34,197,94,0.2)", // พื้นหลังเขียวอ่อน
                            tension: 0.4, // ความโค้งของเส้น
                            borderWidth: 2,
                            pointBackgroundColor: "rgba(34,197,94,1)",
                            pointBorderColor: "#fff",
                            pointRadius: 4,
                            pointHoverRadius: 6,
                        },
                    ],
                },
                options: {
                    responsive: true,
                    animation: { duration: 1500, easing: "easeOutQuart" },
                    scales: {
                        x: {
                            ticks: { color: "white" },
                            grid: { display: false },
                        },
                        y: {
                            beginAtZero: true,
                            ticks: { color: "white" },
                            grid: { color: "rgba(255,255,255,0.1)" },
                        },
                    },
                    plugins: {
                        legend: {
                            labels: {
                                color: "white",
                                font: { family: "Anuphan" },
                            },
                        },
                        tooltip: {
                            backgroundColor: "#333",
                            titleColor: "#fff",
                            bodyColor: "#fff",
                        },
                    },
                },
            });
        },
        async repVoc() {},
        memberShow() {
            this.showMemberOne = !this.showMemberOne;
            this.showMemberTwo = !this.showMemberTwo;
        },
        modalShow() {
            this.isModalShow = !this.isModalShow;
        },
    },
};
</script>

<style scoped>
.background-video {
    position: absolute;
    top: 50%;
    left: 50%;
    min-width: 100%;
    min-height: 100%;
    width: auto;
    height: auto;
    transform: translate(-50%, -50%);
    object-fit: cover;
    z-index: 0;
    opacity: 0.6; /* เพิ่มความโปร่งใสถ้าต้องการ */
}

.grid {
    position: relative;
    z-index: 10;
    color: white;
}
</style>
