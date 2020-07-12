<?php
// ------------------------------------------------------------------------- //
//               Xoops: Content Management System                           //
//                       < http://www.xoops.org >                          //
// ---------------------------------------------------------------------- //
// Module: Xpjirc												 //
// Author: DaICeMaN AKA BadCase														//
// Author Email : daiceman@badcase.net								   //
// Author website: http://www.badcase.net							  //
// ----------------------------------------------------------------- //

$modversion['name'] = "Xpjirc"; // name of module
$modversion['version'] = 1.0; // version
$modversion['description'] = "this is a simple module that just puts pjirc inline with your theme it doesnt control its settings"; // a description
$modversion['credits'] = "PJIRC is developped by Plouf - plouf@pjirc.com"; // credits
$modversion['license'] = "GPL see LICENSE";
$modversion['official'] = 0;
$modversion['image'] = "logo.gif"; // logo (shown in admin)
$modversion['dirname'] = "xpjirc"; // dir name, must be correct in order to avoid conflicts
$modversion['author'] = 'DaICeMaN - http://www.badcase.net'; // name of author, maybe including url, like here :)

// Menu
$modversion['hasMain'] = 1; // has it main? ofcourse :)

// Admin things
$modversion['hasAdmin'] = 0; // has it admin, NO :)

// Blocks
$modversion['blocks'][1]['file'] = "xpjirc.php"; // File the functions are defined
$modversion['blocks'][1]['name'] = "Xpjirc Block"; 		// Default name of block, user can ofcourse always change
$modversion['blocks'][1]['description'] = "Xpjirc  block"; // Description of block, this is not necessary but it makes the user more easier to identify blocks
$modversion['blocks'][1]['show_func'] = "sample_show"; 	// Function the put outs var, NO DATA IS ECHO'ED! Everything you are going to output belongs in the templates (so defining of var's in this function, but outputting it in the templates)
$modversion['blocks'][1]['edit_func'] = "sample_edit"; 	// Function to edit the block
$modversion['blocks'][1]['options'] = "voorbeeld3"; 	// Default choose of the edit function, have to seperate with |
?>
