<?php
/*********************************/
// Enabling all errors, this can be
// commented out safely
/*********************************/
// error_reporting (E_ALL); 

/*********************************/
// Starting the function the
// creates the block.
/*********************************/
function sample_show($options) {

	/*********************************/
	// Catch setting
	/*********************************/
	$form['choose'] = $options[0];
	
	/*********************************/
	// Add some data, ofcourse in real
	// modules you would make real
	// functions, loops, ect ect
	/*********************************/
	$form['blabla'] = "Dit is => \$form['blabla']";
	
	/*********************************/
	// Returning the data so Smarty
	// can send it to template.
	/*********************************/
	return $form;
}


/*********************************/
// The function that lists the
// block options.
/*********************************/
function sample_edit($options) {
	$checked = "selected='selected'";
	$form = "Sample:&nbsp;";
	$form .= "<select name=options[0]>\n";
if($options[0] != "voorbeeld") {	$form .= "<option value='voorbeeld'  />Voorbeeld\n";			}else{	$form .= "<option value='voorbeeld'  $checked />Voorbeeld\n";		}
if($options[0] != "voorbeeld2"){	$form .= "<option value='voorbeeld2' />Voorbeeld2\n";			}else{	$form .= "<option value='voorbeeld2' $checked />Voorbeeld2\n";		}
if($options[0] != "voorbeeld3"){	$form .= "<option value='voorbeeld3' />Voorbeeld3\n";			}else{	$form .= "<option value='voorbeeld3' $checked />Voorbeeld3\n";		}
if($options[0] != "voorbeeld4"){	$form .= "<option value='voorbeeld4' />Voorbeeld4\n";			}else{	$form .= "<option value='voorbeeld4' $checked />Voorbeeld4\n";		}
if($options[0] != "voorbeeld5"){	$form .= "<option value='voorbeeld5' />Voorbeeld5\n";			}else{	$form .= "<option value='voorbeeld5' $checked />Voorbeeld5\n";		}
	$form .= "</select>";
	$form .= "<br><br><b>Some bla bla and info!</b>";
	return $form;
}
?>