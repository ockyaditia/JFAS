<!DOCTYPE html>
<html>
	<head>
		<meta charset = "utf-8">
		<title>Beranda</title>
		<link rel = "stylesheet" type = "text/css" href = "css/all.css">
		<link href="themes/5/js-image-slider.css" rel="stylesheet" type="text/css" />
		<script src="themes/5/js-image-slider.js" type="text/javascript"></script>
		<script type="text/javascript">
			imageSlider.thumbnailPreview(function (thumbIndex) { return "<img src='images/thumb" + (thumbIndex + 1) + ".jpg' style='width:70px;height:44px;' />"; });
		</script>
		<script src="jquery/jquery-1.11.0.js"></script>
		<script src="jquery/jquery.js"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script src="jquery/jquery.malihu.PageScroll2id.js"></script>
		<link href='jquery/fly_sidemenu.css' rel='stylesheet' type='text/css'>
		<script type="text/javascript" src="jquery/jquery.fly_sidemenu.js"></script>
		<script>
			$(document).ready( function() {
			$(".sidemenu").fly_sidemenu();
			});

		</script>
		<script>
			(function($){
				$(window).load(function(){
					
					/* Page Scroll to id fn call */
					$("#navigation-menu a,a[href='#top'],a[rel='m_PageScroll2id']").mPageScroll2id({
						highlightSelector:"#navigation-menu a"
					});
					
					/* demo functions */
					$("a[rel='next']").click(function(e){
						e.preventDefault();
						var to=$(this).parent().parent("section").next().attr("id");
						$.mPageScroll2id("scrollTo",to);
					});
					
				});
			})(jQuery);
		</script>
	</head>
	
	<body>
		
		<div class = "divKonten">
			<div class = "search">
				<table class = "searchBackground">
					<tr>
						<form method = "get" autocomplete = "on" action = "search.php">
							<th><input type = "search" name ="search" placeholder = "Cari" class = "textCari"/></th>
							<th><input type = "submit" value = "" class = "searchButton"></th>
						</form>
					</tr>
				</table>
			</div>
		
			<div class = "JFAS">
				<h1>JFAS (Jakarta Flood Area System)</h1>
			</div>
			
			<div>
				<p class = "align textBerjalan">
					<marquee>
						<?php
						$connect = mysql_connect("localhost", "root", "");
				
						if (!$connect)
							die('Koneksi ke database gagal: ' .mysql_error());
						
						$selected = mysql_select_db("jfas", $connect);
						
						if (!$selected)
							die('Tidak ada database: ' .mysql_error());
							
						$sql1 = "select date, nama_jalan, informasi_lalulintas, kondisi_jalan, ' ____________________ ' from lalu_lintas";
						
						$result_sql1 = mysql_query($sql1, $connect);

						while ($row_sql1 = mysql_fetch_row($result_sql1)) {
							foreach($row_sql1 as $key => $value) {
								print("$value ");
							}
						}
						mysql_close($connect);
					?>
					</marquee>
				</p>
			</div>
			
			<div class = "divSize">
			
			</div>
			
			<div style = "float:left">
				<div class = "leftContent">
				
				<br>
				<br>
				<br>
				
				<div style = "position:absolute; margin-left:990px; margin-top:-140px">
					<a href = "help.php"><img src = "images/help.png" onmouseover = "this.src='images/help2.png'" onmouseout = "this.src='images/help.png'"></a>
				</div>
				
				<div style = "margin-left:20px">
					<script type = "text/javascript" src = "javascript/slideshow.js"></script>
				
					<canvas class = "canvas" id = "showCanvas" width = "600" height = "400">
						Canvas Image Slide Show
					</canvas>
				</div>
				
				<div style = "position:absolute; margin-left:50px; width:650px;">
					<p style = "font-size:15pt; text-align:justify;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sistem Informasi berbasis web bernama JFAS (Jakarta Flood Area System). JFAS menyediakan informasi untuk masyarakat agar bisa mengetahui kondisi terkini ketika terjadi musibah bencana banjir. Masyarakat bisa mendapatkan informasi lokasi di wilayah DKI Jakarta yang terkena dampak bencana banjir, informasi lokasi jalan di wilayah DKI Jakarta yang tergenang banjir sehingga dapat mengantisipasi jalan yang akan dilalui oleh pengguna jalan agar aktifitas masyarakat bisa berjalan secara normal dan bisa meminimalisir kerugian waktu. JFAS juga menyediakan fitur untuk mengetahui ketinggian air di lokasi yang terkena dampak banjir, mengetahui tinggi air bendung yang terhubung dengan sungai di wilayah DKI Jakarta, mengetahui informasi lalu lintas terkini, mengetahui prediksi cuaca terkini, mengetahui nomor telepon darurat yang dapat dihubungi, mengetahui nomor rekening bank untuk masyarakat yang ingin menyumbang dana untuk korban banjir, dan mengetahui jumlah pengungsi akibat bencana banjir berdasarkan daerah di wilayah DKI Jakarta.</p>
					<br>
					<br>
					<p style = "font-size:15pt;">Dengan adanya sistem informasi JFAS diharapkan :</p>
					<ol style = "font-size:15pt;">
						<li><p style = "font-size:15pt; text-align:justify;">Penanganan bencana banjir dapat menggunakan sistem informasi berbasis web karena dengan menggunakan sistem informasi pengelolaan data semakin mudah dan terstruktur serta mudah dalam melakukan pemeliharaan (maintenance) terhadap sistem informasi</p></li>
						<li><p style = "font-size:15pt; text-align:justify;">Dengan adanya JFAS (Jakarta Flood Area System) dapat meminimalisir kerugian yang terjadi akibat bencana banjir baik yang terkena bencana banjir maupun yang tidak terkena dampak banjir</p></li>
						<li><p style = "font-size:15pt; text-align:justify;">Masyarakat dapat mengetahui informasi lokasi wilayah yang terkena bencana banjir di wilayah Jakarta, mengetahui ketinggian air di bendung yang menghubungi sungai di wilayah Jakarta, mengetahui informasi lalu lintas terkini, prediksi cuaca terkini, nomor telepon darurat yang bisa dihubungi, mengetahui informasi rekening bank dan jumlah pengungsi akibat musibah banjir di wilayah Jakarta</p></li>
						<li><p style = "font-size:15pt; text-align:justify;">Masyarakat umum dan pihak-pihak pendukung lainnya dapat saling berinteraksi dan berbagi informasi tentang lokasi wilayah yang terkena dampak banjir dengan adanya sistem informasi tersebut.</p></li>
					</ol>
				</div>
				
				<div class = "divMenuHome">
					<ul class="menu cf">
						<li><a href="index.php">Beranda</a></li>
						<li>
							<a href="region.php">Wilayah<img class = "arrow" src = "images/symbol.png" alt = "images/symbol.png"></a>
							<ul class="submenu">
								<li><a href="jakarta_barat.php">Jakarta Barat</a></li>
								<li><a href="jakarta_utara.php">Jakarta Utara</a></li>
								<li><a href="jakarta_pusat.php">Jakarta Pusat</a></li>
								<li><a href="jakarta_selatan.php">Jakarta Selatan</a></li>
								<li><a href="jakarta_timur.php">Jakarta Timur</a></li>
							</ul>         
						</li>
						<li><a href="contact.php">Tentang</a></li>
					</ul>
				</div>
				
				<ul class="sidemenu">
					<li><a href="index.php"><img src = "images/home.png" style = "vertical-align:middle">&nbsp;&nbsp;&nbsp;Beranda</a></li>
					<li><a href="region.php"><img src = "images/region.png" style = "vertical-align:middle">&nbsp;&nbsp;&nbsp;Wilayah</a></li>
					<li><a href="contact.php"><img src = "images/about.png" style = "vertical-align:middle">&nbsp;&nbsp;&nbsp;Tentang</a></li>
				  
					<div id="sliderFrame">
						<div id="ribbon"></div>
						<div id="slider">
							<a href="gallery.html">
								<img src="images/gallery/1.jpg" alt="Banjir DKI Jakarta" />
							</a>
							<a href="gallery.html">
								<img src="images/gallery/2.jpg" alt="Banjir DKI Jakarta" />
							</a>
							<a href="gallery.html">
								<img src="images/gallery/3.jpg" alt="Banjir DKI Jakarta" />
							</a>
							<a href="gallery.html">
								<img src="images/gallery/4.jpg" alt="Banjir DKI Jakarta" />
							</a>
							<a href="gallery.html">
								<img src="images/gallery/5.jpg" alt="Banjir DKI Jakarta" />
							</a>
							<a href="gallery.html">
								<img src="images/gallery/6.jpg" alt="Banjir DKI Jakarta" />
							</a>
							<a href="gallery.html">
								<img src="images/gallery/7.jpg" alt="Banjir DKI Jakarta" />
							</a>
							<a href="gallery.html">
								<img src="images/gallery/8.jpg" alt="Banjir DKI Jakarta" />
							</a>
							<a href="gallery.html">
								<img src="images/gallery/9.jpg" alt="Banjir DKI Jakarta" />
							</a>
							<a href="gallery.html">
								<img src="images/gallery/10.jpg" alt="Banjir DKI Jakarta" />
							</a>
							<a href="gallery.html">
								<img src="images/gallery/11.jpg" alt="Banjir DKI Jakarta" />
							</a>
							<a href="gallery.html">
								<img src="images/gallery/12.jpg" alt="Banjir DKI Jakarta" />
							</a>
							<a href="gallery.html">
								<img src="images/gallery/13.jpg" alt="Banjir DKI Jakarta" />
							</a>
							<a href="gallery.html">
								<img src="images/gallery/14.jpg" alt="Banjir DKI Jakarta" />
							</a>
						</div>
						
						<div id="thumbs">
							<div class="thumb"><img src="images/gallery/thumb1.jpg" /></div>
							<div class="thumb"><img src="images/gallery/thumb2.jpg" /></div>
							<div class="thumb"><img src="images/gallery/thumb3.jpg" /></div>
							<div class="thumb"><img src="images/gallery/thumb4.jpg" /></div>
							<div class="thumb"><img src="images/gallery/thumb5.jpg" /></div>
							<div class="thumb"><img src="images/gallery/thumb6.jpg" /></div>
							<div class="thumb"><img src="images/gallery/thumb7.jpg" /></div>
							<div class="thumb"><img src="images/gallery/thumb8.jpg" /></div>
							<div class="thumb"><img src="images/gallery/thumb9.jpg" /></div>
							<div class="thumb"><img src="images/gallery/thumb10.jpg" /></div>
							<div class="thumb"><img src="images/gallery/thumb11.jpg" /></div>
							<div class="thumb"><img src="images/gallery/thumb12.jpg" /></div>
							<div class="thumb"><img src="images/gallery/thumb13.jpg" /></div>
							<div class="thumb"><img src="images/gallery/thumb14.jpg" /></div>
						</div>
					</div>
					
					<br>
					<br>
					
					<table class = "autoMargin imageBox">
						<tfoot>
							<tr>
								<td class = "align footerSize">Copyright &copy; 2014. <span style = "color:blue">JFAS Information System</span>. All right reserved.</td>
							</tr>
						</tfoot>
					</table>
				</ul>
				
				</div>
				
				<div class = "clockDiv1">
					<div class = "clockDiv2">
						<a href="clock.html" class = "clockAnchor">
							<img src = "http://localtimes.info/images/countries/id.png" alt = "http://localtimes.info/images/countries/id.png"> Jakarta
						</a>
					</div>
					<script	
						type="text/javascript"
						src="http://localtimes.info/clock.php?continent=Asia&amp;country=Indonesia&amp;city=Jakarta&amp;cp1_Hex=000000&amp;cp2_Hex=ffffff&amp;cp3_Hex=000000&amp;fwdt=150&amp;ham=0&amp;hbg=1&amp;hfg=0&amp;sid=0&amp;mon=0&amp;wek=0&amp;wkf=0&amp;sep=0&amp;widget_number=110">
					</script>
				</div>
				
				<div style = "position:absolute; margin-top:300px;">
					<?php
						$connect = mysql_connect("localhost", "root", "");
				
						if (!$connect)
							die('Koneksi ke database gagal: ' .mysql_error());
						
						$selected = mysql_select_db("jfas", $connect);
						
						if (!$selected)
							die('Tidak ada database: ' .mysql_error());
						
						$email = (isset($_GET['email']) ? $_GET['email'] : "");
						$password = (isset($_GET['password']) ? $_GET['password'] : "");
						
						if ($password != '503945')
						{
					?>
				
				<div style = "position:absolute; margin-left:865px; margin-top:-510px;">
					<ul class="menu2 cf2">
						<li>
							<a href="#">Masuk<img class = "arrow" src = "images/symbol.png" alt = "images/symbol.png"></a>
							<ul class="submenu2">
								<li>
									<form method = "get" action = "index.php">
										<br>
										<input type = "email" name = "email" placeholder = "Email" class = "size2" required />
										<br>
										<br>
										<input type = "password" name = "password" placeholder = "Password" class = "size2" required />
										<br>
										<br>
										<input class = "login" style = "margin-left:20px;" type = "submit" name = "submit" value = "Masuk"/>
										<input class = "login" type = "reset" value = "Hapus"/>
										<br>
										<br>
									</form>
								</li>
							</ul>         
						</li>
					</ul>
				</div>
			
				<div style = "position:absolute; margin-left:1000px; margin-top:-510px;">
					<ul class="menu2 cf2">
						<li>
							<a href="#">Daftar<img class = "arrow" src = "images/symbol.png" alt = "images/symbol.png"></a>
							<ul class="submenu2">
								<li>
									<form method = "get">
										<br>
										<input type = "text" name = "nama" placeholder = "Nama" class = "size2" required />
										<br>
										<br>
										<input type = "email" name = "email" placeholder = "Email" class = "size2" required />
										<br>
										<br>
										<input type = "password" name = "password" placeholder = "Password" class = "size2" required />
										<br>
										<br>
										<input type = "text" name = "kota" placeholder = "Kota" class = "size2" required />
										<br>
										<br>
										<textarea name = "alamat" placeholder = "Alamat" class = "size3" required></textarea>
										<br>
										<br>
										<input class = "login" style = "margin-left:20px;" type = "submit" value = "Daftar"/>
										<input class = "login" type = "reset" value = "Hapus"/>
										<br>
										<br>
									</form>
								</li>
							</ul>         
						</li>
					</ul>
				</div>
				
					<?php
						}
					?>
					</div>
				
				<div class = "rightContent">
					<div>
						<div class = "featureMenu">
							<p class = "align">I N F O &nbsp;&nbsp; A N D A</p>
						</div>
						<div class = "feature">
							<h3><a href = "lokasi_wilayah.php"><span class = "link">Info Lokasi Wilayah</span></a></h3>
							<h3><a href = "lalu_lintas.php"><span class = "link">Info Lalu Lintas</span></a></h3>
							<h3><a href = "lokasi_bendung.php"><span class = "link">Info Lokasi Bendung</span></a></h3>
							<hr style = "border-style:dashed;">
							<h3><a href = "kondisi_cuaca.php"><span class = "link">Cuaca Terkini</span></a></h3>
							<h3><a href = "telepon_darurat.php"><span class = "link">Telepon Darurat</span></a></h3>
							<h3><a href = "rekening_bank.php"><span class = "link">Rekening Bank</span></a></h3>
							<h3><a href = "jumlah_pengungsi.php"><span class = "link">Pengungsi Banjir</span></a></h3>
						</div>
						
						<div class = "archiveMenu">
							<p class = "align">A R S I P &nbsp;&nbsp; D A T A</p>
						</div>
						<div class = "archive">
							<h3><a href = "#">></a></h3>
							<h3><a href = "#">></a></h3>
							<h3><a href = "#">></a></h3>
						</div>

						<div class = "kataMutiaraMenu">
							<p class = "align">J F A S</p>
						</div>
						<div class = "kataMutiara">
							<p style = "text-align:justify; width:93%;">&nbsp;&nbsp;&nbsp;"Tidak ada sesuatu musibahpun yang menimpa seseorang kecuali dengan izin Allah; Dan barangsiapa yang beriman kepada Allah, niscaya Dia akan memberi petunjuk kepada hatinya. Dan Allah Maha Mengetahui segala sesuatu." (At Taghabun:11)</p>
							<p style = "text-align:justify; width:93%;">&nbsp;&nbsp;&nbsp;"Dan sungguh akan Kami berikan cobaan kepada kalian, dengan sedikit ketakutan, kelaparan, kekurangan harta, jiwa dan buah-buahan. Dan berikanlah berita gembira kepada orang-orang yang sabar." (Al-Baqarah:155)</p>
						</div>
						
						<div class = "divTautan2">
							<p style = "margin-left:120px">TAUTAN LUAR</p>
							<p>
								<a href = "http://www.bmkg.go.id/" class = "myLink">
									<img src = "images/bmkg.jpg" alt = "bmkg.png" class = "social myLinkImage"><em>&nbsp;&nbsp;&nbsp;Badan Meteorologi, Klimatologi dan Geofisika</em>
								</a>
							</p>
							<p>
								<a href = "http://www.depkes.go.id/" class = "myLink">
									<img src = "images/kk.jpg" alt = "kk.png" class = "social myLinkImage"><em>&nbsp;&nbsp;&nbsp;Kementerian Kesehatan</em>
								</a>
							</p>
							<p>
								<a href = "http://www.menlh.go.id/" class = "myLink">
									<img src = "images/klh.png" alt = "klh.png" class = "social myLinkImage"><em>&nbsp;&nbsp;&nbsp;Kementerian Lingkungan Hidup</em>
								</a>
							</p>
							<p>
								<a href = "http://www.pu.go.id/" class = "myLink">
									<img src = "images/pu.png" alt = "pu.png" class = "social myLinkImage"><em>&nbsp;&nbsp;&nbsp;Kementerian Pekerjaan Umum</em>
								</a>
							</p>
						</div>
					</div>
				</div>
			</div>
			
			<div class = "backtoTop">
				<div>
					<hr /><a href="#top">&uarr; Kembali ke atas</a>
				</div>
			</div>
			
			<table class = "autoMargin copyright">
				<tfoot>
					<tr>
						<td class = "align footerSize">Copyright &copy; 2014. <span style = "color:blue">JFAS Information System</span>. All right reserved.</td>
					</tr>
				</tfoot>
			</table>
		</div>
	</body>
</html>