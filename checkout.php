<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="images/icon.png">
    <title>Uplifters</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
}

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #1a535c;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #257480;
 
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

#container {
    background-color: white;
    width : 100% ;
    height : 200px ; 
    margin : 0 auto;
    display : flex;
    justify-content: center;
  }
  
  
  #container div {
    width : 400px;
    height : 400px;
  }

  #gmi {
      max-width: 100%;
      max-height: 100%;
  }


/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  } 
}
</style>
</head>
<body>

<section id="container">
        <div class="heart">
            <img src="images/logo.png" id="gmi">
        </div>
    </section>
<div class="row"  style="padding:35px 300px;">
  <div class="col-50">
    <div class="container" >
      <form  action="payscript.php" method="post" style="padding: 25px;">
      
        <div class="row" >
          <div class="col-25">
            <h3 style="text-align: center;margin:20px 10px;font-family: lato;">Donation Form</h3>
          

            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="name" placeholder="Enter Full Name">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="Enter Email">
            <input type="hidden" value="<?php echo 'OID'.rand(100,1000);?>" name="orderid">
            
            <label for="city"><i class="fa fa-mobile"></i> Mobile</label>
            <input type="text" id="city" name="mobile" placeholder="Enter 10 digit Mobile Number">

            <label for="amount">₹ Amount</label> 
            <input type="text" id="amount" name="amount" placeholder="Enter INR">
          
        </div>
       
        <input type="submit"  value="Pay Now" class="btn">
      </form>
    </div>
  </div>
 
</div>

</body>
</html>
