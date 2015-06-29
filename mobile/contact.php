<?php include 'head.html'; ?>
<body> 

<div data-role="page">

	<?php include 'header.php'; ?>

	<div data-role="content">	

<div data-role="fieldcontain">
<form name="askmarty"  method="post">
   
    <input type="text" name="name" id="name" value="" placeholder="Name" />
    
    <input id="email" name="email" type="text" placeholder="E-Mail"/>
    
    <textarea id="message" rows="15" cols="60" name="message" type="text" 
    placeholder="Message"></textarea>
       
        <input id="contact_submit" type="submit" value="Submit" data-theme="a"/>
        </form>
</div>	


</div>

<?php include 'footer.php'; ?>

</div>
</body>
<script>
$("#contact_submit").click(function (event) {
				
				 event.preventDefault(); 
				
				$name = $("#name").val();
				$email = $("#email").val();
				$message = $("#message").val();
				
				$data = 'name=' + $name + '&email=' + $email + '&message=' + $message;
				console.log($data);
				
				$.ajax({                                      
			      type: 'POST',
			      url: 'contact_ajax.php',                  //the script to call to get data          
			      data: $data   ,                
			      //dataType: 'json',                //data format      
			      success: function()          //on recieve of reply
			      {
			    	  alert("Thank you. Your message has been submitted.");
			      }
		
		});
	});			
				</script>
</html>

