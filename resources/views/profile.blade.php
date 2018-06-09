@extends('layouts.navbar2')
@section('content')
    <div class="main-container">
		<section class="page-title page-title-1 image-bg overlay parallax">
		        <div class="background-image-holder">
		            <img alt="Background Image" class="background-image" src="img/footer.png">
		        </div>
		        <div class="container">
		            <div class="row">
		                <div class="col-sm-12 text-center">
		                	@if($data->type == "AppsToday")
		                		<img alt="Screenshot" align="left" class="mb-xs-24" src="img/iconapps.png" style="width: auto; height: 200px;">
		                	@elseif($data->type == "HackToday")
								<img alt="Screenshot" align="left" class="mb-xs-24" src="img/iconhack.png" style="width: auto; height: 200px;">
		                	@elseif($data->type == "Business IT Case")
			                	<img alt="Screenshot" align="left" class="mb-xs-24" src="img/iconbisnis.png" style="width: auto; height: 200px;">
		                	@endif
		                </div>
		            </div>
		            
		        </div>

				@if($data->type != 'HackToday')		        
				<ol class="breadcrumb breadcrumb-2">
					<h3> {{$data->type}} </h3>
					<li>
						<a href="#profil">Profile</a>
					</li>
					<li>
						<a href="#berkas">Upload Berkas</a>
					</li>
					<li>
						<a href="#buktibayar">Upload Bukti Pembayaran</a>
					</li>
				</ol>
				@else
				<ol class="breadcrumb breadcrumb-2">
					<h3> {{$data->type}} </h3>
					<li>
						<a href="#profil">Profile</a>
					</li>
					<li>
						<a href="#berkas">Upload Berkas</a>
					</li>
				</ol>
				@endif
			</section>

			<section style="padding-top: 25px; padding-bottom: 0px; background-color: #26c99e;">
				<div class="row">
					<div class="col-md-10 col-md-offset-1">
					<!-- Alert Foto KTM -->
					<!-- 3 Members -->
					@if($data->member_one != NULL && $data->member_two != NULL && $data->member_three != NULL)
						@if($data->ktm_img1 != NULL && $data->ktm_img2 != NULL && $data->ktm_img3 != NULL)
							@if($data->verify_ktm == 1)
							<div class="alert alert-dismissible ktm" role="alert"  style=" color: #fff !important; background-color: #07f707 !important;">
								<button type="button" class="close tutupktm">
									<span aria-hidden="true">&times;</span>
								</button>
								Kartu Tanda Mahasiswa / Kartu Pelajar Berhasil Diverifikasi.
							</div>
							@elseif($data->verify_ktm == 2)
							<div class="alert alert-dismissible ktm" role="alert"  style=" color: #fff !important; background-color: #c64444 !important;">
								<button type="button" class="close tutupktm">
									<span aria-hidden="true">&times;</span>
								</button>
								Kartu Tanda Mahasiswa / Kartu Pelajar Ditolak, Silakan Cek Email Untuk Melihat Kesalahan.
							</div>
							@else
							<div class="alert alert-dismissible ktm" role="alert" style=" color: #fff !important; background-color: #d8ca04 !important;">
								<button type="button" class="close tutupktm">
									<span aria-hidden="true">&times;</span>	
								</button>
								Kartu Tanda Mahasiswa / Kartu Pelajar Sedang Dalam Proses Verifikasi, Harap TUnggu Kurang Dari 2 x 24 Jam.
							</div>
							@endif
						@else
						<div class="alert alert-dismissible ktm" role="alert" style=" color: #fff !important; background-color: #c64444 !important;">
							<button type="button" class="close tutupktm">
								<span aria-hidden="true">&times;</span>
							</button>
							Harap Segera Mengunggah Kartu Tanda Mahasiswa / Kartu Pelajar Sebelum Tanggal 11 Juli 2018.
						</div>
						@endif
					@endif
					<!-- 2 Members -->
					@if($data->member_one != NULL && $data->member_two != NULL && $data->member_three == NULL)
						@if($data->ktm_img1 != NULL && $data->ktm_img2 != NULL)
							@if($data->verify_ktm == 1)
							<div class="alert alert-dismissible ktm" role="alert"  style=" color: #fff !important; background-color: #07f707 !important;">
								<button type="button" class="close tutupktm">
									<span aria-hidden="true">&times;</span>
								</button>
								Kartu Tanda Mahasiswa / Kartu Pelajar Berhasil Diverifikasi.
							</div>
							@elseif($data->verify_ktm == 2)
							<div class="alert alert-dismissible ktm" role="alert"  style=" color: #fff !important; background-color: #c64444 !important;">
								<button type="button" class="close tutupktm">
									<span aria-hidden="true">&times;</span>
								</button>
								Kartu Tanda Mahasiswa / Kartu Pelajar Ditolak, Silakan Cek Email Untuk Melihat Kesalahan.
							</div>
							@else
							<div class="alert alert-dismissible ktm" role="alert" style=" color: #fff !important; background-color: #d8ca04 !important;">
								<button type="button" class="close tutupktm">
									<span aria-hidden="true">&times;</span>
								</button>
								Kartu Tanda Mahasiswa / Kartu Pelajar Sedang Dalam Proses Verifikasi, Harap TUnggu Kurang Dari 2 x 24 Jam.
							</div>
							@endif
						@else
						<div class="alert alert-dismissible ktm" role="alert"  style=" color: #fff !important; background-color: #c64444 !important;">
							<button type="button" class="close tutupktm">
								<span aria-hidden="true">&times;</span>
							</button>
							Harap Segera Mengunggah Kartu Tanda Mahasiswa / Kartu Pelajar Sebelum Tanggal 11 Juli 2018.
						</div>
						@endif
					@endif
					<!-- 1 Member -->
					@if($data->member_one != NULL && $data->member_two == NULL && $data->member_three == NULL)
						@if($data->ktm_img1 != NULL)
							@if($data->verify_ktm == 1)
							<div class="alert alert-dismissible ktm" role="alert"  style=" color: #fff !important; background-color: #07f707 !important;">
								<button type="button" class="close tutupktm">
									<span aria-hidden="true">&times;</span>
								</button>
								Kartu Tanda Mahasiswa / Kartu Pelajar Berhasil Diverifikasi.
							</div>
							@elseif($data->verify_ktm == 2)
							<div class="alert alert-dismissible ktm" role="alert"  style=" color: #fff !important; background-color: #c64444 !important;">
								<button type="button" class="close tutupktm">
									<span aria-hidden="true">&times;</span>
								</button>
								Kartu Tanda Mahasiswa / Kartu Pelajar Ditolak, Silakan Cek Email Untuk Melihat Kesalahan.
							</div>
							@else
							<div class="alert alert-dismissible ktm" role="alert" style=" color: #fff !important; background-color: #d8ca04 !important;">
								<button type="button" class="close tutupktm">
									<span aria-hidden="true">&times;</span>
								</button>
								Kartu Tanda Mahasiswa / Kartu Pelajar Sedang Dalam Proses Verifikasi, Harap TUnggu Kurang Dari 2 x 24 Jam.
							</div>
							@endif
						@else
						<div class="alert alert-dismissible ktm" role="alert"  style="color: #fff !important; background-color: #c64444 !important;">
							<button type="button" class="close tutupktm">
								<span aria-hidden="true">&times;</span>
							</button>
							Harap Segera Mengunggah Kartu Tanda Mahasiswa / Kartu Pelajar Sebelum Tanggal 11 Juli 2018.
						</div>
						@endif
					@endif

					<!-- Alert Surat Keterangan Mahasiswa Aktif -->
					@if($data->letter == NULL)
					<div class="alert alert-dismissible letter" role="alert"  style=" color: #fff !important; background-color: #c64444 !important;">
						<button type="button" class="close tutupletter">
							<span aria-hidden="true">&times;</span>
						</button>
						Harap Segera Mengunggah Surat Keterangan Mahasiswa / Siswa Aktif Sebelum Tanggal 11 Juli 2018.
					</div>
					@else
						@if($data->verify_letter == 1)
						<div class="alert alert-dismissible letter" role="alert"  style=" color: #fff !important; background-color: #07f707 !important;">
							<button type="button" class="close tutupletter">
								<span aria-hidden="true">&times;</span>
							</button>
							Surat Keterangan Mahasiswa / Siswa Aktif Berhasil Diverifikasi.
						</div>
						@elseif($data->verify_letter == 2)
						<div class="alert alert-dismissible letter" role="alert"  style=" color: #fff !important; background-color: #c64444 !important;">
							<button type="button" class="close tutupletter">
								<span aria-hidden="true">&times;</span>
							</button>
							Surat Keterangan Mahasiswa / Siswa Aktif Ditolak, Silakan Cek Email Untuk Melihat Kesalahan.
						</div>
						@else
						<div class="alert alert-dismissible letter" role="alert" style=" color: #fff !important; background-color: #d8ca04 !important;">
							<button type="button" class="close tutupletter">
								<span aria-hidden="true">&times;</span>
							</button>
							Surat Keterangan Mahasiswa / Siswa Aktif Sedang Dalam Proses Verifikasi, Harap TUnggu Kurang Dari 2 x 24 Jam.
						</div>
						@endif
					@endif

					<!-- Alert Bukti Pembayaran -->
					@if($data->type != 'HackToday')
						@if($data->payment == NULL)
						<div class="alert alert-dismissible payment" role="alert"  style=" color: #fff !important; background-color: #c64444 !important;">
							<button type="button" class="close tutuppayment">
								<span aria-hidden="true">&times;</span>
							</button>
							Harap Segera Mengunggah Bukti Pembayaran Sebelum Tanggal 11 Juli 2018.
						</div>
						@else
							@if($data->verify_payment == 1)
							<div class="alert alert-dismissible payment" role="alert"  style=" color: #fff !important; background-color: #07f707 !important;">
								<button type="button" class="close tutuppayment">
									<span aria-hidden="true">&times;</span>
								</button>
								Bukti Pembayaran Berhasil Diverifikasi.
							</div>
							@elseif($data->verify_payment == 2)
							<div class="alert alert-dismissible payment" role="alert"  style=" color: #fff !important; background-color: #c64444 !important;">
								<button type="button" class="close tutuppayment">
									<span aria-hidden="true">&times;</span>
								</button>
								Bukti Pembayaran Ditolak, Silakan Cek Email Untuk Melihat Kesalahan.
							</div>
							@else
							<div class="alert alert-dismissible payment" role="alert" style=" color: #fff !important; background-color: #d8ca04 !important;">
								<button type="button" class="close tutuppayment">
									<span aria-hidden="true">&times;</span>
								</button>
								Bukti Pembayaran Sedang Dalam Proses Verifikasi, Harap TUnggu Kurang Dari 2 x 24 Jam.
							</div>
							@endif
						@endif
					@endif
			</section>


			<section style="background-color:#26c99e; padding-top: 25px; padding-bottom: 50px;" id="profil">
		        <div class="container">
		            <div class="row">
					
                    <div class="feature bordered text-center bg-secondary" style="box-shadow: 0 9px 30px 10px rgba(0, 0, 0, 0.2); font-size: 18px">
						<div>
							<a class="bbtn tn-warning pull-right" href="{{url('/editprofile')}}"  style="border-radius: 0;"><i class="fa fa-pencil-square-o"></i>EDIT PROFILE</a><br>
						</div>
						<p><h2 class="uppercase mb40 mb-xs-24">{{App\User::find($data->team_id)->name}}</h2></p>
						<div class="mb40">
							<h6 class="mb8 uppercase">Members</h6>
								<p style="color:black; !important; margin-bottom:0px !important;">
								@if($data->member_one!=NULL)
								{{$data->member_one}}
								@endif</p>
								<p style="color:black !important; margin-bottom:0px !important;">
								@if($data->member_two!=NULL)
								{{$data->member_two}}
								@endif</p>
								<p style="color:black !important; margin-bottom:0px !important;">
								@if($data->member_three!=NULL)
								{{$data->member_three}}
								@endif</p>
						</div>
						<div class="mb40">
							<h6 class="mb8 uppercase">School</h6>
							<p style="color:black !important;">
								{{$data->school}}
							</p>
						</div>
						<div class="mb40">
							<h6 class="mb8 uppercase">Province</h6>
							<p style="color:black !important;">
								{{$data->province}}
							</p>
						</div>
						<div class="mb40">
							<h6 class="mb8 uppercase">Contact</h6>
							<p style="color:black !important;margin-bottom:0px !important;">{{App\User::find($data->team_id)->email}}</p>
								<p style="color:black !important;margin-bottom:0px !important;">{{$data->phone_num}}</p>
								<p style="color:black !important;margin-bottom:0px !important;">{{$data->line_id}}</p>
						</div>
					</div>
		            </div>
		        </div>
			</section>
			
			<section style="background-color: #6290e0; padding-top: 40px; padding-bottom: 40px" id="berkas">
		        <form method="POST" action='{{ url("/ktm") }}' enctype="multipart/form-data" >
		        	{{csrf_field()}}

		    	<input type="hidden" name="id" value="{{$data->team_id}}">
		        <div class="container">

                    <h3 class="uppercase mb40 mb-xs-24 text-center" style="color:white;">Kartu Tanda Mahasiswa / Pelajar</h3>
		            <div class="row">
		                <div class="col-md-4 col-sm-6">
		                    <div class="image-tile outer-title text-center">
								@if($data->member_one!=NULL)
									@if($data->ktm_img1 != NULL)
										<img alt="Pic" id="preview1" src="{{asset($data->ktm_img1)}}" style="width: 577px; height: 224px; object-fit:cover;">
										<div class="title mb16">
		                            		<h5 class="uppercase mb0">
												<b> {{$data->member_one}} </b>
											</h5>
										</div>
										@if($data->verify_ktm != 1)
										<input type="file" accept=".jpg" name="ktm_img1" class="btn btn-lg btn-white mb8 mt-xs-24" id="selectedFile1" style="display: none;" onchange="showname1();" />
										<input type="button"  class="btn btn-lg btn-white mb8 mt-xs-24" value="Upload KTM/Kartu Pelajar"  onclick="document.getElementById('selectedFile1').click();" />
										<div id="filename-1" style="color: #c40f0f;"></div>
										@else
										<h3 align="center" style="color: #02f702"><b>VERIFIED </b><img src="/img/check.png" style="max-height: 30px; max-width: 30px"></h3>
										@endif										
									@else
										<img alt="Pic" id="preview1" src="img/team-1.jpg" style="width: 577px; height: 224px; object-fit:cover;">
										<div class="title mb16">
		                            		<h5 class="uppercase mb0">
												<b> {{$data->member_one}} </b>
											</h5>
										</div>
										<input type="file" accept=".jpg" name="ktm_img1" class="btn btn-lg btn-white mb8 mt-xs-24" id="selectedFile1" style="display: none;" onchange="showname1();"/>
										<input type="button"  class="btn btn-lg btn-white mb8 mt-xs-24" value="Upload KTM/Kartu Pelajar"  onclick="document.getElementById('selectedFile1').click();" />
										<div id="filename-1" style="color: #c40f0f;"></div>
									@endif
								@else
									<img alt="Pic" id="preview1" src="img/restricted.ico" style="width: 577px; height: 224px; object-fit:cover;">
									<h5 class="uppercase mb0">
										<b style="color: red"> Member 1 Not Found </b>
									</h5>
								@endif
                            </div>
		                </div>
		                <div class="col-md-4 col-sm-6">
		                    <div class="image-tile outer-title text-center">
								@if($data->member_two!=NULL)
									@if($data->ktm_img2 != NULL)
										<img alt="Pic" id="preview2" src="{{asset($data->ktm_img2)}}" style="width: 577px; height: 224px; object-fit:cover;">
										<div class="title mb16">
		                            		<h5 class="uppercase mb0">
												<b> {{$data->member_two}} </b>
											</h5>
										</div>
										@if($data->verify_ktm != 1)
										<input type="file" accept=".jpg" name="ktm_img2" class="btn btn-lg btn-white mb8 mt-xs-24" id="selectedFile2" style="display: none;" onchange="showname2();"/>
										<input type="button"  class="btn btn-lg btn-white mb8 mt-xs-24" value="Upload KTM/Kartu Pelajar" onclick="document.getElementById('selectedFile2').click();" />
										<div id="filename-2" style="color: #c40f0f;"></div>
										@else
										<h3 align="center" style="color: #02f702"><b>VERIFIED </b><img src="/img/check.png" style="max-height: 30px; max-width: 30px"></h3>
										@endif		
									@else
										<img alt="Pic" id="preview2" src="img/team-2.jpg" style="width: 577px; height: 224px; object-fit:cover;">
										<div class="title mb16">
		                            		<h5 class="uppercase mb0">
												<b> {{$data->member_two}} </b>
											</h5>
										</div>
										<input type="file" accept=".jpg" name="ktm_img2" class="btn btn-lg btn-white mb8 mt-xs-24" id="selectedFile2" style="display: none;" onchange="showname2();"/>
										<input type="button"  class="btn btn-lg btn-white mb8 mt-xs-24" value="Upload KTM/Kartu Pelajar" onclick="document.getElementById('selectedFile2').click();" />
										<div id="filename-2" style="color: #c40f0f;"></div>
									@endif
								@else
									<img alt="Pic" id="preview2" src="img/restricted.ico" style="width: 577px; height: 224px; object-fit:cover;">
									<h5 class="uppercase mb0">
										<b style="color: red"> Member 2 Not Found </b>
									</h5>
								@endif
                            </div>
		                </div>
		                <div class="col-md-4 col-sm-6">
		                    <div class="image-tile outer-title text-center">
								@if($data->member_three!=NULL)
									@if($data->ktm_img3 != NULL)
										<img alt="Pic" id="preview3" src="{{asset($data->ktm_img3)}}" style="width: 577px; height: 224px; object-fit:cover;">
										<div class="title mb16">
		                            		<h5 class="uppercase mb0">
												<b> {{$data->member_three}} </b>
											</h5>
										</div>
										@if($data->verify_ktm != 1)
										<input type="file" accept=".jpg" name="ktm_img3" class="btn btn-lg btn-white mb8 mt-xs-24" id="selectedFile3" style="display: none;" onchange="showname3();"/>
										<input type="button"  class="btn btn-lg btn-white mb8 mt-xs-24" value="Upload KTM/Kartu Pelajar" onclick="document.getElementById('selectedFile3').click();" />
										<div id="filename-3" style="color: #c40f0f;"></div>
										@else
										<h3 align="center" style="color: #02f702"><b>VERIFIED </b><img src="/img/check.png" style="max-height: 30px; max-width: 30px"></h3>
										@endif	
									@else
										<img alt="Pic" id="preview3" src="img/team-3.jpg" style="width: 577px; height: 224px; object-fit:cover;">
										<div class="title mb16">
		                            		<h5 class="uppercase mb0">
												<b> {{$data->member_three}} </b>
											</h5>
										</div>
										<input type="file" accept=".jpg" name="ktm_img3" class="btn btn-lg btn-white mb8 mt-xs-24" id="selectedFile3" style="display: none;" onchange="showname3();"/>
										<input type="button"  class="btn btn-lg btn-white mb8 mt-xs-24" value="Upload KTM/Kartu Pelajar" onclick="document.getElementById('selectedFile3').click();" />
										<div id="filename-3" style="color: #c40f0f;"></div>
									@endif
								@else
									<img alt="Pic" id="preview3" src="img/restricted.ico" style="width: 577px; height: 224px; object-fit:cover;">
									<h5 class="uppercase mb0">
										<b style="color: red"> Member 3 Not Found </b>
									</h5>
								@endif
                            </div>
		                </div>
					</div>
					<!-- <p align="center">Foto/hasil scan KTM/Kartu Pelajar diupload dalam format .jpg,.jpeg, atau .png dengan ukuran file < 2 MB</p>
					<br>
							 -->
					@if($data->verify_ktm != 1)
					<input class="btn btn-lg btn-white mb8 mt-xs-24" type="submit" value="SIMPAN KARTU TANDA MAHASISWA / PELAJAR">				
					@else
					<!-- <h5 align="center" style="color: #c40f0f; font-weight: bold"> *Kartu Tanda Mahasiswa berhasil tersimpan. Hubungi admin@ittoday.web.id apabila ada perubahan data. </h5> -->
					@endif
				</div>
				</form>
				</section>

				<section style="background-color: #6290e0; padding-top: 10px; padding-bottom: 40px">
				<form method="POST" action='{{ url("/letter") }}' enctype="multipart/form-data" >
					{{csrf_field()}}

				<input type="hidden" name="id" value="{{$data->team_id}}">
					<div class="container">
					<h3 class="uppercase mb40 mb-xs-24 text-center" style="color:white;">Surat Keterangan Mahasiswa / Siswa Aktif</h3>
		            <div class="row">
					
		                <div class="col-sm-12 text-center">
		                	<input type="file" accept="application/pdf" name="letter" class="btn btn-lg btn-white mb8 mt-xs-24" id="selectedFile4" style="display: none;" onchange="showname4();"/>
							<div>
								<input type="button" style="white-space: normal; height: auto;"  class="btn btn-lg btn-white mb8 mt-xs-24" value="Upload Surat Keterangan Mahasiswa/Siswa Aktif" onclick="document.getElementById('selectedFile4').click();" />
							</div>
							<div id="filename-4" style="color: #c40f0f;"></div>
							<br><p>Surat keterangan semua anggota tim disatukan menjadi satu file dalam format .pdf dengan ukuran file tidak lebih dari 2 MB</p>
                            
                            @if($data->letter == NULL)
                            <h5 class="uppercase mb0" style="color: #a3031b; font-weight: bold">Surat Keterangan Mahasiswa Aktif Belum Diupload</h5>                       
							@else
								@if($data->verify_letter == 0)
								<h5 class="uppercase mb0" style="color: yellow; font-weight: bold">Surat Keterangan Mahasiswa Aktif Dalam Proses Verifikasi</h5>
								@elseif($data->verify_letter == 1)
                            	<h5 class="uppercase mb0" style="color: #1a8e02; font-weight: bold">Surat Keterangan Mahasiswa Aktif Berhasil Diupload</h5>                       
								@elseif($data->verify_letter == 2)
								<h5 class="uppercase mb0" style="color: #a3031b; font-weight: bold">Surat Keterangan Mahasiswa Aktif Belum Diupload</h5>
								@endif
							@endif
							
							<br>
							
							@if($data->verify_letter == 1)
							<h3 align="center" style="color: #02f702"><b>VERIFIED </b><img src="/img/check.png" style="max-height: 30px; max-width: 30px"></h3>
							<!-- <h5 style="color: #c40f0f; font-weight: bold"> *Surat keterangan berhasil tersimpan. Hubungi admin@ittoday.web.id apabila ada perubahan data. </h5> -->
							@else
							<input class="btn btn-lg btn-white mb8 mt-xs-24" type="submit" value="SIMPAN SURAT KETERANGAN MAHASISWA / SISWA AKTIF" >
							@endif
                        </div>
		            </div>
			        </div>
				</form>
				</section>

		        </section>
				@if($data->type != 'HackToday')
					@if($data->payment == NULL)
					<section style="background-color: #ff3333" id="buktibayar">
					@else
						@if($data->verify_payment == 1)
						<section style="background-color: #26c99e" id="buktibayar">
						@elseif($data->verify_payment == 2)
						<section style="background-color: #ff3333" id="buktibayar">
						@else
						<section style="background-color: #fff83f" id="buktibayar">
						@endif
					@endif
				@endif
		        <div class="container">
		            <div class="row">
		                <div class="col-sm-12 text-center">
							@if($data->type != 'HackToday')
								@if($data->payment == NULL)
								<h3 class="uppercase mb40 mb-xs-24" style="color:white;">BUKTI PEMBAYARAN BELUM DIUPLOAD</h3>
								<a class="btn btn-lg btn-white mb8 mt-xs-24" href="{{route('payment')}}">Upload Bukti Pembayaran</a>
								@else
									@if($data->verify_payment == 1)
									<h3 class="uppercase mb40 mb-xs-24" style="color:white;">PEMBAYARAN BERHASIL DIVERIFIKASI</h3>
									@elseif($data->verify_payment == 2)
									<h3 class="uppercase mb40 mb-xs-24" style="color:white;">BUKTI PEMBAYARAN DITOLAK</h3>
									<a class="btn btn-lg btn-white mb8 mt-xs-24" href="{{route('payment')}}">Upload Bukti Pembayaran</a>
									@else
									<h3 class="uppercase mb40 mb-xs-24" style="color:black;">MENUNGGU VERIFIKASI PEMBAYARAN</h3>
									<a class="btn btn-lg btn-white mb8 mt-xs-24" href="{{route('payment')}}">Update Bukti Pembayaran</a>
									@endif
								@endif
							@endif
		                </div>
		            </div>
		            
		        </div>

			</div>
		    </section></div>
		
				
		<script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/parallax.js"></script>
		<script src="js/scripts.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script>
		$(document).ready(function(){
			$(".tutupktm").click(function(){
				$(".ktm").fadeTo(200, 0).slideUp(200,0);
			});
		});

		$(document).ready(function(){
			$(".tutupletter").click(function(){
				$(".letter").fadeTo(200, 0).slideUp(200,0);
			});
		});

		$(document).ready(function(){
			$(".tutuppayment").click(function(){
				$(".payment").fadeTo(200, 0).slideUp(200,0);
			});
		});	
		</script>				
@endsection
