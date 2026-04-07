<div
    x-data="{ isOpen: false }"
    @toggle-chat.window="isOpen = !isOpen"
    class="fm-chat-panel-wrapper overflow-hidden h-full"
>
    <div
        class="fm-chat-panel"
        style="width: 350px"
        x-show="isOpen"
        x-cloak
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="translate-x-full"
        x-transition:enter-end="translate-x-0"
        x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="translate-x-0"
        x-transition:leave-end="translate-x-full"
    >
        <div class="p-4 bg-white dark:bg-gray-800 h-full">
            test
        </div>
    </div>
</div>
