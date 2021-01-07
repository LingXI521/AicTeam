<?php
include '../includes/common.php';
class Add{
	function links($title,$passage,$url,$status){
		if($AT->query("INSERT INTO `autive_links` (`Uid`, `Title`, `passage`, `url`, `active`) VALUES ('0', '".$title."', '".$passage."', '".$url."', '".$status."')")){
			return true;
		}else {
			return false;
		}
		
	}
}
?>