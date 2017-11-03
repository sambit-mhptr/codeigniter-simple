
	$( document ).ready( function () {



		$( "form" ).validate( {

			rules: {

				fullname: {
					required: true,
					minlength: 2
				},

				password: {
					pwcheck0: true,
					pwcheck1: true,
					pwcheck2: true,
					pwcheck3: true,
					required: true,
					pwcheck4: true,
					minlength: 8
				},

				email: {
					required: true,
					email: true
				},

				phone: {
					required: true,
					digits: true,
					minlength: 10
				},

				conf_password: {
					required: true,
					equalTo: "#inputPassword"
				},

				resume: {
					required: true
				},

				gender: {
					required: true
				},

				qualification: {
					required: true,
				},



				description: {
					required: true,
					rangelength: [ 50, 180 ]
				},

				"skill[]": {
					required: true,
					minlength: 2
				},
			},


			messages: {

				fullname: {
					required: "name is required",
					minlength: "2 charecters atleast"
				},

				password: {
					required: "password is required",
					pwcheck0: "password must cotain no white space",
					pwcheck1: "password must cotain one lowercase letter",
					pwcheck2: "password must cotain one uppercase letter",
					pwcheck3: "password must cotain one number",
					pwcheck4: "password must cotain one special charecter",
					minlength: "8 charecters atleast",



				},

				"skill[]": {
					minlength: "select atleast two skills"
				},



			}


		} );

		$.validator.addMethod( "pwcheck1", function ( value ) {
			return /[a-z]+/.test( value );
		} );

		$.validator.addMethod( "pwcheck2", function ( value ) {
			return /[A-Z]+/.test( value );
		} );


		$.validator.addMethod( "pwcheck3", function ( value ) {
			return /[0-9]+/.test( value )
		} );


		$.validator.addMethod( "pwcheck4", function ( value ) {
			return /[\W]+/.test( value )
		} );


		$.validator.addMethod( "pwcheck0", function ( value ) {
			return /^[\S]+$/.test( value )
		} );


		/*// To check all
						$.validator.addMethod("pwcheck", function(value) {
		    return /[A-Z]+/.test(value) && /[a-z]+/.test(value) && 
		    /[\d\W]+/.test(value) && /\S{7,}/.test(value);
		});	

$("form").submit(function(event){
event.preventDefault();
	
//var srlz = $(this).serializeArray();
var formData = new FormData(this);
	
$.ajax({
url: "ajax_oprtn.php",	
method: "POST",	
data: formData,	
contentType: false,	
processData: false,	
success: function(data){
alert(data);	
});	

	/*
$("form#data").submit(function() {

    var formData = new FormData(this);

    $.post($(this).attr("action"), formData, function(data) {
        alert(data);
    });

    return false;
});
	
	
	
	
});
		
		
*/
	
	} );
