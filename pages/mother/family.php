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
    <button class="btn btn-sm btn-success float-right">Add user</button>
      <table class="table">
        <thead>
            <tr>
            <th scope="col">User ID</th>
            <th scope="col">Firstname</th>
            <th scope="col">Role</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <th scope="row">1</th>
            <td>Mary</td>
            <td>Mother</td>
            <td><button class="btn btn-danger btn-sm">Delete</button></td>
            <td><button class="btn btn-success btn-sm">Edit</button></td>
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