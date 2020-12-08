<blockquote class="c-cardTestemonial">
	<div class="c-cardTestemonial__head">
		<figure class="c-userThumb --small">
			<img src="media/img/content/users/<?php echo $picture; ?>" alt="<?php echo $name; ?>">
		</figure>
		<div>
			<cite class="author"><?php echo $name; ?></cite>
			<span class="company">Conquistou a vaga de <a href="#"><?php echo $job; ?></a></span>
		</div>
	</div>
	<div class="c-cardTestemonial__quote">
		<p>"<?php echo $quote; ?>"</p>
	</div>
	<div class="c-cardTestemonial__stars">
		<div class="c-reviewStars --stars<?php echo $stars; ?>">
			<?php include('media/img/icons/icon_star.svg'); ?>
			<?php include('media/img/icons/icon_star.svg'); ?>
			<?php include('media/img/icons/icon_star.svg'); ?>
			<?php include('media/img/icons/icon_star.svg'); ?>
			<?php include('media/img/icons/icon_star.svg'); ?>
		</div>
	</div>
</blockquote>