<?php $this->need('header.php'); ?>
<section class="post">
	<header class="post_head">
		<p class="date"><?php $this->date('Y-m-d'); ?></p>
		<h2><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
	</header>
	<article class="post_artice">
		<?php $this->content(); ?>
	</article>
</section>
<?php $this->need('comments.php'); ?>
<?php $this->need('footer.php'); ?>
