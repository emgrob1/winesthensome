
<div id="information" class="spacer reserve-info ">
<div class="container">
<div class="row">
<div class="col-sm-12 col-md-12">
<p>Enter the grape and which food pairs well with the grape</p>
<?php 
$grapes = $this->list;

?>
<form id="insertPairings" action="<?php echo URL;?>pairings/insertPairings/" method="post">
	<table class="table table-striped">
	<tr>
		<td>
	<label>Grape: </label>
		</td>
		<td>
		<select id="grapes" name="grapes">
		<?php  
		foreach($grapes as $list){
		?>
		<option id="selectedGrapes" name="selectGrapes" value="<?php echo $list["id"]; ?>" ><?php echo $list["name"]; ?> </option>
		<?php
		}
		?>
	</select>

	</td>
	</tr>
		<tr>
			<td>
	<label>Pairs with: </label>
	</td>
	<td>
	<input type="text" name="pairs_with" /><br /></td>
		</tr>
		<tr>
			<td>
	<input type="submit" value="Save" />
	</td>
	</tr>
	</table>
</form>

<br />

<div id="listPairings"></div>
</div>
</div>
</div>
</div>
