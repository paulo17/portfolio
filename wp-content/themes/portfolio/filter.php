<div class="filter-realisation">
	<?php
		$technologies = get_terms('technologie', array('hide_empty' => 0));
		$annees = get_terms('annee', array('hide_empty' => 0));
		$promotions = get_terms('promotion', array('hide_empty' => 0));
	?>

	<select id="select-techno" name="technologies" class="term-list technologies">
	<option value="#">Technologies</option>
	<?php foreach ($technologies as $key => $technology): ?>
		<option value="<?= get_term_link($technology); ?>"><?= $technology->name; ?></option>
	<?php endforeach ?>
	</select>

	<select id="select-annee" name="annee" class="term-list annee">
		<option value="#">Années</option>
		<?php foreach ($annees as $key => $annee): ?>
			<option value="<?= get_term_link($annee); ?>"><?= $annee->name; ?></option>
		<?php endforeach ?>
	</select>

	<select id="select-promotion" name="promotion" class="term-list promotion">
		<option value="#">Promotions</option>
		<?php foreach ($promotions as $key => $promotion): ?>
			<option value="<?= get_term_link($promotion); ?>"><?= $promotion->name; ?></option>
		<?php endforeach ?>
	</select>
	<div style="clear: both;"></div>
</div>