        // Display link itself.
        $activitylink = html_writer::empty_tag('img', array('src' => $mod->get_icon_url(),
                'class' => 'iconlarge activityicon', 'alt' => ' ', 'role' => 'presentation')) . $accesstext .
                html_writer::tag('span', $instancename . $altname, array('class' => 'instancename'));
        
        if ($mod->uservisible) {
        	
        	if($mod->modfullname == 'Quiz' or $mod->modfullname == 'Emarking'){
        		
        		if($mod_finalgrade == '0' or $mod_finalgrade == NULL){
        			$perfomance = "Rendimiento: --%";
        			$performance_bar = '';
        		}
        		
        		if($roleid != 5){
        			$perfomance = NULL;
        			$performance_bar = '';
        		}
        		$output .= html_writer::link($url, $activitylink, array('class' => $linkclasses, 'onclick' => $onclick)) .
        		$groupinglabel .$perfomance.$performance_bar;
        	}
        	else {
            $output .= html_writer::link($url, $activitylink, array('class' => $linkclasses, 'onclick' => $onclick)) .
                    $groupinglabel;
        	}
        } else {
            // We may be displaying this just in order to show information
            // about visibility, without the actual link ($mod->uservisible)
            $output .= html_writer::tag('div', $activitylink, array('class' => $textclasses)) .
                    $groupinglabel;
        }
        return $output;
