
<?php
error_reporting(1);
 session_start();
	//All QUERIES REQUIRED ON LANDING PAGE
	include"connect.php";	
		

	
	// Services
	$service = $pdo->prepare("SELECT * FROM subjects  ORDER BY timestamp ASC");
	$service->execute();
	$thesubjects = $service->fetchAll();
	

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Looking for a way to reach your highest potential? Look no further than FillTheGaps. Our search engine is designed specifically for high school students looking for past exams papers. With our easy-to-use interface, you'll be able to find the papers you need in no time. So why wait? Start your search today! ">
    <title>FillTheGaps - Privacy Policy</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.1/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.0/js/all.js"></script>
	 <link rel="stylesheet" href="fa/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.min.css">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma-carousel@4.0.3/dist/css/bulma-carousel.min.css">
		<link rel="apple-touch-icon" href="fillthegap/logos.png">
		<link rel="icon" href="fillthegap/logos.png">
	

<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
<link rel="stylesheet" href="ext.css">
    <script src="https://kit.fontawesome.com/95a02bd20d.js"></script>
	  <script src="https://kit.fontawesome.com/95a02bd20d.js"></script>
	<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7644821119757662"
     crossorigin="anonymous"></script>
<script>
var myVideo = document.getElementById("myVideo");

function playPause() { 
  if (myVideo.paused) 
    myVideo.play(); 
  else 
    myVideo.pause(); 
} 

function makeBig() { 
    myVideo.width = 560; 
} 

function makeNormal() { 
    myVideo.width = 320; 
} 

function makeSmall() { 
    myVideo.width = 240; 
} 

function makeTiny() { 
    myVideo.width = 160; 
} 
</script>

</head>

<body  style="background-image:url('background/edu.jpg');
background-repeat:no-repeat;
background-size: cover;
background-position: center;
background-color: #31cb68;
"

 class="has-navbar-fixed-top">
    <section class="hero is-info is-large" style="background-image:url('background/edu.jpg');
background-repeat:no-repeat;
background-size: cover;
background-position: center;
background-color: #31cb68;
">
        <div class="hero-head">
   <?php include"nav.php"?>
        </div>

        <div class="hero-body">
            <div class="container has-text-centered" >


	
                <h1 class="title" style="
				font-weight: bold;
				color:#11392e;
		
			


">
                    FillTheGaps
                </h1>
                <h2 class="subtitle"  style="
				font-weight: bold;
				color:#11392e;
		
			


"
				
>
                    Helping You Reach Your Full Potential
                </h2>
				<?php include"searchbar.php"; ?>
            </div>
        </div>

        <div class="hero-foot " >
            <nav class="tabs is-boxed is-fullwidth is-fixed-bottom">
                <div class="container">
                    <ul>
        
                        <li style="
				font-weight: bold;
				color:#11392e;
				background: linear-gradient(90deg, rgb(56,209,74, 0.7), rgb(56,209,74,1),rgb(56,209,74, 1),rgb(33,191,163, 1));
				font-size: 1em;
				border-radius: 9999px;
				padding-left: calc(1em + 0.25em);
				padding-right: calc(1em + 0.25em);
				-webkit-box-shadow: -7px 11px 25px -9px rgba(10,200,60,1);
				-moz-box-shadow: -7px 11px 25px -9px rgba(10,200,60,1);
				box-shadow: -7px 11px 25px -9px rgba(10,200,60,1);
			


">
                            <a>News</a>
                        </li>
                        <li style="
				font-weight: bold;
				color:#11392e;
				background: linear-gradient(90deg, rgb(56,209,74, 0.7), rgb(56,209,74,1),rgb(56,209,74, 1),rgb(33,191,163, 1));
				font-size: 1em;
				border-radius: 9999px;
				padding-left: calc(1em + 0.25em);
				padding-right: calc(1em + 0.25em);
				-webkit-box-shadow: -7px 11px 25px -9px rgba(10,200,60,1);
				-moz-box-shadow: -7px 11px 25px -9px rgba(10,200,60,1);
				box-shadow: -7px 11px 25px -9px rgba(10,200,60,1);
			


">
                            <a>QuizMe</a>
                        </li>
                        <li  style="
				font-weight: bold;
				color:#11392e;
				background: linear-gradient(90deg, rgb(56,209,74, 0.7), rgb(56,209,74,1),rgb(56,209,74, 1),rgb(33,191,163, 1));
				font-size: 1em;
				border-radius: 9999px;
				padding-left: calc(1em + 0.25em);
				padding-right: calc(1em + 0.25em);
				-webkit-box-shadow: -7px 11px 25px -9px rgba(10,200,60,1);
				-moz-box-shadow: -7px 11px 25px -9px rgba(10,200,60,1);
				box-shadow: -7px 11px 25px -9px rgba(10,200,60,1);
			


