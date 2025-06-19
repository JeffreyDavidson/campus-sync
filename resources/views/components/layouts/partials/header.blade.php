<!-- Header -->
<div class="flex items-center h-[56px] z-[999] bg-white fixed top-0 right-0 left-0 border-b border-solid border-[#E9EDF4] transition-all duration-500 ease dark:bg-[#0F0C1C] dark:border-[#1B1632]">
    <!-- Logo -->
    <div
        id="logo"
        @mouseenter="sidebarIsHovered = true"
        @mouseleave="sidebarIsHovered = false"
        :class="(sidebarIsOpen || sidebarIsHovered)
            ? 'justify-between px-[15px] w-[var(--sidebar-expanded)]'
            : 'min-[992px]:flex min-[992px]:justify-center w-[var(--sidebar-collapsed)] min-[992px]:p-[0px] min-[992px]:flex-col'"
        class="flex items-center text-center h-[56px] bg-white px-[15px] relative float-left z-[1] transition-all duration-500 ease-in-out border-r border-solid border-[#E9EDF4] dark:bg-[#0F0C1C] dark:border-[#1B1632] max-[991.98px]:absolute max-[991.98px]:w-full"
    >
        <a id="normal-logo"
            :class="(sidebarIsOpen || sidebarIsHovered) ? 'min-[992px]:block' : 'min-[992px]:hidden'"
            class="inline-block leading-[0] max-[991.98px]:text-center max-[991.98px]:w-full dark:hidden" href="{{ route('dashboard') }}"
        >
            <img class="inline-block leading-none w-[130px] max-[991.98px]:w-[140px] dark:hidden" src="{{ Vite::asset('resources/images/logo.svg') }}" alt="Logo">
        </a>

        <a id="small-logo"
            :class="[
                (sidebarIsOpen || sidebarIsHovered)
                    ? 'hidden'
                    : 'hidden min-[992px]:block min-[992px]:pt-[10px]'
            ]"
            href="{{ route('dashboard') }}" class="logo logo-normal"
        >
            <img class="w-[30px]" src="{{ Vite::asset('resources/images/logo-small.svg') }}" alt="Logo">
        </a>

        <a id="dark-logo"
            :class="[
                'logo logo-normal',
                (sidebarIsOpen || sidebarIsHovered)
                    ? 'leading-[0] dark:max-[991.98px]:text-center dark:max-[991.98px]:w-full dark:min-[992px]:block]'
                    : 'dark:min-[992px]:hidden'
            ]"
            href="{{ route('dashboard') }}"
        >
            <img class="hidden dark:inline-block dark:w-[130px] dark:max-[991.98px]:w-[140px]" src="{{ Vite::asset('resources/images/logo-dark.svg') }}" alt="Logo">
        </a>

        <a
            id="toggle_btn""
            x-data="{ rotated: false }"
            @click="rotated = !rotated; sidebarIsOpen = !sidebarIsOpen"
            href="#"
            :class="[
                (sidebarIsOpen || sidebarIsHovered) ? '' : 'opacity-[0] h-0 w-0',
                rotated ? '-rotate-[180deg] transition-all duration-500 ease-in-out' : '-rotate-[360deg] transition-all duration-500 ease-in-out',
                'text-[#202C4B] min-[992px]:text-[18px] min-[992px]:p-[4px] min-[992px]:rounded-[6px] min-[992px]:flex min-[992px]:items-center max-[991.98px]:hidden dark:text-[#B9B7C0] hover:text-[#3D5EE1]'
            ]">
            <i class="ti ti-menu-deep"></i>
        </a>
    </div>
    <!-- /Logo -->

    <a id="mobile_btn" class="hidden float-left max-[991.98px]:text-[#3D5EE1] max-[991.98px]:text-[24px] max-[991.98px]:size-[60px] max-[991.98px]:leading-[60px] max-[991.98px]:z-10 max-[991.98px]:px-[20px] max-[991.98px]:absolute max-[991.98px]:top-0 max-[991.98px]:left-0 max-[991.98px]:block" href="#sidebar">
        <span class="inline-block w-[31px] mt-[20px]">
            <span class="bg-[#3D5EE1] block float-left h-[3px] mb-[7px] w-[31px] rounded-[2px] transition-all duration-500 ease-in-out'"></span>
            <span class="bg-[#3D5EE1] block float-left h-[3px] mb-[7px] rounded-[2px] transition-all duration-500 ease w-[16px]"></span>
            <span class="bg-[#3D5EE1] block float-left h-[3px] mb-[7px] w-[31px] rounded-[2px] transition-all duration-500 ease"></span>
        </span>
    </a>

    <div id="top-bar" class="py-[15px] px-[24px] contents">
        <div class="flex flex-wrap items-center justify-center m-0 relative h-full border-b-0 px-[24px] transition-all duration-500 ease">
            <div id="top-bar-left" class="me-[.5rem] mr-auto">
                <div></div>
            </div>
            <div id="top-bar-right" class="flex items-center">
                <div>
                    <a href="#" id="dark-mode-toggle" @click="theme = 'dark'" class="block size-[2.313rem] text-[.95rem] rounded-[5px] py-[.5rem] px-[.85rem] text-center transition-all duration-500 font-medium border border-solid border-[#E9EDF4] text-[#515B73] bg-white mr-[.25rem] hover:bg-[#E9EDF4] hover:border-[#E9EDF4] hover:text-[#515B73] dark:hidden">
                        <i class="ti ti-moon p-0 m-[-.5rem]"></i>
                    </a>
                    <a href="#" id="light-mode-toggle" @click="theme = 'light'" class="hidden dark:block dark:size-[2.313rem] dark:text-[.95rem] dark:rounded-[5px] dark:py-[.5rem] dark:text-center dark:px-[.85rem] dark:transition-all dark:duration-500 dark:font-medium dark:border dark:border-solid dark:border-[#1B1632] dark:text-[#B9B7C0] dark:bg-[#131022] dark:mr-[.25rem]">
                        <i class="ti ti-brightness-up p-0 m-[-.5rem] dark:text-[#B9B7C0]"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Header -->
