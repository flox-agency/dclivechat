<div>
	<div style="width:100%;height:300px;background:#ffffff;border: 1px solid #555555">
		<?php if(!empty($conversation)) : ?>
			<?php foreach ($conversation['Message'] as $message) :?>	
				<p><?php echo $message['message']; ?></p>
			<?php endforeach ?>
		<?php endif ?>
	</div>
	<textarea style="width:100%"></textarea>
</div>