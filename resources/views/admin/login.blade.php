
<!DOCTYPE html>
<html>
<head><script nonce="0114857b-497d-485b-83ec-62298b6468c3">(function(w,d){!function(a,e,t,r){a.zarazData=a.zarazData||{},a.zarazData.executed=[],a.zarazData.tracks=[],a.zaraz={deferred:[]},a.zaraz.track=(e,t)=>{for(key in a.zarazData.tracks.push(e),t)a.zarazData["z_"+key]=t[key]},a.zaraz._preSet=[],a.zaraz.set=(e,t,r)=>{a.zarazData["z_"+e]=t,a.zaraz._preSet.push([e,t,r])},a.addEventListener("DOMContentLoaded",(()=>{var t=e.getElementsByTagName(r)[0],z=e.createElement(r),n=e.getElementsByTagName("title")[0];n&&(a.zarazData.t=e.getElementsByTagName("title")[0].text),a.zarazData.w=a.screen.width,a.zarazData.h=a.screen.height,a.zarazData.j=a.innerHeight,a.zarazData.e=a.innerWidth,a.zarazData.l=a.location.href,a.zarazData.r=e.referrer,a.zarazData.k=a.screen.colorDepth,a.zarazData.n=e.characterSet,a.zarazData.o=(new Date).getTimezoneOffset(),z.defer=!0,z.src="/cdn-cgi/zaraz/s.js?z="+btoa(encodeURIComponent(JSON.stringify(a.zarazData))),t.parentNode.insertBefore(z,t)}))}(w,d,0,"script");})(window,document);</script>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>AdminLTE 2 | Log in</title>
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{url('assets/admin')}}/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{url('assets/admin')}}/css/font-awesome.min.css">
  <link rel="stylesheet" href="{{url('assets/admin')}}/css/AdminLTE.css">
  <link rel="stylesheet" href="{{url('assets/admin')}}/css/_all-skins.min.css">
  <link rel="stylesheet" href="{{url('assets/admin')}}/css/jquery-ui.css">
  <link rel="stylesheet" href="{{url('assets/admin')}}/css/style.css" />
  <script src="js/angular.min.js"></script>
  <script src="js/app.js"></script>

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
<div class="login-box">
<div class="login-logo">
<a href="../../index2.html"><b>Admin</b>LTE</a>
</div>

<div class="login-box-body">
<p class="login-box-msg">Sign in to start your session</p>
<form action="{{route('post-login.admin')}}" method="post">
    @csrf
<div class="form-group has-feedback">
<input type="email" class="form-control" placeholder="Email" name="email">
<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
</div>
<div class="form-group has-feedback">
<input type="password" class="form-control" placeholder="Password" name='password'>
<span class="glyphicon glyphicon-lock form-control-feedback"></span>
</div>
<div class="row">
<div class="col-xs-8">
<div class="checkbox icheck">
<label>
<input type="checkbox"> Remember Me
</label>
</div>
</div>

<div class="col-xs-4">
<button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
</div>

</div>
</form>
<div class="social-auth-links text-center">
<p>- OR -</p>
<a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
Facebook</a>
<a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using
Google+</a>
</div>

<a href="#">I forgot my password</a><br>
<a href="register.html" class="text-center">Register a new membership</a>
</div>

</div>


<script src="../../bower_components/jquery/dist/jquery.min.js"></script>

<script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<script src="../../plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
</body>
</html>
