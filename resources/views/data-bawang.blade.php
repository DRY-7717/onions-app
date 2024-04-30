@extends('template.main')



@section('section')
    <section class="w-full">
        <div class="box-login w-[700px] mx-auto bg-[#b5b4b0] mt-11 p-6">
            <h1 class="font-bold text-center mb-5 text-xl">Data Bawang</h1>

            <livewire:data-bawang />

            <div class="w-full flex justify-between items-center mb-20">
                <a href="" class="px-6 py-2 rounded-full font-bold bg-[#fdad54]">Simpan</a>
                <a href="/" class="px-6 py-2 rounded-full font-bold bg-[#fdad54]">Keluar</a>
            </div>

        </div>
    </section>
@endsection
