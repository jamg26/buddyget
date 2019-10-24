<?php
include '../../navigation.php';
include '../../styles.php';

?>

<html>
<body>
<div class="container">
  <div class="row">
    <div class="col-sm">
    
    </div>
    <div class="col-sm">
    <button class="btn btn-sm btn-success float-right">Add reminder</button>
      <table class="table">
        <thead>
            <tr>
            <th scope="col">Reminder ID</th>
            <th scope="col">Product</th>
            <th scope="col">Amount</th>
            <th scope="col">Deadline</th>
            </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Water Bill</td>
            <td>1352.00</td>
            <td>10/19/19</td>
            <td><button class="btn btn-danger btn-sm">Delete</button></td>
            <td><button class="btn btn-success btn-sm">Edit</button></td>
            <td><button class="btn btn-primary btn-sm">Paid</button></td>
        </tr>
        <tr>
            <th scope="row">1</th>
            <td>Electric Bill</td>
            <td>6352.00</td>
            <td>10/19/25</td>
            <td><button class="btn btn-danger btn-sm">Delete</button></td>
            <td><button class="btn btn-success btn-sm">Edit</button></td>
            <td><button class="btn btn-primary btn-sm">Paid</button></td>
        </tr>

        </tbody>
    </table>
    </div>
    <div class="col-sm">
    
    </div>
  </div>
</div>
</body>
</html>