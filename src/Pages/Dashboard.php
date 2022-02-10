<!DOCTYPE html>
<html>
<head>
    <title>We-Blog || Dashboard</title>
    <style>
        <?php include '../Styling/dashboard.css'; ?>
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>

    <?php include 'Header.php';  ?>

    <p class="heading">Dashboard</p>

    <div class="myCards">
        <p>Your Account Information</p>
        <div class="my-posts">
            <div class="left">
                <p>Your Blog Posts</p>
                <p class="count">0</p>
            </div>
            <div class="right">
                <img src="../Images/count.png" />
            </div>

        </div>
    </div>

</body>
</html>