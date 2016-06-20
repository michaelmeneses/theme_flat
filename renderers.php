<?php

/**
 * Theme Flat renderers file.
 *
 * @package    theme_flat
 * @copyright  2014 Michael Meneses
 * @license    Free
 */


class theme_flat_core_renderer extends theme_bootstrapbase_core_renderer {

	/**
	 * Outputs the language menu
	 * @return custom_menu object
	 */
	public function custom_menu_language()
	{
		global $CFG;
		$langmenu = new custom_menu();

		$addlangmenu = true;
		$langs = get_string_manager()->get_list_of_translations();
		if (count($langs) < 2
			or empty($CFG->langmenu)
			or ($this->page->course != SITEID and !empty($this->page->course->lang))
		) {
			$addlangmenu = false;
		}

		if ($addlangmenu) {
			$strlang = get_string('language');
			$currentlang = current_language();
			if (isset($langs[$currentlang])) {
				$currentlang = $langs[$currentlang];
			} else {
				$currentlang = $strlang;
			}
			foreach ($langs as $langtype => $langname) {
				$langmenu->add($langname, new moodle_url($this->page->url, array('lang' => $langtype)), $langname);
			}
		}
		return $this->render_custom_menu($langmenu);
	}

	/*
	 * This renders the bootstrap top menu.
	 *
	 * This renderer is needed to enable the Bootstrap style navigation.
	 */
	protected function render_custom_menu(custom_menu $menu) {
		global $CFG;

		if (!$menu->has_children()) {
			return '';
		}

		$content = '<ul class="nav">';
		foreach ($menu->get_children() as $item) {
			$content .= $this->render_custom_menu_item($item, 1);
		}

		return $content.'</ul>';
	}

}