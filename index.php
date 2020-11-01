<?php 
if (isset($_POST[name])) {
	file_put_contents(filewithdata.txt, $_POST[name]);
}

?>