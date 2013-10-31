<?php 
	$cup = $_GET['cup'];

	switch($cup) {
		case 0:
			$cal_fat = 70;
			$fat_g = 8;
			$fat_p = 12;
			$s_fat_g = 5;
			$s_fat_p = 25;
			$chol_g = 60;
			$chol_p = 20;
			$sodium_g = 80;
			$sodium_p = 3;
			$potassium_g = 430;
			$potassium_p = 12;
			$carb_g = 39;
			$carb_p = 13;
			$sugar_g = 30;
			break;

		case 1:
			$cal_fat = 80;
			$fat_g = 9;
			$fat_p = 14;
			$s_fat_g = 6;
			$s_fat_p = 30;
			$chol_g = 30;
			$chol_p = 10;
			$sodium_g = 115;
			$sodium_p = 5;
			$potassium_g = 660;
			$potassium_p = 19;
			$carb_g = 34;
			$carb_p = 11;
			$sugar_g = 22;
			break;

		case 2:
			$cal_fat = 70;
			$fat_g = 8;
			$fat_p = 12;
			$s_fat_g = 5;
			$s_fat_p = 25;
			$chol_g = 30;
			$chol_p = 10;
			$sodium_g = 85;
			$sodium_p = 4;
			$potassium_g = 520;
			$potassium_p = 15;
			$carb_g = 37;
			$carb_p = 12;
			$sugar_g = 28;
			break;

		case 3:
			$cal_fat = 80;
			$fat_g = 9;
			$fat_p = 14;
			$s_fat_g = 5;
			$s_fat_p = 25;
			$chol_g = 30;
			$chol_p = 10;
			$sodium_g = 90;
			$sodium_p = 4;
			$potassium_g = 550;
			$potassium_p = 16;
			$carb_g = 36;
			$carb_p = 12;
			$sugar_g = 22;
			break;
	}
?>

<div id="more-product-info-container" style="overflow: auto;">
	<div id="product-atttributes-container">
		<ul id="product-attributes">
			<li>
				<img src="/wp-content/themes/Thrive/Images/gluten_icon.png" >
				<span>Gluten Free</span>
			</li>
			<li>
				<img src="/wp-content/themes/Thrive/Images/protein_icon.png" >
				<span>9g Protein</span>
			</li>
			<li>
				<img src="/wp-content/themes/Thrive/Images/fiber_icon.png" >
				<span>3g Fiber</span>
			</li>
			<li>
				<img src="/wp-content/themes/Thrive/Images/vitamins_icon.png" >
				<span>24 Vitamins</span>
			</li>
		</ul>
	</div>
	<div id="nutrition-table-container">
		<table id="nutrition-table">
			<thead>
				<tr>
					<th colspan="2" style="border-bottom: solid 4px;">Nutritional Info</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Serving Size</td>
					<td>6 fl oz</td>
				</tr>
				<tr>
					<td>Calories</td>
					<td>250</td>
				</tr>
				<tr style="border-bottom: solid 4px;">
					<td>Calories from fat</td>
					<td><?php echo $cal_fat; ?></td>
				</tr>
				<tr  style="border-bottom: solid 2px;">
					<td></td>
					<td>% daily value</td>
				</tr>
				<tr>
					<td><strong>Total Fat</strong> <?php echo $fat_g; ?>g</td>
					<td><?php echo $fat_p; ?>%</td>
				</tr>
				<tr>
					<td class="indented-row">Saturated fat <?php echo $s_fat_g; ?> mg</td>
					<td><?php echo $s_fat_p; ?>%</td>
				</tr>
				<tr>
					<td class="indented-row">Trans fat 0g</td>
					<td></td>
				</tr>
				<tr>
					<td><strong>Cholesterol</strong> <?php echo $chol_g; ?>mg</td>
					<td><?php echo $chol_p; ?>%</td>
				</tr>
				<tr>
					<td><strong>Sodium</strong> <?php echo $sodium_g; ?>mg</td>
					<td><?php echo $sodium_p; ?>%</td>
				</tr>
				<tr>
					<td><strong>Potassium</strong> <?php echo $potassium_g; ?>mg</td>
					<td><?php echo $potassium_p; ?>%</td>
				</tr>
				<tr>
					<td><strong>Total Carbohydrate</strong> <?php echo $carb_g; ?>g</td>
					<td><?php echo $carb_p; ?>%</td>
				</tr>
				<tr>
					<td class="indented-row">Dietary Fiber 3g</td>
					<td>12%</td>
				</tr>
				<tr>
					<td class="indented-row">Sugars <?php echo $sugar_g; ?>g</td>
					<td></td>
				</tr>
				<tr>
					<td><strong>Protein</strong> 9g</td>
					<td>18%</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>