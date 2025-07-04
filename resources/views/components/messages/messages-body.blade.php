<div 
    class="grow flex flex-col md:translate-x-0 duration-300 ease-in-out"
    :class="msgSidebarOpen ? 'translate-x-1/3' : 'translate-x-0'"
>

    <!-- Header -->
    <div class="sticky top-16">
        <div class="flex items-center justify-between before:absolute before:inset-0 before:backdrop-blur-md before:bg-gray-50/90 dark:before:bg-[#151D2C]/90 before:-z-10 border-b border-gray-200 dark:border-gray-700/60 px-4 sm:px-6 md:px-5 h-16">
            <!-- People -->
            <div class="flex items-center">
                <!-- Close button -->
                <button
                    class="md:hidden text-gray-400 hover:text-gray-500 mr-4"
                    @click.stop="msgSidebarOpen = !msgSidebarOpen"
                    aria-controls="messages-sidebar"
                    :aria-expanded="msgSidebarOpen"
                >
                    <span class="sr-only">{{ __('ui.close_sidebar') }} </span>
                    <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10.7 18.7l1.4-1.4L7.8 13H20v-2H7.8l4.3-4.3-1.4-1.4L4 12z" />
                    </svg>
                </button>
                <!-- People list -->
                <div class="flex -space-x-3 -ml-px">
                    <a class="block" href="#0">
                        <img class="rounded-full border-2 border-white dark:border-gray-800 box-content" src="{{ asset('images/user-32-01.jpg') }}" width="32" height="32" alt="User 01" />
                    </a>
                    <a class="block" href="#0">
                        <img class="rounded-full border-2 border-white dark:border-gray-800 box-content" src="{{ asset('images/user-32-07.jpg') }}" width="32" height="32" alt="User 04" />
                    </a>
                </div>
            </div>
            <!-- Buttons on the right side -->
            <div class="flex">
                <button class="p-1.5 shrink-0 rounded-lg bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700/60 hover:border-gray-300 dark:hover:border-gray-600 shadow-xs ml-2">
                    <svg class="fill-current text-gray-400 dark:text-gray-500" width="16" height="16" viewBox="0 0 16 16">
                        <path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm0 12c-.6 0-1-.4-1-1s.4-1 1-1 1 .4 1 1-.4 1-1 1zm1-3H7V4h2v5z" />
                    </svg>
                </button>
                <button class="p-1.5 shrink-0 rounded-lg bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700/60 hover:border-gray-300 dark:hover:border-gray-600 shadow-xs ml-2">
                    <svg class="fill-current text-violet-500" width="16" height="16" viewBox="0 0 16 16">
                        <path d="M14.3 2.3L5 11.6 1.7 8.3c-.4-.4-1-.4-1.4 0-.4.4-.4 1 0 1.4l4 4c.2.2.4.3.7.3.3 0 .5-.1.7-.3l10-10c.4-.4.4-1 0-1.4-.4-.4-1-.4-1.4 0z" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Body -->
    <div class="grow px-4 sm:px-6 md:px-5 py-6">
        <!-- Chat msg -->
        <div class="flex items-start mb-4 last:mb-0">
            <img class="rounded-full mr-4" src="{{ asset('images/user-40-11.jpg') }}" width="40" height="40" alt="User 01" />
            <div>
                <div class="text-sm bg-gray-200 dark:bg-gray-800 text-gray-800 dark:text-gray-100 p-3 rounded-lg rounded-tl-none mb-1">
                    Can anyone help? I have a question about Acme Professional
                </div>
                <div class="flex items-center justify-between">
                    <div class="text-xs text-gray-500 font-medium">2:40 PM</div>
                </div>
            </div>
        </div>
        <!-- Chat msg -->
        <div class="flex items-start mb-4 last:mb-0">
            <img class="rounded-full mr-4" src="{{ asset('images/user-40-12.jpg') }}" width="40" height="40" alt="User 02" />
            <div>
                <div class="text-sm bg-violet-500 text-white p-3 rounded-lg rounded-tl-none border border-transparent mb-1">
                    Hey Dominik Lamakani 👋<br />
                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est 🙌
                </div>
                <div class="flex items-center justify-between">
                    <div class="text-xs text-gray-500 font-medium">2:40 PM</div>
                    <svg class="w-5 h-3 shrink-0 fill-current text-green-500"  viewBox="0 0 20 12">
                        <path d="M10.402 6.988l1.586 1.586L18.28 2.28a1 1 0 011.414 1.414l-7 7a1 1 0 01-1.414 0L8.988 8.402l-2.293 2.293a1 1 0 01-1.414 0l-3-3A1 1 0 013.695 6.28l2.293 2.293L12.28 2.28a1 1 0 011.414 1.414l-3.293 3.293z" />
                    </svg>
                </div>
            </div>
        </div>
        <!-- Chat msg -->
        <div class="flex items-start mb-4 last:mb-0">
            <img class="rounded-full mr-4" src="{{ asset('images/user-40-11.jpg') }}" width="40" height="40" alt="User 01" />
            <div>
                <div class="flex items-center">
                    <img class="rounded-lg shadow-xs mb-1" src="{{ asset('images/chat-image.jpg') }}" width="240" height="180" alt="Chat image" />
                    <button class="p-1.5 rounded-full border border-gray-200 dark:border-gray-700/60 ml-4 hover:bg-white dark:hover:bg-gray-800 transition">
                        <span class="sr-only">Download {{ __('ui.download') }}</span>
                        <svg class="shrink-0 fill-current text-gray-400 dark:text-gray-500" width="16" height="16" viewBox="0 0 16 16">
                            <path d="M15 15H1a1 1 0 01-1-1V2a1 1 0 011-1h4v2H2v10h12V3h-3V1h4a1 1 0 011 1v12a1 1 0 01-1 1zM9 7h3l-4 4-4-4h3V1h2v6z" />
                        </svg>
                    </button>
                </div>
                <div class="flex items-center justify-between">
                    <div class="text-xs text-gray-500 font-medium">2:48 PM</div>
                </div>
            </div>
        </div>
        <!-- Chat msg -->
        <div class="flex items-start mb-4 last:mb-0">
            <img class="rounded-full mr-4" src="{{ asset('images/user-40-11.jpg') }}" width="40" height="40" alt="User 01" />
            <div>
                <div class="text-sm bg-gray-200 dark:bg-gray-800 text-gray-800 dark:text-gray-100 p-3 rounded-lg rounded-tl-none mb-1">
                    What do you think? Duis aute irure dolor in reprehenderit  🔥
                </div>
                <div class="flex items-center justify-between">
                    <div class="text-xs text-gray-500 font-medium">2:48 PM</div>
                </div>
            </div>
        </div>
        <!-- Chat msg -->
        <div class="flex items-start mb-4 last:mb-0">
            <img class="rounded-full mr-4" src="{{ asset('images/user-40-12.jpg') }}" width="40" height="40" alt="User 02" />
            <div>
                <div class="text-sm bg-violet-500 text-white p-3 rounded-lg rounded-tl-none border border-transparent mb-1">
                    Sed euismod nisi porta lorem mollis. Tellus elementum sagittis vitae et leo duis. Viverra justo nec ultrices dui.<br />
                    Sed lectus vestibulum mattis ullamcorper velit sed. Ut sem nulla pharetra diam sit amet 🎁
                </div>
                <div class="flex items-center justify-between">
                    <div class="text-xs text-gray-500 font-medium">2:55 PM</div>
                    <svg class="w-3 h-3 shrink-0 fill-current text-gray-400" viewBox="0 0 12 12">
                        <path d="M10.28 1.28L3.989 7.575 1.695 5.28A1 1 0 00.28 6.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 1.28z" />
                    </svg>
                </div>
            </div>
        </div>
        <!-- Date separator -->
        <div class="flex justify-center">
            <div class="inline-flex items-center justify-center text-xs text-gray-600 dark:text-gray-400 font-medium px-2.5 py-1 bg-white dark:bg-gray-700 shadow-xs rounded-full my-5">
                Tuesday, 20 January
            </div>
        </div>
        <!-- Chat msg -->
        <div class="flex items-start mb-4 last:mb-0">
            <img class="rounded-full mr-4" src="{{ asset('images/user-40-12.jpg') }}" width="40" height="40" alt="User 02" />
            <div>
                <div class="text-sm bg-violet-500 text-white p-3 rounded-lg rounded-tl-none border border-transparent mb-1">
                    Can you join <a class="font-medium" href="#0">@dominik</a>? <a class="underline" href="#0">https://meet.google.com/haz-r3gt-idj</a>
                </div>
                <div class="flex items-center justify-between">
                    <div class="text-xs text-gray-500 font-medium">10:15 AM</div>
                    <svg class="w-3 h-3 shrink-0 fill-current text-gray-400" viewBox="0 0 12 12">
                        <path d="M10.28 1.28L3.989 7.575 1.695 5.28A1 1 0 00.28 6.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 1.28z" />
                    </svg>
                </div>
            </div>
        </div>
        <!-- Chat msg -->
        <div class="flex items-start mb-4 last:mb-0">
            <img class="rounded-full mr-4" src="{{ asset('images/user-40-11.jpg') }}" width="40" height="40" alt="User 01" />
            <div>
                <div class="text-sm bg-gray-200 dark:bg-gray-800 text-gray-800 dark:text-gray-100 p-3 rounded-lg rounded-tl-none mb-1">
                    <svg class="fill-current text-gray-400 dark:text-gray-500" viewBox="0 0 15 3" width="15" height="3">
                        <circle cx="1.5" cy="1.5" r="1.5">
                            <animate attributeName="opacity" dur="1s" values="0;1;0" repeatCount="indefinite" begin="0.1" />
                        </circle>
                        <circle cx="7.5" cy="1.5" r="1.5">
                            <animate attributeName="opacity" dur="1s" values="0;1;0" repeatCount="indefinite" begin="0.2" />
                        </circle>
                        <circle cx="13.5" cy="1.5" r="1.5">
                            <animate attributeName="opacity" dur="1s" values="0;1;0" repeatCount="indefinite" begin="0.3" />
                        </circle>
                    </svg>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div class="sticky bottom-0">
        <div class="flex items-center justify-between bg-white dark:bg-gray-900 border-t border-gray-200 dark:border-gray-700/60 px-4 sm:px-6 md:px-5 h-16">
            <!-- Plus button -->
            <button class="shrink-0 text-gray-400 dark:text-gray-500 hover:text-gray-500 dark:hover:text-gray-400 mr-3">
                <span class="sr-only">{{ __('ui.add') }}</span>
                <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24">
                    <path d="M12 0C5.373 0 0 5.373 0 12s5.373 12 12 12 12-5.373 12-12C23.98 5.38 18.62.02 12 0zm6 13h-5v5h-2v-5H6v-2h5V6h2v5h5v2z" />
                </svg>
            </button>
            <!-- Message input -->
            <form class="grow flex">
                <div class="grow mr-3">
                    <label for="message-input" class="sr-only">Type a message {{ __('ui.type_a_message') }}</label>
                    <input id="message-input" class="form-input w-full bg-gray-100 dark:bg-gray-800 border-transparent dark:border-transparent focus:bg-white dark:focus:bg-gray-800 placeholder-gray-500" type="text" placeholder="Aa" />
                </div>
                <button type="submit" class="btn bg-gray-900 text-gray-100 hover:bg-gray-800 dark:bg-gray-100 dark:text-gray-800 dark:hover:bg-white whitespace-nowrap">Send -&gt;</button>
            </form>
        </div>
    </div>

</div>