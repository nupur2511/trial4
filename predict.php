<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>custom Website</title>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Roboto:700&display=swap');
*{
	padding: 0;
	margin: 0;
}
body{
	background-image: url(back.jpg) no-repeat;
	background-size: cover;
	height: 100vh;
}
.navbar{
	position: fixed;
	height: 80px;
	width: 100%;
	top: 0;
	left: 0;
	background: rgba(0,0,0,0.4);
}
.navbar .logo{
	width: 300px;
	height: 50px;
	padding: 20px 100px;
}
.navbar ul{
	float: right;
	margin-right: 20px;
}
.navbar ul li{
	list-style: none;
	margin: 0 8px;
	display: inline-block;
	line-height: 80px;
}
.navbar ul li a{
	font-size: 20px;
	font-family: 'Roboto', sans-serif;
	color: white;
	padding: 6px 13px;
	text-decoration: none;
	transition: .4s;
}
.navbar ul li a.active,
.navbar ul li a:hover{
	background: rgb(55, 2, 153);
	border-radius: 2px;
}
.wrapper .center{
	position: absolute;
	left: 50%;
	top: 55%;
	transform: translate(-50%, -50%);
	font-family: sans-serif;
	user-select: none;
}
.center h1{
	color: white;
	font-size: 60px;
	width: 900px;
	font-weight: bold;
	text-align: center;
}
.center h2{
	color: #ffffff;
	font-size: 30px;
	font-weight: bold;
	margin-top: 50px;
	width: 885px;
	text-align: center;
}
#section1{
	min-height:70px;
	
	text-align: left;
	color: rgb(250, 250, 250);
	
}

#section1 h1 {
	color: rgb(247, 244, 244);
	letter-spacing: 0.05cm;
	font-size: 35px;
	font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
	margin-left: 20px;
	padding-top: 50px;
}

#section1 p {
	font-size: 20px;
	font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
	margin-left: 20px;
	padding-top: 0px;
}
#section2{
	min-height:20px;
	
	text-align: left;
	color: rgb(250, 250, 250);
	
}

#section2 h1 {
	color: rgb(247, 244, 244);
	letter-spacing: 0.05cm;
	font-size: 35px;
	font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
	margin-left: 20px;
	padding-top: 20px;
}

#section2 p {
	font-size: 20px;
	font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
	margin-left: 20px;
	padding-top: 0px;
}

#section3{
	min-height: 600px;
	text-align: left;
	color: rgb(250, 250, 250);
	
}

#section3 h1 {
	color: rgb(247, 244, 244);
	letter-spacing: 0.05cm;
	font-size: 35px;
	font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
	margin-left: 20px;
	padding-top: 100px;
}

#section3 p {
	font-size: 20px;
	font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
	margin-left: 20px;
	padding-top: 50px;
}

#section4{
	min-height: 600px;
	text-align: left;
	color: rgb(250, 250, 250);
	margin-top:100px
	
}
#section5{
	min-height: 700px;
	text-align: center;
}
    </style>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="{{url_for('static',filename='css/style.css')}}"/>
    </head>
    <body style="background-image: url('bg6.jpg');background-repeat: no-repeat;background-size: cover;"></body>
        <div class="wrapper">
            <nav class="navbar">
                <img class="logo" src="logo.PNG" alt="logo.PNG">
                <ul>
                    <li><a href="home.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a class="active" href="predict.php">Prediction</a></li>
                   <!----- <li><a href="index.html">Login</a></li>--->
                </ul>
            </nav>
            <section id="section4">
                <div class="container">
                    <div class="form-group">
                        <center><h1>View Predicted Crime</h1></center>
                        <div align="center">
                            <form action = "{{ url_for('predict') }}" method = "POST">
                                <input type="text" name="Location" placeholder="Enter Location"><br>
                                <input type="datetime-local" class="form-control" name="timestamp" step="1"><br>
                                <input type="submit" value="Predict" class="btn btn-primary">
                                <input type="reset" value="Reset Data" class="btn btn-primary">
                            </form>
                        </div>
                    </div>
                    <div align="center">
                        <form action = "{{ url_for('predict') }}" method = "POST">
                            <h1>{{ prediction }}</h1>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </body>
</html>
