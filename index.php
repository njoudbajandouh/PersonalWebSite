<!DOCTYPE html>
<?php 
if ($_POST['RandN']=='')
{
session_start();
global $random; 
$_SESSION["no"]= rand(0, 9999999); 
$randomno=$_SESSION["no"];
	
}
else{
	$randomno=$_SESSION['RandN'];
}

?> 

<html lang='en'>
 <meta charset='UTF-8'/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>
.responsive {
  width: 100%;
  height: auto;
}
</style>

    <head class="header">
        <title>Njoud Bajandouh</title>
		       <link href="style.css" rel="stylesheet" >

    </head>

    <body class="body">
        <header class="body">
      
            <nav>
                <ul>
                    <li><a href="#hero"><img src="imgs/home (1).png" alt="Home" style="width:35px ; height:35px;"></a></li>
                    <li><a href="#about"><img src="imgs/curriculum.png" alt="About" style="width:35px ; height:35px;"></a></li>
					 <li><a href="#intrest"><img src="imgs/interests.png" alt="Interests" style="width:35px ; height:35px;"></a></li>
					
                    <li><a href="#contact"><img src="imgs/conversation.png" alt="Contact" style="width:35px ; height:35px;"></a></li>
					
                </ul>
            </nav>
        </header>
        <main>
            <section id="hero">
                <div class="section-inner">
                    <br></br>
                    <br></br>
                    
                
                    
                    <img src="imgs/circle-cropped.png" class="profile-img"> 
                    <h1 style="font-size:4vw ; color:Plum">Welcome in my World !</h1>
                </div>
            </section>
            <section id="about">
                <div class="section-inner">
                    <b><h2 style="font-size:3vw ; color:MediumSeaGreen">About me</h2></b>
                    <b><p style="font-size:2vw ; color:#e6e6e6">An accomplished Self-leaner :  </p></b>
					     <b><p style="font-size:2vw ; color:#e6e6e6">Always strive to improve myself and gaining a new knowledge in my field.</p></b>
						      <b><p style="font-size:2vw ; color:#e6e6e6">An ambitious job seeker : </p></b>
							       <b><p style="font-size:2vw ; color:#e6e6e6">seeker for the suitable role which will makes me improve myself and the company at the same time. </p></b>
								        <b><p style="font-size:2vw ; color:#e6e6e6 ">A positive person :</p></b>
										     <b><p style="font-size:2vw ; color:#e6e6e6 ">I make sure to stay in the positive side .</p></b>

                    <b><h3 style="font-size:3vw ; color:MediumSeaGreen">Achievements</h3></b>
                  <b>  <ul style="font-size:2vw ; color:#e6e6e6 ; text-align:left">
                        <li>Bachelor of Management Information Systems (IAU University), 2019</li>
						<p></p>

                        <li>programmed a website dealing with SQL server by using ASP.Net in my COOP, 2019</li>
						<p></p>
						
                        <li>programmed a small website by using ASP.Net (not responsive) , 2019 <a href="http://thesolarsystem.somee.com/">Here</a></li>
						<p></p>
						
						<li>Certificate in Fundamentals Of Digital Marketing offered from Google , 2019</li>
						<p></p>
						<li>This website has implemented by using HTML & PHP & CSS & MySQL , 2019</li>
                    </ul></b>
                </div>
            </section>
		<section id="intrest">
		<div class="section-inner">
		<h2 style="font-size:3vw ; color:MediumSeaGreen">Interests</h2>
		<div  style="overflow-x:auto;">
<b><table style="margin-center: 300px;">
<tr>

<td>

<img src="imgs/fitness.png" style="width:50% ; height:auto;">

</td>
<td>
<img src="imgs/web-development.png" style="width:50% ; height:auto;">

</td>

<td>
<img src="imgs/studio-ghibli.png" style="width:50% ; height:auto;">

</td>

<td>
<img src="imgs/listening.png" style="width:50% ; height:auto;">

</td>

</tr>
<tr style="font-size:2vw ; color:#e6e6e6">

<td>
Fitness
</td>

<td>

Web Development
</td>

<td>
Anime
</td>

<td>
Music
</td>

</tr>
</table></b>
		</div>
		</div>
		</section>
            <section id="contact">
                <div class="section-inner">
			
                    <h2 style="font-size:3vw ; color:MediumSeaGreen">You can find me on:</h2>
					
						<div style="overflow-x:auto;">
<table style="margin-center: 100px;">
<tr>

<td>

<a href="mailto:njoudbjn@hotmail.com"><img src="imgs/email.png" alt="Email" style="width:40% ; height:auto;"></a>

</td>

<td>
<a href="https://github.com/njoudbajandouh"><img src="imgs/github-big-logo.png" alt="GitHub" style="width:40% ; height:auto;"></a>


</td>

<td>
<a href="https://www.linkedin.com/in/njoudbajandouh"><img src="imgs/linkedin.png" alt="LinkedIn" style="width:40% ; height:auto;"></a>
</td>
</tr>
</table> 
		</div>
		<center>
 <div>
                    <h3 style="font-size:3vw ; color:MediumSeaGreen">Or leave me a Message:</h3>

<center>
<b>

<form action="index.php" method="POST" >
<table "margin-center: 100px;">
<tr class="row">
<td >
<input name="name" type="text" placeholder="Your name ...." required>
</td>
</tr>
<tr>

<td>
<input  type="text" name="email" placeholder="Your Email ...." >
</td>
</tr>
<tr>

<td>
<input type="text" name="country"  placeholder="Your country ...." >
</td>
</tr>
<tr>

<td>
<textarea  name="message"  placeholder="Your message ...." style="height:200px;" required></textarea>
<input name="RandN" type="hidden" value="<?php echo $randomno;?>">
</td>
</tr>
<tr>
<td>
<input type="submit" name="submit" value="submit"/>


<?php
$conn = mysql_connect("localhost", "", ""); 
$db = mysql_select_db("mydata", $conn); 
mysql_query("SET NAMES 'utf8'");
mysql_query('SET CHARACTER SET utf8');

if(isset($_POST['submit'])){ 
$name = $_POST['name'];
$email = $_POST['email'];
$country = $_POST['country'];
$message = $_POST['message'];
$randomno=$_POST['RandN'];

$sql= mysql_query("SELECT no FROM mymsg WHERE no = '$randomno' ");
$row = mysql_fetch_array($sql);

if(!$row) 
	
{ 

$query = mysql_query("INSERT INTO mymsg(name, email, country, message,no) values ('$name', '$email', '$country', '$message', '$randomno' )");
echo "<p style='color:Plum' >Thanks for your Message !!</span></p>";
$_SESSION["no"]=[];

}

else {
echo "       ";
}
}
mysql_close($conn); 
?>

</td>
</tr>
</table>
</form>
</center>
</b>

</div>
      </div>
            </section>
        </main>
       <b> <footer class="footer"  style="font-size:2vw ; color:LightSlateGray">
            © Copyright Njoud Bajandouh, 2019
        </footer></b>
	






    </body>


</html>
		

