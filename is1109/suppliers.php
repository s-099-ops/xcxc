<?php 

require('connect.php'); 

if (isset($_POST['submitbtn'])) {

  $sql = "insert into supplier(supplierName, Item, address, Email, Telephone, comment) values('" . $_POST['sname'] . "', '" . $_POST['iname'] . "', '" . $_POST['Address'] . "', '" . $_POST['email'] . "', '" . $_POST['tnumber'] . "', '" . $_POST['comment'] . "')";
//   echo $sql;
// die();
  if ($conn->query($sql) == True) {
    echo 'saved';
   // header('Location: login.php');

  } else {
    echo 'not saved';
  }

  die();
}


?>
<!DOCTYPE html>
<html>
<head>

  <title>Add supplier page</title>
 </head>

<body>

        <h2>Add new supplier</h2>
           <form action="suppliers.php" method="post">
            <p>New customer name</p><br>
              <input type="text" placeholder="First name" name="sname"><br>
              <p>Item</p><br>
              <input type="text" placeholder="item type" name="iname"><br>
              <p>Address of new customer</p><br>
              <input type="text" placeholder="address" name="Address"><br>
              <p>Email of new customer</p><br>
              <input type="text" placeholder="email" name="email"><br>
              <p>telephone</p><br>
              <input type="number" placeholder="number" name="tnumber"><br>
              <p>Enter idea about supplier</p><br>
              <input type="text" placeholder="type comment" name="comment"><br><br>

           
              <input type="submit" value="Add supplier" name="submitbtn">
          </form>
    </div>

</body>
</html>