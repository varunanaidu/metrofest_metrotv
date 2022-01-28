<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
<head>
	<meta charset="utf-8"> 
	<meta name="viewport" content="width=device-width"> 
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="x-apple-disable-message-reformatting">  
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/ticket.css">
</head>

<body>
	<center>  	
		<h2 style="font-family: sans-serif;">Selamat anda telah sukses terdaftar dalam acara puncak HUT Metro TV ke 21 di Istora Senayan.</h2>
		<h2 style="font-family: sans-serif;">Harap untuk melakukan Antigen Test pada tanggal 25 November 2021 di Media Klinik, Kedoya <br/> dengan menunjukan e-ticket berikut ini</h2>

		<div class="cardWrap">
			<?php 
			if ( isset($participant) and $participant != 0 ) {
				foreach ($participant as $row) {
					?>
					<div class="card cardLeft">
						<h1>HUT METRO TV 21</h1>
						<table>
							<tr>
								<td><h2>Tanggal</h2></td>
								<td><h2>:</h2></td>
								<td><h2>26 November 2021 <br/> pukul 16.00 sd 21.00</h2></td>
							</tr>
							<tr>
								<td><h2>Name</h2></td>
								<td><h2>:</h2></td>
								<td><h2><?= $row->participant_name ?></h2></td>
							</tr>
							<tr>
								<td><h2>Company</h2></td>
								<td><h2>:</h2></td>
								<td><h2><?= $row->participant_unit_bisnis ?></h2></td>
							</tr>
							<tr>
								<td><h2>Divisi/Dept</h2></td>
								<td><h2>:</h2></td>
								<td><h2><?= $row->participant_divisi . '/' . $row->participant_department ?></h2></td>
							</tr>
							<tr>
								<td><h2>Email</h2></td>
								<td><h2>:</h2></td>
								<td><h2><?= $row->participant_email ?></h2></td>
							</tr>
							<tr>
								<td><h2>WhatsApp</h2></td>
								<td><h2>:</h2></td>
								<td><h2><?= $row->participant_wa ?></h2></td>
							</tr>
						</table>

					</div>
					<div class="card cardRight">
						<div class="logo"><img src="../../assets/images/logo.jpg"></div>
						<div class="qrcode">
							<img src="../../assets/public/registran/<?= $row->participant_nip ?>/<?= $row->participant_qr ?>">
							<h2><?= $row->participant_nip ?></h2>
						</div>
					</div>

					<?php 
				}
			}
			?>
		</div>
		<div class="info">
			<h2><b>Negatif antigen jadi syarat mutlak kehadiran. Peserta harus meinginstall aplikasi & memiliki akun pedulilindungi di SmartPhone masing masing serta sudah melakukan login.</b></h2>
		</div>
	</center>
</body>
</html>