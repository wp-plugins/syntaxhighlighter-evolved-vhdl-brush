=== SyntaxHighlighter Evolved: VHDL Brush ===
Contributors: UnboundDarkness
Donate link: http://www.estadofinito.com/donacion-syntax-highlighter/
Tags: vhdl, syntax highlighter, code, sourcecode
Requires at least: 2.8
Tested up to: 3.9
Stable tag: 1.1
License: GPLv2 or later.
License URI: http://www.gnu.org/licenses/gpl-2.0.html


Adds support for the VHDL and Verilog languages to the SyntaxHighlighter Evolved plugin. Also, includes basic syntax coloring for Xilinx UCF files.

== Description ==


This plugin enables the syntax colorization for the VHDL and Verilog languages by extending the [Syntax Highlighter Evolved](http://wordpress.org/extend/plugins/syntaxhighlighter/) functionality (and thus, you need to have it installed).

For VHDL examples you can check some of my posts at [Estado Finito](http://www.estadofinito.com/divisor-frecuencia-vhdl/). Here is another example, using the Xilinx UCF and VHDL coloring: [another awesome example](http://www.estadofinito.com/reloj-digital/).

For Verilog examples, you can pay a visit to [Beyond All Repair](http://beyondallrepair.com/2012/04/counting-leds-on-a-digilent-atlys/) or [Idle Logic](http://idle-logic.com/2010/03/22/cyclone-ii-breakout-board-demo/).

= The people behind it =
* The VHDL brush is an adaptation done by me of the [GeSHi syntax by Alexander 'E-Razor' Krause](http://peej.github.com/phpdoctor/examples/geshi/source/geshi/vhdl.php.html). It can be used as language="vhdl" or with the shortcode [vhdl] ... all code ... [/vhdl].
* The Verilog brush was made by Harry Rose at [Beyond All Repair](http://beyondallrepair.com/2012/05/javascript-syntax-highlighting-for-verilog/). I am just merely putting it into this plugin.
* The Xilinx UCF support is my work, although it works for the basic stuff. And basic means colorization for NET, LOC, and comments.

Hope it can be of use to any digital designer out there. Need another language or more features? Don't hesitate to ask!

== Installation ==

Extract all files from the ZIP file and upload the folder to `/wp-content/plugins/`.

**See Also:** ["Installing Plugins" article on the WP Codex](http://codex.wordpress.org/Managing_Plugins#Installing_Plugins)

== Frequently Asked Questions ==

= How do I add keywords to the VHDL syntax? =

If you see there are keywords missing, you can edit the file shBrushVhdl.js, located in the plugin directory. You can also open a support topic.

= How can I add keywords to the Xilinx UCF syntax? =

Since this is in early stage of development, and have no need for further constraints to be added yet, there will be no update for this brush if not asked. However, you can open a topic in support if you have the need for more constraints to be colorized.

= Was this all your doing? =

No. As I stated on the description, I am merely putting all together from several sources. Other people has done the heavy stuff.

= How can I repay you for your job =

It would be nice if you dropped by my blog at [Estado Finito](http://www.estadofinito.com/) and shared some of my content on Facebook or some social network. Better than money!

== Screenshots ==

1. An example of the VHDL brush for SyntaxHighlighter Evolved.
2. An example of the Verilog brush for SyntaxHighlighter Evolved.
3. An example of the Xilinx UCF brush for SyntaxHighlighter Evolved.

== Changelog ==

= 1.1 =
* Addition of Verilog highlighting capabilities.
* Addition of basic highlighting capabilities for UCF files.

= 1.0 =
* VHDL finally on WordPress!

== Upgrade notice ==

= 1.0 =
* VHDL finally on WordPress!