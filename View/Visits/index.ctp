<?php 
echo $this->Html->script('jqModal');
echo $this->Html->css('jqModal');
?>
<div class="page_header">
	<span class="h3">
		Visiteurs sur votre site
	</span>
	<div style="float:right">
		<div class="group_count_text" >
			Nombre total de visiteurs<span>:</span>
		</div>
		<div class="group_count">

		</div>
	</div>
</div>
<div class="page_content">
	<div class="content_wrapper">
		<div id="actives_visits_list"class="activity_list">
			<?php echo $this->element('visitsList',array('title'=>'Visiteurs actifs','visits'=>$activesVisits));?>
		</div>
		<div id="inactives_visits_list" class="activity_list">
			<?php echo $this->element('visitsList',array('title'=>'Visiteurs inactifs','visits'=>$inactivesVisits));?>
		</div>
	</div>
</div>
<div class="jqmWindow jqmID1" id="dialog" style="z-index: 3000; display: none;">

	<a href="#" class="jqmClose">Close</a>
	<hr>
	<em>READ ME</em> --&gt;
	This is a "vanilla plain" jqModal window. Behavior and appeareance extend far beyond this.
	The demonstrations on this page will show off a few possibilites. I recommend walking
	through each one to get an understanding of jqModal <em>before</em> using it.

	<br><br>
	You can view the sourcecode of examples by clicking the Javascript, CSS, and HTML tabs.
	Be sure to checkout the <a href="README">documentation</a> too!

	<br><br>
	<em>NOTE</em>; You can close windows by clicking the tinted background known as the "overlay".
	Clicking the overlay will have no effect if the "modal" parameter is passed, or if the
	overlay is disabled.
</div>





