<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">

  <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame 
       Remove this if you use the .htaccess -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title>index</title>
  <meta name="description" content="">
  <meta name="author" content="Scott Farley">

  <meta name="viewport" content="width=device-width; initial-scale=1.0">

  <!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
  <link rel="shortcut icon" href="/favicon.ico">
  <link rel="apple-touch-icon" href="/apple-touch-icon.png">
</head>

<body>
	<?php
	phpinfo();
	// $db_connection = pg_connect("host=localhost dbname=wooden_ships user=scottsfarley password=xP73m3YAb1");
	// if (!$db_connection){
		// die("Could not connect to database: ".pg_errormessage($db_connection));
	// }else{
		// echo "Connected to wooden ships database.";
	// }
	// //old sqls
	// //$sql = "SELECT * FROM pg_catalog.pg_tables WHERE schemaname = 'public';";
	// //$sql = "SELECT * FROM logs;";
	// //$sql = "GRANT ALL ON logbook TO scottsfarley;";
	// //$sql = "select column_name, data_type, character_maximum_length from INFORMATION_SCHEMA.COLUMNS where table_name = 'logs';";
	// //$sql = "DROP TABLE Logbook";
	// //$sql = "SELECT COUNT(*) FROM logs";
	// $sql = "SELECT * FROM logs INNER JOIN windforces ON logs.windforce = windforces.nldesc INNER JOIN winddirections ON logs.winddirection = winddirections.nldesc WHERE lat3=30;";
	// //$sql = "TRUNCATE logs";
	// $result = pg_query($sql);
// 	
	// //create the table
	// // $sql = "CREATE TABLE logs (
    // // recid integer,
    // // instabbr text,
    // // logbooklanguage text,
    // // voyagefrom text,
    // // voyageto text,
    // // shipname text,
    // // shiptype text,
    // // company text,
    // // othershipinformation text,
    // // nationality text,
    // // name1 text,
    // // rank1 text,
    // // name2 text,
    // // rank2 text,
    // // zeromeridian text,
    // // obsgen text,
    // // distunits text,
    // // disttolandmarkunits text,
    // // disttravelledunits text,
    // // longitudeunits text,
    // // voyageini text,
    // // unitsofmeasurement text,
    // // year integer,
    // // month integer,
    // // day integer,
    // // date date,
    // // distance text,
    // // lat3 double precision,
    // // lon3 double precision,
    // // anchored boolean,
    // // anchorplace text,
    // // winddirection text,
    // // allwinddirections text,
    // // windforce text,
    // // windforcescale text,
    // // allwindforces text,
    // // windscale text,
    // // weather text,
    // // shapeclouds text,
    // // dirclouds text,
    // // clearness text,
    // // precipitationdescriptor text,
    // // cloudfrac text,
    // // gusts boolean,
    // // rain boolean,
    // // fog boolean,
    // // snow boolean,
    // // thunder boolean,
    // // hail boolean,
    // // seaice boolean,
    // // sstreading text,
    // // sstreadingunits text,
    // // statesea text,
    // // currentdir text,
    // // currentspeed text,
    // // tairreading text,
    // // airthermreadingunits text,
    // // probtair text,
    // // baroreading text,
    // // airpressurereadingunits text,
    // // barometertype text,
    // // bartempreading text,
    // // bartempreadingunits text,
    // // humreading text,
    // // humidityunits text,
    // // humiditymethod text,
    // // pumpwater text,
    // // wateratthepumpunits text,
    // // lifeonboard boolean,
    // // lifeonboardmemo text,
    // // cargo boolean,
    // // cargomemo text,
    // // shipandrig boolean,
    // // shipandrigmemo text,
    // // biology boolean,
    // // biologymemo text,
    // // warsandfights boolean,
    // // warsandfightsmemo text,
    // // illustrations boolean,
    // // otherrem text,
    // // point point,
    // // fromgeocode text,
    // // togeocode text
// // );
// // 
// // ALTER TABLE logs OWNER TO scottsfarley;";
// // $sql = "TRUNCATE logs;";
// // $result = pg_query($sql);
// // if($result){
	// // echo "Query success.";
// // }
// // 	
	// // $file = new SplFileObject("WoodenShips.sql");
// // 
	// // // Loop until we reach the end of the file.
	// // $i = 0;
	// // while (!$file->eof()) {
	    // // // Echo one line from the file.
	    // // $sql = $file->fgets();
		// // $result = pg_query($sql);
		// // if(!$result){
			// // echo "WARNING: ENTRY NOT INSERTED : ".pg_errormessage($db_connection);
		// // }else{
			// // if ($i % 100 == 0){
				// // echo "Insert cursor at: " . $i . "<br />";
			// // }
		// // }
		// // $i= $i + 1;
	// // }
	// // Unset the file to call __destruct(), closing the file handle.
	// // $file = null;
	// while ($row = pg_fetch_row($result)) 
	// {
		// echo '<tr>';
	// $count = count($row);
	// $y = 0;
	// while ($y < $count)
	// {
		// $c_row = current($row);
		// echo '<td>' . $c_row . '</td>';
		// next($row);
		// $y = $y + 1;
	// }
	// echo '</tr>';
		// $i = $i + 1;
	// }
	// pg_free_result($result);
// 	
	// echo '</table></body></html>';
?>
</body>
</html>
