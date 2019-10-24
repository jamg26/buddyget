<?php 
session_start();
include 'styles.php';
?>

<html>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="/">Buddyget</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
    <!-- Mothers nav -->
    <?php
      if(@$_SESSION['user']['role'] == "mother") {
    ?>
      <li class="nav-item">
        <a class="nav-link" href="/pages/mother/savings.php">Savings</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/pages/mother/planner.php">Budget Planner</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/pages/mother/expenses.php">Expenses</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/pages/mother/family.php">Family</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/pages/mother/reminders.php">Reminders</a>
      </li>
    <?php
      }
    ?>
    <!-- Childs nav -->
    <?php
      if(@$_SESSION['user']['role'] == "child") {
    ?>
      <li class="nav-item">
        <a class="nav-link" href="/pages/child/expenses.php">Expenses</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/pages/child/wishlist.php">My Wishlist</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/pages/child/request-money.php">Request Money</a>
      </li>
    <?php
      }
    ?>

    <!-- Fathers nav -->
    <?php
      if(@$_SESSION['user']['role'] == "father") {
    ?>
      <li class="nav-item">
        <a class="nav-link" href="/pages/father/savings.php">Savings</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/pages/father/planner.php">Budget Planner</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/pages/father/expenses.php">Expenses</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/pages/father/family.php">Family</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/pages/father/reminders.php">Reminders</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/pages/father/request-money.php">Request Money</a>
      </li>
    <?php
      }
    ?>
    <?php
      if(@$_SESSION['user']['role']) {
    ?>
      <li class="nav-item">
        <a class="nav-link" href="/signout.php">Logout</a>
      </li>
    <?php
      }
    ?>
    </ul>
  </div>
</nav>
</html>