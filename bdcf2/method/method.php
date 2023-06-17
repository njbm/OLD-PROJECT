<?php
class insertValue extends DBConnect{
	
	public function executeQuery($query)
	{
	
		$add=$this->link->query($query);
		if($add)
		{
		     $this->message="<span style='color:GREEN;'> Successfully</span>";
		}
		else
		{
			 $this->message="<span style='color:RED;'> Unsuccessfully</span>";
		}
	}
}

?>