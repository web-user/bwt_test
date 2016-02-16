<?php defined('MVCproject') or die('Access denied'); ?>

	<article>
		<div class="post-image">
			<div class="post-heading">
				<h2>Feedback</h2>
				<div class="dost-site">
					<p><span>*</span>&nbsp;-&nbsp;&nbsp; Required fields.</p>
				</div>
			</div><!-- .post-heading -->
		</div>
		<div class="row">
			<div class="col-m-d-12">
				<div class="post-image">
					<div class="opisan-dost">
						<form id="myform" method="post">

							<div class="col-md-12 dost-site">
								<div class="col-md-4">
									<span>*</span>&nbsp;Name:
								</div>
								<div class="col-md-6">
									<input type="text" class="form-control" name="namefeedback" id="namefeedback" value="<?php echo $_SESSION['reg']['name']; ?>">
								</div>
							</div>
							<div class="col-md-12 dost-site">
								<div class="col-md-4">
									<span>*</span>&nbsp;Email:
								</div>
								<div class="col-md-6">
									<input type="email" class="form-control" id="emailfeedback" name="emailfeedback" value="<?php echo $_SESSION['reg']['email']; ?>">
								</div>
							</div>
							<div class="col-md-12 dost-site">
								<div class="col-md-4">
									<span>*</span>&nbsp;Text:
								</div>
								<div class="col-md-6">
									<textarea name="text" class="form-control" id="text"></textarea>
								</div>
							</div>
							<div class="col-md-12 dost-site">
								<div class="col-md-4">
								</div>
								<div class="col-md-8">
									<div class="img-boks">
										<img src = "<?php echo TEMPLATE; ?>captcha/captcha.php" />
									</div>
								</div>
								<div class="col-md-4">
									<span>*</span>&nbsp;Verification code:
								</div>
								<div class="col-md-6">
									<input type="text" name="kapcha" id="kapcha" placeholder="Type the characters" class="form-control capcha-new"/>
								</div>
							</div>
							<div class="col-md-12 dost-site">
								<div class="col-md-6">
									<input type="submit" name="feedback" id="feedback" value="Submit" class="serch-btn btn-primary">
								</div>
								<div class="col-md-6">
									
								</div>
							</div>
						</form>
						<div class="reg-sss">
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</article>


