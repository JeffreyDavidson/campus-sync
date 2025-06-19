<h6
    :class="[
        sidebarIsOpen
            ? 'min-[992px]:text-[12px]'
            : 'min-[992px]:after:ml-0',
    ]"
    class="font-semibold text-[#9CA1AF] mb-[14px] uppercase relative flex items-center after:content-[''] after:w-full after:h-[1px] after:bg-[#E9EDF4] after:ml-[8px] dark:after:bg-[#1B1632]">
    <span :class="(sidebarIsOpen || sidebarIsHovered)
      ? 'inline-block opacity-100 w-auto'
      : 'min-[992px]:hidden'"
    class="shrink-0 transition-all duration-300 ease-in-out">{{ $slot }}</span>
</h6>
