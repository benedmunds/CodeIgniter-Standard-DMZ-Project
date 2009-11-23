<ul>
  <?php $numOfItems = count($main_menu);?>
  <?php foreach ($main_menu as $key => $item):?>
 	 <?php if ($this->session->userdata('group_id') && $item->group_id == $this->session->userdata('group_id') || $item->group_id == '0'):?>
        <?php if ($item->require_login && $this->auth->logged_in() || !$item->require_login):?>
	        	<?php if($key != $numOfItems-1 && $key != 0):?>
	           		<li class="separator">|</li>
	            <?php endif;?>
	        <li
	           <?php 
	              if ($this->uri->segment(1)==$item->controller) {
	              	if ($key == 0) {
	                 	echo " class='firstCurrent'";
	              	}
	              	else {
	              		echo " class='current'";
	              	}
	              } 
	              elseif ($key == 0) {
	                 echo ' class=first'; 
	              } 
	              else {	
	              	 echo ' class=link';
	              }
	           ?>
	        >
	           <?php 
	           		if ($item->url != '') {
	           			echo "<a href='" .$item->url. "' target='_blank'>" .$item->title. "</a>";
	           	    }
	           	    else {
	           	    	echo anchor($item->controller .'/'. $item->view,$item->title);
	           	    }
	           ?>
	           
	        </li>
	     <?php endif;?>
  	 <?php endif;?>  	   
  <?php endforeach;?>
</ul>