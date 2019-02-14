<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
  
  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
  
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/jq-3.3.1/dt-1.10.18/datatables.min.css"/>
  <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/jq-3.3.1/dt-1.10.18/datatables.min.js"></script>

</head>
<body>
  <div class="row mt-5">
    <div class="container">
      <h3 align="center" class="mb-5">User Details</h3>
      <table class="table table-striped table-bordered" id="user_details">
        <thead>
          <tr>
            <th>#</th>
            <th>Name</th>
            <th>Email</th>
            <th>Action</th>
          </tr>
        </thead>
        <?php
        $i=1;
        foreach($records as $row)
        {
          echo "<tr>";
          echo "<td>".$i."</td>";
          echo "<td>".$row->name."</td>";
          echo "<td>".$row->email."</td>";
          echo "<td><a href = 'edit/".$row->id."'>Edit</a>   
          <a href = 'delete_student/".$row->id."'>Delete</a></td>"; 
          echo "</tr>";
          
          $i++;
        }
        ?>
        
        
        
      </table>
    </div>
  </div>


  <script type="text/javascript">
    $(document).ready(function() {
      $('#user_details').DataTable();
    } );
  </script>