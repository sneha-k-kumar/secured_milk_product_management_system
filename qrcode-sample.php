
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title></title>
	<style>
<style>
body, html {
  width: 100%;
  height: 100%;
  margin: 0;
}

.container {
  width: 100%;
  height: 100%;
}

.leftpane {
    
    float: left;
    background-color:white;
    border-collapse: collapse;
}

.middlepane {
    width: 50%;
    height: 100%;
    float: left;
    background-color: white;
    border-collapse: collapse;
}

.rightpane {
  width: 25%;
  height: 100%;
  position: relative;
  float: right;
  background-color: whitle;
  border-collapse: collapse;
}

.toppane {

  width: 100%;
  height: 100%;
  border-collapse: collapse;
  background-color: white;
}

</style>
</head>
<body>


<p></p>

<div class="toppane">
  <font size="5"> 
 <p align="center">Wellcome for Gpay Or other UPI's</p></font>
<p></p>
</div>

<div class="">
        <a tabindex="0" role="button" class="btn btn-success" data-toggle="popover" data-trigger="focus" data-placement="bottom" title="QR Code" data-url="https://www.gloomycorner.com">SCAN QR Code for</a>
        <div id="qrcode" style="display:none; width:auto; height:auto;padding:15px;"></div>
    </div>
<div >

<div class="rightpane">
this etc....
		<form method="post" action="details.php">
		 Agree to terms and services <input type="checkbox" name="agree"></br>
	    <input type="submit" value="Submit" name="submit" class="btn btn-primary">
	    </form>		
		</div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
    <script type="text/javascript" src="./qrcode.min.js?ver=v1.0"></script>
    <script type="text/javascript">
        var qrcode = new QRCode(document.getElementById("qrcode"),
            {
                width : 120,
                height : 120
            }
        );
        function makeQrcode(e) {
            qrcode.makeCode(e.attr("data-url"));
        }
        jQuery(document).ready(function(){
            jQuery("[data-toggle='popover']").popover(
                options={
                    content: jQuery("#qrcode"),
                    html: true // important! popover html content (tag: "#qrcode") which contains an image
                }
            );

            jQuery("[data-toggle='popover']").on("show.bs.popover", function(e) {
                makeQrcode(jQuery(this));
                jQuery("#qrcode").show();
            });
        });
    </script>
</body>
</html>

