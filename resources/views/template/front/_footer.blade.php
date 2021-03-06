<footer style="background-color: var(--bg-footer-1)">
	<div class="container py-5">
    	<div class="row">
			<div class="col-12 col-md-12 col-lg-3">
				<a href="#" class="text-decoration-none">
					<!-- <h1 style="font-family: 'Dancing Script', cursive;">
			            <span class="color-theme-1">Campus</span><span class="color-theme-2">net</span>
			        </h1> -->
			       	<img width="200" src="{{asset('assets/images/logo/campusnet.webp')}}">
				</a>
			</div>
			<div class="col-12 col-md-4 col-lg-3">
				<ul class="list-group list-group-flush">
					<li class="list-group-item bg-transparent border-0 px-0 font-weight-bold">
						Tentang Kami
					</li>
					<li class="list-group-item bg-transparent border-0 px-0 pb-1">
						<a class="text-dark text-decoration-none" href="#">Tentang Campusnet</a>
					</li>
					<li class="list-group-item bg-transparent border-0 px-0 pb-1">
						<a class="text-dark text-decoration-none" href="#">Bantuan</a>
					</li>
				</ul>
			</div>
			<div class="col-12 col-md-4 col-lg-3">
				<ul class="list-group list-group-flush">
					<li class="list-group-item bg-transparent border-0 px-0 font-weight-bold">
						Lainya
					</li>
					<li class="list-group-item bg-transparent border-0 px-0 pb-1">
						<a class="text-dark text-decoration-none" href="artikel">Artikel</a>
					</li>
				</ul>
			</div>
			<div class="col-12 col-md-4 col-lg-3">
				<ul class="list-group list-group-flush">
					<li class="list-group-item bg-transparent border-0 px-0 font-weight-bold">
						Kontak
					</li>
					<li class="list-group-item bg-transparent border-0 px-0">
						<i class="text-dark fab fa-youtube h3 pr-3"></i>
						<i class="text-dark fab fa-instagram h3 pr-3"></i>
						<i class="text-dark fab fa-facebook h3 pr-3"></i>
					</li>
					<li class="list-group-item bg-transparent border-0 px-0 pb-0">
						<i class="fa fa-map-marker-alt position-absolute text-dark" style="font-size: 22px"></i>
						<p class="mb-0" style="margin-left: 2em"> Jl Kedungmundu Raya 27 B Kota Semarang</p>
					</li>
					<li class="list-group-item bg-transparent border-0 px-0 pb-0">
						<i class="fab fa-whatsapp position-absolute text-dark" style="font-size: 22px"></i>
						<p class="mb-0" style="margin-left: 2em"> +62816343741</p>
					</li>
					<li class="list-group-item bg-transparent border-0 px-0 pb-0">
						<i class="fa fa-envelope position-absolute text-dark" style="font-size: 22px"></i>
						<p class="mb-0" style="margin-left: 2em"> info@campusnet.co.id</p>
					</li>
				</ul>
			</div>
    	</div>
    </div>
    <div class="text-center py-2" style="background-color: var(--bg-footer-2)">
        &copy; {{ get_website_name() }} {{ date('Y') }}. Powered by <a class="color-theme-1 text-decoration-none" href="https://campus.co.id/" target="_blank">PT Campus Data Media</a>.
    </div>
</footer>
<!-- fab -->
<div class="fixed-bottom d-flex align-items-center justify-content-end text-right">
    <div class="bg-white shadow-sm px-3 py-2 mr-2 rounded-3" style="width: fit-content; animation: fab 2s infinite ease">
        <span class="font-weight-bold">Contact Us</span>
    </div>
    <a href="https://wa.me/62816343741" target="blank" class="opacity-0">
    <div class="rounded-circle shadow-sm float-right text-center d-flex align-items-center justify-content-center mr-2 mb-2" style="width: 60px; height: 60px; background-color: #00E676;">
        <i class="fab fa-whatsapp h2 text-white m-0"></i>
    </div>
    </a>
</div>