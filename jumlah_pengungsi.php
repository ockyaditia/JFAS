<!DOCTYPE html>
<html>
	<head>
		<meta charset = "utf-8">
		<title>Pengungsi Banjir</title>
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
		
		<div class = "divKontenJakarta">
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
						$connect = mysql_connect("localhost", "root", "root");
				
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
			
			<div>
				<div class = "leftContentJakarta">
				
				<br>
				<br>
				<br>
				
				<div style = "position:absolute; margin-left:255px; margin-top:50px;">
					<form method = "get" autocomplete = "on" action = "jumlah_pengungsi.php">
						<table>
							<tr>
								<td>
									<select name = "jakarta" required>
										<option style = "height:24px;" value = "Pilih">Pilih</option>
										<option style = "height:24px;" value = "Jakarta Barat">Jakarta Barat</option>
										<option style = "height:24px;" value = "Jakarta Utara">Jakarta Utara</option>
										<option style = "height:24px;" value = "Jakarta Pusat">Jakarta Pusat</option>
										<option style = "height:24px;" value = "Jakarta Selatan">Jakarta Selatan</option>
										<option style = "height:24px;" value = "Jakarta Timur">Jakarta Timur</option>
									</select>
								</td>
								<td>
									<input style = "width:100px; height:30px; font-size:12pt; font-family: arcena;" type = "submit" value = "Search"/>
								</td>
							</tr>
						</table>
					</form>
				</div>
				
				<div style = "position:absolute; margin-left:10px; margin-top:100px; overflow:scroll; height:700px; width:730px;">
					
					<?php
						$connect = mysql_connect("localhost", "root", "root");
				
						if (!$connect)
							die('Koneksi ke database gagal: ' .mysql_error());
						
						$selected = mysql_select_db("jfas", $connect);
						
						if (!$selected)
							die('Tidak ada database: ' .mysql_error());
							
							$jakarta = (isset($_GET['jakarta']) ? $_GET['jakarta'] : -1);
							$idJakarta = 0;
				
							if ($jakarta == "Jakarta Barat") {
								$idJakarta = 1;
								print("<h3 style = 'text-align:center;'>Tidak ada jumlah pengungsi</h3>");
							}
							else if ($jakarta == "Jakarta Utara") {
								$idJakarta = 2;
								print("<h3 style = 'text-align:center;'>Tidak ada jumlah pengungsi</h3>");
							}
							else if ($jakarta == "Jakarta Pusat") {
								$idJakarta = 3;
								print("<h3 style = 'text-align:center;'>Tidak ada jumlah pengungsi</h3>");
							}
							else if ($jakarta == "Jakarta Selatan") {
								$idJakarta = 4;
								print("<h3 style = 'text-align:center;'>Tidak ada jumlah pengungsi</h3>");
							}
							else if ($jakarta == "Jakarta Timur") {
								$idJakarta = 5;
								print("<h3 style = 'text-align:center;'>Tidak ada jumlah pengungsi</h3>");
							}
							else
								print("<h3 style = 'text-align:center; color:red;'>Silahkan pilih terlebih dahulu</h3>");
							
						$sql1 = "select date, nama_wilayah, nama_jalan, jumlah_pengungsi, jumlah_pengungsi_terkena_penyakit from jumlah_pengungsi where id_jakarta = '$idJakarta'";
						
						$result_sql1 = mysql_query($sql1, $connect);
						
						while ($row_sql1 = mysql_fetch_row($result_sql1)) {
							foreach($row_sql1 as $key => $value) {
								print("<td style = 'width:140px; height:50px; font-size:10pt; text-align:center;'>$value</td>");
							}
						}
						mysql_close($connect);
					?>
				</div>
				
				<div>
					<div id='cssmenu' style = "padding-left:270px; width:750px">
						<ul>
						   <li class='last'><a href='jumlah_pengungsi.php'><span>Jumlah Pengungsi</span></a></li>
						</ul>
					</div>
				</div>
								
				<div class = "divMenu">
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
						
						<div class = "divTautan">
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
			
			<div class = "backtoTopJakarta">
				<div>
					<hr /><a href="#top">&uarr; Kembali ke atas</a>
				</div>
			</div>
			
			<table class = "autoMargin copyrightJakarta">
				<tfoot>
					<tr>
						<td class = "align footerSize">Copyright &copy; 2014. <span style = "color:blue">JFAS Information System</span>. All right reserved.</td>
					</tr>
				</tfoot>
			</table>
		</div>
	</body>
</html>