@extends('template/front/main')

@section('title', 'Beranda')

@section('content')
    <section class="section-carousel">
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
          <ol class="carousel-indicators d-none">
            <li data-target="#carouselExampleFade" data-slide-to="0" class="active"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="img-overlay-1" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="...">
              <div class="mask" style="background-color: rgba(0,0,0,.6);">
                <div class="d-flex justify-content-end align-items-center text-white h-100">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 d-flex align-items-center mb-3 mb-lg-0">
                                <div>
                                    <h1 class="text-capitalize font-weight-normal">Solusi Aplikasi</h1>
                                    <h1 class="font-weight-bold">E-Learning.</h1>
                                    <p class="text-capitalize font-weight-normal h5">Ujian Online Terintegrasi. Teori Elektronik. Mudah<br> Digunakan. Berbasis Web.</p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <img class="img-fluid rounded-2" src="{{asset('assets/images/banner/1.1.webp')}}">
                            </div>
                        </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>
    <section class="section-about wrap">
        <div class="container">
            <div class="rounded-2 bg-white p-4 shadow-sm">
                <div class="media d-block d-md-flex">
                    <!-- <h1 style="font-family: 'Dancing Script', cursive;" class="mr-0 mr-md-4">
                        <span class="color-theme-1">Campus</span><span class="color-theme-2">net</span>
                    </h1> -->
                    <div class="bg-theme-1 p-3 mb-3 mb-lg-0 rounded-2 mx-auto mx-lg-0" style="width: fit-content">
                        <img class="logo-deskripsi" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7">
                    </div>
                    <div class="ml-0 ml-md-3">
                        <h5>Campusnet LMS</h5>
                        <p class="m-0">Campusnet LMS, penyedia solusi pendidikan menanjak dan pelopor yang andal dari Indonesia sejak 2010. Sudah banyak guru dan siswa menggunakan sistem ini! Kunci keberhasilan kami sebagai perusahaan adalah kejelasan visi kami tentang apa yang ingin kami selesaikan atau capai di masa depan dalam jangka panjang. Dan kami siap menjadi mitra Anda dalam memajukan dunia pembelajaran.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-fitur wrap" id="fitur">
        <div class="container mb-5">
            <div class="heading text-center text-lg-left mb-4">
                <h1 class="color-theme-1">Fitur kami</h1>
                <p>Fitur unggulan yang kami tawarkan</p>
            </div>
            <div class="row justify-content-center">
                @if(count($fitur)>0)
                    @foreach($fitur as $data)
                        <div class="col-md-6 col-lg-4">
                            <div class="card border-0 rounded-2 shadow-sm mb-4">
                                <img class="shadow rounded-2 img-fluid" src="{{ asset('assets/images/fitur/'.$data->gambar_fitur) }}">
                                <div class="card-body">
                                    <h5>{{ $data->nama_fitur }}</h5>
                                    <p class="m-0">{{ $data->deskripsi_fitur }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </section>
    <section class="section-review wrap" id="testimoni">
        <div class="container mb-5">
            <div class="heading text-center text-lg-left mb-4">
                <h1 class="color-theme-1">Apa Kata Klien Kami</h1>
                <p>Apa kata mereka tentang Campusnet?</p>
            </div>
            <div id="client-carousel" class="owl-carousel owl-theme">
                @if(count($testimoni)>0)
                    @foreach($testimoni as $key=>$data)
                        <div class="item py-3">
                            <div class="card rounded-2 border-0 shadow-sm">
                                <img style="height: 30px; width:30px; background-color: var(--color-{{ $key % 2 == 0 ? '1' : '2' }})" class="card-img-top rounded-3" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7">
                                <div class="card-body">
                                    <h5 class="m-0">{{ $data->klien }}</h5>
                                    <p class="m-0">{{ $data->ucapan_testimoni }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </section>
    <section class="section-client wrap bg-white" id="demo">
        <div class="container pb-5">
            <div class="row">
                <div class="col-md-6 mb-3 mb-md-0 text-center text-md-left">
                    <h1>Are you ready to advance what's possible in education?</h1>
                    <h5 class="font-weight-normal">Talk with one of Campusnet's edtech specialists to learn how you can transform the learning experience at your school or district.</h5>
                    <a href="https://demo.campusnet.id" class="btn btn-theme btn-theme-1 rounded-4" target="_blank">Lihat Demo</a>
                </div>
                <div class="col-md-6">
                    <img class="img-fluid" src="{{asset('assets/images/ilustrasi/1.webp')}}">
                </div>
            </div>
        </div>
    </section>
    <section class="section-artikel wrap" id="artikel">
        <div class="container mb-3">
            <div class="heading text-center text-lg-left mb-4">
                <h1 class="color-theme-1">Artikel</h1>
                <p>Rekomendasi artikel</p>
            </div>
            <div class="row">
                @if(count($artikel)>0)
                    @foreach($artikel as $data)
                    <div class="col-md-6 col-lg-3 mb-3">
                        <div class="card border-0 shadow-sm rounded-2">
                            <a href="/artikel/{{ $data->slug_artikel }}">
                            <img src="{{ asset('assets/images/artikel/'.$data->gambar_artikel) }}" alt="thumbnail" class="card-img-top rounded-1"></a>
                            <div class="card-body">
                                <a href="/artikel/{{ $data->slug_artikel }}"><p class="m-0 font-weight-bold text-truncate" title="{{ $data->judul_artikel }}">{{ $data->judul_artikel }}</p></a>
                                <p class="m-0 text-muted">{{ substr(strip_tags(html_entity_decode($data->konten_artikel)),0,100) }}...</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                @endif
            </div>
            <div class="text-center">
                <a class="btn btn-theme-1 rounded-3" href="artikel">Lihat Semua</a>
            </div>
        </div>
    </section>
@endsection
