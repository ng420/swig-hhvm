<?php

# Call our gcd() function

$x = 42;
$y = 105;
$g = gcd($x,$y);
print "The gcd of $x and $y is $g\n";

# Manipulate the Foo global variable

# Output its current value
print "Foo = " . Foo_get() . "\n";

# Change its value
Foo_set(3.1415926);

# See if the change took effect
print "Foo = "  . Foo_get() . "\n";

?>
