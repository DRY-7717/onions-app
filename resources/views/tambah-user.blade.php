@extends('template.main')



@section('section')
    <section class="w-full">
        <div class="box-login w-[550px] mx-auto bg-[#ffae55] mt-24 p-6">
            <h1 class="font-bold text-center mb-7 text-xl">Tambah User</h1>
            <form action="/tambahuser" method="POST">
                @csrf
                <table class="table-auto mx-auto mb-5">
                    <tbody>
                        <tr class="mb-2 pb-2">
                            <td class="pb-2">
                                <label for="" class="font-bold">Username</label>
                            </td>
                            <td class="pb-2">
                                <input type="text"
                                    class="ms-9 py-2 px-1 outline-none border-none focus:outline-none focus:ring focus:ring-blue-300"
                                    name="username">
                            </td>
                        </tr>
                        <tr class="mb-2">
                            <td class="pb-2">
                                <label for="" class="font-bold">Password</label>
                            </td>
                            <td class="pb-2">
                                <input type="password"
                                    class="ms-9 py-2 px-1 outline-none border-none focus:outline-none focus:ring focus:ring-blue-300"
                                    name="password">
                            </td>
                        </tr>
                        <tr class="mb-2">
                            <td class="pb-2">
                                <label for="" class="font-bold">Nama</label>
                            </td>
                            <td class="pb-2">
                                <input type="text"
                                    class="ms-9 py-2 px-1 outline-none border-none focus:outline-none focus:ring focus:ring-blue-300"
                                    name="nama">
                            </td>
                        </tr>
                        <tr class="">
                            <td class="pb-2">
                                <label for="" class="font-bold">Jabatan</label>
                            </td>
                            <td class="pb-2">
                                <input type="text"
                                    class="ms-9 py-2 px-1 outline-none border-none focus:outline-none focus:ring focus:ring-blue-300"
                                    name="jabatan">
                            </td>
                        </tr>

                    </tbody>
                </table>


                <div class="box-btn-login w-full text-center flex justify-between items-center">
                    <button type="submit" name="action" value="tambah"
                        class="mx-auto font-bold bg-[#6693ee] text-white px-7 py-1 border-[3px] border-[#456ab7] rounded-full text-sm">Tambah</button>
                    <button type="submit" name="action" value="ubah"
                        class="mx-auto font-bold bg-[#6693ee] text-white px-7 py-1 border-[3px] border-[#456ab7] rounded-full text-sm">Ubah</button>
                    <button type="submit" name="action" value="hapus"
                        class="mx-auto font-bold bg-[#6693ee] text-white px-7 py-1 border-[3px] border-[#456ab7] rounded-full text-sm">Hapus</button>
                    <a href="/menuadmin"
                        class="relative mx-auto font-bold bg-[#4ac7c6]  px-8 py-1  rounded-full text-sm">Keluar
                        <div class="kotak w-5 h-5 rounded-full bg-white font-normal absolute top-1 right-1">&#8658;</div>
                    </a>
                </div>

            </form>
        </div>
    </section>
@endsection
