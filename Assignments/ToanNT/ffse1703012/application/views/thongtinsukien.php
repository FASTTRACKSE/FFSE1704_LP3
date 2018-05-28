<?php 
require_once('templates/index-header.php');
?>
<?php 

foreach ($list as $u) {
	
	?>
	<div style="background-color: skyblue;text-align: center" class="jumbotron">
		<p class="head" style="text-align: center"><img src="images/165028_apec_logo.gif" height="420px" width="780px"></p>
		<h1><b>APEC VIETNAM 2017</b></h1>

	</div> 
	<div class="content">
		<div class="container">
			<div class="content node-page">
				<div class="field field-name-body field-type-text-with-summary field-label-hidden"><div class="field-items"><div class="field-item even" property="content:encoded"><p><strong><?= $u['tieu_de'] ?></strong></p>
				</div></div></div>  </div>
				<?php  }?>
				<?php
				require_once('templates/index-footer.php');
				?>
