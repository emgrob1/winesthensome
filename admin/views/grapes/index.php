

<div id="information" class="spacer reserve-info ">
<div class="container">
<div class="row">
<div class="col-sm-12 col-md-12">


<p>Enter the Name of Grape and select color
<a href="<?php echo URL;?>display"><button>Display</button></a>
</p>
<br />

<hr>
<form id="insertGrapes" action="<?php echo URL;?>grapes/insertGrapes/" method="post" enctype="multipart/form-data">
	<table class="table table-striped">
	<tr>
		<td>
	<label>Name: </label>
		</td>
		<td>
	<input type="text" name="name" /><br />
	</td>
	</tr>
		<tr>
			<td>
	<label>Color: </label>
	</td>
	<td>
		<select name="color">
			<option value="red">Red</option>
			<option value="white">White</option>
		</select>
	
	</td>
		</tr>
	<tr>
			<td>
		   <label>File: </label>
		   	</td>
		   	<td>
		   		
			
    <img id="upload" src="http://placehold.it/100x100" alt="preview image"  width="75" height="75"/>
    <br/>
    <br/>
     <input type="file" id="inputFile" name="inputFile" />
		   	</td>
		   		</tr>
		<tr>
			<td>
	<input type="submit" value="Save" />
	</td>
	</tr>
	</table>
</form>



</div>
</div>
</div>
</div>
