$(document).on("click", "#getData", function () {
  $(".error").text("");
  fullname = $("#fullname").val();
  email = $("#email").val();
  password = $("#password").val();
  let formData = {
    Fullname: fullname,
    Email: email,
    Password: password,
  };
  $.post("backend.php", formData, function (data, status) {
    result = JSON.parse(data);

    console.log(result);
    if (result.type == "success") {
      $("#fullname").val("");
      $("#email").val("");
      $("#password").val("");
    }
    Swal.fire({
      icon: result.type,
      title: result.message,
      showConfirmButton: false,
      timer: 1500,
    });
  });
});

$(document).on("keyup", "#email", function () {
  email = $(this).val();
  $.post("checkUser.php", { Email: email }, function (data, status) {
    if (data == "Exists") {
      $(".error").text("email already exists");
    } else {
      $(".error").text("");
    }
  });
});
