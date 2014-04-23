#PullDrive

When using multiple spreadsheets in Google Drive, the `=IMPORTRANGE()` can pull in data from different spreadsheets from across the Google Drive Network. However, it only supports up to 50 requests.

The insoiration for PullDrive came from an accountant that needed Annaul Data from 3 stores for all 52 weeks. So `=IMPORTRANGE()` was not going to work.

###How PullDrive Works

Using the `pulldrive.php` file, you will need

* The Google Drive Spreadsheet URL
* A directory folder to save everything in

###Set Up

>The set up takes about 5/10 minutes at the moment but I am looking to make an easy to use config file in future versions.

1. Unpack the repository into a folder on your server
2. [Follow the guide](http://blog.revolutionanalytics.com/2009/09/how-to-use-a-google-spreadsheet-as-data-in-r.html) on how to publish your spreadsheet as a .csv
3. Take this document ID (URL) and add that `fopen` section of the pulldrive file.
4. Each line in the file should look like: `file_put_contents("FILE-NAME.csv", fopen("THE GOOGLE DRIVE URL", 'r'));`
5. Add the file name you used to the previous set into the following code: `$zip->addFile("FILE-NAME.csv");`
6. Name your file in the `$filename = "FILE-NAME.zip";`
7. That's it.

**NOTE:** If you call a file in the `$zip->addFile` section that is not called in in the `file_put_contents` section the zip will not work. If you don't use it, lose it!

###Usage

Head to the `index.php` file on your server. This will pull the data from Google Drive, save it on your server and give you the option to download from the browser. 

This is usually quick but load times will vary depending on the size of your Google Spreadsheet.

**Issues:** I have found that on Excel for Mac, if you link to a cell and then update the csv, it sometimes reports an invalid file format. To fix this, just open the Workbook and the csv and Excel will update the links for you with no issue.

#####Changelog

v1: Initial Commit
v1.1: Update to index.php

####Questions?

This is still in development but any questions, find me on Twitter [@kwaimind](https://twitter.com/kwaimind) or on my website [Daniel Reed](http://daniel-reed.eu/).