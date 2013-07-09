# Pretty Console for PHP

![Screenshot](http://i.imgur.com/H84Cat3.png)

* Written by Greg Schoen (greg.schoen@gmail.com)
* https://github.com/gregschoen/pretty-console-for-php
* Requires PHP 5.3

This is a PHP class that outputs color formatted strings for the console. It has a public API that supports several methods of calling as can be seen below. Works best with xterm-256color as your TERM.

``` PHP
include("PrettyConsole.class.php");

// direct output of formatted string
$output = PrettyConsole::output("PrettyConsole::output",248,0) . "\n";

// echo string with foreground on background with newline
PrettyConsole::puts0on146("PrettyConsole::puts0on146");
PrettyConsole::puts0on147("PrettyConsole::puts255on147");

// echo string white on black with newline
PrettyConsole::puts("PrettyConsole::puts");

// return string without any appended new line
echo PrettyConsole::return248("PrettyConsole::return248") . "\n";

// short calls, onXX is not required
PrettyConsole::puts248("PrettyConsole::puts248");

// If no other class exists with the name of Pretty, you can use the shortcut
Pretty::puts2("Pretty::puts2");
echo Pretty::return2("Pretty::return2") . "\n";
```

![Console Color Hex Chart](http://upload.wikimedia.org/wikipedia/commons/9/95/Xterm_color_chart.png)

