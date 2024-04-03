<?php session_start(); 

   

?>
<!DOCTYPE html>

<html lang="en" class="light">
    <!-- BEGIN: Head -->
    <head>
        <meta charset="utf-8">
        <link href="../dist/images/logo.svg" rel="shortcut icon">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Midone admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
        <meta name="keywords" content="admin template, Midone Admin Template, dashboard template, flat admin template, responsive admin template, web app">
        <meta name="author" content="LEFT4CODE">
        <title>  Profile - Midone - Tailwind HTML Admin Template</title>
        <!-- BEGIN: CSS Assets-->
        <link rel="stylesheet" href="../dist/css/app.css" />
        <!-- END: CSS Assets-->
    </head>
    <!-- END: Head -->
    <body class="py-5">
        <!-- BEGIN: Mobile Menu -->
        <div class="mobile-menu md:hidden">
            <div class="mobile-menu-bar">
                <a href="" class="flex mr-auto">
                    <img alt="Midone - HTML Admin Template" class="w-6" src="../dist/images/logo.svg">
                </a>
                <a href="javascript:;" class="mobile-menu-toggler"> <i data-lucide="bar-chart-2" class="w-8 h-8 text-white transform -rotate-90"></i> </a>
            </div>
            <div class="scrollable">
                <a href="javascript:;" class="mobile-menu-toggler"> <i data-lucide="x-circle" class="w-8 h-8 text-white transform -rotate-90"></i> </a>
                <ul class="scrollable__content py-2">
                    <li>
                        <a href="javascript:;" class="menu">
                            <div class="menu__icon"> <i data-lucide="home"></i> </div>
                            <div class="menu__title"> Dashboard <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="index.html" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Overview 1 </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-dashboard-overview-2.html" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Overview 2 </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-dashboard-overview-3.html" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Overview 3 </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-dashboard-overview-4.html" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Overview 4 </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" class="menu">
                            <div class="menu__icon"> <i data-lucide="box"></i> </div>
                            <div class="menu__title"> Menu Layout <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="index.html" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Side Menu </div>
                                </a>
                            </li>
                            <li>
                                <a href="simple-menu-light-dashboard-overview-1.html" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Simple Menu </div>
                                </a>
                            </li>
                            <li>
                                <a href="top-menu-light-dashboard-overview-1.html" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Top Menu </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" class="menu">
                            <div class="menu__icon"> <i data-lucide="shopping-bag"></i> </div>
                            <div class="menu__title"> E-Commerce <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="side-menu-light-categories.html" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Categories </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-add-product.html" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Add Product </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Products <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
                                </a>
                                <ul class="">
                                    <li>
                                        <a href="side-menu-light-product-list.html" class="menu">
                                            <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                            <div class="menu__title">Product List</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="side-menu-light-product-grid.html" class="menu">
                                            <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                            <div class="menu__title">Product Grid</div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:;" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Transactions <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
                                </a>
                                <ul class="">
                                    <li>
                                        <a href="side-menu-light-transaction-list.html" class="menu">
                                            <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                            <div class="menu__title">Transaction List</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="side-menu-light-transaction-detail.html" class="menu">
                                            <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                            <div class="menu__title">Transaction Detail</div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:;" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Sellers <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
                                </a>
                                <ul class="">
                                    <li>
                                        <a href="side-menu-light-seller-list.html" class="menu">
                                            <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                            <div class="menu__title">Seller List</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="side-menu-light-seller-detail.html" class="menu">
                                            <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                            <div class="menu__title">Seller Detail</div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="side-menu-light-reviews.html" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Reviews </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="side-menu-light-inbox.html" class="menu">
                            <div class="menu__icon"> <i data-lucide="inbox"></i> </div>
                            <div class="menu__title"> Inbox </div>
                        </a>
                    </li>
                    <li>
                        <a href="side-menu-light-file-manager.html" class="menu">
                            <div class="menu__icon"> <i data-lucide="hard-drive"></i> </div>
                            <div class="menu__title"> File Manager </div>
                        </a>
                    </li>
                    <li>
                        <a href="side-menu-light-point-of-sale.html" class="menu">
                            <div class="menu__icon"> <i data-lucide="credit-card"></i> </div>
                            <div class="menu__title"> Point of Sale </div>
                        </a>
                    </li>
                    <li>
                        <a href="side-menu-light-chat.html" class="menu">
                            <div class="menu__icon"> <i data-lucide="message-square"></i> </div>
                            <div class="menu__title"> Chat </div>
                        </a>
                    </li>
                    <li>
                        <a href="side-menu-light-post.html" class="menu">
                            <div class="menu__icon"> <i data-lucide="file-text"></i> </div>
                            <div class="menu__title"> Post </div>
                        </a>
                    </li>
                    <li>
                        <a href="side-menu-light-calendar.html" class="menu">
                            <div class="menu__icon"> <i data-lucide="calendar"></i> </div>
                            <div class="menu__title"> Calendar </div>
                        </a>
                    </li>
                    <li class="menu__devider my-6"></li>
                    <li>
                        <a href="javascript:;" class="menu">
                            <div class="menu__icon"> <i data-lucide="edit"></i> </div>
                            <div class="menu__title"> Crud <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="side-menu-light-crud-data-list.html" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Data List </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-crud-form.html" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Form </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" class="menu">
                            <div class="menu__icon"> <i data-lucide="users"></i> </div>
                            <div class="menu__title"> Users <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="side-menu-light-users-layout-1.html" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Layout 1 </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-users-layout-2.html" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Layout 2 </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-users-layout-3.html" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Layout 3 </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;.html" class="menu menu--active">
                            <div class="menu__icon"> <i data-lucide="trello"></i> </div>
                            <div class="menu__title"> Profile <i data-lucide="chevron-down" class="menu__sub-icon transform rotate-180"></i> </div>
                        </a>
                        <ul class="menu__sub-open">
                            <li>
                                <a href="side-menu-light-profile-overview-1.html" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Overview 1 </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-profile-overview-2.html" class="menu menu--active">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Overview 2 </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-profile-overview-3.html" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Overview 3 </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" class="menu">
                            <div class="menu__icon"> <i data-lucide="layout"></i> </div>
                            <div class="menu__title"> Pages <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="javascript:;" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Wizards <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
                                </a>
                                <ul class="">
                                    <li>
                                        <a href="side-menu-light-wizard-layout-1.html" class="menu">
                                            <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                            <div class="menu__title">Layout 1</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="side-menu-light-wizard-layout-2.html" class="menu">
                                            <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                            <div class="menu__title">Layout 2</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="side-menu-light-wizard-layout-3.html" class="menu">
                                            <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                            <div class="menu__title">Layout 3</div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:;" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Blog <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
                                </a>
                                <ul class="">
                                    <li>
                                        <a href="side-menu-light-blog-layout-1.html" class="menu">
                                            <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                            <div class="menu__title">Layout 1</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="side-menu-light-blog-layout-2.html" class="menu">
                                            <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                            <div class="menu__title">Layout 2</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="side-menu-light-blog-layout-3.html" class="menu">
                                            <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                            <div class="menu__title">Layout 3</div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:;" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Pricing <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
                                </a>
                                <ul class="">
                                    <li>
                                        <a href="side-menu-light-pricing-layout-1.html" class="menu">
                                            <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                            <div class="menu__title">Layout 1</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="side-menu-light-pricing-layout-2.html" class="menu">
                                            <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                            <div class="menu__title">Layout 2</div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:;" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Invoice <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
                                </a>
                                <ul class="">
                                    <li>
                                        <a href="side-menu-light-invoice-layout-1.html" class="menu">
                                            <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                            <div class="menu__title">Layout 1</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="side-menu-light-invoice-layout-2.html" class="menu">
                                            <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                            <div class="menu__title">Layout 2</div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:;" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> FAQ <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
                                </a>
                                <ul class="">
                                    <li>
                                        <a href="side-menu-light-faq-layout-1.html" class="menu">
                                            <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                            <div class="menu__title">Layout 1</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="side-menu-light-faq-layout-2.html" class="menu">
                                            <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                            <div class="menu__title">Layout 2</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="side-menu-light-faq-layout-3.html" class="menu">
                                            <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                            <div class="menu__title">Layout 3</div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="login-light-login.html" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Login </div>
                                </a>
                            </li>
                            <li>
                                <a href="login-light-register.html" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Register </div>
                                </a>
                            </li>
                            <li>
                                <a href="main-light-error-page.html" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Error Page </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-update-profile.html" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Update profile </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-change-password.html" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Change Password </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu__devider my-6"></li>
                    <li>
                        <a href="javascript:;" class="menu">
                            <div class="menu__icon"> <i data-lucide="inbox"></i> </div>
                            <div class="menu__title"> Components <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="javascript:;" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Table <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
                                </a>
                                <ul class="">
                                    <li>
                                        <a href="side-menu-light-regular-table.html" class="menu">
                                            <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                            <div class="menu__title">Regular Table</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="side-menu-light-tabulator.html" class="menu">
                                            <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                            <div class="menu__title">Tabulator</div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:;" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Overlay <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
                                </a>
                                <ul class="">
                                    <li>
                                        <a href="side-menu-light-modal.html" class="menu">
                                            <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                            <div class="menu__title">Modal</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="side-menu-light-slide-over.html" class="menu">
                                            <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                            <div class="menu__title">Slide Over</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="side-menu-light-notification.html" class="menu">
                                            <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                            <div class="menu__title">Notification</div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="side-menu-light-tab.html" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Tab </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-accordion.html" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Accordion </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-button.html" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Button </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-alert.html" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Alert </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-progress-bar.html" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Progress Bar </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-tooltip.html" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Tooltip </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-dropdown.html" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Dropdown </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-typography.html" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Typography </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-icon.html" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Icon </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-loading-icon.html" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Loading Icon </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" class="menu">
                            <div class="menu__icon"> <i data-lucide="sidebar"></i> </div>
                            <div class="menu__title"> Forms <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="side-menu-light-regular-form.html" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Regular Form </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-datepicker.html" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Datepicker </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-tom-select.html" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Tom Select </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-file-upload.html" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> File Upload </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Wysiwyg Editor <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
                                </a>
                                <ul class="">
                                    <li>
                                        <a href="side-menu-light-wysiwyg-editor-classic.html" class="menu">
                                            <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                            <div class="menu__title">Classic</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="side-menu-light-wysiwyg-editor-inline.html" class="menu">
                                            <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                            <div class="menu__title">Inline</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="side-menu-light-wysiwyg-editor-balloon.html" class="menu">
                                            <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                            <div class="menu__title">Balloon</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="side-menu-light-wysiwyg-editor-balloon-block.html" class="menu">
                                            <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                            <div class="menu__title">Balloon Block</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="side-menu-light-wysiwyg-editor-document.html" class="menu">
                                            <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                            <div class="menu__title">Document</div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="side-menu-light-validation.html" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Validation </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" class="menu">
                            <div class="menu__icon"> <i data-lucide="hard-drive"></i> </div>
                            <div class="menu__title"> Widgets <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="side-menu-light-chart.html" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Chart </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-slider.html" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Slider </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-image-zoom.html" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Image Zoom </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!-- END: Mobile Menu -->
        <div class="flex mt-[4.7rem] md:mt-0">













            <?php 
            $page="profile";
            include('../menu.php'); ?>






























            <!-- BEGIN: Content -->
            <div class="content">
                <!-- BEGIN: Top Bar -->


