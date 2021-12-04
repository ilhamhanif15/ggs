@extends('welcome')

@section('contents')


        <div class="container" style="padding-top: 5rem">
            <div class="col-lg-4 pt-5">
                <h3 class="display-6 fw-bold border-3 border-bottom" style="color: #105d3b">Location</h3>
                <p>Perum Griya Permata Asri
                    Jl. Kapuas 285, Balikpapan
                    76114</p>
            </div>

            <div>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.8892382461813!2d116.87860091470115!3d-1.2365068990981096!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2df14672c7852d75%3A0xdd59926155391643!2sJl.%20Kapuas%20No.285%2C%20Gn.%20Bahagia%2C%20Kecamatan%20Balikpapan%20Selatan%2C%20Kota%20Balikpapan%2C%20Kalimantan%20Timur%2076114!5e0!3m2!1sen!2sid!4v1638551144619!5m2!1sen!2sid"
                    style="border:0; width: 100%; height: 270px;" allowfullscreen="" loading="lazy"></iframe>
            </div>

            <div class="row mt-5">
                <div class="col-lg-4 bg-light p-3 p-md-5">
                    <h3 class="display-6 fw-bold border-3 border-bottom" style="color: #dab96a">Contact detail</h3>
                    <p><i class="fa fa-user" aria-hidden="true"></i> Nama : Defa Meidi Wijaya</p>
                    <p><i class="fa fa-envelope" aria-hidden="true"></i> Email : greengeosinergi@gmail.com </p>
                    <p><i class="fa fa-phone-square" aria-hidden="true"></i> Phone : +62 852 4969 3326</p>
                </div>

                {{-- <div class="col-lg-8 mt-5 mt-lg-0">
                </div> --}}

            </div>

        </div>






@endsection
