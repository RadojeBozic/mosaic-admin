<div
    id="inbox-sidebar"
    class="absolute z-20 top-0 bottom-0 w-full md:w-auto md:static md:top-auto md:bottom-auto -mr-px md:translate-x-0 transition-transform duration-200 ease-in-out"
    :class="inboxSidebarOpen ? 'translate-x-0' : '-translate-x-full'"
    >
    <div class="sticky top-16 bg-white dark:bg-[#151D2C] overflow-x-hidden overflow-y-auto no-scrollbar shrink-0 border-r border-gray-200 dark:border-gray-700/60 md:w-[18rem] xl:w-[20rem] h-[calc(100dvh-64px)]">

        <!-- #Marketing group -->
        <div>
            <!-- Group header -->
            <div class="sticky top-0 z-10">
                <div class="flex items-center bg-white dark:bg-[#151D2C] border-b border-gray-200 dark:border-gray-700/60 px-5 h-16">
                    <div class="w-full flex items-center justify-between">
                        <!-- Channel menu -->
                        <div class="relative" x-data="{ open: false }">
                            <button
                                class="grow flex items-center truncate"
                                aria-haspopup="true"
                                @click.prevent="open = !open"
                                :aria-expanded="open"
                            >
                                <img class="w-8 h-8 rounded-full mr-2" src="{{ asset('images/channel-01.png') }}" width="32" height="32" alt="Group 01" />
                                <div class="truncate">
                                    <span class="font-semibold text-gray-800 dark:text-gray-100">#Marketing {{ __('ui.marketing') }}</span>
                                </div>
                                <svg class="w-3 h-3 shrink-0 ml-1 fill-current text-gray-400 dark:text-gray-500" viewBox="0 0 12 12">
                                    <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z" />
                                </svg>
                            </button>
                            <div
                                class="origin-top-right z-10 absolute top-full left-0 min-w-60 bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700/60 py-1.5 rounded-lg shadow-lg overflow-hidden mt-1"                
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
                                <ul>
                                    <li>
                                        <a class="font-medium text-sm text-gray-600 dark:text-gray-300 hover:text-gray-800 dark:hover:text-gray-200 block py-1.5 px-3" href="#0" @click="open = false" @focus="open = true" @focusout="open = false">
                                            <div class="flex items-center justify-between">
                                                <div class="grow flex items-center truncate">
                                                    <img class="w-7 h-7 rounded-full mr-2" src="{{ asset('images/channel-01.png') }}" width="28" height="28" alt="Channel 01" />
                                                    <div class="truncate">#{{ __('ui.marketing') }}</div>
                                                </div>
                                                <svg class="w-3 h-3 shrink-0 fill-current text-violet-500 ml-1" viewBox="0 0 12 12">
                                                    <path d="M10.28 1.28L3.989 7.575 1.695 5.28A1 1 0 00.28 6.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 1.28z" />
                                                </svg>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="font-medium text-sm text-gray-600 dark:text-gray-300 hover:text-gray-800 dark:hover:text-gray-200 block py-1.5 px-3" href="#0" @click="open = false" @focus="open = true" @focusout="open = false">
                                            <div class="flex items-center justify-between">
                                                <div class="grow flex items-center truncate">
                                                    <img class="w-7 h-7 rounded-full mr-2" src="{{ asset('images/channel-02.png') }}" width="28" height="28" alt="Channel 02" />
                                                    <div class="truncate">#{{ __('ui.developing') }}</div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="font-medium text-sm text-gray-600 dark:text-gray-300 hover:text-gray-800 dark:hover:text-gray-200 block py-1.5 px-3" href="#0" @click="open = false" @focus="open = true" @focusout="open = false">
                                            <div class="flex items-center justify-between">
                                                <div class="grow flex items-center truncate">
                                                    <img class="w-7 h-7 rounded-full mr-2" src="{{ asset('images/channel-03.png') }}" width="28" height="28" alt="Channel 03" />
                                                    <div class="truncate">#{{ __('ui.product_support') }}</div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Edit button -->
                        <button class="p-1.5 shrink-0 rounded-lg bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700/60 hover:border-gray-300 dark:hover:border-gray-600 shadow-xs ml-2">
                            <svg class="fill-current text-gray-400 dark:text-gray-500" width="16" height="16" viewBox="0 0 16 16">
                                <path d="M11.7.3c-.4-.4-1-.4-1.4 0l-10 10c-.2.2-.3.4-.3.7v4c0 .6.4 1 1 1h4c.3 0 .5-.1.7-.3l10-10c.4-.4.4-1 0-1.4l-4-4zM4.6 14H2v-2.6l6-6L10.6 8l-6 6zM12 6.6L9.4 4 11 2.4 13.6 5 12 6.6z" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Group body -->
            <div class="px-5 py-4">
                <!-- Search form -->
                <form class="relative">
                    <label for="inbox-search" class="sr-only">{{ __('ui.search') }}</label>
                    <input id="inbox-search" class="form-input w-full pl-9 bg-white dark:bg-gray-800" type="search" placeholder="{{ __('ui.search') }}…" />
                    <button class="absolute inset-0 right-auto group" type="submit" aria-label="{{ __('ui.search') }}">
                        <svg class="shrink-0 fill-current text-gray-400 dark:text-gray-500 group-hover:text-gray-500 dark:group-hover:text-gray-400 ml-3 mr-2" width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7 14c-3.86 0-7-3.14-7-7s3.14-7 7-7 7 3.14 7 7-3.14 7-7 7zM7 2C4.243 2 2 4.243 2 7s2.243 5 5 5 5-2.243 5-5-2.243-5-5-5z" />
                            <path d="M15.707 14.293L13.314 11.9a8.019 8.019 0 01-1.414 1.414l2.393 2.393a.997.997 0 001.414 0 .999.999 0 000-1.414z" />
                        </svg>
                    </button>
                </form>
                <!-- Tabs -->
                <div class="relative mt-4">
                    <div class="absolute bottom-0 w-full h-px bg-gray-200 dark:bg-gray-700/60" aria-hidden="true"></div>
                    <ul class="relative text-sm font-medium flex flex-nowrap -mx-4 sm:-mx-6 lg:-mx-8 overflow-x-scroll no-scrollbar">
                        <li class="mr-6 last:mr-0 first:pl-4 sm:first:pl-6 lg:first:pl-8 last:pr-4 sm:last:pr-6 lg:last:pr-8">
                            <a class="block pb-3 text-violet-500 whitespace-nowrap border-b-2 border-violet-500" href="#0"> {{ __('ui.primary') }}</a>
                        </li>
                        <li class="mr-6 last:mr-0 first:pl-4 sm:first:pl-6 lg:first:pl-8 last:pr-4 sm:last:pr-6 lg:last:pr-8">
                            <a class="block pb-3 text-gray-500 dark:text-gray-400 hover:text-gray-600 dark:hover:text-gray-300 whitespace-nowrap" href="#0">{{ __('ui.social') }}</a>
                        </li>
                        <li class="mr-6 last:mr-0 first:pl-4 sm:first:pl-6 lg:first:pl-8 last:pr-4 sm:last:pr-6 lg:last:pr-8">
                            <a class="block pb-3 text-gray-500 dark:text-gray-400 hover:text-gray-600 dark:hover:text-gray-300 whitespace-nowrap" href="#0">{{ __('ui.promotions') }}</a>
                        </li>
                    </ul>
                </div>
                <!-- Inbox -->
                <div class="mt-4">
                    <div class="text-xs font-semibold text-gray-400 dark:text-gray-500 uppercase mb-3">Inbox {{ __('ui.inbox') }}   (44)</div>
                    <ul class="mb-6">
                        <li class="-mx-2">
                            <button class="flex w-full p-2 rounded-lg bg-linear-to-r from-violet-500/[0.12] dark:from-violet-500/[0.24] to-violet-500/[0.04] text-left" @click="inboxSidebarOpen = false">
                                <img class="w-8 h-8 rounded-full mr-2" src="{{ asset('images/user-32-01.jpg') }}" width="32" height="32" alt="User 01" />
                                <div class="grow truncate">
                                    <div class="flex items-center justify-between mb-1.5">
                                        <div class="truncate">
                                            <span class="text-sm font-semibold text-gray-800 dark:text-gray-100">Dominik Lamakani</span>
                                        </div>
                                        <div class="text-xs text-gray-500 font-medium">4 Aug </div>
                                    </div>
                                    <div class="text-xs font-medium text-gray-800 dark:text-gray-100 truncate mb-0.5">Chill your mind with this amazing offer 🎉</div>
                                    <div class="text-xs whitespace-normal">Lorem ipsum dolor sit amet, consecte adipiscing elit aute irure dolor…</div>
                                </div>
                            </button>
                        </li>
                        <li class="-mx-2">
                            <button class="flex w-full p-2 rounded-sm text-left" @click="inboxSidebarOpen = false">
                                <img class="w-8 h-8 rounded-full mr-2" src="{{ asset('images/user-32-05.jpg') }}" width="32" height="32" alt="User 05" />
                                <div class="grow truncate">
                                    <div class="flex items-center justify-between mb-1.5">
                                        <div class="truncate">
                                            <span class="text-sm font-semibold text-gray-800 dark:text-gray-100">Simona Lürwer</span>
                                        </div>
                                        <div class="text-xs text-gray-500 font-medium">4 Aug</div>
                                    </div>
                                    <div class="text-xs font-medium text-gray-800 dark:text-gray-100 truncate mb-0.5">🙌 Help us improve Mosaic by giving…</div>
                                    <div class="text-xs whitespace-normal">Lorem ipsum dolor sit amet, consecte adipiscing elit aute irure dolor…</div>
                                </div>
                            </button>
                        </li>
                        <li class="-mx-2">
                            <button class="flex w-full p-2 rounded-sm text-left" @click="inboxSidebarOpen = false">
                                <img class="w-8 h-8 rounded-full mr-2" src="{{ asset('images/user-32-06.jpg') }}" width="32" height="32" alt="User 05" />
                                <div class="grow truncate">
                                    <div class="flex items-center justify-between mb-1.5">
                                        <div class="truncate">
                                            <span class="text-sm font-semibold text-gray-800 dark:text-gray-100">Mary Roszczewski</span>
                                        </div>
                                        <div class="text-xs text-gray-500 font-medium">1 Aug</div>
                                    </div>
                                    <div class="text-xs font-medium text-gray-800 dark:text-gray-100 truncate mb-0.5">[Urgent] Changes to links for public…</div>
                                    <div class="text-xs whitespace-normal">👋 Lorem ipsum dolor sit amet, consecte adipiscing elit aute irure dolor…</div>
                                </div>
                            </button>
                        </li>
                        <li class="-mx-2">
                            <button class="flex w-full p-2 rounded-sm text-left" @click="inboxSidebarOpen = false">
                                <img class="w-8 h-8 rounded-full mr-2" src="{{ asset('images/user-32-04.jpg') }}" width="32" height="32" alt="User 05" />
                                <div class="grow truncate">
                                    <div class="flex items-center justify-between mb-1.5">
                                        <div class="truncate">
                                            <span class="text-sm font-semibold text-gray-800 dark:text-gray-100">Adrian Przetocki</span>
                                        </div>
                                        <div class="text-xs text-gray-500 font-medium">1 Aug</div>
                                    </div>
                                    <div class="text-xs font-medium text-gray-800 dark:text-gray-100 truncate mb-0.5">🙌 Help us improve Mosaic by giving…</div>
                                    <div class="text-xs whitespace-normal">Lorem ipsum dolor sit amet, consecte adipiscing elit aute irure dolor…</div>
                                </div>
                            </button>
                        </li>
                        <li class="-mx-2">
                            <button class="flex w-full p-2 rounded-sm text-left" @click="inboxSidebarOpen = false">
                                <img class="w-8 h-8 rounded-full mr-2" src="{{ asset('images/user-32-02.jpg') }}" width="32" height="32" alt="User 05" />
                                <div class="grow truncate">
                                    <div class="flex items-center justify-between mb-1.5">
                                        <div class="truncate">
                                            <span class="text-sm font-semibold text-gray-800 dark:text-gray-100">Tisha Yanchev</span>
                                        </div>
                                        <div class="text-xs text-gray-500 font-medium">1 Aug</div>
                                    </div>
                                    <div class="text-xs font-medium text-gray-800 dark:text-gray-100 truncate mb-0.5">Re: Here’s an extra 25% OFF 🎉</div>
                                    <div class="text-xs whitespace-normal">Excepteur sint occaecat cupidatat non proident sunt in culpa qui deserunt…</div>
                                </div>
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</div>