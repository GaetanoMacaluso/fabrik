<?php
/**
 * Fabrik Calendar Raw View
 *
 * @package     Joomla.Plugin
 * @subpackage  Fabrik.visualization.calendar
 * @copyright   Copyright (C) 2005-2015 fabrikar.com - All rights reserved.
 * @license     GNU/GPL http://www.gnu.org/copyleft/gpl.html
 */

namespace Fabrik\Plugins\Visualization\Calendar\Views;

// No direct access
defined('_JEXEC') or die('Restricted access');

use Fabrik\Helpers\Text;

use \JComponentHelper;
use \JViewLegacy;
use \JFactory;

jimport('joomla.application.component.view');

/**
 * Fabrik Calendar Raw View
 *
 * @package     Joomla.Plugin
 * @subpackage  Fabrik.visualization.calendar
 * @since       3.0
 */
class Raw extends JViewLegacy
{
	/**
	 * Display the view
	 *
	 * @param   string $tmpl Template
	 *
	 * @return  boolean|void
	 */

	public function display($tmpl = 'default')
	{
		$model       = $this->getModel();
		$app         = JFactory::getApplication();
		$input       = $app->input;
		$usersConfig = JComponentHelper::getParams('com_fabrik');
		$model->setId($input->getInt('id', $usersConfig->get('visualizationid', $input->getInt('visualizationid', 0))));

		if (!$model->canView())
		{
			echo Text::_('JERROR_ALERTNOAUTHOR');

			return false;
		}

		echo $model->getEvents();
	}
}