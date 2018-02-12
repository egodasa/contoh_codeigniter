<?php
class genTable{
	private $conf;
	private $result;
	private $records;
	private $url;
	public function setConf($tmp_conf){
		$this->conf = $tmp_conf;
		}
	public function setRecords($tmp_records){
		$this->records = $tmp_records;
		}
	public function setUrl($tmp_url){
		$this->url = $tmp_url;
		}
	public function makeTable(){
		$this->result = "<table>";
		$this->result .="<thead><tr>";
		/*looping table header*/
		foreach($this->conf as $c){
			if($c['show'] == true){
				$this->result .= "<th>".$c['caption']."</th>";
				}
			}
		/*EOF looping table header*/
		$this->result .="</tr></thead>";
		$this->result .="<tbody>";
		/*looping table records*/
		foreach($this->records as $r){
			$this->result .= "<tr>";
			foreach($this->conf as $c){
				if($c['show'] == true){
					$this->result .= "<td>".$r[$c['name']]."</td>";
					}
				}
			$this->result .= "</tr>";
			}
		/*EOF looping table records*/
		$this->result .="</tbody>";
		$this->result .="</table>";
		return $this->result;
		}
	}

?>
