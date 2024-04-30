@extends('template.main')



@section('section')
    <section
        class="w-[868px] h-dvh  bg-[url(../../public/img/bawang-merah.jpg)] bg-contain bg-center bg-no-repeat pt-11 mx-auto px-11 ">
        <div
            class="box-main-menu mx-auto bg-[#fdad54] mb-24 border-white border-2 w-52  py-2 px-4 font-bold text-2xl text-center rounded-tl-lg rounded-bl-lg rounded-tr-[50px] rounded-br-[50px]">
            Menu Utama
        </div>

        <div class="w-full grid grid-cols-2 mb-20">
            <div class="box-btn-data">
                <a href="/registercustomer">
                    <div
                        class="btn-main-data mb-16 relative bg-[#fff6db] w-[250px]  py-2 px-4 font-bold text-xl text-center rounded-full before:content-[''] before:w-11 before:h-16 before:rounded-s-full before:border-s-4 before:border-t-4 before:border-b-4 before:absolute before:-top-[10px] before:-left-[10px] before:border-[#F0D1C0] after:content-[''] after:w-11 after:h-16 after:rounded-e-full after:border-e-4 after:border-t-4 after:border-b-4 after:absolute after:-top-[10px] after:-right-[10px] after:border-[#F0D1C0]  ">
                        Data Customer
                    </div>
                </a>
                <div
                    class="btn-main-data mb-16 relative bg-[#fff6db] w-[250px]  py-2 px-4 font-bold text-xl text-center rounded-full before:content-[''] before:w-11 before:h-16 before:rounded-s-full before:border-s-4 before:border-t-4 before:border-b-4 before:absolute before:-top-[10px] before:-left-[10px] before:border-[#F0D1C0] after:content-[''] after:w-11 after:h-16 after:rounded-e-full after:border-e-4 after:border-t-4 after:border-b-4 after:absolute after:-top-[10px] after:-right-[10px] after:border-[#F0D1C0]  ">
                    Data Pesanan
                </div>
            </div>
            <div class="box-btn-data">
                <a href="/tambahbawang">
                    <div
                        class="btn-main-data mb-16 ms-auto relative bg-[#fff6db] w-[250px]  py-2 px-4 font-bold text-xl text-center rounded-full before:content-[''] before:w-11 before:h-16 before:rounded-s-full before:border-s-4 before:border-t-4 before:border-b-4 before:absolute before:-top-[10px] before:-left-[10px] before:border-[#F0D1C0] after:content-[''] after:w-11 after:h-16 after:rounded-e-full after:border-e-4 after:border-t-4 after:border-b-4 after:absolute after:-top-[10px] after:-right-[10px] after:border-[#F0D1C0]  ">
                        Data Bawang
                    </div>
                </a>
            </div>
        </div>

        <div class="w-full">
            <form action="" class="w-full text-end">
                <button type="submit"
                    class="btn-main-data  relative bg-[#fdad54] w-[250px]  py-2 px-4 font-bold text-xl text-center rounded-full before:content-[''] before:w-11 before:h-16 before:rounded-s-full before:border-s-4 before:border-t-4 before:border-b-4 before:absolute before:-top-[10px] before:-left-[10px] before:border-[#F0D1C0] after:content-[''] after:w-11 after:h-16 after:rounded-e-full after:border-e-4 after:border-t-4 after:border-b-4 after:absolute after:-top-[10px] after:-right-[10px] after:border-[#F0D1C0]  ">
                    Keluar
                </button>
            </form>
        </div>


    </section>
@endsection