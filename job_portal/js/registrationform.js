$('#registration-form').validate({
    rules: {
      fname: "required",
      lname: "required",
      contactno:{
        required: true,
        minlength: 9,
        maxlength: 10,
        number: true
      },
      email: {
        required: true,
        email: true
      },
      password: {
        required: true,
        minlength: 5
      },
      usertype:"required"
    },
    // Specify validation error messages
    messages: {
      firstname: "Please enter your firstname",
      lastname: "Please enter your lastname",
      contactno: {
        required: "Please provide your contactno",
        minlength:"Your contactno must be at least 10 characters long"
      },
      email: "Please enter a valid email address",
      password: {
        required: "Please provide a password",
        minlength: "Your password must be at least 5 characters long"
      },
      usertype: "Please select the user"
    },
    
    submitHandler: function(form) {
      form.submit();
    }
  });