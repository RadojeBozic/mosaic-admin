<x-app-layout background="bg-white dark:bg-gray-900" headerVariant="v3" sidebarVariant="v2">
    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-[96rem] mx-auto">

        <!-- Page header -->
        <div class="mb-8">
            <h1 class="text-2xl md:text-3xl text-gray-800 dark:text-gray-100 font-bold">Modal</h1>
        </div>

        <div>

            <!-- Components -->
            <div class="space-y-8 mt-8">
            
                <!-- Basic -->
                <div>
                    <h2 class="text-2xl text-gray-800 dark:text-gray-100 font-bold mb-6">Basic</h2>
                    <div class="flex flex-wrap items-center -m-1.5">

                        <!-- Basic Modal -->
                        <div class="m-1.5">
                            <!-- Start -->
                            <div x-data="{ modalOpen: false }">
                                <button
                                    class="btn bg-gray-900 text-gray-100 hover:bg-gray-800 dark:bg-gray-100 dark:text-gray-800 dark:hover:bg-white"
                                    @click.prevent="modalOpen = true"
                                    aria-controls="basic-modal"
                                >Basic Modal</button>
                                <!-- Modal backdrop -->
                                <div
                                    class="fixed inset-0 bg-gray-900/30 z-50 transition-opacity"
                                    x-show="modalOpen"
                                    x-transition:enter="transition ease-out duration-200"
                                    x-transition:enter-start="opacity-0"
                                    x-transition:enter-end="opacity-100"
                                    x-transition:leave="transition ease-out duration-100"
                                    x-transition:leave-start="opacity-100"
                                    x-transition:leave-end="opacity-0"
                                    aria-hidden="true"
                                    x-cloak
                                ></div>
                                <!-- Modal dialog -->
                                <div
                                    id="basic-modal"
                                    class="fixed inset-0 z-50 overflow-hidden flex items-center my-4 justify-center px-4 sm:px-6"
                                    role="dialog"
                                    aria-modal="true"
                                    x-show="modalOpen"
                                    x-transition:enter="transition ease-in-out duration-200"
                                    x-transition:enter-start="opacity-0 translate-y-4"
                                    x-transition:enter-end="opacity-100 translate-y-0"
                                    x-transition:leave="transition ease-in-out duration-200"
                                    x-transition:leave-start="opacity-100 translate-y-0"
                                    x-transition:leave-end="opacity-0 translate-y-4"
                                    x-cloak
                                >
                                    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg overflow-auto max-w-lg w-full max-h-full" @click.outside="modalOpen = false" @keydown.escape.window="modalOpen = false">
                                        <!-- Modal header -->
                                        <div class="px-5 py-3 border-b border-gray-200 dark:border-gray-700/60">
                                            <div class="flex justify-between items-center">
                                                <div class="font-semibold text-gray-800 dark:text-gray-100">Basic Modal</div>
                                                <button class="text-gray-400 dark:text-gray-500 hover:text-gray-500 dark:hover:text-gray-400" @click="modalOpen = false">
                                                    <div class="sr-only">Close</div>
                                                    <svg class="fill-current" width="16" height="16" viewBox="0 0 16 16">
                                                        <path d="M7.95 6.536l4.242-4.243a1 1 0 111.415 1.414L9.364 7.95l4.243 4.242a1 1 0 11-1.415 1.415L7.95 9.364l-4.243 4.243a1 1 0 01-1.414-1.415L6.536 7.95 2.293 3.707a1 1 0 011.414-1.414L7.95 6.536z" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                        <!-- Modal content -->
                                        <div class="px-5 pt-4 pb-1">
                                            <div class="text-sm">
                                                <div class="font-medium text-gray-800 dark:text-gray-100 mb-2">Let’s Talk Paragraph</div>
                                                <div class="space-y-2">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Modal footer -->
                                        <div class="px-5 py-4">
                                            <div class="flex flex-wrap justify-end space-x-2">
                                                <button class="btn-sm border-gray-200 dark:border-gray-700/60 hover:border-gray-300 dark:hover:border-gray-600 text-gray-800 dark:text-gray-300" @click="modalOpen = false">Close</button>
                                                <button class="btn-sm bg-gray-900 text-gray-100 hover:bg-gray-800 dark:bg-gray-100 dark:text-gray-800 dark:hover:bg-white">I Understand</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>                                            
                            </div>
                            <!-- End -->
                        </div>

                        <!-- Modal w/ Scroll Bar -->
                        <div class="m-1.5">
                            <!-- Start -->
                            <div x-data="{ modalOpen: false }">
                                <button
                                    class="btn bg-gray-900 text-gray-100 hover:bg-gray-800 dark:bg-gray-100 dark:text-gray-800 dark:hover:bg-white"
                                    @click.prevent="modalOpen = true"
                                    aria-controls="scrollbar-modal"
                                >Modal w/ Scroll Bar</button>
                                <!-- Modal backdrop -->
                                <div
                                    class="fixed inset-0 bg-gray-900/30 z-50 transition-opacity"
                                    x-show="modalOpen"
                                    x-transition:enter="transition ease-out duration-200"
                                    x-transition:enter-start="opacity-0"
                                    x-transition:enter-end="opacity-100"
                                    x-transition:leave="transition ease-out duration-100"
                                    x-transition:leave-start="opacity-100"
                                    x-transition:leave-end="opacity-0"
                                    aria-hidden="true"
                                    x-cloak
                                ></div>
                                <!-- Modal dialog -->
                                <div
                                    id="scrollbar-modal"
                                    class="fixed inset-0 z-50 overflow-hidden flex items-center my-4 justify-center px-4 sm:px-6"
                                    role="dialog"
                                    aria-modal="true"
                                    x-show="modalOpen"
                                    x-transition:enter="transition ease-in-out duration-200"
                                    x-transition:enter-start="opacity-0 translate-y-4"
                                    x-transition:enter-end="opacity-100 translate-y-0"
                                    x-transition:leave="transition ease-in-out duration-200"
                                    x-transition:leave-start="opacity-100 translate-y-0"
                                    x-transition:leave-end="opacity-0 translate-y-4"
                                    x-cloak
                                >
                                    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg overflow-auto max-w-lg w-full max-h-[400px]" @click.outside="modalOpen = false" @keydown.escape.window="modalOpen = false">
                                        <!-- Modal header -->
                                        <div class="sticky top-0 px-5 py-3 bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700/60">
                                            <div class="flex justify-between items-center">
                                                <div class="font-semibold text-gray-800 dark:text-gray-100">Modal w/ Scroll Bar</div>
                                                <button class="text-gray-400 dark:text-gray-500 hover:text-gray-500 dark:hover:text-gray-400" @click="modalOpen = false">
                                                    <div class="sr-only">Close</div>
                                                    <svg class="fill-current" width="16" height="16" viewBox="0 0 16 16">
                                                        <path d="M7.95 6.536l4.242-4.243a1 1 0 111.415 1.414L9.364 7.95l4.243 4.242a1 1 0 11-1.415 1.415L7.95 9.364l-4.243 4.243a1 1 0 01-1.414-1.415L6.536 7.95 2.293 3.707a1 1 0 011.414-1.414L7.95 6.536z" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                        <!-- Modal content -->
                                        <div class="px-5 py-4">
                                            <div class="text-sm">
                                                <div class="font-medium text-gray-800 dark:text-gray-100 mb-2">Let’s Talk Paragraph</div>
                                                <div class="space-y-2">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                    <p>Ullamcorper malesuada proin libero nunc consequat interdum varius sit. Nec sagittis aliquam malesuada bibendum arcu vitae elementum curabitur vitae. Mattis enim ut tellus elementum el fringilla est ullamcorper eget nulla. Enim eu turpis egestas pretium aenean pharetra magna. Aliquam id diam maecenas ultricies mi eget us mauris vitae ultricies leo integer t malesuada fames ac turpis egestas maecenas pharetra volutpat lacus laoreet non.</p>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                    <p>Ullamcorper malesuada proin libero nunc consequat interdum varius sit. Nec sagittis aliquam malesuada bibendum arcu vitae elementum curabitur vitae. Mattis enim ut tellus elementum el fringilla est ullamcorper eget nulla. Enim eu turpis egestas pretium aenean pharetra magna. Aliquam id diam maecenas ultricies mi eget us mauris vitae ultricies leo integer t malesuada fames ac turpis egestas maecenas pharetra volutpat lacus laoreet non.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Modal footer -->
                                        <div class="sticky bottom-0 px-5 py-4 bg-white dark:bg-gray-800 border-t border-gray-200 dark:border-gray-700/60">
                                            <div class="flex flex-wrap justify-end space-x-2">
                                                <button class="btn-sm border-gray-200 dark:border-gray-700/60 hover:border-gray-300 dark:hover:border-gray-600 text-gray-800 dark:text-gray-300" @click="modalOpen = false">Close</button>
                                                <button class="btn-sm bg-gray-900 text-gray-100 hover:bg-gray-800 dark:bg-gray-100 dark:text-gray-800 dark:hover:bg-white">I Understand</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>                                            
                            </div>
                            <!-- End -->
                        </div>

                        <!-- Cookies -->
                        <div class="m-1.5">
                            <!-- Start -->
                            <div x-data="{ modalOpen: false }">
                                <button
                                    class="btn bg-gray-900 text-gray-100 hover:bg-gray-800 dark:bg-gray-100 dark:text-gray-800 dark:hover:bg-white"
                                    @click.prevent="modalOpen = true"
                                    aria-controls="cookies-modal"
                                >Cookies</button>
                                <!-- Modal backdrop -->
                                <div
                                    class="fixed inset-0 bg-gray-900/30 z-50 transition-opacity"
                                    x-show="modalOpen"
                                    x-transition:enter="transition ease-out duration-200"
                                    x-transition:enter-start="opacity-0"
                                    x-transition:enter-end="opacity-100"
                                    x-transition:leave="transition ease-out duration-100"
                                    x-transition:leave-start="opacity-100"
                                    x-transition:leave-end="opacity-0"
                                    aria-hidden="true"
                                    x-cloak
                                ></div>
                                <!-- Modal dialog -->
                                <div
                                    id="cookies-modal"
                                    class="fixed inset-0 z-50 overflow-hidden flex items-center my-4 justify-center px-4 sm:px-6"
                                    role="dialog"
                                    aria-modal="true"
                                    x-show="modalOpen"
                                    x-transition:enter="transition ease-in-out duration-200"
                                    x-transition:enter-start="opacity-0 translate-y-4"
                                    x-transition:enter-end="opacity-100 translate-y-0"
                                    x-transition:leave="transition ease-in-out duration-200"
                                    x-transition:leave-start="opacity-100 translate-y-0"
                                    x-transition:leave-end="opacity-0 translate-y-4"
                                    x-cloak
                                >
                                    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg overflow-auto max-w-lg w-full max-h-full" @click.outside="modalOpen = false" @keydown.escape.window="modalOpen = false">
                                        <div class="p-5">
                                            <!-- Modal header -->
                                            <div class="mb-2">
                                                <div class="flex justify-between items-center">
                                                    <div class="text-lg font-semibold text-gray-800 dark:text-gray-100">We use cookies 🍪</div>
                                                    <button class="text-gray-400 dark:text-gray-500 hover:text-gray-500 dark:hover:text-gray-400" @click="modalOpen = false">
                                                        <div class="sr-only">Close</div>
                                                        <svg class="fill-current" width="16" height="16" viewBox="0 0 16 16">
                                                            <path d="M7.95 6.536l4.242-4.243a1 1 0 111.415 1.414L9.364 7.95l4.243 4.242a1 1 0 11-1.415 1.415L7.95 9.364l-4.243 4.243a1 1 0 01-1.414-1.415L6.536 7.95 2.293 3.707a1 1 0 011.414-1.414L7.95 6.536z" />
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                            <!-- Modal content -->
                                            <div class="text-sm mb-5">
                                                <div class="space-y-2">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                </div>
                                            </div>
                                            <!-- Modal footer -->
                                            <div class="flex flex-wrap justify-end space-x-2">
                                                <button class="btn-sm border-gray-200 dark:border-gray-700/60 hover:border-gray-300 dark:hover:border-gray-600 text-gray-800 dark:text-gray-300" @click="modalOpen = false">Decline</button>
                                                <button class="btn-sm bg-gray-900 text-gray-100 hover:bg-gray-800 dark:bg-gray-100 dark:text-gray-800 dark:hover:bg-white" @click="modalOpen = false">I Accept</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>                                            
                            </div>
                            <!-- End -->
                        </div>                                    

                    </div>
                </div>

                <!-- Feedback -->
                <div>
                    <h2 class="text-2xl text-gray-800 dark:text-gray-100 font-bold mb-6">Feedback</h2>
                    <div class="flex flex-wrap items-center -m-1.5">

                        <!-- Success Modal -->
                        <div class="m-1.5">
                            <!-- Start -->
                            <div x-data="{ modalOpen: false }">
                                <button
                                    class="btn bg-gray-900 text-gray-100 hover:bg-gray-800 dark:bg-gray-100 dark:text-gray-800 dark:hover:bg-white"
                                    @click.prevent="modalOpen = true"
                                    aria-controls="success-modal"
                                >Success Modal</button>
                                <!-- Modal backdrop -->
                                <div
                                    class="fixed inset-0 bg-gray-900/30 z-50 transition-opacity"
                                    x-show="modalOpen"
                                    x-transition:enter="transition ease-out duration-200"
                                    x-transition:enter-start="opacity-0"
                                    x-transition:enter-end="opacity-100"
                                    x-transition:leave="transition ease-out duration-100"
                                    x-transition:leave-start="opacity-100"
                                    x-transition:leave-end="opacity-0"
                                    aria-hidden="true"
                                    x-cloak
                                ></div>
                                <!-- Modal dialog -->
                                <div
                                    id="success-modal"
                                    class="fixed inset-0 z-50 overflow-hidden flex items-center my-4 justify-center px-4 sm:px-6"
                                    role="dialog"
                                    aria-modal="true"
                                    x-show="modalOpen"
                                    x-transition:enter="transition ease-in-out duration-200"
                                    x-transition:enter-start="opacity-0 translate-y-4"
                                    x-transition:enter-end="opacity-100 translate-y-0"
                                    x-transition:leave="transition ease-in-out duration-200"
                                    x-transition:leave-start="opacity-100 translate-y-0"
                                    x-transition:leave-end="opacity-0 translate-y-4"
                                    x-cloak
                                >
                                    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg overflow-auto max-w-lg w-full max-h-full" @click.outside="modalOpen = false" @keydown.escape.window="modalOpen = false">
                                        <div class="p-5 flex space-x-4">
                                            <!-- Icon -->
                                            <div class="w-10 h-10 rounded-full flex items-center justify-center shrink-0 bg-gray-100 dark:bg-gray-700">
                                                <svg class="shrink-0 fill-current text-green-500" width="16" height="16" viewBox="0 0 16 16">
                                                    <path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zM7 11.4L3.6 8 5 6.6l2 2 4-4L12.4 6 7 11.4z" />
                                                </svg>
                                            </div>
                                            <!-- Content -->
                                            <div>
                                                <!-- Modal header -->
                                                <div class="mb-2">
                                                    <div class="text-lg font-semibold text-gray-800 dark:text-gray-100">Upgrade your Subscription?</div>
                                                </div>
                                                <!-- Modal content -->
                                                <div class="text-sm mb-10">
                                                    <div class="space-y-2">
                                                        <p>Semper eget duis at tellus at urna condimentum mattis pellentesque lacus suspendisse faucibus interdum.</p>
                                                    </div>
                                                </div>
                                                <!-- Modal footer -->
                                                <div class="flex flex-wrap justify-end space-x-2">
                                                    <button class="btn-sm border-gray-200 dark:border-gray-700/60 hover:border-gray-300 dark:hover:border-gray-600 text-gray-800 dark:text-gray-300" @click="modalOpen = false">Cancel</button>
                                                    <button class="btn-sm bg-gray-900 text-gray-100 hover:bg-gray-800 dark:bg-gray-100 dark:text-gray-800 dark:hover:bg-white">Yes, Upgrade it</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>                                            
                            </div>
                            <!-- End -->
                        </div>

                        <!-- Danger Modal -->
                        <div class="m-1.5">
                            <!-- Start -->
                            <div x-data="{ modalOpen: false }">
                                <button
                                    class="btn bg-gray-900 text-gray-100 hover:bg-gray-800 dark:bg-gray-100 dark:text-gray-800 dark:hover:bg-white"
                                    @click.prevent="modalOpen = true"
                                    aria-controls="danger-modal"
                                >Danger Modal</button>
                                <!-- Modal backdrop -->
                                <div
                                    class="fixed inset-0 bg-gray-900/30 z-50 transition-opacity"
                                    x-show="modalOpen"
                                    x-transition:enter="transition ease-out duration-200"
                                    x-transition:enter-start="opacity-0"
                                    x-transition:enter-end="opacity-100"
                                    x-transition:leave="transition ease-out duration-100"
                                    x-transition:leave-start="opacity-100"
                                    x-transition:leave-end="opacity-0"
                                    aria-hidden="true"
                                    x-cloak
                                ></div>
                                <!-- Modal dialog -->
                                <div
                                    id="danger-modal"
                                    class="fixed inset-0 z-50 overflow-hidden flex items-center my-4 justify-center px-4 sm:px-6"
                                    role="dialog"
                                    aria-modal="true"
                                    x-show="modalOpen"
                                    x-transition:enter="transition ease-in-out duration-200"
                                    x-transition:enter-start="opacity-0 translate-y-4"
                                    x-transition:enter-end="opacity-100 translate-y-0"
                                    x-transition:leave="transition ease-in-out duration-200"
                                    x-transition:leave-start="opacity-100 translate-y-0"
                                    x-transition:leave-end="opacity-0 translate-y-4"
                                    x-cloak
                                >
                                    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg overflow-auto max-w-lg w-full max-h-full" @click.outside="modalOpen = false" @keydown.escape.window="modalOpen = false">
                                        <div class="p-5 flex space-x-4">
                                            <!-- Icon -->
                                            <div class="w-10 h-10 rounded-full flex items-center justify-center shrink-0 bg-gray-100 dark:bg-gray-700">
                                                <svg class="shrink-0 fill-current text-red-500" width="16" height="16" viewBox="0 0 16 16">
                                                    <path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm0 12c-.6 0-1-.4-1-1s.4-1 1-1 1 .4 1 1-.4 1-1 1zm1-3H7V4h2v5z" />
                                                </svg>
                                            </div>
                                            <!-- Content -->
                                            <div>
                                                <!-- Modal header -->
                                                <div class="mb-2">
                                                    <div class="text-lg font-semibold text-gray-800 dark:text-gray-100">Delete 1 customer?</div>
                                                </div>
                                                <!-- Modal content -->
                                                <div class="text-sm mb-10">
                                                    <div class="space-y-2">
                                                        <p>Semper eget duis at tellus at urna condimentum mattis pellentesque lacus suspendisse faucibus interdum.</p>
                                                    </div>
                                                </div>
                                                <!-- Modal footer -->
                                                <div class="flex flex-wrap justify-end space-x-2">
                                                    <button class="btn-sm border-gray-200 dark:border-gray-700/60 hover:border-gray-300 dark:hover:border-gray-600 text-gray-800 dark:text-gray-300" @click="modalOpen = false">Cancel</button>
                                                    <button class="btn-sm bg-red-500 hover:bg-red-600 text-white">Yes, Delete it</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>                                            
                            </div>
                            <!-- End -->
                        </div>
                        
                        <!-- Info Modal -->
                        <div class="m-1.5">
                            <!-- Start -->
                            <div x-data="{ modalOpen: false }">
                                <button
                                    class="btn bg-gray-900 text-gray-100 hover:bg-gray-800 dark:bg-gray-100 dark:text-gray-800 dark:hover:bg-white"
                                    @click.prevent="modalOpen = true"
                                    aria-controls="info-modal"
                                >Info Modal</button>
                                <!-- Modal backdrop -->
                                <div
                                    class="fixed inset-0 bg-gray-900/30 z-50 transition-opacity"
                                    x-show="modalOpen"
                                    x-transition:enter="transition ease-out duration-200"
                                    x-transition:enter-start="opacity-0"
                                    x-transition:enter-end="opacity-100"
                                    x-transition:leave="transition ease-out duration-100"
                                    x-transition:leave-start="opacity-100"
                                    x-transition:leave-end="opacity-0"
                                    aria-hidden="true"
                                    x-cloak
                                ></div>
                                <!-- Modal dialog -->
                                <div
                                    id="info-modal"
                                    class="fixed inset-0 z-50 overflow-hidden flex items-center my-4 justify-center px-4 sm:px-6"
                                    role="dialog"
                                    aria-modal="true"
                                    x-show="modalOpen"
                                    x-transition:enter="transition ease-in-out duration-200"
                                    x-transition:enter-start="opacity-0 translate-y-4"
                                    x-transition:enter-end="opacity-100 translate-y-0"
                                    x-transition:leave="transition ease-in-out duration-200"
                                    x-transition:leave-start="opacity-100 translate-y-0"
                                    x-transition:leave-end="opacity-0 translate-y-4"
                                    x-cloak
                                >
                                    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg overflow-auto max-w-lg w-full max-h-full" @click.outside="modalOpen = false" @keydown.escape.window="modalOpen = false">
                                        <div class="p-5 flex space-x-4">
                                            <!-- Icon -->
                                            <div class="w-10 h-10 rounded-full flex items-center justify-center shrink-0 bg-gray-100 dark:bg-gray-700">
                                                <svg class="shrink-0 fill-current text-violet-500" width="16" height="16" viewBox="0 0 16 16">
                                                    <path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm1 12H7V7h2v5zM8 6c-.6 0-1-.4-1-1s.4-1 1-1 1 .4 1 1-.4 1-1 1z" />
                                                </svg>
                                            </div>
                                            <!-- Content -->
                                            <div>
                                                <!-- Modal header -->
                                                <div class="mb-2">
                                                    <div class="text-lg font-semibold text-gray-800 dark:text-gray-100">Create new Event?</div>
                                                </div>
                                                <!-- Modal content -->
                                                <div class="text-sm mb-10">
                                                    <div class="space-y-2">
                                                        <p>Semper eget duis at tellus at urna condimentum mattis pellentesque lacus suspendisse faucibus interdum.</p>
                                                    </div>
                                                </div>
                                                <!-- Modal footer -->
                                                <div class="flex flex-wrap justify-end space-x-2">
                                                    <button class="btn-sm border-gray-200 dark:border-gray-700/60 hover:border-gray-300 dark:hover:border-gray-600 text-gray-800 dark:text-gray-300" @click="modalOpen = false">Cancel</button>
                                                    <button class="btn-sm bg-gray-900 text-gray-100 hover:bg-gray-800 dark:bg-gray-100 dark:text-gray-800 dark:hover:bg-white">Yes, Create it</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>                                            
                            </div>
                            <!-- End -->
                        </div>                                    

                    </div>
                </div>

                <!-- Product -->
                <div>
                    <h2 class="text-2xl text-gray-800 dark:text-gray-100 font-bold mb-6">Product</h2>
                    <div class="flex flex-wrap items-center -m-1.5">

                        <!-- Send Feedback -->
                        <div class="m-1.5">
                            <!-- Start -->
                            <div x-data="{ modalOpen: false }">
                                <button
                                    class="btn bg-gray-900 text-gray-100 hover:bg-gray-800 dark:bg-gray-100 dark:text-gray-800 dark:hover:bg-white"
                                    @click.prevent="modalOpen = true"
                                    aria-controls="feedback-modal"
                                >Send Feedback</button>
                                <!-- Modal backdrop -->
                                <div
                                    class="fixed inset-0 bg-gray-900/30 z-50 transition-opacity"
                                    x-show="modalOpen"
                                    x-transition:enter="transition ease-out duration-200"
                                    x-transition:enter-start="opacity-0"
                                    x-transition:enter-end="opacity-100"
                                    x-transition:leave="transition ease-out duration-100"
                                    x-transition:leave-start="opacity-100"
                                    x-transition:leave-end="opacity-0"
                                    aria-hidden="true"
                                    x-cloak
                                ></div>
                                <!-- Modal dialog -->
                                <div
                                    id="feedback-modal"
                                    class="fixed inset-0 z-50 overflow-hidden flex items-center my-4 justify-center px-4 sm:px-6"
                                    role="dialog"
                                    aria-modal="true"
                                    x-show="modalOpen"
                                    x-transition:enter="transition ease-in-out duration-200"
                                    x-transition:enter-start="opacity-0 translate-y-4"
                                    x-transition:enter-end="opacity-100 translate-y-0"
                                    x-transition:leave="transition ease-in-out duration-200"
                                    x-transition:leave-start="opacity-100 translate-y-0"
                                    x-transition:leave-end="opacity-0 translate-y-4"
                                    x-cloak
                                >
                                    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg overflow-auto max-w-lg w-full max-h-full" @click.outside="modalOpen = false" @keydown.escape.window="modalOpen = false">
                                        <!-- Modal header -->
                                        <div class="px-5 py-3 border-b border-gray-200 dark:border-gray-700/60">
                                            <div class="flex justify-between items-center">
                                                <div class="font-semibold text-gray-800 dark:text-gray-100">Send Feedback</div>
                                                <button class="text-gray-400 dark:text-gray-500 hover:text-gray-500 dark:hover:text-gray-400" @click="modalOpen = false">
                                                    <div class="sr-only">Close</div>
                                                    <svg class="fill-current" width="16" height="16" viewBox="0 0 16 16">
                                                        <path d="M7.95 6.536l4.242-4.243a1 1 0 111.415 1.414L9.364 7.95l4.243 4.242a1 1 0 11-1.415 1.415L7.95 9.364l-4.243 4.243a1 1 0 01-1.414-1.415L6.536 7.95 2.293 3.707a1 1 0 011.414-1.414L7.95 6.536z" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                        <!-- Modal content -->
                                        <div class="px-5 py-4">
                                            <div class="text-sm">
                                                <div class="font-medium text-gray-800 dark:text-gray-100 mb-3">Let us know what you think 🙌</div>
                                            </div>
                                            <div class="space-y-3">
                                                <div>
                                                    <label class="block text-sm font-medium mb-1" for="name">Name <span class="text-red-500">*</span></label>
                                                    <input id="name" class="form-input w-full px-2 py-1" type="text" required />
                                                </div>
                                                <div>
                                                    <label class="block text-sm font-medium mb-1" for="email">Email <span class="text-red-500">*</span></label>
                                                    <input id="email" class="form-input w-full px-2 py-1" type="email" required />
                                                </div>
                                                <div>
                                                    <label class="block text-sm font-medium mb-1" for="feedback">Message <span class="text-red-500">*</span></label>
                                                    <textarea id="feedback" class="form-textarea w-full px-2 py-1" rows="4" required></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Modal footer -->
                                        <div class="px-5 py-4 border-t border-gray-200 dark:border-gray-700/60">
                                            <div class="flex flex-wrap justify-end space-x-2">
                                                <button class="btn-sm border-gray-200 dark:border-gray-700/60 hover:border-gray-300 dark:hover:border-gray-600 text-gray-800 dark:text-gray-300" @click="modalOpen = false">Cancel</button>
                                                <button class="btn-sm bg-gray-900 text-gray-100 hover:bg-gray-800 dark:bg-gray-100 dark:text-gray-800 dark:hover:bg-white">Send</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>                                            
                            </div>
                            <!-- End -->
                        </div>
                        
                        <!-- Newsletter -->
                        <div class="m-1.5">
                            <!-- Start -->
                            <div x-data="{ modalOpen: false }">
                                <button
                                    class="btn bg-gray-900 text-gray-100 hover:bg-gray-800 dark:bg-gray-100 dark:text-gray-800 dark:hover:bg-white"
                                    @click.prevent="modalOpen = true"
                                    aria-controls="newsletter-modal"
                                >Newsletter</button>
                                <!-- Modal backdrop -->
                                <div
                                    class="fixed inset-0 bg-gray-900/30 z-50 transition-opacity"
                                    x-show="modalOpen"
                                    x-transition:enter="transition ease-out duration-200"
                                    x-transition:enter-start="opacity-0"
                                    x-transition:enter-end="opacity-100"
                                    x-transition:leave="transition ease-out duration-100"
                                    x-transition:leave-start="opacity-100"
                                    x-transition:leave-end="opacity-0"
                                    aria-hidden="true"
                                    x-cloak
                                ></div>
                                <!-- Modal dialog -->
                                <div
                                    id="newsletter-modal"
                                    class="fixed inset-0 z-50 overflow-hidden flex items-center my-4 justify-center px-4 sm:px-6"
                                    role="dialog"
                                    aria-modal="true"
                                    x-show="modalOpen"
                                    x-transition:enter="transition ease-in-out duration-200"
                                    x-transition:enter-start="opacity-0 translate-y-4"
                                    x-transition:enter-end="opacity-100 translate-y-0"
                                    x-transition:leave="transition ease-in-out duration-200"
                                    x-transition:leave-start="opacity-100 translate-y-0"
                                    x-transition:leave-end="opacity-0 translate-y-4"
                                    x-cloak
                                >
                                    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg overflow-auto max-w-lg w-full max-h-full" @click.outside="modalOpen = false" @keydown.escape.window="modalOpen = false">
                                        <div class="p-6">
                                            <div class="relative">
                                                <!-- Close button -->
                                                <button class="absolute top-0 right-0 text-gray-400 dark:text-gray-500 hover:text-gray-500 dark:hover:text-gray-400" @click="modalOpen = false">
                                                    <div class="sr-only">Close</div>
                                                    <svg class="fill-current" width="16" height="16" viewBox="0 0 16 16">
                                                        <path d="M7.95 6.536l4.242-4.243a1 1 0 111.415 1.414L9.364 7.95l4.243 4.242a1 1 0 11-1.415 1.415L7.95 9.364l-4.243 4.243a1 1 0 01-1.414-1.415L6.536 7.95 2.293 3.707a1 1 0 011.414-1.414L7.95 6.536z" />
                                                    </svg>
                                                </button>
                                                <!-- Modal header -->
                                                <div class="mb-2 text-center">
                                                    <!-- Icon -->
                                                    <div class="mb-3">
                                                        <svg class="inline-flex w-12 h-12 rounded-full shrink-0 fill-current" viewBox="0 0 48 48">
                                                            <rect class="text-gray-100 dark:text-gray-700" width="48" height="48" rx="24" />
                                                            <path class="text-violet-300" d="M19 16h7a8 8 0 110 16h-7V16z" />
                                                            <path class="text-violet-500" d="M26 24l-7-6v5h-8v2h8v5z" />
                                                        </svg>
                                                    </div>
                                                    <div class="text-lg font-semibold text-gray-800 dark:text-gray-100">Subscribe to the Newsletter!</div>
                                                </div>
                                                <!-- Modal content -->
                                                <div class="text-center">
                                                    <div class="text-sm mb-6">
                                                        Semper eget duis at tellus at urna condimentum mattis pellentesque lacus suspendisse faucibus interdum.
                                                    </div>
                                                    <!-- Submit form -->
                                                    <form class="flex max-w-sm m-auto">
                                                        <div class="grow mr-2">
                                                            <label for="subscribe-form" class="sr-only">Leave your Email</label>
                                                            <input id="subscribe-form" class="form-input w-full px-2 py-1" type="email" />
                                                        </div>
                                                        <button type="submit" class="btn-sm bg-gray-900 text-gray-100 hover:bg-gray-800 dark:bg-gray-100 dark:text-gray-800 dark:hover:bg-white whitespace-nowrap">Subscribe</button>
                                                    </form>
                                                    <div class="text-xs text-gray-500 italic mt-3">
                                                        I respect your privacy. No spam. Unsubscribe at any time!
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>                                            
                            </div>
                            <!-- End -->
                        </div>

                        <!-- Announcement -->
                        <div class="m-1.5">
                            <!-- Start -->
                            <div x-data="{ modalOpen: false }">
                                <button
                                    class="btn bg-gray-900 text-gray-100 hover:bg-gray-800 dark:bg-gray-100 dark:text-gray-800 dark:hover:bg-white"
                                    @click.prevent="modalOpen = true"
                                    aria-controls="announcement-modal"
                                >Announcement</button>
                                <!-- Modal backdrop -->
                                <div
                                    class="fixed inset-0 bg-gray-900/30 z-50 transition-opacity"
                                    x-show="modalOpen"
                                    x-transition:enter="transition ease-out duration-200"
                                    x-transition:enter-start="opacity-0"
                                    x-transition:enter-end="opacity-100"
                                    x-transition:leave="transition ease-out duration-100"
                                    x-transition:leave-start="opacity-100"
                                    x-transition:leave-end="opacity-0"
                                    aria-hidden="true"
                                    x-cloak
                                ></div>
                                <!-- Modal dialog -->
                                <div
                                    id="announcement-modal"
                                    class="fixed inset-0 z-50 overflow-hidden flex items-center my-4 justify-center px-4 sm:px-6"
                                    role="dialog"
                                    aria-modal="true"
                                    x-show="modalOpen"
                                    x-transition:enter="transition ease-in-out duration-200"
                                    x-transition:enter-start="opacity-0 translate-y-4"
                                    x-transition:enter-end="opacity-100 translate-y-0"
                                    x-transition:leave="transition ease-in-out duration-200"
                                    x-transition:leave-start="opacity-100 translate-y-0"
                                    x-transition:leave-end="opacity-0 translate-y-4"
                                    x-cloak
                                >
                                    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg overflow-auto max-w-lg w-full max-h-full" @click.outside="modalOpen = false" @keydown.escape.window="modalOpen = false">
                                        <div class="p-6">
                                            <div class="relative">
                                                <!-- Close button -->
                                                <button class="absolute top-0 right-0 text-gray-400 dark:text-gray-500 hover:text-gray-500 dark:hover:text-gray-400" @click="modalOpen = false">
                                                    <div class="sr-only">Close</div>
                                                    <svg class="fill-current" width="16" height="16" viewBox="0 0 16 16">
                                                        <path d="M7.95 6.536l4.242-4.243a1 1 0 111.415 1.414L9.364 7.95l4.243 4.242a1 1 0 11-1.415 1.415L7.95 9.364l-4.243 4.243a1 1 0 01-1.414-1.415L6.536 7.95 2.293 3.707a1 1 0 011.414-1.414L7.95 6.536z" />
                                                    </svg>
                                                </button>
                                                <!-- Modal header -->
                                                <div class="mb-2 text-center">
                                                    <!-- Icon -->
                                                    <div class="inline-flex rounded-full bg-linear-to-b from-gray-100 to-gray-200 dark:from-gray-700/30 dark:to-gray-700 mb-2">
                                                        <img src="{{ asset('images/announcement-icon.svg') }}" width="80" height="80" alt="Announcement" />
                                                    </div>
                                                    <div class="text-lg font-semibold text-gray-800 dark:text-gray-100">You Unlocked Level 2!</div>
                                                </div>
                                                <!-- Modal content -->
                                                <div class="text-center">
                                                    <div class="text-sm mb-5">
                                                        Semper eget duis at tellus at urna condimentum mattis pellentesque lacus suspendisse faucibus interdum.
                                                    </div>
                                                    <!-- CTAs -->
                                                    <div class="space-y-3">
                                                        <button class="btn-sm bg-gray-900 text-gray-100 hover:bg-gray-800 dark:bg-gray-100 dark:text-gray-800 dark:hover:bg-white">Claim your Reward -&gt;</button>
                                                        <div>
                                                            <a class="font-medium text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white transition" href="#0"  @click.prevent="modalOpen = false">Not Now!</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>                                            
                            </div>
                            <!-- End -->
                        </div>

                        <!-- Integration -->
                        <div class="m-1.5">
                            <!-- Start -->
                            <div x-data="{ modalOpen: false }">
                                <button
                                    class="btn bg-gray-900 text-gray-100 hover:bg-gray-800 dark:bg-gray-100 dark:text-gray-800 dark:hover:bg-white"
                                    @click.prevent="modalOpen = true"
                                    aria-controls="integration-modal"
                                >Integration</button>
                                <!-- Modal backdrop -->
                                <div
                                    class="fixed inset-0 bg-gray-900/30 z-50 transition-opacity"
                                    x-show="modalOpen"
                                    x-transition:enter="transition ease-out duration-200"
                                    x-transition:enter-start="opacity-0"
                                    x-transition:enter-end="opacity-100"
                                    x-transition:leave="transition ease-out duration-100"
                                    x-transition:leave-start="opacity-100"
                                    x-transition:leave-end="opacity-0"
                                    aria-hidden="true"
                                    x-cloak
                                ></div>
                                <!-- Modal dialog -->
                                <div
                                    id="integration-modal"
                                    class="fixed inset-0 z-50 overflow-hidden flex items-center my-4 justify-center px-4 sm:px-6"
                                    role="dialog"
                                    aria-modal="true"
                                    x-show="modalOpen"
                                    x-transition:enter="transition ease-in-out duration-200"
                                    x-transition:enter-start="opacity-0 translate-y-4"
                                    x-transition:enter-end="opacity-100 translate-y-0"
                                    x-transition:leave="transition ease-in-out duration-200"
                                    x-transition:leave-start="opacity-100 translate-y-0"
                                    x-transition:leave-end="opacity-0 translate-y-4"
                                    x-cloak
                                >
                                    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg overflow-auto max-w-lg w-full max-h-full" @click.outside="modalOpen = false" @keydown.escape.window="modalOpen = false">
                                        <div class="p-6">
                                            <div class="relative">
                                                <!-- Close button -->
                                                <button class="absolute top-0 right-0 text-gray-400 dark:text-gray-500 hover:text-gray-500 dark:hover:text-gray-400" @click="modalOpen = false">
                                                    <div class="sr-only">Close</div>
                                                    <svg class="fill-current" width="16" height="16" viewBox="0 0 16 16">
                                                        <path d="M7.95 6.536l4.242-4.243a1 1 0 111.415 1.414L9.364 7.95l4.243 4.242a1 1 0 11-1.415 1.415L7.95 9.364l-4.243 4.243a1 1 0 01-1.414-1.415L6.536 7.95 2.293 3.707a1 1 0 011.414-1.414L7.95 6.536z" />
                                                    </svg>
                                                </button>
                                                <!-- Modal header -->
                                                <div class="mb-5 text-center">
                                                    <!-- Icons -->
                                                    <div class="inline-flex items-center justify-center space-x-3 mb-4">
                                                        <!-- Mosaic logo -->
                                                        <div class="flex justify-center items-center w-12 h-12 rounded-full bg-gray-100 dark:bg-gray-700">
                                                            <svg class="fill-violet-500" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                                                                <path d="M31.956 14.8C31.372 6.92 25.08.628 17.2.044V5.76a9.04 9.04 0 0 0 9.04 9.04h5.716ZM14.8 26.24v5.716C6.92 31.372.63 25.08.044 17.2H5.76a9.04 9.04 0 0 1 9.04 9.04Zm11.44-9.04h5.716c-.584 7.88-6.876 14.172-14.756 14.756V26.24a9.04 9.04 0 0 1 9.04-9.04ZM.044 14.8C.63 6.92 6.92.628 14.8.044V5.76a9.04 9.04 0 0 1-9.04 9.04H.044Z" />
                                                            </svg>
                                                        </div>
                                                        <!-- Arrows -->
                                                        <svg class="fill-current text-gray-400" width="16" height="16" viewBox="0 0 16 16">
                                                            <path d="M5 3V0L0 4l5 4V5h8a1 1 0 000-2H5zM11 11H3a1 1 0 000 2h8v3l5-4-5-4v3z" />
                                                        </svg>
                                                        <!-- Cruip logo -->
                                                        <svg width="48" height="48" viewBox="0 0 48 48">
                                                            <rect class="fill-gray-100 dark:fill-violet-500/30" width="48" height="48" rx="24" />
                                                            <path d="M34 24c0-1.38-1.126-2.5-2.515-2.5A2.507 2.507 0 0028.97 24c0 1.38 1.126 2.5 2.515 2.5A2.507 2.507 0 0034 24" fill="#4BD37D" />
                                                            <path d="M31.112 31.07a10.024 10.024 0 01-4.582 2.615c-.8.205-1.64.315-2.506.315a10.007 10.007 0 01-7.553-3.426A9.943 9.943 0 0114 24c0-2.517.932-4.816 2.471-6.574A10.007 10.007 0 0124.024 14a10.024 10.024 0 017.088 2.93l-3.544 3.535A5.003 5.003 0 0024.024 19a5.006 5.006 0 00-5.012 5l.001.13A5.007 5.007 0 0024.024 29c1.384 0 2.637-.56 3.544-1.465l3.544 3.536z" fill="#8470FF" />
                                                        </svg>
                                                    </div>
                                                    <div class="text-lg font-semibold text-gray-800 dark:text-gray-100">Connect Mosaic with your Cruip account</div>
                                                </div>
                                                <!-- Modal content -->
                                                <div class="text-sm mb-5">
                                                    <div class="font-medium text-gray-800 dark:text-gray-100 mb-3">Mosaic would like to:</div>
                                                    <ul class="space-y-2 mb-5">
                                                        <li class="flex items-center">
                                                            <svg class="w-3 h-3 shrink-0 fill-current text-green-500 mr-2" viewBox="0 0 12 12">
                                                                <path d="M10.28 1.28L3.989 7.575 1.695 5.28A1 1 0 00.28 6.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 1.28z" />
                                                            </svg>
                                                            <div>Lorem ipsum dolor sit amet</div>
                                                        </li>
                                                        <li class="flex items-center">
                                                            <svg class="w-3 h-3 shrink-0 fill-current text-green-500 mr-2" viewBox="0 0 12 12">
                                                                <path d="M10.28 1.28L3.989 7.575 1.695 5.28A1 1 0 00.28 6.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 1.28z" />
                                                            </svg>
                                                            <div>Semper eget duis at tellus at urna</div>
                                                        </li>
                                                        <li class="flex items-center">
                                                            <svg class="w-3 h-3 shrink-0 fill-current text-green-500 mr-2" viewBox="0 0 12 12">
                                                                <path d="M10.28 1.28L3.989 7.575 1.695 5.28A1 1 0 00.28 6.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 1.28z" />
                                                            </svg>
                                                            <div>Lorem ipsum dolor sit amet</div>
                                                        </li>
                                                        <li class="flex items-center">
                                                            <svg class="w-3 h-3 shrink-0 fill-current text-green-500 mr-2" viewBox="0 0 12 12">
                                                                <path d="M10.28 1.28L3.989 7.575 1.695 5.28A1 1 0 00.28 6.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 1.28z" />
                                                            </svg>
                                                            <div>Suspendisse faucibus interdum</div>
                                                        </li>
                                                    </ul>
                                                    <div class="text-xs text-gray-500">By clicking on Allow access, you authorize Mosaic to use your information in accordance with its <a class="text-violet-500 hover:text-violet-600 dark:hover:text-violet-400" href="#0">Privacy Policy</a>. You can stop it at any time on the integrations page of your Mosaic account.</div>
                                                </div>
                                                <!-- Modal footer -->
                                                <div class="flex flex-wrap justify-end space-x-2">
                                                    <button class="btn-sm border-gray-200 dark:border-gray-700/60 hover:border-gray-300 dark:hover:border-gray-600 text-gray-800 dark:text-gray-300" @click="modalOpen = false">Cancel</button>
                                                    <button class="btn-sm bg-gray-900 text-gray-100 hover:bg-gray-800 dark:bg-gray-100 dark:text-gray-800 dark:hover:bg-white">Allow Access</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>                                            
                            </div>
                            <!-- End -->
                        </div>

                        <!-- What’s New -->
                        <div class="m-1.5">
                            <!-- Start -->
                            <div x-data="{ modalOpen: false }">
                                <button
                                    class="btn bg-gray-900 text-gray-100 hover:bg-gray-800 dark:bg-gray-100 dark:text-gray-800 dark:hover:bg-white"
                                    @click.prevent="modalOpen = true"
                                    aria-controls="news-modal"
                                >What’s New</button>
                                <!-- Modal backdrop -->
                                <div
                                    class="fixed inset-0 bg-gray-900/30 z-50 transition-opacity"
                                    x-show="modalOpen"
                                    x-transition:enter="transition ease-out duration-200"
                                    x-transition:enter-start="opacity-0"
                                    x-transition:enter-end="opacity-100"
                                    x-transition:leave="transition ease-out duration-100"
                                    x-transition:leave-start="opacity-100"
                                    x-transition:leave-end="opacity-0"
                                    aria-hidden="true"
                                    x-cloak
                                ></div>
                                <!-- Modal dialog -->
                                <div
                                    id="news-modal"
                                    class="fixed inset-0 z-50 overflow-hidden flex items-center my-4 justify-center px-4 sm:px-6"
                                    role="dialog"
                                    aria-modal="true"
                                    x-show="modalOpen"
                                    x-transition:enter="transition ease-in-out duration-200"
                                    x-transition:enter-start="opacity-0 translate-y-4"
                                    x-transition:enter-end="opacity-100 translate-y-0"
                                    x-transition:leave="transition ease-in-out duration-200"
                                    x-transition:leave-start="opacity-100 translate-y-0"
                                    x-transition:leave-end="opacity-0 translate-y-4"
                                    x-cloak
                                >
                                    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg overflow-auto max-w-lg w-full max-h-full" @click.outside="modalOpen = false" @keydown.escape.window="modalOpen = false">
                                        <div class="relative">
                                            <img class="w-full" src="{{ asset('images/modal-image.jpg') }}" width="460" height="200" alt="New on Mosaic" />
                                            <!-- Close button -->
                                            <button class="absolute top-0 right-0 mt-5 mr-5 text-gray-50 hover:text-white" @click="modalOpen = false">
                                                <div class="sr-only">Close</div>
                                                <svg class="fill-current" width="16" height="16" viewBox="0 0 16 16">
                                                    <path d="M7.95 6.536l4.242-4.243a1 1 0 111.415 1.414L9.364 7.95l4.243 4.242a1 1 0 11-1.415 1.415L7.95 9.364l-4.243 4.243a1 1 0 01-1.414-1.415L6.536 7.95 2.293 3.707a1 1 0 011.414-1.414L7.95 6.536z" />
                                                </svg>
                                            </button>
                                        </div>
                                        <div class="p-5">
                                            <!-- Modal header -->
                                            <div class="mb-2">
                                                <div class="mb-3">
                                                    <div class="btn-xs text-xs border-gray-200 dark:border-gray-700/60 hover:border-gray-300 dark:hover:border-gray-600 text-gray-800 dark:text-gray-300 px-2.5 py-1 rounded-full shadow-none">New on Mosaic</div>
                                                </div>
                                                <div class="text-lg font-semibold text-gray-800 dark:text-gray-100">Help your team work faster with X 🏃‍♂️</div>
                                            </div>
                                            <!-- Modal content -->
                                            <div class="text-sm mb-5">
                                                <div class="space-y-2">
                                                    <p>You might not be aware of this fact, but every frame, digital video, canvas, responsive design, and image often has a rectangular shape that is exceptionally precise in proportion (or ratio).</p>
                                                    <p>The ratio has to be well-defined to make shapes fit into different and distinct mediums, such as computer, movies, television and camera screens.</p>
                                                </div>
                                            </div>
                                            <!-- Modal footer -->
                                            <div class="flex flex-wrap justify-end space-x-2">
                                                <button class="btn-sm bg-gray-900 text-gray-100 hover:bg-gray-800 dark:bg-gray-100 dark:text-gray-800 dark:hover:bg-white" @click="modalOpen = false">Cool, I Got it</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>                                            
                            </div>
                            <!-- End -->
                        </div>
                        
                        <!-- Change your Plan -->
                        <div class="m-1.5">
                            <!-- Start -->
                            <div x-data="{ modalOpen: false }">
                                <button
                                    class="btn bg-gray-900 text-gray-100 hover:bg-gray-800 dark:bg-gray-100 dark:text-gray-800 dark:hover:bg-white"
                                    @click.prevent="modalOpen = true"
                                    aria-controls="plan-modal"
                                >Change your Plan</button>
                                <!-- Modal backdrop -->
                                <div
                                    class="fixed inset-0 bg-gray-900/30 z-50 transition-opacity"
                                    x-show="modalOpen"
                                    x-transition:enter="transition ease-out duration-200"
                                    x-transition:enter-start="opacity-0"
                                    x-transition:enter-end="opacity-100"
                                    x-transition:leave="transition ease-out duration-100"
                                    x-transition:leave-start="opacity-100"
                                    x-transition:leave-end="opacity-0"
                                    aria-hidden="true"
                                    x-cloak
                                ></div>
                                <!-- Modal dialog -->
                                <div
                                    id="plan-modal"
                                    class="fixed inset-0 z-50 overflow-hidden flex items-center my-4 justify-center px-4 sm:px-6"
                                    role="dialog"
                                    aria-modal="true"
                                    x-show="modalOpen"
                                    x-transition:enter="transition ease-in-out duration-200"
                                    x-transition:enter-start="opacity-0 translate-y-4"
                                    x-transition:enter-end="opacity-100 translate-y-0"
                                    x-transition:leave="transition ease-in-out duration-200"
                                    x-transition:leave-start="opacity-100 translate-y-0"
                                    x-transition:leave-end="opacity-0 translate-y-4"
                                    x-cloak
                                >
                                    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg overflow-auto max-w-lg w-full max-h-full" @click.outside="modalOpen = false" @keydown.escape.window="modalOpen = false">
                                        <!-- Modal header -->
                                        <div class="px-5 py-3 border-b border-gray-200 dark:border-gray-700/60">
                                            <div class="flex justify-between items-center">
                                                <div class="font-semibold text-gray-800 dark:text-gray-100">Change your Plan</div>
                                                <button class="text-gray-400 dark:text-gray-500 hover:text-gray-500 dark:hover:text-gray-400" @click="modalOpen = false">
                                                    <div class="sr-only">Close</div>
                                                    <svg class="fill-current" width="16" height="16" viewBox="0 0 16 16">
                                                        <path d="M7.95 6.536l4.242-4.243a1 1 0 111.415 1.414L9.364 7.95l4.243 4.242a1 1 0 11-1.415 1.415L7.95 9.364l-4.243 4.243a1 1 0 01-1.414-1.415L6.536 7.95 2.293 3.707a1 1 0 011.414-1.414L7.95 6.536z" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                        <!-- Modal content -->
                                        <div class="px-5 pt-4 pb-1">
                                            <div class="text-sm">
                                                <div class="mb-4">Upgrade or downgrade your plan:</div>
                                                <!-- Options -->
                                                <ul class="space-y-2 mb-4">
                                                    <li>
                                                        <button class="w-full h-full text-left py-3 px-4 rounded-lg bg-white dark:bg-gray-800 border-2 border-violet-400 dark:border-violet-500 shadow-xs transition">
                                                            <div class="flex items-center">
                                                                <div class="w-4 h-4 border-4 bg-white border-violet-500 rounded-full mr-3"></div>
                                                                <div class="grow">
                                                                    <div class="flex flex-wrap items-center justify-between mb-0.5">
                                                                        <span class="font-medium text-gray-800 dark:text-gray-100">Mosaic Light <span class="text-xs italic text-gray-500 align-top">Current Plan</span></span>
                                                                        <span class="text-gray-600"><span class="font-medium text-green-600">$39.00</span>/mo</span>
                                                                    </div>
                                                                    <div class="text-sm">2 MB · 1 member · 500 block limits</div>
                                                                </div>
                                                            </div>
                                                        </button>
                                                    </li>
                                                    <li>
                                                        <button class="w-full h-full text-left py-3 px-4 rounded-lg bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700/60 hover:border-gray-300 dark:hover:border-gray-600 shadow-xs transition">
                                                            <div class="flex items-center">
                                                                <div class="w-4 h-4 border-2 border-gray-300 dark:border-gray-600 rounded-full mr-3"></div>
                                                                <div class="grow">
                                                                    <div class="flex flex-wrap items-center justify-between mb-0.5">
                                                                        <span class="font-semibold text-gray-800 dark:text-gray-100">Mosaic Basic <span class="text-xs italic text-violet-500 align-top">Best Value</span></span>
                                                                        <span class="text-gray-600"><span class="font-medium text-green-600">$59.00</span>/mo</span>
                                                                    </div>
                                                                    <div class="text-sm">5 MB · 2 members · 1000 block limits</div>
                                                                </div>
                                                            </div>
                                                        </button>
                                                    </li>
                                                    <li>
                                                        <button class="w-full h-full text-left py-3 px-4 rounded-lg bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700/60 hover:border-gray-300 dark:hover:border-gray-600 shadow-xs transition">
                                                            <div class="flex items-center">
                                                                <div class="w-4 h-4 border-2 border-gray-300 dark:border-gray-600 rounded-full mr-3"></div>
                                                                <div class="grow">
                                                                    <div class="flex flex-wrap items-center justify-between mb-0.5">
                                                                        <span class="font-semibold text-gray-800 dark:text-gray-100">Mosaic Plus</span>
                                                                        <span class="text-gray-600"><span class="font-medium text-green-600">$79.00</span>/mo</span>
                                                                    </div>
                                                                    <div class="text-sm">10 MB · 5 members · Unlimited block limits</div>
                                                                </div>
                                                            </div>
                                                        </button>
                                                    </li>
                                                </ul>
                                                <div class="text-xs text-gray-500">Your workspace’s Mosaic Light Plan is set to $39 per month and will renew on August 9, 2024.</div>
                                            </div>
                                        </div>
                                        <!-- Modal footer -->
                                        <div class="px-5 py-4">
                                            <div class="flex flex-wrap justify-end space-x-2">
                                                <button class="btn-sm border-gray-200 dark:border-gray-700/60 hover:border-gray-300 dark:hover:border-gray-600 text-gray-800 dark:text-gray-300" @click="modalOpen = false">Cancel</button>
                                                <button class="btn-sm bg-gray-900 text-gray-100 hover:bg-gray-800 dark:bg-gray-100 dark:text-gray-800 dark:hover:bg-white">Change Plan</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>                                            
                            </div>
                            <!-- End -->
                        </div>                                    

                        <!-- Quick Find -->
                        <div class="m-1.5">
                            <!-- Start -->
                            <div x-data="{ searchOpen: false }">
                                <button
                                    class="btn bg-gray-900 text-gray-100 hover:bg-gray-800 dark:bg-gray-100 dark:text-gray-800 dark:hover:bg-white"
                                    @click.prevent="searchOpen = true;if (searchOpen) $nextTick(()=>{$refs.searchInput.focus()});"
                                    aria-controls="find-modal"
                                >Quick Find</button>
                                <!-- Modal backdrop -->
                                <div
                                    class="fixed inset-0 bg-gray-900/30 z-50 transition-opacity"
                                    x-show="searchOpen"
                                    x-transition:enter="transition ease-out duration-200"
                                    x-transition:enter-start="opacity-0"
                                    x-transition:enter-end="opacity-100"
                                    x-transition:leave="transition ease-out duration-100"
                                    x-transition:leave-start="opacity-100"
                                    x-transition:leave-end="opacity-0"
                                    aria-hidden="true"
                                    x-cloak
                                ></div>
                                <!-- Modal dialog -->
                                <div
                                    id="find-modal"
                                    class="fixed inset-0 z-50 overflow-hidden flex items-start top-20 mb-4 justify-center px-4 sm:px-6"
                                    role="dialog"
                                    aria-modal="true"
                                    x-show="searchOpen"
                                    x-transition:enter="transition ease-in-out duration-200"
                                    x-transition:enter-start="opacity-0 translate-y-4"
                                    x-transition:enter-end="opacity-100 translate-y-0"
                                    x-transition:leave="transition ease-in-out duration-200"
                                    x-transition:leave-start="opacity-100 translate-y-0"
                                    x-transition:leave-end="opacity-0 translate-y-4"
                                    x-cloak
                                >
                                    <div
                                        class="bg-white dark:bg-gray-800 border border-transparent dark:border-gray-700/60 overflow-auto max-w-2xl w-full max-h-full rounded-lg shadow-lg"
                                        @click.outside="searchOpen = false"
                                        @keydown.escape.window="searchOpen = false"
                                    >   
                                        <!-- Search form -->
                                        <form class="border-b border-gray-200 dark:border-gray-700/60">
                                            <div class="relative">
                                                <label for="modal-search" class="sr-only">Search</label>
                                                <input id="modal-search" class="w-full dark:text-gray-300 bg-white dark:bg-gray-800 border-0 focus:ring-transparent placeholder-gray-400 dark:placeholder-gray-500 appearance-none py-3 pl-10 pr-4" type="search" placeholder="Search Anything…" x-ref="searchInput" />
                                                <button class="absolute inset-0 right-auto group" type="submit" aria-label="Search">
                                                    <svg class="shrink-0 fill-current text-gray-400 dark:text-gray-500 group-hover:text-gray-500 dark:group-hover:text-gray-400 ml-4 mr-2" width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M7 14c-3.86 0-7-3.14-7-7s3.14-7 7-7 7 3.14 7 7-3.14 7-7 7zM7 2C4.243 2 2 4.243 2 7s2.243 5 5 5 5-2.243 5-5-2.243-5-5-5z" />
                                                        <path d="M15.707 14.293L13.314 11.9a8.019 8.019 0 01-1.414 1.414l2.393 2.393a.997.997 0 001.414 0 .999.999 0 000-1.414z" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </form>
                                        <div class="py-4 px-2">
                                            <!-- Recent searches -->
                                            <div class="mb-3 last:mb-0">
                                                <div class="text-xs font-semibold text-gray-400 dark:text-gray-500 uppercase px-2 mb-2">Recent searches</div>
                                                <ul class="text-sm">
                                                    <li>
                                                        <a class="flex items-center p-2 text-gray-800 dark:text-gray-100 hover:bg-gray-100 dark:hover:bg-gray-700/20 rounded-lg" href="#0" @click="searchOpen = false" @focus="searchOpen = true" @focusout="searchOpen = false">
                                                            <svg class="fill-current text-gray-400 dark:text-gray-500 shrink-0 mr-3" width="16" height="16" viewBox="0 0 16 16">
                                                                <path d="M15.707 14.293v.001a1 1 0 01-1.414 1.414L11.185 12.6A6.935 6.935 0 017 14a7.016 7.016 0 01-5.173-2.308l-1.537 1.3L0 8l4.873 1.12-1.521 1.285a4.971 4.971 0 008.59-2.835l1.979.454a6.971 6.971 0 01-1.321 3.157l3.107 3.112zM14 6L9.127 4.88l1.521-1.28a4.971 4.971 0 00-8.59 2.83L.084 5.976a6.977 6.977 0 0112.089-3.668l1.537-1.3L14 6z" />
                                                            </svg>
                                                            <span>Form Builder - 23 hours on-demand video</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="flex items-center p-2 text-gray-800 dark:text-gray-100 hover:bg-gray-100 dark:hover:bg-gray-700/20 rounded-lg" href="#0" @click="searchOpen = false" @focus="searchOpen = true" @focusout="searchOpen = false">
                                                            <svg class="fill-current text-gray-400 dark:text-gray-500 shrink-0 mr-3" width="16" height="16" viewBox="0 0 16 16">
                                                                <path d="M15.707 14.293v.001a1 1 0 01-1.414 1.414L11.185 12.6A6.935 6.935 0 017 14a7.016 7.016 0 01-5.173-2.308l-1.537 1.3L0 8l4.873 1.12-1.521 1.285a4.971 4.971 0 008.59-2.835l1.979.454a6.971 6.971 0 01-1.321 3.157l3.107 3.112zM14 6L9.127 4.88l1.521-1.28a4.971 4.971 0 00-8.59 2.83L.084 5.976a6.977 6.977 0 0112.089-3.668l1.537-1.3L14 6z" />
                                                            </svg>
                                                            <span>Access Mosaic on mobile and TV</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="flex items-center p-2 text-gray-800 dark:text-gray-100 hover:bg-gray-100 dark:hover:bg-gray-700/20 rounded-lg" href="#0" @click="searchOpen = false" @focus="searchOpen = true" @focusout="searchOpen = false">
                                                            <svg class="fill-current text-gray-400 dark:text-gray-500 shrink-0 mr-3" width="16" height="16" viewBox="0 0 16 16">
                                                                <path d="M15.707 14.293v.001a1 1 0 01-1.414 1.414L11.185 12.6A6.935 6.935 0 017 14a7.016 7.016 0 01-5.173-2.308l-1.537 1.3L0 8l4.873 1.12-1.521 1.285a4.971 4.971 0 008.59-2.835l1.979.454a6.971 6.971 0 01-1.321 3.157l3.107 3.112zM14 6L9.127 4.88l1.521-1.28a4.971 4.971 0 00-8.59 2.83L.084 5.976a6.977 6.977 0 0112.089-3.668l1.537-1.3L14 6z" />
                                                            </svg>
                                                            <span>Product Update - Q4 2024</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="flex items-center p-2 text-gray-800 dark:text-gray-100 hover:bg-gray-100 dark:hover:bg-gray-700/20 rounded-lg" href="#0" @click="searchOpen = false" @focus="searchOpen = true" @focusout="searchOpen = false">
                                                            <svg class="fill-current text-gray-400 dark:text-gray-500 shrink-0 mr-3" width="16" height="16" viewBox="0 0 16 16">
                                                                <path d="M15.707 14.293v.001a1 1 0 01-1.414 1.414L11.185 12.6A6.935 6.935 0 017 14a7.016 7.016 0 01-5.173-2.308l-1.537 1.3L0 8l4.873 1.12-1.521 1.285a4.971 4.971 0 008.59-2.835l1.979.454a6.971 6.971 0 01-1.321 3.157l3.107 3.112zM14 6L9.127 4.88l1.521-1.28a4.971 4.971 0 00-8.59 2.83L.084 5.976a6.977 6.977 0 0112.089-3.668l1.537-1.3L14 6z" />
                                                            </svg>
                                                            <span>Master Digital Marketing Strategy course</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="flex items-center p-2 text-gray-800 dark:text-gray-100 hover:bg-gray-100 dark:hover:bg-gray-700/20 rounded-lg" href="#0" @click="searchOpen = false" @focus="searchOpen = true" @focusout="searchOpen = false">
                                                            <svg class="fill-current text-gray-400 dark:text-gray-500 shrink-0 mr-3" width="16" height="16" viewBox="0 0 16 16">
                                                                <path d="M15.707 14.293v.001a1 1 0 01-1.414 1.414L11.185 12.6A6.935 6.935 0 017 14a7.016 7.016 0 01-5.173-2.308l-1.537 1.3L0 8l4.873 1.12-1.521 1.285a4.971 4.971 0 008.59-2.835l1.979.454a6.971 6.971 0 01-1.321 3.157l3.107 3.112zM14 6L9.127 4.88l1.521-1.28a4.971 4.971 0 00-8.59 2.83L.084 5.976a6.977 6.977 0 0112.089-3.668l1.537-1.3L14 6z" />
                                                            </svg>
                                                            <span>Dedicated forms for products</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="flex items-center p-2 text-gray-800 dark:text-gray-100 hover:bg-gray-100 dark:hover:bg-gray-700/20 rounded-lg" href="#0" @click="searchOpen = false" @focus="searchOpen = true" @focusout="searchOpen = false">
                                                            <svg class="fill-current text-gray-400 dark:text-gray-500 shrink-0 mr-3" width="16" height="16" viewBox="0 0 16 16">
                                                                <path d="M15.707 14.293v.001a1 1 0 01-1.414 1.414L11.185 12.6A6.935 6.935 0 017 14a7.016 7.016 0 01-5.173-2.308l-1.537 1.3L0 8l4.873 1.12-1.521 1.285a4.971 4.971 0 008.59-2.835l1.979.454a6.971 6.971 0 01-1.321 3.157l3.107 3.112zM14 6L9.127 4.88l1.521-1.28a4.971 4.971 0 00-8.59 2.83L.084 5.976a6.977 6.977 0 0112.089-3.668l1.537-1.3L14 6z" />
                                                            </svg>
                                                            <span>Product Update - Q4 2024</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- Recent pages -->
                                            <div class="mb-3 last:mb-0">
                                                <div class="text-xs font-semibold text-gray-400 dark:text-gray-500 uppercase px-2 mb-2">Recent pages</div>
                                                <ul class="text-sm">
                                                    <li>
                                                        <a class="flex items-center p-2 text-gray-800 dark:text-gray-100 hover:bg-gray-100 dark:hover:bg-gray-700/20 rounded-lg" href="#0" @click="searchOpen = false" @focus="searchOpen = true" @focusout="searchOpen = false">
                                                            <svg class="fill-current text-gray-400 dark:text-gray-500 shrink-0 mr-3" width="16" height="16" viewBox="0 0 16 16">
                                                                <path d="M14 0H2c-.6 0-1 .4-1 1v14c0 .6.4 1 1 1h8l5-5V1c0-.6-.4-1-1-1zM3 2h10v8H9v4H3V2z" />
                                                            </svg>
                                                            <span><span class="font-medium">Messages</span> - <span class="text-gray-600 dark:text-gray-400">Conversation / … / Mike Mills</span></span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="flex items-center p-2 text-gray-800 dark:text-gray-100 hover:bg-gray-100 dark:hover:bg-gray-700/20 rounded-lg" href="#0" @click="searchOpen = false" @focus="searchOpen = true" @focusout="searchOpen = false">
                                                            <svg class="fill-current text-gray-400 dark:text-gray-500 shrink-0 mr-3" width="16" height="16" viewBox="0 0 16 16">
                                                                <path d="M14 0H2c-.6 0-1 .4-1 1v14c0 .6.4 1 1 1h8l5-5V1c0-.6-.4-1-1-1zM3 2h10v8H9v4H3V2z" />
                                                            </svg>
                                                            <span><span class="font-medium">Messages</span> - <span class="text-gray-600 dark:text-gray-400">Conversation / … / Eva Patrick</span></span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>                                            
                            </div>
                            <!-- End -->
                        </div>

                    </div>
                </div>                            
            
            </div>

        </div>

    </div>
</x-app-layout>
