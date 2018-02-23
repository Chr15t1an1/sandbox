


#cc__fancy_notification > div > div > div.body







$('#notif').click(function(){
  $('#cc__fancy_notification').css('pointer-events','all');
  $('.overlay').addClass('is-active');

 });


// A $( document ).ready() block.
$( document ).ready(function() {
///////////fireing Notif///////////

//$('#cc__fancy_notification').css('pointer-events','all');
//$('.overlay').addClass('is-active');


$("#cc__fancy_notification > div > div > div.body").html('<div class="text"><form id="contact_form" class="form-inline" action="" method="post"><div class="form-group mx-sm-3 mb-2"><label for="inputPassword2" class="sr-only">Email</label><input name="email_home" type="email" class="form-control" id="email_1" placeholder="abc@xyz.com" required="required"><input type="hidden" name="action" value="contact_form"></div><button type="submit" class="btn btn-primary mb-2">Download</button></form><a id="cc__closebutton" href="#" style=""><span>CLOSE</span></a></div>');

///////////Closing Notif///////////
//Close svg X
$('#cc__fancy_notification .overlay .cc__notif__modal .title svg,#cc__closebutton,#cc__cartbutton').click(function(){
     $('#cc__fancy_notification').css('pointer-events','none');
     $('.cc__notif__modal').addClass('fade');

     setTimeout(function(){
       $('.overlay').removeClass('is-active');
       $('.cc__notif__modal').removeClass('fade');
     }, 600);
});

});


$("#eventId").val("2222222");




//Fade in
$( "#contactForm_1" ).click(function() {
  $("#formHide").fadeIn( "4000" );
});


// $("#contactForm_1").validate();


// form validatio

// Wait for the DOM to be ready
$(function() {
  // Initialize form validation on the registration form.
  // It has the name attribute "registration"
  $("#contactForm_1").validate({
    // Specify validation rules
    rules: {
      // The key name on the left side is the name attribute
      // of an input field. Validation rules are defined
      // on the right side
      email: {
        required: true,
        // Specify that email should be validated
        // by the built-in "email" rule
        email: true
      },

    },
    // Specify validation error messages
    messages: {
      email: "Please enter a valid email address"
    },
    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
    submitHandler: function(form) {
	// formInstance = $(form.target);

		d = $("#contact_form").serialize();

		$.post("t.php",d, function(data, status){
        console.log("Data: " + data + "\nStatus: " + status);
    	$("#contactForm_1").fadeOut( "4000" );
		$('#success_thumb').fadeIn("3000").css("display","block");
		});

      return false;

    }
  });
});
