<html lang="en" data-placement="horizontal" data-behaviour="pinned" data-layout="fluid" data-radius="rounded"
    data-color="light-blue" data-navcolor="default" data-show="true">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <title>Acorn Admin Template | Login Page</title>
    <meta name="description" content="Login Page">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @include('backend.inc.style')
    <style>
        @font-face {
            font-family: 'Open Sans Regular';
            font-style: normal;
            font-weight: 400;
            src: url('chrome-extension://gkkdmjjodidppndkbkhhknakbeflbomf/fonts/open_sans/open-sans-v18-latin-regular.woff');
        }
    </style>
    <style>
        @font-face {
            font-family: 'Open Sans Bold';
            font-style: normal;
            font-weight: 800;
            src: url('chrome-extension://gkkdmjjodidppndkbkhhknakbeflbomf/fonts/open_sans/open-sans-v18-latin-800.woff');
        }
    </style>
</head>

<body class="h-100" style="" data-bs-padding="0px">
    <div id="paddingModal" class="modal" style="display: none;" aria-hidden="true">
        <div class="modal-dialog d-none">
            <div class="modal-content"></div>
        </div>
    </div>
    <div id="root" class="h-100">
        <div class="fixed-background"></div>
        <div class="container-fluid p-0 h-100 position-relative">
            <div class="row g-0 h-100">
                <div class="offset-0 col-12 d-none d-lg-flex offset-md-1 col-lg h-lg-100">
                    <div class="min-h-100 d-flex align-items-center">
                        <div class="w-100 w-lg-75 w-xxl-50">
                            <div>
                                <div class="mb-5">
                                    <h1 class="display-3 text-white">Multiple Niches</h1>
                                    <h1 class="display-3 text-white">Ready for Your Project</h1>
                                </div>
                                <p class="h6 text-white lh-1-5 mb-5">
                                    Dynamically target high-payoff intellectual capital for customized technologies.
                                    Objectively integrate emerging core competencies before process-centric
                                    communities...
                                </p>
                                <div class="mb-5">
                                    <a class="btn btn-lg btn-outline-white" href="index.html">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-auto h-100 pb-4 px-4 pt-0 p-lg-0">
                    <div
                        class="sw-lg-70 min-h-100 bg-foreground d-flex justify-content-center align-items-center shadow-deep py-5 full-page-content-right-border">
                        <div class="sw-lg-50 px-5">
                            <div class="sh-11">
                                <a href="index.html">
                                    <div class="logo-default"></div>
                                </a>
                            </div>
                            <div class="mb-5">
                                <h2 class="cta-1 mb-0 text-primary">Welcome,</h2>
                                <h2 class="cta-1 text-primary">let's get started!</h2>
                            </div>
                            <div class="mb-5">
                                <p class="h6">Please use your credentials to login.</p>
                                <p class="h6">
                                    If you are not a member, please
                                    <a href="Pages.Authentication.Register.html">register</a>
                                    .
                                </p>
                            </div>
                            <div>
                                <form id="login-form" class="tooltip-end-bottom" method="POST" novalidate="novalidate">
                                    @csrf
                                    <div class="mb-3 filled form-group tooltip-end-top">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="acorn-icons acorn-icons-email undefined">
                                            <path
                                                d="M18 7L11.5652 10.2174C10.9086 10.5457 10.5802 10.7099 10.2313 10.7505C10.0776 10.7684 9.92238 10.7684 9.76869 10.7505C9.41977 10.7099 9.09143 10.5457 8.43475 10.2174L2 7">
                                            </path>
                                            <path
                                                d="M14.5 4C15.9045 4 16.6067 4 17.1111 4.33706C17.3295 4.48298 17.517 4.67048 17.6629 4.88886C18 5.39331 18 6.09554 18 7.5L18 12.5C18 13.9045 18 14.6067 17.6629 15.1111C17.517 15.3295 17.3295 15.517 17.1111 15.6629C16.6067 16 15.9045 16 14.5 16L5.5 16C4.09554 16 3.39331 16 2.88886 15.6629C2.67048 15.517 2.48298 15.3295 2.33706 15.1111C2 14.6067 2 13.9045 2 12.5L2 7.5C2 6.09554 2 5.39331 2.33706 4.88886C2.48298 4.67048 2.67048 4.48298 2.88886 4.33706C3.39331 4 4.09554 4 5.5 4L14.5 4Z">
                                            </path>
                                        </svg>
                                        <input class="form-control" placeholder="Email" id="email" name="email">
                                    </div>
                                    <div class="mb-3 filled form-group tooltip-end-top">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="acorn-icons acorn-icons-lock-off undefined">
                                            <path
                                                d="M5 12.6667C5 12.0467 5 11.7367 5.06815 11.4824C5.25308 10.7922 5.79218 10.2531 6.48236 10.0681C6.73669 10 7.04669 10 7.66667 10H12.3333C12.9533 10 13.2633 10 13.5176 10.0681C14.2078 10.2531 14.7469 10.7922 14.9319 11.4824C15 11.7367 15 12.0467 15 12.6667V13C15 13.9293 15 14.394 14.9231 14.7804C14.6075 16.3671 13.3671 17.6075 11.7804 17.9231C11.394 18 10.9293 18 10 18V18C9.07069 18 8.60603 18 8.21964 17.9231C6.63288 17.6075 5.39249 16.3671 5.07686 14.7804C5 14.394 5 13.9293 5 13V12.6667Z">
                                            </path>
                                            <path
                                                d="M11 15H10 9M13 6V5C13 3.34315 11.6569 2 10 2V2C8.34315 2 7 3.34315 7 5V10">
                                            </path>
                                        </svg>
                                        <input class="form-control pe-7" name="password" id="password" type="password"
                                            placeholder="Password">
                                        <a class="text-small position-absolute t-3 e-3"
                                            href="Pages.Authentication.ForgotPassword.html">Forgot?</a>
                                    </div>
                                    <button type="submit" class="btn btn-lg btn-primary">Login</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade modal-right scroll-out-negative" id="settings" data-bs-backdrop="true" tabindex="-1"
        role="dialog" aria-labelledby="settings" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable full" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Theme Settings</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div
                        class="scroll-track-visible os-host os-theme-dark os-host-resize-disabled os-host-scrollbar-horizontal-hidden os-host-scrollbar-vertical-hidden os-host-transition">
                        <div class="os-resize-observer-host observed">
                            <div class="os-resize-observer" style="left: 0px; right: auto;"></div>
                        </div>
                        <div class="os-size-auto-observer observed" style="height: calc(100% + 1px); float: left;">
                            <div class="os-resize-observer"></div>
                        </div>
                        <div class="os-content-glue" style="margin: 0px; width: 14px;"></div>
                        <div class="os-padding">
                            <div class="os-viewport os-viewport-native-scrollbars-invisible">
                                <div class="os-content" style="padding: 0px; height: 100%; width: 100%;">
                                    <div class="mb-5" id="color">
                                        <label class="mb-3 d-inline-block form-label">Color</label>
                                        <div class="row d-flex g-3 justify-content-between flex-wrap mb-3">
                                            <a href="#" class="flex-grow-1 w-50 option col active"
                                                data-value="light-blue" data-parent="color">
                                                <div class="card rounded-md p-3 mb-1 no-shadow color">
                                                    <div class="blue-light"></div>
                                                </div>
                                                <div class="text-muted text-part">
                                                    <span class="text-extra-small align-middle">LIGHT BLUE</span>
                                                </div>
                                            </a>
                                            <a href="#" class="flex-grow-1 w-50 option col"
                                                data-value="dark-blue" data-parent="color">
                                                <div class="card rounded-md p-3 mb-1 no-shadow color">
                                                    <div class="blue-dark"></div>
                                                </div>
                                                <div class="text-muted text-part">
                                                    <span class="text-extra-small align-middle">DARK BLUE</span>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="row d-flex g-3 justify-content-between flex-wrap mb-3">
                                            <a href="#" class="flex-grow-1 w-50 option col"
                                                data-value="light-teal" data-parent="color">
                                                <div class="card rounded-md p-3 mb-1 no-shadow color">
                                                    <div class="teal-light"></div>
                                                </div>
                                                <div class="text-muted text-part">
                                                    <span class="text-extra-small align-middle">LIGHT TEAL</span>
                                                </div>
                                            </a>
                                            <a href="#" class="flex-grow-1 w-50 option col"
                                                data-value="dark-teal" data-parent="color">
                                                <div class="card rounded-md p-3 mb-1 no-shadow color">
                                                    <div class="teal-dark"></div>
                                                </div>
                                                <div class="text-muted text-part">
                                                    <span class="text-extra-small align-middle">DARK TEAL</span>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="row d-flex g-3 justify-content-between flex-wrap mb-3">
                                            <a href="#" class="flex-grow-1 w-50 option col"
                                                data-value="light-sky" data-parent="color">
                                                <div class="card rounded-md p-3 mb-1 no-shadow color">
                                                    <div class="sky-light"></div>
                                                </div>
                                                <div class="text-muted text-part">
                                                    <span class="text-extra-small align-middle">LIGHT SKY</span>
                                                </div>
                                            </a>
                                            <a href="#" class="flex-grow-1 w-50 option col"
                                                data-value="dark-sky" data-parent="color">
                                                <div class="card rounded-md p-3 mb-1 no-shadow color">
                                                    <div class="sky-dark"></div>
                                                </div>
                                                <div class="text-muted text-part">
                                                    <span class="text-extra-small align-middle">DARK SKY</span>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="row d-flex g-3 justify-content-between flex-wrap mb-3">
                                            <a href="#" class="flex-grow-1 w-50 option col"
                                                data-value="light-red" data-parent="color">
                                                <div class="card rounded-md p-3 mb-1 no-shadow color">
                                                    <div class="red-light"></div>
                                                </div>
                                                <div class="text-muted text-part">
                                                    <span class="text-extra-small align-middle">LIGHT RED</span>
                                                </div>
                                            </a>
                                            <a href="#" class="flex-grow-1 w-50 option col"
                                                data-value="dark-red" data-parent="color">
                                                <div class="card rounded-md p-3 mb-1 no-shadow color">
                                                    <div class="red-dark"></div>
                                                </div>
                                                <div class="text-muted text-part">
                                                    <span class="text-extra-small align-middle">DARK RED</span>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="row d-flex g-3 justify-content-between flex-wrap mb-3">
                                            <a href="#" class="flex-grow-1 w-50 option col"
                                                data-value="light-green" data-parent="color">
                                                <div class="card rounded-md p-3 mb-1 no-shadow color">
                                                    <div class="green-light"></div>
                                                </div>
                                                <div class="text-muted text-part">
                                                    <span class="text-extra-small align-middle">LIGHT GREEN</span>
                                                </div>
                                            </a>
                                            <a href="#" class="flex-grow-1 w-50 option col"
                                                data-value="dark-green" data-parent="color">
                                                <div class="card rounded-md p-3 mb-1 no-shadow color">
                                                    <div class="green-dark"></div>
                                                </div>
                                                <div class="text-muted text-part">
                                                    <span class="text-extra-small align-middle">DARK GREEN</span>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="row d-flex g-3 justify-content-between flex-wrap mb-3">
                                            <a href="#" class="flex-grow-1 w-50 option col"
                                                data-value="light-lime" data-parent="color">
                                                <div class="card rounded-md p-3 mb-1 no-shadow color">
                                                    <div class="lime-light"></div>
                                                </div>
                                                <div class="text-muted text-part">
                                                    <span class="text-extra-small align-middle">LIGHT LIME</span>
                                                </div>
                                            </a>
                                            <a href="#" class="flex-grow-1 w-50 option col"
                                                data-value="dark-lime" data-parent="color">
                                                <div class="card rounded-md p-3 mb-1 no-shadow color">
                                                    <div class="lime-dark"></div>
                                                </div>
                                                <div class="text-muted text-part">
                                                    <span class="text-extra-small align-middle">DARK LIME</span>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="row d-flex g-3 justify-content-between flex-wrap mb-3">
                                            <a href="#" class="flex-grow-1 w-50 option col"
                                                data-value="light-pink" data-parent="color">
                                                <div class="card rounded-md p-3 mb-1 no-shadow color">
                                                    <div class="pink-light"></div>
                                                </div>
                                                <div class="text-muted text-part">
                                                    <span class="text-extra-small align-middle">LIGHT PINK</span>
                                                </div>
                                            </a>
                                            <a href="#" class="flex-grow-1 w-50 option col"
                                                data-value="dark-pink" data-parent="color">
                                                <div class="card rounded-md p-3 mb-1 no-shadow color">
                                                    <div class="pink-dark"></div>
                                                </div>
                                                <div class="text-muted text-part">
                                                    <span class="text-extra-small align-middle">DARK PINK</span>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="row d-flex g-3 justify-content-between flex-wrap mb-3">
                                            <a href="#" class="flex-grow-1 w-50 option col"
                                                data-value="light-purple" data-parent="color">
                                                <div class="card rounded-md p-3 mb-1 no-shadow color">
                                                    <div class="purple-light"></div>
                                                </div>
                                                <div class="text-muted text-part">
                                                    <span class="text-extra-small align-middle">LIGHT PURPLE</span>
                                                </div>
                                            </a>
                                            <a href="#" class="flex-grow-1 w-50 option col"
                                                data-value="dark-purple" data-parent="color">
                                                <div class="card rounded-md p-3 mb-1 no-shadow color">
                                                    <div class="purple-dark"></div>
                                                </div>
                                                <div class="text-muted text-part">
                                                    <span class="text-extra-small align-middle">DARK PURPLE</span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="mb-5" id="navcolor">
                                        <label class="mb-3 d-inline-block form-label">Override Nav Palette</label>
                                        <div class="row d-flex g-3 justify-content-between flex-wrap">
                                            <a href="#" class="flex-grow-1 w-33 option col active"
                                                data-value="default" data-parent="navcolor">
                                                <div class="card rounded-md p-3 mb-1 no-shadow">
                                                    <div class="figure figure-primary top"></div>
                                                    <div class="figure figure-secondary bottom"></div>
                                                </div>
                                                <div class="text-muted text-part">
                                                    <span class="text-extra-small align-middle">DEFAULT</span>
                                                </div>
                                            </a>
                                            <a href="#" class="flex-grow-1 w-33 option col" data-value="light"
                                                data-parent="navcolor">
                                                <div class="card rounded-md p-3 mb-1 no-shadow">
                                                    <div class="figure figure-secondary figure-light top"></div>
                                                    <div class="figure figure-secondary bottom"></div>
                                                </div>
                                                <div class="text-muted text-part">
                                                    <span class="text-extra-small align-middle">LIGHT</span>
                                                </div>
                                            </a>
                                            <a href="#" class="flex-grow-1 w-33 option col" data-value="dark"
                                                data-parent="navcolor">
                                                <div class="card rounded-md p-3 mb-1 no-shadow">
                                                    <div class="figure figure-muted figure-dark top"></div>
                                                    <div class="figure figure-secondary bottom"></div>
                                                </div>
                                                <div class="text-muted text-part">
                                                    <span class="text-extra-small align-middle">DARK</span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="mb-5" id="placement">
                                        <label class="mb-3 d-inline-block form-label">Menu Placement</label>
                                        <div class="row d-flex g-3 justify-content-between flex-wrap">
                                            <a href="#" class="flex-grow-1 w-50 option col active"
                                                data-value="horizontal" data-parent="placement">
                                                <div class="card rounded-md p-3 mb-1 no-shadow">
                                                    <div class="figure figure-primary top"></div>
                                                    <div class="figure figure-secondary bottom"></div>
                                                </div>
                                                <div class="text-muted text-part">
                                                    <span class="text-extra-small align-middle">HORIZONTAL</span>
                                                </div>
                                            </a>
                                            <a href="#" class="flex-grow-1 w-50 option col"
                                                data-value="vertical" data-parent="placement">
                                                <div class="card rounded-md p-3 mb-1 no-shadow">
                                                    <div class="figure figure-primary left"></div>
                                                    <div class="figure figure-secondary right"></div>
                                                </div>
                                                <div class="text-muted text-part">
                                                    <span class="text-extra-small align-middle">VERTICAL</span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="mb-5" id="behaviour">
                                        <label class="mb-3 d-inline-block form-label">Menu Behaviour</label>
                                        <div class="row d-flex g-3 justify-content-between flex-wrap">
                                            <a href="#" class="flex-grow-1 w-50 option col active"
                                                data-value="pinned" data-parent="behaviour">
                                                <div class="card rounded-md p-3 mb-1 no-shadow">
                                                    <div class="figure figure-primary left large"></div>
                                                    <div class="figure figure-secondary right small"></div>
                                                </div>
                                                <div class="text-muted text-part">
                                                    <span class="text-extra-small align-middle">PINNED</span>
                                                </div>
                                            </a>
                                            <a href="#" class="flex-grow-1 w-50 option col"
                                                data-value="unpinned" data-parent="behaviour">
                                                <div class="card rounded-md p-3 mb-1 no-shadow">
                                                    <div class="figure figure-primary left"></div>
                                                    <div class="figure figure-secondary right"></div>
                                                </div>
                                                <div class="text-muted text-part">
                                                    <span class="text-extra-small align-middle">UNPINNED</span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="mb-5" id="layout">
                                        <label class="mb-3 d-inline-block form-label">Layout</label>
                                        <div class="row d-flex g-3 justify-content-between flex-wrap">
                                            <a href="#" class="flex-grow-1 w-50 option col active"
                                                data-value="fluid" data-parent="layout">
                                                <div class="card rounded-md p-3 mb-1 no-shadow">
                                                    <div class="figure figure-primary top"></div>
                                                    <div class="figure figure-secondary bottom"></div>
                                                </div>
                                                <div class="text-muted text-part">
                                                    <span class="text-extra-small align-middle">FLUID</span>
                                                </div>
                                            </a>
                                            <a href="#" class="flex-grow-1 w-50 option col" data-value="boxed"
                                                data-parent="layout">
                                                <div class="card rounded-md p-3 mb-1 no-shadow">
                                                    <div class="figure figure-primary top"></div>
                                                    <div class="figure figure-secondary bottom small"></div>
                                                </div>
                                                <div class="text-muted text-part">
                                                    <span class="text-extra-small align-middle">BOXED</span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="mb-5" id="radius">
                                        <label class="mb-3 d-inline-block form-label">Radius</label>
                                        <div class="row d-flex g-3 justify-content-between flex-wrap">
                                            <a href="#" class="flex-grow-1 w-33 option col active"
                                                data-value="rounded" data-parent="radius">
                                                <div class="card rounded-md radius-rounded p-3 mb-1 no-shadow">
                                                    <div class="figure figure-primary top"></div>
                                                    <div class="figure figure-secondary bottom"></div>
                                                </div>
                                                <div class="text-muted text-part">
                                                    <span class="text-extra-small align-middle">ROUNDED</span>
                                                </div>
                                            </a>
                                            <a href="#" class="flex-grow-1 w-33 option col"
                                                data-value="standard" data-parent="radius">
                                                <div class="card rounded-md radius-regular p-3 mb-1 no-shadow">
                                                    <div class="figure figure-primary top"></div>
                                                    <div class="figure figure-secondary bottom"></div>
                                                </div>
                                                <div class="text-muted text-part">
                                                    <span class="text-extra-small align-middle">STANDARD</span>
                                                </div>
                                            </a>
                                            <a href="#" class="flex-grow-1 w-33 option col" data-value="flat"
                                                data-parent="radius">
                                                <div class="card rounded-md radius-flat p-3 mb-1 no-shadow">
                                                    <div class="figure figure-primary top"></div>
                                                    <div class="figure figure-secondary bottom"></div>
                                                </div>
                                                <div class="text-muted text-part">
                                                    <span class="text-extra-small align-middle">FLAT</span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="os-scrollbar os-scrollbar-horizontal os-scrollbar-unusable">
                            <div class="os-scrollbar-track os-scrollbar-track-off">
                                <div class="os-scrollbar-handle" style="transform: translate(0px, 0px);"></div>
                            </div>
                        </div>
                        <div class="os-scrollbar os-scrollbar-vertical os-scrollbar-unusable">
                            <div class="os-scrollbar-track os-scrollbar-track-off">
                                <div class="os-scrollbar-handle" style="transform: translate(0px, 0px);"></div>
                            </div>
                        </div>
                        <div class="os-scrollbar-corner"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade modal-right scroll-out-negative" id="niches" data-bs-backdrop="true" tabindex="-1"
        role="dialog" aria-labelledby="niches" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable full" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Niches</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div
                        class="scroll-track-visible os-host os-theme-dark os-host-resize-disabled os-host-scrollbar-horizontal-hidden os-host-scrollbar-vertical-hidden os-host-transition">
                        <div class="os-resize-observer-host observed">
                            <div class="os-resize-observer" style="left: 0px; right: auto;"></div>
                        </div>
                        <div class="os-size-auto-observer observed" style="height: calc(100% + 1px); float: left;">
                            <div class="os-resize-observer"></div>
                        </div>
                        <div class="os-content-glue" style="margin: 0px; width: 14px;"></div>
                        <div class="os-padding">
                            <div class="os-viewport os-viewport-native-scrollbars-invisible">
                                <div class="os-content" style="padding: 0px; height: 100%; width: 100%;">
                                    <div class="mb-5">
                                        <label class="mb-2 d-inline-block form-label">Classic Dashboard</label>
                                        <div
                                            class="hover-reveal-buttons position-relative hover-reveal cursor-default">
                                            <div class="position-relative mb-3 mb-lg-5 rounded-sm">
                                                <img src="https://acorn.coloredstrategies.com/img/page/classic-dashboard.webp"
                                                    class="img-fluid rounded-sm lower-opacity border border-separator-light"
                                                    alt="card image">
                                                <div
                                                    class="position-absolute reveal-content rounded-sm absolute-center-vertical text-center w-100">
                                                    <a target="_blank"
                                                        href="https://acorn-html-classic-dashboard.coloredstrategies.com/"
                                                        class="btn btn-primary btn-sm sw-10 sw-lg-12 d-block mx-auto my-1">
                                                        Html
                                                    </a>
                                                    <a target="_blank"
                                                        href="https://acorn-laravel-classic-dashboard.coloredstrategies.com/"
                                                        class="btn btn-primary btn-sm sw-10 sw-lg-12 d-block mx-auto my-1">
                                                        Laravel
                                                    </a>
                                                    <a target="_blank"
                                                        href="https://acorn-dotnet-classic-dashboard.coloredstrategies.com/"
                                                        class="btn btn-primary btn-sm sw-10 sw-lg-12 d-block mx-auto my-1">
                                                        .Net5
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-5">
                                        <label class="mb-2 d-inline-block form-label">Medical Assistant</label>
                                        <div
                                            class="hover-reveal-buttons position-relative hover-reveal cursor-default">
                                            <div class="position-relative mb-3 mb-lg-5 rounded-sm">
                                                <img src="https://acorn.coloredstrategies.com/img/page/medical-assistant.webp"
                                                    class="img-fluid rounded-sm lower-opacity border border-separator-light"
                                                    alt="card image">
                                                <div
                                                    class="position-absolute reveal-content rounded-sm absolute-center-vertical text-center w-100">
                                                    <a target="_blank"
                                                        href="https://acorn-html-medical-assistant.coloredstrategies.com/"
                                                        class="btn btn-primary btn-sm sw-10 sw-lg-12 d-block mx-auto my-1">
                                                        Html
                                                    </a>
                                                    <a target="_blank"
                                                        href="https://acorn-laravel-medical-assistant.coloredstrategies.com/"
                                                        class="btn btn-primary btn-sm sw-10 sw-lg-12 d-block mx-auto my-1">
                                                        Laravel
                                                    </a>
                                                    <a target="_blank"
                                                        href="https://acorn-dotnet-medical-assistant.coloredstrategies.com/"
                                                        class="btn btn-primary btn-sm sw-10 sw-lg-12 d-block mx-auto my-1">
                                                        .Net5
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-5">
                                        <label class="mb-2 d-inline-block form-label">Service Provider</label>
                                        <div
                                            class="hover-reveal-buttons position-relative hover-reveal cursor-default">
                                            <div class="position-relative mb-3 mb-lg-5 rounded-sm">
                                                <img src="https://acorn.coloredstrategies.com/img/page/service-provider.webp"
                                                    class="img-fluid rounded-sm lower-opacity border border-separator-light"
                                                    alt="card image">
                                                <div
                                                    class="position-absolute reveal-content rounded-sm absolute-center-vertical text-center w-100">
                                                    <a target="_blank"
                                                        href="https://acorn-html-service-provider.coloredstrategies.com/"
                                                        class="btn btn-primary btn-sm sw-10 sw-lg-12 d-block mx-auto my-1">
                                                        Html
                                                    </a>
                                                    <a target="_blank"
                                                        href="https://acorn-laravel-service-provider.coloredstrategies.com/"
                                                        class="btn btn-primary btn-sm sw-10 sw-lg-12 d-block mx-auto my-1">
                                                        Laravel
                                                    </a>
                                                    <a target="_blank"
                                                        href="https://acorn-dotnet-service-provider.coloredstrategies.com/"
                                                        class="btn btn-primary btn-sm sw-10 sw-lg-12 d-block mx-auto my-1">
                                                        .Net5
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-5">
                                        <label class="mb-2 d-inline-block form-label">Elearning Portal</label>
                                        <div
                                            class="hover-reveal-buttons position-relative hover-reveal cursor-default">
                                            <div class="position-relative mb-3 mb-lg-5 rounded-sm">
                                                <img src="https://acorn.coloredstrategies.com/img/page/elearning-portal.webp"
                                                    class="img-fluid rounded-sm lower-opacity border border-separator-light"
                                                    alt="card image">
                                                <div
                                                    class="position-absolute reveal-content rounded-sm absolute-center-vertical text-center w-100">
                                                    <a target="_blank"
                                                        href="https://acorn-html-elearning-portal.coloredstrategies.com/"
                                                        class="btn btn-primary btn-sm sw-10 sw-lg-12 d-block mx-auto my-1">
                                                        Html
                                                    </a>
                                                    <a target="_blank"
                                                        href="https://acorn-laravel-elearning-portal.coloredstrategies.com/"
                                                        class="btn btn-primary btn-sm sw-10 sw-lg-12 d-block mx-auto my-1">
                                                        Laravel
                                                    </a>
                                                    <a target="_blank"
                                                        href="https://acorn-dotnet-elearning-portal.coloredstrategies.com/"
                                                        class="btn btn-primary btn-sm sw-10 sw-lg-12 d-block mx-auto my-1">
                                                        .Net5
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-5">
                                        <label class="mb-2 d-inline-block form-label">Ecommerce Platform</label>
                                        <div
                                            class="hover-reveal-buttons position-relative hover-reveal cursor-default">
                                            <div class="position-relative mb-3 mb-lg-5 rounded-sm">
                                                <img src="https://acorn.coloredstrategies.com/img/page/ecommerce-platform.webp"
                                                    class="img-fluid rounded-sm lower-opacity border border-separator-light"
                                                    alt="card image">
                                                <div
                                                    class="position-absolute reveal-content rounded-sm absolute-center-vertical text-center w-100">
                                                    <a target="_blank"
                                                        href="https://acorn-html-ecommerce-platform.coloredstrategies.com/"
                                                        class="btn btn-primary btn-sm sw-10 sw-lg-12 d-block mx-auto my-1">
                                                        Html
                                                    </a>
                                                    <a target="_blank"
                                                        href="https://acorn-laravel-ecommerce-platform.coloredstrategies.com/"
                                                        class="btn btn-primary btn-sm sw-10 sw-lg-12 d-block mx-auto my-1">
                                                        Laravel
                                                    </a>
                                                    <a target="_blank"
                                                        href="https://acorn-dotnet-ecommerce-platform.coloredstrategies.com/"
                                                        class="btn btn-primary btn-sm sw-10 sw-lg-12 d-block mx-auto my-1">
                                                        .Net5
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-5">
                                        <label class="mb-2 d-inline-block form-label">Starter Project</label>
                                        <div
                                            class="hover-reveal-buttons position-relative hover-reveal cursor-default">
                                            <div class="position-relative mb-3 mb-lg-5 rounded-sm">
                                                <img src="https://acorn.coloredstrategies.com/img/page/starter-project.webp"
                                                    class="img-fluid rounded-sm lower-opacity border border-separator-light"
                                                    alt="card image">
                                                <div
                                                    class="position-absolute reveal-content rounded-sm absolute-center-vertical text-center w-100">
                                                    <a target="_blank"
                                                        href="https://acorn-html-starter-project.coloredstrategies.com/"
                                                        class="btn btn-primary btn-sm sw-10 sw-lg-12 d-block mx-auto my-1">
                                                        Html
                                                    </a>
                                                    <a target="_blank"
                                                        href="https://acorn-laravel-starter-project.coloredstrategies.com/"
                                                        class="btn btn-primary btn-sm sw-10 sw-lg-12 d-block mx-auto my-1">
                                                        Laravel
                                                    </a>
                                                    <a target="_blank"
                                                        href="https://acorn-dotnet-starter-project.coloredstrategies.com/"
                                                        class="btn btn-primary btn-sm sw-10 sw-lg-12 d-block mx-auto my-1">
                                                        .Net5
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="os-scrollbar os-scrollbar-horizontal os-scrollbar-unusable">
                            <div class="os-scrollbar-track os-scrollbar-track-off">
                                <div class="os-scrollbar-handle" style="transform: translate(0px, 0px);"></div>
                            </div>
                        </div>
                        <div class="os-scrollbar os-scrollbar-vertical os-scrollbar-unusable">
                            <div class="os-scrollbar-track os-scrollbar-track-off">
                                <div class="os-scrollbar-handle" style="transform: translate(0px, 0px);"></div>
                            </div>
                        </div>
                        <div class="os-scrollbar-corner"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="settings-buttons-container">
        <button type="button" class="btn settings-button btn-primary p-0" data-bs-toggle="modal"
            data-bs-target="#settings" id="settingsButton">
            <span class="d-inline-block no-delay" data-bs-delay="0" data-bs-offset="0,3" data-bs-toggle="tooltip"
                data-bs-placement="left" title="" data-bs-original-title="Settings">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"
                    fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                    stroke-linejoin="round" class="acorn-icons acorn-icons-paint-roller position-relative">
                    <path
                        d="M16 4.5V4.5C16 4.03534 16 3.80302 15.9616 3.60982C15.8038 2.81644 15.1836 2.19624 14.3902 2.03843C14.197 2 13.9647 2 13.5 2L4.5 2C4.03534 2 3.80302 2 3.60982 2.03843C2.81644 2.19624 2.19624 2.81644 2.03843 3.60982C2 3.80302 2 4.03534 2 4.5V4.5C2 4.96466 2 5.19698 2.03843 5.39018C2.19624 6.18356 2.81644 6.80376 3.60982 6.96157C3.80302 7 4.03534 7 4.5 7L13.5 7C13.9647 7 14.197 7 14.3902 6.96157C15.1836 6.80376 15.8038 6.18356 15.9616 5.39018C16 5.19698 16 4.96466 16 4.5V4.5ZM16 4.5V4.5C16.4659 4.5 16.6989 4.5 16.8827 4.57612C17.1277 4.67761 17.3224 4.87229 17.4239 5.11732C17.5 5.30109 17.5 5.53406 17.5 6V8.25C17.5 8.95223 17.5 9.30335 17.3315 9.55557C17.2585 9.66476 17.1648 9.75851 17.0556 9.83147C16.8033 10 16.4522 10 15.75 10H11.75C11.0478 10 10.6967 10 10.4444 10.1685C10.3352 10.2415 10.2415 10.3352 10.1685 10.4444C10 10.6967 10 11.0478 10 11.75V13.5">
                    </path>
                    <path
                        d="M10.125 13C10.4761 13 10.6517 13 10.7778 13.0843C10.8324 13.1207 10.8793 13.1676 10.9157 13.2222C11 13.3483 11 13.5239 11 13.875L11 17.125C11 17.4761 11 17.6517 10.9157 17.7778C10.8793 17.8324 10.8324 17.8793 10.7778 17.9157C10.6517 18 10.4761 18 10.125 18L9.875 18C9.52388 18 9.34833 18 9.22221 17.9157C9.16762 17.8793 9.12074 17.8324 9.08427 17.7778C9 17.6517 9 17.4761 9 17.125L9 13.875C9 13.5239 9 13.3483 9.08427 13.2222C9.12074 13.1676 9.16762 13.1207 9.22222 13.0843C9.34833 13 9.52388 13 9.875 13L10.125 13Z">
                    </path>
                </svg>
            </span>
        </button>
        <button type="button" class="btn settings-button btn-primary p-0" data-bs-toggle="modal"
            data-bs-target="#niches" id="nichesButton">
            <span class="d-inline-block no-delay" data-bs-delay="0" data-bs-offset="0,3" data-bs-toggle="tooltip"
                data-bs-placement="left" title="" data-bs-original-title="Niches">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"
                    fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                    stroke-linejoin="round" class="acorn-icons acorn-icons-toy position-relative">
                    <path d="M10 9 10 2M16 13V10C16 7.79086 14.2091 6 12 6L8 6C5.79086 6 4 7.79086 4 10V13M6 2H14">
                    </path>
                    <path
                        d="M5.26256 14.2626C5.75912 14.7591 6.00739 15.0074 6.06657 15.3049 6.09219 15.4337 6.09219 15.5663 6.06657 15.6951 6.00739 15.9926 5.75912 16.2409 5.26256 16.7374L5.23744 16.7626C4.74088 17.2591 4.49261 17.5074 4.19509 17.5666 4.06629 17.5922 3.93371 17.5922 3.80491 17.5666 3.50739 17.5074 3.25912 17.2591 2.76256 16.7626L2.73744 16.7374C2.24088 16.2409 1.99261 15.9926 1.93343 15.6951 1.90781 15.5663 1.90781 15.4337 1.93343 15.3049 1.99261 15.0074 2.24088 14.7591 2.73744 14.2626L2.76256 14.2374C3.25912 13.7409 3.50739 13.4926 3.80491 13.4334 3.93371 13.4078 4.06629 13.4078 4.19509 13.4334 4.49261 13.4926 4.74088 13.7409 5.23744 14.2374L5.26256 14.2626zM17.2626 14.2626C17.7591 14.7591 18.0074 15.0074 18.0666 15.3049 18.0922 15.4337 18.0922 15.5663 18.0666 15.6951 18.0074 15.9926 17.7591 16.2409 17.2626 16.7374L17.2374 16.7626C16.7409 17.2591 16.4926 17.5074 16.1951 17.5666 16.0663 17.5922 15.9337 17.5922 15.8049 17.5666 15.5074 17.5074 15.2591 17.2591 14.7626 16.7626L14.7374 16.7374C14.2409 16.2409 13.9926 15.9926 13.9334 15.6951 13.9078 15.5663 13.9078 15.4337 13.9334 15.3049 13.9926 15.0074 14.2409 14.7591 14.7374 14.2626L14.7626 14.2374C15.2591 13.7409 15.5074 13.4926 15.8049 13.4334 15.9337 13.4078 16.0663 13.4078 16.1951 13.4334 16.4926 13.4926 16.7409 13.7409 17.2374 14.2374L17.2626 14.2626zM11.2626 10.2626C11.7591 10.7591 12.0074 11.0074 12.0666 11.3049 12.0922 11.4337 12.0922 11.5663 12.0666 11.6951 12.0074 11.9926 11.7591 12.2409 11.2626 12.7374L11.2374 12.7626C10.7409 13.2591 10.4926 13.5074 10.1951 13.5666 10.0663 13.5922 9.93371 13.5922 9.80491 13.5666 9.50739 13.5074 9.25912 13.2591 8.76256 12.7626L8.73744 12.7374C8.24088 12.2409 7.99261 11.9926 7.93343 11.6951 7.90781 11.5663 7.90781 11.4337 7.93343 11.3049 7.99261 11.0074 8.24088 10.7591 8.73744 10.2626L8.76256 10.2374C9.25912 9.74088 9.50739 9.49261 9.80491 9.43343 9.93371 9.40781 10.0663 9.40781 10.1951 9.43343 10.4926 9.49261 10.7409 9.74088 11.2374 10.2374L11.2626 10.2626z">
                    </path>
                </svg>
            </span>
        </button>
    </div>
    @include('backend.inc.script')


</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#login-form').on('submit', function(event) {
            event.preventDefault();

            var email = $('#email').val();
            // console.log(email);
            var password = $('#password').val();

            $.ajax({
                url: "{{ route('login') }}",
                method: 'POST',
                dataType: 'json',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {
                    email: email,
                    password: password,
                },
                success: function(response) {
                    // Handle success, e.g., redirect to the dashboard
                    if (response.success == true) {
                        window.location.href = "{{ route('dashboard') }}";
                    }
                },
                error: function(xhr) {
                    // Handle error, e.g., display error message
                    var errorMessage = xhr.responseJSON.message;
                    $('#error-message').text(errorMessage);
                }
            });
        });
    });
</script>

</html>
