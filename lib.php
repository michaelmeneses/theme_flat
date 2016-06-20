<?php

function theme_flat_page_init(moodle_page $page) {
    $page->requires->jquery();
}

function theme_flat_process_css($css, $theme) {

    $headerbarcolor = $theme->settings->headerbarcolor;
    $css = theme_flat_set_headerbarcolor($css, $headerbarcolor);
 
    $headerbackgroundcolor = $theme->settings->headerbackgroundcolor;
    $css = theme_flat_set_headerbackgroundcolor($css, $headerbackgroundcolor);

    $headertextcolor = $theme->settings->headertextcolor;
    $css = theme_flat_set_headertextcolor($css, $headertextcolor);
    
    $navbackgroundcolor = $theme->settings->navbackgroundcolor;
    $css = theme_flat_set_navbackgroundcolor($css, $navbackgroundcolor);
 
    $navlinkcolor = $theme->settings->navlinkcolor;
    $css = theme_flat_set_navlinkcolor($css, $navlinkcolor);
 
    $navhovercolor = $theme->settings->navhovercolor;
    $css = theme_flat_set_navhovercolor($css, $navhovercolor);
 
    $breadbackgroundcolor = $theme->settings->breadbackgroundcolor;
    $css = theme_flat_set_breadbackgroundcolor($css, $breadbackgroundcolor);
 
    $breadtextcolor = $theme->settings->breadtextcolor;
    $css = theme_flat_set_breadtextcolor($css, $breadtextcolor);
 
    $pageheadingcolor = $theme->settings->pageheadingcolor;
    $css = theme_flat_set_pageheadingcolor($css, $pageheadingcolor);
 
    $pagelinkcolor = $theme->settings->pagelinkcolor;
    $css = theme_flat_set_pagelinkcolor($css, $pagelinkcolor);
 
    $pagehovercolor = $theme->settings->pagehovercolor;
    $css = theme_flat_set_pagehovercolor($css, $pagehovercolor);
 
    $footerbackgroundcolor = $theme->settings->footerbackgroundcolor;
    $css = theme_flat_set_footerbackgroundcolor($css, $footerbackgroundcolor);
 
    $footertextcolor = $theme->settings->footertextcolor;
    $css = theme_flat_set_footertextcolor($css, $footertextcolor);
 
    $footerbarcolor = $theme->settings->footerbarcolor;
    $css = theme_flat_set_footerbarcolor($css, $footerbarcolor);
 
    $customcss = $theme->settings->customcss;
    $css = theme_flat_set_customcss($css, $customcss);
 
    return $css;
}

