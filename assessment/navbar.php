<?php
require_once("controller.php/controller.php");
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src='main.js'></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

</head>
<body>
 <script>   
$(document).ready(function () {
    $('#example').DataTable();
})
</script>    


<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<br><br>




<!-- data table start from here -->
<button type="button" class="btn btn-primary "  data-bs-toggle="modal" data-bs-target="#addst" style="float:right">
                Add student
              </button> <br> <br> 
              <form method="POST">
              <div class="modal fade " role="dialog" id="addst">
    <div class="modal-dialog">
        <div class="modal-content p-5">
        <div class="col-md-6">
                                        <label for="validationDefault01" class="form-label">First name</label>
                                        <input type="text" class="form-control" id="validationDefault01" name="fnm" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="validationDefault02" class="form-label">Last name</label>
                                        <input type="text" class="form-control" id="validationDefault02" name="lnm"required>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="validationDefaultUsername" class="form-label">Email ID</label>
                                        <div class="input-group">
                                            <input type="email" name="email"class="form-control" id="validationDefaultUsername" aria-describedby="inputGroupPrepend2" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="validationDefault03" class="form-label">Phone</label>
                                        <input type="number" name="phone" class="form-control" id="validationDefault03" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="validationDefault04" class="form-label">Course</label>
                                        <select class="form-select" id="validationDefault04" name="cnm" required>
                                            <option selected disabled value="">Choose...</option>
                                            <?php
                                            foreach($jax as $shw1)
                                            {
                                                ?>
                                                 <option value="<?php echo $shw1["course_id"];?>"><?php echo $shw1["course_name"];?></option>
                                                <?php
                                            }
                                            ?>
                                            
                            </select>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary" name="btn" type="submit">Submit</button>
                                    </div>

        </div>

    </div>

</div>
</form>


<!-- tabel -->
<table id="example" class="display" style="width:100%" >
        <thead>
            <tr>
                <th>First name</th>
                <th>Last name</th>
                <th>Email</th>
                <th>Phone number</th>
                <th>Course</th>
                <th>Edit</th>
            </tr>
        </thead>
        <tbody>
          <?php
foreach($shw as $row)
          ?>
            <tr>
                <td><?php echo $row["first_name"];?></td>
                <td><?php echo $row["last_name"];?></td>
                <td><?php echo $row["email"];?></td>
                <td><?php echo $row["phone_number"];?></td>
                <td><?php echo $row["course_id"];?></td>
                <td><a href=""><button type="button" class="btn btn-danger"><i class="bi bi-trash3"></i></button></a> | <a href=""><button type="button" class="btn btn-primary"><i class="bi bi-pencil-square"></i></button></a></td>
            </tr>
        </tbody>
</table>            

</body>
</html>