<style type="text/css">
.form-control {
  background-color: #eee;
}
</style>

<div class="container main-container main-cream main-last main-first main-padding">

	<!-- The companies -->
	<div class="container row">
		<h1 class="main">Let's make something awesome</h1>
		<div class="col-md-10 col-md-offset-1">
				<form class="form-horizontal" id="contact_form">
					<fieldset>	
						<div class="col-md-6">
							<div class="form-group"> 
								<input id="name" name="name" type="text" placeholder="Full Name" class="form-control input-md" required="">
							</div>

							<div class="form-group">
								<input id="email" name="email" type="text" placeholder="Email Address" class="form-control input-md" required="">
							</div>

							<div class="form-group">
								<input id="subject" name="subject" type="text" placeholder="Subject" class="form-control input-md" required="">
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group">                   
								<textarea class="form-control" id="msg" placeholder="Your beautiful message" name="msg" cols="6" rows="6"></textarea>
							</div>
						</div>

							<!-- Button -->
							<div class="form-group align-center">
									<div class="col-md-12">
										<button id="submit" name="submit" class="btn btn-red btn-lg">Send Message</button>
								</div>
							</div>
					</fieldset>
				</form>
			</div>


	</div>

</div>

<script type="text/javascript">
jQuery(function($)  
{
    $("#contact_form").submit(function()
    {
        var email = $("#email").val(); // get email field value
        var name = $("#name").val(); // get name field value
        var subject = $("#subject").val(); // get subject field value
        var msg = $("#msg").val(); // get message field value

        $.ajax(
        {
            type: "POST",
            url: "https://mandrillapp.com/api/1.0/messages/send.json",
            data: {
                'key': 'f3aumBm_dMe6Inv3vTWD7w',
                'message': {
                    'from_email': email,
                    'from_name': name,
                    'headers': {
                        'Reply-To': email
                    },
                    'subject': 'ES Website Contact Form Submission ' + subject,
                    'text': msg,
                    'to': [
                    {
                        'email': 'me@luke.sx',
                        'name': 'Luke Brown',
                        'type': 'to'
                    }]
                }
            }
        })
        .done(function(response) {
            document.getElementById('submit').innerHTML = 'Message Sent!';
            document.getElementById('submit').className += '';
            document.getElementById('submit').className += ' btn-success';

            $("#name").val(''); // reset field after successful submission
            $("#email").val(''); // reset field after successful submission
            $("#msg").val(''); // reset field after successful submission
        })
        .fail(function(response) {
            document.getElementById('submit').innerHTML = 'Error :(';
            document.getElementById('submit').className += '';
            document.getElementById('submit').className += ' btn-danger';
        });
        return false; // prevent page refresh
    });
});


</script>

