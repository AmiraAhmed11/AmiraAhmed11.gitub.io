<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  
  try {
 $conn = null;

 $conn = mysqli_connect("localhost", "root", "", "moslem");

 $sql = "SELECT * FROM cont WHERE 1";
    $users = mysqli_query($conn, $sql);
 //var_dump($users->fetch_assoc());
  ?>
<!DOCTYPE html>   
<html>
<head>
 <title>Emails</title>
 <style>
  body {
    font-family: Arial, sans-serif;
    /*background-color:#f2ebc0;*/
  }
  
  .table-container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
  }

  table {
    border-collapse: collapse;
    width: 90%;
    max-width: 1000px;
    margin: auto;
  }

  th, td {
    padding: 15px;
    text-align: center;
    border: 1px solid #DDD;
  }

  th {
    background-color: #e4d364;
    color: #FFF;
  }

  tr:nth-child(even) {
    background-color: #FAFAFA;
  }

  .ss {
    text-align: center;
    margin-bottom: 20px; /* Adjust margin-bottom as needed */
  }
</style>

</head>
<body>
 <div class="parent-container">
  <div class="container">
  <div class="table">
   <div class="ss">
     <h2>Emails</h2>
   </div>
   
   <table>
    <thead>
     <tr>
      <th>Name</th>
      <th>Email</th>
      <th>Subject</th>
      <th>Message</th>
     </tr>
    </thead>
    <tbody>
      <?php foreach($users as $user){?>
     <tr>
      <td><?php echo @$user['name']?></td>
      <td><?php echo @$user['email']?></td>
      <td><?php echo @$user['subject']?></td>
      <td><?php echo @$user['message']?></td>
     </tr>
     <?php } ?>
    </tbody>
   </table>
   </div>
  </div>
 </div>
 
</body>
</html>
<?php
} catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}
?>