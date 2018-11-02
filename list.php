<?php

require 'client.php';
require 'header.php';

$client = new Client();
$list = $client->listM()['return'];
echo '<div class = "container">';
$a = 0;
$b = 0;
foreach($list as $player){
    echo '<div class="card">
    <div class="card-content">
    <i class="large material-icons"> person</i>
    '.$player['forename'].' '.$player['surname'].'
    </div>
    <div class="card-tabs">
      <ul class="tabs tabs-fixed-width">
        <li class="tab"><a href="#per'.++$a.'">Professional</a></li>
        <li class="tab"><a class="active" href="#pro'.++$b.'">Physical</a></li>
      </ul>
    </div>
    <div class="card-content grey lighten-4">
      <div id="per'.$a.'">Club: '.$player['club'].'<br>
      Position: '.$player['position'].'
      </div>
      <div id="pro'.$b.'">Height: '.$player['height'].'<br>
      Number: '.$player['number'].'</div>
    </div>
  </div>';
}
echo '</div>';

?>