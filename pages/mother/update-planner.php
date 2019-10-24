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
      <form action="/requests/planner/update.php" method="post">
        <div class="form-group">
            <label for="exampleInputEmail1">Product</label>
            <input type="text" name="product" value="<?php echo $_GET['product'] ?>" class="form-control">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Price</label>
            <input type="number" name="price" value="<?php echo $_GET['price'] ?>" class="form-control">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Note</label>
            <textarea type="text" name="note" class="form-control"><?php echo $_GET['note'] ?></textarea>
        </div>
        <input type="text" name="id" value="<?php echo $_GET['id'] ?>" hidden>
        <button class="btn btn-success">Submit</button>
      </form>
    </div>
    <div class="col-sm">
    
    </div>
  </div>
</div>
</body>
</html>