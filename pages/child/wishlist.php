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
    <button class="btn btn-success float-right">Add item</button>
      <table class="table">
        <thead>
            <tr>
            <th scope="col">Wishlist ID</th>
            <th scope="col">Product</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <th scope="row">1</th>
            <td>iPhone X</td>
            <td><button class="btn btn-sm btn-danger">Delete</button></td>
            <td><button class="btn btn-sm btn-success">Edit</button></td>
            </tr>
            <tr>
            <th scope="row">2</th>
            <td>Cap</td>
            <td><button class="btn btn-sm btn-danger">Delete</button></td>
            <td><button class="btn btn-sm btn-success">Edit</button></td>
            </tr>
            <tr>
            <th scope="row">3</th>
            <td>Shoes</td>
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