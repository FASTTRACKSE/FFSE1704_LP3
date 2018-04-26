<h2><?=$data?></h2>
<h3><?=$data?></h3>

<a href="<?php echo base_url().'index.php/'. $this->uri->segment(1).'/home/' ?>">	<?php echo $this->uri->segment(1) ?>
</a>
->
<a href="<?php echo base_url().'index.php/'.$this->uri->segment(1).'/'.$this->uri->segment(2) ?>">
	<?php echo $this->uri->segment(2) ?>
</a>->
	<?php echo $this->uri->segment(3) ?>