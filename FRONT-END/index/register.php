<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Register Page</title>

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

  </head>



<body>

  <div class="container">

    <form class="form-signup" action="/user/registercheck" method="POST">
      <h2 class="form-signup-heading">用户注册</h1>
      <label for="inputUsername" class="sr-only">用户名</label>
      <input type="username" id="username" class="form-control" placeholder="Username" required autofocus>
      <label for="inputPassword" class="sr-only">密码</label>
      <input type="password" id="password" class="form-control" placeholder="Password" required>
      <label for="inputPasswordagain" class="sr-only">确认密码</label>
      <input type="password" id="password2" class="form-control" placeholder="ConfirmPassword" required>
      
	  <label for="inputname" class="sr-only">姓名</label>
	  <input type="name" id="name" class="form-control" placeholder="name" required autofocus>
	  <label for="inputemail" class="sr-only">邮箱</label>
	  <input type="email" id="email" class="form-control" placeholder="email" required autofocus>
	  <label for="inputmobile" class="sr-only">手机号</label>
	  <input type="mobile" id="mobile" class="form-control" placeholder="mobile" required autofocus>
	  <label for="inputintroduction" class="sr-only">我的简介</label>
	  <input type="introduction" id="introduction" class="form-control" placeholder="introduction" required autofocus>
	  <button class="btn btn-lg btn-primary btn-block" type="submit" onclick="return FormCheck ( ) ;">注册</button>
	  <button class="btn btn-lg btn-primary btn-block" type="return" onclick="/, GET;" />返回</button>
	</form>
  <script type="text/javascript">
  function FormCheck ( )
            {
                var username = document.getElementById ( "username" ).value ;
                var password = document.getElementById ( "password" ).value ;
				var password = document.getElementById ( "password2" ).value ;
				var name = document.getElementById ( "name" ).value ;
				var email = document.getElementById ( "email" ).value ;
				var mobile = document.getElementById ( "mobile" ).value ;
				var introduction = document.getElementById ( "introduction" ).value ;
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
			if ( !/^[A-Za-z0-9.,]{7,16}$/g.test ( password2 ) )
                {
                    alert ( "确认密码填写有误！" ) ;
                    return false ;
                }
                return true ;
            }
			if ( !/^{1,16}$/g.test ( name ) )
                {
                    alert ( "姓名填写有误！" ) ;
                    return false ;
                }
                return true ;
            }
			if ( !/^{10,32}$/g.test ( email ) )
                {
                    alert ( "邮箱填写有误！" ) ;
                    return false ;
                }
                return true ;
            }
			if ( !/^[0-9.,]{11,11}$/g.test ( mobile ) )
                {
                    alert ( "手机号填写有误！" ) ;
                    return false ;
                }
                return true ;
            }
			if ( !/^{0,256}$/g.test ( introduction ) )
                {
                    alert ( "个人简介含有非法字符" ) ;
                    return false ;
                }
                return true ;
            }
  </div><!-- /container -->

</body>

</html>
