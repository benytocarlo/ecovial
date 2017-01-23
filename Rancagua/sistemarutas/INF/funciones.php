<?php
// no direct access
defined('_JEXEC') or die('Restricted access');
class func {
	function cons_sql($sql){
		if (!$db){
			$db	= & JFactory::getDBO();
		}	
		$db->setQuery($sql);
		$sqlres = $db->loadObjectList();
		return $sqlres;
	}
	
	function cmd_sql($sql){
		if (!$db){
			$db	= & JFactory::getDBO();
		}	
		$db->setQuery($sql);
		$result = $db->query();
		return $result;		
	}	
	function titulo_pag(){		
		$doc =& JFactory::getDocument();
		return $doc->getTitle();		
	}

  function componeurl ($link, $type,$Itemid)
  {
    if ($type == 'url')
    {
      return $link;
    }
    else if ($type == 'separator')
    {
      return "javascript:void(0);";
    }
    else
    { return $link."&Itemid=".$Itemid;}
  }
  function buscaPadre($id)
    {
       $db =& JFactory::getDBO();
       $query = "select * from jos_menu where id='".$id."'";
       $db->setQuery($query);
       $menus = $db->loadObjectList();
       return $menus;    
    }
}	



?>