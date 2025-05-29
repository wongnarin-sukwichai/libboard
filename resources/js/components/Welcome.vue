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
                    <!-- <li>
                        <a href="javascript:;" class="menu">
                            <div class="menu__icon">
                                <i data-lucide="box"></i>
                            </div>
                            <div class="menu__title">
                                Menu Layout
                                <i
                                    data-lucide="chevron-down"
                                    class="menu__sub-icon"
                                ></i>
                            </div>
                        </a>                  
                    </li> -->

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
                <a
                    href=""
                    class="logo -intro-x hidden md:flex xl:w-[180px] block"
                >
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
                <!-- BEGIN: Notifications -->
                <!-- <div class="intro-x dropdown mr-4 sm:mr-6">
                <div
                    class="dropdown-toggle notification notification--bullet"
                    role="button"
                    aria-expanded="false"
                    data-tw-toggle="dropdown"
                >
                    <box-icon
                        name="bell"
                        color="#cbd5e1"
                        class="hover:scale-90"
                        @click="alert()"
                    ></box-icon>
                </div>
            </div> -->
                <!-- END: Notifications -->
                <!-- BEGIN: Account Menu -->
                <!-- <div class="intro-x dropdown w-8 h-8">
                <div
                    class="dropdown-toggle w-8 h-8"
                    role="button"
                    aria-expanded="false"
                    data-tw-toggle="dropdown"
                    @click="showUser()"
                >
                    <box-icon
                        name="user"
                        color="#cbd5e1"
                        class="hover:scale-90"
                    ></box-icon>
                </div>
            </div> -->
                <!-- <div
                class="absolute right-10 z-10 mt-32 w-48 rounded-lg bg-gray-700 py-1 shadow-lg border-2 border-white"
                role="menu"
                aria-orientation="vertical"
                aria-labelledby="user-menu-button"
                tabindex="-1"
                v-if="showModal"
            >
                <router-link
                    to=""
                    class="block px-4 py-2 text-sm text-white hover:text-gray-700 hover:bg-white"
                    role="menuitem"
                    tabindex="-1"
                    id="user-menu-item-0"
                    >ฐานข้อมูลออนไลน์</router-link
                >
                <div
                    class="block px-4 py-2 text-sm text-white hover:text-gray-700 hover:bg-white"
                    role="menuitem"
                    tabindex="-1"
                    id="user-menu-item-2"
                    @click="logout()"
                    >ออกจากระบบ</div>
            </div> -->
                <!-- END: Account Menu -->
            </div>
        </div>
        <!-- END: Top Bar -->
        <div class="flex overflow-hidden">
            <!-- BEGIN: Simple Menu -->
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
                        <!-- <ul class="side-menu__sub-open">
                        <li>
                            <a
                                href="simple-menu-light-dashboard-overview-1.html"
                                class="side-menu"
                            >
                                <div class="side-menu__icon">
                                    <i data-lucide="activity"></i>
                                </div>
                                <div class="side-menu__title">Overview 1</div>
                            </a>
                        </li>
                        <li>
                            <a
                                href="simple-menu-light-dashboard-overview-2.html"
                                class="side-menu side-menu--active"
                            >
                                <div class="side-menu__icon">
                                    <i data-lucide="activity"></i>
                                </div>
                                <div class="side-menu__title">Overview 2</div>
                            </a>
                        </li>
                        <li>
                            <a
                                href="simple-menu-light-dashboard-overview-3.html"
                                class="side-menu"
                            >
                                <div class="side-menu__icon">
                                    <i data-lucide="activity"></i>
                                </div>
                                <div class="side-menu__title">Overview 3</div>
                            </a>
                        </li>
                        <li>
                            <a
                                href="simple-menu-light-dashboard-overview-4.html"
                                class="side-menu"
                            >
                                <div class="side-menu__icon">
                                    <i data-lucide="activity"></i>
                                </div>
                                <div class="side-menu__title">Overview 4</div>
                            </a>
                        </li>
                    </ul> -->
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
                    <!-- <li class="side-nav__devider my-6"></li>
                <li>
                    <div
                        class="side-menu hover:cursor-pointer"
                        @click="logout()"
                    >
                        <div class="side-menu__icon">
                            <box-icon
                                name="log-out-circle"
                                color="#64748b"
                            ></box-icon>
                        </div>
                        <div class="side-menu__title">
                            Crud
                            <div class="side-menu__sub-icon">
                                <i data-lucide="chevron-down"></i>
                            </div>
                        </div>
                    </div>
                </li> -->
                </ul>
            </nav>
            <!-- END: Simple Menu -->

            <!-- BEGIN: Content -->
            <div class="content">
                <!-- Video Backgound -->
                <video autoplay muted loop playsinline class="background-video">
                    <source :src="video" type="video/mp4" class="opacity-50" />
                </video>

                <div class="grid grid-cols-12 gap-6">
                    <div class="col-span-12 2xl:col-span-9">
                        <div class="grid grid-cols-12 gap-6">
                            <!-- BEGIN: Notification -->
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
                            <!-- BEGIN: Notification -->

                            <!-- BEGIN: Visitors -->
                            <div
                                class="col-span-12 sm:col-span-6 lg:col-span-4 xl:col-span-3 mt-2"
                            >
                                <div class="intro-y flex items-center h-10">
                                    <h2
                                        class="text-lg font-medium truncate mr-5"
                                    >
                                        ผู้เข้าใช้บริการ
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
                                <div class="report-box-2 intro-y mt-5">
                                    <div class="box p-5">
                                        <div class="flex items-center">
                                            Realtime
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
                                                <div class="dropdown-menu w-40">
                                                    <ul
                                                        class="dropdown-content"
                                                    >
                                                        <li>
                                                            <a
                                                                href=""
                                                                class="dropdown-item"
                                                            >
                                                                <i
                                                                    data-lucide="file-text"
                                                                    class="w-4 h-4 mr-2"
                                                                ></i>
                                                                Export
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href=""
                                                                class="dropdown-item"
                                                            >
                                                                <i
                                                                    data-lucide="settings"
                                                                    class="w-4 h-4 mr-2"
                                                                ></i>
                                                                Settings
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-2xl font-medium mt-2">
                                            {{ incomeDetail.income }}
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
                                                <div class="h-[79px]">
                                                    <canvas
                                                        id="report-bar-chart"
                                                        ref="reportIncome"
                                                    ></canvas>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="text-slate-500 text-xs border-b border-slate-200 flex mb-2 pb-2 mt-4"
                                        >
                                            <div>Type</div>
                                            <div class="ml-auto">Users</div>
                                        </div>
                                        <div class="flex">
                                            <div>นักเรียน</div>
                                            <div class="ml-auto">
                                                {{ incomeDetail.student }}
                                            </div>
                                        </div>
                                        <div class="flex mt-1.5">
                                            <div>นักศึกษา</div>
                                            <div class="ml-auto">
                                                {{ incomeDetail.nisit }}
                                            </div>
                                        </div>
                                        <div class="flex mt-1.5">
                                            <div>อาจารย์</div>
                                            <div class="ml-auto">
                                                {{ incomeDetail.teacher }}
                                            </div>
                                        </div>
                                        <div class="flex mt-1.5">
                                            <div>บุคลากร</div>
                                            <div class="ml-auto">
                                                {{ incomeDetail.staff }}
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
                                        <button
                                            class="btn btn-outline-secondary border-dashed w-full py-1 px-2 mt-4"
                                        >
                                            Request AI Analysis
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <!-- END: Visitors -->

                            <!-- BEGIN: General Report -->
                            <div
                                class="col-span-12 lg:col-span-8 xl:col-span-6 mt-2"
                            >
                                <div
                                    class="intro-y block sm:flex items-center h-10"
                                >
                                    <h2
                                        class="text-lg font-medium truncate mr-5"
                                    >
                                        ยืมหนังสือ
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
                                            ref="reportBookOne"
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
                                                    bookDetail.borrow
                                                }}</span>
                                                <span
                                                    class="text-sm text-gray-400"
                                                    >รายการยืม</span
                                                >
                                            </div>

                                            <div
                                                class="mt-4 text-slate-500 text-xs"
                                            >
                                                # ข้อมูลเดือน
                                                {{
                                                    moment().format("MMMM YYYY")
                                                }}
                                            </div>

                                            <button
                                                class="btn btn-outline-secondary border-dashed w-full py-1 px-2 mt-4"
                                            >
                                                Request AI Analysis
                                            </button>
                                        </div>
                                        <div
                                            class="px-8 py-4 flex flex-col justify-center flex-1 border-t sm:border-t-0 sm:border-l border-slate-200 dark:border-darkmode-300 border-dashed"
                                        >
                                            <div class="text-slate-500 text-md">
                                                แยกตามประเภทสมาชิก
                                            </div>
                                            <div
                                                class="mt-1.5 flex items-center"
                                            >
                                                {{ bookDetail.satit }}
                                                <div class="text-base">
                                                    <span
                                                        class="text-xs text-gray-400"
                                                        >รายการ :
                                                    </span>
                                                </div>
                                                <div
                                                    class="text-amber-400 flex text-xs font-medium tooltip cursor-pointer ml-2"
                                                    title="2% Lower than last month"
                                                >
                                                    นักเรียนโรงเรียนสาธิต
                                                    <i
                                                        data-lucide="chevron-down"
                                                        class="w-4 h-4 ml-0.5"
                                                    ></i>
                                                </div>
                                            </div>
                                            <div
                                                class="mt-1.5 flex items-center"
                                            >
                                                <div
                                                    class="text-base text-amber-400"
                                                >
                                                    {{ bookDetail.bachelor }}
                                                    <span
                                                        class="text-xs text-gray-400"
                                                        >รายการ :
                                                    </span>
                                                </div>
                                                <div
                                                    class="text-amber-400 flex text-xs font-medium tooltip cursor-pointer ml-2"
                                                    title="2% Lower than last month"
                                                >
                                                    นิสิตระดับปริญญาตรี
                                                    <i
                                                        data-lucide="chevron-down"
                                                        class="w-4 h-4 ml-0.5"
                                                    ></i>
                                                </div>
                                            </div>
                                            <div
                                                class="mt-1.5 flex items-center"
                                            >
                                                {{ bookDetail.graduate }}
                                                <div class="text-base">
                                                    <span
                                                        class="text-xs text-gray-400"
                                                        >รายการ :
                                                    </span>
                                                </div>
                                                <div
                                                    class="text-amber-400 flex text-xs font-medium tooltip cursor-pointer ml-2"
                                                    title="2% Lower than last month"
                                                >
                                                    นิสิตระดับปริญญาโท
                                                    <i
                                                        data-lucide="chevron-down"
                                                        class="w-4 h-4 ml-0.5"
                                                    ></i>
                                                </div>
                                            </div>
                                            <div
                                                class="mt-1.5 flex items-center"
                                            >
                                                {{ bookDetail.master }}
                                                <div class="text-base">
                                                    <span
                                                        class="text-xs text-gray-400"
                                                        >รายการ :</span
                                                    >
                                                </div>
                                                <div
                                                    class="text-amber-400 flex text-xs font-medium tooltip cursor-pointer ml-2"
                                                    title="2% Lower than last month"
                                                >
                                                    นิสิตระดับปริญญาเอก
                                                    <i
                                                        data-lucide="chevron-down"
                                                        class="w-4 h-4 ml-0.5"
                                                    ></i>
                                                </div>
                                            </div>
                                            <div
                                                class="mt-1.5 flex items-center"
                                            >
                                                <div
                                                    class="text-base text-amber-400"
                                                >
                                                    {{ bookDetail.academic }}
                                                    <span
                                                        class="text-xs text-gray-400"
                                                        >รายการ :
                                                    </span>
                                                </div>
                                                <div
                                                    class="text-amber-400 flex text-xs font-medium tooltip cursor-pointer ml-2"
                                                    title="2% Lower than last month"
                                                >
                                                    บุคลากรสายวิชาการ
                                                    <i
                                                        data-lucide="chevron-down"
                                                        class="w-4 h-4 ml-0.5"
                                                    ></i>
                                                </div>
                                            </div>
                                            <div
                                                class="mt-1.5 flex items-center"
                                            >
                                                <div
                                                    class="text-base text-amber-400"
                                                >
                                                    {{ bookDetail.support }}
                                                    <span
                                                        class="text-xs text-gray-400"
                                                        >รายการ :
                                                    </span>
                                                </div>
                                                <div
                                                    class="text-amber-400 flex text-xs font-medium tooltip cursor-pointer ml-2"
                                                    title="2% Lower than last month"
                                                >
                                                    บุคลากรสายสนับสนุน
                                                    <i
                                                        data-lucide="chevron-down"
                                                        class="w-4 h-4 ml-0.5"
                                                    ></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END: General Report -->

                            <!-- BEGIN: Users By Age -->
                            <div
                                class="col-span-12 sm:col-span-6 lg:col-span-4 xl:col-span-3 mt-2 lg:mt-6 xl:mt-2"
                            >
                                <div class="intro-y flex items-center h-10">
                                    <h2
                                        class="text-lg font-medium truncate mr-5"
                                    >
                                        ประเภทสมาชิก
                                    </h2>
                                    <!-- <a href="" class="ml-auto text-primary truncate"
                                    >Show More</a
                                > -->
                                </div>
                                <div class="report-box-2 intro-y mt-5">
                                    <div class="box p-5">
                                        <ul
                                            class="nav nav-pills w-4/5 bg-slate-100 dark:bg-black/20 rounded-md mx-auto"
                                            role="tablist"
                                        >
                                            <li
                                                id="active-users-tab"
                                                class="nav-item flex-1"
                                                role="presentation"
                                            >
                                                <button
                                                    class="nav-link w-full py-1.5 px-2"
                                                    :class="
                                                        showMemberOne === true
                                                            ? 'active'
                                                            : ''
                                                    "
                                                    data-tw-toggle="pill"
                                                    data-tw-target="#active-users"
                                                    type="button"
                                                    role="tab"
                                                    @click="memberShow()"
                                                >
                                                    ประเภทผู้ใช้
                                                </button>
                                            </li>
                                            <li
                                                id="inactive-users-tab"
                                                class="nav-item flex-1"
                                                role="presentation"
                                            >
                                                <button
                                                    class="nav-link w-full py-1.5 px-2"
                                                    :class="
                                                        showMemberTwo === true
                                                            ? 'active'
                                                            : ''
                                                    "
                                                    data-tw-toggle="pill"
                                                    data-tw-target="#active-users"
                                                    type="button"
                                                    @click="memberShow()"
                                                >
                                                    กลุ่มผู้ใช้
                                                </button>
                                            </li>
                                        </ul>

                                        <div
                                            v-show="showMemberOne"
                                            class="tab-content mt-6"
                                        >
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
                                                            ref="reportUserOne"
                                                        ></canvas>
                                                    </div>
                                                    <div
                                                        class="flex flex-col justify-center items-center absolute w-full h-full top-0 left-0"
                                                    >
                                                        <div
                                                            class="text-xl font-medium"
                                                        >
                                                            {{
                                                                memberDetail.all
                                                            }}
                                                        </div>
                                                        <div
                                                            class="text-slate-500 mt-0.5"
                                                        >
                                                            คน
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="w-52 sm:w-auto mx-auto mt-5"
                                                >
                                                    <div
                                                        class="flex items-center"
                                                    >
                                                        <div
                                                            class="w-2 h-2 bg-sky-500 rounded-full mr-3"
                                                        ></div>
                                                        <span class="truncate"
                                                            >นักเรียนโรงเรียนสาธิต</span
                                                        >
                                                        <span
                                                            class="font-medium ml-auto"
                                                            >{{
                                                                memberDetail.satit
                                                            }}</span
                                                        >
                                                    </div>
                                                    <div
                                                        class="flex items-center mt-4"
                                                    >
                                                        <div
                                                            class="w-2 h-2 bg-teal-600 rounded-full mr-3"
                                                        ></div>
                                                        <span class="truncate"
                                                            >นิสิตระดับปริญญาตรี</span
                                                        >
                                                        <span
                                                            class="font-medium ml-auto"
                                                            >{{
                                                                memberDetail.bachelor
                                                            }}</span
                                                        >
                                                    </div>
                                                    <div
                                                        class="flex items-center mt-4"
                                                    >
                                                        <div
                                                            class="w-2 h-2 bg-orange-400 rounded-full mr-3"
                                                        ></div>
                                                        <span class="truncate"
                                                            >นิสิตระดับปริญญาโท</span
                                                        >
                                                        <span
                                                            class="font-medium ml-auto"
                                                            >{{
                                                                memberDetail.graduate
                                                            }}</span
                                                        >
                                                    </div>
                                                    <div
                                                        class="flex items-center mt-4"
                                                    >
                                                        <div
                                                            class="w-2 h-2 bg-amber-400 rounded-full mr-3"
                                                        ></div>
                                                        <span class="truncate"
                                                            >นิสิตระดับปริญญาเอก</span
                                                        >
                                                        <span
                                                            class="font-medium ml-auto"
                                                            >{{
                                                                memberDetail.master
                                                            }}</span
                                                        >
                                                    </div>
                                                    <div
                                                        class="flex items-center mt-4"
                                                    >
                                                        <div
                                                            class="w-2 h-2 bg-gray-500 rounded-full mr-3"
                                                        ></div>
                                                        <span class="truncate"
                                                            >บุคลากรสายวิชาการ</span
                                                        >
                                                        <span
                                                            class="font-medium ml-auto"
                                                            >{{
                                                                memberDetail.academic
                                                            }}</span
                                                        >
                                                    </div>
                                                    <div
                                                        class="flex items-center mt-4"
                                                    >
                                                        <div
                                                            class="w-2 h-2 bg-lime-500 rounded-full mr-3"
                                                        ></div>
                                                        <span class="truncate"
                                                            >บุคลากรสายสนับสนุน</span
                                                        >
                                                        <span
                                                            class="font-medium ml-auto"
                                                            >{{
                                                                memberDetail.support
                                                            }}</span
                                                        >
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Two -->
                                        <div
                                            v-show="showMemberTwo"
                                            class="tab-content mt-6"
                                        >
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
                                                            ref="reportUserTwo"
                                                        ></canvas>
                                                    </div>
                                                    <div
                                                        class="flex flex-col justify-center items-center absolute w-full h-full top-0 left-0"
                                                    >
                                                        <div
                                                            class="text-xl font-medium"
                                                        >
                                                            {{
                                                                memberDetailTwo.all
                                                            }}
                                                        </div>
                                                        <div
                                                            class="text-slate-500 mt-0.5"
                                                        >
                                                            คน
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="w-52 sm:w-auto mx-auto mt-5"
                                                >
                                                    <div
                                                        class="flex items-center"
                                                    >
                                                        <div
                                                            class="w-2 h-2 bg-sky-500 rounded-full mr-3"
                                                        ></div>
                                                        <span class="truncate"
                                                            >นักศึกษา</span
                                                        >
                                                        <span
                                                            class="font-medium ml-auto"
                                                            >{{
                                                                memberDetailTwo.nisit
                                                            }}</span
                                                        >
                                                    </div>
                                                    <div
                                                        class="flex items-center mt-4"
                                                    >
                                                        <div
                                                            class="w-2 h-2 bg-teal-600 rounded-full mr-3"
                                                        ></div>
                                                        <span class="truncate"
                                                            >บุคลากร</span
                                                        >
                                                        <span
                                                            class="font-medium ml-auto"
                                                            >{{
                                                                memberDetailTwo.staff
                                                            }}</span
                                                        >
                                                    </div>
                                                    <div
                                                        class="flex items-center mt-4"
                                                    >
                                                        <div
                                                            class="w-2 h-2 bg-orange-400 rounded-full mr-3"
                                                        ></div>
                                                        <span class="truncate"
                                                            >บุคลากรภายนอก</span
                                                        >
                                                        <span
                                                            class="font-medium ml-auto"
                                                            >{{
                                                                memberDetailTwo.patron
                                                            }}</span
                                                        >
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END: Users By Age -->

                            <!-- BEGIN: Weekly Top Products -->

                            <div class="col-span-12 lg:col-span-8 mt-6">
                                <div
                                    class="intro-y block sm:flex items-center h-10"
                                >
                                    <h2
                                        class="text-lg font-medium truncate mr-5"
                                    >
                                        จองห้องออนไลน์ (Study Room)
                                    </h2>
                                </div>

                                <div class="mt-5 intro-x">
                                    <div class="grid grid-cols-2 gap-4">
                                        <div class="box zoom-in">
                                            <div
                                                class="tiny-slider"
                                                id="important-notes"
                                            >
                                                <div class="p-2">
                                                    <div
                                                        class="flex justify-center overflow-auto"
                                                    >
                                                        <div class="h-[360px]">
                                                            <canvas
                                                                class=""
                                                                ref="reportStdOne"
                                                            ></canvas>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="text-slate-500 text-xs"
                                                    >
                                                        # ข้อมูลเดือน
                                                        {{
                                                            moment().format(
                                                                "MMMM YYYY"
                                                            )
                                                        }}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="box zoom-in">
                                            <div class="p-2">
                                                <div
                                                    class="flex justify-center overflow-auto"
                                                >
                                                    <div
                                                        class="h-[360px] w-full"
                                                    >
                                                        <canvas
                                                            class="mt-16"
                                                            ref="reportStdTwo"
                                                        ></canvas>
                                                    </div>
                                                </div>
                                                <div
                                                    class="text-slate-500 text-xs"
                                                >
                                                    # ข้อมูลเดือน
                                                    {{
                                                        moment().format(
                                                            "MMMM YYYY"
                                                        )
                                                    }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END: Weekly Top Products -->

                            <!-- BEGIN: Weekly Best Sellers -->
                            <div class="col-span-12 xl:col-span-4 mt-6">
                                <div class="intro-y flex items-center h-10">
                                    <h2
                                        class="text-lg font-medium truncate mr-5"
                                    >
                                        ฐานข้อมูลออนไลน์
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
                                <div class="mt-5">
                                    <div
                                        v-for="(db, index) in dbOnline"
                                        :key="index"
                                        class="intro-y"
                                    >
                                        <div
                                            class="box px-4 py-4 mb-3 flex items-center zoom-in"
                                        >
                                            <div
                                                class="w-10 h-10 flex-none image-fit rounded-md overflow-hidden"
                                            >
                                                <img
                                                    alt="Midone - HTML Admin Template"
                                                    :src="db.pic"
                                                />
                                            </div>
                                            <div class="ml-4 mr-auto">
                                                <div class="font-medium">
                                                    {{ db.name }}
                                                </div>
                                                <div
                                                    class="text-slate-500 text-xs mt-0.5"
                                                ></div>
                                            </div>
                                            <div
                                                class="py-1 px-2 rounded-full text-xs bg-success text-white cursor-pointer font-medium"
                                            >
                                                {{ db.count }}
                                            </div>
                                        </div>
                                    </div>                                
                                    <div
                                        class="intro-y w-full block text-center rounded-md py-4 border border-dotted border-slate-400 hover:border-emerald-600 dark:border-darkmode-300 text-slate-500 cursor-pointer"
                                        @click="modalShow()"
                                    >
                                        <p
                                            class="hover:scale-105 hover:text-emerald-700"
                                        >
                                            View More
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END: Weekly Best Sellers -->
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
                                            รับฟังเสียงผู้ใช้ (VOC)
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
                                                v-for="
                                                    (vocText, index) in vocText
                                                "
                                                :key="index"
                                            >
                                                <div class="flex items-center">
                                                    <div
                                                        class="font-medium text-balance break-all"
                                                    >
                                                        {{ voc.detail }}
                                                    </div>
                                                    <div
                                                        class="text-xs text-slate-500 ml-auto"
                                                    >
                                                        {{ voc.detail.name }}
                                                        ***
                                                    </div>
                                                </div>
                                                <div
                                                    class="text-slate-500 mt-1 text-xs"
                                                >
                                                    {{
                                                        moment(
                                                            voc.created_at
                                                        ).format("L")
                                                    }}
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
                                                    <div class="h-auto">
                                                        <canvas
                                                            class=""
                                                            ref="reportVocOne"
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
                                                    <div class="h-[208px]">
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

                                <!-- BEGIN: Important Notes -->
                                <div
                                    class="col-span-12 md:col-span-6 xl:col-span-12 mt-3 2xl:mt-0"
                                >
                                    <div class="intro-x flex items-center h-10">
                                        <h2
                                            class="text-lg font-medium truncate mr-auto"
                                        >
                                            สืบค้นมากสุด (OPAC)
                                        </h2>
                                    </div>
                                    <div
                                        class="intro-y overflow-auto mt-8 sm:mt-0"
                                    >
                                        <table
                                            class="table table-report sm:mt-2"
                                        >
                                            <thead
                                                class="bg-gray-500 opacity-80 rounded-full shadow-md"
                                            >
                                                <tr>
                                                    <th
                                                        class="whitespace-nowrap"
                                                    >
                                                        IMAGES
                                                    </th>
                                                    <th
                                                        class="whitespace-nowrap"
                                                    >
                                                        TITLE
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr
                                                    class="px-4 py-4 zoom-in"
                                                    v-for="(
                                                        opac, index
                                                    ) in opacList.slice(0, 5)"
                                                    :key="index"
                                                    @click="link(opac.BIBID)"
                                                >
                                                    <td
                                                        class="w-40 text-center"
                                                    >
                                                        <box-icon
                                                            name="book"
                                                            color="#f59e0b"
                                                        ></box-icon>
                                                    </td>
                                                    <td class="">
                                                        <div
                                                            class="font-medium whitespace-nowrap"
                                                        >
                                                            {{
                                                                opac.TITLE.substring(
                                                                    0,
                                                                    80
                                                                )
                                                            }}
                                                        </div>
                                                        <div
                                                            class="text-slate-500 text-xs whitespace-nowrap mt-0.5"
                                                        >
                                                            {{ opac.BIBID }}
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- END: Important Notes -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Content -->
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
            v-if="isModalShow"
        >
            <!-- Content ของ modal -->
            <div class="bg-white p-6 rounded-lg lg:w-1/3 h-3/4 overflow-y-auto">
                <p class="text-lg text-amber-400">
                    ** สถิติเข้าเยี่ยมชมมากที่สุด 10 อันดับแรก **
                </p>
                <hr class="border-dashed" />
                <div class="mt-5">
                    <div
                        v-for="(db, index) in dbOnlineTwo"
                        :key="index"
                        class="intro-y"
                    >
                        <div
                            class="box px-4 py-4 mb-3 flex items-center zoom-in"
                        >
                            <div
                                class="w-10 h-10 flex-none image-fit rounded-md overflow-hidden"
                            >
                                <img
                                    alt="Midone - HTML Admin Template"
                                    :src="db.pic"
                                />
                            </div>
                            <div class="ml-4 mr-auto">
                                <div class="font-medium">{{ db.name }}</div>
                                <div
                                    class="text-slate-500 text-xs mt-0.5"
                                ></div>
                            </div>
                            <div
                                class="py-1 px-2 rounded-full text-xs bg-success text-white cursor-pointer font-medium"
                            >
                                {{ db.count }}
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="border-dashed" />
                <div class="mt-2 flex justify-end">
                    <button
                        class="bg-red-500 text-white px-4 py-2 rounded"
                        @click="modalShow()"
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
import Chart from "chart.js/auto";
import moment from "moment"; //format date thai
import "moment/dist/locale/th";
moment.locale("th");

