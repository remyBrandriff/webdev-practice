<!-- Author: Remy Brandriff -->
<!-- Created September 1, 2016 for CS212 at NAU-->
<!-- Currently just a brief bio because I haven't decided what
		 to do for the site yet.-->

		 <!-- Edited 9/23/16 to add style sheet -->
		 <!-- Second about me page, integrating CSS design -->
		 <!-- Edited 10/24/16 for new style -->

		 <!DOCTYPE html>

		 <?php
		  include('session.php');
		  ?>

		 <html>

		 	<head>
		 		<title> About Me </title>
				<link rel="stylesheet" type="text/css" href="new_css_style_sheet.css">

		 	</head>

		   <body>
				 <div id="container">
		       <div id="header">
		         <h1> Remy Brandriff </h1>
		         <h3> Officially Unofficial Website for the (Unpublished) Author </h3>
						 <p> Hello, <?php echo $login_session; ?></p>
             <h5> <a href = "logout.php">Sign Out</a></h5>

		         <!-- Dropdown menu, code from: http://www.w3schools.com/howto/howto_js_dropdown.asp -->
		         <div class="dropdown">
		           <button onclick="myFunction()" class="dropbtn">Pages</button>
		             <div id="myDropdown" class="dropdown-content">
		               <a href="index.php">Home</a>
		               <a href="about.php">About Me</a>
		               <a href="newContact.php">Contact Me</a>
									 <a href="accountPage.php">Account</a>
		               <a href="resume.html">Resume</a>
		               <a href="edenProject.php">The Eden Project</a>
									 <a href="blueRosesAndFireflies.php">Blue Roses and Fireflies</a>
		               <a href="theFuturist.php">The Futurist</a>
									 <a href="jackassDissonance.php">Jackass Dissonance</a>
									 <a href="nanowrimo16.php">NaNoWriMo 2016</a>
		             </div> <!--myDropdown-->
		           </div><!--dropdown-->

		       </div> <!-- header -->

		 		<div id="wrapper">
		 			<div id="content">

		     		<h2> About Me </h2>
		 				<img src="images/IMG_3574.jpg"
		 						 alt="The author--Remy--is shown from the chest up, standing against
								 			white tile. They are a young, Caucasion person, vaguely feminine,
											with short blonde hair poofing out across their forehead from
											under a red beanie. They have black, plastic-rimmed glasses riding
											low on their nose, and the left nostril, which faces the camera,
											is pierced with a small ring; their left ear, poking out from under
											their beanie, is also pierced at the helix. They're wearing a dark
											blue button up with a maroon bowtie, and smirking, peering at the
											camera over their glasses."
		 						 style="float:right;width:230px;height:270px;">


		     		<p><b>Name:</b> Remy
		 	  		<p><b>Pronouns:</b> She/he/they (he or they preferred)
		 	  		<p><b>Major:</b> Applied Computer Science (with a minor in Biology)
		 	  		<p><b>Programming Experience: </b> Approx. six years in Java, C++, Android,
		 				  		Python, MATLAB, assorted assembly, and Visual Basic.
		 	  		<p><b>Interests:</b> Sci-fi, comic books and superheroes, creative writing,
		 				  		cosplay, art (watercolor & ink painting, markers), botany. </p>

		 				<br>

		     		<p>Hello! As a brief introduction, I am a queer college student studying at
		        	 NAU here in Flagstaff, with my wonderful and nerdy roommates who I love
		        	 deeply (and I write this knowing they're never going to see it--ha!).
		     		<p>As mentioned above, my pronouns are she/he/they. Typically, I use he/him/his
		        	 or they/them/theirs, although I don't really care and will respond to
		        	 she/her/hers. I am transgender and identify as genderqueer and/or non-binary.
							 That doesn't really matter in the grand scheme, except how it affects me as
							 a person. I can't say my identities aren't important, because they are,
							 just as much as someone's ethnicity is important; just because someone
							 isn't defined by, say, being Latinx, for example, doesn't mean it isn't
							 an important part of their life. My gender identities are important, too,
							 and they shape my human experience, affecting every day of my life.
						<p>As well as a queer person, I am also an artist and writer--interests
							 that might seem odd considering my unquestionably technical major.
							 I specialize in ink and watercolor painting, and alcohol markers (super
							 awesome, blend really well, also super expensive), and I might post
							 pictures of some of my work here if the content calls for it.
						<p>I mostly write in the sci-fi and speculative fiction genres, although
							 I also have stories set in fantasy or semi-realistic worlds; I seem to
							 be incapable of writing a complete project in a strictly realistic
							 setting. I tried that with my current main project--codenamed <i>Jackass Dissonance</i>--and it spiraled into a mess of sci-fi,
							 fantasy, and conspiracy elements that I can't for the life of me explain. Honestly,
							 I have no idea how it happened.

		     	 	<p> - Remy </p>
		 			</div>
		 			<br>
		 		</div>
			</div>

				<div id="footer">
		          <p> Remy Brandriff | ACS | CS212 - Fall 2016 </p>
		          <p> <b> Contact at bsb232@nau.edu or britt.shea13@gmail.com -
		              see Contact Me page for more information </b> </p>
		          <p> This website is hosted by the College of Engineering, Forestry, and
		              Natural Sciences at Northern Arizona University. </p>
		          <p> Site design (c) Remy Brandriff 2016 </p>
		    </div> <!-- footer -->

		<!-- Javascript for dropdown menus
		     Code adapted from: http://www.w3schools.com/howto/howto_js_dropdown.asp -->
		    <script>
		      // When the user clicks on the button, toggle between hiding and showing the dropdown content
		      function myFunction() {
		        document.getElementById("myDropdown").classList.toggle("show");
		        document.getElementById("myDropdown2").classList.toggle("show");
		      }

		      // Close the dropdown if the user clicks outside of it
		      window.onclick = function(event) {
		        if (!event.target.matches('.dropbtn')) {

		          var dropdowns = document.getElementsByClassName("dropdown-content");
		          var i;
		          for (i = 0; i < dropdowns.length; i++) {
		            var openDropdown = dropdowns[i];
		            if (openDropdown.classList.contains('show')) {
		              openDropdown.classList.remove('show');
		            }
		          }
		        }
		      }
		    </script>

		  </body>
	</html>
