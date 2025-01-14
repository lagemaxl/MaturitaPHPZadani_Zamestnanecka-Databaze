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
        <h3>Login</h3>
        <p class="blue-text">If cant login, try to <a href="index.php">register</a>.</p>
        <div class="card">
            <form method="POST" action="logincheck.php">
                <div class="formText">
                    <label class="">Email</label>
                    <input type="text" id="femail" name="email" placeholder="Enter your email" onblur="">
                </div>
                <div>
                    <label class="">Password</label>
                    <input type="password" id="fpassword" name="password" placeholder="Enter your password" onblur="">
                </div>

                <div class="formBtn">
                    <button type="submit" class="">Login</button>
                </div>
            </form>
        </div>
    </div>



    <script>
    $("form").submit(isFormValid);

    function isFormValid(event) {
        event.preventDefault(); // prevent default form submission behavior
        $(".error").remove();
        isInputFilled("email");
        isInputFilled("password");




        if ($(".error").length > 0) {} else {
            $("form").unbind("submit");
        }
    }


    function isInputFilled(inputName) {
        let input = $("input[name=" + inputName + "]");
        if (input.val().trim() == "")
            input.after("<span class='error'>You need to fill this!</span>")

    }

    </script>
</body>

</html>