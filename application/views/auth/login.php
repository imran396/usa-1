<!DOCTYPE >
<html>
<head>
    <title>Tadoo</title>
    <!-- Meta -->
    <meta charset="UTF-8"/>
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">

    <!-- Bootstrap -->
    <link href="/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
    <!-- Theme -->
    <link rel="stylesheet" href="/assets/theme/css/style.min.css?1363272449"/>

</head>
<body>

<!-- Start Content -->
<div class="container-fluid fixed" style="margin-top: 50px; padding-top: 20px; border: none; background: none;">

    <div id="login" style="background: none;">

        <div style="text-align: center">

            <h2 style="text-align: center; margin-bottom: 30px; margin-top: 20px;">Tadoo Login</h2>

        </div>

        <form id="login" class="form-signin" method="POST" action="">

            <strong><b style="color:red;"><?php echo $message; ?></b></strong>
            <h4 class="form-signin-heading">&nbsp;</h4>

            <div class="uniformjs">
                <input type="text" class="input-block-level" placeholder="username" name="username">
                <input type="password" class="input-block-level" placeholder="Password" name="password">
                <label class="checkbox"><input type="checkbox" value="1" name="remember">Remember me</label>
            </div>
            <div style="text-align: center">
                <button class="btn btn-large btn-primary" type="submit">Login</button>
            </div>

        </form>
    </div>

</div>


</body>
</html>