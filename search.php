<?php
error_reporting(1);
 session_start();
	//All QUERIES REQUIRED ON LANDING PAGE
	include"connect.php";	
	// Services
	$service = $pdo->prepare("SELECT * FROM subjects  ORDER BY timestamp ASC");
	$service->execute();
	$thesubjects = $service->fetchAll();
	
	//GET USER tYPED IN  VARIABLE
		$theid = $_GET['subject'];
		
	if($theid){
		$var1 = $_GET['search'];
		$province = "National";
		$grade = $_GET['grade'];
		$subject = $_GET['subject'];
		$term = $_GET['term'];
		$year = $_GET['year'];
		$tshifhinga = time();
		
		//Save the search record to database
		$thefullsearch = "$var1 $subject $grade $term $year $province ";
		
		$saves = "INSERT INTO searches (query,province, grade, subject , timestamp ) VALUES (?,?,?,?,?)";
		//Prepare Statements
		$spush= $pdo->prepare($saves);
		//Execution
		$spush->execute([$thefullsearch , $province, $grade, $subject, $tshifhinga]);

		/**
		if($subject || $grade || $year || $term || $province || $kind){
		//CHECK IF ALL INPUTS ARE FILLED
		$searchs = "SELECT * FROM papers WHERE province	= ? AND grade = ? AND subject = ? AND name LIKE ? OR name LIKE ? AND name LIKE ? ORDER BY timestamp DESC LIMIT 15";
		$params = array("$province","$grade","$subject", "%$term%","%$year%","%$kind%");
		}elseif($province || $grade || $subject || $term || $year ){
			
			$searchs = "SELECT * FROM papers WHERE province	= ? AND grade = ? AND subject = ? AND term = ? AND name LIKE ?  ORDER BY timestamp DESC LIMIT 15";
		$params = array("$province","$grade","$subject", "$term","%$year%");
		
		}elseif($province || $grade || $subject || $term  ){
			//IF USER LEFT OUT SOME
			$searchs = "SELECT * FROM papers WHERE province	= ? AND grade = ? AND subject = ? AND name LIKE ? ORDER BY timestamp DESC LIMIT 15";
		$params = array("$province","$grade","$subject", "%$term%");
		
		}elseif($province || $grade || $subject   ){
			//IF USER LEFT OUT SOME
			$searchs = "SELECT * FROM papers WHERE province	= ? AND grade = ? AND subject = ? ORDER BY timestamp DESC LIMIT 15";
		$params = array("$province","$grade","$subject");
		
		}elseif($subject || $grade ){
			//IF USER LEFT OUT SOME
			$searchs = "SELECT * FROM papers WHERE province	= ? AND grade = ?  ORDER BY timestamp DESC LIMIT 15";
		$params = array("$province","$grade");
		
		}else{
			//IF USER LEFT OUT SOME
			$searchs = "SELECT * FROM papers WHERE subject = ? AND grade = ? AND name LIKE ? ORDER BY timestamp DESC LIMIT 150";
		$params = array("$subject","$grade","%$year%");
		
		}
	***/
		//THE QUESTION PAPERS SEARCH ENGINE
		
		if($subject && $grade  && $year && $province && $term  && $kind ){
			
		$searchs = "SELECT * FROM papers WHERE subject = ? AND grade = ? AND name LIKE ? AND name LIKE ? AND province = ? AND name LIKE ? ORDER BY timestamp DESC LIMIT 150";
		$params = array("$subject","$grade","%$year%","%$term%","$province","%$kind%");
		$stmt = $pdo->prepare($searchs);
		$stmt->execute($params);
		$QP = $stmt->fetchAll();
			
		}elseif($subject && $grade  && $year  && $term  && $province){
			
						$searchs = "SELECT * FROM papers WHERE subject = ? AND grade = ? AND name LIKE ? AND name LIKE ? AND province = ? ORDER BY timestamp DESC LIMIT 150";
		$params = array("$subject","$grade","%$year%","%$term%","$province");
		$stmt = $pdo->prepare($searchs);
		$stmt->execute($params);
		$QP = $stmt->fetchAll();
			
		}elseif($subject && $grade  && $year && $term ){
			
				$searchs = "SELECT * FROM papers WHERE subject = ? AND grade = ? AND name LIKE ? AND name LIKE ? ORDER BY timestamp DESC LIMIT 150";
		$params = array("$subject","$grade","%$year%","%$term%");
		$stmt = $pdo->prepare($searchs);
		$stmt->execute($params);
		$QP = $stmt->fetchAll();
			
		}elseif($subject && $grade  && $year){
			
			
		$searchs = "SELECT * FROM papers WHERE subject = ? AND grade = ? AND name LIKE ? ORDER BY timestamp DESC LIMIT 150";
		$params = array("$subject","$grade","%$year%");
		$stmt = $pdo->prepare($searchs);
		$stmt->execute($params);
		$QP = $stmt->fetchAll();
			
		}elseif($subject && $grade  ){
			
			
			$searchs = "SELECT * FROM papers WHERE subject = ? AND grade = ?  ORDER BY timestamp DESC LIMIT 150";
		$params = array("$subject","$grade");
		$stmt = $pdo->prepare($searchs);
		$stmt->execute($params);
		$QP = $stmt->fetchAll();
			
		}elseif($subject){
			
			$searchs = "SELECT * FROM papers WHERE subject = ? ORDER BY timestamp DESC LIMIT 150";
		$stmt = $pdo->prepare($searchs);
		$stmt->execute([$subject]);
		$QP = $stmt->fetchAll();
			
		}else{
			$erres = "All Fields Empty, Please fill some, if not all. All The Best...";
		}
		
	}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Looking for a way to reach your highest potential? Look no further than FillTheGaps. Our search engine is designed specifically for high school students looking for past exams papers. With our easy-to-use interface, you'll be able to find the papers you need in no time. So why wait? Start your search today! ">
    <title>FillTheGaps: <?php if($subject){
	echo"$subject $grade $term";
	}		?> </title>
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
           <?php include"bottomnav.php"; ?>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="columns">
	
                <div class="column is-6 is-offset-3">
			
<?php include"content.php"; ?>
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


