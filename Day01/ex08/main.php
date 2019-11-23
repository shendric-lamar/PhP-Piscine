#!/usr/bin/php
<?php
include("ft_is_sort.php");
$tab = array("a", "b");
print_r($tab);
if (ft_is_sort($tab))
echo "The array is sorted\n";
else
echo "The array is not sorted\n";
?>
