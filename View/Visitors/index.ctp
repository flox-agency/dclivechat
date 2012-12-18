<?php echo $this->Analytique->_constructDB(); ?>
<div class="page_header">
	<span class="h3">
		Visiteurs sur votre site
	</span>
	<div style="float:right">
		<div class="group_count_text" >
			Nombre total de visiteurs<span>:</span>
		</div>
		<div class="group_count">
			<?php echo $this->Analytique->ShowDetail(); ?>
		</div>
	</div>
</div>
<div class="page_content">
	<div class="content_wrapper">
		<div class="activity_list">
			<div class="visitor_list_container">
				<div class="visitor_list_title_header">
					<span >Actuellement servis</span>
					<div style="float:right">
						<div class="group_count_text">
							Visiteurs
							<span>:</span>
						</div>
						<div class="group_count">
							<?php echo $this->Analytique->ShowDetail(); ?>
						</div>
					</div>
				</div>
				<div style="clear: both;"></div>
				<div>
					<div class='list_header'>
						<div class="header_bar visitor_table">
							<div class="table_header status_cell" style='float:left'>
								#
							</div>
							<div class="table_header name_cell" style="float: left;" >
								<span >Visitor</span>
							</div>
							<div class="table_header icons_cell" style="float: left;">-</div>
							<div class="table_header time_cell" style="float: left;" >
								<span>En ligne</span>
							</div>
							<div class="table_header served_cell" style="float: left;" >
								<span style="width: 100%;">Servi par</span>
							</div>
							<div class="table_header numbers_cell" style="float: right;" >
								<span style="width: 100%;" ># Chats</span>
							</div>
							<div class="table_header numbers_cell" style="float: right;" >
								<span style="width: 100%;" ># Visites</span>
							</div>
							<div class="table_header page_cell" style="float: right;" ><span style="width: 100%;" >Adresse IP</span></div>
							<div class="table_header title_cell">
								<span style="width: 100%;">Page</span>
							</div>
							<div class="table_header message_cell">
								<span style="width: 100%;">Message</span>
							</div>
						</div>
					</div>
					<div class="list">
						<div class="list_content">
							<div class="visitorlist_row">
								<div class="visitor_table" style="width:100%">
									<div class="status_cell" style="float: left;">
										<div class="status_icon_served"></div>
									</div>
									<div class="name_cell" style="float: left;" >#92948491</div>
									<div class="icons_cell" style="float: left">
										<div style="padding: 3px; display: inline-block;" alt="Toulouse, Midi-Pyrenees, France">
											<div class="flag flag-fr"></div>
										</div>
										<div style="padding: 1px; display: inline-block; visibility: inherit;" alt="MacOSX">
											<div class="platform Apple"></div>
										</div>
										<div style="padding: 1px; display: inline-block; visibility: inherit;" alt="Chrome">
											<div class="browser Chrome"></div>
										</div>
									</div>
									<div class="time_cell" style="float: left;">5 min</div>
									<div class="served_cell" style="float: left;">jestik</div>
									<div class="numbers_cell" style="float: right;">2</div>
									<div class="numbers_cell" style="float: right;">3</div>
									<div class="page_cell" style="float: right;" >
										<div style="float: left;">
										</div>
										<span style="width: 100%;"><?php echo $this->Analytique->getIPAdress(); ?></span>
									</div>
									<div>
										<span class="number_tag">1</span>
										<span >Page d'accueil</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div>
					</div>
				</div>
			</div>
		</div>

	</div>
</div>