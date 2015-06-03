<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Welcome | GoZoop</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/spinbutton.css" rel="stylesheet">    
    <link href="assets/css/style.css" rel="stylesheet" type="text/css" media="screen">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
    </style>
    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
	
	<script  src="assets/js/jquery-1.8.3.min.js"></script>    	
    <script  src="assets/js/ajaxgold.js"></script>    	

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
    <![endif]-->

  </head>

  <body onLoad="timediff();">
    <input type="hidden" id="hostname" value="<?=base_url();?>">
    <input type="hidden" id="expire" value="<?=$this->session->userdata('stamp');?>">
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="#">GoZoop</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
            </ul>
            <form class="navbar-form pull-right">
              <button class="btn"><i class="icon icon-time"></i> WAIT</button>
              <button class="btn btn-danger" id="timer"><i class="icon icon-time icon-white"></i> </button>
              <button class="btn btn-warning"><i class="icon icon-user icon-white"></i> <?=strtoupper($this->session->userdata('username'));?></button>
              <a class="btn" href="dashboard/signout"><i class="icon icon-off"></i></a>
            </form>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">

      <!-- Main hero unit for a primary marketing message or call to action -->
      <div class="hero-unit">
        <h2>Assignment #1</h2>
        <p>As per the given requirements solution is developed.</p>
        <strong>Rules</strong>
        <ul type="square">
        	<li>User will have only 3 chances. </li>
            <li>After 3rd chance user needs to wait for <i class="icon icon-time"></i> 30 min.</li>
        </ul>
        <p><a id="show" class="btn btn-primary">View Solution</a></p>
      </div>
		<script>
			$("#show").click(function(e) {
                $(".hero-unit").fadeOut(2000);
            });
		</script>
      <!-- Images------------------------------------------------------------------ -->
      <div class="row">
      	<center><button class="btn-large btn-inverse">SOLUTION FOR ASSIGNMENT #1</button></center>
        <hr>
      </div>
      <div class="row" id="start">
        <div class="span4 machineContainer" style="-webkit-border-radius:2px;-webkit-box-shadow:0 0 2px #aaa;">          	
        	<center>
            <div id="machine1" class="slotMachine">
							<div class="slot slot1"></div>
							<div class="slot slot2"></div>
							<div class="slot slot3"></div>
							
			</div>
            </center>
        </div>
        <div class="span4 machineContainer" style="-webkit-border-radius:2px;-webkit-box-shadow:0 0 2px #aaa;">
          	<center>
            <div id="machine2" class="slotMachine">
							<div class="slot slot1"></div>
							<div class="slot slot2"></div>
							<div class="slot slot3"></div>							
			</div>
            </center>
       </div>
        <div class="span4 machineContainer" style="-webkit-border-radius:2px;-webkit-box-shadow:0 0 2px #aaa;">
        	<center>
          	<div id="machine3" class="slotMachine">
							<div class="slot slot1"></div>
							<div class="slot slot2"></div>
							<div class="slot slot3"></div>
			</div>
            </center>
        </div>
      </div>
      
      
      
      <!-- Names for Images------------------------------------------------------------------ -->      
      <div class="row" id="last">
        <div class="span4"  style="-webkit-border-radius:2px;-webkit-box-shadow:0 0 2px #aaa;">
          	<button id="machine1Result" class="btn btn-block btn-success" style="visibility:hidden">Image</button>
        </div>
        <div class="span4"  style="-webkit-border-radius:2px;-webkit-box-shadow:0 0 2px #aaa;">
          	<button id="machine2Result" class="btn btn-block btn-success" style="visibility:hidden">Image</button>
       </div>
        <div class="span4"  style="-webkit-border-radius:2px;-webkit-box-shadow:0 0 2px #aaa;">
          	<button id="machine3Result" class="btn btn-block btn-success" style="visibility:hidden">Image</button>
			
        </div>
      </div>
      <!-- Spin Button------------------------------------------------------------------ -->
      <div id="spinbtn">
        <div class="button">
            	<div class="outer">
                	<div class="height">
                    	<div class="inner" id="slotMachineButton1">SPIN</div>
                    </div>
                </div>
            </div>
       </div>    
         <div class="button" id="finish">
            	<div class="outer">
                	<div class="height">
                    	<div class="inner" id="finishbtn">Finish</div>
                    </div>
                </div>
         </div>
          <div class="row" id="R200">
        	<div class="span4">
            	<img src="assets/img/1.JPG" class="img-rounded">
                <button class="btn btn-warning">REDEEM 200 Points</button>
     		</div>
            <div class="span4">
            	<img src="assets/img/2.JPG" class="img-rounded">        
                <button class="btn btn-warning">REDEEM 200 Points</button>    	
     		</div>
            <div class="span4">
            	<img src="assets/img/3.JPG" class="img-rounded">        
                <button class="btn btn-warning">REDEEM 200 Points</button>    	
     		</div>
          </div>  
          
          <hr>
          
          <div class="row" id="R500">
        	<div class="span4">
            	<img src="assets/img/1.JPG" class="img-rounded">
                <button class="btn btn-large">REDEEM 500 Points</button>
     		</div>
            <div class="span4">
            	<img src="assets/img/2.JPG" class="img-rounded">        
                <button class="btn btn-large">REDEEM 500 Points</button>    	
     		</div>
            <div class="span4">
            	<img src="assets/img/3.JPG" class="img-rounded">        
                <button class="btn btn-large">REDEEM 500 Points</button>    	
     		</div>
          </div>

          <hr>
          
          <div class="row" id="R00">
          <center>
                <button class="btn btn-large btn-inverse">You Didn't Got Any Points</button>    	
		   </center>
          </div>  
        <script>
			$("#finish").fadeOut(10);
			$("#R00").fadeOut(10);
			$("#R200").fadeOut(10);
			$("#R500").fadeOut(10);
			$(document).ready(function(){
				var cnt=0;
				updatecnt("<?=base_url();?>",0);
				var machine1 = $("#machine1").slotMachine({
					active	: 0,
					delay	: 500
				});
				
				var machine2 = $("#machine2").slotMachine({
					active	: 1,
					delay	: 500
				});
				
				var machine3 = $("#machine3").slotMachine({
					active	: 2,
					delay	: 500
				});
				
				function onComplete(active){
					
					switch(this.element[0].id){
						case 'machine1':
							$("#machine1Result").text(this.active);

							break;
						case 'machine2':
							$("#machine2Result").text(this.active);

							break;
						case 'machine3':
							$("#machine3Result").text(this.active);

							break;
					}
					//alert(ids.length);
				}
				
				$("#slotMachineButton1").click(function(){
					$("#R00").fadeOut(10);
					$("#R200").fadeOut(10);
					$("#R500").fadeOut(10);
				
					machine1.shuffle(0, onComplete);
	
					setTimeout(function(){
						machine2.shuffle(0, onComplete);
					}, 500);
					
					setTimeout(function(){
						machine3.shuffle(0, onComplete);
					}, 1000);	
									
					ids =new Array();
					var final =new Array();
					setTimeout(function(){						
						ids.push($("#machine1Result").text());
						ids.push($("#machine2Result").text());
						ids.push($("#machine3Result").text());
						for(var i=3;i<6;i++){
							final.push(ids[i]);}
							final.filter(function(value) {
   							 return value !== "" && value !== null;
								});
						cnt=$.unique(ids).length;
						if(cnt==1){
							$("#R500").fadeIn(1000);
							$('#myModal2').modal('show');
							}
						else if(cnt==2){
							$("#R200").fadeIn(1000);
							$('#myModal1').modal('show');
							}
						else{
							$("#R00").fadeIn(1000);
							$('#myModal3').modal('show');
							}
					},4000);
					updatecnt("<?=base_url();?>",1);
					
				})
			});
			

			
			$("#finishbtn").click(function(e) {
                	updatecnt("<?=base_url();?>",1);
            });
			
		</script>

      <hr>

      <footer align="center">
        <p class="label label-warning">Designed by Chetan Fulpagare</p>
      </footer>

    </div> <!-- /container -->
	<!-- ------------------------------------------------------------------------------------------------------ -->

 
<!-- Modal 200 -->
		<div id="myModal1" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					<h3 id="myModalLabel">Congratulations</h3>
			</div>
			<div class="modal-body">
			<p>YOU GOT 200 POINTS. USE FOLLOWING PRODUCTS TO REDEEM THEM.</p>
			</div>
			<div class="modal-footer">
				<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
			</div>
		</div>
<!-- Modal 500 -->
		<div id="myModal2" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					<h3 id="myModalLabel">Congratulations</h3>
			</div>
			<div class="modal-body">
			<p>YOU GOT 500 POINTS. USE FOLLOWING PRODUCTS TO REDEEM THEM.</p>
			</div>
			<div class="modal-footer">
				<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
			</div>
		</div>
<!-- Modal 000 -->
		<div id="myModal3" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					<h3 id="myModalLabel">Sorry</h3>
			</div>
			<div class="modal-body">
			<p>YOU GOT 000 POINTS.</p>
			</div>
			<div class="modal-footer">
				<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
			</div>
		</div>
    
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
	<script  src="assets/js/bootstrap.min.js"></script>
	<script  src="assets/js/jquery.slotmachine.js"></script>

  </body>
</html>
