<?php
include '../../navigation.php';
include '../../styles.php';

?>

<html>
<body>
<div class="container">
  <div class="row">
    <div class="col-sm"></div>
    <div class="col-sm">
      <table class="table">
        <thead>
            <tr>
            <th scope="col">Plan ID</th>
            <th scope="col">Product</th>
            <th scope="col">Price</th>
            <th><button class="btn btn-success float-right" onclick="window.location.href='add-plan.php'">Add</button></th>
            </tr>
        </thead>
        <tbody>
        <?php
          include '../../db.php';
          $sql = "select * from planner where status='active'";
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
              while ($row = $result->fetch_assoc()) {
                  ?>
                <tr>
                  <th scope="row"><?php echo $row['id'] ?></th>
                  <td><?php echo $row['product'] ?></td>
                  <td><?php echo $row['price'] ?></td>
                  <form action="./update-planner.php" method="get">
                    <input type="text" name="id" value="<?php echo $row['id'] ?>" hidden>
                    <input type="text" name="product" value="<?php echo $row['product'] ?>" hidden>
                    <input type="text" name="price" value="<?php echo $row['price'] ?>" hidden>
                    <input type="text" name="note" value="<?php echo $row['note'] ?>" hidden>
                    <td><button class="btn btn-success btn-sm">Edit</button></td>
                  </form>
                  <form action="/requests/planner/done.php" method="post">
                    <input type="text" name="id" value="<?php echo $row['id'] ?>" hidden>
                    <td><button class="btn btn-danger btn-sm">Done</button></td>
                  </form>
                </tr>
            <?php } }?>
        </tbody>
    </table>
    </div>
    <div class="col-sm">
      History:
      <p>10/12/19 - burger <a href="#">View</a></p>
      <p>10/12/19 - shoes <a href="#">View</a></p>
      <p>10/12/19 - fries <a href="#">View</a></p>
      <p>10/12/19 - juice <a href="#">View</a></p>
    </div>
  </div>
</div>
</body>
</html>