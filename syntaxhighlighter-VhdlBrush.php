<?php
/*
Plugin Name: SyntaxHighlighter Evolved: VHDL Brush
Description: Adds support for the VHDL language to the SyntaxHighlighter Evolved plugin.
Author: Carlos Ramos
Version: 1.0.0
Author URI: http://www.programnation.com
*/

// SyntaxHighlighter Evolved doesn't do anything until early in the "init" hook, so best to wait until after that
add_action( 'init', 'syntaxhighlighter_vhdllang_regscript' );
 
// Tell SyntaxHighlighter Evolved about this new language/brush
add_filter( 'syntaxhighlighter_brushes', 'syntaxhighlighter_vhdllang_addlang' );
 
// Register the brush file with WordPress
function syntaxhighlighter_vhdllang_regscript() {
    wp_register_script(
        'syntaxhighlighter-brush-vhdl',
        plugins_url(
            'shBrushVhdl.js',
            __FILE__
        ),
        array('syntaxhighlighter-core'),
        '1.0.0'
    );
}
 
// Filter SyntaxHighlighter Evolved's language array
function syntaxhighlighter_vhdllang_addlang( $brushes ) {
    $brushes['vhdl'] = 'vhdl';
    return $brushes;
}
 
?>
