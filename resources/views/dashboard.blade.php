@extends('layout.template')
@section('content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Post-->
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-xxl">
            <!--begin::Row-->
            <div class="row g-5 g-xl-10 mb-xl-10">
                <!--begin::Col-->
                <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-md-5 mb-xl-10">
                    <!--begin::Card widget 16-->
                    <div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-center border-0 h-md-50 mb-5 mb-xl-10" style="background-color: #080655">
                        <!--begin::Header-->
                        <div class="card-header pt-5">
                            <!--begin::Title-->
                            <div class="card-title d-flex flex-column">
                                <!--begin::Amount-->
                                <span class="fs-2hx fw-bold text-white me-2 lh-1 ls-n2">10</span>
                                <!--end::Amount-->
                                <!--begin::Subtitle-->
                                <span class="text-white opacity-50 pt-1 fw-semibold fs-6">Aprove request room</span>
                                <!--end::Subtitle-->
                            </div>
                            <!--end::Title-->
                        </div>
                        <!--end::Header-->
                        <!--begin::Card body-->
                        <div class="card-body d-flex align-items-end pt-0">
                            <!--begin::Progress-->
                            <div class="d-flex align-items-center flex-column mt-3 w-100">
                                <div class="d-flex justify-content-between fw-bold fs-6 text-white opacity-50 w-100 mt-auto mb-2">
                                    <span>43 Pending</span>
                                    <span>72%</span>
                                </div>
                                <div class="h-8px mx-3 w-100 bg-light-danger rounded">
                                    <div class="bg-danger rounded h-8px" role="progressbar" style="width: 72%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <!--end::Progress-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Card widget 16-->
                    <!--begin::Card widget 7-->
                    <div class="card card-flush h-md-50 mb-5 mb-xl-10">
                        <!--begin::Header-->
                        <div class="card-header pt-5">
                            <!--begin::Title-->
                            <div class="card-title d-flex flex-column">
                                <!--begin::Amount-->
                                <span class="fs-2hx fw-bold text-dark me-2 lh-1 ls-n2">357</span>
                                <!--end::Amount-->
                                <!--begin::Subtitle-->
                                <span class="text-gray-400 pt-1 fw-semibold fs-6">Professionals</span>
                                <!--end::Subtitle-->
                            </div>
                            <!--end::Title-->
                        </div>
                        <!--end::Header-->
                        <!--begin::Card body-->
                        <div class="card-body d-flex flex-column justify-content-end pe-0">
                            <!--begin::Title-->
                            <span class="fs-6 fw-bolder text-gray-800 d-block mb-2">Today’s Heroes</span>
                            <!--end::Title-->
                            <!--begin::Users group-->
                            <div class="symbol-group symbol-hover flex-nowrap">
                                <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Alan Warden">
                                    <span class="symbol-label bg-warning text-inverse-warning fw-bold">A</span>
                                </div>
                                <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Michael Eberon">
                                    <img alt="Pic" src="{{asset('template')}}/media/avatars/300-11.jpg" />
                                </div>
                                <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Susan Redwood">
                                    <span class="symbol-label bg-primary text-inverse-primary fw-bold">S</span>
                                </div>
                                <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Melody Macy">
                                    <img alt="Pic" src="{{asset('template')}}/media/avatars/300-2.jpg" />
                                </div>
                                <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Perry Matthew">
                                    <span class="symbol-label bg-danger text-inverse-danger fw-bold">P</span>
                                </div>
                                <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Barry Walter">
                                    <img alt="Pic" src="{{asset('template')}}/media/avatars/300-12.jpg" />
                                </div>
                                <a href="#" class="symbol symbol-35px symbol-circle" data-bs-toggle="modal" data-bs-target="#kt_modal_view_users">
                                    <span class="symbol-label bg-dark text-gray-300 fs-8 fw-bold">+42</span>
                                </a>
                            </div>
                            <!--end::Users group-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Card widget 7-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-md-5 mb-xl-10">
                    <!--begin::Card widget 17-->
                    <div class="card card-flush h-md-50 mb-5 mb-xl-10">
                        <!--begin::Header-->
                        <div class="card-header pt-5">
                            <!--begin::Title-->
                            <div class="card-title d-flex flex-column">
                                <!--begin::Info-->
                                <div class="d-flex align-items-center">
                                    <span class="badge badge-light-success fs-base">
                                        Online
                                    </span>
                                    <!--end::Badge-->
                                </div>
                                <!--end::Info-->
                                <!--begin::Subtitle-->
                                <span class="text-gray-400 pt-1 fw-semibold fs-6">Admin active</span>
                                <!--end::Subtitle-->
                            </div>
                            <!--end::Title-->
                        </div>
                        <!--end::Header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-2 pb-4 d-flex flex-wrap align-items-center">
                            <!--begin::Chart-->
                            <div class="d-flex flex-center me-5 pt-2">
                                <div id="kt_card_widget_17_chart" style="min-width: 70px; min-height: 70px" data-kt-size="70" data-kt-line="11"></div>
                            </div>
                            <!--end::Chart-->
                            <!--begin::Labels-->
                            <div class="d-flex flex-column content-justify-center flex-row-fluid">
                                <!--begin::Label-->
                                <div class="d-flex fw-semibold align-items-center">
                                    <!--begin::Bullet-->
                                    <div class="bullet w-8px h-3px rounded-2 bg-success me-3"></div>
                                    <!--end::Bullet-->
                                    <!--begin::Label-->
                                    <div class="text-gray-500 flex-grow-1 me-4">Satria Girinanda</div>
                                </div>
                                <!--end::Label-->
                            </div>
                            <!--end::Labels-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Card widget 17-->
                    <!--begin::List widget 25-->
                    <div class="card card-flush h-lg-50">
                        <!--begin::Header-->
                        <div class="card-header pt-5">
                            <!--begin::Title-->
                            <h3 class="card-title text-gray-800">Highlights</h3>
                            <!--end::Title-->
                            <!--begin::Toolbar-->
                            <div class="card-toolbar d-none">
                                <!--begin::Daterangepicker(defined in src/js/layout/app.js)-->
                                <div data-kt-daterangepicker="true" data-kt-daterangepicker-opens="left" class="btn btn-sm btn-light d-flex align-items-center px-4">
                                    <!--begin::Display range-->
                                    <div class="text-gray-600 fw-bold">Loading date range...</div>
                                    <!--end::Display range-->
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
                                    <span class="svg-icon svg-icon-1 ms-2 me-0">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path opacity="0.3" d="M21 22H3C2.4 22 2 21.6 2 21V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5V21C22 21.6 21.6 22 21 22Z" fill="currentColor" />
                                            <path d="M6 6C5.4 6 5 5.6 5 5V3C5 2.4 5.4 2 6 2C6.6 2 7 2.4 7 3V5C7 5.6 6.6 6 6 6ZM11 5V3C11 2.4 10.6 2 10 2C9.4 2 9 2.4 9 3V5C9 5.6 9.4 6 10 6C10.6 6 11 5.6 11 5ZM15 5V3C15 2.4 14.6 2 14 2C13.4 2 13 2.4 13 3V5C13 5.6 13.4 6 14 6C14.6 6 15 5.6 15 5ZM19 5V3C19 2.4 18.6 2 18 2C17.4 2 17 2.4 17 3V5C17 5.6 17.4 6 18 6C18.6 6 19 5.6 19 5Z" fill="currentColor" />
                                            <path d="M8.8 13.1C9.2 13.1 9.5 13 9.7 12.8C9.9 12.6 10.1 12.3 10.1 11.9C10.1 11.6 10 11.3 9.8 11.1C9.6 10.9 9.3 10.8 9 10.8C8.8 10.8 8.59999 10.8 8.39999 10.9C8.19999 11 8.1 11.1 8 11.2C7.9 11.3 7.8 11.4 7.7 11.6C7.6 11.8 7.5 11.9 7.5 12.1C7.5 12.2 7.4 12.2 7.3 12.3C7.2 12.4 7.09999 12.4 6.89999 12.4C6.69999 12.4 6.6 12.3 6.5 12.2C6.4 12.1 6.3 11.9 6.3 11.7C6.3 11.5 6.4 11.3 6.5 11.1C6.6 10.9 6.8 10.7 7 10.5C7.2 10.3 7.49999 10.1 7.89999 10C8.29999 9.90003 8.60001 9.80003 9.10001 9.80003C9.50001 9.80003 9.80001 9.90003 10.1 10C10.4 10.1 10.7 10.3 10.9 10.4C11.1 10.5 11.3 10.8 11.4 11.1C11.5 11.4 11.6 11.6 11.6 11.9C11.6 12.3 11.5 12.6 11.3 12.9C11.1 13.2 10.9 13.5 10.6 13.7C10.9 13.9 11.2 14.1 11.4 14.3C11.6 14.5 11.8 14.7 11.9 15C12 15.3 12.1 15.5 12.1 15.8C12.1 16.2 12 16.5 11.9 16.8C11.8 17.1 11.5 17.4 11.3 17.7C11.1 18 10.7 18.2 10.3 18.3C9.9 18.4 9.5 18.5 9 18.5C8.5 18.5 8.1 18.4 7.7 18.2C7.3 18 7 17.8 6.8 17.6C6.6 17.4 6.4 17.1 6.3 16.8C6.2 16.5 6.10001 16.3 6.10001 16.1C6.10001 15.9 6.2 15.7 6.3 15.6C6.4 15.5 6.6 15.4 6.8 15.4C6.9 15.4 7.00001 15.4 7.10001 15.5C7.20001 15.6 7.3 15.6 7.3 15.7C7.5 16.2 7.7 16.6 8 16.9C8.3 17.2 8.6 17.3 9 17.3C9.2 17.3 9.5 17.2 9.7 17.1C9.9 17 10.1 16.8 10.3 16.6C10.5 16.4 10.5 16.1 10.5 15.8C10.5 15.3 10.4 15 10.1 14.7C9.80001 14.4 9.50001 14.3 9.10001 14.3C9.00001 14.3 8.9 14.3 8.7 14.3C8.5 14.3 8.39999 14.3 8.39999 14.3C8.19999 14.3 7.99999 14.2 7.89999 14.1C7.79999 14 7.7 13.8 7.7 13.7C7.7 13.5 7.79999 13.4 7.89999 13.2C7.99999 13 8.2 13 8.5 13H8.8V13.1ZM15.3 17.5V12.2C14.3 13 13.6 13.3 13.3 13.3C13.1 13.3 13 13.2 12.9 13.1C12.8 13 12.7 12.8 12.7 12.6C12.7 12.4 12.8 12.3 12.9 12.2C13 12.1 13.2 12 13.6 11.8C14.1 11.6 14.5 11.3 14.7 11.1C14.9 10.9 15.2 10.6 15.5 10.3C15.8 10 15.9 9.80003 15.9 9.70003C15.9 9.60003 16.1 9.60004 16.3 9.60004C16.5 9.60004 16.7 9.70003 16.8 9.80003C16.9 9.90003 17 10.2 17 10.5V17.2C17 18 16.7 18.4 16.2 18.4C16 18.4 15.8 18.3 15.6 18.2C15.4 18.1 15.3 17.8 15.3 17.5Z" fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </div>
                                <!--end::Daterangepicker-->
                            </div>
                            <!--end::Toolbar-->
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body pt-5">
                            <!--begin::Item-->
                            <div class="d-flex flex-stack">
                                <!--begin::Section-->
                                <div class="text-gray-700 fw-semibold fs-6 me-2">New Television</div>
                                <!--end::Section-->
                                <!--begin::Statistics-->
                                <div class="d-flex align-items-senter">
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr094.svg-->
                                    <span class="svg-icon svg-icon-2 svg-icon-success me-2">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect opacity="0.5" x="16.9497" y="8.46448" width="13" height="2" rx="1" transform="rotate(135 16.9497 8.46448)" fill="currentColor" />
                                            <path d="M14.8284 9.97157L14.8284 15.8891C14.8284 16.4749 15.3033 16.9497 15.8891 16.9497C16.4749 16.9497 16.9497 16.4749 16.9497 15.8891L16.9497 8.05025C16.9497 7.49797 16.502 7.05025 15.9497 7.05025L8.11091 7.05025C7.52512 7.05025 7.05025 7.52513 7.05025 8.11091C7.05025 8.6967 7.52512 9.17157 8.11091 9.17157L14.0284 9.17157C14.4703 9.17157 14.8284 9.52975 14.8284 9.97157Z" fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                    <!--begin::Number-->
                                    <span class="text-gray-900 fw-bolder fs-6">Room 03</span>
                                    <!--end::Number-->
                                </div>
                                <!--end::Statistics-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Separator-->
                            <div class="separator separator-dashed my-3"></div>
                            <!--end::Separator-->
                            <!--begin::Item-->
                            <div class="d-flex flex-stack">
                                <!--begin::Section-->
                                <div class="text-gray-700 fw-semibold fs-6 me-2">Broken LCD</div>
                                <!--end::Section-->
                                <!--begin::Statistics-->
                                <div class="d-flex align-items-senter">
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr093.svg-->
                                    <span class="svg-icon svg-icon-2 svg-icon-danger me-2">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect opacity="0.5" x="7.05026" y="15.5355" width="13" height="2" rx="1" transform="rotate(-45 7.05026 15.5355)" fill="currentColor" />
                                            <path d="M9.17158 14.0284L9.17158 8.11091C9.17158 7.52513 8.6967 7.05025 8.11092 7.05025C7.52513 7.05025 7.05026 7.52512 7.05026 8.11091L7.05026 15.9497C7.05026 16.502 7.49797 16.9497 8.05026 16.9497L15.8891 16.9497C16.4749 16.9497 16.9498 16.4749 16.9498 15.8891C16.9498 15.3033 16.4749 14.8284 15.8891 14.8284L9.97158 14.8284C9.52975 14.8284 9.17158 14.4703 9.17158 14.0284Z" fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                    <!--begin::Number-->
                                    <span class="text-gray-900 fw-bolder fs-6">Room 01</span>
                                    <!--end::Number-->
                                </div>
                                <!--end::Statistics-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Separator-->
                            <div class="separator separator-dashed my-3"></div>
                            <!--end::Separator-->
                            <!--begin::Item-->
                            <div class="d-flex flex-stack">
                                <!--begin::Section-->
                                <div class="text-gray-700 fw-semibold fs-6 me-2">Superior Room</div>
                                <!--end::Section-->
                                <!--begin::Statistics-->
                                <div class="d-flex align-items-senter">
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr094.svg-->
                                    <span class="svg-icon svg-icon-2 svg-icon-success me-2">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect opacity="0.5" x="16.9497" y="8.46448" width="13" height="2" rx="1" transform="rotate(135 16.9497 8.46448)" fill="currentColor" />
                                            <path d="M14.8284 9.97157L14.8284 15.8891C14.8284 16.4749 15.3033 16.9497 15.8891 16.9497C16.4749 16.9497 16.9497 16.4749 16.9497 15.8891L16.9497 8.05025C16.9497 7.49797 16.502 7.05025 15.9497 7.05025L8.11091 7.05025C7.52512 7.05025 7.05025 7.52513 7.05025 8.11091C7.05025 8.6967 7.52512 9.17157 8.11091 9.17157L14.0284 9.17157C14.4703 9.17157 14.8284 9.52975 14.8284 9.97157Z" fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                    <!--begin::Number-->
                                    <span class="text-gray-900 fw-bolder fs-6">Room 02</span>
                                    <!--end::Number-->
                                </div>
                                <!--end::Statistics-->
                            </div>
                            <!--end::Item-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::LIst widget 25-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
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