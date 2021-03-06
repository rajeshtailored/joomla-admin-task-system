<?php

/**
 * @version    CVS: 1.0.0
 * @package    Com_Admintask
 * @author     Tasolglobal <testing@tasolglobal.com>
 * @copyright  2016 Tasolglobal
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 */
// No direct access
defined('_JEXEC') or die;

/**
 * Admintask Listhelper.
 *
 * @since  1.6
 */
abstract class JHtmlListhelper
{
	/**
	 * [toggle description]
	 *
	 * @param   integer  $value  [description]
	 * @param   [type]   $view   [description]
	 * @param   [type]   $field  [description]
	 * @param   [type]   $i      [description]
	 *
	 * @return  [type]           [description]
	 */
	public static function toggle($value = 0, $view , $field , $i)
	{
		$states = array(
			0 => array('icon-remove', JText::_('Toggle'), 'inactive btn-danger'),
			1 => array('icon-checkmark', JText::_('Toggle'), 'active btn-success')
		);

		$state  = \Joomla\Utilities\ArrayHelper::getValue($states, (int) $value, $states[0]);
		$text   = '<span aria-hidden="true" class="' . $state[0] . '"></span>';
		$html   = '<a href="#" class="btn btn-micro ' . $state[2] . '"';
		$html  .= 'onclick="return toggleField(\'cb' . $i . '\',\'' . $view . '.toggle\',\'' . $field . '\')" title="' . JText::_($state[1]) . '">' . $text . '</a>';

		return $html;
	}
}
