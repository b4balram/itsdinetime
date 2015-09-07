<?php
include 'menu.php';
if(!isset($_SESSION['user_name']))
{
	header("Location:login.php");
	
}
require_once('calendar/classes/tc_calendar.php');

?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title>Register</title>
	<link href="calendar/calendar.css" rel="stylesheet" type="text/css" />
<script language="javascript" src="calendar/calendar.js"></script>

<style type="text/css">
body, input, select { font-size: 13px; font-family: "Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", "DejaVu Sans", "Verdana", sans-serif; }

pre { font-size: 13px; font-family: "Consolas", "Menlo", "Monaco", "Lucida Console", "Liberation Mono", "DejaVu Sans Mono", "Bitstream Vera Sans Mono", "Courier New", monospace, serif; background-color: #FFFFCC; padding: 5px 5px 5px 5px; }
pre .comment { color: #008000; }
pre .builtin { color: #FF0000; }
</style>

  </head>
<body background="images/gallery11.jpg">
    <form id="form1" runat="server">
   
            
         <div class="container">
            <div class="row">
                     
                <div class="col-md-4">
                    <asp:Label ID="Label2" runat="server" Text="Label"></asp:Label>
               </div>
                        
                <div class="#">
                     <div style="background-color:#B2DFDB" class="well well-md" hidden="hidden">
                         <h2>Register Here for free!!</h2><hr />
                    <div class="form-group" hidden="hidden">
					
					<form id="frmregister" method="post" action="insert.php">
                    <input type="text" id="username" name="uname" class="form-control" value="<?php echo $_SESSION["user_name"]; ?>"  placeholder=Username" required="required" /><br />
                    <input type="email_id" id="email_id" name="email" Class="form-control"  placeholder="Email Address" required="required"/><br />
                    <input type="password" id="password"  name="pwd" class="form-control"  placeholder="Password" required="required"/><br />
                    <input type="password" id="cpassword" name="cpwd" class="form-control"  placeholder="Confirm Password" required="required"/><br />
                    <input type="number_format" id="contact" class="form-control" placeholder="contact no" required="required"/><br/>
					<center> <input type="submit" id="submit2" value="SignUp" Class="btn btn-primary"  />
					</center>
                       </form>                               
                     </div> <!--end of form group-->
                         </div>
                           </div><!--end of col-md-4-->
						   
						   <div class="col-md-4">
                
						   <div style="background-color:#B2DFDB" class="well well-md">
						    <h2>Booking Details !!</h2><hr />
            
			<form id="frmregister" method="post" action="#">
					<input type="text" id="username" name="uname" class="form-control" value="<?php echo $_SESSION["user_name"]; ?>" readonly="readonly"   placeholder="User Name" required="required" /><br />
                    <input type="text" id="hotel" name="hname" class="form-control"  value="<?php echo $_SESSION["hot"]; ?>" readonly="readonly"  placeholder="Hotel Name" required="required" /><br />
                    <input type="text" id="date" name="date" class="form-control" value=""  placeholder="Date"  required="required" />
  
  <br />
  
    	<?php
		  $myCalendar = new tc_calendar("date", true, false);
		  $myCalendar->setIcon("calendar/images/iconCalendar.gif");
		  $myCalendar->setDate(1, date('m'), date('Y'));
		  $myCalendar->setPath("calendar/");
		  $myCalendar->setYearInterval(2000, 2015);
		  $myCalendar->setDateFormat('j F Y');
		  //$myCalendar->autoSubmit(true, "form1");
		  $myCalendar->setAlignment('left', 'bottom');
		  $myCalendar->setAutoHide(true, 1000); 
		  $myCalendar->showWeeks(true);
		  $myCalendar->startMonday(true);
		  $myCalendar->writeScript();
		  ?>
  

	<input type="text" id="amount" name="amount" class="form-control"   placeholder="Total amount" value="<?php echo $_SESSION['price']; ?>" readonly="readonly"  required="required" /><br />
                    <input type="email_id" id="email_id" name="email" Class="form-control"  placeholder="Email Address" required="required"/><br />
                    <input type="text" id="address"   name="add"  class="form-control"  placeholder="Address" required="required"/><br />
                    <input type="number_format" id="contact" name="phone" class="form-control" placeholder="contact no" required="required"/><br/>
					<center> <input type="submit" id="submit2" value="Confirm" Class="btn btn-primary"  />
					</center>
                       </form>                               
                    	   
						   
						   </div>
						   </div>
                     
                <div class="col-md-4">
                    <asp:Label ID="Label2" runat="server" Text="Label"></asp:Label>
               </div>
                     </div><!--end of row-->
                     </div><!--end of container-->

<!--footer-->
        <?php
		include 'footer.php';
		?>
    <!--Footer end -->
    </form>
</body>
</html>
