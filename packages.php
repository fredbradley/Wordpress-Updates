<?php
// Theme with update info
$packages['theme'] = array( //Replace theme with theme stylesheet slug that the update is for
    'versions' => array(
        '1.0' => array( //Array name should be set to current version of update
            'version' => '1.0', //Current version available
            'date' => '2010-04-10', //Date version was released
            //theme.zip is the same as file_name
            'package' => 'http://url_to_your_site/download.php?key=' . md5('theme.zip' . mktime(0,0,0,date("m"),date("d"),date("Y"))),
            //file_name is the name of the file in the update folder.
            'file_name' => 'theme.zip',	//File name of theme zip file
            'author' => 'Author Name', //Author of theme
            'name' => 'Theme Name', //Name of theme
            'requires' => '3.1', //Wordpress version required
            'tested' => '3.1', //WordPress version tested up to
            'screenshot_url' => 'http://url_to_your_theme_site/screenshot.png' //url of screenshot of theme
        )
    ),
    'info' => array(
        'url' => 'http://url_to_your_theme_site'  // Website devoted to theme if available
    )
);


// Plugin with update info
$packages['a-fred-bradley-website-master'] = array( //Replace plugin with the plugin slug that updates will be checking for
    'versions' => array(
        
        '1.1' => array( //Array name should be set to current version of update
        	'name' => "A Fred Bradley Website",
            'version' => '1.1', //Current version available
            'date' => '2014-10-30', //Date version was released
            'author' => 'Fred Bradley', //Author name - can be linked using html - <a href="http://link-to-site.com">Author Name</a>
            'requires' => '3.0', // WP version required for plugin
            'tested' => '4.0', // WP version tested with
            'homepage' => 'https://github.com/fredbradley/a-fred-bradley-website', // Site devoted to your plugin if available
            'downloaded' => '1000', // Number of times downloaded
            'external' => '', // Unused
            //plugin.zip is the same as file_name
            //'package' => 'http://code.fredbradley.co.uk/wordpress-updates/download.php?key=' . md5('a-fred-bradley-website-master.zip' . mktime(0,0,0,date("m"),date("d"),date("Y"))),
            'package' => 'https://github.com/fredbradley/a-fred-bradley-website/archive/master.zip',
            //file_name is the name of the file in the update folder.
            'file_name' => 'a-fred-bradley-website-master.zip',
            'sections' => array(
                /* Plugin Info sections tabs.  Each key will be used as the title of the tab, value is the contents of tab.
                  Must be lowercase to function properly
                  HTML can be used in all sections below for formating.  Must be properly escaped ie a single quote would have to be \'
                  Screenshot section must use exteranl links for img tags.
                 */
                'description' => 'Radio Player for Wordpress allows you to have a customised pop up radio player in your site. You can choose the stream, and change the style.', //Description Tab
                'installation' => 'For installation instructions please read content at http://www.fredbradley.co.uk/portfolio/radio-player-for-wordpress', //Installaion Tab
                'screen shots' => 'Shots shots shots shots shots shots... everbody', //Screen Shots
                'changelog' => 'Correctly installed the automatic updater', //Change Log Tab
                'faq' => 'If you have any questions please email me!', //FAQ Tab
                'other notes' => 'There are no other notes',    //Other Notes Tab
                'Fred Bradley'=>'About Fred'
            )
        ),
        
    ),
    'info' => array(
        'url' => 'https://github.com/fredbradley/a-fred-bradley-website'  // Site devoted to your plugin if available
    )
);

