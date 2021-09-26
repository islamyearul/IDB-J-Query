<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <style>
            .error{
                color: red;
                font-size: 20px;;
                font-family: Arial, Helvetica, sans-serif;
            }
        </style>

    <title>Document</title>
</head>

<body>
    <div class="container my-5">
        <div class="row">
            <span class="error"></span>
            <form action="" method="post">

                <input type="text" name="name" placeholder="name" id="name"><br><br>
                <input type="text" name="company" placeholder="Company" id="companyInput"><br><br>
                <input type="email" name="email" placeholder="email" id="email"><br><br>
                <!-- <input type="password" name="password" placeholder="password" id="pass"><br><br> -->
                <input type="number" name="phone" id="phone" placeholder="Phone"><br><br>
                <!-- <label for="gender">Gender</label>
                <input type="radio" name="gender" value="male">Male
                <input type="radio" name="gender" value="female">Female <br><br> -->
                <!-- <label for="">Language </label>
                <select name="language" id="language">
                    <option value="" selected disabled>--Select One--</option>
                    <option value="Bangla">Bangla</option>
                    <option value="Bangla">English</option>
                </select><br><br> -->
                <!-- <input type="number" name="zip" id="" placeholder="Zip Code"><br><br> -->
                <textarea name="message" id="message" cols="30" rows="2" placeholder="Message"></textarea><br><br>
                <input type="submit" name="submit" id="submit" value="Submit">

            </form>
        </div>
    </div>
</body>

</html>
<script>
$(document).ready(function() {

    $('#submit').click(function() {
        validateForm();
    });

    function validateForm() {
        var ok = 0;
        var nameReg = /^[A-Za-z]+$/;
        var numberReg = /^[0-9]+$/;
        var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;


        var names = $('#name').val();
        var company = $('#companyInput').val();
        var email = $('#email').val();
        var telephone = $('#phone').val();
        var message = $('#message').val();

        var inputVal = new Array(names, company, email, telephone, message);

        var inputMessage = new Array("name", "company", "email address", "telephone number", "message");

        $('.error').hide();

        if (inputVal[0] == "") {
            $('#name').after('<span class="error"> Please enter your ' + inputMessage[0] + '</span>');
        } else if (!nameReg.test(names)) {
            $('#name').after('<span class="error"> Letters only</span>');
        }else{
            ok++;
        }

        if (inputVal[1] == "") {
            $('#companyInput').after('<span class="error"> Please enter your ' + inputMessage[1] + '</span>');
        }else{
            ok++;
        }

        if (inputVal[2] == "") {
            $('#email').after('<span class="error"> Please enter your ' + inputMessage[2] + '</span>');
        } else if (!emailReg.test(email)) {
            $('#email').after('<span class="error"> Please enter a valid email address</span>');
        }else{
            ok++;
        }

        if (inputVal[3] == "") {
            $('#phone').after('<span class="error"> Please enter your ' + inputMessage[3] + '</span>');
        } else if (!numberReg.test(telephone)) {
            $('#phone').after('<span class="error"> Numbers only</span>');
        }else{
            ok++;
        }

        if (inputVal[4] == "") {
            $('#message').after('<span class="error"> Please enter your ' + inputMessage[4] + '</span>');
        }else{
            ok++;
        }


        if (ok == 5) {
       // $(":submit").removeAttr("disabled");
        return true;
    } else {
       // alert("Error! Check All The Fields " + ok);
        return false;
    }
    }

});
</script>