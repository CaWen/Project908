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



<body onload="Init ( )">
    <script type="text/javascript">
            <!-- This javascript is a placeholder for receiving variables from Java Servlet Server. -->
            var note = "" ;
            var urlfrom = "/Project908/" ;
    </script>
  <div class="container">
    <img alt="Tip is missing." src="https://ss0.bdstatic.com/5aV1bjqh_Q23odCf/static/superman/img/logo/bd_logo1_31bdc765.png"/>
    <div>
	  <h2>欢迎注册</h2>
        <form class="form-signup" action="/user/registercheck" method="POST">
          <label for="username" class="sr-only">用户名</label>
		  <input name="username" id="username" class="form-control" placeholder="Username" required />
          </br>
		  <label for="password" class="sr-only">密码</label>
		  <input name="password" id="password" class="form-control" placeholder="Password" required />
          </br>
		  <label for="password_confirm" class="sr-only">确认密码</label>
		  <input name="password_confirm" id="password_confirm" class="form-control" placeholder="ConfirmPassword" required />
          </br>
	      <label for="name" class="sr-only">姓名</label>
	      <input name="name" id="name" class="form-control" placeholder="name" required />
	      </br>
		  <label for="email" class="sr-only">邮箱</label>
	      <input name="email" id="email" class="form-control" placeholder="email" required />
	      </br>
		  <label for="mobile" class="sr-only">手机号</label>
	      <input name="mobile" id="mobile" class="form-control" placeholder="mobile" required />
	      </br>
		  <label for="introduction" class="sr-only">我的简介</label>
	      <input name="introduction" id="introduction" class="form-control" placeholder="introduction" required />
	      </br>
		  <input name="urlform" id="urlform" hidden="true"/>
		  <button class="btn btn-lg btn-primary btn-block" type="submit" onclick="return FormCheck ( ) ;">注册</button>
	      <button class="btn btn-lg btn-primary btn-block" type="return" onclick="/, GET;" />返回</button>
	    </form>
	  </div>
  </div> <!--/container/-->
  <script type="text/javascript">
            function Init ( )
            {
                var note_p = document.getElementById ( "note" ) ;
                if ( note.length == 0 )
                    note_p.parentNode.removeChild ( note_p ) ;
                else
                    note_p.innerText = note ;
                var urlfrom_i = document.getElementById ( "urlfrom" ) ;
                urlfrom_i.value = urlfrom ;
                return ;
            }
            function Redirect ( )
            {
                window.location.href = urlfrom ;
                return ;
            }
            function FormCheck ( )
            {
                if ( !/^[A-Za-z0-9.,_]{7,16}$/g.test ( document.getElementById ( "username" ).value ) )
                {
                    alert ( "用户名填写有误！" ) ;
                    return false ;
                }
                var password = document.getElementById ( "password" ).value ;
                if ( !/^[A-Za-z0-9.,_]{7,16}$/g.test ( password ) )
                {
                    alert ( "密码填写有误！" ) ;
                    return false ;
                }
                if ( document.getElementById ( "password_confirm" ).value != password )
                {
                    alert ( "两次密码输入不一致！" ) ;
                    return false ;
                }
                var name = document.getElementById ( "name" ).value ;
                if ( !( name.length >= 1 && name.length <= 16 ) )
                {
                    alert ( "姓名填写有误！" ) ;
                    return false ;
                }
                var email = document.getElementById ( "email" ).value ;
                if ( !( email.length >= 10 && email.length <= 32 && /^.+?@.+?\..+?$/g.test ( email ) ) )
                {
                    alert ( "电子邮箱填写有误！" ) ;
                    return false ;
                }
                if ( !/^\d{11}$/g.test ( document.getElementById ( "mobile" ).value ) )
                {
                    alert ( "手机号码填写有误！" ) ;
                    return false ;
                }
                if ( !( document.getElementById ( "introduction" ).value.length <= 256 ) )
                {
                    alert ( "电子邮箱填写有误！" ) ;
                    return false ;
                }
                return true ;
            }
  </script>

</body>

</html>
