<!doctype html>
<html lang="en">
<?php
$first_name = $_GET['first_name'];
$username = $_GET['username'];

?>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link href="style.css" rel="stylesheet">
  <title>Bootstrap demo</title>
  <script src="app.js"></script>

</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <h1>Title</h1>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iure, expedita aliquam? Dolor impedit saepe debitis. Officiis, nihil asperiores maxime tenetur soluta exercitationem odio consectetur, nobis laboriosam quae aut, omnis consequatur.</p>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <table class="table">
          <!-- <thead>
            <tr>
              <th>First Name</th>
              <th>Username</th>
              <th>Province</th>
            </tr>
          </thead> -->
          <tbody id="userDataTable">
          </tbody>
        </table>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-6 col-md-4">
        <form action="save.php" method="post" onchange="saveForm()">
          <div class="form-group">
            <label for="">First Name</label>
            <input type="text" name="first_name" class="form-control" placeholder="" value="<?php echo $first_name ?>">
            <small id="helpId" class="text-muted">Escriba su primer nombre</small>
          </div>
          <div class="form-group">
            <label for="">Username</label>
            <input type="text" name="username" class="form-control" placeholder="" value="<?php echo $username ?>">
          </div>
          <div class="form-group">
            <label for="">Password</label>
            <input type="password" name="password" class="form-control" placeholder="">
          </div>
          <div class="form-group">
            <label for="">Birthdate</label>
            <input type="date" name="birth_date" class="form-control" placeholder="">
          </div>
          <div class="form-group">
            <label for="">Province</label>
            <select class="form-control" name="province" id="">
              <option>Alajuela</option>
              <option>Puntarenas</option>
              <option>San jose</option>
            </select>
          </div>

          <div class="form-check">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input" name="acceptTerms" id="" value="checkedValue" checked>
              Accept Terms and Conditions
            </label>
          </div>

          <div class="form-check">
            <label class="form-check-label">
              <input type="radio" class="form-check-input" name="gender" id="" value="female" checked>
              Female
            </label>
          </div>
          <div class="form-check">
            <label class="form-check-label">
              <input type="radio" class="form-check-input" name="gender" id="" value="male">
              Male
            </label>
          </div>
          <button class="btn">Hello</button>
          <input type="submit" value="Save" class="btn btn-primary">
        </form>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
  <script>
    //restoreFormData();
    showUserDataTable();
  </script>

</body>

</html>