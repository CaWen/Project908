<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Login Page</title>

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link href="signin.css" rel="stylesheet">
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>
  </head>

  <body onload="Init ( )">

    <div>
        <img src="https://ss0.bdstatic.com/5aV1bjqh_Q23odCf/static/superman/img/logo/bd_logo1_31bdc765.png" alt="Tip is missing." />
    </div>
    <div class="container">

      <form class="form-login" action="/user/logincheck" method="POST">
        <h2 class="form-login-heading">请登录</h2>
        <label for="inputUsername" class="sr-only">用户名</label>
        <input name="username" type="username" id="username" class="form-control" placeholder="Username" required autofocus>
        <label for="inputPassword" class="sr-only">密码</label>
        <input name="password" type="password" id="password" class="form-control" placeholder="Password" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> 记住账号
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit" onclick="return FormCheck ( ) ;" />登陆</button>
		<button class="btn btn-lg btn-primary btn-block" type="return" onclick="/, GET;" />返回</button>
      </form>
    </div> <!-- /container -->  
    <script type="text/javascript">
            function Init ( )
            {
                var notice_p = document.getElementById ( "notice" ) ;
                if ( notice.length == 0 )
                    document.body.removeChild ( notice ) ;
                else
                    notice_p.innerText = notice ;
                return ;
            }
            function FormCheck ( )
            {
                var username = document.getElementById ( "username" ).value ;
                var password = document.getElementById ( "password" ).value ;
                if ( !/^[A-Za-z0-9.,]{7,16}$/g.test ( username ) )
                {
                    alert ( "用户名填写有误！" ) ;
                    return false ;
                }
                console.log ( password ) ;
                if ( !/^[A-Za-z0-9.,]{7,16}$/g.test ( password ) )
                {
                    alert ( "密码填写有误！" ) ;
                    return false ;
                }
                return true ;
            }
    </script>

  </body>
</html>
