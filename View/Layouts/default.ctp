<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('dclivechat');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
	

</head>
<body>
	<div class="container">
		<div class='content'>
			<div class="main_menu">
				azertyuiom
			</div>
			<div class="right_column">
				<div class="right_column_container">
					<div class="page_header">
						<span class="h3">
							Visiteurs sur votre site
						</span>
						<div style="float:right">
							<div class="group_count_text" >
								Nombre total de visiteurs<span>:</span>
							</div>
							<div class="group_count">12 </div>
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
												1
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
												<div class="table_header page_cell" style="float: right;" ><span style="width: 100%;" >Réferrent</span></div>
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
															<span style="width: 100%;">-</span>
														</div>
														<div>
															<span class="number_tag">1</span>
															<span >Simulate Visitor on Zopim</span>
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
				</div>
			</div>
			
		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
