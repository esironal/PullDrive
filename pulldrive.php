<?php

//Pulls sales data inputted in Google Docs

	//Shop Takings
	file_put_contents("shop.csv", fopen("https://docs.google.com/spreadsheet/pub?key=0ApAGZMKH9T80dENNclJ2dGdnWmJYT1A4UlZjOFVFSHc&single=true&gid=30&output=csv", 'r'));
	//Gym Takings
	file_put_contents("gym.csv", fopen("https://docs.google.com/spreadsheet/pub?key=0ApAGZMKH9T80dEEwcjA2T0VUR1Rra0lkWHhTak16d0E&single=true&gid=2&output=csv", 'r'));
	//Metro Takings
	file_put_contents("metro.csv", fopen("https://docs.google.com/spreadsheet/pub?key=0Agf3Imya0vrRdEktU3NkbzZDMW1uWXZzMWVxTE85Y1E&single=true&gid=2&output=csv", 'r'));

//Now saved as 3 .csv's in the directory

?>

<?php

//Here we create a zip folder to download and edit locally

$zip = new ZipArchive();
$filename = "sales.zip";

if ($zip->open($filename, ZipArchive::CREATE)!==TRUE) {
    exit("cannot open <$filename>\n");
}

//Pulls the files we downloaded from Google Docs
$zip->addFile("shop.csv");
$zip->addFile("gym.csv");
$zip->addFile("metro.csv");
$zip->addFile("sales.xls");

//Status Screen
//echo "numfiles: " . $zip->numFiles . "\n";
//echo "status:" . $zip->status . "\n";

//Download Link
//echo "Download <a href=./" . $filename . ">here</a>";

$zip->close();
?>