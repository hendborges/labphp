<html>
    <head>
        <link rel='stylesheet' type='text/css' href='style.css'>
        <title>Ping Pong Ploc</title>
    </head>
    <body>
 <?php 
for ($i = 1; $i <= 100; $i++) {
    
    echo "$i.";
	
    if ($i % 3 == 0 && $i % 5 == 0)
    {
		echo "<span class='sublinhado'>ploc</span><br/>";
    } 
    else 
    {
        if ($i % 3 == 0)
        {
            echo "<span class='negrito'>ping</span><br/>";
        } 
        else 
        {
            if ($i % 5 == 0)
            {
                echo "<span class='italico'>pong</span><br/>";
            }
            else
            {
                echo "ok<br/>";

            }

        }
    }
}
?>
    </body>
</html>