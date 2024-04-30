@extends('template.main')



@section('section')
    <section class="w-full">
        <div class="box-login w-[550px] mx-auto bg-[#ffae55] mt-24 p-6">
            <h1 class="font-bold text-center mb-7 text-xl">Detail User</h1>

            <table class="table-auto mx-auto mb-5">
                <tbody>
                    <tr class="mb-2 pb-2">
                        <td class="pb-2">
                            <label for="" class="font-bold">Username</label>
                        </td>
                        <td class="pb-2">
                            <input type="text"
                                class="ms-9 py-2 px-1 outline-none border-none focus:outline-none focus:ring focus:ring-blue-300"
                                name="username" value="{{ auth()->user()->username }}">
                        </td>
                    </tr>
                    <tr class="mb-2">
                        <td class="pb-2">
                            <label for="" class="font-bold">Nama</label>
                        </td>
                        <td class="pb-2">
                            <input type="text"
                                class="ms-9 py-2 px-1 outline-none border-none focus:outline-none focus:ring focus:ring-blue-300"
                                name="nama" value="{{ auth()->user()->nama }}">
                        </td>
                    </tr>
                    <tr class="">
                        <td class="pb-2">
                            <label for="" class="font-bold">Jabatan</label>
                        </td>
                        <td class="pb-2">
                            <input type="text"
                                class="ms-9 py-2 px-1 outline-none border-none focus:outline-none focus:ring focus:ring-blue-300"
                                name="jabatan" value="{{ auth()->user()->jabatan }}">
                        </td>
                    </tr>

                </tbody>
            </table>


            <div class="box-btn-login w-full text-center flex justify-between items-center">

                <a href="/menuadmin"
                    class="relative mx-auto font-bold bg-[#4ac7c6]  px-8 py-1  rounded-full text-sm">Keluar
                    <div class="kotak w-5 h-5 rounded-full bg-white font-normal absolute top-1 right-1">&#8658;</div>
                </a>
            </div>

        </div>
    </section>
@endsection
