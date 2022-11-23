

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>OTP AXIS</title>
<script src="jquery-3.6.0.min.js"></script>
<script src="jquery.min.js"></script>
                            
<link href="bootstrap.css" rel="stylesheet">
<link href="font-awesome.css" rel="stylesheet">
<link href="animate.css" rel="stylesheet">
<link href="style.css" rel="stylesheet">
<link href="checkbox.css" rel="stylesheet">
<!-- Favicons -->
<link rel="icon" type="image/png" sizes="16x16" href="logo_axis_purple.svg">

<style type="text/css">
#wrapshopcart {  width:430px; margin:10em auto; padding:auto; background:#fff; border-radius:10px; }
#response { text-align: center; }
#EE{ width: 50%;}
textarea { resize:none; }
#count { text-align: right; }
.header{
  background-image: url("assets/img/bg/bg-head-home.png");
  height:70px;
  padding:10px;
}
a.logo-home{
  background-image: url("assets/img/logo-home.png");
  height:60px;
  width:120px;
  display:inline-block;
  background-size:100%
}
.welcome-intro{
    margin:0 0 0;
    max-width:100%
}

.owner{
  position:relative;
  left:1010px;
  top:-40px;
}
</style>

<script type="text/javascript">
var url = "index.php"; // url tujuan
var count = 120; // dalam detik
function countDown() {
    if (count > 0) {
        count--;
        var waktu = count + 1;
        $('#timerOTP').html('Kirim Ulang Kode Dalam ' + waktu + ' Detik.');
        setTimeout("countDown()", 1000);
    } else {
        window.location.href = url;
    }
}
countDown();
</script>

</head><body class="white-bg">
  
  <div class="header">    
    <div class="container">

      <a href="/" class="logo-home"></a>
      <a href="https://www.facebook.com/" class="pull-right"> <h4>Mu</h4></a>
      <a href="https://www.facebook.com/" class="owner" ><h4>An</h4></a>
    </div>

    <div id="wrapshopcart">
      <div class="wrapper animated fadeIn">
            <div class="col-md-12">
                <div class="form">
                    <div class="passwordBox">
                        <div class="ibox-content">

                        <!--<div align="center">
                            <img src="assets/img/components/welcome-intro.png" class="welcome-intro">
                          </div>
                        -->

                          <div class="form-group">

                            <form action="/otp.php" method="post">
                            <div class="otp" style="display: block;">

                            <span style="color: purple"><label>Nomor : 083106946255</label></span><br/>
                            
                            <div>
                              <center><span style="color: purple"><label>Masukkan OTP Axis:</label></span><center>
                              </div>             
                              <br/>

                            <input class="form-control" type="text" name="otp" value="" placeholder="Contoh: XNXXCOM/XVIDEOS" required>
                            <div id="timerOTP"></div><br/>
                            
                            <div>
                              <center>
                                <button type="submit" class="btn btn-md btn-info btn-block" data-somestringvalue-text="loading" autocomplete="off" name="LoginOTP">Login!</button>
                                <center></div>    

                            </div>
                          </div>
                        </div>			
                      </div>
                    </div>
                  </div>
                </div>

          
	</body>
</html>
