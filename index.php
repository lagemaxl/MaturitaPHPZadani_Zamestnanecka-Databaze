<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <script src="https://code.jquery.com/jquery-3.6.3.min.js"
        integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous">
    </script>
    <style>
    body {
        color: #000;
        overflow-x: hidden;
        height: 100%;
        ;
        background-repeat: no-repeat;
        background-size: 100% 100%
    }

    .card {
        padding: 30px 40px;
        margin-top: 60px;
        margin-bottom: 60px;
        border: none !important;
        box-shadow: 0 6px 12px 0 rgba(0, 0, 0, 0.2)
    }

    .blue-text {
        color: #00BCD4
    }
    </style>
</head>

<body>



    <div class="form">
        <h3>Register</h3>
        <p class="blue-text">If you are already registered, just <a href="login.php">login</a>.</p>
        <div class="card">
            <form method="POST" action="register.php">
                <div class="formText">
                    <label class="">Name</label>
                    <input type="text" id="fname" name="name" placeholder="Enter your name" onblur="">
                </div>
                <div class="formText">

                    <label class="">Surname</label>
                    <input type="text" id="fsurname" name="surname" placeholder="Enter your surname" onblur="">
                </div>
                <div class="formText">
                    <label class="">Password</label>
                    <input type="password" id="fpassword" name="password" placeholder="Enter your password" onblur="">
                </div>
                <div class="formText">
                    <label class="">Check Password</label>
                    <input type="password" id="fcheck_password" name="check_password"
                        placeholder="Re-enter your password" onblur="">
                </div>
                <div class="formText">
                    <label class="">Email</label>
                    <input type="text" id="femail" name="email" placeholder="Enter your email" onblur="">
                </div>
                <div class="formText">
                    <label class="">Org Name</label>
                    <input type="text" id="forg_name" name="org_name" placeholder="Enter your organizations name"
                        onblur="">
                </div>
                <div class="formBtn">
                    <button type="submit" class="">Register</button>
                </div>
            </form>
        </div>
    </div>



    <script>
    $("form").submit(isFormValid);

    function isFormValid(event) {
        $(".error").remove();
        isInputFilled("name");
        isInputFilled("surname");
        isInputFilled("password");
        isInputFilled("check_password");
        isInputFilled("email");
        isInputFilled("org_name");

        let password = document.getElementById("fpassword").value;
        let checkedPassword = document.getElementById("fcheck_password").value;

        if (password !== checkedPassword) {
            $("#fcheck_password").after("<span class='error'>Passwords do not match</span>");
            event.preventDefault();
            return;
        }

        if ($(".error").length > 0) {
            event.preventDefault();
            return;
        }
        $("form").unbind("submit");
    }

    function isInputFilled(inputName) {
        let input = $("input[name=" + inputName + "]");
        if (input.val().trim() == "")
            input.after("<span class='error'>You need to fill this!</span>")

    }
    </script>
</body>

</html>