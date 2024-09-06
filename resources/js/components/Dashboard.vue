<template>
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
                        <h2 class="text-lg font-medium truncate mr-5">
                            ผู้เข้าใช้บริการ
                        </h2>
                        <select
                            class="sm:ml-auto mt-3 sm:mt-0 sm:w-auto form-select box"
                        >
                            <option value="daily">รายวัน</option>
                            <option value="monthly">รายเดือน</option>
                            <option value="yearly">รายปี</option>
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
                                        <ul class="dropdown-content">
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
                            <div class="text-2xl font-medium mt-2">200</div>
                            <div
                                class="border-b border-slate-200 flex pb-2 mt-4"
                            >
                                <div class="text-slate-500 text-xs">
                                    Page views per second
                                </div>
                                <div
                                    class="text-success flex text-xs font-medium tooltip cursor-pointer ml-auto"
                                    title="49% Lower than last month"
                                >
                                    49%
                                    <i
                                        data-lucide="chevron-up"
                                        class="w-4 h-4 ml-0.5"
                                    ></i>
                                </div>
                            </div>
                            <div class="mt-2 border-b broder-slate-200">
                                <div class="-mb-1.5 -ml-2.5">
                                    <div class="h-[79px]">
                                        <canvas
                                            id="report-bar-chart"
                                            ref="reportBar"
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
                                <div class="ml-auto">46</div>
                            </div>
                            <div class="flex mt-1.5">
                                <div>นักศึกษา</div>
                                <div class="ml-auto">118</div>
                            </div>
                            <div class="flex mt-1.5">
                                <div>อาจารย์</div>
                                <div class="ml-auto">32</div>
                            </div>
                            <div class="flex mt-1.5">
                                <div>บุคลากร</div>
                                <div class="ml-auto">4</div>
                            </div>
                            <div
                                class="flex mt-3 text-gray-400 text-xs font-light"
                            >
                                <div># ข้อมูล ณ วันที่</div>
                                <div class="ml-auto">10 มิถุนายน 2567</div>
                            </div>
                            <button
                                class="btn btn-outline-secondary border-dashed w-full py-1 px-2 mt-4"
                            >
                                Real-Time Report
                            </button>
                        </div>
                    </div>
                </div>
                <!-- END: Visitors -->

                <!-- BEGIN: General Report -->
                <div class="col-span-12 lg:col-span-8 xl:col-span-6 mt-2">
                    <div class="intro-y block sm:flex items-center h-10">
                        <h2 class="text-lg font-medium truncate mr-5">
                            ยืมหนังสือ
                        </h2>
                        <select
                            class="sm:ml-auto mt-3 sm:mt-0 sm:w-auto form-select box"
                        >
                            <option value="daily">รายวัน</option>
                            <option value="monthly">รายเดือน</option>
                            <option value="yearly">รายปี</option>
                        </select>
                    </div>
                    <div class="flex justify-center">
                        <div class="h-auto w-full">
                            <canvas class="" ref="reportBookOne"></canvas>
                        </div>
                    </div>
                    <div class="report-box-2 intro-y mt-12 sm:mt-5">
                        <div class="box sm:flex">
                            <div
                                class="px-8 py-4 flex flex-col justify-center flex-1"
                            >
                                <div class="relative text-3xl font-medium mt-4">
                                    <box-icon
                                        name="book"
                                        size="sm"
                                        color="#f59e0b"
                                    ></box-icon>
                                    <span class="text-sm text-gray-400 pl-2"
                                        >จำนวน</span
                                    >
                                    <span class="text-md px-2">197</span>
                                    <span class="text-sm text-gray-400"
                                        >รายการยืม</span
                                    >
                                </div>

                                <div class="mt-4 text-slate-500">
                                    # ข้อมูล ณ วันที่ 10 มิถุนายน 2567
                                </div>
                            </div>
                            <div
                                class="px-8 py-4 flex flex-col justify-center flex-1 border-t sm:border-t-0 sm:border-l border-slate-200 dark:border-darkmode-300 border-dashed"
                            >
                                <div class="text-slate-500 text-md">
                                    แยกตามประเภทสมาชิก
                                </div>
                                <div class="mt-1.5 flex items-center">
                                    <div class="text-base">
                                        421
                                        <span class="text-xs text-gray-400"
                                            >รายการ :
                                        </span>
                                    </div>
                                    <div
                                        class="text-danger flex text-xs font-medium tooltip cursor-pointer ml-2"
                                        title="2% Lower than last month"
                                    >
                                        ปริญญาตรี
                                        <i
                                            data-lucide="chevron-down"
                                            class="w-4 h-4 ml-0.5"
                                        ></i>
                                    </div>
                                </div>
                                <div class="mt-1.5 flex items-center">
                                    <div class="text-base">
                                        2
                                        <span class="text-xs text-gray-400"
                                            >รายการ :</span
                                        >
                                    </div>
                                    <div
                                        class="text-danger flex text-xs font-medium tooltip cursor-pointer ml-2"
                                        title="2% Lower than last month"
                                    >
                                        ปริญญาเอก
                                        <i
                                            data-lucide="chevron-down"
                                            class="w-4 h-4 ml-0.5"
                                        ></i>
                                    </div>
                                </div>
                                <div class="mt-1.5 flex items-center">
                                    <div class="text-base">
                                        2
                                        <span class="text-xs text-gray-400"
                                            >รายการ :
                                        </span>
                                    </div>
                                    <div
                                        class="text-danger flex text-xs font-medium tooltip cursor-pointer ml-2"
                                        title="2% Lower than last month"
                                    >
                                        บุคลากรสายวิชาการ
                                        <i
                                            data-lucide="chevron-down"
                                            class="w-4 h-4 ml-0.5"
                                        ></i>
                                    </div>
                                </div>
                                <div class="mt-1.5 flex items-center">
                                    <div class="text-base">
                                        3
                                        <span class="text-xs text-gray-400"
                                            >รายการ :
                                        </span>
                                    </div>
                                    <div
                                        class="text-danger flex text-xs font-medium tooltip cursor-pointer ml-2"
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
                        <h2 class="text-lg font-medium truncate mr-5">
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
                                        class="nav-link w-full py-1.5 px-2 active"
                                        data-tw-toggle="pill"
                                        data-tw-target="#active-users"
                                        type="button"
                                        role="tab"
                                        aria-controls="active-users"
                                        aria-selected="true"
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
                                        data-tw-toggle="pill"
                                        data-tw-target="#inactive-users"
                                        type="button"
                                        role="tab"
                                        aria-selected="false"
                                    >
                                        กลุ่มผู้ใช้
                                    </button>
                                </li>
                            </ul>
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
                                                ref="reportUserOne"
                                            ></canvas>
                                        </div>
                                        <div
                                            class="flex flex-col justify-center items-center absolute w-full h-full top-0 left-0"
                                        >
                                            <div class="text-xl font-medium">
                                                63,044
                                            </div>
                                            <div class="text-slate-500 mt-0.5">
                                                คน
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-52 sm:w-auto mx-auto mt-5">
                                        <div class="flex items-center">
                                            <div
                                                class="w-2 h-2 bg-sky-500 rounded-full mr-3"
                                            ></div>
                                            <span class="truncate"
                                                >นักเรียน</span
                                            >
                                            <span class="font-medium ml-auto"
                                                >22%</span
                                            >
                                        </div>
                                        <div class="flex items-center mt-4">
                                            <div
                                                class="w-2 h-2 bg-teal-600 rounded-full mr-3"
                                            ></div>
                                            <span class="truncate"
                                                >นักศึกษา</span
                                            >
                                            <span class="font-medium ml-auto"
                                                >63%</span
                                            >
                                        </div>
                                        <div class="flex items-center mt-4">
                                            <div
                                                class="w-2 h-2 bg-orange-400 rounded-full mr-3"
                                            ></div>
                                            <span class="truncate"
                                                >อาจารย์</span
                                            >
                                            <span class="font-medium ml-auto"
                                                >10%</span
                                            >
                                        </div>
                                        <div class="flex items-center mt-4">
                                            <div
                                                class="w-2 h-2 bg-yellow-400 rounded-full mr-3"
                                            ></div>
                                            <span class="truncate"
                                                >บุคลากร</span
                                            >
                                            <span class="font-medium ml-auto"
                                                >5%</span
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
                    <div class="intro-y block sm:flex items-center h-10">
                        <h2 class="text-lg font-medium truncate mr-5">
                            สืบค้นมากสุด (OPAC)
                        </h2>
                    </div>
                    <div
                        class="intro-y overflow-auto lg:overflow-visible mt-8 sm:mt-0"
                    >
                        <table class="table table-report sm:mt-2">
                            <thead
                                class="bg-white opacity-80 rounded-full shadow-md"
                            >
                                <tr>
                                    <th class="whitespace-nowrap">IMAGES</th>
                                    <th class="whitespace-nowrap">TITLE</th>
                                    <th class="text-center whitespace-nowrap">
                                        LANGUAGE
                                    </th>
                                    <th class="text-center whitespace-nowrap">
                                        STATUS
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr
                                    class="px-4 py-4 zoom-in"
                                    v-for="(opac, index) in opacList.slice(
                                        0,
                                        5
                                    )"
                                    :key="index"
                                    @click="link(opac.BIBID)"
                                >
                                    <td class="w-40">
                                        <div class="flex">
                                            <div
                                                class="w-10 h-10 image-fit zoom-in"
                                            >
                                                <img
                                                    alt="Midone - HTML Admin Template"
                                                    class="tooltip"
                                                    title="Uploaded at 7 June 2020"
                                                    :src="getImage(opac.BIBID)"
                                                />
                                            </div>
                                        </div>
                                    </td>
                                    <td class="">
                                        <div
                                            class="font-medium whitespace-nowrap"
                                        >
                                            {{ opac.TITLE.substring(0, 80) }}
                                        </div>
                                        <div
                                            class="text-slate-500 text-xs whitespace-nowrap mt-0.5"
                                        >
                                            {{ opac.BIBID }}
                                        </div>
                                    </td>
                                    <td class="text-center">{{ opac.LANG }}</td>
                                    <td class="w-40">
                                        <div
                                            class="flex items-center justify-center text-success"
                                        >
                                            <i
                                                data-lucide="check-square"
                                                class="w-4 h-4 mr-2"
                                            ></i>
                                            Active
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- END: Weekly Top Products -->

                <!-- BEGIN: Weekly Best Sellers -->
                <div class="col-span-12 xl:col-span-4 mt-6">
                    <div class="intro-y flex items-center h-10">
                        <h2 class="text-lg font-medium truncate mr-5">
                            ฐานข้อมูลออนไลน์
                        </h2>
                        <select
                            class="sm:ml-auto mt-3 sm:mt-0 sm:w-auto form-select box"
                        >
                            <!-- <option value="daily">รายวัน</option> -->
                            <option value="monthly">รายเดือน</option>
                            <!-- <option value="yearly">รายปี</option> -->
                        </select>
                    </div>
                    <div class="mt-5">
                        <div class="intro-y">
                            <div
                                class="box px-4 py-4 mb-3 flex items-center zoom-in"
                            >
                                <div
                                    class="w-10 h-10 flex-none image-fit rounded-md overflow-hidden"
                                >
                                    <img
                                        alt="Midone - HTML Admin Template"
                                        :src="pictu1"
                                    />
                                </div>
                                <div class="ml-4 mr-auto">
                                    <div class="font-medium">
                                        EBSCO Discovery Service
                                    </div>
                                    <div class="text-slate-500 text-xs mt-0.5">
                                        (EDS) Plus Full Text
                                    </div>
                                </div>
                                <div
                                    class="py-1 px-2 rounded-full text-xs bg-success text-white cursor-pointer font-medium"
                                >
                                    48
                                </div>
                            </div>
                        </div>
                        <div class="intro-y">
                            <div
                                class="box px-4 py-4 mb-3 flex items-center zoom-in"
                            >
                                <div
                                    class="w-10 h-10 flex-none image-fit rounded-md overflow-hidden"
                                >
                                    <img
                                        alt="Midone - HTML Admin Template"
                                        :src="pictu2"
                                    />
                                </div>
                                <div class="ml-4 mr-auto">
                                    <div class="font-medium">
                                        IEEE Electronic Library
                                    </div>
                                    <div class="text-slate-500 text-xs mt-0.5">
                                        (IEL)
                                    </div>
                                </div>
                                <div
                                    class="py-1 px-2 rounded-full text-xs bg-success text-white cursor-pointer font-medium"
                                >
                                    36
                                </div>
                            </div>
                        </div>
                        <div class="intro-y">
                            <div
                                class="box px-4 py-4 mb-3 flex items-center zoom-in"
                            >
                                <div
                                    class="w-10 h-10 flex-none image-fit rounded-md overflow-hidden"
                                >
                                    <img
                                        alt="Midone - HTML Admin Template"
                                        :src="pictu3"
                                    />
                                </div>
                                <div class="ml-4 mr-auto">
                                    <div class="font-medium">SpringerLink</div>
                                    <div class="text-slate-500 text-xs mt-0.5">
                                        Journal
                                    </div>
                                </div>
                                <div
                                    class="py-1 px-2 rounded-full text-xs bg-success text-white cursor-pointer font-medium"
                                >
                                    12
                                </div>
                            </div>
                        </div>
                        <div class="intro-y">
                            <div
                                class="box px-4 py-4 mb-3 flex items-center zoom-in"
                            >
                                <div
                                    class="w-10 h-10 flex-none image-fit rounded-md overflow-hidden"
                                >
                                    <img
                                        alt="Midone - HTML Admin Template"
                                        :src="pictu4"
                                    />
                                </div>
                                <div class="ml-4 mr-auto">
                                    <div class="font-medium">ScienceDirect</div>
                                    <div
                                        class="text-slate-500 text-xs mt-0.5"
                                    ></div>
                                </div>
                                <div
                                    class="py-1 px-2 rounded-full text-xs bg-success text-white cursor-pointer font-medium"
                                >
                                    5
                                </div>
                            </div>
                        </div>
                        <div
                            class="intro-y w-full block text-center rounded-md py-4 border border-dotted border-slate-400 hover:border-emerald-600 dark:border-darkmode-300 text-slate-500 cursor-pointer"
                            @click="showDBOnline"
                        >
                            <p class="hover:scale-105 hover:text-emerald-700">
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
                            <h2 class="text-lg font-medium truncate mr-5">
                                รับฟังเสียงผู้ใช้ (VOC)
                            </h2>
                            <a href="" class="ml-auto text-primary truncate"
                                >Show More</a
                            >
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
                                        <box-icon
                                            name="user-voice"
                                            color="#075985"
                                            size="md"
                                        ></box-icon>
                                    </div>
                                </div>
                                <div class="box px-5 py-3 ml-4 flex-1 zoom-in">
                                    <div class="flex items-center">
                                        <div class="font-medium">
                                            กระดาษทิชชู่หมดค่ะ
                                        </div>
                                        <div
                                            class="text-xs text-slate-500 ml-auto"
                                        >
                                            07:00 PM
                                        </div>
                                    </div>
                                    <div class="text-slate-500 mt-1">
                                        orathai.k@msu.ac.th
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
                                            name="user-voice"
                                            color="#075985"
                                            size="md"
                                        ></box-icon>
                                    </div>
                                </div>
                                <div class="box px-5 py-3 ml-4 flex-1 zoom-in">
                                    <div class="flex items-center">
                                        <div class="font-medium">
                                            ห้องน้ำชั้น 4 น้ำไม่ไหลครับ
                                        </div>
                                        <div
                                            class="text-xs text-slate-500 ml-auto"
                                        >
                                            12:00 PM
                                        </div>
                                    </div>
                                    <div class="text-slate-500">
                                        <div class="mt-1">
                                            wongnarin.s@msu.ac.th
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
                                            color="#075985"
                                            size="md"
                                        ></box-icon>
                                    </div>
                                </div>
                                <div class="box px-5 py-3 ml-4 flex-1 zoom-in">
                                    <div class="flex justify-center">
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
                                            color="#075985"
                                            size="md"
                                        ></box-icon>
                                    </div>
                                </div>
                                <div class="box px-5 py-3 ml-4 flex-1 zoom-in">
                                    <div class="flex justify-center">
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
                            <h2 class="text-lg font-medium truncate mr-auto">
                                จองห้องออนไลน์ (Study Room)
                            </h2>
                        </div>
                        <div class="mt-5 intro-x">
                            <div class="box zoom-in">
                                <div class="tiny-slider" id="important-notes">
                                    <div class="p-2">
                                        <div class="flex justify-center">
                                            <div class="h-[180px]">
                                                <canvas
                                                    class=""
                                                    ref="reportStdOne"
                                                ></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-2">
                                    <div class="flex justify-center">
                                        <div class="h-[208px] w-full">
                                            <canvas
                                                class=""
                                                ref="reportStdTwo"
                                            ></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END: Important Notes -->
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import axios from "axios";
import "boxicons";
import Chart from "chart.js/auto";

