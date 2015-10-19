<?php echo $this->load->view('common/header', ['templates_path' => $templates_path], TRUE);?>
		<!-- start: Content -->
		<div id="content" class="span10">
			<div class="row-fluid">
				
				<div class="span3 statbox purple" ontablet="span6" ondesktop="span3">
					<div class="number"><?php echo $this->user_lib->view('money');?></div>
					<div class="title">Money</div>
				</div>
			</div>
		</div>
		<!-- end: Content -->
<?php echo $this->load->view('common/footer', ['templates_path' => $templates_path], TRUE);?>
