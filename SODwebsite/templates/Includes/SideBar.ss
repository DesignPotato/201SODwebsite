<div class="col-sm-12 logo">
    <div class="span4"></div>
    <div class="span4"><img src="$ThemeDir/img/SoD__HeaderImg.png" class="img-responsive center-block" /></div>
    <div class="span4"></div>                    
</div>	        	
<div class="col-sm-12 about">
    <div class="row hmHeading">ABOUT THE SOD</div>
    <div class="row hmText">
        <p style="padding:10px;">
        	The School of Design at Victoria University offers
			students a unique opportunity to study within a
			multi-disciplinary environment.<br/> Located in Wellington,
			New Zealand the creative capital, we attract the best
			and brightest from all over the world.
		</p>
    </div>
</div>
<div class="col-sm-12 menu">
    <ul class="nav nav-stacked">
    <% loop $Menu(1) %>
    	<li><a class="$linkingMode menuLinks" href="$Link">$MenuTitle</a></li>
    <% end_loop %>
    </ul>
</div>	