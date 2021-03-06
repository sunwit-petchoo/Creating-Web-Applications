<!DOCTYPE html>
<html lang="en">
<head>
<title>About me</title>
 
  <meta name="description" content="SP Cinema website" />
  <meta name="keywords" content="Movies, Ticket,ShowTime" />
  <meta name="author" content="Sunwit Petchoo"  />
  <meta charset ="utf-8"/>
  <link href="styles/style.css" rel="stylesheet" />
  
</head>

<body>
	<!-- Heading and menu -->
   <article>
   <?php
			include_once("php_Header.inc");
			include_once("php_Menu.inc");		
	?>
   <section>
   <span id="name"><strong>Sunwit Petchoo</strong></span>
   <span id="studentId">101318759</span>
   <span>Course COS60004 Creating Web Applications</span>
   <img id="photo" src="images/sunwit.jpg" alt="sunwit photo" title="My photo"/>
   </section>
   <section id="timeTable">
   <table>
   <thead>
   <tr>
   <th></th>
   <th>Monday</th>
   <th>Tuesday</th>
   <th>Wednesday</th>
   <th>Thursday</th>
   <th>Friday</th>
   </tr>
   </thead>
   <tbody>
   <tr>
   <td class= "blueTd" rowspan="2" >8 am</td><td></td><td></td><td></td><td></td>
   <td></td>
   </tr>
   <tr><td></td><td></td><td></td><td id="inf7"  rowspan="4" >INF60012</td><td></td></tr>
   <tr>
   <td rowspan="2" >9:00</td><td></td><td></td><td></td><td></td>
   </tr>
   <tr><td></td><td></td><td></td><td></td></tr>
   <tr>
   <td rowspan="2" >10:00</td><td></td><td></td><td></td><td></td>
   </tr>
   <tr><td id="inf1" rowspan="4" >COS70004</td><td></td><td></td><td></td><td></td></tr>
   <tr>
   <td rowspan="2" >11:00</td><td></td><td></td><td></td><td></td>
   </tr>
   <tr><td></td><td></td><td></td><td></td></tr>
   <tr>
   <td rowspan="2" >12:00</td><td></td><td></td><td></td><td></td>
   </tr>
   <tr><td></td><td></td><td></td><td id="inf2" rowspan="4" >COS60004</td><td></td></tr>
   <tr>
   <td rowspan="2" >1:00</td><td></td><td></td><td></td><td></td>
   </tr>
   <tr><td></td><td></td><td></td><td></td></tr>
   <tr>
   <td rowspan="2" >2:00</td><td></td><td></td><td></td><td></td>
   </tr>
   <tr><td></td><td></td><td></td><td></td><td></td></tr>
   <tr>
   <td rowspan="2" >3:00</td><td></td><td></td><td></td><td></td><td></td>
   </tr>
   <tr><td></td><td></td><td></td><td></td><td></td></tr>
   <tr>
   <td rowspan="2" >4:00</td><td></td><td></td><td></td><td></td><td></td>
   </tr>
   <tr><td></td><td></td><td></td><td></td><td id="inf3" rowspan="4" >COS60004</td></tr>
   <tr>
   <td rowspan="2" >5:00</td><td></td><td></td><td></td><td></td>
   </tr>
   <tr><td id="inf4" rowspan="7" >INF60010</td><td id="inf5" rowspan="4" >COS70004</td><td></td><td id="inf6" rowspan="2" >INF60012</td></tr>
   <tr>
   <td rowspan="2" >6:00</td><td></td>
   </tr>
   <tr><td></td><td></td><td></td></tr>
   <tr>
   <td rowspan="2" >7:00</td><td></td><td></td><td></td>
   </tr>
   <tr><td></td><td></td><td></td><td></td></tr>
   <tr>
   <td rowspan="2" >8:00</td><td></td><td></td><td></td><td></td>
   </tr>
   <tr><td></td><td></td><td></td><td></td></tr>
   
   </tbody>
   </table>
   </section>
   <section id="webLink">
   <dl>
		<dt>Html Page</dt>
		<dd>https://mercury.swin.edu.au/cos60004/s101318759/assign1/index.html</dd>
		<dd>https://mercury.swin.edu.au/cos60004/s101318759/assign1/product.html</dd>
		<dd>https://mercury.swin.edu.au/cos60004/s101318759/assign1/enquire.html</dd>
		<dd>https://mercury.swin.edu.au/cos60004/s101318759/assign1/about.html</dd>
		
			
   </dl> 
   </section>
   <section id="reflection">
   <h3>Reflection</h3>
   <p>After I have done this assignment, I found that I have problems with positioning for the elements. Also, margin and padding. Sometime, it is quite hard for me to position them. For an improvement plan, I will practice through w3school website because it is easy to see result immediately </p>
   </section>
   </article>
   <footer>
   <span>Email me: <a href="mailto:101318759@student.swin.edu.au">Sunwit Petchoo</a></span>
   </footer>   
</body>

</html>