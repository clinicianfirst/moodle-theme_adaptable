<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Version details
 *
 * @package    theme_adaptable
 * @copyright 2015 Jeremy Hopkins (Coventry University)
 * @copyright 2015 Fernando Acedo (3-bits.com)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 *
 */

defined('MOODLE_INTERNAL') || die;

// Header Navbar.
$temp = new admin_settingpage('theme_adaptable_navbar_settings', get_string('navbarsettings', 'theme_adaptable'));
if ($ADMIN->fulltree) {
    $temp->add(new admin_setting_heading('theme_adaptable_navbar_settings', get_string('navbarsettingsheading', 'theme_adaptable'),
        format_text(get_string('navbardesc', 'theme_adaptable'), FORMAT_MARKDOWN)));

    // Sticky Navbar at the top. See issue #278.
    $name = 'theme_adaptable/stickynavbar';
    $title = get_string('stickynavbar', 'theme_adaptable');
    $description = get_string('stickynavbardesc', 'theme_adaptable');
    $default = true;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Enable/Disable menu items.
    $name = 'theme_adaptable/enablehome';
    $title = get_string('home');
    $description = get_string('enablehomedesc', 'theme_adaptable');
    $default = true;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/enablehomeredirect';
    $title = get_string('enablehomeredirect', 'theme_adaptable');
    $description = get_string('enablehomeredirectdesc', 'theme_adaptable');
    $default = true;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/enablemyhome';
    $title = get_string('myhome');
    $description = get_string('enablemyhomedesc', 'theme_adaptable', get_string('myhome'));
    $default = true;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/enableevents';
    $title = get_string('events', 'theme_adaptable');
    $description = get_string('enableeventsdesc', 'theme_adaptable');
    $default = true;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/enablethiscourse';
    $title = get_string('thiscourse', 'theme_adaptable');
    $description = get_string('enablethiscoursedesc', 'theme_adaptable');
    $default = true;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/enablecoursesections';
    $title = get_string('coursesections', 'theme_adaptable');
    $description = get_string('enablecoursesectionsdesc', 'theme_adaptable');
    $default = true;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $temp->add($setting);

    $name = 'theme_adaptable/enablecompetencieslink';
    $title = get_string('enablecompetencieslink', 'theme_adaptable');
    $description = get_string('enablecompetencieslinkdesc', 'theme_adaptable');
    $default = false;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $temp->add($setting);

    $name = 'theme_adaptable/enablezoom';
    $title = get_string('enablezoom', 'theme_adaptable');
    $description = get_string('enablezoomdesc', 'theme_adaptable');
    $default = true;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $temp->add($setting);

    $name = 'theme_adaptable/defaultzoom';
    $title = get_string('defaultzoom', 'theme_adaptable');
    $description = get_string('defaultzoomdesc', 'theme_adaptable');
    $choices = array(
        'normal' => get_string('normal', 'theme_adaptable'),
        'wide' => get_string('wide', 'theme_adaptable')
    );
    $setting = new admin_setting_configselect($name, $title, $description, 'wide', $choices);
    $temp->add($setting);

    // Show / hide text for the Full screen button.
    $name = 'theme_adaptable/enablezoomshowtext';
    $title = get_string('enablezoomshowtext', 'theme_adaptable');
    $description = get_string('enablezoomshowtextdesc', 'theme_adaptable');
    $default = true;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/enableshowhideblocks';
    $title = get_string('enableshowhideblocks', 'theme_adaptable');
    $description = get_string('enableshowhideblocksdesc', 'theme_adaptable');
    $default = true;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Show / hide text for the show / hide blocks button.
    $name = 'theme_adaptable/enableshowhideblockstext';
    $title = get_string('enableshowhideblockstext', 'theme_adaptable');
    $description = get_string('enableshowhideblockstextdesc', 'theme_adaptable');
    $default = true;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $temp->add($setting);

    $name = 'theme_adaptable/enablenavbarwhenloggedout';
    $title = get_string('enablenavbarwhenloggedout', 'theme_adaptable');
    $description = get_string('enablenavbarwhenloggedoutdesc', 'theme_adaptable');
    $default = false;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Settings icon and Edit button.
    $name = 'theme_adaptable/editsettingsbutton';
    $title = get_string('editsettingsbutton', 'theme_adaptable');
    $description = get_string('editsettingsbuttondesc', 'theme_adaptable');
    $choices = array(
        'cog' => get_string('editsettingsbuttonshowcog', 'theme_adaptable'),
        'button' => get_string('editsettingsbuttonshowbutton', 'theme_adaptable'),
        'cogandbutton' => get_string('editsettingsbuttonshowcogandbutton', 'theme_adaptable')
    );
    $setting = new admin_setting_configselect($name, $title, $description, 'cog', $choices );
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/displayeditingbuttontext';
    $title = get_string('displayeditingbuttontext', 'theme_adaptable');
    $description = get_string('displayeditingbuttontextdesc', 'theme_adaptable');
    $default = true;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // My courses section.
    $temp->add(new admin_setting_heading('theme_adaptable_mycourses_heading',
        get_string('headernavbarmycoursesheading', 'theme_adaptable'),
        format_text(get_string('headernavbarmycoursesheadingdesc', 'theme_adaptable'), FORMAT_MARKDOWN)));

    $name = 'theme_adaptable/enablemysites';
    $title = get_string('mysites', 'theme_adaptable');
    $description = get_string('enablemysitesdesc', 'theme_adaptable');
    $choices = array(
        'excludehidden' => get_string('mysitesexclude', 'theme_adaptable'),
        'includehidden' => get_string('mysitesinclude', 'theme_adaptable'),
        'disabled' => get_string('mysitesdisabled', 'theme_adaptable')
    );
    $setting->set_updatedcallback('theme_reset_all_caches');
    $setting = new admin_setting_configselect($name, $title, $description, 'excludehidden', $choices);
    $temp->add($setting);

    // Custom profile field value for restricting access to my courses menu.
    $name = 'theme_adaptable/enablemysitesrestriction';
    $title = get_string('enablemysitesrestriction', 'theme_adaptable');
    $description = get_string('enablemysitesrestrictiondesc', 'theme_adaptable');
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_RAW);
    $temp->add($setting);

    $name = 'theme_adaptable/mycoursesmenulimit';
    $title = get_string('mycoursesmenulimit', 'theme_adaptable');
    $description = get_string('mycoursesmenulimitdesc', 'theme_adaptable');
    $setting = new admin_setting_configtext($name, $title, $description, '20', PARAM_INT);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/mysitesmaxlength';
    $title = get_string('mysitesmaxlength', 'theme_adaptable');
    $description = get_string('mysitesmaxlengthdesc', 'theme_adaptable');
    $setting = new admin_setting_configselect($name, $title, $description, '30', $from20to40);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/mysitessortoverride';
    $title = get_string('mysitessortoverride', 'theme_adaptable');
    $description = get_string('mysitessortoverridedesc', 'theme_adaptable');
    $choices = array(
        'off' => get_string('mysitessortoverrideoff', 'theme_adaptable'),
        'strings' => get_string('mysitessortoverridestrings', 'theme_adaptable'),
        'profilefields' => get_string('mysitessortoverrideprofilefields', 'theme_adaptable'),
        'profilefieldscohort' => get_string('mysitessortoverrideprofilefieldscohort', 'theme_adaptable'),
        'myoverview' => get_string('mysitessortoverridemyoverview', 'theme_adaptable'),
        'last' => get_string('mysitessortoverridelast', 'theme_adaptable')
    );
    $setting = new admin_setting_configselect($name, $title, $description, 'myoverview', $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/mysitessortoverridefield';
    $title = get_string('mysitessortoverridefield', 'theme_adaptable');
    $description = get_string('mysitessortoverridefielddesc', 'theme_adaptable');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_RAW);
    $temp->add($setting);

    $name = 'theme_adaptable/mysitesmenudisplay';
    $title = get_string('mysitesmenudisplay', 'theme_adaptable');
    $description = get_string('mysitesmenudisplaydesc', 'theme_adaptable');
    $displaychoices = array(
        'shortcodenohover' => get_string('mysitesmenudisplayshortcodenohover', 'theme_adaptable'),
        'shortcodehover' => get_string('mysitesmenudisplayshortcodefullnameonhover', 'theme_adaptable'),
        'fullnamenohover' => get_string('mysitesmenudisplayfullnamenohover', 'theme_adaptable'),
        'fullnamehover' => get_string('mysitesmenudisplayfullnamefullnameonhover', 'theme_adaptable')
    );
    $setting->set_updatedcallback('theme_reset_all_caches');
    $setting = new admin_setting_configselect($name, $title, $description, 'shortcodehover', $displaychoices);
    $temp->add($setting);

    // This course section.
    $temp->add(new admin_setting_heading('theme_adaptable_thiscourse_heading',
        get_string('headernavbarthiscourseheading', 'theme_adaptable'),
        format_text(get_string('headernavbarthiscourseheadingdesc', 'theme_adaptable'), FORMAT_MARKDOWN)));

    // Display participants.
    $name = 'theme_adaptable/displayparticipants';
    $title = get_string('displayparticipants', 'theme_adaptable');
    $description = get_string('displayparticipantsdesc', 'theme_adaptable');
    $radchoices = array(
        0 => get_string('hide', 'theme_adaptable'),
        1 => get_string('show', 'theme_adaptable')
    );
    $setting = new admin_setting_configselect($name, $title, $description, 1, $radchoices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Display Grades.
    $name = 'theme_adaptable/displaygrades';
    $title = get_string('displaygrades', 'theme_adaptable');
    $description = get_string('displaygradesdesc', 'theme_adaptable');
    $radchoices = array(
        0 => get_string('hide', 'theme_adaptable'),
        1 => get_string('show', 'theme_adaptable')
    );
    $setting = new admin_setting_configselect($name, $title, $description, 1, $radchoices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
}

// Create page.
$ADMIN->add('theme_adaptable', $temp);
