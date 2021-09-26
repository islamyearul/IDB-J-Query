<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Hello, world!</title>
</head>

<body>

    <div class="container p-5">
        <h2>Registration Form</h2>
        <form action="action.php" id="myform" method="POST" >
            <div class="form-group">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" id="name" class="form-control">
                <span id="name_err" class="text-danger"></span>
            </div>

            <div class="form-group">
                <label for="email" class="form-label">Email</label>
                <input type="text" name="email" id="email" class="form-control">
                <span id="email_err" class="text-danger"></span>
            </div>

            <div class="form-group">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" id="password" class="form-control">
                <span id="pass_err" class="text-danger"></span>
            </div>

            <div class="form-group">
                <label for="phone" class="form-label">Phone Number</label>
                <input type="tel" name="phone" id="phone" class="form-control">
                <span id="phone_err" class="text-danger"></span>
            </div>

            
            <br>

            <div class="form-group">
                <label for="" class="form-label">Gender :</label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" class="inlineRadio" value="Male">
                    <label class="form-check-label" for="inlineRadio1">Male</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" class="inlineRadio" value="Female">
                    <label class="form-check-label" for="inlineRadio2">Female</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" class="inlineRadio" value="Other">
                    <label class="form-check-label" for="inlineRadio3">Other</label>
                </div>
            <br>
                <span id="gender_err" class="text-danger"></span>
            </div>

            <div class="form-group">
                <label for="language" class="form-label">Language :</label>
                <select class="form-select" name="language" id="language">
                    <option selected disabled>select menu</option>
                    <option value="1">Bangla</option>
                    <option value="2">English</option>
                    <option value="3">Arabic</option>
                </select>

                <span id="language_err" class="text-danger"></span>
            </div>

            <div class="form-group">
                <label for="zip" class="form-label">Zip Code</label>
                <input type="number" name="zip" id="zip" class="form-control">
                <span id="zip_err" class="text-danger"></span>
            </div>

            <div class="form-group">
                <label for="about" class="form-label">About</label>
                <textarea name="about" id="about" class="form-control"></textarea>
                <span id="about_err" class="text-danger"></span>
            </div>
            <br>
            <div class="form-group">

                <!-- <button type="button" id="btn" class="btn btn-primary"> Submit</button> -->
                <input type="submit" value="Submit" name="btn" id="btn" class="btn btn-primary"> 
            </div>


        </form>
    </div>


    <script>
        $(document).ready(function() {
            $("#btn").click(function() {
                name();
                email();
                pass();
                phone();
                gender();
                language();
                zip();
                about()

                if(validName==false || valiEmail==false || valiPass==false || valiPhone==false){
                    return false;
                }else{
                    return true;
                }

               
            })

            $("#name").keyup(function(){
                name()
            })

            var validName = true;
            function name() {
               
                var name = $("#name").val();

                if (name.length < 8) {

                    $("#name_err").text("Name Must be minimum 8 charecter");
                    validName= false;
                } else {
                    $("#name_err").text("");
                    validName= true;
                }
                

            }
            var valiEmail = true;
            $("#email").keyup(function(){
                email()
            })

            function email() {
                var email = $("#email").val();

                var pattern = /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i

                if (!pattern.test(email)) {
                    $("#email_err").text("Please enter a valid email");
                    valiEmail= false;
                }else{
                    $("#email_err").text("");
                    valiEmail= true;
                }

            }

            var valiPass = true;

            $("#password").keyup(function(){
                pass()
            })

            function pass() {
                var pass = $("#password").val();

                if (pass.length < 8) {
                    $("#pass_err").text("password Must be minimum 8 charecter");
                    valiPass= false;
                } else {
                    $("#pass_err").text("");
                    valiPass= true;
                }

            }
            var valiPhone = true;
            $("#phone").keyup(function(){
                phone()
            })

            function phone() {
                var phone = $("#phone").val();
                var numberReg = /^[0-9]+$/;

                if (!numberReg.test(phone)) {
                    $("#phone_err").text("Phone must be number");
                   
                    valiPhone= false;
                }else if (phone.length < 11){
                    $("#phone_err").text("Name Must be minimum 11 charecter");
                    valiPhone= false;
                } else {
                    $("#phone_err").text("");
                    valiPhone= true;
                }

            }

            function gender() {
                var gender = $("input[type='radio']:checked").val();

                if (!gender) {
                    $("#gender_err").text("Please select Gender");
                    return false;
                } else {
                    return true;
                }

            }

            function language() {
                var language = $("#language").val();

                if (language==null) {
                    $("#language_err").text("Please select Language");
                    return false;
                } else {
                    return true;
                }

            }

            function zip() {
                var zip = $("#zip").val();

                if (zip=="") {
                    $("#zip_err").text("Please Enter your zip code");
                    return false;
                } else {
                    return true;
                }

            }

            function about() {
                var about = $("#about").val();

                if (about=="") {
                    $("#about_err").text("Please Enter Some text about you");
                    return false;
                } else {
                    return true;
                }

            }


        })
    </script>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
</body>

</html>