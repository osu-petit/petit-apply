<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity=sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN crossorigin="anonymous">
<form action="register.php" method="post">
	<center>
	<input placeholder="osu! Username" name="username" required/>
	<label class="radio-inline"><input type="radio" name="mode" value="osu">osu!</label>
	<label class="radio-inline"><input type="radio" name="mode" value="taiko">Taiko</label>
	<label class="radio-inline"><input type="radio" name="mode" value="ctb">CatchTheBeat</label>
	<label class="radio-inline"><input type="radio" name="mode" value="mania">osu!mania</label>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<button type="submit" class="btn btn-info"><i class="fa fa-sign-in"></i>&nbsp;다음</button>
	</center>
</form>
