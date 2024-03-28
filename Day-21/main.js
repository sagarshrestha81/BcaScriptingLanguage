$(document).on("click", "#getData", function () {
  // $("#loadWebsite").load("hello.html > #student-table");
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
    updateTable();
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

$(document).on("click", "#update-table", function () {
  updateTable();
});

function updateTable() {
  $(".mydata table tbody").html("");
  $.ajax({
    url: "getData.php",
    method: "get",
    success: function (result) {
      result = JSON.parse(result);
      if (result.type == "success") {
        $(".mydata table").attr("row", result.data.length);
        result.data.forEach((element, idx) => {
          $(".mydata table tbody").append(
            `<tr>
            <th scope="row">${idx + 1}</th>
                    <td>${element.user_fullname}</td>
                    <td>${element.user_email}</td>
                    <td>
                    <button class="btn btn-danger btn-sm delete-button" value="${
                      element.user_id
                    }">Delete</button>
                    </td>               
          </tr>`
          );
        });
      }
    },
    error: function (err) {},
  });
}
updateTable();

$(document).on("click", ".delete-button", function () {
  id = $(this).val();
  Swal.fire({
    title: "Are you sure?",
    text: "You won't be able to revert this!",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Yes, delete it!",
  }).then((result) => {
    if (result.isConfirmed) {
      $.ajax({
        url: "delete.php",
        method: "get",
        data: {
          user_id: id,
        },
        success: function (result) {
          console.log(result);
          result = JSON.parse(result);

          Swal.fire({
            icon: result.type,
            title: result.message,
            showConfirmButton: false,
            timer: 1500,
          });
          updateTable();
        },
        error: function (err) {},
      });
    }
  });
});
