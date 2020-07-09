<?php
include 'includes/autoloader.inc.php';
?>

<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8" />
    <title></title>

</head>

<body>

	<?php

	 $person1 = new Person("Noor",21);
        echo $person1->getPerson();
        echo "<br>";
        $house1 = new House("Gaza",18);
        echo $house1->getAddress();
	
	?>
</body>

</html>

