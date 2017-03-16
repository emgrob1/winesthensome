
<div id="information" class="spacer reserve-info ">
<div class="container">
<div class="row">
<div class="col-sm-12 col-md-12">

<p>Listing of Wines</p>

<div class="table" style="border:solid 2px black;padding:20px;">
	<div class="row"><div class="col-xs-6 col-sm-3">Grapes</div><div class="col-xs-6 col-sm-3">Color</div><div class="col-xs-6 col-sm-3">Images</div></div>
<hr>
<?php
//var_dump($this->list);
foreach(($this->list) as $grapes){
echo '<div class="row"><div class="col-xs-6 col-sm-3">' . ucwords($grapes["name"]) . '</div><div class="col-xs-6 col-sm-3">' . ucwords($grapes["color"]) .'</div><div class="col-xs-6 col-sm-3"><img src="' . IMG . $grapes["image"] . '" style="width:75px;height:75px;" ></div></div><hr>';
}
?>

</div>

</div>
</div>
</div>
</div>

