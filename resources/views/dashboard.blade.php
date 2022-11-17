@extends('layout.template')
@section('content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Post-->
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-xxl">
            <!--begin::Row-->
            <div class="row g-5 g-xl-10 mb-xl-10">
                <div class="col-lg-12 col-xl-12 col-xxl-6 mb-5 mb-xl-0">
                    <!--begin::Timeline widget 3-->
                    <div class="card h-md-100">
                        <div class="card card-flush h-xl-100">
                            <!--begin::Heading-->
                            <div class="card-header rounded bgi-no-repeat bgi-size-cover bgi-position-y-top bgi-position-x-center align-items-start h-250px" style="background-image:url('{{asset('template')}}/media/svg/shapes/top-green.png" data-theme="light">
                                <!--begin::Title-->
                                <h3 class="card-title align-items-start flex-column text-white pt-15">
                                    <span class="fw-bold fs-2x mb-3">All Event</span>
                                    <div class="fs-4 text-white">
                                        <span class="opacity-75">We have</span>
                                        <span class="position-relative d-inline-block">
                                            <a href="../../demo13/dist/pages/user-profile/projects.html" class="link-white opacity-75-hover fw-bold d-block mb-1">4 tasks</a>
                                            <!--begin::Separator-->
                                            <span class="position-absolute opacity-50 bottom-0 start-0 border-2 border-body border-bottom w-100"></span>
                                            <!--end::Separator-->
                                        </span>
                                        <span class="opacity-75">to comlete</span>
                                    </div>
                                </h3>
                                <!--end::Title-->
                                <!--begin::Toolbar-->
                                <div class="card-toolbar pt-5">
                                    <!--begin::Menu-->
                                    <button class="btn btn-sm btn-icon btn-active-color-primary btn-color-white bg-white bg-opacity-25 bg-hover-opacity-100 bg-hover-white bg-active-opacity-25 w-20px h-20px" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen052.svg-->
                                        <span class="svg-icon svg-icon-4">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect x="10" y="10" width="4" height="4" rx="2" fill="currentColor"></rect>
                                                <rect x="17" y="10" width="4" height="4" rx="2" fill="currentColor"></rect>
                                                <rect x="3" y="10" width="4" height="4" rx="2" fill="currentColor"></rect>
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </button>
                                    <!--begin::Menu 2-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <div class="menu-content fs-6 text-dark fw-bold px-3 py-4">Quick Actions</div>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu separator-->
                                        <div class="separator mb-3 opacity-75"></div>
                                        <!--end::Menu separator-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">New Ticket</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">New Customer</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
                                            <!--begin::Menu item-->
                                            <a href="#" class="menu-link px-3">
                                                <span class="menu-title">New Group</span>
                                                <span class="menu-arrow"></span>
                                            </a>
                                            <!--end::Menu item-->
                                            <!--begin::Menu sub-->
                                            <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">Admin Group</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">Staff Group</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">Member Group</a>
                                                </div>
                                                <!--end::Menu item-->
                                            </div>
                                            <!--end::Menu sub-->
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">New Contact</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu separator-->
                                        <div class="separator mt-3 opacity-75"></div>
                                        <!--end::Menu separator-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <div class="menu-content px-3 py-3">
                                                <a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
                                            </div>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu 2-->
                                    <!--end::Menu-->
                                </div>
                                <!--end::Toolbar-->
                            </div>
                            <!--end::Heading-->
                            <!--begin::Body-->
                            <div class="card-body mt-n20">
                                <!--begin::Stats-->
                                <div class="mt-n20 position-relative">
                                    <!--begin::Row-->
                                    <div class="row g-3 g-lg-6">
                                        <!--begin::Col-->
                                        <div class="col-6">
                                            <!--begin::Items-->
                                            <div class="bg-gray-100 bg-opacity-70 rounded-2 px-6 py-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-30px me-5 mb-8">
                                                    <span class="symbol-label">
                                                        <!--begin::Svg Icon | path: icons/duotune/medicine/med005.svg-->
                                                        <span class="svg-icon svg-icon-1 svg-icon-primary">
                                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path opacity="0.3" d="M17.9061 13H11.2061C11.2061 12.4 10.8061 12 10.2061 12C9.60605 12 9.20605 12.4 9.20605 13H6.50606L9.20605 8.40002V4C8.60605 4 8.20605 3.6 8.20605 3C8.20605 2.4 8.60605 2 9.20605 2H15.2061C15.8061 2 16.2061 2.4 16.2061 3C16.2061 3.6 15.8061 4 15.2061 4V8.40002L17.9061 13ZM13.2061 9C12.6061 9 12.2061 9.4 12.2061 10C12.2061 10.6 12.6061 11 13.2061 11C13.8061 11 14.2061 10.6 14.2061 10C14.2061 9.4 13.8061 9 13.2061 9Z" fill="currentColor"></path>
                                                                <path d="M18.9061 22H5.40605C3.60605 22 2.40606 20 3.30606 18.4L6.40605 13H9.10605C9.10605 13.6 9.50605 14 10.106 14C10.706 14 11.106 13.6 11.106 13H17.8061L20.9061 18.4C21.9061 20 20.8061 22 18.9061 22ZM14.2061 15C13.1061 15 12.2061 15.9 12.2061 17C12.2061 18.1 13.1061 19 14.2061 19C15.3061 19 16.2061 18.1 16.2061 17C16.2061 15.9 15.3061 15 14.2061 15Z" fill="currentColor"></path>
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Stats-->
                                                <div class="m-0">
                                                    <!--begin::Number-->
                                                    <span class="text-gray-700 fw-bolder d-block fs-2qx lh-1 ls-n1 mb-1">37</span>
                                                    <!--end::Number-->
                                                    <!--begin::Desc-->
                                                    <span class="text-gray-500 fw-semibold fs-6">Courses</span>
                                                    <!--end::Desc-->
                                                </div>
                                                <!--end::Stats-->
                                            </div>
                                            <!--end::Items-->
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col-6">
                                            <!--begin::Items-->
                                            <div class="bg-gray-100 bg-opacity-70 rounded-2 px-6 py-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-30px me-5 mb-8">
                                                    <span class="symbol-label">
                                                        <!--begin::Svg Icon | path: icons/duotune/finance/fin001.svg-->
                                                        <span class="svg-icon svg-icon-1 svg-icon-primary">
                                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M20 19.725V18.725C20 18.125 19.6 17.725 19 17.725H5C4.4 17.725 4 18.125 4 18.725V19.725H3C2.4 19.725 2 20.125 2 20.725V21.725H22V20.725C22 20.125 21.6 19.725 21 19.725H20Z" fill="currentColor"></path>
                                                                <path opacity="0.3" d="M22 6.725V7.725C22 8.325 21.6 8.725 21 8.725H18C18.6 8.725 19 9.125 19 9.725C19 10.325 18.6 10.725 18 10.725V15.725C18.6 15.725 19 16.125 19 16.725V17.725H15V16.725C15 16.125 15.4 15.725 16 15.725V10.725C15.4 10.725 15 10.325 15 9.725C15 9.125 15.4 8.725 16 8.725H13C13.6 8.725 14 9.125 14 9.725C14 10.325 13.6 10.725 13 10.725V15.725C13.6 15.725 14 16.125 14 16.725V17.725H10V16.725C10 16.125 10.4 15.725 11 15.725V10.725C10.4 10.725 10 10.325 10 9.725C10 9.125 10.4 8.725 11 8.725H8C8.6 8.725 9 9.125 9 9.725C9 10.325 8.6 10.725 8 10.725V15.725C8.6 15.725 9 16.125 9 16.725V17.725H5V16.725C5 16.125 5.4 15.725 6 15.725V10.725C5.4 10.725 5 10.325 5 9.725C5 9.125 5.4 8.725 6 8.725H3C2.4 8.725 2 8.325 2 7.725V6.725L11 2.225C11.6 1.925 12.4 1.925 13.1 2.225L22 6.725ZM12 3.725C11.2 3.725 10.5 4.425 10.5 5.225C10.5 6.025 11.2 6.725 12 6.725C12.8 6.725 13.5 6.025 13.5 5.225C13.5 4.425 12.8 3.725 12 3.725Z" fill="currentColor"></path>
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Stats-->
                                                <div class="m-0">
                                                    <!--begin::Number-->
                                                    <span class="text-gray-700 fw-bolder d-block fs-2qx lh-1 ls-n1 mb-1">6</span>
                                                    <!--end::Number-->
                                                    <!--begin::Desc-->
                                                    <span class="text-gray-500 fw-semibold fs-6">Certificates</span>
                                                    <!--end::Desc-->
                                                </div>
                                                <!--end::Stats-->
                                            </div>
                                            <!--end::Items-->
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col-6">
                                            <!--begin::Items-->
                                            <div class="bg-gray-100 bg-opacity-70 rounded-2 px-6 py-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-30px me-5 mb-8">
                                                    <span class="symbol-label">
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen020.svg-->
                                                        <span class="svg-icon svg-icon-1 svg-icon-primary">
                                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M14 18V16H10V18L9 20H15L14 18Z" fill="currentColor"></path>
                                                                <path opacity="0.3" d="M20 4H17V3C17 2.4 16.6 2 16 2H8C7.4 2 7 2.4 7 3V4H4C3.4 4 3 4.4 3 5V9C3 11.2 4.8 13 7 13C8.2 14.2 8.8 14.8 10 16H14C15.2 14.8 15.8 14.2 17 13C19.2 13 21 11.2 21 9V5C21 4.4 20.6 4 20 4ZM5 9V6H7V11C5.9 11 5 10.1 5 9ZM19 9C19 10.1 18.1 11 17 11V6H19V9ZM17 21V22H7V21C7 20.4 7.4 20 8 20H16C16.6 20 17 20.4 17 21ZM10 9C9.4 9 9 8.6 9 8V5C9 4.4 9.4 4 10 4C10.6 4 11 4.4 11 5V8C11 8.6 10.6 9 10 9ZM10 13C9.4 13 9 12.6 9 12V11C9 10.4 9.4 10 10 10C10.6 10 11 10.4 11 11V12C11 12.6 10.6 13 10 13Z" fill="currentColor"></path>
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Stats-->
                                                <div class="m-0">
                                                    <!--begin::Number-->
                                                    <span class="text-gray-700 fw-bolder d-block fs-2qx lh-1 ls-n1 mb-1">4,7</span>
                                                    <!--end::Number-->
                                                    <!--begin::Desc-->
                                                    <span class="text-gray-500 fw-semibold fs-6">Avg. Score</span>
                                                    <!--end::Desc-->
                                                </div>
                                                <!--end::Stats-->
                                            </div>
                                            <!--end::Items-->
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col-6">
                                            <!--begin::Items-->
                                            <div class="bg-gray-100 bg-opacity-70 rounded-2 px-6 py-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-30px me-5 mb-8">
                                                    <span class="symbol-label">
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen013.svg-->
                                                        <span class="svg-icon svg-icon-1 svg-icon-primary">
                                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path opacity="0.3" d="M20.9 12.9C20.3 12.9 19.9 12.5 19.9 11.9C19.9 11.3 20.3 10.9 20.9 10.9H21.8C21.3 6.2 17.6 2.4 12.9 2V2.9C12.9 3.5 12.5 3.9 11.9 3.9C11.3 3.9 10.9 3.5 10.9 2.9V2C6.19999 2.5 2.4 6.2 2 10.9H2.89999C3.49999 10.9 3.89999 11.3 3.89999 11.9C3.89999 12.5 3.49999 12.9 2.89999 12.9H2C2.5 17.6 6.19999 21.4 10.9 21.8V20.9C10.9 20.3 11.3 19.9 11.9 19.9C12.5 19.9 12.9 20.3 12.9 20.9V21.8C17.6 21.3 21.4 17.6 21.8 12.9H20.9Z" fill="currentColor"></path>
                                                                <path d="M16.9 10.9H13.6C13.4 10.6 13.2 10.4 12.9 10.2V5.90002C12.9 5.30002 12.5 4.90002 11.9 4.90002C11.3 4.90002 10.9 5.30002 10.9 5.90002V10.2C10.6 10.4 10.4 10.6 10.2 10.9H9.89999C9.29999 10.9 8.89999 11.3 8.89999 11.9C8.89999 12.5 9.29999 12.9 9.89999 12.9H10.2C10.4 13.2 10.6 13.4 10.9 13.6V13.9C10.9 14.5 11.3 14.9 11.9 14.9C12.5 14.9 12.9 14.5 12.9 13.9V13.6C13.2 13.4 13.4 13.2 13.6 12.9H16.9C17.5 12.9 17.9 12.5 17.9 11.9C17.9 11.3 17.5 10.9 16.9 10.9Z" fill="currentColor"></path>
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Stats-->
                                                <div class="m-0">
                                                    <!--begin::Number-->
                                                    <span class="text-gray-700 fw-bolder d-block fs-2qx lh-1 ls-n1 mb-1">822</span>
                                                    <!--end::Number-->
                                                    <!--begin::Desc-->
                                                    <span class="text-gray-500 fw-semibold fs-6">Hours Learned</span>
                                                    <!--end::Desc-->
                                                </div>
                                                <!--end::Stats-->
                                            </div>
                                            <!--end::Items-->
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Row-->
                                </div>
                                <!--end::Stats-->
                            </div>
                            <!--end::Body-->
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-xl-12 col-xxl-6 mb-5 mb-xl-0">
                    <!--begin::Timeline widget 3-->
                    <div class="card h-md-100">
                        <!--begin::Header-->
                        <div class="card-header border-0 pt-5">
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bold text-dark">What’s up Today</span>
                                <span class="text-muted mt-1 fw-semibold fs-7">Total 10 deliveries</span>
                            </h3>
                            <!--begin::Toolbar-->
                            <div class="card-toolbar">
                                <a href="#" class="btn btn-sm btn-light">Report Cecnter</a>
                            </div>
                            <!--end::Toolbar-->
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body card-scroll pt-7 px-0">
                            <!--begin::Nav-->
                            <ul class="nav nav-stretch nav-pills nav-pills-custom nav-pills-active-custom d-flex justify-content-between mb-8 px-5">
                                <!--begin::Nav item-->
                                <li class="nav-item p-0 ms-0">
                                    <!--begin::Date-->
                                    <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px py-4 px-3 btn-active-danger" data-bs-toggle="tab" href="#kt_timeline_widget_3_tab_content_1">
                                        <span class="fs-7 fw-semibold">Room 01</span>
                                        <span class="fs-6 fw-bold">10</span>
                                    </a>
                                    <!--end::Date-->
                                </li>
                                <!--end::Nav item-->
                                <!--begin::Nav item-->
                                <li class="nav-item p-0 ms-0">
                                    <!--begin::Date-->
                                    <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px py-4 px-3 btn-active-danger" data-bs-toggle="tab" href="#kt_timeline_widget_3_tab_content_2">
                                        <span class="fs-7 fw-semibold">Room 02</span>
                                        <span class="fs-6 fw-bold">21</span>
                                    </a>
                                    <!--end::Date-->
                                </li>
                                <!--end::Nav item-->
                                <!--begin::Nav item-->
                                <li class="nav-item p-0 ms-0">
                                    <!--begin::Date-->
                                    <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px py-4 px-3 btn-active-danger" data-bs-toggle="tab" href="#kt_timeline_widget_3_tab_content_3">
                                        <span class="fs-7 fw-semibold">Room 03</span>
                                        <span class="fs-6 fw-bold">22</span>
                                    </a>
                                    <!--end::Date-->
                                </li>
                                <!--end::Nav item-->
                                <!--begin::Nav item-->
                                <li class="nav-item p-0 ms-0">
                                    <!--begin::Date-->
                                    <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px py-4 px-3 btn-active-danger active" data-bs-toggle="tab" href="#kt_timeline_widget_3_tab_content_4">
                                        <span class="fs-7 fw-semibold">Room 04</span>
                                        <span class="fs-6 fw-bold">23</span>
                                    </a>
                                    <!--end::Date-->
                                </li>
                                <!--end::Nav item-->
                                <!--begin::Nav item-->
                                <li class="nav-item p-0 ms-0">
                                    <!--begin::Date-->
                                    <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px py-4 px-3 btn-active-danger" data-bs-toggle="tab" href="#kt_timeline_widget_3_tab_content_5">
                                        <span class="fs-7 fw-semibold">Room 05</span>
                                        <span class="fs-6 fw-bold">24</span>
                                    </a>
                                    <!--end::Date-->
                                </li>
                                <!--end::Nav item-->
                                <!--begin::Nav item-->
                                <li class="nav-item p-0 ms-0">
                                    <!--begin::Date-->
                                    <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px py-4 px-3 btn-active-danger" data-bs-toggle="tab" href="#kt_timeline_widget_3_tab_content_6">
                                        <span class="fs-7 fw-semibold">Room 06</span>
                                        <span class="fs-6 fw-bold">25</span>
                                    </a>
                                    <!--end::Date-->
                                </li>
                            </ul>
                            <!--end::Nav-->
                            <!--begin::Tab Content (ishlamayabdi)-->
                            <div class="tab-content mb-2 px-9">
                                <!--begin::Tap pane-->
                                <div class="tab-pane fade" id="kt_timeline_widget_3_tab_content_1">
                                    <!--begin::Wrapper-->
                                    <div class="d-flex align-items-center mb-6">
                                        <!--begin::Bullet-->
                                        <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-success"></span>
                                        <!--end::Bullet-->
                                        <!--begin::Info-->
                                        <div class="flex-grow-1 me-5">
                                            <!--begin::Time-->
                                            <div class="text-gray-800 fw-semibold fs-2">10:20 - 11:00
                                                <span class="text-gray-400 fw-semibold fs-7">AM</span>
                                            </div>
                                            <!--end::Time-->
                                            <!--begin::Description-->
                                            <div class="text-gray-700 fw-semibold fs-6">9 Degree Project Estimation Meeting</div>
                                            <!--end::Description-->
                                            <!--begin::Link-->
                                            <div class="text-gray-400 fw-semibold fs-7">Lead by
                                                <!--begin::Name-->
                                                <a href="#" class="text-primary opacity-75-hover fw-semibold">Peter Marcus</a>
                                                <!--end::Name-->
                                            </div>
                                            <!--end::Link-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Wrapper-->
                                    <div class="d-flex align-items-center mb-6">
                                        <!--begin::Bullet-->
                                        <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-warning"></span>
                                        <!--end::Bullet-->
                                        <!--begin::Info-->
                                        <div class="flex-grow-1 me-5">
                                            <!--begin::Time-->
                                            <div class="text-gray-800 fw-semibold fs-2">12:00 - 13:40
                                                <span class="text-gray-400 fw-semibold fs-7">AM</span>
                                            </div>
                                            <!--end::Time-->
                                            <!--begin::Description-->
                                            <div class="text-gray-700 fw-semibold fs-6">Dashboard UI/UX Design Review</div>
                                            <!--end::Description-->
                                            <!--begin::Link-->
                                            <div class="text-gray-400 fw-semibold fs-7">Lead by
                                                <!--begin::Name-->
                                                <a href="#" class="text-primary opacity-75-hover fw-semibold">Lead by Bob</a>
                                                <!--end::Name-->
                                            </div>
                                            <!--end::Link-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Wrapper-->
                                    <div class="d-flex align-items-center mb-6">
                                        <!--begin::Bullet-->
                                        <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-info"></span>
                                        <!--end::Bullet-->
                                        <!--begin::Info-->
                                        <div class="flex-grow-1 me-5">
                                            <!--begin::Time-->
                                            <div class="text-gray-800 fw-semibold fs-2">16:30 - 17:00
                                                <span class="text-gray-400 fw-semibold fs-7">PM</span>
                                            </div>
                                            <!--end::Time-->
                                            <!--begin::Description-->
                                            <div class="text-gray-700 fw-semibold fs-6">Marketing Campaign Discussion</div>
                                            <!--end::Description-->
                                            <!--begin::Link-->
                                            <div class="text-gray-400 fw-semibold fs-7">Lead by
                                                <!--begin::Name-->
                                                <a href="#" class="text-primary opacity-75-hover fw-semibold">Lead by Mark Morris</a>
                                                <!--end::Name-->
                                            </div>
                                            <!--end::Link-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Tap pane-->
                                <!--begin::Tap pane-->
                                <div class="tab-pane fade" id="kt_timeline_widget_3_tab_content_2">
                                    <!--begin::Wrapper-->
                                    <div class="d-flex align-items-center mb-6">
                                        <!--begin::Bullet-->
                                        <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-warning"></span>
                                        <!--end::Bullet-->
                                        <!--begin::Info-->
                                        <div class="flex-grow-1 me-5">
                                            <!--begin::Time-->
                                            <div class="text-gray-800 fw-semibold fs-2">16:30 - 17:00
                                                <span class="text-gray-400 fw-semibold fs-7">PM</span>
                                            </div>
                                            <!--end::Time-->
                                            <!--begin::Description-->
                                            <div class="text-gray-700 fw-semibold fs-6">Marketing Campaign Discussion</div>
                                            <!--end::Description-->
                                            <!--begin::Link-->
                                            <div class="text-gray-400 fw-semibold fs-7">Lead by
                                                <!--begin::Name-->
                                                <a href="#" class="text-primary opacity-75-hover fw-semibold">Lead by Mark Morris</a>
                                                <!--end::Name-->
                                            </div>
                                            <!--end::Link-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Wrapper-->
                                    <div class="d-flex align-items-center mb-6">
                                        <!--begin::Bullet-->
                                        <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-info"></span>
                                        <!--end::Bullet-->
                                        <!--begin::Info-->
                                        <div class="flex-grow-1 me-5">
                                            <!--begin::Time-->
                                            <div class="text-gray-800 fw-semibold fs-2">12:00 - 13:40
                                                <span class="text-gray-400 fw-semibold fs-7">AM</span>
                                            </div>
                                            <!--end::Time-->
                                            <!--begin::Description-->
                                            <div class="text-gray-700 fw-semibold fs-6">9 Degree Project Estimation Meeting</div>
                                            <!--end::Description-->
                                            <!--begin::Link-->
                                            <div class="text-gray-400 fw-semibold fs-7">Lead by
                                                <!--begin::Name-->
                                                <a href="#" class="text-primary opacity-75-hover fw-semibold">Peter Marcus</a>
                                                <!--end::Name-->
                                            </div>
                                            <!--end::Link-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Wrapper-->
                                    <div class="d-flex align-items-center mb-6">
                                        <!--begin::Bullet-->
                                        <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-success"></span>
                                        <!--end::Bullet-->
                                        <!--begin::Info-->
                                        <div class="flex-grow-1 me-5">
                                            <!--begin::Time-->
                                            <div class="text-gray-800 fw-semibold fs-2">10:20 - 11:00
                                                <span class="text-gray-400 fw-semibold fs-7">AM</span>
                                            </div>
                                            <!--end::Time-->
                                            <!--begin::Description-->
                                            <div class="text-gray-700 fw-semibold fs-6">9 Degree Project Estimation Meeting</div>
                                            <!--end::Description-->
                                            <!--begin::Link-->
                                            <div class="text-gray-400 fw-semibold fs-7">Lead by
                                                <!--begin::Name-->
                                                <a href="#" class="text-primary opacity-75-hover fw-semibold">Peter Marcus</a>
                                                <!--end::Name-->
                                            </div>
                                            <!--end::Link-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Tap pane-->
                                <!--begin::Tap pane-->
                                <div class="tab-pane fade" id="kt_timeline_widget_3_tab_content_3">
                                    <!--begin::Wrapper-->
                                    <div class="d-flex align-items-center mb-6">
                                        <!--begin::Bullet-->
                                        <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-primary"></span>
                                        <!--end::Bullet-->
                                        <!--begin::Info-->
                                        <div class="flex-grow-1 me-5">
                                            <!--begin::Time-->
                                            <div class="text-gray-800 fw-semibold fs-2">10:20 - 11:00
                                                <span class="text-gray-400 fw-semibold fs-7">AM</span>
                                            </div>
                                            <!--end::Time-->
                                            <!--begin::Description-->
                                            <div class="text-gray-700 fw-semibold fs-6">9 Degree Project Estimation Meeting</div>
                                            <!--end::Description-->
                                            <!--begin::Link-->
                                            <div class="text-gray-400 fw-semibold fs-7">Lead by
                                                <!--begin::Name-->
                                                <a href="#" class="text-primary opacity-75-hover fw-semibold">Peter Marcus</a>
                                                <!--end::Name-->
                                            </div>
                                            <!--end::Link-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Wrapper-->
                                    <div class="d-flex align-items-center mb-6">
                                        <!--begin::Bullet-->
                                        <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-warning"></span>
                                        <!--end::Bullet-->
                                        <!--begin::Info-->
                                        <div class="flex-grow-1 me-5">
                                            <!--begin::Time-->
                                            <div class="text-gray-800 fw-semibold fs-2">12:00 - 13:40
                                                <span class="text-gray-400 fw-semibold fs-7">AM</span>
                                            </div>
                                            <!--end::Time-->
                                            <!--begin::Description-->
                                            <div class="text-gray-700 fw-semibold fs-6">Marketing Campaign Discussion</div>
                                            <!--end::Description-->
                                            <!--begin::Link-->
                                            <div class="text-gray-400 fw-semibold fs-7">Lead by
                                                <!--begin::Name-->
                                                <a href="#" class="text-primary opacity-75-hover fw-semibold">Lead by Bob</a>
                                                <!--end::Name-->
                                            </div>
                                            <!--end::Link-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Wrapper-->
                                    <div class="d-flex align-items-center mb-6">
                                        <!--begin::Bullet-->
                                        <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-info"></span>
                                        <!--end::Bullet-->
                                        <!--begin::Info-->
                                        <div class="flex-grow-1 me-5">
                                            <!--begin::Time-->
                                            <div class="text-gray-800 fw-semibold fs-2">16:30 - 17:00
                                                <span class="text-gray-400 fw-semibold fs-7">PM</span>
                                            </div>
                                            <!--end::Time-->
                                            <!--begin::Description-->
                                            <div class="text-gray-700 fw-semibold fs-6">Marketing Campaign Discussion</div>
                                            <!--end::Description-->
                                            <!--begin::Link-->
                                            <div class="text-gray-400 fw-semibold fs-7">Lead by
                                                <!--begin::Name-->
                                                <a href="#" class="text-primary opacity-75-hover fw-semibold">Lead by Mark Morris</a>
                                                <!--end::Name-->
                                            </div>
                                            <!--end::Link-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Tap pane-->
                                <!--begin::Tap pane-->
                                <div class="tab-pane fade show active" id="kt_timeline_widget_3_tab_content_4">
                                    <!--begin::Wrapper-->
                                    <div class="d-flex align-items-center mb-6">
                                        <!--begin::Bullet-->
                                        <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-info"></span>
                                        <!--end::Bullet-->
                                        <!--begin::Info-->
                                        <div class="flex-grow-1 me-5">
                                            <!--begin::Time-->
                                            <div class="text-gray-800 fw-semibold fs-2">10:20 - 11:00
                                                <span class="text-gray-400 fw-semibold fs-7">AM</span>
                                            </div>
                                            <!--end::Time-->
                                            <!--begin::Description-->
                                            <div class="text-gray-700 fw-semibold fs-6">9 Degree Project Estimation Meeting</div>
                                            <!--end::Description-->
                                            <!--begin::Link-->
                                            <div class="text-gray-400 fw-semibold fs-7">Lead by
                                                <!--begin::Name-->
                                                <a href="#" class="text-primary opacity-75-hover fw-semibold">Peter Marcus</a>
                                                <!--end::Name-->
                                            </div>
                                            <!--end::Link-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Wrapper-->
                                    <div class="d-flex align-items-center mb-6">
                                        <!--begin::Bullet-->
                                        <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-warning"></span>
                                        <!--end::Bullet-->
                                        <!--begin::Info-->
                                        <div class="flex-grow-1 me-5">
                                            <!--begin::Time-->
                                            <div class="text-gray-800 fw-semibold fs-2">16:30 - 17:00
                                                <span class="text-gray-400 fw-semibold fs-7">PM</span>
                                            </div>
                                            <!--end::Time-->
                                            <!--begin::Description-->
                                            <div class="text-gray-700 fw-semibold fs-6">Dashboard UI/UX Design Review</div>
                                            <!--end::Description-->
                                            <!--begin::Link-->
                                            <div class="text-gray-400 fw-semibold fs-7">Lead by
                                                <!--begin::Name-->
                                                <a href="#" class="text-primary opacity-75-hover fw-semibold">Lead by Bob</a>
                                                <!--end::Name-->
                                            </div>
                                            <!--end::Link-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Wrapper-->
                                    <div class="d-flex align-items-center mb-6">
                                        <!--begin::Bullet-->
                                        <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-success"></span>
                                        <!--end::Bullet-->
                                        <!--begin::Info-->
                                        <div class="flex-grow-1 me-5">
                                            <!--begin::Time-->
                                            <div class="text-gray-800 fw-semibold fs-2">12:00 - 13:40
                                                <span class="text-gray-400 fw-semibold fs-7">AM</span>
                                            </div>
                                            <!--end::Time-->
                                            <!--begin::Description-->
                                            <div class="text-gray-700 fw-semibold fs-6">Marketing Campaign Discussion</div>
                                            <!--end::Description-->
                                            <!--begin::Link-->
                                            <div class="text-gray-400 fw-semibold fs-7">Lead by
                                                <!--begin::Name-->
                                                <a href="#" class="text-primary opacity-75-hover fw-semibold">Lead by Mark Morris</a>
                                                <!--end::Name-->
                                            </div>
                                            <!--end::Link-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Tap pane-->
                                <!--begin::Tap pane-->
                                <div class="tab-pane fade" id="kt_timeline_widget_3_tab_content_5">
                                    <!--begin::Wrapper-->
                                    <div class="d-flex align-items-center mb-6">
                                        <!--begin::Bullet-->
                                        <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-danger"></span>
                                        <!--end::Bullet-->
                                        <!--begin::Info-->
                                        <div class="flex-grow-1 me-5">
                                            <!--begin::Time-->
                                            <div class="text-gray-800 fw-semibold fs-2">12:00 - 13:40
                                                <span class="text-gray-400 fw-semibold fs-7">AM</span>
                                            </div>
                                            <!--end::Time-->
                                            <!--begin::Description-->
                                            <div class="text-gray-700 fw-semibold fs-6">9 Dashboard UI/UX Design Review</div>
                                            <!--end::Description-->
                                            <!--begin::Link-->
                                            <div class="text-gray-400 fw-semibold fs-7">Lead by
                                                <!--begin::Name-->
                                                <a href="#" class="text-primary opacity-75-hover fw-semibold">Lead by Bob</a>
                                                <!--end::Name-->
                                            </div>
                                            <!--end::Link-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Wrapper-->
                                    <div class="d-flex align-items-center mb-6">
                                        <!--begin::Bullet-->
                                        <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-warning"></span>
                                        <!--end::Bullet-->
                                        <!--begin::Info-->
                                        <div class="flex-grow-1 me-5">
                                            <!--begin::Time-->
                                            <div class="text-gray-800 fw-semibold fs-2">10:20 - 11:00
                                                <span class="text-gray-400 fw-semibold fs-7">AM</span>
                                            </div>
                                            <!--end::Time-->
                                            <!--begin::Description-->
                                            <div class="text-gray-700 fw-semibold fs-6">9 Degree Project Estimation Meeting</div>
                                            <!--end::Description-->
                                            <!--begin::Link-->
                                            <div class="text-gray-400 fw-semibold fs-7">Lead by
                                                <!--begin::Name-->
                                                <a href="#" class="text-primary opacity-75-hover fw-semibold">Lead by Mark Morris</a>
                                                <!--end::Name-->
                                            </div>
                                            <!--end::Link-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Wrapper-->
                                    <div class="d-flex align-items-center mb-6">
                                        <!--begin::Bullet-->
                                        <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-info"></span>
                                        <!--end::Bullet-->
                                        <!--begin::Info-->
                                        <div class="flex-grow-1 me-5">
                                            <!--begin::Time-->
                                            <div class="text-gray-800 fw-semibold fs-2">16:30 - 17:00
                                                <span class="text-gray-400 fw-semibold fs-7">PM</span>
                                            </div>
                                            <!--end::Time-->
                                            <!--begin::Description-->
                                            <div class="text-gray-700 fw-semibold fs-6">Marketing Campaign Discussion</div>
                                            <!--end::Description-->
                                            <!--begin::Link-->
                                            <div class="text-gray-400 fw-semibold fs-7">Lead by
                                                <!--begin::Name-->
                                                <a href="#" class="text-primary opacity-75-hover fw-semibold">Peter Marcus</a>
                                                <!--end::Name-->
                                            </div>
                                            <!--end::Link-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Tap pane-->
                                <!--begin::Tap pane-->
                                <div class="tab-pane fade" id="kt_timeline_widget_3_tab_content_6">
                                    <!--begin::Wrapper-->
                                    <div class="d-flex align-items-center mb-6">
                                        <!--begin::Bullet-->
                                        <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-info"></span>
                                        <!--end::Bullet-->
                                        <!--begin::Info-->
                                        <div class="flex-grow-1 me-5">
                                            <!--begin::Time-->
                                            <div class="text-gray-800 fw-semibold fs-2">10:20 - 11:00
                                                <span class="text-gray-400 fw-semibold fs-7">AM</span>
                                            </div>
                                            <!--end::Time-->
                                            <!--begin::Description-->
                                            <div class="text-gray-700 fw-semibold fs-6">Marketing Campaign Discussion</div>
                                            <!--end::Description-->
                                            <!--begin::Link-->
                                            <div class="text-gray-400 fw-semibold fs-7">Lead by
                                                <!--begin::Name-->
                                                <a href="#" class="text-primary opacity-75-hover fw-semibold">Lead by Mark Morris</a>
                                                <!--end::Name-->
                                            </div>
                                            <!--end::Link-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Wrapper-->
                                    <div class="d-flex align-items-center mb-6">
                                        <!--begin::Bullet-->
                                        <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-primary"></span>
                                        <!--end::Bullet-->
                                        <!--begin::Info-->
                                        <div class="flex-grow-1 me-5">
                                            <!--begin::Time-->
                                            <div class="text-gray-800 fw-semibold fs-2">16:30 - 17:00
                                                <span class="text-gray-400 fw-semibold fs-7">PM</span>
                                            </div>
                                            <!--end::Time-->
                                            <!--begin::Description-->
                                            <div class="text-gray-700 fw-semibold fs-6">9 Degree Project Estimation Meeting</div>
                                            <!--end::Description-->
                                            <!--begin::Link-->
                                            <div class="text-gray-400 fw-semibold fs-7">Lead by
                                                <!--begin::Name-->
                                                <a href="#" class="text-primary opacity-75-hover fw-semibold">Peter Marcus</a>
                                                <!--end::Name-->
                                            </div>
                                            <!--end::Link-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Wrapper-->
                                    <div class="d-flex align-items-center mb-6">
                                        <!--begin::Bullet-->
                                        <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-warning"></span>
                                        <!--end::Bullet-->
                                        <!--begin::Info-->
                                        <div class="flex-grow-1 me-5">
                                            <!--begin::Time-->
                                            <div class="text-gray-800 fw-semibold fs-2">12:00 - 13:40
                                                <span class="text-gray-400 fw-semibold fs-7">AM</span>
                                            </div>
                                            <!--end::Time-->
                                            <!--begin::Description-->
                                            <div class="text-gray-700 fw-semibold fs-6">9 Dashboard UI/UX Design Review</div>
                                            <!--end::Description-->
                                            <!--begin::Link-->
                                            <div class="text-gray-400 fw-semibold fs-7">Lead by
                                                <!--begin::Name-->
                                                <a href="#" class="text-primary opacity-75-hover fw-semibold">Lead by Bob</a>
                                                <!--end::Name-->
                                            </div>
                                            <!--end::Link-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Tap pane-->
                                <!--begin::Tap pane-->
                                <div class="tab-pane fade" id="kt_timeline_widget_3_tab_content_7">
                                    <!--begin::Wrapper-->
                                    <div class="d-flex align-items-center mb-6">
                                        <!--begin::Bullet-->
                                        <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-warning"></span>
                                        <!--end::Bullet-->
                                        <!--begin::Info-->
                                        <div class="flex-grow-1 me-5">
                                            <!--begin::Time-->
                                            <div class="text-gray-800 fw-semibold fs-2">12:00 - 13:40
                                                <span class="text-gray-400 fw-semibold fs-7">AM</span>
                                            </div>
                                            <!--end::Time-->
                                            <!--begin::Description-->
                                            <div class="text-gray-700 fw-semibold fs-6">9 Degree Project Estimation Meeting</div>
                                            <!--end::Description-->
                                            <!--begin::Link-->
                                            <div class="text-gray-400 fw-semibold fs-7">Lead by
                                                <!--begin::Name-->
                                                <a href="#" class="text-primary opacity-75-hover fw-semibold">Lead by Bob</a>
                                                <!--end::Name-->
                                            </div>
                                            <!--end::Link-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Wrapper-->
                                    <div class="d-flex align-items-center mb-6">
                                        <!--begin::Bullet-->
                                        <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-danger"></span>
                                        <!--end::Bullet-->
                                        <!--begin::Info-->
                                        <div class="flex-grow-1 me-5">
                                            <!--begin::Time-->
                                            <div class="text-gray-800 fw-semibold fs-2">10:20 - 11:00
                                                <span class="text-gray-400 fw-semibold fs-7">AM</span>
                                            </div>
                                            <!--end::Time-->
                                            <!--begin::Description-->
                                            <div class="text-gray-700 fw-semibold fs-6">9 Dashboard UI/UX Design Review</div>
                                            <!--end::Description-->
                                            <!--begin::Link-->
                                            <div class="text-gray-400 fw-semibold fs-7">Lead by
                                                <!--begin::Name-->
                                                <a href="#" class="text-primary opacity-75-hover fw-semibold">Peter Marcus</a>
                                                <!--end::Name-->
                                            </div>
                                            <!--end::Link-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Wrapper-->
                                    <div class="d-flex align-items-center mb-6">
                                        <!--begin::Bullet-->
                                        <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-success"></span>
                                        <!--end::Bullet-->
                                        <!--begin::Info-->
                                        <div class="flex-grow-1 me-5">
                                            <!--begin::Time-->
                                            <div class="text-gray-800 fw-semibold fs-2">16:30 - 17:00
                                                <span class="text-gray-400 fw-semibold fs-7">PM</span>
                                            </div>
                                            <!--end::Time-->
                                            <!--begin::Description-->
                                            <div class="text-gray-700 fw-semibold fs-6">Marketing Campaign Discussion</div>
                                            <!--end::Description-->
                                            <!--begin::Link-->
                                            <div class="text-gray-400 fw-semibold fs-7">Lead by
                                                <!--begin::Name-->
                                                <a href="#" class="text-primary opacity-75-hover fw-semibold">Lead by Mark Morris</a>
                                                <!--end::Name-->
                                            </div>
                                            <!--end::Link-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Tap pane-->
                                <!--begin::Tap pane-->
                                <div class="tab-pane fade" id="kt_timeline_widget_3_tab_content_8">
                                    <!--begin::Wrapper-->
                                    <div class="d-flex align-items-center mb-6">
                                        <!--begin::Bullet-->
                                        <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-success"></span>
                                        <!--end::Bullet-->
                                        <!--begin::Info-->
                                        <div class="flex-grow-1 me-5">
                                            <!--begin::Time-->
                                            <div class="text-gray-800 fw-semibold fs-2">16:30 - 17:00
                                                <span class="text-gray-400 fw-semibold fs-7">PM</span>
                                            </div>
                                            <!--end::Time-->
                                            <!--begin::Description-->
                                            <div class="text-gray-700 fw-semibold fs-6">Marketing Campaign Discussion</div>
                                            <!--end::Description-->
                                            <!--begin::Link-->
                                            <div class="text-gray-400 fw-semibold fs-7">Lead by
                                                <!--begin::Name-->
                                                <a href="#" class="text-primary opacity-75-hover fw-semibold">Peter Marcus</a>
                                                <!--end::Name-->
                                            </div>
                                            <!--end::Link-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Wrapper-->
                                    <div class="d-flex align-items-center mb-6">
                                        <!--begin::Bullet-->
                                        <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-info"></span>
                                        <!--end::Bullet-->
                                        <!--begin::Info-->
                                        <div class="flex-grow-1 me-5">
                                            <!--begin::Time-->
                                            <div class="text-gray-800 fw-semibold fs-2">10:20 - 11:00
                                                <span class="text-gray-400 fw-semibold fs-7">AM</span>
                                            </div>
                                            <!--end::Time-->
                                            <!--begin::Description-->
                                            <div class="text-gray-700 fw-semibold fs-6">9 Degree Project Estimation Meeting</div>
                                            <!--end::Description-->
                                            <!--begin::Link-->
                                            <div class="text-gray-400 fw-semibold fs-7">Lead by
                                                <!--begin::Name-->
                                                <a href="#" class="text-primary opacity-75-hover fw-semibold">Lead by Mark Morris</a>
                                                <!--end::Name-->
                                            </div>
                                            <!--end::Link-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Wrapper-->
                                    <div class="d-flex align-items-center mb-6">
                                        <!--begin::Bullet-->
                                        <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-danger"></span>
                                        <!--end::Bullet-->
                                        <!--begin::Info-->
                                        <div class="flex-grow-1 me-5">
                                            <!--begin::Time-->
                                            <div class="text-gray-800 fw-semibold fs-2">12:00 - 13:40
                                                <span class="text-gray-400 fw-semibold fs-7">AM</span>
                                            </div>
                                            <!--end::Time-->
                                            <!--begin::Description-->
                                            <div class="text-gray-700 fw-semibold fs-6">9 Dashboard UI/UX Design Review</div>
                                            <!--end::Description-->
                                            <!--begin::Link-->
                                            <div class="text-gray-400 fw-semibold fs-7">Lead by
                                                <!--begin::Name-->
                                                <a href="#" class="text-primary opacity-75-hover fw-semibold">Lead by Bob</a>
                                                <!--end::Name-->
                                            </div>
                                            <!--end::Link-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Tap pane-->
                                <!--begin::Tap pane-->
                                <div class="tab-pane fade" id="kt_timeline_widget_3_tab_content_9">
                                    <!--begin::Wrapper-->
                                    <div class="d-flex align-items-center mb-6">
                                        <!--begin::Bullet-->
                                        <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-info"></span>
                                        <!--end::Bullet-->
                                        <!--begin::Info-->
                                        <div class="flex-grow-1 me-5">
                                            <!--begin::Time-->
                                            <div class="text-gray-800 fw-semibold fs-2">12:00 - 13:40
                                                <span class="text-gray-400 fw-semibold fs-7">AM</span>
                                            </div>
                                            <!--end::Time-->
                                            <!--begin::Description-->
                                            <div class="text-gray-700 fw-semibold fs-6">9 Degree Project Estimation Meeting</div>
                                            <!--end::Description-->
                                            <!--begin::Link-->
                                            <div class="text-gray-400 fw-semibold fs-7">Lead by
                                                <!--begin::Name-->
                                                <a href="#" class="text-primary opacity-75-hover fw-semibold">Lead by Bob</a>
                                                <!--end::Name-->
                                            </div>
                                            <!--end::Link-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Wrapper-->
                                    <div class="d-flex align-items-center mb-6">
                                        <!--begin::Bullet-->
                                        <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-primary"></span>
                                        <!--end::Bullet-->
                                        <!--begin::Info-->
                                        <div class="flex-grow-1 me-5">
                                            <!--begin::Time-->
                                            <div class="text-gray-800 fw-semibold fs-2">16:30 - 17:00
                                                <span class="text-gray-400 fw-semibold fs-7">PM</span>
                                            </div>
                                            <!--end::Time-->
                                            <!--begin::Description-->
                                            <div class="text-gray-700 fw-semibold fs-6">Marketing Campaign Discussion</div>
                                            <!--end::Description-->
                                            <!--begin::Link-->
                                            <div class="text-gray-400 fw-semibold fs-7">Lead by
                                                <!--begin::Name-->
                                                <a href="#" class="text-primary opacity-75-hover fw-semibold">Lead by Mark Morris</a>
                                                <!--end::Name-->
                                            </div>
                                            <!--end::Link-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Wrapper-->
                                    <div class="d-flex align-items-center mb-6">
                                        <!--begin::Bullet-->
                                        <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-success"></span>
                                        <!--end::Bullet-->
                                        <!--begin::Info-->
                                        <div class="flex-grow-1 me-5">
                                            <!--begin::Time-->
                                            <div class="text-gray-800 fw-semibold fs-2">10:20 - 11:00
                                                <span class="text-gray-400 fw-semibold fs-7">AM</span>
                                            </div>
                                            <!--end::Time-->
                                            <!--begin::Description-->
                                            <div class="text-gray-700 fw-semibold fs-6">9 Dashboard UI/UX Design Review</div>
                                            <!--end::Description-->
                                            <!--begin::Link-->
                                            <div class="text-gray-400 fw-semibold fs-7">Lead by
                                                <!--begin::Name-->
                                                <a href="#" class="text-primary opacity-75-hover fw-semibold">Peter Marcus</a>
                                                <!--end::Name-->
                                            </div>
                                            <!--end::Link-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Tap pane-->
                                <!--begin::Tap pane-->
                                <div class="tab-pane fade" id="kt_timeline_widget_3_tab_content_10">
                                    <!--begin::Wrapper-->
                                    <div class="d-flex align-items-center mb-6">
                                        <!--begin::Bullet-->
                                        <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-danger"></span>
                                        <!--end::Bullet-->
                                        <!--begin::Info-->
                                        <div class="flex-grow-1 me-5">
                                            <!--begin::Time-->
                                            <div class="text-gray-800 fw-semibold fs-2">12:00 - 13:40
                                                <span class="text-gray-400 fw-semibold fs-7">AM</span>
                                            </div>
                                            <!--end::Time-->
                                            <!--begin::Description-->
                                            <div class="text-gray-700 fw-semibold fs-6">Marketing Campaign Discussion</div>
                                            <!--end::Description-->
                                            <!--begin::Link-->
                                            <div class="text-gray-400 fw-semibold fs-7">Lead by
                                                <!--begin::Name-->
                                                <a href="#" class="text-primary opacity-75-hover fw-semibold">Peter Marcus</a>
                                                <!--end::Name-->
                                            </div>
                                            <!--end::Link-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Wrapper-->
                                    <div class="d-flex align-items-center mb-6">
                                        <!--begin::Bullet-->
                                        <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-warning"></span>
                                        <!--end::Bullet-->
                                        <!--begin::Info-->
                                        <div class="flex-grow-1 me-5">
                                            <!--begin::Time-->
                                            <div class="text-gray-800 fw-semibold fs-2">10:20 - 11:00
                                                <span class="text-gray-400 fw-semibold fs-7">AM</span>
                                            </div>
                                            <!--end::Time-->
                                            <!--begin::Description-->
                                            <div class="text-gray-700 fw-semibold fs-6">9 Dashboard UI/UX Design Review</div>
                                            <!--end::Description-->
                                            <!--begin::Link-->
                                            <div class="text-gray-400 fw-semibold fs-7">Lead by
                                                <!--begin::Name-->
                                                <a href="#" class="text-primary opacity-75-hover fw-semibold">Lead by Bob</a>
                                                <!--end::Name-->
                                            </div>
                                            <!--end::Link-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Wrapper-->
                                    <div class="d-flex align-items-center mb-6">
                                        <!--begin::Bullet-->
                                        <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-info"></span>
                                        <!--end::Bullet-->
                                        <!--begin::Info-->
                                        <div class="flex-grow-1 me-5">
                                            <!--begin::Time-->
                                            <div class="text-gray-800 fw-semibold fs-2">16:30 - 17:00
                                                <span class="text-gray-400 fw-semibold fs-7">PM</span>
                                            </div>
                                            <!--end::Time-->
                                            <!--begin::Description-->
                                            <div class="text-gray-700 fw-semibold fs-6">9 Degree Project Estimation Meeting</div>
                                            <!--end::Description-->
                                            <!--begin::Link-->
                                            <div class="text-gray-400 fw-semibold fs-7">Lead by
                                                <!--begin::Name-->
                                                <a href="#" class="text-primary opacity-75-hover fw-semibold">Lead by Mark Morris</a>
                                                <!--end::Name-->
                                            </div>
                                            <!--end::Link-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Tap pane-->
                                <!--begin::Tap pane-->
                                <div class="tab-pane fade" id="kt_timeline_widget_3_tab_content_11">
                                    <!--begin::Wrapper-->
                                    <div class="d-flex align-items-center mb-6">
                                        <!--begin::Bullet-->
                                        <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-info"></span>
                                        <!--end::Bullet-->
                                        <!--begin::Info-->
                                        <div class="flex-grow-1 me-5">
                                            <!--begin::Time-->
                                            <div class="text-gray-800 fw-semibold fs-2">16:30 - 17:00
                                                <span class="text-gray-400 fw-semibold fs-7">PM</span>
                                            </div>
                                            <!--end::Time-->
                                            <!--begin::Description-->
                                            <div class="text-gray-700 fw-semibold fs-6">9 Dashboard UI/UX Design Review</div>
                                            <!--end::Description-->
                                            <!--begin::Link-->
                                            <div class="text-gray-400 fw-semibold fs-7">Lead by
                                                <!--begin::Name-->
                                                <a href="#" class="text-primary opacity-75-hover fw-semibold">Lead by Mark Morris</a>
                                                <!--end::Name-->
                                            </div>
                                            <!--end::Link-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Wrapper-->
                                    <div class="d-flex align-items-center mb-6">
                                        <!--begin::Bullet-->
                                        <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-danger"></span>
                                        <!--end::Bullet-->
                                        <!--begin::Info-->
                                        <div class="flex-grow-1 me-5">
                                            <!--begin::Time-->
                                            <div class="text-gray-800 fw-semibold fs-2">10:20 - 11:00
                                                <span class="text-gray-400 fw-semibold fs-7">AM</span>
                                            </div>
                                            <!--end::Time-->
                                            <!--begin::Description-->
                                            <div class="text-gray-700 fw-semibold fs-6">Marketing Campaign Discussion</div>
                                            <!--end::Description-->
                                            <!--begin::Link-->
                                            <div class="text-gray-400 fw-semibold fs-7">Lead by
                                                <!--begin::Name-->
                                                <a href="#" class="text-primary opacity-75-hover fw-semibold">Peter Marcus</a>
                                                <!--end::Name-->
                                            </div>
                                            <!--end::Link-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Wrapper-->
                                    <div class="d-flex align-items-center mb-6">
                                        <!--begin::Bullet-->
                                        <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-primary"></span>
                                        <!--end::Bullet-->
                                        <!--begin::Info-->
                                        <div class="flex-grow-1 me-5">
                                            <!--begin::Time-->
                                            <div class="text-gray-800 fw-semibold fs-2">12:00 - 13:40
                                                <span class="text-gray-400 fw-semibold fs-7">AM</span>
                                            </div>
                                            <!--end::Time-->
                                            <!--begin::Description-->
                                            <div class="text-gray-700 fw-semibold fs-6">9 Degree Project Estimation Meeting</div>
                                            <!--end::Description-->
                                            <!--begin::Link-->
                                            <div class="text-gray-400 fw-semibold fs-7">Lead by
                                                <!--begin::Name-->
                                                <a href="#" class="text-primary opacity-75-hover fw-semibold">Lead by Bob</a>
                                                <!--end::Name-->
                                            </div>
                                            <!--end::Link-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Tap pane-->
                            </div>
                            <!--end::Tab Content-->
                            <!--begin::Action-->
                            <div class="float-end d-none">
                                <a href="#" class="btn btn-sm btn-light me-2" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">Add Lesson</a>
                                <a href="#" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">Call Sick for Today</a>
                            </div>
                            <!--end::Action-->
                        </div>
                        <!--end: Card Body-->
                    </div>
                    <!--end::Timeline widget 3-->
                    <!--begin::Timeline widget 3-->
                    <div class="card card-flush d-none h-md-100">
                        <!--begin::Card header-->
                        <div class="card-header mt-6">
                            <!--begin::Card title-->
                            <div class="card-title flex-column">
                                <h3 class="fw-bold mb-1">What's on the road?</h3>
                                <div class="fs-6 text-gray-400">Total 482 participants</div>
                            </div>
                            <!--end::Card title-->
                            <!--begin::Card toolbar-->
                            <div class="card-toolbar">
                                <!--begin::Select-->
                                <select name="status" data-control="select2" data-hide-search="true" class="form-select form-select-solid form-select-sm fw-bold w-100px">
                                    <option value="1" selected="selected">Options</option>
                                    <option value="2">Option 1</option>
                                    <option value="3">Option 2</option>
                                    <option value="4">Option 3</option>
                                </select>
                                <!--end::Select-->
                            </div>
                            <!--end::Card toolbar-->
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body p-0">
                            <!--begin::Dates-->
                            <ul class="nav nav-pills d-flex flex-nowrap hover-scroll-x py-2 ms-4">
                                <!--begin::Date-->
                                <li class="nav-item me-1">
                                    <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-color-active-white btn-active-danger" data-bs-toggle="tab" href="#kt_schedule_day_0">
                                        <span class="text-gray-400 fs-7 fw-semibold">Fr</span>
                                        <span class="fs-6 text-gray-800 fw-bold">20</span>
                                    </a>
                                </li>
                                <!--end::Date-->
                                <!--begin::Date-->
                                <li class="nav-item me-1">
                                    <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-color-active-white btn-active-danger" data-bs-toggle="tab" href="#kt_schedule_day_1">
                                        <span class="text-gray-400 fs-7 fw-semibold">Sa</span>
                                        <span class="fs-6 text-gray-800 fw-bold">21</span>
                                    </a>
                                </li>
                                <!--end::Date-->
                                <!--begin::Date-->
                                <li class="nav-item me-1">
                                    <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-color-active-white btn-active-danger" data-bs-toggle="tab" href="#kt_schedule_day_2">
                                        <span class="text-gray-400 fs-7 fw-semibold">Su</span>
                                        <span class="fs-6 text-gray-800 fw-bold">22</span>
                                    </a>
                                </li>
                                <!--end::Date-->
                                <!--begin::Date-->
                                <li class="nav-item me-1">
                                    <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-color-active-white btn-active-danger active" data-bs-toggle="tab" href="#kt_schedule_day_3">
                                        <span class="text-gray-400 fs-7 fw-semibold">Mo</span>
                                        <span class="fs-6 text-gray-800 fw-bold">23</span>
                                    </a>
                                </li>
                                <!--end::Date-->
                                <!--begin::Date-->
                                <li class="nav-item me-1">
                                    <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-color-active-white btn-active-danger" data-bs-toggle="tab" href="#kt_schedule_day_4">
                                        <span class="text-gray-400 fs-7 fw-semibold">Tu</span>
                                        <span class="fs-6 text-gray-800 fw-bold">24</span>
                                    </a>
                                </li>
                                <!--end::Date-->
                                <!--begin::Date-->
                                <li class="nav-item me-1">
                                    <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-color-active-white btn-active-danger" data-bs-toggle="tab" href="#kt_schedule_day_5">
                                        <span class="text-gray-400 fs-7 fw-semibold">We</span>
                                        <span class="fs-6 text-gray-800 fw-bold">25</span>
                                    </a>
                                </li>
                                <!--end::Date-->
                                <!--begin::Date-->
                                <li class="nav-item me-1">
                                    <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-color-active-white btn-active-danger" data-bs-toggle="tab" href="#kt_schedule_day_6">
                                        <span class="text-gray-400 fs-7 fw-semibold">Th</span>
                                        <span class="fs-6 text-gray-800 fw-bold">26</span>
                                    </a>
                                </li>
                                <!--end::Date-->
                                <!--begin::Date-->
                                <li class="nav-item me-1">
                                    <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-color-active-white btn-active-danger" data-bs-toggle="tab" href="#kt_schedule_day_7">
                                        <span class="text-gray-400 fs-7 fw-semibold">Fr</span>
                                        <span class="fs-6 text-gray-800 fw-bold">27</span>
                                    </a>
                                </li>
                                <!--end::Date-->
                                <!--begin::Date-->
                                <li class="nav-item me-1">
                                    <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-color-active-white btn-active-danger" data-bs-toggle="tab" href="#kt_schedule_day_8">
                                        <span class="text-gray-400 fs-7 fw-semibold">Sa</span>
                                        <span class="fs-6 text-gray-800 fw-bold">28</span>
                                    </a>
                                </li>
                                <!--end::Date-->
                                <!--begin::Date-->
                                <li class="nav-item me-1">
                                    <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-color-active-white btn-active-danger" data-bs-toggle="tab" href="#kt_schedule_day_9">
                                        <span class="text-gray-400 fs-7 fw-semibold">Su</span>
                                        <span class="fs-6 text-gray-800 fw-bold">29</span>
                                    </a>
                                </li>
                                <!--end::Date-->
                                <!--begin::Date-->
                                <li class="nav-item me-1">
                                    <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-color-active-white btn-active-danger" data-bs-toggle="tab" href="#kt_schedule_day_10">
                                        <span class="text-gray-400 fs-7 fw-semibold">Mo</span>
                                        <span class="fs-6 text-gray-800 fw-bold">30</span>
                                    </a>
                                </li>
                                <!--end::Date-->
                                <!--begin::Date-->
                                <li class="nav-item me-1">
                                    <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-color-active-white btn-active-danger" data-bs-toggle="tab" href="#kt_schedule_day_11">
                                        <span class="text-gray-400 fs-7 fw-semibold">Tu</span>
                                        <span class="fs-6 text-gray-800 fw-bold">31</span>
                                    </a>
                                </li>
                                <!--end::Date-->
                            </ul>
                            <!--end::Dates-->
                            <!--begin::Tab Content-->
                            <div class="tab-content px-9">
                                <!--begin::Day-->
                                <div id="kt_schedule_day_0" class="tab-pane fade show">
                                    <!--begin::Time-->
                                    <div class="d-flex flex-stack position-relative mt-8">
                                        <!--begin::Bar-->
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                        <!--end::Bar-->
                                        <!--begin::Info-->
                                        <div class="fw-semibold ms-5 text-gray-600">
                                            <!--begin::Time-->
                                            <div class="fs-5">14:30 - 15:30
                                                <span class="fs-7 text-gray-400 text-uppercase">pm</span>
                                            </div>
                                            <!--end::Time-->
                                            <!--begin::Title-->
                                            <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Lunch & Learn Catch Up</a>
                                            <!--end::Title-->
                                            <!--begin::User-->
                                            <div class="text-gray-400">Lead by
                                                <a href="#">Walter White</a>
                                            </div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Time-->
                                    <!--begin::Time-->
                                    <div class="d-flex flex-stack position-relative mt-8">
                                        <!--begin::Bar-->
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                        <!--end::Bar-->
                                        <!--begin::Info-->
                                        <div class="fw-semibold ms-5 text-gray-600">
                                            <!--begin::Time-->
                                            <div class="fs-5">9:00 - 10:00
                                                <span class="fs-7 text-gray-400 text-uppercase">am</span>
                                            </div>
                                            <!--end::Time-->
                                            <!--begin::Title-->
                                            <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Weekly Team Stand-Up</a>
                                            <!--end::Title-->
                                            <!--begin::User-->
                                            <div class="text-gray-400">Lead by
                                                <a href="#">Michael Walters</a>
                                            </div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Time-->
                                    <!--begin::Time-->
                                    <div class="d-flex flex-stack position-relative mt-8">
                                        <!--begin::Bar-->
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                        <!--end::Bar-->
                                        <!--begin::Info-->
                                        <div class="fw-semibold ms-5 text-gray-600">
                                            <!--begin::Time-->
                                            <div class="fs-5">13:00 - 14:00
                                                <span class="fs-7 text-gray-400 text-uppercase">pm</span>
                                            </div>
                                            <!--end::Time-->
                                            <!--begin::Title-->
                                            <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Creative Content Initiative</a>
                                            <!--end::Title-->
                                            <!--begin::User-->
                                            <div class="text-gray-400">Lead by
                                                <a href="#">Sean Bean</a>
                                            </div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Time-->
                                </div>
                                <!--end::Day-->
                                <!--begin::Day-->
                                <div id="kt_schedule_day_1" class="tab-pane fade show active">
                                    <!--begin::Time-->
                                    <div class="d-flex flex-stack position-relative mt-8">
                                        <!--begin::Bar-->
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                        <!--end::Bar-->
                                        <!--begin::Info-->
                                        <div class="fw-semibold ms-5 text-gray-600">
                                            <!--begin::Time-->
                                            <div class="fs-5">12:00 - 13:00
                                                <span class="fs-7 text-gray-400 text-uppercase">pm</span>
                                            </div>
                                            <!--end::Time-->
                                            <!--begin::Title-->
                                            <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Sales Pitch Proposal</a>
                                            <!--end::Title-->
                                            <!--begin::User-->
                                            <div class="text-gray-400">Lead by
                                                <a href="#">Kendell Trevor</a>
                                            </div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Time-->
                                    <!--begin::Time-->
                                    <div class="d-flex flex-stack position-relative mt-8">
                                        <!--begin::Bar-->
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                        <!--end::Bar-->
                                        <!--begin::Info-->
                                        <div class="fw-semibold ms-5 text-gray-600">
                                            <!--begin::Time-->
                                            <div class="fs-5">12:00 - 13:00
                                                <span class="fs-7 text-gray-400 text-uppercase">pm</span>
                                            </div>
                                            <!--end::Time-->
                                            <!--begin::Title-->
                                            <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Team Backlog Grooming Session</a>
                                            <!--end::Title-->
                                            <!--begin::User-->
                                            <div class="text-gray-400">Lead by
                                                <a href="#">Michael Walters</a>
                                            </div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Time-->
                                    <!--begin::Time-->
                                    <div class="d-flex flex-stack position-relative mt-8">
                                        <!--begin::Bar-->
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                        <!--end::Bar-->
                                        <!--begin::Info-->
                                        <div class="fw-semibold ms-5 text-gray-600">
                                            <!--begin::Time-->
                                            <div class="fs-5">13:00 - 14:00
                                                <span class="fs-7 text-gray-400 text-uppercase">pm</span>
                                            </div>
                                            <!--end::Time-->
                                            <!--begin::Title-->
                                            <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Committee Review Approvals</a>
                                            <!--end::Title-->
                                            <!--begin::User-->
                                            <div class="text-gray-400">Lead by
                                                <a href="#">Terry Robins</a>
                                            </div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Time-->
                                </div>
                                <!--end::Day-->
                                <!--begin::Day-->
                                <div id="kt_schedule_day_2" class="tab-pane fade show">
                                    <!--begin::Time-->
                                    <div class="d-flex flex-stack position-relative mt-8">
                                        <!--begin::Bar-->
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                        <!--end::Bar-->
                                        <!--begin::Info-->
                                        <div class="fw-semibold ms-5 text-gray-600">
                                            <!--begin::Time-->
                                            <div class="fs-5">12:00 - 13:00
                                                <span class="fs-7 text-gray-400 text-uppercase">pm</span>
                                            </div>
                                            <!--end::Time-->
                                            <!--begin::Title-->
                                            <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Weekly Team Stand-Up</a>
                                            <!--end::Title-->
                                            <!--begin::User-->
                                            <div class="text-gray-400">Lead by
                                                <a href="#">Caleb Donaldson</a>
                                            </div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Time-->
                                    <!--begin::Time-->
                                    <div class="d-flex flex-stack position-relative mt-8">
                                        <!--begin::Bar-->
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                        <!--end::Bar-->
                                        <!--begin::Info-->
                                        <div class="fw-semibold ms-5 text-gray-600">
                                            <!--begin::Time-->
                                            <div class="fs-5">16:30 - 17:30
                                                <span class="fs-7 text-gray-400 text-uppercase">pm</span>
                                            </div>
                                            <!--end::Time-->
                                            <!--begin::Title-->
                                            <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Dashboard UI/UX Design Review</a>
                                            <!--end::Title-->
                                            <!--begin::User-->
                                            <div class="text-gray-400">Lead by
                                                <a href="#">Peter Marcus</a>
                                            </div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Time-->
                                    <!--begin::Time-->
                                    <div class="d-flex flex-stack position-relative mt-8">
                                        <!--begin::Bar-->
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                        <!--end::Bar-->
                                        <!--begin::Info-->
                                        <div class="fw-semibold ms-5 text-gray-600">
                                            <!--begin::Time-->
                                            <div class="fs-5">12:00 - 13:00
                                                <span class="fs-7 text-gray-400 text-uppercase">pm</span>
                                            </div>
                                            <!--end::Time-->
                                            <!--begin::Title-->
                                            <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Lunch & Learn Catch Up</a>
                                            <!--end::Title-->
                                            <!--begin::User-->
                                            <div class="text-gray-400">Lead by
                                                <a href="#">Terry Robins</a>
                                            </div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Time-->
                                </div>
                                <!--end::Day-->
                                <!--begin::Day-->
                                <div id="kt_schedule_day_3" class="tab-pane fade show">
                                    <!--begin::Time-->
                                    <div class="d-flex flex-stack position-relative mt-8">
                                        <!--begin::Bar-->
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                        <!--end::Bar-->
                                        <!--begin::Info-->
                                        <div class="fw-semibold ms-5 text-gray-600">
                                            <!--begin::Time-->
                                            <div class="fs-5">12:00 - 13:00
                                                <span class="fs-7 text-gray-400 text-uppercase">pm</span>
                                            </div>
                                            <!--end::Time-->
                                            <!--begin::Title-->
                                            <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Project Review & Testing</a>
                                            <!--end::Title-->
                                            <!--begin::User-->
                                            <div class="text-gray-400">Lead by
                                                <a href="#">Bob Harris</a>
                                            </div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Time-->
                                    <!--begin::Time-->
                                    <div class="d-flex flex-stack position-relative mt-8">
                                        <!--begin::Bar-->
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                        <!--end::Bar-->
                                        <!--begin::Info-->
                                        <div class="fw-semibold ms-5 text-gray-600">
                                            <!--begin::Time-->
                                            <div class="fs-5">9:00 - 10:00
                                                <span class="fs-7 text-gray-400 text-uppercase">am</span>
                                            </div>
                                            <!--end::Time-->
                                            <!--begin::Title-->
                                            <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">9 Degree Project Estimation Meeting</a>
                                            <!--end::Title-->
                                            <!--begin::User-->
                                            <div class="text-gray-400">Lead by
                                                <a href="#">Peter Marcus</a>
                                            </div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Time-->
                                    <!--begin::Time-->
                                    <div class="d-flex flex-stack position-relative mt-8">
                                        <!--begin::Bar-->
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                        <!--end::Bar-->
                                        <!--begin::Info-->
                                        <div class="fw-semibold ms-5 text-gray-600">
                                            <!--begin::Time-->
                                            <div class="fs-5">9:00 - 10:00
                                                <span class="fs-7 text-gray-400 text-uppercase">am</span>
                                            </div>
                                            <!--end::Time-->
                                            <!--begin::Title-->
                                            <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Project Review & Testing</a>
                                            <!--end::Title-->
                                            <!--begin::User-->
                                            <div class="text-gray-400">Lead by
                                                <a href="#">Mark Randall</a>
                                            </div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Time-->
                                </div>
                                <!--end::Day-->
                                <!--begin::Day-->
                                <div id="kt_schedule_day_4" class="tab-pane fade show">
                                    <!--begin::Time-->
                                    <div class="d-flex flex-stack position-relative mt-8">
                                        <!--begin::Bar-->
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                        <!--end::Bar-->
                                        <!--begin::Info-->
                                        <div class="fw-semibold ms-5 text-gray-600">
                                            <!--begin::Time-->
                                            <div class="fs-5">9:00 - 10:00
                                                <span class="fs-7 text-gray-400 text-uppercase">am</span>
                                            </div>
                                            <!--end::Time-->
                                            <!--begin::Title-->
                                            <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Committee Review Approvals</a>
                                            <!--end::Title-->
                                            <!--begin::User-->
                                            <div class="text-gray-400">Lead by
                                                <a href="#">Bob Harris</a>
                                            </div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Time-->
                                    <!--begin::Time-->
                                    <div class="d-flex flex-stack position-relative mt-8">
                                        <!--begin::Bar-->
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                        <!--end::Bar-->
                                        <!--begin::Info-->
                                        <div class="fw-semibold ms-5 text-gray-600">
                                            <!--begin::Time-->
                                            <div class="fs-5">9:00 - 10:00
                                                <span class="fs-7 text-gray-400 text-uppercase">am</span>
                                            </div>
                                            <!--end::Time-->
                                            <!--begin::Title-->
                                            <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Creative Content Initiative</a>
                                            <!--end::Title-->
                                            <!--begin::User-->
                                            <div class="text-gray-400">Lead by
                                                <a href="#">Michael Walters</a>
                                            </div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Time-->
                                    <!--begin::Time-->
                                    <div class="d-flex flex-stack position-relative mt-8">
                                        <!--begin::Bar-->
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                        <!--end::Bar-->
                                        <!--begin::Info-->
                                        <div class="fw-semibold ms-5 text-gray-600">
                                            <!--begin::Time-->
                                            <div class="fs-5">16:30 - 17:30
                                                <span class="fs-7 text-gray-400 text-uppercase">pm</span>
                                            </div>
                                            <!--end::Time-->
                                            <!--begin::Title-->
                                            <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Team Backlog Grooming Session</a>
                                            <!--end::Title-->
                                            <!--begin::User-->
                                            <div class="text-gray-400">Lead by
                                                <a href="#">Terry Robins</a>
                                            </div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Time-->
                                </div>
                                <!--end::Day-->
                                <!--begin::Day-->
                                <div id="kt_schedule_day_5" class="tab-pane fade show">
                                    <!--begin::Time-->
                                    <div class="d-flex flex-stack position-relative mt-8">
                                        <!--begin::Bar-->
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                        <!--end::Bar-->
                                        <!--begin::Info-->
                                        <div class="fw-semibold ms-5 text-gray-600">
                                            <!--begin::Time-->
                                            <div class="fs-5">9:00 - 10:00
                                                <span class="fs-7 text-gray-400 text-uppercase">am</span>
                                            </div>
                                            <!--end::Time-->
                                            <!--begin::Title-->
                                            <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Marketing Campaign Discussion</a>
                                            <!--end::Title-->
                                            <!--begin::User-->
                                            <div class="text-gray-400">Lead by
                                                <a href="#">Michael Walters</a>
                                            </div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Time-->
                                    <!--begin::Time-->
                                    <div class="d-flex flex-stack position-relative mt-8">
                                        <!--begin::Bar-->
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                        <!--end::Bar-->
                                        <!--begin::Info-->
                                        <div class="fw-semibold ms-5 text-gray-600">
                                            <!--begin::Time-->
                                            <div class="fs-5">9:00 - 10:00
                                                <span class="fs-7 text-gray-400 text-uppercase">am</span>
                                            </div>
                                            <!--end::Time-->
                                            <!--begin::Title-->
                                            <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Lunch & Learn Catch Up</a>
                                            <!--end::Title-->
                                            <!--begin::User-->
                                            <div class="text-gray-400">Lead by
                                                <a href="#">Bob Harris</a>
                                            </div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Time-->
                                    <!--begin::Time-->
                                    <div class="d-flex flex-stack position-relative mt-8">
                                        <!--begin::Bar-->
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                        <!--end::Bar-->
                                        <!--begin::Info-->
                                        <div class="fw-semibold ms-5 text-gray-600">
                                            <!--begin::Time-->
                                            <div class="fs-5">12:00 - 13:00
                                                <span class="fs-7 text-gray-400 text-uppercase">pm</span>
                                            </div>
                                            <!--end::Time-->
                                            <!--begin::Title-->
                                            <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Weekly Team Stand-Up</a>
                                            <!--end::Title-->
                                            <!--begin::User-->
                                            <div class="text-gray-400">Lead by
                                                <a href="#">Yannis Gloverson</a>
                                            </div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Time-->
                                </div>
                                <!--end::Day-->
                                <!--begin::Day-->
                                <div id="kt_schedule_day_6" class="tab-pane fade show">
                                    <!--begin::Time-->
                                    <div class="d-flex flex-stack position-relative mt-8">
                                        <!--begin::Bar-->
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                        <!--end::Bar-->
                                        <!--begin::Info-->
                                        <div class="fw-semibold ms-5 text-gray-600">
                                            <!--begin::Time-->
                                            <div class="fs-5">9:00 - 10:00
                                                <span class="fs-7 text-gray-400 text-uppercase">am</span>
                                            </div>
                                            <!--end::Time-->
                                            <!--begin::Title-->
                                            <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Dashboard UI/UX Design Review</a>
                                            <!--end::Title-->
                                            <!--begin::User-->
                                            <div class="text-gray-400">Lead by
                                                <a href="#">Sean Bean</a>
                                            </div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Time-->
                                    <!--begin::Time-->
                                    <div class="d-flex flex-stack position-relative mt-8">
                                        <!--begin::Bar-->
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                        <!--end::Bar-->
                                        <!--begin::Info-->
                                        <div class="fw-semibold ms-5 text-gray-600">
                                            <!--begin::Time-->
                                            <div class="fs-5">9:00 - 10:00
                                                <span class="fs-7 text-gray-400 text-uppercase">am</span>
                                            </div>
                                            <!--end::Time-->
                                            <!--begin::Title-->
                                            <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Weekly Team Stand-Up</a>
                                            <!--end::Title-->
                                            <!--begin::User-->
                                            <div class="text-gray-400">Lead by
                                                <a href="#">Kendell Trevor</a>
                                            </div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Time-->
                                    <!--begin::Time-->
                                    <div class="d-flex flex-stack position-relative mt-8">
                                        <!--begin::Bar-->
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                        <!--end::Bar-->
                                        <!--begin::Info-->
                                        <div class="fw-semibold ms-5 text-gray-600">
                                            <!--begin::Time-->
                                            <div class="fs-5">12:00 - 13:00
                                                <span class="fs-7 text-gray-400 text-uppercase">pm</span>
                                            </div>
                                            <!--end::Time-->
                                            <!--begin::Title-->
                                            <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Committee Review Approvals</a>
                                            <!--end::Title-->
                                            <!--begin::User-->
                                            <div class="text-gray-400">Lead by
                                                <a href="#">Terry Robins</a>
                                            </div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Time-->
                                </div>
                                <!--end::Day-->
                                <!--begin::Day-->
                                <div id="kt_schedule_day_7" class="tab-pane fade show">
                                    <!--begin::Time-->
                                    <div class="d-flex flex-stack position-relative mt-8">
                                        <!--begin::Bar-->
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                        <!--end::Bar-->
                                        <!--begin::Info-->
                                        <div class="fw-semibold ms-5 text-gray-600">
                                            <!--begin::Time-->
                                            <div class="fs-5">11:00 - 11:45
                                                <span class="fs-7 text-gray-400 text-uppercase">am</span>
                                            </div>
                                            <!--end::Time-->
                                            <!--begin::Title-->
                                            <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Sales Pitch Proposal</a>
                                            <!--end::Title-->
                                            <!--begin::User-->
                                            <div class="text-gray-400">Lead by
                                                <a href="#">Kendell Trevor</a>
                                            </div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Time-->
                                    <!--begin::Time-->
                                    <div class="d-flex flex-stack position-relative mt-8">
                                        <!--begin::Bar-->
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                        <!--end::Bar-->
                                        <!--begin::Info-->
                                        <div class="fw-semibold ms-5 text-gray-600">
                                            <!--begin::Time-->
                                            <div class="fs-5">10:00 - 11:00
                                                <span class="fs-7 text-gray-400 text-uppercase">am</span>
                                            </div>
                                            <!--end::Time-->
                                            <!--begin::Title-->
                                            <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Creative Content Initiative</a>
                                            <!--end::Title-->
                                            <!--begin::User-->
                                            <div class="text-gray-400">Lead by
                                                <a href="#">Peter Marcus</a>
                                            </div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Time-->
                                    <!--begin::Time-->
                                    <div class="d-flex flex-stack position-relative mt-8">
                                        <!--begin::Bar-->
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                        <!--end::Bar-->
                                        <!--begin::Info-->
                                        <div class="fw-semibold ms-5 text-gray-600">
                                            <!--begin::Time-->
                                            <div class="fs-5">11:00 - 11:45
                                                <span class="fs-7 text-gray-400 text-uppercase">am</span>
                                            </div>
                                            <!--end::Time-->
                                            <!--begin::Title-->
                                            <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Development Team Capacity Review</a>
                                            <!--end::Title-->
                                            <!--begin::User-->
                                            <div class="text-gray-400">Lead by
                                                <a href="#">Kendell Trevor</a>
                                            </div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Time-->
                                </div>
                                <!--end::Day-->
                                <!--begin::Day-->
                                <div id="kt_schedule_day_8" class="tab-pane fade show">
                                    <!--begin::Time-->
                                    <div class="d-flex flex-stack position-relative mt-8">
                                        <!--begin::Bar-->
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                        <!--end::Bar-->
                                        <!--begin::Info-->
                                        <div class="fw-semibold ms-5 text-gray-600">
                                            <!--begin::Time-->
                                            <div class="fs-5">14:30 - 15:30
                                                <span class="fs-7 text-gray-400 text-uppercase">pm</span>
                                            </div>
                                            <!--end::Time-->
                                            <!--begin::Title-->
                                            <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Marketing Campaign Discussion</a>
                                            <!--end::Title-->
                                            <!--begin::User-->
                                            <div class="text-gray-400">Lead by
                                                <a href="#">Kendell Trevor</a>
                                            </div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Time-->
                                    <!--begin::Time-->
                                    <div class="d-flex flex-stack position-relative mt-8">
                                        <!--begin::Bar-->
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                        <!--end::Bar-->
                                        <!--begin::Info-->
                                        <div class="fw-semibold ms-5 text-gray-600">
                                            <!--begin::Time-->
                                            <div class="fs-5">16:30 - 17:30
                                                <span class="fs-7 text-gray-400 text-uppercase">pm</span>
                                            </div>
                                            <!--end::Time-->
                                            <!--begin::Title-->
                                            <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Development Team Capacity Review</a>
                                            <!--end::Title-->
                                            <!--begin::User-->
                                            <div class="text-gray-400">Lead by
                                                <a href="#">Kendell Trevor</a>
                                            </div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Time-->
                                    <!--begin::Time-->
                                    <div class="d-flex flex-stack position-relative mt-8">
                                        <!--begin::Bar-->
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                        <!--end::Bar-->
                                        <!--begin::Info-->
                                        <div class="fw-semibold ms-5 text-gray-600">
                                            <!--begin::Time-->
                                            <div class="fs-5">12:00 - 13:00
                                                <span class="fs-7 text-gray-400 text-uppercase">pm</span>
                                            </div>
                                            <!--end::Time-->
                                            <!--begin::Title-->
                                            <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Committee Review Approvals</a>
                                            <!--end::Title-->
                                            <!--begin::User-->
                                            <div class="text-gray-400">Lead by
                                                <a href="#">Michael Walters</a>
                                            </div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Time-->
                                </div>
                                <!--end::Day-->
                                <!--begin::Day-->
                                <div id="kt_schedule_day_9" class="tab-pane fade show">
                                    <!--begin::Time-->
                                    <div class="d-flex flex-stack position-relative mt-8">
                                        <!--begin::Bar-->
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                        <!--end::Bar-->
                                        <!--begin::Info-->
                                        <div class="fw-semibold ms-5 text-gray-600">
                                            <!--begin::Time-->
                                            <div class="fs-5">12:00 - 13:00
                                                <span class="fs-7 text-gray-400 text-uppercase">pm</span>
                                            </div>
                                            <!--end::Time-->
                                            <!--begin::Title-->
                                            <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Creative Content Initiative</a>
                                            <!--end::Title-->
                                            <!--begin::User-->
                                            <div class="text-gray-400">Lead by
                                                <a href="#">Mark Randall</a>
                                            </div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Time-->
                                    <!--begin::Time-->
                                    <div class="d-flex flex-stack position-relative mt-8">
                                        <!--begin::Bar-->
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                        <!--end::Bar-->
                                        <!--begin::Info-->
                                        <div class="fw-semibold ms-5 text-gray-600">
                                            <!--begin::Time-->
                                            <div class="fs-5">14:30 - 15:30
                                                <span class="fs-7 text-gray-400 text-uppercase">pm</span>
                                            </div>
                                            <!--end::Time-->
                                            <!--begin::Title-->
                                            <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Creative Content Initiative</a>
                                            <!--end::Title-->
                                            <!--begin::User-->
                                            <div class="text-gray-400">Lead by
                                                <a href="#">Mark Randall</a>
                                            </div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Time-->
                                    <!--begin::Time-->
                                    <div class="d-flex flex-stack position-relative mt-8">
                                        <!--begin::Bar-->
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                        <!--end::Bar-->
                                        <!--begin::Info-->
                                        <div class="fw-semibold ms-5 text-gray-600">
                                            <!--begin::Time-->
                                            <div class="fs-5">9:00 - 10:00
                                                <span class="fs-7 text-gray-400 text-uppercase">am</span>
                                            </div>
                                            <!--end::Time-->
                                            <!--begin::Title-->
                                            <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">9 Degree Project Estimation Meeting</a>
                                            <!--end::Title-->
                                            <!--begin::User-->
                                            <div class="text-gray-400">Lead by
                                                <a href="#">David Stevenson</a>
                                            </div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Time-->
                                </div>
                                <!--end::Day-->
                                <!--begin::Day-->
                                <div id="kt_schedule_day_10" class="tab-pane fade show">
                                    <!--begin::Time-->
                                    <div class="d-flex flex-stack position-relative mt-8">
                                        <!--begin::Bar-->
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                        <!--end::Bar-->
                                        <!--begin::Info-->
                                        <div class="fw-semibold ms-5 text-gray-600">
                                            <!--begin::Time-->
                                            <div class="fs-5">16:30 - 17:30
                                                <span class="fs-7 text-gray-400 text-uppercase">pm</span>
                                            </div>
                                            <!--end::Time-->
                                            <!--begin::Title-->
                                            <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Development Team Capacity Review</a>
                                            <!--end::Title-->
                                            <!--begin::User-->
                                            <div class="text-gray-400">Lead by
                                                <a href="#">Mark Randall</a>
                                            </div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Time-->
                                    <!--begin::Time-->
                                    <div class="d-flex flex-stack position-relative mt-8">
                                        <!--begin::Bar-->
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                        <!--end::Bar-->
                                        <!--begin::Info-->
                                        <div class="fw-semibold ms-5 text-gray-600">
                                            <!--begin::Time-->
                                            <div class="fs-5">9:00 - 10:00
                                                <span class="fs-7 text-gray-400 text-uppercase">am</span>
                                            </div>
                                            <!--end::Time-->
                                            <!--begin::Title-->
                                            <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">9 Degree Project Estimation Meeting</a>
                                            <!--end::Title-->
                                            <!--begin::User-->
                                            <div class="text-gray-400">Lead by
                                                <a href="#">Michael Walters</a>
                                            </div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Time-->
                                    <!--begin::Time-->
                                    <div class="d-flex flex-stack position-relative mt-8">
                                        <!--begin::Bar-->
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                        <!--end::Bar-->
                                        <!--begin::Info-->
                                        <div class="fw-semibold ms-5 text-gray-600">
                                            <!--begin::Time-->
                                            <div class="fs-5">9:00 - 10:00
                                                <span class="fs-7 text-gray-400 text-uppercase">am</span>
                                            </div>
                                            <!--end::Time-->
                                            <!--begin::Title-->
                                            <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Marketing Campaign Discussion</a>
                                            <!--end::Title-->
                                            <!--begin::User-->
                                            <div class="text-gray-400">Lead by
                                                <a href="#">Naomi Hayabusa</a>
                                            </div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Time-->
                                </div>
                                <!--end::Day-->
                                <!--begin::Day-->
                                <div id="kt_schedule_day_11" class="tab-pane fade show">
                                    <!--begin::Time-->
                                    <div class="d-flex flex-stack position-relative mt-8">
                                        <!--begin::Bar-->
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                        <!--end::Bar-->
                                        <!--begin::Info-->
                                        <div class="fw-semibold ms-5 text-gray-600">
                                            <!--begin::Time-->
                                            <div class="fs-5">13:00 - 14:00
                                                <span class="fs-7 text-gray-400 text-uppercase">pm</span>
                                            </div>
                                            <!--end::Time-->
                                            <!--begin::Title-->
                                            <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Sales Pitch Proposal</a>
                                            <!--end::Title-->
                                            <!--begin::User-->
                                            <div class="text-gray-400">Lead by
                                                <a href="#">Mark Randall</a>
                                            </div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Time-->
                                    <!--begin::Time-->
                                    <div class="d-flex flex-stack position-relative mt-8">
                                        <!--begin::Bar-->
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                        <!--end::Bar-->
                                        <!--begin::Info-->
                                        <div class="fw-semibold ms-5 text-gray-600">
                                            <!--begin::Time-->
                                            <div class="fs-5">9:00 - 10:00
                                                <span class="fs-7 text-gray-400 text-uppercase">am</span>
                                            </div>
                                            <!--end::Time-->
                                            <!--begin::Title-->
                                            <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Lunch & Learn Catch Up</a>
                                            <!--end::Title-->
                                            <!--begin::User-->
                                            <div class="text-gray-400">Lead by
                                                <a href="#">Bob Harris</a>
                                            </div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Time-->
                                    <!--begin::Time-->
                                    <div class="d-flex flex-stack position-relative mt-8">
                                        <!--begin::Bar-->
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                        <!--end::Bar-->
                                        <!--begin::Info-->
                                        <div class="fw-semibold ms-5 text-gray-600">
                                            <!--begin::Time-->
                                            <div class="fs-5">14:30 - 15:30
                                                <span class="fs-7 text-gray-400 text-uppercase">pm</span>
                                            </div>
                                            <!--end::Time-->
                                            <!--begin::Title-->
                                            <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">9 Degree Project Estimation Meeting</a>
                                            <!--end::Title-->
                                            <!--begin::User-->
                                            <div class="text-gray-400">Lead by
                                                <a href="#">Walter White</a>
                                            </div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Time-->
                                </div>
                                <!--end::Day-->
                            </div>
                            <!--end::Tab Content-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Timeline widget-3-->
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Post-->
</div>
@endsection
@push('js')
<script>

</script>
@endpush