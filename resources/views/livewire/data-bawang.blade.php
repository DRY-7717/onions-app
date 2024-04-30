<div>
    <div class="search-component mb-7 w-56 relative">
        <input type="text"
            class="w-full py-1 ps-9 pe-4 rounded-full outline-none border-none focus:ring-2 focus:ring-blue-700"
            wire:model.live.debounce.250ms="search">
        <div
            class="absolute top-0 left-0 search-icon-box p-2 w-8 h-8 rounded-full bg-blue-700 flex justify-center items-center text-white">
            <i class="fa-solid fa-magnifying-glass rotate-90"></i>
        </div>
    </div>

    <div class="w-full data-customer mb-40">
        <table class="w-full table-auto border-separate border-spacing-x-1">
            <thead>
                <tr>
                    <th class="">Jumlah Bawang</th>
                    <th class="">Harga Bawang</th>
                </tr>
            </thead>
            <tbody>
                @if ($onions->count())
                    @foreach ($onions as $onion)
                        <tr>
                            <td class="">{{ $onion->jml_bawang }}</td>
                            <td class="">{{ $onion->hrg_bawang }}</td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="2">Data not found!</td>
                    </tr>
                @endif

            </tbody>
        </table>
    </div>
</div>
