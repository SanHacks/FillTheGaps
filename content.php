  <?php
  $message = "I would love to Share ";
	$end = " With You";
 
  	foreach($QP as $ournewss){
		
			$bids = $ournewss['id'];
			$btitles = $ournewss['subject'];
			$bsubtitles = $ournewss['grade'];
			$bsubtitles = $ournewss['grade'];
			$pp = $ournewss['paper'];
			$des = $ournewss['name'];
			$btimes = $ournewss['timestamp'];
			$addview = "1";
			
			
			if($btitles){
				//UPDATE PAPER VIEWS
				$update = $pdo->prepare("UPDATE papers
					 SET views = views + 1
					 WHERE id= ?");
				$update->execute([$bids]);
				echo"
				    <div class='modal'>
  <div class='modal-background'></div>
  <div class='modal-content'>
    <!-- Any other Bulma elements you want -->
  </div>
  <button class='modal-close is-large' aria-label='close'></button>
</div>
				    <div class='card is-centered'>
 
            <a href='paper.php?paper=$bids'> 
			
			<div class='card-content' style='color:black'>
			   <div class='buttons '>
 <a href='subject.php?subject=$btitles'> <button class='button is-dark is-fullwidth is-rounded'><i class='fa fa-school' aria-hidden=''true' ></i>   $btitles</button></a> 
 <a href='grade.php?grade=$bsubtitles'> <button class='button is-dark is-fullwidth is-rounded'><i class='fa fa-graduation-cap' aria-hidden=''true' ></i> $bsubtitles</button></a>
 <a href='year.php?year=$year&subject=$bititles'> <button class='button is-dark  is-fullwidth is-rounded'><i class='fa fa-calendar' aria-hidden=''true' ></i> 
 $year</button></a>
 <a href='term.php?term=$term'> <button class='button is-dark  is-fullwidth is-rounded'>
 <i class='fa fa-time' aria-hidden=''true' ></i>
 $term</button></a> 

</div>
         <div class='content'>
		 $des
            </div>

          </div></a>
       <div class='buttons is-fullwidth'>
 <a href='$pp'> <button class='button is-rounded  is-link'>    <i class='fa fa-download' aria-hidden=''true' ></i> Download Paper</button></a>

 <a href='paper.php?paper=$bids'> <button class='button is-rounded is-success  is-link'>    <i class='fa fa-eye' aria-hidden=''true' ></i> View Paper</button></a>

</div>
</div></br>
";
			}
	}
	?>
	