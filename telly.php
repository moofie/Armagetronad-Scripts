#!/usr/bin/php
 <?php
 while(1)
 {
  $input = rtrim(fgets(STDIN, 1024));
	$param = explode(" ", $input); 
	$xmin = 0;
	$xmax = 500;
	$ymin = 0;
	$ymax = 500;
	$randxcoord = rand($xmin, $xmax);
	$randycoord = rand($ymin, $ymax);
	if(preg_match("/^INVALID_COMMAND/", $input))
	{
		if ($param[1] == "/telly")
		{
			if(empty($param[5]))
			{
			$param[5] = $randxcoord;
			}
			if(empty($param[6]))
			{
			$param[6] = $randycoord;
			}
		print("console_message {$param[2]} teleported!\n");
		print("teleport_player {$param[2]} {$param[5]} {$param[6]} 1 1\n");
		}
	}
 } 
 ?>