<?php include("../header.php") ?>






























                <!-- END: Top Bar -->
                <div class="intro-y flex items-center mt-8">
                    <h2 class="text-lg font-medium mr-auto">
                        Profile Layout
                    </h2>
                </div>
                <!-- BEGIN: Profile Info -->
                <div class="intro-y box px-5 pt-5 mt-5">
                    <div class="flex flex-col lg:flex-row border-b border-slate-200/60 dark:border-darkmode-400 pb-5 -mx-5">
                        <div class="flex flex-1 px-5 items-center justify-center lg:justify-start">
                            <div class="w-20 h-20 sm:w-24 sm:h-24 flex-none lg:w-32 lg:h-32 image-fit relative">
                                <img alt="Midone - HTML Admin Template" class="rounded-full" src="../dist/images/profile-9.jpg">
                            </div>
                            <div class="ml-5">
                                <div class="w-24 sm:w-40 truncate sm:whitespace-normal font-medium text-lg"><?php echo $_SESSION['nom_user']; ?></div>
                                <div class="text-slate-500">Frontend Engineer</div>
                            </div>
                        </div>
                        <div class="mt-6 lg:mt-0 flex-1 px-5 border-l border-r border-slate-200/60 dark:border-darkmode-400 border-t lg:border-t-0 pt-5 lg:pt-0">
                            <div class="font-medium text-center lg:text-left lg:mt-3">Contact Details</div>
                            <div class="flex flex-col justify-center items-center lg:items-start mt-4">
                                <div class="truncate sm:whitespace-normal flex items-center"> <i data-lucide="mail" class="w-4 h-4 mr-2"></i> denzelwashington@left4code.com </div>
                                <div class="truncate sm:whitespace-normal flex items-center mt-3"> <i data-lucide="instagram" class="w-4 h-4 mr-2"></i> Instagram <?php echo $_SESSION['nom_user']; ?> </div>
                                <div class="truncate sm:whitespace-normal flex items-center mt-3"> <i data-lucide="twitter" class="w-4 h-4 mr-2"></i> Twitter <?php echo $_SESSION['nom_user']; ?> </div>
                            </div>
                        </div>
                        <div class="mt-6 lg:mt-0 flex-1 flex items-center justify-center px-5 border-t lg:border-0 border-slate-200/60 dark:border-darkmode-400 pt-5 lg:pt-0">
                            <div class="text-center rounded-md w-20 py-3">
                                <div class="font-medium text-primary text-xl">201</div>
                                <div class="text-slate-500">Orders</div>
                            </div>
                            <div class="text-center rounded-md w-20 py-3">
                                <div class="font-medium text-primary text-xl">1k</div>
                                <div class="text-slate-500">Purchases</div>
                            </div>
                            <div class="text-center rounded-md w-20 py-3">
                                <div class="font-medium text-primary text-xl">492</div>
                                <div class="text-slate-500">Reviews</div>
                            </div>
                        </div>
                    </div>
                    <ul class="nav nav-link-tabs flex-col sm:flex-row justify-center lg:justify-start text-center" role="tablist" >
                        <li id="profile-tab" class="nav-item" role="presentation">
                            <a href="javascript:;" class="nav-link py-4 flex items-center active" data-tw-target="#profile" aria-controls="profile" aria-selected="true" role="tab" > <i class="w-4 h-4 mr-2" data-lucide="user"></i> Profile </a>
                        </li>
                        <li id="account-tab" class="nav-item" role="presentation">
                            <a href="javascript:;" class="nav-link py-4 flex items-center" data-tw-target="#account" aria-selected="false" role="tab" > <i class="w-4 h-4 mr-2" data-lucide="shield"></i> Account </a>
                        </li>
                        <li id="change-password-tab" class="nav-item" role="presentation">
                            <a href="javascript:;" class="nav-link py-4 flex items-center" data-tw-target="#change-password" aria-selected="false" role="tab" > <i class="w-4 h-4 mr-2" data-lucide="lock"></i> Change Password </a>
                        </li>
                        <li id="settings-tab" class="nav-item" role="presentation">
                            <a href="javascript:;" class="nav-link py-4 flex items-center" data-tw-target="#settings" aria-selected="false" role="tab" > <i class="w-4 h-4 mr-2" data-lucide="settings"></i> Settings </a>
                        </li>
                    </ul>
                </div>
                <!-- END: Profile Info -->
                <div class="tab-content mt-5">
                    <div id="profile" class="tab-pane active" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="grid grid-cols-12 gap-6">
                            <!-- BEGIN: Latest Uploads -->
                            <div class="intro-y box col-span-12 lg:col-span-6">
                                <div class="flex items-center px-5 py-5 sm:py-3 border-b border-slate-200/60 dark:border-darkmode-400">
                                    <h2 class="font-medium text-base mr-auto">
                                        Latest Uploads
                                    </h2>
                                    <div class="dropdown ml-auto sm:hidden">
                                        <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false" data-tw-toggle="dropdown"> <i data-lucide="more-horizontal" class="w-5 h-5 text-slate-500"></i> </a>
                                        <div class="dropdown-menu w-40">
                                            <ul class="dropdown-content">
                                                <li> <a href="javascript:;" class="dropdown-item">All Files</a> </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <button class="btn btn-outline-secondary hidden sm:flex">All Files</button>
                                </div>
                                <div class="p-5">
                                    <div class="flex items-center">
                                        <div class="file"> <a href="" class="w-12 file__icon file__icon--directory"></a> </div>
                                        <div class="ml-4">
                                            <a class="font-medium" href="">Documentation</a> 
                                            <div class="text-slate-500 text-xs mt-0.5">40 KB</div>
                                        </div>
                                        <div class="dropdown ml-auto">
                                            <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false" data-tw-toggle="dropdown"> <i data-lucide="more-horizontal" class="w-5 h-5 text-slate-500"></i> </a>
                                            <div class="dropdown-menu w-40">
                                                <ul class="dropdown-content">
                                                    <li>
                                                        <a href="" class="dropdown-item"> <i data-lucide="users" class="w-4 h-4 mr-2"></i> Share File </a>
                                                    </li>
                                                    <li>
                                                        <a href="" class="dropdown-item"> <i data-lucide="trash" class="w-4 h-4 mr-2"></i> Delete </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex items-center mt-5">
                                        <div class="file">
                                            <a href="" class="w-12 file__icon file__icon--file">
                                                <div class="file__icon__file-name text-xs">MP3</div>
                                            </a>
                                        </div>
                                        <div class="ml-4">
                                            <a class="font-medium" href="">Celine Dion - Ashes</a> 
                                            <div class="text-slate-500 text-xs mt-0.5">40 KB</div>
                                        </div>
                                        <div class="dropdown ml-auto">
                                            <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false" data-tw-toggle="dropdown"> <i data-lucide="more-horizontal" class="w-5 h-5 text-slate-500"></i> </a>
                                            <div class="dropdown-menu w-40">
                                                <ul class="dropdown-content">
                                                    <li>
                                                        <a href="" class="dropdown-item"> <i data-lucide="users" class="w-4 h-4 mr-2"></i> Share File </a>
                                                    </li>
                                                    <li>
                                                        <a href="" class="dropdown-item"> <i data-lucide="trash" class="w-4 h-4 mr-2"></i> Delete </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex items-center mt-5">
                                        <div class="file"> <a href="" class="w-12 file__icon file__icon--empty-directory"></a> </div>
                                        <div class="ml-4">
                                            <a class="font-medium" href="">Resources</a> 
                                            <div class="text-slate-500 text-xs mt-0.5">0 KB</div>
                                        </div>
                                        <div class="dropdown ml-auto">
                                            <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false" data-tw-toggle="dropdown"> <i data-lucide="more-horizontal" class="w-5 h-5 text-slate-500"></i> </a>
                                            <div class="dropdown-menu w-40">
                                                <ul class="dropdown-content">
                                                    <li>
                                                        <a href="" class="dropdown-item"> <i data-lucide="users" class="w-4 h-4 mr-2"></i> Share File </a>
                                                    </li>
                                                    <li>
                                                        <a href="" class="dropdown-item"> <i data-lucide="trash" class="w-4 h-4 mr-2"></i> Delete </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END: Latest Uploads -->
                            <!-- BEGIN: Work In Progress -->
                            <div class="intro-y box col-span-12 lg:col-span-6">
                                <div class="flex items-center px-5 py-5 sm:py-0 border-b border-slate-200/60 dark:border-darkmode-400">
                                    <h2 class="font-medium text-base mr-auto">
                                        Work In Progress
                                    </h2>
                                    <div class="dropdown ml-auto sm:hidden">
                                        <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false" data-tw-toggle="dropdown"> <i data-lucide="more-horizontal" class="w-5 h-5 text-slate-500"></i> </a>
                                        <div class="nav nav-tabs dropdown-menu w-40" role="tablist">
                                            <ul class="dropdown-content">
                                                <li> <a id="work-in-progress-mobile-new-tab" href="javascript:;" data-tw-toggle="tab" data-tw-target="#work-in-progress-new" class="dropdown-item" role="tab" aria-controls="work-in-progress-new" aria-selected="true">New</a> </li>
                                                <li> <a id="work-in-progress-mobile-last-week-tab" href="javascript:;" data-tw-toggle="tab" data-tw-target="#work-in-progress-last-week" class="dropdown-item" role="tab" aria-selected="false">Last Week</a> </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <ul class="nav nav-link-tabs w-auto ml-auto hidden sm:flex" role="tablist" >
                                        <li id="work-in-progress-new-tab" class="nav-item" role="presentation"> <a href="javascript:;" class="nav-link py-5 active" data-tw-target="#work-in-progress-new" aria-controls="work-in-progress-new" aria-selected="true" role="tab" > New </a> </li>
                                        <li id="work-in-progress-last-week-tab" class="nav-item" role="presentation"> <a href="javascript:;" class="nav-link py-5" data-tw-target="#work-in-progress-last-week" aria-selected="false" role="tab" > Last Week </a> </li>
                                    </ul>
                                </div>
                                <div class="p-5">
                                    <div class="tab-content">
                                        <div id="work-in-progress-new" class="tab-pane active" role="tabpanel" aria-labelledby="work-in-progress-new-tab">
                                            <div>
                                                <div class="flex">
                                                    <div class="mr-auto">Pending Tasks</div>
                                                    <div>20%</div>
                                                </div>
                                                <div class="progress h-1 mt-2">
                                                    <div class="progress-bar w-1/2 bg-primary" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <div class="mt-5">
                                                <div class="flex">
                                                    <div class="mr-auto">Completed Tasks</div>
                                                    <div>2 / 20</div>
                                                </div>
                                                <div class="progress h-1 mt-2">
                                                    <div class="progress-bar w-1/4 bg-primary" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <div class="mt-5">
                                                <div class="flex">
                                                    <div class="mr-auto">Tasks In Progress</div>
                                                    <div>42</div>
                                                </div>
                                                <div class="progress h-1 mt-2">
                                                    <div class="progress-bar w-3/4 bg-primary" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <a href="" class="btn btn-secondary block w-40 mx-auto mt-5">View More Details</a> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END: Work In Progress -->
                            <!-- BEGIN: Daily Sales -->
                            <div class="intro-y box col-span-12 lg:col-span-6">
                                <div class="flex items-center px-5 py-5 sm:py-3 border-b border-slate-200/60 dark:border-darkmode-400">
                                    <h2 class="font-medium text-base mr-auto">
                                        Daily Sales
                                    </h2>
                                    <div class="dropdown ml-auto sm:hidden">
                                        <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false" data-tw-toggle="dropdown"> <i data-lucide="more-horizontal" class="w-5 h-5 text-slate-500"></i> </a>
                                        <div class="dropdown-menu w-40">
                                            <ul class="dropdown-content">
                                                <li>
                                                    <a href="javascript:;" class="dropdown-item"> <i data-lucide="file" class="w-4 h-4 mr-2"></i> Download Excel </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <button class="btn btn-outline-secondary hidden sm:flex"> <i data-lucide="file" class="w-4 h-4 mr-2"></i> Download Excel </button>
                                </div>
                                <div class="p-5">
                                    <div class="relative flex items-center">
                                        <div class="w-12 h-12 flex-none image-fit">
                                            <img alt="Midone - HTML Admin Template" class="rounded-full" src="../dist/images/profile-9.jpg">
                                        </div>
                                        <div class="ml-4 mr-auto">
                                            <a href="" class="font-medium"><?php echo $_SESSION['nom_user']; ?></a> 
                                            <div class="text-slate-500 mr-5 sm:mr-5">Bootstrap 4 HTML Admin Template</div>
                                        </div>
                                        <div class="font-medium text-slate-600 dark:text-slate-500">+$19</div>
                                    </div>
                                    <div class="relative flex items-center mt-5">
                                        <div class="w-12 h-12 flex-none image-fit">
                                            <img alt="Midone - HTML Admin Template" class="rounded-full" src="../dist/images/profile-9.jpg">
                                        </div>
                                        <div class="ml-4 mr-auto">
                                            <a href="" class="font-medium">Christian Bale</a> 
                                            <div class="text-slate-500 mr-5 sm:mr-5">Tailwind HTML Admin Template</div>
                                        </div>
                                        <div class="font-medium text-slate-600 dark:text-slate-500">+$25</div>
                                    </div>
                                    <div class="relative flex items-center mt-5">
                                        <div class="w-12 h-12 flex-none image-fit">
                                            <img alt="Midone - HTML Admin Template" class="rounded-full" src="../dist/images/profile-14.jpg">
                                        </div>
                                        <div class="ml-4 mr-auto">
                                            <a href="" class="font-medium">Robert De Niro</a> 
                                            <div class="text-slate-500 mr-5 sm:mr-5">Vuejs HTML Admin Template</div>
                                        </div>
                                        <div class="font-medium text-slate-600 dark:text-slate-500">+$21</div>
                                    </div>
                                </div>
                            </div>
                            <!-- END: Daily Sales -->
                            <!-- BEGIN: Latest Tasks -->
                            <div class="intro-y box col-span-12 lg:col-span-6">
                                <div class="flex items-center px-5 py-5 sm:py-0 border-b border-slate-200/60 dark:border-darkmode-400">
                                    <h2 class="font-medium text-base mr-auto">
                                        Latest Tasks
                                    </h2>
                                    <div class="dropdown ml-auto sm:hidden">
                                        <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false" data-tw-toggle="dropdown"> <i data-lucide="more-horizontal" class="w-5 h-5 text-slate-500"></i> </a>
                                        <div class="nav nav-tabs dropdown-menu w-40" role="tablist">
                                            <ul class="dropdown-content">
                                                <li> <a id="latest-tasks-mobile-new-tab" href="javascript:;" data-tw-toggle="tab" data-tw-target="#latest-tasks-new" class="dropdown-item" role="tab" aria-controls="latest-tasks-new" aria-selected="true">New</a> </li>
                                                <li> <a id="latest-tasks-mobile-last-week-tab" href="javascript:;" data-tw-toggle="tab" data-tw-target="#latest-tasks-last-week" class="dropdown-item" role="tab" aria-selected="false">Last Week</a> </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <ul class="nav nav-link-tabs w-auto ml-auto hidden sm:flex" role="tablist" >
                                        <li id="latest-tasks-new-tab" class="nav-item" role="presentation"> <a href="javascript:;" class="nav-link py-5 active" data-tw-target="#latest-tasks-new" aria-controls="latest-tasks-new" aria-selected="true" role="tab" > New </a> </li>
                                        <li id="latest-tasks-last-week-tab" class="nav-item" role="presentation"> <a href="javascript:;" class="nav-link py-5" data-tw-target="#latest-tasks-last-week" aria-selected="false" role="tab" > Last Week </a> </li>
                                    </ul>
                                </div>
                                <div class="p-5">
                                    <div class="tab-content">
                                        <div id="latest-tasks-new" class="tab-pane active" role="tabpanel" aria-labelledby="latest-tasks-new-tab">
                                            <div class="flex items-center">
                                                <div class="border-l-2 border-primary dark:border-primary pl-4">
                                                    <a href="" class="font-medium">Create New Campaign</a> 
                                                    <div class="text-slate-500">10:00 AM</div>
                                                </div>
                                                <div class="form-check form-switch ml-auto">
                                                    <input class="form-check-input" type="checkbox">
                                                </div>
                                            </div>
                                            <div class="flex items-center mt-5">
                                                <div class="border-l-2 border-primary dark:border-primary pl-4">
                                                    <a href="" class="font-medium">Meeting With Client</a> 
                                                    <div class="text-slate-500">02:00 PM</div>
                                                </div>
                                                <div class="form-check form-switch ml-auto">
                                                    <input class="form-check-input" type="checkbox">
                                                </div>
                                            </div>
                                            <div class="flex items-center mt-5">
                                                <div class="border-l-2 border-primary dark:border-primary pl-4">
                                                    <a href="" class="font-medium">Create New Repository</a> 
                                                    <div class="text-slate-500">04:00 PM</div>
                                                </div>
                                                <div class="form-check form-switch ml-auto">
                                                    <input class="form-check-input" type="checkbox">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END: Latest Tasks -->
                            <!-- BEGIN: New Products -->
                            <div class="intro-y box col-span-12">
                                <div class="flex items-center px-5 py-3 border-b border-slate-200/60 dark:border-darkmode-400">
                                    <h2 class="font-medium text-base mr-auto">
                                        New Products
                                    </h2>
                                    <button data-carousel="new-products" data-target="prev" class="tiny-slider-navigator btn btn-outline-secondary px-2 mr-2"> <i data-lucide="chevron-left" class="w-4 h-4"></i> </button>
                                    <button data-carousel="new-products" data-target="next" class="tiny-slider-navigator btn btn-outline-secondary px-2"> <i data-lucide="chevron-right" class="w-4 h-4"></i> </button>
                                </div>
                                <div id="new-products" class="tiny-slider py-5">
                                    <div class="px-5">
                                        <div class="flex flex-col lg:flex-row items-center pb-5">
                                            <div class="flex flex-col sm:flex-row items-center pr-5 lg:border-r border-slate-200/60 dark:border-darkmode-400">
                                                <div class="sm:mr-5">
                                                    <div class="w-20 h-20 image-fit">
                                                        <img alt="Midone - HTML Admin Template" class="rounded-full" src="../dist/images/preview-15.jpg">
                                                    </div>
                                                </div>
                                                <div class="mr-auto text-center sm:text-left mt-3 sm:mt-0">
                                                    <a href="" class="font-medium text-lg">Sony Master Series A9G</a> 
                                                    <div class="text-slate-500 mt-1 sm:mt-0">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem </div>
                                                </div>
                                            </div>
                                            <div class="w-full lg:w-auto mt-6 lg:mt-0 pt-4 lg:pt-0 flex-1 flex items-center justify-center px-5 border-t lg:border-t-0 border-slate-200/60 dark:border-darkmode-400">
                                                <div class="text-center rounded-md w-20 py-3">
                                                    <div class="font-medium text-primary text-xl">69</div>
                                                    <div class="text-slate-500">Orders</div>
                                                </div>
                                                <div class="text-center rounded-md w-20 py-3">
                                                    <div class="font-medium text-primary text-xl">50k</div>
                                                    <div class="text-slate-500">Purchases</div>
                                                </div>
                                                <div class="text-center rounded-md w-20 py-3">
                                                    <div class="font-medium text-primary text-xl">69</div>
                                                    <div class="text-slate-500">Reviews</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex flex-col sm:flex-row items-center border-t border-slate-200/60 dark:border-darkmode-400 pt-5">
                                            <div class="w-full sm:w-auto flex justify-center sm:justify-start items-center border-b sm:border-b-0 border-slate-200/60 dark:border-darkmode-400 pb-5 sm:pb-0">
                                                <div class="px-3 py-2 text-primary bg-primary/10 dark:bg-darkmode-400 dark:text-slate-300 rounded font-medium mr-3">16 May 2022</div>
                                                <div class="text-slate-500">Date of Release</div>
                                            </div>
                                            <div class="flex sm:ml-auto mt-5 sm:mt-0">
                                                <button class="btn btn-secondary w-20 ml-auto">Preview</button>
                                                <button class="btn btn-secondary w-20 ml-2">Details</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="px-5">
                                        <div class="flex flex-col lg:flex-row items-center pb-5">
                                            <div class="flex flex-col sm:flex-row items-center pr-5 lg:border-r border-slate-200/60 dark:border-darkmode-400">
                                                <div class="sm:mr-5">
                                                    <div class="w-20 h-20 image-fit">
                                                        <img alt="Midone - HTML Admin Template" class="rounded-full" src="../dist/images/preview-15.jpg">
                                                    </div>
                                                </div>
                                                <div class="mr-auto text-center sm:text-left mt-3 sm:mt-0">
                                                    <a href="" class="font-medium text-lg">Nikon Z6</a> 
                                                    <div class="text-slate-500 mt-1 sm:mt-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500</div>
                                                </div>
                                            </div>
                                            <div class="w-full lg:w-auto mt-6 lg:mt-0 pt-4 lg:pt-0 flex-1 flex items-center justify-center px-5 border-t lg:border-t-0 border-slate-200/60 dark:border-darkmode-400">
                                                <div class="text-center rounded-md w-20 py-3">
                                                    <div class="font-medium text-primary text-xl">210</div>
                                                    <div class="text-slate-500">Orders</div>
                                                </div>
                                                <div class="text-center rounded-md w-20 py-3">
                                                    <div class="font-medium text-primary text-xl">25k</div>
                                                    <div class="text-slate-500">Purchases</div>
                                                </div>
                                                <div class="text-center rounded-md w-20 py-3">
                                                    <div class="font-medium text-primary text-xl">210</div>
                                                    <div class="text-slate-500">Reviews</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex flex-col sm:flex-row items-center border-t border-slate-200/60 dark:border-darkmode-400 pt-5">
                                            <div class="w-full sm:w-auto flex justify-center sm:justify-start items-center border-b sm:border-b-0 border-slate-200/60 dark:border-darkmode-400 pb-5 sm:pb-0">
                                                <div class="px-3 py-2 text-primary bg-primary/10 dark:bg-darkmode-400 dark:text-slate-300 rounded font-medium mr-3">2 June 2022</div>
                                                <div class="text-slate-500">Date of Release</div>
                                            </div>
                                            <div class="flex sm:ml-auto mt-5 sm:mt-0">
                                                <button class="btn btn-secondary w-20 ml-auto">Preview</button>
                                                <button class="btn btn-secondary w-20 ml-2">Details</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="px-5">
                                        <div class="flex flex-col lg:flex-row items-center pb-5">
                                            <div class="flex flex-col sm:flex-row items-center pr-5 lg:border-r border-slate-200/60 dark:border-darkmode-400">
                                                <div class="sm:mr-5">
                                                    <div class="w-20 h-20 image-fit">
                                                        <img alt="Midone - HTML Admin Template" class="rounded-full" src="../dist/images/preview-14.jpg">
                                                    </div>
                                                </div>
                                                <div class="mr-auto text-center sm:text-left mt-3 sm:mt-0">
                                                    <a href="" class="font-medium text-lg">Sony Master Series A9G</a> 
                                                    <div class="text-slate-500 mt-1 sm:mt-0">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 20</div>
                                                </div>
                                            </div>
                                            <div class="w-full lg:w-auto mt-6 lg:mt-0 pt-4 lg:pt-0 flex-1 flex items-center justify-center px-5 border-t lg:border-t-0 border-slate-200/60 dark:border-darkmode-400">
                                                <div class="text-center rounded-md w-20 py-3">
                                                    <div class="font-medium text-primary text-xl">57</div>
                                                    <div class="text-slate-500">Orders</div>
                                                </div>
                                                <div class="text-center rounded-md w-20 py-3">
                                                    <div class="font-medium text-primary text-xl">148k</div>
                                                    <div class="text-slate-500">Purchases</div>
                                                </div>
                                                <div class="text-center rounded-md w-20 py-3">
                                                    <div class="font-medium text-primary text-xl">57</div>
                                                    <div class="text-slate-500">Reviews</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex flex-col sm:flex-row items-center border-t border-slate-200/60 dark:border-darkmode-400 pt-5">
                                            <div class="w-full sm:w-auto flex justify-center sm:justify-start items-center border-b sm:border-b-0 border-slate-200/60 dark:border-darkmode-400 pb-5 sm:pb-0">
                                                <div class="px-3 py-2 text-primary bg-primary/10 dark:bg-darkmode-400 dark:text-slate-300 rounded font-medium mr-3">19 May 2021</div>
                                                <div class="text-slate-500">Date of Release</div>
                                            </div>
                                            <div class="flex sm:ml-auto mt-5 sm:mt-0">
                                                <button class="btn btn-secondary w-20 ml-auto">Preview</button>
                                                <button class="btn btn-secondary w-20 ml-2">Details</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="px-5">
                                        <div class="flex flex-col lg:flex-row items-center pb-5">
                                            <div class="flex flex-col sm:flex-row items-center pr-5 lg:border-r border-slate-200/60 dark:border-darkmode-400">
                                                <div class="sm:mr-5">
                                                    <div class="w-20 h-20 image-fit">
                                                        <img alt="Midone - HTML Admin Template" class="rounded-full" src="../dist/images/preview-7.jpg">
                                                    </div>
                                                </div>
                                                <div class="mr-auto text-center sm:text-left mt-3 sm:mt-0">
                                                    <a href="" class="font-medium text-lg">Nike Air Max 270</a> 
                                                    <div class="text-slate-500 mt-1 sm:mt-0">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomi</div>
                                                </div>
                                            </div>
                                            <div class="w-full lg:w-auto mt-6 lg:mt-0 pt-4 lg:pt-0 flex-1 flex items-center justify-center px-5 border-t lg:border-t-0 border-slate-200/60 dark:border-darkmode-400">
                                                <div class="text-center rounded-md w-20 py-3">
                                                    <div class="font-medium text-primary text-xl">87</div>
                                                    <div class="text-slate-500">Orders</div>
                                                </div>
                                                <div class="text-center rounded-md w-20 py-3">
                                                    <div class="font-medium text-primary text-xl">22k</div>
                                                    <div class="text-slate-500">Purchases</div>
                                                </div>
                                                <div class="text-center rounded-md w-20 py-3">
                                                    <div class="font-medium text-primary text-xl">87</div>
                                                    <div class="text-slate-500">Reviews</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex flex-col sm:flex-row items-center border-t border-slate-200/60 dark:border-darkmode-400 pt-5">
                                            <div class="w-full sm:w-auto flex justify-center sm:justify-start items-center border-b sm:border-b-0 border-slate-200/60 dark:border-darkmode-400 pb-5 sm:pb-0">
                                                <div class="px-3 py-2 text-primary bg-primary/10 dark:bg-darkmode-400 dark:text-slate-300 rounded font-medium mr-3">4 September 2020</div>
                                                <div class="text-slate-500">Date of Release</div>
                                            </div>
                                            <div class="flex sm:ml-auto mt-5 sm:mt-0">
                                                <button class="btn btn-secondary w-20 ml-auto">Preview</button>
                                                <button class="btn btn-secondary w-20 ml-2">Details</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="px-5">
                                        <div class="flex flex-col lg:flex-row items-center pb-5">
                                            <div class="flex flex-col sm:flex-row items-center pr-5 lg:border-r border-slate-200/60 dark:border-darkmode-400">
                                                <div class="sm:mr-5">
                                                    <div class="w-20 h-20 image-fit">
                                                        <img alt="Midone - HTML Admin Template" class="rounded-full" src="../dist/images/preview-15.jpg">
                                                    </div>
                                                </div>
                                                <div class="mr-auto text-center sm:text-left mt-3 sm:mt-0">
                                                    <a href="" class="font-medium text-lg">Samsung Q90 QLED TV</a> 
                                                    <div class="text-slate-500 mt-1 sm:mt-0">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem </div>
                                                </div>
                                            </div>
                                            <div class="w-full lg:w-auto mt-6 lg:mt-0 pt-4 lg:pt-0 flex-1 flex items-center justify-center px-5 border-t lg:border-t-0 border-slate-200/60 dark:border-darkmode-400">
                                                <div class="text-center rounded-md w-20 py-3">
                                                    <div class="font-medium text-primary text-xl">114</div>
                                                    <div class="text-slate-500">Orders</div>
                                                </div>
                                                <div class="text-center rounded-md w-20 py-3">
                                                    <div class="font-medium text-primary text-xl">194k</div>
                                                    <div class="text-slate-500">Purchases</div>
                                                </div>
                                                <div class="text-center rounded-md w-20 py-3">
                                                    <div class="font-medium text-primary text-xl">114</div>
                                                    <div class="text-slate-500">Reviews</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex flex-col sm:flex-row items-center border-t border-slate-200/60 dark:border-darkmode-400 pt-5">
                                            <div class="w-full sm:w-auto flex justify-center sm:justify-start items-center border-b sm:border-b-0 border-slate-200/60 dark:border-darkmode-400 pb-5 sm:pb-0">
                                                <div class="px-3 py-2 text-primary bg-primary/10 dark:bg-darkmode-400 dark:text-slate-300 rounded font-medium mr-3">2 June 2021</div>
                                                <div class="text-slate-500">Date of Release</div>
                                            </div>
                                            <div class="flex sm:ml-auto mt-5 sm:mt-0">
                                                <button class="btn btn-secondary w-20 ml-auto">Preview</button>
                                                <button class="btn btn-secondary w-20 ml-2">Details</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END: New Products -->
                            <!-- BEGIN: New Authors -->
                            <div class="intro-y box col-span-12">
                                <div class="flex items-center px-5 py-3 border-b border-slate-200/60 dark:border-darkmode-400">
                                    <h2 class="font-medium text-base mr-auto">
                                        New Authors
                                    </h2>
                                    <button data-carousel="new-authors" data-target="prev" class="tiny-slider-navigator btn btn-outline-secondary px-2 mr-2"> <i data-lucide="chevron-left" class="w-4 h-4"></i> </button>
                                    <button data-carousel="new-authors" data-target="next" class="tiny-slider-navigator btn btn-outline-secondary px-2"> <i data-lucide="chevron-right" class="w-4 h-4"></i> </button>
                                </div>
                                <div id="new-authors" class="tiny-slider py-5">
                                    <div class="px-5">
                                        <div class="flex flex-col lg:flex-row items-center pb-5">
                                            <div class="flex-1 flex flex-col sm:flex-row items-center pr-5 lg:border-r border-slate-200/60 dark:border-darkmode-400">
                                                <div class="sm:mr-5">
                                                    <div class="w-20 h-20 image-fit">
                                                        <img alt="Midone - HTML Admin Template" class="rounded-full" src="../dist/images/profile-9.jpg">
                                                    </div>
                                                </div>
                                                <div class="mr-auto text-center sm:text-left mt-3 sm:mt-0">
                                                    <a href="" class="font-medium text-lg"><?php echo $_SESSION['nom_user']; ?></a> 
                                                    <div class="text-slate-500 mt-1 sm:mt-0">Frontend Engineer</div>
                                                </div>
                                            </div>
                                            <div class="w-full lg:w-auto mt-6 lg:mt-0 pt-4 lg:pt-0 flex-1 flex flex-col justify-center items-center lg:items-start px-5 border-t lg:border-t-0 border-slate-200/60 dark:border-darkmode-400">
                                                <div class="flex items-center">
                                                    <a href="" class="w-8 h-8 rounded-full flex items-center justify-center border mr-2 text-slate-400"> <i class="w-3 h-3 fill-current" data-lucide="facebook"></i> </a>
                                                    denzelwashington@left4code.com 
                                                </div>
                                                <div class="flex items-center mt-2">
                                                    <a href="" class="w-8 h-8 rounded-full flex items-center justify-center border mr-2 text-slate-400"> <i class="w-3 h-3 fill-current" data-lucide="twitter"></i> </a>
                                                    <?php echo $_SESSION['nom_user']; ?> 
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex flex-col sm:flex-row items-center border-t border-slate-200/60 dark:border-darkmode-400 pt-5">
                                            <div class="w-full sm:w-auto flex justify-center sm:justify-start items-center border-b sm:border-b-0 border-slate-200/60 dark:border-darkmode-400 pb-5 sm:pb-0">
                                                <div class="px-3 py-2 text-primary bg-primary/10 dark:bg-darkmode-400 dark:text-slate-300 rounded font-medium mr-3">16 May 2022</div>
                                                <div class="text-slate-500">Joined Date</div>
                                            </div>
                                            <div class="flex sm:ml-auto mt-5 sm:mt-0">
                                                <button class="btn btn-secondary w-20 ml-auto">Message</button>
                                                <button class="btn btn-secondary w-20 ml-2">Profile</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="px-5">
                                        <div class="flex flex-col lg:flex-row items-center pb-5">
                                            <div class="flex-1 flex flex-col sm:flex-row items-center pr-5 lg:border-r border-slate-200/60 dark:border-darkmode-400">
                                                <div class="sm:mr-5">
                                                    <div class="w-20 h-20 image-fit">
                                                        <img alt="Midone - HTML Admin Template" class="rounded-full" src="../dist/images/profile-9.jpg">
                                                    </div>
                                                </div>
                                                <div class="mr-auto text-center sm:text-left mt-3 sm:mt-0">
                                                    <a href="" class="font-medium text-lg">Christian Bale</a> 
                                                    <div class="text-slate-500 mt-1 sm:mt-0">Backend Engineer</div>
                                                </div>
                                            </div>
                                            <div class="w-full lg:w-auto mt-6 lg:mt-0 pt-4 lg:pt-0 flex-1 flex flex-col justify-center items-center lg:items-start px-5 border-t lg:border-t-0 border-slate-200/60 dark:border-darkmode-400">
                                                <div class="flex items-center">
                                                    <a href="" class="w-8 h-8 rounded-full flex items-center justify-center border mr-2 text-slate-400"> <i class="w-3 h-3 fill-current" data-lucide="facebook"></i> </a>
                                                    christianbale@left4code.com 
                                                </div>
                                                <div class="flex items-center mt-2">
                                                    <a href="" class="w-8 h-8 rounded-full flex items-center justify-center border mr-2 text-slate-400"> <i class="w-3 h-3 fill-current" data-lucide="twitter"></i> </a>
                                                    Christian Bale 
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex flex-col sm:flex-row items-center border-t border-slate-200/60 dark:border-darkmode-400 pt-5">
                                            <div class="w-full sm:w-auto flex justify-center sm:justify-start items-center border-b sm:border-b-0 border-slate-200/60 dark:border-darkmode-400 pb-5 sm:pb-0">
                                                <div class="px-3 py-2 text-primary bg-primary/10 dark:bg-darkmode-400 dark:text-slate-300 rounded font-medium mr-3">2 June 2022</div>
                                                <div class="text-slate-500">Joined Date</div>
                                            </div>
                                            <div class="flex sm:ml-auto mt-5 sm:mt-0">
                                                <button class="btn btn-secondary w-20 ml-auto">Message</button>
                                                <button class="btn btn-secondary w-20 ml-2">Profile</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="px-5">
                                        <div class="flex flex-col lg:flex-row items-center pb-5">
                                            <div class="flex-1 flex flex-col sm:flex-row items-center pr-5 lg:border-r border-slate-200/60 dark:border-darkmode-400">
                                                <div class="sm:mr-5">
                                                    <div class="w-20 h-20 image-fit">
                                                        <img alt="Midone - HTML Admin Template" class="rounded-full" src="../dist/images/profile-14.jpg">
                                                    </div>
                                                </div>
                                                <div class="mr-auto text-center sm:text-left mt-3 sm:mt-0">
                                                    <a href="" class="font-medium text-lg">Robert De Niro</a> 
                                                    <div class="text-slate-500 mt-1 sm:mt-0">Backend Engineer</div>
                                                </div>
                                            </div>
                                            <div class="w-full lg:w-auto mt-6 lg:mt-0 pt-4 lg:pt-0 flex-1 flex flex-col justify-center items-center lg:items-start px-5 border-t lg:border-t-0 border-slate-200/60 dark:border-darkmode-400">
                                                <div class="flex items-center">
                                                    <a href="" class="w-8 h-8 rounded-full flex items-center justify-center border mr-2 text-slate-400"> <i class="w-3 h-3 fill-current" data-lucide="facebook"></i> </a>
                                                    robertdeniro@left4code.com 
                                                </div>
                                                <div class="flex items-center mt-2">
                                                    <a href="" class="w-8 h-8 rounded-full flex items-center justify-center border mr-2 text-slate-400"> <i class="w-3 h-3 fill-current" data-lucide="twitter"></i> </a>
                                                    Robert De Niro 
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex flex-col sm:flex-row items-center border-t border-slate-200/60 dark:border-darkmode-400 pt-5">
                                            <div class="w-full sm:w-auto flex justify-center sm:justify-start items-center border-b sm:border-b-0 border-slate-200/60 dark:border-darkmode-400 pb-5 sm:pb-0">
                                                <div class="px-3 py-2 text-primary bg-primary/10 dark:bg-darkmode-400 dark:text-slate-300 rounded font-medium mr-3">19 May 2021</div>
                                                <div class="text-slate-500">Joined Date</div>
                                            </div>
                                            <div class="flex sm:ml-auto mt-5 sm:mt-0">
                                                <button class="btn btn-secondary w-20 ml-auto">Message</button>
                                                <button class="btn btn-secondary w-20 ml-2">Profile</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="px-5">
                                        <div class="flex flex-col lg:flex-row items-center pb-5">
                                            <div class="flex-1 flex flex-col sm:flex-row items-center pr-5 lg:border-r border-slate-200/60 dark:border-darkmode-400">
                                                <div class="sm:mr-5">
                                                    <div class="w-20 h-20 image-fit">
                                                        <img alt="Midone - HTML Admin Template" class="rounded-full" src="../dist/images/profile-7.jpg">
                                                    </div>
                                                </div>
                                                <div class="mr-auto text-center sm:text-left mt-3 sm:mt-0">
                                                    <a href="" class="font-medium text-lg">Leonardo DiCaprio</a> 
                                                    <div class="text-slate-500 mt-1 sm:mt-0">Frontend Engineer</div>
                                                </div>
                                            </div>
                                            <div class="w-full lg:w-auto mt-6 lg:mt-0 pt-4 lg:pt-0 flex-1 flex flex-col justify-center items-center lg:items-start px-5 border-t lg:border-t-0 border-slate-200/60 dark:border-darkmode-400">
                                                <div class="flex items-center">
                                                    <a href="" class="w-8 h-8 rounded-full flex items-center justify-center border mr-2 text-slate-400"> <i class="w-3 h-3 fill-current" data-lucide="facebook"></i> </a>
                                                    leonardodicaprio@left4code.com 
                                                </div>
                                                <div class="flex items-center mt-2">
                                                    <a href="" class="w-8 h-8 rounded-full flex items-center justify-center border mr-2 text-slate-400"> <i class="w-3 h-3 fill-current" data-lucide="twitter"></i> </a>
                                                    Leonardo DiCaprio 
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex flex-col sm:flex-row items-center border-t border-slate-200/60 dark:border-darkmode-400 pt-5">
                                            <div class="w-full sm:w-auto flex justify-center sm:justify-start items-center border-b sm:border-b-0 border-slate-200/60 dark:border-darkmode-400 pb-5 sm:pb-0">
                                                <div class="px-3 py-2 text-primary bg-primary/10 dark:bg-darkmode-400 dark:text-slate-300 rounded font-medium mr-3">4 September 2020</div>
                                                <div class="text-slate-500">Joined Date</div>
                                            </div>
                                            <div class="flex sm:ml-auto mt-5 sm:mt-0">
                                                <button class="btn btn-secondary w-20 ml-auto">Message</button>
                                                <button class="btn btn-secondary w-20 ml-2">Profile</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="px-5">
                                        <div class="flex flex-col lg:flex-row items-center pb-5">
                                            <div class="flex-1 flex flex-col sm:flex-row items-center pr-5 lg:border-r border-slate-200/60 dark:border-darkmode-400">
                                                <div class="sm:mr-5">
                                                    <div class="w-20 h-20 image-fit">
                                                        <img alt="Midone - HTML Admin Template" class="rounded-full" src="../dist/images/profile-7.jpg">
                                                    </div>
                                                </div>
                                                <div class="mr-auto text-center sm:text-left mt-3 sm:mt-0">
                                                    <a href="" class="font-medium text-lg">Brad Pitt</a> 
                                                    <div class="text-slate-500 mt-1 sm:mt-0">Backend Engineer</div>
                                                </div>
                                            </div>
                                            <div class="w-full lg:w-auto mt-6 lg:mt-0 pt-4 lg:pt-0 flex-1 flex flex-col justify-center items-center lg:items-start px-5 border-t lg:border-t-0 border-slate-200/60 dark:border-darkmode-400">
                                                <div class="flex items-center">
                                                    <a href="" class="w-8 h-8 rounded-full flex items-center justify-center border mr-2 text-slate-400"> <i class="w-3 h-3 fill-current" data-lucide="facebook"></i> </a>
                                                    bradpitt@left4code.com 
                                                </div>
                                                <div class="flex items-center mt-2">
                                                    <a href="" class="w-8 h-8 rounded-full flex items-center justify-center border mr-2 text-slate-400"> <i class="w-3 h-3 fill-current" data-lucide="twitter"></i> </a>
                                                    Brad Pitt 
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex flex-col sm:flex-row items-center border-t border-slate-200/60 dark:border-darkmode-400 pt-5">
                                            <div class="w-full sm:w-auto flex justify-center sm:justify-start items-center border-b sm:border-b-0 border-slate-200/60 dark:border-darkmode-400 pb-5 sm:pb-0">
                                                <div class="px-3 py-2 text-primary bg-primary/10 dark:bg-darkmode-400 dark:text-slate-300 rounded font-medium mr-3">2 June 2021</div>
                                                <div class="text-slate-500">Joined Date</div>
                                            </div>
                                            <div class="flex sm:ml-auto mt-5 sm:mt-0">
                                                <button class="btn btn-secondary w-20 ml-auto">Message</button>
                                                <button class="btn btn-secondary w-20 ml-2">Profile</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END: New Authors -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Content -->
        </div>
        <!-- BEGIN: Dark Mode Switcher-->
        <div data-url="side-menu-dark-profile-overview-2.html" class="dark-mode-switcher cursor-pointer shadow-md fixed bottom-0 right-0 box border rounded-full w-40 h-12 flex items-center justify-center z-50 mb-10 mr-10">
            <div class="mr-4 text-slate-600 dark:text-slate-200">Dark Mode</div>
            <div class="dark-mode-switcher__toggle border"></div>
        </div>
        <!-- END: Dark Mode Switcher-->
        
        <!-- BEGIN: JS Assets-->
        <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=["your-google-map-api"]&libraries=places"></script>
        <script src="../dist/js/app.js"></script>
        <!-- END: JS Assets-->
    </body>
</html>