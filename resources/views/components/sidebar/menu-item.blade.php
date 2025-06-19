@props([
    'route' => '',
])

<li class="mb-[5px] overflow-hidden group">
    <a
        :class="[
            'flex items-center font-normal text-[14px] relative w-full p-2',
            '{{ request()->routeIs($route) ? 'rounded-[5px] text-[#3D5EE1] bg-[#F2F5FF] dark:text-[#3D5EE1] dark:bg-[#1B1632]' : 'text-[#6A7287] hover:text-[#3D5EE1] dark:text-[#B9B7C0] dark:hover:text-[#3D5EE1]' }}',
            (sidebarIsOpen || sidebarIsHovered) ? 'justify-start' : 'justify-start min-[992px]:justify-center'
        ]"
        href="{{ route($route) }}"
    >
        <i class="ti ti-layout-dashboard rounded-[5px] text-[16px] size-[24px] flex items-center justify-center dark:bg-[#1B1632] dark:text-[#B9B7C0] {{ request()->routeIs($route) ? 'bg-white text-[#3D5EE1]' : 'bg-[#F6F8FB] text-[#515B73]' }}"></i>
        <span
            :class="(sidebarIsOpen || sidebarIsHovered)
                ? 'min-[992px]:inline-block ml-[10px] opacity-100 w-auto'
                : 'min-[992px]:hidden] min-[992px]:opacity-0 min-[992px]:w-0'"
             class="text-sm font-normal whitespace-nowrap"
        >{{ $slot }}</span>
    </a>
</li>
