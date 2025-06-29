<div class="grow">

    <!-- Panel body -->
    <div class="p-6 space-y-6">
        <h2 class="text-2xl text-gray-800 dark:text-gray-100 font-bold mb-5">{{ __('ui.my_account') }} </h2>

        <!-- Picture -->
        <section>
            <div class="flex items-center">
                <div class="mr-4">
                    <img class="w-20 h-20 rounded-full" src="{{ asset('images/user-avatar-80.png') }}" width="80" height="80" alt="User upload" />
                </div>
                <button class="btn-sm dark:bg-gray-800 border-gray-200 dark:border-gray-700/60 hover:border-gray-300 dark:hover:border-gray-600 text-gray-800 dark:text-gray-300">{{ __('ui.change') }} </button>
            </div>
        </section>

        <!-- Business Profile -->
        <section>
            <h3 class="text-xl leading-snug text-gray-800 dark:text-gray-100 font-bold mb-1">{{ __('ui.business_profile') }}</h3>
            <div class="text-sm">{{ __('ui.business_profile_description') }}</div>
            <div class="sm:flex sm:items-center space-y-4 sm:space-y-0 sm:space-x-4 mt-5">
                <div class="sm:w-1/3">
                    <label class="block text-sm font-medium mb-1" for="name">{{ __('ui.business_name') }}</label>
                    <input id="name" class="form-input w-full" type="text" value="Acme Inc." />
                </div>
                <div class="sm:w-1/3">
                    <label class="block text-sm font-medium mb-1" for="business-id">{{ __('ui.business_id') }}</label>
                    <input id="business-id" class="form-input w-full" type="text" value="Kz4tSEqtUmA" />
                </div>
                <div class="sm:w-1/3">
                    <label class="block text-sm font-medium mb-1" for="location">{{ __('ui.location') }}</label>
                    <input id="location" class="form-input w-full" type="text" value="London, UK" />
                </div>
            </div>
        </section>

        <!-- Email -->
        <section>
            <h3 class="text-xl leading-snug text-gray-800 dark:text-gray-100 font-bold mb-1">{{ __('ui.email') }}</h3>
            <div class="text-sm">{{ __('ui.email_description') }}</div>
            <div class="flex flex-wrap mt-5">
                <div class="mr-2">
                    <label class="sr-only" for="email">{{ __('ui.business_email') }}</label>
                    <input id="email" class="form-input" type="email" value="admin@acmeinc.com" />
                </div>
                <button class="btn dark:bg-gray-800 border-gray-200 dark:border-gray-700/60 hover:border-gray-300 dark:hover:border-gray-600 text-gray-800 dark:text-gray-300">Change</button>
            </div>
        </section>

        <!-- Password -->
        <section>
            <h3 class="text-xl leading-snug text-gray-800 dark:text-gray-100 font-bold mb-1">{{ __('ui.password') }}</h3>
            <div class="text-sm">{{ __('ui.password_description') }}</div>
            <div class="mt-5">
                <button class="btn dark:bg-gray-800 border-gray-200 dark:border-gray-700/60 hover:border-gray-300 dark:hover:border-gray-600 text-gray-800 dark:text-gray-300">{{ __('ui.set_new_password') }}</button>
            </div>
        </section>

        <!-- Smart Sync -->
        <section>
            <h3 class="text-xl leading-snug text-gray-800 dark:text-gray-100 font-bold mb-1">{{ __('ui.001_translate_change') }}</h3>
            <div class="text-sm">{{ __('ui.002_translate_change') }}.</div>
            <div class="flex items-center mt-5" x-data="{ checked: true }">
                <div class="form-switch">
                    <input type="checkbox" id="toggle" class="sr-only" x-model="checked" />
                    <label for="toggle">
                        <span class="bg-white shadow-xs" aria-hidden="true"></span>
                        <span class="sr-only">Enable smart sync  </span>
                    </label>
                </div>
                <div class="text-sm text-gray-400 dark:text-gray-500 italic ml-2" x-text="checked ? 'On' : 'Off'"></div>
            </div>
        </section>
    </div>

    <!-- Panel footer -->
    <footer>
        <div class="flex flex-col px-6 py-5 border-t border-gray-200 dark:border-gray-700/60">
            <div class="flex self-end">
                <button class="btn dark:bg-gray-800 border-gray-200 dark:border-gray-700/60 hover:border-gray-300 dark:hover:border-gray-600 text-gray-800 dark:text-gray-300">{{ __('ui.cancel') }} </button>
                <button class="btn bg-gray-900 text-gray-100 hover:bg-gray-800 dark:bg-gray-100 dark:text-gray-800 dark:hover:bg-white ml-3">{{ __('ui.save_changes') }} </button>
            </div>
        </div>
    </footer>

</div>