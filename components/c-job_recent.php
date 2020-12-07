<a href="<?php echo $linkJob; ?>" class="c-cardRecentJob" <?php echo $modifierClass; ?>>
	<div class="c-cardRecentJob__head">
		<div class="c-cardRecentJob__places">
			<i>icon</i>
			<p>
				<?php
					foreach ($cities as list($a, $b)) {
						echo $a . '<span class="qtf"> (' .$b. ')</span><span class="end">, </span>';
					}
				?>
			</p>
		</div>
		<div class="c-cardRecentJob__budget"><?php echo $budget; ?></div>
	</div>
	<h2 class="c-cardRecentJob__title"><?php echo $title; ?></h2>
	<div class="c-cardRecentJob__benefits">
		<ul class="c-listBenefits">
			<?php foreach($benefits as $name) {echo "<li>" . $name . "</li>";} ?>
		</ul>
	</div>
	<div class="c-cardRecentJob__more">
		zoom
	</div>
</a>