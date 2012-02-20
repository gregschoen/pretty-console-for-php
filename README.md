# Pretty Console for PHP

* Written by Greg Schoen (greg.schoen@gmail.com)
* Requires PHP 5.3

This is a PHP class that outputs color formatted strings for the console. It has a public API that supports several methods of calling as can be seen below. Works best with xterm-256color as your TERM.

``` PHP
// direct output of formatted string
$output = PrettyConsole::output("PrettyConsole::output",248,0) . "\n";

// echo string with foreground on background with newline
PrettyConsole::puts0on146("PrettyConsole::puts0on146");
PrettyConsole::puts0on147("PrettyConsole::puts255on147");

// echo string white on black with newline
PrettyConsole::puts("PrettyConsole::puts");

// return string without any appended new line
PrettyConsole::return248("PrettyConsole::return248");
```

[Console Color Hex Chart](http://upload.wikimedia.org/wikipedia/commons/9/95/Xterm_color_chart.png)

