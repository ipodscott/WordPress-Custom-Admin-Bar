# WordPress Custom Admin Bar
---
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
