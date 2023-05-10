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

  $(".user_login").submit(function (e) {
    e.preventDefault();

    var email = $("input[name='email']").val();
    var password = $("input[name='password']").val();

    $.ajax({
      type: "POST",
      url: "login.php",
      data: {
        login: "has",
        email: email,
        password: password,
      },
      success: function (output) {
        $(".common_input").val("");
      },
    });
  });

  // Chat Message
  $(".send_message").submit(function () {
    var message = $(".user_message").val();

    $.ajax({
      type: "POST",
      url: "chat.php",
      data: {
        chatUpdate: "",
        message: message,
      },
      success: function (response) {
        $(".user_message").val("");
      },
    });

    return false;
  });

  // Auto Update Chat Message

  setInterval(function () {
    $.ajax({
      type: "POST",
      url: "chat.php",
      data: {
        beUpdate: "",
      },
      success: function (result) {
        $(".message_box").html(result);
      },
    });
  }, 50);

});
