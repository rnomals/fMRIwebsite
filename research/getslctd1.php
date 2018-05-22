<!DOCTYPE html>
<html>
<head>
    <title>Selection 1</title>
</head>
<link href="../css/bootstrap.min.css" rel="stylesheet">
<link href="../css/style.css" rel="stylesheet">
<body>

<?php
include '../database.php';
$getSlctd11 = $_POST["research1"];


//echo($getSlctd11);
///$qury = ;
// $result = $mysqli->query("SELECT * FROM research WHERE article_id = ".$getSlctd1."");

$name='';

if($getSlctd11 == '1'){
	$name = 'Analysis For Auditory Stimulus - comparison';
}elseif ($getSlctd11 == '2') {
	$name = 'Tonotopic Mapping Of Human Auditory Cortex - comparison';
}elseif ($getSlctd11 == '3') {
	$name = 'Human Left and Right Auditory Cortices - comparison';
}elseif ($getSlctd11 == '4') {
	$name = 'Auditory Spatial Cues In Human Cortex - comparison';
}



$mylink ="../research/brain_models-comparison/$name/index.html";
//echo($mylink); ?>

<div class="container">
    <h2>The First Selection is Research Paper <?php echo $getSlctd11;?></h2>
    <a href='<?php echo $mylink; ?>'>
        <button class="btn btn-default">View 3D Brain</button>
    </a>
</div>



</body>
</html>
