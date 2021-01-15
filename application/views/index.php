
<?php $this->load->view('header.php');?>



<?php if ($data['side_menu'] == "Borç Alacak Ayarları") {?>
	<div class="header-edit">
<!--
 <input type="button" value="Toplu Borçlandır" onclick="window.location.href = '<?php echo base_url(); ?>yonetim/toplu_borc/add';" />
 <input type="button" value="Toplu Alacaklandır" onclick="window.location.href = '<?php echo base_url(); ?>yonetim/toplu_alacak/add';"/>
-->
</div>
<?php }?>


<?php if ($data['side_menu'] == "Fatura Ayarları") {?>
	<div class="header-edit">

		<input type="button" value="Satış Faturası Oluştur" onclick="window.location.href = '<?php echo base_url(); ?>yonetim/satis_fatura_olustur';" />
		<input type="button" value="Alış Faturası Oluştur" onclick="window.location.href = '<?php echo base_url(); ?>yonetim/alis_fatura_olustur';" />
		<input type="button" value="Gider Faturası Oluştur" onclick="window.location.href = '<?php echo base_url(); ?>yonetim/gider_fatura_olustur';" />
	</div>
<?php }?>


<?php if ($data['side_menu'] == "İrsaliye Ayarları") {?>
	<div class="header-edit">

		<input type="button" value="Satış İrsaliyesi Oluştur" onclick="window.location.href = '<?php echo base_url(); ?>yonetim/satis_irsaliye_olustur';" />
		<input type="button" value="Alış İrsaliyesi Oluştur" onclick="window.location.href = '<?php echo base_url(); ?>yonetim/alis_irsaliye_olustur';" />
 <!--
  <input type="button" value="İrsaliye'den Fatura Oluştur" onclick="window.location.href = '<?php echo base_url(); ?>yonetim/irs_fat_sec';" />
-->

</div>
<?php }?>

<?php if ($data['side_menu'] == "Sipariş Ayarları") {?>
	<div class="header-edit">

		<input type="button" value="Gelen Sipariş Oluştur" onclick="window.location.href = '<?php echo base_url(); ?>yonetim/gelen_siparis_olustur';" />


		<input type="button" value="Giden Sipariş Oluştur" onclick="window.location.href = '<?php echo base_url(); ?>yonetim/giden_siparis_olustur';" />
	</div>

<?php }?>


<?php if ($data['side_menu'] == "Teklif Ayarları") {?>
	<div class="header-edit">

		<input type="button" value="Alınan Teklif Oluştur" onclick="window.location.href = '<?php echo base_url(); ?>yonetim/alinan_teklif_olustur';" />

		<input type="button" value="Verilen Teklif Oluştur" onclick="window.location.href = '<?php echo base_url(); ?>yonetim/verilen_teklif_olustur';" />


	</div>
<?php }?>



<?php if ($data['side_menu'] == "Fatura Ödeme Ayarları") {?>
	<div class="header-edit">

		<?php echo "FATURA NO :  " . $data["fatura_no"]; ?>


	</div>
<?php }?>


<?php if ($data['side_menu'] == "Fatura Tahsilat Ayarları") {?>
	<div class="header-edit">

		<?php echo "FATURA NO :  " . $data["fatura_no"]; ?>


	</div>
<?php }?>



<?php if ($data['side_menu'] == "Cari İşlemleri Ayarları") {?>
	<div class="header-edit">
		<input type="button" value="Tahsilat - Ödeme Yap" onclick="window.location.href = '<?php echo base_url(); ?>yonetim/cari_tahsilat_odeme/add/<?php echo $data["cari_id"]; ?>';"/>
		<input type="button" value="Borçlandır - Alacaklandır" onclick="window.location.href = '<?php echo base_url(); ?>yonetim/cari_borc_alacak/add/<?php echo $data["cari_id"]; ?>';"/>


		<?php echo "Cari Açılış Bakiyesi: " . $data["cari_baslangic"] . " " . $this->session->userdata('para_birim') . "</div>";} ?>



		<?php if ($data['side_menu'] == "Kasa İşlemleri Ayarları") {
    ?>
			<?php
echo "<div class='header-edit'> Kasa Açılış Bakiyesi: " . $data["kasa_baslangic"] . " " . $this->session->userdata('para_birim') . "</div>";
} ?>


		<?php if ($data['side_menu'] == "Stok İşlemleri Ayarları") {
    ?>
			<?php
echo "<div class='header-edit'> Stok Açılış Miktarı: " . $data["stok_baslangic"] . " adet</div>";
} ?>


		<?php if ($data['side_menu'] == "Cari Tahsilat - Ödeme Ayarları") {?>
			<?php echo "<div class='header-edit'> İgili Cari: " . $data["cari_adi"] . "</div>";} ?>

			<?php if ($data['side_menu'] == "Cari Borç Alacak Ayarları") {
    echo "<div class='header-edit'> İgili Cari: " . $data["cari_adi"] . "</div>";
}?>

			<?php
$this->load->view("hizlimenu_json.php");
?>


			<?php echo $output; ?>




			<?php if ($data['side_menu'] == "Cari İşlemleri Ayarları") {?>
				<?php echo "<div style='float:right; padding-top:30px; padding-right:75px; padding-bottom:75px;'><b>" . $data["cari_adi"] . " - " . $data["cari_total"] . "</b></div>"; ?>
			<?php }?>

			<?php if ($data['side_menu'] == "Kasa İşlemleri Ayarları") {?>
				<?php echo "<div style='float:right; padding-top:30px; padding-right:75px; padding-bottom:75px;'><b>" . $data["kasa_adi"] . " - " . $data["kasa_total"] . "</b></div>"; ?>
			<?php }?>

			<?php if ($data['side_menu'] == "Stok İşlemleri Ayarları") {?>
				<?php echo "<div style='float:right; padding-top:30px; padding-right:75px; padding-bottom:75px;'><b>" . $data["stok_adi"] . " - " . $data["stok_total"] . "</b></div>"; ?>
			<?php }?>

			<?php $this->load->view('footer.php');?>


			<script>

function myFunction() {
  var input, filter, table, tr, td, i, n , txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("flex1");
  tr = table.getElementsByTagName("tr");


  for (i = 1; i < tr.length; i++) {
  td = tr[i].querySelectorAll("td");
  var tdLength = td.length;
   //alert(tdLength);
   var son=0;
   for(n=0; n<=tdLength; n++){

      td = tr[i].getElementsByTagName("td")[n];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        son = son+1;
      } else {

      }
    }
   }

  if (son == 0){  tr[i].style.display = "none"; }
  else{tr[i].style.display = "";}



  }
}

</script>