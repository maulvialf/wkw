@extends('layouts.navbar2')
@section('content')
		<form method="POST" action='{{ url("/bayar") }}' enctype="multipart/form-data">
    	{{csrf_field()}}
    	<input type="hidden" name="id" value="{{$data->team_id}}">
		<div class="main-container">
		<section style="background-image:url({{url('img/footer.png')}}); background-attachment: fixed;">
				<div class="container">
					<div class="row">
						<div class="col-md-4 col-md-offset-1 text-right text-left-xs col-sm-5">
							<h1 class="uppercase mb24 bold italic" style="color: white ;">Pem<br>bayar<br>an</h1>
							<h5 class="uppercase italic fade-1-4"></h5>
							<hr class="visible-xs">
						</div>
						<div class="col-md-5 col-sm-7">
							
							<p>Setiap tim harus melengkapi persyaratan administrasi pendaftaran dan pembayaran <b>maksimal tanggal 11 Juli 2018.<br><br></b>Jumlah pembayaran menyesuaikan pada tanggal ketika pembayaran lunas sebagai berikut :
							<br><b>a.	Early Bird 	: 30 Mei - 20 Juni 2018 , sebesar Rp 100.000
							<br>b.	Reguler 	: 21 Juni - 11 Juli 2018 , sebesar Rp 150.000</b><br></p>
							<p>Pembayaran dilakukan melalui transfer ke:</p>
                            <h4 style="color: white ;">AppsToday</h4>
							<p>Nomor Rekening: BNI 0450376377<br>Atas Nama: Iyang Aneka Wibowo</p>
                            <h4 style="color: white ;">Business IT Case</h4>
							<p>Nomor Rekening: BNI 0450376082<br>Atas Nama: Leni Angraeni</p>
							<h4 style="color: white ;">HackToday</h4>
							<p><b>Tidak ada biaya pendaftaran yang dibebankan kepada peserta HackToday.</b></p>
							<div class="col-md-8" style="padding: 0px;">
							<input type="file" accept=".jpg" name="payment" class="btn btn-lg btn-white mb8 mt-xs-24" id="selectedFile4" style="display: none;" onchange="showname4();" />
							<input type="button" class="btn btn-lg btn-white mb8 mt-xs-24" value="UPLOAD BUKTI PEMBAYARAN" onclick="document.getElementById('selectedFile4').click();" />
							<div id="filename-4" style="color: #c40f0f;"></div>
							<p>Bukti pembayaran difoto dan diupload dalam format .jpg</p>

							</div>
							<div class="col-md-5" style="padding: 0px;"><input class="btn btn-lg mb8 mt-xs-24" type="submit" value="SIMPAN PERUBAHAN" style="background-color: #7c6bee;"/></div>
						</div>
					</div>
				</div>
			</section>
		</div>
		</form>							
@endsection