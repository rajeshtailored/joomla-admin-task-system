<?php
/**
 * @package    Com_Admintask
 * @author     __COMPONENT_CONTACT__
 * @copyright  __COMPONENT_COPYRIGHT__
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access
defined('_JEXEC') or die;

// Access check.
if (!JFactory::getUser()->authorise('core.manage', 'com_admintask'))
{
	throw new Exception(JText::_('JERROR_ALERTNOAUTHOR'));
}
// Require helper file
JLoader::register('AdmintaskHelper', JPATH_COMPONENT . '/helpers/admintask.php');
JLoader::registerPrefix('Admintask', JPATH_COMPONENT_ADMINISTRATOR);

$controller = JControllerLegacy::getInstance('Admintask');
$controller->execute(JFactory::getApplication()->input->get('task'));
$controller->redirect();
