@props([
    'align' => 'right'
])

<div class="relative inline-flex" x-data="{ open: false }">
    <button
        class="w-8 h-8 flex items-center justify-center hover:bg-gray-100 lg:hover:bg-gray-200 dark:hover:bg-gray-700/50 dark:lg:hover:bg-gray-800 rounded-full"
        :class="{ 'bg-gray-200 dark:bg-gray-800': open }"
        aria-haspopup="true"
        @click.prevent="open = !open"
        :aria-expanded="open"                        
    >
        <span class="sr-only">Info</span>
        <svg class="fill-current text-gray-500/80 dark:text-gray-400/80" width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
            <path d="M9 7.5a1 1 0 1 0-2 0v4a1 1 0 1 0 2 0v-4ZM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0Z" />
            <path fill-rule="evenodd" d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16Zm6-8A6 6 0 1 1 2 8a6 6 0 0 1 12 0Z" />
        </svg>
    </button>
    <div
        class="origin-top-right z-10 absolute top-full min-w-44 bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700/60 py-1.5 rounded-lg shadow-lg overflow-hidden mt-1 {{$align === 'right' ? 'right-0' : 'left-0'}}"                
        @click.outside="open = false"
        @keydown.escape.window="open = false"
        x-show="open"
        x-transition:enter="transition ease-out duration-200 transform"
        x-transition:enter-start="opacity-0 -translate-y-2"
        x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-out duration-200"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        x-cloak                    
    >
        <div class="text-xs font-semibold text-gray-400 dark:text-gray-500 uppercase pt-1.5 pb-2 px-3">{{ __('ui.need_help') }}</div>
        <ul>
            <li>
                <a class="font-medium text-sm text-violet-500 hover:text-violet-600 dark:hover:text-violet-400 flex items-center py-1 px-3" href="#0" @click="open = false" @focus="open = true" @focusout="open = false">
                    <svg class="w-3 h-3 fill-current text-violet-500 shrink-0 mr-2" viewBox="0 0 12 12">
                        <rect y="3" width="12" height="9" rx="1" />
                        <path d="M2 0h8v2H2z" />
                    </svg>
                    <span>{{ __('ui.documentation') }}</span>
                </a>
            </li>
            <li>
                <a class="font-medium text-sm text-violet-500 hover:text-violet-600 dark:hover:text-violet-400 flex items-center py-1 px-3" href="#0" @click="open = false" @focus="open = true" @focusout="open = false">
                    <svg class="w-3 h-3 fill-current text-violet-500 shrink-0 mr-2" viewBox="0 0 12 12">
                        <path d="M10.5 0h-9A1.5 1.5 0 000 1.5v9A1.5 1.5 0 001.5 12h9a1.5 1.5 0 001.5-1.5v-9A1.5 1.5 0 0010.5 0zM10 7L8.207 5.207l-3 3-1.414-1.414 3-3L5 2h5v5z" />
                    </svg>
                    <span>{{ __('ui.support_site') }}</span>
                </a>
            </li>
            <li>
                <a class="font-medium text-sm text-violet-500 hover:text-violet-600 dark:hover:text-violet-400 flex items-center py-1 px-3" href="#0" @click="open = false" @focus="open = true" @focusout="open = false">
                    <svg class="w-3 h-3 fill-current text-violet-500 shrink-0 mr-2" viewBox="0 0 12 12">
                        <path d="M11.854.146a.5.5 0 00-.525-.116l-11 4a.5.5 0 00-.015.934l4.8 1.921 1.921 4.8A.5.5 0 007.5 12h.008a.5.5 0 00.462-.329l4-11a.5.5 0 00-.116-.525z" />
                    </svg>
                    <span>{{ __('ui.contact_us') }}</span>
                </a>
            </li>
        </ul>                
    </div>
</div>