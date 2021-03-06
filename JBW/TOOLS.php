<!DOCTYPE html>
<html lang="en">
<head>
    <title>TOOLS</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="TOOLS-CSS.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="JS_tools.js"></script>
</head>
<body>
    <!---------------------NAV BAR------------------------->
    <div class="menu-bar">
        <nav class="navbar navbar-expand-lg navbar-dark stic">
            <a class="navbar-brand custom-brand" style="text-align: left;"><img src="LOGO.png"></a>
            <a class="navbar-brand custom-brand name" style="text-align: left;">JBW FILE MANAGEMENT SYSTEM</a>
            <button class="navbar-toggler" style="cursor: default;" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
        </nav>
    <!-----------------------CARD---------------------------->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-1 ml-2 mt-2">
                <a href="REQUEST.php"><img src="21.png" style="height: 70px; padding-left: 10px;"/></a>
            </div>
            <div class="card col-md-7 mt-3 mx-auto p-0" style="height: 600px; border-radius: 10px; box-shadow: 0px 0px 10px 0px #000; font-weight: bold;">
                <div class="card-header">
                    <div class="text-center">
                        TOOLS
                    </div>
                </div>
                <div class="card-body">
                    <div class="container table">
                        <table id="customers">
                            <tr>
                            <th>QUANTITY</th>
                            <th>UNIT</th>
                            <th>DESCRIPTION</th>
                            </tr>
                            <tr contenteditable="true">
                            <td><br></td>
                            <td><br></td>
                            <td><br></td>
                            </tr>
                        </table>
                        <button class="btn fas fa-plus-circle" id="add"></button>
                        <div class="text-right">
                            <button type="button" class="btn btn-primary col-sm-2 mt-1" onclick="error()" >DONE</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </script>
</body>
</html>