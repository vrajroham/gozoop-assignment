<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Sign In | GoZoop Assignment 1</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="gozoop,assignment,spin,jquery,php,html5">
    <meta name="author" content="Vaibhavraj Roham">

    <!-- Le styles -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #fff;
		
      }

      .form-signin {
        max-width: 300px;
        padding: 19px 29px 29px;
        margin: 0 auto 20px;
        background-color: #f5f5f5;
        border: 1px solid #e5e5e5;
        -webkit-border-radius: 5px;
           -moz-border-radius: 5px;
                border-radius: 5px;
        -webkit-box-shadow: 0 12px 8px #333;
           -moz-box-shadow: 0 12px 8px #333;
                box-shadow: 0 12px 12px #333;
      }
      .form-signin .form-signin-heading,
      .form-signin .checkbox {
        margin-bottom: 10px;
      }
      .form-signin input[type="text"],
      .form-signin input[type="email"] {
        font-size: 16px;
        height: auto;
        margin-bottom: 15px;
        padding: 7px 9px;
      }

    </style>
    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
	<script  src="assets/js/ajaxgold.js"></script>    	
        <script src="assets/js/jquery.js"></script>
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
    <![endif]-->

   
  </head>

  <body>

    <div class="container">
	  <input type="hidden" id="hostname" value="<?=base_url();?>">
      <input type="hidden" name="loading" id="loading" value="<?=base_url();?>assets/img/loading.gif">
      <form class="form-signin" style="margin-top:75px;" action="login" method="post">
        <h2 class="form-signin-heading" align="center">SIGN IN : GOZOOP</h2>
		<hr>
			<input type="text" class="input-block-level" id="fname" placeholder="Full Name" autofocus required>
			<input type="email" class="input-block-level" id="email" placeholder="Email" required>
        <hr>
        <button class="btn btn-primary" id="sbmt" type="button">SIGN IN</button> 
		<button class="btn btn-inverse" id="resetfield" type="reset">RESET</button>
      </form>
	    	<div id="load"></div>
    </div> <!-- /container -->
	<script>
		$(document).ready(function(e) {
            $("#sbmt").click(function(e) {
				var filter = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
				var stat=filter.test($("#email").val());
				if ($("#fname").val()!="" && $("#email").val()!="" )
				{
					if(stat)
					{

							getDataReturnText("<?=base_url();?>login","alert");

					}
					else{
						alert("Please Enter Valid Email Address..")	
						$("#email").focus();
					}
				}
				else{
						alert("Enter Details..");	
						$("#fname").focus();
				}

            });
        });
	</script>
    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap-transition.js"></script>
    <script src="assets/js/bootstrap-alert.js"></script>
    <script src="assets/js/bootstrap-modal.js"></script>
    <script src="assets/js/bootstrap-dropdown.js"></script>
    <script src="assets/js/bootstrap-scrollspy.js"></script>
    <script src="assets/js/bootstrap-tab.js"></script>
    <script src="assets/js/bootstrap-tooltip.js"></script>
    <script src="assets/js/bootstrap-popover.js"></script>
    <script src="assets/js/bootstrap-button.js"></script>
    <script src="assets/js/bootstrap-collapse.js"></script>
    <script src="assets/js/bootstrap-carousel.js"></script>
    <script src="assets/js/bootstrap-typeahead.js"></script>

  </body>
</html>
