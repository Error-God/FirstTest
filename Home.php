<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    
    
    <title>Error Learning</title>

    <!--JS for MAinBody and CarrierPaths-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script >
	$(document).ready(function()
	{
		$("#CarrierPaths").hide();
		$('#CP').click(function()
		{
			$('#MainBody').hide();
			$('#CarrierPaths').show();
		});
		$('#HomePage').click(function()
		{
			$('#CarrierPaths').hide();
			$('#MainBody').show();
		});
		$('#HomeTitle').click(function()
		{
			$('#CarrierPaths').hide();

			$('#MainBody').show();
		});
	});
</script>

	
  </head>
  <body background="bu.jpg">

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<!-- Title BAR -->
<nav class="navbar navbar-light bg-primary" style="background-image: url(b5.jpg);" id="title">
  <a class="navbar-brand" href="Home.php" id="HomeTitle" style="font-size: 296%; color: white">
    <img src="logo1.jpeg" width="11%" height="11%"  alt="">
    Error Learning
  </a>

  <h5 style="color: yellow; font-family: Times New Roman; font-size: 90%;"><i><b>Welcome to the world of learning.. Learn anything anywhere without paying any cost..</b></i></h5>
</nav>


<!--Navigation Bar-->

<nav class="navbar navbar-expand-lg navbar-light bg-primary">
  <span class="navbar-brand mb-0 h1" href="#" style="color: white">Goto</span>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="Home.php" id="HomePage" style="color: white">Home <span class="sr-only">(current)</span></a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="#TO" style="color: white">Top Courses</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"  id="CP" style="color: white">Carrier Paths</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" style="color: white">Self Development</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white">
          EL
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: lightgrey">
          <a class="dropdown-item" href="#CU">Contact us</a>
          <a class="dropdown-item" href="#AU">About Us</a>
          <a class="dropdown-item" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Write to us</a>
        </div>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit" style="color: black;">Search</button>
    </form>
  </div>
</nav>



<!--Image Slidder-->
<div id="MainBody">
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="2000">
  <ol class="carousel-indicators" >
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="i1.jpg" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
      	<h5 style="color:red">Pahla wala</h5>
    	<p style="color:red">Work work work work</p>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="i2.jpg" alt="Second slide">
      <div class="carousel-caption d-none d-md-block">
    	<h5 style="color:red">Second one</h5>
    	<p style="color:red">Liking and disliking, both is in users hand</p>
    </div>
	</div>
    <div class="carousel-item">
      <img class="d-block w-100" src="i3.jpg" alt="Third slide">
      <div class="carousel-caption d-none d-md-block">
       <h5 style="color:red">Teesra hai bhai</h5>
       <p style="color:red">kya baat kya baat kya baat</p>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="i4.jpg" alt="Forth slide">
      <div class="carousel-caption d-none d-md-block">
       <h5 style="color:red">fouth one</h5>
   	   <p style="color:red">Ye wala to sabse zaruri h</p>
   	  </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<!--Top Courses -->
<nav class="navbar navbar-dark bg-success my-1 mb-1" id="TO">
	<marquee direction="right" scrollamount=10 behavior="alternate">
  <span class="navbar-brand mb-auto mx-auto h1" style="color: black">Top Courses:</span>
</marquee>
</nav>

<!--Cards on home-->
<div class="card-group" style="opacity: 0.9;">
<div class="card border-dark mx-auto" style="width: 22.5rem;">
  <img class="card-img-top" style=" height: 11rem;" src="p1.jpg" alt="py">
  <div class="card-body">
    <h5 class="card-title" align="center">Python</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    Best features:
  </div>
  <center>
  	used in Data science<br><hr>
   easy to learn<br><hr>
   most popular<hr></center>
</div>

<div class="card border-info  mx-auto" style="width: 22.5rem;">
  <img class="card-img-top" style=" height: 11rem;" src="c1.jpg" alt="cc">
  <div class="card-body">
    <h5 class="card-title" align="center">Cloud Computing</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    Best features:
  </div>
  <center>
  	pta ni bhai<br><hr>
   pta kar ke btate hain<br><hr>
   itna kya jaldi hai<hr></center>
