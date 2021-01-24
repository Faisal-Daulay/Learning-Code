<?php
	function form ($type='',$name='',$value='') {
		if ($type=='text') {
			$form = '<input type="text" name="'.$name.'" value="'.$value.'" >';
		} elseif ($type=='password') {
			$form = '<input type="password" name="'.$name.'" value="'.$value.'" >';
		} elseif ($type=='select') {
			$form = '<select name="'.$name.'">
						<option>Islam</option>
						<option>Kristen</option>
						<option>Katolik</option>
						<option>Hindu</option>
						<option>Budha</option>
					</select>';
		} elseif ($type=='submit') {
			$form = '<input type="submit" name="'.$name.'" value="'.$value.'" >';
		} elseif ($type=='reset') {
			$form = '<input type="reset" name="'.$name.'" value="'.$value.'" >';
		} elseif ($type=='radio') {
			$form = '<input type="radio" name="'.$name.'" value="'.$value.'">';
		} elseif ($type=='checkbox') {
			$form = '<input type="checkbox" name="'.$name.'" value="'.$value.'">';
		}
		 else {
			$form ='dll';
		}
		return $form;
	}
?>