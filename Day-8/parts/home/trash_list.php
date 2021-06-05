<?php if(count($users) == 0){ ?>
  <div class="welcome">
    <span style="text-align:center">
      <h3>No user found here, it's empty</h3>
      <br />
      <a href="new.php" class="button button-primary">Add New User</a>
    </span>
  </div>
<?php } else { ?>
<div class="row">
    <div class="nine columns">
      <h2>Total users in trash: <?php echo count($users) ?></h2>
      <a href="index.php">Go back</a>
    </div>
  </div>
  <table class="u-full-width">
    <thead>
      <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Gender</th>
        <th>Email</th>
        <th>Phone no</th>
        <th>Location</th>
        <th>Role</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
      <?php
        for ($i=0; $i < count($users); $i++) {
          ?>
      <tr>
        <td><?php echo $users[$i]->get_firstname(); ?></td>
        <td><?php echo $users[$i]->get_lastname(); ?></td>
        <td>
          <?php switch ($users[$i]->get_gender()) {
            case 'm':
              echo "Male";
              break;
            case 'f':
              echo "Female";
              break;
            default:
              break;
          } ?>
        </td>
        <td><?php echo $users[$i]->get_email(); ?></td>
        <td><?php echo $users[$i]->get_phone(); ?></td>
        <td><?php echo $users[$i]->get_location(); ?></td>
        <td><?php echo $users[$i]->get_role(); ?></td>
        <td><a href="perform/trashit.php?do=restore&id=<?php echo $users[$i]->get_id(); ?>"><i class="icon bi bi-arrow-repeat"></i></a></td>
        <td><a href="#" onclick="askBeforeDelete(this, <?php echo $users[$i]->get_id(); ?>)"><i class="icon bi bi-trash"></i></a></td>
      </tr>
      <?php
    }// end of loop
    ?>
    </tbody>
  </table>
<?php } ?>
