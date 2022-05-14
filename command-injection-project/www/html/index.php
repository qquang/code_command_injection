<?php
        $flag="flag{tommi_xiaomi}";
        if(isset($_POST['ip']) && !empty($_POST["ip"])){
            $ip = @preg_replace("/[\\\|;$`&<> ]/", "", trim($_POST["ip"]));
            $res = @shell_exec("timeout 5 bash -c 'ping -c 3 ".$ip."'");
            $rec = @preg_match("/3 packets transmitted, (.*) received/s",$res,$out);
            if ($out[1]=="3") 
            {
                $result = "Alive";
            }
            elseif ($out[1]=="0")
            {
                $result = "Nope";
            }
            else
            {
                $result = "Hack detected";
            }
        }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./static/index.css">
	<title>Ping Service</title>
</head>
<body>
	<div class="container">
		<form class="container_form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" accept-charset="UTF-8">
			<h1>PING Service v1.0</h1>
			<h2>Best service for determining whether a website is down or not</h2>
			<input id="dom_input" class="input" name="ip" type="text" placeholder="EX: 127.0.0.1" , value="">
			<button type="submit">Submit</button>
			<?php
				echo "<p>$result</p>";
			?>
			<div>
            Somehow you can see, even you are blind!
			</div>
		</form>
	</div>
</body>
</html>