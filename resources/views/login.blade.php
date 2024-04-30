@extends('template.main')



@section('section')
    <section class="w-full">
        <div class="box-login w-[500px] mx-auto bg-[#d6d9e0] mt-36 py-6 px-4">
            <form action="/login" method="POST">
                @csrf
                <table class="table-auto mx-auto mb-12">
                    <tbody>
                        <tr class="mb-2 pb-2">
                            <td class="pb-11">
                                <label for="" class="">Username</label>
                            </td>
                            <td class="pb-11">
                                <input type="text"
                                    class="ms-9 py-2 px-1 outline-none border-none focus:outline-none focus:ring focus:ring-blue-300"
                                    name="username">
                            </td>
                        </tr>
                        <tr class="mb-2 pb-2">
                            <td class="pb-2">
                                <label for="" class="">Password</label>
                            </td>
                            <td class="pb-2">
                                <input type="password"
                                    class="ms-9 py-2 px-1 outline-none border-none focus:outline-none focus:ring focus:ring-blue-300"
                                    name="password">
                            </td>
                        </tr>

                    </tbody>
                </table>

                <div class="box-btn-login w-full text-center">
                    <button type="submit" class="mx-auto bg-[#eeeefa] px-5 py-1 rounded-md text-sm">Login</button>
                </div>

            </form>
        </div>
    </section>
@endsection
