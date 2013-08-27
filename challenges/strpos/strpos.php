<?php

function my_strpos($haystack, $needle, $offset = 0)
{
  $string_len = strlen($haystack);
  $needle_len = strlen($needle);
  for ($i=$offset; $i < $string_len; $i++) {
    if (substr($haystack, $i, $needle_len) == $needle) {
      return $i;
    }
  }
  return false;
}

$alphabet = 'abcdefghijklmnopqrstuvwxyz';

# Should print "17"
print(my_strpos($alphabet, 'r') . "\n");

# Should print "6"
print(my_strpos($alphabet, 'ghi') . "\n");

# Should print "bool(false)"
var_dump(my_strpos($alphabet, 'u', 22));

# Should print "bool(false)"
var_dump(my_strpos($alphabet, 'A'));

?>
