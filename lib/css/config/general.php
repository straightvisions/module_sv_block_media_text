<?php
	echo $_s->build_css(
		is_admin() ? '.editor-styles-wrapper .wp-block-media-text' : '.wp-block-media-text',
		array_merge(
			$module->get_setting('padding')->get_css_data('padding'),
			$module->get_setting('margin')->get_css_data(),
			$module->get_setting('border')->get_css_data()
		)
	);