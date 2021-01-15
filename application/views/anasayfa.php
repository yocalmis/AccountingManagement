<?php $this->load->view('header_ozel.php');?>
<div class="heading">
	<h2>Genel Görünüm</h2>
	<p class="divider"></p>
</div>
<section class="index-info">
	<article class="info <?php
	echo ($data["toplam_durum"] < 0) ? "info__error" : "info__success";
	 ?>">
		<small class="info__small">Toplam Borç Alacak</small>
		<h2 class="info__heading">
			<?php
			if ($data["toplam_durum"] < 0) {
				$durum = $data["toplam_durum"] * -1;
				echo $durum . " " . $this->session->userdata('para_birim');
			}
			else {
				echo $data["toplam_durum"] . " " . $this->session->userdata('para_birim');
			} ?>
		</h2>
		<span class="info__text">
			<?php echo ($data["toplam_durum"] < 0) ? "borçlusunuz" : "alacaklısınız"; ?>
		</span>
	</article>
	<article class="info <?php
	echo ($data["toplam_durum_kasa"] < 0) ? "info__error" : "info__success";
	 ?>">
		<small class="info__small">Toplam Nakit</small>
		<h2 class="info__heading">
			<?php
			if ($data["toplam_durum_kasa"] < 0) {
				$durum = $data["toplam_durum_kasa"] * -1;
				echo $durum . " " . $this->session->userdata('para_birim');
			}
			else {
				echo $data["toplam_durum_kasa"] . " " . $this->session->userdata('para_birim');
			} ?>
		</h2>
		<span class="info__text">
			<?php echo ($data["toplam_durum_kasa"] < 0) ? "eksidesiniz" : "artıdasınız"; ?>
		</span>
	</article>
	<article class="info info--primary">
		<small class="info__small">Potansiyel Stok Satış Değeri</small>
		<h2 class="info__heading">
			<?php echo $data["toplam_stok_satis_degeri"] . " " . $this->session->userdata('para_birim'); ?>
		</h2>
		<span class="info__text">
			değerinde Ürün/Hizmet mevcut
		</span>
	</article>
</section>

<div class="main-content">
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>



	<script type="text/javascript">

		google.charts.load('current', {
			'packages': ['corechart']
		});

		google.charts.setOnLoadCallback(drawVisualization);

		function drawVisualization() {



			var
			data = google.visualization.arrayToDataTable([

				['Month', 'Borç - Alacak', 'Kasa Nakit', 'Potansiyel Stok Satış Değeri'],
				[
				'Genel',
				<?php echo $data["toplam_durum"]; ?>,
				<?php echo $data["toplam_durum_kasa"]; ?>,
				<?php echo $data["toplam_stok_satis_degeri"]; ?>

				]

				]);

			var
			options = {
				title			: 'Bilanço Özeti',
				vAxis			: {title: '<?php echo $data["currency"]; ?>'},
				hAxis			: {title: 'Borç/Alacak/Kasa/Stok Değeri'},
				seriesType	: 'bars',
				series		: {3: {type: 'line'}}
			};

			var chart = new google.visualization.ComboChart(document.getElementById('chart_div2'));
			chart.draw(data, options);
		}
	</script>


	<div id="chart_div2" style="width: 100%;  height: 500px;">


	</div>




	<script type="text/javascript">
		google.charts.load('current', {'packages':['corechart']});
		google.charts.setOnLoadCallback(drawVisualization);

		function drawVisualization() {



			var
			data = google.visualization.arrayToDataTable([
				['Month', 'Gelir', 'Gider', 'Alacaklanan', 'Borçlanılan', 'Tahsilat', 'Ödeme'],

				[
				'Bugün',
				<?php echo $data["bugun_gelir"]; ?>,
				<?php echo $data["bugun_gider"]; ?>,
				<?php echo $data["bugun_satis"]; ?>,
				<?php echo $data["bugun_alis"]; ?>,
				<?php echo $data["bugun_tahsilat"]; ?>,
				<?php echo $data["bugun_odeme"]; ?>
				],
				[
				'Bu hafta',
				<?php echo $data["buh_gelir"]; ?>,
				<?php echo $data["buh_gider"]; ?>,
				<?php echo $data["buh_satis"]; ?>,
				<?php echo $data["buh_alis"]; ?>,
				<?php echo $data["buh_tahsilat"]; ?>,
				<?php echo $data["buh_odeme"]; ?>
				],
				[
				'Bu ay',
				<?php echo $data["buay_gelir"]; ?>,
				<?php echo $data["buay_gider"]; ?>,
				<?php echo $data["buay_satis"]; ?>,
				<?php echo $data["buay_alis"]; ?>,
				<?php echo $data["buay_tahsilat"]; ?>,
				<?php echo $data["buay_odeme"]; ?>
				],
				[
				'Bu yıl',
				<?php echo $data["buyil_gelir"]; ?>,
				<?php echo $data["buyil_gider"]; ?>,
				<?php echo $data["buyil_satis"]; ?>,
				<?php echo $data["buyil_alis"]; ?>,
				<?php echo $data["buyil_tahsilat"]; ?>,
				<?php echo $data["buyil_odeme"]; ?>
				],
				[
				'Toplam',
				<?php echo $data["toplam_gelir"]; ?>,
				<?php echo $data["toplam_gider"]; ?>,
				<?php echo $data["toplam_satis"]; ?>,
				<?php echo $data["toplam_alis"]; ?>,
				<?php echo $data["toplam_tahsilat"]; ?>,
				<?php echo $data["toplam_odeme"]; ?>
				]

				]);

			var options = {
				title			: 'Dönemsel Özet Tablosu',
				vAxis			: {title: '<?php echo $data["currency"]; ?>'},
				hAxis			: {title: 'Tüm Gelir Özeti'},
				seriesType		: 'bars',
				series			: {6: {type: 'line'}},
			};

			var chart = new google.visualization.ComboChart(document.getElementById('chart_div'));
			chart.draw(data, options);
		}
	</script>

	<!--<div id="chart_div" style="width: 100%; height: 500px;"></div>-->


</div>

<?php $this->load->view('footer_ozel.php');?>
