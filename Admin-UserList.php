<?php
	session_start();
	require 'includes/admin/adminUser.inc.php';
	 if( isset( $_SESSION['counter'] ) ) {
		$_SESSION['counter'] += 1;
	}else {
		// $_SESSION['counter'] = 1;
		// //Clear the saved input
		// $_SESSION['dateInput'] = "";
		// $_SESSION['timeInput'] = "";
		// $_SESSION['nameInput'] = "";
		// $_SESSION['emailInput'] = "";
		// $_SESSION['cityInput'] = "";
		// $_SESSION['phoneInput'] = "";
		// $_SESSION['remarksInput'] = "";
		
		//  //Clear the error message
		// $_SESSION['dateErr'] = "";
		// $_SESSION['timeErr'] = "";
		// $_SESSION['nameErr'] = "";
		// $_SESSION['phoneErr'] = "";
		// $_SESSION['emailErr'] = "";
		// $_SESSION['cityErr'] = "";
		// $_SESSION['adultErr'] = "";
		
		// //Clear the error formattting
		// $_SESSION['dateClass'] = ""; 
		// $_SESSION['timeClass'] = "";
		// $_SESSION['nameClass'] = "";
		// $_SESSION['emailClass'] = "";
		// $_SESSION['phoneClass'] = "";
		// $_SESSION['adultClass'] = "";
	}
	$stmt = readUserList();
	$userList = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <!-- Font Awesome -->
  <link href="fontawesome/css/all.css" rel="stylesheet">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Acme&display=swap" rel="stylesheet">

  <!-- Wong Zi Jiang -->
  <link rel="stylesheet" href="css/admin.css" />
  <title>User List</title>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
    crossorigin="anonymous"></script>
</head>

