<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

		<link rel="stylesheet" type="text/css" href="css/style.css">
	
</head>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-route.js"></script>

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
    </nav>

    

    <div class="container dcol" style="width:500px;" ng-controller="controller">
       
        <div class="row">
            <div class="col-mid-3 login-p" >
   
        <h1>Enter Your Details</h1>

        <form>
         <label for="name">Name</label>
         <input class="form-control" type="text"  name="name" ng-model="name"  placeholder="Enter your Name" required/><br><br>
         <label for="mail">Email</label>
        <input class="form-control" type="email" name="email" ng-model="email" placeholder="Enter your Email"  required /><br><br>
        <label for="age">Age</label>
        <input class="form-control" type="number" name="age" ng-model="age" required><br><br>
        <label for="time">Time</label>
        <input class="form-control" type="time" name="time" ng-model="time" required><br><br>
        <button type="submit" class="btn btn-primary" name="submit" ng-click="insert()">Submit</button>
        </form>
    </div>
</div>
</div>



<script src="app/controllers/ctrl.js"></script>

    
</body>
</html>
