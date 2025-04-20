<div class="w-full max-w-[85rem] py-10 px-4 sm:px-6 lg:px-8 mx-auto">
    <h1 class="text-2xl font-bold text-gray-800 dark:text-white mb-4">Checkout</h1>

    <form wire:submit.prevent='placeOrder' class="grid grid-cols-12 gap-4">
        <!-- Bagian Kiri: Formulir Pengiriman -->
        <div class="md:col-span-12 lg:col-span-8 col-span-12">
            <div class="bg-white rounded-xl shadow p-4 sm:p-7 dark:bg-slate-900">
                <div class="mb-6">
                    <h2 class="text-xl font-bold underline text-gray-700 dark:text-white mb-2">Alamat Pengiriman</h2>

                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label class="block text-gray-700 dark:text-white mb-1" for="first_name">Nama Depan</label>
                            <input wire:model='first_name' id="first_name" type="text" class="w-full rounded-lg border py-2 px-3 dark:bg-gray-700 dark:text-white dark:border-none @error('first_name') border-red-500 @enderror" />
                            @error('first_name') <div class="text-red-500 text-sm">{{ $message }}</div> @enderror
                        </div>
                        <div>
                            <label class="block text-gray-700 dark:text-white mb-1" for="last_name">Nama Belakang</label>
                            <input wire:model='last_name' id="last_name" type="text" class="w-full rounded-lg border py-2 px-3 dark:bg-gray-700 dark:text-white dark:border-none @error('last_name') border-red-500 @enderror" />
                            @error('last_name') <div class="text-red-500 text-sm">{{ $message }}</div> @enderror
                        </div>
                    </div>

                    <div class="mt-4">
                        <label class="block text-gray-700 dark:text-white mb-1" for="phone">Nomor Telepon</label>
                        <input wire:model='phone' id="phone" type="text" class="w-full rounded-lg border py-2 px-3 dark:bg-gray-700 dark:text-white dark:border-none @error('phone') border-red-500 @enderror" />
                        @error('phone') <div class="text-red-500 text-sm">{{ $message }}</div> @enderror
                    </div>

                    <div class="mt-4">
                        <label class="block text-gray-700 dark:text-white mb-1" for="address">Alamat</label>
                        <input wire:model='street_address' id="address" type="text" class="w-full rounded-lg border py-2 px-3 dark:bg-gray-700 dark:text-white dark:border-none @error('street_address') border-red-500 @enderror" />
                        @error('street_address') <div class="text-red-500 text-sm">{{ $message }}</div> @enderror
                    </div>

                    <div class="mt-4">
                        <label class="block text-gray-700 dark:text-white mb-1" for="city">Kota</label>
                        <input wire:model='city' id="city" type="text" class="w-full rounded-lg border py-2 px-3 dark:bg-gray-700 dark:text-white dark:border-none @error('city') border-red-500 @enderror" />
                        @error('city') <div class="text-red-500 text-sm">{{ $message }}</div> @enderror
                    </div>

                    <div class="grid grid-cols-2 gap-4 mt-4">
                        <div>
                            <label class="block text-gray-700 dark:text-white mb-1" for="zip">Kode Pos</label>
                            <input wire:model='zip_code' id="zip" type="text" class="w-full rounded-lg border py-2 px-3 dark:bg-gray-700 dark:text-white dark:border-none @error('zip_code') border-red-500 @enderror" />
                            @error('zip_code') <div class="text-red-500 text-sm">{{ $message }}</div> @enderror
                        </div>
                    </div>
                </div>

                <!-- Metode Pembayaran -->
                <div class="text-lg font-semibold mb-4 text-white">Metode Pembayaran</div>
                <ul class="grid w-full gap-6 md:grid-cols-2">
                    <li>
                        <input wire:model='payment_method' type="radio" value="cod" id="hosting-small" class="hidden peer" required />
                        <label for="hosting-small" class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">
                            <div class="block">
                                <div class="w-full text-lg font-semibold">Cash on Delivery</div>
                            </div>
                            <svg class="w-5 h-5 ms-3 rtl:rotate-180" fill="none" viewBox="0 0 14 10">
                                <path d="M1 5h12m0 0L9 1m4 4L9 9" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                            </svg>
                        </label>
                    </li>
                    {{-- Tambahan metode pembayaran bisa ditambahkan di sini --}}
                </ul>
                @error('payment_method') <div class="text-red-500 text-sm">{{ $message }}</div> @enderror
            </div>
        </div>

        <!-- Bagian Kanan: Rincian -->
        <div class="md:col-span-12 lg:col-span-4 col-span-12">
            <div class="bg-white rounded-xl shadow p-4 sm:p-7 dark:bg-slate-900">
                <div class="text-xl font-bold underline text-gray-700 dark:text-white mb-2">Rincian Pembelian</div>

                @php
                    $ongkir = 20000;
                    $total_akhir = $grand_total + $ongkir;
                @endphp

                <div class="flex justify-between mb-2 font-bold text-white">
                    <span>Subtotal</span>
                    <span>{{ Number::currency($grand_total, 'IDR') }}</span>
                </div>

                <div class="flex justify-between mb-2 font-bold text-white">
                    <span>Ongkos Pengiriman</span>
                    <span>{{ Number::currency($ongkir, 'IDR') }}</span>
                </div>

                <hr class="my-4 h-1 rounded bg-gray-500" />

                <div class="flex justify-between mb-2 font-bold text-white">
                    <span>Grand Total</span>
                    <span>{{ Number::currency($total_akhir, 'IDR') }}</span>
                </div>
            </div>

            <button type="submit" class="bg-green-500 mt-4 w-full p-3 rounded-lg text-lg text-white hover:bg-green-600">
                <span wire:loading.remove>Order Sekarang</span>
                <span wire:loading>Memproses...</span>
            </button>

			<div class="bg-white mt-4 rounded-xl shadow p-4 sm:p-7 dark:bg-slate-900">
				<div class="text-xl font-bold underline text-gray-700 dark:text-white mb-2">
					Ringkasan Keranjang
				</div>
				@php
				$ongkir = 20000;
				$grand_total = $grand_total + $ongkir;
			@endphp
				<ul class="divide-y divide-gray-200 dark:divide-gray-700" role="list">
					@foreach ($cart_items as $ci )
                    <li class="py-3 sm:py-4" wire:key='{{ $ci['product_id'] }}'>
						<div class="flex items-center">
							<div class="flex-shrink-0">
								<img alt="{{ $ci['name'] }}" class="w-12 h-12 rounded-full" src="{{ url('storage',$ci['image']) }}">
								</img>
							</div>
							<div class="flex-1 min-w-0 ms-4">
								<p class="text-sm font-medium text-gray-900 truncate dark:text-white">
								{{ $ci['name'] }}
								</p>
								<p class="text-sm text-gray-500 truncate dark:text-gray-400">
									Jumlah: {{ $ci['quantity'] }}
								</p>
							</div>
							<div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
								{{ Number::currency($ci['total_amount'], 'IDR') }}
							</div>
						</div>
					</li>
                    @endforeach
				</ul>
			</div>
        </div>
    </form>
</div>