">
                            <a>Sage QnA</a>
                        </li>
                        <li style="
				font-weight: bold;
				color:#11392e;
				background: linear-gradient(90deg, rgb(56,209,74, 0.7), rgb(56,209,74,1),rgb(56,209,74, 1),rgb(33,191,163, 1));
				font-size: 1em;
				border-radius: 9999px;
				padding-left: calc(1em + 0.25em);
				padding-right: calc(1em + 0.25em);
				-webkit-box-shadow: -7px 11px 25px -9px rgba(10,200,60,1);
				-moz-box-shadow: -7px 11px 25px -9px rgba(10,200,60,1);
				box-shadow: -7px 11px 25px -9px rgba(10,200,60,1);
			


">
                            <a>Classes</a>
                        </li>
						<li style="
				font-weight: bold;
				color:#11392e;
				background: linear-gradient(90deg, rgb(56,209,74, 0.7), rgb(56,209,74,1),rgb(56,209,74, 1),rgb(33,191,163, 1));
				font-size: 1em;
				border-radius: 9999px;
				padding-left: calc(1em + 0.25em);
				padding-right: calc(1em + 0.25em);
				-webkit-box-shadow: -7px 11px 25px -9px rgba(10,200,60,1);
				-moz-box-shadow: -7px 11px 25px -9px rgba(10,200,60,1);
				box-shadow: -7px 11px 25px -9px rgba(10,200,60,1);
			


" >
                            <a>Turtorials</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column is-6 is-offset-3" style='
				color:white;
				font-weight: bold;
				background: linear-gradient(90deg, rgb(0,0,0, 0.7), rgb(0,0,0,0.7),rgb(0,0,0, 0.75),rgb(0,0,0, 0.7));
				border-radius: 0px;
				padding-left: calc(1em + 0.25em);
				padding-right: calc(1em + 0.25em);
				-webkit-box-shadow: -7px 11px 25px -9px rgba(0,255,0,1);
				-moz-box-shadow: -7px 11px 25px -9px rgba(0,255,0,1);
				box-shadow: -7px 11px 25px -9px rgba(0,255,0,1);
				
				backdrop-filter: blur(5.4px);
-webkit-backdrop-filter: blur(5.4px);'>
		
                    <h1 class="has-text-centered" style="
				font-weight: bold;
				color:#11392e;
				background: linear-gradient(90deg, rgb(56,209,74, 0.7), rgb(56,209,74,1),rgb(56,209,74, 1),rgb(33,191,163, 1));
				font-size: 1em;
				border-radius: 9999px;
				padding-left: calc(1em + 0.25em);
				padding-right: calc(1em + 0.25em);
				-webkit-box-shadow: -7px 11px 25px -9px rgba(10,200,60,1);
				-moz-box-shadow: -7px 11px 25px -9px rgba(10,200,60,1);
				box-shadow: -7px 11px 25px -9px rgba(10,200,60,1);
			


" >Terms Of Service</h1>
                    <p >
By using FillTheGaps, you agree to the following terms and conditions:</br></br>

- FillTheGaps is compliant with all Google Adsense policies.</br>


- FillTheGaps reserves the right to change the terms and conditions at any time.</br>

- By using FillTheGaps, you agree to be bound by the terms and conditions.</br></br>

</p></br>
                </div>
            </div>
        </div>
    </section>
<!--
    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column is-6 is-offset-3">
                    <h1 class="has-text-centered">How FillTheGaps Works</h1>
                    <p style='
				
				background: linear-gradient(90deg, rgb(0,0,0, 0.7), rgb(0,0,0,0.7),rgb(0,0,0, 0.75),rgb(0,0,0, 0.7));
				width:99.99%;
				border-radius: 0px;
				padding-left: calc(1em + 0.25em);
				padding-right: calc(1em + 0.25em);
				margin-bottom: 10px;
				-webkit-box-shadow: -7px 11px 25px -9px rgba(0,255,0,1);
				-moz-box-shadow: -7px 11px 25px -9px rgba(0,255,0,1);
				box-shadow: -7px 11px 25px -9px rgba(0,255,0,1);
				
				backdrop-filter: blur(5.4px);
-webkit-backdrop-filter: blur(5.4px);'>FillTheGaps is the perfect way for high school students in South Africa to access already scrapped question papers and answer quizzes. This search engine also provides access to tutorials and virtual classes created by various verified teachers. A powerful QnA engine for students, this Artificial Intelligence powered Question & Answer has the ability to answer all questions of all subject matter related to School. Verified Teachers may also answer a specific question. Periodical Grand Prizes for High Achievers are offered based on tests conducted on the platform with other students. Verified Teachers may sell subscriptions to students a month.</p>
                </div>
            </div>
        </div>
    </section>
-->


    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column is-6 is-offset-3" style='
				color:white;
				font-weight: bold;
	
				background: linear-gradient(90deg, rgb(0,0,0, 0.7), rgb(0,0,0,0.7),rgb(0,0,0, 0.75),rgb(0,0,0, 0.7));
			
				border-radius: 0px;
				padding-left: calc(1em + 0.25em);
				padding-right: calc(1em + 0.25em);
	
				-webkit-box-shadow: -7px 11px 25px -9px rgba(0,255,0,1);
				-moz-box-shadow: -7px 11px 25px -9px rgba(0,255,0,1);
				box-shadow: -7px 11px 25px -9px rgba(0,255,0,1);
				
				backdrop-filter: blur(5.4px);
