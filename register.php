<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link
     rel="stylesheet"
     href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css"
   />
   <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
   <style>
     .containers{
        display: flex;
    justify-content: center;
    width:500px;
    hight: 1000px;
    background-color: aquamarine;
    justify-content: center;
    margin-top: 150px;
    margin-left: 30%;
}
     
   </style>
</head>
<body>
    <div class="containers">
    <form action="register.php" method="post">
        <h1>Register</h1>
        <div>
            <label for="username">First Name:</label><br>
            <input type="text" name="username" id="username"><br><br>
        </div>
        <div>
            <label for="username">Last Name:</label><br>
            <input type="text" name="username" id="username"><br><br>
        </div>
        <div>
            <label for="email">Email:</label><br>
            <input type="email" name="email" id="email"><br><br>
        </div>
        <div>
            <label for="">Phone Number</label><br>
        <input id="phone" type="tel"><br>
            <span id="valid-msg" class="hide"></span>
            <span id="error-msg" class="hide"></span>
        </div><br><br>
        <div>
            <label for="password">Password:</label><br>
            <input type="password" name="password" id="password"><br><br>
        </div>
        <div>
            <label for="password2">Password Again:</label><br>
            <input type="password" name="password2" id="password2"><br>
        </div>
        <div>
            <label for="agree"><br>
                <input type="checkbox" name="agree" id="agree" value="yes"/> I agree
                with the
                <a href="#" title="term of services">term of services</a><br>
            </label>
        </div>
        <button type="submit">Register</button>
        <footer>Already a member? <a href="login.php">Login here</a></footer>
    </form>
    </div>

</body>

<script>
    var input = document.querySelector("#phone"),
  errorMsg = document.querySelector("#error-msg"),
  validMsg = document.querySelector("#valid-msg");

// here, the index maps to the error code returned from getValidationError - see readme
var errorMap = ["Invalid number", "Invalid country code", "Too short", "Too long", "Invalid number"];

// initialise plugin
var iti = window.intlTelInput(input, {
  utilsScript: "../../build/js/utils.js?1638200991544"
});

var reset = function() {
  input.classList.remove("error");
  errorMsg.innerHTML = "";
  errorMsg.classList.add("hide");
  validMsg.classList.add("hide");
};

// on blur: validate
input.addEventListener('blur', function() {
  reset();
  if (input.value.trim()) {
    if (iti.isValidNumber()) {
      validMsg.classList.remove("hide");
    } else {
      input.classList.add("error");
      var errorCode = iti.getValidationError();
      errorMsg.innerHTML = errorMap[errorCode];
      errorMsg.classList.remove("hide");
    }
  }
});

// on keyup / change flag: reset
input.addEventListener('change', reset);
input.addEventListener('keyup', reset);
</script>
</html>