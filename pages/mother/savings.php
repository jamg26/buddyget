<?php
include '../../navigation.php';
include '../../styles.php';

?>

<html>
<body>
<div class="container">
  <div class="row">
    <div class="col-sm">
      <!-- Modal Salary -->
    <div class="modal fade" id="savings" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">SAVINGS</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <label for="">SAVINGS</label>
            <input type="number" class="form-control">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">ADD</button>
          </div>
        </div>
      </div>
    </div>
    </div>
    <div class="col-sm">
      <h1>PHP 32829.00</h1>
      <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#savings">ADD SAVINGS</button>
      <h4><p>History</p></h4>
      <hr>
      <p>10/3/19 mother added 10000.00 - salary</p>
      <hr>
      <p>9/8/19 father added 5000.00 - avocation</p>
      <hr>
      <p>9/8/19 father added 10000.00 - salary</p>
    </div>
    <div class="col-sm">
    
    </div>
  </div>
</div>
</body>
</html>