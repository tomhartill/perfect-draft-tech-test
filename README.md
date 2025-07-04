# Perfect Draft Tech Test

<h3>Staging URL:</h3>

https://perfect.tomhartill.com/index.php/perfect-draft-form-only

https://perfect.tomhartill.com/index.php/perfect-draft

## Notes:

I encountered a known bug in Magento core when a child theme cannot inherit it's parents less files to deploy/compile. 
So i've copied the luma theme and it's parent blank into app and renamed the themes accordingly. 
An alternative approach could have been pushing the child theme into a repo for use by composer, so it exists in the vendor directory, this seemed out of scope tho.

There is another branch called custom-page-module where the page layout and template is developed as a module and not part of the child theme. 
I realised this probably wasn't what you wanted tho, and remains unfinished.

## Task:

Push the root of a Magento 2 open source instance, with Luma theme, to your GitHub repository.
Create a pull request to your GitHub repository, addressing the following requests:

- (1). Change the colour of all buttons in the Luma theme from blue to yellow.
- (2). Create a new page layout and template using the XML/phtml layout system.
- (3). In the Magento admin dashboard, set up a CMS page that uses your new page layout.
- (4). In the phtml template, add an accessible form that includes “name”, “date of birth” & “email” fields, complete with a “submit” button.
- (5). Use an “x-magento-init” script to call a separate javascript file.
- (6). In the javascript file, make a script that opens an accessible dialog (popup) saying “info received” when the form is submitted.