export default {
    mounted() {
        this.reportIncome();
        this.reportBook();
        this.reportMember();
        this.reportMemberTwo();
        this.reportVocText();
        this.reportVocBar();
        this.reportVocTwo();
        this.reportStdDonut();
        this.reportStdBar();
        this.reportOpac();
    },
    data() {
        return {
            logo: "/img/library.png",
            pic1: "/img/01.jpg",
            pic2: "/img/02.jpg",
            pic3: "/img/03.jpg",
            pic4: "/img/04.jpg",
            isDarkMode: true,
            showWelcome: true,
            opacList: "",
            modalMenu: false,
            showMemberOne: true,
            showMemberTwo: false,
            isModalShow: false,
            video: "/img/bg/01.mp4",
            bookDetail: "",
            memberDetail: "",
            memberDetailTwo: "",
            incomeDetail: "",
            moment: moment,
            vocText: "",
            dbOnline: "",
            dbOnlineTwo: "",
        };
    },
    methods: {
        showMenu() {
            this.modalMenu = true;
        },
        closeMenu() {
            this.modalMenu = false;
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
        link(id) {
            window.open(
                "https://opac.msu.ac.th/results?Ntk=KEYWORD&Ntt=" + id,
                "_blank"
            );
        },
        getImage(id) {
            //  const config = {                                    //ใส่ทุกครั้งที่รับ File เข้ามา
            //     headers: {
            //         'token': ''
            //     }
            // }
            // axios
            //     .get("https://libapp.msu.ac.th/v1/api/GetBookCover/" + id, config)
            //     .then((response) => {
            //         console.log(response)
            //         return response;
            //     });
        },
        reportIncome() {
            fetch(
                "https://script.googleusercontent.com/macros/echo?user_content_key=AehSKLiI5DgZzU7QqVrcm0uQB_2E34skz7GCIMBubEddg4-IaJ8XgfTlrwyPucLYaK60rJWJ9ytgG_dJtJlgV_PJS0SjQLe8W32yMO_j51khEa9RdVrUCOeG4-G3oC2RpwCWpKiU45MfGwnhFFjKiQ-rUfcqpu1LOpy3CFEmLRoAMP1AjXKTcXdcIeTpq11V6OPMpSqjaTmJ3Z6JK6ZdCW9_645Ug9PtoTSSjC97thLZPdKDo84cwMLcBdpACPd8pcazkan6GTCs6Iugq41AwPfbCZhq53yHkA&lib=MScLvDAZvp9hXKkQ7BwnIsLN54MR286vU"
            )
                .then((response) => response.json())
                .then((dataIncome) => {
                    const firstRow = dataIncome[0];

                    this.incomeDetail = {
                        income: firstRow.income || "",
                        student: firstRow.student || "",
                        nisit: firstRow.nisit || "",
                        teacher: firstRow.teacher || "",
                        staff: firstRow.staff || "",
                    };

                    // Fake visitor data
                    let reportBarChartData = new Array(40)
                        .fill(0)
                        .map((data, key) => {
                            if (key % 3 == 0 || key % 5 == 0) {
                                return Math.ceil(Math.random() * (0 - 20) + 20);
                            } else {
                                return Math.ceil(Math.random() * (0 - 7) + 7);
                            }
                        });

                    const ctx = this.$refs.reportIncome;

                    // เก็บ chart instance ในตัวแปร
                    const myBarChart = new Chart(ctx, {
                        type: "bar",
                        data: {
                            labels: reportBarChartData,
                            datasets: [
                                {
                                    label: "",
                                    barThickness: 6,
                                    data: reportBarChartData,
                                    backgroundColor: "#0d9488",
                                },
                            ],
                        },
                        options: {
                            maintainAspectRatio: false,
                            plugins: {
                                legend: {
                                    display: false,
                                },
                            },
                            scales: {
                                x: {
                                    ticks: {
                                        display: false,
                                    },
                                    grid: {
                                        display: false,
                                    },
                                },
                                y: {
                                    ticks: {
                                        display: false,
                                    },
                                    grid: {
                                        display: false,
                                        drawBorder: false,
                                    },
                                },
                            },
                        },
                    });

                    setInterval(() => {
                        // Swap visitor data
                        let newData = reportBarChartData[0];
                        reportBarChartData.shift();
                        reportBarChartData.push(newData);

                        myBarChart.data.datasets[0].data = reportBarChartData;
                        myBarChart.update();
                    }, 1000);
                });
        },
        reportBook() {
            fetch(
                "https://script.googleusercontent.com/macros/echo?user_content_key=AehSKLjgOX_J4Swg5lJXWe8mBO1Pe6jYHfB_qqDg3uOILSoyI6wOl2DS4GrQvL0N_E6udVzo7tNt2GJYamauj7sAo0MYd0hhwK_NZ-70aRrBS56v_kwTs4W-K0dQd7NNgHrQIr1GzvBqRL8POSaEpj1DBPMKS1R9Pnzan2XR81NZZ8eMv_geucbYWIBgipNklTQ0dmq5lR980EtIPzOxufTgJcTEBmjtgrsGos_6PxiIw2JJP-X2uzdB9wFzcBtaCqwI9oXpl-QTCsQd5opuO1vWUfODj4JT8rcMXcBA-i8V&lib=MfFKpDvkbxsVrVICzLEcZofhElnTbI1Nb"
            ) // แก้เป็น URL ของคุณ
                .then((response) => response.json())
                .then((data) => {
                    // สมมติ data เป็น array ของ object (แบบ JSON ที่คุณส่งมา)
                    const firstRow = data[0];

                    // ดึงเฉพาะค่าเดือน 01-12
                    const monthData = [
                        firstRow.jan || 0,
                        firstRow.feb || 0,
                        firstRow.mar || 0,
                        firstRow.apr || 0,
                        firstRow.may || 0,
                        firstRow.june || 0,
                        firstRow.jul || 0,
                        firstRow.aug || 0,
                        firstRow.sep || 0,
                        firstRow.oct || 0,
                        firstRow.nov || 0,
                        firstRow.dec || 0,
                    ];

                    // เก็บข้อมูลอื่นๆ ไว้ในตัวแปร
                    this.bookDetail = {
                        borrow: firstRow.borrow || "",
                        satit: firstRow.satit || "",
                        bachelor: firstRow.bachelor || "",
                        graduate: firstRow.graduate || "",
                        master: firstRow.master || "",
                        academic: firstRow.academic || "",
                        support: firstRow.support || "",
                    };

                    // สร้างกราฟ Chart.js
                    Chart.defaults.font.family = "Anuphan";
                    const ctx = this.$refs.reportBookOne;

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
                                    label: "สถิติการยืม รายเดือน / 2568",
                                    data: monthData, // ใช้ข้อมูลจาก API
                                    backgroundColor: [
                                        "#ff6384",
                                        "#36a2eb",
                                        "#ffcd56",
                                        "#4bc0c0",
                                        "#9966ff",
                                        "#ff9f40",
                                        "#ff6384",
                                        "#36a2eb",
                                        "#ffcd56",
                                        "#4bc0c0",
                                        "#9966ff",
                                        "#ff9f40",
                                    ],
                                    borderWidth: 2,
                                    borderColor: "#fff",
                                    borderRadius: 10,
                                    borderSkipped: false,
                                },
                            ],
                        },
                        options: {
                            responsive: true,
                            animation: {
                                duration: 2000,
                                easing: "easeOutBounce",
                            },
                            plugins: {
                                legend: {
                                    display: true,
                                    labels: {
                                        color: "white",
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
                                    ticks: {
                                        color: "white",
                                    },
                                },
                                x: {
                                    ticks: {
                                        color: "white",
                                    },
                                },
                            },
                        },
                    });
                });
        },
        reportMember() {
            fetch(
                "https://script.google.com/macros/s/AKfycbxqadaYYCf3xkezxEt7ppnd3IjzsYrSsmmLeabaozh168w9XE6-4CmwepXO3omNKYE-/exec"
            ) // แก้เป็น URL ของคุณ
                .then((response) => response.json())
                .then((data) => {
                    // สมมติ data เป็น array ของ object (แบบ JSON ที่คุณส่งมา)
                    const firstRow = data[0];

                    // เก็บข้อมูลอื่นๆ ไว้ในตัวแปร
                    const memberData = [
                        firstRow.satit || 0,
                        firstRow.bachelor || 0,
                        firstRow.graduate || 0,
                        firstRow.master || 0,
                        firstRow.academic || 0,
                        firstRow.support || 0,
                    ];

                    this.memberDetail = {
                        all: firstRow.all || "",
                        satit: firstRow.satit || "",
                        bachelor: firstRow.bachelor || "",
                        graduate: firstRow.graduate || "",
                        gmaster: firstRow.master || "",
                        academic: firstRow.academic || "",
                        support: firstRow.support || "",
                    };

                    const ctx = this.$refs.reportUserOne;
                    new Chart(ctx, {
                        type: "doughnut",
                        data: {
                            labels: "",
                            datasets: [
                                {
                                    label: "Data",
                                    data: memberData,
                                    backgroundColor: [
                                        "#0ea5e9",
                                        "#0d9488",
                                        "#fb923c",
                                        "#facc15",
                                        "#64748b",
                                        "#a3e635",
                                    ],
                                    hoverBackgroundColor: [
                                        "#9BD0F5",
                                        "#9BD0F5",
                                    ],
                                    borderWidth: 5,
                                    borderColor: "#fff",
                                },
                            ],
                        },
                        options: {
                            responsive: true,
                            animation: {
                                duration: 2000,
                                easing: "easeOutBounce",
                            },
                            maintainAspectRatio: false,
                            plugins: {
                                legend: {
                                    display: false,
                                },
                                tooltip: {
                                    backgroundColor: "#333",
                                    titleColor: "#fff",
                                    bodyColor: "#fff",
                                },
                            },
                            cutout: "80%",
                        },
                    });
                });
        },
        reportMemberTwo() {
            fetch(
                "https://script.google.com/macros/s/AKfycbw6uXjJZb8xBIk-dHKkoWRppNHqTrXG5ctLVSDJt1Ert6LghRyOmzwm0ubFK8wd42v2/exec"
            ) // แก้เป็น URL ของคุณ
                .then((response) => response.json())
                .then((data) => {
                    // สมมติ data เป็น array ของ object (แบบ JSON ที่คุณส่งมา)
                    const firstRow = data[0];

                    // เก็บข้อมูลอื่นๆ ไว้ในตัวแปร
                    const memberDataTwo = [
                        firstRow.nisit || 0,
                        firstRow.staff || 0,
                        firstRow.patron || 0,
                    ];

                    this.memberDetailTwo = {
                        all: firstRow.all || "",
                        nisit: firstRow.nisit || "",
                        staff: firstRow.staff || "",
                        patron: firstRow.patron || "",
                    };

                    const ctx = this.$refs.reportUserTwo;
                    new Chart(ctx, {
                        type: "doughnut",
                        data: {
                            labels: "",
                            datasets: [
                                {
                                    label: "Data",
                                    data: memberDataTwo,
                                    backgroundColor: [
                                        "#0ea5e9",
                                        "#0d9488",
                                        "#fb923c",
                                    ],
                                    hoverBackgroundColor: [
                                        "#9BD0F5",
                                        "#9BD0F5",
                                    ],
                                    borderWidth: 5,
                                    borderColor: "#fff",
                                },
                            ],
                        },
                        options: {
                            responsive: true,
                            animation: {
                                duration: 2000,
                                easing: "easeOutBounce",
                            },
                            maintainAspectRatio: false,
                            plugins: {
                                legend: {
                                    display: false,
                                },
                                tooltip: {
                                    backgroundColor: "#333",
                                    titleColor: "#fff",
                                    bodyColor: "#fff",
                                },
                            },
                            cutout: "80%",
                        },
                    });
                });
        },
        reportVocText() {
            const token = import.meta.env.LIBVOC_API_TOKEN;

            const config = {
                headers: {
                    token: token,
                },
            };

            axios
                .get("https://libvoc.msu.ac.th/api/getPost", config)
                .then((response) => {
                    this.vocText = response.data;
                })
                .catch((error) => {
                    console.error("Error fetching data:", error);
                });
        },
        reportVocBar() {
            const token = import.meta.env.LIBVOC_API_TOKEN;

            const config = {
                headers: {
                    token: token
                },
            };

            axios
                .get("https://libvoc.msu.ac.th/api/getConcern", config)
                .then((response) => {
                    const dataVoc = response.data;

                    Chart.defaults.font.family = "Anuphan";
                    const ctx = this.$refs.reportVocOne;
                    new Chart(ctx, {
                        type: "bar",
                        data: {
                            labels: ["ข้อร้องเรียน", "ข้อเสนอแนะ", "คำชืนชม"],
                            datasets: [
                                {
                                    label: "ประเภทคำร้อง",
                                    data: dataVoc,
                                    backgroundColor: [
                                        "#ffcd56",
                                        "#4bc0c0",
                                        "rgba(54, 162, 235, 0.6)",
                                    ],
                                    borderWidth: 3,
                                    borderColor: "#fff",
                                    borderRadius: 10,
                                    borderSkipped: false,
                                },
                            ],
                        },
                        options: {
                            responsive: true,
                            animation: {
                                duration: 2000,
                                easing: "easeOutBounce",
                            },
                            plugins: {
                                legend: {
                                    display: true,
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
                            scales: {
                                y: {
                                    beginAtZero: true,
                                    ticks: {
                                        color: "white", // <- ใส่ตรงนี้!
                                    },
                                },
                                x: {
                                    ticks: {
                                        color: "white", // <- ใส่ตรงนี้!
                                    },
                                },
                            },
                        },
                    });
                })
                .catch((error) => {
                    console.error("Error fetching data:", error);
                });
        },
        reportVocTwo() {
            const token = import.meta.env.LIBVOC_API_TOKEN;

            const config = {
                headers: {
                    token: token
                },
            };

            axios
                .get("https://libvoc.msu.ac.th/api/getType", config)
                .then((response) => {
                    const dataVoc = response.data;

                    Chart.defaults.font.family = "Anuphan";

                    const ctx = this.$refs.reportVocTwo;
                    new Chart(ctx, {
                        type: "bar",
                        data: {
                            labels: ["นักศึกษา", "อาจารย์", "บุคลากร"],
                            datasets: [
                                {
                                    label: "ประเภทผู้ใช้บริการ",
                                    data: dataVoc,
                                    backgroundColor: [
                                        "#ff6384",
                                        "rgba(255, 159, 64, 0.6)",
                                        "rgba(255, 205, 86, 0.6)",
                                    ],
                                    borderColor: [
                                        "rgb(255, 99, 132)",
                                        "rgb(255, 159, 64)",
                                        "rgb(255, 205, 86)",
                                    ],
                                    borderWidth: 3,
                                    borderColor: "#fff",
                                    borderRadius: 10,
                                    borderSkipped: false,
                                },
                            ],
                        },
                        options: {
                            responsive: true,
                            animation: {
                                duration: 2000,
                                easing: "easeOutBounce",
                            },
                            plugins: {
                                legend: {
                                    display: true,
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
                            scales: {
                                y: {
                                    beginAtZero: true,
                                    ticks: {
                                        color: "white", // <- ใส่ตรงนี้!
                                    },
                                },
                                x: {
                                    ticks: {
                                        color: "white", // <- ใส่ตรงนี้!
                                    },
                                },
                            },
                        },
                    });
                })
                .catch((error) => {
                    console.error("Error fetching data:", error);
                });
        },
        reportStdDonut() {
            const token = import.meta.env.LIBROOM_API_TOKEN;

            const config = {
                headers: {
                    token: token
                },
            };

            axios
                .get("https://libroom.msu.ac.th/api/getService", config)
                .then((response) => {
                    const dataStd = response.data;

                    Chart.defaults.font.family = "Anuphan";

                    const ctx = this.$refs.reportStdOne;
                    new Chart(ctx, {
                        type: "doughnut",
                        data: {
                            labels: ["AREC", "DLP", "MSU SPACE"],
                            datasets: [
                                {
                                    label: "",
                                    data: dataStd,
                                    backgroundColor: [
                                        "#ff6384",
                                        "#36a2eb",
                                        "#ffcd56",
                                    ],
                                    borderColor: [
                                        "#ff6384",
                                        "#36a2eb",
                                        "#ffcd56",
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
                                    position: "top",
                                    labels: {
                                        color: "white", // <- ใส่ตรงนี้!
                                    },
                                },
                                title: {
                                    display: true,
                                    text: "สถานที่",
                                    font: { weight: "normal" },
                                    color: "white",
                                },
                                tooltip: {
                                    backgroundColor: "#333",
                                    titleColor: "#fff",
                                    bodyColor: "#fff",
                                },
                            },
                        },
                    });
                })
                .catch((error) => {
                    console.error("Error fetching data:", error);
                });
        },
        reportStdBar() {
            const token = import.meta.env.LIBROOM_API_TOKEN;

            const config = {
                headers: {
                    token: token,
                },
            };

            axios
                .get("https://libroom.msu.ac.th/api/getMost", config)
                .then((response) => {
                    this.vocText = response.data;

                    Chart.defaults.font.family = "Anuphan";
                    const ctx = this.$refs.reportStdTwo;
                    new Chart(ctx, {
                        type: "bar",
                        data: {
                            labels: [
                                "การบัญชีและการจัดการ",
                                "มนุษยศาสตร์และสังคมศาสตร์",
                                "วิทยาศาสตร์",
                                "วิทยาการสารสนเทศ",
                                "สาธารณสุขศาสตร์",
                            ],
                            datasets: [
                                {
                                    label: "คณะที่เป็นสมาชิกสูงสุด 5 อันดับแรก",
                                    data: [7370, 6338, 3586, 3041, 2712],
                                    backgroundColor: [
                                        "#ff6384",
                                        "#36a2eb",
                                        "#ffcd56",
                                        "#4bc0c0",
                                        "#9966ff",
                                    ],
                                    borderColor: [
                                        "rgb(255, 99, 132)",
                                        "rgb(255, 159, 64)",
                                        "rgb(255, 205, 86)",
                                        "rgb(75, 192, 192)",
                                        "rgb(54, 162, 235)",
                                    ],
                                    borderWidth: 3,
                                    borderColor: "#fff",
                                    borderRadius: 10,
                                    borderSkipped: false,
                                },
                            ],
                        },
                        options: {
                            responsive: true,
                            animation: {
                                duration: 2000,
                                easing: "easeOutBounce",
                            },
                            plugins: {
                                legend: {
                                    display: true,
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
                            scales: {
                                y: {
                                    beginAtZero: true,
                                    ticks: {
                                        color: "white", // <- ใส่ตรงนี้!
                                    },
                                },
                                x: {
                                    ticks: {
                                        color: "white", // <- ใส่ตรงนี้!
                                    },
                                },
                            },
                        },
                    });
                })
                .catch((error) => {
                    console.error("Error fetching data:", error);
                });
        },
        reportOnline() {
            const token = import.meta.env.LIBRARY_API_TOKEN;

            const config = {
                //ใส่ทุกครั้งที่รับ File เข้ามา
                headers: {
                    token: token
                },
            };
            axios
                .get("http://202.28.32.28/countdb/api/getMonth", config)
                .then((response) => {
                    this.dbOnline = response.data;
                })
                .catch((err) => {
                    console.log(err);
                });
        },
        reportOnlineTwo() {
            const token = import.meta.env.LIBRARY_API_TOKEN;

            const config = {
                //ใส่ทุกครั้งที่รับ File เข้ามา
                headers: {
                    token: token,
                },
            };
            axios
                .get("http://202.28.32.28/countdb/api/getStat", config)
                .then((response) => {
                    this.dbOnlineTwo = response.data;
                })
                .catch((err) => {
                    console.log(err);
                });
        },
        reportOpac() {
            const token = import.meta.env.WALAI_API_TOKEN;
            
            const config = {
                //ใส่ทุกครั้งที่รับ File เข้ามา
                headers: {
                    token: token
                },
            };
            axios
                .get("https://libapp.msu.ac.th/v1/api/GetTopView", config)
                .then((response) => {
                    this.opacList = response.data;
                })
                .catch((err) => {
                    console.log(err);
                });
            // axios
            //     .get("/api/GetTopView")
            //     .then((response) => {
            //         this.opacList = response.data;
            //     })
            //     .catch((err) => {});
        },
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
