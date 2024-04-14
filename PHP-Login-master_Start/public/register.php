<?php require_once('../template/header_login.php'); ?>
<title>Sign up</title>
</head>
<?php
require "../functions.php";
if (isset($_POST['submit'])) {
    try {
        require_once '../src/DBconnect.php';
        $new_user = array(
            "username" => cleanData($_POST['username']),
            "firstname" => cleanData($_POST['firstname']),
            "lastname" => cleanData($_POST['lastname']),
            "password" => $_POST['password'],
            "address" => cleanData($_POST['address']),
            "address2" => cleanData($_POST['address2']),
            "city" => cleanData($_POST['city']),
            "county" => cleanData($_POST['county'])
        );
        $sql = "INSERT INTO Users (" . implode(', ', array_keys($new_user)).") values (:". implode(', :', array_keys($new_user)).")";

        $statement = $connection->prepare($sql);
        $statement->execute($new_user);
    } catch(PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
    }
}
?>
<body>

<div class="container">
    <div class="header clearfix">
        <?php require_once '../template/navbar.php';?>
        <h3 class="text-muted">PHP Login exercise - Register</h3>
    </div>
    <form method="POST" >
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" name="username" required><br>
            <label for="firstname" class="form-label">First Name</label>
            <input type="text" class="form-control" id="firstname" name="firstname" required><br>
            <label for="lastname" class="form-label">Last Name</label>
            <input type="text" class="form-control" id="lastname" name="lastname" required><br>
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" required><br>
            <label for="address" class="form-label">Address</label>
            <input type="text" class="form-control" id="address" name="address" placeholder="1234 Main St" required><br>
            <label for="address2" class="form-label">Address 2</label>
            <input type="text" class="form-control" id="address2" name="address2" placeholder="Apartment, studio, or floor" required><br>
            <label for="city" class="form-label">City</label>
            <input type="text" class="form-control" id="city" name="city" required><br>
            <label for="county" class="form-label">County</label>
            <select id="county" class="form-select" name="county" required><br>
                <option selected>Choose...</option>
                <option>Antrim</option>
                <option>Armagh</option>
                <option>Carlow</option>
                <option>Cavan</option>
                <option>Clare</option>
                <option>Cork</option>
                <option>Derry</option>
                <option>Donegal</option>
                <option>Down</option>
                <option>Dublin</option>
                <option>Fermanagh</option>
                <option>Galway</option>
                <option>Kerry</option>
                <option>Kildare</option>
                <option>Kilkenny</option>
                <option>Laois</option>
                <option>Leitrim</option>
                <option>Longford</option>
                <option>Louth</option>
                <option>Mayo</option>
                <option>Meath</option>
                <option>Monaghan</option>
                <option>Offaly</option>
                <option>Roscommon</option>
                <option>Sligo</option>
                <option>Tipperary</option>
                <option>Tyrone</option>
                <option>Waterford</option>
                <option>Westmeath</option>
                <option>Wexford</option>
                <option>Wicklow</option>
            </select><br>
        <a href="login.php" <button name="submit" class="button" type="submit">Register</button></a>
    </form>
</div>
