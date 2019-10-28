<!DOCTYPE html>
<html>
<head>
	<title>Kita Pintar : We Are Smart</title>
	<link rel="icon" href="asset/icon/flatLogo.png" type="image/x-icon" />
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="carousel.css">
	<script src="scrool.js"></script>
	<script type="text/javascript">
		$(function () {
			$(document).scroll(function () {
				var $nav = $(".navbar-fixed-top");
				$nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
			});
		});

		$(document).ready(function(){
			$("a").on('click', function(event) {
				if (this.hash !== "") {
					event.preventDefault();
					var hash = this.hash;
					$('html, body').animate({
						scrollTop: $(hash).offset().top
					}, 800, function(){
						window.location.hash = hash;
					});
				}
			});
		});
	</script>
	<style type="text/css">
		a{
			text-decoration: none;
		}
	</style>
</head>
<body>
	<!-- Navbar -->
	<div style="width: 100%" id="top">
		<table border="0" style="background-color: #dfdfdf;" width="100%">
			<tbody>
				<tr class="nav">
					<td style="padding: 5px; padding-left: 100px;" width="50px">
						<a href=""><img src="asset/icon/webLogo.png" width="90px" height="40px"></a>
					</td>
					<td style="padding-left: 100px;">
						<nav class="nav">
							<a class="nav-link zoom" href="#">PerpusKita</a>
							<a class="nav-link zoom" href="#">BeaPintar</a>
							<a class="nav-link zoom" href="#">LesPintar</a>
							<a class="nav-link zoom" href="#">ForumKita</a>
							<a class="nav-link zoom" style="font-size: 20px;" href="#">|</a>
							<a class="nav-link zoom" href="#">TentangKita</a>
						</nav>
					</td>
					<td width="300px" align="center">
						<form>
							<a href=""><button class="btn masuk zoom" type="submit">Masuk</button></a>
							<a href="#fDaftar"><button class="btn daftar zoom" type="submit">Daftar</button></a>
						</form>
					</td>
				</tr>
			</tbody>
		</table>
	</div>

	<!-- Sampul -->
	<div align="center" class="sampul">
		<img src="asset/icon/flatLogo.png" class="sampul-img">
		<p class="sampul-judul">~ <i>" We Are Smart "</i> ~</p>
		<p class="sampul-judul nd">:'( " Mari Kita menjadi Pintar Bersama !!! " :')</p>
		<a href="#about"><img src="asset/icon/arrowbottom.png" class="ball"></a>
	</div>

	<!-- Tentang Kita Pintar -->
	<center><div class="about" align="center" id="about">
		<p class="service-judul">Kita Pintar</p>
		<div class="about-kita">
			
		</div>
	</div></center>

	<!-- Layanan -->
	<div align="center" class="service">
		<p class="service-judul">Layanan Kami</p>
		<table border="0" class="service-tabel">
			<tbody>
				<tr>
					<td width="40%" align="center">
						<a href=""><div class="service-menu zoom">
							<img src="asset/icon/flatLogo.png" height="60px" width="60px">
							<p class="sMenu-judul orange">PerpusKita</p>
							<p class="sMenu-isi">Memberikan referensi bermacam-macam genre buku yang memberikan wawasan dan dapat dibaca oleh semua orang</p>
						</div></a>
					</td>
					<td width="40%" align="center">
						<a href=""><div class="service-menu zoom">
							<img src="asset/icon/flatLogo.png" height="60px" width="60px">
							<p class="sMenu-judul" style="color: #de4c3c;">BeaPintar</p>
							<p class="sMenu-isi">Memberikan informasi mengenai beasiswa-beasiswa yang tersedia sebagai bantuan untuk melanjutkan pendidikan ke jenjang yang lebih tinggi</p>
						</div></a>
					</td>
				</tr>
				<tr>
					<td width="40%" align="center">
						<a href=""><div class="service-menu zoom">
							<img src="asset/icon/flatLogo.png" height="60px" width="60px">
							<p class="sMenu-judul" style="color: #4398d1;">LesPintar</p>
							<p class="sMenu-isi">Memberikan soal-soal tes yang dapat digunakan sebagai latihan bagi siswa untuk meningkatkan pengetahuan</p>
						</div></a>
					</td>
					<td width="40%" align="center">
						<a href=""><div class="service-menu zoom">
							<img src="asset/icon/flatLogo.png" height="60px" width="60px">
							<p class="sMenu-judul" style="color: #f6ff00;">ForumKita</p>
							<p class="sMenu-isi">Berkomunikasi dan Bertukar informasi dengan sesama siswa menjadi lebih mudah dan praktis</p>
						</div></a>
					</td>
				</tr>
			</tbody>
		</table>
	</div>

	<!-- Daftar -->
	<center><hr width="90%"></center>
	<form action="" method="post">
		<div class="ddaftar" align="center" id="fDaftar">
			<table class="service-tabel" style="width: 90%;" border="0">
				<tbody>
					<tr>
						<td style="background-color: #90ff9d;" rowspan="2" width="35%" valign="center">
							<p class="service-judul" style="color: #4398d1;font-size: 25px;">~ Jadilah Bagian dari Kami ~</p>
							<div class="ddaftar-menu">
								<img src="asset/icon/flatLogo.png" style="margin-top: 40px;" height="60px" width="60px">
								<p class="sMenu-judul" style="color: #de4c3c; margin-bottom: 20px;">MemberKita</p>
								<p class="sMenu-isi" style="color: #4398d1; font-weight: bold; margin-left: 40px; margin-right: 40px; font-size: 15px;">Download buku gratis untuk menambah wawasan dan ilmu pengetahuan. Menambah teman dan bertukar informasi sesama member <i>"KitaPintar"</i>. Menambah keterampilan dalam mengerjakan soal-soal ujian, dengan cara yang menarik dan mudah dipahami.</p>
							</div>
						</td>
						<td width="5%"></td>
						<td width="50%" valign="top">
							<p class="service-judul" style="font-size: 30px;">Form Pendaftaran</p>
						</td>
					</tr>
					<tr>
						<td></td>
						<td valign="top" class="padding-ddaf" style="padding-top: 30px;">
							<table width="100%" border="0">
								<tbody>
									<tr>
										<td class="padding-ddaf" width="30%" align="left">
											<p class="bold">Nama</p>
										</td>
										<td colspan="3" class="padding-ddaf" width="70%" align="left">
											<input type="text" name="nama" class="inputText" style="width: 200px;" placeholder="nama lengkap">
										</td>
									</tr>
									<tr>
										<td class="padding-ddaf" align="left">
											<p class="bold">Tempat Lahir</p>
										</td>
										<td class="padding-ddaf" width="35%" align="left">
											<input type="text" name="tmpLahir" class="inputText" style="width: 100px;" placeholder="kota">
										</td>
										<td class="padding-ddaf" width="30%" align="left">
											<p class="bold">Tanggal Lahir</p>
										</td>
										<td class="padding-ddaf" width="35%" align="left">
											<input type="date" name="tglLahir" class="inputText" style="width: 120px;">
										</td>
									</tr>
									<tr>
										<td class="padding-ddaf" align="left">
											<p class="bold">Umur</p>
										</td>
										<td class="padding-ddaf" align="left">
											<input type="number" name="umur" class="inputText" style="width: 50px;">&nbsp;Tahun
										</td>

										<td class="padding-ddaf" align="left">
											<p class="bold">Gender</p>
										</td>
										<td class="padding-ddaf" align="left">
											<select class="inputText select">
												<option>Laki-Laki</option>
												<option>Perempuan</option>
											</select>
										</td>
									</tr>
									<tr>
										<td class="padding-ddaf" align="left">
											<p class="bold">Asal Sekolah</p>
										</td>
										<td colspan="3" class="padding-ddaf" align="left">
											<input type="text" name="sklh" class="inputText" style="width: 200px;" placeholder="Asal Sekolah">
										</td>
									</tr>
									<tr>
										<td class="padding-ddaf" align="left">
											<p class="bold">E-mail</p>
										</td>
										<td class="padding-ddaf" align="left">
											<input type="text" name="email" class="inputText" style="width: 150px;" required placeholder="example@mail.com">
										</td>
										<td class="padding-ddaf" align="left">
											<p class="bold">No.Telp</p>
										</td>
										<td class="padding-ddaf" align="left">
											+62&nbsp;<input type="text" name="noTelp" class="inputText" style="width: 120px;" placeholder="8xxxxxxxxxx">
										</td>
									</tr>
									<tr>
										<td colspan="4" class="padding-ddaf" align="center">
											<input type="Submit" name="submit" class="btn dmasuk" value="Daftar Member" style="margin-top: 20px; width: 400px;" style="width: 200px;">
											<p class="bold" style="font-size: 12px; margin-top: 5px;">By cliking, I agree to the Goodreads Terms of Service</p>
										</td>
									</tr>
								</tbody>
							</table>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</form>

	<!-- Statistik Pengguna -->
	<div align="center" class="ddaftar" style="padding: 0;">
		<table border="0" class="service-tabel">
			<tbody>
				<tr>
					<td align="left" colspan="2">
						<p class="service-judul" style="font-size: 20px;">Statistik Pengguna</p>
					</td>
				</tr>
				<tr>
					<td align="center" rowspan="6" width="20%">
						<img src="asset/icon/flatLogo.png" class="stat-img" height="100px" width="100px">
					</td>
					<td align="center" width="60%" height="60px">
						<p class="service-judul" style="font-size: 18px; font-weight: normal; color: #4398d1">Rating</p>
					</td>
				</tr>
				<tr>
					<td align="left" valign="center">
						<p class="ratFont"><img src="asset/icon/star_fill.png" height="15px" width="15px">&nbsp;5<img src="asset/icon/5star.png" style="margin-left: 10px;" height="10px" width="400px"></p>
					</td>
				</tr>
				<tr>
					<td align="left" valign="center">
						<p class="ratFont"><img src="asset/icon/star_fill.png" height="15px" width="15px">&nbsp;4<img src="asset/icon/4star.png" style="margin-left: 10px;" height="10px" width="320px"></p>
					</td>
				</tr>
				<tr>
					<td align="left" valign="center">
						<p class="ratFont"><img src="asset/icon/star_fill.png" height="15px" width="15px">&nbsp;3<img src="asset/icon/3star.png" style="margin-left: 10px;" height="10px" width="240px"></p>
					</td>
				</tr>
				<tr>
					<td align="left" valign="center">
						<p class="ratFont"><img src="asset/icon/star_fill.png" height="15px" width="15px">&nbsp;2<img src="asset/icon/2star.png" style="margin-left: 10px;" height="10px" width="160px"></p>
					</td>
				</tr>
				<tr>
					<td align="left" valign="center">
						<p class="ratFont"><img src="asset/icon/star_fill.png" height="15px" width="15px">&nbsp;1<img src="asset/icon/1star.png" style="margin-left: 10px;" height="10px" width="80px"></p>
					</td>
				</tr>
				<tr>
					<td align="center" rowspan="6">
					</td>
					<td align="right" height="60px">
						<p class="service-judul" style="font-size: 18px; margin-right: 25px; font-weight: normal; color: #000">Give 5 Star to Support Us..</p>
						<img src="asset/icon/star_fill.png" class="gray" style="margin: 10px;" height="30px" width="30px">
						<img src="asset/icon/star_fill.png" class="gray" style="margin: 10px;" height="30px" width="30px">
						<img src="asset/icon/star_fill.png" class="gray" style="margin: 10px;" height="30px" width="30px">
						<img src="asset/icon/star_fill.png" class="gray" style="margin: 10px;" height="30px" width="30px">
						<img src="asset/icon/star_fill.png" class="gray" style="margin: 10px;" height="30px" width="30px">
					</td>
				</tr>
			</tbody>
		</table>
	</div>

	<!-- Komentar -->
	<div class="row justify-content-md-center marginku" id="about">
		<p class="service-judul" style="font-size: 20px;">Apa yang mereka bilang ?</p>
		<ul class="list-inline" style="margin-top: 40px;">
			<li class="list-inline-item" style="margin-right: 50px;">
				<div class="card" style="width: 20rem; height: 25rem;">
					<img class="card-img-top" src="asset/image/bg1.jpg" alt="Card image cap" height="200px">
					<div class="card-body" align="center">
						<img class="card-profil" src="asset/image/profile1.jpg">
						<br><br>
						<h5 class="card-name" style="">Bayu Rizky L</h5>
						<i class="fab fa-instagram icon-ig"></i>
						<p class="card-text">Saya menjadi lebih siap dalam menghadapi ujian, baik harian maupun semester. Saya juga mendapat banyak informasi beasiswa yang berguna untuk masuk ke universitas yang diinginkan</p>
					</div>
				</div>
			</li>
			<li class="list-inline-item" style="margin-right: 50px;">
				<div class="card" style="width: 20rem; height: 25rem;">
					<img class="card-img-top" src="asset/image/bg2.jpg" alt="Card image cap" height="200px">
					<div class="card-body" align="center">
						<img class="card-profil" src="asset/image/profile2.jpg">
						<br><br>
						<h5 class="card-name" style="">Faisal Yahya</h5>
						<i class="fab fa-instagram icon-ig"></i>
						<p class="card-text">Membaca dan mendownload buku menjadi lebih mudah dan praktis, membantu orang yang gemar membaca buku. dengan membaca buku menambah wawasan dan ilmu pengetahuan</p>
					</div>
				</div>
			</li>
			<li class="list-inline-item">
				<div class="card" style="width: 20rem; height: 25rem;">
					<img class="card-img-top" src="asset/image/bg3.png" alt="Card image cap" height="200px">
					<div class="card-body" align="center">
						<img class="card-profil" src="asset/image/profile3.jpg">
						<br><br>
						<h5 class="card-name" style="">Cyrlia</h5>
						<i class="fab fa-instagram icon-ig"></i>
						<p class="card-text">Saya mendapat banyak teman baru, kita dapat mengobrol dan bertukar informasi dengan mudah. Memberikan saran-saran mengenai pelajaran pun tidaklah sulit</p>
					</div>
				</div>
			</li>
		</ul>
	</div>

	<!-- Daftar -->
	<center><hr width="90%"></center>
	<form action="" method="post">
		<div class="ddaftar" style="height: 500px;" align="center" id="fDaftar">
			<table class="service-tabel" style="width: 90%;" border="0">
				<tbody>
					<tr>
						<td style="background-color: #90ff9d;" rowspan="2" width="35%" valign="center">
							<p class="service-judul" style="color: #4398d1;font-size: 25px;">~ Jadilah Bagian dari Kami ~</p>
							<div class="ddaftar-menu">
								<img src="asset/icon/flatLogo.png" style="margin-top: 40px;" height="60px" width="60px">
								<p class="sMenu-judul" style="color: #de4c3c; margin-bottom: 20px;">MemberKita</p>
								<p class="sMenu-isi" style="color: #4398d1; font-weight: bold; margin-left: 40px; margin-right: 40px; font-size: 15px;">Download buku gratis untuk menambah wawasan dan ilmu pengetahuan. Menambah teman dan bertukar informasi sesama member <i>"KitaPintar"</i>. Menambah keterampilan dalam mengerjakan soal-soal ujian, dengan cara yang menarik dan mudah dipahami.</p>
							</div>
						</td>
						<td width="5%"></td>
						<td width="50%" valign="top">
							<p class="service-judul" style="font-size: 30px;">Form Pendaftaran</p>
						</td>
					</tr>
					<tr>
						<td></td>
						<td valign="top" class="padding-ddaf" style="padding-top: 30px;">
							<table width="100%" border="0">
								<tbody>
									<tr>
										<td class="padding-ddaf" width="30%" align="left">
											<p class="bold">Nama</p>
										</td>
										<td colspan="3" class="padding-ddaf" width="70%" align="left">
											<input type="text" name="nama" class="inputText" style="width: 200px;" placeholder="nama lengkap">
										</td>
									</tr>
									<tr>
										<td class="padding-ddaf" align="left">
											<p class="bold">Tempat Lahir</p>
										</td>
										<td class="padding-ddaf" width="35%" align="left">
											<input type="text" name="tmpLahir" class="inputText" style="width: 100px;" placeholder="kota">
										</td>
										<td class="padding-ddaf" width="30%" align="left">
											<p class="bold">Tanggal Lahir</p>
										</td>
										<td class="padding-ddaf" width="35%" align="left">
											<input type="date" name="tglLahir" class="inputText" style="width: 120px;">
										</td>
									</tr>
									<tr>
										<td class="padding-ddaf" align="left">
											<p class="bold">Umur</p>
										</td>
										<td class="padding-ddaf" align="left">
											<input type="number" name="umur" class="inputText" style="width: 50px;">&nbsp;Tahun
										</td>

										<td class="padding-ddaf" align="left">
											<p class="bold">Gender</p>
										</td>
										<td class="padding-ddaf" align="left">
											<select class="inputText select">
												<option>Laki-Laki</option>
												<option>Perempuan</option>
											</select>
										</td>
									</tr>
									<tr>
										<td class="padding-ddaf" align="left">
											<p class="bold">Asal Sekolah</p>
										</td>
										<td colspan="3" class="padding-ddaf" align="left">
											<input type="text" name="sklh" class="inputText" style="width: 200px;" placeholder="Asal Sekolah">
										</td>
									</tr>
									<tr>
										<td class="padding-ddaf" align="left">
											<p class="bold">E-mail</p>
										</td>
										<td class="padding-ddaf" align="left">
											<input type="text" name="email" class="inputText" style="width: 150px;" required placeholder="example@mail.com">
										</td>
										<td class="padding-ddaf" align="left">
											<p class="bold">No.Telp</p>
										</td>
										<td class="padding-ddaf" align="left">
											+62&nbsp;<input type="text" name="noTelp" class="inputText" style="width: 120px;" placeholder="8xxxxxxxxxx">
										</td>
									</tr>
									<tr>
										<td colspan="4" class="padding-ddaf" align="center">
											<input type="Submit" name="submit" class="btn dmasuk" value="Daftar Member" style="margin-top: 20px; width: 400px;" style="width: 200px;">
											<p class="bold" style="font-size: 12px; margin-top: 5px;">By cliking, I agree to the Goodreads Terms of Service</p>
										</td>
									</tr>
								</tbody>
							</table>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</form>

	<!--  Footer    -->
	<div id="footer">
		<div class="copyright-bapus">
			<div style="margin-bottom: 30px;">
				<table class="white" width="100%" border="0">
					<tbody>
						<tr>
							<td width="60%" rowspan="3">
								<div style="padding-left: 100px">
									<p>Sosial Media Kami :</p><br>
									<a href="" target="_blank"><img src="asset/icon/facebook.png" width="40px" height="40px;" class="gray"></a>
									<a href="" target="_blank" style="margin-left: 10px;"><img src="asset/icon/gmail.png" width="40px" height="40px;" class="gray"></a>
									<a href="" target="_blank" style="margin-left: 10px;"><img src="asset/icon/twitter.png" width="40px" height="40px;" class="gray"></a>
									<a href="" target="_blank" style="margin-left: 10px;"><img src="asset/icon/instagram.png" width="40px" height="40px;" class="gray"></a>
									<a href="" target="_blank" style="margin-left: 10px;"><img src="asset/icon/google-plus.png" width="40px" height="40px;" class="gray"></a>
								</div>
							</td>
							<td width="40%">
								<div><img src="asset/logo/medcomlogo.png" width="20px" height="20px">&nbsp;Bapus Team @Galing Squad</div>
							</td>
						</tr>
						<tr>
							<td class="fontfot"><img src="asset/icon/maps.png" style="margin-top: 20px;" width="20px" height="20px">&nbsp;Kampus 1 : Jl. Rancabolang Soekarno-Hatta  No. 10B, Bandung</td>
						</tr>
						<tr>
							<td width="38%" class="fontfot" height="23"><img src="asset/icon/phone.png" style="margin-top: 5px;" width="20px" height="20px">&nbsp;Telp.  (022-7314090 - 7309811)</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
		<div class="copyright-name">
			<p style="color: #fff; margin-left: 100px;">Copyright &copy;2018 &middot; Bapus Team @Galing Squad All Rights Reserved &middot;
				<a href="#top"><img class="gray zoom" src="asset/icon/up.png" width="35px" height="35px" style="float: right; margin-right: 50px;"></a>
			</p>
		</div>
	</div>
</body>
</html>