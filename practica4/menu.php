<?php

class menusup
{
	private $link;
	public function disseny()
	{	
		?>
<ul id="menu_navegacion" ><?php echo $this->link;
		$menu[] = array('Inici' => array());
		$menu[] = array('Nosaltres' => array());
		$menu[] = array('Serveis' => array());
		$menu[] = array('Contacte' => array());
		
		foreach ($menu as $menu_key => $menu_item)
		{
			foreach ($menu_item as $menu_name => $sub_menu)
			{
				echo "<li><a href='#'>".$menu_name."</a>";
				if(isset($sub_menu))
				{
					echo "<ul>";
					foreach($sub_menu as $items)
					{
						echo"<li><a href='#'>".$items."</a>";
					}
					echo "</ul>";
				}
				echo "</li>";
			}			
		}
		
	}
}
?>
