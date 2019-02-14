<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
</head>
<body>
  <div class="row mt-5">
    <div class="container">
      <h3 align="center" class="mb-5">Edit</h3>
      <?php
      $i=1;
      foreach($records as $row)
      {
        ?>  
        <form method="post" action="/CodeIgniter/index.php/user/update_student">
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="name">Name</label>
              <input type="text" class="form-control" name="name" placeholder="Name" value="<?php echo $row->name; ?>" required>
              <input type="text" name="id" value="<?php echo $row->id; ?>">
            </div>
            <div class="form-group col-md-6">
              <label for="phone_no">Phone Number</label>
              <input type="text" class="form-control" name="phone_no" placeholder="Phone Number" value="<?php echo $row->phone_no; ?>" required>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="email">Email</label>
              <input type="email" class="form-control" name="email" placeholder="Email"
              value="<?php echo $row->email; ?>"  required>
            </div>
            <div class="form-group col-md-6">
              <label for="password">Password</label>
              <input type="password" class="form-control" name="password" placeholder="Password" value="<?php echo $row->password; ?>" required>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="qualification">Qualification</label>
              <select name="qualification" class="form-control">
               <option value="">Choose Your Qualification</option>
               <option value="UG">UG</option>
               <option value="PG">PG</option>
               <option value="DIPLOMA">DIPLOMA</option>
               <option value="HSC">HSC</option>
               <option value="SSLC">SSLC</option>
             </select>
           </div>
           <div class="form-group col-md-6">
            <label for="dob">Date of Birth</label>
            <input type="date" class="form-control"  name="dob">
          </div>
        </div>
        <div class="form-group">
          <label for="address">Address</label>
          <input type="text" value="<?php echo $row->address; ?>" class="form-control" name="address" placeholder="Address">
        </div>
        <center class="m-4">
          <input type="submit" name="save" value="Save" class="btn btn-success" />
        </center>
        
      </form>
    </div>
  <?php } ?>
</div>

</body>
</html>