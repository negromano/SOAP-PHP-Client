<?php
require 'header.php';
require 'client.php';
require 'models/footballer.php';    
$client = new Client();
$f = $client->read($_GET['id']);
?>

<div class="input-box">
<div class="container">
<div class="row">
    <form class="col s12" id="reg-form" action="?action=update" method="get">
      <div class="row">
        <div class="input-field col s6">
          <input id="first_name" type="text" class="validate" name="forename" required placeholder="<?php echo $f['return']['forename'];?>">
          <label for="first_name">First Name</label>
        </div>
        <div class="input-field col s6">
          <input id="last_name" type="text" class="validate" name="surname" required placeholder="<?php echo $f['return']['surname'];?>">
          <label for="last_name">Last Name</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
        <input id="club" type="text" class="validate" required name="club" placeholder="<?php echo $f['return']['club'];?>">
        <label for="club">Club</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
        <input id="position" type="text" class="validate" name="position" required placeholder="<?php echo $f['return']['position'];?>">
        <label for="position">Position</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input id="height" step="any" type="number" class="validate" required name="height" placeholder="<?php echo $f['return']['height'];?>">
          <label for="height">Height</label>
        </div>
        <div class="input-field col s6">
          <input id="number" type="number" class="validate" required name="number" placeholder="<?php echo $f['return']['number'];?>">
          <label for="number">Number</label>
        </div>
      </div>
      <input type="hidden" name="id" value="<?php echo $_GET['id'];?>" />
        <div class="input-field col s6">
          <button class="btn btn-large btn-register waves-effect waves-light" type="submit" name="action" value="update">Submit
          </button>
        </div>
      </div>
    </form>
    <?php if(array_key_exists('delete-enabled',$_GET))
        echo '
        <div class="row">
        <div class="input-field col s12">
        <form action="?action=delete" method="post">
        <div class="input-field col s6">
        <input type="hidden" name="id" value="'.$_GET['id'].'" />
        <input class="btn" type="submit" value="delete"/>
        </button>
        </div>
        </form>
        </div>
        </div>';
      ?>
  </div>
</div>
</div>
<?php if(isset($_REQUEST['action'])){
  if($_REQUEST['action']=='update'){
    $player = new Footballer($_REQUEST['id'],$_REQUEST['forename'],$_REQUEST['surname'],$_REQUEST['position'],$_REQUEST['club'],$_REQUEST['number'],$_REQUEST['height']);
    $client->update($player);
    echo'<meta http-equiv="refresh" content="0;URL=./list.php">';
  }elseif($_REQUEST['action']=='delete'){
    $client->delete($_REQUEST['id']);
    echo'<meta http-equiv="refresh" content="0;URL=./list.php">';
  }
} ?>