function theme_flat_set_headerbarcolor($css, $headerbarcolor) {
    $tag = '[[setting:headerbarcolor]]';
    is_null($headerbarcolor) ? $replacement = '#1F406D' : $replacement = $headerbarcolor;
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

function theme_flat_set_headerbackgroundcolor($css, $headerbackgroundcolor) {
    $tag = '[[setting:headerbackgroundcolor]]';
    is_null($headerbackgroundcolor) ? $replacement = '#3456AA' : $replacement = $headerbackgroundcolor;
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

function theme_flat_set_headertextcolor($css, $headertextcolor) {
    $tag = '[[setting:headertextcolor]]';
    is_null($headertextcolor) ? $replacement = '#FFFFFF' : $replacement = $headertextcolor;
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

function theme_flat_set_navbackgroundcolor($css, $navbackgroundcolor) {
    $tag = '[[setting:navbackgroundcolor]]';
    is_null($navbackgroundcolor) ? $replacement = '#FFFFFF' : $replacement = $navbackgroundcolor;
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

function theme_flat_set_navlinkcolor($css, $navlinkcolor) {
    $tag = '[[setting:navlinkcolor]]';
    is_null($navlinkcolor) ? $replacement = '#515659' : $replacement = $navlinkcolor;
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

function theme_flat_set_navhovercolor($css, $navhovercolor) {
    $tag = '[[setting:navhovercolor]]';
    is_null($navhovercolor) ? $replacement = '#DD3333' : $replacement = $navhovercolor;
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

function theme_flat_set_breadbackgroundcolor($css, $breadbackgroundcolor) {
    $tag = '[[setting:breadbackgroundcolor]]';
    is_null($breadbackgroundcolor) ? $replacement = '#3456AA' : $replacement = $breadbackgroundcolor;
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

function theme_flat_set_breadtextcolor($css, $breadtextcolor) {
    $tag = '[[setting:breadtextcolor]]';
    is_null($breadtextcolor) ? $replacement = '#FFFFFF' : $replacement = $breadtextcolor;
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

function theme_flat_set_pageheadingcolor($css, $pageheadingcolor) {
    $tag = '[[setting:pageheadingcolor]]';
    is_null($pageheadingcolor) ? $replacement = '#1F406D' : $replacement = $pageheadingcolor;
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

function theme_flat_set_pagelinkcolor($css, $pagelinkcolor) {
    $tag = '[[setting:pagelinkcolor]]';
    is_null($pagelinkcolor) ? $replacement = '#239FDB' : $replacement = $pagelinkcolor;
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

function theme_flat_set_pagehovercolor($css, $pagehovercolor) {
    $tag = '[[setting:pagehovercolor]]';
    is_null($pagehovercolor) ? $replacement = '#1F406D' : $replacement = $pagehovercolor;
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

function theme_flat_set_footerbackgroundcolor($css, $footerbackgroundcolor) {
    $tag = '[[setting:footerbackgroundcolor]]';
    is_null($footerbackgroundcolor) ? $replacement = '#3456AA' : $replacement = $footerbackgroundcolor;
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

function theme_flat_set_footertextcolor($css, $footertextcolor) {
    $tag = '[[setting:footertextcolor]]';
    is_null($footertextcolor) ? $replacement = '#FFFFFF' : $replacement = $footertextcolor;
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

function theme_flat_set_footerbarcolor($css, $footerbarcolor) {
    $tag = '[[setting:footerbarcolor]]';
    is_null($footerbarcolor) ? $replacement = '#1F406D' : $replacement = $footerbarcolor;
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

function theme_flat_set_customcss($css, $customcss) {
    $tag = '[[setting:customcss]]';
    $replacement = $customcss;
    if (is_null($replacement)) {
        $replacement = '';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

/**
 * Serves any files associated with the theme settings.
 *
 * @param stdClass $course
 * @param stdClass $cm
 * @param context $context
 * @param string $filearea
 * @param array $args
 * @param bool $forcedownload
 * @param array $options
 * @return bool
 */
function theme_flat_pluginfile($course, $cm, $context, $filearea, $args, $forcedownload, array $options = array()) {
    if ($context->contextlevel == CONTEXT_SYSTEM and $filearea === 'logo') {
        $theme = theme_config::load('flat');
        return $theme->setting_file_serve('logo', $args, $forcedownload, $options);
    } else if ($context->contextlevel == CONTEXT_SYSTEM and $filearea === 'slideone') {
        $theme = theme_config::load('flat');
        return $theme->setting_file_serve('slideone', $args, $forcedownload, $options);
    } else if ($context->contextlevel == CONTEXT_SYSTEM and $filearea === 'slidetwo') {
        $theme = theme_config::load('flat');
        return $theme->setting_file_serve('slidetwo', $args, $forcedownload, $options);
    } else if ($context->contextlevel == CONTEXT_SYSTEM and $filearea === 'slidethree') {
        $theme = theme_config::load('flat');
        return $theme->setting_file_serve('slidethree', $args, $forcedownload, $options);
    } else if ($context->contextlevel == CONTEXT_SYSTEM and $filearea === 'slidefour') {
        $theme = theme_config::load('flat');
        return $theme->setting_file_serve('slidefour', $args, $forcedownload, $options);
    } else {
        send_file_not_found();
    }
}