<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Pendaftaran HUT Metro 21</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="<?= base_url(); ?>assets/images/icons/favicon.ico"/>
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/fonts/iconic/css/material-design-iconic-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/vendor/animsition/css/animsition.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/vendor/sweetalert2/dist/sweetalert2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/main.css">
	<!--===============================================================================================-->
</head>
<body>


	<div class="container-contact100">
		<img src="<?= base_url(); ?>assets/images/poster.jpg" width="100%">

		<div class="wrap-contact100">
			<form class="contact100-form validate-form" id="registrationForm" method="POST">
				<span class="contact100-form-title">
					Isi Data Berikut 
				</span>

				<div class="wrap-input100 validate-input">
					<input class="input100" type="text" name="participant_name" placeholder="Nama Lengkap" required>
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input">
					<input class="input100" type="email" name="participant_email" placeholder="Email" required>
					<small>(Pastikan email valid karena e-invitation akan dikirim ke email terdaftar)</small>
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input">
					<input class="input100" type="text" name="participant_wa" placeholder="Nomor WhatsApp" required>
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input">
					<input class="input100" type="text" name="participant_birth_place" placeholder="Tempat Lahir (Data Antigen dan PeduliLindungi)" required>
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input">
					<input class="input100" type="date" name="participant_birth_date" placeholder="Tanggal Lahir (Data Antigen dan PeduliLindungi)" required>
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input">
					<input class="input100" type="text" name="participant_nip" placeholder="NIP (NOMOR INDUK PEGAWAI BUKAN NO.KTP)" required maxlength="11">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input">
					<input class="input100" type="text" name="participant_nik" placeholder="No.KTP (Data Antigen dan PeduliLindungi)" required>
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input">
					<p>Jenis Kelamin (Data Antigen dan PeduliLindungi)</p>
					<input type="radio" id="pria" name="participant_gender" value="1" required>
					<label for="pria">Pria</label><br>

					<input type="radio" id="wanita" name="participant_gender" value="2" required>
					<label for="wanita">Wanita</label><br>
				</div>

				<div class="wrap-input100 validate-input">
					<input class="input100" type="text" name="participant_addr" placeholder="Alamat Domisili (Data Antigen dan PeduliLindungi)" required>
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input">
					<p>Unit Bisnis</p>
					<input type="radio" id="metrotv" name="participant_unit_bisnis" value="Metro TV" required>
					<label for="metrotv">Metro TV</label><br>

					<input type="radio" id="medcom" name="participant_unit_bisnis" value="Medcom.id" required>
					<label for="medcom">Medcom.id</label><br>

					<input type="radio" id="idm" name="participant_unit_bisnis" value="IDM" required>
					<label for="idm">IDM</label><br>

					<input type="radio" id="mediagroup" name="participant_unit_bisnis" value="Media Group" required>
					<label for="mediagroup">Media Group</label><br>

					<input type="radio" id="metrotransmisi" name="participant_unit_bisnis" value="Metro Transmisi" required>
					<label for="metrotransmisi">Metro Transmisi</label><br>

					<input type="radio" id="eagle" name="participant_unit_bisnis" value="Eagle" required>
					<label for="eagle">Eagle</label><br>

					<input type="radio" id="mediaacademy" name="participant_unit_bisnis" value="Media Academy" required>
					<label for="mediaacademy">Media Academy</label><br>

					<input type="radio" id="mediaindonesia" name="participant_unit_bisnis" value="Media Indonesia" required>
					<label for="mediaindonesia">Media Indonesia</label><br>

					<input type="radio" id="indocater" name="participant_unit_bisnis" value="Indocater" required>
					<label for="indocater">Indocater</label><br>

					<input type="radio" id="dpl" name="participant_unit_bisnis" value="DPL" required>
					<label for="dpl">DPL</label><br>

					<input type="radio" id="imku" name="participant_unit_bisnis" value="IMKU" required>
					<label for="imku">IMKU</label><br>

					<input type="radio" id="psu" name="participant_unit_bisnis" value="PSU" required>
					<label for="psu">PSU</label><br>

					<input type="radio" id="plazaoffice" name="participant_unit_bisnis" value="Plaza Office" required>
					<label for="plazaoffice">Plaza Office</label><br>

					<input type="radio" id="mediahotel" name="participant_unit_bisnis" value="The Media Hotel" required>
					<label for="mediahotel">The Media Hotel</label><br>
				</div>

				<div class="wrap-input100 validate-input">
					<input class="input100" type="text" name="participant_divisi" placeholder="Divisi" required>
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input">
					<input class="input100" type="text" name="participant_department" placeholder="Departement" required>
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input">
					<p>Keberangkatan ke Venue</p>
					<input type="radio" id="bus" name="participant_keberangkatan" value="1" required>
					<label for="bus">Bus (dari kedoya)</label><br>

					<input type="radio" id="motor" name="participant_keberangkatan" value="2" required>
					<label for="motor">Kendaraan Sendiri (Motor)</label><br>

					<input type="radio" id="mobil" name="participant_keberangkatan" value="3" required>
					<label for="mobil">Kendaraan Sendiri (Mobil)</label><br>
				</div>


				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn" type="submit" id="btnSubmit">
						DAFTAR
					</button>
				</div>
			</form>

			<div class="contact100-more">
				<p style='margin-top:0in;margin-right:0in;margin-bottom:8.0pt;margin-left:0in;line-height:115%;font-size:15px;font-family:"Calibri",sans-serif;'><strong><span style="color:#0D0D0D;">Informasi :&nbsp;</span></strong></p>
				<ol style="list-style-type: decimal;">
					<li><span style="color:black;">1. Pendaftaran online ditutup Rabu, 24 November 2021 Pukul 23:59</span></li>
					<li><span style="color:#C00000;">2. Peserta yang ikut Wajib melakukan test Antigen di Komplek MetroTV pada tanggal 25 November 2021 mulai pukul 08.30 s/d 16.00</span></li>
					<li><span style="color:#0D0D0D;">3. Peserta harus meinginstall aplikasi &amp; memiliki akun pedulilindungi di SmartPhone masing masing serta sudah melakukan Login</span></li>
					<li><span style="color:#0D0D0D;">4. Hasil test Antigen akan muncul di Aplikasi PeduliLindungi &amp; harus ditunjukkan pada saat checkin di lokasi pada hari H.</span></li>
					<li><span style="color:#0D0D0D;">5. Peserta akan dikirimkan eticket yang terdapat QR Code via email dan harus ditunjukkan pada saat di lokasi acara.</span></li>
					<li><span style="color:#C00000;">6. Peserta Wajib Membawa ID Card sebagai tanda pengenal pegawai</span></li>
					<li><span style="color:#C00000;">7. Acara ini terbatas hanya untuk karyawan, tidak diperkenankan membawa keluarga/teman.</span></li>
					<li><span style="color:#0D0D0D;">8. Bus akan disediakan dengan jalur Kedoya &ndash; Istora Senayan &ndash; Kedoya</span></li>
					<li><span style="color:#C00000;">9. Bus akan berangkat dari komplek MetroTV Kedoya pada tanggal 26 November 2021 pukul 15.00 WIB (tepat waktu)</span></li>
					<li><span style="color:#0D0D0D;">10. Peserta yang berangkat dengan kendaraan pribadi harus memerhatikan hal berikut :</span></li>
				</ol>
				<ul style="list-style-type: disc;margin-left:0.5in;">
					<li><span style="color:#0D0D0D;"> a. Parkir Wajib menggunakan kartu E-Money, Tapcash atau Flazz</span></li>
					<li><span style="color:#0D0D0D;"> b. Biaya parkir peserta ditangggung masing - masing</span></li>
					<li><span style="color:#0D0D0D;"> c. Akses ke Gelora Bung Karno diberlakukan Ganjil Genap</span></li>
				</ul>
				<p><span style="color:#0D0D0D;">11. Kepada peserta yg beragama Islam diharapkan membawa perlengkapan sholat masing masing.</span></p>
				<p><span style="color:#0D0D0D;">12. Gate checkin &amp; masuk Istora akan ditutup pada pukul 19.30 WIB.</span></p>
				
			</div>
		</div>
	</div>



	<div id="dropDownSelect1"></div>
	<script type="text/javascript">var base_url = "<?= base_url(); ?>" </script>
	<!--===============================================================================================-->
	<script src="<?= base_url(); ?>assets/vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="<?= base_url(); ?>assets/vendor/animsition/js/animsition.min.js"></script>
	<!--===============================================================================================-->
	<script src="<?= base_url(); ?>assets/vendor/bootstrap/js/popper.js"></script>
	<script src="<?= base_url(); ?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="<?= base_url(); ?>assets/vendor/select2/select2.min.js"></script>
	<!--===============================================================================================-->
	<script src="<?= base_url(); ?>assets/vendor/daterangepicker/moment.min.js"></script>
	<script src="<?= base_url(); ?>assets/vendor/daterangepicker/daterangepicker.js"></script>
	<script src="<?= base_url(); ?>assets/vendor/sweetalert2/dist/sweetalert2.min.js"></script>
	<!--===============================================================================================-->
	<script src="<?= base_url(); ?>assets/vendor/countdowntime/countdowntime.js"></script>
	<!--===============================================================================================-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKFWBqlKAGCeS1rMVoaNlwyayu0e0YRes"></script>
	<script src="<?= base_url(); ?>assets/js/map-custom.js"></script>
	<!--===============================================================================================-->
	<script src="<?= base_url(); ?>assets/js/main.js"></script>
	<script src="<?= base_url(); ?>assets/js/pages/registration.js"></script>

	<!-- Global site tag (gtag.js) - Google Analytics -->

</body>
</html>
