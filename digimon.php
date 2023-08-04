<?php
if(isset($_GET['digimon']) && !empty($_GET['digimon'])) {
$digimon = $_GET['digimon'];
$url = "https://digimon-api.vercel.app/api/digimon/name/{$digimon}/";
$retorno = file_get_contents($url);
$retorno = json_decode($retorno);

foreach($retorno as $digimon){
 echo " <div class='card mb-3' style='max-width: 540px;'>
<div class='row g-0'>
<div class='col-md-4'>
<img src='$digimon->img' class='img-fluid rounded-start' alt='...'>
</div>
<div class='col-md-8'>
 <div class='card-body'>
<h5 class='card-title'> $digimon->name  </h5>
<p class='card-text'>$digimon->level</p>
 </div>
</div>
 </div>
</div>";
 }

}else {

   

}

?>