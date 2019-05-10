# Alma Book Widget

Alma Book Widget is an utility that can read an Alma Analytics report and produce book widgets (sliders, tables, and more). These widgets can be embeded into a webpage or digital display. 

We are using this utility at ETSU to promote new books (both physcial and electronic). The documentation provided below is  following this particular use-case. 

>Documentation is a work in progress. You can view my [Code4Lib article](https://journal.code4lib.org/articles/14371) or my ELUNA presentation to gain a deeper understanding of how it works. 

Alma Book Widget is created and maintained by Travis Clamon, Electronic Resources Librarian at East Tennessee State University. 


# How it works

Alma Book Widget was developed into two separate modules:

 - books-feed
 - books-display

Development is in PHP and JSON

## books-feed

This module handles the retreival of the Alma Analytics report. It also processes the API data and does additonal transformation with book titles, publication dates, cover images, and linking. Once the process is finished, the records are then stored in a file as a multidimensional array. This folder can be stored in the /opt directory and can be executed via command line or cron. 

## books-display

The module is responsible for generating a widget. A GUI allows you to filter the results based on title, author, pub_date, location, or type (physical / electronic). Different widget templates are available that allow you to pick between a slider or list view. This folder needs to be visible to the web in order to function correctly. 


# Getting started

There are a few things you will need in order for this program to work:

 - Two reports will be created in Alma Analytics 
	> Physical Books = Physical Items Subject Area
	>Electronic Books = E-Inventory Subject Area

 - Alma Analytics API Key - required to retrieve the reports
	> Learn more at [https://developers.exlibrisgroup.com/alma/apis/analytics/](https://developers.exlibrisgroup.com/alma/apis/analytics/)
	

 - Google Books API Key - required to retrieve Google Book covers
	 > Learn more at [https://developers.google.com/books/](https://developers.google.com/books/)
 - Slack Webhook API Key (optional) - can alert you of job progress and/or failures. 
	 > Learn more at [https://api.slack.com/incoming-webhooks](https://api.slack.com/incoming-webhooks)