<body>
  <nav class="navbar navbar-light bg-light justify-content-between">
    <a class="navbar-brand font-weight-bold">
      <i class="fa fa-cogs mr-2"></i>Sushi Sama Panel</a>
    <a href="AdminLogin.html" class="justify-content-end"><i class="fa fa-lg fa-sign-out-alt"></i></a>
  </nav>

  <div class="container">
    <div class="row px-3 mt-3 rounded-lg">
      <nav aria-label="breadcrumb" class="w-100">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="AdminHome.html"><i class="fas fa-home"></i></a></li>
          <li class="breadcrumb-item active" aria-current="page">User List</li>
        </ol>
      </nav>
    </div>
    <div class="row p-2 bg-white shadow-lg rounded-lg title px-3 m-0 text-left">
      User List
    </div>
    <div class="row d-flex justify-content-center rounded text-center bg-white mt-1 m-0">
      <table class="table table-hover table-bordered m-2 d-none d-lg-table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">
              <div class="p-2">ID</div>
            </th>
            <th scope="col" class="th-center">
              <div class="py-2">Username</div>
            </th>
            <th scope="col" class="th-center">
              <div class="py-2">Password </div>
            </th>
            <th scope="col" class="th-center">
              <div class="py-2">Name</div>
            </th>
            <th scope="col" class="th-center">
              <div class="py-2">Birthday</div>
            </th>
            <th scope="col" class="th-center">
              <div class="py-2">Email</div>
            </th>
            <th scope="col" class="th-center">
              <div class="py-2">Contact</div>
            </th>
            <th scope="col" class="th-center">
              <div class="py-2">Action</div>
            </th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th class="align-middle">
              1
            </th>
            <td class="align-middle">lucas123</td>
            <td class="align-middle">Lucas123</td>
            <td class="align-middle">Lucas Wong</td>
            <td class="align-middle">1999-02-21</td>
            <td class="align-middle">lucas@gmail.com</td>
            <td class="align-middle">0123456789</td>
            <td class="align-middle">
              <button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
              <button class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></button>
            </td>
          </tr>
          <tr>
            <th class="align-middle">
              2
            </th>
            <td class="align-middle">lucas1234</td>
            <td class="align-middle">Lucas1234</td>
            <td class="align-middle">Lucas Wang</td>
            <td class="align-middle">1999-02-21</td>
            <td class="align-middle">lucas@gmail.com</td>
            <td class="align-middle">0123456789</td>
            <td class="align-middle">
              <button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
              <button class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></button>
            </td>
          </tr>
          <tr>
            <th class="align-middle">
              3
            </th>
            <td class="align-middle">lucas12345</td>
            <td class="align-middle">Lucas12345</td>
            <td class="align-middle">Lucas Wong</td>
            <td class="align-middle">1999-02-21</td>
            <td class="align-middle">lucas@gmail.com</td>
            <td class="align-middle">0123456789</td>
            <td class="align-middle">
              <button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
              <button class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="row justify-content-center rounded text-center bg-white mb-5 m-0 d-lg-none">
      <table class="table table-borderless table-striped border m-2 text-left">
        <colgroup>
          <col class="p-0 px-2 w-25">
          <col class="p-0 px-2 w-25">
        </colgroup>
        <tr>
          <th scope="col">ID</th>
          <td>1</td>
        </tr>
        <tr>
          <th scope="col">Username</th>
          <td>lucas123</td>
        </tr>
        <tr>
          <th scope="col">Password</th>
          <td>Lucas123</td>
        </tr>
        <tr>
          <th scope="col">Name</th>
          <td>Lucas Wong</td>
        </tr>
        <tr>
          <th scope="col">Birthday</th>
          <td>1999-02-21</td>
        </tr>
        <tr>
          <th scope="col">Email</th>
          <td>lucas@gmail.com</td>
        </tr>
        <tr>
          <th scope="col">Contact</th>
          <td>0123456789</td>
        </tr>
        <tr>
          <th scope="col">Action</th>
          <td>
            <button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
            <button class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></button>
          </td>
        </tr>
      </table>
      <table class="table table-borderless table-striped border m-2 text-left">
        <colgroup>
          <col class="p-0 px-2 w-25">
          <col class="p-0 px-2 w-25">
        </colgroup>
        <tr>
          <th scope="col">ID</th>
          <td>2</td>
        </tr>
        <tr>
          <th scope="col">Username</th>
          <td>lucas1234</td>
        </tr>
        <tr>
          <th scope="col">Password4</th>
          <td>Lucas123</td>
        </tr>
        <tr>
          <th scope="col">Name</th>
          <td>Lucas Wang</td>
        </tr>
        <tr>
          <th scope="col">Birthday</th>
          <td>1999-02-21</td>
        </tr>
        <tr>
          <th scope="col">Email</th>
          <td>lucas@gmail.com</td>
        </tr>
        <tr>
          <th scope="col">Contact</th>
          <td>0123456789</td>
        </tr>
        <tr>
          <th scope="col">Action</th>
          <td>
            <button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
            <button class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></button>
          </td>
        </tr>
      </table>
      <table class="table table-borderless table-striped border m-2 text-left">
        <colgroup>
          <col class="p-0 px-2 w-25">
          <col class="p-0 px-2 w-25">
        </colgroup>
        <tr>
          <th scope="col">ID</th>
          <td>3</td>
        </tr>
        <tr>
          <th scope="col">Username</th>
          <td>lucas12345</td>
        </tr>
        <tr>
          <th scope="col">Password</th>
          <td>Lucas12345</td>
        </tr>
        <tr>
          <th scope="col">Name</th>
          <td>Lucas Wong</td>
        </tr>
        <tr>
          <th scope="col">Birthday</th>
          <td>1999-02-21</td>
        </tr>
        <tr>
          <th scope="col">Email</th>
          <td>lucas@gmail.com</td>
        </tr>
        <tr>
          <th scope="col">Contact</th>
          <td>0123456789</td>
        </tr>
        <tr>
          <th scope="col">Action</th>
          <td>
            <button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
            <button class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></button>
          </td>
        </tr>
      </table>
    </div>
  </div>
</body>

</html>