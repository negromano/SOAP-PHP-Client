<?php
require 'header.php';
require 'client.php';
require 'models/footballer.php';    
$client = new Client();
?>

<div class="input-box">
<div class="container">
<div class="row">
    <form class="col s12" id="reg-form" action="update.php" method="get">
        <h3>Look for a Player</h3>
    <div class="row">
        <div class="input-field col s12">
        <input type="hidden" name="delete-enabled" value="true" />
        <input id="id" type="text" class="validate" required name="id">
        <label for="id">ID</label>
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