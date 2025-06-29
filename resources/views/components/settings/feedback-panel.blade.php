<div class="grow">

    <!-- Panel body -->
    <div class="p-6 space-y-6">
        <div>
            <h2 class="text-2xl text-gray-800 dark:text-gray-100 font-bold mb-4">{{ __('ui.give_feedback') }}</h2>
            <div class="text-sm">{{ __('ui.feedback_description') }}</div>
        </div>

        <!-- Rate -->
        <section>
            <h3 class="text-xl leading-snug text-gray-800 dark:text-gray-100 font-bold mb-6">{{ __('ui.feedback_question') }}</h3>
            <div class="w-full max-w-xl">
                <div class="relative">
                    <div class="absolute left-0 top-1/2 -mt-px w-full h-0.5 bg-gray-200 dark:bg-gray-700/60" aria-hidden="true"></div>
                    <ul class="relative flex justify-between w-full">
                        <li class="flex">
                            <button class="w-3 h-3 rounded-full bg-white dark:bg-gray-800 border-2 border-gray-400 dark:border-gray-500">
                                <span class="sr-only">1</span>
                            </button>
                        </li>
                        <li class="flex">
                            <button class="w-3 h-3 rounded-full bg-white dark:bg-gray-800 border-2 border-gray-400 dark:border-gray-500">
                                <span class="sr-only">2</span>
                            </button>
                        </li>
                        <li class="flex">
                            <button class="w-3 h-3 rounded-full bg-violet-500 border-2 border-violet-500">
                                <span class="sr-only">3</span>
                            </button>
                        </li>
                        <li class="flex">
                            <button class="w-3 h-3 rounded-full bg-white dark:bg-gray-800 border-2 border-gray-400 dark:border-gray-500">
                                <span class="sr-only">4</span>
                            </button>
                        </li>
                        <li class="flex">
                            <button class="w-3 h-3 rounded-full bg-white dark:bg-gray-800 border-2 border-gray-400 dark:border-gray-500">
                                <span class="sr-only">5</span>
                            </button>
                        </li>
                    </ul>
                </div>
                <div class="w-full flex justify-between text-sm text-gray-500 dark:text-gray-400 italic mt-3">
                    <div>{{ __('ui.not_at_all') }}</div>
                    <div>{{ __('ui.extremely_likely') }}</div>
                </div>
            </div>
        </section>

        <!-- Tell us in words -->
        <section>
            <h3 class="text-xl leading-snug text-gray-800 dark:text-gray-100 font-bold mb-5">{{ __('ui.tell_us_in_words') }}</h3>
            <!-- Form -->
            <label class="sr-only" for="feedback">{{ __('ui.leave_feedback') }}</label>
            <textarea id="feedback" class="form-textarea w-full focus:border-gray-300" rows="4" placeholder="{{ __('ui.feedback_placeholder') }}"></textarea>
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