<?php

/**
 * Theme Flat version file.
 *
 * @package    theme_flat
 * @copyright  2014 Michael Meneses
 * @license    Free
 */

defined('MOODLE_INTERNAL') || die;

if (is_siteadmin()) {

	$settings->add(new admin_setting_heading('theme_flat_color', get_string('color', 'theme_flat'),
		format_text(get_string('colordesc', 'theme_flat'), FORMAT_MARKDOWN)));

	$name = 'theme_flat/headerbarcolor';
	$title = get_string('headerbarcolor','theme_flat');
	$description = get_string('headerbarcolordesc', 'theme_flat');
	$default = '#1F406D';
	$previewconfig = null;
	$setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$settings->add($setting);

	$name = 'theme_flat/headerbackgroundcolor';
	$title = get_string('headerbackgroundcolor','theme_flat');
	$description = get_string('headerbackgroundcolordesc', 'theme_flat');
	$default = '#3456AA';
	$previewconfig = null;
	$setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$settings->add($setting);

	$name = 'theme_flat/headertextcolor';
	$title = get_string('headertextcolor','theme_flat');
	$description = get_string('headertextcolordesc', 'theme_flat');
	$default = '#FFFFFF';
	$previewconfig = null;
	$setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$settings->add($setting);

	$name = 'theme_flat/navbackgroundcolor';
	$title = get_string('navbackgroundcolor','theme_flat');
	$description = get_string('navbackgroundcolordesc', 'theme_flat');
	$default = '#FFFFFF';
	$previewconfig = null;
	$setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$settings->add($setting);

	$name = 'theme_flat/navlinkcolor';
	$title = get_string('navlinkcolor','theme_flat');
	$description = get_string('navlinkcolordesc', 'theme_flat');
	$default = '#515659';
	$previewconfig = null;
	$setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$settings->add($setting);

	$name = 'theme_flat/navhovercolor';
	$title = get_string('navhovercolor','theme_flat');
	$description = get_string('navhovercolordesc', 'theme_flat');
	$default = '#DD3333';
	$previewconfig = null;
	$setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$settings->add($setting);

	$name = 'theme_flat/breadbackgroundcolor';
	$title = get_string('breadbackgroundcolor','theme_flat');
	$description = get_string('breadbackgroundcolordesc', 'theme_flat');
	$default = '#3456AA';
	$previewconfig = null;
	$setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$settings->add($setting);

	$name = 'theme_flat/breadtextcolor';
	$title = get_string('breadtextcolor','theme_flat');
	$description = get_string('breadlinkcolordesc', 'theme_flat');
	$default = '#FFFFFF';
	$previewconfig = null;
	$setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$settings->add($setting);

	$name = 'theme_flat/pageheadingcolor';
	$title = get_string('pageheadingcolor','theme_flat');
	$description = get_string('pageheadingcolordesc', 'theme_flat');
	$default = '#1F406D';
	$previewconfig = null;
	$setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$settings->add($setting);

	$name = 'theme_flat/pagelinkcolor';
	$title = get_string('pagelinkcolor','theme_flat');
	$description = get_string('pagelinkcolordesc', 'theme_flat');
	$default = '#239FDB';
	$previewconfig = null;
	$setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$settings->add($setting);

	$name = 'theme_flat/pagehovercolor';
	$title = get_string('pagehovercolor','theme_flat');
	$description = get_string('pagehovercolordesc', 'theme_flat');
	$default = '#1F406D';
	$previewconfig = null;
	$setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$settings->add($setting);

	$name = 'theme_flat/footerbackgroundcolor';
	$title = get_string('footerbackgroundcolor','theme_flat');
	$description = get_string('footerbackgroundcolordesc', 'theme_flat');
	$default = '#3456AA';
	$previewconfig = null;
	$setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$settings->add($setting);

	$name = 'theme_flat/footertextcolor';
	$title = get_string('footertextcolor','theme_flat');
	$description = get_string('footertextcolordesc', 'theme_flat');
	$default = '#FFFFFF';
	$previewconfig = null;
	$setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$settings->add($setting);

	$name = 'theme_flat/footerbarcolor';
	$title = get_string('footerbarcolor','theme_flat');
	$description = get_string('footerbarcolordesc', 'theme_flat');
	$default = '#1F406D';
	$previewconfig = null;
	$setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$settings->add($setting);


	$settings->add(new admin_setting_heading('theme_flat_social', get_string('social', 'theme_flat'),
		format_text(get_string('socialdesc', 'theme_flat'), FORMAT_MARKDOWN)));

    $name = 'theme_flat/showsocialheader';
    $title = get_string('showsocialheader', 'theme_flat');
    $description = get_string('showsocialheaderdesc', 'theme_flat');
    $default = true;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    $name = 'theme_flat/showsocialfooter';
    $title = get_string('showsocialfooter', 'theme_flat');
    $description = get_string('showsocialfooterdesc', 'theme_flat');
    $default = true;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

	$name = 'theme_flat/facebook';
	$title = get_string('facebook','theme_flat');
	$description = get_string('facebookdesc', 'theme_flat');
	$setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$settings->add($setting);

	$name = 'theme_flat/twitter';
	$title = get_string('twitter','theme_flat');
	$description = get_string('twitterdesc', 'theme_flat');
	$setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$settings->add($setting);

	$name = 'theme_flat/googleplus';
	$title = get_string('googleplus','theme_flat');
	$description = get_string('googleplusdesc', 'theme_flat');
	$setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$settings->add($setting);

	$name = 'theme_flat/instagram';
	$title = get_string('instagram','theme_flat');
	$description = get_string('instagramdesc', 'theme_flat');
	$setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$settings->add($setting);

	$name = 'theme_flat/youtube';
	$title = get_string('youtube','theme_flat');
	$description = get_string('youtubedesc', 'theme_flat');
	$setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$settings->add($setting);


	$settings->add(new admin_setting_heading('theme_flat_header', get_string('header', 'theme_flat'),
		format_text(get_string('headerdesc', 'theme_flat'), FORMAT_MARKDOWN)));

	$name = 'theme_flat/logo';
	$title = get_string('logo','theme_flat');
	$description = get_string('logodesc', 'theme_flat');
	$setting = new admin_setting_configstoredfile($name, $title, $description, 'logo');
	$setting->set_updatedcallback('theme_reset_all_caches');
	$settings->add($setting);

	$name = 'theme_flat/sitetitle';
	$title = get_string('sitetitle','theme_flat');
	$description = get_string('sitetitledesc', 'theme_flat');
	$default = '';
	$setting = new admin_setting_configtext($name, $title, $description, $default);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$settings->add($setting);

	$name = 'theme_flat/sitedescription';
	$title = get_string('sitedescription','theme_flat');
	$description = get_string('sitedescriptiondesc', 'theme_flat');
	$default = '';
	$setting = new admin_setting_configtext($name, $title, $description, $default);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$settings->add($setting);


	$settings->add(new admin_setting_heading('theme_flat_carousel', get_string('carousel', 'theme_flat'),
		format_text(get_string('carouseldesc', 'theme_flat'), FORMAT_MARKDOWN)));

    $name = 'theme_flat/showcarousel';
    $title = get_string('showcarousel', 'theme_flat');
    $description = get_string('showcarouseldesc', 'theme_flat');
    $default = true;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

	$name = 'theme_flat/slideone';
	$title = get_string('slideone','theme_flat');
	$description = get_string('slidedesc', 'theme_flat');
	$setting = new admin_setting_configstoredfile($name, $title, $description, 'slideone');
	$setting->set_updatedcallback('theme_reset_all_caches');
	$settings->add($setting);

	$name = 'theme_flat/slideonetitle';
	$title = get_string('slideonetitle','theme_flat');
	$description = get_string('slidetitledesc', 'theme_flat');
	$default = '';
	$setting = new admin_setting_configtext($name, $title, $description, $default);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$settings->add($setting);

	$name = 'theme_flat/slideonedescription';
	$title = get_string('slideonedescription','theme_flat');
	$description = get_string('slidedescriptiondesc', 'theme_flat');
	$default = '';
	$setting = new admin_setting_configtext($name, $title, $description, $default);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$settings->add($setting);

	$name = 'theme_flat/slidetwo';
	$title = get_string('slidetwo','theme_flat');
	$description = get_string('slidedesc', 'theme_flat');
	$setting = new admin_setting_configstoredfile($name, $title, $description, 'slidetwo');
	$setting->set_updatedcallback('theme_reset_all_caches');
	$settings->add($setting);

	$name = 'theme_flat/slidetwotitle';
	$title = get_string('slidetwotitle','theme_flat');
	$description = get_string('slidetitledesc', 'theme_flat');
	$default = '';
	$setting = new admin_setting_configtext($name, $title, $description, $default);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$settings->add($setting);

	$name = 'theme_flat/slidetwodescription';
	$title = get_string('slidetwodescription','theme_flat');
	$description = get_string('slidedescriptiondesc', 'theme_flat');
	$default = '';
	$setting = new admin_setting_configtext($name, $title, $description, $default);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$settings->add($setting);

	$name = 'theme_flat/slidethree';
	$title = get_string('slidethree','theme_flat');
	$description = get_string('slidedesc', 'theme_flat');
	$setting = new admin_setting_configstoredfile($name, $title, $description, 'slidethree');
	$setting->set_updatedcallback('theme_reset_all_caches');
	$settings->add($setting);

	$name = 'theme_flat/slidethreetitle';
	$title = get_string('slidethreetitle','theme_flat');
	$description = get_string('slidetitledesc', 'theme_flat');
	$default = '';
	$setting = new admin_setting_configtext($name, $title, $description, $default);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$settings->add($setting);

	$name = 'theme_flat/slidethreedescription';
	$title = get_string('slidethreedescription','theme_flat');
	$description = get_string('slidedescriptiondesc', 'theme_flat');
	$default = '';
	$setting = new admin_setting_configtext($name, $title, $description, $default);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$settings->add($setting);

	$name = 'theme_flat/slidefour';
	$title = get_string('slidefour','theme_flat');
	$description = get_string('slidedesc', 'theme_flat');
	$setting = new admin_setting_configstoredfile($name, $title, $description, 'slidefour');
	$setting->set_updatedcallback('theme_reset_all_caches');
	$settings->add($setting);

	$name = 'theme_flat/slidefourtitle';
	$title = get_string('slidefourtitle','theme_flat');
	$description = get_string('slidetitledesc', 'theme_flat');
	$default = '';
	$setting = new admin_setting_configtext($name, $title, $description, $default);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$settings->add($setting);

	$name = 'theme_flat/slidefourdescription';
	$title = get_string('slidefourdescription','theme_flat');
	$description = get_string('slidedescriptiondesc', 'theme_flat');
	$default = '';
	$setting = new admin_setting_configtext($name, $title, $description, $default);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$settings->add($setting);


	$settings->add(new admin_setting_heading('theme_flat_about', get_string('about', 'theme_flat'),
		format_text(get_string('aboutdesc', 'theme_flat'), FORMAT_MARKDOWN)));

    $name = 'theme_flat/showabout';
    $title = get_string('showabout', 'theme_flat');
    $description = get_string('showaboutdesc', 'theme_flat');
    $default = true;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

	$name = 'theme_flat/abouttitle';
	$title = get_string('abouttitle','theme_flat');
	$description = get_string('abouttitledesc', 'theme_flat');
	$default = 'About';
	$setting = new admin_setting_configtext($name, $title, $description, $default);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$settings->add($setting);

	$name = 'theme_flat/aboutdescription';
	$title = get_string('aboutdescription','theme_flat');
	$description = get_string('aboutdescriptiondesc', 'theme_flat');
	$default = '';
	$setting = new admin_setting_confightmleditor($name, $title, $description, '');
	$setting->set_updatedcallback('theme_reset_all_caches');
	$settings->add($setting);


	$settings->add(new admin_setting_heading('theme_flat_contact', get_string('contact', 'theme_flat'),
		format_text(get_string('contactdesc', 'theme_flat'), FORMAT_MARKDOWN)));

    $name = 'theme_flat/showcontact';
    $title = get_string('showcontact', 'theme_flat');
    $description = get_string('showcontactdesc', 'theme_flat');
    $default = true;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

	$name = 'theme_flat/address';
	$title = get_string('address','theme_flat');
	$description = get_string('addressdesc', 'theme_flat');
	$default = '';
	$setting = new admin_setting_configtext($name, $title, $description, $default);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$settings->add($setting);

	$name = 'theme_flat/city';
	$title = get_string('city','theme_flat');
	$description = get_string('citydesc', 'theme_flat');
	$default = '';
	$setting = new admin_setting_configtext($name, $title, $description, $default);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$settings->add($setting);

	$name = 'theme_flat/phone';
	$title = get_string('phone','theme_flat');
	$description = get_string('phonedesc', 'theme_flat');
	$default = '';
	$setting = new admin_setting_configtext($name, $title, $description, $default);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$settings->add($setting);

	$name = 'theme_flat/mail';
	$title = get_string('mail','theme_flat');
	$description = get_string('maildesc', 'theme_flat');
	$default = '';
	$setting = new admin_setting_configtext($name, $title, $description, $default);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$settings->add($setting);

	$settings->add(new admin_setting_heading('theme_flat_extra', get_string('extra', 'theme_flat'),
		format_text(get_string('extradesc', 'theme_flat'), FORMAT_MARKDOWN)));

	$name = 'theme_flat/footnote';
	$title = get_string('footnote','theme_flat');
	$description = get_string('footnotedesc', 'theme_flat');
	$setting = new admin_setting_confightmleditor($name, $title, $description, '');
	$setting->set_updatedcallback('theme_reset_all_caches');
	$settings->add($setting);

	$name = 'theme_flat/customcss';
	$title = get_string('customcss','theme_flat');
	$description = get_string('customcssdesc', 'theme_flat');
	$setting = new admin_setting_configtextarea($name, $title, $description, '');
	$setting->set_updatedcallback('theme_reset_all_caches');
	$settings->add($setting);

}