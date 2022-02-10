<!DOCTYPE html>
<html lang="en">
<head>
    <title>We-Blog || Register</title>
    <style>
        <?php include '../Styling/Register.css'; ?>
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>

<p class="heading">We-<span>Blog</span></p>

<div class="login-form">
    <div class="left">
        <h1>Welcome To We-Blog</h1>

        <p>
            To start viewing blog posts from your favourite bloggers or create and post your own blog posts, create
            an account! It's easy and free.
        </p>

        <button id="btnSignin">
            Sign in
        </button>

    </div>
    <div class="right">
        <h2>Join We-Blog</h2>
        <form action="../Scripts/Register.php" method="POST">
            <Label for="fullname">Full Name</Label>
            <input type="text" placeholder="FULL NAME" required id="fullname"/>
            <br>
            <br>
            <Label for="email">Email</Label>
            <input type="email" placeholder="EMAIL" required id="email"/>
            <br>
            <br>
            <Label for="alias">Alias</Label>
            <input type="text" placeholder="ALIAS" required id="alias"/>
            <br>
            <br>
            <Label for="password">Password</Label>
            <input type="Password" placeholder="PASSWORD" required id="password"/>
            <br>
            <br>
            <Label for="confirmPassword">Confirm Password</Label>
            <input type="Password" placeholder="CONFIRM PASSWORD" required id="confirmPassword"/>

            <input type="button" value="Sign in" id="btnRegister"/>
        </form>
    </div>
</div>

<script type="text/javascript">
    $("#btnSignin").on('click',function(){
        $(location).attr("href", "index.php");
    });

    $("#btnRegister").on('click', function(){
        const password = $("#password").val();
        const confirm_pass = $("#confirmPassword").val();

        if (password === confirm_pass){
            $.ajax({
                type:"POST",
                url:"../Scripts/Register.php",
                data:{
                    fullName: $("#fullname").val(),
                    email: $("#email").val(),
                    alias: $("#alias").val(),
                    pass: password,
                },
                success: function(response){
                    if (response === "Registered"){
                        $(location).attr('href', 'Dashboard.php');
                    }else {
                        $(location).attr('href', 'Dashboard.php?Auth=0');
                    }
                },
                error: function(status, xhr, err){
                    alert(err);
                }
            })
        }
    })

</script>


</body>
</html>