export default {
    mounted() {
        this.reportOpac();
        this.reportDonutChart();
        this.reportBarChart();
        this.reportVocBar();
        this.reportVocDonut();
        this.reportStdDonut();
        this.reportStdBar();
        this.reportBookBar();
    },
    data() {
        return {
            pic1: "/img/01.jpg",
            pic2: "/img/02.jpg",
            pic3: "/img/03.jpg",
            pic4: "/img/04.jpg",
            pictu1: "/img/001.jpg",
            pictu2: "/img/002.jpg",
            pictu3: "/img/003.jpg",
            pictu4: "/img/004.jpg",
            isDarkMode: false,
            showWelcome: true,
            showDBOnline: false,
            opacList: "",
        };
    },
    methods: {
        async logout() {
            await this.$store.dispatch("logout");
            this.$router.push({ name: "welcome" });
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
        reportOpac() {
            // const config = {                                    //ใส่ทุกครั้งที่รับ File เข้ามา
            //     headers: {
            //         'token': 'RqG9I+wk/cB9TiCgCbSOGFq7exTxD6fLMoVeCNtLNrj8XTJdVnNMov9mAgLOEqTBKikM6id3P7ELFjt3gqyCjA=='
            //     }
            // }
            // axios
            //     .get("https://libapp.msu.ac.th/v1/api/GetTopView", config)
            //     .then((response) => {
            //         console.log(response)
            //     })
            //     .catch((err) => {
            //         console.log(err);
            //     });
            axios
                .get("/api/GetTopView")
                .then((response) => {
                    this.opacList = response.data;
                })
                .catch((err) => {});
        },
        link(id) {
            window.open(
                "https://opac.msu.ac.th/results?Ntk=KEYWORD&Ntt=" + id,
                "_blank"
            );
        },
        reportDonutChart() {
            const ctx = this.$refs.reportUserOne;
            let myUserOne = new Chart(ctx, {
                type: "doughnut",
                data: {
                    labels: "",
                    datasets: [
                        {
                            label: "Data",
                            data: [22, 63, 10, 5],
                            backgroundColor: [
                                "#0ea5e9",
                                "#0d9488",
                                "#fb923c",
                                "#facc15",
                            ],
                            hoverBackgroundColor: ["#9BD0F5", "#9BD0F5"],
                            borderWidth: 5,
                            borderColor: "#fff",
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
                    cutout: "80%",
                },
            });
        },
        getImage(id) {
            // axios
            //     .get("https://libapp.msu.ac.th/v1/api/GetBookCover/" + id)
            //     .then((response) => {
            //         console.log(response)
            //         return response;
            //     });
        },
        reportBarChart() {
            // Fake visitor data
            let reportBarChartData = new Array(40).fill(0).map((data, key) => {
                if (key % 3 == 0 || key % 5 == 0) {
                    return Math.ceil(Math.random() * (0 - 20) + 20);
                } else {
                    return Math.ceil(Math.random() * (0 - 7) + 7);
                }
            });

            const ctx = this.$refs.reportBar;
            let myBarChart = new Chart(ctx, {
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

                myBarChart.update();
            }, 1000);
        },
        reportVocBar() {
            Chart.defaults.font.family = "Anuphan";
            const ctx = this.$refs.reportVocOne;
            let myVocOne = new Chart(ctx, {
                type: "bar",
                data: {
                    labels: ["ข้อร้องเรียน", "ข้อเสนอแนะ", "คำชืนชม"],
                    datasets: [
                        {
                            label: "ประเภทคำร้อง",
                            data: [18, 14, 27],
                            backgroundColor: [
                                "rgba(255, 205, 86, 0.6)",
                                "rgba(75, 192, 192, 0.6)",
                                "rgba(54, 162, 235, 0.6)",
                            ],
                            borderColor: [
                                "rgb(255, 205, 86)",
                                "rgb(75, 192, 192)",
                                "rgb(54, 162, 235)",
                            ],
                            borderWidth: 3,
                            borderColor: "#fff",
                        },
                    ],
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true,
                        },
                    },
                },
            });
        },
        reportVocDonut() {
            Chart.defaults.font.family = "Anuphan";

            const ctx = this.$refs.reportVocTwo;
            let myVocTwo = new Chart(ctx, {
                type: "bar",
                data: {
                    labels: ["นักศึกษา", "อาจารย์", "บุคลากร"],
                    datasets: [
                        {
                            label: "",
                            data: [16, 6, 2],
                            backgroundColor: [
                                "rgba(255, 99, 132, 0.6)",
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
                        },
                    ],
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            position: "top",
                        },
                        title: {
                            display: true,
                            text: "ประเภทผู้ใช้บริการ",
                            font: { weight: "normal" },
                        },
                    },
                },
            });
        },
        reportStdDonut() {
            Chart.defaults.font.family = "Anuphan";

            const ctx = this.$refs.reportStdOne;
            let myStdOne = new Chart(ctx, {
                type: "pie",
                data: {
                    labels: ["AREC", "DLP"],
                    datasets: [
                        {
                            label: "",
                            data: [16, 32],
                            backgroundColor: [
                                "rgba(255, 99, 132, 0.6)",
                                "rgba(255, 159, 64, 0.6)",
                            ],
                            borderColor: [
                                "rgb(255, 99, 132)",
                                "rgb(255, 159, 64)",
                            ],
                            borderWidth: 3,
                            borderColor: "#fff",
                        },
                    ],
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            position: "top",
                        },
                        title: {
                            display: true,
                            text: "สถานที่",
                            font: { weight: "normal" },
                        },
                    },
                },
            });
        },
        reportStdBar() {
            Chart.defaults.font.family = "Anuphan";
            const ctx = this.$refs.reportStdTwo;
            let myStdTwo = new Chart(ctx, {
                type: "bar",
                data: {
                    labels: [
                        "สาธิต",
                        "วิทยาการสารสนเทศ",
                        "ศึกษาศาสตร์",
                        "วิศวกรรมศาสตร์",
                        "การเมืองการปกครอง",
                    ],
                    datasets: [
                        {
                            label: "คณะ/หน่วยงานเข้าใช้บริการสูงสุด 5 อันดับแรก",
                            data: [60, 30, 27, 12, 5],
                            backgroundColor: [
                                "rgba(255, 99, 132, 0.6)",
                                "rgba(255, 159, 64, 0.6)",
                                "rgba(255, 205, 86, 0.6)",
                                "rgba(75, 192, 192, 0.6)",
                                "rgba(54, 162, 235, 0.6)",
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
                        },
                    ],
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true,
                        },
                    },
                },
            });
        },
        reportBookBar() {
            Chart.defaults.font.family = "Anuphan";
            const ctx = this.$refs.reportBookOne;
            let myBookTwo = new Chart(ctx, {
                type: "bar",
                data: {
                    labels: ["01", "02", "03", "04", "05", "06", "07"],
                    datasets: [
                        {
                            label: "สถิติการยืม รายเดือน / 2567",
                            data: [11401, 10765, 10400, 2623, 700, 1916, 1980],
                            backgroundColor: [
                                "rgba(255, 99, 132, 0.2)",
                                "rgba(255, 159, 64, 0.6)",
                                "rgba(255, 205, 86, 0.6)",
                                "rgba(75, 192, 192, 0.6)",
                                "rgba(54, 162, 235, 0.6)",
                                "rgba(153, 102, 255, 0.6)",
                                "rgba(201, 203, 207, 0.6)",
                            ],
                            borderColor: [
                                "rgb(255, 99, 132)",
                                "rgb(255, 159, 64)",
                                "rgb(255, 205, 86)",
                                "rgb(75, 192, 192)",
                                "rgb(54, 162, 235)",
                                "rgb(153, 102, 255)",
                                "rgb(201, 203, 207)",
                            ],
                            borderWidth: 2,
                            borderColor: "#fff",
                        },
                    ],
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true,
                        },
                    },
                },
            });
        },
    },
};
</script>
