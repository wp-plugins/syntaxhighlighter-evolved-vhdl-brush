<?php
/*
Plugin Name: SyntaxHighlighter Evolved: VHDL Brush
Description: Adds support for the VHDL language to the SyntaxHighlighter Evolved plugin. Also, includes syntax coloring for Xilinx UCF files.
Author: Carlos Ramos
Version: 1.1
Author URI: http://www.estadofinito.com
*/

// SyntaxHighlighter Evolved doesn't do anything until early in the "init" hook, so best to wait until after that
add_action( 'init', 'syntaxhighlighter_vhdl_regscript' );
// Tell SyntaxHighlighter Evolved about this new language/brush
add_filter( 'syntaxhighlighter_brushes', 'syntaxhighlighter_vhdl_addlang' );
 
// Register the brush file with WordPress
function syntaxhighlighter_vhdl_regscript() {
    //Adding the VHDL syntax script.
    wp_register_script('syntaxhighlighter-brush-vhdl',   plugins_url('shBrushVhdl.js',__FILE__),   array('syntaxhighlighter-core'),'1.2');
    //Adding the Verilog syntax script.
    wp_register_script('syntaxhighlighter-brush-verilog',plugins_url('shBrushVerilog.js',__FILE__),array('syntaxhighlighter-core'),'1.2');
    //Adding the Xilinx UCF syntax script.
    wp_register_script('syntaxhighlighter-brush-xlnxucf',plugins_url('shBrushXlnxUcf.js',__FILE__),array('syntaxhighlighter-core'),'1.2');
}

// Filter SyntaxHighlighter Evolved's language array
function syntaxhighlighter_vhdl_addlang( $brushes ) {
	//VHDL
    $brushes['vhdl']     = 'vhdl';
    //Verilog
    $brushes['verilog']  = 'verilog';
    //Xilinx UCF
    $brushes['xlnxucf']  = 'xlnxucf';
    $brushes['xlnx-ucf'] = 'xlnxucf';
    
    return $brushes;
}
?>