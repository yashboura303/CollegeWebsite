$(document).ready(function() {

	var form = $('#ajax-contact');
	var formMessages = $('#form-messages');
	// $(form).submit(function(e) {
        $("#submitButton").click(function (e) {

        e.preventDefault();
        // alert("9");
		var formData = $(form).serialize();
		$.ajax({
			type: 'POST',
			url: '../authentication/mail.php',
            data: formData,
            success: function(response) { 
                $('#formName').val('');
                $('#formEmail').val('');
                $('#exampleFormControlTextarea1').val('');
                alert(response); 
            
            },
            error: function(xhr, status, error){
                alert("Sorry Couldn't send your message. Check your form data"); 
                console.log(xhr); 
            }
		})
});
});