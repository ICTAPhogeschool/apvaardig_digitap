# Moodle quiz reporting block

## Moodle quiz reporting block
The <strong>Moodle quiz reporting block</strong> is a block type plugin for Moodle that shows selected quiz results in a userfriendly dashboard to the students.

## Installation
- Download the plugin from the GitHub repository.
- Extract the plugin files to the <strong>/blocks/quiz_reporting_block</strong> directory in your Moodle installation.
- Log in to your Moodle site as an administrator and go to Site administration > Notifications.
- Follow the on-screen instructions to install the plugin.

## Usage
This Moodle plugin adds new block to your Moodle platform. You can add the block to any page you want. Depending on the configuration settings the results from the selected quizzes are displayed to the user

## Configuration
The block settings can be be configured using the settings page in the Moodle administration panel. To access the settings page, follow these steps:

Log in to your Moodle site as an administrator.
Go to Site administration > Plugins > Blocks > Moodle quiz reporting block.
Configure the settings as desired.
Click Save changes to save the settings.

Configuration of connection to the extern database. If you have any issue with the connection please check first the firewall. 
 ![plug-in scheme](./docs/img/plugin_settings.png)

## Data model
This plug-in use automapper-plus as extra library to map Models and ModelDtos.
<br>
[Go to the automapper repository](https://github.com/mark-gerarts/automapper-plus)

## Support
If you encounter any issues or have any questions about quiz_reporting_block, please create an issue in the git repo.

## Languages
The default language of the plug-in is English but it is also compatible with Dutch. The language wil be change when the moodle framework has been global changed.
If you want this plug-in in an othre language, create then a directory with one file in the <strong>lang</strong> directory.
<br>
See Dutch(nl) file as example.

## License
Moodle Plugin quiz_reporting_block is licensed under the GNU GPL v3 or later. See the LICENSE file for details.

# Credits
Moodle Plugin apvaardig_digitap was developed by <strong>John S.</strong> and is maintained by <strong>John S.</strong>.
