<template>
    <div
        :class="[
            isDarkMode ? 'dark' : '',
            'min-h-screen relative overflow-hidden font-anuphan libboard-skin',
        ]"
    >
        <div class="fixed inset-0 z-0 pointer-events-none">
            <img
                src="/img/library_cartoon.png"
                class="object-cover w-full h-full transition-all duration-1000"
                :class="
                    isDarkMode
                        ? 'opacity-20 saturate-50'
                        : 'opacity-80 saturate-150'
                "
                @error="(e) => (e.target.style.display = 'none')"
            />
            <div
                class="absolute inset-0 bg-gradient-to-br from-slate-950/80 via-slate-900/55 to-slate-950/85 dark:from-slate-950/90 dark:via-slate-900/70 dark:to-slate-950/95"
            ></div>
        </div>
        <div class="fixed inset-0 z-[1] pointer-events-none dashboard-ambient">
            <div class="ambient-orb ambient-orb--blue"></div>
            <div class="ambient-orb ambient-orb--purple"></div>
            <div class="ambient-particles"></div>
        </div>

        <div class="relative z-10 py-5 md:py-0">
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
                <div class="overflow-auto scrollable">
                    <div class="mobile-menu-toggler">
                        <box-icon
                            name="x-circle"
                            color="white"
                            class="w-8 h-8"
                            @click="closeMenu()"
                        ></box-icon>
                    </div>
                    <ul class="py-2 scrollable__content">
                        <li>
                            <a href="/" class="menu menu--active">
                                <div class="menu__icon">
                                    <box-icon
                                        name="home"
                                        color="white"
                                    ></box-icon>
                                </div>
                                <div class="menu__title">
                                    Dashboard
                                    <i
                                        data-lucide="chevron-down"
                                        class="transform rotate-180 menu__sub-icon"
                                    ></i>
                                </div>
                            </a>
                        </li>

                        <!-- <li class="my-6 menu__devider"></li>
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
                        </li> -->
                    </ul>
                </div>
            </div>
            <!-- END: Mobile Menu -->

            <!-- BEGIN: Top Bar -->
            <div
                class="top-bar-boxed top-bar-boxed--simple-menu glass-topbar h-[70px] md:h-[65px] z-[51] border-b border-white/[0.08] mt-12 md:mt-0 -mx-3 sm:-mx-8 md:-mx-0 px-3 md:border-b-0 relative md:fixed md:inset-x-0 md:top-0 sm:px-8 md:px-10 md:pt-10 md:bg-gradient-to-b md:from-slate-100 md:to-transparent dark:md:from-darkmode-700"
            >
                <div class="flex items-center h-full">
                    <!-- BEGIN: Logo -->
                    <a
                        href=""
                        class="logo -intro-x hidden md:flex xl:w-[180px]"
                    >
                        <img
                            alt="Midone - HTML Admin Template"
                            class="w-20 logo__image"
                            :src="logo"
                        />
                    </a>
                    <!-- END: Logo -->
                    <!-- BEGIN: Breadcrumb -->
                    <nav
                        aria-label="breadcrumb"
                        class="-intro-x h-[45px] mr-auto"
                    >
                        <ol class="breadcrumb breadcrumb-light">
                            <li class="breadcrumb-item">
                                <a href="#">Application</a>
                            </li>
                            <li
                                class="breadcrumb-item active"
                                aria-current="page"
                            >
                                Dashboard
                            </li>
                        </ol>
                    </nav>
                    <!-- END: Breadcrumb -->

                    <!-- BEGIN: Search -->
                    <div class="relative mr-3 intro-x sm:mr-6">
                        <div class="hidden search sm:block">
                            <input
                                type="text"
                                class="border-transparent search__input form-control"
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
                        <!-- <li>
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
                        </li> -->
                    </ul>
                </nav>
                <!-- END: Side Menu -->

                <!-- BEGIN: Content -->
                <div
                    class="content command-content p-6 transition-all duration-500 !bg-transparent"
                >
                    <div class="grid grid-cols-12 gap-6">
                        <div class="col-span-12 2xl:col-span-9">
                            <div class="grid grid-cols-12 gap-6">
                                <!-- BEGIN: Welcome Text -->
                                <div class="col-span-12 mt-6 -mb-6 intro-y">
                                    <transition name="fade" mode="out-in">
                                        <div
                                            class="flex items-center mb-6 text-gray-200 alert alert-dismissible show box bg-primary welcome-alert"
                                            role="alert"
                                            v-show="showWelcome"
                                        >
                                            <span class="flex items-center"
                                                ><box-icon
                                                    name="smile"
                                                    color="#cbd5e1"
                                                    class="mr-2"
                                                ></box-icon>
                                                ยินดีต้อนรับเข้าสู่ระบบแดชบอร์ด
                                                | สำนักวิทยบริการ
                                                มหาวิทยาลัยมหาสารคาม
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

                                <!-- BEGIN: LibBoard Style Hero -->
                                <div class="col-span-12 mt-2 intro-y">
                                    <div class="libboard-hero glass-panel">
                                        <div>
                                            <div class="hero-kicker">
                                                MSU LIBRARY INTELLIGENCE
                                                DASHBOARD
                                            </div>
                                            <h1>
                                                ระบบติดตามสถิติการให้บริการห้องสมุด
                                            </h1>
                                            <p>
                                                ภาพรวมการเข้าใช้บริการ ยืม-คืน
                                                ทรัพยากร ฐานข้อมูลออนไลน์
                                                พื้นที่เรียนรู้
                                                และเสียงสะท้อนจากผู้ใช้บริการแบบ
                                                Command Center
                                            </p>
                                        </div>
                                        <div class="hero-live">
                                            <span class="live-dot"></span>
                                            <div>
                                                <small>LIVE MONITORING</small>
                                                <strong>{{
                                                    moment().format("HH:mm")
                                                }}</strong>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- END: LibBoard Style Hero -->

                                <!-- BEGIN: Dashboard -->
                                <div
                                    class="col-span-12 mt-2 sm:col-span-6 lg:col-span-4 xl:col-span-3"
                                >
                                    <div class="flex items-center h-10 intro-y">
                                        <h2
                                            class="mr-5 text-lg font-medium truncate text-slate-900 dark:text-white"
                                        >
                                            สถิติผู้เข้าใช้บริการ
                                        </h2>
                                        <select
                                            class="mt-3 cursor-pointer sm:ml-auto sm:mt-0 sm:w-auto form-select box text-slate-900 dark:text-white"
                                        >
                                            <!-- <option value="daily">รายวัน</option> -->
                                            <option value="monthly">
                                                รายวัน
                                            </option>
                                            <!-- <option value="yearly">รายปี</option> -->
                                        </select>
                                    </div>
                                    <div class="mt-5 report-box-2 intro-y">
                                        <div
                                            class="p-5 box glass-panel dashboard-panel"
                                        >
                                            <ul class="space-y-2">
                                                <li
                                                    class="flex items-center justify-between"
                                                >
                                                    <div
                                                        class="flex items-center space-x-2 text-slate-900 dark:text-white"
                                                    >
                                                        <span
                                                            class="w-5 h-3 mr-2 rounded-sm bg-sky-400"
                                                        ></span>
                                                        A
                                                    </div>
                                                    <span
                                                        class="text-end text-slate-900 dark:text-white"
                                                        >{{
                                                            formatShort(
                                                                this.incomeAA,
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
                                                            class="w-5 h-3 mr-2 rounded-sm bg-amber-400"
                                                        ></span>
                                                        B
                                                    </div>
                                                    <span
                                                        class="text-end text-slate-900 dark:text-white"
                                                        >{{
                                                            formatShort(
                                                                this.incomeBB,
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
                                                            class="w-5 h-3 mr-2 bg-pink-400 rounded-sm"
                                                        ></span>
                                                        MSU Space
                                                    </div>
                                                    <span
                                                        class="text-end text-slate-900 dark:text-white"
                                                        >{{
                                                            formatShort(
                                                                this.incomeCC,
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
                                                                this.incomeAllA,
                                                            )
                                                        }}</span
                                                    >
                                                </li>
                                                <li>
                                                    <div
                                                        class="flex mt-3 text-xs font-light text-gray-400"
                                                    >
                                                        <div>
                                                            # ข้อมูลวันที่
                                                        </div>
                                                        <div class="ml-auto">
                                                            {{
                                                                moment().format(
                                                                    "DD MMMM YYYY",
                                                                )
                                                            }}
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>

                                            <div
                                                class="flex pb-2 mt-4 border-b border-slate-200"
                                            >
                                                <div
                                                    class="text-xs text-slate-500"
                                                >
                                                    <!-- Page views per second -->
                                                </div>
                                                <div
                                                    class="flex ml-auto text-xs font-medium cursor-pointer text-success tooltip"
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
                                                class="flex mt-3 text-xs font-light text-gray-400"
                                            >
                                                <div>
                                                    # ข้อมูลประจำปี :
                                                    {{
                                                        moment().format("YYYY")
                                                    }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- END: Visitors -->

                                <!-- BEGIN: General Report -->
                                <div
                                    class="col-span-12 mt-2 lg:col-span-8 xl:col-span-5"
                                >
                                    <div
                                        class="items-center block h-10 intro-y sm:flex"
                                    >
                                        <h2
                                            class="mr-5 text-lg font-medium truncate text-slate-900 dark:text-white"
                                        >
                                            สถิติยืม-คืนทรัพยากรสารสนเทศ
                                        </h2>
                                        <select
                                            class="mt-3 cursor-pointer sm:ml-auto sm:mt-0 sm:w-auto form-select box text-slate-900 dark:text-white"
                                            v-model="selectBook"
                                        >
                                            <!-- <option value="daily">รายวัน</option> -->
                                            <option value="year">รายปี</option>
                                            <option value="month">
                                                รายเดือน
                                            </option>
                                            <option value="lastyear">
                                                รายปีที่แล้ว
                                            </option>
                                        </select>
                                    </div>
                                    <div class="flex justify-center">
                                        <div class="w-full h-auto">
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

                                            <!-- รายปีที่แล้ว -->
                                            <canvas
                                                v-show="
                                                    selectBook === 'lastyear'
                                                "
                                                class="hover:cursor-pointer"
                                                ref="repBookLastYear"
                                            ></canvas>
                                        </div>
                                    </div>
                                    <div
                                        class="mt-12 report-box-2 intro-y sm:mt-5"
                                    >
                                        <div
                                            class="box sm:flex glass-panel dashboard-panel"
                                        >
                                            <div
                                                class="flex flex-col justify-center flex-1 px-8 py-4"
                                            >
                                                <div
                                                    class="relative mt-4 text-3xl font-medium text-slate-900 dark:text-white"
                                                >
                                                    <box-icon
                                                        name="book"
                                                        size="sm"
                                                        color="#22C55E"
                                                    ></box-icon>
                                                    <span class="pl-2 text-sm"
                                                        >รายการยืม</span
                                                    >
                                                    <span
                                                        class="pl-2 text-md text-amber-400"
                                                        v-if="
                                                            selectBook ===
                                                            'year'
                                                        "
                                                        >{{
                                                            formatShort(
                                                                borrowAll,
                                                            )
                                                        }}</span
                                                    >
                                                    <span
                                                        class="pl-2 text-md text-amber-400"
                                                        v-else
                                                        >{{
                                                            formatShort(
                                                                borrowMonthAll,
                                                            )
                                                        }}</span
                                                    >
                                                </div>

                                                <div
                                                    class="w-full px-2 py-1 mt-4 text-xs border-dashed btn btn-outline-secondary text-slate-300"
                                                    v-if="
                                                        selectBook !==
                                                        'lastyear'
                                                    "
                                                >
                                                    # ข้อมูลประจำปี
                                                    {{
                                                        moment().format("YYYY")
                                                    }}
                                                </div>

                                                <div
                                                    class="w-full px-2 py-1 mt-4 text-xs border-dashed btn btn-outline-secondary text-slate-300"
                                                    v-else
                                                >
                                                    # ข้อมูลประจำปี
                                                    {{
                                                        moment()
                                                            .subtract(1, "year")
                                                            .format("YYYY")
                                                    }}
                                                </div>
                                            </div>
                                            <div
                                                class="flex flex-col justify-center flex-1 px-8 py-4 border-dashed sm:border-t-0 sm:border-l border-slate-200"
                                                v-if="
                                                    selectBook === 'year' ||
                                                    selectBook === 'lastyear'
                                                "
                                            >
                                                <div
                                                    class="relative mt-4 text-3xl font-medium text-slate-900 dark:text-white"
                                                >
                                                    <box-icon
                                                        name="book"
                                                        size="sm"
                                                        color="#36a2eb"
                                                    ></box-icon>
                                                    <span class="pl-2 text-sm"
                                                        >รายการคืน</span
                                                    >
                                                    <span
                                                        class="pl-2 text-md text-amber-400"
                                                        >{{
                                                            formatShort(
                                                                returnAll,
                                                            )
                                                        }}</span
                                                    >
                                                </div>

                                                <div
                                                    class="w-full px-2 py-1 mt-4 text-xs border-dashed btn btn-outline-secondary text-slate-300"
                                                    @click="
                                                        repOpenAI(selectBook)
                                                    "
                                                >
                                                    Request AI Analysis
                                                </div>
                                            </div>
                                            <div
                                                class="flex flex-col justify-center flex-1 px-8 py-4 border-dashed sm:border-t-0 sm:border-l border-slate-200"
                                                v-else
                                            >
                                                <div
                                                    class="relative mt-4 text-3xl font-medium text-slate-900 dark:text-white"
                                                >
                                                    <box-icon
                                                        name="analyse"
                                                        size="sm"
                                                        color="#36a2eb"
                                                    ></box-icon>
                                                    <span class="pl-2 text-sm"
                                                        >ChatGPT (OpenAI)</span
                                                    >
                                                </div>

                                                <div
                                                    class="w-full px-2 py-1 mt-4 text-xs border-dashed btn btn-outline-secondary text-slate-300"
                                                    v-if="selectBook === 'year'"
                                                >
                                                    # ข้อมูลประจำปี
                                                    {{
                                                        moment().format("YYYY")
                                                    }}
                                                </div>
                                                <div
                                                    class="w-full px-2 py-1 mt-4 text-xs border-dashed btn btn-outline-secondary text-slate-300"
                                                    v-if="
                                                        selectBook ===
                                                        'lastyear'
                                                    "
                                                >
                                                    # ข้อมูลประจำปี
                                                    {{
                                                        moment()
                                                            .subtract(1, "year")
                                                            .format("YYYY")
                                                    }}
                                                </div>
                                                <div
                                                    class="w-full px-2 py-1 mt-4 text-xs border-dashed btn btn-outline-secondary text-slate-300"
                                                    @click="
                                                        repOpenAI(selectBook)
                                                    "
                                                >
                                                    Request AI Analysis
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- END: General Report -->

                                <!-- BEGIN: Users By Age -->
                                <div
                                    class="col-span-12 mt-2 sm:col-span-6 lg:col-span-4 xl:col-span-4 lg:mt-6 xl:mt-2"
                                >
                                    <div class="flex items-center h-10 intro-y">
                                        <h2
                                            class="mr-5 text-lg font-medium truncate text-slate-900 dark:text-white"
                                        >
                                            สถิติฐานข้อมูลออนไลน์
                                        </h2>
                                    </div>
                                    <div class="mt-5 report-box-2 intro-y">
                                        <div
                                            class="p-5 box glass-panel dashboard-panel"
                                        >
                                            <!-- ✅ ใช้ flex แยกซ้าย (ข้อความ) / ขวา (กราฟ) -->
                                            <div
                                                class="flex flex-col items-center md:flex-row md:items-start md:space-x-8"
                                            >
                                                <!-- 🔹 ส่วนข้อความอ้างอิง -->
                                                <div
                                                    class="w-full text-sm text-gray-200 md:w-1/2"
                                                >
                                                    <p
                                                        class="mb-4 text-xs text-slate-900 dark:text-white"
                                                    >
                                                        * ผู้เข้าใช้งานมากที่สุด
                                                        5 อันดับ
                                                    </p>

                                                    <ul class="space-y-2">
                                                        <li
                                                            class="flex items-center space-x-2"
                                                        >
                                                            <span
                                                                class="w-5 h-3 rounded-sm bg-sky-400"
                                                            ></span>
                                                            <span>{{
                                                                dbName[0]
                                                            }}</span>
                                                        </li>
                                                        <li
                                                            class="flex items-center space-x-2"
                                                        >
                                                            <span
                                                                class="w-5 h-3 rounded-sm bg-emerald-400"
                                                            ></span>
                                                            <span>{{
                                                                dbName[1]
                                                            }}</span>
                                                        </li>
                                                        <li
                                                            class="flex items-center space-x-2"
                                                        >
                                                            <span
                                                                class="w-5 h-3 rounded-sm bg-amber-400"
                                                            ></span>
                                                            <span>{{
                                                                dbName[2]
                                                            }}</span>
                                                        </li>
                                                        <li
                                                            class="flex items-center space-x-2"
                                                        >
                                                            <span
                                                                class="w-5 h-3 bg-orange-400 rounded-sm"
                                                            ></span>
                                                            <span>{{
                                                                dbName[3]
                                                            }}</span>
                                                        </li>
                                                        <li
                                                            class="flex items-center space-x-2"
                                                        >
                                                            <span
                                                                class="w-5 h-3 bg-pink-400 rounded-sm"
                                                            ></span>
                                                            <span>{{
                                                                dbName[4]
                                                            }}</span>
                                                        </li>
                                                    </ul>
                                                </div>

                                                <!-- 🔹 ส่วนกราฟ -->
                                                <div
                                                    class="flex justify-center w-full md:w-1/2"
                                                >
                                                    <canvas
                                                        ref="repDB"
                                                        class="max-w-[220px] mt-3"
                                                    ></canvas>
                                                </div>
                                            </div>

                                            <!-- ปุ่มด้านล่าง -->
                                            <button
                                                class="w-full px-2 py-1 mt-6 border-dashed btn btn-outline-secondary"
                                                @click="dbModalShow()"
                                            >
                                                แสดงรายการทั้งหมด
                                            </button>
                                            <div
                                                class="flex mt-3 text-xs font-light text-gray-400"
                                            >
                                                <div># ข้อมูลเดือน</div>
                                                <div class="ml-auto">
                                                    {{
                                                        moment().format(
                                                            "MMMM YYYY",
                                                        )
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
                                    class="col-span-12 mt-2 sm:col-span-6 lg:col-span-4 xl:col-span-4 lg:mt-6 xl:mt-2"
                                >
                                    <div class="flex items-center h-10 intro-y">
                                        <h2
                                            class="mr-5 text-lg font-medium truncate text-slate-900 dark:text-white"
                                        >
                                            สถิติสืบค้นผ่าน WebOPAC
                                        </h2>
                                    </div>
                                    <div class="mt-5 report-box-2 intro-y">
                                        <div
                                            class="p-5 box glass-panel dashboard-panel"
                                        >
                                            <div class="mt-6 tab-content">
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
                                                class="flex justify-center text-center"
                                                >** ทั้งหมด
                                                <span
                                                    class="px-2 text-amber-400"
                                                    >{{
                                                        formatShort(
                                                            this.wepOPACAll,
                                                        )
                                                    }}</span
                                                >
                                                รายการสืบค้น **</span
                                            >
                                            <div
                                                class="flex mt-3 text-xs font-light text-gray-400"
                                            >
                                                <div># ข้อมูลเดือน</div>
                                                <div class="ml-auto">
                                                    {{
                                                        moment().format(
                                                            "MMMM YYYY",
                                                        )
                                                    }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- END: WebOpac -->

                                <!-- BEGIN: Users By Age -->
                                <div
                                    class="col-span-12 mt-2 sm:col-span-6 lg:col-span-4 xl:col-span-8 lg:mt-6 xl:mt-2"
                                >
                                    <div class="flex items-center h-10 intro-y">
                                        <h2
                                            class="mr-5 text-lg font-medium truncate text-slate-900 dark:text-white"
                                        >
                                            สถิติจองพื้นที่ออนไลน์
                                        </h2>
                                        <!-- <div
                                        class="p-3 mt-3 cursor-pointer sm:ml-auto sm:mt-0 sm:w-auto box hover:bg-gray-800 hover:shadow-lg text-slate-900 dark:text-white"
                                    >
                                        รายละเอียด
                                    </div> -->
                                    </div>
                                    <div class="mt-5 report-box-2 intro-y">
                                        <div
                                            class="p-5 box glass-panel dashboard-panel"
                                        >
                                            <div class="grid grid-cols-2 gap-6">
                                                <div
                                                    class="flex flex-col items-center justify-between w-full border-r-2 border-dashed md:flex-row"
                                                >
                                                    <!-- 🔹 ส่วนกราฟ -->
                                                    <div
                                                        class="flex justify-center w-full md:w-1/2"
                                                    >
                                                        <canvas
                                                            ref="repRoomAll"
                                                            class="max-w-[200px] mt-3"
                                                        ></canvas>
                                                    </div>

                                                    <!-- 🔹 ส่วนข้อความอ้างอิง -->
                                                    <div
                                                        class="w-full ml-12 text-sm text-gray-200 md:w-1/2"
                                                    >
                                                        <p
                                                            class="mb-4 text-xs text-slate-900 dark:text-white"
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
                                                                    class="w-5 h-3 bg-pink-400 rounded-sm"
                                                                ></span>
                                                                <span
                                                                    >MSU
                                                                    Space</span
                                                                >
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div
                                                    class="flex items-center justify-center w-full"
                                                >
                                                    <canvas
                                                        ref="repRoomBar"
                                                        class="w-full h-[200px] mt-3"
                                                    ></canvas>
                                                </div>
                                            </div>
                                            <div
                                                class="flex mt-3 text-xs font-light text-gray-400"
                                            >
                                                <div># ข้อมูลเดือน</div>
                                                <div class="ml-auto">
                                                    {{
                                                        moment().format(
                                                            "MMMM YYYY",
                                                        )
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
                            <div class="pb-10 -mb-10 2xl:border-l">
                                <div
                                    class="grid grid-cols-12 2xl:pl-6 gap-x-6 2xl:gap-x-0 gap-y-6"
                                >
                                    <!-- BEGIN: Recent Activities -->
                                    <div
                                        class="col-span-12 mt-3 md:col-span-6 xl:col-span-4 2xl:col-span-12"
                                    >
                                        <div
                                            class="flex items-center h-10 intro-x"
                                        >
                                            <h2
                                                class="mr-5 text-lg font-medium truncate text-slate-900 dark:text-white"
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
                                                class="relative flex items-center mb-3 intro-x"
                                            >
                                                <div
                                                    class="before:block before:absolute before:w-20 before:h-px before:bg-slate-200 before:dark:bg-darkmode-400 before:mt-5 before:ml-5"
                                                >
                                                    <div
                                                        class="flex-none w-10 h-10 overflow-hidden rounded-full image-fit"
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
                                                    class="flex-1 px-5 py-3 ml-4 box zoom-in text-slate-900 dark:text-white"
                                                >
                                                    <div
                                                        class="flex items-center"
                                                    >
                                                        <div
                                                            class="font-medium break-all text-balance"
                                                        >
                                                            {{
                                                                voc?.detail ??
                                                                ""
                                                            }}
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="flex mt-1 text-xs text-slate-500"
                                                    >
                                                        <span
                                                            >{{
                                                                voc?.name ?? ""
                                                            }}
                                                            *** :
                                                        </span>
                                                        <span class="pl-2">
                                                            {{
                                                                moment(
                                                                    voc?.created_at ??
                                                                        "",
                                                                ).format("L") ??
                                                                ""
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

            <div v-else class="flex items-center justify-center">
                <box-icon
                    name="loader-alt"
                    size="lg"
                    animation="spin"
                ></box-icon>
            </div>

            <!-- BEGIN: Dark Mode Switcher-->
            <div
                @click="toggleTheme"
                class="fixed z-50 flex items-center justify-center text-white transition-all rounded-full shadow-2xl cursor-pointer bottom-8 right-8 w-14 h-14 bg-primary hover:scale-110 active:scale-95"
            >
                <box-icon
                    :name="isDarkMode ? 'sun' : 'moon'"
                    color="white"
                    size="sm"
                ></box-icon>
            </div>
            <!-- END: Dark Mode Switcher-->
        </div>
    </div>

    <!-- Modal Show -->
    <transition name="fade" mode="out-in">
        <div
            class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50"
            v-if="dbModal"
        >
            <!-- Content ของ modal -->
            <div
                class="p-6 overflow-y-auto bg-gray-800 rounded-lg lg:w-1/3 h-3/4"
            >
                <p class="text-lg text-white">
                    ** สถิติฐานข้อมูลออนไลน์ทั้งหมด
                    <span class="font-semibold text-amber-400"
                        >{{ dbAll }}
                    </span>
                    รายการ **
                </p>
                <hr class="border-dashed" />
                <div class="mt-5">
                    <div class="p-5 mt-5 intro-y box-glass">
                        <div
                            class="flex items-center px-4 py-4 mb-3 box zoom-in"
                            v-for="(db, index) in dbList"
                            :key="index"
                        >
                            <div
                                class="flex-none w-10 h-10 overflow-hidden rounded-md image-fit"
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
                                class="px-2 py-1 text-xs font-medium text-white rounded-full cursor-pointer bg-success"
                            >
                                {{ formatShort(db.total) }}
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="border-dashed" />
                <div class="flex justify-end mt-2">
                    <button
                        class="px-4 py-2 text-white bg-red-500 rounded"
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
            class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50"
            v-if="openAIModal"
        >
            <!-- Content ของ modal -->
            <div
                class="p-6 overflow-y-auto bg-gray-800 rounded-lg lg:w-1/3 h-3/4"
            >
                <p class="text-lg text-white">
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

                <hr class="my-2 border-gray-500 border-dashed" />
                <div class="flex justify-end mt-2">
                    <button
                        class="px-4 py-2 text-white bg-red-500 rounded"
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
import { faL } from "@fortawesome/free-solid-svg-icons";

Chart.register(
    BarController,
    BarElement,
    CategoryScale,
    LinearScale,
    Tooltip,
    Legend,
);

export default {
    async mounted() {
        //await this.loadAllData();
        this.isReady = true;
        this.welcome();

        this.$nextTick(() => {
            setTimeout(() => {
                this.repIncome();
                this.repBookReturn();
                this.repBookReturnMonth();
                this.repBookReturnLastYear();
                this.repDbOnline();
                this.repWebOPAC();
                this.repRoom();
                this.repRoomSecond();
                this.repVoc();
                this.initAllCharts(); // เรียกฟังก์ชันรวมกราฟ
                this.startLiveAnimation();

                //✅ ตั้ง interval เพื่ออัปเดตทุก 10 วินาที
                if (!this.intervalFetch) {
                    this.intervalFetch = setInterval(() => {
                        this.repIncome();
                    }, 100000);
                }
            }, 500);
        });
    },
    beforeUnmount() {
        if (this.liveChartInterval) clearInterval(this.liveChartInterval);
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
            incomeAA: "",
            incomeBB: "",
            incomeCC: "",
            incomeAllA: "",
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
            liveChartInterval: null,
            charts: {},
        };
    },
    methods: {
        async loadAllData() {
            await Promise.all([
                this.repBookReturn(),
                this.repBookReturnMonth(),
                this.repBookReturnLastYear(),
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
            if (this.isDarkMode == false) {
                this.isDarkMode = true;
                document.documentElement.classList.add("dark"); //add class ที่ <html> ใน welcome.blade.php
            } else {
                this.isDarkMode = false;
                document.documentElement.classList.remove("dark");
            }
        },
        // ฟังก์ชันสุ่มค่ากราฟให้ขยับหลอกตา

        initAllCharts() {
            // แก้ไข: จากเดิม const repIncome ให้เปลี่ยนเป็น this.charts.income
            const ctxIncome = this.$refs.repIncome.getContext("2d");
            this.charts.income = new Chart(ctxIncome, {
                type: "line",
                data: {
                    /* ข้อมูลเดิมของคุณ */
                },
                options: {
                    /* options เดิม */
                },
            });

            const ctxBook = this.$refs.repBookReturn.getContext("2d");
            this.charts.bookReturn = new Chart(ctxBook, {
                type: "bar",
                data: {
                    /* ข้อมูลเดิมของคุณ */
                },
                options: {
                    /* options เดิม */
                },
            });
        },

        startLiveAnimation() {
            // ลบ Interval เก่าก่อนเริ่มใหม่
            if (this.liveChartInterval) clearInterval(this.liveChartInterval);

            this.liveChartInterval = setInterval(() => {
                // ตรวจสอบว่ากราฟ Patron ถูกสร้างเสร็จหรือยัง
                if (this.charts.patron) {
                    // ดึงข้อมูลชุดแรกออกมา (Datasets[0]) แล้วทำการสุ่มค่าใหม่เล็กน้อย
                    this.charts.patron.data.datasets[0].data =
                        this.charts.patron.data.datasets[0].data.map(
                            (value) => {
                                // สุ่มบวกหรือลบจากค่าเดิมไม่เกิน 5% เพื่อให้ดูขยับแบบธรรมชาติ
                                const change = value * 0.05;
                                return (
                                    value +
                                    (Math.random() * (change * 2) - change)
                                );
                            },
                        );

                    // สั่งอัปเดต โดยใช้ 'none' เพื่อให้มันขยับนิ่งๆ ไม่เด้ง Animation ใหม่
                    this.charts.patron.update("none");
                }

                // ถ้าคุณมีกราฟอื่นที่ใช้ this.charts.ชื่อ ก็เพิ่มตรงนี้ได้เลย
                if (this.charts.income) {
                    this.charts.income.data.datasets[0].data =
                        this.charts.income.data.datasets[0].data.map(
                            (v) => v + (Math.random() * 4 - 2),
                        );
                    this.charts.income.update("none");
                }
            }, 3000); // ขยับทุกๆ 3 วินาที
        },

        toggleTheme() {
            this.isDarkMode = !this.isDarkMode;
        },
        welcome() {
            // แสดง welcome ก่อน
            this.showWelcome = true;

            // ผ่านไป 5 วินาที (5000 มิลลิวินาที) ให้ปิด
            /*setTimeout(() => {
                this.showWelcome = false;
            }, 5000);*/
        },
        async repIncome() {
            try {
                const response = await fetch(
                    "https://script.google.com/macros/s/AKfycbx9qB8KVLBQMMc3IprE1rIMQ_-qlLC4QnQQiwwwmcdCe_zlULD2eO4BBTFv7cHswRU2/exec",
                );
                const data = await response.json();
                // console.log("API:", data);

                //เฉพาะเดือน
                this.incomeAA = data.current_month.a;
                this.incomeBB = data.current_month.b;
                this.incomeCC = data.current_month.space;
                this.incomeAllA = data.current_month.sum;

                //กราฟ
                const tempA = new Array(12).fill(0);
                const tempB = new Array(12).fill(0);
                const tempC = new Array(12).fill(0);

                if (data.yearly_data) {
                    data.yearly_data.forEach((item) => {
                        const mIdx = item.month - 1;
                        if (mIdx >= 0 && mIdx < 12) {
                            tempA[mIdx] = item.a || 0;
                            tempB[mIdx] = item.b || 0;
                            tempC[mIdx] = item.space || 0;
                        }
                    });
                }

                // อัปเดตเข้าสู่ State ของ Vue
                this.incomeA = tempA;
                this.incomeB = tempB;
                this.incomeC = tempC;

                Chart.defaults.font.family = "Anuphan";
                const ctx = this.$refs.repPatron;

                // ✅ ใช้ if/else ป้องกันสร้าง chart ซ้ำ
                if (!this.chart) {
                    // ✅ สร้างกราฟเริ่มต้น
                    this.charts.patron = new Chart(ctx, {
                        type: "line",
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
                                    label: "A",
                                    data: this.incomeA,
                                    fill: false,
                                    borderColor: "rgba(59,130,246,0.9)",
                                    backgroundColor: "rgba(59,130,246,0.7)",
                                    pointBorderColor: "#fff",
                                    tension: 0.3,
                                    borderWidth: 2,
                                    pointRadius: 4,
                                    pointHoverRadius: 6,
                                },
                                {
                                    label: "B",
                                    data: this.incomeB,
                                    borderColor: "rgba(234,179,8,0.9)",
                                    backgroundColor: "rgba(234,179,8,0.3)",
                                    tension: 0.3,
                                    borderWidth: 2,
                                    pointRadius: 4,
                                    fill: false,
                                },
                                {
                                    label: "C",
                                    data: this.incomeC,
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
                                    ticks: { color: "white" },
                                    grid: { display: false },
                                },
                                y: {
                                    beginAtZero: true,
                                    ticks: { color: "white" },
                                    grid: {
                                        color: "rgba(255,255,255,0.1)",
                                    },
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
                        year,
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
                        this.charts.book = new Chart(ctx, {
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
                                        grid: {
                                            color: "rgba(255,255,255,0.1)",
                                        },
                                    },
                                    x: {
                                        ticks: { color: "white" },
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
                    "MMMM",
                );

                fetch(
                    "https://script.google.com/macros/s/AKfycbyFo_SWI2htvExLduoz0IAztQrCN-AH2awbtDDrWtUfXXV2ie5ZNDawwmaBRf-TRmE/exec?type=monthly&year=" +
                        year +
                        "&month=" +
                        month,
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
                        this.charts.bookmonth = new Chart(ctx, {
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
                                            color: "white",
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
                                        ticks: { color: "white" },
                                        grid: { display: false },
                                    },
                                    y: {
                                        beginAtZero: true,
                                        title: {
                                            display: true,
                                            text: "จำนวนการยืม",
                                            color: "#fff",
                                        },
                                        ticks: { color: "white" },
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
        async repBookReturnLastYear() {
            try {
                // เอาปีปัจจุบัน
                const year = new Date().getFullYear() - 1;

                fetch(
                    "https://script.google.com/macros/s/AKfycbyFo_SWI2htvExLduoz0IAztQrCN-AH2awbtDDrWtUfXXV2ie5ZNDawwmaBRf-TRmE/exec?type=yearly&year=" +
                        year,
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
                        const ctx = this.$refs.repBookLastYear; // ✅ ต้องมี .getContext('2d')
                        // สร้างกราฟ
                        this.charts.booklast = new Chart(ctx, {
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
                                        grid: {
                                            color: "rgba(255,255,255,0.1)",
                                        },
                                    },
                                    x: {
                                        ticks: { color: "white" },
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
        async repDbOnline() {
            try {
                fetch(
                    "https://script.google.com/macros/s/AKfycbyNrSp52PnDqptizq5uNAHwknVbx-BNdvTUqXOAEYa03dUgGAdl6E4Xzl5tfIGAoojI8A/exec",
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
                        this.charts.db = new Chart(ctx, {
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
                    });
            } catch (error) {
                console.error("Error Report BookReturn:", error);
            }
        },
        async repWebOPAC() {
            try {
                fetch(
                    "https://script.google.com/macros/s/AKfycbx2YMeeAtUhMCbxyxUrjyWEKekM9bwojQiuP6umIF7kJSN6u7BaVeWbW-nwVVI_WNpO/exec",
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
                        this.charts.chartWeb = new Chart(ctx, {
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
                                        pointBorderColor: "#fff",
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
                                        ticks: { color: "white" },
                                        grid: { display: false },
                                    },
                                    y: {
                                        beginAtZero: true,
                                        ticks: { color: "white" },
                                        grid: {
                                            color: "rgba(255,255,255,0.1)",
                                        },
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
                    config,
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
                    console.warn("⛔️ ไม่พบข้อมูลหรือข้อมูลผิดรูปแบบ:", dataStd);
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
                    config,
                );
                const dataStd = response.data;
                const labels = dataStd.map((item) => item.faculty);
                const data = dataStd.map((item) => item.count);
                if (!Array.isArray(dataStd) || dataStd.length === 0) {
                    console.warn("⛔️ ไม่พบข้อมูลหรือข้อมูลผิดรูปแบบ:", dataStd);
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
                                ticks: { color: "white" },
                                grid: { color: "rgba(255,255,255,0.1)" },
                            },
                            y: {
                                ticks: { color: "white" },
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
            window.location.href = "/light";
        },
        formatShort(num) {
            num = Number(num) || 0;

            if (num >= 1000000) return (num / 1000000).toFixed(1) + "M";
            if (num >= 1000) return (num / 1000).toFixed(1) + "k";
            return num.toLocaleString(); // ✅ สำหรับค่าน้อยกว่า 1,000
        },
        async repOpenAI(code) {
            this.openAIModal = true;
            this.isLoading = true; // ✅ เริ่มโหลด

            let url = "";
            const now = new Date();

            if (code === "year") {
                const year = now.getFullYear();
                url =
                    "https://script.google.com/macros/s/AKfycbyFo_SWI2htvExLduoz0IAztQrCN-AH2awbtDDrWtUfXXV2ie5ZNDawwmaBRf-TRmE/exec?type=yearly&year=" +
                    year;
            } else if (code === "lastyear") {
                const year = now.getFullYear() - 1;
                url =
                    "https://script.google.com/macros/s/AKfycbyFo_SWI2htvExLduoz0IAztQrCN-AH2awbtDDrWtUfXXV2ie5ZNDawwmaBRf-TRmE/exec?type=yearly&year=" +
                    year;
            } else if (code === "month") {
                const year = now.getFullYear();
                const month = now.getMonth() + 1;
                url =
                    "https://script.google.com/macros/s/AKfycbwVjMO1bXqldJHKh4UkPv48uOzi8Ih6bN6nI_oNigvS5x0wFdaUO99yQwM__eqimVUt/exec?year=" +
                    year +
                    "&month=" +
                    month;
            } else {
                console.log("OpenAI Error");
            }

            try {
                const res = await fetch(url);

                if (!res.ok) {
                    throw new Error(`Request failed: HTTP ${res.status}`);
                }

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
                                        data,
                                    )}`,
                                },
                            ],
                        }),
                    },
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

/* ทำให้ภาพพื้นหลังขยับช้าๆ (Ken Burns Effect) */
@keyframes slowZoom {
    0% {
        transform: scale(1);
    }
    50% {
        transform: scale(1.05);
    }
    100% {
        transform: scale(1);
    }
}

.fixed img {
    animation: slowZoom 20s infinite ease-in-out;
}

/* ใส่เพิ่มต่อจาก .background-video เดิม */
/* เจาะรูพื้นหลัง */
:deep(.dark .content) {
    background-color: transparent !important;
}

/* เอฟเฟกต์กระจกฝ้า */
.box-glass {
    background-color: rgba(255, 255, 255, 0.6);
    backdrop-filter: blur(12px);
    border-radius: 1rem;
    border: 1px solid rgba(255, 255, 255, 0.2);
    box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.07);
    transition: all 0.3s ease;
}

.dark .box-glass {
    background-color: rgba(30, 41, 59, 0.7);
    border: 1px solid rgba(255, 255, 255, 0.1);
}

/* อนิเมชั่นพื้นหลังขยับช้าๆ */
.cartoon-ken-burns {
    animation: slowZoom 20s infinite ease-in-out;
}

@keyframes slowZoom {
    0%,
    100% {
        transform: scale(1);
    }
    50% {
        transform: scale(1.08);
    }
}

/* ===== LibBoard-inspired executive dashboard skin ===== */
.libboard-skin {
    background: #020617;
}

.dashboard-ambient {
    overflow: hidden;
}

.ambient-orb {
    position: absolute;
    width: 420px;
    height: 420px;
    border-radius: 9999px;
    filter: blur(95px);
    opacity: 0.46;
    animation: orbDrift 16s ease-in-out infinite alternate;
}

.ambient-orb--blue {
    top: -130px;
    right: 8%;
    background: #38bdf8;
}

.ambient-orb--purple {
    left: 6%;
    bottom: -150px;
    background: #a855f7;
    animation-delay: -5s;
}

.ambient-particles {
    position: absolute;
    inset: 0;
    opacity: 0.2;
    background-image: radial-gradient(
        circle,
        rgba(255, 255, 255, 0.85) 1px,
        transparent 1px
    );
    background-size: 42px 42px;
    animation: particleFlow 28s linear infinite;
}

.glass-topbar {
    backdrop-filter: blur(22px) saturate(150%);
}

.command-content {
    border-radius: 34px;
}

.libboard-hero {
    position: relative;
    overflow: hidden;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 24px;
    padding: 28px 32px;
    border-radius: 30px;
    animation: floatPanel 8s ease-in-out infinite;
}

.libboard-hero::after,
.glass-panel::after {
    content: "";
    position: absolute;
    inset: 0;
    pointer-events: none;
    background: linear-gradient(
        120deg,
        transparent,
        rgba(255, 255, 255, 0.14),
        transparent
    );
    transform: translateX(-120%);
    animation: lightSweep 7s ease-in-out infinite;
}

.hero-kicker {
    margin-bottom: 8px;
    color: #bae6fd;
    font-size: 12px;
    font-weight: 800;
    letter-spacing: 0.18em;
}

.libboard-hero h1 {
    margin: 0;
    color: #fff;
    font-size: clamp(28px, 3.5vw, 52px);
    font-weight: 800;
    line-height: 1.12;
    letter-spacing: -0.045em;
    text-shadow: 0 16px 42px rgba(0, 0, 0, 0.35);
}

.libboard-hero p {
    max-width: 900px;
    margin-top: 10px;
    color: rgba(255, 255, 255, 0.74);
}

.hero-live {
    min-width: 220px;
    display: flex;
    align-items: center;
    gap: 14px;
    padding: 16px 20px;
    border-radius: 24px;
    color: #fff;
    background: rgba(2, 6, 23, 0.28);
    border: 1px solid rgba(255, 255, 255, 0.18);
}

.hero-live small {
    display: block;
    color: rgba(255, 255, 255, 0.62);
    font-size: 11px;
    font-weight: 700;
    letter-spacing: 0.14em;
}

.hero-live strong {
    display: block;
    font-size: 28px;
    line-height: 1;
}

.live-dot {
    width: 16px;
    height: 16px;
    border-radius: 999px;
    background: #22c55e;
    box-shadow: 0 0 0 0 rgba(34, 197, 94, 0.72);
    animation: livePulse 1.45s infinite;
}

.glass-panel {
    position: relative;
    overflow: hidden;
    background: linear-gradient(
        145deg,
        rgba(255, 255, 255, 0.16),
        rgba(255, 255, 255, 0.065)
    ) !important;
    border: 1px solid rgba(255, 255, 255, 0.18) !important;
    border-radius: 28px !important;
    box-shadow:
        0 20px 70px rgba(2, 6, 23, 0.38),
        inset 0 1px 0 rgba(255, 255, 255, 0.22) !important;
    backdrop-filter: blur(24px) saturate(150%);
    transition:
        transform 0.45s ease,
        box-shadow 0.45s ease,
        border-color 0.45s ease;
}

.glass-panel::before {
    content: "";
    position: absolute;
    inset: -2px;
    z-index: -1;
    background: linear-gradient(
        135deg,
        rgba(56, 189, 248, 0.42),
        rgba(168, 85, 247, 0.34),
        rgba(236, 72, 153, 0.28)
    );
    filter: blur(34px);
    opacity: 0.26;
}

.glass-panel:hover {
    transform: translateY(-7px) scale(1.006);
    border-color: rgba(255, 255, 255, 0.32) !important;
    box-shadow: 0 28px 90px rgba(2, 6, 23, 0.52) !important;
}

.dashboard-panel {
    animation: floatPanel 8s ease-in-out infinite;
}

.dashboard-panel:nth-child(2n) {
    animation-delay: -1.6s;
}

.dashboard-panel:nth-child(3n) {
    animation-delay: -3.2s;
}

.welcome-alert {
    border-radius: 24px !important;
    background: linear-gradient(
        135deg,
        rgba(14, 165, 233, 0.55),
        rgba(168, 85, 247, 0.42)
    ) !important;
    border: 1px solid rgba(255, 255, 255, 0.2) !important;
    backdrop-filter: blur(18px);
    box-shadow: 0 18px 55px rgba(2, 6, 23, 0.35);
}

:deep(.box),
:deep(.report-box-2 .box) {
    background-color: transparent;
}

:deep(canvas) {
    filter: drop-shadow(0 14px 28px rgba(56, 189, 248, 0.14));
}

:deep(.form-select),
:deep(.form-control) {
    background-color: rgba(15, 23, 42, 0.45) !important;
    border-color: rgba(255, 255, 255, 0.16) !important;
    color: rgba(255, 255, 255, 0.88) !important;
    backdrop-filter: blur(14px);
}

:deep(.btn-outline-secondary) {
    background: rgba(255, 255, 255, 0.08) !important;
    border-color: rgba(255, 255, 255, 0.18) !important;
    color: rgba(255, 255, 255, 0.78) !important;
}

:deep(.side-nav),
:deep(.mobile-menu-bar) {
    backdrop-filter: blur(18px);
}

:deep(.side-menu--active),
:deep(.menu--active) {
    background: linear-gradient(
        135deg,
        rgba(56, 189, 248, 0.28),
        rgba(168, 85, 247, 0.22)
    ) !important;
    border: 1px solid rgba(255, 255, 255, 0.16);
    box-shadow: 0 14px 36px rgba(2, 6, 23, 0.28);
}

:deep(.text-slate-900) {
    color: rgba(255, 255, 255, 0.92) !important;
}

:deep(.border-slate-200),
:deep(.border-slate-300) {
    border-color: rgba(255, 255, 255, 0.14) !important;
}

@keyframes floatPanel {
    0%,
    100% {
        transform: translateY(0);
    }
    50% {
        transform: translateY(-7px);
    }
}

@keyframes livePulse {
    70% {
        box-shadow: 0 0 0 18px rgba(34, 197, 94, 0);
    }
    100% {
        box-shadow: 0 0 0 0 rgba(34, 197, 94, 0);
    }
}

@keyframes lightSweep {
    0%,
    60% {
        transform: translateX(-120%);
    }
    100% {
        transform: translateX(120%);
    }
}

@keyframes orbDrift {
    to {
        transform: translate(90px, 48px) scale(1.14);
    }
}

@keyframes particleFlow {
    from {
        transform: translateY(0);
    }
    to {
        transform: translateY(-160px);
    }
}

@media (max-width: 768px) {
    .libboard-hero {
        flex-direction: column;
        align-items: stretch;
        padding: 22px;
    }

    .hero-live {
        min-width: 0;
        width: 100%;
        justify-content: center;
    }
}
</style>
