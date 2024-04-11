<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="container mx-auto px-4 bg-gray-200 pt-10">
        <div class="flex flex-col lg:flex-row justify-between">
            <div class="lg:w-1/2 mb-8">
                <div class="bg-gray-200 rounded-lg p-6">
                    <h1 class="font-bold mb-4">Destinasi yang akan dikunjungi:</h1>
                    <ul class="list-disc list-inside">
                        @foreach ($destinasi as $item)
                        <li class="flex items-center mb-4">
                            <svg class="w-6 h-6 text-green-500 mr-4" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <circle cx="12" cy="12" r="1.5" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" />
                            </svg>
                            <span>{{ $item }}</span>
                        </li>
                        @endforeach
                    </ul>
                </div>
                @if (!empty($spot))
                <div class="bg-gray-200 rounded-lg p-6">
                    <h1 class="font-bold mb-4">Spot yang dapat dikunjungi:</h1>
                    <ul class="list-disc list-inside">
                        @foreach ($spot as $item)
                        <li class="flex items-center mb-4">
                            <svg class="w-6 h-6 text-green-500 mr-4" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <circle cx="12" cy="12" r="1.5" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" />
                            </svg>
                            <span>{{ $item }}</span>
                        </li>
                        @endforeach
                    </ul>
                </div>
                @endif
            </div>
            <div class="lg:w-1/2 mb-8">
                <div class="bg-gray-200 rounded-lg p-6">
                    <h1 class="font-bold mb-4">Harga paket tour termasuk:</h1>
                    <ul class="list-disc list-inside">
                        @foreach ($fasilitas as $items)
                        <li class="flex items-center mb-4">
                            <svg class="w-6 h-6 text-green-500 mr-4" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <circle cx="12" cy="12" r="1.5" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" />
                            </svg>
                            <span>{{ $items }}</span>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>