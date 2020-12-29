<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/theme.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="js/customer-form.js" type="text/javascript"></script>
    <title>Customer area</title>
</head>

<body class="m-100 h-100"> 
    <div class="d-flex flex-column flex-grow-1 h-100"> 
        <nav class="navbar navbar-light navbar-expand-md bg-white shadow-sm">
            <div class="container"><a class="navbar-brand logo" href="#">Fine Art Prints</a><button
                    data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle
                        navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav ml-auto">
                        <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="features.html">Products</a></li>
                        <li class="nav-item"><a class="nav-link" href="about-us.html">About Us</a></li>
                        <li class="nav-item"><a class="nav-link navbar-brand" href="about-us.html"><img
                                    src="./upload/icons/person-circle.svg" alt="your profile" width="32"
                                    height="32"></a>
                        </li>
                        <li class="nav-item"><a class="nav-link navbar-brand" href="about-us.html"><img
                                    src="./upload/icons/bag.svg" alt="cart" width="32" height="32"></a></li>
                    </ul>
                </div>
            </div>
        </nav>
        
        <div class="flex-grow-1 subtle-pattern">
            <main class="h-100 container-fluid px-0">
                <div class="row mx-0 mt-3">
                    <ul class="nav nav-pills col-10 col-md-5 offset-1 offset-md-1">
                        <li class="nav-item col-5 col-md-5 text-center p-0">
                          <a class="nav-link active" href="#">Profile</a>
                        </li>
                        <li class="nav-item col-5 col-md-5 text-center p-0">
                          <a class="nav-link" href="customer-orders.html">My orders</a>
                        </li>
                      </ul>
                </div>
                <div class="row mx-0 mb-4">
                    <div class="col-10 col-md-5 offset-1 offset-md-1 px-0 bg-white border mb-4">
                        <form id="personal-form" class="m-0">
                            <h2 class="text-dark pl-4 py-3">Personal information</h2>
                            <fieldset class="px-0">
                                <div class="form-group row text-center">
                                    <label for="name" class="col-5">Name:</label>
                                    <input type="text" class="form-control col-6" id="name" required/>
                                </div>
                                <div class="form-group row text-center">
                                    <label for="surname" class="col-5">Surname:</label>
                                    <input type="text" class="form-control col-6" id="surname" required/>
                                </div>
                                <div id="form-old-password" class="form-group row text-center d-none">
                                    <label for="old_password"  class="col-5">Old password</label>
                                    <input type="password" class="form-control col-6" id="old_password" required/>
                                </div>
                                <div class="invalid-feedback">
                                    Wrong password.
                                </div>
                                <div id="form-new-password" class="form-group row text-center d-none">
                                    <label for="new_password"  class="col-5"> New password</label>
                                    <input type="password" class="form-control col-6" id="new_password" required/>
                                </div>
                                <div class="invalid-feedback">
                                    Please provide a correct password.
                                </div>
                                <div id="form-confirm-password" class="form-group row text-center d-none">
                                    <label for="confirm_password"  class="col-5"> Confirm password</label>
                                    <input type="password" class="form-control col-6" id="confirm_password" required/>
                                </div>
                                <div class="invalid-feedback">
                                    Different password.
                                </div>
                                <div class="form-group row text-center">
                                    <label for="email" class="col-5">Email</label>
                                    <input type="email" class="form-control col-6" id="email" required/>
                                </div>
                                <div class="form-group row text-center">
                                    <label for="phone"  class="col-5">Phone</label>
                                    <input type="number" class="form-control col-6" id="phone" required/>
                                </div>
                                <div class="form-group row text-center">
                                    <label for="city"  class="col-5">City</label>
                                    <input type="text" class="form-control col-6" id="city" required/>
                                </div>
                                <div class="form-group row text-center">
                                    <label for="address"  class="col-5">Address</label>
                                    <input type="text" class="form-control col-6" id="address" required/>
                                </div>
                                <div class="form-group row text-center">
                                    <label for="postal_code"  class="col-5">Postal Code</label>
                                    <input type="number" class="form-control col-6" id="postal_code" required/>
                                </div>
                                <div class="form-group row text-center">
                                    <label for="birth_date" class="col-5">Birth date</label>
                                    <input type="date" class="form-control col-6" id="birth_date" required/>
                                </div>
                            </fieldset>
                            <div class="form-group col-12">
                                <button id="edit" type="button" class="btn btn-primary col-4 col-md-4 offset-4 p-2">Edit</button>
                                <button id="cancel" type="submit" class="btn btn-primary col-4 col-md-4 offset-2 p-2 d-none">Cancel</button>
                                <button id="save" type="submit" class="btn btn-primary col-4 col-md-4 p-2 d-none">Save</button>
                            </div>
                        </form>      
                    </div>
                    <div class="aside col-10 col-md-5 offset-1 offset-md-0 px-0 mb-4 bg-white border">
                        <h2 class="text-dark pl-4 py-3 col-md-12">Payment information</h2>
                        <div class="row p-3">
                            <div class="col-12 col-md-12">
                                <table class="table table-bordered text-center table-responsive">
                                    <tr>
                                        <th id="owner">Owner</th><th id="last_digits">Last 4 digits</th><th id="expire date">Expire Date</th><th id="expire date">Action</th>
                                    </tr>
                                    <tr>
                                        <th id="biro">Biro Biro</th><td headers="digits birobiro">2483</td><td headers="expdate birobiro">12/20</td><td headers="action biro biro"><a class="btn btn-primary border col-md-12" href="#">Remove</a></td>
                                    </tr>
                                    <tr>
                                        <th id="biro">Giangiacomo Biro</th><td headers="digits birobiro">2483</td><td headers="expdate birobiro">12/20</td><td headers="action biro biro"><a class="btn btn-primary border col-md-12" href="#">Remove</a></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="row px-3">
                            <form class="col-10 offset-1 px-3 border">
                                <fieldset class="px-0 mb-2">
                                    <legend class="m-0">Add credit card</legend>
                                    <div class="form-group row mt-3">
                                        <label for="name" class="col-10 offset-1">Name:</label>
                                        <input type="text" class="form-control col-10 offset-1" id="name" required/>
                                    </div>
                                    <div class="form-group row">
                                        <label for="postal_code"  class="col-10 offset-1">Number</label>
                                        <input type="number" class="form-control col-10 offset-1" id="postal_code" required/>
                                    </div>
                                    <div class="form-group row">
                                        <label for="expire_date" class="col-10 offset-1">Expire date</label>
                                        <input type="date" class="form-control col-10 offset-1" id="expire_date" required/>
                                    </div>
                                    <div class="form-group text-center col-6 col-md-6 offset-3 offset-md-3">
                                        <button type="submit" class="btn btn-primary col-12 col-md-12 p-2">Add</button>
                                    </div>
                                </fieldset>
                            </form>    
                        </div>  
                    </div>
                </div>
            </main>
        </div>
        <div class="row m-0">
            <footer class="col-12 col-md-12 px-0 bg-dark py-3">
                <ul class="nav text-center">
                    <li class="col-3 col-md-3 nav-item mt-2 px-5"><a class="nav-link text-center text-white bg-dark" href="contatti.html">Contacts</a></li>
                    <li class="col-3 col-md-3 nav-item mt-2"><img src="./upload/icons/facebook.svg" alt=""/></li>
                    <li class="col-3 col-md-3 nav-item mt-2"><img src="./upload/icons/twitter.svg" alt=""/></li>
                    <li class="col-3 col-md-3 nav-item mt-2"><img src="./upload/icons/instagram.svg" alt=""/></li>
                </ul>
            </footer>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>
</body>
</html>
    