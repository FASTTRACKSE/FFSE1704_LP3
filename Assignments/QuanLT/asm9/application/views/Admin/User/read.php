<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1 style="color: red"> <?=$id?> </h1>
<h2> <?=$name?> </h2>
<a href="<?php echo base_url().'index.php/'.$this->uri->segment(1).'/home/index/'?>" ><?php echo $this->uri->segment(1);?></a>-->
<a href="<?php echo base_url().'index.php'.$this->uri->segment(2).'/user/'?>" ><?php echo $this->uri->segment(2);?></a>
</body>
</html>