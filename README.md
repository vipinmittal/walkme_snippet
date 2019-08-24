# walkme_snippet

**INTRODUCTION** 
- Integration of Drupal with WalkMe
- This module is developed to integrate WalkMe with Drupal 8. This module add the Walkme snippet in the head tag of each page.

**REQUIREMENTS**
- Drupal 8

**INSTALLATION**
1. Copy/upload the Walkme Snippet module to the modules directory of your Drupal installation.
2. Enable the 'Walkme Snippet' module in 'Extend'. (/admin/modules)
3. Go to <domain.com>/admin/config/walkme/form/settings and enter the code in the textarea

**CONFIGURATION**
- Enter walkme snippet at the link: <domain.com>/admin/config/walkme/form/settings

**TESTING**
- How do I Test that the WalkMe Snippet is Working?
To test the snippet to make sure it's set up correctly:
1. Open your site.
2. Right-click and select inspect the page.
3. Open the console and enter the following text query: _walkMe.getEnvId();
   If it returns undefined, the Snippet is not properly set up. If the query returns a value, then you're all set!

**AUTHOR**
- Original development: Vipin Mittal(https://www.drupal.org/u/vipinmittal18)