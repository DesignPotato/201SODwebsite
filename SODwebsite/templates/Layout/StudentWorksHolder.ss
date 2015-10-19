<% include FilterBar %>

<div class="row breadCrumbs">
    $Breadcrumbs
</div>

<div id ="main">  
    $Content

    <% loop $Children %>
        <div style="border: 1px solid black">
            <h2><a href="$Link">$Title</a></h2>
            <p>$Discipline $Paper</p>
            $Photo.SetWidth(100)
        </div>
    <% end_loop %>

</div>





