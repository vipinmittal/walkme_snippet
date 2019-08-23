# walkme_snippet
Integration of Drupal with WalkMe

This module is developed to integrate WalkMe with Drupal 8. This module add the Walkme snippet in the head tag of each page.

**How do I Test that the WalkMe Snippet is Working?**
To test the snippet to make sure it's set up correctly:
1. Open your site.
2. Right-click and select inspect the page.
3. Open the console and enter the following text query: _walkMe.getEnvId();
   If it returns undefined, the Snippet is not properly set up. If the query returns a value, then you're all set!

**CONFIGURE**
Enter walkme snippet at the link: <domain.com>/admin/config/walkme/form/settings