// Plugin with update info
$packages['radio-player-for-wordpress'] = array( //Replace plugin with the plugin slug that updates will be checking for
    'versions' => array(
        
        '1.8' => array( //Array name should be set to current version of update
        	'name' => "Radio Player For Wordpress",
            'version' => '1.8', //Current version available
            'date' => '2014-05-25', //Date version was released
            'author' => 'Fred Bradley', //Author name - can be linked using html - <a href="http://link-to-site.com">Author Name</a>
            'requires' => '3.0', // WP version required for plugin
            'tested' => '3.9.1', // WP version tested with
            'homepage' => 'http://www.fredbradley.co.uk/portfolio/radio-player-for-wordpress', // Site devoted to your plugin if available
            'downloaded' => '1000', // Number of times downloaded
            'external' => '', // Unused
            //plugin.zip is the same as file_name
            'package' => 'http://code.fredbradley.co.uk/wordpress-updates/download.php?key=' . md5('radio-player-for-wordpress.zip' . mktime(0,0,0,date("m"),date("d"),date("Y"))),
            //file_name is the name of the file in the update folder.
            'file_name' => 'radio-player-for-wordpress.zip',
            'sections' => array(
                /* Plugin Info sections tabs.  Each key will be used as the title of the tab, value is the contents of tab.
                  Must be lowercase to function properly
                  HTML can be used in all sections below for formating.  Must be properly escaped ie a single quote would have to be \'
                  Screenshot section must use exteranl links for img tags.
                 */
                'description' => 'Radio Player for Wordpress allows you to have a customised pop up radio player in your site. You can choose the stream, and change the style.', //Description Tab
                'installation' => 'For installation instructions please read content at http://www.fredbradley.co.uk/portfolio/radio-player-for-wordpress', //Installaion Tab
                'screen shots' => 'Shots shots shots shots shots shots... everbody', //Screen Shots
                'changelog' => 'Correctly installed the automatic updater', //Change Log Tab
                'faq' => 'If you have any questions please email me!', //FAQ Tab
                'other notes' => 'There are no other notes',    //Other Notes Tab
                'Fred Bradley'=>'About Fred'
            )
        ),
        
    ),
    'info' => array(
        'url' => 'http://www.fredbradley.co.uk/portfolio/radio-player-for-wordpress'  // Site devoted to your plugin if available
    )
);

// Plugin with update info
$packages['now-playing-data-on-main-site'] = array( //Replace plugin with the plugin slug that updates will be checking for
    'versions' => array(
        
        '1.8' => array( //Array name should be set to current version of update
        	'name' => "Now Playing Data on Main Site",
            'version' => '1.8', //Current version available
            'date' => '2014-05-27', //Date version was released
            'author' => 'Fred Bradley', //Author name - can be linked using html - <a href="http://link-to-site.com">Author Name</a>
            'requires' => '3.0', // WP version required for plugin
            'tested' => '3.9.1', // WP version tested with
            'homepage' => 'http://www.fredbradley.co.uk/portfolio/radio-player-for-wordpress', // Site devoted to your plugin if available
            'downloaded' => '1000', // Number of times downloaded
            'external' => '', // Unused
            //plugin.zip is the same as file_name
            'package' => 'http://code.fredbradley.co.uk/wordpress-updates/download.php?key=' . md5('now-playing-data-on-main-site.zip' . mktime(0,0,0,date("m"),date("d"),date("Y"))),
            //file_name is the name of the file in the update folder.
            'file_name' => 'now-playing-data-on-main-site.zip',
            'sections' => array(
                /* Plugin Info sections tabs.  Each key will be used as the title of the tab, value is the contents of tab.
                  Must be lowercase to function properly
                  HTML can be used in all sections below for formating.  Must be properly escaped ie a single quote would have to be \'
                  Screenshot section must use exteranl links for img tags.
                 */
                'description' => 'This puts the now playing data on the main site!', //Description Tab
                'installation' => 'For installation instructions please read content at http://www.fredbradley.co.uk/portfolio/radio-player-for-wordpress', //Installaion Tab
                'screen shots' => 'Shots shots shots shots shots shots... everbody', //Screen Shots
                'changelog' => 'Put in Document On Ready', //Change Log Tab
                'faq' => 'If you have any questions please email me!', //FAQ Tab
                'other notes' => 'There are no other notes',    //Other Notes Tab
                'Fred Bradley'=>'About Fred'
            )
        ),
        
    ),
    'info' => array(
        'url' => 'http://www.fredbradley.co.uk/portfolio/radio-player-for-wordpress'  // Site devoted to your plugin if available
    )
);