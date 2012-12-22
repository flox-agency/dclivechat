
<div class="page_header">
	<span class="h3">
		<?php echo $this->Js->link('Visiteurs sur votre site',
								array('action' => 'ajaxActivesVisits'),
								array('update'=>'.activity_list')); ?>
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
		<div class="activity_list">
			<?php echo $this->element('activesVisitsList');?>
		</div>
	</div>
</div>





