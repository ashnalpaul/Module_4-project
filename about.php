<!DOCTYPE html>
<html>
	<head>
		<title> About </title>
		
         
      
        <!--Custom styles-->
        <link rel="stylesheet" type="text/css" href="css/styles.css">

        <!--Custom Favicon.-->
        <link rel="icon" type = "image/png" sizes = "64x64" href = "css/images/logo2.jpg">
        
        <style type = text/css>
            @import url('https://fonts.googleapis.com/css?family=Acme|Bree+Serif|Patrick+Hand|Volkhov|Handlee|PT+Serif|Numans|Bitter|Odibee+Sans|Simonetta|Trade+Winds&display=swap');
            
            .back-to-top
            {
                position: fixed;
                bottom: 25px;
                right: 25px;
                display: none;
            }
            
            .container
            {
                top:0;
                margin-top:0;
                padding-top:0;
            }
			
			@import url('https://fonts.googleapis.com/css?family=Acme|Bree+Serif|Patrick+Hand|Volkhov|Handlee|PT+Serif|Numans|Bitter|Odibee+Sans|Simonetta|Trade+Winds&display=swap');
			.mcon{
				box-shadow: -2px -2px 5px rgba(0,0,0,0.5),
                3px 3px 6px rgba(0,0,0,0.5);
    			margin-top: 2%;
				font-family: 'PT serif';
				background-color: rgba(127,45,25,0.1);
				color:black;
			}
			html,body{
				background-repeat: no-repeat;
				background-position:center;
				background-size: contain;
				background-attachment: fixed;
			}

			ol{
				padding-bottom: 20px;
			}
			ol li{
				padding-right: 10px;
				font-weight:bold;
				font-size: 20px;
				text-shadow: 0.5px 0.5px black;
				text-align: justify;
				padding-bottom: 3px;
			}
			
        </style>	
	</head>
	<body>
		<div id="progress"></div>
		<nav class="navbar navbar-light" style = "background-color: brown ;margin-bottom:2%;box-shadow: 3px 3px 5px;border-bottom:3px solid black;">
			<a class="navbar-brand text-white" style = "font-family:'Acme';font-size:30px"> <img src="css/images/logo2.jpg" width="70" style = "border-radius:50%;border:1px white;background-color:black;" height="70" alt="BMSCE"/> <span class = "mh3">FMNC</span></h3>
                </a></a>
			<a class="navbar-brand text-white" style = "font-family:'Acme';color:'red';" href="index.php"><i class="fas fa-home" aria-hidden="true"></i> Home</a>
		</nav>
   
		<div class = "col-lg-7 mcon m-auto">
			<h1 style = "color : purple;font-weight:bold;font-size:45px;padding-bottom:0px;padding-top:10px;margin-top:1px;text-decoration:underline dashed;text-shadow:1px 1px 2px black;" align = "center">About</h1>
			<hr color = "black" size = "2px">

			<p align="center" style = "font-weight:bold;text-shadow: 0.5px 0.5px black;font-size:20px;text-align:justify;">&nbsp;
			Fatima Mata National College has a story of success to relate.
			 As one of the premier autonomous institutions in the state, it has made commendable headway by 
			 consistently contributing towards educational excellence, social equity, and generation and dissemination
			  of knowledge. Fatima is geared towards the transformation of the society through value based education,
			   human making and nation building. Ours is an education for life, not merely for living or livelihood.</p>
			<hr color = "black" size = "2px">

			<h1 style = "color : navy;font-weight:bold;padding-bottom:0px;padding-top:0px;margin-top:0px;text-decoration:underline dotted;text-shadow:1px 1px 2px black;">Motivation</h1>
			<ol>
				<li>Online Exam Registration Portal helps the students in registering their Semester End Examination Subjects Easily without manually registering but instead through online web Portal. </li>
				<li>You can setup an exam in such a way that it will auto-grade itself. If you only use multiple choice questions you never have to check an exam again. The online exam system will take care of that hassle. Completly automated. </li>
				<li>All the students details regarding the Exam Registration is maintained in a single Database that can be accessed Easily Anywhere & Anytime.</li>
				<li>Loss of Data is minimized as the details is maintained in a Database.</li>
				<li>Students can fill the form anywhere and anytime.</li>
				<li>You never have to print an exam for your students and hand them out. Saves paper. Saves trees. Everybody happy. </li>
				<li>It helps to maintaining the Data consistency & Transparency.</li>
				<li>Leads to Easy administration as the admin can easily check the number of students who have registered also admin can Add, Edit or Update & Delete the subjects, & can see the subjects which are already listed.</li>
				<li>Probability of making Errors is less with the use of GUI.</li>
				<li>Useful for Educational institutes,the distribution of the exam doens't take you any time. Just upload the email addressess of your students and send them an invite. And after the exam they get their result instantly.  .</li>
			</ol>
		</div>
		<a id="back-to-top" style = "color:#000;background-color:#fff;border:2px solid black;" href="#" class="btn-light btn-lg back-to-top" role="button"><i class="fas fa-arrow-up"></i></a>
		<?php require_once('footer.php'); ?>
		<!-- Progress js File -->
		<script src = "js/progress.js"></script>
	</body>
</html>