</div>

<div class="card  border-success  mx-auto" style="width: 22.5rem;">
  <img class="card-img-top" style=" height: 11rem;" src="a1.jpg" alt="apk">
  <div class="card-body">
    <h5 class="card-title" align="center">Android</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    Best features:
  </div>
  <center>
  	most used phones<br><hr>
   interesting<br><hr>
   best for java users<hr></center>
</div>

<div class="card border-dark  mx-auto" style="width: 22.5rem;">
  <img class="card-img-top " style=" height: 11rem;" src="j1.jpg" alt="ju">
  <div class="card-body">
    <h5 class="card-title" align="center">Julia</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    Best features:
  </div>
  <center>
  	used in Data science<br><hr>
   easy to learn<br><hr>
   expected to overpower Python<hr></center>
</div>

<div class="card border-primary  mx-auto" style="width: 22.5rem;">
  <img class="card-img-top" style=" height: 11rem;" src="w1.jpg" alt="wb">
  <div class="card-body">
    <h5 class="card-title" align="center">Web Development</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    Best features:
  </div>
  <center>
  	used in Data science<br><hr>
   easy to learn<br><hr>
   most popular<hr></center>
</div>
</div>
</div>




<!--Carrier paths-->
<div id="CarrierPaths">
<!--Heading Carrier paths -->
<nav class="navbar navbar-dark bg-danger my-1 mb-1 mx-1" id="cP">
	<marquee direction="right" scrollamount=10 behavior="alternate">
  <span class="navbar-brand mb-auto mx-auto h1" style="color: black">Top 10 Carrier paths for CS students:</span>
