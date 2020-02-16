<?php
	session_start();
	include 'includes/adminReservation.inc.php';
?>
<!doctype html>
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
  <title>Reserved List</title>
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
          <li class="breadcrumb-item active" aria-current="page">Table Reservation</li>
        </ol>
      </nav>
    </div>
    <div class="row p-2 bg-white shadow-lg rounded-lg title px-3 mt-md-3 m-0 text-left justify-content-between">
      <div>Table Reservation</div>
      <button class="btn btn-success" data-toggle="modal" data-target="#addReserveModal">Add Reservation</button>
    </div>
    <div class="row justify-content-center rounded text-center bg-white mt-1 m-0">
      <table class="table table-responsive table-hover table-bordered m-2 d-none d-lg-table text-center">
        <thead class="thead-dark">
          <tr>
            <th scope="col" class="th-center">
              <div class="py-2">ID</div>
            </th>
            <th scope="col" class="th-center">
              <div class="py-2">Name</div>
            </th>
            <th scope="col" class="th-center">
              <div class="py-2">Contact </div>
            </th>
            <th scope="col" class="th-center">
              <div class="py-2">Headcount<br>(Adult)</div>
            </th>
            <th scope="col" class="th-center">
              <div class="py-2">Headcount<br>(Children)</div>
            </th>
            <th scope="col" class="th-center">
              <div class="py-2">Time</div>
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
            <td class="align-middle">Test 1</td>
            <td class="align-middle">0123456789</td>
            <td class="align-middle">2</td>
            <td class="align-middle">0</td>
            <td class="align-middle">2020-01-17 15:30:00</td>
            <td class="align-middle"><button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#dltReserveModal"><i class="fa fa-trash"></i></button>
            </td>
          </tr>
          <tr>
            <th class="align-middle">
              2
            </th>
            <td class="align-middle">Test 1</td>
            <td class="align-middle">0123456789</td>
            <td class="align-middle">2</td>
            <td class="align-middle">0</td>
            <td class="align-middle">2020-01-17 15:30:00</td>
            <td class="align-middle"><button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#dltReserveModal"><i class="fa fa-trash"></i></button>
            </td>
          </tr>
          <tr>
            <th class="align-middle">
              3
            </th>
            <td class="align-middle">Test 1</td>
            <td class="align-middle">0123456789</td>
            <td class="align-middle">2</td>
            <td class="align-middle">0</td>
            <td class="align-middle">2020-01-17 15:30:00</td>
            <td class="align-middle">
              <button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#dltReserveModal">
                <i class="fa fa-trash"></i>
              </button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="row justify-content-center rounded text-center bg-white mb-5 m-0 d-lg-none">
      <table class="table table-borderless table-striped border m-2 text-left">
        <colgroup>
          <col class="p-1 px-2 w-25">
          <col class="p-1 px-2 w-25">
        </colgroup>
        <tr>
          <th scope="col">ID</th>
          <td>1</td>
        </tr>
        <tr>
          <th scope="col">Name</th>
          <td>Test 1</td>
        </tr>
        <tr>
          <th scope="col">Contact</th>
          <td>0123456789</td>
        </tr>
        <tr>
          <th scope="col">HeadCount<br>(Adult)</th>
          <td>2</td>
        </tr>
        <tr>
          <th scope="col">HeadCount<br>(Children)</th>
          <td>2</td>
        </tr>
        <tr>
          <th scope="col">Time</th>
          <td>2020-01-17 15:30:00</td>
        </tr>
        <tr>
          <th scope="col">Action</th>
          <td><button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#dltReserveModal"><i class="fa fa-trash"></i></button></td>
        </tr>
      </table>
      <table class="table table-borderless table-striped border m-2 text-left">
        <colgroup>
          <col class="p-1 px-2 w-25">
          <col class="p-1 px-2 w-25">
        </colgroup>
        <tr>
          <th scope="col">ID</th>
          <td>1</td>
        </tr>
        <tr>
          <th scope="col">Name</th>
          <td>Test 1</td>
        </tr>
        <tr>
          <th scope="col">Contact</th>
          <td>0123456789</td>
        </tr>
        <tr>
          <th scope="col">HeadCount<br>(Adult)</th>
          <td>2</td>
        </tr>
        <tr>
          <th scope="col">HeadCount<br>(Children)</th>
          <td>1</td>
        </tr>
        <tr>
          <th scope="col">Time</th>
          <td>2020-01-17 15:30:00</td>
        </tr>
        <tr>
          <th scope="col">Action</th>
          <td><button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#dltReserveModal"><i class="fa fa-trash"></i></button></td>
        </tr>
      </table>
      <table class="table table-borderless table-striped border m-2 text-left">
        <colgroup>
          <col class="p-1 px-2 w-25">
          <col class="p-1 px-2 w-25">
        </colgroup>
        <tr>
          <th scope="col">ID</th>
          <td>1</td>
        </tr>
        <tr>
          <th scope="col">Name</th>
          <td>Test 1</td>
        </tr>
        <tr>
          <th scope="col">Contact</th>
          <td>0123456789</td>
        </tr>
        <tr>
          <th scope="col">HeadCount<br>(Adult)</th>
          <td>2</td>
        </tr>
        <tr>
          <th scope="col">HeadCount<br>(Children)</th>
          <td>0</td>
        </tr>
        <tr>
          <th scope="col">Time</th>
          <td>2020-01-17 15:30:00</td>
        </tr>
        <tr>
          <th scope="col">Action</th>
          <td><button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#dltReserveModal"><i class="fa fa-trash"></i></button></td>
        </tr>
      </table>
    </div>
  </div>

  <div class="modal fade" id="addReserveModal" tabindex="-1" role="dialog" aria-labelledby="addReserveModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="addReserveModalLabel">Add Item</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div>
            <form method="post">
			  <div class="form-group">
                <label for="resvDate" class="">Date:</label>
                <input id="<?php echo $_SESSION['dateClass']; ?>"type="datetime-local" class="form-control" name="resvDate">
              </div>
              <div class="form-group">
                <label for="resvTime" class="">Time:</label>
                <input id="<?php echo $_SESSION['timeClass']; ?>" type="datetime-local" class="form-control" name="resvTime">
              </div>
			<div class="form-group">
                <label for="custName" class="">Name:</label>
                <input type="text" class="form-control" name="custName">
              </div>
              <div class="form-group">
                <label for="custContact" class="">Contact:</label>
                <input type="text" class="form-control" name="custContact">
              </div>
			  <div class="form-group">
                <label for="custEmail" class="">Email:</label>
                <input type="text" class="form-control" name="custEmail">
              </div>
			  <div class="form-group">
                <label for="custCity" class="">City:</label>
                <input type="text" class="form-control" name="custCity">
              </div>
              <div class="form-group">
                <label for="adultHc" class="">Headcount(Adult):</label>
                <input type="number" min="1" class="form-control"  name="adultHc">
              </div>
              <div class="form-group">
                <label for="childHc" class="">Headcount(Children):</label>
                <input type="number" min="0" class="form-control"  name="childHc">
              </div>
              <div class="form-group">
                <label for="specialRemark" class="">Special Remarks:</label>
                <input type="text" class="form-control" name="specialRemark">
              </div>
            </form>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" name="addReservation" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="dltReserveModal" tabindex="-1" role="dialog" aria-labelledby="dltReserveModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="dltReserveModalLabel">Add Item</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div> Remove Reservation?
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" name="deleteReservation" class="btn btn-danger">Comfirm</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          
        </div>
      </div>
    </div>
  </div>
</body>

</html>