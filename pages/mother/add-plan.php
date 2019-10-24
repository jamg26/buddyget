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
      <form action="/requests/planner/add.php" method="post">
        <div class="form-group">
            <label for="exampleInputEmail1">Product</label>
            <input type="text" name="product" class="form-control">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Price</label>
            <input type="number" name="price" class="form-control">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Note</label>
            <textarea type="text" name="note" class="form-control"></textarea>
        </div>
        <input type="text" name="name" value="<?php echo $_SESSION['user']['firstname'] ?>" hidden>
        <button class="btn btn-success">Submit</button>
      </form>
    </div>
    <div class="col-sm">
    
    </div>
  </div>
</div>
</body>
</html>