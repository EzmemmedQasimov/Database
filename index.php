<?php require_once "code.php"; ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Form</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css"
        integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">

</head>

<body>



    <form action="#" method="POST">


        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6">
                    <img id="left" src="img/leftside.png" alt="1" />
                </div>
                <div id="form" class="col-md-6">


                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-8">
                            <input type="text" name="name" placeholder="Luke Skywalker" onchange="UpperA()"
                                required="required" pattern="[A-Za-z  Öö Ğğ üÜ Əə Iı Çç Şş]{3,}" class="form-control"
                                id="name" />
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="gender" class="col-sm-2 col-form-label">Gender</label>
                        <div class="col-sm-8">

                            <input type="radio" name="gender" value="Male" data-icon='' id="male" />
                            <label for="male" style="margin-left: 7px; margin-right: 35px">Male</label>
                            <input type="radio" name="gender" value="Female" data-icon='' id="female" />
                            <label for="female" style="margin-left: 7px;">Female</label>



                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="birth" class="col-sm-2 col-form-label">
                            <p id="date">Date of Birth</p>
                        </label>
                        <div class="col-sm-8">
                            <input class="form-control" name="birth" required min="1970-08-18" max="2002-08-18" placeholder="May 25, 1977" class="textbox-n"
                                type="text" onfocus="(this.type='date')" id="birth">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-8">
                            <input type="email" name="email" required="required" placeholder="lukeskywalker@galaxy.com"
                                class="form-control" id="email" />
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="city" class="col-sm-2 col-form-label">City</label>
                        <div class="col-sm-8">
                            <input type="text" name="city" pattern="[A-Za-z  Öö Ğğ üÜ Əə Iı Çç Şş]{3,}" onchange="UpperC()" required="required"
                                placeholder="Moisture Farm" class="form-control" id="city" />
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="country" class="col-sm-2 col-form-label">Country</label>
                        <div class="col-sm-8">
                            <input type="text" pattern="[A-Za-z  Öö Ğğ üÜ Əə Iı Çç Şş]{3,}" onchange="UpperCoun()" required="required" name="country"
                                placeholder="Tatooine" class="form-control" id="country" />
                        </div>
                    </div>

                    <div style="margin-top: 40px;" class="form-group row">
                        <label id="sub" for="sub" class="col-sm-2 col-form-label">Subscription</label>
                        <div class="col-sm-8">
                            <button disabled 
                                style="border: none; cursor: pointer; margin-left: 40px; border-radius: 0; background-color: #fff; color: #fbb03b;">Bronze</button>
                            <button disabled
                                style="border: none; cursor: pointer; margin-left: 40px; border-radius: 0; background-color: #fff; color: #998675;">Silver</button>
                            <button disabled
                                style="border: none; cursor: pointer; margin-left: 40px; border-radius: 0; background-color: #fff; color: #fcee21;">Gold</button>
                        </div>
                    </div>


                    <button name="cancel" style="height: 40px; margin-left: 100px; width: 200px; border: none;border-radius: 2px; background-color: #f5f8f8;color: #818587;">Cancel</button>
                    <button id="save" name="send" style="height: 40px; width: 200px; border: none;border-radius: 2px; background-color: #94eb75; color: #fff;">Save</button>




                </div>
            </div>

        </div>



    </form>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="script.js"></script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"></script>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
        <script>

onload = function() {
            Status();
        }

            function UrlParam() {
            var url_string = window.location.href;
            var url = new URL(url_string);
            return url.searchParams.get("status");
        }

        function Status() {
            if (UrlParam() == "ok") {
                swal("Əla!", "Əməliyyat uğurla icra edildi!", "success");
            }
            if (UrlParam() == "no") {
                swal("Təəssüf!", "Əməliyyat icra edilmədi!", "error");
            }

            if (UrlParam() != null) {
                setTimeout(Yonlendir, 2000);
            }
           

        }

        function Yonlendir() {
            location.href = "index.php";
        }
        </script>

</body>

</html>