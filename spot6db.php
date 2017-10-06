<?php

elgg_load_js('elgg.elastic');
 
$host = "localhost";
$user = ini_get("mysql.default.user");
$password = ini_get("mysql.default.password");
$database = "spot6fm_cms-bravo";
 
// I - Make DB connection and query for the GUIDs
$connection = mysql_connect($host,$user,$password)
       or die("Could not connect: ".mysql_error());
 
mysql_select_db($database,$connection)
       or die("Error in selecting the database:".mysql_error());
 
$sql="SELECT entity_guid,owner_guid FROM e_metadata,e_metastrings WHERE e_metadata.value_id = e_metastrings.id AND name_id = 85;";
$sql_result=mysql_query($sql,$connection)
	or exit("Sql Error".mysql_error());
$sql_num=mysql_num_rows($sql_result);
// I
 
// II - Creat PHP arrays to collect values
$t_title = array();
$t_artist = array();
$t_mp3Path = array();

while($sql_row=mysql_fetch_array($sql_result)){
	$entGuid = $sql_row["entity_guid"];
	$ownGuid = $sql_row["owner_guid"];

	$entity = get_entity($entGuid);
	$owner = get_entity($ownGuid);
	$t_title[] = $entity->title;
	$t_artist[] = $owner->name;
	$t_mp3Path[] = elgg_get_site_url() . "mod/file/download.php?file_guid={$entGuid}";
}
// II
 
// III - Turn php arrays into JS arrays
echo '<script>m_title = new Array()</script>';
echo '<script>m_artist = new Array()</script>';
echo '<script>m_mp3Path = new Array()</script>';
echo '<script>var tracker = 0</script>';
 
 
for ($j = 0; $j < $sql_num; $j++) { // spawns js arrays from php arrays
	if (!empty($t_title[$j]) && !empty($t_artist[$j])) {
        	echo '<script> m_title[tracker] = "'. $t_title[$j] .'";</script>';
		echo '<script> m_artist[tracker] = "'. $t_artist[$j] .'";</script>';
		echo '<script> m_mp3Path[tracker] = "'. $t_mp3Path[$j] .'";</script>';
        	echo '<script> tracker++; </script>';
	}
}
// III
 
?>
