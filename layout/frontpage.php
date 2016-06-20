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
 * A three column layout for the Bootstrapbase theme.
 *
 * @package   theme_bootstrapbase
 * @copyright 2012 Bas Brands, www.basbrands.nl
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

if (right_to_left()) {
    $regionbsid = 'region-bs-main-and-post';
} else {
    $regionbsid = 'region-bs-main-and-pre';
}

if (!empty($PAGE->theme->settings->showcarousel)) {
    if (!empty($PAGE->theme->setting_file_url('slideone','slideone'))) {
        $slideone = $PAGE->theme->setting_file_url('slideone','slideone');
        $slideonetitle = !empty($PAGE->theme->settings->slideonetitle) ? $PAGE->theme->settings->slideonetitle : null;
        $slideonedescription = !empty($PAGE->theme->settings->slideonedescription) ? $PAGE->theme->settings->slideonedescription : null;
    } else {
        $slideone = null;
    }
    if (!empty($PAGE->theme->setting_file_url('slidetwo','slidetwo'))) {
        $slidetwo = $PAGE->theme->setting_file_url('slidetwo','slidetwo');
        $slidetwotitle = !empty($PAGE->theme->settings->slidetwotitle) ? $PAGE->theme->settings->slidetwotitle : null;
        $slidetwodescription = !empty($PAGE->theme->settings->slidetwodescription) ? $PAGE->theme->settings->slidetwodescription : null;
    } else {
        $slidetwo = null;
    }
    if (!empty($PAGE->theme->setting_file_url('slidethree','slidethree'))) {
        $slidetwo = $PAGE->theme->setting_file_url('slidethree','slidethree');
        $slidethreetitle = !empty($PAGE->theme->settings->slidethreetitle) ? $PAGE->theme->settings->slidethreetitle : null;
        $slidethreedescription = !empty($PAGE->theme->settings->slidethreedescription) ? $PAGE->theme->settings->slidethreedescription : null;
    } else {
        $slidethree = null;
    }
    if (!empty($PAGE->theme->setting_file_url('slidefour','slidefour'))) {
        $slidetwo = $PAGE->theme->setting_file_url('slidefour','slidefour');
        $slidefourtitle = !empty($PAGE->theme->settings->slidefourtitle) ? $PAGE->theme->settings->slidefourtitle : null;
        $slidefourdescription = !empty($PAGE->theme->settings->slidefourdescription) ? $PAGE->theme->settings->slidefourdescription : null;
    } else {
        $slidefour = null;
    }
    $showcarousel = true;
    if ($slideone && $slidetwo && $slidethree && $slidefour){
        $showcarousel = null;
    }
} else {
    $showcarousel = null;
}

?>

<?php require_once(dirname(__FILE__) . '/includes/header.php'); ?>

<?php if ($showcarousel) { ?>
<div id="myCarousel" class="carousel slide">
    <ol class="carousel-indicators">
        <?php if ($slideone) { ?>
        <li data-target="#myCarousel" data-slide-to="0" class=""></li>
        <?php } ?>
        <?php if ($slidetwo) { ?>
        <li data-target="#myCarousel" data-slide-to="1" class=""></li>
        <?php } ?>
        <?php if ($slidethree) { ?>
        <li data-target="#myCarousel" data-slide-to="2" class=""></li>
        <?php } ?>
        <?php if ($slidefour) { ?>
        <li data-target="#myCarousel" data-slide-to="3" class=""></li>
        <?php } ?>
    </ol>
    <div class="carousel-inner">
        <?php if ($slideone) { ?>
        <div class="item">
            <img src="<?php echo $slideone; ?>" alt="" />
            <?php if ($slideonetitle || $slideonedescription) { ?>
            <div class="carousel-caption">
                <?php if ($slideonetitle) { ?>
                <h4><?php echo $slideonetitle; ?></h4>
                <?php } ?>
                <?php if ($slideonedescription) { ?>
                <p><?php echo $slideonedescription; ?></p>
                <?php } ?>
            </div>
            <?php } ?>
        </div>
        <?php } ?>
        <?php if ($slidetwo) { ?>
        <div class="item">
            <img src="<?php echo $slidetwo; ?>" alt="" />
            <div class="carousel-caption">
                <?php if ($slidetwotitle) { ?>
                <h4><?php echo $slidetwotitle; ?></h4>
                <?php } ?>
                <?php if ($slidetwodescription) { ?>
                <p><?php echo $slidetwodescription; ?></p>
                <?php } ?>
            </div>
        </div>
        <?php } ?>
        <?php if ($slidethree) { ?>
        <div class="item">
            <img src="<?php echo $slidethree; ?>" alt="" />
            <div class="carousel-caption">
                <?php if ($slidethreetitle) { ?>
                <h4><?php echo $slidethreetitle; ?></h4>
                <?php } ?>
                <?php if ($slidethreedescription) { ?>
                <p><?php echo $slidethreedescription; ?></p>
                <?php } ?>
            </div>
        </div>
        <?php } ?>
        <?php if ($slidefour) { ?>
        <div class="item">
            <img src="<?php echo $slidethree; ?>" alt="" />
            <div class="carousel-caption">
                <?php if ($slidefourtitle) { ?>
                <h4><?php echo $slidefourtitle; ?></h4>
                <?php } ?>
                <?php if ($slidefourdescription) { ?>
                <p><?php echo $slidefourdescription; ?></p>
                <?php } ?>
            </div>
        </div>
        <?php } ?>
    </div>
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
</div>
<?php } ?>

<header id="page-header" class="clearfix breadcrumb-container">
    <div class="container-fluid">
        <div id="page-navbar" class="clearfix">
            <nav class="breadcrumb-nav"><?php echo $OUTPUT->navbar(); ?></nav>
            <div class="breadcrumb-button"><?php echo $OUTPUT->page_heading_button(); ?></div>
        </div>
        <div id="course-header">
            <?php echo $OUTPUT->course_header(); ?>
        </div>
    </div>
</header>

<div id="page" class="container-fluid">
    <div id="page-content" class="row-fluid">
        <div id="<?php echo $regionbsid ?>" class="span9">
            <div class="row-fluid">
                <section id="region-main" class="span8 pull-right">
                    <?php
                    echo $OUTPUT->course_content_header();
                    echo $OUTPUT->main_content();
                    echo $OUTPUT->course_content_footer();
                    ?>
                </section>
                <?php echo $OUTPUT->blocks('side-pre', 'span4 desktop-first-column'); ?>
            </div>
        </div>
        <?php echo $OUTPUT->blocks('side-post', 'span3'); ?>
    </div>
</div>

<?php require_once(dirname(__FILE__) . '/includes/footer.php'); ?>