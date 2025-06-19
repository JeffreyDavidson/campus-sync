<!-- Sidebar -->
<div id="sidebar"
    @mouseenter="sidebarIsHovered = true"
    @mouseleave="sidebarIsHovered = false"
    :class="(sidebarIsOpen || sidebarIsHovered)
        ? 'min-[992px]:w-[var(--sidebar-expanded)]'
        : 'min-[992px]:w-[var(--sidebar-collapsed)] sidebar-collapsed overflow-hidden'"
    class="transition-all duration-500 ease bg-white border-r border-solid border-[#E9EDF4] mt-0 z-[1001] fixed top-[56px] bottom-0 left-0 dark:bg-[#0F0C1C] dark:border-[#1B1632] max-[991.98px]:ml-[-575px] max-[991.98px]:z-[1041]"
>
    <div class="overflow-hidden w-full h-[407px]">
        <div id="sidebar-menu"
            class="p-[15px] dark:bg-[#0F0C1C]"
        >
            <ul>
                <li>
                    <x-sidebar.menu-heading>Main</x-sidebar.menu-heading>
                    <x-sidebar.sub-menu>
                        <x-sidebar.menu-item route="dashboard">Dashboard</x-sidebar.menu-item>
                    </x-sidebar.sub-menu>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- /Sidebar -->