-webkit-backdrop-filter: blur(5.4px);'>
                    <h1 class="has-text-centered" style="
				font-weight: bold;
				color:#11392e;
				background: linear-gradient(90deg, rgb(56,209,74, 0.7), rgb(56,209,74,1),rgb(56,209,74, 1),rgb(33,191,163, 1));
				font-size: 1em;
				border-radius: 9999px;
				padding-left: calc(1em + 0.25em);
				padding-right: calc(1em + 0.25em);
				-webkit-box-shadow: -7px 11px 25px -9px rgba(10,200,60,1);
				-moz-box-shadow: -7px 11px 25px -9px rgba(10,200,60,1);
				box-shadow: -7px 11px 25px -9px rgba(10,200,60,1);
			


" >General Terms, Conditions and Privacy Statements</h1>


                    <p >
1. General Terms</br></br>

These Platform Standard Terms and Conditions written on this webpage shall manage your use of this Platform. These Terms will be applied fully and affect to your use of this Platform. By using this Platform, you agreed to accept all terms and conditions written in here. You must not use this Platform if you disagree with any of these Platform Standard Terms and Conditions.</br></br>

2. Intellectual Property Rights</br></br>

Other than the content you own, under these Terms, FillTheGaps and/or its licensors own all the intellectual property rights and materials contained in this Platform.</br></br>

Subject to the license below, all these intellectual property rights are reserved.</br></br>

3. License</br></br>

You are granted limited license only for purposes of viewing the material contained on this Platform.</br></br>

4. Restrictions</br></br>

You are specifically restricted from all of the following</br></br>

- publishing any Platform material in any other media;</br></br>

- selling, sublicensing and/or otherwise commercializing any Platform material;</br></br>

- publicly performing and/or showing any Platform material;</br></br>

- using this Platform in any way that is or may be damaging to this Platform;</br></br>

- using this Platform in any way that impacts user access to this Platform;</br></br>

- using this Platform contrary to applicable laws and regulations, or in any way may cause harm to the Platform, or to any person or business entity;</br></br>

- engaging in any data mining, data harvesting, data extracting or any other similar activity in relation to this Platform, or while using this Platform;</br></br>

- using this Platform to engage in any advertising or marketing.</br></br>

Platform are restricted from being access by you and FillTheGaps may further restrict access by you to any areas of this Platform, at any time, in absolute discretion. Any user ID and password you may have for this Platform are confidential and you must maintain confidentiality as well.</br></br>

5. Your Content</br></br>

In these Platform Standard Terms and Conditions, "Your Content" shall mean any audio, video text, images or other material you choose to display on this Platform. By displaying Your Content, you grant FillTheGaps a non-exclusive, worldwide irrevocable, sub licensable license to use, reproduce, adapt, publish, translate and distribute it in any and all media.</br></br>

Your Content must be your own and must not be invading any third-party's rights. FillTheGaps reserves the right to remove any of Your Content from this Platform at any time without notice.</br></br>

6. No warranties</br></br>

This Platform is provided "as is," with all faults, and FillTheGaps express no representations or warranties, of any kind related to this Platform or the materials contained on this Platform. Also, nothing contained on this Platform shall be interpreted as advising you.</br></br>

7. Limitation of liability</br></br>

In no event shall FillTheGaps, nor any of its officers, directors and employees, shall be held liable for anything arising out of or in any way connected with your use of this Platform whether such liability is under contract.  FillTheGaps, including its officers, directors and employees shall not be held liable for any indirect, consequential or special liability arising out of or in any way related to your use of this Platform.
</br></br>
8. Indemnification
</br></br>
You hereby indemnify to the fullest extent FillTheGaps from and against any and/or all liabilities, costs, demands, causes of action, damages and expenses arising
</br></br>

9. Severability
</br></br>
If any provision of these Terms is found to be invalid under any applicable law, such provisions shall be deleted without affecting the remaining provisions herein.
</br></br>
10. Variation of Terms
</br></br>
FillTheGaps is permitted to revise these Terms at any time as it sees fit, and by using this Platform you are expected to review these Terms on a regular basis.
</br></br>
11. Assignment
</br></br>
The FillTheGaps is allowed to assign, transfer, and subcontract its rights and/or obligations under these Terms without any notification. However, you are not allowed to assign, transfer, or subcontract any of your rights and/or obligations under these Terms.
</br></br>
12. Entire Agreement
</br></br>
These Terms constitute the entire agreement between FillTheGaps and you in relation to your use of this Platform, and supersede all prior agreements and understandings.
</br></br>
13. Governing Law & Jurisdiction
</br></br>
These Terms will be governed by and interpreted in accordance with the laws of the State of South Africa, and you submit to the non-exclusive jurisdiction of the state and federal courts located in South Africa for the resolution of any disputes.</p></br>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
    </section>
    <script type="text/javascript" src="lib/main.js"></script>
    <script type="text/javascript" src="_Javascript/grafintech.js"></script>
  </body>
</html>