</marquee>
</nav>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="1000">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="8"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="9"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="SD.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="dbA.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="CDE.jpg" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="CSA.jpg" alt="4 slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="CNA.jpg" alt="5 slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="WD.jpg" alt="6 slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="ISA.jpeg" alt="7 slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="CIRS.jpg" alt="8 slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="manager.jpg" alt="9 slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="PM.jpg" alt="10 slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div class="card-deck mx-auto">
  <div class="card border-success" style="opacity: 0.95; color: green">
    <img class="card-img-top" src="SD.jpg" alt="Card image cap" style=" height: 11rem;">
    <div class="card-body">
      <h5 class="card-title">1. Software Developer</h5>
      <p class="card-text" style="color: black">Software developers create software programs that allow users to perform specific tasks on various devices, such as computers or mobile devices. They are responsible for the entire development, testing, and maintenance of software.<br>
	Software developers must have the technical creativity required to solve problems uniquely. They need to be fluent in the computer languages that are used to write the code for programs.<br>
	Communication skills are vital for securing the necessary information and insight from end users about how the software is functioning.<br>
	According to the Bureau of Labor Statistics (BLS), software developers earned a median income of $105,590 in May 2018, and employment was expected to grow by 21% from 2018 to 2028—much faster than average for all occupations.
		</p>
    </div>
  </div>
  <div class="card border-danger" style="opacity: 0.95; color: red">
    <img class="card-img-top" src="dbA.jpg" alt="Card image cap" style=" height: 11rem;">
    <div class="card-body">
      <h5 class="card-title">2. Database Administrator</h5>
      <p class="card-text" style="color: black">Database administrators analyze and evaluate the data needs of users. They develop and improve the data resources used to store and retrieve critical information.<br>
	They need the problem-solving skills of the computer science major to correct any malfunctions in databases and to modify systems in line with the evolving needs of users.<br>
	According to the BLS, database administrators earned a median income of $93,750 in May 2019, and employment was expected to grow by 9% from 2018 to 2028, which is faster than average.<br>
	  </p>
    </div>
  </div>
  <div class="card border-primary" style="opacity: 0.95; color: blue">
    <img class="card-img-top" src="CDE.jpg" alt="Card image cap" style=" height: 11rem;">
    <div class="card-body">
      <h5 class="card-title">3. Computer Hardware Engineer</h5>
      <p class="card-text" style="color: black">Computer hardware engineers are responsible for designing, developing, and testing computer components, such as circuit boards, routers, and memory devices.<br>
	Computer hardware engineers need a combination of creativity and technical expertise. They must be avid learners who stay on top of emerging trends in the field to create hardware that can accommodate the latest programs and applications.<br>
	Computer hardware engineers must have the perseverance to perform comprehensive tests of systems, again and again, to ensure the hardware is functioning as it should.<br>
	According to the BLS, computer hardware engineers earned a median income of $117,220 in May 2019, and employment was expected to grow by 6% from 2018 to 2028—about as fast as average.</p>
    </div>
  </div>
  <div class="card border-info" style="opacity: 0.95; color: lightblue">
    <img class="card-img-top" src="CSA.jpg" alt="Card image cap" style=" height: 11rem;">
    <div class="card-body">
      <h5 class="card-title">4. Computer Systems Analyst</h5>
      <p class="card-text" style="color: black">Computer systems analysts assess an organization's computer systems and recommend changes to hardware and software to enhance the company's efficiency.<br>
	Because the job requires regular communication with managers and employees, computer systems analysts need to have strong interpersonal skills. Systems analysts need to be able to convince staff and management to adopt technology solutions that meet organizational needs.<br>
	Also, systems analysts need the curiosity and thirst for continual learning to track trends in technology and research cutting-edge systems.<br>
	Systems analysts also need business skills to recognize what's best for the entire organization. Similar job titles are business analysts or business systems analysts.<br>
	According to the BLS, computer systems analysts earned a median income of $90,920 in May 2019, and employment was expected to grow by 9% from 2018 to 2028—about as fast as average.</p>
    </div>
  </div>
  <div class="card border-secondary" style="opacity: 0.95; color: grey">
    <img class="card-img-top" src="CNA.jpg" alt="Card image cap" style=" height: 11rem;">
    <div class="card-body">
      <h5 class="card-title">5. Computer Network Architect</h5>
      <p class="card-text" style="color: black">Computer network architects design, implement, and maintain networking and data communication systems, including local area networks, wide area networks, extranets, and intranets. They assess the needs of organizations for data sharing and communications.<br>
	Computer network architects also evaluate the products and services available in the marketplace. Computer network architects test systems before they are implemented and resolve problems as they occur after the setup is in place.<br>
	Computer network architects need to have the analytical skills to evaluate computer networks.<br>
	According to the BLS, computer network architects earned a median income of $112,690 in May 2019, and employment was expected to grow by 5% from 2018 to 2028—about as fast as average.﻿</p>
    </div>
  </div>
