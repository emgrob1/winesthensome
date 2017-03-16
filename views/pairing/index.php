
<div id="information" class="spacer reserve-info ">
<div class="container">
<div class="row">
<div class="col-sm-12 col-md-12">

<label>Pairing</label>
<?php 
$grapes = $this->list;

?>
<form id="randomInsert" action="<?php echo URL;?>pairing/pairingList/" method="post">
	<table class="table">
	<tr>
		<td>
	<label>Grapes</label>
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
		<label>Pairs with</label>
		</td>
		<td>
	<input type="text" id="pairs_with" name="pairs_with" />
	</td>
	</tr>
	
	</table>
	
</form>

<br />

<div id="listInserts">
	
</div>
</div>
</div>
</div>
</div>
