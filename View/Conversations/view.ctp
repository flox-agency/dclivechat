<?php echo $this->Html->css('dc_chatpanel')?>
<div class="title_bar" style="left: 0px;right: 0px;position: absolute;z-index: 1000;">
	<div>
		<div class="avatar_icon avatar_9" style="float:left"></div>
		<div class="h3 visitor_name" style="float:left">John Doe</div>
		<div class="icon_holder" style="float:left">
			<div style="padding: 3px; display: inline-block;" alt="Paris, Ile-de-France, France">
				<div class="flag flag-fr" ></div>
			</div>
			<div style="padding: 1px; display: inline-block;" alt="Mac OS X 10.6.8">
				<div class="platform Apple"></div>
			</div>
			<div style="padding: 1px; display: inline-block;" alt="Chrome 23.0.1271.101">
				<div class="browser Chrome" ></div>
			</div>
		</div>
	</div>
</div>
<div style="width: 100%; position: absolute; top: 44px; bottom: 0px; z-index: 999;" >
	<div style="width: 300px; top: 0px; right: 0px; bottom: 0px; position: absolute;">
		<div style="z-index: 1; top: 0px; bottom: 0px; left: 0px; right: 0px; overflow: hidden; position: absolute;" class="visitor_details scrollable_frame side_chat_profile">
			<div style="width: 100%; height: 100%; overflow: hidden;">
				<div style="width: 100%; height: 100%; padding-right: 40px; box-sizing: content-box; position: relative; overflow-y: scroll;">
					<div style="width: 280px;">
						<div class="section">
							<table class="setting_section_table" style="width: 100%;" >
								<tr>
									<td class="v_details_img" >
										<div class="avatar_big_icon avatar_9" style=""></div>
									</td>
									<td style="width: 100%;" >
										<div style="position: relative;" >
											<div style="position: relative;" >
												<input placeholder="Add name" required="" autocomplete="off" type="text" class="visitor_name info" name="name">
											</div>
										</div>
										<div style="position: relative;">
											<div style="position: relative;" tooltipalign="left" >
												<input placeholder="Add email" required="" autocomplete="off" type="email" class="visitor_email info placeholder" name="email" >
											</div>
										</div>
									</td>
								</tr>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<div >
	<?php if(!empty($conversation)) : ?>
		<?php foreach ($conversation['Message'] as $message) :?>	
			<p><?php echo $message['message']; ?></p>
		<?php endforeach ?>
	<?php endif ?>
</div>
<textarea style="width:100%"></textarea>