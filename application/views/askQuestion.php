<!doctype html>
<html>
    <head>
        <title>Ask Pastor</title>
        <link rel="stylesheet" type="text/css" href="<?=base_url(). "public/" ?>css/base.css" media="screen" />
    </head>
    <body>
        <nav>
        	<h1>AskPastor.com</h1>
        	<?= form_open('askQestion');?>	
				<input name="answer" type="text" placeholder="Ask Question" pattern=""/>
				<input name="submit" value="GO" type="submit"/>
			<?= form_close();?>
		</nav>

		<h1>Ask Question</h1>
		<div>
			<?= form_open('askQestion');?>	
				<input name="username" type="text" placeholder="username" autofocus />
				<input name="questionTitle" type="text" placeholder="Question Title" />
				<textarea  name="question" rows="5" cols="20" placeholder="Comment"></textarea>
				<input name="submit" value="Send" type="submit"/>
			<?= form_close();?>
		</div>
    </body>
</html>