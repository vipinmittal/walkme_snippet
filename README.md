# walkme_snippet

CONTENTS OF THIS FILE
---------------------

 * INTRODUCTION
 * REQUIREMENTS
 * INSTALLATION
 * CONFIGURATION
 * TESTING
 * MAINTAINERS

## INTRODUCTION
This module is developed to integrate WalkMe with Drupal 8.
This module add the Walkme snippet in the head tag of each page.

## REQUIREMENTS
- Drupal 8 or Drupal 9

## INSTALLATION
Through Composer
composer require drupal/walkme_snippet

OR

Through Manually
1. Copy Walkme Snippet to the modules directory of your Drupal installation.
2. Enable the 'Walkme Snippet' module in 'Extend'. (/admin/modules)

## CONFIGURATION
Enter walkme snippet at the link: /admin/config/walkme/form/settings

## TESTING
How do I Test that the WalkMe Snippet is Working?
To test the snippet to make sure it's set up correctly:
1. Open your site.
2. Right-click and select inspect the page.
3. Open the console and enter the following text query: _walkMe.getEnvId();
   If it returns undefined, the Snippet is not properly set up.
   If the query returns a value, then you're all set!

## MAINTAINERS
Original development: Vipin Mittal(https://www.drupal.org/u/vipinmittal18)
