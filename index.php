<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	
</head>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-route.js"></script>
<script src="app/controllers/postController.js"></script>

<body ng-app="insert">
    <nav class="navbar navbar-expand-sm  navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand"href="#"><h2>WELCOME</h2></a>
            <div class="collpase navbar-collapse">
                    <ul class="navbar-nav ml-auto">

                        <li class="nav-item">
                             <a class="nav-link" href="#!about" class="btn btn-out">About</a>
                            </li>
                    
                    
                           </ul>
            </div>
    </div>
    </nav><br>

    

    <div class="container dcol" style="width:500px;" ng-controller="ctrl">
       
        <div class="row">
            <div class="col-mid-3 login-p" >
   
        <h1>Enter Your Details</h1>

        <form>
         <label for="name">Name</label>
         <input   class="form-control" type="text"  name="name" ng-model="name"  placeholder="Enter your Name" required/><br><br>
         <label for="mail">Email</label>
        <input  class="form-control" type="email" name="email" ng-model="email" placeholder="Enter your Email"  required /><br><br>
        <label for="age">Age</label>
        <input   class="form-control" type="number" name="age" ng-model="age" required><br><br>
        <button type="submit" class="btn btn-primary" name="submit" ng-click="enter()">Submit</button>
        </form>
    </div>
</div>
</div>




    
</body>
</html>