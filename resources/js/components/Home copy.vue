<template>
    <!-- BEGIN: Mobile Menu -->
    <div class="mobile-menu md:hidden">
        <div class="mobile-menu-bar">
            <a href="" class="flex mr-auto">
                <img
                    alt="Midone - HTML Admin Template"
                    class="w-6"
                    src="dist/images/logo.svg"
                />
            </a>
            <a href="javascript:;" class="mobile-menu-toggler">
                <i
                    data-lucide="bar-chart-2"
                    class="w-8 h-8 text-white transform -rotate-90"
                ></i>
            </a>
        </div>
        <div class="scrollable">
            <a href="javascript:;" class="mobile-menu-toggler">
                <i
                    data-lucide="x-circle"
                    class="w-8 h-8 text-white transform -rotate-90"
                ></i>
            </a>
            <ul class="scrollable__content py-2">
                <li>
                    <a href="javascript:;.html" class="menu menu--active">
                        <div class="menu__icon"><i data-lucide="home"></i></div>
                        <div class="menu__title">
                            Dashboard
                            <i
                                data-lucide="chevron-down"
                                class="menu__sub-icon transform rotate-180"
                            ></i>
                        </div>
                    </a>
                    <ul class="menu__sub-open">
                        <li>
                            <a
                                href="side-menu-light-dashboard-overview-1.html"
                                class="menu"
                            >
                                <div class="menu__icon">
                                    <i data-lucide="activity"></i>
                                </div>
                                <div class="menu__title">Overview 1</div>
                            </a>
                        </li>
                        <li>
                            <a
                                href="side-menu-light-dashboard-overview-2.html"
                                class="menu menu--active"
                            >
                                <div class="menu__icon">
                                    <i data-lucide="activity"></i>
                                </div>
                                <div class="menu__title">Overview 2</div>
                            </a>
                        </li>
                        <li>
                            <a
                                href="side-menu-light-dashboard-overview-3.html"
                                class="menu"
                            >
                                <div class="menu__icon">
                                    <i data-lucide="activity"></i>
                                </div>
                                <div class="menu__title">Overview 3</div>
                            </a>
                        </li>
                        <li>
                            <a href="index.html" class="menu">
                                <div class="menu__icon">
                                    <i data-lucide="activity"></i>
                                </div>
                                <div class="menu__title">Overview 4</div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="menu">
                        <div class="menu__icon"><i data-lucide="box"></i></div>
                        <div class="menu__title">
                            Menu Layout
                            <i
                                data-lucide="chevron-down"
                                class="menu__sub-icon"
                            ></i>
                        </div>
                    </a>
                    <ul class="">
                        <li>
                            <a
                                href="side-menu-light-dashboard-overview-1.html"
                                class="menu"
                            >
                                <div class="menu__icon">
                                    <i data-lucide="activity"></i>
                                </div>
                                <div class="menu__title">Side Menu</div>
                            </a>
                        </li>
                        <li>
                            <a
                                href="simple-menu-light-dashboard-overview-1.html"
                                class="menu"
                            >
                                <div class="menu__icon">
                                    <i data-lucide="activity"></i>
                                </div>
                                <div class="menu__title">Simple Menu</div>
                            </a>
                        </li>
                        <li>
                            <a
                                href="top-menu-light-dashboard-overview-1.html"
                                class="menu"
                            >
                                <div class="menu__icon">
                                    <i data-lucide="activity"></i>
                                </div>
                                <div class="menu__title">Top Menu</div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="menu">
                        <div class="menu__icon">
                            <i data-lucide="shopping-bag"></i>
                        </div>
                        <div class="menu__title">
                            E-Commerce
                            <i
                                data-lucide="chevron-down"
                                class="menu__sub-icon"
                            ></i>
                        </div>
                    </a>
                    <ul class="">
                        <li>
                            <a
                                href="side-menu-light-categories.html"
                                class="menu"
                            >
                                <div class="menu__icon">
                                    <i data-lucide="activity"></i>
                                </div>
                                <div class="menu__title">Categories</div>
                            </a>
                        </li>
                        <li>
                            <a
                                href="side-menu-light-add-product.html"
                                class="menu"
                            >
                                <div class="menu__icon">
                                    <i data-lucide="activity"></i>
                                </div>
                                <div class="menu__title">Add Product</div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;" class="menu">
                                <div class="menu__icon">
                                    <i data-lucide="activity"></i>
                                </div>
                                <div class="menu__title">
                                    Products
                                    <i
                                        data-lucide="chevron-down"
                                        class="menu__sub-icon"
                                    ></i>
                                </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a
                                        href="side-menu-light-product-list.html"
                                        class="menu"
                                    >
                                        <div class="menu__icon">
                                            <i data-lucide="zap"></i>
                                        </div>
                                        <div class="menu__title">
                                            Product List
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a
                                        href="side-menu-light-product-grid.html"
                                        class="menu"
                                    >
                                        <div class="menu__icon">
                                            <i data-lucide="zap"></i>
                                        </div>
                                        <div class="menu__title">
                                            Product Grid
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;" class="menu">
                                <div class="menu__icon">
                                    <i data-lucide="activity"></i>
                                </div>
                                <div class="menu__title">
                                    Transactions
                                    <i
                                        data-lucide="chevron-down"
                                        class="menu__sub-icon"
                                    ></i>
                                </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a
                                        href="side-menu-light-transaction-list.html"
                                        class="menu"
                                    >
                                        <div class="menu__icon">
                                            <i data-lucide="zap"></i>
                                        </div>
                                        <div class="menu__title">
                                            Transaction List
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a
                                        href="side-menu-light-transaction-detail.html"
                                        class="menu"
                                    >
                                        <div class="menu__icon">
                                            <i data-lucide="zap"></i>
                                        </div>
                                        <div class="menu__title">
                                            Transaction Detail
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;" class="menu">
                                <div class="menu__icon">
                                    <i data-lucide="activity"></i>
                                </div>
                                <div class="menu__title">
                                    Sellers
                                    <i
                                        data-lucide="chevron-down"
                                        class="menu__sub-icon"
                                    ></i>
                                </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a
                                        href="side-menu-light-seller-list.html"
                                        class="menu"
                                    >
                                        <div class="menu__icon">
                                            <i data-lucide="zap"></i>
                                        </div>
                                        <div class="menu__title">
                                            Seller List
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a
                                        href="side-menu-light-seller-detail.html"
                                        class="menu"
                                    >
                                        <div class="menu__icon">
                                            <i data-lucide="zap"></i>
                                        </div>
                                        <div class="menu__title">
                                            Seller Detail
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="side-menu-light-reviews.html" class="menu">
                                <div class="menu__icon">
                                    <i data-lucide="activity"></i>
                                </div>
                                <div class="menu__title">Reviews</div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="side-menu-light-inbox.html" class="menu">
                        <div class="menu__icon">
                            <i data-lucide="inbox"></i>
                        </div>
                        <div class="menu__title">Inbox</div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-file-manager.html" class="menu">
                        <div class="menu__icon">
                            <i data-lucide="hard-drive"></i>
                        </div>
                        <div class="menu__title">File Manager</div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-point-of-sale.html" class="menu">
                        <div class="menu__icon">
                            <i data-lucide="credit-card"></i>
                        </div>
                        <div class="menu__title">Point of Sale</div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-chat.html" class="menu">
                        <div class="menu__icon">
                            <i data-lucide="message-square"></i>
                        </div>
                        <div class="menu__title">Chat</div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-post.html" class="menu">
                        <div class="menu__icon">
                            <i data-lucide="file-text"></i>
                        </div>
                        <div class="menu__title">Post</div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-calendar.html" class="menu">
                        <div class="menu__icon">
                            <i data-lucide="calendar"></i>
                        </div>
                        <div class="menu__title">Calendar</div>
                    </a>
                </li>
                <li class="menu__devider my-6"></li>
                <li>
                    <a href="javascript:;" class="menu">
                        <div class="menu__icon"><i data-lucide="edit"></i></div>
                        <div class="menu__title">
                            Crud
                            <i
                                data-lucide="chevron-down"
                                class="menu__sub-icon"
                            ></i>
                        </div>
                    </a>
                    <ul class="">
                        <li>
                            <a
                                href="side-menu-light-crud-data-list.html"
                                class="menu"
                            >
                                <div class="menu__icon">
                                    <i data-lucide="activity"></i>
                                </div>
                                <div class="menu__title">Data List</div>
                            </a>
                        </li>
                        <li>
                            <a
                                href="side-menu-light-crud-form.html"
                                class="menu"
                            >
                                <div class="menu__icon">
                                    <i data-lucide="activity"></i>
                                </div>
                                <div class="menu__title">Form</div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="menu">
                        <div class="menu__icon">
                            <i data-lucide="users"></i>
                        </div>
                        <div class="menu__title">
                            Users
                            <i
                                data-lucide="chevron-down"
                                class="menu__sub-icon"
                            ></i>
                        </div>
                    </a>
                    <ul class="">
                        <li>
                            <a
                                href="side-menu-light-users-layout-1.html"
                                class="menu"
                            >
                                <div class="menu__icon">
                                    <i data-lucide="activity"></i>
                                </div>
                                <div class="menu__title">Layout 1</div>
                            </a>
                        </li>
                        <li>
                            <a
                                href="side-menu-light-users-layout-2.html"
                                class="menu"
                            >
                                <div class="menu__icon">
                                    <i data-lucide="activity"></i>
                                </div>
                                <div class="menu__title">Layout 2</div>
                            </a>
                        </li>
                        <li>
                            <a
                                href="side-menu-light-users-layout-3.html"
                                class="menu"
                            >
                                <div class="menu__icon">
                                    <i data-lucide="activity"></i>
                                </div>
                                <div class="menu__title">Layout 3</div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="menu">
                        <div class="menu__icon">
                            <i data-lucide="trello"></i>
                        </div>
                        <div class="menu__title">
                            Profile
                            <i
                                data-lucide="chevron-down"
                                class="menu__sub-icon"
                            ></i>
                        </div>
                    </a>
                    <ul class="">
                        <li>
                            <a
                                href="side-menu-light-profile-overview-1.html"
                                class="menu"
                            >
                                <div class="menu__icon">
                                    <i data-lucide="activity"></i>
                                </div>
                                <div class="menu__title">Overview 1</div>
                            </a>
                        </li>
                        <li>
                            <a
                                href="side-menu-light-profile-overview-2.html"
                                class="menu"
                            >
                                <div class="menu__icon">
                                    <i data-lucide="activity"></i>
                                </div>
                                <div class="menu__title">Overview 2</div>
                            </a>
                        </li>
                        <li>
                            <a
                                href="side-menu-light-profile-overview-3.html"
                                class="menu"
                            >
                                <div class="menu__icon">
                                    <i data-lucide="activity"></i>
                                </div>
                                <div class="menu__title">Overview 3</div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="menu">
                        <div class="menu__icon">
                            <i data-lucide="layout"></i>
                        </div>
                        <div class="menu__title">
                            Pages
                            <i
                                data-lucide="chevron-down"
                                class="menu__sub-icon"
                            ></i>
                        </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="javascript:;" class="menu">
                                <div class="menu__icon">
                                    <i data-lucide="activity"></i>
                                </div>
                                <div class="menu__title">
                                    Wizards
                                    <i
                                        data-lucide="chevron-down"
                                        class="menu__sub-icon"
                                    ></i>
                                </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a
                                        href="side-menu-light-wizard-layout-1.html"
                                        class="menu"
                                    >
                                        <div class="menu__icon">
                                            <i data-lucide="zap"></i>
                                        </div>
                                        <div class="menu__title">Layout 1</div>
                                    </a>
                                </li>
                                <li>
                                    <a
                                        href="side-menu-light-wizard-layout-2.html"
                                        class="menu"
                                    >
                                        <div class="menu__icon">
                                            <i data-lucide="zap"></i>
                                        </div>
                                        <div class="menu__title">Layout 2</div>
                                    </a>
                                </li>
                                <li>
                                    <a
                                        href="side-menu-light-wizard-layout-3.html"
                                        class="menu"
                                    >
                                        <div class="menu__icon">
                                            <i data-lucide="zap"></i>
                                        </div>
                                        <div class="menu__title">Layout 3</div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;" class="menu">
                                <div class="menu__icon">
                                    <i data-lucide="activity"></i>
                                </div>
                                <div class="menu__title">
                                    Blog
                                    <i
                                        data-lucide="chevron-down"
                                        class="menu__sub-icon"
                                    ></i>
                                </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a
                                        href="side-menu-light-blog-layout-1.html"
                                        class="menu"
                                    >
                                        <div class="menu__icon">
                                            <i data-lucide="zap"></i>
                                        </div>
                                        <div class="menu__title">Layout 1</div>
                                    </a>
                                </li>
                                <li>
                                    <a
                                        href="side-menu-light-blog-layout-2.html"
                                        class="menu"
                                    >
                                        <div class="menu__icon">
                                            <i data-lucide="zap"></i>
                                        </div>
                                        <div class="menu__title">Layout 2</div>
                                    </a>
                                </li>
                                <li>
                                    <a
                                        href="side-menu-light-blog-layout-3.html"
                                        class="menu"
                                    >
                                        <div class="menu__icon">
                                            <i data-lucide="zap"></i>
                                        </div>
                                        <div class="menu__title">Layout 3</div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;" class="menu">
                                <div class="menu__icon">
                                    <i data-lucide="activity"></i>
                                </div>
                                <div class="menu__title">
                                    Pricing
                                    <i
                                        data-lucide="chevron-down"
                                        class="menu__sub-icon"
                                    ></i>
                                </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a
                                        href="side-menu-light-pricing-layout-1.html"
                                        class="menu"
                                    >
                                        <div class="menu__icon">
                                            <i data-lucide="zap"></i>
                                        </div>
                                        <div class="menu__title">Layout 1</div>
                                    </a>
                                </li>
                                <li>
                                    <a
                                        href="side-menu-light-pricing-layout-2.html"
                                        class="menu"
                                    >
                                        <div class="menu__icon">
                                            <i data-lucide="zap"></i>
                                        </div>
                                        <div class="menu__title">Layout 2</div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;" class="menu">
                                <div class="menu__icon">
                                    <i data-lucide="activity"></i>
                                </div>
                                <div class="menu__title">
                                    Invoice
                                    <i
                                        data-lucide="chevron-down"
                                        class="menu__sub-icon"
                                    ></i>
                                </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a
                                        href="side-menu-light-invoice-layout-1.html"
                                        class="menu"
                                    >
                                        <div class="menu__icon">
                                            <i data-lucide="zap"></i>
                                        </div>
                                        <div class="menu__title">Layout 1</div>
                                    </a>
                                </li>
                                <li>
                                    <a
                                        href="side-menu-light-invoice-layout-2.html"
                                        class="menu"
                                    >
                                        <div class="menu__icon">
                                            <i data-lucide="zap"></i>
                                        </div>
                                        <div class="menu__title">Layout 2</div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;" class="menu">
                                <div class="menu__icon">
                                    <i data-lucide="activity"></i>
                                </div>
                                <div class="menu__title">
                                    FAQ
                                    <i
                                        data-lucide="chevron-down"
                                        class="menu__sub-icon"
                                    ></i>
                                </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a
                                        href="side-menu-light-faq-layout-1.html"
                                        class="menu"
                                    >
                                        <div class="menu__icon">
                                            <i data-lucide="zap"></i>
                                        </div>
                                        <div class="menu__title">Layout 1</div>
                                    </a>
                                </li>
                                <li>
                                    <a
                                        href="side-menu-light-faq-layout-2.html"
                                        class="menu"
                                    >
                                        <div class="menu__icon">
                                            <i data-lucide="zap"></i>
                                        </div>
                                        <div class="menu__title">Layout 2</div>
                                    </a>
                                </li>
                                <li>
                                    <a
                                        href="side-menu-light-faq-layout-3.html"
                                        class="menu"
                                    >
                                        <div class="menu__icon">
                                            <i data-lucide="zap"></i>
                                        </div>
                                        <div class="menu__title">Layout 3</div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="login-light-login.html" class="menu">
                                <div class="menu__icon">
                                    <i data-lucide="activity"></i>
                                </div>
                                <div class="menu__title">Login</div>
                            </a>
                        </li>
                        <li>
                            <a href="login-light-register.html" class="menu">
                                <div class="menu__icon">
                                    <i data-lucide="activity"></i>
                                </div>
                                <div class="menu__title">Register</div>
                            </a>
                        </li>
                        <li>
                            <a href="main-light-error-page.html" class="menu">
                                <div class="menu__icon">
                                    <i data-lucide="activity"></i>
                                </div>
                                <div class="menu__title">Error Page</div>
                            </a>
                        </li>
                        <li>
                            <a
                                href="side-menu-light-update-profile.html"
                                class="menu"
                            >
                                <div class="menu__icon">
                                    <i data-lucide="activity"></i>
                                </div>
                                <div class="menu__title">Update profile</div>
                            </a>
                        </li>
                        <li>
                            <a
                                href="side-menu-light-change-password.html"
                                class="menu"
                            >
                                <div class="menu__icon">
                                    <i data-lucide="activity"></i>
                                </div>
                                <div class="menu__title">Change Password</div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="menu__devider my-6"></li>
                <li>
                    <a href="javascript:;" class="menu">
                        <div class="menu__icon">
                            <i data-lucide="inbox"></i>
                        </div>
                        <div class="menu__title">
                            Components
                            <i
                                data-lucide="chevron-down"
                                class="menu__sub-icon"
                            ></i>
                        </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="javascript:;" class="menu">
                                <div class="menu__icon">
                                    <i data-lucide="activity"></i>
                                </div>
                                <div class="menu__title">
                                    Table
                                    <i
                                        data-lucide="chevron-down"
                                        class="menu__sub-icon"
                                    ></i>
                                </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a
                                        href="side-menu-light-regular-table.html"
                                        class="menu"
                                    >
                                        <div class="menu__icon">
                                            <i data-lucide="zap"></i>
                                        </div>
                                        <div class="menu__title">
                                            Regular Table
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a
                                        href="side-menu-light-tabulator.html"
                                        class="menu"
                                    >
                                        <div class="menu__icon">
                                            <i data-lucide="zap"></i>
                                        </div>
                                        <div class="menu__title">Tabulator</div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;" class="menu">
                                <div class="menu__icon">
                                    <i data-lucide="activity"></i>
                                </div>
                                <div class="menu__title">
                                    Overlay
                                    <i
                                        data-lucide="chevron-down"
                                        class="menu__sub-icon"
                                    ></i>
                                </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a
                                        href="side-menu-light-modal.html"
                                        class="menu"
                                    >
                                        <div class="menu__icon">
                                            <i data-lucide="zap"></i>
                                        </div>
                                        <div class="menu__title">Modal</div>
                                    </a>
                                </li>
                                <li>
                                    <a
                                        href="side-menu-light-slide-over.html"
                                        class="menu"
                                    >
                                        <div class="menu__icon">
                                            <i data-lucide="zap"></i>
                                        </div>
                                        <div class="menu__title">
                                            Slide Over
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a
                                        href="side-menu-light-notification.html"
                                        class="menu"
                                    >
                                        <div class="menu__icon">
                                            <i data-lucide="zap"></i>
                                        </div>
                                        <div class="menu__title">
                                            Notification
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="side-menu-light-Tab.html" class="menu">
                                <div class="menu__icon">
                                    <i data-lucide="activity"></i>
                                </div>
                                <div class="menu__title">Tab</div>
                            </a>
                        </li>
                        <li>
                            <a
                                href="side-menu-light-accordion.html"
                                class="menu"
                            >
                                <div class="menu__icon">
                                    <i data-lucide="activity"></i>
                                </div>
                                <div class="menu__title">Accordion</div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-button.html" class="menu">
                                <div class="menu__icon">
                                    <i data-lucide="activity"></i>
                                </div>
                                <div class="menu__title">Button</div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-alert.html" class="menu">
                                <div class="menu__icon">
                                    <i data-lucide="activity"></i>
                                </div>
                                <div class="menu__title">Alert</div>
                            </a>
                        </li>
                        <li>
                            <a
                                href="side-menu-light-progress-bar.html"
                                class="menu"
                            >
                                <div class="menu__icon">
                                    <i data-lucide="activity"></i>
                                </div>
                                <div class="menu__title">Progress Bar</div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-tooltip.html" class="menu">
                                <div class="menu__icon">
                                    <i data-lucide="activity"></i>
                                </div>
                                <div class="menu__title">Tooltip</div>
                            </a>
                        </li>
                        <li>
                            <a
                                href="side-menu-light-dropdown.html"
                                class="menu"
                            >
                                <div class="menu__icon">
                                    <i data-lucide="activity"></i>
                                </div>
                                <div class="menu__title">Dropdown</div>
                            </a>
                        </li>
                        <li>
                            <a
                                href="side-menu-light-typography.html"
                                class="menu"
                            >
                                <div class="menu__icon">
                                    <i data-lucide="activity"></i>
                                </div>
                                <div class="menu__title">Typography</div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-icon.html" class="menu">
                                <div class="menu__icon">
                                    <i data-lucide="activity"></i>
                                </div>
                                <div class="menu__title">Icon</div>
                            </a>
                        </li>
                        <li>
                            <a
                                href="side-menu-light-loading-icon.html"
                                class="menu"
                            >
                                <div class="menu__icon">
                                    <i data-lucide="activity"></i>
                                </div>
                                <div class="menu__title">Loading Icon</div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="menu">
                        <div class="menu__icon">
                            <i data-lucide="sidebar"></i>
                        </div>
                        <div class="menu__title">
                            Forms
                            <i
                                data-lucide="chevron-down"
                                class="menu__sub-icon"
                            ></i>
                        </div>
                    </a>
                    <ul class="">
                        <li>
                            <a
                                href="side-menu-light-regular-form.html"
                                class="menu"
                            >
                                <div class="menu__icon">
                                    <i data-lucide="activity"></i>
                                </div>
                                <div class="menu__title">Regular Form</div>
                            </a>
                        </li>
                        <li>
                            <a
                                href="side-menu-light-datepicker.html"
                                class="menu"
                            >
                                <div class="menu__icon">
                                    <i data-lucide="activity"></i>
                                </div>
                                <div class="menu__title">Datepicker</div>
                            </a>
                        </li>
                        <li>
                            <a
                                href="side-menu-light-tom-select.html"
                                class="menu"
                            >
                                <div class="menu__icon">
                                    <i data-lucide="activity"></i>
                                </div>
                                <div class="menu__title">Tom Select</div>
                            </a>
                        </li>
                        <li>
                            <a
                                href="side-menu-light-file-upload.html"
                                class="menu"
                            >
                                <div class="menu__icon">
                                    <i data-lucide="activity"></i>
                                </div>
                                <div class="menu__title">File Upload</div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;" class="menu">
                                <div class="menu__icon">
                                    <i data-lucide="activity"></i>
                                </div>
                                <div class="menu__title">
                                    Wysiwyg Editor
                                    <i
                                        data-lucide="chevron-down"
                                        class="menu__sub-icon"
                                    ></i>
                                </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a
                                        href="side-menu-light-wysiwyg-editor-classic.html"
                                        class="menu"
                                    >
                                        <div class="menu__icon">
                                            <i data-lucide="zap"></i>
                                        </div>
                                        <div class="menu__title">Classic</div>
                                    </a>
                                </li>
                                <li>
                                    <a
                                        href="side-menu-light-wysiwyg-editor-inline.html"
                                        class="menu"
                                    >
                                        <div class="menu__icon">
                                            <i data-lucide="zap"></i>
                                        </div>
                                        <div class="menu__title">Inline</div>
                                    </a>
                                </li>
                                <li>
                                    <a
                                        href="side-menu-light-wysiwyg-editor-balloon.html"
                                        class="menu"
                                    >
                                        <div class="menu__icon">
                                            <i data-lucide="zap"></i>
                                        </div>
                                        <div class="menu__title">Balloon</div>
                                    </a>
                                </li>
                                <li>
                                    <a
                                        href="side-menu-light-wysiwyg-editor-balloon-block.html"
                                        class="menu"
                                    >
                                        <div class="menu__icon">
                                            <i data-lucide="zap"></i>
                                        </div>
                                        <div class="menu__title">
                                            Balloon Block
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a
                                        href="side-menu-light-wysiwyg-editor-document.html"
                                        class="menu"
                                    >
                                        <div class="menu__icon">
                                            <i data-lucide="zap"></i>
                                        </div>
                                        <div class="menu__title">Document</div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a
                                href="side-menu-light-validation.html"
                                class="menu"
                            >
                                <div class="menu__icon">
                                    <i data-lucide="activity"></i>
                                </div>
                                <div class="menu__title">Validation</div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="menu">
                        <div class="menu__icon">
                            <i data-lucide="hard-drive"></i>
                        </div>
                        <div class="menu__title">
                            Widgets
                            <i
                                data-lucide="chevron-down"
                                class="menu__sub-icon"
                            ></i>
                        </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="side-menu-light-chart.html" class="menu">
                                <div class="menu__icon">
                                    <i data-lucide="activity"></i>
                                </div>
                                <div class="menu__title">Chart</div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-slider.html" class="menu">
                                <div class="menu__icon">
                                    <i data-lucide="activity"></i>
                                </div>
                                <div class="menu__title">Slider</div>
                            </a>
                        </li>
                        <li>
                            <a
                                href="side-menu-light-image-zoom.html"
                                class="menu"
                            >
                                <div class="menu__icon">
                                    <i data-lucide="activity"></i>
                                </div>
                                <div class="menu__title">Image Zoom</div>
                            </a>
                        </li>
                    </ul>
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
            <a href="" class="logo -intro-x hidden md:flex xl:w-[180px] block">
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
                    <li class="breadcrumb-item"><a href="#">Application</a></li>
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
            <div class="intro-x dropdown mr-4 sm:mr-6">
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
            </div>
            <!-- END: Notifications -->
            <!-- BEGIN: Account Menu -->
            <div class="intro-x dropdown w-8 h-8">
                <div
                    class="dropdown-toggle w-8 h-8"
                    role="button"
                    aria-expanded="false"
                    data-tw-toggle="dropdown"
                >
                    <box-icon
                        name="user"
                        color="#cbd5e1"
                        class="hover:scale-90"
                    ></box-icon>
                </div>
            </div>
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
                            <box-icon name="home" color="#64748b"></box-icon>
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
                <li class="side-nav__devider my-6"></li>
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
                </li>
            </ul>
        </nav>
        <!-- END: Simple Menu -->
        <!-- BEGIN: Content -->
        <div class="content">
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
                                    <div class="text-2xl font-medium mt-2">
                                        200
                                    </div>
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
                                        <div class="ml-auto">
                                            10 มิถุนายน 2567
                                        </div>
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
                        <div
                            class="col-span-12 lg:col-span-8 xl:col-span-6 mt-2"
                        >
                            <div
                                class="intro-y block sm:flex items-center h-10"
                            >
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
                            <div class="report-box-2 intro-y mt-12 sm:mt-5">
                                <div class="box sm:flex">
                                    <div
                                        class="px-8 py-4 flex flex-col justify-center flex-1"
                                    >
                                        <div class="flex justify-center">
                                            <div class="h-auto w-full">
                                                <canvas
                                                    class=""
                                                    ref="reportBookOne"
                                                ></canvas>
                                            </div>
                                        </div>
                                        <div
                                            class="relative text-3xl font-medium mt-12"
                                        >
                                            <box-icon
                                                name="book"
                                                size="md"
                                                color="#f59e0b"
                                            ></box-icon>
                                            <span
                                                class="text-sm text-gray-400 pl-2"
                                                >รายวัน</span
                                            >
                                            197
                                            <span class="text-sm text-gray-400"
                                                >รายการ</span
                                            >
                                        </div>
                                        <!-- <div
                                            class="report-box-2__indicator bg-success tooltip cursor-pointer"
                                            title="47% Higher than last month"
                                        >
                                            จำนวนรายการยืม
                                            <i
                                                data-lucide="chevron-up"
                                                class="w-4 h-4 ml-0.5"
                                            ></i>
                                        </div> -->
                                        <div class="mt-4 text-slate-500">
                                            ข้อมูล ณ วันที่ 10 มิถุนายน 2567
                                        </div>
                                        <button
                                            class="btn btn-outline-secondary relative justify-start rounded-full mt-12"
                                        >
                                            Download Reports
                                            <span
                                                class="w-8 h-8 absolute flex justify-center items-center bg-primary text-white rounded-full right-0 top-0 bottom-0 my-auto ml-auto mr-0.5"
                                            >
                                                <box-icon
                                                    name="right-arrow-alt"
                                                    color="#cbd5e1"
                                                ></box-icon>
                                            </span>
                                        </button>
                                    </div>
                                    <div
                                        class="px-8 py-12 flex flex-col justify-center flex-1 border-t sm:border-t-0 sm:border-l border-slate-200 dark:border-darkmode-300 border-dashed"
                                    >
                                        <div class="text-slate-500 text-md">
                                            ปริญญาตรี
                                        </div>
                                        <div class="mt-1.5 flex items-center">
                                            <div class="text-base">
                                                20
                                                <span
                                                    class="text-xs text-gray-400"
                                                    >รายการ</span
                                                >
                                            </div>
                                            <!-- <div
                                                class="text-danger flex text-xs font-medium tooltip cursor-pointer ml-2"
                                                title="2% Lower than last month"
                                            >
                                                2%
                                                <i
                                                    data-lucide="chevron-down"
                                                    class="w-4 h-4 ml-0.5"
                                                ></i>
                                            </div> -->
                                        </div>
                                        <div
                                            class="text-slate-500 text-md mt-5"
                                        >
                                            ปริญญาโท
                                        </div>
                                        <div class="mt-1.5 flex items-center">
                                            <div class="text-base">
                                                9
                                                <span
                                                    class="text-xs text-gray-400"
                                                    >รายการ</span
                                                >
                                            </div>
                                        </div>
                                        <div
                                            class="text-slate-500 text-md mt-5"
                                        >
                                            บุคลากรสายวิชาการ
                                        </div>
                                        <div class="mt-1.5 flex items-center">
                                            <div class="text-base">
                                                4
                                                <span
                                                    class="text-xs text-gray-400"
                                                    >รายการ</span
                                                >
                                            </div>
                                        </div>
                                        <div
                                            class="text-slate-500 text-md mt-5"
                                        >
                                            บุคลากรสายสนับสนุน
                                        </div>
                                        <div class="mt-1.5 flex items-center">
                                            <div class="text-base">
                                                3
                                                <span
                                                    class="text-xs text-gray-400"
                                                    >รายการ</span
                                                >
                                            </div>
                                        </div>
                                        <div
                                            class="text-slate-500 text-md mt-5"
                                        >
                                            หนังสือทั่วไป (General Books)
                                        </div>
                                        <div class="mt-1.5 flex items-center">
                                            <div class="text-base">
                                                19
                                                <span
                                                    class="text-xs text-gray-400"
                                                    >รายการ</span
                                                >
                                            </div>
                                        </div>
                                        <div
                                            class="text-slate-500 text-md mt-5"
                                        >
                                            วิจัย (Research)
                                        </div>
                                        <div class="mt-1.5 flex items-center">
                                            <div class="text-base">
                                                1
                                                <span
                                                    class="text-xs text-gray-400"
                                                    >รายการ</span
                                                >
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
                                                    <div
                                                        class="text-xl font-medium"
                                                    >
                                                        63,044
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
                                                <div class="flex items-center">
                                                    <div
                                                        class="w-2 h-2 bg-sky-500 rounded-full mr-3"
                                                    ></div>
                                                    <span class="truncate"
                                                        >นักเรียน</span
                                                    >
                                                    <span
                                                        class="font-medium ml-auto"
                                                        >22%</span
                                                    >
                                                </div>
                                                <div
                                                    class="flex items-center mt-4"
                                                >
                                                    <div
                                                        class="w-2 h-2 bg-teal-600 rounded-full mr-3"
                                                    ></div>
                                                    <span class="truncate"
                                                        >นักศึกษา</span
                                                    >
                                                    <span
                                                        class="font-medium ml-auto"
                                                        >63%</span
                                                    >
                                                </div>
                                                <div
                                                    class="flex items-center mt-4"
                                                >
                                                    <div
                                                        class="w-2 h-2 bg-orange-400 rounded-full mr-3"
                                                    ></div>
                                                    <span class="truncate"
                                                        >อาจารย์</span
                                                    >
                                                    <span
                                                        class="font-medium ml-auto"
                                                        >10%</span
                                                    >
                                                </div>
                                                <div
                                                    class="flex items-center mt-4"
                                                >
                                                    <div
                                                        class="w-2 h-2 bg-yellow-400 rounded-full mr-3"
                                                    ></div>
                                                    <span class="truncate"
                                                        >บุคลากร</span
                                                    >
                                                    <span
                                                        class="font-medium ml-auto"
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
                            <div
                                class="intro-y block sm:flex items-center h-10"
                            >
                                <h2 class="text-lg font-medium truncate mr-5">
                                    สืบค้นมากสุด (OPAC)
                                </h2>
                                <!-- <select
                                    class="sm:ml-auto mt-3 sm:mt-0 sm:w-auto form-select box"
                                >
                                    <option value="daily">รายวัน</option>
                                    <option value="monthly">รายเดือน</option>
                                    <option value="yearly">รายปี</option>
                                </select> -->
                                <!-- <div
                                    class="flex items-center sm:ml-auto mt-3 sm:mt-0"
                                >
                                    <button
                                        class="btn box flex items-center text-slate-600 dark:text-slate-300"
                                    >
                                        <i
                                            data-lucide="file-text"
                                            class="hidden sm:block w-4 h-4 mr-2"
                                        ></i>
                                        Export to Excel
                                    </button>
                                    <button
                                        class="ml-3 btn box flex items-center text-slate-600 dark:text-slate-300"
                                    >
                                        <i
                                            data-lucide="file-text"
                                            class="hidden sm:block w-4 h-4 mr-2"
                                        ></i>
                                        Export to PDF
                                    </button>
                                </div> -->
                            </div>
                            <div
                                class="intro-y overflow-auto lg:overflow-visible mt-8 sm:mt-0"
                            >
                                <table class="table table-report sm:mt-2">
                                    <thead>
                                        <tr>
                                            <th class="whitespace-nowrap">
                                                IMAGES
                                            </th>
                                            <th class="whitespace-nowrap">
                                                TITLE
                                            </th>
                                            <th
                                                class="text-center whitespace-nowrap"
                                            >
                                                LANGUAGE
                                            </th>
                                            <th
                                                class="text-center whitespace-nowrap"
                                            >
                                                STATUS
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="intro-x">
                                            <td class="w-40">
                                                <div class="flex">
                                                    <div
                                                        class="w-10 h-10 image-fit zoom-in"
                                                    >
                                                        <img
                                                            alt="Midone - HTML Admin Template"
                                                            class="tooltip"
                                                            title="Uploaded at 7 June 2020"
                                                            :src="pic1"
                                                        />
                                                    </div>
                                                    <!-- <div
                                                        class="w-10 h-10 image-fit zoom-in -ml-5"
                                                    >
                                                        <img
                                                            alt="Midone - HTML Admin Template"
                                                            class="tooltip rounded-full"
                                                            src="dist/images/preview-5.jpg"
                                                            title="Uploaded at 5 April 2022"
                                                        />
                                                    </div>
                                                    <div
                                                        class="w-10 h-10 image-fit zoom-in -ml-5"
                                                    >
                                                        <img
                                                            alt="Midone - HTML Admin Template"
                                                            class="tooltip rounded-full"
                                                            src="dist/images/preview-9.jpg"
                                                            title="Uploaded at 14 July 2021"
                                                        />
                                                    </div> -->
                                                </div>
                                            </td>
                                            <td>
                                                <a
                                                    href=""
                                                    class="font-medium whitespace-nowrap"
                                                    >จิตวิทยาการรู้คิด / พาสนา
                                                    จุลรัตน์</a
                                                >
                                                <div
                                                    class="text-slate-500 text-xs whitespace-nowrap mt-0.5"
                                                >
                                                    b00163678
                                                </div>
                                            </td>
                                            <td class="text-center">tha</td>
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
                                            <!-- <td
                                                class="table-report__action w-56"
                                            >
                                                <div
                                                    class="flex justify-center items-center"
                                                >
                                                    <a
                                                        class="flex items-center mr-3"
                                                        href=""
                                                    >
                                                        <i
                                                            data-lucide="check-square"
                                                            class="w-4 h-4 mr-1"
                                                        ></i>
                                                        Edit
                                                    </a>
                                                    <a
                                                        class="flex items-center text-danger"
                                                        href=""
                                                    >
                                                        <i
                                                            data-lucide="trash-2"
                                                            class="w-4 h-4 mr-1"
                                                        ></i>
                                                        Delete
                                                    </a>
                                                </div>
                                            </td> -->
                                        </tr>
                                        <tr class="intro-x">
                                            <td class="w-40">
                                                <div class="flex">
                                                    <div
                                                        class="w-10 h-10 image-fit zoom-in"
                                                    >
                                                        <img
                                                            alt="Midone - HTML Admin Template"
                                                            class="tooltip"
                                                            title="Uploaded at 16 September 2022"
                                                            :src="pic2"
                                                        />
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <a
                                                    href=""
                                                    class="font-medium whitespace-nowrap"
                                                    >เพราะมีชีวิตดีได้กว่าที่เป็น
                                                    = Atomic habits / James
                                                    Clear ; ประพาฬรัตน์
                                                    ยงมานิตชัย, แปล</a
                                                >
                                                <div
                                                    class="text-slate-500 text-xs whitespace-nowrap mt-0.5"
                                                >
                                                    b00166864
                                                </div>
                                            </td>
                                            <td class="text-center">tha</td>
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
                                        <tr class="intro-x">
                                            <td class="w-40">
                                                <div class="flex">
                                                    <div
                                                        class="w-10 h-10 image-fit zoom-in"
                                                    >
                                                        <img
                                                            alt="Midone - HTML Admin Template"
                                                            class="tooltip"
                                                            title="Uploaded at 4 April 2022"
                                                            :src="pic3"
                                                        />
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <a
                                                    href=""
                                                    class="font-medium whitespace-nowrap"
                                                    >แคลคูลัสสำหรับผู้ไม่เก่งคณิตศาสตร์
                                                    : แคลคูลัสเชิงอนุพันธ์ /
                                                    ปกรณ์ พลาหาญ, เอนก
                                                    จันทรจรูญ</a
                                                >
                                                <div
                                                    class="text-slate-500 text-xs whitespace-nowrap mt-0.5"
                                                >
                                                    b00162388
                                                </div>
                                            </td>
                                            <td class="text-center">tha</td>
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
                                        <tr class="intro-x">
                                            <td class="w-40">
                                                <div class="flex">
                                                    <div
                                                        class="w-10 h-10 image-fit zoom-in"
                                                    >
                                                        <img
                                                            alt="Midone - HTML Admin Template"
                                                            class="tooltip"
                                                            title="Uploaded at 31 August 2022"
                                                            :src="pic4"
                                                        />
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <a
                                                    href=""
                                                    class="font-medium whitespace-nowrap"
                                                    >Verbes คำกริยา ภาษาฝรั่งเศส
                                                    / ปาริชาติ ชุมสาย ณ
                                                    อยุธยา</a
                                                >
                                                <div
                                                    class="text-slate-500 text-xs whitespace-nowrap mt-0.5"
                                                >
                                                    b00106884
                                                </div>
                                            </td>
                                            <td class="text-center">tha</td>
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
                            <!-- <div
                                class="intro-y flex flex-wrap sm:flex-row sm:flex-nowrap items-center mt-3"
                            >
                                <nav class="w-full sm:w-auto sm:mr-auto">
                                    <ul class="pagination">
                                        <li class="page-item">
                                            <a class="page-link" href="#">
                                                <i
                                                    class="w-4 h-4"
                                                    data-lucide="chevrons-left"
                                                ></i>
                                            </a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">
                                                <i
                                                    class="w-4 h-4"
                                                    data-lucide="chevron-left"
                                                ></i>
                                            </a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="#"
                                                >...</a
                                            >
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">1</a>
                                        </li>
                                        <li class="page-item active">
                                            <a class="page-link" href="#">2</a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">3</a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="#"
                                                >...</a
                                            >
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">
                                                <i
                                                    class="w-4 h-4"
                                                    data-lucide="chevron-right"
                                                ></i>
                                            </a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">
                                                <i
                                                    class="w-4 h-4"
                                                    data-lucide="chevrons-right"
                                                ></i>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                                <select
                                    class="w-20 form-select box mt-3 sm:mt-0"
                                >
                                    <option>10</option>
                                    <option>25</option>
                                    <option>35</option>
                                    <option>50</option>
                                </select>
                            </div> -->
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
                                    <option value="daily">รายวัน</option>
                                    <option value="monthly">รายเดือน</option>
                                    <option value="yearly">รายปี</option>
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
                                            <div
                                                class="text-slate-500 text-xs mt-0.5"
                                            >
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
                                            <div
                                                class="text-slate-500 text-xs mt-0.5"
                                            >
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
                                            <div class="font-medium">
                                                SpringerLink
                                            </div>
                                            <div
                                                class="text-slate-500 text-xs mt-0.5"
                                            >
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
                                            <div class="font-medium">
                                                ScienceDirect
                                            </div>
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
                                <a
                                    href=""
                                    class="intro-y w-full block text-center rounded-md py-4 border border-dotted border-slate-400 dark:border-darkmode-300 text-slate-500"
                                    >View More</a
                                >
                            </div>
                        </div>
                        <!-- END: Weekly Best Sellers -->

                        <!-- BEGIN: Weekly Top Products -->
                        <!-- <div class="col-span-12 mt-6">
                            <div
                                class="intro-y block sm:flex items-center h-10"
                            >
                                <h2 class="text-lg font-medium truncate mr-5">
                                    Weekly Top Products
                                </h2>
                                <div
                                    class="flex items-center sm:ml-auto mt-3 sm:mt-0"
                                >
                                    <button
                                        class="btn box flex items-center text-slate-600 dark:text-slate-300"
                                    >
                                        <i
                                            data-lucide="file-text"
                                            class="hidden sm:block w-4 h-4 mr-2"
                                        ></i>
                                        Export to Excel
                                    </button>
                                    <button
                                        class="ml-3 btn box flex items-center text-slate-600 dark:text-slate-300"
                                    >
                                        <i
                                            data-lucide="file-text"
                                            class="hidden sm:block w-4 h-4 mr-2"
                                        ></i>
                                        Export to PDF
                                    </button>
                                </div>
                            </div>
                            <div
                                class="intro-y overflow-auto lg:overflow-visible mt-8 sm:mt-0"
                            >
                                <table class="table table-report sm:mt-2">
                                    <thead>
                                        <tr>
                                            <th class="whitespace-nowrap">
                                                IMAGES
                                            </th>
                                            <th class="whitespace-nowrap">
                                                PRODUCT NAME
                                            </th>
                                            <th
                                                class="text-center whitespace-nowrap"
                                            >
                                                STOCK
                                            </th>
                                            <th
                                                class="text-center whitespace-nowrap"
                                            >
                                                STATUS
                                            </th>
                                            <th
                                                class="text-center whitespace-nowrap"
                                            >
                                                ACTIONS
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="intro-x">
                                            <td class="w-40">
                                                <div class="flex">
                                                    <div
                                                        class="w-10 h-10 image-fit zoom-in"
                                                    >
                                                        <img
                                                            alt="Midone - HTML Admin Template"
                                                            class="tooltip rounded-full"
                                                            src="dist/images/preview-12.jpg"
                                                            title="Uploaded at 7 June 2020"
                                                        />
                                                    </div>
                                                    <div
                                                        class="w-10 h-10 image-fit zoom-in -ml-5"
                                                    >
                                                        <img
                                                            alt="Midone - HTML Admin Template"
                                                            class="tooltip rounded-full"
                                                            src="dist/images/preview-5.jpg"
                                                            title="Uploaded at 5 April 2022"
                                                        />
                                                    </div>
                                                    <div
                                                        class="w-10 h-10 image-fit zoom-in -ml-5"
                                                    >
                                                        <img
                                                            alt="Midone - HTML Admin Template"
                                                            class="tooltip rounded-full"
                                                            src="dist/images/preview-9.jpg"
                                                            title="Uploaded at 14 July 2021"
                                                        />
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <a
                                                    href=""
                                                    class="font-medium whitespace-nowrap"
                                                    >Samsung Galaxy S20 Ultra</a
                                                >
                                                <div
                                                    class="text-slate-500 text-xs whitespace-nowrap mt-0.5"
                                                >
                                                    Smartphone &amp; Tablet
                                                </div>
                                            </td>
                                            <td class="text-center">143</td>
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
                                            <td
                                                class="table-report__action w-56"
                                            >
                                                <div
                                                    class="flex justify-center items-center"
                                                >
                                                    <a
                                                        class="flex items-center mr-3"
                                                        href=""
                                                    >
                                                        <i
                                                            data-lucide="check-square"
                                                            class="w-4 h-4 mr-1"
                                                        ></i>
                                                        Edit
                                                    </a>
                                                    <a
                                                        class="flex items-center text-danger"
                                                        href=""
                                                    >
                                                        <i
                                                            data-lucide="trash-2"
                                                            class="w-4 h-4 mr-1"
                                                        ></i>
                                                        Delete
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="intro-x">
                                            <td class="w-40">
                                                <div class="flex">
                                                    <div
                                                        class="w-10 h-10 image-fit zoom-in"
                                                    >
                                                        <img
                                                            alt="Midone - HTML Admin Template"
                                                            class="tooltip rounded-full"
                                                            src="dist/images/preview-13.jpg"
                                                            title="Uploaded at 16 September 2022"
                                                        />
                                                    </div>
                                                    <div
                                                        class="w-10 h-10 image-fit zoom-in -ml-5"
                                                    >
                                                        <img
                                                            alt="Midone - HTML Admin Template"
                                                            class="tooltip rounded-full"
                                                            src="dist/images/preview-5.jpg"
                                                            title="Uploaded at 3 May 2021"
                                                        />
                                                    </div>
                                                    <div
                                                        class="w-10 h-10 image-fit zoom-in -ml-5"
                                                    >
                                                        <img
                                                            alt="Midone - HTML Admin Template"
                                                            class="tooltip rounded-full"
                                                            src="dist/images/preview-11.jpg"
                                                            title="Uploaded at 24 September 2021"
                                                        />
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <a
                                                    href=""
                                                    class="font-medium whitespace-nowrap"
                                                    >Sony A7 III</a
                                                >
                                                <div
                                                    class="text-slate-500 text-xs whitespace-nowrap mt-0.5"
                                                >
                                                    Photography
                                                </div>
                                            </td>
                                            <td class="text-center">53</td>
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
                                            <td
                                                class="table-report__action w-56"
                                            >
                                                <div
                                                    class="flex justify-center items-center"
                                                >
                                                    <a
                                                        class="flex items-center mr-3"
                                                        href=""
                                                    >
                                                        <i
                                                            data-lucide="check-square"
                                                            class="w-4 h-4 mr-1"
                                                        ></i>
                                                        Edit
                                                    </a>
                                                    <a
                                                        class="flex items-center text-danger"
                                                        href=""
                                                    >
                                                        <i
                                                            data-lucide="trash-2"
                                                            class="w-4 h-4 mr-1"
                                                        ></i>
                                                        Delete
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="intro-x">
                                            <td class="w-40">
                                                <div class="flex">
                                                    <div
                                                        class="w-10 h-10 image-fit zoom-in"
                                                    >
                                                        <img
                                                            alt="Midone - HTML Admin Template"
                                                            class="tooltip rounded-full"
                                                            src="dist/images/preview-14.jpg"
                                                            title="Uploaded at 4 April 2022"
                                                        />
                                                    </div>
                                                    <div
                                                        class="w-10 h-10 image-fit zoom-in -ml-5"
                                                    >
                                                        <img
                                                            alt="Midone - HTML Admin Template"
                                                            class="tooltip rounded-full"
                                                            src="dist/images/preview-15.jpg"
                                                            title="Uploaded at 24 February 2021"
                                                        />
                                                    </div>
                                                    <div
                                                        class="w-10 h-10 image-fit zoom-in -ml-5"
                                                    >
                                                        <img
                                                            alt="Midone - HTML Admin Template"
                                                            class="tooltip rounded-full"
                                                            src="dist/images/preview-11.jpg"
                                                            title="Uploaded at 20 May 2022"
                                                        />
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <a
                                                    href=""
                                                    class="font-medium whitespace-nowrap"
                                                    >Nike Tanjun</a
                                                >
                                                <div
                                                    class="text-slate-500 text-xs whitespace-nowrap mt-0.5"
                                                >
                                                    Sport &amp; Outdoor
                                                </div>
                                            </td>
                                            <td class="text-center">86</td>
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
                                            <td
                                                class="table-report__action w-56"
                                            >
                                                <div
                                                    class="flex justify-center items-center"
                                                >
                                                    <a
                                                        class="flex items-center mr-3"
                                                        href=""
                                                    >
                                                        <i
                                                            data-lucide="check-square"
                                                            class="w-4 h-4 mr-1"
                                                        ></i>
                                                        Edit
                                                    </a>
                                                    <a
                                                        class="flex items-center text-danger"
                                                        href=""
                                                    >
                                                        <i
                                                            data-lucide="trash-2"
                                                            class="w-4 h-4 mr-1"
                                                        ></i>
                                                        Delete
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="intro-x">
                                            <td class="w-40">
                                                <div class="flex">
                                                    <div
                                                        class="w-10 h-10 image-fit zoom-in"
                                                    >
                                                        <img
                                                            alt="Midone - HTML Admin Template"
                                                            class="tooltip rounded-full"
                                                            src="dist/images/preview-11.jpg"
                                                            title="Uploaded at 31 August 2022"
                                                        />
                                                    </div>
                                                    <div
                                                        class="w-10 h-10 image-fit zoom-in -ml-5"
                                                    >
                                                        <img
                                                            alt="Midone - HTML Admin Template"
                                                            class="tooltip rounded-full"
                                                            src="dist/images/preview-3.jpg"
                                                            title="Uploaded at 11 June 2020"
                                                        />
                                                    </div>
                                                    <div
                                                        class="w-10 h-10 image-fit zoom-in -ml-5"
                                                    >
                                                        <img
                                                            alt="Midone - HTML Admin Template"
                                                            class="tooltip rounded-full"
                                                            src="dist/images/preview-9.jpg"
                                                            title="Uploaded at 19 July 2021"
                                                        />
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <a
                                                    href=""
                                                    class="font-medium whitespace-nowrap"
                                                    >Sony A7 III</a
                                                >
                                                <div
                                                    class="text-slate-500 text-xs whitespace-nowrap mt-0.5"
                                                >
                                                    Photography
                                                </div>
                                            </td>
                                            <td class="text-center">50</td>
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
                                            <td
                                                class="table-report__action w-56"
                                            >
                                                <div
                                                    class="flex justify-center items-center"
                                                >
                                                    <a
                                                        class="flex items-center mr-3"
                                                        href=""
                                                    >
                                                        <i
                                                            data-lucide="check-square"
                                                            class="w-4 h-4 mr-1"
                                                        ></i>
                                                        Edit
                                                    </a>
                                                    <a
                                                        class="flex items-center text-danger"
                                                        href=""
                                                    >
                                                        <i
                                                            data-lucide="trash-2"
                                                            class="w-4 h-4 mr-1"
                                                        ></i>
                                                        Delete
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div
                                class="intro-y flex flex-wrap sm:flex-row sm:flex-nowrap items-center mt-3"
                            >
                                <nav class="w-full sm:w-auto sm:mr-auto">
                                    <ul class="pagination">
                                        <li class="page-item">
                                            <a class="page-link" href="#">
                                                <i
                                                    class="w-4 h-4"
                                                    data-lucide="chevrons-left"
                                                ></i>
                                            </a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">
                                                <i
                                                    class="w-4 h-4"
                                                    data-lucide="chevron-left"
                                                ></i>
                                            </a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="#"
                                                >...</a
                                            >
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">1</a>
                                        </li>
                                        <li class="page-item active">
                                            <a class="page-link" href="#">2</a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">3</a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="#"
                                                >...</a
                                            >
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">
                                                <i
                                                    class="w-4 h-4"
                                                    data-lucide="chevron-right"
                                                ></i>
                                            </a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">
                                                <i
                                                    class="w-4 h-4"
                                                    data-lucide="chevrons-right"
                                                ></i>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                                <select
                                    class="w-20 form-select box mt-3 sm:mt-0"
                                >
                                    <option>10</option>
                                    <option>25</option>
                                    <option>35</option>
                                    <option>50</option>
                                </select>
                            </div>
                        </div> -->
                        <!-- END: Weekly Top Products -->
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
                                    <a
                                        href=""
                                        class="ml-auto text-primary truncate"
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
                                        <div
                                            class="box px-5 py-3 ml-4 flex-1 zoom-in"
                                        >
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
                                        <div
                                            class="box px-5 py-3 ml-4 flex-1 zoom-in"
                                        >
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
                                        <div
                                            class="box px-5 py-3 ml-4 flex-1 zoom-in"
                                        >
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
                                        <div
                                            class="box px-5 py-3 ml-4 flex-1 zoom-in"
                                        >
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
                                    <h2
                                        class="text-lg font-medium truncate mr-auto"
                                    >
                                        จองห้องออนไลน์ (Study Room)
                                    </h2>
                                    <!-- <button
                                        data-carousel="important-notes"
                                        data-target="prev"
                                        class="tiny-slider-navigator btn px-2 border-slate-300 text-slate-600 dark:text-slate-300 mr-2"
                                    >
                                        <i
                                            data-lucide="chevron-left"
                                            class="w-4 h-4"
                                        ></i>
                                    </button>
                                    <button
                                        data-carousel="important-notes"
                                        data-target="next"
                                        class="tiny-slider-navigator btn px-2 border-slate-300 text-slate-600 dark:text-slate-300 mr-2"
                                    >
                                        <i
                                            data-lucide="chevron-right"
                                            class="w-4 h-4"
                                        ></i>
                                    </button> -->
                                </div>
                                <div class="mt-5 intro-x">
                                    <div class="box zoom-in">
                                        <div
                                            class="tiny-slider"
                                            id="important-notes"
                                        >
                                            <!-- <div class="p-5">
                                                <div
                                                    class="text-base font-medium truncate"
                                                >
                                                    Lorem Ipsum is simply dummy
                                                    text
                                                </div>
                                                <div
                                                    class="text-slate-400 mt-1"
                                                >
                                                    20 Hours ago
                                                </div>
                                                <div
                                                    class="text-slate-500 text-justify mt-1"
                                                >
                                                    Lorem Ipsum is simply dummy
                                                    text of the printing and
                                                    typesetting industry. Lorem
                                                    Ipsum has been the
                                                    industry's standard dummy
                                                    text ever since the 1500s.
                                                </div>
                                                <div
                                                    class="font-medium flex mt-5"
                                                >
                                                    <button
                                                        type="button"
                                                        class="btn btn-secondary py-1 px-2"
                                                    >
                                                        View Notes
                                                    </button>
                                                    <button
                                                        type="button"
                                                        class="btn btn-outline-secondary py-1 px-2 ml-auto ml-auto"
                                                    >
                                                        Dismiss
                                                    </button>
                                                </div>
                                            </div> -->
                                            <div class="p-2">
                                                <div
                                                    class="flex justify-center"
                                                >
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

                            <!-- BEGIN: Transactions -->
                            <!-- <div
                                class="col-span-12 md:col-span-6 xl:col-span-4 2xl:col-span-12 mt-3"
                            >
                                <div class="intro-x flex items-center h-10">
                                    <h2
                                        class="text-lg font-medium truncate mr-5"
                                    >
                                        Transactions
                                    </h2>
                                </div>
                                <div class="mt-5">
                                    <div class="intro-x">
                                        <div
                                            class="box px-5 py-3 mb-3 flex items-center zoom-in"
                                        >
                                            <div
                                                class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden"
                                            >
                                                <img
                                                    alt="Midone - HTML Admin Template"
                                                    src="dist/images/profile-1.jpg"
                                                />
                                            </div>
                                            <div class="ml-4 mr-auto">
                                                <div class="font-medium">
                                                    Leonardo DiCaprio
                                                </div>
                                                <div
                                                    class="text-slate-500 text-xs mt-0.5"
                                                >
                                                    7 June 2020
                                                </div>
                                            </div>
                                            <div class="text-success">+$26</div>
                                        </div>
                                    </div>
                                    <div class="intro-x">
                                        <div
                                            class="box px-5 py-3 mb-3 flex items-center zoom-in"
                                        >
                                            <div
                                                class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden"
                                            >
                                                <img
                                                    alt="Midone - HTML Admin Template"
                                                    src="dist/images/profile-15.jpg"
                                                />
                                            </div>
                                            <div class="ml-4 mr-auto">
                                                <div class="font-medium">
                                                    Angelina Jolie
                                                </div>
                                                <div
                                                    class="text-slate-500 text-xs mt-0.5"
                                                >
                                                    16 September 2022
                                                </div>
                                            </div>
                                            <div class="text-success">
                                                +$159
                                            </div>
                                        </div>
                                    </div>
                                    <div class="intro-x">
                                        <div
                                            class="box px-5 py-3 mb-3 flex items-center zoom-in"
                                        >
                                            <div
                                                class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden"
                                            >
                                                <img
                                                    alt="Midone - HTML Admin Template"
                                                    src="dist/images/profile-7.jpg"
                                                />
                                            </div>
                                            <div class="ml-4 mr-auto">
                                                <div class="font-medium">
                                                    Christian Bale
                                                </div>
                                                <div
                                                    class="text-slate-500 text-xs mt-0.5"
                                                >
                                                    4 April 2022
                                                </div>
                                            </div>
                                            <div class="text-success">
                                                +$179
                                            </div>
                                        </div>
                                    </div>
                                    <div class="intro-x">
                                        <div
                                            class="box px-5 py-3 mb-3 flex items-center zoom-in"
                                        >
                                            <div
                                                class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden"
                                            >
                                                <img
                                                    alt="Midone - HTML Admin Template"
                                                    src="dist/images/profile-1.jpg"
                                                />
                                            </div>
                                            <div class="ml-4 mr-auto">
                                                <div class="font-medium">
                                                    Al Pacino
                                                </div>
                                                <div
                                                    class="text-slate-500 text-xs mt-0.5"
                                                >
                                                    31 August 2022
                                                </div>
                                            </div>
                                            <div class="text-success">
                                                +$173
                                            </div>
                                        </div>
                                    </div>
                                    <div class="intro-x">
                                        <div
                                            class="box px-5 py-3 mb-3 flex items-center zoom-in"
                                        >
                                            <div
                                                class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden"
                                            >
                                                <img
                                                    alt="Midone - HTML Admin Template"
                                                    src="dist/images/profile-14.jpg"
                                                />
                                            </div>
                                            <div class="ml-4 mr-auto">
                                                <div class="font-medium">
                                                    Angelina Jolie
                                                </div>
                                                <div
                                                    class="text-slate-500 text-xs mt-0.5"
                                                >
                                                    21 July 2022
                                                </div>
                                            </div>
                                            <div class="text-danger">-$48</div>
                                        </div>
                                    </div>
                                    <a
                                        href=""
                                        class="intro-x w-full block text-center rounded-md py-3 border border-dotted border-slate-400 dark:border-darkmode-300 text-slate-500"
                                        >View More</a
                                    >
                                </div>
                            </div> -->
                            <!-- END: Transactions -->
                            <!-- BEGIN: Schedules -->
                            <!-- <div
                                class="col-span-12 md:col-span-6 xl:col-span-4 2xl:col-span-12 xl:col-start-1 xl:row-start-2 2xl:col-start-auto 2xl:row-start-auto mt-3"
                            >
                                <div class="intro-x flex items-center h-10">
                                    <h2
                                        class="text-lg font-medium truncate mr-5"
                                    >
                                        Schedules
                                    </h2>
                                    <a
                                        href=""
                                        class="ml-auto text-primary truncate flex items-center"
                                    >
                                        <i
                                            data-lucide="plus"
                                            class="w-4 h-4 mr-1"
                                        ></i>
                                        Add New Schedules
                                    </a>
                                </div>
                                <div class="mt-5">
                                    <div class="intro-x box">
                                        <div class="p-5">
                                            <div class="flex">
                                                <i
                                                    data-lucide="chevron-left"
                                                    class="w-5 h-5 text-slate-500"
                                                ></i>
                                                <div
                                                    class="font-medium text-base mx-auto"
                                                >
                                                    April
                                                </div>
                                                <i
                                                    data-lucide="chevron-right"
                                                    class="w-5 h-5 text-slate-500"
                                                ></i>
                                            </div>
                                            <div
                                                class="grid grid-cols-7 gap-4 mt-5 text-center"
                                            >
                                                <div class="font-medium">
                                                    Su
                                                </div>
                                                <div class="font-medium">
                                                    Mo
                                                </div>
                                                <div class="font-medium">
                                                    Tu
                                                </div>
                                                <div class="font-medium">
                                                    We
                                                </div>
                                                <div class="font-medium">
                                                    Th
                                                </div>
                                                <div class="font-medium">
                                                    Fr
                                                </div>
                                                <div class="font-medium">
                                                    Sa
                                                </div>
                                                <div
                                                    class="py-0.5 rounded relative text-slate-500"
                                                >
                                                    29
                                                </div>
                                                <div
                                                    class="py-0.5 rounded relative text-slate-500"
                                                >
                                                    30
                                                </div>
                                                <div
                                                    class="py-0.5 rounded relative text-slate-500"
                                                >
                                                    31
                                                </div>
                                                <div
                                                    class="py-0.5 rounded relative"
                                                >
                                                    1
                                                </div>
                                                <div
                                                    class="py-0.5 rounded relative"
                                                >
                                                    2
                                                </div>
                                                <div
                                                    class="py-0.5 rounded relative"
                                                >
                                                    3
                                                </div>
                                                <div
                                                    class="py-0.5 rounded relative"
                                                >
                                                    4
                                                </div>
                                                <div
                                                    class="py-0.5 rounded relative"
                                                >
                                                    5
                                                </div>
                                                <div
                                                    class="py-0.5 bg-success/20 dark:bg-success/30 rounded relative"
                                                >
                                                    6
                                                </div>
                                                <div
                                                    class="py-0.5 rounded relative"
                                                >
                                                    7
                                                </div>
                                                <div
                                                    class="py-0.5 bg-primary text-white rounded relative"
                                                >
                                                    8
                                                </div>
                                                <div
                                                    class="py-0.5 rounded relative"
                                                >
                                                    9
                                                </div>
                                                <div
                                                    class="py-0.5 rounded relative"
                                                >
                                                    10
                                                </div>
                                                <div
                                                    class="py-0.5 rounded relative"
                                                >
                                                    11
                                                </div>
                                                <div
                                                    class="py-0.5 rounded relative"
                                                >
                                                    12
                                                </div>
                                                <div
                                                    class="py-0.5 rounded relative"
                                                >
                                                    13
                                                </div>
                                                <div
                                                    class="py-0.5 rounded relative"
                                                >
                                                    14
                                                </div>
                                                <div
                                                    class="py-0.5 rounded relative"
                                                >
                                                    15
                                                </div>
                                                <div
                                                    class="py-0.5 rounded relative"
                                                >
                                                    16
                                                </div>
                                                <div
                                                    class="py-0.5 rounded relative"
                                                >
                                                    17
                                                </div>
                                                <div
                                                    class="py-0.5 rounded relative"
                                                >
                                                    18
                                                </div>
                                                <div
                                                    class="py-0.5 rounded relative"
                                                >
                                                    19
                                                </div>
                                                <div
                                                    class="py-0.5 rounded relative"
                                                >
                                                    20
                                                </div>
                                                <div
                                                    class="py-0.5 rounded relative"
                                                >
                                                    21
                                                </div>
                                                <div
                                                    class="py-0.5 rounded relative"
                                                >
                                                    22
                                                </div>
                                                <div
                                                    class="py-0.5 bg-pending/20 dark:bg-pending/30 rounded relative"
                                                >
                                                    23
                                                </div>
                                                <div
                                                    class="py-0.5 rounded relative"
                                                >
                                                    24
                                                </div>
                                                <div
                                                    class="py-0.5 rounded relative"
                                                >
                                                    25
                                                </div>
                                                <div
                                                    class="py-0.5 rounded relative"
                                                >
                                                    26
                                                </div>
                                                <div
                                                    class="py-0.5 bg-primary/10 dark:bg-primary/50 rounded relative"
                                                >
                                                    27
                                                </div>
                                                <div
                                                    class="py-0.5 rounded relative"
                                                >
                                                    28
                                                </div>
                                                <div
                                                    class="py-0.5 rounded relative"
                                                >
                                                    29
                                                </div>
                                                <div
                                                    class="py-0.5 rounded relative"
                                                >
                                                    30
                                                </div>
                                                <div
                                                    class="py-0.5 rounded relative text-slate-500"
                                                >
                                                    1
                                                </div>
                                                <div
                                                    class="py-0.5 rounded relative text-slate-500"
                                                >
                                                    2
                                                </div>
                                                <div
                                                    class="py-0.5 rounded relative text-slate-500"
                                                >
                                                    3
                                                </div>
                                                <div
                                                    class="py-0.5 rounded relative text-slate-500"
                                                >
                                                    4
                                                </div>
                                                <div
                                                    class="py-0.5 rounded relative text-slate-500"
                                                >
                                                    5
                                                </div>
                                                <div
                                                    class="py-0.5 rounded relative text-slate-500"
                                                >
                                                    6
                                                </div>
                                                <div
                                                    class="py-0.5 rounded relative text-slate-500"
                                                >
                                                    7
                                                </div>
                                                <div
                                                    class="py-0.5 rounded relative text-slate-500"
                                                >
                                                    8
                                                </div>
                                                <div
                                                    class="py-0.5 rounded relative text-slate-500"
                                                >
                                                    9
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="border-t border-slate-200/60 p-5"
                                        >
                                            <div class="flex items-center">
                                                <div
                                                    class="w-2 h-2 bg-pending rounded-full mr-3"
                                                ></div>
                                                <span class="truncate"
                                                    >UI/UX Workshop</span
                                                >
                                                <span
                                                    class="font-medium xl:ml-auto"
                                                    >23th</span
                                                >
                                            </div>
                                            <div class="flex items-center mt-4">
                                                <div
                                                    class="w-2 h-2 bg-primary rounded-full mr-3"
                                                ></div>
                                                <span class="truncate"
                                                    >VueJs Frontend
                                                    Development</span
                                                >
                                                <span
                                                    class="font-medium xl:ml-auto"
                                                    >10th</span
                                                >
                                            </div>
                                            <div class="flex items-center mt-4">
                                                <div
                                                    class="w-2 h-2 bg-warning rounded-full mr-3"
                                                ></div>
                                                <span class="truncate"
                                                    >Laravel Rest API</span
                                                >
                                                <span
                                                    class="font-medium xl:ml-auto"
                                                    >31th</span
                                                >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <!-- END: Schedules -->
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
                isDarkMode === true ? 'dark-mode-switcher__toggle--active' : ''
            "
            @click="darkMode()"
        ></div>
    </div>
    <div></div>
    <!-- END: Dark Mode Switcher-->
</template>

<script>
import "boxicons";
import Chart from "chart.js/auto";

export default {
    mounted() {
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
            logo: "/img/library.png",
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
                    labels: [
                        "01",
                        "02",
                        "03",
                        "04",
                        "05",
                        "06",
                        "07",
                    ],
                    datasets: [
                        {
                            label: "สถิติการยืม รายเดือน / 2567",
                            data: [11401, 10765, 10400, 2623, 70, 1916],
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
    },
};
</script>
