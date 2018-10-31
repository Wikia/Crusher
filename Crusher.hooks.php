<?php
/**
 * Curse Inc.
 * Crusher
 * Crush things that don't behave
 *
 * @author		Cameron Chunn
 * @copyright	(c) 2016 Curse Inc.
 * @license		GPL-2.0-or-later
 * @package		Crusher
 * @link		https://github.com/HydraWiki/Crusher
 *
**/

class CrusherHooks {
	/**
	 * Conditionally add output.
	 *
	 * @param	object	OutputPage $out
	 * @param	object	Skin $skin
	 * @return	boolean	True
	 */
	public static function onBeforePageDisplay( OutputPage &$out, Skin &$skin ) {
		global $wgEnableTableCrushing;

		$title = $out->getContext()->getTitle();
		if ($title->getNamespace() == NS_SPECIAL || $title->getNamespace() == NS_MEDIA) {
			return true;
		}

		if ($wgEnableTableCrushing) {
			$out->addModules( [ 'mediawiki.ui.buttons','ext.crusher.tables' ] );
		}

		return true;
	}
}
