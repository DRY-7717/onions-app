@extends('template.main')



@section('section')
    <section class="w-full">
        <div class="box-login w-[700px] mx-auto bg-[#b5b4b0] mt-11 p-6">
            <h1 class="font-bold text-center mb-5 text-xl">Prediksi Harga Bawang</h1>

            <div class="w-full grid grid-cols-2 gap-4">
                <form action="" class="w-full">
                    <div class="input-group mb-3">
                        <label for="" class="block mb-3">Total Kerusakan Lahan</label>
                        <div class="relative">
                            <input type="text" class="tk_lahan w-full px-3 py-2 border-none outline-none" name="tk_lahan"
                                id="tk_lahan">
                            <p class="absolute top-2 left-[265px] text-slate-500 ">Meter</p>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <label for="" class="block mb-3">Kenaikan Harga</label>
                        <input type="text" class="k_harga w-full px-3 py-2 border-none outline-none" name="k_harga"
                            id="k_harga" disabled>
                    </div>
                    <div class="input-group mb-3">
                        <label for="" class="block mb-3">Total Harga</label>
                        <input type="text" class="total_harga w-full px-3 py-2 border-none outline-none" name="total_harga"
                            id="total_harga" disabled>
                    </div>
                </form>
                <div class="desc w-full text-justify">
                    <p>Harga bawang di tangerang selatan adalah Rp.40.147, prediksi ini dihitung dari kerusakan lahan yang ditanami bawang. Lahan yang rusak di hitung dengan luas permeter.</p>
                </div>
            </div>

            <div class="w-full flex justify-between items-center mt-7">
                <button type="button"
                    class="btn_hitung px-6 py-2 font-bold bg-[#6693ee] text-white  border-[3px] border-[#456ab7] rounded-full text-sm">Hitung</button>
                <a href="/menuutama" class="px-6 py-2 rounded-full font-bold bg-[#fdad54]">Keluar</a>
            </div>

        </div>
    </section>
@endsection

@push('script')
    <script>
        const btn_hitung = document.querySelector(".btn_hitung")
        const total_harga = document.querySelector(".total_harga")
        const k_harga = document.querySelector(".k_harga")
        let hargaKerusakanPerMeter = 100
        let hargaBawang = 40147

        btn_hitung.addEventListener('click', () => {
            const tk_lahan = document.querySelector(".tk_lahan").value

            let kenaikanHarga = tk_lahan * hargaKerusakanPerMeter
            let total = hargaBawang + kenaikanHarga

            k_harga.value = `Rp.${kenaikanHarga.toLocaleString('id-ID')}`;
            total_harga.value = `Rp.${total.toLocaleString('id-ID')}`;


        })
    </script>
@endpush
