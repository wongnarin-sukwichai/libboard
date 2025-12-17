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
                                        class="text-lg font-medium truncate mr-5 text-slate-900 dark:text-white"
                                    >
                                        สถิติผู้เข้าใช้บริการ
                                    </h2>
                                    <select
                                        class="sm:ml-auto mt-3 sm:mt-0 sm:w-auto form-select box cursor-pointer text-slate-900 dark:text-white"
                                    >
                                        <!-- <option value="daily">รายวัน</option> -->
                                        <option value="monthly">รายวัน</option>
                                        <!-- <option value="yearly">รายปี</option> -->
                                    </select>
                                </div>
                                <div class="report-box-2 intro-y mt-5">
                                    <div class="box p-5">
                                        <ul class="space-y-2">
                                            <li
                                                class="flex items-center justify-between"
                                            >
                                                <div
                                                    class="flex items-center space-x-2 text-slate-900 dark:text-white"
                                                >
                                                    <span
                                                        class="w-5 h-3 rounded-sm bg-sky-400 mr-2"
                                                    ></span>
                                                    A
                                                </div>
                                                <span
                                                    class="text-end text-slate-900 dark:text-white"
                                                    >{{
                                                        formatShort(
                                                            this.incomeA
                                                        )
                                                    }}</span
                                                >
                                            </li>
                                            <li
                                                class="flex items-center justify-between"
                                            >
                                                <div
                                                    class="flex items-center space-x-2 text-slate-900 dark:text-white"
                                                >
                                                    <span
                                                        class="w-5 h-3 rounded-sm bg-amber-400 mr-2"
                                                    ></span>
                                                    B
                                                </div>
                                                <span
                                                    class="text-end text-slate-900 dark:text-white"
                                                    >{{
                                                        formatShort(
                                                            this.incomeB
                                                        )
                                                    }}</span
                                                >
                                            </li>
                                            <li
                                                class="flex items-center justify-between"
                                            >
                                                <div
                                                    class="flex items-center space-x-2 text-slate-900 dark:text-white"
                                                >
                                                    <span
                                                        class="w-5 h-3 rounded-sm bg-pink-400 mr-2"
                                                    ></span>
                                                    MSU Space
                                                </div>
                                                <span
                                                    class="text-end text-slate-900 dark:text-white"
                                                    >{{
                                                        formatShort(
                                                            this.incomeC
                                                        )
                                                    }}</span
                                                >
                                            </li>
                                            <li
                                                class="flex items-center justify-between"
                                            >
                                                <div
                                                    class="flex items-center space-x-2"
                                                >
                                                    #
                                                </div>
                                                <span
                                                    class="text-end text-slate-900 dark:text-white"
                                                    >{{
                                                        formatShort(
                                                            this.incomeAll
                                                        )
                                                    }}</span
                                                >
                                            </li>
                                        </ul>

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
                                        class="text-lg font-medium truncate mr-5 text-slate-900 dark:text-white"
                                    >
                                        สถิติยืม-คืนทรัพยากรสารสนเทศ
                                    </h2>
                                    <select
                                        class="sm:ml-auto mt-3 sm:mt-0 sm:w-auto form-select box cursor-pointer text-slate-900 dark:text-white"
                                        v-model="selectBook"
                                    >
                                        <!-- <option value="daily">รายวัน</option> -->
                                        <option value="year">รายปี</option>
                                        <option value="month">รายเดือน</option>
                                    </select>
                                </div>
                                <div class="flex justify-center">
                                    <div class="h-auto w-full">
                                        <!-- รายปี -->
                                        <canvas
                                            v-show="selectBook === 'year'"
                                            class="hover:cursor-pointer"
                                            ref="repBook"
                                        ></canvas>

                                        <!-- รายเดือน -->
                                        <canvas
                                            v-show="selectBook === 'month'"
                                            class="hover:cursor-pointer"
                                            ref="repBookMonth"
                                        ></canvas>
                                    </div>
                                </div>
                                <div class="report-box-2 intro-y mt-12 sm:mt-5">
                                    <div class="box sm:flex">
                                        <div
                                            class="px-8 py-4 flex flex-col justify-center flex-1"
                                        >
                                            <div
                                                class="relative text-3xl font-medium mt-4 text-slate-900 dark:text-white"
                                            >
                                                <box-icon
                                                    name="book"
                                                    size="sm"
                                                    color="#22C55E"
                                                ></box-icon>
                                                <span class="text-sm pl-2"
                                                    >รายการยืม</span
                                                >
                                                <span
                                                    class="text-md pl-2 text-amber-400"
                                                    v-if="selectBook === 'year'"
                                                    >{{
                                                        formatShort(borrowAll)
                                                    }}</span
                                                >

                                                <span
                                                    class="text-md pl-2 text-amber-400"
                                                    v-else
                                                    >{{
                                                        formatShort(
                                                            borrowMonthAll
                                                        )
                                                    }}</span
                                                >
                                            </div>

                                            <div
                                                class="btn btn-outline-secondary border-dashed w-full py-1 px-2 mt-4 text-slate-300 text-xs"
                                            >
                                                # ข้อมูลประจำปี
                                                {{ moment().format("YYYY") }}
                                            </div>
                                        </div>
                                        <div
                                            class="px-8 py-4 flex flex-col justify-center flex-1 sm:border-t-0 sm:border-l border-slate-200 border-dashed"
                                            v-if="selectBook === 'year'"
                                        >
                                            <div
                                                class="relative text-3xl font-medium mt-4 text-slate-900 dark:text-white"
                                            >
                                                <box-icon
                                                    name="book"
                                                    size="sm"
                                                    color="#36a2eb"
                                                ></box-icon>
                                                <span class="text-sm pl-2"
                                                    >รายการคืน</span
                                                >
                                                <span
                                                    class="text-md pl-2 text-amber-500"
                                                    >{{
                                                        formatShort(returnAll)
                                                    }}</span
                                                >
                                            </div>

                                            <button
                                                class="btn btn-outline-secondary border-dashed w-full py-1 px-2 mt-4 text-slate-300 text-xs"
                                                @click="repOpenAI()"
                                            >
                                                Request AI Analysis
                                                <!--# ข้อมูลประจำปี
                                                {{ moment().format("YYYY") }}-->
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
                                        class="text-lg font-medium truncate mr-5 text-slate-900 dark:text-white"
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
                                                <p
                                                    class="text-xs mb-4 text-slate-900 dark:text-white"
                                                >
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
                                                        <span
                                                            class="text-slate-900 dark:text-white"
                                                            >{{
                                                                dbName[0]
                                                            }}</span
                                                        >
                                                    </li>
                                                    <li
                                                        class="flex items-center space-x-2"
                                                    >
                                                        <span
                                                            class="w-5 h-3 rounded-sm bg-emerald-400"
                                                        ></span>
                                                        <span
                                                            class="text-slate-900 dark:text-white"
                                                            >{{
                                                                dbName[1]
                                                            }}</span
                                                        >
                                                    </li>
                                                    <li
                                                        class="flex items-center space-x-2"
                                                    >
                                                        <span
                                                            class="w-5 h-3 rounded-sm bg-amber-400"
                                                        ></span>
                                                        <span
                                                            class="text-slate-900 dark:text-white"
                                                            >{{
                                                                dbName[2]
                                                            }}</span
                                                        >
                                                    </li>
                                                    <li
                                                        class="flex items-center space-x-2"
                                                    >
                                                        <span
                                                            class="w-5 h-3 rounded-sm bg-orange-400"
                                                        ></span>
                                                        <span
                                                            class="text-slate-900 dark:text-white"
                                                            >{{
                                                                dbName[3]
                                                            }}</span
                                                        >
                                                    </li>
                                                    <li
                                                        class="flex items-center space-x-2"
                                                    >
                                                        <span
                                                            class="w-5 h-3 rounded-sm bg-pink-400"
                                                        ></span>
                                                        <span
                                                            class="text-slate-900 dark:text-white"
                                                            >{{
                                                                dbName[4]
                                                            }}</span
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

                            <!-- BEGIN: Weekly Top Products -->

                            <!-- BEGIN: Users By Age -->
                            <div
                                class="col-span-12 sm:col-span-6 lg:col-span-4 xl:col-span-4 mt-2 lg:mt-6 xl:mt-2"
                            >
                                <div class="intro-y flex items-center h-10">
                                    <h2
                                        class="text-lg font-medium truncate mr-5 text-slate-900 dark:text-white"
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
                                        <span
                                            class="flex text-center justify-center text-gray-900"
                                            >** ทั้งหมด
                                            <span class="text-amber-500 px-2"
                                                >{{
                                                    formatShort(this.wepOPACAll)
                                                }}
                                            </span>
                                            รายการสืบค้น **</span
                                        >
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
                                        class="text-lg font-medium truncate mr-5 text-slate-900 dark:text-white"
                                    >
                                        สถิติจองพื้นที่ออนไลน์
                                    </h2>
                                    <!-- <div
                                        class="sm:ml-auto mt-3 sm:mt-0 sm:w-auto p-3 box cursor-pointer hover:bg-gray-800 hover:shadow-lg text-slate-900 dark:text-white"
                                    >
                                        รายละเอียด
                                    </div> -->
                                </div>
                                <div class="report-box-2 intro-y mt-5">
                                    <div class="box p-5">
                                        <div class="grid grid-cols-2 gap-6">
                                            <div
                                                class="flex flex-col md:flex-row items-center justify-between w-full border-r-2 border-dashed"
                                            >
                                                <!-- 🔹 ส่วนกราฟ -->
                                                <div
                                                    class="w-full md:w-1/2 flex justify-center"
                                                >
                                                    <canvas
                                                        ref="repRoomAll"
                                                        class="max-w-[200px] mt-3"
                                                    ></canvas>
                                                </div>

                                                <!-- 🔹 ส่วนข้อความอ้างอิง -->
                                                <div
                                                    class="w-full md:w-1/2 text-gray-200 text-sm ml-12"
                                                >
                                                    <p
                                                        class="text-xs mb-4 text-slate-900 dark:text-white"
                                                    >
                                                        *
                                                        ผู้เข้าใช้บริการแบ่งตามพื้นที่
                                                    </p>

                                                    <ul
                                                        class="space-y-2 text-slate-900 dark:text-white"
                                                    >
                                                        <li
                                                            class="flex items-center space-x-2"
                                                        >
                                                            <span
                                                                class="w-5 h-3 rounded-sm bg-sky-400"
                                                            ></span>
                                                            <span>A</span>
                                                        </li>
                                                        <li
                                                            class="flex items-center space-x-2"
                                                        >
                                                            <span
                                                                class="w-5 h-3 rounded-sm bg-amber-400"
                                                            ></span>
                                                            <span>B</span>
                                                        </li>
                                                        <li
                                                            class="flex items-center space-x-2"
                                                        >
                                                            <span
                                                                class="w-5 h-3 rounded-sm bg-pink-400"
                                                            ></span>
                                                            <span
                                                                >MSU Space</span
                                                            >
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div
                                                class="w-full flex justify-center items-center"
                                            >
                                                <canvas
                                                    ref="repRoomBar"
                                                    class="w-full h-[200px] mt-3"
                                                ></canvas>
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
                                            class="text-lg font-medium truncate mr-5 text-slate-900 dark:text-white"
                                        >
                                            สถิติรับฟังเสียงผู้ใช้ (VOC)
                                        </h2>
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
                                                        color="gray"
                                                        size="md"
                                                    ></box-icon>
                                                </div>
                                            </div>
                                            <div
                                                class="box px-5 py-3 ml-4 flex-1 zoom-in text-slate-900 dark:text-white"
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
            <!-- <div
                class="dark-mode-switcher__toggle border"
                :class="
                    isDarkMode === false
                        ? 'dark-mode-switcher__toggle--active'
                        : ''
                "
                @click="darkMode()"
            ></div> -->
            <div
                class="dark-mode-switcher__toggle border"
                @click="link()"
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
            <div class="bg-white p-6 rounded-lg lg:w-1/3 h-3/4 overflow-y-auto">
                <p class="text-lg text-gray-800">
                    ** สถิติฐานข้อมูลออนไลน์ทั้งหมด
                    <span class="text-amber-400 font-semibold"
                        >{{ dbAll }}
                    </span>
                    รายการ **
                </p>
                <hr class="border-dashed" />
                <div class="mt-5">
                    <div class="intro-y">
                        <div
                            class="px-4 py-4 mb-3 flex items-center zoom-in bg-gray-100 rounded-lg shadow-md"
                            v-for="(db, index) in dbList"
                            :key="index"
                        >
                            <div
                                class="w-10 h-10 flex-none image-fit rounded-md overflow-hidden"
                            >
                                <img
                                    :src="db.image"
                                    alt="Midone - HTML Admin Template"
                                />
                            </div>
                            <div class="ml-4 mr-auto">
                                <div class="font-medium">
                                    {{ db.shortName }}
                                </div>
                                <div class="text-slate-500 text-xs mt-0.5">
                                    {{ db.fullName }}
                                </div>
                            </div>
                            <div
                                class="py-1 px-2 rounded-full text-xs bg-success text-white cursor-pointer font-medium"
                            >
                                {{ formatShort(db.total) }}
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

    <!-- Modal Show -->
    <transition name="fade" mode="out-in">
        <div
            class="fixed inset-0 flex items-center justify-center z-50 bg-black bg-opacity-50"
            v-if="openAIModal"
        >
            <!-- Content ของ modal -->
            <div class="bg-white p-6 rounded-lg lg:w-1/3 h-3/4 overflow-y-auto">
                <p class="text-lg text-amber-500">
                    ** วิเคราะห์สถิติการยืม-คืนทรัพยากรสารสนเทศด้วย AI **
                </p>
                <hr class="border-dashed" />

                <!-- ส่วน loading -->
                <div
                    v-if="isLoading"
                    class="flex flex-col items-center justify-center py-10"
                >
                    <box-icon
                        name="loader-alt"
                        color="white"
                        animation="spin"
                    ></box-icon>
                    <p class="text-sm text-gray-300">กำลังวิเคราะห์ข้อมูล...</p>
                </div>

                <!-- ส่วนข้อความพิมพ์ทีละตัว -->
                <div v-else class="mt-5 whitespace-pre-line">
                    {{ displayedText }}
                    <span v-if="typingInterval" class="animate-pulse">▋</span>
                </div>

                <hr class="border-dashed border-gray-500 my-2" />
                <div class="mt-2 flex justify-end">
                    <button
                        class="bg-red-500 text-white px-4 py-2 rounded"
                        @click="openAIModalShow()"
                    >
                        Close
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
        // await this.loadAllData();
        this.isReady = true;
        this.welcome();

        this.$nextTick(() => {
            setTimeout(() => {
                this.darkMode();
                this.repIncome();
                this.repBookReturn();
                this.repBookReturnMonth();
                this.repDbOnline();
                this.repWebOPAC();
                this.repRoom();
                this.repRoomSecond();
                this.repVoc();

                // ✅ ตั้ง interval เพื่ออัปเดตทุก 10 วินาที
                if (!this.intervalFetch) {
                    this.intervalFetch = setInterval(() => {
                        this.repIncome();
                    }, 100000);
                }
            }, 500);
        });
    },
    beforeUnmount() {
        if (this.intervalFetch) clearInterval(this.intervalFetch);
    },
    data() {
        return {
            isReady: false,
            logo: "/img/library.png",
            isDarkMode: false,
            showWelcome: true,
            modalMenu: false,
            dbModal: false,
            openAIModal: false,
            moment: moment,
            vocList: [],
            dbList: [],
            dbName: [],
            chartWeb: null,
            borrowAll: "",
            returnAll: "",
            wepOPACAll: "",
            dbAll: "",
            incomeA: "",
            incomeB: "",
            incomeC: "",
            incomeAll: "",
            labels: [],
            diffA: [],
            diffB: [],
            diffC: [],
            lastA: "",
            lastB: "",
            lastC: "",
            maxItems: 10,
            intervalFetch: null,
            openAIText: "",
            displayedText: "", // ข้อความที่แสดงแบบพิมพ์ทีละตัว
            typingInterval: null,
            isLoading: false,
            selectBook: "year",
            borrowMonthAll: "",
        };
    },
    methods: {
        async loadAllData() {
            await Promise.all([
                // this.repIncome(),
                this.repBookReturn(),
                this.repBookReturnMonth(),
                this.repDbOnline(),
                this.repWebOPAC(),
                this.repRoom(),
                this.repRoomSecond(),
                this.repVoc(),
            ]);
        },
        dbModalShow() {
            this.dbModal = !this.dbModal;
        },
        openAIModalShow() {
            this.openAIModal = !this.openAIModal;
        },
        showMenu() {
            this.modalMenu = true;
        },
        darkMode() {
            document.documentElement.classList.remove("dark");
        },
        welcome() {
            // แสดง welcome ก่อน
            this.showWelcome = true;

            // ผ่านไป 5 วินาที (5000 มิลลิวินาที) ให้ปิด
            setTimeout(() => {
                this.showWelcome = false;
            }, 5000);
        },
        async repIncome() {
            try {
                const response = await fetch(
                    "https://script.google.com/macros/s/AKfycbw8n1USK22Kcq9QoF7SJjDnHk-uLPJ6GsC25fsZrsf1uo91glNwum633jTqnjw2RC8J/exec"
                );
                const data = await response.json();
                // console.log("API:", data);

                this.incomeA = data.items[0].total || 0;
                this.incomeB = data.items[1].total || 0;
                this.incomeC = data.items[2].total || 0;

                // ✅ รอบแรก: ใส่ค่าลงกราฟเลย
                if (
                    this.lastA === "" &&
                    this.lastB === "" &&
                    this.lastC === ""
                ) {
                    this.lastA = this.incomeA;
                    this.lastB = this.incomeB;
                    this.lastC = this.incomeC;

                    this.labels.push(data.time || "");
                    this.diffA.push(this.incomeA);
                    this.diffB.push(this.incomeB);
                    this.diffC.push(this.incomeC);
                } else {
                    // ✅ รอบต่อ ๆ ไป → คำนวณผลต่าง
                    const deltaA = this.incomeA - this.lastA;
                    const deltaB = this.incomeB - this.lastB;
                    const deltaC = this.incomeC - this.lastC;

                    this.diffA.push(deltaA);
                    this.diffB.push(deltaB);
                    this.diffC.push(deltaC);
                    this.labels.push(data.time || "");

                    // จำกัดไม่เกิน 10 จุด
                    if (this.diffA.length > this.maxItems) this.diffA.shift();
                    if (this.diffB.length > this.maxItems) this.diffB.shift();
                    if (this.diffC.length > this.maxItems) this.diffC.shift();
                    if (this.labels.length > this.maxItems) this.labels.shift();

                    // อัปเดตค่าล่าสุด
                    this.lastA = this.incomeA;
                    this.lastB = this.incomeB;
                    this.lastC = this.incomeC;
                }

                this.incomeAll = data.totalCount;

                Chart.defaults.font.family = "Anuphan";

                const ctx = this.$refs.repPatron;

                // ✅ ใช้ if/else ป้องกันสร้าง chart ซ้ำ
                if (!this.chart) {
                    // ✅ สร้างกราฟเริ่มต้น
                    this.chart = new Chart(ctx, {
                        type: "line",
                        data: {
                            labels: [...this.labels],
                            datasets: [
                                {
                                    label: "A",
                                    data: [...this.diffA],
                                    fill: false,
                                    borderColor: "rgba(59,130,246,0.9)",
                                    backgroundColor: "rgba(59,130,246,0.7)",
                                    // pointBorderColor: "#fff",
                                    tension: 0.3,
                                    borderWidth: 2,
                                    pointRadius: 4,
                                    pointHoverRadius: 6,
                                },
                                {
                                    label: "B",
                                    data: [...this.diffB],
                                    borderColor: "rgba(234,179,8,0.9)",
                                    backgroundColor: "rgba(234,179,8,0.3)",
                                    tension: 0.3,
                                    borderWidth: 2,
                                    pointRadius: 4,
                                    fill: false,
                                },
                                {
                                    label: "C",
                                    data: [...this.diffC],
                                    borderColor: "rgba(236,72,153,0.9)", // 💖 ชมพูสด
                                    backgroundColor: "rgba(236,72,153,0.3)", // 💖 ชมพูใส
                                    tension: 0.3,
                                    borderWidth: 2,
                                    pointRadius: 4,
                                    fill: false,
                                },
                            ],
                        },
                        options: {
                            responsive: true,
                            animation: {
                                duration: 800,
                                easing: "easeOutQuart",
                            },
                            scales: {
                                x: {
                                    ticks: { color: "black" },
                                    grid: { display: false },
                                },
                                y: {
                                    beginAtZero: true,
                                    ticks: { color: "black" },
                                    grid: {
                                        color: "rgba(255,255,255,0.1)",
                                    },
                                },
                            },
                            plugins: {
                                legend: { labels: { color: "black" } },
                                tooltip: {
                                    backgroundColor: "#333",
                                    titleColor: "#fff",
                                    bodyColor: "#fff",
                                },
                            },
                        },
                    });
                } else {
                    this.chart.data.labels = [...this.labels];
                    this.chart.data.datasets[0].data = [...this.diffA];
                    this.chart.data.datasets[1].data = [...this.diffB];
                    this.chart.data.datasets[2].data = [...this.diffC];
                    this.chart.update();
                }
            } catch (error) {
                console.error("Error Report BookReturn:", error);
            }
        },
        async repBookReturn() {
            try {
                // เอาปีปัจจุบัน
                const year = new Date().getFullYear();

                fetch(
                    "https://script.google.com/macros/s/AKfycbyFo_SWI2htvExLduoz0IAztQrCN-AH2awbtDDrWtUfXXV2ie5ZNDawwmaBRf-TRmE/exec?type=yearly&year=" +
                        year
                )
                    .then((response) => response.json())
                    .then((data) => {
                        // ดึงเฉพาะ data จาก datasets
                        const borrowData = data.datasets[0].data;
                        const returnData = data.datasets[1].data;
                        this.borrowAll = data.summary.totalBorrow;
                        this.returnAll = data.summary.totalReturn;
                        // ตั้งค่าฟอนต์
                        Chart.defaults.font.family = "Anuphan";
                        const ctx = this.$refs.repBook; // ✅ ต้องมี .getContext('2d')
                        // สร้างกราฟ
                        new Chart(ctx, {
                            type: "bar",
                            data: {
                                labels: [
                                    "ม.ค.",
                                    "ก.พ.",
                                    "มี.ค.",
                                    "เม.ย.",
                                    "พ.ค.",
                                    "มิ.ย.",
                                    "ก.ค.",
                                    "ส.ค.",
                                    "ก.ย.",
                                    "ต.ค.",
                                    "พ.ย.",
                                    "ธ.ค.",
                                ],
                                datasets: [
                                    {
                                        label: "ยืมหนังสือ",
                                        data: borrowData,
                                        backgroundColor: "rgba(34,197,94,1)", // 🟢 เขียว
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
                                interaction: {
                                    mode: "index",
                                    intersect: false,
                                }, // Hover แสดงทั้งคู่
                                animation: {
                                    duration: 2000,
                                    easing: "easeOutBounce",
                                },
                                plugins: {
                                    legend: {
                                        display: true,
                                        labels: {
                                            color: "black",
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
                                        ticks: { color: "black" },
                                        grid: {
                                            color: "rgba(255,255,255,0.1)",
                                        },
                                    },
                                    x: {
                                        ticks: { color: "black" },
                                        grid: { display: false },
                                    },
                                },
                            },
                        });
                    });
            } catch (error) {
                console.error("Error Report BookReturn:", error);
            }
        },
        async repBookReturnMonth() {
            try {
                // เอาปีปัจจุบัน
                const year = new Date().getFullYear();
                const month = new Date().getMonth() + 1;
                const monthName = moment({ year, month: month - 1 }).format(
                    "MMMM"
                );

                fetch(
                    "https://script.google.com/macros/s/AKfycbyFo_SWI2htvExLduoz0IAztQrCN-AH2awbtDDrWtUfXXV2ie5ZNDawwmaBRf-TRmE/exec?type=monthly&year=" +
                        year +
                        "&month=" +
                        month
                )
                    .then((response) => response.json())
                    .then((data) => {
                        // ดึงเฉพาะ data จาก datasets
                        const labels = data.detail.map((item) => `${item.day}`);
                        const values = data.detail.map((item) => item.value);
                        this.borrowMonthAll = data.total;
                        // ตั้งค่าฟอนต์
                        Chart.defaults.font.family = "Anuphan";
                        const ctx = this.$refs.repBookMonth; // ✅ ต้องมี .getContext('2d')
                        // สร้างกราฟ
                        new Chart(ctx, {
                            type: "bar", // หรือ line ก็ได้
                            data: {
                                labels,
                                datasets: [
                                    {
                                        label: `สถิติการคืนหนังสือ เดือน ${monthName} ${year}`,
                                        data: values,
                                        backgroundColor: "rgba(34,197,94,1)",
                                        borderColor: "#fff",
                                        borderWidth: 2,
                                        borderRadius: 8,
                                        borderSkipped: false,
                                        maxBarThickness: 28,
                                    },
                                ],
                            },
                            options: {
                                responsive: true,
                                interaction: {
                                    mode: "index",
                                    intersect: false,
                                }, // Hover แสดงทั้งคู่
                                animation: {
                                    duration: 2000,
                                    easing: "easeOutBounce",
                                },
                                plugins: {
                                    legend: {
                                        display: true,
                                        labels: {
                                            color: "black",
                                            font: { family: "Anuphan" },
                                        },
                                    },
                                    tooltip: {
                                        callbacks: {
                                            label: (ctx) =>
                                                ` ${ctx.parsed.y} ครั้ง`,
                                        },
                                        backgroundColor: "#333",
                                        titleColor: "#fff",
                                        bodyColor: "#fff",
                                    },
                                },
                                scales: {
                                    x: {
                                        ticks: { color: "black" },
                                        grid: { display: false },
                                    },
                                    y: {
                                        beginAtZero: true,
                                        title: {
                                            display: true,
                                            text: "จำนวนการยืม",
                                            color: "black",
                                        },
                                        ticks: { color: "black" },
                                        grid: {
                                            color: "rgba(255,255,255,0.1)",
                                        },
                                    },
                                },
                            },
                        });
                    });
            } catch (error) {
                console.error("Error Report BookReturn:", error);
            }
        },
        async repDbOnline() {
            try {
                fetch(
                    "https://script.google.com/macros/s/AKfycbyNrSp52PnDqptizq5uNAHwknVbx-BNdvTUqXOAEYa03dUgGAdl6E4Xzl5tfIGAoojI8A/exec"
                )
                    .then((response) => response.json())
                    .then((data) => {
                        this.dbList = data.items;
                        this.dbAll = data.totalCount;
                        this.dbName = data.top5.map((item) => item.shortName);
                        const labels = data.top5.map((item) => item.shortName);
                        const dbData = data.top5.map((item) => item.total);
                        Chart.defaults.font.family = "Anuphan";
                        const ctx = this.$refs.repDB;
                        new Chart(ctx, {
                            type: "doughnut",
                            data: {
                                labels: labels,
                                datasets: [
                                    {
                                        label: "",
                                        data: dbData,
                                        backgroundColor: [
                                            "#36a2eb",
                                            "#4bc0c0",
                                            "#ff9f40",
                                            "#ffcd56",
                                            "#ff6384",
                                        ],
                                        borderColor: [
                                            "#36a2eb",
                                            "#4bc0c0",
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
                                            color: "black", // <- ใส่ตรงนี้!
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
                    });
            } catch (error) {
                console.error("Error Report BookReturn:", error);
            }
        },
        async repWebOPAC() {
            try {
                fetch(
                    "https://script.google.com/macros/s/AKfycbx2YMeeAtUhMCbxyxUrjyWEKekM9bwojQiuP6umIF7kJSN6u7BaVeWbW-nwVVI_WNpO/exec"
                )
                    .then((response) => response.json())
                    .then((data) => {
                        const web = data.datasets[0].data;
                        this.wepOPACAll = data.summary.totalSearch;
                        const labels = [
                            "ม.ค.",
                            "ก.พ.",
                            "มี.ค.",
                            "เม.ย.",
                            "พ.ค.",
                            "มิ.ย.",
                            "ก.ค.",
                            "ส.ค.",
                            "ก.ย.",
                            "ต.ค.",
                            "พ.ย.",
                            "ธ.ค.",
                        ];
                        Chart.defaults.font.family = "Anuphan";
                        const ctx = this.$refs.repWeb;
                        this.chartWeb = new Chart(ctx, {
                            type: "line",
                            data: {
                                labels,
                                datasets: [
                                    {
                                        label: "จำนวนผู้เข้าใช้บริการ",
                                        data: web,
                                        fill: true,
                                        borderColor: "rgba(34,197,94,1)", // 🟢 เส้นเขียวหลัก
                                        backgroundColor: "rgba(34,197,94,0.2)", // พื้นหลังเขียวอ่อน
                                        tension: 0.4, // ความโค้งของเส้น
                                        borderWidth: 2,
                                        pointBackgroundColor:
                                            "rgba(34,197,94,1)",
                                        pointBorderColor: "black",
                                        pointRadius: 4,
                                        pointHoverRadius: 6,
                                    },
                                ],
                            },
                            options: {
                                responsive: true,
                                animation: {
                                    duration: 1500,
                                    easing: "easeOutQuart",
                                },
                                scales: {
                                    x: {
                                        ticks: { color: "black" },
                                        grid: { display: false },
                                    },
                                    y: {
                                        beginAtZero: true,
                                        ticks: { color: "black" },
                                        grid: {
                                            color: "rgba(255,255,255,0.1)",
                                        },
                                    },
                                },
                                plugins: {
                                    legend: {
                                        labels: {
                                            color: "black",
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
                    });
            } catch (error) {
                console.error("Error Report WebOPAC:", error);
            }
        },
        async repRoom() {
            try {
                const token = import.meta.env.VITE_LIBROOM_API_TOKEN;
                const config = {
                    headers: {
                        Authorization: "Bearer " + token,
                    },
                };
                const response = await axios.get(
                    "https://libroom.msu.ac.th/api/getService",
                    config
                );
                const dataStd = response.data;
                const labels = Object.keys(dataStd);
                const data = Object.values(dataStd);
                // console.log(dataStd, labels, data);
                if (
                    !dataStd ||
                    typeof dataStd !== "object" ||
                    Object.keys(dataStd).length === 0
                ) {
                    console.warn(
                        "⛔️ ไม่พบข้อมูลหรือข้อมูลผิดรูปแบบ:",
                        dataStd
                    );
                    return;
                }
                const ctx = this.$refs.repRoomAll;
                if (!ctx || !ctx.getContext) {
                    console.warn("⛔️ Canvas ยังไม่พร้อม");
                    return;
                }
                Chart.defaults.font.family = "Anuphan";
                new Chart(ctx, {
                    type: "pie",
                    data: {
                        labels: labels,
                        datasets: [
                            {
                                label: "",
                                data: data,
                                backgroundColor: [
                                    "#36a2eb",
                                    "#ff9f40",
                                    "#ff6384",
                                ],
                                borderColor: ["#36a2eb", "#ff9f40", "#ff6384"],
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
                                    color: "black", // <- ใส่ตรงนี้!
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
            } catch (error) {
                console.error("Error Report libRoomDonut:", error);
            }
        },
        async repRoomSecond() {
            try {
                const token = import.meta.env.VITE_LIBROOM_API_TOKEN;
                const config = {
                    headers: {
                        Authorization: "Bearer " + token,
                    },
                };
                const response = await axios.get(
                    "https://libroom.msu.ac.th/api/getMost",
                    config
                );
                const dataStd = response.data;
                const labels = dataStd.map((item) => item.faculty);
                const data = dataStd.map((item) => item.count);
                if (!Array.isArray(dataStd) || dataStd.length === 0) {
                    console.warn(
                        "⛔️ ไม่พบข้อมูลหรือข้อมูลผิดรูปแบบ:",
                        dataStd
                    );
                    return;
                }
                const ctx = this.$refs.repRoomBar;
                if (!ctx || !ctx.getContext) {
                    console.warn("⛔️ Canvas ยังไม่พร้อม");
                    return;
                }
                Chart.defaults.font.family = "Anuphan";
                // ✅ สร้างกราฟแนวนอน
                new Chart(ctx, {
                    type: "bar",
                    data: {
                        labels,
                        datasets: [
                            {
                                label: "จำนวนผู้เข้าใช้งาน",
                                data,
                                backgroundColor: [
                                    "rgba(59,130,246,0.8)", // ฟ้า (ACM)
                                    "rgba(34,197,94,0.8)", // เขียว (IEL)
                                    "rgba(249,115,22,0.8)", // ส้ม (ACS)
                                    "rgba(139,92,246,0.8)", // ม่วง (Emerald)
                                    "rgba(236,72,153,0.8)", // ชมพู (SpringerLink)
                                ],
                                borderColor: "#fff",
                                borderWidth: 2,
                                borderRadius: 8,
                            },
                        ],
                    },
                    options: {
                        indexAxis: "y", // ✅ หมุนแกนให้แท่งอยู่แนวนอน (Y-axis)
                        responsive: true,
                        maintainAspectRatio: false,
                        animation: { duration: 1500, easing: "easeOutQuart" },
                        scales: {
                            x: {
                                beginAtZero: true,
                                ticks: { color: "black" },
                                grid: { color: "rgba(255,255,255,0.1)" },
                            },
                            y: {
                                ticks: { color: "black" },
                                grid: { display: false },
                            },
                        },
                        plugins: {
                            legend: {
                                display: false, // ✅ ซ่อน legend
                            },
                            tooltip: {
                                backgroundColor: "#333",
                                titleColor: "#fff",
                                bodyColor: "#fff",
                            },
                        },
                    },
                });
            } catch (error) {
                console.error("Error Report libRoomBar:", error);
            }
        },
        async repVoc() {
            try {
                const token = import.meta.env.VITE_LIBVOC_API_TOKEN;
                const config = {
                    headers: {
                        Authorization: "Bearer " + token,
                    },
                };
                axios
                    .get("https://libvoc.msu.ac.th/api/getPost", config)
                    .then((response) => {
                        this.vocList = response.data;
                    })
                    .catch((error) => {
                        console.error("Error fetching data:", error);
                    });
            } catch (error) {
                console.error("Error Report libVoc data:", error);
            }
        },
        memberShow() {
            this.showMemberOne = !this.showMemberOne;
            this.showMemberTwo = !this.showMemberTwo;
        },
        modalShow() {
            this.isModalShow = !this.isModalShow;
        },
        link() {
            window.location.href = "/";
        },
        formatShort(num) {
            num = Number(num) || 0;

            if (num >= 1000000) return (num / 1000000).toFixed(1) + "M";
            if (num >= 1000) return (num / 1000).toFixed(1) + "k";
            return num.toLocaleString(); // ✅ สำหรับค่าน้อยกว่า 1,000
        },
        async repOpenAI() {
            this.openAIModal = true;
            this.isLoading = true; // ✅ เริ่มโหลด

            try {
                const res = await fetch(
                    "https://script.google.com/macros/s/AKfycbw0IBwvvfysn5ryI16SWEcg6nU23pFNwj-81s8s6Hg-BFpvIXM5v7zaKkbk9arYbFpr/exec"
                );
                const data = await res.json();

                const response = await fetch(
                    "https://api.openai.com/v1/chat/completions",
                    {
                        method: "POST",
                        headers: {
                            "Content-Type": "application/json",
                            Authorization: `Bearer ${
                                import.meta.env.VITE_OPENAI_KEY
                            }`, // เก็บ key ไว้ใน .env
                        },
                        body: JSON.stringify({
                            model: "gpt-4o-mini", // หรือ gpt-4o, gpt-5 เมื่อพร้อม
                            messages: [
                                {
                                    role: "system",
                                    content:
                                        "คุณคือผู้ช่วยวิเคราะห์ข้อมูล Dashboard",
                                },
                                {
                                    role: "user",
                                    content: `ช่วยวิเคราะห์ข้อมูลนี้หน่อย: ${JSON.stringify(
                                        data
                                    )}`,
                                },
                            ],
                        }),
                    }
                );

                const gptData = await response.json();
                const message = gptData.choices[0].message.content;

                // ปิด loading ก่อนเริ่มพิมพ์
                this.isLoading = false;
                this.showTypingEffect(message);
            } catch (err) {
                this.isLoading = false;
                this.displayedText = "❌ เกิดข้อผิดพลาดในการวิเคราะห์ข้อมูล";
                console.error(err);
            }
        },
        async showTypingEffect(fullText) {
            this.openAIText = fullText;
            this.displayedText = "";
            let i = 0;

            clearInterval(this.typingInterval);
            this.typingInterval = setInterval(() => {
                if (i < this.openAIText.length) {
                    this.displayedText += this.openAIText[i];
                    i++;
                } else {
                    clearInterval(this.typingInterval);
                }
            }, 25); // ปรับความเร็วได้ (หน่วย: มิลลิวินาที)
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
