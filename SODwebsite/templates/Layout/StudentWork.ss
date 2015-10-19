<div id ="main">  
	$Breadcrumbs
	$Content
	
	<h2>$Title</h2>
	<p>By $Designer in $Discipline paper $Paper with $Lecturer as lecturer.</p>
	<p>$Date</p>
	$Photo.SetWidth(600)

	<% if $Brochure %>
	  <div class="row">
	    <div class="col-sm-12"><a class="btn btn-warning btn-block" href="$Brochure.URL"> Download brochure ($Brochure.Extension, $Brochure.Size)</a>
	    </div>
	  </div>
	<% end_if %>

</div>

