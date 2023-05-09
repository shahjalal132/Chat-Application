$(document).ready(function () {
  
  // Registration data sent to database with ajax

  $(".user_registration").submit(function (e) {
    e.preventDefault();

    var first_name = $("input[name='first_name']").val();
    var last_name = $("input[name='last_name']").val();
    var email = $("input[name='email']").val();
    var password = $("input[name='password']").val();

    $.ajax({
      type: "POST",
      url: "register.php",
      data: {
        register: "has",
        first_name: first_name,
        last_name: last_name,
        email: email,
        password: password,
      },
      success: function (response) {
        $(".success").html(response);
        $(".common_input").val("");
      },
    });

    return false;
  });

// Login Validation with ajax



});
