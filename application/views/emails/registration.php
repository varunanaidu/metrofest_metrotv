<?php if ( !defined('BASEPATH' ) )exit('No direct script access allowed');?>
<div id="content" style="padding:20px;background:#FCFCFC;">
	<center>  	
		<h2 style="font-family: sans-serif;">Selamat anda telah sukses terdaftar dalam acara puncak HUT Metro TV ke 21 di Istora Senayan.</h2>
		<h2 style="font-family: sans-serif;">Harap untuk melakukan Antigen Test pada tanggal 25 November 2021 di Media Klinik, Kedoya <br/> dengan menunjukan e-ticket berikut ini</h2>

		<div class="cardWrap">
			<?php 
			if ( isset($email['content']) and $email['content'] != 0 ) {
				foreach ($email['content'] as $row) {
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
						<div class="logo"><img src="https://metrofest.mediagroupnetwork.com/assets/images/logo.jpg"></div>
						<div class="qrcode">
							<img src="https://metrofest.mediagroupnetwork.com/assets/public/registran/<?= $row->participant_nip ?>/<?= $row->participant_qr ?>">
							<h2><?= $row->participant_nip ?></h2>
						</div>
					</div>

					<?php 
				}
			}
			?>
		</div>
		<div class="info">
			<h2>Negatif Antigen jadi syarat mutlak kehadiran. Pastikan install aplikasi peduli lindungi di smatphone Anda <br/> dan hadir di Istora Senayan sebelum pukul 19.30</h2>
		</div>
	</center>
</div>