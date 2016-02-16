<?php defined('MVCproject') or die('Access denied'); ?>

	<article>
		<div class="post-image">
			<div class="post-heading">
				<h2>Registration</h2>
				<div class="dost-site">
					<p><span>*</span>&nbsp;-&nbsp;&nbsp; Required fields.</p>
				</div>
			</div><!-- .post-heading -->
		</div>
		<div class="row">
			<div class="col-m-d-12">
				<div class="post-image">
					<div class="opisan-dost">
						<form id="registration" method="post">
							<div class="col-md-12 dost-site">
								<div class="col-md-4">
									<span>*</span>&nbsp;Login:
								</div>
								<div class="col-md-6">
									<input type="text" class="form-control" id="login" name="login" value="<?php echo $_SESSION['reg']['login']; ?>">
								</div>
							</div>
							<div class="col-md-12 dost-site">
								<div class="col-md-4">
									<span>*</span>&nbsp;Password:
								</div>
								<div class="col-md-6">
									<input type="password" class="form-control" name="pass" id="pass">
								</div>
							</div>
							<div class="col-md-12 dost-site">
								<div class="col-md-4">
									<span>*</span>&nbsp;Name:
								</div>
								<div class="col-md-6">
									<input type="text" class="form-control" name="name" id="name" value="<?php echo $_SESSION['reg']['name']; ?>">
								</div>
							</div>
							<div class="col-md-12 dost-site">
								<div class="col-md-4">
									<span>*</span>&nbsp;Surname:
								</div>
								<div class="col-md-6">
									<input type="text" class="form-control" name="surname" id="surname" value="<?php echo $_SESSION['reg']['surname']; ?>">
								</div>
							</div>
							<div class="col-md-12 dost-site">
								<label>
								    <input type="radio" name="gender" class="gender" value="female">
								    female
								</label>
								<label>
								<input type="radio" name="gender" class="gender" value="male" checked>
								    male
								</label>
							</div>
							<div class="col-md-12 dost-site">
								<div class="col-md-4">
									<span>*</span>&nbsp;Email:
								</div>
								<div class="col-md-6">
									<input type="email" class="form-control" id="email" name="email" value="<?php echo $_SESSION['reg']['email']; ?>">
								</div>
							</div>
							<div class="col-md-12 dost-site">
								<div class="col-md-4">
									<span>*</span>&nbsp;Date of Birth:
								</div>
								<div class="col-md-6">
									<input type="datetime" class="form-control" name="datetime" id="datetime" value="<?php echo $_SESSION['reg']['datetime']; ?>">
									<label>example 1999-01-30</label>
								</div>
							</div>
							<div class="col-md-12 dost-site">
								<div class="col-md-6">
									<input type="submit" name="reg" id="reg" value="Отправить" class="serch-btn btn-primary">
								</div>
								<div class="col-md-6">
									
								</div>
							</div>
						</form>
						<div class="reg-sss">
							
						</div>
						<?php if( isset($_SESSION['reg']['res']) ){
							echo $_SESSION['reg']['res'];
							unset($_SESSION['reg']);
						} ?>
					</div>
				</div>
			</div>
		</div>
	</article>


