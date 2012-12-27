<?php echo $this->Html->css('dc_chatpanel')?>



<div class="title_bar" style="left: 0px;right: 0px;position: absolute;z-index: 1000;">
	
    <div>
        <div class="avatar_icon avatar_9" style="float:left"></div>
        <div class="h3 visitor_name" style="float:left">
            John Doe
        </div>
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
                                    <td class="v_details_img" ><div class="avatar_big_icon avatar_9" style=""></div></td>
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
                                    </div></td>
                                </tr>
                            </table>

                            <div style="position: relative;">
                                <div style="position: relative;" tooltipalign="left" >
                                    <textarea placeholder="Add visitor notes" name="notes" class="visitor_notes info placeholder" ></textarea>
                                </div>
                            </div>

                            <div class="tab_container" >
                                <div class="tab_content" style="display: block;">
                                    <div class="quick_stats">
                                        <div class="boxie">
                                            <div class="big_num">
                                                23
                                            </div>
                                            <div class="boxie_label" >
                                                Past Visits
                                            </div>
                                        </div>
                                        <div class="boxie">
                                            <div class="big_num">
                                                10
                                            </div>
                                            <div class="boxie_label">
                                                Past Chats
                                            </div>
                                        </div>
                                        <div class="boxie">
                                            <div class="big_num">
                                                5 hr
                                            </div>
                                            <div class="boxie_label">
                                                Time on Site
                                            </div>
                                        </div>
                                    </div>
                                    <div style="clear: both; height: 0px;"></div>
                                    <div class="boxie web_path meshim_dashboard_components_chatPanel_Webpath" style="position: relative; width: 100%; overflow: auto;">
                                        <div class="boxie_label">
                                            Visitor Path
                                        </div>
                                        <div style="display: block;" class="webpath_renderer">
                                            <div style="float: left;" class="webpath">
                                                <span class="referrer icon"></span>
                                            </div>
                                            <div class="path_title">
                                                Direct Traffic
                                            </div>
                                        </div>
                                        <div style="display: none;" class="webpath_renderer meshim_dashboard_components_chatPanel_WebpathRenderer">
                                            <div style="float: left;" class="webpath">
                                                <span class="path icon"></span>
                                            </div>
                                            <div style="float: left; display: none;"></div>
                                            <a target="_blank"> <div class="path_title"></div> </a>
                                        </div>
                                        <div class=" meshim_common_FilteredList">
                                            <div>
                                                <div></div>
                                                <div style="display: block;" class="webpath_renderer meshim_dashboard_components_chatPanel_WebpathRenderer">
                                                    <div style="float: left;" class="webpath" >
                                                        <span class="path icon"></span>

                                                    </div>
                                                    <div style="float: left; display: none;"></div>
                                                    <a target="_blank"> <div class="path_title"></div> </a>
                                                </div>
                                            </div>
                                            <div class="list_placeholder">
                                                <span></span>
                                            </div>
                                            <div>
                                                <div style="display: block;" class="webpath_renderer meshim_dashboard_components_chatPanel_WebpathRenderer">
                                                    <div style="float: left;" class="webpath">
                                                        <span class="path icon"></span>
                                                    </div>
                                                    <div style="float: left; display: none;"></div>
                                                    <a target="_blank" href="https://www.zopim.com/landing/simulate?accountId=r9ZizIgCLDo5CoXQSz77FP5zjRmmgCwp">
                                                    <div class="path_title" >
                                                        Simulate Visitor on Zopim
                                                    </div> </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="boxie integrations meshim_dashboard_components_chatPanel_Integrations"  style="display: none;">
                                        <button class="button refresh">
                                            Refresh
                                        </button>
                                        <div class="container"></div>
                                    </div>
                                    <div class="boxie zone3" style="width: 100%;">
                                        <div class="boxie_label">
                                            Location
                                        </div>
                                        <div>
                                            Nancy, Lorraine, France
                                        </div>
                                        <div class="boxie_label" >
                                            Browser
                                        </div>
                                        <div>
                                            Chrome 23.0.1271.101
                                        </div>
                                        <div class="boxie_label">
                                            Platform
                                        </div>
                                        <div>
                                            Mac OS X 10.8.2
                                        </div>
                                        <div class="boxie_label">
                                            Device
                                        </div>
                                        <div>
                                            -
                                        </div>
                                        <div class="boxie_label">
                                            IP Address
                                        </div>
                                        <div>
                                            78.230.70.36
                                        </div>
                                        <div class="boxie_label">
                                            Hostname
                                        </div>
                                        <div>
                                            4be54-7-78-230-70-36.fbx.proxad.net
                                        </div>
                                        <div class="boxie_label">
                                            User Agent
                                        </div>
                                        <div>
                                            Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_2) AppleWebKit/537.11 (KHTML, like Gecko) Chrome/23.0.1271.101 Safari/537.11
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
  
  <div style="top: 0px; right: 300px; bottom: 0px; left: 10px; overflow: auto; position: absolute;">
      <div style="margin: 0px; position: relative; z-index: 98; height: 40px;margin-bottom: 10px;" class="page_header" >
            <div style="float: left;"  class="button_bar">
                <button value="0" class="option active" tabindex="4">
                    Current Chat
                </button>
                <button value="1" class="option" tabindex="5">
                    Past Chats (10)
                </button>
                
            </div>
        </div>
        <div style="overflow: auto; top: 34px; right: 0px; bottom: 0px; left: 0px; position: absolute;" class="chat_content">
            <div>
            	<div class="conversation_log meshim_dashboard_components_chatPanel_ChatView" style="overflow: hidden; position: absolute; top: 0px; right: 0px; bottom: 0px; left: 0px; display: block;">
                      <div style="position: absolute; top: 5px; right: 0px; bottom: 162px; left: 0px; overflow: auto;" class="chat_log" >
                            <div style="z-index: 200; top: 0px; bottom: 0px; left: 0px; right: 0px; overflow: hidden; position: absolute;" class="chat_log_holder scrollable_frame meshim_dashboard_components_widgets_ScrollableFrame">
                                <div style="width: 100%; height: 100%; overflow: hidden;">
                                     <div style="width: 100%; height: 100%; padding-right: 40px; -moz-box-sizing: content-box; position: relative; overflow-y: scroll;">
                                         <div>
                                             <div class=" jx_controls_List no_translate">
                                             	 <div >
                                             	 	  <div></div>
                                             	 	   <div class="typing">
                                             	 	   	<?php if(!empty($conversation)) : ?>
                                                         <ul>
                                                         	<li>
		                                                            <?php foreach ($conversation['Message'] as $message) :?>
                                                         		       <p><?php echo $message['message']; ?></p>
                                                         			<?php endforeach ?>
                                                         	</li>
                                                         	
                                                         </ul>
                                                         <?php endif ?>
                                                          
                                                       </div>
                                             	 </div>
                                             	
                                             </div>
                                         </div>
                                         
                                         <div style="position: absolute; top: 0px; right: 0px; height: 100%; width: 10px; display: none; z-index: 99999;" class="proxy_container">
                                             <div style="height: 206px; width: 10px; position: absolute; right: 0px; top: 0px;">
                                                 <div style="position: absolute; width: 10px; height: 100%; right: 0px;" class="proxy_scrollbar">

                                                 </div>
                                             </div>
                                         </div>
                                         
                                     </div>
                               </div>
                          </div>    
                     </div>
                     <div class="chat_controller meshim_dashboard_components_chatPanel_ChatTextArea" style="width: 100%; position: absolute; bottom: 0px; left: 0px;">
                          <div class="chat_actions_container focus" style="position: relative; overflow: hidden;">
                               <div class="textfieldlist_container" style="height: 140px;">
                                    <textarea class="chat_input valid placeholder" style="overflow: auto; height: 140px;" tabindex="7" onkeydown="javascript: return checkChatboxInputKey(event,this);" visitorId='<?php echo $visitorId; ?>'></textarea>

                    
                               </div>
                               <div style="overflow: auto; position: absolute; top: 0px; bottom: 0px; right: 0px; left: 0px; display:none;" class="chat_action_panel" >
                                   <div class="container" style="display: table; overflow: hidden; width: 100%; height: 100%;">
                                       <div class="container_middle" style="vertical-align: middle; display: table-cell; width: 100%;" >
                                           <div style="margin-left: auto; margin-right: auto; text-align: center; padding: 10px; display: table;" >
                                               <span class="offline_message" >Don has gone offline.</span>
                                               <button class="button" style="margin-left: 10px; display: none; position: relative; top: -2px;" >Yes</button>
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
</div>
<script type="text/javascript">
	function checkChatboxInputKey (event,chatboxtextarea) {
	  //Si la touche appuyée est "Entrée" 
	  if(event.keyCode == 13 && event.shiftKey == 0) {
	     
	     var data = new Object();
	     var visitorInfo = JSON.parse(localStorage.getItem('visitorInfo'));

	     data.message = $('.chat_input').val();
	     data.visitorId = $('.chat_input').attr('visitorId');

	     $('.chat_input').val('');

	     $.ajax({
	     	type : 'POST',
			url:"\/dclivechat\/messages\/send",
			dataType:"html", 
			data : data,
			success : function (data) {
			}
		});
	     return false;
	  }
	}

	function refreshList () {
		var data = new Object();

		ts = localStorage.getItem('ts');

		if(!ts) ts = 0;

		var now = new Date(),
			nowTs = Math.round( (now.getTime()/1000)+(now.getTimezoneOffset()*60));

		localStorage.setItem('ts',nowTs);


		data.visitorId = $('.chat_input').attr('visitorId');
		data.ts = ts;

		$.ajax({
			url:"\/dclivechat\/messages\/poll",
			dataType:"html",
			data: data, 
			success : function (data) {
				$(".typing").html(data);
				refreshList();
			}
		});
		return false;
	}
	
	refreshList();
</script>

	

