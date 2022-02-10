<!DOCTYPE html>
<html lang="en">
    <head>
        <title>We-Blog || Login</title>
        <style>
            <?php include '../Styling/index.css'; ?>
        </style>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </head>
<body>

    <p class="heading">We-<span>Blog</span></p>

    <div class="login-form">
        <div class="left">
            <h1>Welcome Back</h1>

            <p>
                Log into your account to create your own blog posts or read posts from your favourite bloggers!
                It all starts with the click of a button.
            </p>

            <button id="btnSignup">
                Sign Up
            </button>

        </div>
        <div class="right">
            <h2>Sign In To We-Blog</h2>
            <div id="error"></div>
            <form action="" method="POST">
                <Label for="email">Email</Label>
                <input type="email" placeholder="EMAIL" required id="email"/>
                <br>
                <br>
                <Label for="password">Password</Label>
                <input type="Password" placeholder="PASSWORD" required id="password"/>

                <input type="button" value="Sign in" id="btnLogin"/>

                <p>Forgot Password?</p>
            </form>
        </div>
    </div>
    
<script type="text/javascript">
    $("#btnSignup").on('click',function(){
        $(location).attr("href", "Register.php");
    });

    $("#btnLogin").on('click', function(){
        $.ajax({
            type:"POST",
            url:"../Scripts/Login.php",
            data:{
                email: $("#email").val(),
                password: $("#password").val(),
            },
            success: function(response){
                if (response === "Auth"){
                    window.location.href="Dashboard.php";
                }
            },
            error: function(response){
                console.log(response);
            }
        })
    });

</script>
</body>
</html>