<!DOCTYPE html>
<html lang="en">
<head>
<title>Contact</title>
<meta name="description" content="Contact Form" />

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
				
				$name = $("#name").val();
				$email = $("#email").val();
				$message = $("#message").val();
				
				$data = 'name=' + $name + '&email=' + $email + '&message=' + $message;
				console.log($data);
			$.ajax({                                      
			      type: 'POST',
			      url: 'AjaxContactForm.php',                  //the script to call to get data          
			      data: $data   ,                
			      //dataType: 'json',                //data format      
			      success: function()          //on recieve of reply
			      {
			    	  alert("Thank you. Your message has been submitted.");
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
			<h1>Contact</h1><hr/>
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
											class="required input-text m-wrap m-ctrl-large" id="name" name="name"
											placeholder="Your Name" 
											/>
									</div>
									<div class="field span8">
										<input type="text" value=""
											class="required email input-text m-wrap m-ctrl-large" id="email"
											name="email" placeholder="Your Email Address" />
									</div>
									<div class="field span8">
										<textarea placeholder="Your Message"
											class="required input-text m-wrap m-ctrl-large" id="message"
											name="message" style="height:130px;"></textarea>
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
		
	
		