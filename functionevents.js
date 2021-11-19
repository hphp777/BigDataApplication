function updateEvents(id)
{
	window.location = "Events.php?cmd=upd&id=" + id;
}

function deleteEvents(id)
{
	if(confirm("Are your sure want to delete ID:" + id + " ?"))
	{
		window.location = "Events.php?cmd=del&id=" + id;
	}
}