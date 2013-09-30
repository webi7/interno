<?php
	class dateFormated{
		
		public $diaExt;
		public $diaInt;
		public $mesExt;

		public function getCurrentDateFormated(){
			$this->dia = date('d');
			$this->diaExt = date('w');
			$this->mesExt = date('m');

			switch ($this->diaExt){
				case 0:
					$this->diaExt = 'Domingo';
					break;
				case 1:
					$this->diaExt = 'Segunda';
					break;
				case 2:
					$this->diaExt = 'Terça';
					break;
				case 3:
					$this->diaExt = 'Quarta';
					break;
				case 4:
					$this->diaExt = 'Quinta';
					break;
				case 5:
					$this->diaExt = 'Sexta';
					break;
				case 6:
					$this->diaExt = 'Sábado';
					break;
			}

			switch ($this->mesExt){
				case 1:
					$this->mesExt = 'Janeiro';
					break;
				case 2:
					$this->mesExt = 'Fevereiro';
					break;
				case 3:
					$this->mesExt = 'Março';
					break;
				case 4:
					$this->mesExt = 'Abril';
					break;
				case 5:
					$this->mesExt = 'Maio';
					break;
				case 6:
					$this->mesExt = 'Junho';
					break;
				case 7:
					$this->mesExt = 'Julho';
					break;
				case 8:
					$this->mesExt = 'Agosto';
					break;
				case 9:
					$this->mesExt = 'Setembro';
					break;
				case 10:
					$this->mesExt = 'Outubro';
					break;
				case 11:
					$this->mesExt = 'Novembro';
					break;
				case 12:
					$this->mesExt = 'Dezembro';
					break;
			}

			return $this->diaExt.', '.$this->dia.' de '.$this->mesExt;
		}
	}



	$date = new dateFormated();
	echo $date->getCurrentDateFormated();
?>