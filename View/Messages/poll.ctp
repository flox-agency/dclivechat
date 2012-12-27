<?php if(!empty($conversation)) : ?>
	<ul>
		<li>
			<?php foreach ($conversation as $message) :?>
			<p><?php echo $message['Message']['message']; ?></p>
			<?php endforeach ?>
		</li>

</ul>
<?php endif ?>