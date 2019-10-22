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
      <button class="btn btn-success float-right">Add plan</button>
      <table class="table">
        <thead>
            <tr>
            <th scope="col">Plan ID</th>
            <th scope="col">Product</th>
            <th scope="col">Price</th>
            <th scope="col">Date</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <th scope="row">1</th>
            <td>Burger</td>
            <td>150.00</td>
            <td>10/19/19</td>
            <td><button class="btn btn-sm btn-danger">Delete</button></td>
            <td><button class="btn btn-sm btn-success">Edit</button></td>
            </tr>
            <tr>
            <th scope="row">2</th>
            <td>Cap</td>
            <td>350.00</td>
            <td>10/19/19</td>
            <td><button class="btn btn-sm btn-danger">Delete</button></td>
            <td><button class="btn btn-sm btn-success">Edit</button></td>
            </tr>
            <tr>
            <th scope="row">3</th>
            <td>Shoes</td>
            <td>450.00</td>
            <td>10/20/19</td>
            <td><button class="btn btn-sm btn-danger">Delete</button></td>
            <td><button class="btn btn-sm btn-success">Edit</button></td>
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