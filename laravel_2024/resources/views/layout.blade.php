{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 11 CRUD Appication -ItSolutionStuff.com</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=home" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    @livewireStyles
</head>

<body>
    <style>
        .sidebar {
            height: 100vh;
            width: 250px;
            position: fixed;
            top: 0;
            left: 0;
            background-color: #5590DF;
            padding-top: 20px;
        }

        .sidebar img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            display: block;
            margin: 0 auto;
        }

        .sidebar .menu {
            padding-top: 20px;
        }

        .sidebar .menu a {
            color: #fff;
            text-decoration: none;
            font-size: 18px;
            display: block;
            padding: 10px;
        }

        .sidebar .menu i {
            margin-right: 10px;
        }

        .sidebar .menu a:hover {
            background-color: #3e5065;
        }
    </style>
    </head>

    <body>

        <div class="sidebar">
            <img src="path_to_your_image.png" alt="Profile Picture">
            <div class="menu">
                <a class="btn btn-primary btn-primary " style="--bs-success"> 
                    <i class="fa fa-home "></i>หน้าหลัก</a>
                <a class="btn btn-primary btn-primary"> 
                    <i class="fa fa-home "></i>หน้าหลัก</a>
               
            </div>
        </div>
        <div class="container">
            @yield('content')
        </div>
        @livewireScripts
    </body>

</html> --}}
<!--
=========================================================
* Material Dashboard 3 - v3.2.0
=========================================================

* Product Page: https://www.creative-tim.com/product/material-dashboard
* Copyright 2024 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    Material Dashboard 3 by Creative Tim
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700,900" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0" />
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/material-dashboard.css?v=3.2.0" rel="stylesheet" />
  <style>@charset "UTF-8";

    /*!
     * Bootstrap  v5.3.3 (https://getbootstrap.com/)
     * Copyright 2011-2024 The Bootstrap Authors
     * Licensed under MIT (https://github.com/twbs/bootstrap/blob/main/LICENSE)
     */
    :root,
    [data-bs-theme=light] {
      --bs-blue: #63B3ED;
      --bs-indigo: #596CFF;
      --bs-purple: #6f42c1;
      --bs-pink: #d63384;
      --bs-red: #F56565;
      --bs-orange: #fd7e14;
      --bs-yellow: #FBD38D;
      --bs-green: #81E6D9;
      --bs-teal: #20c997;
      --bs-cyan: #0dcaf0;
      --bs-white: #fff;
      --bs-gray: #525252;
      --bs-gray-dark: #262626;
      --bs-gray-100: #f5f5f5;
      --bs-gray-200: #e5e5e5;
      --bs-gray-300: #d4d4d4;
      --bs-gray-400: #a3a3a3;
      --bs-gray-500: #737373;
      --bs-gray-600: #525252;
      --bs-gray-700: #404040;
      --bs-gray-800: #262626;
      --bs-gray-900: #171717;
      --bs-primary: #e91e63;
      --bs-secondary: #737373;
      --bs-success: #4CAF50;
      --bs-info: #1A73E8;
      --bs-warning: #fb8c00;
      --bs-danger: #F44335;
      --bs-light: #e5e5e5;
      --bs-dark: #262626;
      --bs-white: #fff;
      --bs-dark-blue: #1A237E;
      --bs-primary-rgb: 233, 30, 99;
      --bs-secondary-rgb: 115, 115, 115;
      --bs-success-rgb: 76, 175, 80;
      --bs-info-rgb: 26, 115, 232;
      --bs-warning-rgb: 251, 140, 0;
      --bs-danger-rgb: 244, 67, 53;
      --bs-light-rgb: 229, 229, 229;
      --bs-dark-rgb: 38, 38, 38;
      --bs-white-rgb: 255, 255, 255;
      --bs-dark-blue-rgb: 26, 35, 126;
      --bs-primary-text-emphasis: rgb(93.2, 12, 39.6);
      --bs-secondary-text-emphasis: #2e2e2e;
      --bs-success-text-emphasis: rgb(30.4, 70, 32);
      --bs-info-text-emphasis: rgb(10.4, 46, 92.8);
      --bs-warning-text-emphasis: rgb(100.4, 56, 0);
      --bs-danger-text-emphasis: rgb(97.6, 26.8, 21.2);
      --bs-light-text-emphasis: #404040;
      --bs-dark-text-emphasis: #404040;
      --bs-primary-bg-subtle: rgb(250.6, 210, 223.8);
      --bs-secondary-bg-subtle: #e3e3e3;
      --bs-success-bg-subtle: rgb(219.2, 239, 220);
      --bs-info-bg-subtle: rgb(209.2, 227, 250.4);
      --bs-warning-bg-subtle: rgb(254.2, 232, 204);
      --bs-danger-bg-subtle: rgb(252.8, 217.4, 214.6);
      --bs-light-bg-subtle: #fafafa;
      --bs-dark-bg-subtle: #a3a3a3;
      --bs-primary-border-subtle: rgb(246.2, 165, 192.6);
      --bs-secondary-border-subtle: #c7c7c7;
      --bs-success-border-subtle: rgb(183.4, 223, 185);
      --bs-info-border-subtle: rgb(163.4, 199, 245.8);
      --bs-warning-border-subtle: rgb(253.4, 209, 153);
      --bs-danger-border-subtle: rgb(250.6, 179.8, 174.2);
      --bs-light-border-subtle: #e5e5e5;
      --bs-dark-border-subtle: #737373;
      --bs-white-rgb: 255, 255, 255;
      --bs-black-rgb: 10, 10, 10;
      --bs-font-sans-serif: Inter, Helvetica, Arial, sans-serif;
      --bs-font-monospace: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
      --bs-gradient: linear-gradient(180deg, rgba(255, 255, 255, 0.15), rgba(255, 255, 255, 0));
      --bs-body-font-family: var(--bs-font-sans-serif);
      --bs-body-font-size: 1rem;
      --bs-body-font-weight: 400;
      --bs-body-line-height: 1.5;
      --bs-body-color: #737373;
      --bs-body-color-rgb: 115, 115, 115;
      --bs-body-bg: #fff;
      --bs-body-bg-rgb: 255, 255, 255;
      --bs-emphasis-color: #0a0a0a;
      --bs-emphasis-color-rgb: 10, 10, 10;
      --bs-secondary-color: rgba(115, 115, 115, 0.75);
      --bs-secondary-color-rgb: 115, 115, 115;
      --bs-secondary-bg: #e5e5e5;
      --bs-secondary-bg-rgb: 229, 229, 229;
      --bs-tertiary-color: rgba(115, 115, 115, 0.5);
      --bs-tertiary-color-rgb: 115, 115, 115;
      --bs-tertiary-bg: #f5f5f5;
      --bs-tertiary-bg-rgb: 245, 245, 245;
      --bs-heading-color: #262626;
      --bs-link-color: #e91e63;
      --bs-link-color-rgb: 233, 30, 99;
      --bs-link-decoration: none;
      --bs-link-hover-color: #e91e63;
      --bs-link-hover-color-rgb: 233, 30, 99;
      --bs-link-hover-decoration: none;
      --bs-code-color: #d63384;
      --bs-highlight-color: #737373;
      --bs-highlight-bg: #fcf8e3;
      --bs-border-width: 1px;
      --bs-border-style: solid;
      --bs-border-color: #d4d4d4;
      --bs-border-color-translucent: rgba(10, 10, 10, 0.175);
      --bs-border-radius: 0.375rem;
      --bs-border-radius-sm: 0.125rem;
      --bs-border-radius-lg: 0.5rem;
      --bs-border-radius-xl: 0.75rem;
      --bs-border-radius-xxl: 2rem;
      --bs-border-radius-2xl: var(--bs-border-radius-xxl);
      --bs-border-radius-pill: 50rem;
      --bs-box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
      --bs-box-shadow-sm: 0 0.3125rem 0.625rem 0 rgba(0, 0, 0, 0.12);
      --bs-box-shadow-lg: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
      --bs-box-shadow-inset: inset 0 1px 2px rgba(10, 10, 10, 0.075);
      --bs-focus-ring-width: 0.25rem;
      --bs-focus-ring-opacity: 0.25;
      --bs-focus-ring-color: rgba(233, 30, 99, 0.25);
      --bs-form-valid-color: #66d432;
      --bs-form-valid-border-color: #66d432;
      --bs-form-invalid-color: #fd5c70;
      --bs-form-invalid-border-color: #fd5c70;
    }
    
    [data-bs-theme=dark] {
      color-scheme: dark;
      --bs-body-color: #6344ec;
      --bs-body-color-rgb: 212, 212, 212;
      --bs-body-bg: #171717;
      --bs-body-bg-rgb: 23, 23, 23;
      --bs-emphasis-color: #fff;
      --bs-emphasis-color-rgb: 255, 255, 255;
      --bs-secondary-color: rgba(212, 212, 212, 0.75);
      --bs-secondary-color-rgb: 212, 212, 212;
      --bs-secondary-bg: #262626;
      --bs-secondary-bg-rgb: 38, 38, 38;
      --bs-tertiary-color: rgba(212, 212, 212, 0.5);
      --bs-tertiary-color-rgb: 212, 212, 212;
      --bs-tertiary-bg: rgb(30.5, 30.5, 30.5);
      --bs-tertiary-bg-rgb: 31, 31, 31;
      --bs-primary-text-emphasis: rgb(241.8, 120, 161.4);
      --bs-secondary-text-emphasis: #ababab;
      --bs-success-text-emphasis: rgb(147.6, 207, 150);
      --bs-info-text-emphasis: rgb(117.6, 171, 241.2);
      --bs-warning-text-emphasis: rgb(252.6, 186, 102);
      --bs-danger-text-emphasis: rgb(248.4, 142.2, 133.8);
      --bs-light-text-emphasis: #f5f5f5;
      --bs-dark-text-emphasis: #d4d4d4;
      --bs-primary-bg-subtle: rgb(46.6, 6, 19.8);
      --bs-secondary-bg-subtle: #171717;
      --bs-success-bg-subtle: rgb(15.2, 35, 16);
      --bs-info-bg-subtle: rgb(5.2, 23, 46.4);
      --bs-warning-bg-subtle: rgb(50.2, 28, 0);
      --bs-danger-bg-subtle: rgb(48.8, 13.4, 10.6);
      --bs-light-bg-subtle: #262626;
      --bs-dark-bg-subtle: #181818;
      --bs-primary-border-subtle: rgb(139.8, 18, 59.4);
      --bs-secondary-border-subtle: #454545;
      --bs-success-border-subtle: rgb(45.6, 105, 48);
      --bs-info-border-subtle: rgb(15.6, 69, 139.2);
      --bs-warning-border-subtle: rgb(150.6, 84, 0);
      --bs-danger-border-subtle: rgb(146.4, 40.2, 31.8);
      --bs-light-border-subtle: #404040;
      --bs-dark-border-subtle: #262626;
      --bs-heading-color: inherit;
      --bs-link-color: rgb(241.8, 120, 161.4);
      --bs-link-hover-color: rgb(244.44, 147, 180.12);
      --bs-link-color-rgb: 242, 120, 161;
      --bs-link-hover-color-rgb: 244, 147, 180;
      --bs-code-color: rgb(230.4, 132.6, 181.2);
      --bs-highlight-color: #d4d4d4;
      --bs-highlight-bg: rgb(235.94, 198.34, 132.54);
      --bs-border-color: #404040;
      --bs-border-color-translucent: rgba(255, 255, 255, 0.15);
      --bs-form-valid-color: rgb(134.04, 231, 218.52);
      --bs-form-valid-border-color: rgb(134.04, 231, 218.52);
      --bs-form-invalid-color: rgb(245.4, 107.16, 107.16);
      --bs-form-invalid-border-color: rgb(245.4, 107.16, 107.16);
    }
    
    *,
    *::before,
    *::after {
      box-sizing: border-box;
    }
    
    @media (prefers-reduced-motion: no-preference) {
      :root {
        scroll-behavior: smooth;
      }
    }
    
    body {
      margin: 0;
      font-family: var(--bs-body-font-family);
      font-size: var(--bs-body-font-size);
      font-weight: var(--bs-body-font-weight);
      line-height: var(--bs-body-line-height);
      color: var(--bs-body-color);
      text-align: var(--bs-body-text-align);
      background-color: var(--bs-body-bg);
      -webkit-text-size-adjust: 100%;
      -webkit-tap-highlight-color: rgba(10, 10, 10, 0);
    }
    
    hr {
      margin: 1rem 0;
      color: inherit;
      border: 0;
      border-top: var(--bs-border-width) solid;
      opacity: 0.25;
    }
    
    h6,
    .h6,
    h5,
    .h5,
    h4,
    .h4,
    h3,
    .h3,
    h2,
    .h2,
    h1,
    .h1 {
      margin-top: 0;
      margin-bottom: 0.5rem;
      font-weight: 400;
      line-height: 1.2;
      color: var(--bs-heading-color);
    }
    
    h1,
    .h1 {
      font-size: calc(1.425rem + 2.1vw);
    }
    
    @media (min-width: 1200px) {
    
      h1,
      .h1 {
        font-size: 3rem;
      }
    }
    
    h2,
    .h2 {
      font-size: calc(1.35rem + 1.2vw);
    }
    
    @media (min-width: 1200px) {
    
      h2,
      .h2 {
        font-size: 2.25rem;
      }
    }
    
    h3,
    .h3 {
      font-size: calc(1.3125rem + 0.75vw);
    }
    
    @media (min-width: 1200px) {
    
      h3,
      .h3 {
        font-size: 1.875rem;
      }
    }
    
    h4,
    .h4 {
      font-size: calc(1.275rem + 0.3vw);
    }
    
    @media (min-width: 1200px) {
    
      h4,
      .h4 {
        font-size: 1.5rem;
      }
    }
    
    h5,
    .h5 {
      font-size: 1.25rem;
    }
    
    h6,
    .h6 {
      font-size: 1rem;
    }
    
    p {
      margin-top: 0;
      margin-bottom: 1rem;
    }
    
    abbr[title] {
      text-decoration: underline dotted;
      cursor: help;
      text-decoration-skip-ink: none;
    }
    
    address {
      margin-bottom: 1rem;
      font-style: normal;
      line-height: inherit;
    }
    
    ol,
    ul {
      padding-left: 2rem;
    }
    
    ol,
    ul,
    dl {
      margin-top: 0;
      margin-bottom: 1rem;
    }
    
    ol ol,
    ul ul,
    ol ul,
    ul ol {
      margin-bottom: 0;
    }
    
    dt {
      font-weight: 600;
    }
    
    dd {
      margin-bottom: 0.5rem;
      margin-left: 0;
    }
    
    blockquote {
      margin: 0 0 1rem;
    }
    
    b,
    strong {
      font-weight: 700;
    }
    
    small,
    .small {
      font-size: 0.875em;
    }
    
    mark,
    .mark {
      padding: 0.2em;
      color: var(--bs-highlight-color);
      background-color: var(--bs-highlight-bg);
    }
    
    sub,
    sup {
      position: relative;
      font-size: 0.75em;
      line-height: 0;
      vertical-align: baseline;
    }
    
    sub {
      bottom: -0.25em;
    }
    
    sup {
      top: -0.5em;
    }
    
    a {
      color: rgba(var(--bs-link-color-rgb), var(--bs-link-opacity, 1));
      text-decoration: none;
    }
    
    a:hover {
      --bs-link-color-rgb: var(--bs-link-hover-color-rgb);
      text-decoration: none;
    }
    
    a:not([href]):not([class]),
    a:not([href]):not([class]):hover {
      color: inherit;
      text-decoration: none;
    }
    
    pre,
    code,
    kbd,
    samp {
      font-family: var(--bs-font-monospace);
      font-size: 1em;
    }
    
    pre {
      display: block;
      margin-top: 0;
      margin-bottom: 1rem;
      overflow: auto;
      font-size: 0.875em;
    }
    
    pre code {
      font-size: inherit;
      color: inherit;
      word-break: normal;
    }
    
    code {
      font-size: 0.875em;
      color: var(--bs-code-color);
      word-wrap: break-word;
    }
    
    a>code {
      color: inherit;
    }
    
    kbd {
      padding: 0.2rem 0.4rem;
      font-size: 0.875em;
      color: #fff;
      background-color: #171717;
      border-radius: 0.125rem;
    }
    
    kbd kbd {
      padding: 0;
      font-size: 1em;
      font-weight: 600;
    }
    
    figure {
      margin: 0 0 1rem;
    }
    
    img,
    svg {
      vertical-align: middle;
    }
    
    table {
      caption-side: bottom;
      border-collapse: collapse;
    }
    
    caption {
      padding-top: 0.5rem;
      padding-bottom: 0.5rem;
      color: #525252;
      text-align: left;
    }
    
    th {
      text-align: inherit;
      text-align: -webkit-match-parent;
    }
    
    thead,
    tbody,
    tfoot,
    tr,
    td,
    th {
      border-color: inherit;
      border-style: solid;
      border-width: 0;
    }
    
    label {
      display: inline-block;
    }
    
    button {
      border-radius: 0;
    }
    
    button:focus:not(:focus-visible) {
      outline: 0;
    }
    
    input,
    button,
    select,
    optgroup,
    textarea {
      margin: 0;
      font-family: inherit;
      font-size: inherit;
      line-height: inherit;
    }
    
    button,
    select {
      text-transform: none;
    }
    
    [role=button] {
      cursor: pointer;
    }
    
    select {
      word-wrap: normal;
    }
    
    select:disabled {
      opacity: 1;
    }
    
    [list]:not([type=date]):not([type=datetime-local]):not([type=month]):not([type=week]):not([type=time])::-webkit-calendar-picker-indicator {
      display: none !important;
    }
    
    button,
    [type=button],
    [type=reset],
    [type=submit] {
      -webkit-appearance: button;
    }
    
    button:not(:disabled),
    [type=button]:not(:disabled),
    [type=reset]:not(:disabled),
    [type=submit]:not(:disabled) {
      cursor: pointer;
    }
    
    ::-moz-focus-inner {
      padding: 0;
      border-style: none;
    }
    
    textarea {
      resize: vertical;
    }
    
    fieldset {
      min-width: 0;
      padding: 0;
      margin: 0;
      border: 0;
    }
    
    legend {
      float: left;
      width: 100%;
      padding: 0;
      margin-bottom: 0.5rem;
      font-size: calc(1.275rem + 0.3vw);
      line-height: inherit;
    }
    
    @media (min-width: 1200px) {
      legend {
        font-size: 1.5rem;
      }
    }
    
    legend+* {
      clear: left;
    }
    
    ::-webkit-datetime-edit-fields-wrapper,
    ::-webkit-datetime-edit-text,
    ::-webkit-datetime-edit-minute,
    ::-webkit-datetime-edit-hour-field,
    ::-webkit-datetime-edit-day-field,
    ::-webkit-datetime-edit-month-field,
    ::-webkit-datetime-edit-year-field {
      padding: 0;
    }
    
    ::-webkit-inner-spin-button {
      height: auto;
    }
    
    [type=search] {
      -webkit-appearance: textfield;
      outline-offset: -2px;
    }
    
    /* rtl:raw:
    [type="tel"],
    [type="url"],
    [type="email"],
    [type="number"] {
      direction: ltr;
    }
    */
    ::-webkit-search-decoration {
      -webkit-appearance: none;
    }
    
    ::-webkit-color-swatch-wrapper {
      padding: 0;
    }
    
    ::file-selector-button {
      font: inherit;
      -webkit-appearance: button;
    }
    
    output {
      display: inline-block;
    }
    
    iframe {
      border: 0;
    }
    
    summary {
      display: list-item;
      cursor: pointer;
    }
    
    progress {
      vertical-align: baseline;
    }
    
    [hidden] {
      display: none !important;
    }
    
    .lead {
      font-size: 1.25rem;
      font-weight: 400;
    }
    
    .display-1 {
      font-size: calc(1.625rem + 4.5vw);
      font-weight: 300;
      line-height: 1.2;
    }
    
    @media (min-width: 1200px) {
      .display-1 {
        font-size: 5rem;
      }
    }
    
    .display-2 {
      font-size: calc(1.575rem + 3.9vw);
      font-weight: 300;
      line-height: 1.2;
    }
    
    @media (min-width: 1200px) {
      .display-2 {
        font-size: 4.5rem;
      }
    }
    
    .display-3 {
      font-size: calc(1.525rem + 3.3vw);
      font-weight: 300;
      line-height: 1.2;
    }
    
    @media (min-width: 1200px) {
      .display-3 {
        font-size: 4rem;
      }
    }
    
    .display-4 {
      font-size: calc(1.475rem + 2.7vw);
      font-weight: 300;
      line-height: 1.2;
    }
    
    @media (min-width: 1200px) {
      .display-4 {
        font-size: 3.5rem;
      }
    }
    
    .display-5 {
      font-size: calc(1.425rem + 2.1vw);
      font-weight: 300;
      line-height: 1.2;
    }
    
    @media (min-width: 1200px) {
      .display-5 {
        font-size: 3rem;
      }
    }
    
    .display-6 {
      font-size: calc(1.375rem + 1.5vw);
      font-weight: 300;
      line-height: 1.2;
    }
    
    @media (min-width: 1200px) {
      .display-6 {
        font-size: 2.5rem;
      }
    }
    
    .list-unstyled {
      padding-left: 0;
      list-style: none;
    }
    
    .list-inline {
      padding-left: 0;
      list-style: none;
    }
    
    .list-inline-item {
      display: inline-block;
    }
    
    .list-inline-item:not(:last-child) {
      margin-right: 0.5rem;
    }
    
    .initialism {
      font-size: 0.875em;
      text-transform: uppercase;
    }
    
    .blockquote {
      margin-bottom: 1rem;
      font-size: 1.25rem;
    }
    
    .blockquote> :last-child {
      margin-bottom: 0;
    }
    
    .blockquote-footer {
      margin-top: -1rem;
      margin-bottom: 1rem;
      font-size: 0.875em;
      color: #525252;
    }
    
    .blockquote-footer::before {
      content: "— ";
    }
    
    .img-fluid {
      max-width: 100%;
      height: auto;
    }
    
    .img-thumbnail {
      padding: 0.25rem;
      background-color: #fff;
      border: 1px solid #d4d4d4;
      border-radius: 0.375rem;
      max-width: 100%;
      height: auto;
    }
    
    .figure {
      display: inline-block;
    }
    
    .figure-img {
      margin-bottom: 0.5rem;
      line-height: 1;
    }
    
    .figure-caption {
      font-size: 0.875em;
      color: #525252;
    }
    
    .container,
    .container-fluid,
    .container-xxl,
    .container-xl,
    .container-lg,
    .container-md,
    .container-sm {
      --bs-gutter-x: 1.5rem;
      --bs-gutter-y: 0;
      width: 100%;
      padding-right: calc(var(--bs-gutter-x) * 0.5);
      padding-left: calc(var(--bs-gutter-x) * 0.5);
      margin-right: auto;
      margin-left: auto;
    }
    
    @media (min-width: 576px) {
    
      .container-sm,
      .container {
        max-width: 540px;
      }
    }
    
    @media (min-width: 768px) {
    
      .container-md,
      .container-sm,
      .container {
        max-width: 720px;
      }
    }
    
    @media (min-width: 992px) {
    
      .container-lg,
      .container-md,
      .container-sm,
      .container {
        max-width: 960px;
      }
    }
    
    @media (min-width: 1200px) {
    
      .container-xl,
      .container-lg,
      .container-md,
      .container-sm,
      .container {
        max-width: 1140px;
      }
    }
    
    @media (min-width: 1400px) {
    
      .container-xxl,
      .container-xl,
      .container-lg,
      .container-md,
      .container-sm,
      .container {
        max-width: 1320px;
      }
    }
    
    :root {
      --bs-breakpoint-xs: 0;
      --bs-breakpoint-sm: 576px;
      --bs-breakpoint-md: 768px;
      --bs-breakpoint-lg: 992px;
      --bs-breakpoint-xl: 1200px;
      --bs-breakpoint-xxl: 1400px;
    }
    
    .row {
      --bs-gutter-x: 1.5rem;
      --bs-gutter-y: 0;
      display: flex;
      flex-wrap: wrap;
      margin-top: calc(-1 * var(--bs-gutter-y));
      margin-right: calc(-0.5 * var(--bs-gutter-x));
      margin-left: calc(-0.5 * var(--bs-gutter-x));
    }
    
    .row>* {
      flex-shrink: 0;
      width: 100%;
      max-width: 100%;
      padding-right: calc(var(--bs-gutter-x) * 0.5);
      padding-left: calc(var(--bs-gutter-x) * 0.5);
      margin-top: var(--bs-gutter-y);
    }
    
    .col {
      flex: 1 0 0%;
    }
    
    .row-cols-auto>* {
      flex: 0 0 auto;
      width: auto;
    }
    
    .row-cols-1>* {
      flex: 0 0 auto;
      width: 100%;
    }
    
    .row-cols-2>* {
      flex: 0 0 auto;
      width: 50%;
    }
    
    .row-cols-3>* {
      flex: 0 0 auto;
      width: 33.33333333%;
    }
    
    .row-cols-4>* {
      flex: 0 0 auto;
      width: 25%;
    }
    
    .row-cols-5>* {
      flex: 0 0 auto;
      width: 20%;
    }
    
    .row-cols-6>* {
      flex: 0 0 auto;
      width: 16.66666667%;
    }
    
    .col-auto {
      flex: 0 0 auto;
      width: auto;
    }
    
    .col-1 {
      flex: 0 0 auto;
      width: 8.33333333%;
    }
    
    .col-2 {
      flex: 0 0 auto;
      width: 16.66666667%;
    }
    
    .col-3 {
      flex: 0 0 auto;
      width: 25%;
    }
    
    .col-4 {
      flex: 0 0 auto;
      width: 33.33333333%;
    }
    
    .col-5 {
      flex: 0 0 auto;
      width: 41.66666667%;
    }
    
    .col-6 {
      flex: 0 0 auto;
      width: 50%;
    }
    
    .col-7 {
      flex: 0 0 auto;
      width: 58.33333333%;
    }
    
    .col-8 {
      flex: 0 0 auto;
      width: 66.66666667%;
    }
    
    .col-9 {
      flex: 0 0 auto;
      width: 75%;
    }
    
    .col-10 {
      flex: 0 0 auto;
      width: 83.33333333%;
    }
    
    .col-11 {
      flex: 0 0 auto;
      width: 91.66666667%;
    }
    
    .col-12 {
      flex: 0 0 auto;
      width: 100%;
    }
    
    .offset-1 {
      margin-left: 8.33333333%;
    }
    
    .offset-2 {
      margin-left: 16.66666667%;
    }
    
    .offset-3 {
      margin-left: 25%;
    }
    
    .offset-4 {
      margin-left: 33.33333333%;
    }
    
    .offset-5 {
      margin-left: 41.66666667%;
    }
    
    .offset-6 {
      margin-left: 50%;
    }
    
    .offset-7 {
      margin-left: 58.33333333%;
    }
    
    .offset-8 {
      margin-left: 66.66666667%;
    }
    
    .offset-9 {
      margin-left: 75%;
    }
    
    .offset-10 {
      margin-left: 83.33333333%;
    }
    
    .offset-11 {
      margin-left: 91.66666667%;
    }
    
    .g-0,
    .gx-0 {
      --bs-gutter-x: 0;
    }
    
    .g-0,
    .gy-0 {
      --bs-gutter-y: 0;
    }
    
    .g-1,
    .gx-1 {
      --bs-gutter-x: 0.25rem;
    }
    
    .g-1,
    .gy-1 {
      --bs-gutter-y: 0.25rem;
    }
    
    .g-2,
    .gx-2 {
      --bs-gutter-x: 0.5rem;
    }
    
    .g-2,
    .gy-2 {
      --bs-gutter-y: 0.5rem;
    }
    
    .g-3,
    .gx-3 {
      --bs-gutter-x: 1rem;
    }
    
    .g-3,
    .gy-3 {
      --bs-gutter-y: 1rem;
    }
    
    .g-4,
    .gx-4 {
      --bs-gutter-x: 1.5rem;
    }
    
    .g-4,
    .gy-4 {
      --bs-gutter-y: 1.5rem;
    }
    
    .g-5,
    .gx-5 {
      --bs-gutter-x: 3rem;
    }
    
    .g-5,
    .gy-5 {
      --bs-gutter-y: 3rem;
    }
    
    .g-6,
    .gx-6 {
      --bs-gutter-x: 4rem;
    }
    
    .g-6,
    .gy-6 {
      --bs-gutter-y: 4rem;
    }
    
    .g-7,
    .gx-7 {
      --bs-gutter-x: 6rem;
    }
    
    .g-7,
    .gy-7 {
      --bs-gutter-y: 6rem;
    }
    
    .g-8,
    .gx-8 {
      --bs-gutter-x: 8rem;
    }
    
    .g-8,
    .gy-8 {
      --bs-gutter-y: 8rem;
    }
    
    .g-9,
    .gx-9 {
      --bs-gutter-x: 10rem;
    }
    
    .g-9,
    .gy-9 {
      --bs-gutter-y: 10rem;
    }
    
    .g-10,
    .gx-10 {
      --bs-gutter-x: 12rem;
    }
    
    .g-10,
    .gy-10 {
      --bs-gutter-y: 12rem;
    }
    
    .g-11,
    .gx-11 {
      --bs-gutter-x: 14rem;
    }
    
    .g-11,
    .gy-11 {
      --bs-gutter-y: 14rem;
    }
    
    .g-12,
    .gx-12 {
      --bs-gutter-x: 16rem;
    }
    
    .g-12,
    .gy-12 {
      --bs-gutter-y: 16rem;
    }
    
    @media (min-width: 576px) {
      .col-sm {
        flex: 1 0 0%;
      }
    
      .row-cols-sm-auto>* {
        flex: 0 0 auto;
        width: auto;
      }
    
      .row-cols-sm-1>* {
        flex: 0 0 auto;
        width: 100%;
      }
    
      .row-cols-sm-2>* {
        flex: 0 0 auto;
        width: 50%;
      }
    
      .row-cols-sm-3>* {
        flex: 0 0 auto;
        width: 33.33333333%;
      }
    
      .row-cols-sm-4>* {
        flex: 0 0 auto;
        width: 25%;
      }
    
      .row-cols-sm-5>* {
        flex: 0 0 auto;
        width: 20%;
      }
    
      .row-cols-sm-6>* {
        flex: 0 0 auto;
        width: 16.66666667%;
      }
    
      .col-sm-auto {
        flex: 0 0 auto;
        width: auto;
      }
    
      .col-sm-1 {
        flex: 0 0 auto;
        width: 8.33333333%;
      }
    
      .col-sm-2 {
        flex: 0 0 auto;
        width: 16.66666667%;
      }
    
      .col-sm-3 {
        flex: 0 0 auto;
        width: 25%;
      }
    
      .col-sm-4 {
        flex: 0 0 auto;
        width: 33.33333333%;
      }
    
      .col-sm-5 {
        flex: 0 0 auto;
        width: 41.66666667%;
      }
    
      .col-sm-6 {
        flex: 0 0 auto;
        width: 50%;
      }
    
      .col-sm-7 {
        flex: 0 0 auto;
        width: 58.33333333%;
      }
    
      .col-sm-8 {
        flex: 0 0 auto;
        width: 66.66666667%;
      }
    
      .col-sm-9 {
        flex: 0 0 auto;
        width: 75%;
      }
    
      .col-sm-10 {
        flex: 0 0 auto;
        width: 83.33333333%;
      }
    
      .col-sm-11 {
        flex: 0 0 auto;
        width: 91.66666667%;
      }
    
      .col-sm-12 {
        flex: 0 0 auto;
        width: 100%;
      }
    
      .offset-sm-0 {
        margin-left: 0;
      }
    
      .offset-sm-1 {
        margin-left: 8.33333333%;
      }
    
      .offset-sm-2 {
        margin-left: 16.66666667%;
      }
    
      .offset-sm-3 {
        margin-left: 25%;
      }
    
      .offset-sm-4 {
        margin-left: 33.33333333%;
      }
    
      .offset-sm-5 {
        margin-left: 41.66666667%;
      }
    
      .offset-sm-6 {
        margin-left: 50%;
      }
    
      .offset-sm-7 {
        margin-left: 58.33333333%;
      }
    
      .offset-sm-8 {
        margin-left: 66.66666667%;
      }
    
      .offset-sm-9 {
        margin-left: 75%;
      }
    
      .offset-sm-10 {
        margin-left: 83.33333333%;
      }
    
      .offset-sm-11 {
        margin-left: 91.66666667%;
      }
    
      .g-sm-0,
      .gx-sm-0 {
        --bs-gutter-x: 0;
      }
    
      .g-sm-0,
      .gy-sm-0 {
        --bs-gutter-y: 0;
      }
    
      .g-sm-1,
      .gx-sm-1 {
        --bs-gutter-x: 0.25rem;
      }
    
      .g-sm-1,
      .gy-sm-1 {
        --bs-gutter-y: 0.25rem;
      }
    
      .g-sm-2,
      .gx-sm-2 {
        --bs-gutter-x: 0.5rem;
      }
    
      .g-sm-2,
      .gy-sm-2 {
        --bs-gutter-y: 0.5rem;
      }
    
      .g-sm-3,
      .gx-sm-3 {
        --bs-gutter-x: 1rem;
      }
    
      .g-sm-3,
      .gy-sm-3 {
        --bs-gutter-y: 1rem;
      }
    
      .g-sm-4,
      .gx-sm-4 {
        --bs-gutter-x: 1.5rem;
      }
    
      .g-sm-4,
      .gy-sm-4 {
        --bs-gutter-y: 1.5rem;
      }
    
      .g-sm-5,
      .gx-sm-5 {
        --bs-gutter-x: 3rem;
      }
    
      .g-sm-5,
      .gy-sm-5 {
        --bs-gutter-y: 3rem;
      }
    
      .g-sm-6,
      .gx-sm-6 {
        --bs-gutter-x: 4rem;
      }
    
      .g-sm-6,
      .gy-sm-6 {
        --bs-gutter-y: 4rem;
      }
    
      .g-sm-7,
      .gx-sm-7 {
        --bs-gutter-x: 6rem;
      }
    
      .g-sm-7,
      .gy-sm-7 {
        --bs-gutter-y: 6rem;
      }
    
      .g-sm-8,
      .gx-sm-8 {
        --bs-gutter-x: 8rem;
      }
    
      .g-sm-8,
      .gy-sm-8 {
        --bs-gutter-y: 8rem;
      }
    
      .g-sm-9,
      .gx-sm-9 {
        --bs-gutter-x: 10rem;
      }
    
      .g-sm-9,
      .gy-sm-9 {
        --bs-gutter-y: 10rem;
      }
    
      .g-sm-10,
      .gx-sm-10 {
        --bs-gutter-x: 12rem;
      }
    
      .g-sm-10,
      .gy-sm-10 {
        --bs-gutter-y: 12rem;
      }
    
      .g-sm-11,
      .gx-sm-11 {
        --bs-gutter-x: 14rem;
      }
    
      .g-sm-11,
      .gy-sm-11 {
        --bs-gutter-y: 14rem;
      }
    
      .g-sm-12,
      .gx-sm-12 {
        --bs-gutter-x: 16rem;
      }
    
      .g-sm-12,
      .gy-sm-12 {
        --bs-gutter-y: 16rem;
      }
    }
    
    @media (min-width: 768px) {
      .col-md {
        flex: 1 0 0%;
      }
    
      .row-cols-md-auto>* {
        flex: 0 0 auto;
        width: auto;
      }
    
      .row-cols-md-1>* {
        flex: 0 0 auto;
        width: 100%;
      }
    
      .row-cols-md-2>* {
        flex: 0 0 auto;
        width: 50%;
      }
    
      .row-cols-md-3>* {
        flex: 0 0 auto;
        width: 33.33333333%;
      }
    
      .row-cols-md-4>* {
        flex: 0 0 auto;
        width: 25%;
      }
    
      .row-cols-md-5>* {
        flex: 0 0 auto;
        width: 20%;
      }
    
      .row-cols-md-6>* {
        flex: 0 0 auto;
        width: 16.66666667%;
      }
    
      .col-md-auto {
        flex: 0 0 auto;
        width: auto;
      }
    
      .col-md-1 {
        flex: 0 0 auto;
        width: 8.33333333%;
      }
    
      .col-md-2 {
        flex: 0 0 auto;
        width: 16.66666667%;
      }
    
      .col-md-3 {
        flex: 0 0 auto;
        width: 25%;
      }
    
      .col-md-4 {
        flex: 0 0 auto;
        width: 33.33333333%;
      }
    
      .col-md-5 {
        flex: 0 0 auto;
        width: 41.66666667%;
      }
    
      .col-md-6 {
        flex: 0 0 auto;
        width: 50%;
      }
    
      .col-md-7 {
        flex: 0 0 auto;
        width: 58.33333333%;
      }
    
      .col-md-8 {
        flex: 0 0 auto;
        width: 66.66666667%;
      }
    
      .col-md-9 {
        flex: 0 0 auto;
        width: 75%;
      }
    
      .col-md-10 {
        flex: 0 0 auto;
        width: 83.33333333%;
      }
    
      .col-md-11 {
        flex: 0 0 auto;
        width: 91.66666667%;
      }
    
      .col-md-12 {
        flex: 0 0 auto;
        width: 100%;
      }
    
      .offset-md-0 {
        margin-left: 0;
      }
    
      .offset-md-1 {
        margin-left: 8.33333333%;
      }
    
      .offset-md-2 {
        margin-left: 16.66666667%;
      }
    
      .offset-md-3 {
        margin-left: 25%;
      }
    
      .offset-md-4 {
        margin-left: 33.33333333%;
      }
    
      .offset-md-5 {
        margin-left: 41.66666667%;
      }
    
      .offset-md-6 {
        margin-left: 50%;
      }
    
      .offset-md-7 {
        margin-left: 58.33333333%;
      }
    
      .offset-md-8 {
        margin-left: 66.66666667%;
      }
    
      .offset-md-9 {
        margin-left: 75%;
      }
    
      .offset-md-10 {
        margin-left: 83.33333333%;
      }
    
      .offset-md-11 {
        margin-left: 91.66666667%;
      }
    
      .g-md-0,
      .gx-md-0 {
        --bs-gutter-x: 0;
      }
    
      .g-md-0,
      .gy-md-0 {
        --bs-gutter-y: 0;
      }
    
      .g-md-1,
      .gx-md-1 {
        --bs-gutter-x: 0.25rem;
      }
    
      .g-md-1,
      .gy-md-1 {
        --bs-gutter-y: 0.25rem;
      }
    
      .g-md-2,
      .gx-md-2 {
        --bs-gutter-x: 0.5rem;
      }
    
      .g-md-2,
      .gy-md-2 {
        --bs-gutter-y: 0.5rem;
      }
    
      .g-md-3,
      .gx-md-3 {
        --bs-gutter-x: 1rem;
      }
    
      .g-md-3,
      .gy-md-3 {
        --bs-gutter-y: 1rem;
      }
    
      .g-md-4,
      .gx-md-4 {
        --bs-gutter-x: 1.5rem;
      }
    
      .g-md-4,
      .gy-md-4 {
        --bs-gutter-y: 1.5rem;
      }
    
      .g-md-5,
      .gx-md-5 {
        --bs-gutter-x: 3rem;
      }
    
      .g-md-5,
      .gy-md-5 {
        --bs-gutter-y: 3rem;
      }
    
      .g-md-6,
      .gx-md-6 {
        --bs-gutter-x: 4rem;
      }
    
      .g-md-6,
      .gy-md-6 {
        --bs-gutter-y: 4rem;
      }
    
      .g-md-7,
      .gx-md-7 {
        --bs-gutter-x: 6rem;
      }
    
      .g-md-7,
      .gy-md-7 {
        --bs-gutter-y: 6rem;
      }
    
      .g-md-8,
      .gx-md-8 {
        --bs-gutter-x: 8rem;
      }
    
      .g-md-8,
      .gy-md-8 {
        --bs-gutter-y: 8rem;
      }
    
      .g-md-9,
      .gx-md-9 {
        --bs-gutter-x: 10rem;
      }
    
      .g-md-9,
      .gy-md-9 {
        --bs-gutter-y: 10rem;
      }
    
      .g-md-10,
      .gx-md-10 {
        --bs-gutter-x: 12rem;
      }
    
      .g-md-10,
      .gy-md-10 {
        --bs-gutter-y: 12rem;
      }
    
      .g-md-11,
      .gx-md-11 {
        --bs-gutter-x: 14rem;
      }
    
      .g-md-11,
      .gy-md-11 {
        --bs-gutter-y: 14rem;
      }
    
      .g-md-12,
      .gx-md-12 {
        --bs-gutter-x: 16rem;
      }
    
      .g-md-12,
      .gy-md-12 {
        --bs-gutter-y: 16rem;
      }
    }
    
    @media (min-width: 992px) {
      .col-lg {
        flex: 1 0 0%;
      }
    
      .row-cols-lg-auto>* {
        flex: 0 0 auto;
        width: auto;
      }
    
      .row-cols-lg-1>* {
        flex: 0 0 auto;
        width: 100%;
      }
    
      .row-cols-lg-2>* {
        flex: 0 0 auto;
        width: 50%;
      }
    
      .row-cols-lg-3>* {
        flex: 0 0 auto;
        width: 33.33333333%;
      }
    
      .row-cols-lg-4>* {
        flex: 0 0 auto;
        width: 25%;
      }
    
      .row-cols-lg-5>* {
        flex: 0 0 auto;
        width: 20%;
      }
    
      .row-cols-lg-6>* {
        flex: 0 0 auto;
        width: 16.66666667%;
      }
    
      .col-lg-auto {
        flex: 0 0 auto;
        width: auto;
      }
    
      .col-lg-1 {
        flex: 0 0 auto;
        width: 8.33333333%;
      }
    
      .col-lg-2 {
        flex: 0 0 auto;
        width: 16.66666667%;
      }
    
      .col-lg-3 {
        flex: 0 0 auto;
        width: 25%;
      }
    
      .col-lg-4 {
        flex: 0 0 auto;
        width: 33.33333333%;
      }
    
      .col-lg-5 {
        flex: 0 0 auto;
        width: 41.66666667%;
      }
    
      .col-lg-6 {
        flex: 0 0 auto;
        width: 50%;
      }
    
      .col-lg-7 {
        flex: 0 0 auto;
        width: 58.33333333%;
      }
    
      .col-lg-8 {
        flex: 0 0 auto;
        width: 66.66666667%;
      }
    
      .col-lg-9 {
        flex: 0 0 auto;
        width: 75%;
      }
    
      .col-lg-10 {
        flex: 0 0 auto;
        width: 83.33333333%;
      }
    
      .col-lg-11 {
        flex: 0 0 auto;
        width: 91.66666667%;
      }
    
      .col-lg-12 {
        flex: 0 0 auto;
        width: 100%;
      }
    
      .offset-lg-0 {
        margin-left: 0;
      }
    
      .offset-lg-1 {
        margin-left: 8.33333333%;
      }
    
      .offset-lg-2 {
        margin-left: 16.66666667%;
      }
    
      .offset-lg-3 {
        margin-left: 25%;
      }
    
      .offset-lg-4 {
        margin-left: 33.33333333%;
      }
    
      .offset-lg-5 {
        margin-left: 41.66666667%;
      }
    
      .offset-lg-6 {
        margin-left: 50%;
      }
    
      .offset-lg-7 {
        margin-left: 58.33333333%;
      }
    
      .offset-lg-8 {
        margin-left: 66.66666667%;
      }
    
      .offset-lg-9 {
        margin-left: 75%;
      }
    
      .offset-lg-10 {
        margin-left: 83.33333333%;
      }
    
      .offset-lg-11 {
        margin-left: 91.66666667%;
      }
    
      .g-lg-0,
      .gx-lg-0 {
        --bs-gutter-x: 0;
      }
    
      .g-lg-0,
      .gy-lg-0 {
        --bs-gutter-y: 0;
      }
    
      .g-lg-1,
      .gx-lg-1 {
        --bs-gutter-x: 0.25rem;
      }
    
      .g-lg-1,
      .gy-lg-1 {
        --bs-gutter-y: 0.25rem;
      }
    
      .g-lg-2,
      .gx-lg-2 {
        --bs-gutter-x: 0.5rem;
      }
    
      .g-lg-2,
      .gy-lg-2 {
        --bs-gutter-y: 0.5rem;
      }
    
      .g-lg-3,
      .gx-lg-3 {
        --bs-gutter-x: 1rem;
      }
    
      .g-lg-3,
      .gy-lg-3 {
        --bs-gutter-y: 1rem;
      }
    
      .g-lg-4,
      .gx-lg-4 {
        --bs-gutter-x: 1.5rem;
      }
    
      .g-lg-4,
      .gy-lg-4 {
        --bs-gutter-y: 1.5rem;
      }
    
      .g-lg-5,
      .gx-lg-5 {
        --bs-gutter-x: 3rem;
      }
    
      .g-lg-5,
      .gy-lg-5 {
        --bs-gutter-y: 3rem;
      }
    
      .g-lg-6,
      .gx-lg-6 {
        --bs-gutter-x: 4rem;
      }
    
      .g-lg-6,
      .gy-lg-6 {
        --bs-gutter-y: 4rem;
      }
    
      .g-lg-7,
      .gx-lg-7 {
        --bs-gutter-x: 6rem;
      }
    
      .g-lg-7,
      .gy-lg-7 {
        --bs-gutter-y: 6rem;
      }
    
      .g-lg-8,
      .gx-lg-8 {
        --bs-gutter-x: 8rem;
      }
    
      .g-lg-8,
      .gy-lg-8 {
        --bs-gutter-y: 8rem;
      }
    
      .g-lg-9,
      .gx-lg-9 {
        --bs-gutter-x: 10rem;
      }
    
      .g-lg-9,
      .gy-lg-9 {
        --bs-gutter-y: 10rem;
      }
    
      .g-lg-10,
      .gx-lg-10 {
        --bs-gutter-x: 12rem;
      }
    
      .g-lg-10,
      .gy-lg-10 {
        --bs-gutter-y: 12rem;
      }
    
      .g-lg-11,
      .gx-lg-11 {
        --bs-gutter-x: 14rem;
      }
    
      .g-lg-11,
      .gy-lg-11 {
        --bs-gutter-y: 14rem;
      }
    
      .g-lg-12,
      .gx-lg-12 {
        --bs-gutter-x: 16rem;
      }
    
      .g-lg-12,
      .gy-lg-12 {
        --bs-gutter-y: 16rem;
      }
    }
    
    @media (min-width: 1200px) {
      .col-xl {
        flex: 1 0 0%;
      }
    
      .row-cols-xl-auto>* {
        flex: 0 0 auto;
        width: auto;
      }
    
      .row-cols-xl-1>* {
        flex: 0 0 auto;
        width: 100%;
      }
    
      .row-cols-xl-2>* {
        flex: 0 0 auto;
        width: 50%;
      }
    
      .row-cols-xl-3>* {
        flex: 0 0 auto;
        width: 33.33333333%;
      }
    
      .row-cols-xl-4>* {
        flex: 0 0 auto;
        width: 25%;
      }
    
      .row-cols-xl-5>* {
        flex: 0 0 auto;
        width: 20%;
      }
    
      .row-cols-xl-6>* {
        flex: 0 0 auto;
        width: 16.66666667%;
      }
    
      .col-xl-auto {
        flex: 0 0 auto;
        width: auto;
      }
    
      .col-xl-1 {
        flex: 0 0 auto;
        width: 8.33333333%;
      }
    
      .col-xl-2 {
        flex: 0 0 auto;
        width: 16.66666667%;
      }
    
      .col-xl-3 {
        flex: 0 0 auto;
        width: 25%;
      }
    
      .col-xl-4 {
        flex: 0 0 auto;
        width: 33.33333333%;
      }
    
      .col-xl-5 {
        flex: 0 0 auto;
        width: 41.66666667%;
      }
    
      .col-xl-6 {
        flex: 0 0 auto;
        width: 50%;
      }
    
      .col-xl-7 {
        flex: 0 0 auto;
        width: 58.33333333%;
      }
    
      .col-xl-8 {
        flex: 0 0 auto;
        width: 66.66666667%;
      }
    
      .col-xl-9 {
        flex: 0 0 auto;
        width: 75%;
      }
    
      .col-xl-10 {
        flex: 0 0 auto;
        width: 83.33333333%;
      }
    
      .col-xl-11 {
        flex: 0 0 auto;
        width: 91.66666667%;
      }
    
      .col-xl-12 {
        flex: 0 0 auto;
        width: 100%;
      }
    
      .offset-xl-0 {
        margin-left: 0;
      }
    
      .offset-xl-1 {
        margin-left: 8.33333333%;
      }
    
      .offset-xl-2 {
        margin-left: 16.66666667%;
      }
    
      .offset-xl-3 {
        margin-left: 25%;
      }
    
      .offset-xl-4 {
        margin-left: 33.33333333%;
      }
    
      .offset-xl-5 {
        margin-left: 41.66666667%;
      }
    
      .offset-xl-6 {
        margin-left: 50%;
      }
    
      .offset-xl-7 {
        margin-left: 58.33333333%;
      }
    
      .offset-xl-8 {
        margin-left: 66.66666667%;
      }
    
      .offset-xl-9 {
        margin-left: 75%;
      }
    
      .offset-xl-10 {
        margin-left: 83.33333333%;
      }
    
      .offset-xl-11 {
        margin-left: 91.66666667%;
      }
    
      .g-xl-0,
      .gx-xl-0 {
        --bs-gutter-x: 0;
      }
    
      .g-xl-0,
      .gy-xl-0 {
        --bs-gutter-y: 0;
      }
    
      .g-xl-1,
      .gx-xl-1 {
        --bs-gutter-x: 0.25rem;
      }
    
      .g-xl-1,
      .gy-xl-1 {
        --bs-gutter-y: 0.25rem;
      }
    
      .g-xl-2,
      .gx-xl-2 {
        --bs-gutter-x: 0.5rem;
      }
    
      .g-xl-2,
      .gy-xl-2 {
        --bs-gutter-y: 0.5rem;
      }
    
      .g-xl-3,
      .gx-xl-3 {
        --bs-gutter-x: 1rem;
      }
    
      .g-xl-3,
      .gy-xl-3 {
        --bs-gutter-y: 1rem;
      }
    
      .g-xl-4,
      .gx-xl-4 {
        --bs-gutter-x: 1.5rem;
      }
    
      .g-xl-4,
      .gy-xl-4 {
        --bs-gutter-y: 1.5rem;
      }
    
      .g-xl-5,
      .gx-xl-5 {
        --bs-gutter-x: 3rem;
      }
    
      .g-xl-5,
      .gy-xl-5 {
        --bs-gutter-y: 3rem;
      }
    
      .g-xl-6,
      .gx-xl-6 {
        --bs-gutter-x: 4rem;
      }
    
      .g-xl-6,
      .gy-xl-6 {
        --bs-gutter-y: 4rem;
      }
    
      .g-xl-7,
      .gx-xl-7 {
        --bs-gutter-x: 6rem;
      }
    
      .g-xl-7,
      .gy-xl-7 {
        --bs-gutter-y: 6rem;
      }
    
      .g-xl-8,
      .gx-xl-8 {
        --bs-gutter-x: 8rem;
      }
    
      .g-xl-8,
      .gy-xl-8 {
        --bs-gutter-y: 8rem;
      }
    
      .g-xl-9,
      .gx-xl-9 {
        --bs-gutter-x: 10rem;
      }
    
      .g-xl-9,
      .gy-xl-9 {
        --bs-gutter-y: 10rem;
      }
    
      .g-xl-10,
      .gx-xl-10 {
        --bs-gutter-x: 12rem;
      }
    
      .g-xl-10,
      .gy-xl-10 {
        --bs-gutter-y: 12rem;
      }
    
      .g-xl-11,
      .gx-xl-11 {
        --bs-gutter-x: 14rem;
      }
    
      .g-xl-11,
      .gy-xl-11 {
        --bs-gutter-y: 14rem;
      }
    
      .g-xl-12,
      .gx-xl-12 {
        --bs-gutter-x: 16rem;
      }
    
      .g-xl-12,
      .gy-xl-12 {
        --bs-gutter-y: 16rem;
      }
    }
    
    @media (min-width: 1400px) {
      .col-xxl {
        flex: 1 0 0%;
      }
    
      .row-cols-xxl-auto>* {
        flex: 0 0 auto;
        width: auto;
      }
    
      .row-cols-xxl-1>* {
        flex: 0 0 auto;
        width: 100%;
      }
    
      .row-cols-xxl-2>* {
        flex: 0 0 auto;
        width: 50%;
      }
    
      .row-cols-xxl-3>* {
        flex: 0 0 auto;
        width: 33.33333333%;
      }
    
      .row-cols-xxl-4>* {
        flex: 0 0 auto;
        width: 25%;
      }
    
      .row-cols-xxl-5>* {
        flex: 0 0 auto;
        width: 20%;
      }
    
      .row-cols-xxl-6>* {
        flex: 0 0 auto;
        width: 16.66666667%;
      }
    
      .col-xxl-auto {
        flex: 0 0 auto;
        width: auto;
      }
    
      .col-xxl-1 {
        flex: 0 0 auto;
        width: 8.33333333%;
      }
    
      .col-xxl-2 {
        flex: 0 0 auto;
        width: 16.66666667%;
      }
    
      .col-xxl-3 {
        flex: 0 0 auto;
        width: 25%;
      }
    
      .col-xxl-4 {
        flex: 0 0 auto;
        width: 33.33333333%;
      }
    
      .col-xxl-5 {
        flex: 0 0 auto;
        width: 41.66666667%;
      }
    
      .col-xxl-6 {
        flex: 0 0 auto;
        width: 50%;
      }
    
      .col-xxl-7 {
        flex: 0 0 auto;
        width: 58.33333333%;
      }
    
      .col-xxl-8 {
        flex: 0 0 auto;
        width: 66.66666667%;
      }
    
      .col-xxl-9 {
        flex: 0 0 auto;
        width: 75%;
      }
    
      .col-xxl-10 {
        flex: 0 0 auto;
        width: 83.33333333%;
      }
    
      .col-xxl-11 {
        flex: 0 0 auto;
        width: 91.66666667%;
      }
    
      .col-xxl-12 {
        flex: 0 0 auto;
        width: 100%;
      }
    
      .offset-xxl-0 {
        margin-left: 0;
      }
    
      .offset-xxl-1 {
        margin-left: 8.33333333%;
      }
    
      .offset-xxl-2 {
        margin-left: 16.66666667%;
      }
    
      .offset-xxl-3 {
        margin-left: 25%;
      }
    
      .offset-xxl-4 {
        margin-left: 33.33333333%;
      }
    
      .offset-xxl-5 {
        margin-left: 41.66666667%;
      }
    
      .offset-xxl-6 {
        margin-left: 50%;
      }
    
      .offset-xxl-7 {
        margin-left: 58.33333333%;
      }
    
      .offset-xxl-8 {
        margin-left: 66.66666667%;
      }
    
      .offset-xxl-9 {
        margin-left: 75%;
      }
    
      .offset-xxl-10 {
        margin-left: 83.33333333%;
      }
    
      .offset-xxl-11 {
        margin-left: 91.66666667%;
      }
    
      .g-xxl-0,
      .gx-xxl-0 {
        --bs-gutter-x: 0;
      }
    
      .g-xxl-0,
      .gy-xxl-0 {
        --bs-gutter-y: 0;
      }
    
      .g-xxl-1,
      .gx-xxl-1 {
        --bs-gutter-x: 0.25rem;
      }
    
      .g-xxl-1,
      .gy-xxl-1 {
        --bs-gutter-y: 0.25rem;
      }
    
      .g-xxl-2,
      .gx-xxl-2 {
        --bs-gutter-x: 0.5rem;
      }
    
      .g-xxl-2,
      .gy-xxl-2 {
        --bs-gutter-y: 0.5rem;
      }
    
      .g-xxl-3,
      .gx-xxl-3 {
        --bs-gutter-x: 1rem;
      }
    
      .g-xxl-3,
      .gy-xxl-3 {
        --bs-gutter-y: 1rem;
      }
    
      .g-xxl-4,
      .gx-xxl-4 {
        --bs-gutter-x: 1.5rem;
      }
    
      .g-xxl-4,
      .gy-xxl-4 {
        --bs-gutter-y: 1.5rem;
      }
    
      .g-xxl-5,
      .gx-xxl-5 {
        --bs-gutter-x: 3rem;
      }
    
      .g-xxl-5,
      .gy-xxl-5 {
        --bs-gutter-y: 3rem;
      }
    
      .g-xxl-6,
      .gx-xxl-6 {
        --bs-gutter-x: 4rem;
      }
    
      .g-xxl-6,
      .gy-xxl-6 {
        --bs-gutter-y: 4rem;
      }
    
      .g-xxl-7,
      .gx-xxl-7 {
        --bs-gutter-x: 6rem;
      }
    
      .g-xxl-7,
      .gy-xxl-7 {
        --bs-gutter-y: 6rem;
      }
    
      .g-xxl-8,
      .gx-xxl-8 {
        --bs-gutter-x: 8rem;
      }
    
      .g-xxl-8,
      .gy-xxl-8 {
        --bs-gutter-y: 8rem;
      }
    
      .g-xxl-9,
      .gx-xxl-9 {
        --bs-gutter-x: 10rem;
      }
    
      .g-xxl-9,
      .gy-xxl-9 {
        --bs-gutter-y: 10rem;
      }
    
      .g-xxl-10,
      .gx-xxl-10 {
        --bs-gutter-x: 12rem;
      }
    
      .g-xxl-10,
      .gy-xxl-10 {
        --bs-gutter-y: 12rem;
      }
    
      .g-xxl-11,
      .gx-xxl-11 {
        --bs-gutter-x: 14rem;
      }
    
      .g-xxl-11,
      .gy-xxl-11 {
        --bs-gutter-y: 14rem;
      }
    
      .g-xxl-12,
      .gx-xxl-12 {
        --bs-gutter-x: 16rem;
      }
    
      .g-xxl-12,
      .gy-xxl-12 {
        --bs-gutter-y: 16rem;
      }
    }
    
    .table {
      --bs-table-color-type: initial;
      --bs-table-bg-type: initial;
      --bs-table-color-state: initial;
      --bs-table-bg-state: initial;
      --bs-table-color: #737373;
      --bs-table-bg: transparent;
      --bs-table-border-color: #e5e5e5;
      --bs-table-accent-bg: transparent;
      --bs-table-striped-color: #737373;
      --bs-table-striped-bg: rgba(10, 10, 10, 0.05);
      --bs-table-active-color: #737373;
      --bs-table-active-bg: rgba(10, 10, 10, 0.1);
      --bs-table-hover-color: #737373;
      --bs-table-hover-bg: rgba(10, 10, 10, 0.075);
      width: 100%;
      margin-bottom: 1rem;
      vertical-align: top;
      border-color: var(--bs-table-border-color);
    }
    
    .table> :not(caption)>*>* {
      padding: 0.5rem 0.5rem;
      color: var(--bs-table-color-state, var(--bs-table-color-type, var(--bs-table-color)));
      background-color: var(--bs-table-bg);
      border-bottom-width: 1px;
      box-shadow: inset 0 0 0 9999px var(--bs-table-bg-state, var(--bs-table-bg-type, var(--bs-table-accent-bg)));
    }
    
    .table>tbody {
      vertical-align: inherit;
    }
    
    .table>thead {
      vertical-align: bottom;
    }
    
    .table-group-divider {
      border-top: calc(1px * 2) solid currentColor;
    }
    
    .caption-top {
      caption-side: top;
    }
    
    .table-sm> :not(caption)>*>* {
      padding: 0.25rem 0.25rem;
    }
    
    .table-bordered> :not(caption)>* {
      border-width: 1px 0;
    }
    
    .table-bordered> :not(caption)>*>* {
      border-width: 0 1px;
    }
    
    .table-borderless> :not(caption)>*>* {
      border-bottom-width: 0;
    }
    
    .table-borderless> :not(:first-child) {
      border-top-width: 0;
    }
    
    .table-striped>tbody>tr:nth-of-type(odd)>* {
      --bs-table-color-type: var(--bs-table-striped-color);
      --bs-table-bg-type: var(--bs-table-striped-bg);
    }
    
    .table-striped-columns> :not(caption)>tr> :nth-child(even) {
      --bs-table-color-type: var(--bs-table-striped-color);
      --bs-table-bg-type: var(--bs-table-striped-bg);
    }
    
    .table-active {
      --bs-table-color-state: var(--bs-table-active-color);
      --bs-table-bg-state: var(--bs-table-active-bg);
    }
    
    .table-hover>tbody>tr:hover>* {
      --bs-table-color-state: var(--bs-table-hover-color);
      --bs-table-bg-state: var(--bs-table-hover-bg);
    }
    
    .table-primary {
      --bs-table-color: #0a0a0a;
      --bs-table-bg: rgb(250.6, 210, 223.8);
      --bs-table-border-color: rgb(226.54, 190, 202.42);
      --bs-table-striped-bg: rgb(238.57, 200, 213.11);
      --bs-table-striped-color: #0a0a0a;
      --bs-table-active-bg: rgb(226.54, 190, 202.42);
      --bs-table-active-color: #0a0a0a;
      --bs-table-hover-bg: rgb(232.555, 195, 207.765);
      --bs-table-hover-color: #0a0a0a;
      color: var(--bs-table-color);
      border-color: var(--bs-table-border-color);
    }
    
    .table-secondary {
      --bs-table-color: #0a0a0a;
      --bs-table-bg: #e3e3e3;
      --bs-table-border-color: rgb(205.3, 205.3, 205.3);
      --bs-table-striped-bg: rgb(216.15, 216.15, 216.15);
      --bs-table-striped-color: #0a0a0a;
      --bs-table-active-bg: rgb(205.3, 205.3, 205.3);
      --bs-table-active-color: #0a0a0a;
      --bs-table-hover-bg: rgb(210.725, 210.725, 210.725);
      --bs-table-hover-color: #0a0a0a;
      color: var(--bs-table-color);
      border-color: var(--bs-table-border-color);
    }
    
    .table-success {
      --bs-table-color: #0a0a0a;
      --bs-table-bg: rgb(219.2, 239, 220);
      --bs-table-border-color: rgb(198.28, 216.1, 199);
      --bs-table-striped-bg: rgb(208.74, 227.55, 209.5);
      --bs-table-striped-color: #0a0a0a;
      --bs-table-active-bg: rgb(198.28, 216.1, 199);
      --bs-table-active-color: #0a0a0a;
      --bs-table-hover-bg: rgb(203.51, 221.825, 204.25);
      --bs-table-hover-color: #0a0a0a;
      color: var(--bs-table-color);
      border-color: var(--bs-table-border-color);
    }
    
    .table-info {
      --bs-table-color: #0a0a0a;
      --bs-table-bg: rgb(209.2, 227, 250.4);
      --bs-table-border-color: rgb(189.28, 205.3, 226.36);
      --bs-table-striped-bg: rgb(199.24, 216.15, 238.38);
      --bs-table-striped-color: #0a0a0a;
      --bs-table-active-bg: rgb(189.28, 205.3, 226.36);
      --bs-table-active-color: #0a0a0a;
      --bs-table-hover-bg: rgb(194.26, 210.725, 232.37);
      --bs-table-hover-color: #0a0a0a;
      color: var(--bs-table-color);
      border-color: var(--bs-table-border-color);
    }
    
    .table-warning {
      --bs-table-color: #0a0a0a;
      --bs-table-bg: rgb(254.2, 232, 204);
      --bs-table-border-color: rgb(229.78, 209.8, 184.6);
      --bs-table-striped-bg: rgb(241.99, 220.9, 194.3);
      --bs-table-striped-color: #0a0a0a;
      --bs-table-active-bg: rgb(229.78, 209.8, 184.6);
      --bs-table-active-color: #0a0a0a;
      --bs-table-hover-bg: rgb(235.885, 215.35, 189.45);
      --bs-table-hover-color: #0a0a0a;
      color: var(--bs-table-color);
      border-color: var(--bs-table-border-color);
    }
    
    .table-danger {
      --bs-table-color: #0a0a0a;
      --bs-table-bg: rgb(252.8, 217.4, 214.6);
      --bs-table-border-color: rgb(228.52, 196.66, 194.14);
      --bs-table-striped-bg: rgb(240.66, 207.03, 204.37);
      --bs-table-striped-color: #0a0a0a;
      --bs-table-active-bg: rgb(228.52, 196.66, 194.14);
      --bs-table-active-color: #0a0a0a;
      --bs-table-hover-bg: rgb(234.59, 201.845, 199.255);
      --bs-table-hover-color: #0a0a0a;
      color: var(--bs-table-color);
      border-color: var(--bs-table-border-color);
    }
    
    .table-light {
      --bs-table-color: #0a0a0a;
      --bs-table-bg: #e5e5e5;
      --bs-table-border-color: rgb(207.1, 207.1, 207.1);
      --bs-table-striped-bg: rgb(218.05, 218.05, 218.05);
      --bs-table-striped-color: #0a0a0a;
      --bs-table-active-bg: rgb(207.1, 207.1, 207.1);
      --bs-table-active-color: #0a0a0a;
      --bs-table-hover-bg: rgb(212.575, 212.575, 212.575);
      --bs-table-hover-color: #0a0a0a;
      color: var(--bs-table-color);
      border-color: var(--bs-table-border-color);
    }
    
    .table-dark {
      --bs-table-color: #fff;
      --bs-table-bg: #262626;
      --bs-table-border-color: rgb(59.7, 59.7, 59.7);
      --bs-table-striped-bg: rgb(48.85, 48.85, 48.85);
      --bs-table-striped-color: #fff;
      --bs-table-active-bg: rgb(59.7, 59.7, 59.7);
      --bs-table-active-color: #fff;
      --bs-table-hover-bg: rgb(54.275, 54.275, 54.275);
      --bs-table-hover-color: #fff;
      color: var(--bs-table-color);
      border-color: var(--bs-table-border-color);
    }
    
    .table-responsive {
      overflow-x: auto;
      -webkit-overflow-scrolling: touch;
    }
    
    @media (max-width: 575.98px) {
      .table-responsive-sm {
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
      }
    }
    
    @media (max-width: 767.98px) {
      .table-responsive-md {
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
      }
    }
    
    @media (max-width: 991.98px) {
      .table-responsive-lg {
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
      }
    }
    
    @media (max-width: 1199.98px) {
      .table-responsive-xl {
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
      }
    }
    
    @media (max-width: 1399.98px) {
      .table-responsive-xxl {
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
      }
    }
    
    .form-label {
      margin-bottom: 0.5rem;
      font-size: 0.875rem;
      font-weight: 400;
      color: #737373;
    }
    
    .col-form-label {
      padding-top: calc(0.5rem + 1px);
      padding-bottom: calc(0.5rem + 1px);
      margin-bottom: 0;
      font-size: inherit;
      font-weight: 400;
      line-height: 1.5rem;
      color: #737373;
    }
    
    .col-form-label-lg {
      padding-top: calc(0.75rem + 1px);
      padding-bottom: calc(0.75rem + 1px);
      font-size: 0.875rem;
    }
    
    .col-form-label-sm {
      padding-top: calc(0.25rem + 1px);
      padding-bottom: calc(0.25rem + 1px);
      font-size: 0.75rem;
    }
    
    .form-text {
      margin-top: 0.25rem;
      font-size: 0.875em;
      color: #525252;
    }
    
    .form-control {
      display: block;
      width: 100%;
      padding: 0.5rem 0;
      font-size: 0.875rem;
      font-weight: 400;
      line-height: 1.5rem;
      color: #404040;
      appearance: none;
      background-color: transparent;
      background-clip: padding-box;
      border: 1px solid #d2d6da;
      border-radius: 0.375rem;
      transition: 0.2s ease;
    }
    
    @media (prefers-reduced-motion: reduce) {
      .form-control {
        transition: none;
      }
    }
    
    .form-control[type=file] {
      overflow: hidden;
    }
    
    .form-control[type=file]:not(:disabled):not([readonly]) {
      cursor: pointer;
    }
    
    .form-control:focus {
      color: #404040;
      background-color: transparent;
      border-color: transparent;
      outline: 0;
      box-shadow: none;
    }
    
    .form-control::-webkit-date-and-time-value {
      min-width: 85px;
      height: 1.5rem;
      margin: 0;
    }
    
    .form-control::-webkit-datetime-edit {
      display: block;
      padding: 0;
    }
    
    .form-control::placeholder {
      color: #737373;
      opacity: 1;
    }
    
    .form-control:disabled {
      background-color: #e5e5e5;
      opacity: 1;
    }
    
    .form-control::file-selector-button {
      padding: 0.5rem 0;
      margin: -0.5rem 0;
      margin-inline-end: 0;
      color: #404040;
      background-color: transparent;
      pointer-events: none;
      border-color: inherit;
      border-style: solid;
      border-width: 0;
      border-inline-end-width: 1px;
      border-radius: 0;
      transition: all 0.15s ease-in;
    }
    
    @media (prefers-reduced-motion: reduce) {
      .form-control::file-selector-button {
        transition: none;
      }
    }
    
    .form-control:hover:not(:disabled):not([readonly])::file-selector-button {
      background-color: var(--bs-secondary-bg);
    }
    
    .form-control-plaintext {
      display: block;
      width: 100%;
      padding: 0.5rem 0;
      margin-bottom: 0;
      line-height: 1.5rem;
      color: #262626;
      background-color: transparent;
      border: solid transparent;
      border-width: 1px 0;
    }
    
    .form-control-plaintext:focus {
      outline: 0;
    }
    
    .form-control-plaintext.form-control-sm,
    .form-control-plaintext.form-control-lg {
      padding-right: 0;
      padding-left: 0;
    }
    
    .form-control-sm {
      min-height: unset;
      padding: 0.25rem 0.75rem;
      font-size: 0.75rem;
      border-radius: 0.125rem;
    }
    
    .form-control-sm::file-selector-button {
      padding: 0.25rem 0.75rem;
      margin: -0.25rem -0.75rem;
      margin-inline-end: 0.75rem;
    }
    
    .form-control-lg {
      min-height: unset;
      padding: 0.75rem 0.75rem;
      font-size: 0.875rem;
      border-radius: 0.5rem;
    }
    
    .form-control-lg::file-selector-button {
      padding: 0.75rem 0.75rem;
      margin: -0.75rem -0.75rem;
      margin-inline-end: 0.75rem;
    }
    
    textarea.form-control {
      min-height: unset;
    }
    
    textarea.form-control-sm {
      min-height: unset;
    }
    
    textarea.form-control-lg {
      min-height: unset;
    }
    
    .form-control-color {
      width: 3rem;
      height: unset;
      padding: 0.5rem;
    }
    
    .form-control-color:not(:disabled):not([readonly]) {
      cursor: pointer;
    }
    
    .form-control-color::-moz-color-swatch {
      border: 0 !important;
      border-radius: 0.375rem;
    }
    
    .form-control-color::-webkit-color-swatch {
      border: 0 !important;
      border-radius: 0.375rem;
    }
    
    .form-control-color.form-control-sm {
      height: unset;
    }
    
    .form-control-color.form-control-lg {
      height: unset;
    }
    
    .form-select {
      --bs-form-select-bg-img: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23262626' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M2 5l6 6 6-6'/%3e%3c/svg%3e");
      display: block;
      width: 100%;
      padding: 0.5rem 1rem 0.5rem 0;
      font-size: 0.875rem;
      font-weight: 400;
      line-height: 1.5rem;
      color: #404040;
      appearance: none;
      background-color: transparent;
      background-image: var(--bs-form-select-bg-img), var(--bs-form-select-bg-icon, none);
      background-repeat: no-repeat;
      background-position: right 0 center;
      background-size: 16px 12px;
      border: 1px solid #d2d6da;
      border-radius: 0.375rem;
      transition: 0.2s ease;
    }
    
    @media (prefers-reduced-motion: reduce) {
      .form-select {
        transition: none;
      }
    }
    
    .form-select:focus {
      border-color: transparent;
      outline: 0;
      box-shadow: none;
    }
    
    .form-select[multiple],
    .form-select[size]:not([size="1"]) {
      padding-right: 0;
      background-image: none;
    }
    
    .form-select:disabled {
      color: #525252;
      background-color: #e5e5e5;
    }
    
    .form-select:-moz-focusring {
      color: transparent;
      text-shadow: 0 0 0 #404040;
    }
    
    .form-select-sm {
      padding-top: 0.25rem;
      padding-bottom: 0.25rem;
      padding-left: 0.75rem;
      font-size: 0.75rem;
      border-radius: 0.125rem;
    }
    
    .form-select-lg {
      padding-top: 0.75rem;
      padding-bottom: 0.75rem;
      padding-left: 0.75rem;
      font-size: 0.875rem;
      border-radius: 0.5rem;
    }
    
    [data-bs-theme=dark] .form-select {
      --bs-form-select-bg-img: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23d4d4d4' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='m2 5 6 6 6-6'/%3e%3c/svg%3e");
    }
    
    .form-check {
      display: block;
      min-height: auto;
      padding-left: 1.73em;
      margin-bottom: 0.125rem;
    }
    
    .form-check .form-check-input {
      float: left;
      margin-left: -1.73em;
    }
    
    .form-check-reverse {
      padding-right: 1.73em;
      padding-left: 0;
      text-align: right;
    }
    
    .form-check-reverse .form-check-input {
      float: right;
      margin-right: -1.73em;
      margin-left: 0;
    }
    
    .form-check-input {
      --bs-form-check-bg: #fff;
      flex-shrink: 0;
      width: 1.23em;
      height: 1.23em;
      margin-top: 0.135em;
      vertical-align: top;
      appearance: none;
      background-color: var(--bs-form-check-bg);
      background-image: var(--bs-form-check-bg-image);
      background-repeat: no-repeat;
      background-position: center;
      background-size: contain;
      border: none;
      print-color-adjust: exact;
      transition: background-color 0.25s ease, border-color 0.25s ease, background-position 0.15s ease-in-out, opacity 0.15s ease-out, box-shadow 0.15s ease-in-out;
    }
    
    @media (prefers-reduced-motion: reduce) {
      .form-check-input {
        transition: none;
      }
    }
    
    .form-check-input[type=checkbox] {
      border-radius: 0.35rem;
    }
    
    .form-check-input[type=radio] {
      border-radius: 50%;
    }
    
    .form-check-input:active {
      filter: brightness(99%);
    }
    
    .form-check-input:focus {
      border-color: none;
      outline: 0;
      box-shadow: none;
    }
    
    .form-check-input:checked {
      background-color: transparent;
      border-color: transparent;
    }
    
    .form-check-input:checked[type=checkbox] {
      --bs-form-check-bg-image: linear-gradient(195deg, #EC407A 0%, #D81B60 100%);
    }
    
    .form-check-input:checked[type=radio] {
      --bs-form-check-bg-image: linear-gradient(195deg, #EC407A 0%, #D81B60 100%);
    }
    
    .form-check-input[type=checkbox]:indeterminate {
      background-color: #e91e63;
      border-color: #e91e63;
      --bs-form-check-bg-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20'%3e%3cpath fill='none' stroke='%23fff' stroke-linecap='round' stroke-linejoin='round' stroke-width='3' d='M6 10h8'/%3e%3c/svg%3e");
    }
    
    .form-check-input:disabled {
      pointer-events: none;
      filter: none;
      opacity: 0.5;
    }
    
    .form-check-input[disabled]~.form-check-label,
    .form-check-input:disabled~.form-check-label {
      cursor: default;
      opacity: 0.5;
    }
    
    .form-switch {
      padding-left: 2.375rem;
    }
    
    .form-switch .form-check-input {
      --bs-form-switch-bg: none;
      width: 1.875rem;
      margin-left: -2.375rem;
      background-image: var(--bs-form-switch-bg);
      background-position: left center;
      border-radius: 1.875rem;
      transition: background-color 0.25s ease, border-color 0.25s ease, background-position 0.15s ease-in-out, opacity 0.15s ease-out, box-shadow 0.15s ease-in-out;
    }
    
    @media (prefers-reduced-motion: reduce) {
      .form-switch .form-check-input {
        transition: none;
      }
    }
    
    .form-switch .form-check-input:focus {
      --bs-form-switch-bg: none;
    }
    
    .form-switch .form-check-input:checked {
      background-position: right center;
      --bs-form-switch-bg: none;
    }
    
    .form-switch.form-check-reverse {
      padding-right: 2.375rem;
      padding-left: 0;
    }
    
    .form-switch.form-check-reverse .form-check-input {
      margin-right: -2.375rem;
      margin-left: 0;
    }
    
    .form-check-inline {
      display: inline-block;
      margin-right: 1rem;
    }
    
    .btn-check {
      position: absolute;
      clip: rect(0, 0, 0, 0);
      pointer-events: none;
    }
    
    .btn-check[disabled]+.btn,
    .btn-check:disabled+.btn {
      pointer-events: none;
      filter: none;
      opacity: 0.65;
    }
    
    [data-bs-theme=dark] .form-switch .form-check-input:not(:checked):not(:focus) {
      --bs-form-switch-bg: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='rgba%28255, 255, 255, 0.25%29'/%3e%3c/svg%3e");
    }
    
    .form-range {
      width: 100%;
      height: calc(1rem + 4px);
      padding: 0;
      appearance: none;
      background-color: transparent;
    }
    
    .form-range:focus {
      outline: 0;
    }
    
    .form-range:focus::-webkit-slider-thumb {
      box-shadow: 0 0 0 1px #fff, none;
    }
    
    .form-range:focus::-moz-range-thumb {
      box-shadow: 0 0 0 1px #fff, none;
    }
    
    .form-range::-moz-focus-outer {
      border: 0;
    }
    
    .form-range::-webkit-slider-thumb {
      width: 1rem;
      height: 1rem;
      margin-top: -0.25rem;
      appearance: none;
      background-color: #e91e63;
      border: 0;
      border-radius: 1rem;
      transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    }
    
    @media (prefers-reduced-motion: reduce) {
      .form-range::-webkit-slider-thumb {
        transition: none;
      }
    }
    
    .form-range::-webkit-slider-thumb:active {
      background-color: rgb(248.8987854251, 192.6012145749, 211.7368421053);
    }
    
    .form-range::-webkit-slider-runnable-track {
      width: 100%;
      height: 0.5rem;
      color: transparent;
      cursor: pointer;
      background-color: #d4d4d4;
      border-color: transparent;
      border-radius: 1rem;
    }
    
    .form-range::-moz-range-thumb {
      width: 1rem;
      height: 1rem;
      appearance: none;
      background-color: #e91e63;
      border: 0;
      border-radius: 1rem;
      transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    }
    
    @media (prefers-reduced-motion: reduce) {
      .form-range::-moz-range-thumb {
        transition: none;
      }
    }
    
    .form-range::-moz-range-thumb:active {
      background-color: rgb(248.8987854251, 192.6012145749, 211.7368421053);
    }
    
    .form-range::-moz-range-track {
      width: 100%;
      height: 0.5rem;
      color: transparent;
      cursor: pointer;
      background-color: #d4d4d4;
      border-color: transparent;
      border-radius: 1rem;
    }
    
    .form-range:disabled {
      pointer-events: none;
    }
    
    .form-range:disabled::-webkit-slider-thumb {
      background-color: #737373;
    }
    
    .form-range:disabled::-moz-range-thumb {
      background-color: #737373;
    }
    
    .form-floating {
      position: relative;
    }
    
    .form-floating>.form-control,
    .form-floating>.form-control-plaintext,
    .form-floating>.form-select {
      height: calc(3.5rem + 2px);
      min-height: calc(3.5rem + 2px);
      line-height: 1.25;
    }
    
    .form-floating>label {
      position: absolute;
      top: 0;
      left: 0;
      z-index: 2;
      height: 100%;
      padding: 1rem 0;
      overflow: hidden;
      text-align: start;
      text-overflow: ellipsis;
      white-space: nowrap;
      pointer-events: none;
      border: 1px solid transparent;
      transform-origin: 0 0;
      transition: opacity 0.1s ease-in-out, transform 0.1s ease-in-out;
    }
    
    @media (prefers-reduced-motion: reduce) {
      .form-floating>label {
        transition: none;
      }
    }
    
    .form-floating>.form-control,
    .form-floating>.form-control-plaintext {
      padding: 1rem 0;
    }
    
    .form-floating>.form-control::placeholder,
    .form-floating>.form-control-plaintext::placeholder {
      color: transparent;
    }
    
    .form-floating>.form-control:focus,
    .form-floating>.form-control:not(:placeholder-shown),
    .form-floating>.form-control-plaintext:focus,
    .form-floating>.form-control-plaintext:not(:placeholder-shown) {
      padding-top: 1.625rem;
      padding-bottom: 0.625rem;
    }
    
    .form-floating>.form-control:-webkit-autofill,
    .form-floating>.form-control-plaintext:-webkit-autofill {
      padding-top: 1.625rem;
      padding-bottom: 0.625rem;
    }
    
    .form-floating>.form-select {
      padding-top: 1.625rem;
      padding-bottom: 0.625rem;
    }
    
    .form-floating>.form-control:focus~label,
    .form-floating>.form-control:not(:placeholder-shown)~label,
    .form-floating>.form-control-plaintext~label,
    .form-floating>.form-select~label {
      color: rgba(var(--bs-body-color-rgb), 0.65);
      transform: scale(0.85) translateY(-0.5rem) translateX(0.15rem);
    }
    
    .form-floating>.form-control:focus~label::after,
    .form-floating>.form-control:not(:placeholder-shown)~label::after,
    .form-floating>.form-control-plaintext~label::after,
    .form-floating>.form-select~label::after {
      position: absolute;
      inset: 1rem 0;
      z-index: -1;
      height: 1.5em;
      content: "";
      background-color: transparent;
      border-radius: 0.375rem;
    }
    
    .form-floating>.form-control:-webkit-autofill~label {
      color: rgba(var(--bs-body-color-rgb), 0.65);
      transform: scale(0.85) translateY(-0.5rem) translateX(0.15rem);
    }
    
    .form-floating>.form-control-plaintext~label {
      border-width: 1px 0;
    }
    
    .form-floating> :disabled~label,
    .form-floating>.form-control:disabled~label {
      color: #525252;
    }
    
    .form-floating> :disabled~label::after,
    .form-floating>.form-control:disabled~label::after {
      background-color: #e5e5e5;
    }
    
    .input-group {
      position: relative;
      display: flex;
      flex-wrap: wrap;
      align-items: stretch;
      width: 100%;
    }
    
    .input-group>.form-control,
    .input-group>.form-select,
    .input-group>.form-floating {
      position: relative;
      flex: 1 1 auto;
      width: 1%;
      min-width: 0;
    }
    
    .input-group>.form-control:focus,
    .input-group>.form-select:focus,
    .input-group>.form-floating:focus-within {
      z-index: 5;
    }
    
    .input-group .btn {
      position: relative;
      z-index: 2;
    }
    
    .input-group .btn:focus {
      z-index: 5;
    }
    
    .input-group-text {
      display: flex;
      align-items: center;
      padding: 0.5rem 0;
      font-size: 0.875rem;
      font-weight: 400;
      line-height: 1.5rem;
      color: #262626;
      text-align: center;
      white-space: nowrap;
      background-color: transparent;
      border: 1px solid #d2d6da;
      border-radius: 0.375rem;
    }
    
    .input-group-lg>.form-control,
    .input-group-lg>.form-select,
    .input-group-lg>.input-group-text,
    .input-group-lg>.btn {
      padding: 0.75rem 0.75rem;
      font-size: 0.875rem;
      border-radius: 0.5rem;
    }
    
    .input-group-sm>.form-control,
    .input-group-sm>.form-select,
    .input-group-sm>.input-group-text,
    .input-group-sm>.btn {
      padding: 0.25rem 0.75rem;
      font-size: 0.75rem;
      border-radius: 0.125rem;
    }
    
    .input-group-lg>.form-select,
    .input-group-sm>.form-select {
      padding-right: 1rem;
    }
    
    .input-group:not(.has-validation)> :not(:last-child):not(.dropdown-toggle):not(.dropdown-menu):not(.form-floating),
    .input-group:not(.has-validation)>.dropdown-toggle:nth-last-child(n+3),
    .input-group:not(.has-validation)>.form-floating:not(:last-child)>.form-control,
    .input-group:not(.has-validation)>.form-floating:not(:last-child)>.form-select {
      border-top-right-radius: 0;
      border-bottom-right-radius: 0;
    }
    
    .input-group.has-validation> :nth-last-child(n+3):not(.dropdown-toggle):not(.dropdown-menu):not(.form-floating),
    .input-group.has-validation>.dropdown-toggle:nth-last-child(n+4),
    .input-group.has-validation>.form-floating:nth-last-child(n+3)>.form-control,
    .input-group.has-validation>.form-floating:nth-last-child(n+3)>.form-select {
      border-top-right-radius: 0;
      border-bottom-right-radius: 0;
    }
    
    .input-group> :not(:first-child):not(.dropdown-menu):not(.valid-tooltip):not(.valid-feedback):not(.invalid-tooltip):not(.invalid-feedback) {
      margin-left: calc(1px * -1);
      border-top-left-radius: 0;
      border-bottom-left-radius: 0;
    }
    
    .input-group>.form-floating:not(:first-child)>.form-control,
    .input-group>.form-floating:not(:first-child)>.form-select {
      border-top-left-radius: 0;
      border-bottom-left-radius: 0;
    }
    
    .valid-feedback {
      display: none;
      width: 100%;
      margin-top: 0.25rem;
      font-size: 0.875em;
      color: #66d432;
    }
    
    .valid-tooltip {
      position: absolute;
      top: 100%;
      z-index: 5;
      display: none;
      max-width: 100%;
      padding: 0.25rem 0.5rem;
      margin-top: 0.1rem;
      font-size: 0.875rem;
      color: #0a0a0a;
      background-color: rgba(102, 212, 50, 0.9);
      border-radius: 0.375rem;
    }
    
    .was-validated :valid~.valid-feedback,
    .was-validated :valid~.valid-tooltip,
    .is-valid~.valid-feedback,
    .is-valid~.valid-tooltip {
      display: block;
    }
    
    .was-validated .form-control:valid,
    .form-control.is-valid {
      border-color: #66d432;
      padding-right: unset;
      background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 10 8'%3e%3cpath fill='%2366d432' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3e%3c/svg%3e");
      background-repeat: no-repeat;
      background-position: right 0.75rem center;
      background-size: 1rem 1rem;
    }
    
    .was-validated .form-control:valid:focus,
    .form-control.is-valid:focus {
      border-color: #66d432;
      box-shadow: 0 0 0 2px rgba(102, 212, 50, 0.25);
    }
    
    .was-validated textarea.form-control:valid,
    textarea.form-control.is-valid {
      padding-right: unset;
      background-position: top 0.75rem right 0.75rem;
    }
    
    .was-validated .form-select:valid,
    .form-select.is-valid {
      border-color: #66d432;
    }
    
    .was-validated .form-select:valid:not([multiple]):not([size]),
    .was-validated .form-select:valid:not([multiple])[size="1"],
    .form-select.is-valid:not([multiple]):not([size]),
    .form-select.is-valid:not([multiple])[size="1"] {
      --bs-form-select-bg-icon: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 10 8'%3e%3cpath fill='%2366d432' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3e%3c/svg%3e");
      padding-right: 1rem;
      background-position: right 0 center, center right 1rem;
      background-size: 16px 12px, 1rem 1rem;
    }
    
    .was-validated .form-select:valid:focus,
    .form-select.is-valid:focus {
      border-color: #66d432;
      box-shadow: 0 0 0 2px rgba(102, 212, 50, 0.25);
    }
    
    .was-validated .form-control-color:valid,
    .form-control-color.is-valid {
      width: calc(3rem + unset);
    }
    
    .was-validated .form-check-input:valid,
    .form-check-input.is-valid {
      border-color: #66d432;
    }
    
    .was-validated .form-check-input:valid:checked,
    .form-check-input.is-valid:checked {
      background-color: #66d432;
    }
    
    .was-validated .form-check-input:valid:focus,
    .form-check-input.is-valid:focus {
      box-shadow: 0 0 0 2px rgba(102, 212, 50, 0.25);
    }
    
    .was-validated .form-check-input:valid~.form-check-label,
    .form-check-input.is-valid~.form-check-label {
      color: #66d432;
    }
    
    .form-check-inline .form-check-input~.valid-feedback {
      margin-left: 0.5em;
    }
    
    .was-validated .input-group>.form-control:not(:focus):valid,
    .input-group>.form-control:not(:focus).is-valid,
    .was-validated .input-group>.form-select:not(:focus):valid,
    .input-group>.form-select:not(:focus).is-valid,
    .was-validated .input-group>.form-floating:not(:focus-within):valid,
    .input-group>.form-floating:not(:focus-within).is-valid {
      z-index: 3;
    }
    
    .invalid-feedback {
      display: none;
      width: 100%;
      margin-top: 0.25rem;
      font-size: 0.875em;
      color: #fd5c70;
    }
    
    .invalid-tooltip {
      position: absolute;
      top: 100%;
      z-index: 5;
      display: none;
      max-width: 100%;
      padding: 0.25rem 0.5rem;
      margin-top: 0.1rem;
      font-size: 0.875rem;
      color: #0a0a0a;
      background-color: rgba(253, 92, 112, 0.9);
      border-radius: 0.375rem;
    }
    
    .was-validated :invalid~.invalid-feedback,
    .was-validated :invalid~.invalid-tooltip,
    .is-invalid~.invalid-feedback,
    .is-invalid~.invalid-tooltip {
      display: block;
    }
    
    .was-validated .form-control:invalid,
    .form-control.is-invalid {
      border-color: #fd5c70;
      padding-right: unset;
      background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' fill='none' stroke='%23fd5c70' viewBox='0 0 12 12'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3e%3ccircle cx='6' cy='8.2' r='.6' fill='%23fd5c70' stroke='none'/%3e%3c/svg%3e");
      background-repeat: no-repeat;
      background-position: right 0.75rem center;
      background-size: 1rem 1rem;
    }
    
    .was-validated .form-control:invalid:focus,
    .form-control.is-invalid:focus {
      border-color: #fd5c70;
      box-shadow: 0 0 0 2px rgba(253, 92, 112, 0.25);
    }
    
    .was-validated textarea.form-control:invalid,
    textarea.form-control.is-invalid {
      padding-right: unset;
      background-position: top 0.75rem right 0.75rem;
    }
    
    .was-validated .form-select:invalid,
    .form-select.is-invalid {
      border-color: #fd5c70;
    }
    
    .was-validated .form-select:invalid:not([multiple]):not([size]),
    .was-validated .form-select:invalid:not([multiple])[size="1"],
    .form-select.is-invalid:not([multiple]):not([size]),
    .form-select.is-invalid:not([multiple])[size="1"] {
      --bs-form-select-bg-icon: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' fill='none' stroke='%23fd5c70' viewBox='0 0 12 12'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3e%3ccircle cx='6' cy='8.2' r='.6' fill='%23fd5c70' stroke='none'/%3e%3c/svg%3e");
      padding-right: 1rem;
      background-position: right 0 center, center right 1rem;
      background-size: 16px 12px, 1rem 1rem;
    }
    
    .was-validated .form-select:invalid:focus,
    .form-select.is-invalid:focus {
      border-color: #fd5c70;
      box-shadow: 0 0 0 2px rgba(253, 92, 112, 0.25);
    }
    
    .was-validated .form-control-color:invalid,
    .form-control-color.is-invalid {
      width: calc(3rem + unset);
    }
    
    .was-validated .form-check-input:invalid,
    .form-check-input.is-invalid {
      border-color: #fd5c70;
    }
    
    .was-validated .form-check-input:invalid:checked,
    .form-check-input.is-invalid:checked {
      background-color: #fd5c70;
    }
    
    .was-validated .form-check-input:invalid:focus,
    .form-check-input.is-invalid:focus {
      box-shadow: 0 0 0 2px rgba(253, 92, 112, 0.25);
    }
    
    .was-validated .form-check-input:invalid~.form-check-label,
    .form-check-input.is-invalid~.form-check-label {
      color: #fd5c70;
    }
    
    .form-check-inline .form-check-input~.invalid-feedback {
      margin-left: 0.5em;
    }
    
    .was-validated .input-group>.form-control:not(:focus):invalid,
    .input-group>.form-control:not(:focus).is-invalid,
    .was-validated .input-group>.form-select:not(:focus):invalid,
    .input-group>.form-select:not(:focus).is-invalid,
    .was-validated .input-group>.form-floating:not(:focus-within):invalid,
    .input-group>.form-floating:not(:focus-within).is-invalid {
      z-index: 4;
    }
    
    .btn {
      --bs-btn-padding-x: 1rem;
      --bs-btn-padding-y: 0.5rem;
      --bs-btn-font-family: ;
      --bs-btn-font-size: 0.875rem;
      --bs-btn-font-weight: 500;
      --bs-btn-line-height: 1.25rem;
      --bs-btn-color: var(--bs-body-color);
      --bs-btn-bg: transparent;
      --bs-btn-border-width: 1px;
      --bs-btn-border-color: transparent;
      --bs-btn-border-radius: 0.375rem;
      --bs-btn-hover-border-color: transparent;
      --bs-btn-box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
      --bs-btn-disabled-opacity: 0.65;
      --bs-btn-focus-box-shadow: 0 0 0 0.2rem rgba(var(--bs-btn-focus-shadow-rgb), .5);
      display: inline-block;
      padding: var(--bs-btn-padding-y) var(--bs-btn-padding-x);
      font-family: var(--bs-btn-font-family);
      font-size: var(--bs-btn-font-size);
      font-weight: var(--bs-btn-font-weight);
      line-height: var(--bs-btn-line-height);
      color: var(--bs-btn-color);
      text-align: center;
      vertical-align: middle;
      cursor: pointer;
      user-select: none;
      border: var(--bs-btn-border-width) solid var(--bs-btn-border-color);
      border-radius: var(--bs-btn-border-radius);
      background-color: var(--bs-btn-bg);
      transition: all 0.15s ease-in;
    }
    
    @media (prefers-reduced-motion: reduce) {
      .btn {
        transition: none;
      }
    }
    
    .btn:hover {
      color: var(--bs-btn-hover-color);
      background-color: var(--bs-btn-hover-bg);
      border-color: var(--bs-btn-hover-border-color);
    }
    
    .btn-check+.btn:hover {
      color: var(--bs-btn-color);
      background-color: var(--bs-btn-bg);
      border-color: var(--bs-btn-border-color);
    }
    
    .btn:focus-visible {
      color: var(--bs-btn-hover-color);
      background-color: var(--bs-btn-hover-bg);
      border-color: var(--bs-btn-hover-border-color);
      outline: 0;
      box-shadow: var(--bs-btn-focus-box-shadow);
    }
    
    .btn-check:focus-visible+.btn {
      border-color: var(--bs-btn-hover-border-color);
      outline: 0;
      box-shadow: var(--bs-btn-focus-box-shadow);
    }
    
    .btn-check:checked+.btn,
    :not(.btn-check)+.btn:active,
    .btn:first-child:active,
    .btn.active,
    .btn.show {
      color: var(--bs-btn-active-color);
      background-color: var(--bs-btn-active-bg);
      border-color: var(--bs-btn-active-border-color);
    }
    
    .btn-check:checked+.btn:focus-visible,
    :not(.btn-check)+.btn:active:focus-visible,
    .btn:first-child:active:focus-visible,
    .btn.active:focus-visible,
    .btn.show:focus-visible {
      box-shadow: var(--bs-btn-focus-box-shadow);
    }
    
    .btn-check:checked:focus-visible+.btn {
      box-shadow: var(--bs-btn-focus-box-shadow);
    }
    
    .btn:disabled,
    .btn.disabled,
    fieldset:disabled .btn {
      color: var(--bs-btn-disabled-color);
      pointer-events: none;
      background-color: var(--bs-btn-disabled-bg);
      border-color: var(--bs-btn-disabled-border-color);
      opacity: var(--bs-btn-disabled-opacity);
    }
    
    .btn-primary {
      --bs-btn-color: #0a0a0a;
      --bs-btn-bg: #e91e63;
      --bs-btn-border-color: #e91e63;
      --bs-btn-hover-color: #0a0a0a;
      --bs-btn-hover-bg: rgb(236.3, 63.75, 122.4);
      --bs-btn-hover-border-color: rgb(235.2, 52.5, 114.6);
      --bs-btn-focus-shadow-rgb: 200, 27, 86;
      --bs-btn-active-color: #0a0a0a;
      --bs-btn-active-bg: rgb(237.4, 75, 130.2);
      --bs-btn-active-border-color: rgb(235.2, 52.5, 114.6);
      --bs-btn-active-shadow: none;
      --bs-btn-disabled-color: #0a0a0a;
      --bs-btn-disabled-bg: #e91e63;
      --bs-btn-disabled-border-color: #e91e63;
    }
    
    .btn-secondary {
      --bs-btn-color: #fff;
      --bs-btn-bg: #737373;
      --bs-btn-border-color: #737373;
      --bs-btn-hover-color: #fff;
      --bs-btn-hover-bg: rgb(97.75, 97.75, 97.75);
      --bs-btn-hover-border-color: #5c5c5c;
      --bs-btn-focus-shadow-rgb: 136, 136, 136;
      --bs-btn-active-color: #fff;
      --bs-btn-active-bg: #5c5c5c;
      --bs-btn-active-border-color: rgb(86.25, 86.25, 86.25);
      --bs-btn-active-shadow: none;
      --bs-btn-disabled-color: #fff;
      --bs-btn-disabled-bg: #737373;
      --bs-btn-disabled-border-color: #737373;
    }
    
    .btn-success {
      --bs-btn-color: #0a0a0a;
      --bs-btn-bg: #4CAF50;
      --bs-btn-border-color: #4CAF50;
      --bs-btn-hover-color: #0a0a0a;
      --bs-btn-hover-bg: rgb(102.85, 187, 106.25);
      --bs-btn-hover-border-color: rgb(93.9, 183, 97.5);
      --bs-btn-focus-shadow-rgb: 66, 150, 70;
      --bs-btn-active-color: #0a0a0a;
      --bs-btn-active-bg: rgb(111.8, 191, 115);
      --bs-btn-active-border-color: rgb(93.9, 183, 97.5);
      --bs-btn-active-shadow: none;
      --bs-btn-disabled-color: #0a0a0a;
      --bs-btn-disabled-bg: #4CAF50;
      --bs-btn-disabled-border-color: #4CAF50;
    }
    
    .btn-info {
      --bs-btn-color: #fff;
      --bs-btn-bg: #1A73E8;
      --bs-btn-border-color: #1A73E8;
      --bs-btn-hover-color: #fff;
      --bs-btn-hover-bg: rgb(22.1, 97.75, 197.2);
      --bs-btn-hover-border-color: rgb(20.8, 92, 185.6);
      --bs-btn-focus-shadow-rgb: 60, 136, 235;
      --bs-btn-active-color: #fff;
      --bs-btn-active-bg: rgb(20.8, 92, 185.6);
      --bs-btn-active-border-color: rgb(19.5, 86.25, 174);
      --bs-btn-active-shadow: none;
      --bs-btn-disabled-color: #fff;
      --bs-btn-disabled-bg: #1A73E8;
      --bs-btn-disabled-border-color: #1A73E8;
    }
    
    .btn-warning {
      --bs-btn-color: #0a0a0a;
      --bs-btn-bg: #fb8c00;
      --bs-btn-border-color: #fb8c00;
      --bs-btn-hover-color: #0a0a0a;
      --bs-btn-hover-bg: rgb(251.6, 157.25, 38.25);
      --bs-btn-hover-border-color: rgb(251.4, 151.5, 25.5);
      --bs-btn-focus-shadow-rgb: 215, 121, 2;
      --bs-btn-active-color: #0a0a0a;
      --bs-btn-active-bg: rgb(251.8, 163, 51);
      --bs-btn-active-border-color: rgb(251.4, 151.5, 25.5);
      --bs-btn-active-shadow: none;
      --bs-btn-disabled-color: #0a0a0a;
      --bs-btn-disabled-bg: #fb8c00;
      --bs-btn-disabled-border-color: #fb8c00;
    }
    
    .btn-danger {
      --bs-btn-color: #0a0a0a;
      --bs-btn-bg: #F44335;
      --bs-btn-border-color: #F44335;
      --bs-btn-hover-color: #0a0a0a;
      --bs-btn-hover-bg: rgb(245.65, 95.2, 83.3);
      --bs-btn-hover-border-color: rgb(245.1, 85.8, 73.2);
      --bs-btn-focus-shadow-rgb: 209, 58, 47;
      --bs-btn-active-color: #0a0a0a;
      --bs-btn-active-bg: rgb(246.2, 104.6, 93.4);
      --bs-btn-active-border-color: rgb(245.1, 85.8, 73.2);
      --bs-btn-active-shadow: none;
      --bs-btn-disabled-color: #0a0a0a;
      --bs-btn-disabled-bg: #F44335;
      --bs-btn-disabled-border-color: #F44335;
    }
    
    .btn-light {
      --bs-btn-color: #0a0a0a;
      --bs-btn-bg: #e5e5e5;
      --bs-btn-border-color: #e5e5e5;
      --bs-btn-hover-color: #0a0a0a;
      --bs-btn-hover-bg: rgb(194.65, 194.65, 194.65);
      --bs-btn-hover-border-color: rgb(183.2, 183.2, 183.2);
      --bs-btn-focus-shadow-rgb: 196, 196, 196;
      --bs-btn-active-color: #0a0a0a;
      --bs-btn-active-bg: rgb(183.2, 183.2, 183.2);
      --bs-btn-active-border-color: rgb(171.75, 171.75, 171.75);
      --bs-btn-active-shadow: none;
      --bs-btn-disabled-color: #0a0a0a;
      --bs-btn-disabled-bg: #e5e5e5;
      --bs-btn-disabled-border-color: #e5e5e5;
    }
    
    .btn-dark {
      --bs-btn-color: #fff;
      --bs-btn-bg: #262626;
      --bs-btn-border-color: #262626;
      --bs-btn-hover-color: #fff;
      --bs-btn-hover-bg: rgb(70.55, 70.55, 70.55);
      --bs-btn-hover-border-color: rgb(59.7, 59.7, 59.7);
      --bs-btn-focus-shadow-rgb: 71, 71, 71;
      --bs-btn-active-color: #fff;
      --bs-btn-active-bg: rgb(81.4, 81.4, 81.4);
      --bs-btn-active-border-color: rgb(59.7, 59.7, 59.7);
      --bs-btn-active-shadow: none;
      --bs-btn-disabled-color: #fff;
      --bs-btn-disabled-bg: #262626;
      --bs-btn-disabled-border-color: #262626;
    }
    
    .btn-white {
      --bs-btn-color: #0a0a0a;
      --bs-btn-bg: #fff;
      --bs-btn-border-color: #fff;
      --bs-btn-hover-color: #0a0a0a;
      --bs-btn-hover-bg: white;
      --bs-btn-hover-border-color: white;
      --bs-btn-focus-shadow-rgb: 218, 218, 218;
      --bs-btn-active-color: #0a0a0a;
      --bs-btn-active-bg: white;
      --bs-btn-active-border-color: white;
      --bs-btn-active-shadow: none;
      --bs-btn-disabled-color: #0a0a0a;
      --bs-btn-disabled-bg: #fff;
      --bs-btn-disabled-border-color: #fff;
    }
    
    .btn-dark-blue {
      --bs-btn-color: #fff;
      --bs-btn-bg: #1A237E;
      --bs-btn-border-color: #1A237E;
      --bs-btn-hover-color: #fff;
      --bs-btn-hover-bg: rgb(22.1, 29.75, 107.1);
      --bs-btn-hover-border-color: rgb(20.8, 28, 100.8);
      --bs-btn-focus-shadow-rgb: 60, 68, 145;
      --bs-btn-active-color: #fff;
      --bs-btn-active-bg: rgb(20.8, 28, 100.8);
      --bs-btn-active-border-color: rgb(19.5, 26.25, 94.5);
      --bs-btn-active-shadow: none;
      --bs-btn-disabled-color: #fff;
      --bs-btn-disabled-bg: #1A237E;
      --bs-btn-disabled-border-color: #1A237E;
    }
    
    .btn-outline-primary {
      --bs-btn-color: #e91e63;
      --bs-btn-border-color: #e91e63;
      --bs-btn-hover-color: #0a0a0a;
      --bs-btn-hover-bg: #e91e63;
      --bs-btn-hover-border-color: #e91e63;
      --bs-btn-focus-shadow-rgb: 233, 30, 99;
      --bs-btn-active-color: #0a0a0a;
      --bs-btn-active-bg: #e91e63;
      --bs-btn-active-border-color: #e91e63;
      --bs-btn-active-shadow: none;
      --bs-btn-disabled-color: #e91e63;
      --bs-btn-disabled-bg: transparent;
      --bs-btn-disabled-border-color: #e91e63;
      --bs-gradient: none;
    }
    
    .btn-outline-secondary {
      --bs-btn-color: #737373;
      --bs-btn-border-color: #737373;
      --bs-btn-hover-color: #fff;
      --bs-btn-hover-bg: #737373;
      --bs-btn-hover-border-color: #737373;
      --bs-btn-focus-shadow-rgb: 115, 115, 115;
      --bs-btn-active-color: #fff;
      --bs-btn-active-bg: #737373;
      --bs-btn-active-border-color: #737373;
      --bs-btn-active-shadow: none;
      --bs-btn-disabled-color: #737373;
      --bs-btn-disabled-bg: transparent;
      --bs-btn-disabled-border-color: #737373;
      --bs-gradient: none;
    }
    
    .btn-outline-success {
      --bs-btn-color: #4CAF50;
      --bs-btn-border-color: #4CAF50;
      --bs-btn-hover-color: #0a0a0a;
      --bs-btn-hover-bg: #4CAF50;
      --bs-btn-hover-border-color: #4CAF50;
      --bs-btn-focus-shadow-rgb: 76, 175, 80;
      --bs-btn-active-color: #0a0a0a;
      --bs-btn-active-bg: #4CAF50;
      --bs-btn-active-border-color: #4CAF50;
      --bs-btn-active-shadow: none;
      --bs-btn-disabled-color: #4CAF50;
      --bs-btn-disabled-bg: transparent;
      --bs-btn-disabled-border-color: #4CAF50;
      --bs-gradient: none;
    }
    
    .btn-outline-info {
      --bs-btn-color: #1A73E8;
      --bs-btn-border-color: #1A73E8;
      --bs-btn-hover-color: #fff;
      --bs-btn-hover-bg: #1A73E8;
      --bs-btn-hover-border-color: #1A73E8;
      --bs-btn-focus-shadow-rgb: 26, 115, 232;
      --bs-btn-active-color: #fff;
      --bs-btn-active-bg: #1A73E8;
      --bs-btn-active-border-color: #1A73E8;
      --bs-btn-active-shadow: none;
      --bs-btn-disabled-color: #1A73E8;
      --bs-btn-disabled-bg: transparent;
      --bs-btn-disabled-border-color: #1A73E8;
      --bs-gradient: none;
    }
    
    .btn-outline-warning {
      --bs-btn-color: #fb8c00;
      --bs-btn-border-color: #fb8c00;
      --bs-btn-hover-color: #0a0a0a;
      --bs-btn-hover-bg: #fb8c00;
      --bs-btn-hover-border-color: #fb8c00;
      --bs-btn-focus-shadow-rgb: 251, 140, 0;
      --bs-btn-active-color: #0a0a0a;
      --bs-btn-active-bg: #fb8c00;
      --bs-btn-active-border-color: #fb8c00;
      --bs-btn-active-shadow: none;
      --bs-btn-disabled-color: #fb8c00;
      --bs-btn-disabled-bg: transparent;
      --bs-btn-disabled-border-color: #fb8c00;
      --bs-gradient: none;
    }
    
    .btn-outline-danger {
      --bs-btn-color: #F44335;
      --bs-btn-border-color: #F44335;
      --bs-btn-hover-color: #0a0a0a;
      --bs-btn-hover-bg: #F44335;
      --bs-btn-hover-border-color: #F44335;
      --bs-btn-focus-shadow-rgb: 244, 67, 53;
      --bs-btn-active-color: #0a0a0a;
      --bs-btn-active-bg: #F44335;
      --bs-btn-active-border-color: #F44335;
      --bs-btn-active-shadow: none;
      --bs-btn-disabled-color: #F44335;
      --bs-btn-disabled-bg: transparent;
      --bs-btn-disabled-border-color: #F44335;
      --bs-gradient: none;
    }
    
    .btn-outline-light {
      --bs-btn-color: #e5e5e5;
      --bs-btn-border-color: #e5e5e5;
      --bs-btn-hover-color: #0a0a0a;
      --bs-btn-hover-bg: #e5e5e5;
      --bs-btn-hover-border-color: #e5e5e5;
      --bs-btn-focus-shadow-rgb: 229, 229, 229;
      --bs-btn-active-color: #0a0a0a;
      --bs-btn-active-bg: #e5e5e5;
      --bs-btn-active-border-color: #e5e5e5;
      --bs-btn-active-shadow: none;
      --bs-btn-disabled-color: #e5e5e5;
      --bs-btn-disabled-bg: transparent;
      --bs-btn-disabled-border-color: #e5e5e5;
      --bs-gradient: none;
    }
    
    .btn-outline-dark {
      --bs-btn-color: #262626;
      --bs-btn-border-color: #262626;
      --bs-btn-hover-color: #fff;
      --bs-btn-hover-bg: #262626;
      --bs-btn-hover-border-color: #262626;
      --bs-btn-focus-shadow-rgb: 38, 38, 38;
      --bs-btn-active-color: #fff;
      --bs-btn-active-bg: #262626;
      --bs-btn-active-border-color: #262626;
      --bs-btn-active-shadow: none;
      --bs-btn-disabled-color: #262626;
      --bs-btn-disabled-bg: transparent;
      --bs-btn-disabled-border-color: #262626;
      --bs-gradient: none;
    }
    
    .btn-outline-white {
      --bs-btn-color: #fff;
      --bs-btn-border-color: #fff;
      --bs-btn-hover-color: #0a0a0a;
      --bs-btn-hover-bg: #fff;
      --bs-btn-hover-border-color: #fff;
      --bs-btn-focus-shadow-rgb: 255, 255, 255;
      --bs-btn-active-color: #0a0a0a;
      --bs-btn-active-bg: #fff;
      --bs-btn-active-border-color: #fff;
      --bs-btn-active-shadow: none;
      --bs-btn-disabled-color: #fff;
      --bs-btn-disabled-bg: transparent;
      --bs-btn-disabled-border-color: #fff;
      --bs-gradient: none;
    }
    
    .btn-outline-dark-blue {
      --bs-btn-color: #1A237E;
      --bs-btn-border-color: #1A237E;
      --bs-btn-hover-color: #fff;
      --bs-btn-hover-bg: #1A237E;
      --bs-btn-hover-border-color: #1A237E;
      --bs-btn-focus-shadow-rgb: 26, 35, 126;
      --bs-btn-active-color: #fff;
      --bs-btn-active-bg: #1A237E;
      --bs-btn-active-border-color: #1A237E;
      --bs-btn-active-shadow: none;
      --bs-btn-disabled-color: #1A237E;
      --bs-btn-disabled-bg: transparent;
      --bs-btn-disabled-border-color: #1A237E;
      --bs-gradient: none;
    }
    
    .btn-link {
      --bs-btn-font-weight: 400;
      --bs-btn-color: #e91e63;
      --bs-btn-bg: transparent;
      --bs-btn-border-color: transparent;
      --bs-btn-hover-color: #e91e63;
      --bs-btn-hover-border-color: transparent;
      --bs-btn-active-color: #e91e63;
      --bs-btn-active-border-color: transparent;
      --bs-btn-disabled-color: #525252;
      --bs-btn-disabled-border-color: transparent;
      --bs-btn-box-shadow: 0 0 0 #000;
      --bs-btn-focus-shadow-rgb: 200, 27, 86;
      text-decoration: none;
    }
    
    .btn-link:hover,
    .btn-link:focus-visible {
      text-decoration: none;
    }
    
    .btn-link:focus-visible {
      color: var(--bs-btn-color);
    }
    
    .btn-link:hover {
      color: var(--bs-btn-hover-color);
    }
    
    .btn-lg,
    .btn-group-lg>.btn {
      --bs-btn-padding-y: 0.75rem;
      --bs-btn-padding-x: 1.75rem;
      --bs-btn-font-size: 0.875rem;
      --bs-btn-border-radius: 0.5rem;
    }
    
    .btn-sm,
    .btn-group-sm>.btn {
      --bs-btn-padding-y: 0.375rem;
      --bs-btn-padding-x: 1rem;
      --bs-btn-font-size: 0.75rem;
      --bs-btn-border-radius: 0.5rem;
    }
    
    .fade {
      transition: opacity 0.15s linear;
    }
    
    @media (prefers-reduced-motion: reduce) {
      .fade {
        transition: none;
      }
    }
    
    .fade:not(.show) {
      opacity: 0;
    }
    
    .collapse:not(.show) {
      display: none;
    }
    
    .collapsing {
      height: 0;
      overflow: hidden;
      transition: height 0.35s ease;
    }
    
    @media (prefers-reduced-motion: reduce) {
      .collapsing {
        transition: none;
      }
    }
    
    .collapsing.collapse-horizontal {
      width: 0;
      height: auto;
      transition: width 0.35s ease;
    }
    
    @media (prefers-reduced-motion: reduce) {
      .collapsing.collapse-horizontal {
        transition: none;
      }
    }
    
    .dropup,
    .dropend,
    .dropdown,
    .dropstart,
    .dropup-center,
    .dropdown-center {
      position: relative;
    }
    
    .dropdown-toggle {
      white-space: nowrap;
    }
    
    .dropdown-toggle::after {
      display: inline-block;
      margin-left: 0.255em;
      vertical-align: 0.255em;
      content: "";
      border-top: 0.3em solid;
      border-right: 0.3em solid transparent;
      border-bottom: 0;
      border-left: 0.3em solid transparent;
    }
    
    .dropdown-toggle:empty::after {
      margin-left: 0;
    }
    
    .dropdown-menu {
      --bs-dropdown-zindex: 1000;
      --bs-dropdown-min-width: 11rem;
      --bs-dropdown-padding-x: 0;
      --bs-dropdown-padding-y: 0.5rem;
      --bs-dropdown-spacer: 1.625rem;
      --bs-dropdown-font-size: 0.875rem;
      --bs-dropdown-color: #737373;
      --bs-dropdown-bg: #fff;
      --bs-dropdown-border-color: transparent;
      --bs-dropdown-border-radius: 0.375rem;
      --bs-dropdown-border-width: 0;
      --bs-dropdown-inner-border-radius: 0.375rem;
      --bs-dropdown-divider-bg: transparent;
      --bs-dropdown-divider-margin-y: 0.5rem;
      --bs-dropdown-box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
      --bs-dropdown-link-color: #737373;
      --bs-dropdown-link-hover-color: #262626;
      --bs-dropdown-link-hover-bg: #e5e5e5;
      --bs-dropdown-link-active-color: #737373;
      --bs-dropdown-link-active-bg: transparent;
      --bs-dropdown-link-disabled-color: #525252;
      --bs-dropdown-item-padding-x: 1rem;
      --bs-dropdown-item-padding-y: 0.3rem;
      --bs-dropdown-header-color: #525252;
      --bs-dropdown-header-padding-x: 1rem;
      --bs-dropdown-header-padding-y: 0.5rem;
      position: absolute;
      z-index: var(--bs-dropdown-zindex);
      display: none;
      min-width: var(--bs-dropdown-min-width);
      padding: var(--bs-dropdown-padding-y) var(--bs-dropdown-padding-x);
      margin: 0;
      font-size: var(--bs-dropdown-font-size);
      color: var(--bs-dropdown-color);
      text-align: left;
      list-style: none;
      background-color: var(--bs-dropdown-bg);
      background-clip: padding-box;
      border: var(--bs-dropdown-border-width) solid var(--bs-dropdown-border-color);
      border-radius: var(--bs-dropdown-border-radius);
    }
    
    .dropdown-menu[data-bs-popper] {
      top: 100%;
      left: 0;
      margin-top: var(--bs-dropdown-spacer);
    }
    
    .dropdown-menu-start {
      --bs-position: start;
    }
    
    .dropdown-menu-start[data-bs-popper] {
      right: auto;
      left: 0;
    }
    
    .dropdown-menu-end {
      --bs-position: end;
    }
    
    .dropdown-menu-end[data-bs-popper] {
      right: 0;
      left: auto;
    }
    
    @media (min-width: 576px) {
      .dropdown-menu-sm-start {
        --bs-position: start;
      }
    
      .dropdown-menu-sm-start[data-bs-popper] {
        right: auto;
        left: 0;
      }
    
      .dropdown-menu-sm-end {
        --bs-position: end;
      }
    
      .dropdown-menu-sm-end[data-bs-popper] {
        right: 0;
        left: auto;
      }
    }
    
    @media (min-width: 768px) {
      .dropdown-menu-md-start {
        --bs-position: start;
      }
    
      .dropdown-menu-md-start[data-bs-popper] {
        right: auto;
        left: 0;
      }
    
      .dropdown-menu-md-end {
        --bs-position: end;
      }
    
      .dropdown-menu-md-end[data-bs-popper] {
        right: 0;
        left: auto;
      }
    }
    
    @media (min-width: 992px) {
      .dropdown-menu-lg-start {
        --bs-position: start;
      }
    
      .dropdown-menu-lg-start[data-bs-popper] {
        right: auto;
        left: 0;
      }
    
      .dropdown-menu-lg-end {
        --bs-position: end;
      }
    
      .dropdown-menu-lg-end[data-bs-popper] {
        right: 0;
        left: auto;
      }
    }
    
    @media (min-width: 1200px) {
      .dropdown-menu-xl-start {
        --bs-position: start;
      }
    
      .dropdown-menu-xl-start[data-bs-popper] {
        right: auto;
        left: 0;
      }
    
      .dropdown-menu-xl-end {
        --bs-position: end;
      }
    
      .dropdown-menu-xl-end[data-bs-popper] {
        right: 0;
        left: auto;
      }
    }
    
    @media (min-width: 1400px) {
      .dropdown-menu-xxl-start {
        --bs-position: start;
      }
    
      .dropdown-menu-xxl-start[data-bs-popper] {
        right: auto;
        left: 0;
      }
    
      .dropdown-menu-xxl-end {
        --bs-position: end;
      }
    
      .dropdown-menu-xxl-end[data-bs-popper] {
        right: 0;
        left: auto;
      }
    }
    
    .dropup .dropdown-menu[data-bs-popper] {
      top: auto;
      bottom: 100%;
      margin-top: 0;
      margin-bottom: var(--bs-dropdown-spacer);
    }
    
    .dropup .dropdown-toggle::after {
      display: inline-block;
      margin-left: 0.255em;
      vertical-align: 0.255em;
      content: "";
      border-top: 0;
      border-right: 0.3em solid transparent;
      border-bottom: 0.3em solid;
      border-left: 0.3em solid transparent;
    }
    
    .dropup .dropdown-toggle:empty::after {
      margin-left: 0;
    }
    
    .dropend .dropdown-menu[data-bs-popper] {
      top: 0;
      right: auto;
      left: 100%;
      margin-top: 0;
      margin-left: var(--bs-dropdown-spacer);
    }
    
    .dropend .dropdown-toggle::after {
      display: inline-block;
      margin-left: 0.255em;
      vertical-align: 0.255em;
      content: "";
      border-top: 0.3em solid transparent;
      border-right: 0;
      border-bottom: 0.3em solid transparent;
      border-left: 0.3em solid;
    }
    
    .dropend .dropdown-toggle:empty::after {
      margin-left: 0;
    }
    
    .dropend .dropdown-toggle::after {
      vertical-align: 0;
    }
    
    .dropstart .dropdown-menu[data-bs-popper] {
      top: 0;
      right: 100%;
      left: auto;
      margin-top: 0;
      margin-right: var(--bs-dropdown-spacer);
    }
    
    .dropstart .dropdown-toggle::after {
      display: inline-block;
      margin-left: 0.255em;
      vertical-align: 0.255em;
      content: "";
    }
    
    .dropstart .dropdown-toggle::after {
      display: none;
    }
    
    .dropstart .dropdown-toggle::before {
      display: inline-block;
      margin-right: 0.255em;
      vertical-align: 0.255em;
      content: "";
      border-top: 0.3em solid transparent;
      border-right: 0.3em solid;
      border-bottom: 0.3em solid transparent;
    }
    
    .dropstart .dropdown-toggle:empty::after {
      margin-left: 0;
    }
    
    .dropstart .dropdown-toggle::before {
      vertical-align: 0;
    }
    
    .dropdown-divider {
      height: 0;
      margin: var(--bs-dropdown-divider-margin-y) 0;
      overflow: hidden;
      border-top: 1px solid var(--bs-dropdown-divider-bg);
      opacity: 1;
    }
    
    .dropdown-item {
      display: block;
      width: 100%;
      padding: var(--bs-dropdown-item-padding-y) var(--bs-dropdown-item-padding-x);
      clear: both;
      font-weight: 400;
      color: var(--bs-dropdown-link-color);
      text-align: inherit;
      white-space: nowrap;
      background-color: transparent;
      border: 0;
      border-radius: var(--bs-dropdown-item-border-radius, 0);
    }
    
    .dropdown-item:hover,
    .dropdown-item:focus {
      color: var(--bs-dropdown-link-hover-color);
      background-color: var(--bs-dropdown-link-hover-bg);
    }
    
    .dropdown-item.active,
    .dropdown-item:active {
      color: var(--bs-dropdown-link-active-color);
      text-decoration: none;
      background-color: var(--bs-dropdown-link-active-bg);
    }
    
    .dropdown-item.disabled,
    .dropdown-item:disabled {
      color: var(--bs-dropdown-link-disabled-color);
      pointer-events: none;
      background-color: transparent;
    }
    
    .dropdown-menu.show {
      display: block;
    }
    
    .dropdown-header {
      display: block;
      padding: var(--bs-dropdown-header-padding-y) var(--bs-dropdown-header-padding-x);
      margin-bottom: 0;
      font-size: 0.875rem;
      color: var(--bs-dropdown-header-color);
      white-space: nowrap;
    }
    
    .dropdown-item-text {
      display: block;
      padding: var(--bs-dropdown-item-padding-y) var(--bs-dropdown-item-padding-x);
      color: var(--bs-dropdown-link-color);
    }
    
    .dropdown-menu-dark {
      --bs-dropdown-color: #d4d4d4;
      --bs-dropdown-bg: #262626;
      --bs-dropdown-border-color: transparent;
      --bs-dropdown-box-shadow: ;
      --bs-dropdown-link-color: #d4d4d4;
      --bs-dropdown-link-hover-color: #fff;
      --bs-dropdown-divider-bg: transparent;
      --bs-dropdown-link-hover-bg: rgba(255, 255, 255, 0.15);
      --bs-dropdown-link-active-color: #737373;
      --bs-dropdown-link-active-bg: transparent;
      --bs-dropdown-link-disabled-color: #737373;
      --bs-dropdown-header-color: #737373;
    }
    
    .btn-group,
    .btn-group-vertical {
      position: relative;
      display: inline-flex;
      vertical-align: middle;
    }
    
    .btn-group>.btn,
    .btn-group-vertical>.btn {
      position: relative;
      flex: 1 1 auto;
    }
    
    .btn-group>.btn-check:checked+.btn,
    .btn-group>.btn-check:focus+.btn,
    .btn-group>.btn:hover,
    .btn-group>.btn:focus,
    .btn-group>.btn:active,
    .btn-group>.btn.active,
    .btn-group-vertical>.btn-check:checked+.btn,
    .btn-group-vertical>.btn-check:focus+.btn,
    .btn-group-vertical>.btn:hover,
    .btn-group-vertical>.btn:focus,
    .btn-group-vertical>.btn:active,
    .btn-group-vertical>.btn.active {
      z-index: 1;
    }
    
    .btn-toolbar {
      display: flex;
      flex-wrap: wrap;
      justify-content: flex-start;
    }
    
    .btn-toolbar .input-group {
      width: auto;
    }
    
    .btn-group {
      border-radius: 0.375rem;
    }
    
    .btn-group> :not(.btn-check:first-child)+.btn,
    .btn-group>.btn-group:not(:first-child) {
      margin-left: calc(1px * -1);
    }
    
    .btn-group>.btn:not(:last-child):not(.dropdown-toggle),
    .btn-group>.btn.dropdown-toggle-split:first-child,
    .btn-group>.btn-group:not(:last-child)>.btn {
      border-top-right-radius: 0;
      border-bottom-right-radius: 0;
    }
    
    .btn-group>.btn:nth-child(n+3),
    .btn-group> :not(.btn-check)+.btn,
    .btn-group>.btn-group:not(:first-child)>.btn {
      border-top-left-radius: 0;
      border-bottom-left-radius: 0;
    }
    
    .dropdown-toggle-split {
      padding-right: 0.75rem;
      padding-left: 0.75rem;
    }
    
    .dropdown-toggle-split::after,
    .dropup .dropdown-toggle-split::after,
    .dropend .dropdown-toggle-split::after {
      margin-left: 0;
    }
    
    .dropstart .dropdown-toggle-split::before {
      margin-right: 0;
    }
    
    .btn-sm+.dropdown-toggle-split,
    .btn-group-sm>.btn+.dropdown-toggle-split {
      padding-right: 0.75rem;
      padding-left: 0.75rem;
    }
    
    .btn-lg+.dropdown-toggle-split,
    .btn-group-lg>.btn+.dropdown-toggle-split {
      padding-right: 1.3125rem;
      padding-left: 1.3125rem;
    }
    
    .btn-group-vertical {
      flex-direction: column;
      align-items: flex-start;
      justify-content: center;
    }
    
    .btn-group-vertical>.btn,
    .btn-group-vertical>.btn-group {
      width: 100%;
    }
    
    .btn-group-vertical>.btn:not(:first-child),
    .btn-group-vertical>.btn-group:not(:first-child) {
      margin-top: calc(1px * -1);
    }
    
    .btn-group-vertical>.btn:not(:last-child):not(.dropdown-toggle),
    .btn-group-vertical>.btn-group:not(:last-child)>.btn {
      border-bottom-right-radius: 0;
      border-bottom-left-radius: 0;
    }
    
    .btn-group-vertical>.btn~.btn,
    .btn-group-vertical>.btn-group:not(:first-child)>.btn {
      border-top-left-radius: 0;
      border-top-right-radius: 0;
    }
    
    .nav {
      --bs-nav-link-padding-x: 1rem;
      --bs-nav-link-padding-y: 0.5rem;
      --bs-nav-link-font-weight: ;
      --bs-nav-link-color: var(--bs-link-color);
      --bs-nav-link-hover-color: var(--bs-link-hover-color);
      --bs-nav-link-disabled-color: #525252;
      display: flex;
      flex-wrap: wrap;
      padding-left: 0;
      margin-bottom: 0;
      list-style: none;
    }
    
    .nav-link {
      display: block;
      padding: var(--bs-nav-link-padding-y) var(--bs-nav-link-padding-x);
      font-size: var(--bs-nav-link-font-size);
      font-weight: var(--bs-nav-link-font-weight);
      color: var(--bs-nav-link-color);
      background: none;
      border: 0;
      transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out;
    }
    
    @media (prefers-reduced-motion: reduce) {
      .nav-link {
        transition: none;
      }
    }
    
    .nav-link:hover,
    .nav-link:focus {
      color: var(--bs-nav-link-hover-color);
    }
    
    .nav-link:focus-visible {
      outline: 0;
      box-shadow: 0 0 0 0.25rem rgba(233, 30, 99, 0.25);
    }
    
    .nav-link.disabled,
    .nav-link:disabled {
      color: var(--bs-nav-link-disabled-color);
      pointer-events: none;
      cursor: default;
    }
    
    .nav-tabs {
      --bs-nav-tabs-border-width: 1px;
      --bs-nav-tabs-border-color: #d4d4d4;
      --bs-nav-tabs-border-radius: 0.375rem;
      --bs-nav-tabs-link-hover-border-color: #e5e5e5 #e5e5e5 #d4d4d4;
      --bs-nav-tabs-link-active-color: #404040;
      --bs-nav-tabs-link-active-bg: #fff;
      --bs-nav-tabs-link-active-border-color: #d4d4d4 #d4d4d4 #fff;
      border-bottom: var(--bs-nav-tabs-border-width) solid var(--bs-nav-tabs-border-color);
    }
    
    .nav-tabs .nav-link {
      margin-bottom: calc(-1 * var(--bs-nav-tabs-border-width));
      border: var(--bs-nav-tabs-border-width) solid transparent;
      border-top-left-radius: var(--bs-nav-tabs-border-radius);
      border-top-right-radius: var(--bs-nav-tabs-border-radius);
    }
    
    .nav-tabs .nav-link:hover,
    .nav-tabs .nav-link:focus {
      isolation: isolate;
      border-color: var(--bs-nav-tabs-link-hover-border-color);
    }
    
    .nav-tabs .nav-link.active,
    .nav-tabs .nav-item.show .nav-link {
      color: var(--bs-nav-tabs-link-active-color);
      background-color: var(--bs-nav-tabs-link-active-bg);
      border-color: var(--bs-nav-tabs-link-active-border-color);
    }
    
    .nav-tabs .dropdown-menu {
      margin-top: calc(-1 * var(--bs-nav-tabs-border-width));
      border-top-left-radius: 0;
      border-top-right-radius: 0;
    }
    
    .nav-pills {
      --bs-nav-pills-border-radius: 0.75rem;
      --bs-nav-pills-link-active-color: #262626;
      --bs-nav-pills-link-active-bg: #fff;
    }
    
    .nav-pills .nav-link {
      border-radius: var(--bs-nav-pills-border-radius);
    }
    
    .nav-pills .nav-link.active,
    .nav-pills .show>.nav-link {
      color: var(--bs-nav-pills-link-active-color);
      background-color: var(--bs-nav-pills-link-active-bg);
    }
    
    .nav-underline {
      --bs-nav-underline-gap: 1rem;
      --bs-nav-underline-border-width: 0.125rem;
      --bs-nav-underline-link-active-color: var(--bs-emphasis-color);
      gap: var(--bs-nav-underline-gap);
    }
    
    .nav-underline .nav-link {
      padding-right: 0;
      padding-left: 0;
      border-bottom: var(--bs-nav-underline-border-width) solid transparent;
    }
    
    .nav-underline .nav-link:hover,
    .nav-underline .nav-link:focus {
      border-bottom-color: currentcolor;
    }
    
    .nav-underline .nav-link.active,
    .nav-underline .show>.nav-link {
      font-weight: 600;
      color: var(--bs-nav-underline-link-active-color);
      border-bottom-color: currentcolor;
    }
    
    .nav-fill>.nav-link,
    .nav-fill .nav-item {
      flex: 1 1 auto;
      text-align: center;
    }
    
    .nav-justified>.nav-link,
    .nav-justified .nav-item {
      flex-basis: 0;
      flex-grow: 1;
      text-align: center;
    }
    
    .nav-fill .nav-item .nav-link,
    .nav-justified .nav-item .nav-link {
      width: 100%;
    }
    
    .tab-content>.tab-pane {
      display: none;
    }
    
    .tab-content>.active {
      display: block;
    }
    
    .navbar {
      --bs-navbar-padding-x: 0.75rem;
      --bs-navbar-padding-y: 0.5rem;
      --bs-navbar-color: #262626;
      --bs-navbar-hover-color: rgba(38, 38, 38, 0.7);
      --bs-navbar-disabled-color: rgba(38, 38, 38, 0.3);
      --bs-navbar-active-color: rgba(38, 38, 38, 0.9);
      --bs-navbar-brand-padding-y: 0.40625rem;
      --bs-navbar-brand-margin-end: 1rem;
      --bs-navbar-brand-font-size: 1.125rem;
      --bs-navbar-brand-color: rgba(38, 38, 38, 0.9);
      --bs-navbar-brand-hover-color: rgba(38, 38, 38, 0.9);
      --bs-navbar-nav-link-padding-x: 0.5rem;
      --bs-navbar-toggler-padding-y: 0.25rem;
      --bs-navbar-toggler-padding-x: 0.75rem;
      --bs-navbar-toggler-font-size: 1.125rem;
      --bs-navbar-toggler-icon-bg: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='%23262626' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
      --bs-navbar-toggler-border-color: rgba(38, 38, 38, 0.1);
      --bs-navbar-toggler-border-radius: 0.375rem;
      --bs-navbar-toggler-focus-width: 0.2rem;
      --bs-navbar-toggler-transition: box-shadow 0.15s ease-in-out;
      position: relative;
      display: flex;
      flex-wrap: wrap;
      align-items: center;
      justify-content: space-between;
      padding: var(--bs-navbar-padding-y) var(--bs-navbar-padding-x);
    }
    
    .navbar>.container,
    .navbar>.container-fluid,
    .navbar>.container-sm,
    .navbar>.container-md,
    .navbar>.container-lg,
    .navbar>.container-xl,
    .navbar>.container-xxl {
      display: flex;
      flex-wrap: inherit;
      align-items: center;
      justify-content: space-between;
    }
    
    .navbar-brand {
      padding-top: var(--bs-navbar-brand-padding-y);
      padding-bottom: var(--bs-navbar-brand-padding-y);
      margin-right: var(--bs-navbar-brand-margin-end);
      font-size: var(--bs-navbar-brand-font-size);
      color: var(--bs-navbar-brand-color);
      white-space: nowrap;
    }
    
    .navbar-brand:hover,
    .navbar-brand:focus {
      color: var(--bs-navbar-brand-hover-color);
    }
    
    .navbar-nav {
      --bs-nav-link-padding-x: 0;
      --bs-nav-link-padding-y: 0.5rem;
      --bs-nav-link-font-weight: ;
      --bs-nav-link-color: var(--bs-navbar-color);
      --bs-nav-link-hover-color: var(--bs-navbar-hover-color);
      --bs-nav-link-disabled-color: var(--bs-navbar-disabled-color);
      display: flex;
      flex-direction: column;
      padding-left: 0;
      margin-bottom: 0;
      list-style: none;
    }
    
    .navbar-nav .nav-link.active,
    .navbar-nav .nav-link.show {
      color: var(--bs-navbar-active-color);
    }
    
    .navbar-nav .dropdown-menu {
      position: static;
    }
    
    .navbar-text {
      padding-top: 0.5rem;
      padding-bottom: 0.5rem;
      color: var(--bs-navbar-color);
    }
    
    .navbar-text a,
    .navbar-text a:hover,
    .navbar-text a:focus {
      color: var(--bs-navbar-active-color);
    }
    
    .navbar-collapse {
      flex-basis: 100%;
      flex-grow: 1;
      align-items: center;
    }
    
    .navbar-toggler {
      padding: var(--bs-navbar-toggler-padding-y) var(--bs-navbar-toggler-padding-x);
      font-size: var(--bs-navbar-toggler-font-size);
      line-height: 1;
      color: var(--bs-navbar-color);
      background-color: transparent;
      border: var(--bs-border-width) solid var(--bs-navbar-toggler-border-color);
      border-radius: var(--bs-navbar-toggler-border-radius);
      transition: var(--bs-navbar-toggler-transition);
    }
    
    @media (prefers-reduced-motion: reduce) {
      .navbar-toggler {
        transition: none;
      }
    }
    
    .navbar-toggler:hover {
      text-decoration: none;
    }
    
    .navbar-toggler:focus {
      text-decoration: none;
      outline: 0;
      box-shadow: 0 0 0 var(--bs-navbar-toggler-focus-width);
    }
    
    .navbar-toggler-icon {
      display: inline-block;
      width: 1.5em;
      height: 1.5em;
      vertical-align: middle;
      background-image: var(--bs-navbar-toggler-icon-bg);
      background-repeat: no-repeat;
      background-position: center;
      background-size: 100%;
    }
    
    .navbar-nav-scroll {
      max-height: var(--bs-scroll-height, 75vh);
      overflow-y: auto;
    }
    
    @media (min-width: 576px) {
      .navbar-expand-sm {
        flex-wrap: nowrap;
        justify-content: flex-start;
      }
    
      .navbar-expand-sm .navbar-nav {
        flex-direction: row;
      }
    
      .navbar-expand-sm .navbar-nav .dropdown-menu {
        position: absolute;
      }
    
      .navbar-expand-sm .navbar-nav .nav-link {
        padding-right: var(--bs-navbar-nav-link-padding-x);
        padding-left: var(--bs-navbar-nav-link-padding-x);
      }
    
      .navbar-expand-sm .navbar-nav-scroll {
        overflow: visible;
      }
    
      .navbar-expand-sm .navbar-collapse {
        display: flex !important;
        flex-basis: auto;
      }
    
      .navbar-expand-sm .navbar-toggler {
        display: none;
      }
    
      .navbar-expand-sm .offcanvas {
        position: static;
        z-index: auto;
        flex-grow: 1;
        width: auto !important;
        height: auto !important;
        visibility: visible !important;
        background-color: transparent !important;
        border: 0 !important;
        transform: none !important;
        transition: none;
      }
    
      .navbar-expand-sm .offcanvas .offcanvas-header {
        display: none;
      }
    
      .navbar-expand-sm .offcanvas .offcanvas-body {
        display: flex;
        flex-grow: 0;
        padding: 0;
        overflow-y: visible;
      }
    }
    
    @media (min-width: 768px) {
      .navbar-expand-md {
        flex-wrap: nowrap;
        justify-content: flex-start;
      }
    
      .navbar-expand-md .navbar-nav {
        flex-direction: row;
      }
    
      .navbar-expand-md .navbar-nav .dropdown-menu {
        position: absolute;
      }
    
      .navbar-expand-md .navbar-nav .nav-link {
        padding-right: var(--bs-navbar-nav-link-padding-x);
        padding-left: var(--bs-navbar-nav-link-padding-x);
      }
    
      .navbar-expand-md .navbar-nav-scroll {
        overflow: visible;
      }
    
      .navbar-expand-md .navbar-collapse {
        display: flex !important;
        flex-basis: auto;
      }
    
      .navbar-expand-md .navbar-toggler {
        display: none;
      }
    
      .navbar-expand-md .offcanvas {
        position: static;
        z-index: auto;
        flex-grow: 1;
        width: auto !important;
        height: auto !important;
        visibility: visible !important;
        background-color: transparent !important;
        border: 0 !important;
        transform: none !important;
        transition: none;
      }
    
      .navbar-expand-md .offcanvas .offcanvas-header {
        display: none;
      }
    
      .navbar-expand-md .offcanvas .offcanvas-body {
        display: flex;
        flex-grow: 0;
        padding: 0;
        overflow-y: visible;
      }
    }
    
    @media (min-width: 992px) {
      .navbar-expand-lg {
        flex-wrap: nowrap;
        justify-content: flex-start;
      }
    
      .navbar-expand-lg .navbar-nav {
        flex-direction: row;
      }
    
      .navbar-expand-lg .navbar-nav .dropdown-menu {
        position: absolute;
      }
    
      .navbar-expand-lg .navbar-nav .nav-link {
        padding-right: var(--bs-navbar-nav-link-padding-x);
        padding-left: var(--bs-navbar-nav-link-padding-x);
      }
    
      .navbar-expand-lg .navbar-nav-scroll {
        overflow: visible;
      }
    
      .navbar-expand-lg .navbar-collapse {
        display: flex !important;
        flex-basis: auto;
      }
    
      .navbar-expand-lg .navbar-toggler {
        display: none;
      }
    
      .navbar-expand-lg .offcanvas {
        position: static;
        z-index: auto;
        flex-grow: 1;
        width: auto !important;
        height: auto !important;
        visibility: visible !important;
        background-color: transparent !important;
        border: 0 !important;
        transform: none !important;
        transition: none;
      }
    
      .navbar-expand-lg .offcanvas .offcanvas-header {
        display: none;
      }
    
      .navbar-expand-lg .offcanvas .offcanvas-body {
        display: flex;
        flex-grow: 0;
        padding: 0;
        overflow-y: visible;
      }
    }
    
    @media (min-width: 1200px) {
      .navbar-expand-xl {
        flex-wrap: nowrap;
        justify-content: flex-start;
      }
    
      .navbar-expand-xl .navbar-nav {
        flex-direction: row;
      }
    
      .navbar-expand-xl .navbar-nav .dropdown-menu {
        position: absolute;
      }
    
      .navbar-expand-xl .navbar-nav .nav-link {
        padding-right: var(--bs-navbar-nav-link-padding-x);
        padding-left: var(--bs-navbar-nav-link-padding-x);
      }
    
      .navbar-expand-xl .navbar-nav-scroll {
        overflow: visible;
      }
    
      .navbar-expand-xl .navbar-collapse {
        display: flex !important;
        flex-basis: auto;
      }
    
      .navbar-expand-xl .navbar-toggler {
        display: none;
      }
    
      .navbar-expand-xl .offcanvas {
        position: static;
        z-index: auto;
        flex-grow: 1;
        width: auto !important;
        height: auto !important;
        visibility: visible !important;
        background-color: transparent !important;
        border: 0 !important;
        transform: none !important;
        transition: none;
      }
    
      .navbar-expand-xl .offcanvas .offcanvas-header {
        display: none;
      }
    
      .navbar-expand-xl .offcanvas .offcanvas-body {
        display: flex;
        flex-grow: 0;
        padding: 0;
        overflow-y: visible;
      }
    }
    
    @media (min-width: 1400px) {
      .navbar-expand-xxl {
        flex-wrap: nowrap;
        justify-content: flex-start;
      }
    
      .navbar-expand-xxl .navbar-nav {
        flex-direction: row;
      }
    
      .navbar-expand-xxl .navbar-nav .dropdown-menu {
        position: absolute;
      }
    
      .navbar-expand-xxl .navbar-nav .nav-link {
        padding-right: var(--bs-navbar-nav-link-padding-x);
        padding-left: var(--bs-navbar-nav-link-padding-x);
      }
    
      .navbar-expand-xxl .navbar-nav-scroll {
        overflow: visible;
      }
    
      .navbar-expand-xxl .navbar-collapse {
        display: flex !important;
        flex-basis: auto;
      }
    
      .navbar-expand-xxl .navbar-toggler {
        display: none;
      }
    
      .navbar-expand-xxl .offcanvas {
        position: static;
        z-index: auto;
        flex-grow: 1;
        width: auto !important;
        height: auto !important;
        visibility: visible !important;
        background-color: transparent !important;
        border: 0 !important;
        transform: none !important;
        transition: none;
      }
    
      .navbar-expand-xxl .offcanvas .offcanvas-header {
        display: none;
      }
    
      .navbar-expand-xxl .offcanvas .offcanvas-body {
        display: flex;
        flex-grow: 0;
        padding: 0;
        overflow-y: visible;
      }
    }
    
    .navbar-expand {
      flex-wrap: nowrap;
      justify-content: flex-start;
    }
    
    .navbar-expand .navbar-nav {
      flex-direction: row;
    }
    
    .navbar-expand .navbar-nav .dropdown-menu {
      position: absolute;
    }
    
    .navbar-expand .navbar-nav .nav-link {
      padding-right: var(--bs-navbar-nav-link-padding-x);
      padding-left: var(--bs-navbar-nav-link-padding-x);
    }
    
    .navbar-expand .navbar-nav-scroll {
      overflow: visible;
    }
    
    .navbar-expand .navbar-collapse {
      display: flex !important;
      flex-basis: auto;
    }
    
    .navbar-expand .navbar-toggler {
      display: none;
    }
    
    .navbar-expand .offcanvas {
      position: static;
      z-index: auto;
      flex-grow: 1;
      width: auto !important;
      height: auto !important;
      visibility: visible !important;
      background-color: transparent !important;
      border: 0 !important;
      transform: none !important;
      transition: none;
    }
    
    .navbar-expand .offcanvas .offcanvas-header {
      display: none;
    }
    
    .navbar-expand .offcanvas .offcanvas-body {
      display: flex;
      flex-grow: 0;
      padding: 0;
      overflow-y: visible;
    }
    
    .navbar-dark,
    .navbar[data-bs-theme=dark] {
      --bs-navbar-color: rgba(255, 255, 255, 0.85);
      --bs-navbar-hover-color: rgba(255, 255, 255, 0.75);
      --bs-navbar-disabled-color: rgba(255, 255, 255, 0.25);
      --bs-navbar-active-color: #fff;
      --bs-navbar-brand-color: #fff;
      --bs-navbar-brand-hover-color: #fff;
      --bs-navbar-toggler-border-color: rgba(255, 255, 255, 0.1);
      --bs-navbar-toggler-icon-bg: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%28255, 255, 255, 0.85%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
    }
    
    [data-bs-theme=dark] .navbar-toggler-icon {
      --bs-navbar-toggler-icon-bg: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%28255, 255, 255, 0.85%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
    }
    
    .card {
      --bs-card-spacer-y: 1rem;
      --bs-card-spacer-x: 1rem;
      --bs-card-title-spacer-y: 0.5rem;
      --bs-card-title-color: ;
      --bs-card-subtitle-color: ;
      --bs-card-border-width: 0;
      --bs-card-border-color: #e5e5e5;
      --bs-card-border-radius: 0.5rem;
      --bs-card-box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
      --bs-card-inner-border-radius: 0.5rem;
      --bs-card-cap-padding-y: 0.5rem;
      --bs-card-cap-padding-x: 1rem;
      --bs-card-cap-bg: #fff;
      --bs-card-cap-color: ;
      --bs-card-height: ;
      --bs-card-color: ;
      --bs-card-bg: #fff;
      --bs-card-img-overlay-padding: 1rem;
      --bs-card-group-margin: 0.75rem;
      position: relative;
      display: flex;
      flex-direction: column;
      min-width: 0;
      height: var(--bs-card-height);
      color: var(--bs-body-color);
      word-wrap: break-word;
      background-color: var(--bs-card-bg);
      background-clip: border-box;
      border: var(--bs-card-border-width) solid var(--bs-card-border-color);
      border-radius: var(--bs-card-border-radius);
    }
    
    .card>hr {
      margin-right: 0;
      margin-left: 0;
    }
    
    .card>.list-group {
      border-top: inherit;
      border-bottom: inherit;
    }
    
    .card>.list-group:first-child {
      border-top-width: 0;
      border-top-left-radius: var(--bs-card-inner-border-radius);
      border-top-right-radius: var(--bs-card-inner-border-radius);
    }
    
    .card>.list-group:last-child {
      border-bottom-width: 0;
      border-bottom-right-radius: var(--bs-card-inner-border-radius);
      border-bottom-left-radius: var(--bs-card-inner-border-radius);
    }
    
    .card>.card-header+.list-group,
    .card>.list-group+.card-footer {
      border-top: 0;
    }
    
    .card-body {
      flex: 1 1 auto;
      padding: var(--bs-card-spacer-y) var(--bs-card-spacer-x);
      color: var(--bs-card-color);
    }
    
    .card-title {
      margin-bottom: var(--bs-card-title-spacer-y);
      color: var(--bs-card-title-color);
    }
    
    .card-subtitle {
      margin-top: calc(-0.5 * var(--bs-card-title-spacer-y));
      margin-bottom: 0;
      color: var(--bs-card-subtitle-color);
    }
    
    .card-text:last-child {
      margin-bottom: 0;
    }
    
    .card-link+.card-link {
      margin-left: var(--bs-card-spacer-x);
    }
    
    .card-header {
      padding: var(--bs-card-cap-padding-y) var(--bs-card-cap-padding-x);
      margin-bottom: 0;
      color: var(--bs-card-cap-color);
      background-color: var(--bs-card-cap-bg);
      border-bottom: var(--bs-card-border-width) solid var(--bs-card-border-color);
    }
    
    .card-header:first-child {
      border-radius: var(--bs-card-inner-border-radius) var(--bs-card-inner-border-radius) 0 0;
    }
    
    .card-footer {
      padding: var(--bs-card-cap-padding-y) var(--bs-card-cap-padding-x);
      color: var(--bs-card-cap-color);
      background-color: var(--bs-card-cap-bg);
      border-top: var(--bs-card-border-width) solid var(--bs-card-border-color);
    }
    
    .card-footer:last-child {
      border-radius: 0 0 var(--bs-card-inner-border-radius) var(--bs-card-inner-border-radius);
    }
    
    .card-header-tabs {
      margin-right: calc(-0.5 * var(--bs-card-cap-padding-x));
      margin-bottom: calc(-1 * var(--bs-card-cap-padding-y));
      margin-left: calc(-0.5 * var(--bs-card-cap-padding-x));
      border-bottom: 0;
    }
    
    .card-header-tabs .nav-link.active {
      background-color: var(--bs-card-bg);
      border-bottom-color: var(--bs-card-bg);
    }
    
    .card-header-pills {
      margin-right: calc(-0.5 * var(--bs-card-cap-padding-x));
      margin-left: calc(-0.5 * var(--bs-card-cap-padding-x));
    }
    
    .card-img-overlay {
      position: absolute;
      top: 0;
      right: 0;
      bottom: 0;
      left: 0;
      padding: var(--bs-card-img-overlay-padding);
      border-radius: var(--bs-card-inner-border-radius);
    }
    
    .card-img,
    .card-img-top,
    .card-img-bottom {
      width: 100%;
    }
    
    .card-img,
    .card-img-top {
      border-top-left-radius: var(--bs-card-inner-border-radius);
      border-top-right-radius: var(--bs-card-inner-border-radius);
    }
    
    .card-img,
    .card-img-bottom {
      border-bottom-right-radius: var(--bs-card-inner-border-radius);
      border-bottom-left-radius: var(--bs-card-inner-border-radius);
    }
    
    .card-group>.card {
      margin-bottom: var(--bs-card-group-margin);
    }
    
    @media (min-width: 576px) {
      .card-group {
        display: flex;
        flex-flow: row wrap;
      }
    
      .card-group>.card {
        flex: 1 0 0%;
        margin-bottom: 0;
      }
    
      .card-group>.card+.card {
        margin-left: 0;
        border-left: 0;
      }
    
      .card-group>.card:not(:last-child) {
        border-top-right-radius: 0;
        border-bottom-right-radius: 0;
      }
    
      .card-group>.card:not(:last-child) .card-img-top,
      .card-group>.card:not(:last-child) .card-header {
        border-top-right-radius: 0;
      }
    
      .card-group>.card:not(:last-child) .card-img-bottom,
      .card-group>.card:not(:last-child) .card-footer {
        border-bottom-right-radius: 0;
      }
    
      .card-group>.card:not(:first-child) {
        border-top-left-radius: 0;
        border-bottom-left-radius: 0;
      }
    
      .card-group>.card:not(:first-child) .card-img-top,
      .card-group>.card:not(:first-child) .card-header {
        border-top-left-radius: 0;
      }
    
      .card-group>.card:not(:first-child) .card-img-bottom,
      .card-group>.card:not(:first-child) .card-footer {
        border-bottom-left-radius: 0;
      }
    }
    
    .accordion {
      --bs-accordion-color: #737373;
      --bs-accordion-bg: transparent;
      --bs-accordion-transition: all 0.15s ease-in, border-radius 0.15s ease;
      --bs-accordion-border-color: rgba(10, 10, 10, 0.125);
      --bs-accordion-border-width: 0;
      --bs-accordion-border-radius: 0.125rem;
      --bs-accordion-inner-border-radius: 0.125rem;
      --bs-accordion-btn-padding-x: 0rem;
      --bs-accordion-btn-padding-y: 1rem;
      --bs-accordion-btn-color: #737373;
      --bs-accordion-btn-bg: transparent;
      --bs-accordion-btn-icon: none;
      --bs-accordion-btn-icon-width: 1rem;
      --bs-accordion-btn-icon-transform: rotate(180deg);
      --bs-accordion-btn-icon-transition: transform 0.2s ease-in-out;
      --bs-accordion-btn-active-icon: none;
      --bs-accordion-btn-focus-box-shadow: none;
      --bs-accordion-body-padding-x: 0rem;
      --bs-accordion-body-padding-y: 1rem;
      --bs-accordion-active-color: #262626;
      --bs-accordion-active-bg: transparent;
    }
    
    .accordion-button {
      position: relative;
      display: flex;
      align-items: center;
      width: 100%;
      padding: var(--bs-accordion-btn-padding-y) var(--bs-accordion-btn-padding-x);
      font-size: 1rem;
      color: var(--bs-accordion-btn-color);
      text-align: left;
      background-color: var(--bs-accordion-btn-bg);
      border: 0;
      border-radius: 0;
      overflow-anchor: none;
      transition: var(--bs-accordion-transition);
    }
    
    @media (prefers-reduced-motion: reduce) {
      .accordion-button {
        transition: none;
      }
    }
    
    .accordion-button:not(.collapsed) {
      color: var(--bs-accordion-active-color);
      background-color: var(--bs-accordion-active-bg);
      box-shadow: inset 0 calc(-1 * var(--bs-accordion-border-width)) 0 var(--bs-accordion-border-color);
    }
    
    .accordion-button:not(.collapsed)::after {
      background-image: var(--bs-accordion-btn-active-icon);
      transform: var(--bs-accordion-btn-icon-transform);
    }
    
    .accordion-button::after {
      flex-shrink: 0;
      width: var(--bs-accordion-btn-icon-width);
      height: var(--bs-accordion-btn-icon-width);
      margin-left: auto;
      content: "";
      background-image: var(--bs-accordion-btn-icon);
      background-repeat: no-repeat;
      background-size: var(--bs-accordion-btn-icon-width);
      transition: var(--bs-accordion-btn-icon-transition);
    }
    
    @media (prefers-reduced-motion: reduce) {
      .accordion-button::after {
        transition: none;
      }
    }
    
    .accordion-button:hover {
      z-index: 2;
    }
    
    .accordion-button:focus {
      z-index: 3;
      outline: 0;
      box-shadow: var(--bs-accordion-btn-focus-box-shadow);
    }
    
    .accordion-header {
      margin-bottom: 0;
    }
    
    .accordion-item {
      color: var(--bs-accordion-color);
      background-color: var(--bs-accordion-bg);
      border: var(--bs-accordion-border-width) solid var(--bs-accordion-border-color);
    }
    
    .accordion-item:first-of-type {
      border-top-left-radius: var(--bs-accordion-border-radius);
      border-top-right-radius: var(--bs-accordion-border-radius);
    }
    
    .accordion-item:first-of-type>.accordion-header .accordion-button {
      border-top-left-radius: var(--bs-accordion-inner-border-radius);
      border-top-right-radius: var(--bs-accordion-inner-border-radius);
    }
    
    .accordion-item:not(:first-of-type) {
      border-top: 0;
    }
    
    .accordion-item:last-of-type {
      border-bottom-right-radius: var(--bs-accordion-border-radius);
      border-bottom-left-radius: var(--bs-accordion-border-radius);
    }
    
    .accordion-item:last-of-type>.accordion-header .accordion-button.collapsed {
      border-bottom-right-radius: var(--bs-accordion-inner-border-radius);
      border-bottom-left-radius: var(--bs-accordion-inner-border-radius);
    }
    
    .accordion-item:last-of-type>.accordion-collapse {
      border-bottom-right-radius: var(--bs-accordion-border-radius);
      border-bottom-left-radius: var(--bs-accordion-border-radius);
    }
    
    .accordion-body {
      padding: var(--bs-accordion-body-padding-y) var(--bs-accordion-body-padding-x);
    }
    
    .accordion-flush>.accordion-item {
      border-right: 0;
      border-left: 0;
      border-radius: 0;
    }
    
    .accordion-flush>.accordion-item:first-child {
      border-top: 0;
    }
    
    .accordion-flush>.accordion-item:last-child {
      border-bottom: 0;
    }
    
    .accordion-flush>.accordion-item>.accordion-header .accordion-button,
    .accordion-flush>.accordion-item>.accordion-header .accordion-button.collapsed {
      border-radius: 0;
    }
    
    .accordion-flush>.accordion-item>.accordion-collapse {
      border-radius: 0;
    }
    
    [data-bs-theme=dark] .accordion-button::after {
      --bs-accordion-btn-icon: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='rgb%28241.8, 120, 161.4%29'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
      --bs-accordion-btn-active-icon: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='rgb%28241.8, 120, 161.4%29'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
    }
    
    .breadcrumb {
      --bs-breadcrumb-padding-x: 1rem;
      --bs-breadcrumb-padding-y: 0.5rem;
      --bs-breadcrumb-margin-bottom: 1rem;
      --bs-breadcrumb-bg: #e5e5e5;
      --bs-breadcrumb-border-radius: 0.375rem;
      --bs-breadcrumb-divider-color: #525252;
      --bs-breadcrumb-item-padding-x: 0.5rem;
      --bs-breadcrumb-item-active-color: #525252;
      display: flex;
      flex-wrap: wrap;
      padding: var(--bs-breadcrumb-padding-y) var(--bs-breadcrumb-padding-x);
      margin-bottom: var(--bs-breadcrumb-margin-bottom);
      font-size: var(--bs-breadcrumb-font-size);
      list-style: none;
      background-color: var(--bs-breadcrumb-bg);
      border-radius: var(--bs-breadcrumb-border-radius);
    }
    
    .breadcrumb-item+.breadcrumb-item {
      padding-left: var(--bs-breadcrumb-item-padding-x);
    }
    
    .breadcrumb-item+.breadcrumb-item::before {
      float: left;
      padding-right: var(--bs-breadcrumb-item-padding-x);
      color: var(--bs-breadcrumb-divider-color);
      content: var(--bs-breadcrumb-divider, "/")
        /* rtl: var(--bs-breadcrumb-divider, "/") */
      ;
    }
    
    .breadcrumb-item.active {
      color: var(--bs-breadcrumb-item-active-color);
    }
    
    .pagination {
      --bs-pagination-padding-x: 0.75rem;
      --bs-pagination-padding-y: 0.375rem;
      --bs-pagination-font-size: 1rem;
      --bs-pagination-color: #e91e63;
      --bs-pagination-bg: #fff;
      --bs-pagination-border-width: 1px;
      --bs-pagination-border-color: #d4d4d4;
      --bs-pagination-border-radius: 0.375rem;
      --bs-pagination-hover-color: #e91e63;
      --bs-pagination-hover-bg: #e5e5e5;
      --bs-pagination-hover-border-color: #d4d4d4;
      --bs-pagination-focus-color: #e91e63;
      --bs-pagination-focus-bg: #e5e5e5;
      --bs-pagination-focus-box-shadow: 0 0 0 0.2rem rgba(233, 30, 99, 0.25);
      --bs-pagination-active-color: #fff;
      --bs-pagination-active-bg: #e91e63;
      --bs-pagination-active-border-color: #e91e63;
      --bs-pagination-disabled-color: #525252;
      --bs-pagination-disabled-bg: #fff;
      --bs-pagination-disabled-border-color: #d4d4d4;
      display: flex;
      padding-left: 0;
      list-style: none;
    }
    
    .page-link {
      position: relative;
      display: block;
      padding: var(--bs-pagination-padding-y) var(--bs-pagination-padding-x);
      font-size: var(--bs-pagination-font-size);
      color: var(--bs-pagination-color);
      background-color: var(--bs-pagination-bg);
      border: var(--bs-pagination-border-width) solid var(--bs-pagination-border-color);
      transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    }
    
    @media (prefers-reduced-motion: reduce) {
      .page-link {
        transition: none;
      }
    }
    
    .page-link:hover {
      z-index: 2;
      color: var(--bs-pagination-hover-color);
      background-color: var(--bs-pagination-hover-bg);
      border-color: var(--bs-pagination-hover-border-color);
    }
    
    .page-link:focus {
      z-index: 3;
      color: var(--bs-pagination-focus-color);
      background-color: var(--bs-pagination-focus-bg);
      outline: 0;
      box-shadow: var(--bs-pagination-focus-box-shadow);
    }
    
    .page-link.active,
    .active>.page-link {
      z-index: 3;
      color: var(--bs-pagination-active-color);
      background-color: var(--bs-pagination-active-bg);
      border-color: var(--bs-pagination-active-border-color);
    }
    
    .page-link.disabled,
    .disabled>.page-link {
      color: var(--bs-pagination-disabled-color);
      pointer-events: none;
      background-color: var(--bs-pagination-disabled-bg);
      border-color: var(--bs-pagination-disabled-border-color);
    }
    
    .page-item:not(:first-child) .page-link {
      margin-left: calc(1px * -1);
    }
    
    .page-item:first-child .page-link {
      border-top-left-radius: var(--bs-pagination-border-radius);
      border-bottom-left-radius: var(--bs-pagination-border-radius);
    }
    
    .page-item:last-child .page-link {
      border-top-right-radius: var(--bs-pagination-border-radius);
      border-bottom-right-radius: var(--bs-pagination-border-radius);
    }
    
    .pagination-lg {
      --bs-pagination-padding-x: 1.5rem;
      --bs-pagination-padding-y: 0.75rem;
      --bs-pagination-font-size: 1.125rem;
      --bs-pagination-border-radius: var(--bs-border-radius-lg);
    }
    
    .pagination-sm {
      --bs-pagination-padding-x: 0.5rem;
      --bs-pagination-padding-y: 0.25rem;
      --bs-pagination-font-size: 0.875rem;
      --bs-pagination-border-radius: var(--bs-border-radius-sm);
    }
    
    .badge {
      --bs-badge-padding-x: 0.9em;
      --bs-badge-padding-y: 0.55em;
      --bs-badge-font-size: 0.75em;
      --bs-badge-font-weight: 700;
      --bs-badge-color: #fff;
      --bs-badge-border-radius: 0.45rem;
      display: inline-block;
      padding: var(--bs-badge-padding-y) var(--bs-badge-padding-x);
      font-size: var(--bs-badge-font-size);
      font-weight: var(--bs-badge-font-weight);
      line-height: 1;
      color: var(--bs-badge-color);
      text-align: center;
      white-space: nowrap;
      vertical-align: baseline;
      border-radius: var(--bs-badge-border-radius);
    }
    
    .badge:empty {
      display: none;
    }
    
    .btn .badge {
      position: relative;
      top: -1px;
    }
    
    .alert {
      --bs-alert-bg: transparent;
      --bs-alert-padding-x: 1rem;
      --bs-alert-padding-y: 1rem;
      --bs-alert-margin-bottom: 1rem;
      --bs-alert-color: inherit;
      --bs-alert-border-color: transparent;
      --bs-alert-border: 0 solid var(--bs-alert-border-color);
      --bs-alert-border-radius: 0.375rem;
      --bs-alert-link-color: inherit;
      position: relative;
      padding: var(--bs-alert-padding-y) var(--bs-alert-padding-x);
      margin-bottom: var(--bs-alert-margin-bottom);
      color: var(--bs-alert-color);
      background-color: var(--bs-alert-bg);
      border: var(--bs-alert-border);
      border-radius: var(--bs-alert-border-radius);
    }
    
    .alert-heading {
      color: inherit;
    }
    
    .alert-link {
      font-weight: 600;
      color: var(--bs-alert-link-color);
    }
    
    .alert-dismissible {
      padding-right: 3rem;
    }
    
    .alert-dismissible .btn-close {
      position: absolute;
      top: 0;
      right: 0;
      z-index: 2;
      padding: 1.25rem 1rem;
    }
    
    .alert-primary {
      --bs-alert-color: var(--bs-primary-text-emphasis);
      --bs-alert-bg: var(--bs-primary-bg-subtle);
      --bs-alert-border-color: var(--bs-primary-border-subtle);
      --bs-alert-link-color: var(--bs-primary-text-emphasis);
    }
    
    .alert-secondary {
      --bs-alert-color: var(--bs-secondary-text-emphasis);
      --bs-alert-bg: var(--bs-secondary-bg-subtle);
      --bs-alert-border-color: var(--bs-secondary-border-subtle);
      --bs-alert-link-color: var(--bs-secondary-text-emphasis);
    }
    
    .alert-success {
      --bs-alert-color: var(--bs-success-text-emphasis);
      --bs-alert-bg: var(--bs-success-bg-subtle);
      --bs-alert-border-color: var(--bs-success-border-subtle);
      --bs-alert-link-color: var(--bs-success-text-emphasis);
    }
    
    .alert-info {
      --bs-alert-color: var(--bs-info-text-emphasis);
      --bs-alert-bg: var(--bs-info-bg-subtle);
      --bs-alert-border-color: var(--bs-info-border-subtle);
      --bs-alert-link-color: var(--bs-info-text-emphasis);
    }
    
    .alert-warning {
      --bs-alert-color: var(--bs-warning-text-emphasis);
      --bs-alert-bg: var(--bs-warning-bg-subtle);
      --bs-alert-border-color: var(--bs-warning-border-subtle);
      --bs-alert-link-color: var(--bs-warning-text-emphasis);
    }
    
    .alert-danger {
      --bs-alert-color: var(--bs-danger-text-emphasis);
      --bs-alert-bg: var(--bs-danger-bg-subtle);
      --bs-alert-border-color: var(--bs-danger-border-subtle);
      --bs-alert-link-color: var(--bs-danger-text-emphasis);
    }
    
    .alert-light {
      --bs-alert-color: var(--bs-light-text-emphasis);
      --bs-alert-bg: var(--bs-light-bg-subtle);
      --bs-alert-border-color: var(--bs-light-border-subtle);
      --bs-alert-link-color: var(--bs-light-text-emphasis);
    }
    
    .alert-dark {
      --bs-alert-color: var(--bs-dark-text-emphasis);
      --bs-alert-bg: var(--bs-dark-bg-subtle);
      --bs-alert-border-color: var(--bs-dark-border-subtle);
      --bs-alert-link-color: var(--bs-dark-text-emphasis);
    }
    
    .alert-white {
      --bs-alert-color: var(--bs-white-text-emphasis);
      --bs-alert-bg: var(--bs-white-bg-subtle);
      --bs-alert-border-color: var(--bs-white-border-subtle);
      --bs-alert-link-color: var(--bs-white-text-emphasis);
    }
    
    .alert-dark-blue {
      --bs-alert-color: var(--bs-dark-blue-text-emphasis);
      --bs-alert-bg: var(--bs-dark-blue-bg-subtle);
      --bs-alert-border-color: var(--bs-dark-blue-border-subtle);
      --bs-alert-link-color: var(--bs-dark-blue-text-emphasis);
    }
    
    @keyframes progress-bar-stripes {
      0% {
        background-position-x: 6px;
      }
    }
    
    .progress,
    .progress-stacked {
      --bs-progress-height: 6px;
      --bs-progress-font-size: 0.75rem;
      --bs-progress-bg: #e5e5e5;
      --bs-progress-border-radius: 0.125rem;
      --bs-progress-box-shadow: inset 0 1px 2px rgba(10, 10, 10, 0.075);
      --bs-progress-bar-color: #fff;
      --bs-progress-bar-bg: #e91e63;
      --bs-progress-bar-transition: width 0.6s ease;
      display: flex;
      height: var(--bs-progress-height);
      overflow: hidden;
      font-size: var(--bs-progress-font-size);
      background-color: var(--bs-progress-bg);
      border-radius: var(--bs-progress-border-radius);
    }
    
    .progress-bar {
      display: flex;
      flex-direction: column;
      justify-content: center;
      overflow: hidden;
      color: var(--bs-progress-bar-color);
      text-align: center;
      white-space: nowrap;
      background-color: var(--bs-progress-bar-bg);
      transition: var(--bs-progress-bar-transition);
    }
    
    @media (prefers-reduced-motion: reduce) {
      .progress-bar {
        transition: none;
      }
    }
    
    .progress-bar-striped {
      background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
      background-size: var(--bs-progress-height) var(--bs-progress-height);
    }
    
    .progress-stacked>.progress {
      overflow: visible;
    }
    
    .progress-stacked>.progress>.progress-bar {
      width: 100%;
    }
    
    .progress-bar-animated {
      animation: 1s linear infinite progress-bar-stripes;
    }
    
    @media (prefers-reduced-motion: reduce) {
      .progress-bar-animated {
        animation: none;
      }
    }
    
    .list-group {
      --bs-list-group-color: inherit;
      --bs-list-group-bg: #fff;
      --bs-list-group-border-color: rgba(10, 10, 10, 0.125);
      --bs-list-group-border-width: 1px;
      --bs-list-group-border-radius: 0.375rem;
      --bs-list-group-item-padding-x: 1rem;
      --bs-list-group-item-padding-y: 0.5rem;
      --bs-list-group-action-color: #404040;
      --bs-list-group-action-hover-color: #404040;
      --bs-list-group-action-hover-bg: #f5f5f5;
      --bs-list-group-action-active-color: #737373;
      --bs-list-group-action-active-bg: #e5e5e5;
      --bs-list-group-disabled-color: #525252;
      --bs-list-group-disabled-bg: #fff;
      --bs-list-group-active-color: #fff;
      --bs-list-group-active-bg: #e91e63;
      --bs-list-group-active-border-color: #e91e63;
      display: flex;
      flex-direction: column;
      padding-left: 0;
      margin-bottom: 0;
      border-radius: var(--bs-list-group-border-radius);
    }
    
    .list-group-numbered {
      list-style-type: none;
      counter-reset: section;
    }
    
    .list-group-numbered>.list-group-item::before {
      content: counters(section, ".") ". ";
      counter-increment: section;
    }
    
    .list-group-item-action {
      width: 100%;
      color: var(--bs-list-group-action-color);
      text-align: inherit;
    }
    
    .list-group-item-action:hover,
    .list-group-item-action:focus {
      z-index: 1;
      color: var(--bs-list-group-action-hover-color);
      text-decoration: none;
      background-color: var(--bs-list-group-action-hover-bg);
    }
    
    .list-group-item-action:active {
      color: var(--bs-list-group-action-active-color);
      background-color: var(--bs-list-group-action-active-bg);
    }
    
    .list-group-item {
      position: relative;
      display: block;
      padding: var(--bs-list-group-item-padding-y) var(--bs-list-group-item-padding-x);
      color: var(--bs-list-group-color);
      background-color: var(--bs-list-group-bg);
      border: var(--bs-list-group-border-width) solid var(--bs-list-group-border-color);
    }
    
    .list-group-item:first-child {
      border-top-left-radius: inherit;
      border-top-right-radius: inherit;
    }
    
    .list-group-item:last-child {
      border-bottom-right-radius: inherit;
      border-bottom-left-radius: inherit;
    }
    
    .list-group-item.disabled,
    .list-group-item:disabled {
      color: var(--bs-list-group-disabled-color);
      pointer-events: none;
      background-color: var(--bs-list-group-disabled-bg);
    }
    
    .list-group-item.active {
      z-index: 2;
      color: var(--bs-list-group-active-color);
      background-color: var(--bs-list-group-active-bg);
      border-color: var(--bs-list-group-active-border-color);
    }
    
    .list-group-item+.list-group-item {
      border-top-width: 0;
    }
    
    .list-group-item+.list-group-item.active {
      margin-top: calc(-1 * var(--bs-list-group-border-width));
      border-top-width: var(--bs-list-group-border-width);
    }
    
    .list-group-horizontal {
      flex-direction: row;
    }
    
    .list-group-horizontal>.list-group-item:first-child:not(:last-child) {
      border-bottom-left-radius: var(--bs-list-group-border-radius);
      border-top-right-radius: 0;
    }
    
    .list-group-horizontal>.list-group-item:last-child:not(:first-child) {
      border-top-right-radius: var(--bs-list-group-border-radius);
      border-bottom-left-radius: 0;
    }
    
    .list-group-horizontal>.list-group-item.active {
      margin-top: 0;
    }
    
    .list-group-horizontal>.list-group-item+.list-group-item {
      border-top-width: var(--bs-list-group-border-width);
      border-left-width: 0;
    }
    
    .list-group-horizontal>.list-group-item+.list-group-item.active {
      margin-left: calc(-1 * var(--bs-list-group-border-width));
      border-left-width: var(--bs-list-group-border-width);
    }
    
    @media (min-width: 576px) {
      .list-group-horizontal-sm {
        flex-direction: row;
      }
    
      .list-group-horizontal-sm>.list-group-item:first-child:not(:last-child) {
        border-bottom-left-radius: var(--bs-list-group-border-radius);
        border-top-right-radius: 0;
      }
    
      .list-group-horizontal-sm>.list-group-item:last-child:not(:first-child) {
        border-top-right-radius: var(--bs-list-group-border-radius);
        border-bottom-left-radius: 0;
      }
    
      .list-group-horizontal-sm>.list-group-item.active {
        margin-top: 0;
      }
    
      .list-group-horizontal-sm>.list-group-item+.list-group-item {
        border-top-width: var(--bs-list-group-border-width);
        border-left-width: 0;
      }
    
      .list-group-horizontal-sm>.list-group-item+.list-group-item.active {
        margin-left: calc(-1 * var(--bs-list-group-border-width));
        border-left-width: var(--bs-list-group-border-width);
      }
    }
    
    @media (min-width: 768px) {
      .list-group-horizontal-md {
        flex-direction: row;
      }
    
      .list-group-horizontal-md>.list-group-item:first-child:not(:last-child) {
        border-bottom-left-radius: var(--bs-list-group-border-radius);
        border-top-right-radius: 0;
      }
    
      .list-group-horizontal-md>.list-group-item:last-child:not(:first-child) {
        border-top-right-radius: var(--bs-list-group-border-radius);
        border-bottom-left-radius: 0;
      }
    
      .list-group-horizontal-md>.list-group-item.active {
        margin-top: 0;
      }
    
      .list-group-horizontal-md>.list-group-item+.list-group-item {
        border-top-width: var(--bs-list-group-border-width);
        border-left-width: 0;
      }
    
      .list-group-horizontal-md>.list-group-item+.list-group-item.active {
        margin-left: calc(-1 * var(--bs-list-group-border-width));
        border-left-width: var(--bs-list-group-border-width);
      }
    }
    
    @media (min-width: 992px) {
      .list-group-horizontal-lg {
        flex-direction: row;
      }
    
      .list-group-horizontal-lg>.list-group-item:first-child:not(:last-child) {
        border-bottom-left-radius: var(--bs-list-group-border-radius);
        border-top-right-radius: 0;
      }
    
      .list-group-horizontal-lg>.list-group-item:last-child:not(:first-child) {
        border-top-right-radius: var(--bs-list-group-border-radius);
        border-bottom-left-radius: 0;
      }
    
      .list-group-horizontal-lg>.list-group-item.active {
        margin-top: 0;
      }
    
      .list-group-horizontal-lg>.list-group-item+.list-group-item {
        border-top-width: var(--bs-list-group-border-width);
        border-left-width: 0;
      }
    
      .list-group-horizontal-lg>.list-group-item+.list-group-item.active {
        margin-left: calc(-1 * var(--bs-list-group-border-width));
        border-left-width: var(--bs-list-group-border-width);
      }
    }
    
    @media (min-width: 1200px) {
      .list-group-horizontal-xl {
        flex-direction: row;
      }
    
      .list-group-horizontal-xl>.list-group-item:first-child:not(:last-child) {
        border-bottom-left-radius: var(--bs-list-group-border-radius);
        border-top-right-radius: 0;
      }
    
      .list-group-horizontal-xl>.list-group-item:last-child:not(:first-child) {
        border-top-right-radius: var(--bs-list-group-border-radius);
        border-bottom-left-radius: 0;
      }
    
      .list-group-horizontal-xl>.list-group-item.active {
        margin-top: 0;
      }
    
      .list-group-horizontal-xl>.list-group-item+.list-group-item {
        border-top-width: var(--bs-list-group-border-width);
        border-left-width: 0;
      }
    
      .list-group-horizontal-xl>.list-group-item+.list-group-item.active {
        margin-left: calc(-1 * var(--bs-list-group-border-width));
        border-left-width: var(--bs-list-group-border-width);
      }
    }
    
    @media (min-width: 1400px) {
      .list-group-horizontal-xxl {
        flex-direction: row;
      }
    
      .list-group-horizontal-xxl>.list-group-item:first-child:not(:last-child) {
        border-bottom-left-radius: var(--bs-list-group-border-radius);
        border-top-right-radius: 0;
      }
    
      .list-group-horizontal-xxl>.list-group-item:last-child:not(:first-child) {
        border-top-right-radius: var(--bs-list-group-border-radius);
        border-bottom-left-radius: 0;
      }
    
      .list-group-horizontal-xxl>.list-group-item.active {
        margin-top: 0;
      }
    
      .list-group-horizontal-xxl>.list-group-item+.list-group-item {
        border-top-width: var(--bs-list-group-border-width);
        border-left-width: 0;
      }
    
      .list-group-horizontal-xxl>.list-group-item+.list-group-item.active {
        margin-left: calc(-1 * var(--bs-list-group-border-width));
        border-left-width: var(--bs-list-group-border-width);
      }
    }
    
    .list-group-flush {
      border-radius: 0;
    }
    
    .list-group-flush>.list-group-item {
      border-width: 0 0 var(--bs-list-group-border-width);
    }
    
    .list-group-flush>.list-group-item:last-child {
      border-bottom-width: 0;
    }
    
    .list-group-item-primary {
      --bs-list-group-color: var(--bs-primary-text-emphasis);
      --bs-list-group-bg: var(--bs-primary-bg-subtle);
      --bs-list-group-border-color: var(--bs-primary-border-subtle);
      --bs-list-group-action-hover-color: var(--bs-emphasis-color);
      --bs-list-group-action-hover-bg: var(--bs-primary-border-subtle);
      --bs-list-group-action-active-color: var(--bs-emphasis-color);
      --bs-list-group-action-active-bg: var(--bs-primary-border-subtle);
      --bs-list-group-active-color: var(--bs-primary-bg-subtle);
      --bs-list-group-active-bg: var(--bs-primary-text-emphasis);
      --bs-list-group-active-border-color: var(--bs-primary-text-emphasis);
    }
    
    .list-group-item-secondary {
      --bs-list-group-color: var(--bs-secondary-text-emphasis);
      --bs-list-group-bg: var(--bs-secondary-bg-subtle);
      --bs-list-group-border-color: var(--bs-secondary-border-subtle);
      --bs-list-group-action-hover-color: var(--bs-emphasis-color);
      --bs-list-group-action-hover-bg: var(--bs-secondary-border-subtle);
      --bs-list-group-action-active-color: var(--bs-emphasis-color);
      --bs-list-group-action-active-bg: var(--bs-secondary-border-subtle);
      --bs-list-group-active-color: var(--bs-secondary-bg-subtle);
      --bs-list-group-active-bg: var(--bs-secondary-text-emphasis);
      --bs-list-group-active-border-color: var(--bs-secondary-text-emphasis);
    }
    
    .list-group-item-success {
      --bs-list-group-color: var(--bs-success-text-emphasis);
      --bs-list-group-bg: var(--bs-success-bg-subtle);
      --bs-list-group-border-color: var(--bs-success-border-subtle);
      --bs-list-group-action-hover-color: var(--bs-emphasis-color);
      --bs-list-group-action-hover-bg: var(--bs-success-border-subtle);
      --bs-list-group-action-active-color: var(--bs-emphasis-color);
      --bs-list-group-action-active-bg: var(--bs-success-border-subtle);
      --bs-list-group-active-color: var(--bs-success-bg-subtle);
      --bs-list-group-active-bg: var(--bs-success-text-emphasis);
      --bs-list-group-active-border-color: var(--bs-success-text-emphasis);
    }
    
    .list-group-item-info {
      --bs-list-group-color: var(--bs-info-text-emphasis);
      --bs-list-group-bg: var(--bs-info-bg-subtle);
      --bs-list-group-border-color: var(--bs-info-border-subtle);
      --bs-list-group-action-hover-color: var(--bs-emphasis-color);
      --bs-list-group-action-hover-bg: var(--bs-info-border-subtle);
      --bs-list-group-action-active-color: var(--bs-emphasis-color);
      --bs-list-group-action-active-bg: var(--bs-info-border-subtle);
      --bs-list-group-active-color: var(--bs-info-bg-subtle);
      --bs-list-group-active-bg: var(--bs-info-text-emphasis);
      --bs-list-group-active-border-color: var(--bs-info-text-emphasis);
    }
    
    .list-group-item-warning {
      --bs-list-group-color: var(--bs-warning-text-emphasis);
      --bs-list-group-bg: var(--bs-warning-bg-subtle);
      --bs-list-group-border-color: var(--bs-warning-border-subtle);
      --bs-list-group-action-hover-color: var(--bs-emphasis-color);
      --bs-list-group-action-hover-bg: var(--bs-warning-border-subtle);
      --bs-list-group-action-active-color: var(--bs-emphasis-color);
      --bs-list-group-action-active-bg: var(--bs-warning-border-subtle);
      --bs-list-group-active-color: var(--bs-warning-bg-subtle);
      --bs-list-group-active-bg: var(--bs-warning-text-emphasis);
      --bs-list-group-active-border-color: var(--bs-warning-text-emphasis);
    }
    
    .list-group-item-danger {
      --bs-list-group-color: var(--bs-danger-text-emphasis);
      --bs-list-group-bg: var(--bs-danger-bg-subtle);
      --bs-list-group-border-color: var(--bs-danger-border-subtle);
      --bs-list-group-action-hover-color: var(--bs-emphasis-color);
      --bs-list-group-action-hover-bg: var(--bs-danger-border-subtle);
      --bs-list-group-action-active-color: var(--bs-emphasis-color);
      --bs-list-group-action-active-bg: var(--bs-danger-border-subtle);
      --bs-list-group-active-color: var(--bs-danger-bg-subtle);
      --bs-list-group-active-bg: var(--bs-danger-text-emphasis);
      --bs-list-group-active-border-color: var(--bs-danger-text-emphasis);
    }
    
    .list-group-item-light {
      --bs-list-group-color: var(--bs-light-text-emphasis);
      --bs-list-group-bg: var(--bs-light-bg-subtle);
      --bs-list-group-border-color: var(--bs-light-border-subtle);
      --bs-list-group-action-hover-color: var(--bs-emphasis-color);
      --bs-list-group-action-hover-bg: var(--bs-light-border-subtle);
      --bs-list-group-action-active-color: var(--bs-emphasis-color);
      --bs-list-group-action-active-bg: var(--bs-light-border-subtle);
      --bs-list-group-active-color: var(--bs-light-bg-subtle);
      --bs-list-group-active-bg: var(--bs-light-text-emphasis);
      --bs-list-group-active-border-color: var(--bs-light-text-emphasis);
    }
    
    .list-group-item-dark {
      --bs-list-group-color: var(--bs-dark-text-emphasis);
      --bs-list-group-bg: var(--bs-dark-bg-subtle);
      --bs-list-group-border-color: var(--bs-dark-border-subtle);
      --bs-list-group-action-hover-color: var(--bs-emphasis-color);
      --bs-list-group-action-hover-bg: var(--bs-dark-border-subtle);
      --bs-list-group-action-active-color: var(--bs-emphasis-color);
      --bs-list-group-action-active-bg: var(--bs-dark-border-subtle);
      --bs-list-group-active-color: var(--bs-dark-bg-subtle);
      --bs-list-group-active-bg: var(--bs-dark-text-emphasis);
      --bs-list-group-active-border-color: var(--bs-dark-text-emphasis);
    }
    
    .list-group-item-white {
      --bs-list-group-color: var(--bs-white-text-emphasis);
      --bs-list-group-bg: var(--bs-white-bg-subtle);
      --bs-list-group-border-color: var(--bs-white-border-subtle);
      --bs-list-group-action-hover-color: var(--bs-emphasis-color);
      --bs-list-group-action-hover-bg: var(--bs-white-border-subtle);
      --bs-list-group-action-active-color: var(--bs-emphasis-color);
      --bs-list-group-action-active-bg: var(--bs-white-border-subtle);
      --bs-list-group-active-color: var(--bs-white-bg-subtle);
      --bs-list-group-active-bg: var(--bs-white-text-emphasis);
      --bs-list-group-active-border-color: var(--bs-white-text-emphasis);
    }
    
    .list-group-item-dark-blue {
      --bs-list-group-color: var(--bs-dark-blue-text-emphasis);
      --bs-list-group-bg: var(--bs-dark-blue-bg-subtle);
      --bs-list-group-border-color: var(--bs-dark-blue-border-subtle);
      --bs-list-group-action-hover-color: var(--bs-emphasis-color);
      --bs-list-group-action-hover-bg: var(--bs-dark-blue-border-subtle);
      --bs-list-group-action-active-color: var(--bs-emphasis-color);
      --bs-list-group-action-active-bg: var(--bs-dark-blue-border-subtle);
      --bs-list-group-active-color: var(--bs-dark-blue-bg-subtle);
      --bs-list-group-active-bg: var(--bs-dark-blue-text-emphasis);
      --bs-list-group-active-border-color: var(--bs-dark-blue-text-emphasis);
    }
    
    .btn-close {
      --bs-btn-close-color: #fff;
      --bs-btn-close-bg: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 16 16'%3e%3cpath d='M.293.293a1 1 0 011.414 0L8 6.586 14.293.293a1 1 0 111.414 1.414L9.414 8l6.293 6.293a1 1 0 01-1.414 1.414L8 9.414l-6.293 6.293a1 1 0 01-1.414-1.414L6.586 8 .293 1.707a1 1 0 010-1.414z'/%3e%3c/svg%3e");
      --bs-btn-close-opacity: 0.5;
      --bs-btn-close-hover-opacity: 0.75;
      --bs-btn-close-focus-shadow: 0 0 0 0.2rem rgba(233, 30, 99, 0.25);
      --bs-btn-close-focus-opacity: 1;
      --bs-btn-close-disabled-opacity: 0.25;
      --bs-btn-close-white-filter: invert(1) grayscale(100%) brightness(200%);
      box-sizing: content-box;
      width: 1em;
      height: 1em;
      padding: 0.25em 0.25em;
      color: var(--bs-btn-close-color);
      background: transparent var(--bs-btn-close-bg) center/1em auto no-repeat;
      border: 0;
      border-radius: 0.375rem;
      opacity: var(--bs-btn-close-opacity);
    }
    
    .btn-close:hover {
      color: var(--bs-btn-close-color);
      text-decoration: none;
      opacity: var(--bs-btn-close-hover-opacity);
    }
    
    .btn-close:focus {
      outline: 0;
      box-shadow: var(--bs-btn-close-focus-shadow);
      opacity: var(--bs-btn-close-focus-opacity);
    }
    
    .btn-close:disabled,
    .btn-close.disabled {
      pointer-events: none;
      user-select: none;
      opacity: var(--bs-btn-close-disabled-opacity);
    }
    
    .btn-close-white {
      filter: var(--bs-btn-close-white-filter);
    }
    
    [data-bs-theme=dark] .btn-close {
      filter: var(--bs-btn-close-white-filter);
    }
    
    .toast {
      --bs-toast-zindex: 1090;
      --bs-toast-padding-x: 0.75rem;
      --bs-toast-padding-y: 0.75rem;
      --bs-toast-spacing: 1.5rem;
      --bs-toast-max-width: 350px;
      --bs-toast-font-size: 0.875rem;
      --bs-toast-color: ;
      --bs-toast-bg: rgba(255, 255, 255, 0.85);
      --bs-toast-border-width: 0;
      --bs-toast-border-color: transparent;
      --bs-toast-border-radius: 0.375rem;
      --bs-toast-box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
      --bs-toast-header-color: #262626;
      --bs-toast-header-bg: rgba(255, 255, 255, 0.85);
      --bs-toast-header-border-color: rgba(0, 0, 0, 0.05);
      width: var(--bs-toast-max-width);
      max-width: 100%;
      font-size: var(--bs-toast-font-size);
      color: var(--bs-toast-color);
      pointer-events: auto;
      background-color: var(--bs-toast-bg);
      background-clip: padding-box;
      border: var(--bs-toast-border-width) solid var(--bs-toast-border-color);
      box-shadow: var(--bs-toast-box-shadow);
      border-radius: var(--bs-toast-border-radius);
    }
    
    .toast.showing {
      opacity: 0;
    }
    
    .toast:not(.show) {
      display: none;
    }
    
    .toast-container {
      --bs-toast-zindex: 1090;
      position: absolute;
      z-index: var(--bs-toast-zindex);
      width: max-content;
      max-width: 100%;
      pointer-events: none;
    }
    
    .toast-container> :not(:last-child) {
      margin-bottom: var(--bs-toast-spacing);
    }
    
    .toast-header {
      display: flex;
      align-items: center;
      padding: var(--bs-toast-padding-y) var(--bs-toast-padding-x);
      color: var(--bs-toast-header-color);
      background-color: var(--bs-toast-header-bg);
      background-clip: padding-box;
      border-bottom: var(--bs-toast-border-width) solid var(--bs-toast-header-border-color);
      border-top-left-radius: calc(var(--bs-toast-border-radius) - var(--bs-toast-border-width));
      border-top-right-radius: calc(var(--bs-toast-border-radius) - var(--bs-toast-border-width));
    }
    
    .toast-header .btn-close {
      margin-right: calc(-0.5 * var(--bs-toast-padding-x));
      margin-left: var(--bs-toast-padding-x);
    }
    
    .toast-body {
      padding: var(--bs-toast-padding-x);
      word-wrap: break-word;
    }
    
    .modal {
      --bs-modal-zindex: 1050;
      --bs-modal-width: 500px;
      --bs-modal-padding: 1rem;
      --bs-modal-margin: 0.5rem;
      --bs-modal-color: ;
      --bs-modal-bg: #fff;
      --bs-modal-border-color: rgba(10, 10, 10, 0.2);
      --bs-modal-border-width: 1px;
      --bs-modal-border-radius: 0.5rem;
      --bs-modal-box-shadow: 0 0.3125rem 0.625rem 0 rgba(0, 0, 0, 0.12);
      --bs-modal-inner-border-radius: calc(0.5rem - 1px);
      --bs-modal-header-padding-x: 1rem;
      --bs-modal-header-padding-y: 1rem;
      --bs-modal-header-padding: 1rem 1rem;
      --bs-modal-header-border-color: #d4d4d4;
      --bs-modal-header-border-width: 1px;
      --bs-modal-title-line-height: 1.5;
      --bs-modal-footer-gap: 0.5rem;
      --bs-modal-footer-bg: ;
      --bs-modal-footer-border-color: #d4d4d4;
      --bs-modal-footer-border-width: 1px;
      position: fixed;
      top: 0;
      left: 0;
      z-index: var(--bs-modal-zindex);
      display: none;
      width: 100%;
      height: 100%;
      overflow-x: hidden;
      overflow-y: auto;
      outline: 0;
    }
    
    .modal-dialog {
      position: relative;
      width: auto;
      margin: var(--bs-modal-margin);
      pointer-events: none;
    }
    
    .modal.fade .modal-dialog {
      transition: transform 0.3s ease-out;
      transform: translate(0, -50px);
    }
    
    @media (prefers-reduced-motion: reduce) {
      .modal.fade .modal-dialog {
        transition: none;
      }
    }
    
    .modal.show .modal-dialog {
      transform: none;
    }
    
    .modal.modal-static .modal-dialog {
      transform: scale(1.02);
    }
    
    .modal-dialog-scrollable {
      height: calc(100% - var(--bs-modal-margin) * 2);
    }
    
    .modal-dialog-scrollable .modal-content {
      max-height: 100%;
      overflow: hidden;
    }
    
    .modal-dialog-scrollable .modal-body {
      overflow-y: auto;
    }
    
    .modal-dialog-centered {
      display: flex;
      align-items: center;
      min-height: calc(100% - var(--bs-modal-margin) * 2);
    }
    
    .modal-content {
      position: relative;
      display: flex;
      flex-direction: column;
      width: 100%;
      color: var(--bs-modal-color);
      pointer-events: auto;
      background-color: var(--bs-modal-bg);
      background-clip: padding-box;
      border: var(--bs-modal-border-width) solid var(--bs-modal-border-color);
      border-radius: var(--bs-modal-border-radius);
      outline: 0;
    }
    
    .modal-backdrop {
      --bs-backdrop-zindex: 1040;
      --bs-backdrop-bg: #0a0a0a;
      --bs-backdrop-opacity: 0.5;
      position: fixed;
      top: 0;
      left: 0;
      z-index: var(--bs-backdrop-zindex);
      width: 100vw;
      height: 100vh;
      background-color: var(--bs-backdrop-bg);
    }
    
    .modal-backdrop.fade {
      opacity: 0;
    }
    
    .modal-backdrop.show {
      opacity: var(--bs-backdrop-opacity);
    }
    
    .modal-header {
      display: flex;
      flex-shrink: 0;
      align-items: center;
      padding: var(--bs-modal-header-padding);
      border-bottom: var(--bs-modal-header-border-width) solid var(--bs-modal-header-border-color);
      border-top-left-radius: var(--bs-modal-inner-border-radius);
      border-top-right-radius: var(--bs-modal-inner-border-radius);
    }
    
    .modal-header .btn-close {
      padding: calc(var(--bs-modal-header-padding-y) * 0.5) calc(var(--bs-modal-header-padding-x) * 0.5);
      margin: calc(-0.5 * var(--bs-modal-header-padding-y)) calc(-0.5 * var(--bs-modal-header-padding-x)) calc(-0.5 * var(--bs-modal-header-padding-y)) auto;
    }
    
    .modal-title {
      margin-bottom: 0;
      line-height: var(--bs-modal-title-line-height);
    }
    
    .modal-body {
      position: relative;
      flex: 1 1 auto;
      padding: var(--bs-modal-padding);
    }
    
    .modal-footer {
      display: flex;
      flex-shrink: 0;
      flex-wrap: wrap;
      align-items: center;
      justify-content: flex-end;
      padding: calc(var(--bs-modal-padding) - var(--bs-modal-footer-gap) * 0.5);
      background-color: var(--bs-modal-footer-bg);
      border-top: var(--bs-modal-footer-border-width) solid var(--bs-modal-footer-border-color);
      border-bottom-right-radius: var(--bs-modal-inner-border-radius);
      border-bottom-left-radius: var(--bs-modal-inner-border-radius);
    }
    
    .modal-footer>* {
      margin: calc(var(--bs-modal-footer-gap) * 0.5);
    }
    
    @media (min-width: 576px) {
      .modal {
        --bs-modal-margin: 1.75rem;
        --bs-modal-box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
      }
    
      .modal-dialog {
        max-width: var(--bs-modal-width);
        margin-right: auto;
        margin-left: auto;
      }
    
      .modal-sm {
        --bs-modal-width: 300px;
      }
    }
    
    @media (min-width: 992px) {
    
      .modal-lg,
      .modal-xl {
        --bs-modal-width: 800px;
      }
    }
    
    @media (min-width: 1200px) {
      .modal-xl {
        --bs-modal-width: 1140px;
      }
    }
    
    .modal-fullscreen {
      width: 100vw;
      max-width: none;
      height: 100%;
      margin: 0;
    }
    
    .modal-fullscreen .modal-content {
      height: 100%;
      border: 0;
      border-radius: 0;
    }
    
    .modal-fullscreen .modal-header,
    .modal-fullscreen .modal-footer {
      border-radius: 0;
    }
    
    .modal-fullscreen .modal-body {
      overflow-y: auto;
    }
    
    @media (max-width: 575.98px) {
      .modal-fullscreen-sm-down {
        width: 100vw;
        max-width: none;
        height: 100%;
        margin: 0;
      }
    
      .modal-fullscreen-sm-down .modal-content {
        height: 100%;
        border: 0;
        border-radius: 0;
      }
    
      .modal-fullscreen-sm-down .modal-header,
      .modal-fullscreen-sm-down .modal-footer {
        border-radius: 0;
      }
    
      .modal-fullscreen-sm-down .modal-body {
        overflow-y: auto;
      }
    }
    
    @media (max-width: 767.98px) {
      .modal-fullscreen-md-down {
        width: 100vw;
        max-width: none;
        height: 100%;
        margin: 0;
      }
    
      .modal-fullscreen-md-down .modal-content {
        height: 100%;
        border: 0;
        border-radius: 0;
      }
    
      .modal-fullscreen-md-down .modal-header,
      .modal-fullscreen-md-down .modal-footer {
        border-radius: 0;
      }
    
      .modal-fullscreen-md-down .modal-body {
        overflow-y: auto;
      }
    }
    
    @media (max-width: 991.98px) {
      .modal-fullscreen-lg-down {
        width: 100vw;
        max-width: none;
        height: 100%;
        margin: 0;
      }
    
      .modal-fullscreen-lg-down .modal-content {
        height: 100%;
        border: 0;
        border-radius: 0;
      }
    
      .modal-fullscreen-lg-down .modal-header,
      .modal-fullscreen-lg-down .modal-footer {
        border-radius: 0;
      }
    
      .modal-fullscreen-lg-down .modal-body {
        overflow-y: auto;
      }
    }
    
    @media (max-width: 1199.98px) {
      .modal-fullscreen-xl-down {
        width: 100vw;
        max-width: none;
        height: 100%;
        margin: 0;
      }
    
      .modal-fullscreen-xl-down .modal-content {
        height: 100%;
        border: 0;
        border-radius: 0;
      }
    
      .modal-fullscreen-xl-down .modal-header,
      .modal-fullscreen-xl-down .modal-footer {
        border-radius: 0;
      }
    
      .modal-fullscreen-xl-down .modal-body {
        overflow-y: auto;
      }
    }
    
    @media (max-width: 1399.98px) {
      .modal-fullscreen-xxl-down {
        width: 100vw;
        max-width: none;
        height: 100%;
        margin: 0;
      }
    
      .modal-fullscreen-xxl-down .modal-content {
        height: 100%;
        border: 0;
        border-radius: 0;
      }
    
      .modal-fullscreen-xxl-down .modal-header,
      .modal-fullscreen-xxl-down .modal-footer {
        border-radius: 0;
      }
    
      .modal-fullscreen-xxl-down .modal-body {
        overflow-y: auto;
      }
    }
    
    .tooltip {
      --bs-tooltip-zindex: 1070;
      --bs-tooltip-max-width: 200px;
      --bs-tooltip-padding-x: 0.5rem;
      --bs-tooltip-padding-y: 0.25rem;
      --bs-tooltip-margin: 0;
      --bs-tooltip-font-size: 0.875rem;
      --bs-tooltip-color: #fff;
      --bs-tooltip-bg: #0a0a0a;
      --bs-tooltip-border-radius: 0.375rem;
      --bs-tooltip-opacity: 0.9;
      --bs-tooltip-arrow-width: 0.8rem;
      --bs-tooltip-arrow-height: 0.4rem;
      z-index: var(--bs-tooltip-zindex);
      display: block;
      margin: var(--bs-tooltip-margin);
      font-family: var(--bs-font-sans-serif);
      font-style: normal;
      font-weight: 400;
      line-height: 1.5;
      text-align: left;
      text-align: start;
      text-decoration: none;
      text-shadow: none;
      text-transform: none;
      letter-spacing: normal;
      word-break: normal;
      white-space: normal;
      word-spacing: normal;
      line-break: auto;
      font-size: var(--bs-tooltip-font-size);
      word-wrap: break-word;
      opacity: 0;
    }
    
    .tooltip.show {
      opacity: var(--bs-tooltip-opacity);
    }
    
    .tooltip .tooltip-arrow {
      display: block;
      width: var(--bs-tooltip-arrow-width);
      height: var(--bs-tooltip-arrow-height);
    }
    
    .tooltip .tooltip-arrow::before {
      position: absolute;
      content: "";
      border-color: transparent;
      border-style: solid;
    }
    
    .bs-tooltip-top .tooltip-arrow,
    .bs-tooltip-auto[data-popper-placement^=top] .tooltip-arrow {
      bottom: calc(-1 * var(--bs-tooltip-arrow-height));
    }
    
    .bs-tooltip-top .tooltip-arrow::before,
    .bs-tooltip-auto[data-popper-placement^=top] .tooltip-arrow::before {
      top: -1px;
      border-width: var(--bs-tooltip-arrow-height) calc(var(--bs-tooltip-arrow-width) * 0.5) 0;
      border-top-color: var(--bs-tooltip-bg);
    }
    
    /* rtl:begin:ignore */
    .bs-tooltip-end .tooltip-arrow,
    .bs-tooltip-auto[data-popper-placement^=right] .tooltip-arrow {
      left: calc(-1 * var(--bs-tooltip-arrow-height));
      width: var(--bs-tooltip-arrow-height);
      height: var(--bs-tooltip-arrow-width);
    }
    
    .bs-tooltip-end .tooltip-arrow::before,
    .bs-tooltip-auto[data-popper-placement^=right] .tooltip-arrow::before {
      right: -1px;
      border-width: calc(var(--bs-tooltip-arrow-width) * 0.5) var(--bs-tooltip-arrow-height) calc(var(--bs-tooltip-arrow-width) * 0.5) 0;
      border-right-color: var(--bs-tooltip-bg);
    }
    
    /* rtl:end:ignore */
    .bs-tooltip-bottom .tooltip-arrow,
    .bs-tooltip-auto[data-popper-placement^=bottom] .tooltip-arrow {
      top: calc(-1 * var(--bs-tooltip-arrow-height));
    }
    
    .bs-tooltip-bottom .tooltip-arrow::before,
    .bs-tooltip-auto[data-popper-placement^=bottom] .tooltip-arrow::before {
      bottom: -1px;
      border-width: 0 calc(var(--bs-tooltip-arrow-width) * 0.5) var(--bs-tooltip-arrow-height);
      border-bottom-color: var(--bs-tooltip-bg);
    }
    
    /* rtl:begin:ignore */
    .bs-tooltip-start .tooltip-arrow,
    .bs-tooltip-auto[data-popper-placement^=left] .tooltip-arrow {
      right: calc(-1 * var(--bs-tooltip-arrow-height));
      width: var(--bs-tooltip-arrow-height);
      height: var(--bs-tooltip-arrow-width);
    }
    
    .bs-tooltip-start .tooltip-arrow::before,
    .bs-tooltip-auto[data-popper-placement^=left] .tooltip-arrow::before {
      left: -1px;
      border-width: calc(var(--bs-tooltip-arrow-width) * 0.5) 0 calc(var(--bs-tooltip-arrow-width) * 0.5) var(--bs-tooltip-arrow-height);
      border-left-color: var(--bs-tooltip-bg);
    }
    
    /* rtl:end:ignore */
    .tooltip-inner {
      max-width: var(--bs-tooltip-max-width);
      padding: var(--bs-tooltip-padding-y) var(--bs-tooltip-padding-x);
      color: var(--bs-tooltip-color);
      text-align: center;
      background-color: var(--bs-tooltip-bg);
      border-radius: var(--bs-tooltip-border-radius);
    }
    
    .popover {
      --bs-popover-zindex: 1060;
      --bs-popover-max-width: 276px;
      --bs-popover-font-size: 0.75rem;
      --bs-popover-bg: #fff;
      --bs-popover-border-width: 0px;
      --bs-popover-border-color: rgba(10, 10, 10, 0.2);
      --bs-popover-border-radius: 0.5rem;
      --bs-popover-inner-border-radius: calc(0.5rem - 0px);
      --bs-popover-box-shadow: 0 0.3125rem 0.625rem 0 rgba(0, 0, 0, 0.12);
      --bs-popover-header-padding-x: 1rem;
      --bs-popover-header-padding-y: 0.5rem;
      --bs-popover-header-font-size: 1rem;
      --bs-popover-header-color: #262626;
      --bs-popover-header-bg: #e5e5e5;
      --bs-popover-body-padding-x: 1rem;
      --bs-popover-body-padding-y: 1rem;
      --bs-popover-body-color: #737373;
      --bs-popover-arrow-width: 1rem;
      --bs-popover-arrow-height: 0.5rem;
      --bs-popover-arrow-border: var(--bs-popover-border-color);
      z-index: var(--bs-popover-zindex);
      display: block;
      max-width: var(--bs-popover-max-width);
      font-family: var(--bs-font-sans-serif);
      font-style: normal;
      font-weight: 400;
      line-height: 1.5;
      text-align: left;
      text-align: start;
      text-decoration: none;
      text-shadow: none;
      text-transform: none;
      letter-spacing: normal;
      word-break: normal;
      white-space: normal;
      word-spacing: normal;
      line-break: auto;
      font-size: var(--bs-popover-font-size);
      word-wrap: break-word;
      background-color: var(--bs-popover-bg);
      background-clip: padding-box;
      border: var(--bs-popover-border-width) solid var(--bs-popover-border-color);
      border-radius: var(--bs-popover-border-radius);
    }
    
    .popover .popover-arrow {
      display: block;
      width: var(--bs-popover-arrow-width);
      height: var(--bs-popover-arrow-height);
    }
    
    .popover .popover-arrow::before,
    .popover .popover-arrow::after {
      position: absolute;
      display: block;
      content: "";
      border-color: transparent;
      border-style: solid;
      border-width: 0;
    }
    
    .bs-popover-top>.popover-arrow,
    .bs-popover-auto[data-popper-placement^=top]>.popover-arrow {
      bottom: calc(-1 * (var(--bs-popover-arrow-height)) - var(--bs-popover-border-width));
    }
    
    .bs-popover-top>.popover-arrow::before,
    .bs-popover-auto[data-popper-placement^=top]>.popover-arrow::before,
    .bs-popover-top>.popover-arrow::after,
    .bs-popover-auto[data-popper-placement^=top]>.popover-arrow::after {
      border-width: var(--bs-popover-arrow-height) calc(var(--bs-popover-arrow-width) * 0.5) 0;
    }
    
    .bs-popover-top>.popover-arrow::before,
    .bs-popover-auto[data-popper-placement^=top]>.popover-arrow::before {
      bottom: 0;
      border-top-color: var(--bs-popover-arrow-border);
    }
    
    .bs-popover-top>.popover-arrow::after,
    .bs-popover-auto[data-popper-placement^=top]>.popover-arrow::after {
      bottom: var(--bs-popover-border-width);
      border-top-color: var(--bs-popover-bg);
    }
    
    /* rtl:begin:ignore */
    .bs-popover-end>.popover-arrow,
    .bs-popover-auto[data-popper-placement^=right]>.popover-arrow {
      left: calc(-1 * (var(--bs-popover-arrow-height)) - var(--bs-popover-border-width));
      width: var(--bs-popover-arrow-height);
      height: var(--bs-popover-arrow-width);
    }
    
    .bs-popover-end>.popover-arrow::before,
    .bs-popover-auto[data-popper-placement^=right]>.popover-arrow::before,
    .bs-popover-end>.popover-arrow::after,
    .bs-popover-auto[data-popper-placement^=right]>.popover-arrow::after {
      border-width: calc(var(--bs-popover-arrow-width) * 0.5) var(--bs-popover-arrow-height) calc(var(--bs-popover-arrow-width) * 0.5) 0;
    }
    
    .bs-popover-end>.popover-arrow::before,
    .bs-popover-auto[data-popper-placement^=right]>.popover-arrow::before {
      left: 0;
      border-right-color: var(--bs-popover-arrow-border);
    }
    
    .bs-popover-end>.popover-arrow::after,
    .bs-popover-auto[data-popper-placement^=right]>.popover-arrow::after {
      left: var(--bs-popover-border-width);
      border-right-color: var(--bs-popover-bg);
    }
    
    /* rtl:end:ignore */
    .bs-popover-bottom>.popover-arrow,
    .bs-popover-auto[data-popper-placement^=bottom]>.popover-arrow {
      top: calc(-1 * (var(--bs-popover-arrow-height)) - var(--bs-popover-border-width));
    }
    
    .bs-popover-bottom>.popover-arrow::before,
    .bs-popover-auto[data-popper-placement^=bottom]>.popover-arrow::before,
    .bs-popover-bottom>.popover-arrow::after,
    .bs-popover-auto[data-popper-placement^=bottom]>.popover-arrow::after {
      border-width: 0 calc(var(--bs-popover-arrow-width) * 0.5) var(--bs-popover-arrow-height);
    }
    
    .bs-popover-bottom>.popover-arrow::before,
    .bs-popover-auto[data-popper-placement^=bottom]>.popover-arrow::before {
      top: 0;
      border-bottom-color: var(--bs-popover-arrow-border);
    }
    
    .bs-popover-bottom>.popover-arrow::after,
    .bs-popover-auto[data-popper-placement^=bottom]>.popover-arrow::after {
      top: var(--bs-popover-border-width);
      border-bottom-color: var(--bs-popover-bg);
    }
    
    .bs-popover-bottom .popover-header::before,
    .bs-popover-auto[data-popper-placement^=bottom] .popover-header::before {
      position: absolute;
      top: 0;
      left: 50%;
      display: block;
      width: var(--bs-popover-arrow-width);
      margin-left: calc(-0.5 * var(--bs-popover-arrow-width));
      content: "";
      border-bottom: var(--bs-popover-border-width) solid var(--bs-popover-header-bg);
    }
    
    /* rtl:begin:ignore */
    .bs-popover-start>.popover-arrow,
    .bs-popover-auto[data-popper-placement^=left]>.popover-arrow {
      right: calc(-1 * (var(--bs-popover-arrow-height)) - var(--bs-popover-border-width));
      width: var(--bs-popover-arrow-height);
      height: var(--bs-popover-arrow-width);
    }
    
    .bs-popover-start>.popover-arrow::before,
    .bs-popover-auto[data-popper-placement^=left]>.popover-arrow::before,
    .bs-popover-start>.popover-arrow::after,
    .bs-popover-auto[data-popper-placement^=left]>.popover-arrow::after {
      border-width: calc(var(--bs-popover-arrow-width) * 0.5) 0 calc(var(--bs-popover-arrow-width) * 0.5) var(--bs-popover-arrow-height);
    }
    
    .bs-popover-start>.popover-arrow::before,
    .bs-popover-auto[data-popper-placement^=left]>.popover-arrow::before {
      right: 0;
      border-left-color: var(--bs-popover-arrow-border);
    }
    
    .bs-popover-start>.popover-arrow::after,
    .bs-popover-auto[data-popper-placement^=left]>.popover-arrow::after {
      right: var(--bs-popover-border-width);
      border-left-color: var(--bs-popover-bg);
    }
    
    /* rtl:end:ignore */
    .popover-header {
      padding: var(--bs-popover-header-padding-y) var(--bs-popover-header-padding-x);
      margin-bottom: 0;
      font-size: var(--bs-popover-header-font-size);
      color: var(--bs-popover-header-color);
      background-color: var(--bs-popover-header-bg);
      border-bottom: var(--bs-popover-border-width) solid var(--bs-popover-border-color);
      border-top-left-radius: var(--bs-popover-inner-border-radius);
      border-top-right-radius: var(--bs-popover-inner-border-radius);
    }
    
    .popover-header:empty {
      display: none;
    }
    
    .popover-body {
      padding: var(--bs-popover-body-padding-y) var(--bs-popover-body-padding-x);
      color: var(--bs-popover-body-color);
    }
    
    .carousel {
      position: relative;
    }
    
    .carousel.pointer-event {
      touch-action: pan-y;
    }
    
    .carousel-inner {
      position: relative;
      width: 100%;
      overflow: hidden;
    }
    
    .carousel-inner::after {
      display: block;
      clear: both;
      content: "";
    }
    
    .carousel-item {
      position: relative;
      display: none;
      float: left;
      width: 100%;
      margin-right: -100%;
      backface-visibility: hidden;
      transition: transform 0.6s ease-in-out;
    }
    
    @media (prefers-reduced-motion: reduce) {
      .carousel-item {
        transition: none;
      }
    }
    
    .carousel-item.active,
    .carousel-item-next,
    .carousel-item-prev {
      display: block;
    }
    
    .carousel-item-next:not(.carousel-item-start),
    .active.carousel-item-end {
      transform: translateX(100%);
    }
    
    .carousel-item-prev:not(.carousel-item-end),
    .active.carousel-item-start {
      transform: translateX(-100%);
    }
    
    .carousel-fade .carousel-item {
      opacity: 0;
      transition-property: opacity;
      transform: none;
    }
    
    .carousel-fade .carousel-item.active,
    .carousel-fade .carousel-item-next.carousel-item-start,
    .carousel-fade .carousel-item-prev.carousel-item-end {
      z-index: 1;
      opacity: 1;
    }
    
    .carousel-fade .active.carousel-item-start,
    .carousel-fade .active.carousel-item-end {
      z-index: 0;
      opacity: 0;
      transition: opacity 0s 0.6s;
    }
    
    @media (prefers-reduced-motion: reduce) {
    
      .carousel-fade .active.carousel-item-start,
      .carousel-fade .active.carousel-item-end {
        transition: none;
      }
    }
    
    .carousel-control-prev,
    .carousel-control-next {
      position: absolute;
      top: 0;
      bottom: 0;
      z-index: 1;
      display: flex;
      align-items: center;
      justify-content: center;
      width: 15%;
      padding: 0;
      color: #fff;
      text-align: center;
      background: none;
      border: 0;
      opacity: 0.5;
      transition: opacity 0.15s ease;
    }
    
    @media (prefers-reduced-motion: reduce) {
    
      .carousel-control-prev,
      .carousel-control-next {
        transition: none;
      }
    }
    
    .carousel-control-prev:hover,
    .carousel-control-prev:focus,
    .carousel-control-next:hover,
    .carousel-control-next:focus {
      color: #fff;
      text-decoration: none;
      outline: 0;
      opacity: 0.9;
    }
    
    .carousel-control-prev {
      left: 0;
    }
    
    .carousel-control-next {
      right: 0;
    }
    
    .carousel-control-prev-icon,
    .carousel-control-next-icon {
      display: inline-block;
      width: 2rem;
      height: 2rem;
      background-repeat: no-repeat;
      background-position: 50%;
      background-size: 100% 100%;
    }
    
    .carousel-control-prev-icon {
      background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 16 16'%3e%3cpath d='M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z'/%3e%3c/svg%3e")
        /*rtl:url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 16 16'%3e%3cpath d='M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e")*/
      ;
    }
    
    .carousel-control-next-icon {
      background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 16 16'%3e%3cpath d='M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e")
        /*rtl:url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 16 16'%3e%3cpath d='M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z'/%3e%3c/svg%3e")*/
      ;
    }
    
    .carousel-indicators {
      position: absolute;
      right: 0;
      bottom: 0;
      left: 0;
      z-index: 2;
      display: flex;
      justify-content: center;
      padding: 0;
      margin-right: 15%;
      margin-bottom: 1rem;
      margin-left: 15%;
    }
    
    .carousel-indicators [data-bs-target] {
      box-sizing: content-box;
      flex: 0 1 auto;
      width: 30px;
      height: 3px;
      padding: 0;
      margin-right: 3px;
      margin-left: 3px;
      text-indent: -999px;
      cursor: pointer;
      background-color: #fff;
      background-clip: padding-box;
      border: 0;
      border-top: 10px solid transparent;
      border-bottom: 10px solid transparent;
      opacity: 0.5;
      transition: opacity 0.6s ease;
    }
    
    @media (prefers-reduced-motion: reduce) {
      .carousel-indicators [data-bs-target] {
        transition: none;
      }
    }
    
    .carousel-indicators .active {
      opacity: 1;
    }
    
    .carousel-caption {
      position: absolute;
      right: 15%;
      bottom: 1.25rem;
      left: 15%;
      padding-top: 1.25rem;
      padding-bottom: 1.25rem;
      color: #fff;
      text-align: center;
    }
    
    .carousel-dark .carousel-control-prev-icon,
    .carousel-dark .carousel-control-next-icon {
      filter: invert(1) grayscale(100);
    }
    
    .carousel-dark .carousel-indicators [data-bs-target] {
      background-color: #0a0a0a;
    }
    
    .carousel-dark .carousel-caption {
      color: #0a0a0a;
    }
    
    [data-bs-theme=dark] .carousel .carousel-control-prev-icon,
    [data-bs-theme=dark] .carousel .carousel-control-next-icon,
    [data-bs-theme=dark].carousel .carousel-control-prev-icon,
    [data-bs-theme=dark].carousel .carousel-control-next-icon {
      filter: invert(1) grayscale(100);
    }
    
    [data-bs-theme=dark] .carousel .carousel-indicators [data-bs-target],
    [data-bs-theme=dark].carousel .carousel-indicators [data-bs-target] {
      background-color: #0a0a0a;
    }
    
    [data-bs-theme=dark] .carousel .carousel-caption,
    [data-bs-theme=dark].carousel .carousel-caption {
      color: #0a0a0a;
    }
    
    .spinner-grow,
    .spinner-border {
      display: inline-block;
      width: var(--bs-spinner-width);
      height: var(--bs-spinner-height);
      vertical-align: var(--bs-spinner-vertical-align);
      border-radius: 50%;
      animation: var(--bs-spinner-animation-speed) linear infinite var(--bs-spinner-animation-name);
    }
    
    @keyframes spinner-border {
      to {
        transform: rotate(360deg)
          /* rtl:ignore */
        ;
      }
    }
    
    .spinner-border {
      --bs-spinner-width: 2rem;
      --bs-spinner-height: 2rem;
      --bs-spinner-vertical-align: -0.125em;
      --bs-spinner-border-width: 0.25em;
      --bs-spinner-animation-speed: 0.75s;
      --bs-spinner-animation-name: spinner-border;
      border: var(--bs-spinner-border-width) solid currentcolor;
      border-right-color: transparent;
    }
    
    .spinner-border-sm {
      --bs-spinner-width: 1rem;
      --bs-spinner-height: 1rem;
      --bs-spinner-border-width: 0.2em;
    }
    
    @keyframes spinner-grow {
      0% {
        transform: scale(0);
      }
    
      50% {
        opacity: 1;
        transform: none;
      }
    }
    
    .spinner-grow {
      --bs-spinner-width: 2rem;
      --bs-spinner-height: 2rem;
      --bs-spinner-vertical-align: -0.125em;
      --bs-spinner-animation-speed: 0.75s;
      --bs-spinner-animation-name: spinner-grow;
      background-color: currentcolor;
      opacity: 0;
    }
    
    .spinner-grow-sm {
      --bs-spinner-width: 1rem;
      --bs-spinner-height: 1rem;
    }
    
    @media (prefers-reduced-motion: reduce) {
    
      .spinner-border,
      .spinner-grow {
        --bs-spinner-animation-speed: 1.5s;
      }
    }
    
    .offcanvas,
    .offcanvas-xxl,
    .offcanvas-xl,
    .offcanvas-lg,
    .offcanvas-md,
    .offcanvas-sm {
      --bs-offcanvas-zindex: 1045;
      --bs-offcanvas-width: 400px;
      --bs-offcanvas-height: 30vh;
      --bs-offcanvas-padding-x: 1rem;
      --bs-offcanvas-padding-y: 1rem;
      --bs-offcanvas-color: var(--bs-body-color);
      --bs-offcanvas-bg: var(--bs-body-bg);
      --bs-offcanvas-border-width: 1px;
      --bs-offcanvas-border-color: rgba(10, 10, 10, 0.2);
      --bs-offcanvas-box-shadow: 0 0.3125rem 0.625rem 0 rgba(0, 0, 0, 0.12);
      --bs-offcanvas-transition: transform 0.3s ease-in-out;
      --bs-offcanvas-title-line-height: 1.5;
    }
    
    @media (max-width: 575.98px) {
      .offcanvas-sm {
        position: fixed;
        bottom: 0;
        z-index: var(--bs-offcanvas-zindex);
        display: flex;
        flex-direction: column;
        max-width: 100%;
        color: var(--bs-offcanvas-color);
        visibility: hidden;
        background-color: var(--bs-offcanvas-bg);
        background-clip: padding-box;
        outline: 0;
        transition: var(--bs-offcanvas-transition);
      }
    }
    
    @media (max-width: 575.98px) and (prefers-reduced-motion: reduce) {
      .offcanvas-sm {
        transition: none;
      }
    }
    
    @media (max-width: 575.98px) {
      .offcanvas-sm.offcanvas-start {
        top: 0;
        left: 0;
        width: var(--bs-offcanvas-width);
        border-right: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
        transform: translateX(-100%);
      }
    
      .offcanvas-sm.offcanvas-end {
        top: 0;
        right: 0;
        width: var(--bs-offcanvas-width);
        border-left: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
        transform: translateX(100%);
      }
    
      .offcanvas-sm.offcanvas-top {
        top: 0;
        right: 0;
        left: 0;
        height: var(--bs-offcanvas-height);
        max-height: 100%;
        border-bottom: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
        transform: translateY(-100%);
      }
    
      .offcanvas-sm.offcanvas-bottom {
        right: 0;
        left: 0;
        height: var(--bs-offcanvas-height);
        max-height: 100%;
        border-top: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
        transform: translateY(100%);
      }
    
      .offcanvas-sm.showing,
      .offcanvas-sm.show:not(.hiding) {
        transform: none;
      }
    
      .offcanvas-sm.showing,
      .offcanvas-sm.hiding,
      .offcanvas-sm.show {
        visibility: visible;
      }
    }
    
    @media (min-width: 576px) {
      .offcanvas-sm {
        --bs-offcanvas-height: auto;
        --bs-offcanvas-border-width: 0;
        background-color: transparent !important;
      }
    
      .offcanvas-sm .offcanvas-header {
        display: none;
      }
    
      .offcanvas-sm .offcanvas-body {
        display: flex;
        flex-grow: 0;
        padding: 0;
        overflow-y: visible;
        background-color: transparent !important;
      }
    }
    
    @media (max-width: 767.98px) {
      .offcanvas-md {
        position: fixed;
        bottom: 0;
        z-index: var(--bs-offcanvas-zindex);
        display: flex;
        flex-direction: column;
        max-width: 100%;
        color: var(--bs-offcanvas-color);
        visibility: hidden;
        background-color: var(--bs-offcanvas-bg);
        background-clip: padding-box;
        outline: 0;
        transition: var(--bs-offcanvas-transition);
      }
    }
    
    @media (max-width: 767.98px) and (prefers-reduced-motion: reduce) {
      .offcanvas-md {
        transition: none;
      }
    }
    
    @media (max-width: 767.98px) {
      .offcanvas-md.offcanvas-start {
        top: 0;
        left: 0;
        width: var(--bs-offcanvas-width);
        border-right: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
        transform: translateX(-100%);
      }
    
      .offcanvas-md.offcanvas-end {
        top: 0;
        right: 0;
        width: var(--bs-offcanvas-width);
        border-left: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
        transform: translateX(100%);
      }
    
      .offcanvas-md.offcanvas-top {
        top: 0;
        right: 0;
        left: 0;
        height: var(--bs-offcanvas-height);
        max-height: 100%;
        border-bottom: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
        transform: translateY(-100%);
      }
    
      .offcanvas-md.offcanvas-bottom {
        right: 0;
        left: 0;
        height: var(--bs-offcanvas-height);
        max-height: 100%;
        border-top: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
        transform: translateY(100%);
      }
    
      .offcanvas-md.showing,
      .offcanvas-md.show:not(.hiding) {
        transform: none;
      }
    
      .offcanvas-md.showing,
      .offcanvas-md.hiding,
      .offcanvas-md.show {
        visibility: visible;
      }
    }
    
    @media (min-width: 768px) {
      .offcanvas-md {
        --bs-offcanvas-height: auto;
        --bs-offcanvas-border-width: 0;
        background-color: transparent !important;
      }
    
      .offcanvas-md .offcanvas-header {
        display: none;
      }
    
      .offcanvas-md .offcanvas-body {
        display: flex;
        flex-grow: 0;
        padding: 0;
        overflow-y: visible;
        background-color: transparent !important;
      }
    }
    
    @media (max-width: 991.98px) {
      .offcanvas-lg {
        position: fixed;
        bottom: 0;
        z-index: var(--bs-offcanvas-zindex);
        display: flex;
        flex-direction: column;
        max-width: 100%;
        color: var(--bs-offcanvas-color);
        visibility: hidden;
        background-color: var(--bs-offcanvas-bg);
        background-clip: padding-box;
        outline: 0;
        transition: var(--bs-offcanvas-transition);
      }
    }
    
    @media (max-width: 991.98px) and (prefers-reduced-motion: reduce) {
      .offcanvas-lg {
        transition: none;
      }
    }
    
    @media (max-width: 991.98px) {
      .offcanvas-lg.offcanvas-start {
        top: 0;
        left: 0;
        width: var(--bs-offcanvas-width);
        border-right: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
        transform: translateX(-100%);
      }
    
      .offcanvas-lg.offcanvas-end {
        top: 0;
        right: 0;
        width: var(--bs-offcanvas-width);
        border-left: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
        transform: translateX(100%);
      }
    
      .offcanvas-lg.offcanvas-top {
        top: 0;
        right: 0;
        left: 0;
        height: var(--bs-offcanvas-height);
        max-height: 100%;
        border-bottom: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
        transform: translateY(-100%);
      }
    
      .offcanvas-lg.offcanvas-bottom {
        right: 0;
        left: 0;
        height: var(--bs-offcanvas-height);
        max-height: 100%;
        border-top: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
        transform: translateY(100%);
      }
    
      .offcanvas-lg.showing,
      .offcanvas-lg.show:not(.hiding) {
        transform: none;
      }
    
      .offcanvas-lg.showing,
      .offcanvas-lg.hiding,
      .offcanvas-lg.show {
        visibility: visible;
      }
    }
    
    @media (min-width: 992px) {
      .offcanvas-lg {
        --bs-offcanvas-height: auto;
        --bs-offcanvas-border-width: 0;
        background-color: transparent !important;
      }
    
      .offcanvas-lg .offcanvas-header {
        display: none;
      }
    
      .offcanvas-lg .offcanvas-body {
        display: flex;
        flex-grow: 0;
        padding: 0;
        overflow-y: visible;
        background-color: transparent !important;
      }
    }
    
    @media (max-width: 1199.98px) {
      .offcanvas-xl {
        position: fixed;
        bottom: 0;
        z-index: var(--bs-offcanvas-zindex);
        display: flex;
        flex-direction: column;
        max-width: 100%;
        color: var(--bs-offcanvas-color);
        visibility: hidden;
        background-color: var(--bs-offcanvas-bg);
        background-clip: padding-box;
        outline: 0;
        transition: var(--bs-offcanvas-transition);
      }
    }
    
    @media (max-width: 1199.98px) and (prefers-reduced-motion: reduce) {
      .offcanvas-xl {
        transition: none;
      }
    }
    
    @media (max-width: 1199.98px) {
      .offcanvas-xl.offcanvas-start {
        top: 0;
        left: 0;
        width: var(--bs-offcanvas-width);
        border-right: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
        transform: translateX(-100%);
      }
    
      .offcanvas-xl.offcanvas-end {
        top: 0;
        right: 0;
        width: var(--bs-offcanvas-width);
        border-left: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
        transform: translateX(100%);
      }
    
      .offcanvas-xl.offcanvas-top {
        top: 0;
        right: 0;
        left: 0;
        height: var(--bs-offcanvas-height);
        max-height: 100%;
        border-bottom: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
        transform: translateY(-100%);
      }
    
      .offcanvas-xl.offcanvas-bottom {
        right: 0;
        left: 0;
        height: var(--bs-offcanvas-height);
        max-height: 100%;
        border-top: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
        transform: translateY(100%);
      }
    
      .offcanvas-xl.showing,
      .offcanvas-xl.show:not(.hiding) {
        transform: none;
      }
    
      .offcanvas-xl.showing,
      .offcanvas-xl.hiding,
      .offcanvas-xl.show {
        visibility: visible;
      }
    }
    
    @media (min-width: 1200px) {
      .offcanvas-xl {
        --bs-offcanvas-height: auto;
        --bs-offcanvas-border-width: 0;
        background-color: transparent !important;
      }
    
      .offcanvas-xl .offcanvas-header {
        display: none;
      }
    
      .offcanvas-xl .offcanvas-body {
        display: flex;
        flex-grow: 0;
        padding: 0;
        overflow-y: visible;
        background-color: transparent !important;
      }
    }
    
    @media (max-width: 1399.98px) {
      .offcanvas-xxl {
        position: fixed;
        bottom: 0;
        z-index: var(--bs-offcanvas-zindex);
        display: flex;
        flex-direction: column;
        max-width: 100%;
        color: var(--bs-offcanvas-color);
        visibility: hidden;
        background-color: var(--bs-offcanvas-bg);
        background-clip: padding-box;
        outline: 0;
        transition: var(--bs-offcanvas-transition);
      }
    }
    
    @media (max-width: 1399.98px) and (prefers-reduced-motion: reduce) {
      .offcanvas-xxl {
        transition: none;
      }
    }
    
    @media (max-width: 1399.98px) {
      .offcanvas-xxl.offcanvas-start {
        top: 0;
        left: 0;
        width: var(--bs-offcanvas-width);
        border-right: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
        transform: translateX(-100%);
      }
    
      .offcanvas-xxl.offcanvas-end {
        top: 0;
        right: 0;
        width: var(--bs-offcanvas-width);
        border-left: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
        transform: translateX(100%);
      }
    
      .offcanvas-xxl.offcanvas-top {
        top: 0;
        right: 0;
        left: 0;
        height: var(--bs-offcanvas-height);
        max-height: 100%;
        border-bottom: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
        transform: translateY(-100%);
      }
    
      .offcanvas-xxl.offcanvas-bottom {
        right: 0;
        left: 0;
        height: var(--bs-offcanvas-height);
        max-height: 100%;
        border-top: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
        transform: translateY(100%);
      }
    
      .offcanvas-xxl.showing,
      .offcanvas-xxl.show:not(.hiding) {
        transform: none;
      }
    
      .offcanvas-xxl.showing,
      .offcanvas-xxl.hiding,
      .offcanvas-xxl.show {
        visibility: visible;
      }
    }
    
    @media (min-width: 1400px) {
      .offcanvas-xxl {
        --bs-offcanvas-height: auto;
        --bs-offcanvas-border-width: 0;
        background-color: transparent !important;
      }
    
      .offcanvas-xxl .offcanvas-header {
        display: none;
      }
    
      .offcanvas-xxl .offcanvas-body {
        display: flex;
        flex-grow: 0;
        padding: 0;
        overflow-y: visible;
        background-color: transparent !important;
      }
    }
    
    .offcanvas {
      position: fixed;
      bottom: 0;
      z-index: var(--bs-offcanvas-zindex);
      display: flex;
      flex-direction: column;
      max-width: 100%;
      color: var(--bs-offcanvas-color);
      visibility: hidden;
      background-color: var(--bs-offcanvas-bg);
      background-clip: padding-box;
      outline: 0;
      transition: var(--bs-offcanvas-transition);
    }
    
    @media (prefers-reduced-motion: reduce) {
      .offcanvas {
        transition: none;
      }
    }
    
    .offcanvas.offcanvas-start {
      top: 0;
      left: 0;
      width: var(--bs-offcanvas-width);
      border-right: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
      transform: translateX(-100%);
    }
    
    .offcanvas.offcanvas-end {
      top: 0;
      right: 0;
      width: var(--bs-offcanvas-width);
      border-left: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
      transform: translateX(100%);
    }
    
    .offcanvas.offcanvas-top {
      top: 0;
      right: 0;
      left: 0;
      height: var(--bs-offcanvas-height);
      max-height: 100%;
      border-bottom: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
      transform: translateY(-100%);
    }
    
    .offcanvas.offcanvas-bottom {
      right: 0;
      left: 0;
      height: var(--bs-offcanvas-height);
      max-height: 100%;
      border-top: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
      transform: translateY(100%);
    }
    
    .offcanvas.showing,
    .offcanvas.show:not(.hiding) {
      transform: none;
    }
    
    .offcanvas.showing,
    .offcanvas.hiding,
    .offcanvas.show {
      visibility: visible;
    }
    
    .offcanvas-backdrop {
      position: fixed;
      top: 0;
      left: 0;
      z-index: 1040;
      width: 100vw;
      height: 100vh;
      background-color: #0a0a0a;
    }
    
    .offcanvas-backdrop.fade {
      opacity: 0;
    }
    
    .offcanvas-backdrop.show {
      opacity: 0.5;
    }
    
    .offcanvas-header {
      display: flex;
      align-items: center;
      padding: var(--bs-offcanvas-padding-y) var(--bs-offcanvas-padding-x);
    }
    
    .offcanvas-header .btn-close {
      padding: calc(var(--bs-offcanvas-padding-y) * 0.5) calc(var(--bs-offcanvas-padding-x) * 0.5);
      margin: calc(-0.5 * var(--bs-offcanvas-padding-y)) calc(-0.5 * var(--bs-offcanvas-padding-x)) calc(-0.5 * var(--bs-offcanvas-padding-y)) auto;
    }
    
    .offcanvas-title {
      margin-bottom: 0;
      line-height: var(--bs-offcanvas-title-line-height);
    }
    
    .offcanvas-body {
      flex-grow: 1;
      padding: var(--bs-offcanvas-padding-y) var(--bs-offcanvas-padding-x);
      overflow-y: auto;
    }
    
    .placeholder {
      display: inline-block;
      min-height: 1em;
      vertical-align: middle;
      cursor: wait;
      background-color: currentcolor;
      opacity: 0.5;
    }
    
    .placeholder.btn::before {
      display: inline-block;
      content: "";
    }
    
    .placeholder-xs {
      min-height: 0.6em;
    }
    
    .placeholder-sm {
      min-height: 0.8em;
    }
    
    .placeholder-lg {
      min-height: 1.2em;
    }
    
    .placeholder-glow .placeholder {
      animation: placeholder-glow 2s ease-in-out infinite;
    }
    
    @keyframes placeholder-glow {
      50% {
        opacity: 0.2;
      }
    }
    
    .placeholder-wave {
      mask-image: linear-gradient(130deg, #0a0a0a 55%, rgba(0, 0, 0, 0.8) 75%, #0a0a0a 95%);
      mask-size: 200% 100%;
      animation: placeholder-wave 2s linear infinite;
    }
    
    @keyframes placeholder-wave {
      100% {
        mask-position: -200% 0%;
      }
    }
    
    .clearfix::after {
      display: block;
      clear: both;
      content: "";
    }
    
    .text-bg-primary {
      color: #0a0a0a !important;
      background-color: RGBA(var(--bs-primary-rgb), var(--bs-bg-opacity, 1)) !important;
    }
    
    .text-bg-secondary {
      color: #fff !important;
      background-color: RGBA(var(--bs-secondary-rgb), var(--bs-bg-opacity, 1)) !important;
    }
    
    .text-bg-success {
      color: #0a0a0a !important;
      background-color: RGBA(var(--bs-success-rgb), var(--bs-bg-opacity, 1)) !important;
    }
    
    .text-bg-info {
      color: #fff !important;
      background-color: RGBA(var(--bs-info-rgb), var(--bs-bg-opacity, 1)) !important;
    }
    
    .text-bg-warning {
      color: #0a0a0a !important;
      background-color: RGBA(var(--bs-warning-rgb), var(--bs-bg-opacity, 1)) !important;
    }
    
    .text-bg-danger {
      color: #0a0a0a !important;
      background-color: RGBA(var(--bs-danger-rgb), var(--bs-bg-opacity, 1)) !important;
    }
    
    .text-bg-light {
      color: #0a0a0a !important;
      background-color: RGBA(var(--bs-light-rgb), var(--bs-bg-opacity, 1)) !important;
    }
    
    .text-bg-dark {
      color: #fff !important;
      background-color: RGBA(var(--bs-dark-rgb), var(--bs-bg-opacity, 1)) !important;
    }
    
    .text-bg-white {
      color: #0a0a0a !important;
      background-color: RGBA(var(--bs-white-rgb), var(--bs-bg-opacity, 1)) !important;
    }
    
    .text-bg-dark-blue {
      color: #fff !important;
      background-color: RGBA(var(--bs-dark-blue-rgb), var(--bs-bg-opacity, 1)) !important;
    }
    
    .link-primary {
      color: RGBA(var(--bs-primary-rgb), var(--bs-link-opacity, 1)) !important;
      text-decoration-color: RGBA(var(--bs-primary-rgb), var(--bs-link-underline-opacity, 1)) !important;
    }
    
    .link-primary:hover,
    .link-primary:focus {
      color: RGBA(237, 75, 130, var(--bs-link-opacity, 1)) !important;
      text-decoration-color: RGBA(237, 75, 130, var(--bs-link-underline-opacity, 1)) !important;
    }
    
    .link-secondary {
      color: RGBA(var(--bs-secondary-rgb), var(--bs-link-opacity, 1)) !important;
      text-decoration-color: RGBA(var(--bs-secondary-rgb), var(--bs-link-underline-opacity, 1)) !important;
    }
    
    .link-secondary:hover,
    .link-secondary:focus {
      color: RGBA(92, 92, 92, var(--bs-link-opacity, 1)) !important;
      text-decoration-color: RGBA(92, 92, 92, var(--bs-link-underline-opacity, 1)) !important;
    }
    
    .link-success {
      color: RGBA(var(--bs-success-rgb), var(--bs-link-opacity, 1)) !important;
      text-decoration-color: RGBA(var(--bs-success-rgb), var(--bs-link-underline-opacity, 1)) !important;
    }
    
    .link-success:hover,
    .link-success:focus {
      color: RGBA(112, 191, 115, var(--bs-link-opacity, 1)) !important;
      text-decoration-color: RGBA(112, 191, 115, var(--bs-link-underline-opacity, 1)) !important;
    }
    
    .link-info {
      color: RGBA(var(--bs-info-rgb), var(--bs-link-opacity, 1)) !important;
      text-decoration-color: RGBA(var(--bs-info-rgb), var(--bs-link-underline-opacity, 1)) !important;
    }
    
    .link-info:hover,
    .link-info:focus {
      color: RGBA(21, 92, 186, var(--bs-link-opacity, 1)) !important;
      text-decoration-color: RGBA(21, 92, 186, var(--bs-link-underline-opacity, 1)) !important;
    }
    
    .link-warning {
      color: RGBA(var(--bs-warning-rgb), var(--bs-link-opacity, 1)) !important;
      text-decoration-color: RGBA(var(--bs-warning-rgb), var(--bs-link-underline-opacity, 1)) !important;
    }
    
    .link-warning:hover,
    .link-warning:focus {
      color: RGBA(252, 163, 51, var(--bs-link-opacity, 1)) !important;
      text-decoration-color: RGBA(252, 163, 51, var(--bs-link-underline-opacity, 1)) !important;
    }
    
    .link-danger {
      color: RGBA(var(--bs-danger-rgb), var(--bs-link-opacity, 1)) !important;
      text-decoration-color: RGBA(var(--bs-danger-rgb), var(--bs-link-underline-opacity, 1)) !important;
    }
    
    .link-danger:hover,
    .link-danger:focus {
      color: RGBA(246, 105, 93, var(--bs-link-opacity, 1)) !important;
      text-decoration-color: RGBA(246, 105, 93, var(--bs-link-underline-opacity, 1)) !important;
    }
    
    .link-light {
      color: RGBA(var(--bs-light-rgb), var(--bs-link-opacity, 1)) !important;
      text-decoration-color: RGBA(var(--bs-light-rgb), var(--bs-link-underline-opacity, 1)) !important;
    }
    
    .link-light:hover,
    .link-light:focus {
      color: RGBA(234, 234, 234, var(--bs-link-opacity, 1)) !important;
      text-decoration-color: RGBA(234, 234, 234, var(--bs-link-underline-opacity, 1)) !important;
    }
    
    .link-dark {
      color: RGBA(var(--bs-dark-rgb), var(--bs-link-opacity, 1)) !important;
      text-decoration-color: RGBA(var(--bs-dark-rgb), var(--bs-link-underline-opacity, 1)) !important;
    }
    
    .link-dark:hover,
    .link-dark:focus {
      color: RGBA(30, 30, 30, var(--bs-link-opacity, 1)) !important;
      text-decoration-color: RGBA(30, 30, 30, var(--bs-link-underline-opacity, 1)) !important;
    }
    
    .link-white {
      color: RGBA(var(--bs-white-rgb), var(--bs-link-opacity, 1)) !important;
      text-decoration-color: RGBA(var(--bs-white-rgb), var(--bs-link-underline-opacity, 1)) !important;
    }
    
    .link-white:hover,
    .link-white:focus {
      color: RGBA(255, 255, 255, var(--bs-link-opacity, 1)) !important;
      text-decoration-color: RGBA(255, 255, 255, var(--bs-link-underline-opacity, 1)) !important;
    }
    
    .link-dark-blue {
      color: RGBA(var(--bs-dark-blue-rgb), var(--bs-link-opacity, 1)) !important;
      text-decoration-color: RGBA(var(--bs-dark-blue-rgb), var(--bs-link-underline-opacity, 1)) !important;
    }
    
    .link-dark-blue:hover,
    .link-dark-blue:focus {
      color: RGBA(21, 28, 101, var(--bs-link-opacity, 1)) !important;
      text-decoration-color: RGBA(21, 28, 101, var(--bs-link-underline-opacity, 1)) !important;
    }
    
    .link-body-emphasis {
      color: RGBA(var(--bs-emphasis-color-rgb), var(--bs-link-opacity, 1)) !important;
      text-decoration-color: RGBA(var(--bs-emphasis-color-rgb), var(--bs-link-underline-opacity, 1)) !important;
    }
    
    .link-body-emphasis:hover,
    .link-body-emphasis:focus {
      color: RGBA(var(--bs-emphasis-color-rgb), var(--bs-link-opacity, 0.75)) !important;
      text-decoration-color: RGBA(var(--bs-emphasis-color-rgb), var(--bs-link-underline-opacity, 0.75)) !important;
    }
    
    .focus-ring:focus {
      outline: 0;
      box-shadow: var(--bs-focus-ring-x, 0) var(--bs-focus-ring-y, 0) var(--bs-focus-ring-blur, 0) var(--bs-focus-ring-width) var(--bs-focus-ring-color);
    }
    
    .icon-link {
      display: inline-flex;
      gap: 0.375rem;
      align-items: center;
      text-decoration-color: rgba(var(--bs-link-color-rgb), var(--bs-link-opacity, 0.5));
      text-underline-offset: 0.25em;
      backface-visibility: hidden;
    }
    
    .icon-link>.bi {
      flex-shrink: 0;
      width: 1em;
      height: 1em;
      fill: currentcolor;
      transition: 0.2s ease-in-out transform;
    }
    
    @media (prefers-reduced-motion: reduce) {
      .icon-link>.bi {
        transition: none;
      }
    }
    
    .icon-link-hover:hover>.bi,
    .icon-link-hover:focus-visible>.bi {
      transform: var(--bs-icon-link-transform, translate3d(0.25em, 0, 0));
    }
    
    .ratio {
      position: relative;
      width: 100%;
    }
    
    .ratio::before {
      display: block;
      padding-top: var(--bs-aspect-ratio);
      content: "";
    }
    
    .ratio>* {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
    }
    
    .ratio-1x1 {
      --bs-aspect-ratio: 100%;
    }
    
    .ratio-4x3 {
      --bs-aspect-ratio: 75%;
    }
    
    .ratio-16x9 {
      --bs-aspect-ratio: 56.25%;
    }
    
    .ratio-21x9 {
      --bs-aspect-ratio: 42.8571428571%;
    }
    
    .fixed-top {
      position: fixed;
      top: 0;
      right: 0;
      left: 0;
      z-index: 1030;
    }
    
    .fixed-bottom {
      position: fixed;
      right: 0;
      bottom: 0;
      left: 0;
      z-index: 1030;
    }
    
    .sticky-top {
      position: sticky;
      top: 0;
      z-index: 1020;
    }
    
    .sticky-bottom {
      position: sticky;
      bottom: 0;
      z-index: 1020;
    }
    
    @media (min-width: 576px) {
      .sticky-sm-top {
        position: sticky;
        top: 0;
        z-index: 1020;
      }
    
      .sticky-sm-bottom {
        position: sticky;
        bottom: 0;
        z-index: 1020;
      }
    }
    
    @media (min-width: 768px) {
      .sticky-md-top {
        position: sticky;
        top: 0;
        z-index: 1020;
      }
    
      .sticky-md-bottom {
        position: sticky;
        bottom: 0;
        z-index: 1020;
      }
    }
    
    @media (min-width: 992px) {
      .sticky-lg-top {
        position: sticky;
        top: 0;
        z-index: 1020;
      }
    
      .sticky-lg-bottom {
        position: sticky;
        bottom: 0;
        z-index: 1020;
      }
    }
    
    @media (min-width: 1200px) {
      .sticky-xl-top {
        position: sticky;
        top: 0;
        z-index: 1020;
      }
    
      .sticky-xl-bottom {
        position: sticky;
        bottom: 0;
        z-index: 1020;
      }
    }
    
    @media (min-width: 1400px) {
      .sticky-xxl-top {
        position: sticky;
        top: 0;
        z-index: 1020;
      }
    
      .sticky-xxl-bottom {
        position: sticky;
        bottom: 0;
        z-index: 1020;
      }
    }
    
    .hstack {
      display: flex;
      flex-direction: row;
      align-items: center;
      align-self: stretch;
    }
    
    .vstack {
      display: flex;
      flex: 1 1 auto;
      flex-direction: column;
      align-self: stretch;
    }
    
    .visually-hidden,
    .visually-hidden-focusable:not(:focus):not(:focus-within) {
      width: 1px !important;
      height: 1px !important;
      padding: 0 !important;
      margin: -1px !important;
      overflow: hidden !important;
      clip: rect(0, 0, 0, 0) !important;
      white-space: nowrap !important;
      border: 0 !important;
    }
    
    .visually-hidden:not(caption),
    .visually-hidden-focusable:not(:focus):not(:focus-within):not(caption) {
      position: absolute !important;
    }
    
    .stretched-link::after {
      position: absolute;
      top: 0;
      right: 0;
      bottom: 0;
      left: 0;
      z-index: 1;
      content: "";
    }
    
    .text-truncate {
      overflow: hidden;
      text-overflow: ellipsis;
      white-space: nowrap;
    }
    
    .vr {
      display: inline-block;
      align-self: stretch;
      width: var(--bs-border-width);
      min-height: 1em;
      background-color: currentcolor;
      opacity: 0.25;
    }
    
    .align-baseline {
      vertical-align: baseline !important;
    }
    
    .align-top {
      vertical-align: top !important;
    }
    
    .align-middle {
      vertical-align: middle !important;
    }
    
    .align-bottom {
      vertical-align: bottom !important;
    }
    
    .align-text-bottom {
      vertical-align: text-bottom !important;
    }
    
    .align-text-top {
      vertical-align: text-top !important;
    }
    
    .float-start {
      float: left !important;
    }
    
    .float-end {
      float: right !important;
    }
    
    .float-none {
      float: none !important;
    }
    
    .object-fit-contain {
      object-fit: contain !important;
    }
    
    .object-fit-cover {
      object-fit: cover !important;
    }
    
    .object-fit-fill {
      object-fit: fill !important;
    }
    
    .object-fit-scale {
      object-fit: scale-down !important;
    }
    
    .object-fit-none {
      object-fit: none !important;
    }
    
    .opacity-0 {
      opacity: 0 !important;
    }
    
    .opacity-1 {
      opacity: 0.1 !important;
    }
    
    .opacity-2 {
      opacity: 0.2 !important;
    }
    
    .opacity-3 {
      opacity: 0.3 !important;
    }
    
    .opacity-4 {
      opacity: 0.4 !important;
    }
    
    .opacity-5 {
      opacity: 0.5 !important;
    }
    
    .opacity-6 {
      opacity: 0.6 !important;
    }
    
    .opacity-7 {
      opacity: 0.7 !important;
    }
    
    .opacity-8 {
      opacity: 0.8 !important;
    }
    
    .opacity-9 {
      opacity: 0.9 !important;
    }
    
    .opacity-10 {
      opacity: 1 !important;
    }
    
    .overflow-auto {
      overflow: auto !important;
    }
    
    .overflow-hidden {
      overflow: hidden !important;
    }
    
    .overflow-visible {
      overflow: visible !important;
    }
    
    .overflow-scroll {
      overflow: scroll !important;
    }
    
    .overflow-x-auto {
      overflow-x: auto !important;
    }
    
    .overflow-x-hidden {
      overflow-x: hidden !important;
    }
    
    .overflow-x-visible {
      overflow-x: visible !important;
    }
    
    .overflow-x-scroll {
      overflow-x: scroll !important;
    }
    
    .overflow-y-auto {
      overflow-y: auto !important;
    }
    
    .overflow-y-hidden {
      overflow-y: hidden !important;
    }
    
    .overflow-y-visible {
      overflow-y: visible !important;
    }
    
    .overflow-y-scroll {
      overflow-y: scroll !important;
    }
    
    .d-inline {
      display: inline !important;
    }
    
    .d-inline-block {
      display: inline-block !important;
    }
    
    .d-block {
      display: block !important;
    }
    
    .d-grid {
      display: grid !important;
    }
    
    .d-table {
      display: table !important;
    }
    
    .d-table-row {
      display: table-row !important;
    }
    
    .d-table-cell {
      display: table-cell !important;
    }
    
    .d-flex {
      display: flex !important;
    }
    
    .d-inline-flex {
      display: inline-flex !important;
    }
    
    .d-none {
      display: none !important;
    }
    
    .shadow {
      box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06) !important;
    }
    
    .shadow-sm {
      box-shadow: 0 0.3125rem 0.625rem 0 rgba(0, 0, 0, 0.12) !important;
    }
    
    .shadow-lg {
      box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05) !important;
    }
    
    .shadow-xl {
      box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04) !important;
    }
    
    .shadow-none {
      box-shadow: none !important;
    }
    
    .focus-ring-primary {
      --bs-focus-ring-color: rgba(var(--bs-primary-rgb), var(--bs-focus-ring-opacity));
    }
    
    .focus-ring-secondary {
      --bs-focus-ring-color: rgba(var(--bs-secondary-rgb), var(--bs-focus-ring-opacity));
    }
    
    .focus-ring-success {
      --bs-focus-ring-color: rgba(var(--bs-success-rgb), var(--bs-focus-ring-opacity));
    }
    
    .focus-ring-info {
      --bs-focus-ring-color: rgba(var(--bs-info-rgb), var(--bs-focus-ring-opacity));
    }
    
    .focus-ring-warning {
      --bs-focus-ring-color: rgba(var(--bs-warning-rgb), var(--bs-focus-ring-opacity));
    }
    
    .focus-ring-danger {
      --bs-focus-ring-color: rgba(var(--bs-danger-rgb), var(--bs-focus-ring-opacity));
    }
    
    .focus-ring-light {
      --bs-focus-ring-color: rgba(var(--bs-light-rgb), var(--bs-focus-ring-opacity));
    }
    
    .focus-ring-dark {
      --bs-focus-ring-color: rgba(var(--bs-dark-rgb), var(--bs-focus-ring-opacity));
    }
    
    .focus-ring-white {
      --bs-focus-ring-color: rgba(var(--bs-white-rgb), var(--bs-focus-ring-opacity));
    }
    
    .focus-ring-dark-blue {
      --bs-focus-ring-color: rgba(var(--bs-dark-blue-rgb), var(--bs-focus-ring-opacity));
    }
    
    .position-static {
      position: static !important;
    }
    
    .position-relative {
      position: relative !important;
    }
    
    .position-absolute {
      position: absolute !important;
    }
    
    .position-fixed {
      position: fixed !important;
    }
    
    .position-sticky {
      position: sticky !important;
    }
    
    .top-0 {
      top: 0 !important;
    }
    
    .top-1 {
      top: 1% !important;
    }
    
    .top-2 {
      top: 2% !important;
    }
    
    .top-3 {
      top: 3% !important;
    }
    
    .top-4 {
      top: 4% !important;
    }
    
    .top-5 {
      top: 5% !important;
    }
    
    .top-6 {
      top: 6% !important;
    }
    
    .top-7 {
      top: 7% !important;
    }
    
    .top-8 {
      top: 8% !important;
    }
    
    .top-9 {
      top: 9% !important;
    }
    
    .top-10 {
      top: 10% !important;
    }
    
    .top-50 {
      top: 50% !important;
    }
    
    .top-100 {
      top: 100% !important;
    }
    
    .bottom-0 {
      bottom: 0 !important;
    }
    
    .bottom-1 {
      bottom: 1% !important;
    }
    
    .bottom-2 {
      bottom: 2% !important;
    }
    
    .bottom-3 {
      bottom: 3% !important;
    }
    
    .bottom-4 {
      bottom: 4% !important;
    }
    
    .bottom-5 {
      bottom: 5% !important;
    }
    
    .bottom-6 {
      bottom: 6% !important;
    }
    
    .bottom-7 {
      bottom: 7% !important;
    }
    
    .bottom-8 {
      bottom: 8% !important;
    }
    
    .bottom-9 {
      bottom: 9% !important;
    }
    
    .bottom-10 {
      bottom: 10% !important;
    }
    
    .bottom-50 {
      bottom: 50% !important;
    }
    
    .bottom-100 {
      bottom: 100% !important;
    }
    
    .start-0 {
      left: 0 !important;
    }
    
    .start-1 {
      left: 1% !important;
    }
    
    .start-2 {
      left: 2% !important;
    }
    
    .start-3 {
      left: 3% !important;
    }
    
    .start-4 {
      left: 4% !important;
    }
    
    .start-5 {
      left: 5% !important;
    }
    
    .start-6 {
      left: 6% !important;
    }
    
    .start-7 {
      left: 7% !important;
    }
    
    .start-8 {
      left: 8% !important;
    }
    
    .start-9 {
      left: 9% !important;
    }
    
    .start-10 {
      left: 10% !important;
    }
    
    .start-50 {
      left: 50% !important;
    }
    
    .start-100 {
      left: 100% !important;
    }
    
    .end-0 {
      right: 0 !important;
    }
    
    .end-1 {
      right: 1% !important;
    }
    
    .end-2 {
      right: 2% !important;
    }
    
    .end-3 {
      right: 3% !important;
    }
    
    .end-4 {
      right: 4% !important;
    }
    
    .end-5 {
      right: 5% !important;
    }
    
    .end-6 {
      right: 6% !important;
    }
    
    .end-7 {
      right: 7% !important;
    }
    
    .end-8 {
      right: 8% !important;
    }
    
    .end-9 {
      right: 9% !important;
    }
    
    .end-10 {
      right: 10% !important;
    }
    
    .end-50 {
      right: 50% !important;
    }
    
    .end-100 {
      right: 100% !important;
    }
    
    .translate-middle {
      transform: translate(-50%, -50%) !important;
    }
    
    .translate-middle-x {
      transform: translateX(-50%) !important;
    }
    
    .translate-middle-y {
      transform: translateY(-50%) !important;
    }
    
    .border {
      border: 1px solid #d4d4d4 !important;
    }
    
    .border-0 {
      border: 0 !important;
    }
    
    .border-top {
      border-top: 1px solid #d4d4d4 !important;
    }
    
    .border-top-0 {
      border-top: 0 !important;
    }
    
    .border-end {
      border-right: 1px solid #d4d4d4 !important;
    }
    
    .border-end-0 {
      border-right: 0 !important;
    }
    
    .border-bottom {
      border-bottom: 1px solid #d4d4d4 !important;
    }
    
    .border-bottom-0 {
      border-bottom: 0 !important;
    }
    
    .border-start {
      border-left: 1px solid #d4d4d4 !important;
    }
    
    .border-start-0 {
      border-left: 0 !important;
    }
    
    .border-primary {
      border-color: #e91e63 !important;
    }
    
    .border-secondary {
      border-color: #737373 !important;
    }
    
    .border-success {
      border-color: #4CAF50 !important;
    }
    
    .border-info {
      border-color: #1A73E8 !important;
    }
    
    .border-warning {
      border-color: #fb8c00 !important;
    }
    
    .border-danger {
      border-color: #F44335 !important;
    }
    
    .border-light {
      border-color: #e5e5e5 !important;
    }
    
    .border-dark {
      border-color: #262626 !important;
    }
    
    .border-white {
      border-color: #fff !important;
    }
    
    .border-dark-blue {
      border-color: #1A237E !important;
    }
    
    .border-primary-subtle {
      border-color: var(--bs-primary-border-subtle) !important;
    }
    
    .border-secondary-subtle {
      border-color: var(--bs-secondary-border-subtle) !important;
    }
    
    .border-success-subtle {
      border-color: var(--bs-success-border-subtle) !important;
    }
    
    .border-info-subtle {
      border-color: var(--bs-info-border-subtle) !important;
    }
    
    .border-warning-subtle {
      border-color: var(--bs-warning-border-subtle) !important;
    }
    
    .border-danger-subtle {
      border-color: var(--bs-danger-border-subtle) !important;
    }
    
    .border-light-subtle {
      border-color: var(--bs-light-border-subtle) !important;
    }
    
    .border-dark-subtle {
      border-color: var(--bs-dark-border-subtle) !important;
    }
    
    .border-0 {
      border-width: 0 !important;
    }
    
    .border-1 {
      border-width: 1px !important;
    }
    
    .border-2 {
      border-width: 2px !important;
    }
    
    .border-3 {
      border-width: 3px !important;
    }
    
    .border-4 {
      border-width: 4px !important;
    }
    
    .border-5 {
      border-width: 5px !important;
    }
    
    .border-opacity-10 {
      --bs-border-opacity: 0.1;
    }
    
    .border-opacity-25 {
      --bs-border-opacity: 0.25;
    }
    
    .border-opacity-50 {
      --bs-border-opacity: 0.5;
    }
    
    .border-opacity-75 {
      --bs-border-opacity: 0.75;
    }
    
    .border-opacity-100 {
      --bs-border-opacity: 1;
    }
    
    .w-0 {
      width: 0% !important;
    }
    
    .w-1 {
      width: 1% !important;
    }
    
    .w-2 {
      width: 2% !important;
    }
    
    .w-3 {
      width: 3% !important;
    }
    
    .w-4 {
      width: 4% !important;
    }
    
    .w-5 {
      width: 5% !important;
    }
    
    .w-6 {
      width: 6% !important;
    }
    
    .w-7 {
      width: 7% !important;
    }
    
    .w-8 {
      width: 8% !important;
    }
    
    .w-9 {
      width: 9% !important;
    }
    
    .w-10 {
      width: 10% !important;
    }
    
    .w-15 {
      width: 15% !important;
    }
    
    .w-20 {
      width: 20% !important;
    }
    
    .w-25 {
      width: 25% !important;
    }
    
    .w-30 {
      width: 30% !important;
    }
    
    .w-35 {
      width: 35% !important;
    }
    
    .w-40 {
      width: 40% !important;
    }
    
    .w-45 {
      width: 45% !important;
    }
    
    .w-50 {
      width: 50% !important;
    }
    
    .w-55 {
      width: 55% !important;
    }
    
    .w-60 {
      width: 60% !important;
    }
    
    .w-65 {
      width: 65% !important;
    }
    
    .w-70 {
      width: 70% !important;
    }
    
    .w-75 {
      width: 75% !important;
    }
    
    .w-80 {
      width: 80% !important;
    }
    
    .w-85 {
      width: 85% !important;
    }
    
    .w-90 {
      width: 90% !important;
    }
    
    .w-95 {
      width: 95% !important;
    }
    
    .w-100 {
      width: 100% !important;
    }
    
    .w-auto {
      width: auto !important;
    }
    
    .mw-100 {
      max-width: 100% !important;
    }
    
    .vw-100 {
      width: 100vw !important;
    }
    
    .min-vw-100 {
      min-width: 100vw !important;
    }
    
    .h-25 {
      height: 25% !important;
    }
    
    .h-50 {
      height: 50% !important;
    }
    
    .h-75 {
      height: 75% !important;
    }
    
    .h-100 {
      height: 100% !important;
    }
    
    .h-auto {
      height: auto !important;
    }
    
    .mh-100 {
      max-height: 100% !important;
    }
    
    .vh-100 {
      height: 100vh !important;
    }
    
    .min-vh-25 {
      min-height: 25vh !important;
    }
    
    .min-vh-35 {
      min-height: 35vh !important;
    }
    
    .min-vh-45 {
      min-height: 45vh !important;
    }
    
    .min-vh-50 {
      min-height: 50vh !important;
    }
    
    .min-vh-55 {
      min-height: 55vh !important;
    }
    
    .min-vh-65 {
      min-height: 65vh !important;
    }
    
    .min-vh-70 {
      min-height: 70vh !important;
    }
    
    .min-vh-75 {
      min-height: 75vh !important;
    }
    
    .min-vh-80 {
      min-height: 80vh !important;
    }
    
    .min-vh-85 {
      min-height: 85vh !important;
    }
    
    .min-vh-90 {
      min-height: 90vh !important;
    }
    
    .min-vh-95 {
      min-height: 95vh !important;
    }
    
    .min-vh-100 {
      min-height: 100vh !important;
    }
    
    .flex-fill {
      flex: 1 1 auto !important;
    }
    
    .flex-row {
      flex-direction: row !important;
    }
    
    .flex-column {
      flex-direction: column !important;
    }
    
    .flex-row-reverse {
      flex-direction: row-reverse !important;
    }
    
    .flex-column-reverse {
      flex-direction: column-reverse !important;
    }
    
    .flex-grow-0 {
      flex-grow: 0 !important;
    }
    
    .flex-grow-1 {
      flex-grow: 1 !important;
    }
    
    .flex-shrink-0 {
      flex-shrink: 0 !important;
    }
    
    .flex-shrink-1 {
      flex-shrink: 1 !important;
    }
    
    .flex-wrap {
      flex-wrap: wrap !important;
    }
    
    .flex-nowrap {
      flex-wrap: nowrap !important;
    }
    
    .flex-wrap-reverse {
      flex-wrap: wrap-reverse !important;
    }
    
    .justify-content-start {
      justify-content: flex-start !important;
    }
    
    .justify-content-end {
      justify-content: flex-end !important;
    }
    
    .justify-content-center {
      justify-content: center !important;
    }
    
    .justify-content-between {
      justify-content: space-between !important;
    }
    
    .justify-content-around {
      justify-content: space-around !important;
    }
    
    .justify-content-evenly {
      justify-content: space-evenly !important;
    }
    
    .align-items-start {
      align-items: flex-start !important;
    }
    
    .align-items-end {
      align-items: flex-end !important;
    }
    
    .align-items-center {
      align-items: center !important;
    }
    
    .align-items-baseline {
      align-items: baseline !important;
    }
    
    .align-items-stretch {
      align-items: stretch !important;
    }
    
    .align-content-start {
      align-content: flex-start !important;
    }
    
    .align-content-end {
      align-content: flex-end !important;
    }
    
    .align-content-center {
      align-content: center !important;
    }
    
    .align-content-between {
      align-content: space-between !important;
    }
    
    .align-content-around {
      align-content: space-around !important;
    }
    
    .align-content-stretch {
      align-content: stretch !important;
    }
    
    .align-self-auto {
      align-self: auto !important;
    }
    
    .align-self-start {
      align-self: flex-start !important;
    }
    
    .align-self-end {
      align-self: flex-end !important;
    }
    
    .align-self-center {
      align-self: center !important;
    }
    
    .align-self-baseline {
      align-self: baseline !important;
    }
    
    .align-self-stretch {
      align-self: stretch !important;
    }
    
    .order-first {
      order: -1 !important;
    }
    
    .order-0 {
      order: 0 !important;
    }
    
    .order-1 {
      order: 1 !important;
    }
    
    .order-2 {
      order: 2 !important;
    }
    
    .order-3 {
      order: 3 !important;
    }
    
    .order-4 {
      order: 4 !important;
    }
    
    .order-5 {
      order: 5 !important;
    }
    
    .order-last {
      order: 6 !important;
    }
    
    .m-0 {
      margin: 0 !important;
    }
    
    .m-1 {
      margin: 0.25rem !important;
    }
    
    .m-2 {
      margin: 0.5rem !important;
    }
    
    .m-3 {
      margin: 1rem !important;
    }
    
    .m-4 {
      margin: 1.5rem !important;
    }
    
    .m-5 {
      margin: 3rem !important;
    }
    
    .m-6 {
      margin: 4rem !important;
    }
    
    .m-7 {
      margin: 6rem !important;
    }
    
    .m-8 {
      margin: 8rem !important;
    }
    
    .m-9 {
      margin: 10rem !important;
    }
    
    .m-10 {
      margin: 12rem !important;
    }
    
    .m-11 {
      margin: 14rem !important;
    }
    
    .m-12 {
      margin: 16rem !important;
    }
    
    .m-auto {
      margin: auto !important;
    }
    
    .mx-0 {
      margin-right: 0 !important;
      margin-left: 0 !important;
    }
    
    .mx-1 {
      margin-right: 0.25rem !important;
      margin-left: 0.25rem !important;
    }
    
    .mx-2 {
      margin-right: 0.5rem !important;
      margin-left: 0.5rem !important;
    }
    
    .mx-3 {
      margin-right: 1rem !important;
      margin-left: 1rem !important;
    }
    
    .mx-4 {
      margin-right: 1.5rem !important;
      margin-left: 1.5rem !important;
    }
    
    .mx-5 {
      margin-right: 3rem !important;
      margin-left: 3rem !important;
    }
    
    .mx-6 {
      margin-right: 4rem !important;
      margin-left: 4rem !important;
    }
    
    .mx-7 {
      margin-right: 6rem !important;
      margin-left: 6rem !important;
    }
    
    .mx-8 {
      margin-right: 8rem !important;
      margin-left: 8rem !important;
    }
    
    .mx-9 {
      margin-right: 10rem !important;
      margin-left: 10rem !important;
    }
    
    .mx-10 {
      margin-right: 12rem !important;
      margin-left: 12rem !important;
    }
    
    .mx-11 {
      margin-right: 14rem !important;
      margin-left: 14rem !important;
    }
    
    .mx-12 {
      margin-right: 16rem !important;
      margin-left: 16rem !important;
    }
    
    .mx-auto {
      margin-right: auto !important;
      margin-left: auto !important;
    }
    
    .my-0 {
      margin-top: 0 !important;
      margin-bottom: 0 !important;
    }
    
    .my-1 {
      margin-top: 0.25rem !important;
      margin-bottom: 0.25rem !important;
    }
    
    .my-2 {
      margin-top: 0.5rem !important;
      margin-bottom: 0.5rem !important;
    }
    
    .my-3 {
      margin-top: 1rem !important;
      margin-bottom: 1rem !important;
    }
    
    .my-4 {
      margin-top: 1.5rem !important;
      margin-bottom: 1.5rem !important;
    }
    
    .my-5 {
      margin-top: 3rem !important;
      margin-bottom: 3rem !important;
    }
    
    .my-6 {
      margin-top: 4rem !important;
      margin-bottom: 4rem !important;
    }
    
    .my-7 {
      margin-top: 6rem !important;
      margin-bottom: 6rem !important;
    }
    
    .my-8 {
      margin-top: 8rem !important;
      margin-bottom: 8rem !important;
    }
    
    .my-9 {
      margin-top: 10rem !important;
      margin-bottom: 10rem !important;
    }
    
    .my-10 {
      margin-top: 12rem !important;
      margin-bottom: 12rem !important;
    }
    
    .my-11 {
      margin-top: 14rem !important;
      margin-bottom: 14rem !important;
    }
    
    .my-12 {
      margin-top: 16rem !important;
      margin-bottom: 16rem !important;
    }
    
    .my-auto {
      margin-top: auto !important;
      margin-bottom: auto !important;
    }
    
    .mt-0 {
      margin-top: 0 !important;
    }
    
    .mt-1 {
      margin-top: 0.25rem !important;
    }
    
    .mt-2 {
      margin-top: 0.5rem !important;
    }
    
    .mt-3 {
      margin-top: 1rem !important;
    }
    
    .mt-4 {
      margin-top: 1.5rem !important;
    }
    
    .mt-5 {
      margin-top: 3rem !important;
    }
    
    .mt-6 {
      margin-top: 4rem !important;
    }
    
    .mt-7 {
      margin-top: 6rem !important;
    }
    
    .mt-8 {
      margin-top: 8rem !important;
    }
    
    .mt-9 {
      margin-top: 10rem !important;
    }
    
    .mt-10 {
      margin-top: 12rem !important;
    }
    
    .mt-11 {
      margin-top: 14rem !important;
    }
    
    .mt-12 {
      margin-top: 16rem !important;
    }
    
    .mt-auto {
      margin-top: auto !important;
    }
    
    .me-0 {
      margin-right: 0 !important;
    }
    
    .me-1 {
      margin-right: 0.25rem !important;
    }
    
    .me-2 {
      margin-right: 0.5rem !important;
    }
    
    .me-3 {
      margin-right: 1rem !important;
    }
    
    .me-4 {
      margin-right: 1.5rem !important;
    }
    
    .me-5 {
      margin-right: 3rem !important;
    }
    
    .me-6 {
      margin-right: 4rem !important;
    }
    
    .me-7 {
      margin-right: 6rem !important;
    }
    
    .me-8 {
      margin-right: 8rem !important;
    }
    
    .me-9 {
      margin-right: 10rem !important;
    }
    
    .me-10 {
      margin-right: 12rem !important;
    }
    
    .me-11 {
      margin-right: 14rem !important;
    }
    
    .me-12 {
      margin-right: 16rem !important;
    }
    
    .me-auto {
      margin-right: auto !important;
    }
    
    .mb-0 {
      margin-bottom: 0 !important;
    }
    
    .mb-1 {
      margin-bottom: 0.25rem !important;
    }
    
    .mb-2 {
      margin-bottom: 0.5rem !important;
    }
    
    .mb-3 {
      margin-bottom: 1rem !important;
    }
    
    .mb-4 {
      margin-bottom: 1.5rem !important;
    }
    
    .mb-5 {
      margin-bottom: 3rem !important;
    }
    
    .mb-6 {
      margin-bottom: 4rem !important;
    }
    
    .mb-7 {
      margin-bottom: 6rem !important;
    }
    
    .mb-8 {
      margin-bottom: 8rem !important;
    }
    
    .mb-9 {
      margin-bottom: 10rem !important;
    }
    
    .mb-10 {
      margin-bottom: 12rem !important;
    }
    
    .mb-11 {
      margin-bottom: 14rem !important;
    }
    
    .mb-12 {
      margin-bottom: 16rem !important;
    }
    
    .mb-auto {
      margin-bottom: auto !important;
    }
    
    .ms-0 {
      margin-left: 0 !important;
    }
    
    .ms-1 {
      margin-left: 0.25rem !important;
    }
    
    .ms-2 {
      margin-left: 0.5rem !important;
    }
    
    .ms-3 {
      margin-left: 1rem !important;
    }
    
    .ms-4 {
      margin-left: 1.5rem !important;
    }
    
    .ms-5 {
      margin-left: 3rem !important;
    }
    
    .ms-6 {
      margin-left: 4rem !important;
    }
    
    .ms-7 {
      margin-left: 6rem !important;
    }
    
    .ms-8 {
      margin-left: 8rem !important;
    }
    
    .ms-9 {
      margin-left: 10rem !important;
    }
    
    .ms-10 {
      margin-left: 12rem !important;
    }
    
    .ms-11 {
      margin-left: 14rem !important;
    }
    
    .ms-12 {
      margin-left: 16rem !important;
    }
    
    .ms-auto {
      margin-left: auto !important;
    }
    
    .m-n1 {
      margin: -0.25rem !important;
    }
    
    .m-n2 {
      margin: -0.5rem !important;
    }
    
    .m-n3 {
      margin: -1rem !important;
    }
    
    .m-n4 {
      margin: -1.5rem !important;
    }
    
    .m-n5 {
      margin: -3rem !important;
    }
    
    .m-n6 {
      margin: -4rem !important;
    }
    
    .m-n7 {
      margin: -6rem !important;
    }
    
    .m-n8 {
      margin: -8rem !important;
    }
    
    .m-n9 {
      margin: -10rem !important;
    }
    
    .m-n10 {
      margin: -12rem !important;
    }
    
    .m-n11 {
      margin: -14rem !important;
    }
    
    .m-n12 {
      margin: -16rem !important;
    }
    
    .mx-n1 {
      margin-right: -0.25rem !important;
      margin-left: -0.25rem !important;
    }
    
    .mx-n2 {
      margin-right: -0.5rem !important;
      margin-left: -0.5rem !important;
    }
    
    .mx-n3 {
      margin-right: -1rem !important;
      margin-left: -1rem !important;
    }
    
    .mx-n4 {
      margin-right: -1.5rem !important;
      margin-left: -1.5rem !important;
    }
    
    .mx-n5 {
      margin-right: -3rem !important;
      margin-left: -3rem !important;
    }
    
    .mx-n6 {
      margin-right: -4rem !important;
      margin-left: -4rem !important;
    }
    
    .mx-n7 {
      margin-right: -6rem !important;
      margin-left: -6rem !important;
    }
    
    .mx-n8 {
      margin-right: -8rem !important;
      margin-left: -8rem !important;
    }
    
    .mx-n9 {
      margin-right: -10rem !important;
      margin-left: -10rem !important;
    }
    
    .mx-n10 {
      margin-right: -12rem !important;
      margin-left: -12rem !important;
    }
    
    .mx-n11 {
      margin-right: -14rem !important;
      margin-left: -14rem !important;
    }
    
    .mx-n12 {
      margin-right: -16rem !important;
      margin-left: -16rem !important;
    }
    
    .my-n1 {
      margin-top: -0.25rem !important;
      margin-bottom: -0.25rem !important;
    }
    
    .my-n2 {
      margin-top: -0.5rem !important;
      margin-bottom: -0.5rem !important;
    }
    
    .my-n3 {
      margin-top: -1rem !important;
      margin-bottom: -1rem !important;
    }
    
    .my-n4 {
      margin-top: -1.5rem !important;
      margin-bottom: -1.5rem !important;
    }
    
    .my-n5 {
      margin-top: -3rem !important;
      margin-bottom: -3rem !important;
    }
    
    .my-n6 {
      margin-top: -4rem !important;
      margin-bottom: -4rem !important;
    }
    
    .my-n7 {
      margin-top: -6rem !important;
      margin-bottom: -6rem !important;
    }
    
    .my-n8 {
      margin-top: -8rem !important;
      margin-bottom: -8rem !important;
    }
    
    .my-n9 {
      margin-top: -10rem !important;
      margin-bottom: -10rem !important;
    }
    
    .my-n10 {
      margin-top: -12rem !important;
      margin-bottom: -12rem !important;
    }
    
    .my-n11 {
      margin-top: -14rem !important;
      margin-bottom: -14rem !important;
    }
    
    .my-n12 {
      margin-top: -16rem !important;
      margin-bottom: -16rem !important;
    }
    
    .mt-n1 {
      margin-top: -0.25rem !important;
    }
    
    .mt-n2 {
      margin-top: -0.5rem !important;
    }
    
    .mt-n3 {
      margin-top: -1rem !important;
    }
    
    .mt-n4 {
      margin-top: -1.5rem !important;
    }
    
    .mt-n5 {
      margin-top: -3rem !important;
    }
    
    .mt-n6 {
      margin-top: -4rem !important;
    }
    
    .mt-n7 {
      margin-top: -6rem !important;
    }
    
    .mt-n8 {
      margin-top: -8rem !important;
    }
    
    .mt-n9 {
      margin-top: -10rem !important;
    }
    
    .mt-n10 {
      margin-top: -12rem !important;
    }
    
    .mt-n11 {
      margin-top: -14rem !important;
    }
    
    .mt-n12 {
      margin-top: -16rem !important;
    }
    
    .me-n1 {
      margin-right: -0.25rem !important;
    }
    
    .me-n2 {
      margin-right: -0.5rem !important;
    }
    
    .me-n3 {
      margin-right: -1rem !important;
    }
    
    .me-n4 {
      margin-right: -1.5rem !important;
    }
    
    .me-n5 {
      margin-right: -3rem !important;
    }
    
    .me-n6 {
      margin-right: -4rem !important;
    }
    
    .me-n7 {
      margin-right: -6rem !important;
    }
    
    .me-n8 {
      margin-right: -8rem !important;
    }
    
    .me-n9 {
      margin-right: -10rem !important;
    }
    
    .me-n10 {
      margin-right: -12rem !important;
    }
    
    .me-n11 {
      margin-right: -14rem !important;
    }
    
    .me-n12 {
      margin-right: -16rem !important;
    }
    
    .mb-n1 {
      margin-bottom: -0.25rem !important;
    }
    
    .mb-n2 {
      margin-bottom: -0.5rem !important;
    }
    
    .mb-n3 {
      margin-bottom: -1rem !important;
    }
    
    .mb-n4 {
      margin-bottom: -1.5rem !important;
    }
    
    .mb-n5 {
      margin-bottom: -3rem !important;
    }
    
    .mb-n6 {
      margin-bottom: -4rem !important;
    }
    
    .mb-n7 {
      margin-bottom: -6rem !important;
    }
    
    .mb-n8 {
      margin-bottom: -8rem !important;
    }
    
    .mb-n9 {
      margin-bottom: -10rem !important;
    }
    
    .mb-n10 {
      margin-bottom: -12rem !important;
    }
    
    .mb-n11 {
      margin-bottom: -14rem !important;
    }
    
    .mb-n12 {
      margin-bottom: -16rem !important;
    }
    
    .ms-n1 {
      margin-left: -0.25rem !important;
    }
    
    .ms-n2 {
      margin-left: -0.5rem !important;
    }
    
    .ms-n3 {
      margin-left: -1rem !important;
    }
    
    .ms-n4 {
      margin-left: -1.5rem !important;
    }
    
    .ms-n5 {
      margin-left: -3rem !important;
    }
    
    .ms-n6 {
      margin-left: -4rem !important;
    }
    
    .ms-n7 {
      margin-left: -6rem !important;
    }
    
    .ms-n8 {
      margin-left: -8rem !important;
    }
    
    .ms-n9 {
      margin-left: -10rem !important;
    }
    
    .ms-n10 {
      margin-left: -12rem !important;
    }
    
    .ms-n11 {
      margin-left: -14rem !important;
    }
    
    .ms-n12 {
      margin-left: -16rem !important;
    }
    
    .p-0 {
      padding: 0 !important;
    }
    
    .p-1 {
      padding: 0.25rem !important;
    }
    
    .p-2 {
      padding: 0.5rem !important;
    }
    
    .p-3 {
      padding: 1rem !important;
    }
    
    .p-4 {
      padding: 1.5rem !important;
    }
    
    .p-5 {
      padding: 3rem !important;
    }
    
    .p-6 {
      padding: 4rem !important;
    }
    
    .p-7 {
      padding: 6rem !important;
    }
    
    .p-8 {
      padding: 8rem !important;
    }
    
    .p-9 {
      padding: 10rem !important;
    }
    
    .p-10 {
      padding: 12rem !important;
    }
    
    .p-11 {
      padding: 14rem !important;
    }
    
    .p-12 {
      padding: 16rem !important;
    }
    
    .px-0 {
      padding-right: 0 !important;
      padding-left: 0 !important;
    }
    
    .px-1 {
      padding-right: 0.25rem !important;
      padding-left: 0.25rem !important;
    }
    
    .px-2 {
      padding-right: 0.5rem !important;
      padding-left: 0.5rem !important;
    }
    
    .px-3 {
      padding-right: 1rem !important;
      padding-left: 1rem !important;
    }
    
    .px-4 {
      padding-right: 1.5rem !important;
      padding-left: 1.5rem !important;
    }
    
    .px-5 {
      padding-right: 3rem !important;
      padding-left: 3rem !important;
    }
    
    .px-6 {
      padding-right: 4rem !important;
      padding-left: 4rem !important;
    }
    
    .px-7 {
      padding-right: 6rem !important;
      padding-left: 6rem !important;
    }
    
    .px-8 {
      padding-right: 8rem !important;
      padding-left: 8rem !important;
    }
    
    .px-9 {
      padding-right: 10rem !important;
      padding-left: 10rem !important;
    }
    
    .px-10 {
      padding-right: 12rem !important;
      padding-left: 12rem !important;
    }
    
    .px-11 {
      padding-right: 14rem !important;
      padding-left: 14rem !important;
    }
    
    .px-12 {
      padding-right: 16rem !important;
      padding-left: 16rem !important;
    }
    
    .py-0 {
      padding-top: 0 !important;
      padding-bottom: 0 !important;
    }
    
    .py-1 {
      padding-top: 0.25rem !important;
      padding-bottom: 0.25rem !important;
    }
    
    .py-2 {
      padding-top: 0.5rem !important;
      padding-bottom: 0.5rem !important;
    }
    
    .py-3 {
      padding-top: 1rem !important;
      padding-bottom: 1rem !important;
    }
    
    .py-4 {
      padding-top: 1.5rem !important;
      padding-bottom: 1.5rem !important;
    }
    
    .py-5 {
      padding-top: 3rem !important;
      padding-bottom: 3rem !important;
    }
    
    .py-6 {
      padding-top: 4rem !important;
      padding-bottom: 4rem !important;
    }
    
    .py-7 {
      padding-top: 6rem !important;
      padding-bottom: 6rem !important;
    }
    
    .py-8 {
      padding-top: 8rem !important;
      padding-bottom: 8rem !important;
    }
    
    .py-9 {
      padding-top: 10rem !important;
      padding-bottom: 10rem !important;
    }
    
    .py-10 {
      padding-top: 12rem !important;
      padding-bottom: 12rem !important;
    }
    
    .py-11 {
      padding-top: 14rem !important;
      padding-bottom: 14rem !important;
    }
    
    .py-12 {
      padding-top: 16rem !important;
      padding-bottom: 16rem !important;
    }
    
    .pt-0 {
      padding-top: 0 !important;
    }
    
    .pt-1 {
      padding-top: 0.25rem !important;
    }
    
    .pt-2 {
      padding-top: 0.5rem !important;
    }
    
    .pt-3 {
      padding-top: 1rem !important;
    }
    
    .pt-4 {
      padding-top: 1.5rem !important;
    }
    
    .pt-5 {
      padding-top: 3rem !important;
    }
    
    .pt-6 {
      padding-top: 4rem !important;
    }
    
    .pt-7 {
      padding-top: 6rem !important;
    }
    
    .pt-8 {
      padding-top: 8rem !important;
    }
    
    .pt-9 {
      padding-top: 10rem !important;
    }
    
    .pt-10 {
      padding-top: 12rem !important;
    }
    
    .pt-11 {
      padding-top: 14rem !important;
    }
    
    .pt-12 {
      padding-top: 16rem !important;
    }
    
    .pe-0 {
      padding-right: 0 !important;
    }
    
    .pe-1 {
      padding-right: 0.25rem !important;
    }
    
    .pe-2 {
      padding-right: 0.5rem !important;
    }
    
    .pe-3 {
      padding-right: 1rem !important;
    }
    
    .pe-4 {
      padding-right: 1.5rem !important;
    }
    
    .pe-5 {
      padding-right: 3rem !important;
    }
    
    .pe-6 {
      padding-right: 4rem !important;
    }
    
    .pe-7 {
      padding-right: 6rem !important;
    }
    
    .pe-8 {
      padding-right: 8rem !important;
    }
    
    .pe-9 {
      padding-right: 10rem !important;
    }
    
    .pe-10 {
      padding-right: 12rem !important;
    }
    
    .pe-11 {
      padding-right: 14rem !important;
    }
    
    .pe-12 {
      padding-right: 16rem !important;
    }
    
    .pb-0 {
      padding-bottom: 0 !important;
    }
    
    .pb-1 {
      padding-bottom: 0.25rem !important;
    }
    
    .pb-2 {
      padding-bottom: 0.5rem !important;
    }
    
    .pb-3 {
      padding-bottom: 1rem !important;
    }
    
    .pb-4 {
      padding-bottom: 1.5rem !important;
    }
    
    .pb-5 {
      padding-bottom: 3rem !important;
    }
    
    .pb-6 {
      padding-bottom: 4rem !important;
    }
    
    .pb-7 {
      padding-bottom: 6rem !important;
    }
    
    .pb-8 {
      padding-bottom: 8rem !important;
    }
    
    .pb-9 {
      padding-bottom: 10rem !important;
    }
    
    .pb-10 {
      padding-bottom: 12rem !important;
    }
    
    .pb-11 {
      padding-bottom: 14rem !important;
    }
    
    .pb-12 {
      padding-bottom: 16rem !important;
    }
    
    .ps-0 {
      padding-left: 0 !important;
    }
    
    .ps-1 {
      padding-left: 0.25rem !important;
    }
    
    .ps-2 {
      padding-left: 0.5rem !important;
    }
    
    .ps-3 {
      padding-left: 1rem !important;
    }
    
    .ps-4 {
      padding-left: 1.5rem !important;
    }
    
    .ps-5 {
      padding-left: 3rem !important;
    }
    
    .ps-6 {
      padding-left: 4rem !important;
    }
    
    .ps-7 {
      padding-left: 6rem !important;
    }
    
    .ps-8 {
      padding-left: 8rem !important;
    }
    
    .ps-9 {
      padding-left: 10rem !important;
    }
    
    .ps-10 {
      padding-left: 12rem !important;
    }
    
    .ps-11 {
      padding-left: 14rem !important;
    }
    
    .ps-12 {
      padding-left: 16rem !important;
    }
    
    .gap-0 {
      gap: 0 !important;
    }
    
    .gap-1 {
      gap: 0.25rem !important;
    }
    
    .gap-2 {
      gap: 0.5rem !important;
    }
    
    .gap-3 {
      gap: 1rem !important;
    }
    
    .gap-4 {
      gap: 1.5rem !important;
    }
    
    .gap-5 {
      gap: 3rem !important;
    }
    
    .gap-6 {
      gap: 4rem !important;
    }
    
    .gap-7 {
      gap: 6rem !important;
    }
    
    .gap-8 {
      gap: 8rem !important;
    }
    
    .gap-9 {
      gap: 10rem !important;
    }
    
    .gap-10 {
      gap: 12rem !important;
    }
    
    .gap-11 {
      gap: 14rem !important;
    }
    
    .gap-12 {
      gap: 16rem !important;
    }
    
    .row-gap-0 {
      row-gap: 0 !important;
    }
    
    .row-gap-1 {
      row-gap: 0.25rem !important;
    }
    
    .row-gap-2 {
      row-gap: 0.5rem !important;
    }
    
    .row-gap-3 {
      row-gap: 1rem !important;
    }
    
    .row-gap-4 {
      row-gap: 1.5rem !important;
    }
    
    .row-gap-5 {
      row-gap: 3rem !important;
    }
    
    .row-gap-6 {
      row-gap: 4rem !important;
    }
    
    .row-gap-7 {
      row-gap: 6rem !important;
    }
    
    .row-gap-8 {
      row-gap: 8rem !important;
    }
    
    .row-gap-9 {
      row-gap: 10rem !important;
    }
    
    .row-gap-10 {
      row-gap: 12rem !important;
    }
    
    .row-gap-11 {
      row-gap: 14rem !important;
    }
    
    .row-gap-12 {
      row-gap: 16rem !important;
    }
    
    .column-gap-0 {
      column-gap: 0 !important;
    }
    
    .column-gap-1 {
      column-gap: 0.25rem !important;
    }
    
    .column-gap-2 {
      column-gap: 0.5rem !important;
    }
    
    .column-gap-3 {
      column-gap: 1rem !important;
    }
    
    .column-gap-4 {
      column-gap: 1.5rem !important;
    }
    
    .column-gap-5 {
      column-gap: 3rem !important;
    }
    
    .column-gap-6 {
      column-gap: 4rem !important;
    }
    
    .column-gap-7 {
      column-gap: 6rem !important;
    }
    
    .column-gap-8 {
      column-gap: 8rem !important;
    }
    
    .column-gap-9 {
      column-gap: 10rem !important;
    }
    
    .column-gap-10 {
      column-gap: 12rem !important;
    }
    
    .column-gap-11 {
      column-gap: 14rem !important;
    }
    
    .column-gap-12 {
      column-gap: 16rem !important;
    }
    
    .font-monospace {
      font-family: var(--bs-font-monospace) !important;
    }
    
    .fs-1 {
      font-size: calc(1.425rem + 2.1vw) !important;
    }
    
    .fs-2 {
      font-size: calc(1.35rem + 1.2vw) !important;
    }
    
    .fs-3 {
      font-size: calc(1.3125rem + 0.75vw) !important;
    }
    
    .fs-4 {
      font-size: calc(1.275rem + 0.3vw) !important;
    }
    
    .fs-5 {
      font-size: 1.25rem !important;
    }
    
    .fs-6 {
      font-size: 1rem !important;
    }
    
    .fst-italic {
      font-style: italic !important;
    }
    
    .fst-normal {
      font-style: normal !important;
    }
    
    .fw-light {
      font-weight: 300 !important;
    }
    
    .fw-lighter {
      font-weight: lighter !important;
    }
    
    .fw-normal {
      font-weight: 400 !important;
    }
    
    .fw-bold {
      font-weight: 600 !important;
    }
    
    .fw-bolder {
      font-weight: 700 !important;
    }
    
    .lh-1 {
      line-height: 1 !important;
    }
    
    .lh-sm {
      line-height: 1.25 !important;
    }
    
    .lh-base {
      line-height: 1.5 !important;
    }
    
    .lh-lg {
      line-height: 2 !important;
    }
    
    .text-start {
      text-align: left !important;
    }
    
    .text-end {
      text-align: right !important;
    }
    
    .text-center {
      text-align: center !important;
    }
    
    .text-decoration-none {
      text-decoration: none !important;
    }
    
    .text-decoration-underline {
      text-decoration: underline !important;
    }
    
    .text-decoration-line-through {
      text-decoration: line-through !important;
    }
    
    .text-lowercase {
      text-transform: lowercase !important;
    }
    
    .text-uppercase {
      text-transform: uppercase !important;
    }
    
    .text-capitalize {
      text-transform: capitalize !important;
    }
    
    .text-wrap {
      white-space: normal !important;
    }
    
    .text-nowrap {
      white-space: nowrap !important;
    }
    
    /* rtl:begin:remove */
    .text-break {
      word-wrap: break-word !important;
      word-break: break-word !important;
    }
    
    /* rtl:end:remove */
    .text-primary {
      color: #e91e63 !important;
    }
    
    .text-secondary {
      color: #737373 !important;
    }
    
    .text-success {
      color: #4CAF50 !important;
    }
    
    .text-info {
      color: #1A73E8 !important;
    }
    
    .text-warning {
      color: #fb8c00 !important;
    }
    
    .text-danger {
      color: #F44335 !important;
    }
    
    .text-light {
      color: #e5e5e5 !important;
    }
    
    .text-dark {
      color: #262626 !important;
    }
    
    .text-white {
      color: #fff !important;
    }
    
    .text-dark-blue {
      color: #1A237E !important;
    }
    
    .text-body {
      color: #737373 !important;
    }
    
    .text-rose {
      color: #e91e63 !important;
    }
    
    .text-muted {
      color: #525252 !important;
    }
    
    .text-black-50 {
      color: rgba(10, 10, 10, 0.5) !important;
    }
    
    .text-white-50 {
      color: rgba(255, 255, 255, 0.5) !important;
    }
    
    .text-reset {
      color: inherit !important;
    }
    
    .text-opacity-25 {
      --bs-text-opacity: 0.25;
    }
    
    .text-opacity-50 {
      --bs-text-opacity: 0.5;
    }
    
    .text-opacity-75 {
      --bs-text-opacity: 0.75;
    }
    
    .text-opacity-100 {
      --bs-text-opacity: 1;
    }
    
    .text-primary-emphasis {
      color: var(--bs-primary-text-emphasis) !important;
    }
    
    .text-secondary-emphasis {
      color: var(--bs-secondary-text-emphasis) !important;
    }
    
    .text-success-emphasis {
      color: var(--bs-success-text-emphasis) !important;
    }
    
    .text-info-emphasis {
      color: var(--bs-info-text-emphasis) !important;
    }
    
    .text-warning-emphasis {
      color: var(--bs-warning-text-emphasis) !important;
    }
    
    .text-danger-emphasis {
      color: var(--bs-danger-text-emphasis) !important;
    }
    
    .text-light-emphasis {
      color: var(--bs-light-text-emphasis) !important;
    }
    
    .text-dark-emphasis {
      color: var(--bs-dark-text-emphasis) !important;
    }
    
    .link-opacity-10 {
      --bs-link-opacity: 0.1;
    }
    
    .link-opacity-10-hover:hover {
      --bs-link-opacity: 0.1;
    }
    
    .link-opacity-25 {
      --bs-link-opacity: 0.25;
    }
    
    .link-opacity-25-hover:hover {
      --bs-link-opacity: 0.25;
    }
    
    .link-opacity-50 {
      --bs-link-opacity: 0.5;
    }
    
    .link-opacity-50-hover:hover {
      --bs-link-opacity: 0.5;
    }
    
    .link-opacity-75 {
      --bs-link-opacity: 0.75;
    }
    
    .link-opacity-75-hover:hover {
      --bs-link-opacity: 0.75;
    }
    
    .link-opacity-100 {
      --bs-link-opacity: 1;
    }
    
    .link-opacity-100-hover:hover {
      --bs-link-opacity: 1;
    }
    
    .link-offset-1 {
      text-underline-offset: 0.125em !important;
    }
    
    .link-offset-1-hover:hover {
      text-underline-offset: 0.125em !important;
    }
    
    .link-offset-2 {
      text-underline-offset: 0.25em !important;
    }
    
    .link-offset-2-hover:hover {
      text-underline-offset: 0.25em !important;
    }
    
    .link-offset-3 {
      text-underline-offset: 0.375em !important;
    }
    
    .link-offset-3-hover:hover {
      text-underline-offset: 0.375em !important;
    }
    
    .link-underline-primary {
      --bs-link-underline-opacity: 1;
      text-decoration-color: rgba(var(--bs-primary-rgb), var(--bs-link-underline-opacity)) !important;
    }
    
    .link-underline-secondary {
      --bs-link-underline-opacity: 1;
      text-decoration-color: rgba(var(--bs-secondary-rgb), var(--bs-link-underline-opacity)) !important;
    }
    
    .link-underline-success {
      --bs-link-underline-opacity: 1;
      text-decoration-color: rgba(var(--bs-success-rgb), var(--bs-link-underline-opacity)) !important;
    }
    
    .link-underline-info {
      --bs-link-underline-opacity: 1;
      text-decoration-color: rgba(var(--bs-info-rgb), var(--bs-link-underline-opacity)) !important;
    }
    
    .link-underline-warning {
      --bs-link-underline-opacity: 1;
      text-decoration-color: rgba(var(--bs-warning-rgb), var(--bs-link-underline-opacity)) !important;
    }
    
    .link-underline-danger {
      --bs-link-underline-opacity: 1;
      text-decoration-color: rgba(var(--bs-danger-rgb), var(--bs-link-underline-opacity)) !important;
    }
    
    .link-underline-light {
      --bs-link-underline-opacity: 1;
      text-decoration-color: rgba(var(--bs-light-rgb), var(--bs-link-underline-opacity)) !important;
    }
    
    .link-underline-dark {
      --bs-link-underline-opacity: 1;
      text-decoration-color: rgba(var(--bs-dark-rgb), var(--bs-link-underline-opacity)) !important;
    }
    
    .link-underline-white {
      --bs-link-underline-opacity: 1;
      text-decoration-color: rgba(var(--bs-white-rgb), var(--bs-link-underline-opacity)) !important;
    }
    
    .link-underline-dark-blue {
      --bs-link-underline-opacity: 1;
      text-decoration-color: rgba(var(--bs-dark-blue-rgb), var(--bs-link-underline-opacity)) !important;
    }
    
    .link-underline {
      --bs-link-underline-opacity: 1;
      text-decoration-color: rgba(var(--bs-link-color-rgb), var(--bs-link-underline-opacity, 1)) !important;
    }
    
    .link-underline-opacity-0 {
      --bs-link-underline-opacity: 0;
    }
    
    .link-underline-opacity-0-hover:hover {
      --bs-link-underline-opacity: 0;
    }
    
    .link-underline-opacity-10 {
      --bs-link-underline-opacity: 0.1;
    }
    
    .link-underline-opacity-10-hover:hover {
      --bs-link-underline-opacity: 0.1;
    }
    
    .link-underline-opacity-25 {
      --bs-link-underline-opacity: 0.25;
    }
    
    .link-underline-opacity-25-hover:hover {
      --bs-link-underline-opacity: 0.25;
    }
    
    .link-underline-opacity-50 {
      --bs-link-underline-opacity: 0.5;
    }
    
    .link-underline-opacity-50-hover:hover {
      --bs-link-underline-opacity: 0.5;
    }
    
    .link-underline-opacity-75 {
      --bs-link-underline-opacity: 0.75;
    }
    
    .link-underline-opacity-75-hover:hover {
      --bs-link-underline-opacity: 0.75;
    }
    
    .link-underline-opacity-100 {
      --bs-link-underline-opacity: 1;
    }
    
    .link-underline-opacity-100-hover:hover {
      --bs-link-underline-opacity: 1;
    }
    
    .bg-primary {
      background-color: #e91e63 !important;
    }
    
    .bg-secondary {
      background-color: #737373 !important;
    }
    
    .bg-success {
      background-color: #4CAF50 !important;
    }
    
    .bg-info {
      background-color: #1A73E8 !important;
    }
    
    .bg-warning {
      background-color: #fb8c00 !important;
    }
    
    .bg-danger {
      background-color: #F44335 !important;
    }
    
    .bg-light {
      background-color: #e5e5e5 !important;
    }
    
    .bg-dark {
      background-color: #262626 !important;
    }
    
    .bg-white {
      background-color: #fff !important;
    }
    
    .bg-dark-blue {
      background-color: #1A237E !important;
    }
    
    .bg-body {
      background-color: #fff !important;
    }
    
    .bg-transparent {
      background-color: transparent !important;
    }
    
    .bg-gray-100 {
      background-color: #f5f5f5 !important;
    }
    
    .bg-gray-200 {
      background-color: #e5e5e5 !important;
    }
    
    .bg-gray-300 {
      background-color: #d4d4d4 !important;
    }
    
    .bg-gray-400 {
      background-color: #a3a3a3 !important;
    }
    
    .bg-gray-500 {
      background-color: #737373 !important;
    }
    
    .bg-gray-600 {
      background-color: #525252 !important;
    }
    
    .bg-gray-700 {
      background-color: #404040 !important;
    }
    
    .bg-gray-800 {
      background-color: #262626 !important;
    }
    
    .bg-gray-900 {
      background-color: #171717 !important;
    }
    
    .bg-opacity-10 {
      --bs-bg-opacity: 0.1;
    }
    
    .bg-opacity-25 {
      --bs-bg-opacity: 0.25;
    }
    
    .bg-opacity-50 {
      --bs-bg-opacity: 0.5;
    }
    
    .bg-opacity-75 {
      --bs-bg-opacity: 0.75;
    }
    
    .bg-opacity-100 {
      --bs-bg-opacity: 1;
    }
    
    .bg-primary-subtle {
      background-color: var(--bs-primary-bg-subtle) !important;
    }
    
    .bg-secondary-subtle {
      background-color: var(--bs-secondary-bg-subtle) !important;
    }
    
    .bg-success-subtle {
      background-color: var(--bs-success-bg-subtle) !important;
    }
    
    .bg-info-subtle {
      background-color: var(--bs-info-bg-subtle) !important;
    }
    
    .bg-warning-subtle {
      background-color: var(--bs-warning-bg-subtle) !important;
    }
    
    .bg-danger-subtle {
      background-color: var(--bs-danger-bg-subtle) !important;
    }
    
    .bg-light-subtle {
      background-color: var(--bs-light-bg-subtle) !important;
    }
    
    .bg-dark-subtle {
      background-color: var(--bs-dark-bg-subtle) !important;
    }
    
    .bg-gradient {
      background-image: var(--bs-gradient) !important;
    }
    
    .user-select-all {
      user-select: all !important;
    }
    
    .user-select-auto {
      user-select: auto !important;
    }
    
    .user-select-none {
      user-select: none !important;
    }
    
    .pe-none {
      pointer-events: none !important;
    }
    
    .pe-auto {
      pointer-events: auto !important;
    }
    
    .rounded {
      border-radius: 0.375rem !important;
    }
    
    .rounded-0 {
      border-radius: 0 !important;
    }
    
    .rounded-1 {
      border-radius: 0.125rem !important;
    }
    
    .rounded-2 {
      border-radius: 0.375rem !important;
    }
    
    .rounded-3 {
      border-radius: 0.5rem !important;
    }
    
    .rounded-circle,
    .avatar.rounded-circle img {
      border-radius: 50% !important;
    }
    
    .rounded-pill {
      border-radius: 50rem !important;
    }
    
    .rounded-top {
      border-top-left-radius: 0.375rem !important;
      border-top-right-radius: 0.375rem !important;
    }
    
    .rounded-end {
      border-top-right-radius: 0.375rem !important;
      border-bottom-right-radius: 0.375rem !important;
    }
    
    .rounded-bottom {
      border-bottom-right-radius: 0.375rem !important;
      border-bottom-left-radius: 0.375rem !important;
    }
    
    .rounded-start {
      border-bottom-left-radius: 0.375rem !important;
      border-top-left-radius: 0.375rem !important;
    }
    
    .visible {
      visibility: visible !important;
    }
    
    .invisible {
      visibility: hidden !important;
    }
    
    .z-index-0 {
      z-index: 0 !important;
    }
    
    .z-index-1 {
      z-index: 1 !important;
    }
    
    .z-index-2 {
      z-index: 2 !important;
    }
    
    .z-index-3 {
      z-index: 3 !important;
    }
    
    .shadow-primary {
      box-shadow: 0 4px 20px 0 rgba(0, 0, 0, 0.14), 0 7px 10px -5px rgba(233, 30, 99, 0.4) !important;
    }
    
    .shadow-secondary {
      box-shadow: 0 4px 20px 0 rgba(0, 0, 0, 0.14), 0 7px 10px -5px rgba(210, 210, 210, 0.4) !important;
    }
    
    .shadow-info {
      box-shadow: 0 4px 20px 0 rgba(0, 0, 0, 0.14), 0 7px 10px -5px rgba(0, 188, 212, 0.4) !important;
    }
    
    .shadow-warning {
      box-shadow: 0 4px 20px 0 rgba(0, 0, 0, 0.14), 0 7px 10px -5px rgba(255, 152, 0, 0.4) !important;
    }
    
    .shadow-success {
      box-shadow: 0 4px 20px 0 rgba(0, 0, 0, 0.14), 0 7px 10px -5px rgba(76, 175, 80, 0.4) !important;
    }
    
    .shadow-danger {
      box-shadow: 0 4px 20px 0 rgba(0, 0, 0, 0.14), 0 7px 10px -5px rgba(244, 67, 54, 0.4) !important;
    }
    
    .shadow-dark {
      box-shadow: 0 4px 20px 0 rgba(0, 0, 0, 0.14), 0 7px 10px -5px rgba(64, 64, 64, 0.4) !important;
    }
    
    .shadow-light {
      box-shadow: 0 4px 20px 0 rgba(0, 0, 0, 0.14), 0 7px 10px -5px rgba(233, 30, 99, 0.4) !important;
    }
    
    .transform-scale-5 {
      transform: scale(0.5) !important;
    }
    
    .transform-scale-6 {
      transform: scale(0.6) !important;
    }
    
    .transform-scale-7 {
      transform: scale(0.7) !important;
    }
    
    .transform-scale-8 {
      transform: scale(0.8) !important;
    }
    
    .transform-scale-9 {
      transform: scale(0.9) !important;
    }
    
    .transform-scale-10 {
      transform: scale(1) !important;
    }
    
    .letter-spacing-1 {
      letter-spacing: 1px !important;
    }
    
    .letter-spacing-2 {
      letter-spacing: 2px !important;
    }
    
    .letter-spacing-3 {
      letter-spacing: 3px !important;
    }
    
    .letter-spacing-4 {
      letter-spacing: 4px !important;
    }
    
    .letter-spacing-5 {
      letter-spacing: 5px !important;
    }
    
    .border-radius-top-start {
      border-top-left-radius: 0.375rem !important;
    }
    
    .border-radius-top-start-0 {
      border-top-left-radius: 0 !important;
    }
    
    .border-radius-top-start-sm {
      border-top-left-radius: 0.125rem !important;
    }
    
    .border-radius-top-start-md {
      border-top-left-radius: 0.375rem !important;
    }
    
    .border-radius-top-start-lg {
      border-top-left-radius: 0.5rem !important;
    }
    
    .border-radius-top-start-xl {
      border-top-left-radius: 0.75rem !important;
    }
    
    .border-radius-top-start-2xl {
      border-top-left-radius: 1rem !important;
    }
    
    .border-radius-top-start-circle {
      border-top-left-radius: 50% !important;
    }
    
    .border-radius-top-start-pill {
      border-top-left-radius: 50rem !important;
    }
    
    .border-radius-top-end {
      border-top-right-radius: 0.375rem !important;
    }
    
    .border-radius-top-end-0 {
      border-top-right-radius: 0 !important;
    }
    
    .border-radius-top-end-sm {
      border-top-right-radius: 0.125rem !important;
    }
    
    .border-radius-top-end-md {
      border-top-right-radius: 0.375rem !important;
    }
    
    .border-radius-top-end-lg {
      border-top-right-radius: 0.5rem !important;
    }
    
    .border-radius-top-end-xl {
      border-top-right-radius: 0.75rem !important;
    }
    
    .border-radius-top-end-2xl {
      border-top-right-radius: 1rem !important;
    }
    
    .border-radius-top-end-circle {
      border-top-right-radius: 50% !important;
    }
    
    .border-radius-top-end-pill {
      border-top-right-radius: 50rem !important;
    }
    
    .border-radius-bottom-start {
      border-bottom-left-radius: 0.375rem !important;
    }
    
    .border-radius-bottom-start-0 {
      border-bottom-left-radius: 0 !important;
    }
    
    .border-radius-bottom-start-sm {
      border-bottom-left-radius: 0.125rem !important;
    }
    
    .border-radius-bottom-start-md {
      border-bottom-left-radius: 0.375rem !important;
    }
    
    .border-radius-bottom-start-lg {
      border-bottom-left-radius: 0.5rem !important;
    }
    
    .border-radius-bottom-start-xl {
      border-bottom-left-radius: 0.75rem !important;
    }
    
    .border-radius-bottom-start-2xl {
      border-bottom-left-radius: 1rem !important;
    }
    
    .border-radius-bottom-start-circle {
      border-bottom-left-radius: 50% !important;
    }
    
    .border-radius-bottom-start-pill {
      border-bottom-left-radius: 50rem !important;
    }
    
    .border-radius-bottom-end {
      border-bottom-right-radius: 0.375rem !important;
    }
    
    .border-radius-bottom-end-0 {
      border-bottom-right-radius: 0 !important;
    }
    
    .border-radius-bottom-end-sm {
      border-bottom-right-radius: 0.125rem !important;
    }
    
    .border-radius-bottom-end-md {
      border-bottom-right-radius: 0.375rem !important;
    }
    
    .border-radius-bottom-end-lg {
      border-bottom-right-radius: 0.5rem !important;
    }
    
    .border-radius-bottom-end-xl {
      border-bottom-right-radius: 0.75rem !important;
    }
    
    .border-radius-bottom-end-2xl {
      border-bottom-right-radius: 1rem !important;
    }
    
    .border-radius-bottom-end-circle {
      border-bottom-right-radius: 50% !important;
    }
    
    .border-radius-bottom-end-pill {
      border-bottom-right-radius: 50rem !important;
    }
    
    .max-height-100 {
      max-height: 100px !important;
    }
    
    .max-height-130 {
      max-height: 130px !important;
    }
    
    .max-height-140 {
      max-height: 140px !important;
    }
    
    .max-height-150 {
      max-height: 150px !important;
    }
    
    .max-height-160 {
      max-height: 160px !important;
    }
    
    .max-height-200 {
      max-height: 200px !important;
    }
    
    .max-height-250 {
      max-height: 250px !important;
    }
    
    .max-height-300 {
      max-height: 300px !important;
    }
    
    .max-height-400 {
      max-height: 400px !important;
    }
    
    .max-height-500 {
      max-height: 500px !important;
    }
    
    .max-height-600 {
      max-height: 600px !important;
    }
    
    .max-height-vh-10 {
      max-height: 10vh !important;
    }
    
    .max-height-vh-20 {
      max-height: 20vh !important;
    }
    
    .max-height-vh-30 {
      max-height: 30vh !important;
    }
    
    .max-height-vh-40 {
      max-height: 40vh !important;
    }
    
    .max-height-vh-50 {
      max-height: 50vh !important;
    }
    
    .max-height-vh-60 {
      max-height: 60vh !important;
    }
    
    .max-height-vh-70 {
      max-height: 70vh !important;
    }
    
    .max-height-vh-80 {
      max-height: 80vh !important;
    }
    
    .max-height-vh-90 {
      max-height: 90vh !important;
    }
    
    .max-height-vh-100 {
      max-height: 100vh !important;
    }
    
    .min-height-100 {
      min-height: 100px !important;
    }
    
    .min-height-130 {
      min-height: 130px !important;
    }
    
    .min-height-140 {
      min-height: 140px !important;
    }
    
    .min-height-150 {
      min-height: 150px !important;
    }
    
    .min-height-160 {
      min-height: 160px !important;
    }
    
    .min-height-200 {
      min-height: 200px !important;
    }
    
    .min-height-250 {
      min-height: 250px !important;
    }
    
    .min-height-300 {
      min-height: 300px !important;
    }
    
    .min-height-400 {
      min-height: 400px !important;
    }
    
    .min-height-500 {
      min-height: 500px !important;
    }
    
    .min-height-600 {
      min-height: 600px !important;
    }
    
    .height-100 {
      height: 100px !important;
    }
    
    .height-200 {
      height: 200px !important;
    }
    
    .height-300 {
      height: 300px !important;
    }
    
    .height-400 {
      height: 400px !important;
    }
    
    .height-500 {
      height: 500px !important;
    }
    
    .height-600 {
      height: 600px !important;
    }
    
    .max-width-100 {
      max-width: 100px !important;
    }
    
    .max-width-200 {
      max-width: 200px !important;
    }
    
    .max-width-300 {
      max-width: 300px !important;
    }
    
    .max-width-400 {
      max-width: 400px !important;
    }
    
    .max-width-500 {
      max-width: 500px !important;
    }
    
    @media (min-width: 576px) {
      .float-sm-start {
        float: left !important;
      }
    
      .float-sm-end {
        float: right !important;
      }
    
      .float-sm-none {
        float: none !important;
      }
    
      .object-fit-sm-contain {
        object-fit: contain !important;
      }
    
      .object-fit-sm-cover {
        object-fit: cover !important;
      }
    
      .object-fit-sm-fill {
        object-fit: fill !important;
      }
    
      .object-fit-sm-scale {
        object-fit: scale-down !important;
      }
    
      .object-fit-sm-none {
        object-fit: none !important;
      }
    
      .d-sm-inline {
        display: inline !important;
      }
    
      .d-sm-inline-block {
        display: inline-block !important;
      }
    
      .d-sm-block {
        display: block !important;
      }
    
      .d-sm-grid {
        display: grid !important;
      }
    
      .d-sm-table {
        display: table !important;
      }
    
      .d-sm-table-row {
        display: table-row !important;
      }
    
      .d-sm-table-cell {
        display: table-cell !important;
      }
    
      .d-sm-flex {
        display: flex !important;
      }
    
      .d-sm-inline-flex {
        display: inline-flex !important;
      }
    
      .d-sm-none {
        display: none !important;
      }
    
      .border-top-sm {
        border-top: 1px solid #d4d4d4 !important;
      }
    
      .border-top-sm-0 {
        border-top: 0 !important;
      }
    
      .border-end-sm {
        border-right: 1px solid #d4d4d4 !important;
      }
    
      .border-end-sm-0 {
        border-right: 0 !important;
      }
    
      .border-bottom-sm {
        border-bottom: 1px solid #d4d4d4 !important;
      }
    
      .border-bottom-sm-0 {
        border-bottom: 0 !important;
      }
    
      .border-start-sm {
        border-left: 1px solid #d4d4d4 !important;
      }
    
      .border-start-sm-0 {
        border-left: 0 !important;
      }
    
      .w-sm-0 {
        width: 0% !important;
      }
    
      .w-sm-1 {
        width: 1% !important;
      }
    
      .w-sm-2 {
        width: 2% !important;
      }
    
      .w-sm-3 {
        width: 3% !important;
      }
    
      .w-sm-4 {
        width: 4% !important;
      }
    
      .w-sm-5 {
        width: 5% !important;
      }
    
      .w-sm-6 {
        width: 6% !important;
      }
    
      .w-sm-7 {
        width: 7% !important;
      }
    
      .w-sm-8 {
        width: 8% !important;
      }
    
      .w-sm-9 {
        width: 9% !important;
      }
    
      .w-sm-10 {
        width: 10% !important;
      }
    
      .w-sm-15 {
        width: 15% !important;
      }
    
      .w-sm-20 {
        width: 20% !important;
      }
    
      .w-sm-25 {
        width: 25% !important;
      }
    
      .w-sm-30 {
        width: 30% !important;
      }
    
      .w-sm-35 {
        width: 35% !important;
      }
    
      .w-sm-40 {
        width: 40% !important;
      }
    
      .w-sm-45 {
        width: 45% !important;
      }
    
      .w-sm-50 {
        width: 50% !important;
      }
    
      .w-sm-55 {
        width: 55% !important;
      }
    
      .w-sm-60 {
        width: 60% !important;
      }
    
      .w-sm-65 {
        width: 65% !important;
      }
    
      .w-sm-70 {
        width: 70% !important;
      }
    
      .w-sm-75 {
        width: 75% !important;
      }
    
      .w-sm-80 {
        width: 80% !important;
      }
    
      .w-sm-85 {
        width: 85% !important;
      }
    
      .w-sm-90 {
        width: 90% !important;
      }
    
      .w-sm-95 {
        width: 95% !important;
      }
    
      .w-sm-100 {
        width: 100% !important;
      }
    
      .w-sm-auto {
        width: auto !important;
      }
    
      .flex-sm-fill {
        flex: 1 1 auto !important;
      }
    
      .flex-sm-row {
        flex-direction: row !important;
      }
    
      .flex-sm-column {
        flex-direction: column !important;
      }
    
      .flex-sm-row-reverse {
        flex-direction: row-reverse !important;
      }
    
      .flex-sm-column-reverse {
        flex-direction: column-reverse !important;
      }
    
      .flex-sm-grow-0 {
        flex-grow: 0 !important;
      }
    
      .flex-sm-grow-1 {
        flex-grow: 1 !important;
      }
    
      .flex-sm-shrink-0 {
        flex-shrink: 0 !important;
      }
    
      .flex-sm-shrink-1 {
        flex-shrink: 1 !important;
      }
    
      .flex-sm-wrap {
        flex-wrap: wrap !important;
      }
    
      .flex-sm-nowrap {
        flex-wrap: nowrap !important;
      }
    
      .flex-sm-wrap-reverse {
        flex-wrap: wrap-reverse !important;
      }
    
      .justify-content-sm-start {
        justify-content: flex-start !important;
      }
    
      .justify-content-sm-end {
        justify-content: flex-end !important;
      }
    
      .justify-content-sm-center {
        justify-content: center !important;
      }
    
      .justify-content-sm-between {
        justify-content: space-between !important;
      }
    
      .justify-content-sm-around {
        justify-content: space-around !important;
      }
    
      .justify-content-sm-evenly {
        justify-content: space-evenly !important;
      }
    
      .align-items-sm-start {
        align-items: flex-start !important;
      }
    
      .align-items-sm-end {
        align-items: flex-end !important;
      }
    
      .align-items-sm-center {
        align-items: center !important;
      }
    
      .align-items-sm-baseline {
        align-items: baseline !important;
      }
    
      .align-items-sm-stretch {
        align-items: stretch !important;
      }
    
      .align-content-sm-start {
        align-content: flex-start !important;
      }
    
      .align-content-sm-end {
        align-content: flex-end !important;
      }
    
      .align-content-sm-center {
        align-content: center !important;
      }
    
      .align-content-sm-between {
        align-content: space-between !important;
      }
    
      .align-content-sm-around {
        align-content: space-around !important;
      }
    
      .align-content-sm-stretch {
        align-content: stretch !important;
      }
    
      .align-self-sm-auto {
        align-self: auto !important;
      }
    
      .align-self-sm-start {
        align-self: flex-start !important;
      }
    
      .align-self-sm-end {
        align-self: flex-end !important;
      }
    
      .align-self-sm-center {
        align-self: center !important;
      }
    
      .align-self-sm-baseline {
        align-self: baseline !important;
      }
    
      .align-self-sm-stretch {
        align-self: stretch !important;
      }
    
      .order-sm-first {
        order: -1 !important;
      }
    
      .order-sm-0 {
        order: 0 !important;
      }
    
      .order-sm-1 {
        order: 1 !important;
      }
    
      .order-sm-2 {
        order: 2 !important;
      }
    
      .order-sm-3 {
        order: 3 !important;
      }
    
      .order-sm-4 {
        order: 4 !important;
      }
    
      .order-sm-5 {
        order: 5 !important;
      }
    
      .order-sm-last {
        order: 6 !important;
      }
    
      .m-sm-0 {
        margin: 0 !important;
      }
    
      .m-sm-1 {
        margin: 0.25rem !important;
      }
    
      .m-sm-2 {
        margin: 0.5rem !important;
      }
    
      .m-sm-3 {
        margin: 1rem !important;
      }
    
      .m-sm-4 {
        margin: 1.5rem !important;
      }
    
      .m-sm-5 {
        margin: 3rem !important;
      }
    
      .m-sm-6 {
        margin: 4rem !important;
      }
    
      .m-sm-7 {
        margin: 6rem !important;
      }
    
      .m-sm-8 {
        margin: 8rem !important;
      }
    
      .m-sm-9 {
        margin: 10rem !important;
      }
    
      .m-sm-10 {
        margin: 12rem !important;
      }
    
      .m-sm-11 {
        margin: 14rem !important;
      }
    
      .m-sm-12 {
        margin: 16rem !important;
      }
    
      .m-sm-auto {
        margin: auto !important;
      }
    
      .mx-sm-0 {
        margin-right: 0 !important;
        margin-left: 0 !important;
      }
    
      .mx-sm-1 {
        margin-right: 0.25rem !important;
        margin-left: 0.25rem !important;
      }
    
      .mx-sm-2 {
        margin-right: 0.5rem !important;
        margin-left: 0.5rem !important;
      }
    
      .mx-sm-3 {
        margin-right: 1rem !important;
        margin-left: 1rem !important;
      }
    
      .mx-sm-4 {
        margin-right: 1.5rem !important;
        margin-left: 1.5rem !important;
      }
    
      .mx-sm-5 {
        margin-right: 3rem !important;
        margin-left: 3rem !important;
      }
    
      .mx-sm-6 {
        margin-right: 4rem !important;
        margin-left: 4rem !important;
      }
    
      .mx-sm-7 {
        margin-right: 6rem !important;
        margin-left: 6rem !important;
      }
    
      .mx-sm-8 {
        margin-right: 8rem !important;
        margin-left: 8rem !important;
      }
    
      .mx-sm-9 {
        margin-right: 10rem !important;
        margin-left: 10rem !important;
      }
    
      .mx-sm-10 {
        margin-right: 12rem !important;
        margin-left: 12rem !important;
      }
    
      .mx-sm-11 {
        margin-right: 14rem !important;
        margin-left: 14rem !important;
      }
    
      .mx-sm-12 {
        margin-right: 16rem !important;
        margin-left: 16rem !important;
      }
    
      .mx-sm-auto {
        margin-right: auto !important;
        margin-left: auto !important;
      }
    
      .my-sm-0 {
        margin-top: 0 !important;
        margin-bottom: 0 !important;
      }
    
      .my-sm-1 {
        margin-top: 0.25rem !important;
        margin-bottom: 0.25rem !important;
      }
    
      .my-sm-2 {
        margin-top: 0.5rem !important;
        margin-bottom: 0.5rem !important;
      }
    
      .my-sm-3 {
        margin-top: 1rem !important;
        margin-bottom: 1rem !important;
      }
    
      .my-sm-4 {
        margin-top: 1.5rem !important;
        margin-bottom: 1.5rem !important;
      }
    
      .my-sm-5 {
        margin-top: 3rem !important;
        margin-bottom: 3rem !important;
      }
    
      .my-sm-6 {
        margin-top: 4rem !important;
        margin-bottom: 4rem !important;
      }
    
      .my-sm-7 {
        margin-top: 6rem !important;
        margin-bottom: 6rem !important;
      }
    
      .my-sm-8 {
        margin-top: 8rem !important;
        margin-bottom: 8rem !important;
      }
    
      .my-sm-9 {
        margin-top: 10rem !important;
        margin-bottom: 10rem !important;
      }
    
      .my-sm-10 {
        margin-top: 12rem !important;
        margin-bottom: 12rem !important;
      }
    
      .my-sm-11 {
        margin-top: 14rem !important;
        margin-bottom: 14rem !important;
      }
    
      .my-sm-12 {
        margin-top: 16rem !important;
        margin-bottom: 16rem !important;
      }
    
      .my-sm-auto {
        margin-top: auto !important;
        margin-bottom: auto !important;
      }
    
      .mt-sm-0 {
        margin-top: 0 !important;
      }
    
      .mt-sm-1 {
        margin-top: 0.25rem !important;
      }
    
      .mt-sm-2 {
        margin-top: 0.5rem !important;
      }
    
      .mt-sm-3 {
        margin-top: 1rem !important;
      }
    
      .mt-sm-4 {
        margin-top: 1.5rem !important;
      }
    
      .mt-sm-5 {
        margin-top: 3rem !important;
      }
    
      .mt-sm-6 {
        margin-top: 4rem !important;
      }
    
      .mt-sm-7 {
        margin-top: 6rem !important;
      }
    
      .mt-sm-8 {
        margin-top: 8rem !important;
      }
    
      .mt-sm-9 {
        margin-top: 10rem !important;
      }
    
      .mt-sm-10 {
        margin-top: 12rem !important;
      }
    
      .mt-sm-11 {
        margin-top: 14rem !important;
      }
    
      .mt-sm-12 {
        margin-top: 16rem !important;
      }
    
      .mt-sm-auto {
        margin-top: auto !important;
      }
    
      .me-sm-0 {
        margin-right: 0 !important;
      }
    
      .me-sm-1 {
        margin-right: 0.25rem !important;
      }
    
      .me-sm-2 {
        margin-right: 0.5rem !important;
      }
    
      .me-sm-3 {
        margin-right: 1rem !important;
      }
    
      .me-sm-4 {
        margin-right: 1.5rem !important;
      }
    
      .me-sm-5 {
        margin-right: 3rem !important;
      }
    
      .me-sm-6 {
        margin-right: 4rem !important;
      }
    
      .me-sm-7 {
        margin-right: 6rem !important;
      }
    
      .me-sm-8 {
        margin-right: 8rem !important;
      }
    
      .me-sm-9 {
        margin-right: 10rem !important;
      }
    
      .me-sm-10 {
        margin-right: 12rem !important;
      }
    
      .me-sm-11 {
        margin-right: 14rem !important;
      }
    
      .me-sm-12 {
        margin-right: 16rem !important;
      }
    
      .me-sm-auto {
        margin-right: auto !important;
      }
    
      .mb-sm-0 {
        margin-bottom: 0 !important;
      }
    
      .mb-sm-1 {
        margin-bottom: 0.25rem !important;
      }
    
      .mb-sm-2 {
        margin-bottom: 0.5rem !important;
      }
    
      .mb-sm-3 {
        margin-bottom: 1rem !important;
      }
    
      .mb-sm-4 {
        margin-bottom: 1.5rem !important;
      }
    
      .mb-sm-5 {
        margin-bottom: 3rem !important;
      }
    
      .mb-sm-6 {
        margin-bottom: 4rem !important;
      }
    
      .mb-sm-7 {
        margin-bottom: 6rem !important;
      }
    
      .mb-sm-8 {
        margin-bottom: 8rem !important;
      }
    
      .mb-sm-9 {
        margin-bottom: 10rem !important;
      }
    
      .mb-sm-10 {
        margin-bottom: 12rem !important;
      }
    
      .mb-sm-11 {
        margin-bottom: 14rem !important;
      }
    
      .mb-sm-12 {
        margin-bottom: 16rem !important;
      }
    
      .mb-sm-auto {
        margin-bottom: auto !important;
      }
    
      .ms-sm-0 {
        margin-left: 0 !important;
      }
    
      .ms-sm-1 {
        margin-left: 0.25rem !important;
      }
    
      .ms-sm-2 {
        margin-left: 0.5rem !important;
      }
    
      .ms-sm-3 {
        margin-left: 1rem !important;
      }
    
      .ms-sm-4 {
        margin-left: 1.5rem !important;
      }
    
      .ms-sm-5 {
        margin-left: 3rem !important;
      }
    
      .ms-sm-6 {
        margin-left: 4rem !important;
      }
    
      .ms-sm-7 {
        margin-left: 6rem !important;
      }
    
      .ms-sm-8 {
        margin-left: 8rem !important;
      }
    
      .ms-sm-9 {
        margin-left: 10rem !important;
      }
    
      .ms-sm-10 {
        margin-left: 12rem !important;
      }
    
      .ms-sm-11 {
        margin-left: 14rem !important;
      }
    
      .ms-sm-12 {
        margin-left: 16rem !important;
      }
    
      .ms-sm-auto {
        margin-left: auto !important;
      }
    
      .m-sm-n1 {
        margin: -0.25rem !important;
      }
    
      .m-sm-n2 {
        margin: -0.5rem !important;
      }
    
      .m-sm-n3 {
        margin: -1rem !important;
      }
    
      .m-sm-n4 {
        margin: -1.5rem !important;
      }
    
      .m-sm-n5 {
        margin: -3rem !important;
      }
    
      .m-sm-n6 {
        margin: -4rem !important;
      }
    
      .m-sm-n7 {
        margin: -6rem !important;
      }
    
      .m-sm-n8 {
        margin: -8rem !important;
      }
    
      .m-sm-n9 {
        margin: -10rem !important;
      }
    
      .m-sm-n10 {
        margin: -12rem !important;
      }
    
      .m-sm-n11 {
        margin: -14rem !important;
      }
    
      .m-sm-n12 {
        margin: -16rem !important;
      }
    
      .mx-sm-n1 {
        margin-right: -0.25rem !important;
        margin-left: -0.25rem !important;
      }
    
      .mx-sm-n2 {
        margin-right: -0.5rem !important;
        margin-left: -0.5rem !important;
      }
    
      .mx-sm-n3 {
        margin-right: -1rem !important;
        margin-left: -1rem !important;
      }
    
      .mx-sm-n4 {
        margin-right: -1.5rem !important;
        margin-left: -1.5rem !important;
      }
    
      .mx-sm-n5 {
        margin-right: -3rem !important;
        margin-left: -3rem !important;
      }
    
      .mx-sm-n6 {
        margin-right: -4rem !important;
        margin-left: -4rem !important;
      }
    
      .mx-sm-n7 {
        margin-right: -6rem !important;
        margin-left: -6rem !important;
      }
    
      .mx-sm-n8 {
        margin-right: -8rem !important;
        margin-left: -8rem !important;
      }
    
      .mx-sm-n9 {
        margin-right: -10rem !important;
        margin-left: -10rem !important;
      }
    
      .mx-sm-n10 {
        margin-right: -12rem !important;
        margin-left: -12rem !important;
      }
    
      .mx-sm-n11 {
        margin-right: -14rem !important;
        margin-left: -14rem !important;
      }
    
      .mx-sm-n12 {
        margin-right: -16rem !important;
        margin-left: -16rem !important;
      }
    
      .my-sm-n1 {
        margin-top: -0.25rem !important;
        margin-bottom: -0.25rem !important;
      }
    
      .my-sm-n2 {
        margin-top: -0.5rem !important;
        margin-bottom: -0.5rem !important;
      }
    
      .my-sm-n3 {
        margin-top: -1rem !important;
        margin-bottom: -1rem !important;
      }
    
      .my-sm-n4 {
        margin-top: -1.5rem !important;
        margin-bottom: -1.5rem !important;
      }
    
      .my-sm-n5 {
        margin-top: -3rem !important;
        margin-bottom: -3rem !important;
      }
    
      .my-sm-n6 {
        margin-top: -4rem !important;
        margin-bottom: -4rem !important;
      }
    
      .my-sm-n7 {
        margin-top: -6rem !important;
        margin-bottom: -6rem !important;
      }
    
      .my-sm-n8 {
        margin-top: -8rem !important;
        margin-bottom: -8rem !important;
      }
    
      .my-sm-n9 {
        margin-top: -10rem !important;
        margin-bottom: -10rem !important;
      }
    
      .my-sm-n10 {
        margin-top: -12rem !important;
        margin-bottom: -12rem !important;
      }
    
      .my-sm-n11 {
        margin-top: -14rem !important;
        margin-bottom: -14rem !important;
      }
    
      .my-sm-n12 {
        margin-top: -16rem !important;
        margin-bottom: -16rem !important;
      }
    
      .mt-sm-n1 {
        margin-top: -0.25rem !important;
      }
    
      .mt-sm-n2 {
        margin-top: -0.5rem !important;
      }
    
      .mt-sm-n3 {
        margin-top: -1rem !important;
      }
    
      .mt-sm-n4 {
        margin-top: -1.5rem !important;
      }
    
      .mt-sm-n5 {
        margin-top: -3rem !important;
      }
    
      .mt-sm-n6 {
        margin-top: -4rem !important;
      }
    
      .mt-sm-n7 {
        margin-top: -6rem !important;
      }
    
      .mt-sm-n8 {
        margin-top: -8rem !important;
      }
    
      .mt-sm-n9 {
        margin-top: -10rem !important;
      }
    
      .mt-sm-n10 {
        margin-top: -12rem !important;
      }
    
      .mt-sm-n11 {
        margin-top: -14rem !important;
      }
    
      .mt-sm-n12 {
        margin-top: -16rem !important;
      }
    
      .me-sm-n1 {
        margin-right: -0.25rem !important;
      }
    
      .me-sm-n2 {
        margin-right: -0.5rem !important;
      }
    
      .me-sm-n3 {
        margin-right: -1rem !important;
      }
    
      .me-sm-n4 {
        margin-right: -1.5rem !important;
      }
    
      .me-sm-n5 {
        margin-right: -3rem !important;
      }
    
      .me-sm-n6 {
        margin-right: -4rem !important;
      }
    
      .me-sm-n7 {
        margin-right: -6rem !important;
      }
    
      .me-sm-n8 {
        margin-right: -8rem !important;
      }
    
      .me-sm-n9 {
        margin-right: -10rem !important;
      }
    
      .me-sm-n10 {
        margin-right: -12rem !important;
      }
    
      .me-sm-n11 {
        margin-right: -14rem !important;
      }
    
      .me-sm-n12 {
        margin-right: -16rem !important;
      }
    
      .mb-sm-n1 {
        margin-bottom: -0.25rem !important;
      }
    
      .mb-sm-n2 {
        margin-bottom: -0.5rem !important;
      }
    
      .mb-sm-n3 {
        margin-bottom: -1rem !important;
      }
    
      .mb-sm-n4 {
        margin-bottom: -1.5rem !important;
      }
    
      .mb-sm-n5 {
        margin-bottom: -3rem !important;
      }
    
      .mb-sm-n6 {
        margin-bottom: -4rem !important;
      }
    
      .mb-sm-n7 {
        margin-bottom: -6rem !important;
      }
    
      .mb-sm-n8 {
        margin-bottom: -8rem !important;
      }
    
      .mb-sm-n9 {
        margin-bottom: -10rem !important;
      }
    
      .mb-sm-n10 {
        margin-bottom: -12rem !important;
      }
    
      .mb-sm-n11 {
        margin-bottom: -14rem !important;
      }
    
      .mb-sm-n12 {
        margin-bottom: -16rem !important;
      }
    
      .ms-sm-n1 {
        margin-left: -0.25rem !important;
      }
    
      .ms-sm-n2 {
        margin-left: -0.5rem !important;
      }
    
      .ms-sm-n3 {
        margin-left: -1rem !important;
      }
    
      .ms-sm-n4 {
        margin-left: -1.5rem !important;
      }
    
      .ms-sm-n5 {
        margin-left: -3rem !important;
      }
    
      .ms-sm-n6 {
        margin-left: -4rem !important;
      }
    
      .ms-sm-n7 {
        margin-left: -6rem !important;
      }
    
      .ms-sm-n8 {
        margin-left: -8rem !important;
      }
    
      .ms-sm-n9 {
        margin-left: -10rem !important;
      }
    
      .ms-sm-n10 {
        margin-left: -12rem !important;
      }
    
      .ms-sm-n11 {
        margin-left: -14rem !important;
      }
    
      .ms-sm-n12 {
        margin-left: -16rem !important;
      }
    
      .p-sm-0 {
        padding: 0 !important;
      }
    
      .p-sm-1 {
        padding: 0.25rem !important;
      }
    
      .p-sm-2 {
        padding: 0.5rem !important;
      }
    
      .p-sm-3 {
        padding: 1rem !important;
      }
    
      .p-sm-4 {
        padding: 1.5rem !important;
      }
    
      .p-sm-5 {
        padding: 3rem !important;
      }
    
      .p-sm-6 {
        padding: 4rem !important;
      }
    
      .p-sm-7 {
        padding: 6rem !important;
      }
    
      .p-sm-8 {
        padding: 8rem !important;
      }
    
      .p-sm-9 {
        padding: 10rem !important;
      }
    
      .p-sm-10 {
        padding: 12rem !important;
      }
    
      .p-sm-11 {
        padding: 14rem !important;
      }
    
      .p-sm-12 {
        padding: 16rem !important;
      }
    
      .px-sm-0 {
        padding-right: 0 !important;
        padding-left: 0 !important;
      }
    
      .px-sm-1 {
        padding-right: 0.25rem !important;
        padding-left: 0.25rem !important;
      }
    
      .px-sm-2 {
        padding-right: 0.5rem !important;
        padding-left: 0.5rem !important;
      }
    
      .px-sm-3 {
        padding-right: 1rem !important;
        padding-left: 1rem !important;
      }
    
      .px-sm-4 {
        padding-right: 1.5rem !important;
        padding-left: 1.5rem !important;
      }
    
      .px-sm-5 {
        padding-right: 3rem !important;
        padding-left: 3rem !important;
      }
    
      .px-sm-6 {
        padding-right: 4rem !important;
        padding-left: 4rem !important;
      }
    
      .px-sm-7 {
        padding-right: 6rem !important;
        padding-left: 6rem !important;
      }
    
      .px-sm-8 {
        padding-right: 8rem !important;
        padding-left: 8rem !important;
      }
    
      .px-sm-9 {
        padding-right: 10rem !important;
        padding-left: 10rem !important;
      }
    
      .px-sm-10 {
        padding-right: 12rem !important;
        padding-left: 12rem !important;
      }
    
      .px-sm-11 {
        padding-right: 14rem !important;
        padding-left: 14rem !important;
      }
    
      .px-sm-12 {
        padding-right: 16rem !important;
        padding-left: 16rem !important;
      }
    
      .py-sm-0 {
        padding-top: 0 !important;
        padding-bottom: 0 !important;
      }
    
      .py-sm-1 {
        padding-top: 0.25rem !important;
        padding-bottom: 0.25rem !important;
      }
    
      .py-sm-2 {
        padding-top: 0.5rem !important;
        padding-bottom: 0.5rem !important;
      }
    
      .py-sm-3 {
        padding-top: 1rem !important;
        padding-bottom: 1rem !important;
      }
    
      .py-sm-4 {
        padding-top: 1.5rem !important;
        padding-bottom: 1.5rem !important;
      }
    
      .py-sm-5 {
        padding-top: 3rem !important;
        padding-bottom: 3rem !important;
      }
    
      .py-sm-6 {
        padding-top: 4rem !important;
        padding-bottom: 4rem !important;
      }
    
      .py-sm-7 {
        padding-top: 6rem !important;
        padding-bottom: 6rem !important;
      }
    
      .py-sm-8 {
        padding-top: 8rem !important;
        padding-bottom: 8rem !important;
      }
    
      .py-sm-9 {
        padding-top: 10rem !important;
        padding-bottom: 10rem !important;
      }
    
      .py-sm-10 {
        padding-top: 12rem !important;
        padding-bottom: 12rem !important;
      }
    
      .py-sm-11 {
        padding-top: 14rem !important;
        padding-bottom: 14rem !important;
      }
    
      .py-sm-12 {
        padding-top: 16rem !important;
        padding-bottom: 16rem !important;
      }
    
      .pt-sm-0 {
        padding-top: 0 !important;
      }
    
      .pt-sm-1 {
        padding-top: 0.25rem !important;
      }
    
      .pt-sm-2 {
        padding-top: 0.5rem !important;
      }
    
      .pt-sm-3 {
        padding-top: 1rem !important;
      }
    
      .pt-sm-4 {
        padding-top: 1.5rem !important;
      }
    
      .pt-sm-5 {
        padding-top: 3rem !important;
      }
    
      .pt-sm-6 {
        padding-top: 4rem !important;
      }
    
      .pt-sm-7 {
        padding-top: 6rem !important;
      }
    
      .pt-sm-8 {
        padding-top: 8rem !important;
      }
    
      .pt-sm-9 {
        padding-top: 10rem !important;
      }
    
      .pt-sm-10 {
        padding-top: 12rem !important;
      }
    
      .pt-sm-11 {
        padding-top: 14rem !important;
      }
    
      .pt-sm-12 {
        padding-top: 16rem !important;
      }
    
      .pe-sm-0 {
        padding-right: 0 !important;
      }
    
      .pe-sm-1 {
        padding-right: 0.25rem !important;
      }
    
      .pe-sm-2 {
        padding-right: 0.5rem !important;
      }
    
      .pe-sm-3 {
        padding-right: 1rem !important;
      }
    
      .pe-sm-4 {
        padding-right: 1.5rem !important;
      }
    
      .pe-sm-5 {
        padding-right: 3rem !important;
      }
    
      .pe-sm-6 {
        padding-right: 4rem !important;
      }
    
      .pe-sm-7 {
        padding-right: 6rem !important;
      }
    
      .pe-sm-8 {
        padding-right: 8rem !important;
      }
    
      .pe-sm-9 {
        padding-right: 10rem !important;
      }
    
      .pe-sm-10 {
        padding-right: 12rem !important;
      }
    
      .pe-sm-11 {
        padding-right: 14rem !important;
      }
    
      .pe-sm-12 {
        padding-right: 16rem !important;
      }
    
      .pb-sm-0 {
        padding-bottom: 0 !important;
      }
    
      .pb-sm-1 {
        padding-bottom: 0.25rem !important;
      }
    
      .pb-sm-2 {
        padding-bottom: 0.5rem !important;
      }
    
      .pb-sm-3 {
        padding-bottom: 1rem !important;
      }
    
      .pb-sm-4 {
        padding-bottom: 1.5rem !important;
      }
    
      .pb-sm-5 {
        padding-bottom: 3rem !important;
      }
    
      .pb-sm-6 {
        padding-bottom: 4rem !important;
      }
    
      .pb-sm-7 {
        padding-bottom: 6rem !important;
      }
    
      .pb-sm-8 {
        padding-bottom: 8rem !important;
      }
    
      .pb-sm-9 {
        padding-bottom: 10rem !important;
      }
    
      .pb-sm-10 {
        padding-bottom: 12rem !important;
      }
    
      .pb-sm-11 {
        padding-bottom: 14rem !important;
      }
    
      .pb-sm-12 {
        padding-bottom: 16rem !important;
      }
    
      .ps-sm-0 {
        padding-left: 0 !important;
      }
    
      .ps-sm-1 {
        padding-left: 0.25rem !important;
      }
    
      .ps-sm-2 {
        padding-left: 0.5rem !important;
      }
    
      .ps-sm-3 {
        padding-left: 1rem !important;
      }
    
      .ps-sm-4 {
        padding-left: 1.5rem !important;
      }
    
      .ps-sm-5 {
        padding-left: 3rem !important;
      }
    
      .ps-sm-6 {
        padding-left: 4rem !important;
      }
    
      .ps-sm-7 {
        padding-left: 6rem !important;
      }
    
      .ps-sm-8 {
        padding-left: 8rem !important;
      }
    
      .ps-sm-9 {
        padding-left: 10rem !important;
      }
    
      .ps-sm-10 {
        padding-left: 12rem !important;
      }
    
      .ps-sm-11 {
        padding-left: 14rem !important;
      }
    
      .ps-sm-12 {
        padding-left: 16rem !important;
      }
    
      .gap-sm-0 {
        gap: 0 !important;
      }
    
      .gap-sm-1 {
        gap: 0.25rem !important;
      }
    
      .gap-sm-2 {
        gap: 0.5rem !important;
      }
    
      .gap-sm-3 {
        gap: 1rem !important;
      }
    
      .gap-sm-4 {
        gap: 1.5rem !important;
      }
    
      .gap-sm-5 {
        gap: 3rem !important;
      }
    
      .gap-sm-6 {
        gap: 4rem !important;
      }
    
      .gap-sm-7 {
        gap: 6rem !important;
      }
    
      .gap-sm-8 {
        gap: 8rem !important;
      }
    
      .gap-sm-9 {
        gap: 10rem !important;
      }
    
      .gap-sm-10 {
        gap: 12rem !important;
      }
    
      .gap-sm-11 {
        gap: 14rem !important;
      }
    
      .gap-sm-12 {
        gap: 16rem !important;
      }
    
      .row-gap-sm-0 {
        row-gap: 0 !important;
      }
    
      .row-gap-sm-1 {
        row-gap: 0.25rem !important;
      }
    
      .row-gap-sm-2 {
        row-gap: 0.5rem !important;
      }
    
      .row-gap-sm-3 {
        row-gap: 1rem !important;
      }
    
      .row-gap-sm-4 {
        row-gap: 1.5rem !important;
      }
    
      .row-gap-sm-5 {
        row-gap: 3rem !important;
      }
    
      .row-gap-sm-6 {
        row-gap: 4rem !important;
      }
    
      .row-gap-sm-7 {
        row-gap: 6rem !important;
      }
    
      .row-gap-sm-8 {
        row-gap: 8rem !important;
      }
    
      .row-gap-sm-9 {
        row-gap: 10rem !important;
      }
    
      .row-gap-sm-10 {
        row-gap: 12rem !important;
      }
    
      .row-gap-sm-11 {
        row-gap: 14rem !important;
      }
    
      .row-gap-sm-12 {
        row-gap: 16rem !important;
      }
    
      .column-gap-sm-0 {
        column-gap: 0 !important;
      }
    
      .column-gap-sm-1 {
        column-gap: 0.25rem !important;
      }
    
      .column-gap-sm-2 {
        column-gap: 0.5rem !important;
      }
    
      .column-gap-sm-3 {
        column-gap: 1rem !important;
      }
    
      .column-gap-sm-4 {
        column-gap: 1.5rem !important;
      }
    
      .column-gap-sm-5 {
        column-gap: 3rem !important;
      }
    
      .column-gap-sm-6 {
        column-gap: 4rem !important;
      }
    
      .column-gap-sm-7 {
        column-gap: 6rem !important;
      }
    
      .column-gap-sm-8 {
        column-gap: 8rem !important;
      }
    
      .column-gap-sm-9 {
        column-gap: 10rem !important;
      }
    
      .column-gap-sm-10 {
        column-gap: 12rem !important;
      }
    
      .column-gap-sm-11 {
        column-gap: 14rem !important;
      }
    
      .column-gap-sm-12 {
        column-gap: 16rem !important;
      }
    
      .text-sm-start {
        text-align: left !important;
      }
    
      .text-sm-end {
        text-align: right !important;
      }
    
      .text-sm-center {
        text-align: center !important;
      }
    
      .transform-scale-sm-5 {
        transform: scale(0.5) !important;
      }
    
      .transform-scale-sm-6 {
        transform: scale(0.6) !important;
      }
    
      .transform-scale-sm-7 {
        transform: scale(0.7) !important;
      }
    
      .transform-scale-sm-8 {
        transform: scale(0.8) !important;
      }
    
      .transform-scale-sm-9 {
        transform: scale(0.9) !important;
      }
    
      .transform-scale-sm-10 {
        transform: scale(1) !important;
      }
    
      .border-radius-top-start-sm {
        border-top-left-radius: 0.375rem !important;
      }
    
      .border-radius-top-start-sm-0 {
        border-top-left-radius: 0 !important;
      }
    
      .border-radius-top-start-sm-sm {
        border-top-left-radius: 0.125rem !important;
      }
    
      .border-radius-top-start-sm-md {
        border-top-left-radius: 0.375rem !important;
      }
    
      .border-radius-top-start-sm-lg {
        border-top-left-radius: 0.5rem !important;
      }
    
      .border-radius-top-start-sm-xl {
        border-top-left-radius: 0.75rem !important;
      }
    
      .border-radius-top-start-sm-2xl {
        border-top-left-radius: 1rem !important;
      }
    
      .border-radius-top-start-sm-circle {
        border-top-left-radius: 50% !important;
      }
    
      .border-radius-top-start-sm-pill {
        border-top-left-radius: 50rem !important;
      }
    
      .border-radius-top-end-sm {
        border-top-right-radius: 0.375rem !important;
      }
    
      .border-radius-top-end-sm-0 {
        border-top-right-radius: 0 !important;
      }
    
      .border-radius-top-end-sm-sm {
        border-top-right-radius: 0.125rem !important;
      }
    
      .border-radius-top-end-sm-md {
        border-top-right-radius: 0.375rem !important;
      }
    
      .border-radius-top-end-sm-lg {
        border-top-right-radius: 0.5rem !important;
      }
    
      .border-radius-top-end-sm-xl {
        border-top-right-radius: 0.75rem !important;
      }
    
      .border-radius-top-end-sm-2xl {
        border-top-right-radius: 1rem !important;
      }
    
      .border-radius-top-end-sm-circle {
        border-top-right-radius: 50% !important;
      }
    
      .border-radius-top-end-sm-pill {
        border-top-right-radius: 50rem !important;
      }
    
      .border-radius-bottom-start-sm {
        border-bottom-left-radius: 0.375rem !important;
      }
    
      .border-radius-bottom-start-sm-0 {
        border-bottom-left-radius: 0 !important;
      }
    
      .border-radius-bottom-start-sm-sm {
        border-bottom-left-radius: 0.125rem !important;
      }
    
      .border-radius-bottom-start-sm-md {
        border-bottom-left-radius: 0.375rem !important;
      }
    
      .border-radius-bottom-start-sm-lg {
        border-bottom-left-radius: 0.5rem !important;
      }
    
      .border-radius-bottom-start-sm-xl {
        border-bottom-left-radius: 0.75rem !important;
      }
    
      .border-radius-bottom-start-sm-2xl {
        border-bottom-left-radius: 1rem !important;
      }
    
      .border-radius-bottom-start-sm-circle {
        border-bottom-left-radius: 50% !important;
      }
    
      .border-radius-bottom-start-sm-pill {
        border-bottom-left-radius: 50rem !important;
      }
    
      .border-radius-bottom-end-sm {
        border-bottom-right-radius: 0.375rem !important;
      }
    
      .border-radius-bottom-end-sm-0 {
        border-bottom-right-radius: 0 !important;
      }
    
      .border-radius-bottom-end-sm-sm {
        border-bottom-right-radius: 0.125rem !important;
      }
    
      .border-radius-bottom-end-sm-md {
        border-bottom-right-radius: 0.375rem !important;
      }
    
      .border-radius-bottom-end-sm-lg {
        border-bottom-right-radius: 0.5rem !important;
      }
    
      .border-radius-bottom-end-sm-xl {
        border-bottom-right-radius: 0.75rem !important;
      }
    
      .border-radius-bottom-end-sm-2xl {
        border-bottom-right-radius: 1rem !important;
      }
    
      .border-radius-bottom-end-sm-circle {
        border-bottom-right-radius: 50% !important;
      }
    
      .border-radius-bottom-end-sm-pill {
        border-bottom-right-radius: 50rem !important;
      }
    }
    
    @media (min-width: 768px) {
      .float-md-start {
        float: left !important;
      }
    
      .float-md-end {
        float: right !important;
      }
    
      .float-md-none {
        float: none !important;
      }
    
      .object-fit-md-contain {
        object-fit: contain !important;
      }
    
      .object-fit-md-cover {
        object-fit: cover !important;
      }
    
      .object-fit-md-fill {
        object-fit: fill !important;
      }
    
      .object-fit-md-scale {
        object-fit: scale-down !important;
      }
    
      .object-fit-md-none {
        object-fit: none !important;
      }
    
      .d-md-inline {
        display: inline !important;
      }
    
      .d-md-inline-block {
        display: inline-block !important;
      }
    
      .d-md-block {
        display: block !important;
      }
    
      .d-md-grid {
        display: grid !important;
      }
    
      .d-md-table {
        display: table !important;
      }
    
      .d-md-table-row {
        display: table-row !important;
      }
    
      .d-md-table-cell {
        display: table-cell !important;
      }
    
      .d-md-flex {
        display: flex !important;
      }
    
      .d-md-inline-flex {
        display: inline-flex !important;
      }
    
      .d-md-none {
        display: none !important;
      }
    
      .border-top-md {
        border-top: 1px solid #d4d4d4 !important;
      }
    
      .border-top-md-0 {
        border-top: 0 !important;
      }
    
      .border-end-md {
        border-right: 1px solid #d4d4d4 !important;
      }
    
      .border-end-md-0 {
        border-right: 0 !important;
      }
    
      .border-bottom-md {
        border-bottom: 1px solid #d4d4d4 !important;
      }
    
      .border-bottom-md-0 {
        border-bottom: 0 !important;
      }
    
      .border-start-md {
        border-left: 1px solid #d4d4d4 !important;
      }
    
      .border-start-md-0 {
        border-left: 0 !important;
      }
    
      .w-md-0 {
        width: 0% !important;
      }
    
      .w-md-1 {
        width: 1% !important;
      }
    
      .w-md-2 {
        width: 2% !important;
      }
    
      .w-md-3 {
        width: 3% !important;
      }
    
      .w-md-4 {
        width: 4% !important;
      }
    
      .w-md-5 {
        width: 5% !important;
      }
    
      .w-md-6 {
        width: 6% !important;
      }
    
      .w-md-7 {
        width: 7% !important;
      }
    
      .w-md-8 {
        width: 8% !important;
      }
    
      .w-md-9 {
        width: 9% !important;
      }
    
      .w-md-10 {
        width: 10% !important;
      }
    
      .w-md-15 {
        width: 15% !important;
      }
    
      .w-md-20 {
        width: 20% !important;
      }
    
      .w-md-25 {
        width: 25% !important;
      }
    
      .w-md-30 {
        width: 30% !important;
      }
    
      .w-md-35 {
        width: 35% !important;
      }
    
      .w-md-40 {
        width: 40% !important;
      }
    
      .w-md-45 {
        width: 45% !important;
      }
    
      .w-md-50 {
        width: 50% !important;
      }
    
      .w-md-55 {
        width: 55% !important;
      }
    
      .w-md-60 {
        width: 60% !important;
      }
    
      .w-md-65 {
        width: 65% !important;
      }
    
      .w-md-70 {
        width: 70% !important;
      }
    
      .w-md-75 {
        width: 75% !important;
      }
    
      .w-md-80 {
        width: 80% !important;
      }
    
      .w-md-85 {
        width: 85% !important;
      }
    
      .w-md-90 {
        width: 90% !important;
      }
    
      .w-md-95 {
        width: 95% !important;
      }
    
      .w-md-100 {
        width: 100% !important;
      }
    
      .w-md-auto {
        width: auto !important;
      }
    
      .flex-md-fill {
        flex: 1 1 auto !important;
      }
    
      .flex-md-row {
        flex-direction: row !important;
      }
    
      .flex-md-column {
        flex-direction: column !important;
      }
    
      .flex-md-row-reverse {
        flex-direction: row-reverse !important;
      }
    
      .flex-md-column-reverse {
        flex-direction: column-reverse !important;
      }
    
      .flex-md-grow-0 {
        flex-grow: 0 !important;
      }
    
      .flex-md-grow-1 {
        flex-grow: 1 !important;
      }
    
      .flex-md-shrink-0 {
        flex-shrink: 0 !important;
      }
    
      .flex-md-shrink-1 {
        flex-shrink: 1 !important;
      }
    
      .flex-md-wrap {
        flex-wrap: wrap !important;
      }
    
      .flex-md-nowrap {
        flex-wrap: nowrap !important;
      }
    
      .flex-md-wrap-reverse {
        flex-wrap: wrap-reverse !important;
      }
    
      .justify-content-md-start {
        justify-content: flex-start !important;
      }
    
      .justify-content-md-end {
        justify-content: flex-end !important;
      }
    
      .justify-content-md-center {
        justify-content: center !important;
      }
    
      .justify-content-md-between {
        justify-content: space-between !important;
      }
    
      .justify-content-md-around {
        justify-content: space-around !important;
      }
    
      .justify-content-md-evenly {
        justify-content: space-evenly !important;
      }
    
      .align-items-md-start {
        align-items: flex-start !important;
      }
    
      .align-items-md-end {
        align-items: flex-end !important;
      }
    
      .align-items-md-center {
        align-items: center !important;
      }
    
      .align-items-md-baseline {
        align-items: baseline !important;
      }
    
      .align-items-md-stretch {
        align-items: stretch !important;
      }
    
      .align-content-md-start {
        align-content: flex-start !important;
      }
    
      .align-content-md-end {
        align-content: flex-end !important;
      }
    
      .align-content-md-center {
        align-content: center !important;
      }
    
      .align-content-md-between {
        align-content: space-between !important;
      }
    
      .align-content-md-around {
        align-content: space-around !important;
      }
    
      .align-content-md-stretch {
        align-content: stretch !important;
      }
    
      .align-self-md-auto {
        align-self: auto !important;
      }
    
      .align-self-md-start {
        align-self: flex-start !important;
      }
    
      .align-self-md-end {
        align-self: flex-end !important;
      }
    
      .align-self-md-center {
        align-self: center !important;
      }
    
      .align-self-md-baseline {
        align-self: baseline !important;
      }
    
      .align-self-md-stretch {
        align-self: stretch !important;
      }
    
      .order-md-first {
        order: -1 !important;
      }
    
      .order-md-0 {
        order: 0 !important;
      }
    
      .order-md-1 {
        order: 1 !important;
      }
    
      .order-md-2 {
        order: 2 !important;
      }
    
      .order-md-3 {
        order: 3 !important;
      }
    
      .order-md-4 {
        order: 4 !important;
      }
    
      .order-md-5 {
        order: 5 !important;
      }
    
      .order-md-last {
        order: 6 !important;
      }
    
      .m-md-0 {
        margin: 0 !important;
      }
    
      .m-md-1 {
        margin: 0.25rem !important;
      }
    
      .m-md-2 {
        margin: 0.5rem !important;
      }
    
      .m-md-3 {
        margin: 1rem !important;
      }
    
      .m-md-4 {
        margin: 1.5rem !important;
      }
    
      .m-md-5 {
        margin: 3rem !important;
      }
    
      .m-md-6 {
        margin: 4rem !important;
      }
    
      .m-md-7 {
        margin: 6rem !important;
      }
    
      .m-md-8 {
        margin: 8rem !important;
      }
    
      .m-md-9 {
        margin: 10rem !important;
      }
    
      .m-md-10 {
        margin: 12rem !important;
      }
    
      .m-md-11 {
        margin: 14rem !important;
      }
    
      .m-md-12 {
        margin: 16rem !important;
      }
    
      .m-md-auto {
        margin: auto !important;
      }
    
      .mx-md-0 {
        margin-right: 0 !important;
        margin-left: 0 !important;
      }
    
      .mx-md-1 {
        margin-right: 0.25rem !important;
        margin-left: 0.25rem !important;
      }
    
      .mx-md-2 {
        margin-right: 0.5rem !important;
        margin-left: 0.5rem !important;
      }
    
      .mx-md-3 {
        margin-right: 1rem !important;
        margin-left: 1rem !important;
      }
    
      .mx-md-4 {
        margin-right: 1.5rem !important;
        margin-left: 1.5rem !important;
      }
    
      .mx-md-5 {
        margin-right: 3rem !important;
        margin-left: 3rem !important;
      }
    
      .mx-md-6 {
        margin-right: 4rem !important;
        margin-left: 4rem !important;
      }
    
      .mx-md-7 {
        margin-right: 6rem !important;
        margin-left: 6rem !important;
      }
    
      .mx-md-8 {
        margin-right: 8rem !important;
        margin-left: 8rem !important;
      }
    
      .mx-md-9 {
        margin-right: 10rem !important;
        margin-left: 10rem !important;
      }
    
      .mx-md-10 {
        margin-right: 12rem !important;
        margin-left: 12rem !important;
      }
    
      .mx-md-11 {
        margin-right: 14rem !important;
        margin-left: 14rem !important;
      }
    
      .mx-md-12 {
        margin-right: 16rem !important;
        margin-left: 16rem !important;
      }
    
      .mx-md-auto {
        margin-right: auto !important;
        margin-left: auto !important;
      }
    
      .my-md-0 {
        margin-top: 0 !important;
        margin-bottom: 0 !important;
      }
    
      .my-md-1 {
        margin-top: 0.25rem !important;
        margin-bottom: 0.25rem !important;
      }
    
      .my-md-2 {
        margin-top: 0.5rem !important;
        margin-bottom: 0.5rem !important;
      }
    
      .my-md-3 {
        margin-top: 1rem !important;
        margin-bottom: 1rem !important;
      }
    
      .my-md-4 {
        margin-top: 1.5rem !important;
        margin-bottom: 1.5rem !important;
      }
    
      .my-md-5 {
        margin-top: 3rem !important;
        margin-bottom: 3rem !important;
      }
    
      .my-md-6 {
        margin-top: 4rem !important;
        margin-bottom: 4rem !important;
      }
    
      .my-md-7 {
        margin-top: 6rem !important;
        margin-bottom: 6rem !important;
      }
    
      .my-md-8 {
        margin-top: 8rem !important;
        margin-bottom: 8rem !important;
      }
    
      .my-md-9 {
        margin-top: 10rem !important;
        margin-bottom: 10rem !important;
      }
    
      .my-md-10 {
        margin-top: 12rem !important;
        margin-bottom: 12rem !important;
      }
    
      .my-md-11 {
        margin-top: 14rem !important;
        margin-bottom: 14rem !important;
      }
    
      .my-md-12 {
        margin-top: 16rem !important;
        margin-bottom: 16rem !important;
      }
    
      .my-md-auto {
        margin-top: auto !important;
        margin-bottom: auto !important;
      }
    
      .mt-md-0 {
        margin-top: 0 !important;
      }
    
      .mt-md-1 {
        margin-top: 0.25rem !important;
      }
    
      .mt-md-2 {
        margin-top: 0.5rem !important;
      }
    
      .mt-md-3 {
        margin-top: 1rem !important;
      }
    
      .mt-md-4 {
        margin-top: 1.5rem !important;
      }
    
      .mt-md-5 {
        margin-top: 3rem !important;
      }
    
      .mt-md-6 {
        margin-top: 4rem !important;
      }
    
      .mt-md-7 {
        margin-top: 6rem !important;
      }
    
      .mt-md-8 {
        margin-top: 8rem !important;
      }
    
      .mt-md-9 {
        margin-top: 10rem !important;
      }
    
      .mt-md-10 {
        margin-top: 12rem !important;
      }
    
      .mt-md-11 {
        margin-top: 14rem !important;
      }
    
      .mt-md-12 {
        margin-top: 16rem !important;
      }
    
      .mt-md-auto {
        margin-top: auto !important;
      }
    
      .me-md-0 {
        margin-right: 0 !important;
      }
    
      .me-md-1 {
        margin-right: 0.25rem !important;
      }
    
      .me-md-2 {
        margin-right: 0.5rem !important;
      }
    
      .me-md-3 {
        margin-right: 1rem !important;
      }
    
      .me-md-4 {
        margin-right: 1.5rem !important;
      }
    
      .me-md-5 {
        margin-right: 3rem !important;
      }
    
      .me-md-6 {
        margin-right: 4rem !important;
      }
    
      .me-md-7 {
        margin-right: 6rem !important;
      }
    
      .me-md-8 {
        margin-right: 8rem !important;
      }
    
      .me-md-9 {
        margin-right: 10rem !important;
      }
    
      .me-md-10 {
        margin-right: 12rem !important;
      }
    
      .me-md-11 {
        margin-right: 14rem !important;
      }
    
      .me-md-12 {
        margin-right: 16rem !important;
      }
    
      .me-md-auto {
        margin-right: auto !important;
      }
    
      .mb-md-0 {
        margin-bottom: 0 !important;
      }
    
      .mb-md-1 {
        margin-bottom: 0.25rem !important;
      }
    
      .mb-md-2 {
        margin-bottom: 0.5rem !important;
      }
    
      .mb-md-3 {
        margin-bottom: 1rem !important;
      }
    
      .mb-md-4 {
        margin-bottom: 1.5rem !important;
      }
    
      .mb-md-5 {
        margin-bottom: 3rem !important;
      }
    
      .mb-md-6 {
        margin-bottom: 4rem !important;
      }
    
      .mb-md-7 {
        margin-bottom: 6rem !important;
      }
    
      .mb-md-8 {
        margin-bottom: 8rem !important;
      }
    
      .mb-md-9 {
        margin-bottom: 10rem !important;
      }
    
      .mb-md-10 {
        margin-bottom: 12rem !important;
      }
    
      .mb-md-11 {
        margin-bottom: 14rem !important;
      }
    
      .mb-md-12 {
        margin-bottom: 16rem !important;
      }
    
      .mb-md-auto {
        margin-bottom: auto !important;
      }
    
      .ms-md-0 {
        margin-left: 0 !important;
      }
    
      .ms-md-1 {
        margin-left: 0.25rem !important;
      }
    
      .ms-md-2 {
        margin-left: 0.5rem !important;
      }
    
      .ms-md-3 {
        margin-left: 1rem !important;
      }
    
      .ms-md-4 {
        margin-left: 1.5rem !important;
      }
    
      .ms-md-5 {
        margin-left: 3rem !important;
      }
    
      .ms-md-6 {
        margin-left: 4rem !important;
      }
    
      .ms-md-7 {
        margin-left: 6rem !important;
      }
    
      .ms-md-8 {
        margin-left: 8rem !important;
      }
    
      .ms-md-9 {
        margin-left: 10rem !important;
      }
    
      .ms-md-10 {
        margin-left: 12rem !important;
      }
    
      .ms-md-11 {
        margin-left: 14rem !important;
      }
    
      .ms-md-12 {
        margin-left: 16rem !important;
      }
    
      .ms-md-auto {
        margin-left: auto !important;
      }
    
      .m-md-n1 {
        margin: -0.25rem !important;
      }
    
      .m-md-n2 {
        margin: -0.5rem !important;
      }
    
      .m-md-n3 {
        margin: -1rem !important;
      }
    
      .m-md-n4 {
        margin: -1.5rem !important;
      }
    
      .m-md-n5 {
        margin: -3rem !important;
      }
    
      .m-md-n6 {
        margin: -4rem !important;
      }
    
      .m-md-n7 {
        margin: -6rem !important;
      }
    
      .m-md-n8 {
        margin: -8rem !important;
      }
    
      .m-md-n9 {
        margin: -10rem !important;
      }
    
      .m-md-n10 {
        margin: -12rem !important;
      }
    
      .m-md-n11 {
        margin: -14rem !important;
      }
    
      .m-md-n12 {
        margin: -16rem !important;
      }
    
      .mx-md-n1 {
        margin-right: -0.25rem !important;
        margin-left: -0.25rem !important;
      }
    
      .mx-md-n2 {
        margin-right: -0.5rem !important;
        margin-left: -0.5rem !important;
      }
    
      .mx-md-n3 {
        margin-right: -1rem !important;
        margin-left: -1rem !important;
      }
    
      .mx-md-n4 {
        margin-right: -1.5rem !important;
        margin-left: -1.5rem !important;
      }
    
      .mx-md-n5 {
        margin-right: -3rem !important;
        margin-left: -3rem !important;
      }
    
      .mx-md-n6 {
        margin-right: -4rem !important;
        margin-left: -4rem !important;
      }
    
      .mx-md-n7 {
        margin-right: -6rem !important;
        margin-left: -6rem !important;
      }
    
      .mx-md-n8 {
        margin-right: -8rem !important;
        margin-left: -8rem !important;
      }
    
      .mx-md-n9 {
        margin-right: -10rem !important;
        margin-left: -10rem !important;
      }
    
      .mx-md-n10 {
        margin-right: -12rem !important;
        margin-left: -12rem !important;
      }
    
      .mx-md-n11 {
        margin-right: -14rem !important;
        margin-left: -14rem !important;
      }
    
      .mx-md-n12 {
        margin-right: -16rem !important;
        margin-left: -16rem !important;
      }
    
      .my-md-n1 {
        margin-top: -0.25rem !important;
        margin-bottom: -0.25rem !important;
      }
    
      .my-md-n2 {
        margin-top: -0.5rem !important;
        margin-bottom: -0.5rem !important;
      }
    
      .my-md-n3 {
        margin-top: -1rem !important;
        margin-bottom: -1rem !important;
      }
    
      .my-md-n4 {
        margin-top: -1.5rem !important;
        margin-bottom: -1.5rem !important;
      }
    
      .my-md-n5 {
        margin-top: -3rem !important;
        margin-bottom: -3rem !important;
      }
    
      .my-md-n6 {
        margin-top: -4rem !important;
        margin-bottom: -4rem !important;
      }
    
      .my-md-n7 {
        margin-top: -6rem !important;
        margin-bottom: -6rem !important;
      }
    
      .my-md-n8 {
        margin-top: -8rem !important;
        margin-bottom: -8rem !important;
      }
    
      .my-md-n9 {
        margin-top: -10rem !important;
        margin-bottom: -10rem !important;
      }
    
      .my-md-n10 {
        margin-top: -12rem !important;
        margin-bottom: -12rem !important;
      }
    
      .my-md-n11 {
        margin-top: -14rem !important;
        margin-bottom: -14rem !important;
      }
    
      .my-md-n12 {
        margin-top: -16rem !important;
        margin-bottom: -16rem !important;
      }
    
      .mt-md-n1 {
        margin-top: -0.25rem !important;
      }
    
      .mt-md-n2 {
        margin-top: -0.5rem !important;
      }
    
      .mt-md-n3 {
        margin-top: -1rem !important;
      }
    
      .mt-md-n4 {
        margin-top: -1.5rem !important;
      }
    
      .mt-md-n5 {
        margin-top: -3rem !important;
      }
    
      .mt-md-n6 {
        margin-top: -4rem !important;
      }
    
      .mt-md-n7 {
        margin-top: -6rem !important;
      }
    
      .mt-md-n8 {
        margin-top: -8rem !important;
      }
    
      .mt-md-n9 {
        margin-top: -10rem !important;
      }
    
      .mt-md-n10 {
        margin-top: -12rem !important;
      }
    
      .mt-md-n11 {
        margin-top: -14rem !important;
      }
    
      .mt-md-n12 {
        margin-top: -16rem !important;
      }
    
      .me-md-n1 {
        margin-right: -0.25rem !important;
      }
    
      .me-md-n2 {
        margin-right: -0.5rem !important;
      }
    
      .me-md-n3 {
        margin-right: -1rem !important;
      }
    
      .me-md-n4 {
        margin-right: -1.5rem !important;
      }
    
      .me-md-n5 {
        margin-right: -3rem !important;
      }
    
      .me-md-n6 {
        margin-right: -4rem !important;
      }
    
      .me-md-n7 {
        margin-right: -6rem !important;
      }
    
      .me-md-n8 {
        margin-right: -8rem !important;
      }
    
      .me-md-n9 {
        margin-right: -10rem !important;
      }
    
      .me-md-n10 {
        margin-right: -12rem !important;
      }
    
      .me-md-n11 {
        margin-right: -14rem !important;
      }
    
      .me-md-n12 {
        margin-right: -16rem !important;
      }
    
      .mb-md-n1 {
        margin-bottom: -0.25rem !important;
      }
    
      .mb-md-n2 {
        margin-bottom: -0.5rem !important;
      }
    
      .mb-md-n3 {
        margin-bottom: -1rem !important;
      }
    
      .mb-md-n4 {
        margin-bottom: -1.5rem !important;
      }
    
      .mb-md-n5 {
        margin-bottom: -3rem !important;
      }
    
      .mb-md-n6 {
        margin-bottom: -4rem !important;
      }
    
      .mb-md-n7 {
        margin-bottom: -6rem !important;
      }
    
      .mb-md-n8 {
        margin-bottom: -8rem !important;
      }
    
      .mb-md-n9 {
        margin-bottom: -10rem !important;
      }
    
      .mb-md-n10 {
        margin-bottom: -12rem !important;
      }
    
      .mb-md-n11 {
        margin-bottom: -14rem !important;
      }
    
      .mb-md-n12 {
        margin-bottom: -16rem !important;
      }
    
      .ms-md-n1 {
        margin-left: -0.25rem !important;
      }
    
      .ms-md-n2 {
        margin-left: -0.5rem !important;
      }
    
      .ms-md-n3 {
        margin-left: -1rem !important;
      }
    
      .ms-md-n4 {
        margin-left: -1.5rem !important;
      }
    
      .ms-md-n5 {
        margin-left: -3rem !important;
      }
    
      .ms-md-n6 {
        margin-left: -4rem !important;
      }
    
      .ms-md-n7 {
        margin-left: -6rem !important;
      }
    
      .ms-md-n8 {
        margin-left: -8rem !important;
      }
    
      .ms-md-n9 {
        margin-left: -10rem !important;
      }
    
      .ms-md-n10 {
        margin-left: -12rem !important;
      }
    
      .ms-md-n11 {
        margin-left: -14rem !important;
      }
    
      .ms-md-n12 {
        margin-left: -16rem !important;
      }
    
      .p-md-0 {
        padding: 0 !important;
      }
    
      .p-md-1 {
        padding: 0.25rem !important;
      }
    
      .p-md-2 {
        padding: 0.5rem !important;
      }
    
      .p-md-3 {
        padding: 1rem !important;
      }
    
      .p-md-4 {
        padding: 1.5rem !important;
      }
    
      .p-md-5 {
        padding: 3rem !important;
      }
    
      .p-md-6 {
        padding: 4rem !important;
      }
    
      .p-md-7 {
        padding: 6rem !important;
      }
    
      .p-md-8 {
        padding: 8rem !important;
      }
    
      .p-md-9 {
        padding: 10rem !important;
      }
    
      .p-md-10 {
        padding: 12rem !important;
      }
    
      .p-md-11 {
        padding: 14rem !important;
      }
    
      .p-md-12 {
        padding: 16rem !important;
      }
    
      .px-md-0 {
        padding-right: 0 !important;
        padding-left: 0 !important;
      }
    
      .px-md-1 {
        padding-right: 0.25rem !important;
        padding-left: 0.25rem !important;
      }
    
      .px-md-2 {
        padding-right: 0.5rem !important;
        padding-left: 0.5rem !important;
      }
    
      .px-md-3 {
        padding-right: 1rem !important;
        padding-left: 1rem !important;
      }
    
      .px-md-4 {
        padding-right: 1.5rem !important;
        padding-left: 1.5rem !important;
      }
    
      .px-md-5 {
        padding-right: 3rem !important;
        padding-left: 3rem !important;
      }
    
      .px-md-6 {
        padding-right: 4rem !important;
        padding-left: 4rem !important;
      }
    
      .px-md-7 {
        padding-right: 6rem !important;
        padding-left: 6rem !important;
      }
    
      .px-md-8 {
        padding-right: 8rem !important;
        padding-left: 8rem !important;
      }
    
      .px-md-9 {
        padding-right: 10rem !important;
        padding-left: 10rem !important;
      }
    
      .px-md-10 {
        padding-right: 12rem !important;
        padding-left: 12rem !important;
      }
    
      .px-md-11 {
        padding-right: 14rem !important;
        padding-left: 14rem !important;
      }
    
      .px-md-12 {
        padding-right: 16rem !important;
        padding-left: 16rem !important;
      }
    
      .py-md-0 {
        padding-top: 0 !important;
        padding-bottom: 0 !important;
      }
    
      .py-md-1 {
        padding-top: 0.25rem !important;
        padding-bottom: 0.25rem !important;
      }
    
      .py-md-2 {
        padding-top: 0.5rem !important;
        padding-bottom: 0.5rem !important;
      }
    
      .py-md-3 {
        padding-top: 1rem !important;
        padding-bottom: 1rem !important;
      }
    
      .py-md-4 {
        padding-top: 1.5rem !important;
        padding-bottom: 1.5rem !important;
      }
    
      .py-md-5 {
        padding-top: 3rem !important;
        padding-bottom: 3rem !important;
      }
    
      .py-md-6 {
        padding-top: 4rem !important;
        padding-bottom: 4rem !important;
      }
    
      .py-md-7 {
        padding-top: 6rem !important;
        padding-bottom: 6rem !important;
      }
    
      .py-md-8 {
        padding-top: 8rem !important;
        padding-bottom: 8rem !important;
      }
    
      .py-md-9 {
        padding-top: 10rem !important;
        padding-bottom: 10rem !important;
      }
    
      .py-md-10 {
        padding-top: 12rem !important;
        padding-bottom: 12rem !important;
      }
    
      .py-md-11 {
        padding-top: 14rem !important;
        padding-bottom: 14rem !important;
      }
    
      .py-md-12 {
        padding-top: 16rem !important;
        padding-bottom: 16rem !important;
      }
    
      .pt-md-0 {
        padding-top: 0 !important;
      }
    
      .pt-md-1 {
        padding-top: 0.25rem !important;
      }
    
      .pt-md-2 {
        padding-top: 0.5rem !important;
      }
    
      .pt-md-3 {
        padding-top: 1rem !important;
      }
    
      .pt-md-4 {
        padding-top: 1.5rem !important;
      }
    
      .pt-md-5 {
        padding-top: 3rem !important;
      }
    
      .pt-md-6 {
        padding-top: 4rem !important;
      }
    
      .pt-md-7 {
        padding-top: 6rem !important;
      }
    
      .pt-md-8 {
        padding-top: 8rem !important;
      }
    
      .pt-md-9 {
        padding-top: 10rem !important;
      }
    
      .pt-md-10 {
        padding-top: 12rem !important;
      }
    
      .pt-md-11 {
        padding-top: 14rem !important;
      }
    
      .pt-md-12 {
        padding-top: 16rem !important;
      }
    
      .pe-md-0 {
        padding-right: 0 !important;
      }
    
      .pe-md-1 {
        padding-right: 0.25rem !important;
      }
    
      .pe-md-2 {
        padding-right: 0.5rem !important;
      }
    
      .pe-md-3 {
        padding-right: 1rem !important;
      }
    
      .pe-md-4 {
        padding-right: 1.5rem !important;
      }
    
      .pe-md-5 {
        padding-right: 3rem !important;
      }
    
      .pe-md-6 {
        padding-right: 4rem !important;
      }
    
      .pe-md-7 {
        padding-right: 6rem !important;
      }
    
      .pe-md-8 {
        padding-right: 8rem !important;
      }
    
      .pe-md-9 {
        padding-right: 10rem !important;
      }
    
      .pe-md-10 {
        padding-right: 12rem !important;
      }
    
      .pe-md-11 {
        padding-right: 14rem !important;
      }
    
      .pe-md-12 {
        padding-right: 16rem !important;
      }
    
      .pb-md-0 {
        padding-bottom: 0 !important;
      }
    
      .pb-md-1 {
        padding-bottom: 0.25rem !important;
      }
    
      .pb-md-2 {
        padding-bottom: 0.5rem !important;
      }
    
      .pb-md-3 {
        padding-bottom: 1rem !important;
      }
    
      .pb-md-4 {
        padding-bottom: 1.5rem !important;
      }
    
      .pb-md-5 {
        padding-bottom: 3rem !important;
      }
    
      .pb-md-6 {
        padding-bottom: 4rem !important;
      }
    
      .pb-md-7 {
        padding-bottom: 6rem !important;
      }
    
      .pb-md-8 {
        padding-bottom: 8rem !important;
      }
    
      .pb-md-9 {
        padding-bottom: 10rem !important;
      }
    
      .pb-md-10 {
        padding-bottom: 12rem !important;
      }
    
      .pb-md-11 {
        padding-bottom: 14rem !important;
      }
    
      .pb-md-12 {
        padding-bottom: 16rem !important;
      }
    
      .ps-md-0 {
        padding-left: 0 !important;
      }
    
      .ps-md-1 {
        padding-left: 0.25rem !important;
      }
    
      .ps-md-2 {
        padding-left: 0.5rem !important;
      }
    
      .ps-md-3 {
        padding-left: 1rem !important;
      }
    
      .ps-md-4 {
        padding-left: 1.5rem !important;
      }
    
      .ps-md-5 {
        padding-left: 3rem !important;
      }
    
      .ps-md-6 {
        padding-left: 4rem !important;
      }
    
      .ps-md-7 {
        padding-left: 6rem !important;
      }
    
      .ps-md-8 {
        padding-left: 8rem !important;
      }
    
      .ps-md-9 {
        padding-left: 10rem !important;
      }
    
      .ps-md-10 {
        padding-left: 12rem !important;
      }
    
      .ps-md-11 {
        padding-left: 14rem !important;
      }
    
      .ps-md-12 {
        padding-left: 16rem !important;
      }
    
      .gap-md-0 {
        gap: 0 !important;
      }
    
      .gap-md-1 {
        gap: 0.25rem !important;
      }
    
      .gap-md-2 {
        gap: 0.5rem !important;
      }
    
      .gap-md-3 {
        gap: 1rem !important;
      }
    
      .gap-md-4 {
        gap: 1.5rem !important;
      }
    
      .gap-md-5 {
        gap: 3rem !important;
      }
    
      .gap-md-6 {
        gap: 4rem !important;
      }
    
      .gap-md-7 {
        gap: 6rem !important;
      }
    
      .gap-md-8 {
        gap: 8rem !important;
      }
    
      .gap-md-9 {
        gap: 10rem !important;
      }
    
      .gap-md-10 {
        gap: 12rem !important;
      }
    
      .gap-md-11 {
        gap: 14rem !important;
      }
    
      .gap-md-12 {
        gap: 16rem !important;
      }
    
      .row-gap-md-0 {
        row-gap: 0 !important;
      }
    
      .row-gap-md-1 {
        row-gap: 0.25rem !important;
      }
    
      .row-gap-md-2 {
        row-gap: 0.5rem !important;
      }
    
      .row-gap-md-3 {
        row-gap: 1rem !important;
      }
    
      .row-gap-md-4 {
        row-gap: 1.5rem !important;
      }
    
      .row-gap-md-5 {
        row-gap: 3rem !important;
      }
    
      .row-gap-md-6 {
        row-gap: 4rem !important;
      }
    
      .row-gap-md-7 {
        row-gap: 6rem !important;
      }
    
      .row-gap-md-8 {
        row-gap: 8rem !important;
      }
    
      .row-gap-md-9 {
        row-gap: 10rem !important;
      }
    
      .row-gap-md-10 {
        row-gap: 12rem !important;
      }
    
      .row-gap-md-11 {
        row-gap: 14rem !important;
      }
    
      .row-gap-md-12 {
        row-gap: 16rem !important;
      }
    
      .column-gap-md-0 {
        column-gap: 0 !important;
      }
    
      .column-gap-md-1 {
        column-gap: 0.25rem !important;
      }
    
      .column-gap-md-2 {
        column-gap: 0.5rem !important;
      }
    
      .column-gap-md-3 {
        column-gap: 1rem !important;
      }
    
      .column-gap-md-4 {
        column-gap: 1.5rem !important;
      }
    
      .column-gap-md-5 {
        column-gap: 3rem !important;
      }
    
      .column-gap-md-6 {
        column-gap: 4rem !important;
      }
    
      .column-gap-md-7 {
        column-gap: 6rem !important;
      }
    
      .column-gap-md-8 {
        column-gap: 8rem !important;
      }
    
      .column-gap-md-9 {
        column-gap: 10rem !important;
      }
    
      .column-gap-md-10 {
        column-gap: 12rem !important;
      }
    
      .column-gap-md-11 {
        column-gap: 14rem !important;
      }
    
      .column-gap-md-12 {
        column-gap: 16rem !important;
      }
    
      .text-md-start {
        text-align: left !important;
      }
    
      .text-md-end {
        text-align: right !important;
      }
    
      .text-md-center {
        text-align: center !important;
      }
    
      .transform-scale-md-5 {
        transform: scale(0.5) !important;
      }
    
      .transform-scale-md-6 {
        transform: scale(0.6) !important;
      }
    
      .transform-scale-md-7 {
        transform: scale(0.7) !important;
      }
    
      .transform-scale-md-8 {
        transform: scale(0.8) !important;
      }
    
      .transform-scale-md-9 {
        transform: scale(0.9) !important;
      }
    
      .transform-scale-md-10 {
        transform: scale(1) !important;
      }
    
      .border-radius-top-start-md {
        border-top-left-radius: 0.375rem !important;
      }
    
      .border-radius-top-start-md-0 {
        border-top-left-radius: 0 !important;
      }
    
      .border-radius-top-start-md-sm {
        border-top-left-radius: 0.125rem !important;
      }
    
      .border-radius-top-start-md-md {
        border-top-left-radius: 0.375rem !important;
      }
    
      .border-radius-top-start-md-lg {
        border-top-left-radius: 0.5rem !important;
      }
    
      .border-radius-top-start-md-xl {
        border-top-left-radius: 0.75rem !important;
      }
    
      .border-radius-top-start-md-2xl {
        border-top-left-radius: 1rem !important;
      }
    
      .border-radius-top-start-md-circle {
        border-top-left-radius: 50% !important;
      }
    
      .border-radius-top-start-md-pill {
        border-top-left-radius: 50rem !important;
      }
    
      .border-radius-top-end-md {
        border-top-right-radius: 0.375rem !important;
      }
    
      .border-radius-top-end-md-0 {
        border-top-right-radius: 0 !important;
      }
    
      .border-radius-top-end-md-sm {
        border-top-right-radius: 0.125rem !important;
      }
    
      .border-radius-top-end-md-md {
        border-top-right-radius: 0.375rem !important;
      }
    
      .border-radius-top-end-md-lg {
        border-top-right-radius: 0.5rem !important;
      }
    
      .border-radius-top-end-md-xl {
        border-top-right-radius: 0.75rem !important;
      }
    
      .border-radius-top-end-md-2xl {
        border-top-right-radius: 1rem !important;
      }
    
      .border-radius-top-end-md-circle {
        border-top-right-radius: 50% !important;
      }
    
      .border-radius-top-end-md-pill {
        border-top-right-radius: 50rem !important;
      }
    
      .border-radius-bottom-start-md {
        border-bottom-left-radius: 0.375rem !important;
      }
    
      .border-radius-bottom-start-md-0 {
        border-bottom-left-radius: 0 !important;
      }
    
      .border-radius-bottom-start-md-sm {
        border-bottom-left-radius: 0.125rem !important;
      }
    
      .border-radius-bottom-start-md-md {
        border-bottom-left-radius: 0.375rem !important;
      }
    
      .border-radius-bottom-start-md-lg {
        border-bottom-left-radius: 0.5rem !important;
      }
    
      .border-radius-bottom-start-md-xl {
        border-bottom-left-radius: 0.75rem !important;
      }
    
      .border-radius-bottom-start-md-2xl {
        border-bottom-left-radius: 1rem !important;
      }
    
      .border-radius-bottom-start-md-circle {
        border-bottom-left-radius: 50% !important;
      }
    
      .border-radius-bottom-start-md-pill {
        border-bottom-left-radius: 50rem !important;
      }
    
      .border-radius-bottom-end-md {
        border-bottom-right-radius: 0.375rem !important;
      }
    
      .border-radius-bottom-end-md-0 {
        border-bottom-right-radius: 0 !important;
      }
    
      .border-radius-bottom-end-md-sm {
        border-bottom-right-radius: 0.125rem !important;
      }
    
      .border-radius-bottom-end-md-md {
        border-bottom-right-radius: 0.375rem !important;
      }
    
      .border-radius-bottom-end-md-lg {
        border-bottom-right-radius: 0.5rem !important;
      }
    
      .border-radius-bottom-end-md-xl {
        border-bottom-right-radius: 0.75rem !important;
      }
    
      .border-radius-bottom-end-md-2xl {
        border-bottom-right-radius: 1rem !important;
      }
    
      .border-radius-bottom-end-md-circle {
        border-bottom-right-radius: 50% !important;
      }
    
      .border-radius-bottom-end-md-pill {
        border-bottom-right-radius: 50rem !important;
      }
    }
    
    @media (min-width: 992px) {
      .float-lg-start {
        float: left !important;
      }
    
      .float-lg-end {
        float: right !important;
      }
    
      .float-lg-none {
        float: none !important;
      }
    
      .object-fit-lg-contain {
        object-fit: contain !important;
      }
    
      .object-fit-lg-cover {
        object-fit: cover !important;
      }
    
      .object-fit-lg-fill {
        object-fit: fill !important;
      }
    
      .object-fit-lg-scale {
        object-fit: scale-down !important;
      }
    
      .object-fit-lg-none {
        object-fit: none !important;
      }
    
      .d-lg-inline {
        display: inline !important;
      }
    
      .d-lg-inline-block {
        display: inline-block !important;
      }
    
      .d-lg-block {
        display: block !important;
      }
    
      .d-lg-grid {
        display: grid !important;
      }
    
      .d-lg-table {
        display: table !important;
      }
    
      .d-lg-table-row {
        display: table-row !important;
      }
    
      .d-lg-table-cell {
        display: table-cell !important;
      }
    
      .d-lg-flex {
        display: flex !important;
      }
    
      .d-lg-inline-flex {
        display: inline-flex !important;
      }
    
      .d-lg-none {
        display: none !important;
      }
    
      .border-top-lg {
        border-top: 1px solid #d4d4d4 !important;
      }
    
      .border-top-lg-0 {
        border-top: 0 !important;
      }
    
      .border-end-lg {
        border-right: 1px solid #d4d4d4 !important;
      }
    
      .border-end-lg-0 {
        border-right: 0 !important;
      }
    
      .border-bottom-lg {
        border-bottom: 1px solid #d4d4d4 !important;
      }
    
      .border-bottom-lg-0 {
        border-bottom: 0 !important;
      }
    
      .border-start-lg {
        border-left: 1px solid #d4d4d4 !important;
      }
    
      .border-start-lg-0 {
        border-left: 0 !important;
      }
    
      .w-lg-0 {
        width: 0% !important;
      }
    
      .w-lg-1 {
        width: 1% !important;
      }
    
      .w-lg-2 {
        width: 2% !important;
      }
    
      .w-lg-3 {
        width: 3% !important;
      }
    
      .w-lg-4 {
        width: 4% !important;
      }
    
      .w-lg-5 {
        width: 5% !important;
      }
    
      .w-lg-6 {
        width: 6% !important;
      }
    
      .w-lg-7 {
        width: 7% !important;
      }
    
      .w-lg-8 {
        width: 8% !important;
      }
    
      .w-lg-9 {
        width: 9% !important;
      }
    
      .w-lg-10 {
        width: 10% !important;
      }
    
      .w-lg-15 {
        width: 15% !important;
      }
    
      .w-lg-20 {
        width: 20% !important;
      }
    
      .w-lg-25 {
        width: 25% !important;
      }
    
      .w-lg-30 {
        width: 30% !important;
      }
    
      .w-lg-35 {
        width: 35% !important;
      }
    
      .w-lg-40 {
        width: 40% !important;
      }
    
      .w-lg-45 {
        width: 45% !important;
      }
    
      .w-lg-50 {
        width: 50% !important;
      }
    
      .w-lg-55 {
        width: 55% !important;
      }
    
      .w-lg-60 {
        width: 60% !important;
      }
    
      .w-lg-65 {
        width: 65% !important;
      }
    
      .w-lg-70 {
        width: 70% !important;
      }
    
      .w-lg-75 {
        width: 75% !important;
      }
    
      .w-lg-80 {
        width: 80% !important;
      }
    
      .w-lg-85 {
        width: 85% !important;
      }
    
      .w-lg-90 {
        width: 90% !important;
      }
    
      .w-lg-95 {
        width: 95% !important;
      }
    
      .w-lg-100 {
        width: 100% !important;
      }
    
      .w-lg-auto {
        width: auto !important;
      }
    
      .flex-lg-fill {
        flex: 1 1 auto !important;
      }
    
      .flex-lg-row {
        flex-direction: row !important;
      }
    
      .flex-lg-column {
        flex-direction: column !important;
      }
    
      .flex-lg-row-reverse {
        flex-direction: row-reverse !important;
      }
    
      .flex-lg-column-reverse {
        flex-direction: column-reverse !important;
      }
    
      .flex-lg-grow-0 {
        flex-grow: 0 !important;
      }
    
      .flex-lg-grow-1 {
        flex-grow: 1 !important;
      }
    
      .flex-lg-shrink-0 {
        flex-shrink: 0 !important;
      }
    
      .flex-lg-shrink-1 {
        flex-shrink: 1 !important;
      }
    
      .flex-lg-wrap {
        flex-wrap: wrap !important;
      }
    
      .flex-lg-nowrap {
        flex-wrap: nowrap !important;
      }
    
      .flex-lg-wrap-reverse {
        flex-wrap: wrap-reverse !important;
      }
    
      .justify-content-lg-start {
        justify-content: flex-start !important;
      }
    
      .justify-content-lg-end {
        justify-content: flex-end !important;
      }
    
      .justify-content-lg-center {
        justify-content: center !important;
      }
    
      .justify-content-lg-between {
        justify-content: space-between !important;
      }
    
      .justify-content-lg-around {
        justify-content: space-around !important;
      }
    
      .justify-content-lg-evenly {
        justify-content: space-evenly !important;
      }
    
      .align-items-lg-start {
        align-items: flex-start !important;
      }
    
      .align-items-lg-end {
        align-items: flex-end !important;
      }
    
      .align-items-lg-center {
        align-items: center !important;
      }
    
      .align-items-lg-baseline {
        align-items: baseline !important;
      }
    
      .align-items-lg-stretch {
        align-items: stretch !important;
      }
    
      .align-content-lg-start {
        align-content: flex-start !important;
      }
    
      .align-content-lg-end {
        align-content: flex-end !important;
      }
    
      .align-content-lg-center {
        align-content: center !important;
      }
    
      .align-content-lg-between {
        align-content: space-between !important;
      }
    
      .align-content-lg-around {
        align-content: space-around !important;
      }
    
      .align-content-lg-stretch {
        align-content: stretch !important;
      }
    
      .align-self-lg-auto {
        align-self: auto !important;
      }
    
      .align-self-lg-start {
        align-self: flex-start !important;
      }
    
      .align-self-lg-end {
        align-self: flex-end !important;
      }
    
      .align-self-lg-center {
        align-self: center !important;
      }
    
      .align-self-lg-baseline {
        align-self: baseline !important;
      }
    
      .align-self-lg-stretch {
        align-self: stretch !important;
      }
    
      .order-lg-first {
        order: -1 !important;
      }
    
      .order-lg-0 {
        order: 0 !important;
      }
    
      .order-lg-1 {
        order: 1 !important;
      }
    
      .order-lg-2 {
        order: 2 !important;
      }
    
      .order-lg-3 {
        order: 3 !important;
      }
    
      .order-lg-4 {
        order: 4 !important;
      }
    
      .order-lg-5 {
        order: 5 !important;
      }
    
      .order-lg-last {
        order: 6 !important;
      }
    
      .m-lg-0 {
        margin: 0 !important;
      }
    
      .m-lg-1 {
        margin: 0.25rem !important;
      }
    
      .m-lg-2 {
        margin: 0.5rem !important;
      }
    
      .m-lg-3 {
        margin: 1rem !important;
      }
    
      .m-lg-4 {
        margin: 1.5rem !important;
      }
    
      .m-lg-5 {
        margin: 3rem !important;
      }
    
      .m-lg-6 {
        margin: 4rem !important;
      }
    
      .m-lg-7 {
        margin: 6rem !important;
      }
    
      .m-lg-8 {
        margin: 8rem !important;
      }
    
      .m-lg-9 {
        margin: 10rem !important;
      }
    
      .m-lg-10 {
        margin: 12rem !important;
      }
    
      .m-lg-11 {
        margin: 14rem !important;
      }
    
      .m-lg-12 {
        margin: 16rem !important;
      }
    
      .m-lg-auto {
        margin: auto !important;
      }
    
      .mx-lg-0 {
        margin-right: 0 !important;
        margin-left: 0 !important;
      }
    
      .mx-lg-1 {
        margin-right: 0.25rem !important;
        margin-left: 0.25rem !important;
      }
    
      .mx-lg-2 {
        margin-right: 0.5rem !important;
        margin-left: 0.5rem !important;
      }
    
      .mx-lg-3 {
        margin-right: 1rem !important;
        margin-left: 1rem !important;
      }
    
      .mx-lg-4 {
        margin-right: 1.5rem !important;
        margin-left: 1.5rem !important;
      }
    
      .mx-lg-5 {
        margin-right: 3rem !important;
        margin-left: 3rem !important;
      }
    
      .mx-lg-6 {
        margin-right: 4rem !important;
        margin-left: 4rem !important;
      }
    
      .mx-lg-7 {
        margin-right: 6rem !important;
        margin-left: 6rem !important;
      }
    
      .mx-lg-8 {
        margin-right: 8rem !important;
        margin-left: 8rem !important;
      }
    
      .mx-lg-9 {
        margin-right: 10rem !important;
        margin-left: 10rem !important;
      }
    
      .mx-lg-10 {
        margin-right: 12rem !important;
        margin-left: 12rem !important;
      }
    
      .mx-lg-11 {
        margin-right: 14rem !important;
        margin-left: 14rem !important;
      }
    
      .mx-lg-12 {
        margin-right: 16rem !important;
        margin-left: 16rem !important;
      }
    
      .mx-lg-auto {
        margin-right: auto !important;
        margin-left: auto !important;
      }
    
      .my-lg-0 {
        margin-top: 0 !important;
        margin-bottom: 0 !important;
      }
    
      .my-lg-1 {
        margin-top: 0.25rem !important;
        margin-bottom: 0.25rem !important;
      }
    
      .my-lg-2 {
        margin-top: 0.5rem !important;
        margin-bottom: 0.5rem !important;
      }
    
      .my-lg-3 {
        margin-top: 1rem !important;
        margin-bottom: 1rem !important;
      }
    
      .my-lg-4 {
        margin-top: 1.5rem !important;
        margin-bottom: 1.5rem !important;
      }
    
      .my-lg-5 {
        margin-top: 3rem !important;
        margin-bottom: 3rem !important;
      }
    
      .my-lg-6 {
        margin-top: 4rem !important;
        margin-bottom: 4rem !important;
      }
    
      .my-lg-7 {
        margin-top: 6rem !important;
        margin-bottom: 6rem !important;
      }
    
      .my-lg-8 {
        margin-top: 8rem !important;
        margin-bottom: 8rem !important;
      }
    
      .my-lg-9 {
        margin-top: 10rem !important;
        margin-bottom: 10rem !important;
      }
    
      .my-lg-10 {
        margin-top: 12rem !important;
        margin-bottom: 12rem !important;
      }
    
      .my-lg-11 {
        margin-top: 14rem !important;
        margin-bottom: 14rem !important;
      }
    
      .my-lg-12 {
        margin-top: 16rem !important;
        margin-bottom: 16rem !important;
      }
    
      .my-lg-auto {
        margin-top: auto !important;
        margin-bottom: auto !important;
      }
    
      .mt-lg-0 {
        margin-top: 0 !important;
      }
    
      .mt-lg-1 {
        margin-top: 0.25rem !important;
      }
    
      .mt-lg-2 {
        margin-top: 0.5rem !important;
      }
    
      .mt-lg-3 {
        margin-top: 1rem !important;
      }
    
      .mt-lg-4 {
        margin-top: 1.5rem !important;
      }
    
      .mt-lg-5 {
        margin-top: 3rem !important;
      }
    
      .mt-lg-6 {
        margin-top: 4rem !important;
      }
    
      .mt-lg-7 {
        margin-top: 6rem !important;
      }
    
      .mt-lg-8 {
        margin-top: 8rem !important;
      }
    
      .mt-lg-9 {
        margin-top: 10rem !important;
      }
    
      .mt-lg-10 {
        margin-top: 12rem !important;
      }
    
      .mt-lg-11 {
        margin-top: 14rem !important;
      }
    
      .mt-lg-12 {
        margin-top: 16rem !important;
      }
    
      .mt-lg-auto {
        margin-top: auto !important;
      }
    
      .me-lg-0 {
        margin-right: 0 !important;
      }
    
      .me-lg-1 {
        margin-right: 0.25rem !important;
      }
    
      .me-lg-2 {
        margin-right: 0.5rem !important;
      }
    
      .me-lg-3 {
        margin-right: 1rem !important;
      }
    
      .me-lg-4 {
        margin-right: 1.5rem !important;
      }
    
      .me-lg-5 {
        margin-right: 3rem !important;
      }
    
      .me-lg-6 {
        margin-right: 4rem !important;
      }
    
      .me-lg-7 {
        margin-right: 6rem !important;
      }
    
      .me-lg-8 {
        margin-right: 8rem !important;
      }
    
      .me-lg-9 {
        margin-right: 10rem !important;
      }
    
      .me-lg-10 {
        margin-right: 12rem !important;
      }
    
      .me-lg-11 {
        margin-right: 14rem !important;
      }
    
      .me-lg-12 {
        margin-right: 16rem !important;
      }
    
      .me-lg-auto {
        margin-right: auto !important;
      }
    
      .mb-lg-0 {
        margin-bottom: 0 !important;
      }
    
      .mb-lg-1 {
        margin-bottom: 0.25rem !important;
      }
    
      .mb-lg-2 {
        margin-bottom: 0.5rem !important;
      }
    
      .mb-lg-3 {
        margin-bottom: 1rem !important;
      }
    
      .mb-lg-4 {
        margin-bottom: 1.5rem !important;
      }
    
      .mb-lg-5 {
        margin-bottom: 3rem !important;
      }
    
      .mb-lg-6 {
        margin-bottom: 4rem !important;
      }
    
      .mb-lg-7 {
        margin-bottom: 6rem !important;
      }
    
      .mb-lg-8 {
        margin-bottom: 8rem !important;
      }
    
      .mb-lg-9 {
        margin-bottom: 10rem !important;
      }
    
      .mb-lg-10 {
        margin-bottom: 12rem !important;
      }
    
      .mb-lg-11 {
        margin-bottom: 14rem !important;
      }
    
      .mb-lg-12 {
        margin-bottom: 16rem !important;
      }
    
      .mb-lg-auto {
        margin-bottom: auto !important;
      }
    
      .ms-lg-0 {
        margin-left: 0 !important;
      }
    
      .ms-lg-1 {
        margin-left: 0.25rem !important;
      }
    
      .ms-lg-2 {
        margin-left: 0.5rem !important;
      }
    
      .ms-lg-3 {
        margin-left: 1rem !important;
      }
    
      .ms-lg-4 {
        margin-left: 1.5rem !important;
      }
    
      .ms-lg-5 {
        margin-left: 3rem !important;
      }
    
      .ms-lg-6 {
        margin-left: 4rem !important;
      }
    
      .ms-lg-7 {
        margin-left: 6rem !important;
      }
    
      .ms-lg-8 {
        margin-left: 8rem !important;
      }
    
      .ms-lg-9 {
        margin-left: 10rem !important;
      }
    
      .ms-lg-10 {
        margin-left: 12rem !important;
      }
    
      .ms-lg-11 {
        margin-left: 14rem !important;
      }
    
      .ms-lg-12 {
        margin-left: 16rem !important;
      }
    
      .ms-lg-auto {
        margin-left: auto !important;
      }
    
      .m-lg-n1 {
        margin: -0.25rem !important;
      }
    
      .m-lg-n2 {
        margin: -0.5rem !important;
      }
    
      .m-lg-n3 {
        margin: -1rem !important;
      }
    
      .m-lg-n4 {
        margin: -1.5rem !important;
      }
    
      .m-lg-n5 {
        margin: -3rem !important;
      }
    
      .m-lg-n6 {
        margin: -4rem !important;
      }
    
      .m-lg-n7 {
        margin: -6rem !important;
      }
    
      .m-lg-n8 {
        margin: -8rem !important;
      }
    
      .m-lg-n9 {
        margin: -10rem !important;
      }
    
      .m-lg-n10 {
        margin: -12rem !important;
      }
    
      .m-lg-n11 {
        margin: -14rem !important;
      }
    
      .m-lg-n12 {
        margin: -16rem !important;
      }
    
      .mx-lg-n1 {
        margin-right: -0.25rem !important;
        margin-left: -0.25rem !important;
      }
    
      .mx-lg-n2 {
        margin-right: -0.5rem !important;
        margin-left: -0.5rem !important;
      }
    
      .mx-lg-n3 {
        margin-right: -1rem !important;
        margin-left: -1rem !important;
      }
    
      .mx-lg-n4 {
        margin-right: -1.5rem !important;
        margin-left: -1.5rem !important;
      }
    
      .mx-lg-n5 {
        margin-right: -3rem !important;
        margin-left: -3rem !important;
      }
    
      .mx-lg-n6 {
        margin-right: -4rem !important;
        margin-left: -4rem !important;
      }
    
      .mx-lg-n7 {
        margin-right: -6rem !important;
        margin-left: -6rem !important;
      }
    
      .mx-lg-n8 {
        margin-right: -8rem !important;
        margin-left: -8rem !important;
      }
    
      .mx-lg-n9 {
        margin-right: -10rem !important;
        margin-left: -10rem !important;
      }
    
      .mx-lg-n10 {
        margin-right: -12rem !important;
        margin-left: -12rem !important;
      }
    
      .mx-lg-n11 {
        margin-right: -14rem !important;
        margin-left: -14rem !important;
      }
    
      .mx-lg-n12 {
        margin-right: -16rem !important;
        margin-left: -16rem !important;
      }
    
      .my-lg-n1 {
        margin-top: -0.25rem !important;
        margin-bottom: -0.25rem !important;
      }
    
      .my-lg-n2 {
        margin-top: -0.5rem !important;
        margin-bottom: -0.5rem !important;
      }
    
      .my-lg-n3 {
        margin-top: -1rem !important;
        margin-bottom: -1rem !important;
      }
    
      .my-lg-n4 {
        margin-top: -1.5rem !important;
        margin-bottom: -1.5rem !important;
      }
    
      .my-lg-n5 {
        margin-top: -3rem !important;
        margin-bottom: -3rem !important;
      }
    
      .my-lg-n6 {
        margin-top: -4rem !important;
        margin-bottom: -4rem !important;
      }
    
      .my-lg-n7 {
        margin-top: -6rem !important;
        margin-bottom: -6rem !important;
      }
    
      .my-lg-n8 {
        margin-top: -8rem !important;
        margin-bottom: -8rem !important;
      }
    
      .my-lg-n9 {
        margin-top: -10rem !important;
        margin-bottom: -10rem !important;
      }
    
      .my-lg-n10 {
        margin-top: -12rem !important;
        margin-bottom: -12rem !important;
      }
    
      .my-lg-n11 {
        margin-top: -14rem !important;
        margin-bottom: -14rem !important;
      }
    
      .my-lg-n12 {
        margin-top: -16rem !important;
        margin-bottom: -16rem !important;
      }
    
      .mt-lg-n1 {
        margin-top: -0.25rem !important;
      }
    
      .mt-lg-n2 {
        margin-top: -0.5rem !important;
      }
    
      .mt-lg-n3 {
        margin-top: -1rem !important;
      }
    
      .mt-lg-n4 {
        margin-top: -1.5rem !important;
      }
    
      .mt-lg-n5 {
        margin-top: -3rem !important;
      }
    
      .mt-lg-n6 {
        margin-top: -4rem !important;
      }
    
      .mt-lg-n7 {
        margin-top: -6rem !important;
      }
    
      .mt-lg-n8 {
        margin-top: -8rem !important;
      }
    
      .mt-lg-n9 {
        margin-top: -10rem !important;
      }
    
      .mt-lg-n10 {
        margin-top: -12rem !important;
      }
    
      .mt-lg-n11 {
        margin-top: -14rem !important;
      }
    
      .mt-lg-n12 {
        margin-top: -16rem !important;
      }
    
      .me-lg-n1 {
        margin-right: -0.25rem !important;
      }
    
      .me-lg-n2 {
        margin-right: -0.5rem !important;
      }
    
      .me-lg-n3 {
        margin-right: -1rem !important;
      }
    
      .me-lg-n4 {
        margin-right: -1.5rem !important;
      }
    
      .me-lg-n5 {
        margin-right: -3rem !important;
      }
    
      .me-lg-n6 {
        margin-right: -4rem !important;
      }
    
      .me-lg-n7 {
        margin-right: -6rem !important;
      }
    
      .me-lg-n8 {
        margin-right: -8rem !important;
      }
    
      .me-lg-n9 {
        margin-right: -10rem !important;
      }
    
      .me-lg-n10 {
        margin-right: -12rem !important;
      }
    
      .me-lg-n11 {
        margin-right: -14rem !important;
      }
    
      .me-lg-n12 {
        margin-right: -16rem !important;
      }
    
      .mb-lg-n1 {
        margin-bottom: -0.25rem !important;
      }
    
      .mb-lg-n2 {
        margin-bottom: -0.5rem !important;
      }
    
      .mb-lg-n3 {
        margin-bottom: -1rem !important;
      }
    
      .mb-lg-n4 {
        margin-bottom: -1.5rem !important;
      }
    
      .mb-lg-n5 {
        margin-bottom: -3rem !important;
      }
    
      .mb-lg-n6 {
        margin-bottom: -4rem !important;
      }
    
      .mb-lg-n7 {
        margin-bottom: -6rem !important;
      }
    
      .mb-lg-n8 {
        margin-bottom: -8rem !important;
      }
    
      .mb-lg-n9 {
        margin-bottom: -10rem !important;
      }
    
      .mb-lg-n10 {
        margin-bottom: -12rem !important;
      }
    
      .mb-lg-n11 {
        margin-bottom: -14rem !important;
      }
    
      .mb-lg-n12 {
        margin-bottom: -16rem !important;
      }
    
      .ms-lg-n1 {
        margin-left: -0.25rem !important;
      }
    
      .ms-lg-n2 {
        margin-left: -0.5rem !important;
      }
    
      .ms-lg-n3 {
        margin-left: -1rem !important;
      }
    
      .ms-lg-n4 {
        margin-left: -1.5rem !important;
      }
    
      .ms-lg-n5 {
        margin-left: -3rem !important;
      }
    
      .ms-lg-n6 {
        margin-left: -4rem !important;
      }
    
      .ms-lg-n7 {
        margin-left: -6rem !important;
      }
    
      .ms-lg-n8 {
        margin-left: -8rem !important;
      }
    
      .ms-lg-n9 {
        margin-left: -10rem !important;
      }
    
      .ms-lg-n10 {
        margin-left: -12rem !important;
      }
    
      .ms-lg-n11 {
        margin-left: -14rem !important;
      }
    
      .ms-lg-n12 {
        margin-left: -16rem !important;
      }
    
      .p-lg-0 {
        padding: 0 !important;
      }
    
      .p-lg-1 {
        padding: 0.25rem !important;
      }
    
      .p-lg-2 {
        padding: 0.5rem !important;
      }
    
      .p-lg-3 {
        padding: 1rem !important;
      }
    
      .p-lg-4 {
        padding: 1.5rem !important;
      }
    
      .p-lg-5 {
        padding: 3rem !important;
      }
    
      .p-lg-6 {
        padding: 4rem !important;
      }
    
      .p-lg-7 {
        padding: 6rem !important;
      }
    
      .p-lg-8 {
        padding: 8rem !important;
      }
    
      .p-lg-9 {
        padding: 10rem !important;
      }
    
      .p-lg-10 {
        padding: 12rem !important;
      }
    
      .p-lg-11 {
        padding: 14rem !important;
      }
    
      .p-lg-12 {
        padding: 16rem !important;
      }
    
      .px-lg-0 {
        padding-right: 0 !important;
        padding-left: 0 !important;
      }
    
      .px-lg-1 {
        padding-right: 0.25rem !important;
        padding-left: 0.25rem !important;
      }
    
      .px-lg-2 {
        padding-right: 0.5rem !important;
        padding-left: 0.5rem !important;
      }
    
      .px-lg-3 {
        padding-right: 1rem !important;
        padding-left: 1rem !important;
      }
    
      .px-lg-4 {
        padding-right: 1.5rem !important;
        padding-left: 1.5rem !important;
      }
    
      .px-lg-5 {
        padding-right: 3rem !important;
        padding-left: 3rem !important;
      }
    
      .px-lg-6 {
        padding-right: 4rem !important;
        padding-left: 4rem !important;
      }
    
      .px-lg-7 {
        padding-right: 6rem !important;
        padding-left: 6rem !important;
      }
    
      .px-lg-8 {
        padding-right: 8rem !important;
        padding-left: 8rem !important;
      }
    
      .px-lg-9 {
        padding-right: 10rem !important;
        padding-left: 10rem !important;
      }
    
      .px-lg-10 {
        padding-right: 12rem !important;
        padding-left: 12rem !important;
      }
    
      .px-lg-11 {
        padding-right: 14rem !important;
        padding-left: 14rem !important;
      }
    
      .px-lg-12 {
        padding-right: 16rem !important;
        padding-left: 16rem !important;
      }
    
      .py-lg-0 {
        padding-top: 0 !important;
        padding-bottom: 0 !important;
      }
    
      .py-lg-1 {
        padding-top: 0.25rem !important;
        padding-bottom: 0.25rem !important;
      }
    
      .py-lg-2 {
        padding-top: 0.5rem !important;
        padding-bottom: 0.5rem !important;
      }
    
      .py-lg-3 {
        padding-top: 1rem !important;
        padding-bottom: 1rem !important;
      }
    
      .py-lg-4 {
        padding-top: 1.5rem !important;
        padding-bottom: 1.5rem !important;
      }
    
      .py-lg-5 {
        padding-top: 3rem !important;
        padding-bottom: 3rem !important;
      }
    
      .py-lg-6 {
        padding-top: 4rem !important;
        padding-bottom: 4rem !important;
      }
    
      .py-lg-7 {
        padding-top: 6rem !important;
        padding-bottom: 6rem !important;
      }
    
      .py-lg-8 {
        padding-top: 8rem !important;
        padding-bottom: 8rem !important;
      }
    
      .py-lg-9 {
        padding-top: 10rem !important;
        padding-bottom: 10rem !important;
      }
    
      .py-lg-10 {
        padding-top: 12rem !important;
        padding-bottom: 12rem !important;
      }
    
      .py-lg-11 {
        padding-top: 14rem !important;
        padding-bottom: 14rem !important;
      }
    
      .py-lg-12 {
        padding-top: 16rem !important;
        padding-bottom: 16rem !important;
      }
    
      .pt-lg-0 {
        padding-top: 0 !important;
      }
    
      .pt-lg-1 {
        padding-top: 0.25rem !important;
      }
    
      .pt-lg-2 {
        padding-top: 0.5rem !important;
      }
    
      .pt-lg-3 {
        padding-top: 1rem !important;
      }
    
      .pt-lg-4 {
        padding-top: 1.5rem !important;
      }
    
      .pt-lg-5 {
        padding-top: 3rem !important;
      }
    
      .pt-lg-6 {
        padding-top: 4rem !important;
      }
    
      .pt-lg-7 {
        padding-top: 6rem !important;
      }
    
      .pt-lg-8 {
        padding-top: 8rem !important;
      }
    
      .pt-lg-9 {
        padding-top: 10rem !important;
      }
    
      .pt-lg-10 {
        padding-top: 12rem !important;
      }
    
      .pt-lg-11 {
        padding-top: 14rem !important;
      }
    
      .pt-lg-12 {
        padding-top: 16rem !important;
      }
    
      .pe-lg-0 {
        padding-right: 0 !important;
      }
    
      .pe-lg-1 {
        padding-right: 0.25rem !important;
      }
    
      .pe-lg-2 {
        padding-right: 0.5rem !important;
      }
    
      .pe-lg-3 {
        padding-right: 1rem !important;
      }
    
      .pe-lg-4 {
        padding-right: 1.5rem !important;
      }
    
      .pe-lg-5 {
        padding-right: 3rem !important;
      }
    
      .pe-lg-6 {
        padding-right: 4rem !important;
      }
    
      .pe-lg-7 {
        padding-right: 6rem !important;
      }
    
      .pe-lg-8 {
        padding-right: 8rem !important;
      }
    
      .pe-lg-9 {
        padding-right: 10rem !important;
      }
    
      .pe-lg-10 {
        padding-right: 12rem !important;
      }
    
      .pe-lg-11 {
        padding-right: 14rem !important;
      }
    
      .pe-lg-12 {
        padding-right: 16rem !important;
      }
    
      .pb-lg-0 {
        padding-bottom: 0 !important;
      }
    
      .pb-lg-1 {
        padding-bottom: 0.25rem !important;
      }
    
      .pb-lg-2 {
        padding-bottom: 0.5rem !important;
      }
    
      .pb-lg-3 {
        padding-bottom: 1rem !important;
      }
    
      .pb-lg-4 {
        padding-bottom: 1.5rem !important;
      }
    
      .pb-lg-5 {
        padding-bottom: 3rem !important;
      }
    
      .pb-lg-6 {
        padding-bottom: 4rem !important;
      }
    
      .pb-lg-7 {
        padding-bottom: 6rem !important;
      }
    
      .pb-lg-8 {
        padding-bottom: 8rem !important;
      }
    
      .pb-lg-9 {
        padding-bottom: 10rem !important;
      }
    
      .pb-lg-10 {
        padding-bottom: 12rem !important;
      }
    
      .pb-lg-11 {
        padding-bottom: 14rem !important;
      }
    
      .pb-lg-12 {
        padding-bottom: 16rem !important;
      }
    
      .ps-lg-0 {
        padding-left: 0 !important;
      }
    
      .ps-lg-1 {
        padding-left: 0.25rem !important;
      }
    
      .ps-lg-2 {
        padding-left: 0.5rem !important;
      }
    
      .ps-lg-3 {
        padding-left: 1rem !important;
      }
    
      .ps-lg-4 {
        padding-left: 1.5rem !important;
      }
    
      .ps-lg-5 {
        padding-left: 3rem !important;
      }
    
      .ps-lg-6 {
        padding-left: 4rem !important;
      }
    
      .ps-lg-7 {
        padding-left: 6rem !important;
      }
    
      .ps-lg-8 {
        padding-left: 8rem !important;
      }
    
      .ps-lg-9 {
        padding-left: 10rem !important;
      }
    
      .ps-lg-10 {
        padding-left: 12rem !important;
      }
    
      .ps-lg-11 {
        padding-left: 14rem !important;
      }
    
      .ps-lg-12 {
        padding-left: 16rem !important;
      }
    
      .gap-lg-0 {
        gap: 0 !important;
      }
    
      .gap-lg-1 {
        gap: 0.25rem !important;
      }
    
      .gap-lg-2 {
        gap: 0.5rem !important;
      }
    
      .gap-lg-3 {
        gap: 1rem !important;
      }
    
      .gap-lg-4 {
        gap: 1.5rem !important;
      }
    
      .gap-lg-5 {
        gap: 3rem !important;
      }
    
      .gap-lg-6 {
        gap: 4rem !important;
      }
    
      .gap-lg-7 {
        gap: 6rem !important;
      }
    
      .gap-lg-8 {
        gap: 8rem !important;
      }
    
      .gap-lg-9 {
        gap: 10rem !important;
      }
    
      .gap-lg-10 {
        gap: 12rem !important;
      }
    
      .gap-lg-11 {
        gap: 14rem !important;
      }
    
      .gap-lg-12 {
        gap: 16rem !important;
      }
    
      .row-gap-lg-0 {
        row-gap: 0 !important;
      }
    
      .row-gap-lg-1 {
        row-gap: 0.25rem !important;
      }
    
      .row-gap-lg-2 {
        row-gap: 0.5rem !important;
      }
    
      .row-gap-lg-3 {
        row-gap: 1rem !important;
      }
    
      .row-gap-lg-4 {
        row-gap: 1.5rem !important;
      }
    
      .row-gap-lg-5 {
        row-gap: 3rem !important;
      }
    
      .row-gap-lg-6 {
        row-gap: 4rem !important;
      }
    
      .row-gap-lg-7 {
        row-gap: 6rem !important;
      }
    
      .row-gap-lg-8 {
        row-gap: 8rem !important;
      }
    
      .row-gap-lg-9 {
        row-gap: 10rem !important;
      }
    
      .row-gap-lg-10 {
        row-gap: 12rem !important;
      }
    
      .row-gap-lg-11 {
        row-gap: 14rem !important;
      }
    
      .row-gap-lg-12 {
        row-gap: 16rem !important;
      }
    
      .column-gap-lg-0 {
        column-gap: 0 !important;
      }
    
      .column-gap-lg-1 {
        column-gap: 0.25rem !important;
      }
    
      .column-gap-lg-2 {
        column-gap: 0.5rem !important;
      }
    
      .column-gap-lg-3 {
        column-gap: 1rem !important;
      }
    
      .column-gap-lg-4 {
        column-gap: 1.5rem !important;
      }
    
      .column-gap-lg-5 {
        column-gap: 3rem !important;
      }
    
      .column-gap-lg-6 {
        column-gap: 4rem !important;
      }
    
      .column-gap-lg-7 {
        column-gap: 6rem !important;
      }
    
      .column-gap-lg-8 {
        column-gap: 8rem !important;
      }
    
      .column-gap-lg-9 {
        column-gap: 10rem !important;
      }
    
      .column-gap-lg-10 {
        column-gap: 12rem !important;
      }
    
      .column-gap-lg-11 {
        column-gap: 14rem !important;
      }
    
      .column-gap-lg-12 {
        column-gap: 16rem !important;
      }
    
      .text-lg-start {
        text-align: left !important;
      }
    
      .text-lg-end {
        text-align: right !important;
      }
    
      .text-lg-center {
        text-align: center !important;
      }
    
      .transform-scale-lg-5 {
        transform: scale(0.5) !important;
      }
    
      .transform-scale-lg-6 {
        transform: scale(0.6) !important;
      }
    
      .transform-scale-lg-7 {
        transform: scale(0.7) !important;
      }
    
      .transform-scale-lg-8 {
        transform: scale(0.8) !important;
      }
    
      .transform-scale-lg-9 {
        transform: scale(0.9) !important;
      }
    
      .transform-scale-lg-10 {
        transform: scale(1) !important;
      }
    
      .border-radius-top-start-lg {
        border-top-left-radius: 0.375rem !important;
      }
    
      .border-radius-top-start-lg-0 {
        border-top-left-radius: 0 !important;
      }
    
      .border-radius-top-start-lg-sm {
        border-top-left-radius: 0.125rem !important;
      }
    
      .border-radius-top-start-lg-md {
        border-top-left-radius: 0.375rem !important;
      }
    
      .border-radius-top-start-lg-lg {
        border-top-left-radius: 0.5rem !important;
      }
    
      .border-radius-top-start-lg-xl {
        border-top-left-radius: 0.75rem !important;
      }
    
      .border-radius-top-start-lg-2xl {
        border-top-left-radius: 1rem !important;
      }
    
      .border-radius-top-start-lg-circle {
        border-top-left-radius: 50% !important;
      }
    
      .border-radius-top-start-lg-pill {
        border-top-left-radius: 50rem !important;
      }
    
      .border-radius-top-end-lg {
        border-top-right-radius: 0.375rem !important;
      }
    
      .border-radius-top-end-lg-0 {
        border-top-right-radius: 0 !important;
      }
    
      .border-radius-top-end-lg-sm {
        border-top-right-radius: 0.125rem !important;
      }
    
      .border-radius-top-end-lg-md {
        border-top-right-radius: 0.375rem !important;
      }
    
      .border-radius-top-end-lg-lg {
        border-top-right-radius: 0.5rem !important;
      }
    
      .border-radius-top-end-lg-xl {
        border-top-right-radius: 0.75rem !important;
      }
    
      .border-radius-top-end-lg-2xl {
        border-top-right-radius: 1rem !important;
      }
    
      .border-radius-top-end-lg-circle {
        border-top-right-radius: 50% !important;
      }
    
      .border-radius-top-end-lg-pill {
        border-top-right-radius: 50rem !important;
      }
    
      .border-radius-bottom-start-lg {
        border-bottom-left-radius: 0.375rem !important;
      }
    
      .border-radius-bottom-start-lg-0 {
        border-bottom-left-radius: 0 !important;
      }
    
      .border-radius-bottom-start-lg-sm {
        border-bottom-left-radius: 0.125rem !important;
      }
    
      .border-radius-bottom-start-lg-md {
        border-bottom-left-radius: 0.375rem !important;
      }
    
      .border-radius-bottom-start-lg-lg {
        border-bottom-left-radius: 0.5rem !important;
      }
    
      .border-radius-bottom-start-lg-xl {
        border-bottom-left-radius: 0.75rem !important;
      }
    
      .border-radius-bottom-start-lg-2xl {
        border-bottom-left-radius: 1rem !important;
      }
    
      .border-radius-bottom-start-lg-circle {
        border-bottom-left-radius: 50% !important;
      }
    
      .border-radius-bottom-start-lg-pill {
        border-bottom-left-radius: 50rem !important;
      }
    
      .border-radius-bottom-end-lg {
        border-bottom-right-radius: 0.375rem !important;
      }
    
      .border-radius-bottom-end-lg-0 {
        border-bottom-right-radius: 0 !important;
      }
    
      .border-radius-bottom-end-lg-sm {
        border-bottom-right-radius: 0.125rem !important;
      }
    
      .border-radius-bottom-end-lg-md {
        border-bottom-right-radius: 0.375rem !important;
      }
    
      .border-radius-bottom-end-lg-lg {
        border-bottom-right-radius: 0.5rem !important;
      }
    
      .border-radius-bottom-end-lg-xl {
        border-bottom-right-radius: 0.75rem !important;
      }
    
      .border-radius-bottom-end-lg-2xl {
        border-bottom-right-radius: 1rem !important;
      }
    
      .border-radius-bottom-end-lg-circle {
        border-bottom-right-radius: 50% !important;
      }
    
      .border-radius-bottom-end-lg-pill {
        border-bottom-right-radius: 50rem !important;
      }
    }
    
    @media (min-width: 1200px) {
      .float-xl-start {
        float: left !important;
      }
    
      .float-xl-end {
        float: right !important;
      }
    
      .float-xl-none {
        float: none !important;
      }
    
      .object-fit-xl-contain {
        object-fit: contain !important;
      }
    
      .object-fit-xl-cover {
        object-fit: cover !important;
      }
    
      .object-fit-xl-fill {
        object-fit: fill !important;
      }
    
      .object-fit-xl-scale {
        object-fit: scale-down !important;
      }
    
      .object-fit-xl-none {
        object-fit: none !important;
      }
    
      .d-xl-inline {
        display: inline !important;
      }
    
      .d-xl-inline-block {
        display: inline-block !important;
      }
    
      .d-xl-block {
        display: block !important;
      }
    
      .d-xl-grid {
        display: grid !important;
      }
    
      .d-xl-table {
        display: table !important;
      }
    
      .d-xl-table-row {
        display: table-row !important;
      }
    
      .d-xl-table-cell {
        display: table-cell !important;
      }
    
      .d-xl-flex {
        display: flex !important;
      }
    
      .d-xl-inline-flex {
        display: inline-flex !important;
      }
    
      .d-xl-none {
        display: none !important;
      }
    
      .border-top-xl {
        border-top: 1px solid #d4d4d4 !important;
      }
    
      .border-top-xl-0 {
        border-top: 0 !important;
      }
    
      .border-end-xl {
        border-right: 1px solid #d4d4d4 !important;
      }
    
      .border-end-xl-0 {
        border-right: 0 !important;
      }
    
      .border-bottom-xl {
        border-bottom: 1px solid #d4d4d4 !important;
      }
    
      .border-bottom-xl-0 {
        border-bottom: 0 !important;
      }
    
      .border-start-xl {
        border-left: 1px solid #d4d4d4 !important;
      }
    
      .border-start-xl-0 {
        border-left: 0 !important;
      }
    
      .w-xl-0 {
        width: 0% !important;
      }
    
      .w-xl-1 {
        width: 1% !important;
      }
    
      .w-xl-2 {
        width: 2% !important;
      }
    
      .w-xl-3 {
        width: 3% !important;
      }
    
      .w-xl-4 {
        width: 4% !important;
      }
    
      .w-xl-5 {
        width: 5% !important;
      }
    
      .w-xl-6 {
        width: 6% !important;
      }
    
      .w-xl-7 {
        width: 7% !important;
      }
    
      .w-xl-8 {
        width: 8% !important;
      }
    
      .w-xl-9 {
        width: 9% !important;
      }
    
      .w-xl-10 {
        width: 10% !important;
      }
    
      .w-xl-15 {
        width: 15% !important;
      }
    
      .w-xl-20 {
        width: 20% !important;
      }
    
      .w-xl-25 {
        width: 25% !important;
      }
    
      .w-xl-30 {
        width: 30% !important;
      }
    
      .w-xl-35 {
        width: 35% !important;
      }
    
      .w-xl-40 {
        width: 40% !important;
      }
    
      .w-xl-45 {
        width: 45% !important;
      }
    
      .w-xl-50 {
        width: 50% !important;
      }
    
      .w-xl-55 {
        width: 55% !important;
      }
    
      .w-xl-60 {
        width: 60% !important;
      }
    
      .w-xl-65 {
        width: 65% !important;
      }
    
      .w-xl-70 {
        width: 70% !important;
      }
    
      .w-xl-75 {
        width: 75% !important;
      }
    
      .w-xl-80 {
        width: 80% !important;
      }
    
      .w-xl-85 {
        width: 85% !important;
      }
    
      .w-xl-90 {
        width: 90% !important;
      }
    
      .w-xl-95 {
        width: 95% !important;
      }
    
      .w-xl-100 {
        width: 100% !important;
      }
    
      .w-xl-auto {
        width: auto !important;
      }
    
      .flex-xl-fill {
        flex: 1 1 auto !important;
      }
    
      .flex-xl-row {
        flex-direction: row !important;
      }
    
      .flex-xl-column {
        flex-direction: column !important;
      }
    
      .flex-xl-row-reverse {
        flex-direction: row-reverse !important;
      }
    
      .flex-xl-column-reverse {
        flex-direction: column-reverse !important;
      }
    
      .flex-xl-grow-0 {
        flex-grow: 0 !important;
      }
    
      .flex-xl-grow-1 {
        flex-grow: 1 !important;
      }
    
      .flex-xl-shrink-0 {
        flex-shrink: 0 !important;
      }
    
      .flex-xl-shrink-1 {
        flex-shrink: 1 !important;
      }
    
      .flex-xl-wrap {
        flex-wrap: wrap !important;
      }
    
      .flex-xl-nowrap {
        flex-wrap: nowrap !important;
      }
    
      .flex-xl-wrap-reverse {
        flex-wrap: wrap-reverse !important;
      }
    
      .justify-content-xl-start {
        justify-content: flex-start !important;
      }
    
      .justify-content-xl-end {
        justify-content: flex-end !important;
      }
    
      .justify-content-xl-center {
        justify-content: center !important;
      }
    
      .justify-content-xl-between {
        justify-content: space-between !important;
      }
    
      .justify-content-xl-around {
        justify-content: space-around !important;
      }
    
      .justify-content-xl-evenly {
        justify-content: space-evenly !important;
      }
    
      .align-items-xl-start {
        align-items: flex-start !important;
      }
    
      .align-items-xl-end {
        align-items: flex-end !important;
      }
    
      .align-items-xl-center {
        align-items: center !important;
      }
    
      .align-items-xl-baseline {
        align-items: baseline !important;
      }
    
      .align-items-xl-stretch {
        align-items: stretch !important;
      }
    
      .align-content-xl-start {
        align-content: flex-start !important;
      }
    
      .align-content-xl-end {
        align-content: flex-end !important;
      }
    
      .align-content-xl-center {
        align-content: center !important;
      }
    
      .align-content-xl-between {
        align-content: space-between !important;
      }
    
      .align-content-xl-around {
        align-content: space-around !important;
      }
    
      .align-content-xl-stretch {
        align-content: stretch !important;
      }
    
      .align-self-xl-auto {
        align-self: auto !important;
      }
    
      .align-self-xl-start {
        align-self: flex-start !important;
      }
    
      .align-self-xl-end {
        align-self: flex-end !important;
      }
    
      .align-self-xl-center {
        align-self: center !important;
      }
    
      .align-self-xl-baseline {
        align-self: baseline !important;
      }
    
      .align-self-xl-stretch {
        align-self: stretch !important;
      }
    
      .order-xl-first {
        order: -1 !important;
      }
    
      .order-xl-0 {
        order: 0 !important;
      }
    
      .order-xl-1 {
        order: 1 !important;
      }
    
      .order-xl-2 {
        order: 2 !important;
      }
    
      .order-xl-3 {
        order: 3 !important;
      }
    
      .order-xl-4 {
        order: 4 !important;
      }
    
      .order-xl-5 {
        order: 5 !important;
      }
    
      .order-xl-last {
        order: 6 !important;
      }
    
      .m-xl-0 {
        margin: 0 !important;
      }
    
      .m-xl-1 {
        margin: 0.25rem !important;
      }
    
      .m-xl-2 {
        margin: 0.5rem !important;
      }
    
      .m-xl-3 {
        margin: 1rem !important;
      }
    
      .m-xl-4 {
        margin: 1.5rem !important;
      }
    
      .m-xl-5 {
        margin: 3rem !important;
      }
    
      .m-xl-6 {
        margin: 4rem !important;
      }
    
      .m-xl-7 {
        margin: 6rem !important;
      }
    
      .m-xl-8 {
        margin: 8rem !important;
      }
    
      .m-xl-9 {
        margin: 10rem !important;
      }
    
      .m-xl-10 {
        margin: 12rem !important;
      }
    
      .m-xl-11 {
        margin: 14rem !important;
      }
    
      .m-xl-12 {
        margin: 16rem !important;
      }
    
      .m-xl-auto {
        margin: auto !important;
      }
    
      .mx-xl-0 {
        margin-right: 0 !important;
        margin-left: 0 !important;
      }
    
      .mx-xl-1 {
        margin-right: 0.25rem !important;
        margin-left: 0.25rem !important;
      }
    
      .mx-xl-2 {
        margin-right: 0.5rem !important;
        margin-left: 0.5rem !important;
      }
    
      .mx-xl-3 {
        margin-right: 1rem !important;
        margin-left: 1rem !important;
      }
    
      .mx-xl-4 {
        margin-right: 1.5rem !important;
        margin-left: 1.5rem !important;
      }
    
      .mx-xl-5 {
        margin-right: 3rem !important;
        margin-left: 3rem !important;
      }
    
      .mx-xl-6 {
        margin-right: 4rem !important;
        margin-left: 4rem !important;
      }
    
      .mx-xl-7 {
        margin-right: 6rem !important;
        margin-left: 6rem !important;
      }
    
      .mx-xl-8 {
        margin-right: 8rem !important;
        margin-left: 8rem !important;
      }
    
      .mx-xl-9 {
        margin-right: 10rem !important;
        margin-left: 10rem !important;
      }
    
      .mx-xl-10 {
        margin-right: 12rem !important;
        margin-left: 12rem !important;
      }
    
      .mx-xl-11 {
        margin-right: 14rem !important;
        margin-left: 14rem !important;
      }
    
      .mx-xl-12 {
        margin-right: 16rem !important;
        margin-left: 16rem !important;
      }
    
      .mx-xl-auto {
        margin-right: auto !important;
        margin-left: auto !important;
      }
    
      .my-xl-0 {
        margin-top: 0 !important;
        margin-bottom: 0 !important;
      }
    
      .my-xl-1 {
        margin-top: 0.25rem !important;
        margin-bottom: 0.25rem !important;
      }
    
      .my-xl-2 {
        margin-top: 0.5rem !important;
        margin-bottom: 0.5rem !important;
      }
    
      .my-xl-3 {
        margin-top: 1rem !important;
        margin-bottom: 1rem !important;
      }
    
      .my-xl-4 {
        margin-top: 1.5rem !important;
        margin-bottom: 1.5rem !important;
      }
    
      .my-xl-5 {
        margin-top: 3rem !important;
        margin-bottom: 3rem !important;
      }
    
      .my-xl-6 {
        margin-top: 4rem !important;
        margin-bottom: 4rem !important;
      }
    
      .my-xl-7 {
        margin-top: 6rem !important;
        margin-bottom: 6rem !important;
      }
    
      .my-xl-8 {
        margin-top: 8rem !important;
        margin-bottom: 8rem !important;
      }
    
      .my-xl-9 {
        margin-top: 10rem !important;
        margin-bottom: 10rem !important;
      }
    
      .my-xl-10 {
        margin-top: 12rem !important;
        margin-bottom: 12rem !important;
      }
    
      .my-xl-11 {
        margin-top: 14rem !important;
        margin-bottom: 14rem !important;
      }
    
      .my-xl-12 {
        margin-top: 16rem !important;
        margin-bottom: 16rem !important;
      }
    
      .my-xl-auto {
        margin-top: auto !important;
        margin-bottom: auto !important;
      }
    
      .mt-xl-0 {
        margin-top: 0 !important;
      }
    
      .mt-xl-1 {
        margin-top: 0.25rem !important;
      }
    
      .mt-xl-2 {
        margin-top: 0.5rem !important;
      }
    
      .mt-xl-3 {
        margin-top: 1rem !important;
      }
    
      .mt-xl-4 {
        margin-top: 1.5rem !important;
      }
    
      .mt-xl-5 {
        margin-top: 3rem !important;
      }
    
      .mt-xl-6 {
        margin-top: 4rem !important;
      }
    
      .mt-xl-7 {
        margin-top: 6rem !important;
      }
    
      .mt-xl-8 {
        margin-top: 8rem !important;
      }
    
      .mt-xl-9 {
        margin-top: 10rem !important;
      }
    
      .mt-xl-10 {
        margin-top: 12rem !important;
      }
    
      .mt-xl-11 {
        margin-top: 14rem !important;
      }
    
      .mt-xl-12 {
        margin-top: 16rem !important;
      }
    
      .mt-xl-auto {
        margin-top: auto !important;
      }
    
      .me-xl-0 {
        margin-right: 0 !important;
      }
    
      .me-xl-1 {
        margin-right: 0.25rem !important;
      }
    
      .me-xl-2 {
        margin-right: 0.5rem !important;
      }
    
      .me-xl-3 {
        margin-right: 1rem !important;
      }
    
      .me-xl-4 {
        margin-right: 1.5rem !important;
      }
    
      .me-xl-5 {
        margin-right: 3rem !important;
      }
    
      .me-xl-6 {
        margin-right: 4rem !important;
      }
    
      .me-xl-7 {
        margin-right: 6rem !important;
      }
    
      .me-xl-8 {
        margin-right: 8rem !important;
      }
    
      .me-xl-9 {
        margin-right: 10rem !important;
      }
    
      .me-xl-10 {
        margin-right: 12rem !important;
      }
    
      .me-xl-11 {
        margin-right: 14rem !important;
      }
    
      .me-xl-12 {
        margin-right: 16rem !important;
      }
    
      .me-xl-auto {
        margin-right: auto !important;
      }
    
      .mb-xl-0 {
        margin-bottom: 0 !important;
      }
    
      .mb-xl-1 {
        margin-bottom: 0.25rem !important;
      }
    
      .mb-xl-2 {
        margin-bottom: 0.5rem !important;
      }
    
      .mb-xl-3 {
        margin-bottom: 1rem !important;
      }
    
      .mb-xl-4 {
        margin-bottom: 1.5rem !important;
      }
    
      .mb-xl-5 {
        margin-bottom: 3rem !important;
      }
    
      .mb-xl-6 {
        margin-bottom: 4rem !important;
      }
    
      .mb-xl-7 {
        margin-bottom: 6rem !important;
      }
    
      .mb-xl-8 {
        margin-bottom: 8rem !important;
      }
    
      .mb-xl-9 {
        margin-bottom: 10rem !important;
      }
    
      .mb-xl-10 {
        margin-bottom: 12rem !important;
      }
    
      .mb-xl-11 {
        margin-bottom: 14rem !important;
      }
    
      .mb-xl-12 {
        margin-bottom: 16rem !important;
      }
    
      .mb-xl-auto {
        margin-bottom: auto !important;
      }
    
      .ms-xl-0 {
        margin-left: 0 !important;
      }
    
      .ms-xl-1 {
        margin-left: 0.25rem !important;
      }
    
      .ms-xl-2 {
        margin-left: 0.5rem !important;
      }
    
      .ms-xl-3 {
        margin-left: 1rem !important;
      }
    
      .ms-xl-4 {
        margin-left: 1.5rem !important;
      }
    
      .ms-xl-5 {
        margin-left: 3rem !important;
      }
    
      .ms-xl-6 {
        margin-left: 4rem !important;
      }
    
      .ms-xl-7 {
        margin-left: 6rem !important;
      }
    
      .ms-xl-8 {
        margin-left: 8rem !important;
      }
    
      .ms-xl-9 {
        margin-left: 10rem !important;
      }
    
      .ms-xl-10 {
        margin-left: 12rem !important;
      }
    
      .ms-xl-11 {
        margin-left: 14rem !important;
      }
    
      .ms-xl-12 {
        margin-left: 16rem !important;
      }
    
      .ms-xl-auto {
        margin-left: auto !important;
      }
    
      .m-xl-n1 {
        margin: -0.25rem !important;
      }
    
      .m-xl-n2 {
        margin: -0.5rem !important;
      }
    
      .m-xl-n3 {
        margin: -1rem !important;
      }
    
      .m-xl-n4 {
        margin: -1.5rem !important;
      }
    
      .m-xl-n5 {
        margin: -3rem !important;
      }
    
      .m-xl-n6 {
        margin: -4rem !important;
      }
    
      .m-xl-n7 {
        margin: -6rem !important;
      }
    
      .m-xl-n8 {
        margin: -8rem !important;
      }
    
      .m-xl-n9 {
        margin: -10rem !important;
      }
    
      .m-xl-n10 {
        margin: -12rem !important;
      }
    
      .m-xl-n11 {
        margin: -14rem !important;
      }
    
      .m-xl-n12 {
        margin: -16rem !important;
      }
    
      .mx-xl-n1 {
        margin-right: -0.25rem !important;
        margin-left: -0.25rem !important;
      }
    
      .mx-xl-n2 {
        margin-right: -0.5rem !important;
        margin-left: -0.5rem !important;
      }
    
      .mx-xl-n3 {
        margin-right: -1rem !important;
        margin-left: -1rem !important;
      }
    
      .mx-xl-n4 {
        margin-right: -1.5rem !important;
        margin-left: -1.5rem !important;
      }
    
      .mx-xl-n5 {
        margin-right: -3rem !important;
        margin-left: -3rem !important;
      }
    
      .mx-xl-n6 {
        margin-right: -4rem !important;
        margin-left: -4rem !important;
      }
    
      .mx-xl-n7 {
        margin-right: -6rem !important;
        margin-left: -6rem !important;
      }
    
      .mx-xl-n8 {
        margin-right: -8rem !important;
        margin-left: -8rem !important;
      }
    
      .mx-xl-n9 {
        margin-right: -10rem !important;
        margin-left: -10rem !important;
      }
    
      .mx-xl-n10 {
        margin-right: -12rem !important;
        margin-left: -12rem !important;
      }
    
      .mx-xl-n11 {
        margin-right: -14rem !important;
        margin-left: -14rem !important;
      }
    
      .mx-xl-n12 {
        margin-right: -16rem !important;
        margin-left: -16rem !important;
      }
    
      .my-xl-n1 {
        margin-top: -0.25rem !important;
        margin-bottom: -0.25rem !important;
      }
    
      .my-xl-n2 {
        margin-top: -0.5rem !important;
        margin-bottom: -0.5rem !important;
      }
    
      .my-xl-n3 {
        margin-top: -1rem !important;
        margin-bottom: -1rem !important;
      }
    
      .my-xl-n4 {
        margin-top: -1.5rem !important;
        margin-bottom: -1.5rem !important;
      }
    
      .my-xl-n5 {
        margin-top: -3rem !important;
        margin-bottom: -3rem !important;
      }
    
      .my-xl-n6 {
        margin-top: -4rem !important;
        margin-bottom: -4rem !important;
      }
    
      .my-xl-n7 {
        margin-top: -6rem !important;
        margin-bottom: -6rem !important;
      }
    
      .my-xl-n8 {
        margin-top: -8rem !important;
        margin-bottom: -8rem !important;
      }
    
      .my-xl-n9 {
        margin-top: -10rem !important;
        margin-bottom: -10rem !important;
      }
    
      .my-xl-n10 {
        margin-top: -12rem !important;
        margin-bottom: -12rem !important;
      }
    
      .my-xl-n11 {
        margin-top: -14rem !important;
        margin-bottom: -14rem !important;
      }
    
      .my-xl-n12 {
        margin-top: -16rem !important;
        margin-bottom: -16rem !important;
      }
    
      .mt-xl-n1 {
        margin-top: -0.25rem !important;
      }
    
      .mt-xl-n2 {
        margin-top: -0.5rem !important;
      }
    
      .mt-xl-n3 {
        margin-top: -1rem !important;
      }
    
      .mt-xl-n4 {
        margin-top: -1.5rem !important;
      }
    
      .mt-xl-n5 {
        margin-top: -3rem !important;
      }
    
      .mt-xl-n6 {
        margin-top: -4rem !important;
      }
    
      .mt-xl-n7 {
        margin-top: -6rem !important;
      }
    
      .mt-xl-n8 {
        margin-top: -8rem !important;
      }
    
      .mt-xl-n9 {
        margin-top: -10rem !important;
      }
    
      .mt-xl-n10 {
        margin-top: -12rem !important;
      }
    
      .mt-xl-n11 {
        margin-top: -14rem !important;
      }
    
      .mt-xl-n12 {
        margin-top: -16rem !important;
      }
    
      .me-xl-n1 {
        margin-right: -0.25rem !important;
      }
    
      .me-xl-n2 {
        margin-right: -0.5rem !important;
      }
    
      .me-xl-n3 {
        margin-right: -1rem !important;
      }
    
      .me-xl-n4 {
        margin-right: -1.5rem !important;
      }
    
      .me-xl-n5 {
        margin-right: -3rem !important;
      }
    
      .me-xl-n6 {
        margin-right: -4rem !important;
      }
    
      .me-xl-n7 {
        margin-right: -6rem !important;
      }
    
      .me-xl-n8 {
        margin-right: -8rem !important;
      }
    
      .me-xl-n9 {
        margin-right: -10rem !important;
      }
    
      .me-xl-n10 {
        margin-right: -12rem !important;
      }
    
      .me-xl-n11 {
        margin-right: -14rem !important;
      }
    
      .me-xl-n12 {
        margin-right: -16rem !important;
      }
    
      .mb-xl-n1 {
        margin-bottom: -0.25rem !important;
      }
    
      .mb-xl-n2 {
        margin-bottom: -0.5rem !important;
      }
    
      .mb-xl-n3 {
        margin-bottom: -1rem !important;
      }
    
      .mb-xl-n4 {
        margin-bottom: -1.5rem !important;
      }
    
      .mb-xl-n5 {
        margin-bottom: -3rem !important;
      }
    
      .mb-xl-n6 {
        margin-bottom: -4rem !important;
      }
    
      .mb-xl-n7 {
        margin-bottom: -6rem !important;
      }
    
      .mb-xl-n8 {
        margin-bottom: -8rem !important;
      }
    
      .mb-xl-n9 {
        margin-bottom: -10rem !important;
      }
    
      .mb-xl-n10 {
        margin-bottom: -12rem !important;
      }
    
      .mb-xl-n11 {
        margin-bottom: -14rem !important;
      }
    
      .mb-xl-n12 {
        margin-bottom: -16rem !important;
      }
    
      .ms-xl-n1 {
        margin-left: -0.25rem !important;
      }
    
      .ms-xl-n2 {
        margin-left: -0.5rem !important;
      }
    
      .ms-xl-n3 {
        margin-left: -1rem !important;
      }
    
      .ms-xl-n4 {
        margin-left: -1.5rem !important;
      }
    
      .ms-xl-n5 {
        margin-left: -3rem !important;
      }
    
      .ms-xl-n6 {
        margin-left: -4rem !important;
      }
    
      .ms-xl-n7 {
        margin-left: -6rem !important;
      }
    
      .ms-xl-n8 {
        margin-left: -8rem !important;
      }
    
      .ms-xl-n9 {
        margin-left: -10rem !important;
      }
    
      .ms-xl-n10 {
        margin-left: -12rem !important;
      }
    
      .ms-xl-n11 {
        margin-left: -14rem !important;
      }
    
      .ms-xl-n12 {
        margin-left: -16rem !important;
      }
    
      .p-xl-0 {
        padding: 0 !important;
      }
    
      .p-xl-1 {
        padding: 0.25rem !important;
      }
    
      .p-xl-2 {
        padding: 0.5rem !important;
      }
    
      .p-xl-3 {
        padding: 1rem !important;
      }
    
      .p-xl-4 {
        padding: 1.5rem !important;
      }
    
      .p-xl-5 {
        padding: 3rem !important;
      }
    
      .p-xl-6 {
        padding: 4rem !important;
      }
    
      .p-xl-7 {
        padding: 6rem !important;
      }
    
      .p-xl-8 {
        padding: 8rem !important;
      }
    
      .p-xl-9 {
        padding: 10rem !important;
      }
    
      .p-xl-10 {
        padding: 12rem !important;
      }
    
      .p-xl-11 {
        padding: 14rem !important;
      }
    
      .p-xl-12 {
        padding: 16rem !important;
      }
    
      .px-xl-0 {
        padding-right: 0 !important;
        padding-left: 0 !important;
      }
    
      .px-xl-1 {
        padding-right: 0.25rem !important;
        padding-left: 0.25rem !important;
      }
    
      .px-xl-2 {
        padding-right: 0.5rem !important;
        padding-left: 0.5rem !important;
      }
    
      .px-xl-3 {
        padding-right: 1rem !important;
        padding-left: 1rem !important;
      }
    
      .px-xl-4 {
        padding-right: 1.5rem !important;
        padding-left: 1.5rem !important;
      }
    
      .px-xl-5 {
        padding-right: 3rem !important;
        padding-left: 3rem !important;
      }
    
      .px-xl-6 {
        padding-right: 4rem !important;
        padding-left: 4rem !important;
      }
    
      .px-xl-7 {
        padding-right: 6rem !important;
        padding-left: 6rem !important;
      }
    
      .px-xl-8 {
        padding-right: 8rem !important;
        padding-left: 8rem !important;
      }
    
      .px-xl-9 {
        padding-right: 10rem !important;
        padding-left: 10rem !important;
      }
    
      .px-xl-10 {
        padding-right: 12rem !important;
        padding-left: 12rem !important;
      }
    
      .px-xl-11 {
        padding-right: 14rem !important;
        padding-left: 14rem !important;
      }
    
      .px-xl-12 {
        padding-right: 16rem !important;
        padding-left: 16rem !important;
      }
    
      .py-xl-0 {
        padding-top: 0 !important;
        padding-bottom: 0 !important;
      }
    
      .py-xl-1 {
        padding-top: 0.25rem !important;
        padding-bottom: 0.25rem !important;
      }
    
      .py-xl-2 {
        padding-top: 0.5rem !important;
        padding-bottom: 0.5rem !important;
      }
    
      .py-xl-3 {
        padding-top: 1rem !important;
        padding-bottom: 1rem !important;
      }
    
      .py-xl-4 {
        padding-top: 1.5rem !important;
        padding-bottom: 1.5rem !important;
      }
    
      .py-xl-5 {
        padding-top: 3rem !important;
        padding-bottom: 3rem !important;
      }
    
      .py-xl-6 {
        padding-top: 4rem !important;
        padding-bottom: 4rem !important;
      }
    
      .py-xl-7 {
        padding-top: 6rem !important;
        padding-bottom: 6rem !important;
      }
    
      .py-xl-8 {
        padding-top: 8rem !important;
        padding-bottom: 8rem !important;
      }
    
      .py-xl-9 {
        padding-top: 10rem !important;
        padding-bottom: 10rem !important;
      }
    
      .py-xl-10 {
        padding-top: 12rem !important;
        padding-bottom: 12rem !important;
      }
    
      .py-xl-11 {
        padding-top: 14rem !important;
        padding-bottom: 14rem !important;
      }
    
      .py-xl-12 {
        padding-top: 16rem !important;
        padding-bottom: 16rem !important;
      }
    
      .pt-xl-0 {
        padding-top: 0 !important;
      }
    
      .pt-xl-1 {
        padding-top: 0.25rem !important;
      }
    
      .pt-xl-2 {
        padding-top: 0.5rem !important;
      }
    
      .pt-xl-3 {
        padding-top: 1rem !important;
      }
    
      .pt-xl-4 {
        padding-top: 1.5rem !important;
      }
    
      .pt-xl-5 {
        padding-top: 3rem !important;
      }
    
      .pt-xl-6 {
        padding-top: 4rem !important;
      }
    
      .pt-xl-7 {
        padding-top: 6rem !important;
      }
    
      .pt-xl-8 {
        padding-top: 8rem !important;
      }
    
      .pt-xl-9 {
        padding-top: 10rem !important;
      }
    
      .pt-xl-10 {
        padding-top: 12rem !important;
      }
    
      .pt-xl-11 {
        padding-top: 14rem !important;
      }
    
      .pt-xl-12 {
        padding-top: 16rem !important;
      }
    
      .pe-xl-0 {
        padding-right: 0 !important;
      }
    
      .pe-xl-1 {
        padding-right: 0.25rem !important;
      }
    
      .pe-xl-2 {
        padding-right: 0.5rem !important;
      }
    
      .pe-xl-3 {
        padding-right: 1rem !important;
      }
    
      .pe-xl-4 {
        padding-right: 1.5rem !important;
      }
    
      .pe-xl-5 {
        padding-right: 3rem !important;
      }
    
      .pe-xl-6 {
        padding-right: 4rem !important;
      }
    
      .pe-xl-7 {
        padding-right: 6rem !important;
      }
    
      .pe-xl-8 {
        padding-right: 8rem !important;
      }
    
      .pe-xl-9 {
        padding-right: 10rem !important;
      }
    
      .pe-xl-10 {
        padding-right: 12rem !important;
      }
    
      .pe-xl-11 {
        padding-right: 14rem !important;
      }
    
      .pe-xl-12 {
        padding-right: 16rem !important;
      }
    
      .pb-xl-0 {
        padding-bottom: 0 !important;
      }
    
      .pb-xl-1 {
        padding-bottom: 0.25rem !important;
      }
    
      .pb-xl-2 {
        padding-bottom: 0.5rem !important;
      }
    
      .pb-xl-3 {
        padding-bottom: 1rem !important;
      }
    
      .pb-xl-4 {
        padding-bottom: 1.5rem !important;
      }
    
      .pb-xl-5 {
        padding-bottom: 3rem !important;
      }
    
      .pb-xl-6 {
        padding-bottom: 4rem !important;
      }
    
      .pb-xl-7 {
        padding-bottom: 6rem !important;
      }
    
      .pb-xl-8 {
        padding-bottom: 8rem !important;
      }
    
      .pb-xl-9 {
        padding-bottom: 10rem !important;
      }
    
      .pb-xl-10 {
        padding-bottom: 12rem !important;
      }
    
      .pb-xl-11 {
        padding-bottom: 14rem !important;
      }
    
      .pb-xl-12 {
        padding-bottom: 16rem !important;
      }
    
      .ps-xl-0 {
        padding-left: 0 !important;
      }
    
      .ps-xl-1 {
        padding-left: 0.25rem !important;
      }
    
      .ps-xl-2 {
        padding-left: 0.5rem !important;
      }
    
      .ps-xl-3 {
        padding-left: 1rem !important;
      }
    
      .ps-xl-4 {
        padding-left: 1.5rem !important;
      }
    
      .ps-xl-5 {
        padding-left: 3rem !important;
      }
    
      .ps-xl-6 {
        padding-left: 4rem !important;
      }
    
      .ps-xl-7 {
        padding-left: 6rem !important;
      }
    
      .ps-xl-8 {
        padding-left: 8rem !important;
      }
    
      .ps-xl-9 {
        padding-left: 10rem !important;
      }
    
      .ps-xl-10 {
        padding-left: 12rem !important;
      }
    
      .ps-xl-11 {
        padding-left: 14rem !important;
      }
    
      .ps-xl-12 {
        padding-left: 16rem !important;
      }
    
      .gap-xl-0 {
        gap: 0 !important;
      }
    
      .gap-xl-1 {
        gap: 0.25rem !important;
      }
    
      .gap-xl-2 {
        gap: 0.5rem !important;
      }
    
      .gap-xl-3 {
        gap: 1rem !important;
      }
    
      .gap-xl-4 {
        gap: 1.5rem !important;
      }
    
      .gap-xl-5 {
        gap: 3rem !important;
      }
    
      .gap-xl-6 {
        gap: 4rem !important;
      }
    
      .gap-xl-7 {
        gap: 6rem !important;
      }
    
      .gap-xl-8 {
        gap: 8rem !important;
      }
    
      .gap-xl-9 {
        gap: 10rem !important;
      }
    
      .gap-xl-10 {
        gap: 12rem !important;
      }
    
      .gap-xl-11 {
        gap: 14rem !important;
      }
    
      .gap-xl-12 {
        gap: 16rem !important;
      }
    
      .row-gap-xl-0 {
        row-gap: 0 !important;
      }
    
      .row-gap-xl-1 {
        row-gap: 0.25rem !important;
      }
    
      .row-gap-xl-2 {
        row-gap: 0.5rem !important;
      }
    
      .row-gap-xl-3 {
        row-gap: 1rem !important;
      }
    
      .row-gap-xl-4 {
        row-gap: 1.5rem !important;
      }
    
      .row-gap-xl-5 {
        row-gap: 3rem !important;
      }
    
      .row-gap-xl-6 {
        row-gap: 4rem !important;
      }
    
      .row-gap-xl-7 {
        row-gap: 6rem !important;
      }
    
      .row-gap-xl-8 {
        row-gap: 8rem !important;
      }
    
      .row-gap-xl-9 {
        row-gap: 10rem !important;
      }
    
      .row-gap-xl-10 {
        row-gap: 12rem !important;
      }
    
      .row-gap-xl-11 {
        row-gap: 14rem !important;
      }
    
      .row-gap-xl-12 {
        row-gap: 16rem !important;
      }
    
      .column-gap-xl-0 {
        column-gap: 0 !important;
      }
    
      .column-gap-xl-1 {
        column-gap: 0.25rem !important;
      }
    
      .column-gap-xl-2 {
        column-gap: 0.5rem !important;
      }
    
      .column-gap-xl-3 {
        column-gap: 1rem !important;
      }
    
      .column-gap-xl-4 {
        column-gap: 1.5rem !important;
      }
    
      .column-gap-xl-5 {
        column-gap: 3rem !important;
      }
    
      .column-gap-xl-6 {
        column-gap: 4rem !important;
      }
    
      .column-gap-xl-7 {
        column-gap: 6rem !important;
      }
    
      .column-gap-xl-8 {
        column-gap: 8rem !important;
      }
    
      .column-gap-xl-9 {
        column-gap: 10rem !important;
      }
    
      .column-gap-xl-10 {
        column-gap: 12rem !important;
      }
    
      .column-gap-xl-11 {
        column-gap: 14rem !important;
      }
    
      .column-gap-xl-12 {
        column-gap: 16rem !important;
      }
    
      .text-xl-start {
        text-align: left !important;
      }
    
      .text-xl-end {
        text-align: right !important;
      }
    
      .text-xl-center {
        text-align: center !important;
      }
    
      .transform-scale-xl-5 {
        transform: scale(0.5) !important;
      }
    
      .transform-scale-xl-6 {
        transform: scale(0.6) !important;
      }
    
      .transform-scale-xl-7 {
        transform: scale(0.7) !important;
      }
    
      .transform-scale-xl-8 {
        transform: scale(0.8) !important;
      }
    
      .transform-scale-xl-9 {
        transform: scale(0.9) !important;
      }
    
      .transform-scale-xl-10 {
        transform: scale(1) !important;
      }
    
      .border-radius-top-start-xl {
        border-top-left-radius: 0.375rem !important;
      }
    
      .border-radius-top-start-xl-0 {
        border-top-left-radius: 0 !important;
      }
    
      .border-radius-top-start-xl-sm {
        border-top-left-radius: 0.125rem !important;
      }
    
      .border-radius-top-start-xl-md {
        border-top-left-radius: 0.375rem !important;
      }
    
      .border-radius-top-start-xl-lg {
        border-top-left-radius: 0.5rem !important;
      }
    
      .border-radius-top-start-xl-xl {
        border-top-left-radius: 0.75rem !important;
      }
    
      .border-radius-top-start-xl-2xl {
        border-top-left-radius: 1rem !important;
      }
    
      .border-radius-top-start-xl-circle {
        border-top-left-radius: 50% !important;
      }
    
      .border-radius-top-start-xl-pill {
        border-top-left-radius: 50rem !important;
      }
    
      .border-radius-top-end-xl {
        border-top-right-radius: 0.375rem !important;
      }
    
      .border-radius-top-end-xl-0 {
        border-top-right-radius: 0 !important;
      }
    
      .border-radius-top-end-xl-sm {
        border-top-right-radius: 0.125rem !important;
      }
    
      .border-radius-top-end-xl-md {
        border-top-right-radius: 0.375rem !important;
      }
    
      .border-radius-top-end-xl-lg {
        border-top-right-radius: 0.5rem !important;
      }
    
      .border-radius-top-end-xl-xl {
        border-top-right-radius: 0.75rem !important;
      }
    
      .border-radius-top-end-xl-2xl {
        border-top-right-radius: 1rem !important;
      }
    
      .border-radius-top-end-xl-circle {
        border-top-right-radius: 50% !important;
      }
    
      .border-radius-top-end-xl-pill {
        border-top-right-radius: 50rem !important;
      }
    
      .border-radius-bottom-start-xl {
        border-bottom-left-radius: 0.375rem !important;
      }
    
      .border-radius-bottom-start-xl-0 {
        border-bottom-left-radius: 0 !important;
      }
    
      .border-radius-bottom-start-xl-sm {
        border-bottom-left-radius: 0.125rem !important;
      }
    
      .border-radius-bottom-start-xl-md {
        border-bottom-left-radius: 0.375rem !important;
      }
    
      .border-radius-bottom-start-xl-lg {
        border-bottom-left-radius: 0.5rem !important;
      }
    
      .border-radius-bottom-start-xl-xl {
        border-bottom-left-radius: 0.75rem !important;
      }
    
      .border-radius-bottom-start-xl-2xl {
        border-bottom-left-radius: 1rem !important;
      }
    
      .border-radius-bottom-start-xl-circle {
        border-bottom-left-radius: 50% !important;
      }
    
      .border-radius-bottom-start-xl-pill {
        border-bottom-left-radius: 50rem !important;
      }
    
      .border-radius-bottom-end-xl {
        border-bottom-right-radius: 0.375rem !important;
      }
    
      .border-radius-bottom-end-xl-0 {
        border-bottom-right-radius: 0 !important;
      }
    
      .border-radius-bottom-end-xl-sm {
        border-bottom-right-radius: 0.125rem !important;
      }
    
      .border-radius-bottom-end-xl-md {
        border-bottom-right-radius: 0.375rem !important;
      }
    
      .border-radius-bottom-end-xl-lg {
        border-bottom-right-radius: 0.5rem !important;
      }
    
      .border-radius-bottom-end-xl-xl {
        border-bottom-right-radius: 0.75rem !important;
      }
    
      .border-radius-bottom-end-xl-2xl {
        border-bottom-right-radius: 1rem !important;
      }
    
      .border-radius-bottom-end-xl-circle {
        border-bottom-right-radius: 50% !important;
      }
    
      .border-radius-bottom-end-xl-pill {
        border-bottom-right-radius: 50rem !important;
      }
    }
    
    @media (min-width: 1400px) {
      .float-xxl-start {
        float: left !important;
      }
    
      .float-xxl-end {
        float: right !important;
      }
    
      .float-xxl-none {
        float: none !important;
      }
    
      .object-fit-xxl-contain {
        object-fit: contain !important;
      }
    
      .object-fit-xxl-cover {
        object-fit: cover !important;
      }
    
      .object-fit-xxl-fill {
        object-fit: fill !important;
      }
    
      .object-fit-xxl-scale {
        object-fit: scale-down !important;
      }
    
      .object-fit-xxl-none {
        object-fit: none !important;
      }
    
      .d-xxl-inline {
        display: inline !important;
      }
    
      .d-xxl-inline-block {
        display: inline-block !important;
      }
    
      .d-xxl-block {
        display: block !important;
      }
    
      .d-xxl-grid {
        display: grid !important;
      }
    
      .d-xxl-table {
        display: table !important;
      }
    
      .d-xxl-table-row {
        display: table-row !important;
      }
    
      .d-xxl-table-cell {
        display: table-cell !important;
      }
    
      .d-xxl-flex {
        display: flex !important;
      }
    
      .d-xxl-inline-flex {
        display: inline-flex !important;
      }
    
      .d-xxl-none {
        display: none !important;
      }
    
      .border-top-xxl {
        border-top: 1px solid #d4d4d4 !important;
      }
    
      .border-top-xxl-0 {
        border-top: 0 !important;
      }
    
      .border-end-xxl {
        border-right: 1px solid #d4d4d4 !important;
      }
    
      .border-end-xxl-0 {
        border-right: 0 !important;
      }
    
      .border-bottom-xxl {
        border-bottom: 1px solid #d4d4d4 !important;
      }
    
      .border-bottom-xxl-0 {
        border-bottom: 0 !important;
      }
    
      .border-start-xxl {
        border-left: 1px solid #d4d4d4 !important;
      }
    
      .border-start-xxl-0 {
        border-left: 0 !important;
      }
    
      .w-xxl-0 {
        width: 0% !important;
      }
    
      .w-xxl-1 {
        width: 1% !important;
      }
    
      .w-xxl-2 {
        width: 2% !important;
      }
    
      .w-xxl-3 {
        width: 3% !important;
      }
    
      .w-xxl-4 {
        width: 4% !important;
      }
    
      .w-xxl-5 {
        width: 5% !important;
      }
    
      .w-xxl-6 {
        width: 6% !important;
      }
    
      .w-xxl-7 {
        width: 7% !important;
      }
    
      .w-xxl-8 {
        width: 8% !important;
      }
    
      .w-xxl-9 {
        width: 9% !important;
      }
    
      .w-xxl-10 {
        width: 10% !important;
      }
    
      .w-xxl-15 {
        width: 15% !important;
      }
    
      .w-xxl-20 {
        width: 20% !important;
      }
    
      .w-xxl-25 {
        width: 25% !important;
      }
    
      .w-xxl-30 {
        width: 30% !important;
      }
    
      .w-xxl-35 {
        width: 35% !important;
      }
    
      .w-xxl-40 {
        width: 40% !important;
      }
    
      .w-xxl-45 {
        width: 45% !important;
      }
    
      .w-xxl-50 {
        width: 50% !important;
      }
    
      .w-xxl-55 {
        width: 55% !important;
      }
    
      .w-xxl-60 {
        width: 60% !important;
      }
    
      .w-xxl-65 {
        width: 65% !important;
      }
    
      .w-xxl-70 {
        width: 70% !important;
      }
    
      .w-xxl-75 {
        width: 75% !important;
      }
    
      .w-xxl-80 {
        width: 80% !important;
      }
    
      .w-xxl-85 {
        width: 85% !important;
      }
    
      .w-xxl-90 {
        width: 90% !important;
      }
    
      .w-xxl-95 {
        width: 95% !important;
      }
    
      .w-xxl-100 {
        width: 100% !important;
      }
    
      .w-xxl-auto {
        width: auto !important;
      }
    
      .flex-xxl-fill {
        flex: 1 1 auto !important;
      }
    
      .flex-xxl-row {
        flex-direction: row !important;
      }
    
      .flex-xxl-column {
        flex-direction: column !important;
      }
    
      .flex-xxl-row-reverse {
        flex-direction: row-reverse !important;
      }
    
      .flex-xxl-column-reverse {
        flex-direction: column-reverse !important;
      }
    
      .flex-xxl-grow-0 {
        flex-grow: 0 !important;
      }
    
      .flex-xxl-grow-1 {
        flex-grow: 1 !important;
      }
    
      .flex-xxl-shrink-0 {
        flex-shrink: 0 !important;
      }
    
      .flex-xxl-shrink-1 {
        flex-shrink: 1 !important;
      }
    
      .flex-xxl-wrap {
        flex-wrap: wrap !important;
      }
    
      .flex-xxl-nowrap {
        flex-wrap: nowrap !important;
      }
    
      .flex-xxl-wrap-reverse {
        flex-wrap: wrap-reverse !important;
      }
    
      .justify-content-xxl-start {
        justify-content: flex-start !important;
      }
    
      .justify-content-xxl-end {
        justify-content: flex-end !important;
      }
    
      .justify-content-xxl-center {
        justify-content: center !important;
      }
    
      .justify-content-xxl-between {
        justify-content: space-between !important;
      }
    
      .justify-content-xxl-around {
        justify-content: space-around !important;
      }
    
      .justify-content-xxl-evenly {
        justify-content: space-evenly !important;
      }
    
      .align-items-xxl-start {
        align-items: flex-start !important;
      }
    
      .align-items-xxl-end {
        align-items: flex-end !important;
      }
    
      .align-items-xxl-center {
        align-items: center !important;
      }
    
      .align-items-xxl-baseline {
        align-items: baseline !important;
      }
    
      .align-items-xxl-stretch {
        align-items: stretch !important;
      }
    
      .align-content-xxl-start {
        align-content: flex-start !important;
      }
    
      .align-content-xxl-end {
        align-content: flex-end !important;
      }
    
      .align-content-xxl-center {
        align-content: center !important;
      }
    
      .align-content-xxl-between {
        align-content: space-between !important;
      }
    
      .align-content-xxl-around {
        align-content: space-around !important;
      }
    
      .align-content-xxl-stretch {
        align-content: stretch !important;
      }
    
      .align-self-xxl-auto {
        align-self: auto !important;
      }
    
      .align-self-xxl-start {
        align-self: flex-start !important;
      }
    
      .align-self-xxl-end {
        align-self: flex-end !important;
      }
    
      .align-self-xxl-center {
        align-self: center !important;
      }
    
      .align-self-xxl-baseline {
        align-self: baseline !important;
      }
    
      .align-self-xxl-stretch {
        align-self: stretch !important;
      }
    
      .order-xxl-first {
        order: -1 !important;
      }
    
      .order-xxl-0 {
        order: 0 !important;
      }
    
      .order-xxl-1 {
        order: 1 !important;
      }
    
      .order-xxl-2 {
        order: 2 !important;
      }
    
      .order-xxl-3 {
        order: 3 !important;
      }
    
      .order-xxl-4 {
        order: 4 !important;
      }
    
      .order-xxl-5 {
        order: 5 !important;
      }
    
      .order-xxl-last {
        order: 6 !important;
      }
    
      .m-xxl-0 {
        margin: 0 !important;
      }
    
      .m-xxl-1 {
        margin: 0.25rem !important;
      }
    
      .m-xxl-2 {
        margin: 0.5rem !important;
      }
    
      .m-xxl-3 {
        margin: 1rem !important;
      }
    
      .m-xxl-4 {
        margin: 1.5rem !important;
      }
    
      .m-xxl-5 {
        margin: 3rem !important;
      }
    
      .m-xxl-6 {
        margin: 4rem !important;
      }
    
      .m-xxl-7 {
        margin: 6rem !important;
      }
    
      .m-xxl-8 {
        margin: 8rem !important;
      }
    
      .m-xxl-9 {
        margin: 10rem !important;
      }
    
      .m-xxl-10 {
        margin: 12rem !important;
      }
    
      .m-xxl-11 {
        margin: 14rem !important;
      }
    
      .m-xxl-12 {
        margin: 16rem !important;
      }
    
      .m-xxl-auto {
        margin: auto !important;
      }
    
      .mx-xxl-0 {
        margin-right: 0 !important;
        margin-left: 0 !important;
      }
    
      .mx-xxl-1 {
        margin-right: 0.25rem !important;
        margin-left: 0.25rem !important;
      }
    
      .mx-xxl-2 {
        margin-right: 0.5rem !important;
        margin-left: 0.5rem !important;
      }
    
      .mx-xxl-3 {
        margin-right: 1rem !important;
        margin-left: 1rem !important;
      }
    
      .mx-xxl-4 {
        margin-right: 1.5rem !important;
        margin-left: 1.5rem !important;
      }
    
      .mx-xxl-5 {
        margin-right: 3rem !important;
        margin-left: 3rem !important;
      }
    
      .mx-xxl-6 {
        margin-right: 4rem !important;
        margin-left: 4rem !important;
      }
    
      .mx-xxl-7 {
        margin-right: 6rem !important;
        margin-left: 6rem !important;
      }
    
      .mx-xxl-8 {
        margin-right: 8rem !important;
        margin-left: 8rem !important;
      }
    
      .mx-xxl-9 {
        margin-right: 10rem !important;
        margin-left: 10rem !important;
      }
    
      .mx-xxl-10 {
        margin-right: 12rem !important;
        margin-left: 12rem !important;
      }
    
      .mx-xxl-11 {
        margin-right: 14rem !important;
        margin-left: 14rem !important;
      }
    
      .mx-xxl-12 {
        margin-right: 16rem !important;
        margin-left: 16rem !important;
      }
    
      .mx-xxl-auto {
        margin-right: auto !important;
        margin-left: auto !important;
      }
    
      .my-xxl-0 {
        margin-top: 0 !important;
        margin-bottom: 0 !important;
      }
    
      .my-xxl-1 {
        margin-top: 0.25rem !important;
        margin-bottom: 0.25rem !important;
      }
    
      .my-xxl-2 {
        margin-top: 0.5rem !important;
        margin-bottom: 0.5rem !important;
      }
    
      .my-xxl-3 {
        margin-top: 1rem !important;
        margin-bottom: 1rem !important;
      }
    
      .my-xxl-4 {
        margin-top: 1.5rem !important;
        margin-bottom: 1.5rem !important;
      }
    
      .my-xxl-5 {
        margin-top: 3rem !important;
        margin-bottom: 3rem !important;
      }
    
      .my-xxl-6 {
        margin-top: 4rem !important;
        margin-bottom: 4rem !important;
      }
    
      .my-xxl-7 {
        margin-top: 6rem !important;
        margin-bottom: 6rem !important;
      }
    
      .my-xxl-8 {
        margin-top: 8rem !important;
        margin-bottom: 8rem !important;
      }
    
      .my-xxl-9 {
        margin-top: 10rem !important;
        margin-bottom: 10rem !important;
      }
    
      .my-xxl-10 {
        margin-top: 12rem !important;
        margin-bottom: 12rem !important;
      }
    
      .my-xxl-11 {
        margin-top: 14rem !important;
        margin-bottom: 14rem !important;
      }
    
      .my-xxl-12 {
        margin-top: 16rem !important;
        margin-bottom: 16rem !important;
      }
    
      .my-xxl-auto {
        margin-top: auto !important;
        margin-bottom: auto !important;
      }
    
      .mt-xxl-0 {
        margin-top: 0 !important;
      }
    
      .mt-xxl-1 {
        margin-top: 0.25rem !important;
      }
    
      .mt-xxl-2 {
        margin-top: 0.5rem !important;
      }
    
      .mt-xxl-3 {
        margin-top: 1rem !important;
      }
    
      .mt-xxl-4 {
        margin-top: 1.5rem !important;
      }
    
      .mt-xxl-5 {
        margin-top: 3rem !important;
      }
    
      .mt-xxl-6 {
        margin-top: 4rem !important;
      }
    
      .mt-xxl-7 {
        margin-top: 6rem !important;
      }
    
      .mt-xxl-8 {
        margin-top: 8rem !important;
      }
    
      .mt-xxl-9 {
        margin-top: 10rem !important;
      }
    
      .mt-xxl-10 {
        margin-top: 12rem !important;
      }
    
      .mt-xxl-11 {
        margin-top: 14rem !important;
      }
    
      .mt-xxl-12 {
        margin-top: 16rem !important;
      }
    
      .mt-xxl-auto {
        margin-top: auto !important;
      }
    
      .me-xxl-0 {
        margin-right: 0 !important;
      }
    
      .me-xxl-1 {
        margin-right: 0.25rem !important;
      }
    
      .me-xxl-2 {
        margin-right: 0.5rem !important;
      }
    
      .me-xxl-3 {
        margin-right: 1rem !important;
      }
    
      .me-xxl-4 {
        margin-right: 1.5rem !important;
      }
    
      .me-xxl-5 {
        margin-right: 3rem !important;
      }
    
      .me-xxl-6 {
        margin-right: 4rem !important;
      }
    
      .me-xxl-7 {
        margin-right: 6rem !important;
      }
    
      .me-xxl-8 {
        margin-right: 8rem !important;
      }
    
      .me-xxl-9 {
        margin-right: 10rem !important;
      }
    
      .me-xxl-10 {
        margin-right: 12rem !important;
      }
    
      .me-xxl-11 {
        margin-right: 14rem !important;
      }
    
      .me-xxl-12 {
        margin-right: 16rem !important;
      }
    
      .me-xxl-auto {
        margin-right: auto !important;
      }
    
      .mb-xxl-0 {
        margin-bottom: 0 !important;
      }
    
      .mb-xxl-1 {
        margin-bottom: 0.25rem !important;
      }
    
      .mb-xxl-2 {
        margin-bottom: 0.5rem !important;
      }
    
      .mb-xxl-3 {
        margin-bottom: 1rem !important;
      }
    
      .mb-xxl-4 {
        margin-bottom: 1.5rem !important;
      }
    
      .mb-xxl-5 {
        margin-bottom: 3rem !important;
      }
    
      .mb-xxl-6 {
        margin-bottom: 4rem !important;
      }
    
      .mb-xxl-7 {
        margin-bottom: 6rem !important;
      }
    
      .mb-xxl-8 {
        margin-bottom: 8rem !important;
      }
    
      .mb-xxl-9 {
        margin-bottom: 10rem !important;
      }
    
      .mb-xxl-10 {
        margin-bottom: 12rem !important;
      }
    
      .mb-xxl-11 {
        margin-bottom: 14rem !important;
      }
    
      .mb-xxl-12 {
        margin-bottom: 16rem !important;
      }
    
      .mb-xxl-auto {
        margin-bottom: auto !important;
      }
    
      .ms-xxl-0 {
        margin-left: 0 !important;
      }
    
      .ms-xxl-1 {
        margin-left: 0.25rem !important;
      }
    
      .ms-xxl-2 {
        margin-left: 0.5rem !important;
      }
    
      .ms-xxl-3 {
        margin-left: 1rem !important;
      }
    
      .ms-xxl-4 {
        margin-left: 1.5rem !important;
      }
    
      .ms-xxl-5 {
        margin-left: 3rem !important;
      }
    
      .ms-xxl-6 {
        margin-left: 4rem !important;
      }
    
      .ms-xxl-7 {
        margin-left: 6rem !important;
      }
    
      .ms-xxl-8 {
        margin-left: 8rem !important;
      }
    
      .ms-xxl-9 {
        margin-left: 10rem !important;
      }
    
      .ms-xxl-10 {
        margin-left: 12rem !important;
      }
    
      .ms-xxl-11 {
        margin-left: 14rem !important;
      }
    
      .ms-xxl-12 {
        margin-left: 16rem !important;
      }
    
      .ms-xxl-auto {
        margin-left: auto !important;
      }
    
      .m-xxl-n1 {
        margin: -0.25rem !important;
      }
    
      .m-xxl-n2 {
        margin: -0.5rem !important;
      }
    
      .m-xxl-n3 {
        margin: -1rem !important;
      }
    
      .m-xxl-n4 {
        margin: -1.5rem !important;
      }
    
      .m-xxl-n5 {
        margin: -3rem !important;
      }
    
      .m-xxl-n6 {
        margin: -4rem !important;
      }
    
      .m-xxl-n7 {
        margin: -6rem !important;
      }
    
      .m-xxl-n8 {
        margin: -8rem !important;
      }
    
      .m-xxl-n9 {
        margin: -10rem !important;
      }
    
      .m-xxl-n10 {
        margin: -12rem !important;
      }
    
      .m-xxl-n11 {
        margin: -14rem !important;
      }
    
      .m-xxl-n12 {
        margin: -16rem !important;
      }
    
      .mx-xxl-n1 {
        margin-right: -0.25rem !important;
        margin-left: -0.25rem !important;
      }
    
      .mx-xxl-n2 {
        margin-right: -0.5rem !important;
        margin-left: -0.5rem !important;
      }
    
      .mx-xxl-n3 {
        margin-right: -1rem !important;
        margin-left: -1rem !important;
      }
    
      .mx-xxl-n4 {
        margin-right: -1.5rem !important;
        margin-left: -1.5rem !important;
      }
    
      .mx-xxl-n5 {
        margin-right: -3rem !important;
        margin-left: -3rem !important;
      }
    
      .mx-xxl-n6 {
        margin-right: -4rem !important;
        margin-left: -4rem !important;
      }
    
      .mx-xxl-n7 {
        margin-right: -6rem !important;
        margin-left: -6rem !important;
      }
    
      .mx-xxl-n8 {
        margin-right: -8rem !important;
        margin-left: -8rem !important;
      }
    
      .mx-xxl-n9 {
        margin-right: -10rem !important;
        margin-left: -10rem !important;
      }
    
      .mx-xxl-n10 {
        margin-right: -12rem !important;
        margin-left: -12rem !important;
      }
    
      .mx-xxl-n11 {
        margin-right: -14rem !important;
        margin-left: -14rem !important;
      }
    
      .mx-xxl-n12 {
        margin-right: -16rem !important;
        margin-left: -16rem !important;
      }
    
      .my-xxl-n1 {
        margin-top: -0.25rem !important;
        margin-bottom: -0.25rem !important;
      }
    
      .my-xxl-n2 {
        margin-top: -0.5rem !important;
        margin-bottom: -0.5rem !important;
      }
    
      .my-xxl-n3 {
        margin-top: -1rem !important;
        margin-bottom: -1rem !important;
      }
    
      .my-xxl-n4 {
        margin-top: -1.5rem !important;
        margin-bottom: -1.5rem !important;
      }
    
      .my-xxl-n5 {
        margin-top: -3rem !important;
        margin-bottom: -3rem !important;
      }
    
      .my-xxl-n6 {
        margin-top: -4rem !important;
        margin-bottom: -4rem !important;
      }
    
      .my-xxl-n7 {
        margin-top: -6rem !important;
        margin-bottom: -6rem !important;
      }
    
      .my-xxl-n8 {
        margin-top: -8rem !important;
        margin-bottom: -8rem !important;
      }
    
      .my-xxl-n9 {
        margin-top: -10rem !important;
        margin-bottom: -10rem !important;
      }
    
      .my-xxl-n10 {
        margin-top: -12rem !important;
        margin-bottom: -12rem !important;
      }
    
      .my-xxl-n11 {
        margin-top: -14rem !important;
        margin-bottom: -14rem !important;
      }
    
      .my-xxl-n12 {
        margin-top: -16rem !important;
        margin-bottom: -16rem !important;
      }
    
      .mt-xxl-n1 {
        margin-top: -0.25rem !important;
      }
    
      .mt-xxl-n2 {
        margin-top: -0.5rem !important;
      }
    
      .mt-xxl-n3 {
        margin-top: -1rem !important;
      }
    
      .mt-xxl-n4 {
        margin-top: -1.5rem !important;
      }
    
      .mt-xxl-n5 {
        margin-top: -3rem !important;
      }
    
      .mt-xxl-n6 {
        margin-top: -4rem !important;
      }
    
      .mt-xxl-n7 {
        margin-top: -6rem !important;
      }
    
      .mt-xxl-n8 {
        margin-top: -8rem !important;
      }
    
      .mt-xxl-n9 {
        margin-top: -10rem !important;
      }
    
      .mt-xxl-n10 {
        margin-top: -12rem !important;
      }
    
      .mt-xxl-n11 {
        margin-top: -14rem !important;
      }
    
      .mt-xxl-n12 {
        margin-top: -16rem !important;
      }
    
      .me-xxl-n1 {
        margin-right: -0.25rem !important;
      }
    
      .me-xxl-n2 {
        margin-right: -0.5rem !important;
      }
    
      .me-xxl-n3 {
        margin-right: -1rem !important;
      }
    
      .me-xxl-n4 {
        margin-right: -1.5rem !important;
      }
    
      .me-xxl-n5 {
        margin-right: -3rem !important;
      }
    
      .me-xxl-n6 {
        margin-right: -4rem !important;
      }
    
      .me-xxl-n7 {
        margin-right: -6rem !important;
      }
    
      .me-xxl-n8 {
        margin-right: -8rem !important;
      }
    
      .me-xxl-n9 {
        margin-right: -10rem !important;
      }
    
      .me-xxl-n10 {
        margin-right: -12rem !important;
      }
    
      .me-xxl-n11 {
        margin-right: -14rem !important;
      }
    
      .me-xxl-n12 {
        margin-right: -16rem !important;
      }
    
      .mb-xxl-n1 {
        margin-bottom: -0.25rem !important;
      }
    
      .mb-xxl-n2 {
        margin-bottom: -0.5rem !important;
      }
    
      .mb-xxl-n3 {
        margin-bottom: -1rem !important;
      }
    
      .mb-xxl-n4 {
        margin-bottom: -1.5rem !important;
      }
    
      .mb-xxl-n5 {
        margin-bottom: -3rem !important;
      }
    
      .mb-xxl-n6 {
        margin-bottom: -4rem !important;
      }
    
      .mb-xxl-n7 {
        margin-bottom: -6rem !important;
      }
    
      .mb-xxl-n8 {
        margin-bottom: -8rem !important;
      }
    
      .mb-xxl-n9 {
        margin-bottom: -10rem !important;
      }
    
      .mb-xxl-n10 {
        margin-bottom: -12rem !important;
      }
    
      .mb-xxl-n11 {
        margin-bottom: -14rem !important;
      }
    
      .mb-xxl-n12 {
        margin-bottom: -16rem !important;
      }
    
      .ms-xxl-n1 {
        margin-left: -0.25rem !important;
      }
    
      .ms-xxl-n2 {
        margin-left: -0.5rem !important;
      }
    
      .ms-xxl-n3 {
        margin-left: -1rem !important;
      }
    
      .ms-xxl-n4 {
        margin-left: -1.5rem !important;
      }
    
      .ms-xxl-n5 {
        margin-left: -3rem !important;
      }
    
      .ms-xxl-n6 {
        margin-left: -4rem !important;
      }
    
      .ms-xxl-n7 {
        margin-left: -6rem !important;
      }
    
      .ms-xxl-n8 {
        margin-left: -8rem !important;
      }
    
      .ms-xxl-n9 {
        margin-left: -10rem !important;
      }
    
      .ms-xxl-n10 {
        margin-left: -12rem !important;
      }
    
      .ms-xxl-n11 {
        margin-left: -14rem !important;
      }
    
      .ms-xxl-n12 {
        margin-left: -16rem !important;
      }
    
      .p-xxl-0 {
        padding: 0 !important;
      }
    
      .p-xxl-1 {
        padding: 0.25rem !important;
      }
    
      .p-xxl-2 {
        padding: 0.5rem !important;
      }
    
      .p-xxl-3 {
        padding: 1rem !important;
      }
    
      .p-xxl-4 {
        padding: 1.5rem !important;
      }
    
      .p-xxl-5 {
        padding: 3rem !important;
      }
    
      .p-xxl-6 {
        padding: 4rem !important;
      }
    
      .p-xxl-7 {
        padding: 6rem !important;
      }
    
      .p-xxl-8 {
        padding: 8rem !important;
      }
    
      .p-xxl-9 {
        padding: 10rem !important;
      }
    
      .p-xxl-10 {
        padding: 12rem !important;
      }
    
      .p-xxl-11 {
        padding: 14rem !important;
      }
    
      .p-xxl-12 {
        padding: 16rem !important;
      }
    
      .px-xxl-0 {
        padding-right: 0 !important;
        padding-left: 0 !important;
      }
    
      .px-xxl-1 {
        padding-right: 0.25rem !important;
        padding-left: 0.25rem !important;
      }
    
      .px-xxl-2 {
        padding-right: 0.5rem !important;
        padding-left: 0.5rem !important;
      }
    
      .px-xxl-3 {
        padding-right: 1rem !important;
        padding-left: 1rem !important;
      }
    
      .px-xxl-4 {
        padding-right: 1.5rem !important;
        padding-left: 1.5rem !important;
      }
    
      .px-xxl-5 {
        padding-right: 3rem !important;
        padding-left: 3rem !important;
      }
    
      .px-xxl-6 {
        padding-right: 4rem !important;
        padding-left: 4rem !important;
      }
    
      .px-xxl-7 {
        padding-right: 6rem !important;
        padding-left: 6rem !important;
      }
    
      .px-xxl-8 {
        padding-right: 8rem !important;
        padding-left: 8rem !important;
      }
    
      .px-xxl-9 {
        padding-right: 10rem !important;
        padding-left: 10rem !important;
      }
    
      .px-xxl-10 {
        padding-right: 12rem !important;
        padding-left: 12rem !important;
      }
    
      .px-xxl-11 {
        padding-right: 14rem !important;
        padding-left: 14rem !important;
      }
    
      .px-xxl-12 {
        padding-right: 16rem !important;
        padding-left: 16rem !important;
      }
    
      .py-xxl-0 {
        padding-top: 0 !important;
        padding-bottom: 0 !important;
      }
    
      .py-xxl-1 {
        padding-top: 0.25rem !important;
        padding-bottom: 0.25rem !important;
      }
    
      .py-xxl-2 {
        padding-top: 0.5rem !important;
        padding-bottom: 0.5rem !important;
      }
    
      .py-xxl-3 {
        padding-top: 1rem !important;
        padding-bottom: 1rem !important;
      }
    
      .py-xxl-4 {
        padding-top: 1.5rem !important;
        padding-bottom: 1.5rem !important;
      }
    
      .py-xxl-5 {
        padding-top: 3rem !important;
        padding-bottom: 3rem !important;
      }
    
      .py-xxl-6 {
        padding-top: 4rem !important;
        padding-bottom: 4rem !important;
      }
    
      .py-xxl-7 {
        padding-top: 6rem !important;
        padding-bottom: 6rem !important;
      }
    
      .py-xxl-8 {
        padding-top: 8rem !important;
        padding-bottom: 8rem !important;
      }
    
      .py-xxl-9 {
        padding-top: 10rem !important;
        padding-bottom: 10rem !important;
      }
    
      .py-xxl-10 {
        padding-top: 12rem !important;
        padding-bottom: 12rem !important;
      }
    
      .py-xxl-11 {
        padding-top: 14rem !important;
        padding-bottom: 14rem !important;
      }
    
      .py-xxl-12 {
        padding-top: 16rem !important;
        padding-bottom: 16rem !important;
      }
    
      .pt-xxl-0 {
        padding-top: 0 !important;
      }
    
      .pt-xxl-1 {
        padding-top: 0.25rem !important;
      }
    
      .pt-xxl-2 {
        padding-top: 0.5rem !important;
      }
    
      .pt-xxl-3 {
        padding-top: 1rem !important;
      }
    
      .pt-xxl-4 {
        padding-top: 1.5rem !important;
      }
    
      .pt-xxl-5 {
        padding-top: 3rem !important;
      }
    
      .pt-xxl-6 {
        padding-top: 4rem !important;
      }
    
      .pt-xxl-7 {
        padding-top: 6rem !important;
      }
    
      .pt-xxl-8 {
        padding-top: 8rem !important;
      }
    
      .pt-xxl-9 {
        padding-top: 10rem !important;
      }
    
      .pt-xxl-10 {
        padding-top: 12rem !important;
      }
    
      .pt-xxl-11 {
        padding-top: 14rem !important;
      }
    
      .pt-xxl-12 {
        padding-top: 16rem !important;
      }
    
      .pe-xxl-0 {
        padding-right: 0 !important;
      }
    
      .pe-xxl-1 {
        padding-right: 0.25rem !important;
      }
    
      .pe-xxl-2 {
        padding-right: 0.5rem !important;
      }
    
      .pe-xxl-3 {
        padding-right: 1rem !important;
      }
    
      .pe-xxl-4 {
        padding-right: 1.5rem !important;
      }
    
      .pe-xxl-5 {
        padding-right: 3rem !important;
      }
    
      .pe-xxl-6 {
        padding-right: 4rem !important;
      }
    
      .pe-xxl-7 {
        padding-right: 6rem !important;
      }
    
      .pe-xxl-8 {
        padding-right: 8rem !important;
      }
    
      .pe-xxl-9 {
        padding-right: 10rem !important;
      }
    
      .pe-xxl-10 {
        padding-right: 12rem !important;
      }
    
      .pe-xxl-11 {
        padding-right: 14rem !important;
      }
    
      .pe-xxl-12 {
        padding-right: 16rem !important;
      }
    
      .pb-xxl-0 {
        padding-bottom: 0 !important;
      }
    
      .pb-xxl-1 {
        padding-bottom: 0.25rem !important;
      }
    
      .pb-xxl-2 {
        padding-bottom: 0.5rem !important;
      }
    
      .pb-xxl-3 {
        padding-bottom: 1rem !important;
      }
    
      .pb-xxl-4 {
        padding-bottom: 1.5rem !important;
      }
    
      .pb-xxl-5 {
        padding-bottom: 3rem !important;
      }
    
      .pb-xxl-6 {
        padding-bottom: 4rem !important;
      }
    
      .pb-xxl-7 {
        padding-bottom: 6rem !important;
      }
    
      .pb-xxl-8 {
        padding-bottom: 8rem !important;
      }
    
      .pb-xxl-9 {
        padding-bottom: 10rem !important;
      }
    
      .pb-xxl-10 {
        padding-bottom: 12rem !important;
      }
    
      .pb-xxl-11 {
        padding-bottom: 14rem !important;
      }
    
      .pb-xxl-12 {
        padding-bottom: 16rem !important;
      }
    
      .ps-xxl-0 {
        padding-left: 0 !important;
      }
    
      .ps-xxl-1 {
        padding-left: 0.25rem !important;
      }
    
      .ps-xxl-2 {
        padding-left: 0.5rem !important;
      }
    
      .ps-xxl-3 {
        padding-left: 1rem !important;
      }
    
      .ps-xxl-4 {
        padding-left: 1.5rem !important;
      }
    
      .ps-xxl-5 {
        padding-left: 3rem !important;
      }
    
      .ps-xxl-6 {
        padding-left: 4rem !important;
      }
    
      .ps-xxl-7 {
        padding-left: 6rem !important;
      }
    
      .ps-xxl-8 {
        padding-left: 8rem !important;
      }
    
      .ps-xxl-9 {
        padding-left: 10rem !important;
      }
    
      .ps-xxl-10 {
        padding-left: 12rem !important;
      }
    
      .ps-xxl-11 {
        padding-left: 14rem !important;
      }
    
      .ps-xxl-12 {
        padding-left: 16rem !important;
      }
    
      .gap-xxl-0 {
        gap: 0 !important;
      }
    
      .gap-xxl-1 {
        gap: 0.25rem !important;
      }
    
      .gap-xxl-2 {
        gap: 0.5rem !important;
      }
    
      .gap-xxl-3 {
        gap: 1rem !important;
      }
    
      .gap-xxl-4 {
        gap: 1.5rem !important;
      }
    
      .gap-xxl-5 {
        gap: 3rem !important;
      }
    
      .gap-xxl-6 {
        gap: 4rem !important;
      }
    
      .gap-xxl-7 {
        gap: 6rem !important;
      }
    
      .gap-xxl-8 {
        gap: 8rem !important;
      }
    
      .gap-xxl-9 {
        gap: 10rem !important;
      }
    
      .gap-xxl-10 {
        gap: 12rem !important;
      }
    
      .gap-xxl-11 {
        gap: 14rem !important;
      }
    
      .gap-xxl-12 {
        gap: 16rem !important;
      }
    
      .row-gap-xxl-0 {
        row-gap: 0 !important;
      }
    
      .row-gap-xxl-1 {
        row-gap: 0.25rem !important;
      }
    
      .row-gap-xxl-2 {
        row-gap: 0.5rem !important;
      }
    
      .row-gap-xxl-3 {
        row-gap: 1rem !important;
      }
    
      .row-gap-xxl-4 {
        row-gap: 1.5rem !important;
      }
    
      .row-gap-xxl-5 {
        row-gap: 3rem !important;
      }
    
      .row-gap-xxl-6 {
        row-gap: 4rem !important;
      }
    
      .row-gap-xxl-7 {
        row-gap: 6rem !important;
      }
    
      .row-gap-xxl-8 {
        row-gap: 8rem !important;
      }
    
      .row-gap-xxl-9 {
        row-gap: 10rem !important;
      }
    
      .row-gap-xxl-10 {
        row-gap: 12rem !important;
      }
    
      .row-gap-xxl-11 {
        row-gap: 14rem !important;
      }
    
      .row-gap-xxl-12 {
        row-gap: 16rem !important;
      }
    
      .column-gap-xxl-0 {
        column-gap: 0 !important;
      }
    
      .column-gap-xxl-1 {
        column-gap: 0.25rem !important;
      }
    
      .column-gap-xxl-2 {
        column-gap: 0.5rem !important;
      }
    
      .column-gap-xxl-3 {
        column-gap: 1rem !important;
      }
    
      .column-gap-xxl-4 {
        column-gap: 1.5rem !important;
      }
    
      .column-gap-xxl-5 {
        column-gap: 3rem !important;
      }
    
      .column-gap-xxl-6 {
        column-gap: 4rem !important;
      }
    
      .column-gap-xxl-7 {
        column-gap: 6rem !important;
      }
    
      .column-gap-xxl-8 {
        column-gap: 8rem !important;
      }
    
      .column-gap-xxl-9 {
        column-gap: 10rem !important;
      }
    
      .column-gap-xxl-10 {
        column-gap: 12rem !important;
      }
    
      .column-gap-xxl-11 {
        column-gap: 14rem !important;
      }
    
      .column-gap-xxl-12 {
        column-gap: 16rem !important;
      }
    
      .text-xxl-start {
        text-align: left !important;
      }
    
      .text-xxl-end {
        text-align: right !important;
      }
    
      .text-xxl-center {
        text-align: center !important;
      }
    
      .transform-scale-xxl-5 {
        transform: scale(0.5) !important;
      }
    
      .transform-scale-xxl-6 {
        transform: scale(0.6) !important;
      }
    
      .transform-scale-xxl-7 {
        transform: scale(0.7) !important;
      }
    
      .transform-scale-xxl-8 {
        transform: scale(0.8) !important;
      }
    
      .transform-scale-xxl-9 {
        transform: scale(0.9) !important;
      }
    
      .transform-scale-xxl-10 {
        transform: scale(1) !important;
      }
    
      .border-radius-top-start-xxl {
        border-top-left-radius: 0.375rem !important;
      }
    
      .border-radius-top-start-xxl-0 {
        border-top-left-radius: 0 !important;
      }
    
      .border-radius-top-start-xxl-sm {
        border-top-left-radius: 0.125rem !important;
      }
    
      .border-radius-top-start-xxl-md {
        border-top-left-radius: 0.375rem !important;
      }
    
      .border-radius-top-start-xxl-lg {
        border-top-left-radius: 0.5rem !important;
      }
    
      .border-radius-top-start-xxl-xl {
        border-top-left-radius: 0.75rem !important;
      }
    
      .border-radius-top-start-xxl-2xl {
        border-top-left-radius: 1rem !important;
      }
    
      .border-radius-top-start-xxl-circle {
        border-top-left-radius: 50% !important;
      }
    
      .border-radius-top-start-xxl-pill {
        border-top-left-radius: 50rem !important;
      }
    
      .border-radius-top-end-xxl {
        border-top-right-radius: 0.375rem !important;
      }
    
      .border-radius-top-end-xxl-0 {
        border-top-right-radius: 0 !important;
      }
    
      .border-radius-top-end-xxl-sm {
        border-top-right-radius: 0.125rem !important;
      }
    
      .border-radius-top-end-xxl-md {
        border-top-right-radius: 0.375rem !important;
      }
    
      .border-radius-top-end-xxl-lg {
        border-top-right-radius: 0.5rem !important;
      }
    
      .border-radius-top-end-xxl-xl {
        border-top-right-radius: 0.75rem !important;
      }
    
      .border-radius-top-end-xxl-2xl {
        border-top-right-radius: 1rem !important;
      }
    
      .border-radius-top-end-xxl-circle {
        border-top-right-radius: 50% !important;
      }
    
      .border-radius-top-end-xxl-pill {
        border-top-right-radius: 50rem !important;
      }
    
      .border-radius-bottom-start-xxl {
        border-bottom-left-radius: 0.375rem !important;
      }
    
      .border-radius-bottom-start-xxl-0 {
        border-bottom-left-radius: 0 !important;
      }
    
      .border-radius-bottom-start-xxl-sm {
        border-bottom-left-radius: 0.125rem !important;
      }
    
      .border-radius-bottom-start-xxl-md {
        border-bottom-left-radius: 0.375rem !important;
      }
    
      .border-radius-bottom-start-xxl-lg {
        border-bottom-left-radius: 0.5rem !important;
      }
    
      .border-radius-bottom-start-xxl-xl {
        border-bottom-left-radius: 0.75rem !important;
      }
    
      .border-radius-bottom-start-xxl-2xl {
        border-bottom-left-radius: 1rem !important;
      }
    
      .border-radius-bottom-start-xxl-circle {
        border-bottom-left-radius: 50% !important;
      }
    
      .border-radius-bottom-start-xxl-pill {
        border-bottom-left-radius: 50rem !important;
      }
    
      .border-radius-bottom-end-xxl {
        border-bottom-right-radius: 0.375rem !important;
      }
    
      .border-radius-bottom-end-xxl-0 {
        border-bottom-right-radius: 0 !important;
      }
    
      .border-radius-bottom-end-xxl-sm {
        border-bottom-right-radius: 0.125rem !important;
      }
    
      .border-radius-bottom-end-xxl-md {
        border-bottom-right-radius: 0.375rem !important;
      }
    
      .border-radius-bottom-end-xxl-lg {
        border-bottom-right-radius: 0.5rem !important;
      }
    
      .border-radius-bottom-end-xxl-xl {
        border-bottom-right-radius: 0.75rem !important;
      }
    
      .border-radius-bottom-end-xxl-2xl {
        border-bottom-right-radius: 1rem !important;
      }
    
      .border-radius-bottom-end-xxl-circle {
        border-bottom-right-radius: 50% !important;
      }
    
      .border-radius-bottom-end-xxl-pill {
        border-bottom-right-radius: 50rem !important;
      }
    }
    
    @media (min-width: 1200px) {
      .fs-1 {
        font-size: 3rem !important;
      }
    
      .fs-2 {
        font-size: 2.25rem !important;
      }
    
      .fs-3 {
        font-size: 1.875rem !important;
      }
    
      .fs-4 {
        font-size: 1.5rem !important;
      }
    }
    
    @media print {
      .d-print-inline {
        display: inline !important;
      }
    
      .d-print-inline-block {
        display: inline-block !important;
      }
    
      .d-print-block {
        display: block !important;
      }
    
      .d-print-grid {
        display: grid !important;
      }
    
      .d-print-table {
        display: table !important;
      }
    
      .d-print-table-row {
        display: table-row !important;
      }
    
      .d-print-table-cell {
        display: table-cell !important;
      }
    
      .d-print-flex {
        display: flex !important;
      }
    
      .d-print-inline-flex {
        display: inline-flex !important;
      }
    
      .d-print-none {
        display: none !important;
      }
    }
    
    /*!
    
    =========================================================
    * Material Dashboard - v1.0.7
    =========================================================
    
    * Product Page: https://www.creative-tim.com/product/material-dashboard
    * Copyright 2024 Creative Tim (https://www.creative-tim.com)
    * Licensed under MIT (site.license)
    
    * Coded by www.creative-tim.com
    
    =========================================================
    
    * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
    
    */
    .alert-primary {
      background-image: linear-gradient(195deg, #EC407A 0%, #D81B60 100%);
    }
    
    .alert-secondary {
      background-image: linear-gradient(195deg, #747b8a 0%, #495361 100%);
    }
    
    .alert-success {
      background-image: linear-gradient(195deg, #66BB6A 0%, #43A047 100%);
    }
    
    .alert-info {
      background-image: linear-gradient(195deg, #49a3f1 0%, #1A73E8 100%);
    }
    
    .alert-warning {
      background-image: linear-gradient(195deg, #FFA726 0%, #FB8C00 100%);
    }
    
    .alert-danger {
      background-image: linear-gradient(195deg, #EF5350 0%, #E53935 100%);
    }
    
    .alert-light {
      background-image: linear-gradient(195deg, #EBEFF4 0%, #CED4DA 100%);
    }
    
    .alert-dark {
      background-image: linear-gradient(195deg, #42424a 0%, #191919 100%);
    }
    
    .btn-close:focus {
      box-shadow: none;
    }
    
    .alert-dismissible .btn-close {
      background-image: none;
    }
    
    .avatar {
      color: #fff;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      font-size: 1rem;
      border-radius: 50rem;
      height: 48px;
      width: 48px;
      transition: all 0.2s ease-in-out;
    }
    
    .avatar img {
      width: 100%;
    }
    
    .avatar+.avatar-content {
      display: inline-block;
      margin-left: 0.75rem;
    }
    
    .avatar.avatar-raised {
      margin-top: -24px;
    }
    
    .avatar.avatar-scale-up:hover {
      transform: scale(1.2);
    }
    
    .active .avatar.avatar-scale-up {
      transform: scale(1.2);
    }
    
    .avatar-xxl {
      width: 110px !important;
      height: 110px !important;
    }
    
    .avatar-xxl.avatar-raised {
      margin-top: -55px;
    }
    
    .avatar-xl {
      width: 74px !important;
      height: 74px !important;
    }
    
    .avatar-xl.avatar-raised {
      margin-top: -37px;
    }
    
    .avatar-lg {
      width: 58px !important;
      height: 58px !important;
      font-size: 0.875rem;
    }
    
    .avatar-lg.avatar-raised {
      margin-top: -29px;
    }
    
    .avatar-sm {
      width: 36px !important;
      height: 36px !important;
      font-size: 0.875rem;
    }
    
    .avatar-sm.avatar-raised {
      margin-top: -18px;
    }
    
    .avatar-xs {
      width: 24px !important;
      height: 24px !important;
      font-size: 0.75rem;
    }
    
    .avatar-xs.avatar-raised {
      margin-top: -12px;
    }
    
    .avatar-group .avatar {
      position: relative;
      z-index: 2;
      border: 2px solid #fff;
    }
    
    .avatar-group .avatar:hover {
      z-index: 3;
    }
    
    .avatar-group .avatar+.avatar {
      margin-left: -1rem;
    }
    
    .badge.bg-primary {
      background: #e91e63;
    }
    
    .badge.bg-secondary {
      background: #737373;
    }
    
    .badge.bg-success {
      background: #4CAF50;
    }
    
    .badge.bg-info {
      background: #1A73E8;
    }
    
    .badge.bg-warning {
      background: #fb8c00;
    }
    
    .badge.bg-danger {
      background: #F44335;
    }
    
    .badge.bg-light {
      background: #e5e5e5;
    }
    
    .badge.bg-dark {
      background: #262626;
    }
    
    .badge.bg-white {
      background: #fff;
    }
    
    .badge.bg-dark-blue {
      background: #1A237E;
    }
    
    .badge {
      text-transform: uppercase;
    }
    
    .btn {
      margin-bottom: 1rem;
      letter-spacing: 0;
      background-size: 150%;
      background-position-x: 25%;
      position: relative;
      overflow: hidden;
      -webkit-appearance: none;
    }
    
    .btn:not([class*=btn-outline-]) {
      border: 0;
    }
    
    .btn:active,
    .btn:active:focus,
    .btn:active:hover {
      box-shadow: 0 3px 5px -1px rgba(0, 0, 0, 0.09), 0 2px 3px -1px rgba(0, 0, 0, 0.07);
      transform: none;
      opacity: 0.85;
    }
    
    .btn.bg-white:hover {
      color: #737373;
    }
    
    .btn.btn-link {
      box-shadow: none;
      font-weight: 500;
    }
    
    .btn.btn-link:hover,
    .btn.btn-link:focus {
      box-shadow: none;
    }
    
    .btn.btn-round {
      border-radius: 1.875rem;
    }
    
    .btn.btn-icon-only {
      width: 2.375rem;
      height: 2.375rem;
      padding: 0.7rem 0.7rem;
    }
    
    .btn.btn-sm.btn-icon-only,
    .btn-group-sm>.btn.btn-icon-only {
      width: 1.5rem;
      height: 1.5rem;
      padding: 0.3rem 0.3rem;
    }
    
    .btn.btn-sm i,
    .btn-group-sm>.btn i {
      font-size: 0.5rem;
    }
    
    .btn.btn-lg.btn-icon-only,
    .btn-group-lg>.btn.btn-icon-only {
      width: 3.25rem;
      height: 3.25rem;
      padding: 1rem 1rem;
    }
    
    .btn.btn-lg i,
    .btn-group-lg>.btn i {
      font-size: 1.2rem;
      position: relative;
      top: 0px;
    }
    
    .btn.btn-rounded {
      border-radius: 1.875rem;
    }
    
    .btn .material-symbols-rounded {
      vertical-align: middle;
      margin-top: -1px;
      margin-bottom: -1px;
      font-size: 1.1rem;
      display: inline-block;
      top: 0;
    }
    
    .btn-check:checked+.btn svg .color-background {
      fill: #fff;
    }
    
    .btn-check:checked+.btn:hover svg .color-background {
      fill: #262626;
    }
    
    .icon-move-right i {
      transition: all 0.2s cubic-bezier(0.34, 1.61, 0.7, 1.3);
    }
    
    .icon-move-right:hover i,
    .icon-move-right:focus i {
      transform: translateX(5px);
    }
    
    .icon-move-left i {
      transition: all 0.2s cubic-bezier(0.34, 1.61, 0.7, 1.3);
    }
    
    .icon-move-left:hover i,
    .icon-move-left:focus i {
      transform: translateX(-5px);
    }
    
    .btn-primary,
    .btn.bg-gradient-primary {
      box-shadow: 0 2px 2px 0 rgba(233, 30, 99, 0.1), 0 3px 1px -2px rgba(233, 30, 99, 0.18), 0 1px 5px 0 rgba(233, 30, 99, 0.15);
    }
    
    .btn-primary:hover,
    .btn.bg-gradient-primary:hover {
      background-color: #e91e63;
      border-color: #e91e63;
      box-shadow: 0 8px 14px -8px rgba(233, 30, 99, 0.3), 0 3px 18px 0 rgba(233, 30, 99, 0.1), 0 7px 8px -4px rgba(233, 30, 99, 0.18);
    }
    
    .btn-primary .btn.bg-outline-primary,
    .btn.bg-gradient-primary .btn.bg-outline-primary {
      border: 1px solid #e91e63;
    }
    
    .btn-primary:not(:disabled):not(.disabled).active,
    .btn-primary:not(:disabled):not(.disabled):active,
    .show>.btn-primary.dropdown-toggle,
    .btn.bg-gradient-primary:not(:disabled):not(.disabled).active,
    .btn.bg-gradient-primary:not(:disabled):not(.disabled):active,
    .show>.btn.bg-gradient-primary.dropdown-toggle {
      color: color-yiq(#e91e63);
      background-color: #e91e63;
    }
    
    .btn-primary.focus,
    .btn-primary:focus,
    .btn.bg-gradient-primary.focus,
    .btn.bg-gradient-primary:focus {
      color: #fff;
    }
    
    .btn-outline-primary {
      box-shadow: none;
    }
    
    .btn-outline-primary:hover:not(.active) {
      background-color: transparent;
      opacity: 0.75;
      box-shadow: none;
      color: #e91e63;
    }
    
    .btn-secondary,
    .btn.bg-gradient-secondary {
      box-shadow: 0 2px 2px 0 rgba(115, 115, 115, 0.1), 0 3px 1px -2px rgba(115, 115, 115, 0.18), 0 1px 5px 0 rgba(115, 115, 115, 0.15);
    }
    
    .btn-secondary:hover,
    .btn.bg-gradient-secondary:hover {
      background-color: #737373;
      border-color: #737373;
      box-shadow: 0 8px 14px -8px rgba(115, 115, 115, 0.3), 0 3px 18px 0 rgba(115, 115, 115, 0.1), 0 7px 8px -4px rgba(115, 115, 115, 0.18);
    }
    
    .btn-secondary .btn.bg-outline-secondary,
    .btn.bg-gradient-secondary .btn.bg-outline-secondary {
      border: 1px solid #737373;
    }
    
    .btn-secondary:not(:disabled):not(.disabled).active,
    .btn-secondary:not(:disabled):not(.disabled):active,
    .show>.btn-secondary.dropdown-toggle,
    .btn.bg-gradient-secondary:not(:disabled):not(.disabled).active,
    .btn.bg-gradient-secondary:not(:disabled):not(.disabled):active,
    .show>.btn.bg-gradient-secondary.dropdown-toggle {
      color: color-yiq(#737373);
      background-color: #737373;
    }
    
    .btn-secondary.focus,
    .btn-secondary:focus,
    .btn.bg-gradient-secondary.focus,
    .btn.bg-gradient-secondary:focus {
      color: #fff;
    }
    
    .btn-outline-secondary {
      box-shadow: none;
    }
    
    .btn-outline-secondary:hover:not(.active) {
      background-color: transparent;
      opacity: 0.75;
      box-shadow: none;
      color: #737373;
    }
    
    .btn-success,
    .btn.bg-gradient-success {
      box-shadow: 0 2px 2px 0 rgba(76, 175, 80, 0.1), 0 3px 1px -2px rgba(76, 175, 80, 0.18), 0 1px 5px 0 rgba(76, 175, 80, 0.15);
    }
    
    .btn-success:hover,
    .btn.bg-gradient-success:hover {
      background-color: #4CAF50;
      border-color: #4CAF50;
      box-shadow: 0 8px 14px -8px rgba(76, 175, 80, 0.3), 0 3px 18px 0 rgba(76, 175, 80, 0.1), 0 7px 8px -4px rgba(76, 175, 80, 0.18);
    }
    
    .btn-success .btn.bg-outline-success,
    .btn.bg-gradient-success .btn.bg-outline-success {
      border: 1px solid #4CAF50;
    }
    
    .btn-success:not(:disabled):not(.disabled).active,
    .btn-success:not(:disabled):not(.disabled):active,
    .show>.btn-success.dropdown-toggle,
    .btn.bg-gradient-success:not(:disabled):not(.disabled).active,
    .btn.bg-gradient-success:not(:disabled):not(.disabled):active,
    .show>.btn.bg-gradient-success.dropdown-toggle {
      color: color-yiq(#4CAF50);
      background-color: #4CAF50;
    }
    
    .btn-success.focus,
    .btn-success:focus,
    .btn.bg-gradient-success.focus,
    .btn.bg-gradient-success:focus {
      color: #fff;
    }
    
    .btn-outline-success {
      box-shadow: none;
    }
    
    .btn-outline-success:hover:not(.active) {
      background-color: transparent;
      opacity: 0.75;
      box-shadow: none;
      color: #4CAF50;
    }
    
    .btn-info,
    .btn.bg-gradient-info {
      box-shadow: 0 2px 2px 0 rgba(26, 115, 232, 0.1), 0 3px 1px -2px rgba(26, 115, 232, 0.18), 0 1px 5px 0 rgba(26, 115, 232, 0.15);
    }
    
    .btn-info:hover,
    .btn.bg-gradient-info:hover {
      background-color: #1A73E8;
      border-color: #1A73E8;
      box-shadow: 0 8px 14px -8px rgba(26, 115, 232, 0.3), 0 3px 18px 0 rgba(26, 115, 232, 0.1), 0 7px 8px -4px rgba(26, 115, 232, 0.18);
    }
    
    .btn-info .btn.bg-outline-info,
    .btn.bg-gradient-info .btn.bg-outline-info {
      border: 1px solid #1A73E8;
    }
    
    .btn-info:not(:disabled):not(.disabled).active,
    .btn-info:not(:disabled):not(.disabled):active,
    .show>.btn-info.dropdown-toggle,
    .btn.bg-gradient-info:not(:disabled):not(.disabled).active,
    .btn.bg-gradient-info:not(:disabled):not(.disabled):active,
    .show>.btn.bg-gradient-info.dropdown-toggle {
      color: color-yiq(#1A73E8);
      background-color: #1A73E8;
    }
    
    .btn-info.focus,
    .btn-info:focus,
    .btn.bg-gradient-info.focus,
    .btn.bg-gradient-info:focus {
      color: #fff;
    }
    
    .btn-outline-info {
      box-shadow: none;
    }
    
    .btn-outline-info:hover:not(.active) {
      background-color: transparent;
      opacity: 0.75;
      box-shadow: none;
      color: #1A73E8;
    }
    
    .btn-warning,
    .btn.bg-gradient-warning {
      box-shadow: 0 2px 2px 0 rgba(251, 140, 0, 0.1), 0 3px 1px -2px rgba(251, 140, 0, 0.18), 0 1px 5px 0 rgba(251, 140, 0, 0.15);
    }
    
    .btn-warning:hover,
    .btn.bg-gradient-warning:hover {
      background-color: #fb8c00;
      border-color: #fb8c00;
      box-shadow: 0 8px 14px -8px rgba(251, 140, 0, 0.3), 0 3px 18px 0 rgba(251, 140, 0, 0.1), 0 7px 8px -4px rgba(251, 140, 0, 0.18);
    }
    
    .btn-warning .btn.bg-outline-warning,
    .btn.bg-gradient-warning .btn.bg-outline-warning {
      border: 1px solid #fb8c00;
    }
    
    .btn-warning:not(:disabled):not(.disabled).active,
    .btn-warning:not(:disabled):not(.disabled):active,
    .show>.btn-warning.dropdown-toggle,
    .btn.bg-gradient-warning:not(:disabled):not(.disabled).active,
    .btn.bg-gradient-warning:not(:disabled):not(.disabled):active,
    .show>.btn.bg-gradient-warning.dropdown-toggle {
      color: color-yiq(#fb8c00);
      background-color: #fb8c00;
    }
    
    .btn-warning.focus,
    .btn-warning:focus,
    .btn.bg-gradient-warning.focus,
    .btn.bg-gradient-warning:focus {
      color: #fff;
    }
    
    .btn-outline-warning {
      box-shadow: none;
    }
    
    .btn-outline-warning:hover:not(.active) {
      background-color: transparent;
      opacity: 0.75;
      box-shadow: none;
      color: #fb8c00;
    }
    
    .btn-danger,
    .btn.bg-gradient-danger {
      box-shadow: 0 2px 2px 0 rgba(244, 67, 53, 0.1), 0 3px 1px -2px rgba(244, 67, 53, 0.18), 0 1px 5px 0 rgba(244, 67, 53, 0.15);
    }
    
    .btn-danger:hover,
    .btn.bg-gradient-danger:hover {
      background-color: #F44335;
      border-color: #F44335;
      box-shadow: 0 8px 14px -8px rgba(244, 67, 53, 0.3), 0 3px 18px 0 rgba(244, 67, 53, 0.1), 0 7px 8px -4px rgba(244, 67, 53, 0.18);
    }
    
    .btn-danger .btn.bg-outline-danger,
    .btn.bg-gradient-danger .btn.bg-outline-danger {
      border: 1px solid #F44335;
    }
    
    .btn-danger:not(:disabled):not(.disabled).active,
    .btn-danger:not(:disabled):not(.disabled):active,
    .show>.btn-danger.dropdown-toggle,
    .btn.bg-gradient-danger:not(:disabled):not(.disabled).active,
    .btn.bg-gradient-danger:not(:disabled):not(.disabled):active,
    .show>.btn.bg-gradient-danger.dropdown-toggle {
      color: color-yiq(#F44335);
      background-color: #F44335;
    }
    
    .btn-danger.focus,
    .btn-danger:focus,
    .btn.bg-gradient-danger.focus,
    .btn.bg-gradient-danger:focus {
      color: #fff;
    }
    
    .btn-outline-danger {
      box-shadow: none;
    }
    
    .btn-outline-danger:hover:not(.active) {
      background-color: transparent;
      opacity: 0.75;
      box-shadow: none;
      color: #F44335;
    }
    
    .btn-light,
    .btn.bg-gradient-light {
      box-shadow: 0 2px 2px 0 rgba(229, 229, 229, 0.1), 0 3px 1px -2px rgba(229, 229, 229, 0.18), 0 1px 5px 0 rgba(229, 229, 229, 0.15);
    }
    
    .btn-light:hover,
    .btn.bg-gradient-light:hover {
      background-color: #e5e5e5;
      border-color: #e5e5e5;
      box-shadow: 0 8px 14px -8px rgba(229, 229, 229, 0.3), 0 3px 18px 0 rgba(229, 229, 229, 0.1), 0 7px 8px -4px rgba(229, 229, 229, 0.18);
    }
    
    .btn-light .btn.bg-outline-light,
    .btn.bg-gradient-light .btn.bg-outline-light {
      border: 1px solid #e5e5e5;
    }
    
    .btn-light:not(:disabled):not(.disabled).active,
    .btn-light:not(:disabled):not(.disabled):active,
    .show>.btn-light.dropdown-toggle,
    .btn.bg-gradient-light:not(:disabled):not(.disabled).active,
    .btn.bg-gradient-light:not(:disabled):not(.disabled):active,
    .show>.btn.bg-gradient-light.dropdown-toggle {
      color: color-yiq(#e5e5e5);
      background-color: #e5e5e5;
    }
    
    .btn-outline-light {
      box-shadow: none;
    }
    
    .btn-outline-light:hover:not(.active) {
      background-color: transparent;
      opacity: 0.75;
      box-shadow: none;
      color: #e5e5e5;
    }
    
    .btn-dark,
    .btn.bg-gradient-dark {
      box-shadow: 0 2px 2px 0 rgba(38, 38, 38, 0.1), 0 3px 1px -2px rgba(38, 38, 38, 0.18), 0 1px 5px 0 rgba(38, 38, 38, 0.15);
    }
    
    .btn-dark:hover,
    .btn.bg-gradient-dark:hover {
      background-color: #262626;
      border-color: #262626;
      box-shadow: 0 8px 14px -8px rgba(38, 38, 38, 0.3), 0 3px 18px 0 rgba(38, 38, 38, 0.1), 0 7px 8px -4px rgba(38, 38, 38, 0.18);
    }
    
    .btn-dark .btn.bg-outline-dark,
    .btn.bg-gradient-dark .btn.bg-outline-dark {
      border: 1px solid #262626;
    }
    
    .btn-dark:not(:disabled):not(.disabled).active,
    .btn-dark:not(:disabled):not(.disabled):active,
    .show>.btn-dark.dropdown-toggle,
    .btn.bg-gradient-dark:not(:disabled):not(.disabled).active,
    .btn.bg-gradient-dark:not(:disabled):not(.disabled):active,
    .show>.btn.bg-gradient-dark.dropdown-toggle {
      color: color-yiq(#262626);
      background-color: #262626;
    }
    
    .btn-dark.focus,
    .btn-dark:focus,
    .btn.bg-gradient-dark.focus,
    .btn.bg-gradient-dark:focus {
      color: #fff;
    }
    
    .btn-outline-dark {
      box-shadow: none;
    }
    
    .btn-outline-dark:hover:not(.active) {
      background-color: transparent;
      opacity: 0.75;
      box-shadow: none;
      color: #262626;
    }
    
    .btn-white,
    .btn.bg-gradient-white {
      box-shadow: 0 2px 2px 0 rgba(255, 255, 255, 0.1), 0 3px 1px -2px rgba(255, 255, 255, 0.18), 0 1px 5px 0 rgba(255, 255, 255, 0.15);
    }
    
    .btn-white:hover,
    .btn.bg-gradient-white:hover {
      background-color: #fff;
      border-color: #fff;
      box-shadow: 0 8px 14px -8px rgba(255, 255, 255, 0.3), 0 3px 18px 0 rgba(255, 255, 255, 0.1), 0 7px 8px -4px rgba(255, 255, 255, 0.18);
    }
    
    .btn-white .btn.bg-outline-white,
    .btn.bg-gradient-white .btn.bg-outline-white {
      border: 1px solid #fff;
    }
    
    .btn-white:not(:disabled):not(.disabled).active,
    .btn-white:not(:disabled):not(.disabled):active,
    .show>.btn-white.dropdown-toggle,
    .btn.bg-gradient-white:not(:disabled):not(.disabled).active,
    .btn.bg-gradient-white:not(:disabled):not(.disabled):active,
    .show>.btn.bg-gradient-white.dropdown-toggle {
      color: color-yiq(#fff);
      background-color: #fff;
    }
    
    .btn-outline-white {
      box-shadow: none;
    }
    
    .btn-outline-white:hover:not(.active) {
      background-color: transparent;
      opacity: 0.75;
      box-shadow: none;
      color: #fff;
    }
    
    .btn-dark-blue,
    .btn.bg-gradient-dark-blue {
      box-shadow: 0 2px 2px 0 rgba(26, 35, 126, 0.1), 0 3px 1px -2px rgba(26, 35, 126, 0.18), 0 1px 5px 0 rgba(26, 35, 126, 0.15);
    }
    
    .btn-dark-blue:hover,
    .btn.bg-gradient-dark-blue:hover {
      background-color: #1A237E;
      border-color: #1A237E;
      box-shadow: 0 8px 14px -8px rgba(26, 35, 126, 0.3), 0 3px 18px 0 rgba(26, 35, 126, 0.1), 0 7px 8px -4px rgba(26, 35, 126, 0.18);
    }
    
    .btn-dark-blue .btn.bg-outline-dark-blue,
    .btn.bg-gradient-dark-blue .btn.bg-outline-dark-blue {
      border: 1px solid #1A237E;
    }
    
    .btn-dark-blue:not(:disabled):not(.disabled).active,
    .btn-dark-blue:not(:disabled):not(.disabled):active,
    .show>.btn-dark-blue.dropdown-toggle,
    .btn.bg-gradient-dark-blue:not(:disabled):not(.disabled).active,
    .btn.bg-gradient-dark-blue:not(:disabled):not(.disabled):active,
    .show>.btn.bg-gradient-dark-blue.dropdown-toggle {
      color: color-yiq(#1A237E);
      background-color: #1A237E;
    }
    
    .btn-dark-blue.focus,
    .btn-dark-blue:focus,
    .btn.bg-gradient-dark-blue.focus,
    .btn.bg-gradient-dark-blue:focus {
      color: #fff;
    }
    
    .btn-outline-dark-blue {
      box-shadow: none;
    }
    
    .btn-outline-dark-blue:hover:not(.active) {
      background-color: transparent;
      opacity: 0.75;
      box-shadow: none;
      color: #1A237E;
    }
    
    .btn-outline-white {
      border-color: rgba(255, 255, 255, 0.75);
      background: rgba(255, 255, 255, 0.1);
    }
    
    .btn-primary,
    .btn.bg-gradient-primary {
      color: #fff;
    }
    
    .btn-primary:hover,
    .btn.bg-gradient-primary:hover {
      color: #fff;
    }
    
    .btn-secondary,
    .btn.bg-gradient-secondary {
      color: #fff;
    }
    
    .btn-secondary:hover,
    .btn.bg-gradient-secondary:hover {
      color: #fff;
    }
    
    .btn-danger,
    .btn.bg-gradient-danger {
      color: #fff;
    }
    
    .btn-danger:hover,
    .btn.bg-gradient-danger:hover {
      color: #fff;
    }
    
    .btn-info,
    .btn.bg-gradient-info {
      color: #fff;
    }
    
    .btn-info:hover,
    .btn.bg-gradient-info:hover {
      color: #fff;
    }
    
    .btn-success,
    .btn.bg-gradient-success {
      color: #fff;
    }
    
    .btn-success:hover,
    .btn.bg-gradient-success:hover {
      color: #fff;
    }
    
    .btn-warning,
    .btn.bg-gradient-warning {
      color: #fff;
    }
    
    .btn-warning:hover,
    .btn.bg-gradient-warning:hover {
      color: #fff;
    }
    
    .btn-dark,
    .btn.bg-gradient-dark {
      color: #fff;
    }
    
    .btn-dark:hover,
    .btn.bg-gradient-dark:hover {
      color: #fff;
    }
    
    .btn-light,
    .btn.bg-gradient-light {
      color: #3A416F;
    }
    
    .btn-light:hover,
    .btn.bg-gradient-light:hover {
      color: #3A416F;
    }
    
    .breadcrumb-item {
      font-size: 0.875rem;
    }
    
    .breadcrumb-item.text-white::before {
      color: #fff;
    }
    
    .breadcrumb-dark {
      background-color: #262626;
    }
    
    .breadcrumb-dark .breadcrumb-item {
      font-weight: 600;
    }
    
    .breadcrumb-dark .breadcrumb-item a {
      color: #f5f5f5;
    }
    
    .breadcrumb-dark .breadcrumb-item a:hover {
      color: #fff;
    }
    
    .breadcrumb-dark .breadcrumb-item+.breadcrumb-item::before {
      color: #737373;
    }
    
    .breadcrumb-dark .breadcrumb-item.active {
      color: #d4d4d4;
    }
    
    .breadcrumb-links {
      padding: 0;
      margin: 0;
      background: transparent;
    }
    
    .card {
      box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
      border: 1px solid #e5e5e5;
    }
    
    .card[data-animation=true] .card-header {
      -webkit-transform: translate3d(0, 0, 0);
      -moz-transform: translate3d(0, 0, 0);
      -o-transform: translate3d(0, 0, 0);
      -ms-transform: translate3d(0, 0, 0);
      transform: translate3d(0, 0, 0);
      -webkit-transition: all 300ms cubic-bezier(0.34, 1.61, 0.7, 1);
      -moz-transition: all 300ms cubic-bezier(0.34, 1.61, 0.7, 1);
      -o-transition: all 300ms cubic-bezier(0.34, 1.61, 0.7, 1);
      -ms-transition: all 300ms cubic-bezier(0.34, 1.61, 0.7, 1);
      transition: all 300ms cubic-bezier(0.34, 1.61, 0.7, 1);
    }
    
    .card:hover[data-animation=true] .card-header {
      -webkit-transform: translate3d(0, -50px, 0);
      -moz-transform: translate3d(0, -50px, 0);
      -o-transform: translate3d(0, -50px, 0);
      -ms-transform: translate3d(0, -50px, 0);
      transform: translate3d(0, -50px, 0);
    }
    
    .card .card-header {
      padding: 1rem;
    }
    
    .card .card-body {
      font-family: Inter, Helvetica, Arial, sans-serif;
      padding: 1rem;
    }
    
    .card.card-plain {
      background-color: transparent;
      box-shadow: none;
      border: none;
    }
    
    .card .card-footer {
      padding: 1rem;
      background-color: transparent;
    }
    
    .author {
      display: flex;
    }
    
    .author .name>span {
      line-height: 1.571;
      font-weight: 600;
      font-size: 0.875rem;
      color: #3A416F;
    }
    
    .author .stats {
      font-size: 0.875rem;
      font-weight: 400;
    }
    
    .card.card-background {
      align-items: center;
    }
    
    .card.card-background .full-background {
      background-position: 50%;
      background-size: cover;
      margin-bottom: 30px;
      width: 100%;
      height: 100%;
      position: absolute;
      border-radius: 0.5rem;
    }
    
    .card.card-background .card-body {
      color: #fff;
      position: relative;
      z-index: 2;
    }
    
    .card.card-background .card-body .content-center,
    .card.card-background .card-body .content-left {
      min-height: 330px;
      max-width: 450px;
      padding-top: 60px;
      padding-bottom: 60px;
    }
    
    .card.card-background .card-body .content-center {
      text-align: center;
    }
    
    .card.card-background .card-body.body-left {
      width: 90%;
    }
    
    .card.card-background .card-body .author .name span,
    .card.card-background .card-body .author .name .stats {
      color: #fff;
    }
    
    .card.card-background:after {
      position: absolute;
      top: 0;
      bottom: 0;
      left: 0;
      height: 100%;
      width: 100%;
      z-index: 1;
      display: block;
      content: "";
      background: rgba(0, 0, 0, 0.56);
      border-radius: 0.5rem;
    }
    
    .card.card-background.card-background-mask-primary:before {
      background: rgba(0, 0, 0, 0.2);
    }
    
    .card.card-background.card-background-mask-primary:after {
      background-image: linear-gradient(195deg, #EC407A 0%, #D81B60 100%);
      opacity: 0.85;
    }
    
    .card.card-background.card-background-mask-secondary:before {
      background: rgba(0, 0, 0, 0.2);
    }
    
    .card.card-background.card-background-mask-secondary:after {
      background-image: linear-gradient(195deg, #747b8a 0%, #495361 100%);
      opacity: 0.85;
    }
    
    .card.card-background.card-background-mask-success:before {
      background: rgba(0, 0, 0, 0.2);
    }
    
    .card.card-background.card-background-mask-success:after {
      background-image: linear-gradient(195deg, #66BB6A 0%, #43A047 100%);
      opacity: 0.85;
    }
    
    .card.card-background.card-background-mask-info:before {
      background: rgba(0, 0, 0, 0.2);
    }
    
    .card.card-background.card-background-mask-info:after {
      background-image: linear-gradient(195deg, #49a3f1 0%, #1A73E8 100%);
      opacity: 0.85;
    }
    
    .card.card-background.card-background-mask-warning:before {
      background: rgba(0, 0, 0, 0.2);
    }
    
    .card.card-background.card-background-mask-warning:after {
      background-image: linear-gradient(195deg, #FFA726 0%, #FB8C00 100%);
      opacity: 0.85;
    }
    
    .card.card-background.card-background-mask-danger:before {
      background: rgba(0, 0, 0, 0.2);
    }
    
    .card.card-background.card-background-mask-danger:after {
      background-image: linear-gradient(195deg, #EF5350 0%, #E53935 100%);
      opacity: 0.85;
    }
    
    .card.card-background.card-background-mask-light:before {
      background: rgba(0, 0, 0, 0.2);
    }
    
    .card.card-background.card-background-mask-light:after {
      background-image: linear-gradient(195deg, #EBEFF4 0%, #CED4DA 100%);
      opacity: 0.85;
    }
    
    .card.card-background.card-background-mask-dark:before {
      background: rgba(0, 0, 0, 0.2);
    }
    
    .card.card-background.card-background-mask-dark:after {
      background-image: linear-gradient(195deg, #42424a 0%, #191919 100%);
      opacity: 0.85;
    }
    
    .card.card-background .card-category {
      font-size: 0.875rem;
      font-weight: 600;
    }
    
    .card.card-background .card-description {
      margin-top: 24px;
      margin-bottom: 24px;
    }
    
    .rotating-card-container {
      -webkit-perspective: 800px;
      -moz-perspective: 800px;
      -o-perspective: 800px;
      -ms-perspective: 800px;
      perspective: 800px;
    }
    
    .rotating-card-container .card-rotate {
      background: transparent;
      box-shadow: none;
    }
    
    .rotating-card-container .card-rotate:after {
      display: none;
    }
    
    .rotating-card-container .card {
      -webkit-transition: all 0.8s cubic-bezier(0.34, 1.45, 0.7, 1);
      -moz-transition: all 0.8s cubic-bezier(0.34, 1.45, 0.7, 1);
      -o-transition: all 0.8s cubic-bezier(0.34, 1.45, 0.7, 1);
      -ms-transition: all 0.8s cubic-bezier(0.34, 1.45, 0.7, 1);
      transition: all 0.8s cubic-bezier(0.34, 1.45, 0.7, 1);
      -webkit-transform-style: preserve-3d;
      -moz-transform-style: preserve-3d;
      -o-transform-style: preserve-3d;
      -ms-transform-style: preserve-3d;
      transform-style: preserve-3d;
      position: relative;
    }
    
    .rotating-card-container .card .back,
    .rotating-card-container .card .front {
      -webkit-backface-visibility: hidden;
      -moz-backface-visibility: hidden;
      -o-backface-visibility: hidden;
      -ms-backface-visibility: hidden;
      backface-visibility: hidden;
      position: absolute;
      background-color: #fff;
      border-radius: 0.5rem;
      top: 0;
      left: 0;
      justify-content: center;
      align-content: center;
      display: -webkit-flex;
      display: -moz-flex;
      display: -ms-flexbox;
      display: -o-flex;
      display: flex;
      -moz-flex-direction: column;
      -ms-flex-direction: column;
      -o-flex-direction: column;
      flex-direction: column;
    }
    
    .rotating-card-container .card .back .card-body,
    .rotating-card-container .card .front .card-body {
      justify-content: center;
      align-content: center;
      display: -webkit-flex;
      display: -moz-flex;
      display: -ms-flexbox;
      display: -o-flex;
      display: flex;
      -moz-flex-direction: column;
      -ms-flex-direction: column;
      -o-flex-direction: column;
      flex-direction: column;
    }
    
    .rotating-card-container .card .back:after,
    .rotating-card-container .card .front:after {
      position: absolute;
      z-index: 1;
      width: 100%;
      height: 100%;
      display: block;
      left: 0;
      top: 0;
      content: "";
      border-radius: 0.5rem;
      background-image: linear-gradient(195deg, #42424a, #191919);
      opacity: 0.5;
    }
    
    .rotating-card-container .card .front {
      z-index: 2;
      position: relative;
    }
    
    .rotating-card-container .card .back {
      -webkit-transform: rotateY(180deg);
      -moz-transform: rotateY(180deg);
      -o-transform: rotateY(180deg);
      -ms-transform: rotateY(180deg);
      transform: rotateY(180deg);
      z-index: 5;
      text-align: center;
      width: 100%;
      height: 100%;
    }
    
    .rotating-card-container .card .back.back-background .card-body {
      position: relative;
      z-index: 2;
    }
    
    .rotating-card-container .card .back .card-footer .btn {
      margin: 0;
    }
    
    .rotating-card-container .card .back .card-body {
      padding-left: 15px;
      padding-right: 15px;
    }
    
    .rotating-card-container:not(.manual-flip):hover .card {
      -webkit-transform: rotateY(180deg);
      -moz-transform: rotateY(180deg);
      -o-transform: rotateY(180deg);
      -ms-transform: rotateY(180deg);
      transform: rotateY(180deg);
    }
    
    .rotating-card-container.hover.manual-flip .card {
      -webkit-transform: rotateY(180deg);
      -moz-transform: rotateY(180deg);
      -o-transform: rotateY(180deg);
      -ms-transform: rotateY(180deg);
      transform: rotateY(180deg);
    }
    
    .card-profile .rotating-card-container .front {
      text-align: left;
    }
    
    .back-background .card-body {
      min-height: auto;
      padding-top: 15px;
      padding-bottom: 15px;
    }
    
    /*       Fix bug for IE      */
    @media screen and (-ms-high-contrast: active),
    (-ms-high-contrast: none) {
    
      .rotating-card-container .card .back,
      .rotating-card-container .card .front {
        -ms-backface-visibility: visible;
        backface-visibility: visible;
      }
    
      .rotating-card-container .card .back {
        visibility: hidden;
        transition: visibility 0.3s cubic-bezier(0.34, 1.45, 0.7, 1);
      }
    
      .rotating-card-container .card .front {
        z-index: 4;
      }
    
      .rotating-card-container.manual-flip.hover .card .back,
      .rotating-card-container:not(.manual-flip):hover .card .back {
        z-index: 5;
        visibility: visible;
      }
    }
    
    .dark-version {
      background-color: #171717 !important;
    }
    
    .dark-version .main-content {
      background-color: #171717 !important;
    }
    
    .dark-version.virtual-reality>div {
      background-image: none !important;
    }
    
    .dark-version .sidenav {
      background: #1d1d1d !important;
      border: 1px solid rgba(255, 255, 255, 0.04);
    }
    
    .dark-version .sidenav.bg-transparent {
      background: transparent !important;
    }
    
    .dark-version .sidenav.bg-transparent .navbar-nav .nav-link {
      color: #fff !important;
    }
    
    .dark-version .sidenav.bg-transparent .nav .nav-link {
      color: #fff !important;
    }
    
    .dark-version .sidenav.bg-white {
      background: #fff !important;
    }
    
    .dark-version .sidenav.bg-white .navbar-nav .nav-link.active:after {
      color: rgba(206, 212, 218, 0.7);
    }
    
    .dark-version .sidenav.bg-white .collapse .nav-item .nav-link:not(.active) i {
      color: #262626 !important;
    }
    
    .dark-version .sidenav.bg-white .collapse .nav-item h6,
    .dark-version .sidenav.bg-white .collapse .nav-item .h6 {
      color: #262626 !important;
    }
    
    .dark-version .sidenav .collapse .nav-item .nav-link i {
      color: #fff !important;
    }
    
    .dark-version .sidenav.bg-white .collapse .nav-item .nav-link.active.text-dark i,
    .dark-version .sidenav.bg-white .collapse .nav-item .nav-link.active.text-dark .nav-link-text {
      color: #262626 !important;
    }
    
    .dark-version .fixed-plugin .btn.bg-gradient-dark,
    .dark-version .fixed-plugin .btn.btn-outline-dark {
      color: #fff !important;
      border: 1px solid #fff !important;
    }
    
    .dark-version .fixed-plugin .btn.active {
      background: #fff !important;
      color: #262626 !important;
    }
    
    .dark-version .bg-gradient-dark {
      background-image: linear-gradient(195deg, #323a54, #1a2035) !important;
    }
    
    .dark-version .dropdown .dropdown-menu:before {
      color: #1d1d1d;
    }
    
    .dark-version .dropdown .dropdown-menu .dropdown-item:hover,
    .dark-version .dropdown .dropdown-menu .dropdown-item:focus {
      background-color: #171717 !important;
    }
    
    .dark-version .dropdown .dropdown-menu .dropdown-item i,
    .dark-version .dropdown .dropdown-menu .dropdown-item .material-symbols-rounded {
      color: #fff;
    }
    
    .dark-version .card,
    .dark-version .swal2-popup,
    .dark-version .dropdown .dropdown-menu,
    .dark-version .kanban-board {
      background: #1d1d1d;
      box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 3px 1px -2px rgba(0, 0, 0, 0.2), 0 1px 5px 0 rgba(0, 0, 0, 0.12);
    }
    
    .dark-version .card .card-header,
    .dark-version .swal2-popup .card-header,
    .dark-version .dropdown .dropdown-menu .card-header,
    .dark-version .kanban-board .card-header {
      background: transparent;
    }
    
    .dark-version .card p,
    .dark-version .swal2-popup p,
    .dark-version .dropdown .dropdown-menu p,
    .dark-version .kanban-board p {
      color: #fff !important;
      opacity: 0.6;
    }
    
    .dark-version .card {
      border: 1px solid rgba(255, 255, 255, 0.04);
    }
    
    .dark-version .kanban-item {
      background: transparent !important;
      border: 1px solid;
    }
    
    .dark-version .swal2-html-container {
      color: #fff !important;
      opacity: 0.6;
    }
    
    .dark-version h1,
    .dark-version .h1,
    .dark-version h2,
    .dark-version .h2,
    .dark-version h3,
    .dark-version .h3,
    .dark-version h4,
    .dark-version .h4,
    .dark-version h5,
    .dark-version .h5,
    .dark-version h6,
    .dark-version .h6,
    .dark-version a:not(.dropdown-item):not(.choices__item):not(.leaflet-control-zoom-in):not(.leaflet-control-zoom-out):not(.btn):not(.nav-link):not(.fixed-plugin-button),
    .dark-version .table thead tr th,
    .dark-version .kanban-title-board {
      color: #fff !important;
    }
    
    .dark-version .input-group.input-group-dynamic .form-control,
    .dark-version .input-group.input-group-static .form-control {
      background-image: linear-gradient(0deg, #e91e63 2px, rgba(156, 39, 176, 0) 0), linear-gradient(0deg, rgba(210, 210, 210, 0.6) 1px, rgba(209, 209, 209, 0) 0) !important;
      background-size: 0 100%, 100% 100%;
    }
    
    .dark-version .input-group.input-group-dynamic .form-control:focus,
    .dark-version .input-group.input-group-static .form-control:focus {
      background-size: 100% 100%, 100% 100%;
    }
    
    .dark-version .input-group.input-group-outline .form-control {
      border-color: rgba(255, 255, 255, 0.04) !important;
    }
    
    .dark-version .input-group .is-valid,
    .dark-version .input-group .is-invalid {
      border-color: rgba(255, 255, 255, 0.04) !important;
    }
    
    .dark-version .accordion .accordion-button {
      border-color: rgba(255, 255, 255, 0.04) !important;
      color: #fff;
      opacity: 0.8;
    }
    
    .dark-version .table> :not(caption)>*>* {
      border-color: rgba(255, 255, 255, 0.04) !important;
      color: rgba(255, 255, 255, 0.6) !important;
    }
    
    .dark-version label {
      color: rgba(255, 255, 255, 0.8) !important;
    }
    
    .dark-version .list-group-item,
    .dark-version .multisteps-form__panel {
      background-color: transparent !important;
    }
    
    .dark-version .nav.bg-white {
      background-color: #1d1d1d !important;
      box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 3px 1px -2px rgba(0, 0, 0, 0.2), 0 1px 5px 0 rgba(0, 0, 0, 0.12);
    }
    
    .dark-version .nav .nav-link[data-scroll]:hover {
      color: #262626 !important;
    }
    
    .dark-version .toast {
      background-color: #1d1d1d !important;
      box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 3px 1px -2px rgba(0, 0, 0, 0.2), 0 1px 5px 0 rgba(0, 0, 0, 0.12);
    }
    
    .dark-version .toast .toast-header {
      background: transparent;
    }
    
    .dark-version .toast span {
      color: #fff;
    }
    
    .dark-version .toast p {
      color: #fff !important;
      opacity: 0.6;
    }
    
    .dark-version .choices .choices__input {
      background-color: transparent !important;
      border-bottom: 1px solid rgba(255, 255, 255, 0.04);
      color: #fff;
    }
    
    .dark-version .choices .choices__list.choices__list--dropdown {
      background: #1d1d1d;
      box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 3px 1px -2px rgba(0, 0, 0, 0.2), 0 1px 5px 0 rgba(0, 0, 0, 0.12);
    }
    
    .dark-version .fc-theme-standard td,
    .dark-version .fc-theme-standard th {
      border-color: rgba(115, 115, 115, 0.3);
    }
    
    .dark-version .dataTable-sorter::after {
      border-bottom-color: #fff;
    }
    
    .dark-version .dataTable-sorter::before {
      border-top-color: #fff;
    }
    
    .dark-version .ql-snow .ql-stroke {
      stroke: #e5e5e5;
    }
    
    .dark-version .ql-snow .ql-fill,
    .dark-version .ql-snow .ql-stroke.ql-fill {
      fill: #e5e5e5;
    }
    
    .dark-version .ql-toolbar.ql-snow .ql-picker-label {
      color: #e5e5e5;
    }
    
    .dark-version .form-control {
      color: rgba(255, 255, 255, 0.8) !important;
    }
    
    body.dark-version {
      color: rgba(255, 255, 255, 0.8) !important;
    }
    
    @media (min-width: 992px) {
    
      .dropdown .dropdown-menu,
      .dropup .dropdown-menu,
      .dropstart .dropdown-menu,
      .dropend .dropdown-menu {
        box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
        transition: transform 0.3s cubic-bezier(0.4, 0, 0.2, 1), opacity 0.2s cubic-bezier(0.4, 0, 0.2, 1) !important;
        cursor: pointer;
      }
    
      .dropdown .dropdown-toggle:after,
      .dropup .dropdown-toggle:after,
      .dropstart .dropdown-toggle:after,
      .dropend .dropdown-toggle:after {
        content: "\f107";
        font: normal normal normal 14px/1 FontAwesome;
        border: none;
        vertical-align: middle;
        font-weight: 600;
      }
    
      .dropdown .dropdown-toggle.show:after,
      .dropup .dropdown-toggle.show:after,
      .dropstart .dropdown-toggle.show:after,
      .dropend .dropdown-toggle.show:after {
        transform: rotate(180deg);
      }
    
      .dropdown .dropdown-toggle:after,
      .dropup .dropdown-toggle:after,
      .dropstart .dropdown-toggle:after,
      .dropend .dropdown-toggle:after {
        transition: 0.3s ease;
      }
    
      .dropdown.dropdown-hover .dropdown-menu,
      .dropdown .dropdown-menu {
        display: block;
        position: absolute;
        opacity: 0;
        transform-origin: 0 0;
        inset: 0px auto auto 0px;
        margin-top: 2.8125rem !important;
        pointer-events: none;
        transform: scale(0.95) !important;
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
        will-change: transform, box-shadow;
      }
    
      .dropdown.dropdown-hover .dropdown-menu .dropdown.dropdown-hover .dropdown-menu,
      .dropdown.dropdown-hover .dropdown-menu .dropdown .dropdown-menu,
      .dropdown .dropdown-menu .dropdown.dropdown-hover .dropdown-menu,
      .dropdown .dropdown-menu .dropdown .dropdown-menu {
        margin-top: 0 !important;
      }
    
      .dropdown.dropdown-hover:hover>.dropdown-menu,
      .dropdown .dropdown-menu.show {
        opacity: 1;
        pointer-events: auto;
        visibility: visible;
        transform: scale(1) !important;
      }
    
      .dropdown.dropdown-hover:hover>.dropdown-menu:before,
      .dropdown .dropdown-menu.show:before {
        top: -20px;
      }
    
      .dropdown.dropdown-hover:after {
        content: "";
        position: absolute;
        left: 0;
        bottom: -24px;
        width: 100%;
        height: 100%;
      }
    
      .dropdown:not(.dropdown-hover) .dropdown-menu.show {
        margin-top: 2.8125rem !important;
      }
    
      .dropdown .dropdown-menu:before {
        font-family: "FontAwesome";
        content: "\f0d8";
        position: absolute;
        top: 0;
        left: 28px;
        right: auto;
        font-size: 22px;
        color: #fff;
        transition: top 0.35s ease;
      }
    
      .dropdown .dropdown-item .arrow {
        transform: rotate(-90deg);
      }
    
      .dropdown-item {
        transition: background-color 0.3s ease, color 0.3s ease;
      }
    }
    
    @media (max-width: 991.98px) {
      .navbar-toggler+.navbar-collapse .dropdown:not(.nav-item) .dropdown-menu {
        display: block;
        opacity: 0;
        top: 0;
        transform-origin: 0 0;
        pointer-events: none;
        transform: scale(0.95) !important;
        transition: transform 0.3s cubic-bezier(0.4, 0, 0.2, 1), opacity 0.2s cubic-bezier(0.4, 0, 0.2, 1) !important;
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
        will-change: transform, box-shadow;
        box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
      }
    
      .navbar-toggler+.navbar-collapse .dropdown:not(.nav-item) .dropdown-menu:before {
        font-family: "FontAwesome";
        content: "\f0d8";
        position: absolute;
        top: 0;
        left: 28px;
        right: auto;
        font-size: 22px;
        color: #fff;
        transition: top 0.35s ease;
      }
    
      .navbar-toggler+.navbar-collapse .dropdown:not(.nav-item):not(.dropdown-hover) .dropdown-menu {
        margin-top: 2.8125rem !important;
      }
    
      .navbar-toggler+.navbar-collapse .dropdown:not(.nav-item) .dropdown-menu.show {
        opacity: 1;
        pointer-events: auto;
        visibility: visible;
        transform: scale(1) !important;
      }
    
      .navbar-toggler+.navbar-collapse .dropdown:not(.nav-item) .dropdown-menu.show:before {
        top: -20px;
      }
    
      .navbar-toggler+.navbar-collapse .dropdown.nav-item .dropdown-menu {
        background-color: transparent;
        overflow: scroll;
        position: relative;
      }
    
      .dropdown .dropdown-menu {
        opacity: 0;
        top: 0;
        transform-origin: 0 0;
        pointer-events: none;
        transform: scale(0.95) !important;
        transition: transform 0.3s cubic-bezier(0.4, 0, 0.2, 1), opacity 0.2s cubic-bezier(0.4, 0, 0.2, 1) !important;
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
        will-change: transform, box-shadow;
        box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
      }
    
      .dropdown .dropdown-menu:before {
        font-family: "FontAwesome";
        content: "\f0d8";
        position: absolute;
        top: 0;
        left: 28px;
        right: auto;
        font-size: 22px;
        color: #fff;
        transition: top 0.35s ease;
      }
    
      .dropdown:not(.dropdown-hover) .dropdown-menu {
        margin-top: 2.8125rem !important;
      }
    
      .dropdown .dropdown-menu.show {
        opacity: 1;
        pointer-events: auto;
        visibility: visible;
        transform: scale(1) !important;
      }
    
      .dropdown .dropdown-menu.show:before {
        top: -20px;
      }
    
      .dropdown.nav-item .dropdown-menu {
        position: absolute;
      }
    
      .dropdown.nav-item .dropdown-menu-animation {
        display: block;
        height: 0;
        transition: all 0.35s ease;
        padding-top: 0 !important;
        padding-bottom: 0 !important;
        opacity: 0;
      }
    
      .dropdown.nav-item .dropdown-menu-animation.show {
        height: 250px;
        opacity: 1;
      }
    }
    
    .dropdown-menu li {
      position: relative;
    }
    
    .dropdown.dropdown-subitem:after {
      left: 100%;
      bottom: 0;
      width: 50%;
    }
    
    .dropdown .dropdown-menu .dropdown-item+.dropdown-menu:before {
      transform: rotate(-90deg);
      left: 0;
      top: 0;
      z-index: -1;
      transition: left 0.35s ease;
    }
    
    .dropdown .dropdown-menu.dropdown-menu-end {
      right: 0 !important;
      left: auto !important;
    }
    
    .dropdown .dropdown-menu.dropdown-menu-end:before {
      right: 28px;
      left: auto;
    }
    
    .dropdown.dropdown-subitem:hover .dropdown-item+.dropdown-menu:before {
      left: -8px;
    }
    
    .dropdown>.dropdown-menu .dropdown-item+.dropdown-menu {
      transform: scale(1) !important;
    }
    
    .dropdown .dropdown-menu .dropdown-item+.dropdown-menu {
      right: -197px;
      left: auto;
      top: 0;
    }
    
    .dropdown-image {
      background-size: cover;
    }
    
    @media (min-width: 992px) {
      .dropdown-xl {
        min-width: 40rem;
      }
    
      .dropdown-lg {
        min-width: 23rem;
      }
    
      .dropdown-md {
        min-width: 15rem;
      }
    }
    
    @media (max-width: 1199.98px) {
      .dropdown-lg-responsive {
        min-width: 19rem;
      }
    }
    
    .dropup .dropdown-menu {
      box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
      transition: transform 0.3s cubic-bezier(0.4, 0, 0.2, 1), opacity 0.2s cubic-bezier(0.4, 0, 0.2, 1) !important;
      cursor: pointer;
      top: auto !important;
      bottom: 100% !important;
      margin-bottom: 0.5rem !important;
      display: block;
      opacity: 0;
      transform-origin: bottom;
      pointer-events: none;
      transform: scale(0.95) !important;
      -webkit-backface-visibility: hidden;
      backface-visibility: hidden;
      will-change: transform, box-shadow;
    }
    
    .dropup .dropdown-menu.show {
      pointer-events: auto;
      transform: scale(1) !important;
      opacity: 1;
    }
    
    .dropup .dropdown-menu.show:after {
      bottom: -20px;
    }
    
    .dropup .dropdown-menu:after {
      font-family: "FontAwesome";
      content: "\f0d7";
      position: absolute;
      z-index: -1;
      bottom: 22px;
      left: 28px;
      right: auto;
      font-size: 22px;
      color: #fff;
      transition: bottom 0.35s ease;
    }
    
    .page-header {
      padding: 0;
      position: relative;
      overflow: hidden;
      display: flex;
      align-items: center;
      background-size: cover;
      background-position: 50%;
    }
    
    .page-header .container {
      z-index: 1;
    }
    
    .page-header video {
      position: absolute;
      top: 50%;
      left: 50%;
      min-width: 100%;
      min-height: 100%;
      width: auto;
      height: auto;
      z-index: 0;
      transform: translateX(-50%) translateY(-50%);
    }
    
    .fixed-plugin .fixed-plugin-button {
      background: #fff;
      border-radius: 50%;
      bottom: 30px;
      right: 30px;
      font-size: 1.25rem;
      z-index: 990;
      box-shadow: 0 2px 12px 0 rgba(0, 0, 0, 0.16);
      cursor: pointer;
    }
    
    .fixed-plugin .fixed-plugin-button i {
      pointer-events: none;
    }
    
    .fixed-plugin .card {
      position: fixed !important;
      right: -360px;
      top: 0;
      height: 100%;
      left: auto !important;
      transform: unset !important;
      width: 360px;
      border-radius: 0;
      padding: 0 10px;
      transition: 0.2s ease;
      z-index: 1020;
    }
    
    .fixed-plugin .badge {
      border: 1px solid #fff;
      border-radius: 50%;
      cursor: pointer;
      display: inline-block;
      height: 23px;
      margin-right: 5px;
      position: relative;
      width: 23px;
      transition: all 0.2s ease-in-out;
    }
    
    .fixed-plugin .badge:hover,
    .fixed-plugin .badge.active {
      border-color: #262626;
    }
    
    .fixed-plugin .btn.bg-gradient-dark:not(:disabled):not(.disabled) {
      border: 1px solid transparent;
    }
    
    .fixed-plugin .btn.bg-gradient-dark:not(:disabled):not(.disabled):not(.active) {
      background-color: transparent;
      background-image: none;
      border: 1px solid #e5e5e5;
      color: #262626;
      box-shadow: 0 2px 9px -5px rgba(10, 10, 10, 0.15);
    }
    
    .fixed-plugin.show .card {
      right: 0;
    }
    
    .input-group {
      border-radius: 0;
    }
    
    .input-group:not(.has-validation)> :not(:last-child):not(.dropdown-toggle):not(.dropdown-menu),
    .input-group:not(.has-validation)>.dropdown-toggle:nth-last-child(n+3) {
      border-top-right-radius: 0.375rem !important;
      border-bottom-right-radius: 0.375rem !important;
    }
    
    .input-group.has-validation> :nth-last-child(n+3):not(.dropdown-toggle):not(.dropdown-menu),
    .input-group.has-validation>.dropdown-toggle:nth-last-child(n+4) {
      border-top-right-radius: 0.375rem !important;
      border-bottom-right-radius: 0.375rem !important;
    }
    
    .input-group,
    .input-group .input-group-text {
      transition: 0.2s ease;
      border: none;
    }
    
    .input-group> :not(:first-child):not(.dropdown-menu) {
      margin-left: 2px;
    }
    
    .input-group label {
      transition: all 0.3s ease;
    }
    
    .input-group.input-group-dynamic .form-control,
    .input-group.input-group-static .form-control {
      background: no-repeat bottom, 50% calc(100% - 1px);
      background-size: 0 100%, 100% 100%;
      transition: 0.2s ease;
    }
    
    .input-group.input-group-dynamic .form-control:not(:first-child),
    .input-group.input-group-static .form-control:not(:first-child) {
      border-left: 0;
      padding-left: 0;
    }
    
    .input-group.input-group-dynamic .form-control:not(:last-child),
    .input-group.input-group-static .form-control:not(:last-child) {
      border-right: 0;
      padding-right: 0;
    }
    
    .input-group.input-group-dynamic .form-control+.input-group-text,
    .input-group.input-group-static .form-control+.input-group-text {
      border-left: 0;
      border-right: 1px solid #d2d6da;
    }
    
    .input-group.input-group-dynamic .form-control,
    .input-group.input-group-dynamic .form-control:focus,
    .input-group.input-group-static .form-control,
    .input-group.input-group-static .form-control:focus {
      background-image: linear-gradient(0deg, #e91e63 2px, rgba(156, 39, 176, 0) 0), linear-gradient(0deg, #d2d2d2 1px, hsla(0, 0%, 82%, 0) 0);
      border-radius: 0 !important;
    }
    
    .input-group.input-group-dynamic .form-control:focus,
    .input-group.input-group-static .form-control:focus {
      background-size: 100% 100%, 100% 100%;
    }
    
    .input-group.input-group-dynamic .form-control[disabled],
    .input-group.input-group-static .form-control[disabled] {
      cursor: not-allowed;
      background-image: linear-gradient(0deg, #e91e63 2px, rgba(156, 39, 176, 0) 0), linear-gradient(0deg, #e5e5e5 1px, hsla(0, 0%, 82%, 0) 0) !important;
    }
    
    .input-group.input-group-dynamic .input-group-text,
    .input-group.input-group-static .input-group-text {
      border-right: 0;
    }
    
    .input-group.input-group-dynamic.is-focused .form-label,
    .input-group.input-group-dynamic.is-filled .form-label,
    .input-group.input-group-static.is-focused .form-label,
    .input-group.input-group-static.is-filled .form-label {
      font-size: 0.6875rem !important;
    }
    
    .input-group.input-group-dynamic.is-focused .form-label,
    .input-group.input-group-static.is-focused .form-label {
      top: -0.7rem;
    }
    
    .input-group.input-group-dynamic.is-focused label,
    .input-group.input-group-static.is-focused label {
      color: #e91e63;
    }
    
    .input-group.input-group-dynamic.is-focused.is-valid label,
    .input-group.input-group-static.is-focused.is-valid label {
      color: #4CAF50;
    }
    
    .input-group.input-group-dynamic.is-focused.is-valid .form-control,
    .input-group.input-group-dynamic.is-focused.is-valid .form-control:focus,
    .input-group.input-group-static.is-focused.is-valid .form-control,
    .input-group.input-group-static.is-focused.is-valid .form-control:focus {
      background-image: linear-gradient(0deg, #4CAF50 2px, rgba(156, 39, 176, 0) 0), linear-gradient(0deg, #d2d2d2 1px, hsla(0, 0%, 82%, 0) 0);
      border-radius: 0 !important;
    }
    
    .input-group.input-group-dynamic.is-focused.is-invalid label,
    .input-group.input-group-static.is-focused.is-invalid label {
      color: #F44335;
    }
    
    .input-group.input-group-dynamic.is-focused.is-invalid .form-control,
    .input-group.input-group-dynamic.is-focused.is-invalid .form-control:focus,
    .input-group.input-group-static.is-focused.is-invalid .form-control,
    .input-group.input-group-static.is-focused.is-invalid .form-control:focus {
      background-image: linear-gradient(0deg, #F44335 2px, rgba(156, 39, 176, 0) 0), linear-gradient(0deg, #d2d2d2 1px, hsla(0, 0%, 82%, 0) 0);
      border-radius: 0 !important;
    }
    
    .input-group.input-group-dynamic.is-valid .form-control,
    .input-group.input-group-dynamic.is-valid .form-control:focus,
    .input-group.input-group-static.is-valid .form-control,
    .input-group.input-group-static.is-valid .form-control:focus {
      background-image: linear-gradient(0deg, #4CAF50 2px, rgba(156, 39, 176, 0) 0), linear-gradient(0deg, #d2d2d2 1px, hsla(0, 0%, 82%, 0) 0);
      border-radius: 0 !important;
    }
    
    .input-group.input-group-dynamic.is-invalid .form-control,
    .input-group.input-group-dynamic.is-invalid .form-control:focus,
    .input-group.input-group-static.is-invalid .form-control,
    .input-group.input-group-static.is-invalid .form-control:focus {
      background-image: linear-gradient(0deg, #F44335 2px, rgba(156, 39, 176, 0) 0), linear-gradient(0deg, #d2d2d2 1px, hsla(0, 0%, 82%, 0) 0);
      border-radius: 0 !important;
    }
    
    .input-group.input-group-dynamic.is-filled.is-focused .form-label,
    .input-group.input-group-dynamic.is-filled .form-label,
    .input-group.input-group-static.is-filled.is-focused .form-label,
    .input-group.input-group-static.is-filled .form-label {
      top: -1rem;
    }
    
    .input-group.input-group-outline .form-control {
      background: none;
      border: 1px solid #d2d6da;
      border-radius: 0.375rem;
      border-top-left-radius: 0.375rem !important;
      border-bottom-left-radius: 0.375rem !important;
      padding: 0.625rem 0.75rem !important;
      line-height: 1.3 !important;
    }
    
    .input-group.input-group-outline .form-control.form-control-lg {
      padding: 0.75rem 0.75rem !important;
    }
    
    .input-group.input-group-outline .form-control.form-control-sm {
      padding: 0.25rem 0.75rem !important;
    }
    
    .input-group.input-group-outline .form-control[disabled] {
      cursor: not-allowed;
      border-style: dashed;
    }
    
    .input-group.input-group-outline .form-label {
      display: flex;
      line-height: 3.925 !important;
      top: -0.375rem;
      margin-bottom: 0;
    }
    
    .input-group.input-group-outline .form-label:before {
      content: "";
      margin-right: 4px;
      border-left: solid 1px transparent;
      border-radius: 4px 0;
    }
    
    .input-group.input-group-outline .form-label:after {
      content: "";
      flex-grow: 1;
      margin-left: 4px;
      border-right: solid 1px transparent;
      border-radius: 0 5px;
    }
    
    .input-group.input-group-outline .form-label:before,
    .input-group.input-group-outline .form-label:after {
      content: "";
      border-top: solid 1px;
      border-top-color: #d2d6da;
      pointer-events: none;
      margin-top: 0.375rem;
      box-sizing: border-box;
      display: block;
      height: 0.5rem;
      width: 0.625rem;
      border-width: 1px 0 0;
      border-color: transparent;
    }
    
    .input-group.input-group-outline.is-focused .form-label+.form-control,
    .input-group.input-group-outline.is-filled .form-label+.form-control {
      border-color: #e91e63 !important;
      border-top-color: transparent !important;
      box-shadow: inset 1px 0 #e91e63, inset -1px 0 #e91e63, inset 0 -1px #e91e63;
    }
    
    .input-group.input-group-outline.is-focused .form-label,
    .input-group.input-group-outline.is-filled .form-label {
      width: 100%;
      height: 100%;
      font-size: 0.6875rem !important;
      color: #e91e63;
      display: flex;
      line-height: 1.25 !important;
    }
    
    .input-group.input-group-outline.is-focused .form-label:before,
    .input-group.input-group-outline.is-focused .form-label:after,
    .input-group.input-group-outline.is-filled .form-label:before,
    .input-group.input-group-outline.is-filled .form-label:after {
      opacity: 1;
    }
    
    .input-group.input-group-outline.is-focused .form-label:before,
    .input-group.input-group-outline.is-focused .form-label:after,
    .input-group.input-group-outline.is-filled .form-label:before,
    .input-group.input-group-outline.is-filled .form-label:after {
      border-top-color: #e91e63;
      box-shadow: inset 0 1px #e91e63;
    }
    
    .input-group.input-group-outline.is-valid .form-control {
      background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 10 8'%3e%3cpath fill='%2366d432' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3e%3c/svg%3e");
      background-repeat: no-repeat;
      background-position: right 0.75rem center;
      background-size: 1rem 1rem;
    }
    
    .input-group.input-group-outline.is-valid.is-focused .form-label+.form-control,
    .input-group.input-group-outline.is-valid.is-filled .form-label+.form-control {
      border-color: #4CAF50 !important;
      box-shadow: inset 1px 0 #4CAF50, inset -1px 0 #4CAF50, inset 0 -1px #4CAF50;
      border-top-color: transparent !important;
    }
    
    .input-group.input-group-outline.is-valid.is-focused .form-label,
    .input-group.input-group-outline.is-valid.is-filled .form-label {
      color: #4CAF50;
    }
    
    .input-group.input-group-outline.is-valid.is-focused .form-label:before,
    .input-group.input-group-outline.is-valid.is-focused .form-label:after,
    .input-group.input-group-outline.is-valid.is-filled .form-label:before,
    .input-group.input-group-outline.is-valid.is-filled .form-label:after {
      border-top-color: #4CAF50;
      box-shadow: inset 0 1px #4CAF50;
    }
    
    .input-group.input-group-outline.is-invalid .form-control {
      background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' fill='none' stroke='%23fd5c70' viewBox='0 0 12 12'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3e%3ccircle cx='6' cy='8.2' r='.6' fill='%23fd5c70' stroke='none'/%3e%3c/svg%3e");
      background-repeat: no-repeat;
      background-position: right 0.75rem center;
      background-size: 1rem 1rem;
    }
    
    .input-group.input-group-outline.is-invalid.is-focused .form-label+.form-control,
    .input-group.input-group-outline.is-invalid.is-filled .form-label+.form-control {
      border-color: #F44335 !important;
      box-shadow: inset 1px 0 #F44335, inset -1px 0 #F44335, inset 0 -1px #F44335;
      border-top-color: transparent !important;
    }
    
    .input-group.input-group-outline.is-invalid.is-focused .form-label,
    .input-group.input-group-outline.is-invalid.is-filled .form-label {
      color: #F44335;
    }
    
    .input-group.input-group-outline.is-invalid.is-focused .form-label:before,
    .input-group.input-group-outline.is-invalid.is-focused .form-label:after,
    .input-group.input-group-outline.is-invalid.is-filled .form-label:before,
    .input-group.input-group-outline.is-invalid.is-filled .form-label:after {
      border-top-color: #F44335;
      box-shadow: inset 0 1px #F44335;
    }
    
    .input-group.input-group-outline.input-group-sm .form-label,
    .input-group.input-group-outline.input-group-sm label,
    .input-group.input-group-dynamic.input-group-sm .form-label,
    .input-group.input-group-dynamic.input-group-sm label,
    .input-group.input-group-static.input-group-sm .form-label,
    .input-group.input-group-static.input-group-sm label {
      font-size: 0.75rem;
    }
    
    .input-group.input-group-outline.input-group-lg .form-label,
    .input-group.input-group-outline.input-group-lg label,
    .input-group.input-group-dynamic.input-group-lg .form-label,
    .input-group.input-group-dynamic.input-group-lg label,
    .input-group.input-group-static.input-group-lg .form-label,
    .input-group.input-group-static.input-group-lg label {
      font-size: 0.975rem;
    }
    
    .input-group.input-group-static .form-control {
      width: 100%;
    }
    
    .input-group.input-group-static label {
      margin-left: 0;
      margin-bottom: 0;
    }
    
    .form-check:not(.form-switch) .form-check-input {
      float: initial !important;
      margin-left: auto !important;
    }
    
    .form-check:not(.form-switch) .form-check-input[type=checkbox],
    .form-check:not(.form-switch) .form-check-input[type=radio] {
      border: 1px solid rgb(203.5, 203.5, 203.5);
      margin-top: 0.25rem;
      position: relative;
    }
    
    .form-check:not(.form-switch) .form-check-input[type=checkbox]:checked,
    .form-check:not(.form-switch) .form-check-input[type=radio]:checked {
      border-color: #e91e63;
    }
    
    .form-check:not(.form-switch) .form-check-input[type=checkbox] {
      background-image: none;
    }
    
    .form-check:not(.form-switch) .form-check-input[type=checkbox]:after {
      transition: opacity 0.25s ease-in-out;
      font-family: "FontAwesome";
      content: "\f00c";
      width: 100%;
      height: 100%;
      color: #fff;
      position: absolute;
      display: flex;
      justify-content: center;
      align-items: center;
      font-size: 0.67rem;
      opacity: 0;
    }
    
    .form-check:not(.form-switch) .form-check-input[type=checkbox]:checked {
      background: #e91e63;
    }
    
    .form-check:not(.form-switch) .form-check-input[type=checkbox]:checked:after {
      opacity: 1;
    }
    
    .form-check:not(.form-switch) .form-check-input[type=radio] {
      transition: border 0s;
      background: transparent;
    }
    
    .form-check:not(.form-switch) .form-check-input[type=radio]:after {
      transition: opacity 0.25s ease-in-out;
      content: "";
      position: absolute;
      width: 0.8375rem;
      height: 0.8375rem;
      border-radius: 50%;
      background-image: linear-gradient(195deg, #EC407A 0%, #D81B60 100%), var(--bs-gradient);
      opacity: 0;
      left: 0;
      right: 0;
      top: 0;
      bottom: 0;
      margin: auto;
    }
    
    .form-check:not(.form-switch) .form-check-input[type=radio]:checked {
      padding: 6px;
    }
    
    .form-check:not(.form-switch) .form-check-input[type=radio]:checked:after {
      opacity: 1;
    }
    
    .form-check:not(.form-switch) .form-check-input[type=radio]:active {
      box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06), 0 0 0 12px rgba(53, 71, 102, 0.1);
      border-radius: 50rem;
      transition: 0.05s ease;
    }
    
    .form-check-label,
    .form-check-input[type=checkbox] {
      cursor: pointer;
    }
    
    .form-check-label {
      font-size: 0.875rem;
      font-weight: 400;
    }
    
    .form-check-input {
      -webkit-appearance: none;
      -moz-appearance: none;
      appearance: none;
    }
    
    .form-switch .form-check-input {
      position: relative;
      background-color: #a3a3a3;
      height: 0.9375rem;
      width: 1.875rem;
    }
    
    .form-switch .form-check-input:after {
      transition: transform 0.25s ease-in-out, background-color 0.25s ease-in-out;
      content: "";
      width: 1.25rem;
      height: 1.25rem;
      border-radius: 50%;
      border: 1px solid #a3a3a3;
      position: absolute;
      background-color: #fff;
      transform: translateX(1px);
      box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
      top: -2.5px;
      left: -5px;
    }
    
    .form-switch .form-check-input:checked:after {
      transform: translateX(21px);
      border-color: #42424a;
    }
    
    .form-switch .form-check-input:checked {
      border-color: #42424a;
      background-color: #42424a;
    }
    
    .form-switch .form-check-input:checked:active:after {
      box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06), 0 0 0 15px rgba(53, 71, 102, 0.1);
    }
    
    .form-switch .form-check-input:active:after {
      box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06), 0 0 0 15px rgba(0, 0, 0, 0.1);
    }
    
    .form-select {
      transition: 0.2s ease;
    }
    
    label,
    .form-label {
      font-size: 0.875rem;
      font-weight: 400;
      margin-bottom: 0.5rem;
      color: #737373;
      margin-left: 0.25rem;
    }
    
    .input-group .form-label {
      position: absolute;
      top: 0.6125rem;
      margin-left: 0;
      transition: 0.2s ease all;
    }
    
    .form-control {
      border: none;
    }
    
    .form-control.is-invalid {
      border: 1px solid #d2d6da;
      padding: 0.625rem 0.75rem;
      line-height: 1.3 !important;
    }
    
    .form-control.is-invalid:focus {
      box-shadow: 0 0 0 2px rgba(253, 92, 112, 0.6);
    }
    
    .form-control.is-valid {
      border: 1px solid #d2d6da;
      padding: 0.625rem 0.75rem;
      line-height: 1.3 !important;
    }
    
    .form-control.is-valid:focus {
      box-shadow: 0 0 0 2px rgba(102, 212, 50, 0.65);
    }
    
    .form-control[disabled] {
      padding: 0.625rem 0.75rem;
      line-height: 1.45 !important;
    }
    
    .input-group .input-group-text {
      position: absolute;
      padding: 0.75rem 0;
      right: 0;
      border-right: 0 !important;
    }
    
    .input-group .input-group-text i {
      color: #525252;
    }
    
    .input-group.input-group-static .input-group-text {
      bottom: 0;
    }
    
    .footer .nav-link {
      color: #262626;
      font-weight: 400;
      font-size: 0.875rem;
      padding-top: 0;
      padding-bottom: 0.25rem;
    }
    
    .footer .nav-link:hover {
      opacity: 1 !important;
      transition: opacity 0.3 ease;
    }
    
    .footer .footer-logo {
      max-width: 2rem;
    }
    
    .bg-gradient-primary {
      background-image: linear-gradient(195deg, #EC407A 0%, #D81B60 100%);
    }
    
    .bg-gradient-secondary {
      background-image: linear-gradient(195deg, #747b8a 0%, #495361 100%);
    }
    
    .bg-gradient-success {
      background-image: linear-gradient(195deg, #66BB6A 0%, #43A047 100%);
    }
    
    .bg-gradient-info {
      background-image: linear-gradient(195deg, #49a3f1 0%, #1A73E8 100%);
    }
    
    .bg-gradient-warning {
      background-image: linear-gradient(195deg, #FFA726 0%, #FB8C00 100%);
    }
    
    .bg-gradient-danger {
      background-image: linear-gradient(195deg, #EF5350 0%, #E53935 100%);
    }
    
    .bg-gradient-light {
      background-image: linear-gradient(195deg, #EBEFF4 0%, #CED4DA 100%);
    }
    
    .bg-gradient-dark {
      background-image: linear-gradient(195deg, #42424a 0%, #191919 100%);
    }
    
    .bg-gradient-faded-primary {
      background-image: radial-gradient(370px circle at 80% 50%, rgba(233, 30, 99, 0.6) 0, rgb(193.1174089069, 18.8825910931, 78.1052631579) 100%);
    }
    
    .bg-gradient-faded-secondary {
      background-image: radial-gradient(370px circle at 80% 50%, rgba(115, 115, 115, 0.6) 0, rgb(89.5, 89.5, 89.5) 100%);
    }
    
    .bg-gradient-faded-success {
      background-image: radial-gradient(370px circle at 80% 50%, rgba(76, 175, 80, 0.6) 0, rgb(60.5577689243, 139.4422310757, 63.7450199203) 100%);
    }
    
    .bg-gradient-faded-info {
      background-image: radial-gradient(370px circle at 80% 50%, rgba(26, 115, 232, 0.6) 0, rgb(18.8928571429, 92, 188.1071428571) 100%);
    }
    
    .bg-gradient-faded-warning {
      background-image: radial-gradient(370px circle at 80% 50%, rgba(251, 140, 0, 0.6) 0, rgb(200, 111.5537848606, 0) 100%);
    }
    
    .bg-gradient-faded-danger {
      background-image: radial-gradient(370px circle at 80% 50%, rgba(244, 67, 53, 0.6) 0, rgb(233.2957746479, 28.8732394366, 12.7042253521) 100%);
    }
    
    .bg-gradient-faded-light {
      background-image: radial-gradient(370px circle at 80% 50%, rgba(229, 229, 229, 0.6) 0, rgb(203.5, 203.5, 203.5) 100%);
    }
    
    .bg-gradient-faded-dark {
      background-image: radial-gradient(370px circle at 80% 50%, rgba(38, 38, 38, 0.6) 0, rgb(12.5, 12.5, 12.5) 100%);
    }
    
    .bg-gradient-faded-white {
      background-image: radial-gradient(370px circle at 80% 50%, rgba(255, 255, 255, 0.6) 0, rgb(229.5, 229.5, 229.5) 100%);
    }
    
    .bg-gradient-faded-dark-blue {
      background-image: radial-gradient(370px circle at 80% 50%, rgba(26, 35, 126, 0.6) 0, rgb(17.2763157895, 23.2565789474, 83.7236842105) 100%);
    }
    
    .bg-gradient-faded-primary-vertical {
      background-image: radial-gradient(200px circle at 50% 70%, rgba(233, 30, 99, 0.3) 0, #e91e63 100%);
    }
    
    .bg-gradient-faded-secondary-vertical {
      background-image: radial-gradient(200px circle at 50% 70%, rgba(115, 115, 115, 0.3) 0, #737373 100%);
    }
    
    .bg-gradient-faded-success-vertical {
      background-image: radial-gradient(200px circle at 50% 70%, rgba(76, 175, 80, 0.3) 0, #4CAF50 100%);
    }
    
    .bg-gradient-faded-info-vertical {
      background-image: radial-gradient(200px circle at 50% 70%, rgba(26, 115, 232, 0.3) 0, #1A73E8 100%);
    }
    
    .bg-gradient-faded-warning-vertical {
      background-image: radial-gradient(200px circle at 50% 70%, rgba(251, 140, 0, 0.3) 0, #fb8c00 100%);
    }
    
    .bg-gradient-faded-danger-vertical {
      background-image: radial-gradient(200px circle at 50% 70%, rgba(244, 67, 53, 0.3) 0, #F44335 100%);
    }
    
    .bg-gradient-faded-light-vertical {
      background-image: radial-gradient(200px circle at 50% 70%, rgba(229, 229, 229, 0.3) 0, #e5e5e5 100%);
    }
    
    .bg-gradient-faded-dark-vertical {
      background-image: radial-gradient(200px circle at 50% 70%, rgba(38, 38, 38, 0.3) 0, #262626 100%);
    }
    
    .bg-gradient-faded-white-vertical {
      background-image: radial-gradient(200px circle at 50% 70%, rgba(255, 255, 255, 0.3) 0, #fff 100%);
    }
    
    .bg-gradient-faded-dark-blue-vertical {
      background-image: radial-gradient(200px circle at 50% 70%, rgba(26, 35, 126, 0.3) 0, #1A237E 100%);
    }
    
    .material-symbols-rounded {
      font-size: 20px;
      /* Preferred icon size */
      display: inline-block;
      line-height: 1;
      text-transform: none;
      letter-spacing: normal;
      word-wrap: normal;
      white-space: nowrap;
      direction: ltr;
      font-variation-settings: "FILL" 0, "wght" 400, "GRAD" 0, "opsz" 24;
      /* Support for all WebKit browsers. */
      -webkit-font-smoothing: antialiased;
      /* Support for Safari and Chrome. */
      text-rendering: optimizeLegibility;
      /* Support for Firefox. */
      -moz-osx-font-smoothing: grayscale;
      /* Support for IE. */
      font-feature-settings: "liga";
    }
    
    .nav.nav-pills .nav-link .material-symbols-rounded {
      top: 3px;
    }
    
    .icon-shape {
      width: 48px;
      height: 48px;
      background-position: center;
      border-radius: 0.5rem;
    }
    
    .icon-shape i {
      color: #fff;
      opacity: 0.8;
      top: 11px;
      position: relative;
    }
    
    .icon-shape .ni {
      top: 14px;
    }
    
    .icon-xxs {
      width: 20px;
      height: 20px;
    }
    
    .icon-xxs i {
      top: 0;
      font-size: 0.65rem;
    }
    
    .icon-xs {
      width: 24px;
      height: 24px;
    }
    
    .icon-xs i {
      top: -1px;
      font-size: 0.75rem;
    }
    
    .icon-sm {
      width: 32px;
      height: 32px;
    }
    
    .icon-sm i {
      top: 4px;
      font-size: 0.875rem;
    }
    
    .icon-md {
      width: 48px;
      height: 48px;
    }
    
    .icon-md i {
      top: 30%;
      font-size: 1.125rem;
    }
    
    .icon-md.icon-striped {
      background-position-x: 85px;
      background-position-y: 85px;
    }
    
    .icon-md.icon-striped i {
      top: 11%;
      margin-left: -10px;
      font-size: 0.875rem;
    }
    
    .icon-lg {
      width: 64px;
      height: 64px;
    }
    
    .icon-lg i {
      top: 31%;
      font-size: 1.5rem;
    }
    
    .icon-lg.icon-striped {
      background-position-x: 111px;
      background-position-y: 111px;
    }
    
    .icon-lg.icon-striped i {
      top: 21%;
      margin-left: -15px;
    }
    
    .icon-xl {
      width: 100px;
      height: 100px;
      border-radius: 0.5rem;
    }
    
    .icon-xl i {
      top: 35%;
      font-size: 2.1rem;
    }
    
    .icon-xl.icon-striped {
      background-position-x: 80px;
      background-position-y: 80px;
    }
    
    .icon-xl.icon-striped i {
      top: 30%;
      margin-left: -15px;
    }
    
    .info-horizontal {
      text-align: left !important;
    }
    
    .info-horizontal .icon {
      float: left;
    }
    
    .info-horizontal .description {
      overflow: hidden;
    }
    
    svg.text-primary .color-foreground {
      fill: #EC407A;
    }
    
    svg.text-primary .color-background {
      fill: #D81B60;
    }
    
    svg.text-secondary .color-foreground {
      fill: #747b8a;
    }
    
    svg.text-secondary .color-background {
      fill: #495361;
    }
    
    svg.text-info .color-foreground {
      fill: #49a3f1;
    }
    
    svg.text-info .color-background {
      fill: #1A73E8;
    }
    
    svg.text-warning .color-foreground {
      fill: #FFA726;
    }
    
    svg.text-warning .color-background {
      fill: #FB8C00;
    }
    
    svg.text-danger .color-foreground {
      fill: #EF5350;
    }
    
    svg.text-danger .color-background {
      fill: #E53935;
    }
    
    svg.text-success .color-foreground {
      fill: #66BB6A;
    }
    
    svg.text-success .color-background {
      fill: #43A047;
    }
    
    svg.text-dark .color-foreground {
      fill: #42424a;
    }
    
    svg.text-dark .color-background {
      fill: #191919;
    }
    
    html {
      border: none !important;
    }
    
    .blur {
      box-shadow: inset 0px 0px 2px rgba(254, 254, 254, 0.8196078431);
      -webkit-backdrop-filter: saturate(100%) blur(16px);
      backdrop-filter: saturate(100%) blur(16px);
      background-color: rgba(255, 255, 255, 0.9) !important;
    }
    
    .blur.saturation-less {
      -webkit-backdrop-filter: saturate(20%) blur(16px);
      backdrop-filter: saturate(20%) blur(16px);
    }
    
    .blur.blur-rounded {
      border-radius: 40px;
    }
    
    .blur.blur-light {
      background-color: rgba(255, 255, 255, 0.4);
    }
    
    .blur.blur-dark {
      background-color: rgba(0, 0, 0, 0.3);
    }
    
    .shadow-blur {
      box-shadow: inset 0 0px 1px 1px rgba(254, 254, 254, 0.7), 0 3px 12px 0 rgba(0, 0, 0, 0.05) !important;
    }
    
    .shadow-card {
      box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05) !important;
    }
    
    .navbar-blur {
      -webkit-backdrop-filter: saturate(100%) blur(16px);
      backdrop-filter: saturate(100%) blur(16px);
      background-color: rgba(255, 255, 255, 0.9) !important;
    }
    
    .blur-section {
      -webkit-backdrop-filter: saturate(100%) blur(16px);
      backdrop-filter: saturate(100%) blur(16px);
    }
    
    .blur-section.blur-gradient-primary {
      background-image: linear-gradient(195deg, rgba(236, 64, 122, 0.95) 0%, rgba(216, 27, 96, 0.95) 100%);
    }
    
    *.move-on-hover {
      -webkit-transition: 0.2s ease-out;
      transition: 0.2s ease-out;
      overflow: hidden;
      -webkit-transform-origin: 50% 0;
      transform-origin: 50% 0;
      transform-origin: 50% 0;
      -webkit-transform: perspective(999px) rotateX(0deg) translate3d(0, 0, 0);
      transform: perspective(999px) rotateX(0deg) translate3d(0, 0, 0);
      -webkit-backface-visibility: hidden;
      backface-visibility: hidden;
      will-change: transform, box-shadow;
    }
    
    *.move-on-hover:hover {
      -webkit-transform: perspective(999px) rotateX(7deg) translate3d(0px, -4px, 5px);
      transform: perspective(999px) rotateX(7deg) translate3d(0px, -4px, 5px);
    }
    
    *.gradient-animation {
      background: linear-gradient(-45deg, #49a3f1, #F44335, #fb8c00, #EC407A, #262626);
      background-size: 400% 400% !important;
      animation: gradient 10s ease infinite;
    }
    
    hr {
      border-top: none;
      height: 1px;
    }
    
    hr.vertical {
      position: absolute;
      background-color: transparent;
      height: 100%;
      right: 0;
      top: 0;
      width: 1px;
    }
    
    hr.vertical.light {
      background-image: linear-gradient(90deg, hsla(0, 0%, 100%, 0), #fff, hsla(0, 0%, 100%, 0));
    }
    
    hr.vertical.dark {
      background-image: linear-gradient(90deg, transparent, rgba(0, 0, 0, 0.4), transparent);
    }
    
    hr.vertical.gray-light {
      background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0));
    }
    
    hr.horizontal {
      background-color: transparent;
    }
    
    hr.horizontal.light {
      background-image: linear-gradient(90deg, hsla(0, 0%, 100%, 0), #fff, hsla(0, 0%, 100%, 0));
    }
    
    hr.horizontal.dark {
      background-image: linear-gradient(90deg, transparent, rgba(0, 0, 0, 0.4), transparent);
    }
    
    hr.horizontal.gray-light {
      background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0));
    }
    
    .lock-size {
      width: 1.7rem;
      height: 1.7rem;
    }
    
    .border-radius-xs {
      border-radius: 0.1rem;
    }
    
    .border-radius-sm {
      border-radius: 0.125rem;
    }
    
    .border-radius-md {
      border-radius: 0.375rem;
    }
    
    .border-radius-lg {
      border-radius: 0.5rem;
    }
    
    .border-radius-xl {
      border-radius: 0.75rem;
    }
    
    .border-radius-2xl {
      border-radius: 1rem;
    }
    
    .border-radius-section {
      border-radius: 10rem;
    }
    
    .border-bottom-end-radius-0 {
      border-bottom-right-radius: 0;
    }
    
    .border-top-end-radius-0 {
      border-top-right-radius: 0;
    }
    
    .border-bottom-start-radius-0 {
      border-bottom-left-radius: 0;
    }
    
    .border-top-start-radius-0 {
      border-top-left-radius: 0;
    }
    
    .border-dashed {
      border-style: dashed;
    }
    
    .z-index-sticky {
      z-index: 1020;
    }
    
    .waves {
      position: relative;
      width: 100%;
      height: 16vh;
      margin-bottom: -7px;
      /*Fix for safari gap*/
      min-height: 100px;
      max-height: 150px;
    }
    
    .waves.waves-sm {
      height: 50px;
      min-height: 50px;
    }
    
    .waves.no-animation .moving-waves>use {
      animation: none;
    }
    
    .wave-rotate {
      transform: rotate(180deg);
    }
    
    /* Animation for the waves */
    .moving-waves>use {
      animation: move-forever 40s cubic-bezier(0.55, 0.5, 0.45, 0.5) infinite;
    }
    
    .moving-waves>use:nth-child(1) {
      animation-delay: -2s;
      animation-duration: 11s;
    }
    
    .moving-waves>use:nth-child(2) {
      animation-delay: -4s;
      animation-duration: 13s;
    }
    
    .moving-waves>use:nth-child(3) {
      animation-delay: -3s;
      animation-duration: 15s;
    }
    
    .moving-waves>use:nth-child(4) {
      animation-delay: -4s;
      animation-duration: 20s;
    }
    
    .moving-waves>use:nth-child(5) {
      animation-delay: -4s;
      animation-duration: 25s;
    }
    
    .moving-waves>use:nth-child(6) {
      animation-delay: -3s;
      animation-duration: 30s;
    }
    
    @keyframes move-forever {
      0% {
        transform: translate3d(-90px, 0, 0);
      }
    
      100% {
        transform: translate3d(85px, 0, 0);
      }
    }
    
    /*Shrinking for mobile*/
    @media (max-width: 767.98px) {
      .waves {
        height: 40px;
        min-height: 40px;
      }
    
      hr.horizontal {
        background-color: transparent;
      }
    
      hr.horizontal:not(.dark) {
        background-image: linear-gradient(to right, rgba(255, 255, 255, 0), rgb(255, 255, 255), rgba(255, 255, 255, 0));
      }
    
      hr.horizontal.vertical {
        transform: rotate(90deg);
      }
    
      hr.horizontal.dark {
        background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0));
      }
    }
    
    .overflow-visible {
      overflow: visible !important;
    }
    
    .popover .popover-header {
      font-weight: 600;
    }
    
    .bg-cover {
      background-size: cover;
    }
    
    .mask {
      position: absolute;
      background-size: cover;
      background-position: center center;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      opacity: 0.8;
    }
    
    .cursor-pointer {
      cursor: pointer;
    }
    
    .transform-translate-50 {
      transform: translate(0, -50%);
    }
    
    @media (min-width: 992px) {
      .virtual-reality .sidenav {
        animation-name: fadeInBottom;
        animation-fill-mode: both;
        animation-duration: 1.5s;
        transform: scale(0.6);
        left: 18% !important;
        position: absolute;
      }
    }
    
    .choices .choices__list {
      background: no-repeat bottom, 50% calc(100% - 1px);
      background-size: 0 100%, 100% 100%;
      transition: 0.2s ease;
    }
    
    .choices .choices__list.choices__list--single .choices__item--selectable {
      margin-bottom: 0.5rem;
    }
    
    .choices .choices__list.choices__list--single,
    .choices .choices__list.choices__list--single:focus {
      background-image: linear-gradient(0deg, #e91e63 2px, rgba(156, 39, 176, 0) 0), linear-gradient(0deg, #d2d2d2 1px, hsla(0, 0%, 82%, 0) 0);
    }
    
    .choices .choices__list.choices__list--dropdown {
      background: #fff;
    }
    
    .choices.is-focused .choices__list {
      background-size: 100% 100%, 100% 100%;
    }
    
    .border-right-after:after {
      content: "";
      position: absolute;
      right: 0;
      top: 3vh;
      height: 70%;
      width: 50%;
      border-right: 1px solid #dee2e6;
    }
    
    .rotate-caret .collapse .nav-link:after {
      margin-right: auto;
      margin-left: 0;
    }
    
    @media (min-width: 1200px) {
      .g-sidenav-hidden.rtl .main-content {
        margin-right: 7rem !important;
      }
    }
    
    .rtl .ps__rail-y {
      right: auto !important;
      left: 0;
    }
    
    .rtl .start-0 {
      right: 0 !important;
    }
    
    .rtl .end-0 {
      left: 0 !important;
    }
    
    .bullets {
      position: sticky;
      top: 30%;
      height: 0;
      transform: translate(-50%, -50%);
      margin-left: auto;
    }
    
    .bullets ul {
      display: flex;
      flex-direction: column;
      align-items: end;
      list-style-type: none;
      margin-right: -1rem;
    }
    
    .bullets ul li .indicator {
      cursor: pointer;
      margin-top: 1rem;
      display: block;
      height: 10px;
      width: 10px;
      border-radius: 50%;
      background-color: #e91e63;
    }
    
    .bullets ul li .active {
      transform: scale(1.3);
      transition: transform 200ms ease-in-out;
    }
    
    .img-material-tw {
      object-fit: cover;
    }
    
    .navbar {
      box-shadow: 0 2px 12px 0 rgba(0, 0, 0, 0.16);
    }
    
    .navbar .navbar-brand {
      color: #262626;
    }
    
    .navbar .nav-link {
      color: #262626;
      padding: 0.5rem 1rem;
      font-weight: 400;
      font-size: 0.875rem;
    }
    
    .navbar.navbar-absolute {
      position: absolute;
      width: 100%;
      z-index: 1;
    }
    
    .navbar.navbar-transparent .nav-link,
    .navbar.navbar-transparent .nav-link i {
      color: #fff;
    }
    
    .navbar.navbar-transparent .nav-link:hover,
    .navbar.navbar-transparent .nav-link:focus {
      color: rgba(255, 255, 255, 0.75);
    }
    
    .navbar.navbar-transparent .navbar-toggler .navbar-toggler-icon .navbar-toggler-bar {
      background: #fff;
    }
    
    .navbar.navbar-transparent .navbar-collapse {
      border-radius: 0.75rem;
    }
    
    .navbar.navbar-dark .navbar-collapse.show .dropdown-header.text-dark,
    .navbar.navbar-dark .navbar-collapse.collapsing .dropdown-header.text-dark {
      color: #fff !important;
    }
    
    .navbar .sidenav-toggler-inner {
      width: 18px;
    }
    
    .navbar .sidenav-toggler-inner .sidenav-toggler-line {
      transition: all 0.15s ease;
      background: #737373;
      border-radius: 0.1rem;
      position: relative;
      display: block;
      height: 2px;
    }
    
    .navbar .sidenav-toggler-inner .sidenav-toggler-line:not(:last-child) {
      margin-bottom: 3px;
    }
    
    .g-sidenav-show.g-sidenav-pinned .navbar .sidenav-toggler-inner .sidenav-toggler-line:first-child,
    .g-sidenav-show.g-sidenav-pinned .navbar .sidenav-toggler-inner .sidenav-toggler-line:last-child {
      width: 13px;
      transform: translateX(5px);
    }
    
    .navbar-light {
      background-color: #fff !important;
    }
    
    .navbar-light .navbar-toggler {
      border: none;
    }
    
    .navbar-light .navbar-toggler:focus {
      box-shadow: none;
    }
    
    .navbar-toggler .navbar-toggler-icon {
      background-image: none;
    }
    
    .navbar-toggler .navbar-toggler-icon .navbar-toggler-bar {
      display: block;
      position: relative;
      width: 22px;
      height: 1px;
      border-radius: 1px;
      background: #525252;
      transition: all 0.2s;
      margin: 0 auto;
    }
    
    .navbar-toggler .navbar-toggler-icon .navbar-toggler-bar.bar2,
    .navbar-toggler .navbar-toggler-icon .navbar-toggler-bar.bar3 {
      margin-top: 7px;
    }
    
    .navbar-toggler[aria-expanded=true] .navbar-toggler-bar.bar1 {
      transform: rotate(45deg);
      transform-origin: 10% 10%;
      margin-top: 4px;
    }
    
    .navbar-toggler[aria-expanded=true] .navbar-toggler-bar.bar2 {
      opacity: 0;
    }
    
    .navbar-toggler[aria-expanded=true] .navbar-toggler-bar.bar3 {
      transform: rotate(-45deg);
      transform-origin: 10% 90%;
      margin-top: 3px;
    }
    
    @media (max-width: 991.98px) {
      .navbar.navbar-transparent .navbar-collapse {
        padding-top: 0.5rem;
        padding-bottom: 0.5rem;
        box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
      }
    
      .navbar.navbar-transparent .navbar-collapse.collapsing {
        background: #fff;
      }
    
      .navbar.navbar-transparent .navbar-collapse.show {
        background: #fff;
      }
    
      .navbar.navbar-transparent .navbar-collapse.show .nav-link,
      .navbar.navbar-transparent .navbar-collapse.show i {
        color: #262626;
      }
    
      .g-sidenav-show .navbar:not(.sidenav).navbar-main .navbar-collapse {
        display: flex !important;
        flex-basis: auto;
      }
    
      .g-sidenav-show .navbar:not(.sidenav).navbar-main .navbar-nav {
        flex-direction: row;
      }
    
      .navbar .navbar-collapse .navbar-nav .dropdown .dropdown-menu {
        box-shadow: none !important;
      }
    
      .navbar .navbar-collapse .navbar-nav .dropdown .dropdown-menu:before {
        display: none !important;
      }
    }
    
    @media (max-width: 767.98px) {
      .navbar-collapse {
        position: relative;
      }
    
      .navbar-collapse .navbar-nav {
        width: 100%;
      }
    
      .navbar-collapse .navbar-nav .nav-item.dropdown {
        position: static;
      }
    
      .navbar-collapse .navbar-nav .nav-item.dropdown .dropdown-menu {
        left: 0;
        right: 0;
      }
    
      .navbar-collapse .navbar-nav .nav-item.dropdown .dropdown-menu.show:before {
        content: none;
      }
    }
    
    @media (max-width: 575.98px) {
      .navbar-nav .nav-item.dropdown .dropdown-menu {
        left: 0;
        right: auto;
      }
    }
    
    .navbar-vertical .navbar-brand>img,
    .navbar-vertical .navbar-brand-img {
      max-width: 100%;
      max-height: 2rem;
    }
    
    .navbar-vertical .navbar-nav .nav-link {
      padding-left: 0.75rem;
      padding-right: 0.75rem;
      font-weight: 500;
      color: #fff;
      font-size: 0.75rem;
    }
    
    .navbar-vertical .navbar-nav .nav-link>i {
      min-width: 1rem;
      font-size: 1.125rem;
      text-align: center;
    }
    
    .navbar-vertical .navbar-nav .nav-link .dropdown-menu {
      border: none;
    }
    
    .navbar-vertical .navbar-nav .nav-link .dropdown-menu .dropdown-menu {
      margin-left: 0.5rem;
    }
    
    .navbar-vertical .navbar-nav .nav-link .avatar {
      width: 1.875rem;
      height: 1.875rem;
    }
    
    .navbar-vertical .navbar-nav .nav-sm .nav-link {
      font-size: 0.75rem;
    }
    
    .navbar-vertical .navbar-nav .nav-link {
      display: flex;
      align-items: center;
      white-space: nowrap;
    }
    
    .navbar-vertical .navbar-heading {
      padding-top: 0.5rem;
      padding-bottom: 0.5rem;
      font-size: 0.75rem;
      text-transform: uppercase;
      letter-spacing: 0.04em;
    }
    
    .navbar-vertical.navbar-expand-xs {
      display: block;
      position: fixed;
      top: 0;
      bottom: 0;
      width: 100%;
      max-width: 14rem !important;
      overflow-y: auto;
      padding: 0;
      box-shadow: none;
    }
    
    .navbar-vertical.navbar-expand-xs .navbar-collapse {
      display: block;
      overflow: auto;
      height: calc(100vh - 200px);
    }
    
    .navbar-vertical.navbar-expand-xs>[class*=container] {
      flex-direction: column;
      align-items: stretch;
      min-height: 100%;
      padding-left: 0;
      padding-right: 0;
    }
    
    @media all and (-ms-high-contrast: none),
    (-ms-high-contrast: active) {
      .navbar-vertical.navbar-expand-xs>[class*=container] {
        min-height: none;
        height: 100%;
      }
    }
    
    .navbar-vertical.navbar-expand-xs.fixed-start {
      left: 0;
    }
    
    .navbar-vertical.navbar-expand-xs.fixed-end {
      right: 0;
    }
    
    .navbar-vertical.navbar-expand-xs .navbar-nav .nav-link {
      padding-top: 0.5rem;
      padding-bottom: 0.5rem;
      margin: 0 0.75rem;
      margin-bottom: 1.5px;
    }
    
    .navbar-vertical.navbar-expand-xs .navbar-nav .nav-link .nav-link-text,
    .navbar-vertical.navbar-expand-xs .navbar-nav .nav-link .sidenav-mini-icon,
    .navbar-vertical.navbar-expand-xs .navbar-nav .nav-link .sidenav-normal,
    .navbar-vertical.navbar-expand-xs .navbar-nav .nav-link i {
      pointer-events: none;
    }
    
    .navbar-vertical.navbar-expand-xs .navbar-nav .nav-item {
      width: 100%;
    }
    
    .navbar-vertical.navbar-expand-xs .navbar-nav>.nav-item {
      margin-top: 0.125rem;
    }
    
    .navbar-vertical.navbar-expand-xs .navbar-nav>.nav-item .icon .ni {
      top: 0;
    }
    
    .navbar-vertical.navbar-expand-xs .lavalamp-object {
      width: calc(100% - 1rem) !important;
      background: theme-color("primary");
      color: color-yiq(#e91e63);
      margin-right: 0.5rem;
      margin-left: 0.5rem;
      padding-left: 1rem;
      padding-right: 1rem;
      border-radius: 0.125rem;
    }
    
    .navbar-vertical.navbar-expand-xs .navbar-nav .nav .nav-link {
      padding-top: 0.5rem;
      padding-bottom: 0.5rem;
      padding-left: 15px;
    }
    
    .navbar-vertical.navbar-expand-xs .navbar-nav .nav .nav-link>span.sidenav-normal {
      transition: all 0.1s ease 0s;
    }
    
    .navbar-vertical.navbar-expand-xs .navbar-nav .nav .nav-link.active {
      padding-top: 0.5rem;
      padding-bottom: 0.5rem;
    }
    
    @media (min-width: 576px) {
      .navbar-vertical.navbar-expand-sm {
        display: block;
        position: fixed;
        top: 0;
        bottom: 0;
        width: 100%;
        max-width: 14rem !important;
        overflow-y: auto;
        padding: 0;
        box-shadow: none;
      }
    
      .navbar-vertical.navbar-expand-sm .navbar-collapse {
        display: block;
        overflow: auto;
        height: calc(100vh - 200px);
      }
    
      .navbar-vertical.navbar-expand-sm>[class*=container] {
        flex-direction: column;
        align-items: stretch;
        min-height: 100%;
        padding-left: 0;
        padding-right: 0;
      }
    }
    
    @media (min-width: 576px) and (-ms-high-contrast: none),
    (min-width: 576px) and (-ms-high-contrast: active) {
      .navbar-vertical.navbar-expand-sm>[class*=container] {
        min-height: none;
        height: 100%;
      }
    }
    
    @media (min-width: 576px) {
      .navbar-vertical.navbar-expand-sm.fixed-start {
        left: 0;
      }
    
      .navbar-vertical.navbar-expand-sm.fixed-end {
        right: 0;
      }
    
      .navbar-vertical.navbar-expand-sm .navbar-nav .nav-link {
        padding-top: 0.5rem;
        padding-bottom: 0.5rem;
        margin: 0 0.75rem;
        margin-bottom: 1.5px;
      }
    
      .navbar-vertical.navbar-expand-sm .navbar-nav .nav-link .nav-link-text,
      .navbar-vertical.navbar-expand-sm .navbar-nav .nav-link .sidenav-mini-icon,
      .navbar-vertical.navbar-expand-sm .navbar-nav .nav-link .sidenav-normal,
      .navbar-vertical.navbar-expand-sm .navbar-nav .nav-link i {
        pointer-events: none;
      }
    
      .navbar-vertical.navbar-expand-sm .navbar-nav .nav-item {
        width: 100%;
      }
    
      .navbar-vertical.navbar-expand-sm .navbar-nav>.nav-item {
        margin-top: 0.125rem;
      }
    
      .navbar-vertical.navbar-expand-sm .navbar-nav>.nav-item .icon .ni {
        top: 0;
      }
    
      .navbar-vertical.navbar-expand-sm .lavalamp-object {
        width: calc(100% - 1rem) !important;
        background: theme-color("primary");
        color: color-yiq(#e91e63);
        margin-right: 0.5rem;
        margin-left: 0.5rem;
        padding-left: 1rem;
        padding-right: 1rem;
        border-radius: 0.125rem;
      }
    
      .navbar-vertical.navbar-expand-sm .navbar-nav .nav .nav-link {
        padding-top: 0.5rem;
        padding-bottom: 0.5rem;
        padding-left: 15px;
      }
    
      .navbar-vertical.navbar-expand-sm .navbar-nav .nav .nav-link>span.sidenav-normal {
        transition: all 0.1s ease 0s;
      }
    
      .navbar-vertical.navbar-expand-sm .navbar-nav .nav .nav-link.active {
        padding-top: 0.5rem;
        padding-bottom: 0.5rem;
      }
    }
    
    @media (min-width: 768px) {
      .navbar-vertical.navbar-expand-md {
        display: block;
        position: fixed;
        top: 0;
        bottom: 0;
        width: 100%;
        max-width: 14rem !important;
        overflow-y: auto;
        padding: 0;
        box-shadow: none;
      }
    
      .navbar-vertical.navbar-expand-md .navbar-collapse {
        display: block;
        overflow: auto;
        height: calc(100vh - 200px);
      }
    
      .navbar-vertical.navbar-expand-md>[class*=container] {
        flex-direction: column;
        align-items: stretch;
        min-height: 100%;
        padding-left: 0;
        padding-right: 0;
      }
    }
    
    @media (min-width: 768px) and (-ms-high-contrast: none),
    (min-width: 768px) and (-ms-high-contrast: active) {
      .navbar-vertical.navbar-expand-md>[class*=container] {
        min-height: none;
        height: 100%;
      }
    }
    
    @media (min-width: 768px) {
      .navbar-vertical.navbar-expand-md.fixed-start {
        left: 0;
      }
    
      .navbar-vertical.navbar-expand-md.fixed-end {
        right: 0;
      }
    
      .navbar-vertical.navbar-expand-md .navbar-nav .nav-link {
        padding-top: 0.5rem;
        padding-bottom: 0.5rem;
        margin: 0 0.75rem;
        margin-bottom: 1.5px;
      }
    
      .navbar-vertical.navbar-expand-md .navbar-nav .nav-link .nav-link-text,
      .navbar-vertical.navbar-expand-md .navbar-nav .nav-link .sidenav-mini-icon,
      .navbar-vertical.navbar-expand-md .navbar-nav .nav-link .sidenav-normal,
      .navbar-vertical.navbar-expand-md .navbar-nav .nav-link i {
        pointer-events: none;
      }
    
      .navbar-vertical.navbar-expand-md .navbar-nav .nav-item {
        width: 100%;
      }
    
      .navbar-vertical.navbar-expand-md .navbar-nav>.nav-item {
        margin-top: 0.125rem;
      }
    
      .navbar-vertical.navbar-expand-md .navbar-nav>.nav-item .icon .ni {
        top: 0;
      }
    
      .navbar-vertical.navbar-expand-md .lavalamp-object {
        width: calc(100% - 1rem) !important;
        background: theme-color("primary");
        color: color-yiq(#e91e63);
        margin-right: 0.5rem;
        margin-left: 0.5rem;
        padding-left: 1rem;
        padding-right: 1rem;
        border-radius: 0.125rem;
      }
    
      .navbar-vertical.navbar-expand-md .navbar-nav .nav .nav-link {
        padding-top: 0.5rem;
        padding-bottom: 0.5rem;
        padding-left: 15px;
      }
    
      .navbar-vertical.navbar-expand-md .navbar-nav .nav .nav-link>span.sidenav-normal {
        transition: all 0.1s ease 0s;
      }
    
      .navbar-vertical.navbar-expand-md .navbar-nav .nav .nav-link.active {
        padding-top: 0.5rem;
        padding-bottom: 0.5rem;
      }
    }
    
    @media (min-width: 992px) {
      .navbar-vertical.navbar-expand-lg {
        display: block;
        position: fixed;
        top: 0;
        bottom: 0;
        width: 100%;
        max-width: 14rem !important;
        overflow-y: auto;
        padding: 0;
        box-shadow: none;
      }
    
      .navbar-vertical.navbar-expand-lg .navbar-collapse {
        display: block;
        overflow: auto;
        height: calc(100vh - 200px);
      }
    
      .navbar-vertical.navbar-expand-lg>[class*=container] {
        flex-direction: column;
        align-items: stretch;
        min-height: 100%;
        padding-left: 0;
        padding-right: 0;
      }
    }
    
    @media (min-width: 992px) and (-ms-high-contrast: none),
    (min-width: 992px) and (-ms-high-contrast: active) {
      .navbar-vertical.navbar-expand-lg>[class*=container] {
        min-height: none;
        height: 100%;
      }
    }
    
    @media (min-width: 992px) {
      .navbar-vertical.navbar-expand-lg.fixed-start {
        left: 0;
      }
    
      .navbar-vertical.navbar-expand-lg.fixed-end {
        right: 0;
      }
    
      .navbar-vertical.navbar-expand-lg .navbar-nav .nav-link {
        padding-top: 0.5rem;
        padding-bottom: 0.5rem;
        margin: 0 0.75rem;
        margin-bottom: 1.5px;
      }
    
      .navbar-vertical.navbar-expand-lg .navbar-nav .nav-link .nav-link-text,
      .navbar-vertical.navbar-expand-lg .navbar-nav .nav-link .sidenav-mini-icon,
      .navbar-vertical.navbar-expand-lg .navbar-nav .nav-link .sidenav-normal,
      .navbar-vertical.navbar-expand-lg .navbar-nav .nav-link i {
        pointer-events: none;
      }
    
      .navbar-vertical.navbar-expand-lg .navbar-nav .nav-item {
        width: 100%;
      }
    
      .navbar-vertical.navbar-expand-lg .navbar-nav>.nav-item {
        margin-top: 0.125rem;
      }
    
      .navbar-vertical.navbar-expand-lg .navbar-nav>.nav-item .icon .ni {
        top: 0;
      }
    
      .navbar-vertical.navbar-expand-lg .lavalamp-object {
        width: calc(100% - 1rem) !important;
        background: theme-color("primary");
        color: color-yiq(#e91e63);
        margin-right: 0.5rem;
        margin-left: 0.5rem;
        padding-left: 1rem;
        padding-right: 1rem;
        border-radius: 0.125rem;
      }
    
      .navbar-vertical.navbar-expand-lg .navbar-nav .nav .nav-link {
        padding-top: 0.5rem;
        padding-bottom: 0.5rem;
        padding-left: 15px;
      }
    
      .navbar-vertical.navbar-expand-lg .navbar-nav .nav .nav-link>span.sidenav-normal {
        transition: all 0.1s ease 0s;
      }
    
      .navbar-vertical.navbar-expand-lg .navbar-nav .nav .nav-link.active {
        padding-top: 0.5rem;
        padding-bottom: 0.5rem;
      }
    }
    
    @media (min-width: 1200px) {
      .navbar-vertical.navbar-expand-xl {
        display: block;
        position: fixed;
        top: 0;
        bottom: 0;
        width: 100%;
        max-width: 14rem !important;
        overflow-y: auto;
        padding: 0;
        box-shadow: none;
      }
    
      .navbar-vertical.navbar-expand-xl .navbar-collapse {
        display: block;
        overflow: auto;
        height: calc(100vh - 200px);
      }
    
      .navbar-vertical.navbar-expand-xl>[class*=container] {
        flex-direction: column;
        align-items: stretch;
        min-height: 100%;
        padding-left: 0;
        padding-right: 0;
      }
    }
    
    @media (min-width: 1200px) and (-ms-high-contrast: none),
    (min-width: 1200px) and (-ms-high-contrast: active) {
      .navbar-vertical.navbar-expand-xl>[class*=container] {
        min-height: none;
        height: 100%;
      }
    }
    
    @media (min-width: 1200px) {
      .navbar-vertical.navbar-expand-xl.fixed-start {
        left: 0;
      }
    
      .navbar-vertical.navbar-expand-xl.fixed-end {
        right: 0;
      }
    
      .navbar-vertical.navbar-expand-xl .navbar-nav .nav-link {
        padding-top: 0.5rem;
        padding-bottom: 0.5rem;
        margin: 0 0.75rem;
        margin-bottom: 1.5px;
      }
    
      .navbar-vertical.navbar-expand-xl .navbar-nav .nav-link .nav-link-text,
      .navbar-vertical.navbar-expand-xl .navbar-nav .nav-link .sidenav-mini-icon,
      .navbar-vertical.navbar-expand-xl .navbar-nav .nav-link .sidenav-normal,
      .navbar-vertical.navbar-expand-xl .navbar-nav .nav-link i {
        pointer-events: none;
      }
    
      .navbar-vertical.navbar-expand-xl .navbar-nav .nav-item {
        width: 100%;
      }
    
      .navbar-vertical.navbar-expand-xl .navbar-nav>.nav-item {
        margin-top: 0.125rem;
      }
    
      .navbar-vertical.navbar-expand-xl .navbar-nav>.nav-item .icon .ni {
        top: 0;
      }
    
      .navbar-vertical.navbar-expand-xl .lavalamp-object {
        width: calc(100% - 1rem) !important;
        background: theme-color("primary");
        color: color-yiq(#e91e63);
        margin-right: 0.5rem;
        margin-left: 0.5rem;
        padding-left: 1rem;
        padding-right: 1rem;
        border-radius: 0.125rem;
      }
    
      .navbar-vertical.navbar-expand-xl .navbar-nav .nav .nav-link {
        padding-top: 0.5rem;
        padding-bottom: 0.5rem;
        padding-left: 15px;
      }
    
      .navbar-vertical.navbar-expand-xl .navbar-nav .nav .nav-link>span.sidenav-normal {
        transition: all 0.1s ease 0s;
      }
    
      .navbar-vertical.navbar-expand-xl .navbar-nav .nav .nav-link.active {
        padding-top: 0.5rem;
        padding-bottom: 0.5rem;
      }
    }
    
    @media (min-width: 1400px) {
      .navbar-vertical.navbar-expand-xxl {
        display: block;
        position: fixed;
        top: 0;
        bottom: 0;
        width: 100%;
        max-width: 14rem !important;
        overflow-y: auto;
        padding: 0;
        box-shadow: none;
      }
    
      .navbar-vertical.navbar-expand-xxl .navbar-collapse {
        display: block;
        overflow: auto;
        height: calc(100vh - 200px);
      }
    
      .navbar-vertical.navbar-expand-xxl>[class*=container] {
        flex-direction: column;
        align-items: stretch;
        min-height: 100%;
        padding-left: 0;
        padding-right: 0;
      }
    }
    
    @media (min-width: 1400px) and (-ms-high-contrast: none),
    (min-width: 1400px) and (-ms-high-contrast: active) {
      .navbar-vertical.navbar-expand-xxl>[class*=container] {
        min-height: none;
        height: 100%;
      }
    }
    
    @media (min-width: 1400px) {
      .navbar-vertical.navbar-expand-xxl.fixed-start {
        left: 0;
      }
    
      .navbar-vertical.navbar-expand-xxl.fixed-end {
        right: 0;
      }
    
      .navbar-vertical.navbar-expand-xxl .navbar-nav .nav-link {
        padding-top: 0.5rem;
        padding-bottom: 0.5rem;
        margin: 0 0.75rem;
        margin-bottom: 1.5px;
      }
    
      .navbar-vertical.navbar-expand-xxl .navbar-nav .nav-link .nav-link-text,
      .navbar-vertical.navbar-expand-xxl .navbar-nav .nav-link .sidenav-mini-icon,
      .navbar-vertical.navbar-expand-xxl .navbar-nav .nav-link .sidenav-normal,
      .navbar-vertical.navbar-expand-xxl .navbar-nav .nav-link i {
        pointer-events: none;
      }
    
      .navbar-vertical.navbar-expand-xxl .navbar-nav .nav-item {
        width: 100%;
      }
    
      .navbar-vertical.navbar-expand-xxl .navbar-nav>.nav-item {
        margin-top: 0.125rem;
      }
    
      .navbar-vertical.navbar-expand-xxl .navbar-nav>.nav-item .icon .ni {
        top: 0;
      }
    
      .navbar-vertical.navbar-expand-xxl .lavalamp-object {
        width: calc(100% - 1rem) !important;
        background: theme-color("primary");
        color: color-yiq(#e91e63);
        margin-right: 0.5rem;
        margin-left: 0.5rem;
        padding-left: 1rem;
        padding-right: 1rem;
        border-radius: 0.125rem;
      }
    
      .navbar-vertical.navbar-expand-xxl .navbar-nav .nav .nav-link {
        padding-top: 0.5rem;
        padding-bottom: 0.5rem;
        padding-left: 15px;
      }
    
      .navbar-vertical.navbar-expand-xxl .navbar-nav .nav .nav-link>span.sidenav-normal {
        transition: all 0.1s ease 0s;
      }
    
      .navbar-vertical.navbar-expand-xxl .navbar-nav .nav .nav-link.active {
        padding-top: 0.5rem;
        padding-bottom: 0.5rem;
      }
    }
    
    .sidenav[data-color=primary] .navbar-nav>.nav-item .nav-link.active+.collapse .nav-item.active .nav-link.active,
    .sidenav[data-color=primary] .navbar-nav>.nav-item .nav-link.active+.collapsing .nav-item.active .nav-link.active {
      background-image: linear-gradient(195deg, #e91e63 0%, #e91e63 100%);
    }
    
    .sidenav[data-color=primary] .navbar-nav>.nav-item .nav-link.active+.collapse .nav-item .nav-link.active,
    .sidenav[data-color=primary] .navbar-nav>.nav-item .nav-link.active+.collapsing .nav-item .nav-link.active {
      background-color: rgba(199, 199, 199, 0.2);
    }
    
    .sidenav[data-color=primary] .navbar-nav>.nav-item .nav-link.active+.collapse .nav-item .nav-link.active+.collapse .nav-item .nav-link.active,
    .sidenav[data-color=primary] .navbar-nav>.nav-item .nav-link.active+.collapsing .nav-item .nav-link.active+.collapse .nav-item .nav-link.active {
      background-image: linear-gradient(195deg, #e91e63 0%, #e91e63 100%);
    }
    
    .sidenav[data-color=secondary] .navbar-nav>.nav-item .nav-link.active+.collapse .nav-item.active .nav-link.active,
    .sidenav[data-color=secondary] .navbar-nav>.nav-item .nav-link.active+.collapsing .nav-item.active .nav-link.active {
      background-image: linear-gradient(195deg, #737373 0%, #737373 100%);
    }
    
    .sidenav[data-color=secondary] .navbar-nav>.nav-item .nav-link.active+.collapse .nav-item .nav-link.active,
    .sidenav[data-color=secondary] .navbar-nav>.nav-item .nav-link.active+.collapsing .nav-item .nav-link.active {
      background-color: rgba(199, 199, 199, 0.2);
    }
    
    .sidenav[data-color=secondary] .navbar-nav>.nav-item .nav-link.active+.collapse .nav-item .nav-link.active+.collapse .nav-item .nav-link.active,
    .sidenav[data-color=secondary] .navbar-nav>.nav-item .nav-link.active+.collapsing .nav-item .nav-link.active+.collapse .nav-item .nav-link.active {
      background-image: linear-gradient(195deg, #737373 0%, #737373 100%);
    }
    
    .sidenav[data-color=success] .navbar-nav>.nav-item .nav-link.active+.collapse .nav-item.active .nav-link.active,
    .sidenav[data-color=success] .navbar-nav>.nav-item .nav-link.active+.collapsing .nav-item.active .nav-link.active {
      background-image: linear-gradient(195deg, #4CAF50 0%, #4CAF50 100%);
    }
    
    .sidenav[data-color=success] .navbar-nav>.nav-item .nav-link.active+.collapse .nav-item .nav-link.active,
    .sidenav[data-color=success] .navbar-nav>.nav-item .nav-link.active+.collapsing .nav-item .nav-link.active {
      background-color: rgba(199, 199, 199, 0.2);
    }
    
    .sidenav[data-color=success] .navbar-nav>.nav-item .nav-link.active+.collapse .nav-item .nav-link.active+.collapse .nav-item .nav-link.active,
    .sidenav[data-color=success] .navbar-nav>.nav-item .nav-link.active+.collapsing .nav-item .nav-link.active+.collapse .nav-item .nav-link.active {
      background-image: linear-gradient(195deg, #4CAF50 0%, #4CAF50 100%);
    }
    
    .sidenav[data-color=info] .navbar-nav>.nav-item .nav-link.active+.collapse .nav-item.active .nav-link.active,
    .sidenav[data-color=info] .navbar-nav>.nav-item .nav-link.active+.collapsing .nav-item.active .nav-link.active {
      background-image: linear-gradient(195deg, #1A73E8 0%, #1A73E8 100%);
    }
    
    .sidenav[data-color=info] .navbar-nav>.nav-item .nav-link.active+.collapse .nav-item .nav-link.active,
    .sidenav[data-color=info] .navbar-nav>.nav-item .nav-link.active+.collapsing .nav-item .nav-link.active {
      background-color: rgba(199, 199, 199, 0.2);
    }
    
    .sidenav[data-color=info] .navbar-nav>.nav-item .nav-link.active+.collapse .nav-item .nav-link.active+.collapse .nav-item .nav-link.active,
    .sidenav[data-color=info] .navbar-nav>.nav-item .nav-link.active+.collapsing .nav-item .nav-link.active+.collapse .nav-item .nav-link.active {
      background-image: linear-gradient(195deg, #1A73E8 0%, #1A73E8 100%);
    }
    
    .sidenav[data-color=warning] .navbar-nav>.nav-item .nav-link.active+.collapse .nav-item.active .nav-link.active,
    .sidenav[data-color=warning] .navbar-nav>.nav-item .nav-link.active+.collapsing .nav-item.active .nav-link.active {
      background-image: linear-gradient(195deg, #fb8c00 0%, #fb8c00 100%);
    }
    
    .sidenav[data-color=warning] .navbar-nav>.nav-item .nav-link.active+.collapse .nav-item .nav-link.active,
    .sidenav[data-color=warning] .navbar-nav>.nav-item .nav-link.active+.collapsing .nav-item .nav-link.active {
      background-color: rgba(199, 199, 199, 0.2);
    }
    
    .sidenav[data-color=warning] .navbar-nav>.nav-item .nav-link.active+.collapse .nav-item .nav-link.active+.collapse .nav-item .nav-link.active,
    .sidenav[data-color=warning] .navbar-nav>.nav-item .nav-link.active+.collapsing .nav-item .nav-link.active+.collapse .nav-item .nav-link.active {
      background-image: linear-gradient(195deg, #fb8c00 0%, #fb8c00 100%);
    }
    
    .sidenav[data-color=danger] .navbar-nav>.nav-item .nav-link.active+.collapse .nav-item.active .nav-link.active,
    .sidenav[data-color=danger] .navbar-nav>.nav-item .nav-link.active+.collapsing .nav-item.active .nav-link.active {
      background-image: linear-gradient(195deg, #F44335 0%, #F44335 100%);
    }
    
    .sidenav[data-color=danger] .navbar-nav>.nav-item .nav-link.active+.collapse .nav-item .nav-link.active,
    .sidenav[data-color=danger] .navbar-nav>.nav-item .nav-link.active+.collapsing .nav-item .nav-link.active {
      background-color: rgba(199, 199, 199, 0.2);
    }
    
    .sidenav[data-color=danger] .navbar-nav>.nav-item .nav-link.active+.collapse .nav-item .nav-link.active+.collapse .nav-item .nav-link.active,
    .sidenav[data-color=danger] .navbar-nav>.nav-item .nav-link.active+.collapsing .nav-item .nav-link.active+.collapse .nav-item .nav-link.active {
      background-image: linear-gradient(195deg, #F44335 0%, #F44335 100%);
    }
    
    .sidenav[data-color=light] .navbar-nav>.nav-item .nav-link.active+.collapse .nav-item.active .nav-link.active,
    .sidenav[data-color=light] .navbar-nav>.nav-item .nav-link.active+.collapsing .nav-item.active .nav-link.active {
      background-image: linear-gradient(195deg, #e5e5e5 0%, #e5e5e5 100%);
    }
    
    .sidenav[data-color=light] .navbar-nav>.nav-item .nav-link.active+.collapse .nav-item .nav-link.active,
    .sidenav[data-color=light] .navbar-nav>.nav-item .nav-link.active+.collapsing .nav-item .nav-link.active {
      background-color: rgba(199, 199, 199, 0.2);
    }
    
    .sidenav[data-color=light] .navbar-nav>.nav-item .nav-link.active+.collapse .nav-item .nav-link.active+.collapse .nav-item .nav-link.active,
    .sidenav[data-color=light] .navbar-nav>.nav-item .nav-link.active+.collapsing .nav-item .nav-link.active+.collapse .nav-item .nav-link.active {
      background-image: linear-gradient(195deg, #e5e5e5 0%, #e5e5e5 100%);
    }
    
    .sidenav[data-color=dark] .navbar-nav>.nav-item .nav-link.active+.collapse .nav-item.active .nav-link.active,
    .sidenav[data-color=dark] .navbar-nav>.nav-item .nav-link.active+.collapsing .nav-item.active .nav-link.active {
      background-image: linear-gradient(195deg, #262626 0%, #262626 100%);
    }
    
    .sidenav[data-color=dark] .navbar-nav>.nav-item .nav-link.active+.collapse .nav-item .nav-link.active,
    .sidenav[data-color=dark] .navbar-nav>.nav-item .nav-link.active+.collapsing .nav-item .nav-link.active {
      background-color: rgba(199, 199, 199, 0.2);
    }
    
    .sidenav[data-color=dark] .navbar-nav>.nav-item .nav-link.active+.collapse .nav-item .nav-link.active+.collapse .nav-item .nav-link.active,
    .sidenav[data-color=dark] .navbar-nav>.nav-item .nav-link.active+.collapsing .nav-item .nav-link.active+.collapse .nav-item .nav-link.active {
      background-image: linear-gradient(195deg, #262626 0%, #262626 100%);
    }
    
    .sidenav[data-color=white] .navbar-nav>.nav-item .nav-link.active+.collapse .nav-item.active .nav-link.active,
    .sidenav[data-color=white] .navbar-nav>.nav-item .nav-link.active+.collapsing .nav-item.active .nav-link.active {
      background-image: linear-gradient(195deg, #fff 0%, #fff 100%);
    }
    
    .sidenav[data-color=white] .navbar-nav>.nav-item .nav-link.active+.collapse .nav-item .nav-link.active,
    .sidenav[data-color=white] .navbar-nav>.nav-item .nav-link.active+.collapsing .nav-item .nav-link.active {
      background-color: rgba(199, 199, 199, 0.2);
    }
    
    .sidenav[data-color=white] .navbar-nav>.nav-item .nav-link.active+.collapse .nav-item .nav-link.active+.collapse .nav-item .nav-link.active,
    .sidenav[data-color=white] .navbar-nav>.nav-item .nav-link.active+.collapsing .nav-item .nav-link.active+.collapse .nav-item .nav-link.active {
      background-image: linear-gradient(195deg, #fff 0%, #fff 100%);
    }
    
    .sidenav[data-color=dark-blue] .navbar-nav>.nav-item .nav-link.active+.collapse .nav-item.active .nav-link.active,
    .sidenav[data-color=dark-blue] .navbar-nav>.nav-item .nav-link.active+.collapsing .nav-item.active .nav-link.active {
      background-image: linear-gradient(195deg, #1A237E 0%, #1A237E 100%);
    }
    
    .sidenav[data-color=dark-blue] .navbar-nav>.nav-item .nav-link.active+.collapse .nav-item .nav-link.active,
    .sidenav[data-color=dark-blue] .navbar-nav>.nav-item .nav-link.active+.collapsing .nav-item .nav-link.active {
      background-color: rgba(199, 199, 199, 0.2);
    }
    
    .sidenav[data-color=dark-blue] .navbar-nav>.nav-item .nav-link.active+.collapse .nav-item .nav-link.active+.collapse .nav-item .nav-link.active,
    .sidenav[data-color=dark-blue] .navbar-nav>.nav-item .nav-link.active+.collapsing .nav-item .nav-link.active+.collapse .nav-item .nav-link.active {
      background-image: linear-gradient(195deg, #1A237E 0%, #1A237E 100%);
    }
    
    .main-content,
    .sidenav {
      transition: all 0.2s ease-in-out;
    }
    
    .sidenav {
      z-index: 9999;
    }
    
    .sidenav .navbar-brand,
    .sidenav .navbar-heading {
      display: block;
    }
    
    @media (min-width: 1200px) {
      .sidenav:hover {
        max-width: 14rem;
      }
    
      .sidenav .sidenav-toggler {
        padding: 1.5rem;
      }
    
      .sidenav.fixed-start+.main-content {
        margin-left: 15rem;
      }
    
      .sidenav.fixed-end+.main-content {
        margin-right: 15rem;
      }
    }
    
    .sidenav .navbar-heading .docs-mini {
      padding-left: 3px;
    }
    
    .sidenav .navbar-heading {
      transition: all 0.1s ease;
    }
    
    .sidenav-footer .card.card-background:after {
      opacity: 0.65;
    }
    
    .g-sidenav-show .sidenav .nav-item .collapse {
      height: auto;
      transition: all 0.2s ease-in-out;
    }
    
    @media (prefers-reduced-motion: reduce) {
      .g-sidenav-show .sidenav .nav-item .collapse {
        transition: none;
      }
    }
    
    .g-sidenav-show .sidenav .nav-link-text {
      transition: 0.3s ease;
      opacity: 1;
    }
    
    .g-sidenav-show.rtl .navbar-vertical .navbar-nav .nav-link[data-bs-toggle=collapse]:after {
      margin-left: 0;
    }
    
    @media (max-width: 1199.98px) {
      .g-sidenav-show.rtl .sidenav {
        transform: translateX(15.5rem);
      }
    
      .g-sidenav-show:not(.rtl) .sidenav {
        transform: translateX(-15.5rem);
      }
    
      .g-sidenav-show .sidenav.fixed-start+.main-content {
        margin-left: 0 !important;
      }
    
      .g-sidenav-show.g-sidenav-pinned .sidenav {
        transform: translateX(0);
      }
    }
    
    .navbar-vertical.bg-white {
      box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
      border: 1px solid #e5e5e5;
    }
    
    .navbar-vertical.bg-white .navbar-nav .nav-link.active {
      box-shadow: none;
    }
    
    .navbar-vertical.bg-transparent .navbar-nav .nav-link.active:after,
    .navbar-vertical.bg-white .navbar-nav .nav-link.active:after {
      color: rgba(206, 212, 218, 0.7) !important;
    }
    
    .navbar-vertical .navbar-nav .nav-link.active {
      font-weight: 500;
      box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
      border-radius: 0.375rem;
      margin-top: 1.5px;
      margin-bottom: 1.5px;
    }
    
    .navbar-vertical .navbar-nav>.nav-item .nav-link.active {
      color: #fff;
      border-right-width: 0;
      border-bottom-width: 0;
      background-color: rgba(199, 199, 199, 0.2);
    }
    
    .navbar-vertical .navbar-nav>.nav-item .nav-link.active+.collapse .nav-item.active .nav-link.active,
    .navbar-vertical .navbar-nav>.nav-item .nav-link.active+.collapsing .nav-item.active .nav-link.active {
      background-image: linear-gradient(195deg, #262626 0%, #262626 100%);
    }
    
    .navbar-vertical .navbar-nav>.nav-item .nav-link.active+.collapse .nav-item.active .nav-link.active span,
    .navbar-vertical .navbar-nav>.nav-item .nav-link.active+.collapsing .nav-item.active .nav-link.active span {
      color: #fff;
    }
    
    .navbar-vertical .navbar-nav>.nav-item .nav-link.active+.collapse .nav-item .nav-link.active,
    .navbar-vertical .navbar-nav>.nav-item .nav-link.active+.collapsing .nav-item .nav-link.active {
      background-color: rgba(199, 199, 199, 0.2);
    }
    
    .navbar-vertical .navbar-nav>.nav-item .nav-link.active+.collapse .nav-item .nav-link.active+.collapse .nav-item .nav-link.active,
    .navbar-vertical .navbar-nav>.nav-item .nav-link.active+.collapsing .nav-item .nav-link.active+.collapse .nav-item .nav-link.active {
      background-image: linear-gradient(195deg, #262626 0%, #262626 100%);
      color: #fff !important;
    }
    
    .navbar-main {
      transition: box-shadow 0.25s ease-in, background-color 0.25s ease-in;
    }
    
    .navbar-main.fixed-top {
      width: calc(100% - (14rem + 1.5rem * 3));
    }
    
    .navbar-main.fixed-top+[class*=container] {
      margin-top: 7.1875rem !important;
    }
    
    .navbar-vertical .navbar-nav .nav-link[data-bs-toggle=collapse]:after {
      display: inline-block;
      font-style: normal;
      font-variant: normal;
      text-rendering: auto;
      -webkit-font-smoothing: antialiased;
      font-family: "Font Awesome 5 Free";
      font-weight: 700;
      content: "\f107";
      margin-left: auto;
      color: rgba(206, 212, 218, 0.7);
      transition: all 0.2s ease-in-out;
    }
    
    @media (prefers-reduced-motion: reduce) {
      .navbar-vertical .navbar-nav .nav-link[data-bs-toggle=collapse]:after {
        transition: none;
      }
    }
    
    .navbar-vertical .navbar-nav .nav-link[data-bs-toggle=collapse][aria-expanded=true]:after {
      color: #CED4DA;
      transform: rotate(180deg);
    }
    
    .navbar-vertical .navbar-nav .nav-link[data-bs-toggle=collapse].active:after {
      color: #fff;
    }
    
    .navbar-vertical .navbar-nav .nav-item .collapse .nav,
    .navbar-vertical .navbar-nav .nav-item .collapsing .nav {
      transition: all 0.2s ease-in-out;
    }
    
    @media (prefers-reduced-motion: reduce) {
    
      .navbar-vertical .navbar-nav .nav-item .collapse .nav,
      .navbar-vertical .navbar-nav .nav-item .collapsing .nav {
        transition: none;
      }
    }
    
    .navbar-vertical .navbar-nav .nav-item .collapse .nav .nav-item .nav-link,
    .navbar-vertical .navbar-nav .nav-item .collapsing .nav .nav-item .nav-link {
      position: relative;
      background-color: transparent;
      box-shadow: none;
      color: rgba(206, 212, 218, 0.7);
    }
    
    .navbar-vertical .navbar-nav .nav-item .collapse .nav .nav-item .nav-link.active,
    .navbar-vertical .navbar-nav .nav-item .collapsing .nav .nav-item .nav-link.active {
      color: #CED4DA;
    }
    
    .navbar-vertical .navbar-nav .nav-item .collapse .nav .nav-item.active .nav-link,
    .navbar-vertical .navbar-nav .nav-item .collapsing .nav .nav-item.active .nav-link {
      color: #CED4DA;
    }
    
    .navbar-vertical.blur .navbar-nav>.nav-item .nav-link {
      background-color: transparent;
      box-shadow: none;
    }
    
    .navbar-vertical .navbar-brand .navbar-brand-img,
    .navbar-vertical .navbar-brand span {
      transition: all 0.2s ease-in-out;
    }
    
    @media (prefers-reduced-motion: reduce) {
    
      .navbar-vertical .navbar-brand .navbar-brand-img,
      .navbar-vertical .navbar-brand span {
        transition: none;
      }
    }
    
    .navbar-vertical .nav-item .nav-link span.sidenav-mini-icon {
      transition: all 0.2s ease-in-out;
      text-align: center;
      min-width: 1rem;
    }
    
    @media (prefers-reduced-motion: reduce) {
      .navbar-vertical .nav-item .nav-link span.sidenav-mini-icon {
        transition: none;
      }
    }
    
    .navbar-vertical .docs-info {
      transition: all 0.2s ease-in-out;
    }
    
    @media (prefers-reduced-motion: reduce) {
      .navbar-vertical .docs-info {
        transition: none;
      }
    }
    
    .navbar-vertical .nav-item .nav-link {
      margin-top: 3px;
      margin-bottom: 3px;
      border-radius: 0.375rem;
      margin-bottom: 1.5px;
      margin-top: 1.5px;
    }
    
    .navbar-vertical .nav-item .nav-link+.collapse .nav .nav-item>.nav-link,
    .navbar-vertical .nav-item .nav-link+.collapsing .nav .nav-item>.nav-link {
      margin-top: 1.5px;
      margin-bottom: 1.5px;
    }
    
    .navbar-vertical .nav-item .nav-link+.collapse .nav .nav-item>.nav-link+.collapse .nav .nav-item .nav-link,
    .navbar-vertical .nav-item .nav-link+.collapse .nav .nav-item>.nav-link+.collapsing .nav .nav-item .nav-link,
    .navbar-vertical .nav-item .nav-link+.collapsing .nav .nav-item>.nav-link+.collapse .nav .nav-item .nav-link,
    .navbar-vertical .nav-item .nav-link+.collapsing .nav .nav-item>.nav-link+.collapsing .nav .nav-item .nav-link {
      margin-top: 1.5px;
      margin-bottom: 1.5px;
    }
    
    .navbar-vertical .nav-item:hover .nav-link {
      background-color: rgba(199, 199, 199, 0.2);
      border-radius: 0.375rem;
    }
    
    .navbar-vertical .nav-item:hover .nav-link+.collapse .nav .nav-item:hover>.nav-link {
      background-color: rgba(199, 199, 199, 0.2);
      border-radius: 0.375rem;
    }
    
    .navbar-vertical .nav-item:hover .nav-link+.collapse .nav .nav-item+.collapse .nav .nav-item:hover .nav-link {
      background-color: rgba(199, 199, 199, 0.2);
      border-radius: 0.375rem;
    }
    
    @media (min-width: 1200px) {
      .g-sidenav-hidden.rtl .main-content {
        margin-right: 4.75rem !important;
      }
    
      .g-sidenav-hidden.rtl .navbar-vertical:hover {
        max-width: 14rem !important;
      }
    
      .g-sidenav-hidden.rtl .navbar-vertical .nav-item .nav-link .material-symbols-rounded {
        margin-right: 2px;
      }
    
      .g-sidenav-hidden.rtl .sidenav:hover+.main-content {
        margin-right: 15.5rem !important;
      }
    
      .g-sidenav-hidden .navbar-vertical {
        max-width: 4.75rem !important;
      }
    
      .g-sidenav-hidden .navbar-vertical.fixed-start+.main-content {
        margin-left: 6.25rem;
      }
    
      .g-sidenav-hidden .navbar-vertical .navbar-brand img {
        width: auto !important;
      }
    
      .g-sidenav-hidden .navbar-vertical .navbar-brand span {
        opacity: 0;
      }
    
      .g-sidenav-hidden .navbar-vertical .nav-item .nav-link .icon {
        padding: 10px;
      }
    
      .g-sidenav-hidden .navbar-vertical .nav-item .nav-link .nav-link-text,
      .g-sidenav-hidden .navbar-vertical .nav-item .nav-link .sidenav-normal {
        opacity: 0;
        width: 0;
      }
    
      .g-sidenav-hidden .navbar-vertical .nav-item .nav-link[data-bs-toggle=collapse]:after {
        content: "";
        opacity: 0;
      }
    
      .g-sidenav-hidden .navbar-vertical .nav-item .collapse .nav {
        margin-left: 0 !important;
        padding-left: 0 !important;
      }
    
      .g-sidenav-hidden .navbar-vertical .nav-item .collapse .nav .nav-item .nav-link {
        margin-left: 0.75rem;
      }
    
      .g-sidenav-hidden .navbar-vertical .nav-item .collapse .nav .nav-item .nav-link[data-bs-toggle=collapse]:after {
        content: "\f107";
      }
    
      .g-sidenav-hidden .navbar-vertical .card.card-background .icon-shape {
        margin-bottom: 0 !important;
      }
    
      .g-sidenav-hidden .navbar-vertical .card.card-background .docs-info {
        opacity: 0;
        width: 0;
        height: 0;
      }
    
      .g-sidenav-hidden .navbar-vertical:hover {
        max-width: 14rem !important;
      }
    
      .g-sidenav-hidden .navbar-vertical:hover.fixed-start+.main-content {
        margin-left: 15.5rem;
      }
    
      .g-sidenav-hidden .navbar-vertical:hover .navbar-brand span {
        opacity: 1;
      }
    
      .g-sidenav-hidden .navbar-vertical:hover .nav-item .nav-link .nav-link-text,
      .g-sidenav-hidden .navbar-vertical:hover .nav-item .nav-link .sidenav-normal {
        opacity: 1;
        width: auto;
      }
    
      .g-sidenav-hidden .navbar-vertical:hover .nav-item .nav-link[data-bs-toggle=collapse]:after {
        content: "\f107";
        opacity: 1;
      }
    
      .g-sidenav-hidden .navbar-vertical:hover .nav-item .collapse .nav .nav-item .collapse .nav,
      .g-sidenav-hidden .navbar-vertical:hover .nav-item .collapse .nav .nav-item .collapsing .nav {
        margin-left: 0 !important;
        padding-left: 0 !important;
      }
    
      .g-sidenav-hidden .navbar-vertical:hover .card.card-background .icon-shape {
        margin-bottom: 1rem !important;
      }
    
      .g-sidenav-hidden .navbar-vertical:hover .card.card-background .docs-info {
        opacity: 1;
        width: auto;
        height: auto;
      }
    }
    
    .nav.nav-pills {
      background: #f5f5f5;
      border-radius: 0.75rem;
      position: relative;
    }
    
    .nav.nav-pills.nav-pills-vertical {
      border-radius: 1.1875rem;
    }
    
    .nav.nav-pills.nav-pills-vertical .nav-link.active {
      border-radius: 0.875rem;
    }
    
    .nav.nav-pills .nav-link {
      z-index: 3;
      color: #262626;
      border-radius: 0.5rem;
      background-color: inherit;
    }
    
    .nav.nav-pills .nav-link.active {
      animation: 0.2s ease;
    }
    
    .nav.nav-pills .nav-link:hover:not(.active) {
      color: #262626;
    }
    
    .nav.nav-pills.nav-pills-primary {
      background: #fff;
      color: #fff;
    }
    
    .nav.nav-pills.nav-pills-primary .nav-link.active {
      color: #fff;
    }
    
    .nav.nav-pills.nav-pills-primary .moving-tab .nav-link.active {
      background: #EC407A;
      color: #EC407A;
    }
    
    .nav.nav-pills.nav-pills-info {
      background: #fff;
      color: #fff;
    }
    
    .nav.nav-pills.nav-pills-info .nav-link.active {
      color: #fff;
    }
    
    .nav.nav-pills.nav-pills-info .moving-tab .nav-link.active {
      background: #49a3f1;
      color: #49a3f1;
    }
    
    .nav.nav-pills.nav-pills-success {
      background: #fff;
      color: #fff;
    }
    
    .nav.nav-pills.nav-pills-success .nav-link.active {
      color: #fff;
    }
    
    .nav.nav-pills.nav-pills-success .moving-tab .nav-link.active {
      background: #66BB6A;
      color: #66BB6A;
    }
    
    .nav.nav-pills.nav-pills-warning {
      background: #fff;
      color: #fff;
    }
    
    .nav.nav-pills.nav-pills-warning .nav-link.active {
      color: #fff;
    }
    
    .nav.nav-pills.nav-pills-warning .moving-tab .nav-link.active {
      background: #FFA726;
      color: #FFA726;
    }
    
    .nav.nav-pills.nav-pills-danger {
      background: #fff;
      color: #fff;
    }
    
    .nav.nav-pills.nav-pills-danger .nav-link.active {
      color: #fff;
    }
    
    .nav.nav-pills.nav-pills-danger .moving-tab .nav-link.active {
      background: #EF5350;
      color: #EF5350;
    }
    
    .nav.nav-pills .nav-item {
      z-index: 3;
    }
    
    .moving-tab {
      z-index: 1 !important;
    }
    
    .moving-tab .nav-link {
      color: #fff;
      transition: 0.2s ease;
      border-radius: 0.5rem;
    }
    
    .moving-tab .nav-link.active {
      color: #fff;
      font-weight: 600;
      box-shadow: 0px 1px 5px 1px #ddd;
      animation: 0.2s ease;
      background: #fff;
    }
    
    .moving-tab .nav-link:hover:not(.active) {
      color: #262626;
    }
    
    .page-item.active .page-link {
      box-shadow: 0 3px 5px -1px rgba(0, 0, 0, 0.09), 0 2px 3px -1px rgba(0, 0, 0, 0.07);
    }
    
    .page-item .page-link,
    .page-item span {
      display: flex;
      align-items: center;
      justify-content: center;
      color: #737373;
      padding: 0;
      margin: 0 3px;
      border-radius: 50% !important;
      width: 36px;
      height: 36px;
      font-size: 0.875rem;
    }
    
    .pagination-lg .page-item .page-link,
    .pagination-lg .page-item span {
      width: 46px;
      height: 46px;
      line-height: 46px;
    }
    
    .pagination-sm .page-item .page-link,
    .pagination-sm .page-item span {
      width: 30px;
      height: 30px;
      line-height: 30px;
    }
    
    .pagination.pagination-primary .page-item.active>.page-link,
    .pagination.pagination-primary .page-item.active>.page-link:focus,
    .pagination.pagination-primary .page-item.active>.page-link:hover {
      background-image: linear-gradient(195deg, #EC407A 0%, #D81B60 100%);
      border: none;
    }
    
    .pagination.pagination-secondary .page-item.active>.page-link,
    .pagination.pagination-secondary .page-item.active>.page-link:focus,
    .pagination.pagination-secondary .page-item.active>.page-link:hover {
      background-image: linear-gradient(195deg, #747b8a 0%, #495361 100%);
      border: none;
    }
    
    .pagination.pagination-success .page-item.active>.page-link,
    .pagination.pagination-success .page-item.active>.page-link:focus,
    .pagination.pagination-success .page-item.active>.page-link:hover {
      background-image: linear-gradient(195deg, #66BB6A 0%, #43A047 100%);
      border: none;
    }
    
    .pagination.pagination-info .page-item.active>.page-link,
    .pagination.pagination-info .page-item.active>.page-link:focus,
    .pagination.pagination-info .page-item.active>.page-link:hover {
      background-image: linear-gradient(195deg, #49a3f1 0%, #1A73E8 100%);
      border: none;
    }
    
    .pagination.pagination-warning .page-item.active>.page-link,
    .pagination.pagination-warning .page-item.active>.page-link:focus,
    .pagination.pagination-warning .page-item.active>.page-link:hover {
      background-image: linear-gradient(195deg, #FFA726 0%, #FB8C00 100%);
      border: none;
    }
    
    .pagination.pagination-danger .page-item.active>.page-link,
    .pagination.pagination-danger .page-item.active>.page-link:focus,
    .pagination.pagination-danger .page-item.active>.page-link:hover {
      background-image: linear-gradient(195deg, #EF5350 0%, #E53935 100%);
      border: none;
    }
    
    .pagination.pagination-light .page-item.active>.page-link,
    .pagination.pagination-light .page-item.active>.page-link:focus,
    .pagination.pagination-light .page-item.active>.page-link:hover {
      background-image: linear-gradient(195deg, #EBEFF4 0%, #CED4DA 100%);
      border: none;
    }
    
    .pagination.pagination-dark .page-item.active>.page-link,
    .pagination.pagination-dark .page-item.active>.page-link:focus,
    .pagination.pagination-dark .page-item.active>.page-link:hover {
      background-image: linear-gradient(195deg, #42424a 0%, #191919 100%);
      border: none;
    }
    
    .popover {
      box-shadow: 0 0.3125rem 0.625rem 0 rgba(0, 0, 0, 0.12);
    }
    
    .popover .popover-header {
      font-weight: 600;
    }
    
    .progress-bar {
      height: 6px;
      border-radius: 0.125rem;
    }
    
    .progress {
      overflow: visible;
    }
    
    .progress.progress-sm {
      height: 4px;
    }
    
    .progress.progress-lg {
      height: 20px;
    }
    
    .rtl .breadcrumb .breadcrumb-item+.breadcrumb-item::before {
      float: right;
      padding-left: 0.5rem;
      padding-right: 0;
    }
    
    .rtl .sidenav .navbar-nav {
      width: 100%;
      padding-right: 0;
    }
    
    .rtl .fixed-plugin .fixed-plugin-button {
      left: 30px;
      right: auto;
    }
    
    .rtl .fixed-plugin .card {
      left: -360px !important;
      right: auto;
    }
    
    .rtl .fixed-plugin.show .card {
      right: auto;
      left: 0 !important;
    }
    
    .rtl .timeline .timeline-content {
      margin-right: 45px;
      margin-left: 0;
    }
    
    .rtl .timeline .timeline-step {
      transform: translateX(50%);
    }
    
    .rtl .timeline.timeline-one-side:before {
      right: 1rem;
    }
    
    .rtl .timeline.timeline-one-side .timeline-step {
      right: 1rem;
    }
    
    .rtl .form-check.form-switch .form-check-input:after {
      transform: translateX(-1px);
    }
    
    .rtl .form-check.form-switch .form-check-input:checked:after {
      transform: translateX(21px);
    }
    
    .rtl .avatar-group .avatar+.avatar {
      margin-left: 0;
      margin-right: -1rem;
    }
    
    .rtl .dropdown .dropdown-menu {
      left: 0;
    }
    
    .rtl .input-group.input-group-outline .form-label:before {
      margin-left: 4px;
      margin-right: 0;
      border-radius: 0 4px;
    }
    
    .rtl .input-group.input-group-outline .form-label:after {
      margin-left: 0;
      margin-right: 4px;
      border-radius: 5px 0;
    }
    
    .rtl .input-group.input-group-outline.is-valid .form-control,
    .rtl .input-group.input-group-outline.is-invalid .form-control {
      background-position: left 0.75rem center !important;
    }
    
    .rtl .input-group .input-group-text {
      border-left: 0;
      border-top-left-radius: 0;
      border-bottom-left-radius: 0;
    }
    
    .rtl .input-group> :not(:first-child):not(.dropdown-menu):not(.valid-tooltip):not(.valid-feedback):not(.invalid-tooltip):not(.invalid-feedback) {
      margin-right: -1px;
      border-top-left-radius: 0.375rem;
      border-bottom-left-radius: 0.375rem;
    }
    
    .rtl .input-group:not(.has-validation)>.dropdown-toggle:nth-last-child(n+3),
    .rtl .input-group:not(.has-validation)> :not(:last-child):not(.dropdown-toggle):not(.dropdown-menu) {
      border-top-right-radius: 0.375rem;
      border-bottom-right-radius: 0.375rem;
    }
    
    .ripple {
      display: block;
      position: absolute;
      background: rgba(255, 255, 255, 0.3);
      border-radius: 100%;
      transform: scale(0);
      animation: ripple 0.65s linear;
    }
    
    @keyframes ripple {
      100% {
        opacity: 0;
        transform: scale(2.5);
      }
    }
    
    .btn.btn-facebook {
      background-color: #3b5998;
      color: #fff;
    }
    
    .btn.btn-facebook:focus,
    .btn.btn-facebook:hover {
      background-color: rgb(51.8696682464, 78.2440758294, 133.6303317536);
      color: #fff;
    }
    
    .btn.btn-facebook:active,
    .btn.btn-facebook:focus,
    .btn.btn-facebook:active:focus {
      box-shadow: none;
    }
    
    .btn.btn-facebook.btn-simple {
      color: rgb(51.8696682464, 78.2440758294, 133.6303317536);
      background-color: transparent;
      background-image: none !important;
      box-shadow: none;
      border: none;
    }
    
    .btn.btn-facebook.btn-simple:hover,
    .btn.btn-facebook.btn-simple:focus,
    .btn.btn-facebook.btn-simple:hover:focus,
    .btn.btn-facebook.btn-simple:active,
    .btn.btn-facebook.btn-simple:hover:focus:active {
      color: rgb(51.8696682464, 78.2440758294, 133.6303317536);
      background: transparent !important;
      box-shadow: none !important;
    }
    
    .btn.btn-facebook.btn-neutral {
      color: #3b5998;
      background-color: #fff;
    }
    
    .btn.btn-facebook.btn-neutral:hover,
    .btn.btn-facebook.btn-neutral:focus,
    .btn.btn-facebook.btn-neutral:active {
      color: rgb(51.8696682464, 78.2440758294, 133.6303317536);
    }
    
    .btn.btn-twitter {
      background-color: #55acee;
      color: #fff;
    }
    
    .btn.btn-twitter:focus,
    .btn.btn-twitter:hover {
      background-color: rgb(61.8181818182, 160.6818181818, 235.6818181818);
      color: #fff;
    }
    
    .btn.btn-twitter:active,
    .btn.btn-twitter:focus,
    .btn.btn-twitter:active:focus {
      box-shadow: none;
    }
    
    .btn.btn-twitter.btn-simple {
      color: rgb(61.8181818182, 160.6818181818, 235.6818181818);
      background-color: transparent;
      background-image: none !important;
      box-shadow: none;
      border: none;
    }
    
    .btn.btn-twitter.btn-simple:hover,
    .btn.btn-twitter.btn-simple:focus,
    .btn.btn-twitter.btn-simple:hover:focus,
    .btn.btn-twitter.btn-simple:active,
    .btn.btn-twitter.btn-simple:hover:focus:active {
      color: rgb(61.8181818182, 160.6818181818, 235.6818181818);
      background: transparent !important;
      box-shadow: none !important;
    }
    
    .btn.btn-twitter.btn-neutral {
      color: #55acee;
      background-color: #fff;
    }
    
    .btn.btn-twitter.btn-neutral:hover,
    .btn.btn-twitter.btn-neutral:focus,
    .btn.btn-twitter.btn-neutral:active {
      color: rgb(61.8181818182, 160.6818181818, 235.6818181818);
    }
    
    .btn.btn-pinterest {
      background-color: #cc2127;
      color: #fff;
    }
    
    .btn.btn-pinterest:focus,
    .btn.btn-pinterest:hover {
      background-color: rgb(177.6607594937, 28.7392405063, 33.964556962);
      color: #fff;
    }
    
    .btn.btn-pinterest:active,
    .btn.btn-pinterest:focus,
    .btn.btn-pinterest:active:focus {
      box-shadow: none;
    }
    
    .btn.btn-pinterest.btn-simple {
      color: rgb(177.6607594937, 28.7392405063, 33.964556962);
      background-color: transparent;
      background-image: none !important;
      box-shadow: none;
      border: none;
    }
    
    .btn.btn-pinterest.btn-simple:hover,
    .btn.btn-pinterest.btn-simple:focus,
    .btn.btn-pinterest.btn-simple:hover:focus,
    .btn.btn-pinterest.btn-simple:active,
    .btn.btn-pinterest.btn-simple:hover:focus:active {
      color: rgb(177.6607594937, 28.7392405063, 33.964556962);
      background: transparent !important;
      box-shadow: none !important;
    }
    
    .btn.btn-pinterest.btn-neutral {
      color: #cc2127;
      background-color: #fff;
    }
    
    .btn.btn-pinterest.btn-neutral:hover,
    .btn.btn-pinterest.btn-neutral:focus,
    .btn.btn-pinterest.btn-neutral:active {
      color: rgb(177.6607594937, 28.7392405063, 33.964556962);
    }
    
    .btn.btn-linkedin {
      background-color: #0077B5;
      color: #fff;
    }
    
    .btn.btn-linkedin:focus,
    .btn.btn-linkedin:hover {
      background-color: rgb(0, 102.2348066298, 155.5);
      color: #fff;
    }
    
    .btn.btn-linkedin:active,
    .btn.btn-linkedin:focus,
    .btn.btn-linkedin:active:focus {
      box-shadow: none;
    }
    
    .btn.btn-linkedin.btn-simple {
      color: rgb(0, 102.2348066298, 155.5);
      background-color: transparent;
      background-image: none !important;
      box-shadow: none;
      border: none;
    }
    
    .btn.btn-linkedin.btn-simple:hover,
    .btn.btn-linkedin.btn-simple:focus,
    .btn.btn-linkedin.btn-simple:hover:focus,
    .btn.btn-linkedin.btn-simple:active,
    .btn.btn-linkedin.btn-simple:hover:focus:active {
      color: rgb(0, 102.2348066298, 155.5);
      background: transparent !important;
      box-shadow: none !important;
    }
    
    .btn.btn-linkedin.btn-neutral {
      color: #0077B5;
      background-color: #fff;
    }
    
    .btn.btn-linkedin.btn-neutral:hover,
    .btn.btn-linkedin.btn-neutral:focus,
    .btn.btn-linkedin.btn-neutral:active {
      color: rgb(0, 102.2348066298, 155.5);
    }
    
    .btn.btn-dribbble {
      background-color: #ea4c89;
      color: #fff;
    }
    
    .btn.btn-dribbble:focus,
    .btn.btn-dribbble:hover {
      background-color: rgb(230.787, 48.613, 118.946);
      color: #fff;
    }
    
    .btn.btn-dribbble:active,
    .btn.btn-dribbble:focus,
    .btn.btn-dribbble:active:focus {
      box-shadow: none;
    }
    
    .btn.btn-dribbble.btn-simple {
      color: rgb(230.787, 48.613, 118.946);
      background-color: transparent;
      background-image: none !important;
      box-shadow: none;
      border: none;
    }
    
    .btn.btn-dribbble.btn-simple:hover,
    .btn.btn-dribbble.btn-simple:focus,
    .btn.btn-dribbble.btn-simple:hover:focus,
    .btn.btn-dribbble.btn-simple:active,
    .btn.btn-dribbble.btn-simple:hover:focus:active {
      color: rgb(230.787, 48.613, 118.946);
      background: transparent !important;
      box-shadow: none !important;
    }
    
    .btn.btn-dribbble.btn-neutral {
      color: #ea4c89;
      background-color: #fff;
    }
    
    .btn.btn-dribbble.btn-neutral:hover,
    .btn.btn-dribbble.btn-neutral:focus,
    .btn.btn-dribbble.btn-neutral:active {
      color: rgb(230.787, 48.613, 118.946);
    }
    
    .btn.btn-github {
      background-color: #24292E;
      color: #fff;
    }
    
    .btn.btn-github:focus,
    .btn.btn-github:hover {
      background-color: rgb(22.5658536585, 25.7, 28.8341463415);
      color: #fff;
    }
    
    .btn.btn-github:active,
    .btn.btn-github:focus,
    .btn.btn-github:active:focus {
      box-shadow: none;
    }
    
    .btn.btn-github.btn-simple {
      color: rgb(22.5658536585, 25.7, 28.8341463415);
      background-color: transparent;
      background-image: none !important;
      box-shadow: none;
      border: none;
    }
    
    .btn.btn-github.btn-simple:hover,
    .btn.btn-github.btn-simple:focus,
    .btn.btn-github.btn-simple:hover:focus,
    .btn.btn-github.btn-simple:active,
    .btn.btn-github.btn-simple:hover:focus:active {
      color: rgb(22.5658536585, 25.7, 28.8341463415);
      background: transparent !important;
      box-shadow: none !important;
    }
    
    .btn.btn-github.btn-neutral {
      color: #24292E;
      background-color: #fff;
    }
    
    .btn.btn-github.btn-neutral:hover,
    .btn.btn-github.btn-neutral:focus,
    .btn.btn-github.btn-neutral:active {
      color: rgb(22.5658536585, 25.7, 28.8341463415);
    }
    
    .btn.btn-youtube {
      background-color: #e52d27;
      color: #fff;
    }
    
    .btn.btn-youtube:focus,
    .btn.btn-youtube:hover {
      background-color: rgb(211.894214876, 31.3917355372, 25.505785124);
      color: #fff;
    }
    
    .btn.btn-youtube:active,
    .btn.btn-youtube:focus,
    .btn.btn-youtube:active:focus {
      box-shadow: none;
    }
    
    .btn.btn-youtube.btn-simple {
      color: rgb(211.894214876, 31.3917355372, 25.505785124);
      background-color: transparent;
      background-image: none !important;
      box-shadow: none;
      border: none;
    }
    
    .btn.btn-youtube.btn-simple:hover,
    .btn.btn-youtube.btn-simple:focus,
    .btn.btn-youtube.btn-simple:hover:focus,
    .btn.btn-youtube.btn-simple:active,
    .btn.btn-youtube.btn-simple:hover:focus:active {
      color: rgb(211.894214876, 31.3917355372, 25.505785124);
      background: transparent !important;
      box-shadow: none !important;
    }
    
    .btn.btn-youtube.btn-neutral {
      color: #e52d27;
      background-color: #fff;
    }
    
    .btn.btn-youtube.btn-neutral:hover,
    .btn.btn-youtube.btn-neutral:focus,
    .btn.btn-youtube.btn-neutral:active {
      color: rgb(211.894214876, 31.3917355372, 25.505785124);
    }
    
    .btn.btn-instagram {
      background-color: #125688;
      color: #fff;
    }
    
    .btn.btn-instagram:focus,
    .btn.btn-instagram:hover {
      background-color: rgb(14.4233766234, 68.9116883117, 108.9766233766);
      color: #fff;
    }
    
    .btn.btn-instagram:active,
    .btn.btn-instagram:focus,
    .btn.btn-instagram:active:focus {
      box-shadow: none;
    }
    
    .btn.btn-instagram.btn-simple {
      color: rgb(14.4233766234, 68.9116883117, 108.9766233766);
      background-color: transparent;
      background-image: none !important;
      box-shadow: none;
      border: none;
    }
    
    .btn.btn-instagram.btn-simple:hover,
    .btn.btn-instagram.btn-simple:focus,
    .btn.btn-instagram.btn-simple:hover:focus,
    .btn.btn-instagram.btn-simple:active,
    .btn.btn-instagram.btn-simple:hover:focus:active {
      color: rgb(14.4233766234, 68.9116883117, 108.9766233766);
      background: transparent !important;
      box-shadow: none !important;
    }
    
    .btn.btn-instagram.btn-neutral {
      color: #125688;
      background-color: #fff;
    }
    
    .btn.btn-instagram.btn-neutral:hover,
    .btn.btn-instagram.btn-neutral:focus,
    .btn.btn-instagram.btn-neutral:active {
      color: rgb(14.4233766234, 68.9116883117, 108.9766233766);
    }
    
    .btn.btn-reddit {
      background-color: #ff4500;
      color: #fff;
    }
    
    .btn.btn-reddit:focus,
    .btn.btn-reddit:hover {
      background-color: rgb(224.4, 60.72, 0);
      color: #fff;
    }
    
    .btn.btn-reddit:active,
    .btn.btn-reddit:focus,
    .btn.btn-reddit:active:focus {
      box-shadow: none;
    }
    
    .btn.btn-reddit.btn-simple {
      color: rgb(224.4, 60.72, 0);
      background-color: transparent;
      background-image: none !important;
      box-shadow: none;
      border: none;
    }
    
    .btn.btn-reddit.btn-simple:hover,
    .btn.btn-reddit.btn-simple:focus,
    .btn.btn-reddit.btn-simple:hover:focus,
    .btn.btn-reddit.btn-simple:active,
    .btn.btn-reddit.btn-simple:hover:focus:active {
      color: rgb(224.4, 60.72, 0);
      background: transparent !important;
      box-shadow: none !important;
    }
    
    .btn.btn-reddit.btn-neutral {
      color: #ff4500;
      background-color: #fff;
    }
    
    .btn.btn-reddit.btn-neutral:hover,
    .btn.btn-reddit.btn-neutral:focus,
    .btn.btn-reddit.btn-neutral:active {
      color: rgb(224.4, 60.72, 0);
    }
    
    .btn.btn-tumblr {
      background-color: #35465c;
      color: #fff;
    }
    
    .btn.btn-tumblr:focus,
    .btn.btn-tumblr:hover {
      background-color: rgb(41.8151724138, 55.2275862069, 72.5848275862);
      color: #fff;
    }
    
    .btn.btn-tumblr:active,
    .btn.btn-tumblr:focus,
    .btn.btn-tumblr:active:focus {
      box-shadow: none;
    }
    
    .btn.btn-tumblr.btn-simple {
      color: rgb(41.8151724138, 55.2275862069, 72.5848275862);
      background-color: transparent;
      background-image: none !important;
      box-shadow: none;
      border: none;
    }
    
    .btn.btn-tumblr.btn-simple:hover,
    .btn.btn-tumblr.btn-simple:focus,
    .btn.btn-tumblr.btn-simple:hover:focus,
    .btn.btn-tumblr.btn-simple:active,
    .btn.btn-tumblr.btn-simple:hover:focus:active {
      color: rgb(41.8151724138, 55.2275862069, 72.5848275862);
      background: transparent !important;
      box-shadow: none !important;
    }
    
    .btn.btn-tumblr.btn-neutral {
      color: #35465c;
      background-color: #fff;
    }
    
    .btn.btn-tumblr.btn-neutral:hover,
    .btn.btn-tumblr.btn-neutral:focus,
    .btn.btn-tumblr.btn-neutral:active {
      color: rgb(41.8151724138, 55.2275862069, 72.5848275862);
    }
    
    .btn.btn-behance {
      background-color: #1769ff;
      color: #fff;
    }
    
    .btn.btn-behance:focus,
    .btn.btn-behance:hover {
      background-color: rgb(0, 87.4431034483, 247.4);
      color: #fff;
    }
    
    .btn.btn-behance:active,
    .btn.btn-behance:focus,
    .btn.btn-behance:active:focus {
      box-shadow: none;
    }
    
    .btn.btn-behance.btn-simple {
      color: rgb(0, 87.4431034483, 247.4);
      background-color: transparent;
      background-image: none !important;
      box-shadow: none;
      border: none;
    }
    
    .btn.btn-behance.btn-simple:hover,
    .btn.btn-behance.btn-simple:focus,
    .btn.btn-behance.btn-simple:hover:focus,
    .btn.btn-behance.btn-simple:active,
    .btn.btn-behance.btn-simple:hover:focus:active {
      color: rgb(0, 87.4431034483, 247.4);
      background: transparent !important;
      box-shadow: none !important;
    }
    
    .btn.btn-behance.btn-neutral {
      color: #1769ff;
      background-color: #fff;
    }
    
    .btn.btn-behance.btn-neutral:hover,
    .btn.btn-behance.btn-neutral:focus,
    .btn.btn-behance.btn-neutral:active {
      color: rgb(0, 87.4431034483, 247.4);
    }
    
    .btn.btn-vimeo {
      background-color: #1AB7EA;
      color: #fff;
    }
    
    .btn.btn-vimeo:focus,
    .btn.btn-vimeo:hover {
      background-color: rgb(19.2696, 163.3328, 210.1304);
      color: #fff;
    }
    
    .btn.btn-vimeo:active,
    .btn.btn-vimeo:focus,
    .btn.btn-vimeo:active:focus {
      box-shadow: none;
    }
    
    .btn.btn-vimeo.btn-simple {
      color: rgb(19.2696, 163.3328, 210.1304);
      background-color: transparent;
      background-image: none !important;
      box-shadow: none;
      border: none;
    }
    
    .btn.btn-vimeo.btn-simple:hover,
    .btn.btn-vimeo.btn-simple:focus,
    .btn.btn-vimeo.btn-simple:hover:focus,
    .btn.btn-vimeo.btn-simple:active,
    .btn.btn-vimeo.btn-simple:hover:focus:active {
      color: rgb(19.2696, 163.3328, 210.1304);
      background: transparent !important;
      box-shadow: none !important;
    }
    
    .btn.btn-vimeo.btn-neutral {
      color: #1AB7EA;
      background-color: #fff;
    }
    
    .btn.btn-vimeo.btn-neutral:hover,
    .btn.btn-vimeo.btn-neutral:focus,
    .btn.btn-vimeo.btn-neutral:active {
      color: rgb(19.2696, 163.3328, 210.1304);
    }
    
    .btn.btn-slack {
      background-color: #3aaf85;
      color: #fff;
    }
    
    .btn.btn-slack:focus,
    .btn.btn-slack:hover {
      background-color: rgb(50.382832618, 152.017167382, 115.5330472103);
      color: #fff;
    }
    
    .btn.btn-slack:active,
    .btn.btn-slack:focus,
    .btn.btn-slack:active:focus {
      box-shadow: none;
    }
    
    .btn.btn-slack.btn-simple {
      color: rgb(50.382832618, 152.017167382, 115.5330472103);
      background-color: transparent;
      background-image: none !important;
      box-shadow: none;
      border: none;
    }
    
    .btn.btn-slack.btn-simple:hover,
    .btn.btn-slack.btn-simple:focus,
    .btn.btn-slack.btn-simple:hover:focus,
    .btn.btn-slack.btn-simple:active,
    .btn.btn-slack.btn-simple:hover:focus:active {
      color: rgb(50.382832618, 152.017167382, 115.5330472103);
      background: transparent !important;
      box-shadow: none !important;
    }
    
    .btn.btn-slack.btn-neutral {
      color: #3aaf85;
      background-color: #fff;
    }
    
    .btn.btn-slack.btn-neutral:hover,
    .btn.btn-slack.btn-neutral:focus,
    .btn.btn-slack.btn-neutral:active {
      color: rgb(50.382832618, 152.017167382, 115.5330472103);
    }
    
    .table thead th {
      padding: 0.75rem 1.5rem;
      text-transform: capitalize;
      letter-spacing: 0px;
      border-bottom: 1px solid #e5e5e5;
    }
    
    .table th {
      font-weight: 600;
    }
    
    .table td .progress {
      height: 3px;
      width: 120px;
      margin: 0;
    }
    
    .table td .progress .progress-bar {
      height: 3px;
    }
    
    .table td,
    .table th {
      white-space: nowrap;
    }
    
    .table.align-items-center td,
    .table.align-items-center th {
      vertical-align: middle;
    }
    
    .table tbody tr:last-child td {
      border-width: 0;
    }
    
    .table> :not(:last-child)> :last-child>* {
      border-bottom-color: #e5e5e5;
    }
    
    .table> :not(:first-child) {
      border-top: 1px solid currentColor;
    }
    
    .timeline {
      position: relative;
    }
    
    .timeline:before {
      content: "";
      position: absolute;
      top: 0;
      left: 1rem;
      height: 100%;
      border-right: 2px solid #e5e5e5;
    }
    
    .timeline.timeline-dark:before {
      border-right-color: #4a4a4a;
    }
    
    .timeline-block {
      position: relative;
    }
    
    .timeline-block:after {
      content: "";
      display: table;
      clear: both;
    }
    
    .timeline-block:first-child {
      margin-top: 0;
    }
    
    .timeline-block:last-child {
      margin-bottom: 0;
    }
    
    .timeline-step {
      position: absolute;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      left: 0;
      width: 26px;
      height: 26px;
      border-radius: 50%;
      background: #fff;
      text-align: center;
      transform: translateX(-50%);
      font-size: 1rem;
      font-weight: 600;
      z-index: 1;
    }
    
    .timeline-step svg,
    .timeline-step i {
      line-height: 1.4;
    }
    
    .timeline-content {
      position: relative;
      margin-left: 45px;
      padding-top: 0.35rem;
      position: relative;
      top: -6px;
    }
    
    .timeline-content:after {
      content: "";
      display: table;
      clear: both;
    }
    
    @media (min-width: 992px) {
      .timeline:before {
        left: 50%;
        margin-left: -1px;
      }
    
      .timeline-step {
        left: 50%;
      }
    
      .timeline-content {
        width: 38%;
      }
    
      .timeline-block:nth-child(even) .timeline-content {
        float: right;
      }
    }
    
    .timeline-one-side:before {
      left: 1rem;
    }
    
    .timeline-one-side .timeline-step {
      left: 1rem;
    }
    
    .timeline-one-side .timeline-content {
      width: auto;
    }
    
    @media (min-width: 992px) {
      .timeline-one-side .timeline-content {
        max-width: 30rem;
      }
    }
    
    .timeline-one-side .timeline-block:nth-child(even) .timeline-content {
      float: none;
    }
    
    .tilt {
      -webkit-transform-style: preserve-3d;
      transform-style: preserve-3d;
    }
    
    .tilt .up {
      -webkit-transform: translateZ(50px) scale(0.7);
      transform: translateZ(50px) scale(0.7) !important;
      transition: all 0.5s;
    }
    
    .bs-tooltip-auto[x-placement^=right] .tooltip-arrow,
    .bs-tooltip-right .tooltip-arrow {
      left: 1px;
    }
    
    .bs-tooltip-auto[x-placement^=left] .tooltip-arrow,
    .bs-tooltip-left .tooltip-arrow {
      right: 1px;
    }
    
    html * {
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale;
    }
    
    body {
      font-weight: 400;
      line-height: 1.6;
    }
    
    h1,
    .h1 {
      font-size: 3rem;
      line-height: 1.25;
      letter-spacing: 0;
    }
    
    @media (max-width: 575.98px) {
    
      h1,
      .h1 {
        font-size: calc(1.425rem + 2.1vw);
      }
    }
    
    h2,
    .h2 {
      font-size: 2.25rem;
      line-height: 1.3;
      letter-spacing: 0.05rem;
    }
    
    @media (max-width: 575.98px) {
    
      h2,
      .h2 {
        font-size: calc(1.35rem + 1.2vw);
      }
    }
    
    h3,
    .h3 {
      font-size: 1.875rem;
      line-height: 1.375;
    }
    
    @media (max-width: 575.98px) {
    
      h3,
      .h3 {
        font-size: calc(1.3125rem + 0.75vw);
      }
    }
    
    h4,
    .h4 {
      font-size: 1.5rem;
      line-height: 1.375;
    }
    
    @media (max-width: 575.98px) {
    
      h4,
      .h4 {
        font-size: calc(1.275rem + 0.3vw);
      }
    }
    
    h5,
    .h5 {
      font-size: 1.25rem;
      line-height: 1.375;
    }
    
    @media (max-width: 575.98px) {
    
      h5,
      .h5 {
        font-size: 1.25rem;
      }
    }
    
    h6,
    .h6 {
      font-size: 1rem;
      line-height: 1.625;
    }
    
    p,
    .p {
      font-size: 1rem;
      font-weight: 400;
      line-height: 1.6;
    }
    
    .lead {
      font-size: 1.25rem;
      font-weight: 400;
      line-height: 1.625;
    }
    
    h1,
    .h1,
    h2,
    .h2,
    h3,
    .h3 {
      font-weight: 600;
      font-family: var(--bs-font-sans-serif);
    }
    
    h4,
    .h4,
    h5,
    .h5,
    h6,
    .h6 {
      font-weight: 600;
    }
    
    h1,
    .h1,
    h2,
    .h2,
    h3,
    .h3,
    h4,
    .h4 {
      letter-spacing: -0.05rem;
    }
    
    a {
      letter-spacing: 0rem;
      color: #262626;
    }
    
    .text-sm {
      line-height: 1.5;
    }
    
    .text-xs {
      line-height: 1.25;
    }
    
    p,
    .p {
      font-size: 1rem;
    }
    
    .lead {
      font-size: 1.25rem;
    }
    
    .text-lg {
      font-size: 1.125rem !important;
    }
    
    .text-md {
      font-size: 1rem !important;
    }
    
    .text-sm {
      font-size: 0.875rem !important;
    }
    
    .text-xs {
      font-size: 0.75rem !important;
    }
    
    .text-xxs {
      font-size: 0.65rem !important;
    }
    
    p {
      line-height: 1.625;
    }
    
    .text-sans-serif {
      font-family: Inter, Helvetica, Arial, sans-serif !important;
    }
    
    .text-monospace {
      font-family: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace !important;
    }
    
    .text-justify {
      text-align: justify !important;
    }
    
    .text-wrap {
      white-space: normal !important;
    }
    
    .text-nowrap {
      white-space: nowrap !important;
    }
    
    .text-truncate {
      overflow: hidden;
      text-overflow: ellipsis;
      white-space: nowrap;
    }
    
    .font-weight-light {
      font-weight: 300 !important;
    }
    
    .font-weight-lighter {
      font-weight: lighter !important;
    }
    
    .font-weight-normal {
      font-weight: 400 !important;
    }
    
    .font-weight-semibold {
      font-weight: 500 !important;
    }
    
    .font-weight-bold {
      font-weight: 600 !important;
    }
    
    .font-weight-bolder {
      font-weight: 700 !important;
    }
    
    .font-weight-black {
      font-weight: 800 !important;
    }
    
    .font-italic {
      font-style: italic !important;
    }
    
    .text-gradient {
      background-clip: text;
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      position: relative;
      z-index: 1;
    }
    
    .text-gradient.text-primary {
      background-image: linear-gradient(195deg, #EC407A, #D81B60);
    }
    
    .text-gradient.text-info {
      background-image: linear-gradient(195deg, #49a3f1, #1A73E8);
    }
    
    .text-gradient.text-success {
      background-image: linear-gradient(195deg, #66BB6A, #43A047);
    }
    
    .text-gradient.text-warning {
      background-image: linear-gradient(195deg, #FFA726, #FB8C00);
    }
    
    .text-gradient.text-danger {
      background-image: linear-gradient(195deg, #EF5350, #E53935);
    }
    
    .text-gradient.text-dark {
      background-image: linear-gradient(195deg, #42424a, #191919);
    }
    
    .blockquote {
      border-left: 3px solid #525252;
    }
    
    .blockquote>span {
      font-style: italic;
    }
    
    .text-muted {
      color: #737373 !important;
    }
    
    .text-black-50 {
      color: rgba(10, 10, 10, 0.5) !important;
    }
    
    .text-white-50 {
      color: rgba(255, 255, 255, 0.5) !important;
    }
    
    .text-decoration-none {
      text-decoration: none !important;
    }
    
    .text-break {
      word-wrap: break-word !important;
    }
    
    .text-reset {
      color: inherit !important;
    }
    
    .letter-wider {
      letter-spacing: 0.05rem;
    }
    
    .letter-normal {
      letter-spacing: 0rem;
    }
    
    .letter-tighter {
      letter-spacing: -0.05rem;
    }
    
    .text-lighter {
      font-weight: lighter;
    }
    
    .text-light {
      font-weight: 300;
    }
    
    .text-normal {
      font-weight: 400;
    }
    
    .text-bold {
      font-weight: 600;
    }
    
    .text-bolder {
      font-weight: 700;
    }
    
    .text-2xl {
      font-size: 1.5rem;
    }
    
    .text-3xl {
      font-size: 1.875rem;
    }
    
    .text-4xl {
      font-size: 2rem;
    }
    
    .text-5xl {
      font-size: 2.25rem;
    }
    
    .text-6xl {
      font-size: 3rem;
    }
    
    .text-7xl {
      font-size: 3.75rem;
    }
    
    .text-8xl {
      font-size: 4rem;
    }
    
    .text-9xl {
      font-size: 5rem;
    }
    
    .flatpickr-calendar {
      background: transparent;
      opacity: 0;
      display: none;
      text-align: center;
      visibility: hidden;
      padding: 0;
      -webkit-animation: none;
      animation: none;
      direction: ltr;
      border: 0;
      font-size: 14px;
      line-height: 24px;
      border-radius: 0.75rem;
      position: absolute;
      width: 307.875px;
      -webkit-box-sizing: border-box;
      box-sizing: border-box;
      -ms-touch-action: manipulation;
      touch-action: manipulation;
      background: #fff;
      -webkit-box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
      transform: scale(0.95) !important;
    }
    
    .flatpickr-calendar.open,
    .flatpickr-calendar.inline {
      opacity: 1;
      max-height: 640px;
      visibility: visible;
      transform: scale(1) !important;
    }
    
    .flatpickr-calendar.open {
      display: inline-block;
      z-index: 99999;
    }
    
    .flatpickr-calendar.animate.open {
      -webkit-animation: fpFadeInDown 300ms cubic-bezier(0.23, 1, 0.32, 1);
      animation: fpFadeInDown 300ms cubic-bezier(0.23, 1, 0.32, 1);
    }
    
    .flatpickr-calendar.inline {
      display: block;
      position: relative;
      top: 2px;
    }
    
    .flatpickr-calendar.static {
      position: absolute;
      top: calc(100% + 2px);
    }
    
    .flatpickr-calendar.static.open {
      z-index: 999;
      display: block;
    }
    
    .flatpickr-calendar.multiMonth .flatpickr-days .dayContainer:nth-child(n+1) .flatpickr-day.inRange:nth-child(7n+7) {
      -webkit-box-shadow: none !important;
      box-shadow: none !important;
    }
    
    .flatpickr-calendar.multiMonth .flatpickr-days .dayContainer:nth-child(n+2) .flatpickr-day.inRange:nth-child(7n+1) {
      -webkit-box-shadow: -2px 0 0 #e6e6e6, 5px 0 0 #e6e6e6;
      box-shadow: -2px 0 0 #e6e6e6, 5px 0 0 #e6e6e6;
    }
    
    .flatpickr-calendar .hasWeeks .dayContainer,
    .flatpickr-calendar .hasTime .dayContainer {
      border-bottom: 0;
      border-bottom-right-radius: 0;
      border-bottom-left-radius: 0;
    }
    
    .flatpickr-calendar .hasWeeks .dayContainer {
      border-left: 0;
    }
    
    .flatpickr-calendar.hasTime .flatpickr-time {
      height: 40px;
      border-top: 1px solid #e6e6e6;
    }
    
    .flatpickr-calendar.noCalendar.hasTime .flatpickr-time {
      height: auto;
    }
    
    .flatpickr-calendar:before,
    .flatpickr-calendar:after {
      position: absolute;
      display: block;
      pointer-events: none;
      border: solid transparent;
      content: "";
      height: 0;
      width: 0;
      left: 22px;
    }
    
    .flatpickr-calendar.rightMost:before,
    .flatpickr-calendar.arrowRight:before,
    .flatpickr-calendar.rightMost:after,
    .flatpickr-calendar.arrowRight:after {
      left: auto;
      right: 22px;
    }
    
    .flatpickr-calendar.arrowCenter:before,
    .flatpickr-calendar.arrowCenter:after {
      left: 50%;
      right: 50%;
    }
    
    .flatpickr-calendar:before {
      border-width: 5px;
      margin: 0 -5px;
    }
    
    .flatpickr-calendar:after {
      border-width: 4px;
      margin: 0 -4px;
    }
    
    .flatpickr-calendar.arrowTop:before,
    .flatpickr-calendar.arrowTop:after {
      bottom: 100%;
    }
    
    .flatpickr-calendar.arrowTop:before {
      border-bottom-color: #fff;
    }
    
    .flatpickr-calendar.arrowTop:after {
      border-bottom-color: #fff;
    }
    
    .flatpickr-calendar.arrowBottom:before,
    .flatpickr-calendar.arrowBottom:after {
      top: 100%;
    }
    
    .flatpickr-calendar.arrowBottom:before {
      border-top-color: #e6e6e6;
    }
    
    .flatpickr-calendar.arrowBottom:after {
      border-top-color: #fff;
    }
    
    .flatpickr-calendar:focus {
      outline: 0;
    }
    
    .flatpickr-wrapper {
      position: relative;
      display: inline-block;
    }
    
    .flatpickr-months {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
    }
    
    .flatpickr-months .flatpickr-month {
      background: transparent;
      color: #344767;
      fill: rgba(0, 0, 0, 0.8);
      height: 34px;
      line-height: 1;
      text-align: center;
      position: relative;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
      overflow: hidden;
      -webkit-box-flex: 1;
      -webkit-flex: 1;
      -ms-flex: 1;
      flex: 1;
    }
    
    .flatpickr-months .flatpickr-prev-month,
    .flatpickr-months .flatpickr-next-month {
      text-decoration: none;
      cursor: pointer;
      position: absolute;
      top: 0;
      height: 34px;
      padding: 10px;
      z-index: 3;
      color: rgba(0, 0, 0, 0.9);
      fill: rgba(0, 0, 0, 0.9);
    }
    
    .flatpickr-months .flatpickr-prev-month.flatpickr-disabled,
    .flatpickr-months .flatpickr-next-month.flatpickr-disabled {
      display: none;
    }
    
    .flatpickr-months .flatpickr-prev-month i,
    .flatpickr-months .flatpickr-next-month i {
      position: relative;
    }
    
    .flatpickr-months .flatpickr-prev-month.flatpickr-prev-month,
    .flatpickr-months .flatpickr-next-month.flatpickr-prev-month {
      /*
            /*rtl:begin:ignore*/
      /*
            */
      left: 0;
      /*
            /*rtl:end:ignore*/
      /*
            */
    }
    
    /*
          /*rtl:begin:ignore*/
    /*
          /*rtl:end:ignore*/
    .flatpickr-months .flatpickr-prev-month.flatpickr-next-month,
    .flatpickr-months .flatpickr-next-month.flatpickr-next-month {
      /*
            /*rtl:begin:ignore*/
      /*
            */
      right: 0;
      /*
            /*rtl:end:ignore*/
      /*
            */
    }
    
    /*
          /*rtl:begin:ignore*/
    /*
          /*rtl:end:ignore*/
    .flatpickr-months .flatpickr-prev-month:hover,
    .flatpickr-months .flatpickr-next-month:hover {
      color: #959ea9;
    }
    
    .flatpickr-months .flatpickr-prev-month:hover svg,
    .flatpickr-months .flatpickr-next-month:hover svg {
      fill: #f64747;
    }
    
    .flatpickr-months .flatpickr-prev-month svg,
    .flatpickr-months .flatpickr-next-month svg {
      width: 14px;
      height: 14px;
    }
    
    .flatpickr-months .flatpickr-prev-month svg path,
    .flatpickr-months .flatpickr-next-month svg path {
      -webkit-transition: fill 0.1s;
      transition: fill 0.1s;
      fill: inherit;
    }
    
    .numInputWrapper {
      position: relative;
      height: auto;
    }
    
    .numInputWrapper input,
    .numInputWrapper span {
      display: inline-block;
    }
    
    .numInputWrapper input {
      width: 100%;
    }
    
    .numInputWrapper input::-ms-clear {
      display: none;
    }
    
    .numInputWrapper input::-webkit-outer-spin-button,
    .numInputWrapper input::-webkit-inner-spin-button {
      margin: 0;
      -webkit-appearance: none;
    }
    
    .numInputWrapper span {
      position: absolute;
      right: 0;
      width: 14px;
      padding: 0 4px 0 2px;
      height: 50%;
      line-height: 50%;
      opacity: 0;
      cursor: pointer;
      border: 1px solid rgba(57, 57, 57, 0.15);
      -webkit-box-sizing: border-box;
      box-sizing: border-box;
    }
    
    .numInputWrapper span:hover {
      background: rgba(0, 0, 0, 0.1);
    }
    
    .numInputWrapper span:active {
      background: rgba(0, 0, 0, 0.2);
    }
    
    .numInputWrapper span:after {
      display: block;
      content: "";
      position: absolute;
    }
    
    .numInputWrapper span.arrowUp {
      top: 0;
      border-bottom: 0;
    }
    
    .numInputWrapper span.arrowUp:after {
      border-left: 4px solid transparent;
      border-right: 4px solid transparent;
      border-bottom: 4px solid rgba(57, 57, 57, 0.6);
      top: 26%;
    }
    
    .numInputWrapper span.arrowDown {
      top: 50%;
    }
    
    .numInputWrapper span.arrowDown:after {
      border-left: 4px solid transparent;
      border-right: 4px solid transparent;
      border-top: 4px solid rgba(57, 57, 57, 0.6);
      top: 40%;
    }
    
    .numInputWrapper span svg {
      width: inherit;
      height: auto;
    }
    
    .numInputWrapper span svg path {
      fill: rgba(0, 0, 0, 0.5);
    }
    
    .numInputWrapper:hover {
      background: rgba(0, 0, 0, 0.05);
    }
    
    .numInputWrapper:hover span {
      opacity: 1;
    }
    
    .flatpickr-current-month {
      font-size: 135%;
      line-height: inherit;
      font-weight: 300;
      color: inherit;
      position: absolute;
      width: 75%;
      left: 12.5%;
      padding: 7.48px 0 0 0;
      line-height: 1;
      height: 34px;
      display: inline-block;
      text-align: center;
      -webkit-transform: translate3d(0px, 0px, 0px);
      transform: translate3d(0px, 0px, 0px);
    }
    
    .flatpickr-current-month span.cur-month {
      font-family: inherit;
      font-weight: 700;
      color: inherit;
      display: inline-block;
      margin-left: 0.5ch;
      padding: 0;
    }
    
    .flatpickr-current-month span.cur-month:hover {
      background: rgba(0, 0, 0, 0.05);
    }
    
    .flatpickr-current-month .numInputWrapper {
      width: 6ch;
      width: 7ch\0;
      display: inline-block;
    }
    
    .flatpickr-current-month .numInputWrapper span.arrowUp:after {
      border-bottom-color: rgba(0, 0, 0, 0.9);
    }
    
    .flatpickr-current-month .numInputWrapper span.arrowDown:after {
      border-top-color: rgba(0, 0, 0, 0.9);
    }
    
    .flatpickr-current-month input.cur-year {
      background: transparent;
      -webkit-box-sizing: border-box;
      box-sizing: border-box;
      color: inherit;
      cursor: text;
      padding: 0 0 0 0.5ch;
      margin: 0;
      display: inline-block;
      font-size: inherit;
      font-family: inherit;
      font-weight: 300;
      line-height: inherit;
      height: auto;
      border: 0;
      border-radius: 0;
      vertical-align: initial;
      -webkit-appearance: textfield;
      -moz-appearance: textfield;
      appearance: textfield;
    }
    
    .flatpickr-current-month input.cur-year:focus {
      outline: 0;
    }
    
    .flatpickr-current-month input.cur-year[disabled],
    .flatpickr-current-month input.cur-year[disabled]:hover {
      font-size: 100%;
      color: rgba(0, 0, 0, 0.5);
      background: transparent;
      pointer-events: none;
    }
    
    .flatpickr-current-month .flatpickr-monthDropdown-months {
      appearance: menulist;
      background: transparent;
      border: none;
      border-radius: 0;
      box-sizing: border-box;
      color: inherit;
      cursor: pointer;
      font-size: inherit;
      font-family: inherit;
      font-weight: 300;
      height: auto;
      line-height: inherit;
      margin: -1px 0 0 0;
      outline: none;
      padding: 0 0 0 0.5ch;
      position: relative;
      vertical-align: initial;
      -webkit-box-sizing: border-box;
      -webkit-appearance: menulist;
      -moz-appearance: menulist;
      width: auto;
    }
    
    .flatpickr-current-month .flatpickr-monthDropdown-months:focus,
    .flatpickr-current-month .flatpickr-monthDropdown-months:active {
      outline: none;
    }
    
    .flatpickr-current-month .flatpickr-monthDropdown-months:hover {
      background: rgba(0, 0, 0, 0.05);
    }
    
    .flatpickr-current-month .flatpickr-monthDropdown-months .flatpickr-monthDropdown-month {
      background-color: transparent;
      outline: none;
      padding: 0;
    }
    
    .flatpickr-weekdays {
      background: transparent;
      text-align: center;
      overflow: hidden;
      width: 100%;
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-align: center;
      -webkit-align-items: center;
      -ms-flex-align: center;
      align-items: center;
      height: 28px;
    }
    
    .flatpickr-weekdays .flatpickr-weekdaycontainer {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-flex: 1;
      -webkit-flex: 1;
      -ms-flex: 1;
      flex: 1;
    }
    
    span.flatpickr-weekday {
      cursor: default;
      font-size: 90%;
      background: transparent;
      color: rgba(0, 0, 0, 0.54);
      line-height: 1;
      margin: 0;
      text-align: center;
      display: block;
      -webkit-box-flex: 1;
      -webkit-flex: 1;
      -ms-flex: 1;
      flex: 1;
      font-weight: bolder;
    }
    
    .dayContainer,
    .flatpickr-weeks {
      padding: 1px 0 0 0;
    }
    
    .flatpickr-days {
      position: relative;
      overflow: hidden;
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-align: start;
      -webkit-align-items: flex-start;
      -ms-flex-align: start;
      align-items: flex-start;
      width: 307.875px;
    }
    
    .flatpickr-days:focus {
      outline: 0;
    }
    
    .dayContainer {
      padding: 0;
      outline: 0;
      text-align: left;
      width: 307.875px;
      min-width: 307.875px;
      max-width: 307.875px;
      -webkit-box-sizing: border-box;
      box-sizing: border-box;
      display: inline-block;
      display: -ms-flexbox;
      display: -webkit-box;
      display: -webkit-flex;
      display: flex;
      -webkit-flex-wrap: wrap;
      flex-wrap: wrap;
      -ms-flex-wrap: wrap;
      -ms-flex-pack: justify;
      -webkit-justify-content: space-around;
      justify-content: space-around;
      -webkit-transform: translate3d(0px, 0px, 0px);
      transform: translate3d(0px, 0px, 0px);
      opacity: 1;
    }
    
    .dayContainer+.dayContainer {
      -webkit-box-shadow: -1px 0 0 #e6e6e6;
      box-shadow: -1px 0 0 #e6e6e6;
    }
    
    .flatpickr-day {
      background: none;
      border: 1px solid transparent;
      border-radius: 150px;
      -webkit-box-sizing: border-box;
      box-sizing: border-box;
      color: #344767;
      cursor: pointer;
      font-weight: 400;
      width: 14.2857143%;
      -webkit-flex-basis: 14.2857143%;
      -ms-flex-preferred-size: 14.2857143%;
      flex-basis: 14.2857143%;
      max-width: 39px;
      height: 39px;
      line-height: 39px;
      margin: 0;
      display: inline-block;
      position: relative;
      -webkit-box-pack: center;
      -webkit-justify-content: center;
      -ms-flex-pack: center;
      justify-content: center;
      text-align: center;
    }
    
    .flatpickr-day.inRange,
    .flatpickr-day.prevMonthDay.inRange,
    .flatpickr-day.nextMonthDay.inRange,
    .flatpickr-day.today.inRange,
    .flatpickr-day.prevMonthDay.today.inRange,
    .flatpickr-day.nextMonthDay.today.inRange,
    .flatpickr-day:hover,
    .flatpickr-day.prevMonthDay:hover,
    .flatpickr-day.nextMonthDay:hover,
    .flatpickr-day:focus,
    .flatpickr-day.prevMonthDay:focus,
    .flatpickr-day.nextMonthDay:focus {
      cursor: pointer;
      outline: 0;
      background: #e6e6e6;
      border-color: #e6e6e6;
    }
    
    .flatpickr-day.today {
      border-color: #959ea9;
    }
    
    .flatpickr-day.today:hover,
    .flatpickr-day.today:focus {
      border-color: #959ea9;
      background: #959ea9;
      color: #fff;
    }
    
    .flatpickr-day.selected,
    .flatpickr-day.startRange,
    .flatpickr-day.endRange,
    .flatpickr-day.selected.inRange,
    .flatpickr-day.startRange.inRange,
    .flatpickr-day.endRange.inRange,
    .flatpickr-day.selected:focus,
    .flatpickr-day.startRange:focus,
    .flatpickr-day.endRange:focus,
    .flatpickr-day.selected:hover,
    .flatpickr-day.startRange:hover,
    .flatpickr-day.endRange:hover,
    .flatpickr-day.selected.prevMonthDay,
    .flatpickr-day.startRange.prevMonthDay,
    .flatpickr-day.endRange.prevMonthDay,
    .flatpickr-day.selected.nextMonthDay,
    .flatpickr-day.startRange.nextMonthDay,
    .flatpickr-day.endRange.nextMonthDay {
      background: #569ff7;
      -webkit-box-shadow: none;
      box-shadow: none;
      color: #fff;
      border-color: #569ff7;
    }
    
    .flatpickr-day.selected.startRange,
    .flatpickr-day.startRange.startRange,
    .flatpickr-day.endRange.startRange {
      border-radius: 50px 0 0 50px;
    }
    
    .flatpickr-day.selected.endRange,
    .flatpickr-day.startRange.endRange,
    .flatpickr-day.endRange.endRange {
      border-radius: 0 50px 50px 0;
    }
    
    .flatpickr-day.selected.startRange+.endRange:not(:nth-child(7n+1)),
    .flatpickr-day.startRange.startRange+.endRange:not(:nth-child(7n+1)),
    .flatpickr-day.endRange.startRange+.endRange:not(:nth-child(7n+1)) {
      -webkit-box-shadow: -10px 0 0 #569ff7;
      box-shadow: -10px 0 0 #569ff7;
    }
    
    .flatpickr-day.selected.startRange.endRange,
    .flatpickr-day.startRange.startRange.endRange,
    .flatpickr-day.endRange.startRange.endRange {
      border-radius: 50px;
    }
    
    .flatpickr-day.inRange {
      border-radius: 0;
      -webkit-box-shadow: -5px 0 0 #e6e6e6, 5px 0 0 #e6e6e6;
      box-shadow: -5px 0 0 #e6e6e6, 5px 0 0 #e6e6e6;
    }
    
    .flatpickr-day.flatpickr-disabled,
    .flatpickr-day.flatpickr-disabled:hover,
    .flatpickr-day.prevMonthDay,
    .flatpickr-day.nextMonthDay,
    .flatpickr-day.notAllowed,
    .flatpickr-day.notAllowed.prevMonthDay,
    .flatpickr-day.notAllowed.nextMonthDay {
      color: rgba(57, 57, 57, 0.3);
      background: transparent;
      border-color: transparent;
      cursor: default;
    }
    
    .flatpickr-day.flatpickr-disabled,
    .flatpickr-day.flatpickr-disabled:hover {
      cursor: not-allowed;
      color: rgba(57, 57, 57, 0.1);
    }
    
    .flatpickr-day.week.selected {
      border-radius: 0;
      -webkit-box-shadow: -5px 0 0 #569ff7, 5px 0 0 #569ff7;
      box-shadow: -5px 0 0 #569ff7, 5px 0 0 #569ff7;
    }
    
    .flatpickr-day.hidden {
      visibility: hidden;
    }
    
    .rangeMode .flatpickr-day {
      margin-top: 1px;
    }
    
    .flatpickr-weekwrapper {
      float: left;
    }
    
    .flatpickr-weekwrapper .flatpickr-weeks {
      padding: 0 12px;
      -webkit-box-shadow: 1px 0 0 #e6e6e6;
      box-shadow: 1px 0 0 #e6e6e6;
    }
    
    .flatpickr-weekwrapper .flatpickr-weekday {
      float: none;
      width: 100%;
      line-height: 28px;
    }
    
    .flatpickr-weekwrapper span.flatpickr-day,
    .flatpickr-weekwrapper span.flatpickr-day:hover {
      display: block;
      width: 100%;
      max-width: none;
      color: rgba(57, 57, 57, 0.3);
      background: transparent;
      cursor: default;
      border: none;
    }
    
    .flatpickr-innerContainer {
      display: block;
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-sizing: border-box;
      box-sizing: border-box;
      overflow: hidden;
    }
    
    .flatpickr-rContainer {
      display: inline-block;
      padding: 0;
      -webkit-box-sizing: border-box;
      box-sizing: border-box;
    }
    
    .flatpickr-time {
      text-align: center;
      outline: 0;
      display: block;
      height: 0;
      line-height: 40px;
      max-height: 40px;
      -webkit-box-sizing: border-box;
      box-sizing: border-box;
      overflow: hidden;
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
    }
    
    .flatpickr-time:after {
      content: "";
      display: table;
      clear: both;
    }
    
    .flatpickr-time .numInputWrapper {
      -webkit-box-flex: 1;
      -webkit-flex: 1;
      -ms-flex: 1;
      flex: 1;
      width: 40%;
      height: 40px;
      float: left;
    }
    
    .flatpickr-time .numInputWrapper span.arrowUp:after {
      border-bottom-color: #393939;
    }
    
    .flatpickr-time .numInputWrapper span.arrowDown:after {
      border-top-color: #393939;
    }
    
    .flatpickr-time.hasSeconds .numInputWrapper {
      width: 26%;
    }
    
    .flatpickr-time.time24hr .numInputWrapper {
      width: 49%;
    }
    
    .flatpickr-time input {
      background: transparent;
      -webkit-box-shadow: none;
      box-shadow: none;
      border: 0;
      border-radius: 0;
      text-align: center;
      margin: 0;
      padding: 0;
      height: inherit;
      line-height: inherit;
      color: #393939;
      font-size: 14px;
      position: relative;
      -webkit-box-sizing: border-box;
      box-sizing: border-box;
      -webkit-appearance: textfield;
      -moz-appearance: textfield;
      appearance: textfield;
    }
    
    .flatpickr-time input.flatpickr-hour {
      font-weight: bold;
    }
    
    .flatpickr-time input.flatpickr-minute,
    .flatpickr-time input.flatpickr-second {
      font-weight: 400;
    }
    
    .flatpickr-time input:focus {
      outline: 0;
      border: 0;
    }
    
    .flatpickr-time .flatpickr-time-separator,
    .flatpickr-time .flatpickr-am-pm {
      height: inherit;
      float: left;
      line-height: inherit;
      color: #393939;
      font-weight: bold;
      width: 2%;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
      -webkit-align-self: center;
      -ms-flex-item-align: center;
      align-self: center;
    }
    
    .flatpickr-time .flatpickr-am-pm {
      outline: 0;
      width: 18%;
      cursor: pointer;
      text-align: center;
      font-weight: 400;
    }
    
    .flatpickr-time input:hover,
    .flatpickr-time .flatpickr-am-pm:hover,
    .flatpickr-time input:focus,
    .flatpickr-time .flatpickr-am-pm:focus {
      background: #eee;
    }
    
    .flatpickr-input[readonly] {
      cursor: pointer;
    }
    
    @-webkit-keyframes fpFadeInDown {
      from {
        opacity: 0;
        -webkit-transform: translate3d(0, -20px, 0);
        transform: translate3d(0, -20px, 0);
      }
    
      to {
        opacity: 1;
        -webkit-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0);
      }
    }
    
    @keyframes fpFadeInDown {
      from {
        opacity: 0;
        -webkit-transform: translate3d(0, -20px, 0);
        transform: translate3d(0, -20px, 0);
      }
    
      to {
        opacity: 1;
        -webkit-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0);
      }
    }
    
    .datepicker.flatpickr-input {
      background-color: #fff;
    }
    
    .flatpickr-calendar.open {
      margin-left: 0px;
      margin-top: 4px;
    }
    
    .flatpickr-calendar.arrowBottom {
      margin-top: -20px;
    }
    
    .flatpickr-calendar .flatpickr-innerContainer {
      margin-top: 15px !important;
    }
    
    .flatpickr-calendar .numInputWrapper span {
      border: none;
      border-bottom: 1px solid rgba(57, 57, 57, 0.15);
    }
    
    .flatpickr-calendar .numInputWrapper:hover .arrowUp,
    .flatpickr-calendar .numInputWrapper:hover .arrowDown {
      margin-top: 3px;
    }
    
    .flatpickr-calendar .flatpickr-day.today,
    .flatpickr-calendar .flatpickr-day.selected,
    .flatpickr-calendar .flatpickr-day.startRange,
    .flatpickr-calendar .flatpickr-day.endRange {
      background: #e91e63 !important;
      color: #fff;
      border: none;
    }
    
    .flatpickr-calendar .flatpickr-day.inRange {
      background: rgba(94, 114, 228, 0.28);
      border: none;
      -webkit-box-shadow: -5px 0 0 #D7DCF8, 5px 0 0 #D7DCF8;
      box-shadow: -5px 0 0 #D7DCF8, 5px 0 0 #D7DCF8;
    }
    
    .flatpickr-calendar .flatpickr-day:not(.selected):hover,
    .flatpickr-calendar .flatpickr-day:not(.selected):focus {
      background: rgba(94, 114, 228, 0.28);
      border: none;
    }
    
    .flatpickr-calendar .flatpickr-time input:hover,
    .flatpickr-calendar .flatpickr-time .flatpickr-am-pm:hover,
    .flatpickr-calendar .flatpickr-time input:focus,
    .flatpickr-calendar .flatpickr-time .flatpickr-am-pm:focus {
      background: rgba(94, 114, 228, 0.28);
    }
    
    .flatpickr.form-control {
      background: #fff;
    }
    
    .flatpickr-day.endRange.startRange+.endRange:not(:nth-child(7n+1)),
    .flatpickr-day.selected.startRange+.endRange:not(:nth-child(7n+1)),
    .flatpickr-day.startRange.startRange+.endRange:not(:nth-child(7n+1)) {
      box-shadow: -10px 0 0 #e91e63;
    }
    
    /*! nouislider - 14.6.3 - 11/19/2020 */
    /* Functional styling;
     * These styles are required for noUiSlider to function.
     * You don't need to change these rules to apply your design.
     */
    .noUi-target,
    .noUi-target * {
      -webkit-touch-callout: none;
      -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
      -webkit-user-select: none;
      -ms-touch-action: none;
      touch-action: none;
      -ms-user-select: none;
      -moz-user-select: none;
      user-select: none;
      -moz-box-sizing: border-box;
      box-sizing: border-box;
    }
    
    .noUi-target {
      position: relative;
    }
    
    .noUi-base,
    .noUi-connects {
      width: 100%;
      height: 2px;
      position: relative;
      z-index: 1;
      top: 0;
    }
    
    /* Wrapper for all connect elements.
     */
    .noUi-connects {
      z-index: 0;
      overflow: hidden;
    }
    
    .noUi-connect,
    .noUi-origin {
      will-change: transform;
      position: absolute;
      z-index: 1;
      top: 0;
      right: 0;
      -ms-transform-origin: 0 0;
      -webkit-transform-origin: 0 0;
      -webkit-transform-style: preserve-3d;
      transform-origin: 0 0;
      transform-style: flat;
    }
    
    .noUi-connect {
      height: 100%;
      width: 100%;
      border-radius: 0.25rem;
    }
    
    .noUi-origin {
      height: 10%;
      width: 10%;
    }
    
    /* Offset direction
     */
    .noUi-txt-dir-rtl.noUi-horizontal .noUi-origin {
      left: 0;
      right: auto;
    }
    
    /* Give origins 0 height/width so they don't interfere with clicking the
     * connect elements.
     */
    .noUi-vertical .noUi-origin {
      width: 0;
    }
    
    .noUi-horizontal .noUi-origin {
      height: 0;
    }
    
    .noUi-handle {
      -webkit-backface-visibility: hidden;
      backface-visibility: hidden;
      position: absolute;
    }
    
    .noUi-touch-area {
      height: 100%;
      width: 100%;
    }
    
    .noUi-state-tap .noUi-connect,
    .noUi-state-tap .noUi-origin {
      -webkit-transition: transform 0.3s;
      transition: transform 0.3s;
    }
    
    .noUi-state-drag * {
      cursor: inherit !important;
    }
    
    /* Slider size and handle placement;
     */
    .noUi-horizontal {
      height: 2px;
    }
    
    .noUi-horizontal .noUi-handle {
      border-radius: 50%;
      background-color: #fff;
      box-shadow: 0 1px 13px 0 rgba(0, 0, 0, 0.2);
      height: 14px;
      width: 14px;
      cursor: pointer;
      margin-top: -6px;
      outline: none;
      right: -10px;
    }
    
    .noUi-vertical {
      width: 3px;
    }
    
    .noUi-vertical .noUi-handle {
      width: 28px;
      height: 34px;
      right: -6px;
      top: -17px;
    }
    
    .noUi-txt-dir-rtl.noUi-horizontal .noUi-handle {
      left: -17px;
      right: auto;
    }
    
    /* Styling;
     * Giving the connect element a border radius causes issues with using transform: scale
     */
    .noUi-target {
      background: #e5e5e5;
      border-radius: 0.25rem;
    }
    
    .noUi-connects {
      border-radius: 3px;
    }
    
    .noUi-connect {
      background: #e91e63;
    }
    
    /* Handles and cursors;
     */
    .noUi-draggable {
      cursor: ew-resize;
    }
    
    .noUi-vertical .noUi-draggable {
      cursor: ns-resize;
    }
    
    .noUi-handle {
      border: 1px solid #e91e63;
      border-radius: 3px;
      background: #fff;
      cursor: default;
      box-shadow: inset 0 0 1px #fff, inset 0 1px 7px #EBEBEB, 0 3px 6px -3px #BBB;
      webkit-transition: 0.3s ease 0s;
      -moz-transition: 0.3s ease 0s;
      -ms-transition: 0.3s ease 0s;
      -o-transform: 0.3s ease 0s;
      transition: 0.3s ease 0s;
    }
    
    .noUi-active {
      box-shadow: inset 0 0 1px #fff, inset 0 1px 7px #DDD, 0 3px 6px -3px #BBB;
      transform: scale3d(1.5, 1.5, 1);
    }
    
    /* Disabled state;
     */
    [disabled] .noUi-connect {
      background: #B8B8B8;
    }
    
    [disabled].noUi-target,
    [disabled].noUi-handle,
    [disabled] .noUi-handle {
      cursor: not-allowed;
    }
    
    /* Base;
     *
     */
    .noUi-pips,
    .noUi-pips * {
      -moz-box-sizing: border-box;
      box-sizing: border-box;
    }
    
    .noUi-pips {
      position: absolute;
      color: #999;
    }
    
    /* Values;
     *
     */
    .noUi-value {
      position: absolute;
      white-space: nowrap;
      text-align: center;
    }
    
    .noUi-value-sub {
      color: #ccc;
      font-size: 10px;
    }
    
    /* Markings;
     *
     */
    .noUi-marker {
      position: absolute;
      background: #CCC;
    }
    
    .noUi-marker-sub {
      background: #AAA;
    }
    
    .noUi-marker-large {
      background: #AAA;
    }
    
    /* Horizontal layout;
     *
     */
    .noUi-pips-horizontal {
      padding: 10px 0;
      height: 80px;
      top: 100%;
      left: 0;
      width: 100%;
    }
    
    .noUi-value-horizontal {
      -webkit-transform: translate(-50%, 50%);
      transform: translate(-50%, 50%);
    }
    
    .noUi-rtl .noUi-value-horizontal {
      -webkit-transform: translate(50%, 50%);
      transform: translate(50%, 50%);
    }
    
    .noUi-marker-horizontal.noUi-marker {
      margin-left: -1px;
      width: 2px;
      height: 5px;
    }
    
    .noUi-marker-horizontal.noUi-marker-sub {
      height: 10px;
    }
    
    .noUi-marker-horizontal.noUi-marker-large {
      height: 15px;
    }
    
    /* Vertical layout;
     *
     */
    .noUi-pips-vertical {
      padding: 0 10px;
      height: 100%;
      top: 0;
      left: 100%;
    }
    
    .noUi-value-vertical {
      -webkit-transform: translate(0, -50%);
      transform: translate(0, -50%);
      padding-left: 25px;
    }
    
    .noUi-rtl .noUi-value-vertical {
      -webkit-transform: translate(0, 50%);
      transform: translate(0, 50%);
    }
    
    .noUi-marker-vertical.noUi-marker {
      width: 5px;
      height: 2px;
      margin-top: -1px;
    }
    
    .noUi-marker-vertical.noUi-marker-sub {
      width: 10px;
    }
    
    .noUi-marker-vertical.noUi-marker-large {
      width: 15px;
    }
    
    .noUi-tooltip {
      display: block;
      position: absolute;
      border: 1px solid #D9D9D9;
      border-radius: 3px;
      background: #fff;
      color: #000;
      padding: 5px;
      text-align: center;
      white-space: nowrap;
    }
    
    .noUi-horizontal .noUi-tooltip {
      -webkit-transform: translate(-50%, 0);
      transform: translate(-50%, 0);
      left: 50%;
      bottom: 120%;
    }
    
    .noUi-vertical .noUi-tooltip {
      -webkit-transform: translate(0, -50%);
      transform: translate(0, -50%);
      top: 50%;
      right: 120%;
    }
    
    .noUi-horizontal .noUi-origin>.noUi-tooltip {
      -webkit-transform: translate(50%, 0);
      transform: translate(50%, 0);
      left: auto;
      bottom: 10px;
    }
    
    .noUi-vertical .noUi-origin>.noUi-tooltip {
      -webkit-transform: translate(0, -18px);
      transform: translate(0, -18px);
      top: auto;
      right: 28px;
    }
    
    /* PrismJS 1.23.0
    https://prismjs.com/download.html#themes=prism&languages=markup+css+clike+javascript */
    /**
     * prism.js default theme for JavaScript, CSS and HTML
     * Based on dabblet (http://dabblet.com)
     * @author Lea Verou
     */
    code[class*=language-],
    pre[class*=language-] {
      color: black;
      background: none;
      text-shadow: 0 1px white;
      font-family: Consolas, Monaco, "Andale Mono", "Ubuntu Mono", monospace;
      font-size: 1em;
      text-align: left;
      white-space: pre;
      word-spacing: normal;
      word-break: normal;
      word-wrap: normal;
      line-height: 1.5;
      -moz-tab-size: 4;
      -o-tab-size: 4;
      tab-size: 4;
      -webkit-hyphens: none;
      -moz-hyphens: none;
      -ms-hyphens: none;
      hyphens: none;
    }
    
    pre[class*=language-]::-moz-selection,
    pre[class*=language-] ::-moz-selection,
    code[class*=language-]::-moz-selection,
    code[class*=language-] ::-moz-selection {
      text-shadow: none;
      background: #b3d4fc;
    }
    
    pre[class*=language-]::selection,
    pre[class*=language-] ::selection,
    code[class*=language-]::selection,
    code[class*=language-] ::selection {
      text-shadow: none;
      background: #b3d4fc;
    }
    
    @media print {
    
      code[class*=language-],
      pre[class*=language-] {
        text-shadow: none;
      }
    }
    
    /* Code blocks */
    pre[class*=language-] {
      padding: 1em;
      overflow: auto;
      border-radius: 0.75rem;
    }
    
    :not(pre)>code[class*=language-],
    pre[class*=language-] {
      background: #f5f5f5;
    }
    
    /* Inline code */
    :not(pre)>code[class*=language-] {
      padding: 0.1em;
      border-radius: 0.3em;
      white-space: normal;
    }
    
    .token.comment,
    .token.prolog,
    .token.doctype,
    .token.cdata {
      color: slategray;
    }
    
    .token.punctuation {
      color: #999;
    }
    
    .token.namespace {
      opacity: 0.7;
    }
    
    .token.property,
    .token.tag,
    .token.boolean,
    .token.number,
    .token.constant,
    .token.symbol,
    .token.deleted {
      color: #905;
    }
    
    .token.selector,
    .token.attr-name,
    .token.string,
    .token.char,
    .token.builtin,
    .token.inserted {
      color: #690;
    }
    
    .token.operator,
    .token.entity,
    .token.url,
    .language-css .token.string,
    .style .token.string {
      color: #9a6e3a;
      /* This background color was intended by the author of this theme. */
      background: hsla(0, 0%, 100%, 0.5);
    }
    
    .token.atrule,
    .token.attr-value,
    .token.keyword {
      color: #07a;
    }
    
    .token.function,
    .token.class-name {
      color: #DD4A68;
    }
    
    .token.regex,
    .token.important,
    .token.variable {
      color: #e90;
    }
    
    .token.important,
    .token.bold {
      font-weight: bold;
    }
    
    .token.italic {
      font-style: italic;
    }
    
    .token.entity {
      cursor: help;
    }
    
    /*
     * Container style
     */
    .ps {
      overflow: hidden !important;
      overflow-anchor: none;
      -ms-overflow-style: none;
      touch-action: auto;
      -ms-touch-action: auto;
    }
    
    /*
     * Scrollbar rail styles
     */
    .ps__rail-x {
      display: none;
      opacity: 0;
      transition: background-color 0.2s linear, opacity 0.2s linear;
      -webkit-transition: background-color 0.2s linear, opacity 0.2s linear;
      height: 15px;
      /* there must be 'bottom' or 'top' for ps__rail-x */
      bottom: 0px;
      /* please don't change 'position' */
      position: absolute;
    }
    
    .ps__rail-y {
      display: none;
      opacity: 0;
      transition: background-color 0.2s linear, opacity 0.2s linear;
      -webkit-transition: background-color 0.2s linear, opacity 0.2s linear;
      width: 15px;
      /* there must be 'right' or 'left' for ps__rail-y */
      right: 0;
      /* please don't change 'position' */
      position: absolute;
    }
    
    .ps--active-x>.ps__rail-x,
    .ps--active-y>.ps__rail-y {
      display: block;
      background-color: transparent;
    }
    
    .ps:hover>.ps__rail-x,
    .ps:hover>.ps__rail-y,
    .ps--focus>.ps__rail-x,
    .ps--focus>.ps__rail-y,
    .ps--scrolling-x>.ps__rail-x,
    .ps--scrolling-y>.ps__rail-y {
      opacity: 0.6;
    }
    
    .ps .ps__rail-x:hover,
    .ps .ps__rail-y:hover,
    .ps .ps__rail-x:focus,
    .ps .ps__rail-y:focus,
    .ps .ps__rail-x.ps--clicking,
    .ps .ps__rail-y.ps--clicking {
      background-color: #eee;
      opacity: 0.9;
    }
    
    /*
     * Scrollbar thumb styles
     */
    .ps__thumb-x {
      background-color: #aaa;
      border-radius: 6px;
      transition: background-color 0.2s linear, height 0.2s ease-in-out;
      -webkit-transition: background-color 0.2s linear, height 0.2s ease-in-out;
      height: 6px;
      /* there must be 'bottom' for ps__thumb-x */
      bottom: 2px;
      /* please don't change 'position' */
      position: absolute;
    }
    
    .ps__thumb-y {
      background-color: #aaa;
      border-radius: 6px;
      transition: background-color 0.2s linear, width 0.2s ease-in-out;
      -webkit-transition: background-color 0.2s linear, width 0.2s ease-in-out;
      width: 6px;
      /* there must be 'right' for ps__thumb-y */
      right: 2px;
      /* please don't change 'position' */
      position: absolute;
    }
    
    .ps__rail-x:hover>.ps__thumb-x,
    .ps__rail-x:focus>.ps__thumb-x,
    .ps__rail-x.ps--clicking .ps__thumb-x {
      background-color: #999;
      height: 11px;
    }
    
    .ps__rail-y:hover>.ps__thumb-y,
    .ps__rail-y:focus>.ps__thumb-y,
    .ps__rail-y.ps--clicking .ps__thumb-y {
      background-color: #999;
      width: 11px;
    }
    
    /* MS supports */
    @supports (-ms-overflow-style: none) {
      .ps {
        overflow: auto !important;
      }
    }
    
    @media screen and (-ms-high-contrast: active),
    (-ms-high-contrast: none) {
      .ps {
        overflow: auto !important;
      }
    }
    
    /*# sourceMappingURL=dashboard-free.css.map */</style>
</head>

<body class="g-sidenav-show  bg-gray-100">
  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-radius-lg fixed-start ms-2  bg-white my-2" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-dark opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand px-4 py-3 m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard " target="_blank">
        <img src="../assets/img/logo-ct-dark.png" class="navbar-brand-img" width="26" height="26" alt="main_logo">
        <span class="ms-1 text-sm text-dark">Creative Tim</span>
      </a>
    </div>
    <hr class="horizontal dark mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-dark" href="../pages/dashboard.html">
            <i class="material-symbols-rounded opacity-5">dashboard</i>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="../pages/tables.html">
            <i class="material-symbols-rounded opacity-5">table_view</i>
            <span class="nav-link-text ms-1">Tables</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="../pages/billing.html">
            <i class="material-symbols-rounded opacity-5">receipt_long</i>
            <span class="nav-link-text ms-1">Billing</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="../pages/virtual-reality.html">
            <i class="material-symbols-rounded opacity-5">view_in_ar</i>
            <span class="nav-link-text ms-1">Virtual Reality</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="../pages/rtl.html">
            <i class="material-symbols-rounded opacity-5">format_textdirection_r_to_l</i>
            <span class="nav-link-text ms-1">RTL</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="../pages/notifications.html">
            <i class="material-symbols-rounded opacity-5">notifications</i>
            <span class="nav-link-text ms-1">Notifications</span>
          </a>
        </li>
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs text-dark font-weight-bolder opacity-5">Account pages</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="../pages/profile.html">
            <i class="material-symbols-rounded opacity-5">person</i>
            <span class="nav-link-text ms-1">Profile</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="../pages/sign-in.html">
            <i class="material-symbols-rounded opacity-5">login</i>
            <span class="nav-link-text ms-1">Sign In</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="../pages/sign-up.html">
            <i class="material-symbols-rounded opacity-5">assignment</i>
            <span class="nav-link-text ms-1">Sign Up</span>
          </a>
        </li>
      </ul>
    </div>
    <div class="sidenav-footer position-absolute w-100 bottom-0 ">
      <div class="mx-3">
        <a class="btn btn-outline-dark mt-4 w-100" href="https://www.creative-tim.com/learning-lab/bootstrap/overview/material-dashboard?ref=sidebarfree" type="button">Documentation</a>
        <a class="btn bg-gradient-dark w-100" href="https://www.creative-tim.com/product/material-dashboard-pro?ref=sidebarfree" type="button">Upgrade to pro</a>
      </div>
    </div>
  </aside>
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
   
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.min.js?v=3.2.0"></script>
</body>

</html> 