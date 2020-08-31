Disclaimer: I am not an expert with using EMS. This is the process I set up so we could get connect the two apps. If there is something that I could do better, please let me know! :)

In this repo, you will find the building blocks you need to convert a .xls EMS event export file to a Localist compatible .csv file.

Notice: You will have to install PHPSpreadsheet for this repo to work. 
PHPSpreadsheet: https://phpspreadsheet.readthedocs.io/en/latest/


Directories:

/arrays -- Contains 1 PHP file with 4 arrays that map EMS fields to Localist fields

/csv -- Holds the CSV template for Localist. Also, used to output the final CSV

/php -- 2 PHP files, 1 converts the Localist CSV template to an array. The other reads the EMS event export .xls file and creates the final converted CSV.


Setting up your EMS to Localist feed.

Step 1: Setting up your EMS event export

1. Create a custom query in the EMS Desktop app
2. Add a custom query to Automated Report Delivery
3. Have the report be emailed to you daily
4. Create an email rule that puts the email directly into a folder. (I named mine EMS)



Step 2: Grabbing the report from email

1. Set up an Integromat task that looks at an email folder (EMS), grabs most recent email with an attachment, and uploads the attachment to a server via sftp
2. Set the task to run once a day. 

Integromat was a great tool to help me access the .xls file. The reason I went with Integromat was because of the task templates. It made it really easy to set up this process. I am sure there are other tools out there that can do the same thing. The idea was just to put this file on a server somewhere so I could grab it and use it. 
Integromat Link: https://www.integromat.com/en
FTP/SFTP info: https://www.integromat.com/en/integrations/ftp/sftp



Step 3: Using the EMS exported .xls file

1. Put repo on a server where you have access to the cron job
2. Modify read-xls.php to read the .xls file from step 2
3. Modify ems-to-localist-key-value.php to match your specific .xls export
4. Set up a cron job to run read-xls.php daily



Step 4: Create a feed in Localist

1. Create a feed to point to your output.csv file

This feed runs every night.


