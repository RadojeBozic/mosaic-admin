<div class="grow">

    <!-- Panel body -->
    <div class="p-6 space-y-6">
        <div>
            <h2 class="text-2xl text-gray-800 dark:text-gray-100 font-bold mb-4">{{ __('ui.billing_invoices') }}</h2>
            <div class="text-sm">{{ __('ui.billing_invoices_description', ['amount' => '$34', 'date' => 'July 9, 2024']) }}</div>
        </div>

        <!-- Billing Information -->
        <section>
            <h3 class="text-xl leading-snug text-gray-800 dark:text-gray-100 font-bold mb-1">{{ __('ui.billing_information') }}</h3>
            <ul>
                <li class="md:flex md:justify-between md:items-center py-3 border-b border-gray-200 dark:border-gray-700/60">
                    <!-- Left -->
                    <div class="text-sm text-gray-800 dark:text-gray-100 font-medium">{{ __('ui.payment_method') }}</div>
                    <!-- Right -->
                    <div class="text-sm text-gray-600 dark:text-gray-400 ml-4">
                        <span class="mr-3">Mastercard ending 9282</span>
                        <a class="font-medium text-violet-500 hover:text-violet-600 dark:hover:text-violet-400" href="#0">{{ __('ui.edit') }}</a>
                    </div>
                </li>
                <li class="md:flex md:justify-between md:items-center py-3 border-b border-gray-200 dark:border-gray-700/60">
                    <!-- Left -->
                    <div class="text-sm text-gray-800 dark:text-gray-100 font-medium">{{ __('ui.billing_interval') }}</div>
                    <!-- Right -->
                    <div class="text-sm text-gray-600 dark:text-gray-400 ml-4">
                        <span class="mr-3">{{ __('ui.annually') }}</span>
                        <a class="font-medium text-violet-500 hover:text-violet-600 dark:hover:text-violet-400" href="#0">{{ __('ui.edit') }}</a>
                    </div>
                </li>
                <li class="md:flex md:justify-between md:items-center py-3 border-b border-gray-200 dark:border-gray-700/60">
                    <!-- Left -->
                    <div class="text-sm text-gray-800 dark:text-gray-100 font-medium">{{ __('ui.vat_gst_number') }}</div>
                    <!-- Right -->
                    <div class="text-sm text-gray-600 dark:text-gray-400 ml-4">
                        <span class="mr-3">UK849700927</span>
                        <a class="font-medium text-violet-500 hover:text-violet-600 dark:hover:text-violet-400" href="#0">{{ __('ui.edit') }}</a>
                    </div>
                </li>
                <li class="md:flex md:justify-between md:items-center py-3 border-b border-gray-200 dark:border-gray-700/60">
                    <!-- Left -->
                    <div class="text-sm text-gray-800 dark:text-gray-100 font-medium">{{ __('ui.your_address') }}</div>
                    <!-- Right -->
                    <div class="text-sm text-gray-600 dark:text-gray-400 ml-4">
                        <span class="mr-3">34 Savoy Street, London, UK, 24E8X</span>
                        <a class="font-medium text-violet-500 hover:text-violet-600 dark:hover:text-violet-400" href="#0">{{ __('ui.edit') }}</a>
                    </div>
                </li>
                <li class="md:flex md:justify-between md:items-center py-3 border-b border-gray-200 dark:border-gray-700/60">
                    <!-- Left -->
                    <div class="text-sm text-gray-800 dark:text-gray-100 font-medium">{{ __('ui.billing_address') }}</div>
                    <!-- Right -->
                    <div class="text-sm text-gray-600 dark:text-gray-400 ml-4">
                        <span class="mr-3">hello@cruip.com</span>
                        <a class="font-medium text-violet-500 hover:text-violet-600 dark:hover:text-violet-400" href="#0">{{ __('ui.edit') }}</a>
                    </div>
                </li>
            </ul>
        </section>

        <!-- Invoices -->
        <section>
            <h3 class="text-xl leading-snug text-gray-800 dark:text-gray-100 font-bold mb-1">{{ __('ui.invoices') }}</h3>
            <!-- Table -->
            <table class="table-auto w-full dark:text-gray-400">
                <!-- Table header -->
                <thead class="text-xs uppercase text-gray-400 dark:text-gray-500">
                    <tr class="flex flex-wrap md:table-row md:flex-no-wrap">
                        <th class="w-full block md:w-auto md:table-cell py-2">
                            <div class="font-semibold text-left">{{ __('ui.year') }}</div>
                        </th>
                        <th class="w-full hidden md:w-auto md:table-cell py-2">
                            <div class="font-semibold text-left">{{ __('ui.plan') }}</div>
                        </th>
                        <th class="w-full hidden md:w-auto md:table-cell py-2">
                            <div class="font-semibold text-left">{{ __('ui.amount') }}</div>
                        </th>
                        <th class="w-full hidden md:w-auto md:table-cell py-2">
                            <div class="font-semibold text-right"></div>
                        </th>
                    </tr>
                </thead>
                <!-- Table body -->
                <tbody class="text-sm">
                    <!-- Row -->
                    <tr class="flex flex-wrap md:table-row md:flex-no-wrap border-b border-gray-200 dark:border-gray-700/60 py-2 md:py-0">
                        <td class="w-full block md:w-auto md:table-cell py-0.5 md:py-2">
                            <div class="text-left font-medium text-gray-800 dark:text-gray-100">2024</div>
                        </td>
                        <td class="w-full block md:w-auto md:table-cell py-0.5 md:py-2">
                            <div class="text-left">{{ __('ui.basic_plan') }} - {{ __('ui.annually') }}</div>
                        </td>
                        <td class="w-full block md:w-auto md:table-cell py-0.5 md:py-2">
                            <div class="text-left font-medium">{{ __('ui.amount') }}: $349.00</div>
                        </td>
                        <td class="w-full block md:w-auto md:table-cell py-0.5 md:py-2">
                            <div class="text-right flex items-center md:justify-end">
                                <a class="font-medium text-violet-500 hover:text-violet-600 dark:hover:text-violet-400" href="#0">{{ __('ui.html') }}</a>
                                <span class="block w-px h-4 bg-gray-200 dark:bg-gray-700 mx-2" aria-hidden="true"></span>
                                <a class="font-medium text-violet-500 hover:text-violet-600 dark:hover:text-violet-400" href="#0">{{ __('ui.pdf') }}</a>
                            </div>
                        </td>
                    </tr>
                    <!-- Row -->
                    <tr class="flex flex-wrap md:table-row md:flex-no-wrap border-b border-gray-200 dark:border-gray-700/60 py-2 md:py-0">
                        <td class="w-full block md:w-auto md:table-cell py-0.5 md:py-2">
                            <div class="text-left font-medium text-gray-800 dark:text-gray-100">2024</div>
                        </td>
                        <td class="w-full block md:w-auto md:table-cell py-0.5 md:py-2">
                            <div class="text-left">{{ __('ui.basic_plan') }} - {{ __('ui.annually') }}</div>
                        </td>
                        <td class="w-full block md:w-auto md:table-cell py-0.5 md:py-2">
                            <div class="text-left font-medium">{{ __('ui.amount') }}: $349.00</div>
                        </td>
                        <td class="w-full block md:w-auto md:table-cell py-0.5 md:py-2">
                            <div class="text-right flex items-center md:justify-end">
                                <a class="font-medium text-violet-500 hover:text-violet-600 dark:hover:text-violet-400" href="#0">{{ __('ui.html') }}</a>
                                <span class="block w-px h-4 bg-gray-200 dark:bg-gray-700 mx-2" aria-hidden="true"></span>
                                <a class="font-medium text-violet-500 hover:text-violet-600 dark:hover:text-violet-400" href="#0">{{ __('ui.pdf') }}</a>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
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