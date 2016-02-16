<?php defined('MVCproject') or die('Access denied'); ?>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="exampleModalLabel">Authorization</h4>
			</div>
			<div class="authform">
				<form action="#" id="my-form" method="post">
					<div class="modal-body">
						<div class="form-group">
							<label for="loginauth" class="control-label">Login:</label>
							<input type="text" class="form-control" name="loginauth" id="loginauth" placeholder="login">
						</div>
						<div class="form-group">
							<label for="passauth" class="control-label">Password:</label>
							<input type="password" class="form-control" name="passauth" id="passauth" placeholder="Password">
						</div>
					</div>
					<div class="modal-footer">
					  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					  <input type="submit" name="auth" id="auth" value="Войти" class="btn btn-primary">
					</div>
				</form>

			</div><!-- .authform -->
		</div>
	</div>
</div>



<div class="col-md-12">
	<aside class="right-sidebar">
	<div class="widget">
		<div class="avtoriz useravtor">
			<?php if(!$_SESSION['auth']['user']): ?>
				<a type="button" data-toggle="modal" data-target="#exampleModal" data-whatever="@fat">log in</a>
				<hr class="hr-reg">
				<p>
					<a href="?view=reg">Registration</a>
				</p>
			<?php else: ?>
				<p><span>Welcome,</span> <?php echo htmlspecialchars($_SESSION['auth']['user']); ?></p>
				<a href="?do=logout">Exit</a>
			<?php endif; ?>
		</div><!-- .avtoriz-->
	</div><!-- Authorization -->

	</aside>
</div>