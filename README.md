# Perfect Draft Tech Test

<h3>Staging URL (no pipes):</h3>

https://perfect.tomhartill.com/

## Notes

Vendor directory is not comitted, please run composer update.

Changes can be found in the development branch, with sub branches for each task.

A child theme was used (Tom/theme-perfect-draft) instead of modifying the parent theme (luma) directory. 
Instructions were not clear on this, so adhered to best practices.

## Task:

Push the root of a Magento 2 open source instance, with Luma theme, to your GitHub repository.
Create a pull request to your GitHub repository, addressing the following requests:

- (1). Change the colour of all buttons in the Luma theme from blue to yellow.
- (2). Create a new page layout and template using the XML/phtml layout system.
- (3). In the Magento admin dashboard, set up a CMS page that uses your new page layout.
- (4). In the phtml template, add an accessible form that includes “name”, “date of birth” & “email” fields, complete with a “submit” button.
- (5). Use an “x-magento-init” script to call a separate javascript file.
- (6). In the javascript file, make a script that opens an accessible dialog (popup) saying “info received” when the form is submitted.
