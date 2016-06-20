<?php

/**
 * Theme Flat version file.
 *
 * @package    theme_flat
 * @copyright  2014 Michael Meneses
 * @license    Free
 */

if (!empty($PAGE->theme->settings->showabout)) {
    if (!empty($PAGE->theme->settings->abouttitle)) {
        $abouttitle = $PAGE->theme->settings->abouttitle;
    } else {
        $abouttitle = get_string('about','theme_flat');
    }
    if (!empty($PAGE->theme->settings->aboutdescription)) {
        $aboutdescription = $PAGE->theme->settings->aboutdescription;
    } else {
        $aboutdescription = get_string('my_about','theme_flat');
    }
    $showabout = true;
} else {
    $showabout = null;
}

if (!empty($PAGE->theme->settings->showsocialfooter)) {
    if (!empty($PAGE->theme->settings->facebook)) {
        $facebook = $PAGE->theme->settings->facebook;
    } else {
        $facebook = null;
    }
    if (!empty($PAGE->theme->settings->twitter)) {
        $twitter = $PAGE->theme->settings->twitter;
    } else {
        $twitter = null;
    }
    if (!empty($PAGE->theme->settings->googleplus)) {
        $googleplus = $PAGE->theme->settings->googleplus;
    } else {
        $googleplus = null;
    }
    if (!empty($PAGE->theme->settings->instagram)) {
        $instagram = $PAGE->theme->settings->instagram;
    } else {
        $instagram = null;
    }
    if (!empty($PAGE->theme->settings->youtube)) {
        $youtube = $PAGE->theme->settings->youtube;
    } else {
        $youtube = null;
    }
    $showsocialfooter = true;
    if (!$facebook && !$twitter && !$googleplus && !$instagram && !$youtube){
        $showsocialfooter = null;
    }
} else {
    $showsocialfooter = null;
}

if (!empty($PAGE->theme->settings->showcontact)) {
    if (!empty($PAGE->theme->settings->address)) {
        $address = $PAGE->theme->settings->address;
    } else {
        $address = null;
    }
    if (!empty($PAGE->theme->settings->city)) {
        $city = $PAGE->theme->settings->city;
    } else {
        $city = null;
    }
    if (!empty($PAGE->theme->settings->phone)) {
        $phone = $PAGE->theme->settings->phone;
    } else {
        $phone = null;
    }
    if (!empty($PAGE->theme->settings->mail)) {
        $mail = $PAGE->theme->settings->mail;
    } else {
        $mail = null;
    }
    $showcontact = true;
} else {
    $showcontact = null;
}

if ($showabout && $showsocialfooter && $showcontact){
    $span = 'span4';
} elseif (($showabout && $showsocialfooter) || ($showabout && $showcontact) || ($showsocialfooter && $showcontact)) {
    $span = 'span6';
} else {
    $span = 'span12';
}

if (!empty($PAGE->theme->settings->footnote)) {
    $footnote = $PAGE->theme->settings->footnote;
} else {
    $footnote = get_string('credits','theme_flat');
}

?>

    <footer id="footer">
        <?php if (is_siteadmin()) { ?>
        <div id="debug" class="row-fluid">
            <div class="container-fluid">
                <div class="span12" style="text-align:center">
                    <?php echo $OUTPUT->standard_footer_html(); ?>
                </div>
            </div>
        </div>
        <?php } ?>
        <div id="footer-bottom" class="row-fluid">
            <div class="container-fluid">
                <div class="span12">
                    <div id="page-footer">
                        <div id="course-footer"><?php echo $OUTPUT->course_footer(); ?></div>
                        <?php if ($showabout && $showsocialfooter && $showcontact) { ?>
                        <div id="footer-flat">
                            <?php if ($showabout) { ?>
                            <div class="<?php echo $span; ?>">
                                <?php if ($abouttitle) { ?>
                                <h3><?php echo $abouttitle; ?></h3>
                                <?php } ?>
                                <?php if ($aboutdescription) { ?>
                                <?php echo $aboutdescription; ?>
                                <?php } ?>
                            </div>
                            <?php } ?>
                            <div class="<?php echo $span; ?>">
                                <h3><?php echo get_string('contact','theme_flat') ?></h3>
                                <ul class="contactinfo">
                                    <?php if ($address) { ?>
                                    <li><i class="fa fa-home"></i> <?php echo $address; ?></li>
                                    <?php } ?>
                                    <?php if ($city) { ?>
                                    <li><i class="fa fa-globe"></i> <?php echo $city; ?></li>
                                    <?php } ?>
                                    <?php if ($phone) { ?>
                                    <li><i class="fa fa-phone"></i> <?php echo $phone; ?></li>
                                    <?php } ?>
                                    <?php if ($mail) { ?>
                                    <li><i class="fa fa-envelope"></i> <a href="mailto:michael@michaelmeneses.com.br"><?php echo $mail; ?></a></li>
                                    <?php } ?>
                                </ul>
                            </div>
                            <?php if ($showsocialfooter) { ?>
                            <div class="<?php echo $span; ?>">
                                <h3><?php echo get_string('social','theme_flat') ?></h3>
                                <ul class="social">
                                    <?php if ($facebook) { ?>
                                    <li><a title="" href="<?php echo $facebook; ?>"><i class="fa fa-facebook fa-2x"></i></a></li>
                                    <?php } ?>
                                    <?php if ($twitter) { ?>
                                    <li><a title="" href="<?php echo $twitter; ?>"><i class="fa fa-twitter fa-2x"></i></a></li>
                                    <?php } ?>
                                    <?php if ($googleplus) { ?>
                                    <li><a title="" href="<?php echo $googleplus; ?>"><i class="fa fa-google-plus fa-2x"></i></a></li>
                                    <?php } ?>
                                    <?php if ($instagram) { ?>
                                    <li><a title="" href="<?php echo $instagram; ?>"><i class="fa fa-instagram fa-2x"></i></a></li>
                                    <?php } ?>
                                    <?php if ($youtube) { ?>
                                    <li><a title="" href="<?php echo $youtube; ?>"><i class="fa fa-youtube-play fa-2x"></i></a></li>
                                    <?php } ?>
                                </ul>
                            </div>
                            <?php } ?>
                            <div class="clear"></div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <div id="footerbar" class="row-fluid">
            <div class="container-fluid">
                <div class="span12">
                    <div class="copyright"><?php echo $footnote; ?></div>
                </div>
            </div>
        </div>
    </footer>

    <?php echo $OUTPUT->standard_end_of_body_html() ?>