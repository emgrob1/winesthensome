
<div id="information" class="spacer reserve-info ">
<div class="container">
<div class="row">
<div class="col-sm-12 col-md-12">

<p>Listing of Wines</p>
<ul>
<?php
//var_dump($this->list);
foreach(($this->list) as $grapes){
echo '<li>' . 'Grape: ' . ucwords($grapes["name"]) . ' - Grape Color: ' . $grapes["color"] . '</li>';
}
?>

</ul>

</div>
</div>
</div>
</div>

