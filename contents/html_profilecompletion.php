<div class="uMnUsrS"> 
         <div class="globalBoxHeader" style="background-color:#e74c3c;color:#ffffff !important;-webkit-border-top-left-radius: 3px;-webkit-border-top-right-radius: 3px;-moz-border-radius-topleft: 3px;-moz-border-radius-topright: 3px;border-top-left-radius: 3px;border-top-right-radius: 3px;"><div style="position:absolute;width:<?php echo $equal;?>%;height:100%;background-color:#1565c0;top:0px;left:0px;-webkit-border-top-left-radius: 3px;-webkit-border-top-right-radius: 3px;-moz-border-radius-topleft: 3px;-moz-border-radius-topright: 3px;border-top-left-radius: 3px;border-top-right-radius: 3px;-moz-animation: pcompleteProgress 2s forwards linear;-webkit-animation: pcompleteProgress 2s forwards linear;animation: pcompleteProgress 2s forwards linear;"></div><div class="tnt" style="z-index:1;"><?php echo $page_Lang['profile_completions'][$dataUserPageLanguage];?></div><div style="position: absolute;right: 10px;top: 14px;color:#ffffff;font-weight: 400;font-size: 14px;z-index: 1;">%<?php echo $equal;?></div></div> 
         <div class="suggestedBoxRight">
               <?php echo isset($data['user_avatar']) ? '<div class="completeBox"><span class="completedIcon">'.$Dot->Dot_SelectedMenuIcon('completed_profile').'</span><span class="completeText">'.$page_Lang['complete_add_your_avatar'][$dataUserPageLanguage].'</span></div>' : '<a href="'.$base_url.'profile/'.$dataUsername.'"><div class="completeBox"><span class="completedIcon">'.$Dot->Dot_SelectedMenuIcon('add_complete').'</span><span class="notcompleteText">'.$page_Lang['complete_add_your_avatar'][$dataUserPageLanguage].'</span></div></a>'; 
              echo $Dot->Dot_GetUserInterestedList($uid) ? '<div class="completeBox"><span class="completedIcon">'.$Dot->Dot_SelectedMenuIcon('completed_profile').'</span><span class="completeText">'.$page_Lang['complete_add_your_interested'][$dataUserPageLanguage].'</span></div>' : '<a href="'.$base_url.'settings#intereset_items"><div class="completeBox"><span class="completedIcon">'.$Dot->Dot_SelectedMenuIcon('add_complete').'</span><span class="notcompleteText">'.$page_Lang['complete_add_your_interested'][$dataUserPageLanguage].'</span></div></a>';
			  echo isset($data['user_cover']) ? '<div class="completeBox"><span class="completedIcon">'.$Dot->Dot_SelectedMenuIcon('completed_profile').'</span><span class="completeText">'.$page_Lang['complete_add_your_cover'][$dataUserPageLanguage].'</span></div>' : '<a href="'.$base_url.'profile/'.$dataUsername.'"><div class="completeBox"><span class="completedIcon">'.$Dot->Dot_SelectedMenuIcon('add_complete').'</span><span class="notcompleteText">'.$page_Lang['complete_add_your_cover'][$dataUserPageLanguage].'</span></div></a>'; 
			  echo isset($data['country']) ? '<div class="completeBox"><span class="completedIcon">'.$Dot->Dot_SelectedMenuIcon('completed_profile').'</span><span class="completeText">'.$page_Lang['complete_add_your_country'][$dataUserPageLanguage].'</span></div>' : '<a href="'.$base_url.'settings"><div class="completeBox"><span class="completedIcon">'.$Dot->Dot_SelectedMenuIcon('add_complete').'</span><span class="notcompleteText">'.$page_Lang['complete_add_your_country'][$dataUserPageLanguage].'</span></div></a>';
			  echo isset($data['user_profile_word']) ? '<div class="completeBox"><span class="completedIcon">'.$Dot->Dot_SelectedMenuIcon('completed_profile').'</span><span class="completeText">'.$page_Lang['complete_add_about_yourself'][$dataUserPageLanguage].'</span></div>' : '<a href="'.$base_url.'settings"><div class="completeBox"><span class="completedIcon">'.$Dot->Dot_SelectedMenuIcon('add_complete').'</span><span class="notcompleteText">'.$page_Lang['complete_add_about_yourself'][$dataUserPageLanguage].'</span></div></a>';	
			   echo isset($data['user_bio']) ? '<div class="completeBox"><span class="completedIcon">'.$Dot->Dot_SelectedMenuIcon('completed_profile').'</span><span class="completeText">'.$page_Lang['complete_add_your_bio'][$dataUserPageLanguage].'</span></div>' : '<a href="'.$base_url.'settings"><div class="completeBox"><span class="completedIcon">'.$Dot->Dot_SelectedMenuIcon('add_complete').'</span><span class="notcompleteText">'.$page_Lang['complete_add_your_bio'][$dataUserPageLanguage].'</span></div></a>';	
			   echo isset($data['user_job_title']) ? '<div class="completeBox"><span class="completedIcon">'.$Dot->Dot_SelectedMenuIcon('completed_profile').'</span><span class="completeText">'.$page_Lang['complete_add_your_job'][$dataUserPageLanguage].'</span></div>' : '<a href="'.$base_url.'settings"><div class="completeBox"><span class="completedIcon">'.$Dot->Dot_SelectedMenuIcon('add_complete').'</span><span class="notcompleteText">'.$page_Lang['complete_add_your_job'][$dataUserPageLanguage].'</span></div></a>';	
			   if($data['user_relationship'] == 'unspecified'){
				     echo '<a href="'.$base_url.'settings"><div class="completeBox"><span class="completedIcon">'.$Dot->Dot_SelectedMenuIcon('add_complete').'</span><span class="notcompleteText">'.$page_Lang['complete_add_your_relationshipstatus'][$dataUserPageLanguage].'</span></div></a>';
			   }else{
			         echo '<div class="completeBox"><span class="completedIcon">'.$Dot->Dot_SelectedMenuIcon('completed_profile').'</span><span class="completeText">'.$page_Lang['complete_add_your_relationshipstatus'][$dataUserPageLanguage].'</span></div>';
			   }
			   if($data['user_sexuality'] == 'unspecified'){
				     echo '<a href="'.$base_url.'settings"><div class="completeBox"><span class="completedIcon">'.$Dot->Dot_SelectedMenuIcon('add_complete').'</span><span class="notcompleteText">'.$page_Lang['complete_add_your_sexuality'][$dataUserPageLanguage].'</span></div></a>';
			   }else{
			         echo '<div class="completeBox"><span class="completedIcon">'.$Dot->Dot_SelectedMenuIcon('completed_profile').'</span><span class="completeText">'.$page_Lang['complete_add_your_sexuality'][$dataUserPageLanguage].'</span></div>';
			   } 
			   echo isset($data['shopping_full_address']) ? '<div class="completeBox"><span class="completedIcon">'.$Dot->Dot_SelectedMenuIcon('completed_profile').'</span><span class="completeText">'.$page_Lang['complete_add_your_address'][$dataUserPageLanguage].'</span></div>' : '<a href="'.$base_url.'settings"><div class="completeBox"><span class="completedIcon">'.$Dot->Dot_SelectedMenuIcon('add_complete').'</span><span class="notcompleteText">'.$page_Lang['complete_add_your_address'][$dataUserPageLanguage].'</span></div></a>';		 
			  ?>
         </div>
</div>