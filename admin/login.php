<html>
<head>
  <title>Login Page</title>
  <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
   <!-- css login page -->
   <link href="assets/css/style-login.css" type="text/css" rel="stylesheet">
</head>
<body>
<div align="center">

<!-- form for login if you have a user -->
<div class="container">
  <h1>ADMIN LOGIN PAGE</h1>
  <form action="check_login.php" method="post">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>

      <label for="pwd"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>

      <button type="submit" class="btn btn-primary" name="login">Login</button>
    <br><br>
  </form>

  ユーザーがない場合はしたに、登録してください！
<!-- form for create user -->
  <form action="createuser.php" method="post">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>

      <label for="pwd"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>

      <button type="submit"  class="btn btn-primary" name="create">Create</button>
    <br><br>
  </form>
  
</div>



<script>
	function isNumberKey(evt){
    var charCode = evt.keyCode;
	    if(charCode>48&&charCode<57){
	    	return true;	
	    }    
	    alert("aaa");
	    return false;
	}
</script>
</div>
</body>
</html>

