<!DOCTYPE html>
<html lang="en" x-data="{ theme: 'light' }" :data-theme="theme">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="robots" content="noindex, nofollow">
    <title>{{ config('app.name') }}</title>

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <!-- Main CSS -->
    @vite('resources/css/app.css')
</head>
<body class="font-roboto text-[14px] bg-white leading-[1.5] text-[#6A7287] overflow-y-auto overflow-x-hidden m-0 font-normal dark:bg-[#0F0C1C]">

<!-- Main Wrapper -->
<div id="main-wrapper" x-data="{ sidebarIsOpen: true, sidebarIsHovered: false }">
    <div class="group">
        <x-layouts.partials.header />
        <x-layouts.partials.sidebar />
    </div>
    <!-- Page Wrapper -->
    <div id="page-wrapper"
        :class="sidebarIsOpen
            ? ''
            : 'min-[992px]:ml-[80px]'"
        class="ml-[252px] pt-[56px] relative left-0 transition-all duration-200 ease max-[991.98px]:m-0 max-[991.98px]:pt-[60px] min-h-[467px]">
        <!-- Content -->
        <div id="content" class="pt-[24px] px-[24px] pb-0 h-screen max-[991.98px]:pt-[15px] max-[991.98px]:px-[15px] bg-[#FBFBFD] max-[991.98px]:pb-[1.5rem] dark:bg-[#0F0C1C]">
            {{ $slot }}
        </div>
        <!-- /Content -->
    </div>
    <!-- /Page Wrapper -->
</div>
<!-- /Main Wrapper -->

</body>

</html>
