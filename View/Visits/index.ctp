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
</div>





