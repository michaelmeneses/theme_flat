<?php

/**
 * Theme Flat version file.
 *
 * @package    theme_flat
 * @copyright  2014 Michael Meneses
 * @license    Free
 */

if (!empty($PAGE->theme->settings->showsocialheader)) {
    $facebook = !empty($PAGE->theme->settings->facebook) ? $PAGE->theme->settings->facebook : null;
    $twitter = !empty($PAGE->theme->settings->twitter) ? $PAGE->theme->settings->twitter : null;
    $googleplus = !empty($PAGE->theme->settings->googleplus) ? $PAGE->theme->settings->googleplus : null;
    $instagram = !empty($PAGE->theme->settings->instagram) ? $PAGE->theme->settings->instagram : null;
    $youtube = !empty($PAGE->theme->settings->youtube) ? $PAGE->theme->settings->youtube : null;
    $showsocialheader = true;
    if (!$facebook && !$twitter && !$googleplus && !$instagram && !$youtube){
        $showsocialheader = null;
    }
} else {
    $showsocialheader = null;
}

$custom_menu_language = $OUTPUT->custom_menu_language();

if ($showsocialheader && $custom_menu_language) {
    $span = 'span6';
} else {
    $span = 'span12';
}

$logo = !empty($PAGE->theme->setting_file_url('logo','logo')) ? $PAGE->theme->setting_file_url('logo','logo') : null;
$sitetitle = !empty($PAGE->theme->settings->sitetitle) ? $PAGE->theme->settings->sitetitle : $SITE->fullname;
$sitedescription = !empty($PAGE->theme->settings->sitedescription) ? $PAGE->theme->settings->sitedescription : $SITE->shortname;

echo $OUTPUT->doctype() ?>
<html <?php echo $OUTPUT->htmlattributes(); ?>>
<head>
    <title><?php echo $OUTPUT->page_title(); ?></title>
    <link rel="shortcut icon" href="<?php echo $OUTPUT->favicon(); ?>" />
    <?php echo $OUTPUT->standard_head_html() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body <?php echo $OUTPUT->body_attributes(); ?>>

<?php echo $OUTPUT->standard_top_of_body_html() ?>

	<header id="header">
		<div id="toolbar" class="row-fluid">
			<div class="container-fluid">
				<?php if ($showsocialheader) { ?>
				<div class="<?php echo $span; ?>">
					<div class="social-menu">
						<ul class="nav">
                            <?php if ($facebook) { ?>
                            <li><a title="" href="<?php echo $facebook; ?>"><i class="fa fa-facebook"></i></a></li>
                            <?php } ?>
                            <?php if ($twitter) { ?>
                            <li><a title="" href="<?php echo $twitter; ?>"><i class="fa fa-twitter"></i></a></li>
                            <?php } ?>
                            <?php if ($googleplus) { ?>
                            <li><a title="" href="<?php echo $googleplus; ?>"><i class="fa fa-google-plus"></i></a></li>
                            <?php } ?>
                            <?php if ($instagram) { ?>
                            <li><a title="" href="<?php echo $instagram; ?>"><i class="fa fa-instagram"></i></a></li>
                            <?php } ?>
                            <?php if ($youtube) { ?>
                            <li><a title="" href="<?php echo $youtube; ?>"><i class="fa fa-youtube-play"></i></a></li>
                            <?php } ?>
						</ul>
					</div>
				</div>
				<?php } ?>
				<?php if ($custom_menu_language) { ?>
				<div class="<?php echo $span; ?>">
					<div class="language-menu">
						<?php echo $OUTPUT->custom_menu_language(); ?>
					</div>
				</div>
				<?php } ?>
			</div>
		</div>
		<div id="brandbar" class="row-fluid">
			<div class="container-fluid">
				<div id="left" class="span6">
                    <?php if ($logo) { ?>
                        <img src="<?php echo $logo; ?>" alt="" />
                    <?php } else { ?>
                        <?php if ($sitetitle) { ?>
    					<h1 id="site-title"><a href="<?php echo $CFG->wwwroot; ?>" title="" rel="home"><?php echo $sitetitle; ?></a></h1>
                        <?php } ?>
                        <?php if ($sitedescription) { ?>
    					<h2 id="site-description"><?php echo $sitedescription; ?></h2>
                        <?php } ?>
                    <?php } ?>
				</div>
				<div id="right" class="span6">
					<div class="site-links">
						<?php echo $OUTPUT->page_heading_menu(); echo $OUTPUT->login_info(); ?>
					</div>
				</div>
			</div>
		</div>
		<div class="clear"></div>
		<nav id="site-navigation" class="navbar" role="navigation">
			<div class="navbar-inner">
				<div class="container-fluid">
					<?php echo $OUTPUT->custom_menu(); ?>
				</div>
			</div>
		</nav>
	</header>