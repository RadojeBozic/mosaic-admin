<div class="grow">

    <!-- Panel body -->
    <div class="p-6 space-y-6">
        <h2 class="text-2xl text-gray-800 dark:text-gray-100 font-bold mb-5">{{ __('ui.my_notifications') }}</h2>

        <!-- General -->
        <section>
            <h3 class="text-xl leading-snug text-gray-800 dark:text-gray-100 font-bold mb-1">{{ __('ui.general') }}</h3>
            <ul>
                <li class="flex justify-between items-center py-3 border-b border-gray-200 dark:border-gray-700/60">
                    <!-- Left -->
                    <div>
                        <div class="text-gray-800 dark:text-gray-100 font-semibold">{{ __('ui.comments_and_replies') }}</div>
                        <div class="text-sm">{{ __('ui.comments_and_replies_description') }}</div>
                    </div>
                    <!-- Right -->
                    <div class="flex items-center ml-4" x-data="{ checked: true }">
                        <div class="text-sm text-gray-400 dark:text-gray-500 italic mr-2" x-text="checked ? 'On' : 'Off'"></div>
                        <div class="form-switch">
                            <input type="checkbox" id="comments" class="sr-only" x-model="checked" />
                            <label for="comments">
                                <span class="bg-white shadow-xs" aria-hidden="true"></span>
                                <span class="sr-only">{{ __('ui.enable_smart_sync') }}</span>
                            </label>
                        </div>
                    </div>
                </li>
                <li class="flex justify-between items-center py-3 border-b border-gray-200 dark:border-gray-700/60">
                    <!-- Left -->
                    <div>
                        <div class="text-gray-800 dark:text-gray-100 font-semibold">{{ __('ui.messages') }}</div>
                        <div class="text-sm">{{ __('ui.messages_description') }}</div>
                    </div>
                    <!-- Right -->
                    <div class="flex items-center ml-4" x-data="{ checked: true }">
                        <div class="text-sm text-gray-400 dark:text-gray-500 italic mr-2" x-text="checked ? 'On' : 'Off'"></div>
                        <div class="form-switch">
                            <input type="checkbox" id="messages" class="sr-only" x-model="checked" />
                            <label for="messages">
                                <span class="bg-white shadow-xs" aria-hidden="true"></span>
                                <span class="sr-only">{{ __('ui.enable_smart_sync') }}</span>
                            </label>
                        </div>
                    </div>
                </li>
                <li class="flex justify-between items-center py-3 border-b border-gray-200 dark:border-gray-700/60">
                    <!-- Left -->
                    <div>
                        <div class="text-gray-800 dark:text-gray-100 font-semibold">{{ __('ui.mentions') }}</div>
                        <div class="text-sm">{{ __('ui.mentions_description') }}</div>
                    </div>
                    <!-- Right -->
                    <div class="flex items-center ml-4" x-data="{ checked: false }">
                        <div class="text-sm text-gray-400 dark:text-gray-500 italic mr-2" x-text="checked ? 'On' : 'Off'"></div>
                        <div class="form-switch">
                            <input type="checkbox" id="mentions" class="sr-only" x-model="checked" />
                            <label for="mentions">
                                <span class="bg-white shadow-xs" aria-hidden="true"></span>
                                <span class="sr-only">{{ __('ui.enable_smart_sync') }}</span>
                            </label>
                        </div>
                    </div>
                </li>
            </ul>
        </section>

        <!-- Shares -->
        <section>
            <h3 class="text-xl leading-snug text-gray-800 dark:text-gray-100 font-bold mb-1">{{ __('ui.shares') }}</h3>
            <ul>
                <li class="flex justify-between items-center py-3 border-b border-gray-200 dark:border-gray-700/60">
                    <!-- Left -->
                    <div>
                        <div class="text-gray-800 dark:text-gray-100 font-semibold">{{ __('ui.shares_of_my_content') }}</div>
                        <div class="text-sm">{{ __('ui.shares_of_my_content_description') }}</div>
                    </div>
                    <!-- Right -->
                    <div class="flex items-center ml-4">
                        <button class="btn-sm border-gray-200 dark:border-gray-700/60 hover:border-gray-300 dark:hover:border-gray-600 shadow-xs">Manage</button>
                    </div>
                </li>
                <li class="flex justify-between items-center py-3 border-b border-gray-200 dark:border-gray-700/60">
                    <!-- Left -->
                    <div>
                        <div class="text-gray-800 dark:text-gray-100 font-semibold">{{ __('ui.team_invites') }}</div>
                        <div class="text-sm">{{ __('ui.team_invites_description') }}</div>
                    </div>
                    <!-- Right -->
                    <div class="flex items-center ml-4">
                        <button class="btn-sm border-gray-200 dark:border-gray-700/60 hover:border-gray-300 dark:hover:border-gray-600 shadow-xs">Manage</button>
                    </div>
                </li>
                <li class="flex justify-between items-center py-3 border-b border-gray-200 dark:border-gray-700/60">
                    <!-- Left -->
                    <div>
                        <div class="text-gray-800 dark:text-gray-100 font-semibold">{{ __('ui.smart_connection') }}</div>
                        <div class="text-sm">{{ __('ui.smart_connection_description') }}</div>
                    </div>
                    <!-- Right -->
                    <div class="flex items-center ml-4">
                        <div class="text-sm text-gray-400 dark:text-gray-500 italic mr-2 hidden md:block">{{ __('ui.active') }}</div>
                        <button class="btn-sm border-gray-200 dark:border-gray-700/60 hover:border-gray-300 dark:hover:border-gray-600 shadow-xs text-red-500">{{ __('ui.disable') }}</button>
                    </div>
                </li>
            </ul>
        </section>
    </div>

    <!-- Panel footer -->
    <footer>
        <div class="flex flex-col px-6 py-5 border-t border-gray-200 dark:border-gray-700/60">
            <div class="flex self-end">
                <button class="btn dark:bg-gray-800 border-gray-200 dark:border-gray-700/60 hover:border-gray-300 dark:hover:border-gray-600 text-gray-800 dark:text-gray-300">{{ __('ui.cancel') }}</button>
                <button class="btn bg-gray-900 text-gray-100 hover:bg-gray-800 dark:bg-gray-100 dark:text-gray-800 dark:hover:bg-white ml-3">{{ __('ui.save_changes') }}</button>
            </div>
        </div>
    </footer>

</div>