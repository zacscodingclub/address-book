<?php include('core/init.php'); ?>

<?php 
  $db = new Database;

  $db->query("DELETE FROM `contacts` WHERE id = :id ");

  $db->bind(':id', $_POST['id']);

  if($db->execute()) {
    echo "Contact was deleted.";
  } else {
    echo "Could not delete contact.";
  }


