$(document).ready(function() {
  $("#regForm").on("submit", function(e) {
    let name = $("#fullname").val();
    let email = $("#email").val();
    let phone = $("#phone").val();
    let method = $("#method").val();
    let account = $("#account").val();
    let pass = $("#password").val();
    let conf = $("#confirm").val();
    if (name === "" || email === "" || phone === "" || method === "" || account === "" || pass === "" || conf === "") {
      e.preventDefault();
      $("#msg").text("Please complete all fields!").css("color", "red");
      return;
    }
    if (pass.length < 8) {
      e.preventDefault();
      $("#msg").text("Password must be at least 8 characters").css("color", "orange");
      return;
    }
    if (pass !== conf) {
      e.preventDefault();
      $("#msg").text("Passwords do not match!").css("color", "red");
      return;
    }
    if (!$("#agree").is(":checked")) {
      e.preventDefault();
      $("#msg").text("You must agree to the terms.").css("color", "orange");
      return;
    }
    $("#msg").text("⏳ Processing registration...").css("color", "blue");
    this.submit();
  });
});
