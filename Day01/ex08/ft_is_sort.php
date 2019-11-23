#!usr/bin/php
<?php
function ft_is_sort($tab)
{
	$temp = $tab;
	sort($tab);
	if ($tab == $temp)
		return (TRUE);
	else
		return (FALSE);
}
?>
