function updateGames(id)
{
	window.location = "Games.php?cmd=upd&id=" + id;
}

function deleteGames(id)
{
	if(confirm("Are your sure want to delete ID:" + id + " ?"))
	{
		window.location = "Games.php?cmd=del&id=" + id;
	}
}