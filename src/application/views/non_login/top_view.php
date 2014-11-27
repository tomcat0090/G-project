
	<div class="wrapper">
		<div class="box">
<!-- sidebar -->
<div class="column col-sm-3" id="sidebar">
	<a class="logo" href="#">G</a>
	<ul class="nav">
		<li>
			<a href="#login">Login</a>
		</li>
		<li>
			<a href="#newgame">NewGame</a>
		</li>
		<li>
			<a href="#credit">Credit</a>
		</li>
	</ul>
</div>
<!-- /sidebar -->

			<!-- main -->
			<div class="column col-sm-9" id="main">
				<div class="padding">
					<div class="full col-sm-9">

							<!-- content -->

							<!-- login -->
							<div class="col-sm-12" id="login">
								<div class="page-header text-muted">
								Login
								</div>
							</div>

							<div class="row">
								<div class="col-lg-6 col-md-8">

									<?php echo form_open('index/login', array('class' => "form-horizontal")); ?>
									<div id="infoMessage"><?php echo $message;?></div>

									<div class="control-group">
										<?php echo form_label('E-Mail / Username', 'identity', array('class'=>'control-label', 'for'=>'identityl')); ?>
										<div class="controls">
											<?php echo form_input('identity', $this->input->post('identity')); ?>
										</div>
									</div>

									<div class="control-group">
										<?php echo form_label('Password', 'password', array('class'=>'control-label', 'for'=>'password')); ?>
										<div class="controls">
											<?php echo form_password('password'); ?>
										</div>
									</div>

									<div class="control-group">
										<div class="controls">
											<label class="checkbox">
												<?php echo form_checkbox('remember_me', true); ?> Remember me
											</label>
										</div>
									</div>

									<div>
										<span class="btn btn-caps btn-middle"> 
											<?php echo form_submit(array('value'=>'Login', 'name'=>'submit', 'class' => 'btn btn-caps')); ?>
										</span>
											<?php echo anchor('users/forgot', '<span class="btn btn-gray">Forgot Password</span>', array('class' =>'link-reset btn btn-middle btn-gray')); ?>
									</div>
									<?php echo form_close(); ?>
								</div>
							</div>
							<!-- /login -->

							<!-- new game -->
							<div class="col-sm-12" id="newgame">
								<div class="page-header text-muted">
									NewGame
								</div>
							</div>

							<div class="row">
								<div class="col-lg-6 col-md-8">
										<?php echo form_open('index/register', array('class' => "form-inline form-horizontal")); ?>

										<div class="control-group">
											<?php echo form_label('Username', 'username'); ?>
											<div class="controls">
												<?php echo form_input('username', $this->input->post('username')); ?>
											</div>
										</div>
										<div class="control-group">
											<?php echo form_label('E-Mail', 'email'); ?>
											<div class="controls">
												<?php echo form_input('email', $this->input->post('email')); ?>
											</div>
										</div>

										<div class="control-group">
											<?php echo form_label('Password', 'password'); ?>
											<div class="controls">
												<?php echo form_password('password'); ?>
											</div>
										</div>

										<div>
											<span class="btn btn-caps btn-middle">
												<?php echo form_submit(array('value'=>'Register', 'name'=>'submit', 'class' => 'gradient')); ?>
											</span>
										</div>

										<?php echo form_close(); ?>
								</div>
								<div class="col-sm-2">
								</div>
							</div>

							<!-- /new game -->

							<hr>

							<div class="space"></div>
							<div class="row" id="footer">


								<div class="col-sm-12" id="credit">
									<div class="page-header text-muted">
									Credit
									</div>
								</div>

								<!--/stories-->


								<div class="col-sm-6">
									<ul id="credit">
										<li>
											<a href="http://www.bootply.com">
												Template Basis Made with <i class="glyphicon glyphicon-heart-empty"></i> by Bootply
											</a>
										</li>
										<li>
											<a href="https://www.flickr.com/photos/arturstaszewski/" target="_blank">
												Photo by Artur Staszewski
											</a>
										</li>
										<li>
											<a href=" http://hibana.rgr.jp/" target="_blank">
												Free Graphics by hibana
											</a>
										</li>
										<li>
											<a href="#">©Copyright corezy.</a>
										</li>
									</ul>
								</div>
							</div>

						<hr>

						<h3 class="text-center">
						<a href="http://corezy.info/" target="ext">Made by corezy</a>
						</h3>

						<hr>

					</div><!-- /col-9 -->
				</div><!-- /padding -->
			</div>
			<!-- /main -->


		</div>

	</div>
