<?php require_once '../template/header.php';?>
    <title>Contacts page</title>
  </head>
  
  
  <body>
    <div class="container">
      <div class="header clearfix">
          <?php require_once '../template/navbar.php';?>
        <h3 class="text-muted">PHP Login exercise - Contacts page</h3>
      </div>

        <div class="mainarea">
            <h1>Status: You are logged in <?php echo
                $_SESSION['Username'];?> </h1>
            <p class="lead">This is where we will put the logout button</p>

            <form action="logout.php" method="post" name="Logout_Form" class="form-signin">
                <button name="Submit" value="Logout" class="button" type="submit">Log out</button>
            </form>
        </div>

      <div class="row marketing">
        <div>
          <h4>Contacts page</h4>
          <p>Some content goes here. Some content goes here. Some content goes here. Some content goes here. Some content goes here. Some content goes here. Some content goes here. Some content goes here. Some content goes here. Some content goes here. Some content goes here. Some content goes here. Some content goes here. Some content goes here. Some content goes here. Some content goes here. Some content goes here. Some content goes here. Some content goes here. Some content goes here. Some content goes here. </p>

       </div>

<?php require_once '../template/footer.php';?>