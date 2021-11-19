function updateSports(id)
{
	window.location = "Sports.php?cmd=upd&id=" + id;
}

function deleteSports(id)
{
	if(confirm("Are your sure want to delete ID:" + id + " ?"))
	{
		window.location = "Sports.php?cmd=del&id=" + id;
	}
}