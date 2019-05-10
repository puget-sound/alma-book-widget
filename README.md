# Alma Book Widget

Alma Book Widget is an utility that can read an Alma Analytics report and produce book widgets (sliders, tables, and more). These widgets can be embeded into a webpage or digital display. 

We are using this utility at ETSU to promote new books (both physcial and electronic). The documentation provided below is  following this particular use-case. 

Documentation is a work in progress. You can view my Code4Lib article or my ELUNA presentation to gain a deeper understanding of how it works. 

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
