<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if this is the confirm submission
    if (isset($_POST['confirm'])) {
        // Get form data from hidden inputs
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $dob = $_POST['dob'];
        $location = $_POST['location'];
        $zip = $_POST['zip'];
        $city = $_POST['city'];
        $color = $_SESSION['color'];

        $conn=mysqli_connect('localhost','root','','aqi');

        // Insert into DB (sanitize inputs)
        $username = mysqli_real_escape_string($conn, $username);
        $email = mysqli_real_escape_string($conn, $email);
        $password = mysqli_real_escape_string($conn, $password);
        $dob = mysqli_real_escape_string($conn, $dob);
        $location = mysqli_real_escape_string($conn, $location);
        $zip = mysqli_real_escape_string($conn, $zip);
        $city = mysqli_real_escape_string($conn, $city);

        $sql = "INSERT INTO users (username, email, password, dob, location, zip, city) VALUES ('$username', '$email', '$password', '$dob', '$location', '$zip', '$city')";
        if (mysqli_query($conn, $sql)) {
            // Set cookies for 2 minutes (example)
            setcookie("color", $color, time() + 3600, "/");
            

            // Show message and redirect
            echo "<p>Registration successful! Redirecting to home...</p>";
            //header("refresh:2; url:in");
            echo "<script>
                    setTimeout(function(){
                        window.location.href = 'index.html';
                    }, 2000);
                  </script>";
            session_destroy();      
            exit();
        } else {
            echo "Error inserting data: " . mysqli_error($conn);
            exit();
        }
    } elseif (isset($_POST['cancel'])) {
        // Redirect immediately to index.html on cancel
        header("Location: index.html");
        exit();
    } else {
        // Initial display of user submitted data with confirm and cancel buttons
        $username = htmlspecialchars($_POST['username']);
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);
        $dob = htmlspecialchars($_POST['dob']);
        $location = htmlspecialchars($_POST['location']);
        $zip = htmlspecialchars($_POST['zip']);
        $city = htmlspecialchars($_POST['city']);
        ?>

        <h2>User Submitted Data</h2>
        <p><b>Username:</b> <?= $username ?></p>
        <p><b>Email:</b> <?= $email ?></p>
        <p><b>Password:</b> <?= $password ?></p>
        <p><b>Date of Birth:</b> <?= $dob ?></p>
        <p><b>Location:</b> <?= $location ?></p>
        <p><b>Zip Code:</b> <?= $zip ?></p>
        <p><b>City:</b> <?= $city ?></p>

        <form method="POST" action="">
            <!-- Send the data again as hidden fields -->
            <input type="hidden" name="username" value="<?= $username ?>">
            <input type="hidden" name="email" value="<?= $email ?>">
            <input type="hidden" name="password" value="<?= $password ?>">
            <input type="hidden" name="dob" value="<?= $dob ?>">
            <input type="hidden" name="location" value="<?= $location ?>">
            <input type="hidden" name="zip" value="<?= $zip ?>">
            <input type="hidden" name="city" value="<?= $city ?>">

            <button type="submit" name="confirm">Confirm</button>
            <button type="submit" name="cancel">Cancel</button>
        </form>

        <?php
    }
    $color=$_POST['color'];
    $_SESSION['color']=$color;
} else {
    // Redirect if accessed directly
    header("Location: index.html");
    exit();
}
?>
