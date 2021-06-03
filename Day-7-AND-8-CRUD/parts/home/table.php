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
      <td><a href="update.php?id=<?php echo $users[$i]->get_id(); ?>"><i class="icon bi bi-pencil"></i></a></td>
      <td><a href="" onclick="askBeforeMoveItToTrash(this, <?php echo $users[$i]->get_id(); ?>)"><i class="icon bi bi-trash"></i></a></td>
    </tr>
    <?php
  }// end of loop
  ?>
  </tbody>
</table>
