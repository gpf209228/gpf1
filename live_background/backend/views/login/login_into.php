
<!DOCTYPE html>
<html lang="en" class="no-js">

<head>

    <meta charset="utf-8">
    <title>Fullscreen Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- CSS -->
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=PT+Sans:400,700'>
    <link rel="stylesheet" href="assets/css/reset.css">
    <link rel="stylesheet" href="assets/css/supersized.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>

<body>

<div class="page-container">
    <h1>Register</h1>
    <form action="?r=login/login_into" method="post">
        <input type="text" name="admin_name" class="username" placeholder="Username">
        <input type="password" class="resq" name="admin_pw" class="password" placeholder="Password">
        <input type="password" class="resq1" name="admin_pws" class="password" placeholder="Again Password">
        <input type="text" name="admin_phone" class="phone" placeholder="Phone">
        <span class="res"><button  type="button">注册</button></span>

        <div class="error"><span>+</span></div>
    </form>
    <div class="connect">
        <!--                <p><input type="button" value="注册"/></p>-->
        <!--                <p>-->
        <!--                    <a class="facebook" href=""></a>-->
        <!--                    <a class="twitter" href=""></a>-->
        <!--                </p>-->
    </div>
</div>

<!-- Javascript -->
<script src="assets/js/jquery-1.8.2.min.js"></script>
<script>
    $(function(){
        $(document).on('blur','.resq',function(){
            var pw=$(this).val();
            var pw1=$(".resq1").val();
            if(pw==pw1){
               $(".res").html('<button  type="submit">注册</button>');
            }
        })
        $(document).on('blur','.resq1',function(){
            var pw=$(this).val();
            var pw1=$(".resq").val();
            if(pw==pw1){
                $(".res").html('<button  type="submit">注册</button>');
            }
        })

    })
</script>
<script src="assets/js/supersized.3.2.7.min.js"></script>
<script src="assets/js/supersized-init.js"></script>
<script src="assets/js/scripts.js"></script>

</body>

</html>

