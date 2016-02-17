<?php defined('MVCproject') or die('Access denied'); ?>
<article>
	<div class="post-image">
		<div class="post-heading link-kr">
			<span>Archive Feedback</span>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
		<?php if($_SESSION['auth']['user']): ?>
			<?php if($all_feedback): ?>
				<?php foreach($all_feedback as $item): ?>
					<h2 class="title-news-arc"><?php echo $item['name'] ?></h2>
					<span class="date-news"><?php echo $item['date'] ?></span>
					<p><?php echo $item['anons'] ?></p>
				<?php endforeach; ?>
				<?php if( $pages_count > 1 ): ?>
					<div class="col-md-12 col-xs-12 product-line">
						<div class="col-md-12 col-xs-12">
							<?php pagination($page, $pages_count); ?>
						</div>
					</div>
				<?php endif; ?>
			<?php else: ?>
				<h2>No Feedback!</h2>
			<?php endif; ?>
		<?php else: ?>
			<h2>To view the file you need to create an account!</h2>
		<?php endif; ?>
		</div>
	</div>
</article>