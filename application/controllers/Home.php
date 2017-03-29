<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper(array('url'));
	}

	public function index() {
		$pecah1 = $this->explodeX(array('<option>', '</option>'), $this->grabCURL('http://anggotakadin.com/Kbli.php') );
		$data['pecah1'] = $pecah1;
		$this->load->view('kbli', $data);
	}

	private function grabCURL($url) {
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_HEADER, 0);
		$grab=curl_exec($ch);
		curl_close($ch);
		return $grab;
	}

	private function explodeX($delimiters, $string) {
		 return explode( chr( 1 ), str_replace( $delimiters, chr( 1 ), $string ) );
	}

	public function kbli2($param = NULL) {
		$pecah2 = $this->explodeX(array('<option>', '</option>'), $this->grabCURL('http://anggotakadin.com/Kbli.php?a=t&pilKbli1='.$param) );
		// 3
		if($param == 'A' OR $param == 'F' OR $param == 'G' OR $param == 'K' OR $param == 'Q' OR $param == 'S' ) {
			echo "<select class='form-control input-md' name='pilKbli2' onchange='kbli(2);'>";
			echo '<option selected=""> === KBLI 2 Kategori '.$param.' === </option>';
			for($i=23;$i<26;$i++) {
				echo $pecah2[$i]."</option>";
			}
			echo "</select>
			<div class='clearfix' style='padding-top:15px;'></div>";
		// 5
		} elseif($param == 'B' OR $param == 'H') {
			echo "<select class='form-control input-md' name='pilKbli2' onchange='kbli(2);'>";
			echo '<option selected=""> === KBLI 2 Kategori '.$param.' === </option>';
			for($i=23;$i<28;$i++) {
				echo $pecah2[$i]."</option>";
			}
			echo "</select>
			<div class='clearfix' style='padding-top:15px;'></div>";
		} elseif($param == 'C') {
			echo "<select class='form-control input-md' name='pilKbli2' onchange='kbli(2);'>";
			echo '<option selected=""> === KBLI 2 Kategori '.$param.' === </option>';
			for($i=23;$i<47;$i++) {
				echo $pecah2[$i]."</option>";
			}
			echo "</select>
			<div class='clearfix' style='padding-top:15px;'></div>";
		// 1
		} elseif($param == 'D' OR $param == 'L' OR $param == 'O' OR $param == 'P' OR $param == 'U') {
			echo "<select class='form-control input-md' name='pilKbli2' onchange='kbli(2);'>";
			echo '<option selected=""> === KBLI 2 Kategori '.$param.' === </option>';
			for($i=23;$i<24;$i++) {
				echo $pecah2[$i]."</option>";
			}
			echo "</select>
			<div class='clearfix' style='padding-top:15px;'></div>";
		// 4
		} elseif($param == 'E' OR $param == 'R') {
			echo "<select class='form-control input-md' name='pilKbli2' onchange='kbli(2);'>";
			echo '<option selected=""> === KBLI 2 Kategori '.$param.' === </option>';
			for($i=23;$i<27;$i++) {
				echo $pecah2[$i]."</option>";
			}
			echo "</select>
			<div class='clearfix' style='padding-top:15px;'></div>";
		} elseif($param == 'I' OR $param == 'T') {
			echo "<select class='form-control input-md' name='pilKbli2' onchange='kbli(2);'>";
			echo '<option selected=""> === KBLI 2 Kategori '.$param.' === </option>';
			for($i=23;$i<25;$i++) {
				echo $pecah2[$i]."</option>";
			}
			echo "</select>
			<div class='clearfix' style='padding-top:15px;'></div>";
		// 6
		} elseif($param == 'J' OR $param == 'N') {
			echo "<select class='form-control input-md' name='pilKbli2' onchange='kbli(2);'>";
			echo '<option selected=""> === KBLI 2 Kategori '.$param.' === </option>';
			for($i=23;$i<29;$i++) {
				echo $pecah2[$i]."</option>";
			}
			echo "</select>
			<div class='clearfix' style='padding-top:15px;'></div>";
		} elseif($param == 'M') {
			echo "<select class='form-control input-md' name='pilKbli2' onchange='kbli(2);'>";
			echo '<option selected=""> === KBLI 2 Kategori '.$param.' === </option>';
			for($i=23;$i<30;$i++) {
				echo $pecah2[$i]."</option>";
			}
			echo "</select>
			<div class='clearfix' style='padding-top:15px;'></div>";					
		} else if(is_null($param)) {

		}
	}

	public function kbli3($param1 = NULL, $param2 = NULL) {
		$pecah3 = $this->explodeX(array('<select>', '</select>'), $this->grabCURL('http://anggotakadin.com/Kbli.php?a=t&pilKbli1='.$param1.'&pilKbli2='.$param2) );
		$array1 = array('<select name="pilKbli3" onchange="kbli(3);">','<br>');
		$array2 = array('<select name="pilKbli3" onchange="kbli(3);" class="form-control input-md">','');
		echo str_replace($array1, $array2, $pecah3[2]);
	}

	public function kbli4($param1 = NULL, $param2 = NULL, $param3 = NULL) {
		$pecah4 = $this->explodeX(array('<select>', '</select>'), $this->grabCURL('http://anggotakadin.com/Kbli.php?a=t&pilKbli1='.$param1.'&pilKbli2='.$param2.'&pilKbli3='.$param3) );
		$array1 = array('<select name="pilKbli4" onchange="kbli(4);">','<br>');
		$array2 = array('<select name="pilKbli4" onchange="kbli(4);" class="form-control input-md">','');
		echo str_replace($array1, $array2, $pecah4[3]);
	}

	public function kbli5($param1 = NULL, $param2 = NULL, $param3 = NULL, $param4 = NULL) {	
		$pecah5 = $this->explodeX(array('<select>', '</select>'), $this->grabCURL('http://anggotakadin.com/Kbli.php?a=t&pilKbli1='.$param1.'&pilKbli2='.$param2.'&pilKbli3='.$param3.'&pilKbli4='.$param4) );
		$array1 = array('<br>','<select name="pilKbli5" onchange="frmKbli.pilKbli.value=frmKbli.pilKbli5.value;kbli();">');
		$array2 = array('','<select name="pilKbli5" onchange="frmKbli.pilKbli.value=frmKbli.pilKbli5.value;kbli();" class="form-control" multiple style="height:300px;">');
		echo str_replace($array1, $array2, $pecah5[4]);
	}	
}
