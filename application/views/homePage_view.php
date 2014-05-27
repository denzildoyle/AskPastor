<!DOCTYPE html>
<!--[if IE 8]> 				 
	<html class="no-js lt-ie9" lang="en" >
<![endif]-->
<!--[if gt IE 8]>
	<!--> <html class="no-js" lang="en" > 
<!--<![endif]-->

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width" />
  <title>Ask Pastor</title>
  <link rel="stylesheet" href="<?=base_url(). "public/"?>css/normalize.css" />
  <link rel="stylesheet" href="<?=base_url(). "public/"?>css/foundation.css" />
  <script src="<?=base_url(). "public/"?>js/vendor/custom.modernizr.js"></script>
  <link rel="stylesheet" type="text/css" href="<?=base_url(). "public/" ?>css/base.css" media="screen" />

</head>
<body>
<!-- Nav Bar -->

  <div class="row">
    <div class="large-12 columns">
      <div class="nav-bar right">
       <ul class="button-group">
         <li><a href="#" class="button">Ask Question</a></li>
         <li><a href="#" class="button">Help</a></li>
         <li><a href="#" class="button">Contact Us</a></li>
         <li><a href="#" class="button">About Us</a></li>
        </ul>
      </div>
      <h1>AskPastor.com</h1>
      <hr />
    </div>
  </div>

  <!-- End Nav -->


  <!-- Main Page Content and Sidebar -->

  <div class="row">

    <!-- Main Blog Content -->
    <div class="large-9 columns" role="content">
		<div>
			<article>
		    	<h3><a href=""><?=$questionTitle?></a> </h3>
				<p class="question">Question: <?=$question?></p>
				<p class="time">Date Posted: <?=$timeUploaded?></p>
				<p class="username">Username: <?=$username?></p>
		    </article>
		    <hr />
		    <article>
		    	<h3>Pastor Name: <?=$pastorName?></h3>
				<p class="answer">Answer: <?=$answer?></p>
				<p class="time">Date Answered: <?=$timeAnswered?></p>
			</article>
		</div>
	</div>
    <!-- End Main Content -->

    <!-- Sidebar -->
    <aside class="large-3 columns">
      <h5>Hot Topics</h5>
      <ul class="side-nav">
        <li><a href="#">What not to eat</a></li>
        <li><a href="#">Sex before marriage</a></li>
        <li><a href="#">What to wear</a></li>
        <li><a href="#">Day of worship</a></li>
      </ul>

      <div class="panel">
        <h5>Featured</h5>
        <p>Pork drumstick turkey fugiat. Tri-tip elit turducken pork chop in. Swine short ribs meatball irure bacon nulla pork belly cupidatat meatloaf cow.</p>
        <a href="#">Read More &rarr;</a>
      </div>
    </aside>
    <!-- End Sidebar -->
  
  </div>

  <!-- End Main Content and Sidebar -->


  <!-- Footer -->

  <footer class="row">
    <div class="large-12 columns">
      <hr />
      <div class="row">
        <div class="large-6 columns">
          <p>&copy; Copyright no one at all. Go to town.</p>
        </div>
        <div class="large-6 columns">
          <ul class="inline-list right">
            <li><a href="#">Link 1</a></li>
            <li><a href="#">Link 2</a></li>
            <li><a href="#">Link 3</a></li>
            <li><a href="#">Link 4</a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
  <script>
    $(document).foundation();
  </script>
</body>
</html>
