<!doctype html>
<html>
    <head>
        <title>Ask Pastor</title>
        <link rel="stylesheet" type="text/css" href="<?=base_url(). "public/" ?>css/base.css" media="screen" />
    </head>
    <body>
        <nav>
        	<h1>AskPastor.com</h1>
			<?= anchor('askQuestion', 'Ask Question', 'class="questionBtn"');?>
		</nav>

		<h1>Questions</h1>

		<!-- loop of questions -->
		<div>
			<article>
				<h3><?=$questionTitle?></h3>
				<p class="question"><?=$question?></p>
				<p class="time"><?=$timeUploaded?></p>
				<p class="username"><?=$username?></p>
				<a href="see answer"></a>
			</article>
		</div>
    </body>
</html>