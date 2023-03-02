function myFunction(id)
			{
			   var r = confirm("Are you sure you want to delete this record?");
               
			   if(r == true)
			   {
               window.location.assign("delete?id=" + id);  
			   }
			}
function RoomFunction(id)		{
	var delroom = confirm("Are you sure you want to delete this record?");
	
	if(delroom == true)
	{
	window.location.assign("deleteRoom?id=" + id);  
	}
 }
 function GuestFunction(id)		{
	var delguest = confirm("Are you sure you want to delete this record?");
	
	if(delguest == true)
	{
	window.location.assign("deleteGuest?id=" + id);  
	}
 }
 

    