<?php include 'navbar.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Page</title>
    <link rel="stylesheet" href="css/signup.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.min.js"></script>
    <link rel="stylesheet" href="css/tooplate-style.css">
    <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    <style>
       .error {
        color: red;
       }
    </style>
   
   
</head>
<body>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form id="signup-form">
                    <div class="form-group">
                        <label for="first-name" style="color:white; font-weight:bold;">First Name:</label>
                        <input type="text" class="form-control" id="fn" name="fn">
                        <span id="fn_err" class="text-danger"></span>
                    </div>
                    <div class="form-group">
                        <label for="last-name" style="color:white; font-weight:bold;">Last Name:</label>
                        <input type="text" class="form-control" id="ln" name="ln">
                        <span id="ln_err" class="text-danger"></span>
                    </div>
                    <div class="form-group">
                        <label for="email" style="color:white; font-weight:bold;">Email address:</label>
                        <input type="email" class="form-control" id="em" name="em">
                        <span id="em_err" class="text-danger"></span>
                    </div>
                    <div class="form-group">
                        <label for="password" style="color:white; font-weight:bold;">Password:</label>
                        <input type="password" class="form-control" id="pw" name="pw">
                        <span id="pw_err" class="text-danger"></span>
                    </div>
                    <div class="form-group">
                        <label for="confirm-password" style="color:white; font-weight:bold;">Confirm Password:</label>
                        <input type="password" class="form-control" id="cpw" name="cpw">
                        <span id="cpw_err" class="text-danger"></span>
                    </div>
                    <button class="btn btn-secondary" onclick="javascript:window.location.href='index.php'" style="color:white; font-weight:bold;">Home</button>
                   <div> <br> </div>
                    <button type="submit" class="btn btn-primary" style="color:white; font-weight:bold;">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function () {
            $('#signup-form').validate({
                rules: {
                    fn: {
                        required: true,
                        minlength: 2,
                        maxlength: 30
                    },
                    ln: {
                        required: true,
                        minlength: 2,
                        maxlength: 30
                    },
                    em: {
                        required: true,
                        email: true
                    },
                    pw: {
                        required: true,
                        minlength: 5,
                        maxlength: 30
                    },
                    cpw: {
                        required: true,
                        minlength: 5,
                        maxlength: 30,
                        equalTo: "#pw"
                    }
                },
                messages: {
                   fn: {
                    required:  "Please enter your first name."
                   },
                   ln: {
                    required: "Please enter your last name."
                   },
                   em: {
                    required:"Please enter your email address."
                   },
                   pw: {
                    required:"Please enter your password."
                   },
                   cpw: {
                    required: "Please provide a password.",
                    equalTo: "Your password and confirmation password must match."
                   }
                },
                errorPlacement: function (error, element) {
                    if (element.attr('id') == "fn") {
                        $('#fn_err').html(error);
                    } else if (element.attr('id') == "ln") {
                        $('#ln_err').html(error);
                    } else if (element.attr('id') == "em") {
                        $('#em_err').html(error);
                    } else if (element.attr('id') == "pw") {
                        $('#pw_err').html(error);
                    } else if (element.attr('id') == "cpw") {
                        $('#cpw_err').html(error);
                    }
                }
            });
        });
    </script>
</body>
</html>
