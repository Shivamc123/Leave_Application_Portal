<?php
?>
<html>
<head>
	<title>leave application</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	
    <style>
          
           
            ul {
                 list-style-type: none;
                 margin: 0;
                 padding: 0;
                 overflow: hidden;
                 background-color: #BDB76B;
            }

            li {
                 float: left;
            }

            li a {
                 display: block;
                 color: white;
                 text-align: center;
                 padding: 5px 5px;
                 text-decoration: none;
            }

            li a:hover {
                 background-color: #FFF00;
            }
            .right {
                 position: absolute;
                 right: 50px;
                 width: 100px;
                 
            }
</style>
</head>
<body>
    
    
		
	
 		<!--<form action="../../login.php" method="post">
               
		<fieldset>
					<input type="submit" id="log" name="submit" value="logout">
				</fieldset>
		</form>-->
		<div id="container" >
			<form id="contact"  action="submit.php" method="post">
                <div>
            <ul>
                
                <li><a class="active" href="../leave_history.php">Leave history</a></li>
               
                
               
                <li><a href="../../login.php" class=right>Logout</a></li>
            </ul>

        </div>
               
				<h3 style="color:blue;">ENTER YOUR DETAILS</h3>
				<table style="width:100%">
                                <fieldset>
					<tr>
					<th><label>Name:</label></th>
					<td>
					<input type="text" name="name" placeholder="Enter your name"/></td>
				
				</fieldset>
                                <fieldset>
					
					<th><label>id:</label></th>
					<td>
					<input type="text" name="id" placeholder="Enter your id"/></td>
				</tr>
				</fieldset>	
				<fieldset>
					<tr>
						<th><label>from date:</label></th>
						<td><input type="date" id="d1" name="from_date"/><br>
						<!--<input type="submit" value="submit">--></td>
				
				</fieldset>
				<fieldset>
				
					<th>
					<label>to date:</label></th>
					<td><input type="date" id="d2" name="to_date"/><br>
					<!--<input type="submit" value="submit">--></td>
					</tr>
				</fieldset>
				<fieldset>
					<tr>
					<th>
					<label>leave type</label></th>
					<td><input type="radio" name="type" value="casual leave" size="3">casual leave
                                        <br><input type="radio" name="type" value="restricted leave" size="3">restricted leave
                                        <br><input type="radio" name="type" value="half pay leave" size="3">half pay leave
                                         </td>
			        </fieldset>
				<fieldset>
				
					<th><label>reason:</label></th>
					<td>
					<textarea type="text" name="reason" placeholder="place your leave reason" ></textarea></td>
				</tr>
				</fieldset>	
				<fieldset>
					<tr>
						<th>
					<label>NO.s of days:</label></th>
					<td>
					<input type="text" name="total_days" ></td>
				
				</fieldset>
				
<td>
					<CENTER><input type="submit" id="submit" name="submit" value="submit" STYLE="HEIGHT:50PX;WIDTH:80PX"></CENTER>
                                     
				
				
			</form>
		</div>
</body>
</html>