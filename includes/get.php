<?php
class AI{

	public static function team(){
		global $AT;
		$arow = $AT->query("select * from autive_member where active='true'");
                
            while($awrow = $AT->fetch($arow)){
            echo"
            
            <div class='col-sm-6 col-md-6 col-lg-4'>
            <div class='team-item text-center'>
            <div class='team-img'>
            <img src='https://q1.qlogo.cn/g?b=qq&amp;nk=".$awrow['QQ']."&amp;s=640' class='img-fluid' alt='".$awrow['Name']."'>
			  <div class='team-overlay'>
					<div class='overlay-social-icon text-center'>
					  <ul class='social-icons'>
					  <a class='btn btn-success' href='tencent://message/?uin=".$awrow['QQ']."&Site=".$conf["Title"]."&Menu=yes'>QQ联系</a>
					  
					  
					  </ul>
					  </div>
					  </div>
					  </div>
			<div class='info-text'>
			  <h3>".$awrow['Name']."</h3>
                <p>".$awrow['jieshao']."</p>
                 
                </div>
              </div>
            </div>

          ";}
           
	}
	public static function site(){
		global $AT;
		$arow1 = $AT->query("select * from autive_site where active='true'");
                
            while($awrow1 = $AT->fetch($arow1)){
            echo "
      <div class='col-lg-4 col-md-6  col-lg-4'>
       <div class='inter-item inter-center'>
        <div class='inter-img'>
         <img src='".$awrow1['imgurl']."' alt='background' height='185' width='385' >
          <div class='inter-info'>
			<div class='info-text text-center'>
			  <h3>".$awrow1['name']."</h3>
                <p>".$awrow1['jieshao']."</p>
                 <a href='go.php?url=".$awrow1['url']."' class='btn btn-default btn-block' target='_blank'>访问</a>
            </div>
          </div>
        </div>
       </div>
      </div>
";
  
            }
	}
	public static function info(){
		global $AT;
		$W = $AT->query("SELECT * FROM autive_info");
         while($RT = $AT->fetch($W)){
            echo "<div class='col-lg-4 col-md-6'>
      <div class='card'>
          
        <div class='card-body clearfix text-dark'>
            ".$RT['content']."
        </div>
        <div class='card-footer bg-default text-dark'>".$RT['time']."</div>
      </div>
    
    </div>";
         }
	}
	
}

?>