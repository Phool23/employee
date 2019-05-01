
$('#loginform').validate({
    rules: {
      email: "required",
      password:"required"
      },
    // Specify validation error messages
    messages: {
      email: "Please enter email address",
      password: "Please provide a password"
      },

    submitHandler: function(form) {
      form.submit();
    }
  });