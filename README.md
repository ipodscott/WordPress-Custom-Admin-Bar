# WordPress Custom Admin Bar
---
<strong>Updated 4.20 Added a static version with a link to the edit the current page or go to the dashboard</strong><br /><br />
Custom WordPress admin bar that is configurable through Advanced Custom Fields as Flexible Contnet.<br /><br />
The Admin uses WordPress's built icon set Dash Icons [Dash Icons](https://developer.wordpress.org/resource/dashicons/) that only load if the users is logged in.<br /><br />
When selecting icons via a text field the only text you need is the icon name for example, the full css is "dashicons dashicons-email-alt2" only use the "email-alt2" the rest is
available by default. <br /><br />
Links to Edit the Current Page and to the Dashboard are already included, you do have the option to modify their icons and tooltips.<br /><br />

## Usage & Installation
---
- Install Advanced Custom Fields Pro and import the admin_bar.json from the Custom Fields --> Tools --> Import
- Create an ACF based Options Page
- From the Locations section of the Field Group Section of ACf for Admin Bar field group select where in the options section to place the Admin Bar
- Copy the admin-bar.php file to your current theme's folder
- Use php include or what ever means you prefer to add the admin-bar.php file to the bottom of your footer.php just above the </body> or whereever your closing body tag is.
- **Disable the front-end toolbar** for this correctly you will need to unchech **Show Toolbar when viewing site** from each Admin users profile.

## Creating Links
---
- Predifined links such as the Dashboard and Edit page are constant and never change. The user only needs to add a Dash Icon and Tooltip
- Other links are created by right clicking on desired admin links and pasting the URLs.
- Creating a link to Create a new page right click on the "Add New" link and copy the URL
- The copied url should look similar to this `https://www.yoururl.com/wp-admin/post-new.php?post_type=page` but use only the **post-new.php?post_type=page** <br />
**The procedure is the same for custom post types as well.**<br />
For a CPT called video the full url is `https://www.yoururl.com/wp-admin/post-new.php?post_type=video` again only use **post-new.php?post_type=video**
