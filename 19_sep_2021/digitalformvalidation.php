<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="jquery.js"></script>
    <script type="text/javascript" src="validate_script.js"></script>
    <link rel="stylesheet" type="text/css" href="validate_style.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js">
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
    body {
        margin: 0px, auto;
        padding: 0px;
        font-family: helvetica;
        background-color: #D8CEF6;
    }

    #wrapper {
        width: 995px;
        padding: 0px;
        margin: 0px auto;
        font-family: helvetica;
        text-align: center;
    }

    form {
        margin-left: 300px;
        width: 400px;
        margin-top: 20px;
        padding: 20px;
        background-color: #9F81F7;
        border-radius: 3px;
    }

    td {
        max-width: 250px;
        color: white;
        font-weight: bold;
    }

    input[type="text"],
    input[type="password"] {
        width: 200px;
        height: 35px;
        border-radius: 3px;
        padding-left: 5px;
        border: 1px solid silver;
    }

    .error_text {
        margin: 0px;
        color: #DF013A;
        font-weight: normal;
        font-size: 14px;
    }

    input[type="submit"] {
        background: none;
        border: none;
        background-color: #8000FF;
        color: white;
        width: 100px;
        height: 35px;
        border-radius: 3px;
        font-size: 16px;
        margin-top: 20px;
    }
    select{
        width: 210px;
        height: 40px;
    }
    </style>
    <title>Document</title>
</head>

<body>
    <div id="wrapper">
        <form onsubmit="return check_form();">
            <table align='center' cellspacing=5 cellpadding=10>

                <tr>
                    <td>First Name</td>
                    <td>
                        <input type="text" id="fname" placeholder="First Name" onblur="check_fname();">
                        <br>
                        <span class='error_text' id='fname_error'></span>
                    </td>
                </tr>

                <tr>
                    <td>Last Name</td>
                    <td>
                        <input type="text" id="lname" placeholder="Last Name" onblur="check_lname();">
                        <br>
                        <span class='error_text' id='lname_error'></span>
                    </td>
                </tr>

                <tr>
                    <td>Email Id</td>
                    <td>
                        <input type="text" id="email" placeholder="Email Id" onblur="check_email();">
                        <br>
                        <span class='error_text' id='email_error'></span>
                    </td>
                </tr>

                <tr>
                    <td>Password</td>
                    <td>
                        <input type="password" id="pass" placeholder="*******" onblur="check_pass();">
                        <br>
                        <span class='error_text' id='pass_error'></span>
                    </td>
                </tr>

                <tr>
                    <td>Retype Password</td>
                    <td>
                        <input type="password" id="repass" placeholder="*******" onblur="check_repass();">
                        <br>
                        <span class='error_text' id='repass_error'></span>
                    </td>
                </tr>

                <tr>
                    <td>Country</td>
                    <td>
                        <select name="" id="country" onblur="check_country()">
                        <option value="" selected disabled>--Select One--</option>
                            <option value="1">Bangladesh</option>
                            <option value="2">Noakhali</option>
                            <option value="3">Barishal</option>
                            <option value="4">Sekh hachina</option>
                        </select>
                        <!-- <input type="text" id="country" placeholder="Country" onblur="check_country();"> -->
                        <br>
                        <span class='error_text' id='country_error'></span>
                    </td>
                </tr>
                <tr>
                    <td>Gender</td>
                    <td>
    
                        <input type="radio" class="gender" value="m" name="gender" id="" onblur="check_gender()">Male
                        <input type="radio" class="gender" value="f" name="gender" id="gender" onblur="check_gender()">FeMale
                        <!-- <input type="text" id="country" placeholder="Country" onblur="check_country();"> -->
                        <br>
                        <span class='error_text' id='gender_error'></span>
                    </td>
                </tr>
            </table>

            <input type="submit" value="SUBMIT" >
        </form>
    </div>

</body>

</html>

<script>
    
var ok = 0;
function check_fname() {
    var f_val = $("#fname").val();
    if (f_val == "") {
        $("#fname").css({
            "border": "1px solid red"
        });
        $("#fname_error").text("First Name Must Be Filled!");
        $("#fname_error").css({
            "margin-top": "5px"
        });
    } else {
        $("#fname").css({
            "border": "1px solid grey"
        });
        $("#fname_error").text("");
        $("#fname_error").css({
            "margin-top": "0px"
        });
        ok++;
    }
}

function check_lname() {
    var l_val = $("#lname").val();
    if (l_val == "") {
        $("#lname").css({
            "border": "1px solid red"
        });
        $("#lname_error").text("Last Name Must Be Filled!");
        $("#lname_error").css({
            "margin-top": "5px"
        });
    } else {
        $("#lname").css({
            "border": "1px solid grey"
        });
        $("#lname_error").text("");
        $("#lname_error").css({
            "margin-top": "0px"
        });
        ok++;
    }
}

function check_email() {
    var email_val = $("#email").val();
    if (email_val == "" || email_val.indexOf("@") == -1 || email_val.indexOf(".") == -1) {
        $("#email").css({
            "border": "1px solid red"
        });
        $("#email_error").text("Email Must Be Filled And Valid!");
        $("#email_error").css({
            "margin-top": "5px"
        });
    } else {
        $("#email").css({
            "border": "1px solid grey"
        });
        $("#email_error").text("");
        $("#email_error").css({
            "margin-top": "0px"
        });
        ok++;
    }
}

function check_pass() {
    var pass_val = $("#pass").val();
    if (pass_val == "" || pass_val.length < 8) {
        $("#pass").css({
            "border": "1px solid red"
        });
        $("#pass_error").text("Password Must Be Filled And Greater Or Equal To 8!");
        $("#pass_error").css({
            "margin-top": "5px"
        });
    } else {
        $("#pass").css({
            "border": "1px solid grey"
        });
        $("#pass_error").text("");
        $("#pass_error").css({
            "margin-top": "0px"
        });
        ok++;
    }
}

function check_repass() {
    var repass_val = $("#repass").val();
    if (repass_val == "" || repass_val != $("#pass").val()) {
        $("#repass").css({
            "border": "1px solid red"
        });
        $("#repass_error").text("Password Must Be Filled And Matched With Above!");
        $("#repass_error").css({
            "margin-top": "5px"
        });
    } else {
        $("#repass").css({
            "border": "1px solid grey"
        });
        $("#repass_error").text("");
        $("#repass_error").css({
            "margin-top": "0px"
        });
        ok++;
    }
}

function check_country() {
    var country_val = $( "#country option:selected" ).text();
    if (country_val == "") {
        $("#country").css({
            "border": "1px solid red"
        });
        $("#country_error").text("Country Must Be Select!");
        $("#country_error").css({
            "margin-top": "5px"
        });
    } else {
        $("#country").css({
            "border": "1px solid grey"
        });
        $("#country_error").text("");
        $("#country_error").css({
            "margin-top": "0px"
        });
        ok++;
    }
}
function check_gender() {

    var country_val = $("input[name='gender']:checked").val();
    if (country_val == "") {
   
        $("#gender_error").text("Country Must Be Filled!");
        $("#gender_error").css({
            "margin-top": "5px"
        });
    } else {
        $("#gender").css({
            "border": "1px solid grey"
        });
        $("#gender_error").text("");
        $("#gender_error").css({
            "margin-top": "0px"
        });
        ok++;
    }
}

function check_form() {
    if (ok == 7) {
        $(":submit").removeAttr("disabled");
        return true;
    } else {
        alert("Error! Check All The Fields " + ok);
        return false;
    }
}
</script>