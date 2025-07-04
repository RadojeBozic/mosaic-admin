<div class="bg-white dark:bg-gray-900">
    <div x-data="handleSelect">

        <!-- Table -->
        <div class="overflow-x-auto">
            <table class="table-auto w-full dark:text-gray-300" @click.stop="$dispatch('set-transactionopen', true)">
                <!-- Table header -->
                <thead class="text-xs font-semibold uppercase text-gray-500 border-t border-b border-gray-200 dark:border-gray-700/60">
                    <tr>
                        <th class="px-2 first:pl-5 last:pr-5 py-3 whitespace-nowrap w-px">
                            <div class="flex items-center">
                                <label class="inline-flex">
                                    <span class="sr-only">{{ __('ui.select_all') }} </span>
                                    <input id="parent-checkbox" class="form-checkbox" type="checkbox" @click="toggleAll" />
                                </label>
                            </div>
                        </th>
                        <th class="px-2 first:pl-5 last:pr-5 py-3 whitespace-nowrap">
                            <div class="font-semibold text-left"> {{ __('ui.counterparty') }}</div>
                        </th>
                        <th class="px-2 first:pl-5 last:pr-5 py-3 whitespace-nowrap">
                            <div class="font-semibold text-left">{{ __('ui.payment_date') }}</div>
                        </th>
                        <th class="px-2 first:pl-5 last:pr-5 py-3 whitespace-nowrap">
                            <div class="font-semibold text-left">{{ __('ui.status') }}</div>
                        </th>
                        <th class="px-2 first:pl-5 last:pr-5 py-3 whitespace-nowrap">
                            <div class="font-semibold text-right">{{ __('ui.amount') }}</div>
                        </th>
                    </tr>
                </thead>
                <!-- Table body -->
                <tbody class="text-sm divide-y divide-gray-100 dark:divide-gray-700/60 border-b border-gray-200 dark:border-gray-700/60">
                    <!-- Row -->
                    @foreach($transactions as $transaction)
                        @php                    
                            if ($transaction->status === 'Completed') :
                                $status_color = 'bg-green-500/20 text-green-700';
                            elseif ($transaction->status === 'Canceled') :
                                $status_color = 'bg-red-500/20 text-red-700';
                            else :
                                $status_color = 'bg-gray-400/20 text-gray-500 dark:text-gray-400';
                            endif;
                            if (substr($transaction->amount, 0, 1) === '+') :
                                $amount_color = 'text-green-500';
                            else :
                                $amount_color = 'text-gray-800 dark:text-gray-300';
                            endif;
                        @endphp                     
                        <tr>
                            <td class="px-2 first:pl-5 last:pr-5 py-3 whitespace-nowrap w-px">
                                <div class="flex items-center">
                                    <label class="inline-flex">
                                        <span class="sr-only">{{ __('ui.select') }}</span>
                                        <input class="table-item form-checkbox" type="checkbox" @click.stop="uncheckParent" />
                                    </label>
                                </div>
                            </td>
                            <td class="px-2 first:pl-5 last:pr-5 py-3 whitespace-nowrap md:w-1/2">
                                <div class="flex items-center">
                                    <div class="w-9 h-9 shrink-0 mr-2 sm:mr-3">
                                        <img class="w-9 h-9 rounded-full" src="{{ asset('images/' . $transaction->image) }}" width="36" height="36" alt="{{ $transaction->name }}" />
                                    </div>
                                    <div class="font-medium text-gray-800 dark:text-gray-100">{{ $transaction->name }}</div>
                                </div>
                            </td>
                            <td class="px-2 first:pl-5 last:pr-5 py-3 whitespace-nowrap">
                                <div class="text-left">{{ \Carbon\Carbon::parse($transaction->created_at)->format('d/m/Y') }}</div>
                            </td>
                            <td class="px-2 first:pl-5 last:pr-5 py-3 whitespace-nowrap">
                                <div class="text-left">
                                    <div class="text-xs inline-flex font-medium rounded-full text-center px-2.5 py-1 {{$status_color}}">{{ $transaction->status }}</div>
                                </div>
                            </td>
                            <td class="px-2 first:pl-5 last:pr-5 py-3 whitespace-nowrap w-px">
                                <div class="text-right font-medium {{$amount_color}}">{{ $transaction->amount }}</div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
</div>
<script>
    // A basic demo function to handle "select all" functionality
    document.addEventListener('alpine:init', () => {
        Alpine.data('handleSelect', () => ({
            selectall: false,
            selectAction() {
                countEl = document.querySelector('.table-items-action');
                if (!countEl) return;
                checkboxes = document.querySelectorAll('input.table-item:checked');
                document.querySelector('.table-items-count').innerHTML = checkboxes.length;
                if (checkboxes.length > 0) {
                    countEl.classList.remove('hidden');
                } else {
                    countEl.classList.add('hidden');
                }
            },
            toggleAll() {
                this.selectall = !this.selectall;
                checkboxes = document.querySelectorAll('input.table-item');
                [...checkboxes].map((el) => {
                    el.checked = this.selectall;
                });
                this.selectAction();
            },
            uncheckParent() {
                this.selectall = false;
                document.getElementById('parent-checkbox').checked = false;
                this.selectAction();
            },
        }))
    })    
</script>