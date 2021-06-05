<?php if(isset($_GET['performed'])){
  $performed = (int)$_GET['performed'];
  switch ($performed) {
    case 0:
      $message = 'Successfully inserted a record!';
      $icon = 'check2';
      $color = '#2ecc71';
      break;
    case 1:
      $message = 'You added an user to trash!';
      $icon = 'trash';
      $color = '#f1c40f';
      break;
    case 2:
        $message = 'You restored an user from Trash!';
        $icon = 'arrow-repeat';
        $color = '#2ecc71';
        break;
    case 3:
        $message = 'You removed an user from Trash!';
        $icon = 'trash';
        $color = '#e74c3c';
        break;
    case 4:
        $message = 'Successfully updated user record.';
        $icon = 'pencil';
        $color = '#2ecc71';
        break;

    default:
      header('location: error.php');
      break;
  } //end performed swtich
  ?>
  <div class="wrapper" style="--color: <?php echo $color ?>">
    <div class="toast">
      <div class="content">
        <div class="icon"><i class="bi bi-<?php echo $icon ?>"></i></div>
        <div class="details">
          <span><?php echo $message ?></span>
        </div>
      </div>
      <div class="close-icon"><i class="bi bi-x"></i></i></div>
    </div>
  </div>
<?php } //end of main if ?>
