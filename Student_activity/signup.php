<?php
   require 'connect.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student Activity - Signup</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
      html,
      body {
        height: 100%;
      }

      .form-signup {
        max-width: 400px;
        padding: 1rem;
      }

      .form-signup .form-floating:focus-within {
        z-index: 2;
      }
    </style>
  </head>
  <body class="d-flex align-items-center py-4 bg-body-tertiary">
    <main class="form-signup w-100 m-auto">
      <form>
        <img class="mb-4" src="images/images.png" alt="" width="330"> 
        <h1 class="h3 mb-3 fw-normal">Please sign up</h1>
    
        <div class="form-floating mb-2">
          <input type="text" class="form-control" id="Student -id" placeholder=" ">
          <label for="Student -id">Student ID</label>
        </div>
        <div class="form-floating mb-2">
          <input type="text" class="form-control" id="Student -name" placeholder=" ">
          <label for="Student name">Student Name</label>
        </div>
        <div class="form-floating mb-2">
          <select class="form-select" id="Major">
<?php
$sql = 'select * from major order by faculty';
$result = $conn->query($sql);
while ($row = $result->fetch_assoc()) {
    echo "<option value='{$row['majorID']}'>
        {$row['faculty']}-{$row['majorName']}
        </option>";
}
$conn->close();
?>
          </select>
          <label for="Major">major</label>
        </div>
        <div class="form-floating mb-4">
          <input type="password" class="form-control" id="Password" placeholder=" ">
          <label for="Password">Password</label>
        </div>
        <div class="form-floating mb-4">
          <input type="password" class="form-control" id="re-Password" placeholder=" ">
          <label for="re-Password">Retype-Password</label>
        </div>
    
        <button class="btn btn-primary w-100 py-2" type="submit">Sign up</button>
        <p class="mt-5 mb-3 text-body-secondary">© Chaloemphon 2023</p>
      </form>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>