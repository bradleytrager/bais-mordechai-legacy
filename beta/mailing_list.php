<!DOCTYPE html>
<html lang="en">
<head>
<title>Mailing List Sign-up</title>
<meta name="description" content="Sign-Up for Marty's mailing list" />

<?php include_once 'head.php'; ?>


<script>
  $(document).ready(function(){
    $("#contact-form").validate();
  });
</script>
<script>
$(document).ready(function() {
	//$("#contact-form").validate();

	$("#contact_submit").click(function (event) {
				if ($("#contact-form").valid()){
				 event.preventDefault(); 
				
				$fname = $("#fname").val();
				$lname = $("#lname").val();
				$email = $("#email").val();
				$message = $("#message").val();
				
				$data = 'fname=' + $fname + '&lname=' + $lname + '&email=' + $email;
				console.log($data);
			$.ajax({                                      
			      type: 'POST',
			      url: 'AjaxMailingList.php',                  //the script to call to get data          
			      data: $data   ,                
			      //dataType: 'json',                //data format      
			      success: function(data)          //on recieve of reply
			      {
			      		console.log(data);
			    	  alert("Thank you. You should recieve an email confirmation.");
			      }
		
		});
				}
				else {
					alert("Please fix required fields");
				}
				
			});
			
			
			});
	</script>
</head>
<body>
<?php include_once 'top.php'; ?>
	<div class="row">
			<div class="hero-unit">
			<h1>Mailing List Sign-Up</h1><hr/>
	<form id="contact-form">

							<fieldset>
								
									<div class="holder span8">
										<div class="message">
											<div class="top"></div>
											<div class="contents">
												<div id="alert"></div>
											</div>
											<div class="bottom"></div>
										</div>
									</div>
									<div class="field span8">
									
										<input type="text" value=""
											class="required input-text m-wrap m-ctrl-large" id="fname" name="fname"
											placeholder="Your First Name" 
											/>
									</div>
									<div class="field span8">
									
										<input type="text" value=""
											class="required input-text m-wrap m-ctrl-large" id="lname" name="lname"
											placeholder="Your Last Name" 
											/>
									</div>
									<div class="field span8">
										<input type="text" value=""
											class="required email input-text m-wrap m-ctrl-large" id="email"
											name="email" placeholder="Your Email Address" />
									</div>
									
									<div class="field span8">
									


										<input type="submit" id="contact_submit" class="required btn btn-primary btn-large" value="Submit Entry" />
									</div>
								</div>
							</fieldset>
						</form>
					</div>

					

				</div>

</div>
			</div>
<?php include_once 'footer.php'; ?>
		
	
		