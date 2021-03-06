

<!DOCTYPE html>
<html lang="en">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>EMAIL</title>
  </head>

  <style>
* {
    margin: 0px;
    padding: 0px;
}

body {
    background-image: url(image.jpg);
    background-attachment: fixed;
    background-size: cover;
}
.navbar-nav{
    text-align: right;
    margin-right: 20;
    
}
.navbar .navbar-brand{
    color: rgb(0, 0, 0);
    font-size: 30px;
    -webkit-text-fill-color: rgb(255, 255, 255);
    -webkit-text-stroke-width:.5px;
}
.navbar .navbar-toggler{
    color:rgb(255, 255, 255);
}
.navbar-brand img{
    width: 80px;
    height: 70px;
    margin-top: 2px;
    margin-right: 20px;
    color: white;
    font-size: 20px;
}
.navbar{
    background-color: #0f617a! important;
    z-index: 2;
}
.navbar .navbar-nav li a{
    color: #fff;
}
.nav-link{
    font-size: 20px;
    margin: 3px;
    color: white;
    font-weight: 500;
    z-index: 1;

}
.van:hover{
    font-weight: 600;
    border: 1px solid #fff;
    border-width: auto;

    
}
.navbar .nav-item .dropdown-menu .dropdown-item:hover{
    color : rgb(0, 0, 0)! important;
    background-color: rgb(255, 255, 255);
    border: 1px solid #fff;
    opacity: 1;
    transition: .2s ease-in;
    
}
.navbar .nav-item .dropdown-menu {
    color : rgb(0, 0, 0)! important;
    background-color: rgb(0, 0, 0);
    border: 1px solid #fff;
    opacity: 1;
    transition: .2s ease-in;
}

.nav-item-dropdown{
    background-color: rgb(255, 255, 255);
    transition: .2s ease-in;
    

}

.img23 {
    width: 10px ;
    height: 20%;
}



@media screen and (max-width: 767px){
    .name{
    display: none!important;

}
}

  </style>

<body style="background-color: skyblue;">
    <div class="menu-bar">
        <nav class="navbar navbar-expand-lg navbar-dark stic">
            <a class="navbar-brand"><img src="LOGO.png"></a>
            <a class="navbar-brand custom-brand name" style="text-align: left; font-family:Arial, Helvetica, sans-serif; font-size: xx-large font;">JBW FILE MANAGEMENT SYSTEM</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
      
        
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="EMAIL.php"><i class="fas fa-sync-alt mr-1" style="font-size: 36px"></i></a>
                </li>
                <li class="nav-item">
                    <a href="#"><i class="far fa-bell mr-1" style="font-size: 36px"></i></a>
                </li>
            </ul>
            
          </div>
      </nav>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-1 ml-2">
                <a href="MAIN_WINDOW.php"><img src="21.png" style="height: 70px;"/></a>
            </div>
            <div class="container">
                <div class="row p-0 p-sm-1 p-md-2 p-lg-4">
                    <div class="card col-md-4 mt-2" style="border: 2px solid black;">
                        <div class="card-header text-center" style="background-color: rgb(51, 125, 223);">
                            Email Address
                        </div>
                        <form>
                            <div class="form-group mt-1">
                            <select multiple class="form-control" id="exampleFormControlSelect2" size="20">
                                <option>adrianmalos@gmail.com</option>
                                
                            </select>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-1"></div>
                    <div class="card col-md-7 mt-2" style="border: 2px solid black;" >
                        <div class="card-header text-center" style="background-color: rgb(51, 125, 223);">
                            Preview
                        </div>
                        <form>
                            <div class="img23">
                                <img src="purchasing-order.PNG" style="height: 500px; padding-right: 100%;"> 
                            </div> 
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>


</html>
