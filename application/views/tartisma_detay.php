<?php error_reporting(0);if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}
?>
<?php $this->load->view('header.php');?>
<link rel="stylesheet" href="<?php echo site_url('assets') ?>/grocery_crud/texteditor/medium-editor/medium-editor.min.css">
<link rel="stylesheet" href="<?php echo site_url('assets') ?>/grocery_crud/texteditor/medium-editor/themes/default.css">

<div class="material-container">

	<div class="chats">
		<div class="chatsTopBar">
			<h2 class="chatsTopBar__title">Mesaj Gönder</h2>
			<button class="chats-send-new waves-effect waves-ripple">
				<span class="icon" data-svg="add_circle_outline-24px"></span>
				Yeni Mesaj

	<?php  $n    = 0;
$sohbetler[] = "";if ($tartisma_msj_getir): foreach ($tartisma_msj_getir as $dizi): ?>
		<?php

    $sohbetler[$n]["name"]      = $gonderici[$n];
    $sohbetler[$n]["tarih"]     = $dizi['tarih'];
    $sohbetler[$n]["okunmamis"] = 0;
    $sohbetler[$n]["url"]       = "#";
    $sohbetler[$n]["message"]   = $dizi['mesaj'];
    $sohbetler[$n]["id"]        = $dizi['id'];

    ?>

	<?php $n = $n + 1;endforeach;endif;   ?>

			</button>

		</div>
		<form class="sendMessageForm hide" id="myform" action="<?php echo base_url(); ?>yonetim/tartisma_gonder" method="POST">
			<div class="form-title-left">
				<a><?php echo $konu; ?>
			<?php if($sohbetler[0]["name"]==""){
echo'<input type="hidden" name="ilk" value="1">';

			} else{

echo'<input type="hidden" name="ilk" value="0">';

			} ?>		


				</a>
			</div>
			<div class="sendMessageForm__inner">
				<textarea id="ice" name="ice" class="texteditor waves-effect waves-light" data-placeholder="Bir şeyler yazın"></textarea>
			</div>

			<button type="submit" name="action" class="chats-send waves-effect waves-ripple waves-light">Gönder <span class="icon" data-svg="send-24px"></span></button>
			<div class="sendMessageForm__statuss">
				<span class="chat-send--sending hide">Gönderiliyor..</span>
				<span class="chat-send--success hide">Başarılı</span>
				<span class="chat-send--error hide">Bir şeyler yanlış gitti</span>
			</div>
			<input type="hidden" name="tartisma" value="<?php echo $tartisma; ?>">
		</form>

	</div>



	<!--
	<?php echo $tarih; ?> <br>
	<?php echo $kim; ?> <br>
	<?php echo $konu; ?> <br>
-->
</div>


<div class="material-container mt1 dFlex fdc chat-rows">

	<script>
		self.chats = <?php if($sohbetler[0]["name"]==""){echo 0;} else{echo json_encode($sohbetler);} ?>;
		self.IsChatsMessage = true;
	</script>
</div>


<!--<?php $n = 0;if ($tartisma_msj_getir): foreach ($tartisma_msj_getir as $dizi): ?>

	Tarih : <?php echo $dizi['tarih']; ?>
	Gönderici : <?php echo $gonderici[$n]; ?>
	Mesaj : <?php echo $dizi['mesaj']; ?>
	<?php $n = $n + 1;endforeach;endif;?>
-->


<script src="<?php echo site_url('assets') ?>/grocery_crud/texteditor/medium-editor/medium-editor.min.js"></script>
<script>
	var elements = document.querySelectorAll('textarea.texteditor');
	if (typeof MediumEditor !== 'undefined') {
		var editor = new MediumEditor(elements, {
			toolbar: {
				buttons: ['bold', 'italic', 'underline'],
			},
		});
		elements.forEach(function(elem) {
			elem.style.display = 'none';
			elem.style.visibility = 'hidden';
			elem.setAttribute('tab-index', -1);

		});
	}

</script>
<?php $this->load->view('footer_ozel.php');?>
<script src="<?php echo base_url('assets/grocery_crud/js/jquery_plugins/') ?>jquery.form.min.js"></script>
