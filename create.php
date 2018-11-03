<?php
require 'header.php';
require 'client.php';
require 'models/footballer.php';    
$client = new Client();
?>

<div class="input-box">
<div class="container">
<div class="row">
    <form class="col s12" id="reg-form" action="?action=create" method="post">
    <div class="row">
        <div class="input-field col s6">
        <input id="id" type="text" class="validate" required name="id">
        <label for="id">ID</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input id="first_name" type="text" class="validate" name="forename" required>
          <label for="first_name">First Name</label>
        </div>
        <div class="input-field col s6">
          <input id="last_name" type="text" class="validate" name="surname" required>
          <label for="last_name">Last Name</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
        <input id="club" type="text" class="validate" required name="club">
        <label for="club">Club</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
        <input id="position" type="text" class="validate" name="position" required>
        <label for="position">Position</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input id="height" step="any" type="number" class="validate" required name="height">
          <label for="height">Height</label>
        </div>
        <div class="input-field col s6">
          <input id="number" type="number" class="validate" required name="number">
          <label for="number">Number</label>
        </div>
      </div>
        <div class="input-field col s6">
          <button class="btn btn-large btn-register waves-effect waves-light" type="submit" name="action" value="create">Submit
          </button>
        </div>
      </div>
    </form>
  </div>
</div>
</div>
<?php if(isset($_REQUEST['action'])){
  if($_REQUEST['action']=='create'){
    $player = new Footballer($_REQUEST['id'],$_REQUEST['forename'],$_REQUEST['surname'],$_REQUEST['position'],$_REQUEST['club'],$_REQUEST['number'],$_REQUEST['height']);
    $client->create($player);
    echo'<meta http-equiv="refresh" content="0;URL=./list.php">';
  }
} ?>