</div>
<div class="card-deck my-1">
  <div class="card border-primary" style="opacity: 0.95; color: blue">
    <img class="card-img-top" src="WD.jpg" alt="Card image cap" style=" height: 11rem;">
    <div class="card-body">
      <h5 class="card-title">6. Web Developer</h5>
      <p class="card-text" style="color: black">Web developers assess the needs of users for information-based resources. They create the technical structure for websites and make sure that web pages are accessible and easily downloadable through a variety of browsers and interfaces.<br>
	Web developers structure sites to maximize the number of page views and visitors through search engine optimization. They must have the communication skills and creativity needed to ensure the website meets its users' needs.<br>
	According to the BLS, web developers earned a median income of $73,760 in May 2019 and employment was expected to grow by 13% from 2018 to 2028—much faster than average.</p>
    </div>
  </div>
  <div class="card border-success" style="opacity: 0.95; color: green">
    <img class="card-img-top" src="ISA.jpeg" alt="Card image cap" style=" height: 11rem;">
    <div class="card-body">
      <h5 class="card-title">7. Information Security Analyst</h5>
      <p class="card-text" style="color: black">Information security analysts create systems to protect information networks and websites from cyberattacks and other security breaches. Their responsibilities also include researching trends in data security to anticipate problems and install systems to prevent issues before they occur.<br>
	Security analysts also need strong problem-solving skills to investigate breaches, determine the causes, and modify or repair security systems.<br>
	According to the BLS, information security analysts earned a median income of $99,730 in May 2019 and employment was expected to grow by 32% from 2018 to 2028—much faster than average.</p>
    </div>
  </div>
  <div class="card border-warning" style="opacity: 0.95; color: brown">
    <img class="card-img-top" src="CIRS.jpg" alt="Card image cap" style=" height: 11rem;">
    <div class="card-body">
      <h5 class="card-title">8. Computer and Information Research Scientists</h5>
      <p class="card-text" style="color: black">
	Computer and information research scientists invent technology that solves complex problems in fields like science, medicine, and business. They also find new uses for existing technology that accomplishes the same goals.<br>
	Computer and information research scientists write algorithms that are used to detect and analyze patterns in very large datasets. Some computer and information research scientists create the programs that control robots.\<br>
	According to the BLS, computer and information research scientists earned a median income of $122,840 in May 2019 and employment was expected to grow by 16% from 2018 to 2028—much faster than average.</p>
    </div>
  </div>
  <div class="card border-primary " style="opacity: 0.95; color: blue">
    <img class="card-img-top" src="manager.jpg" alt="Card image cap" style=" height: 11rem;">
    <div class="card-body">
      <h5 class="card-title">9. Computer and Information Systems Managers</h5>
      <p class="card-text" style="color: black">Computer and information systems managers analyze a company's technology needs and oversee the implementation of appropriate data systems. They need to be able to evaluate software, hardware, networking, and other technology resources for purchase or development purposes.<br>
	Because computer and information systems managers hire, train, and supervise staff, interpersonal skills are vital in this role. They must be strong leaders who can communicate effectively with their staff.<br>
	According to the BLS, computer and information systems managers earned a median income of $146,360 in May 2019 and employment was expected to grow by 11% from 2018 to 2028—faster than average.</p>
    </div>
  </div>
  <div class="card border-danger " style="opacity: 0.95; color: red">
    <img class="card-img-top" src="PM.jpg" alt="Card image cap" style=" height: 11rem;">
    <div class="card-body" >
      <h5 class="card-title">10. IT Project Manager</h5>
      <p class="card-text" style="color: black">Project managers in the IT sector coordinate the efforts of a team of programmers/developers and analysts to complete projects. They also analyze technical problems for their company or a client organization, proposing solutions and tips to enhance productivity.<br>
	Problem-solving skills and a broad knowledge of technology and computer systems help computer science majors excel in this role. Strong communication skills are required to decipher the needs of users and convey technical specifications to developers.<br>
	According to PayScale, project managers earn an average annual income of $88,545.</p>
    </div>
  </div>
</div>
</div>

<!--About Us-->
 <nav class="alert text-dark bg-info mx-1 my-1" id="AU">
 	<img src="assDP.jpeg" width="18%" height="18%" alt="u know" class="rounded float-left">&nbsp;
 	<p>
 This site my project that is going to be on live server. I with my team i.e. me, hope that the user who is going to use this will get help in his/her goal. I made it to avail books and links, so that every programmer can download books and watch the video of the links provided as the links given are fully tested and verified personally. <br>
 whenever you get any chance to help others then please push them forward in their field.<br>
 Many more things to tell you guyzz.. </p></nav>



<!--Contact Us-->
<div id="CU" class="alert text-warning bg-dark mb-3 mx-1">
  mail @: jethalalgada@web.com <br>
  call us : 09876543210, 7273967372<br>
  visit us : EGL, Ocean side, west _____, India<br>
  &copy; Reserved 2020, EGL&reg; <span style="color: red; font-size: 150%">&hearts;</span>
</div>

<!--write to us-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color: lightblue ">
        <h5 class="modal-title" id="exampleModalLabel" >Your views really means a lot</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Recipient:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Message:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" >Send message</button>
      </div>
    </div>
  </div>
</div>

