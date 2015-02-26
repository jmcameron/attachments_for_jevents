<?php
/**
 * Attachments for JEvents installation
 *
 * @package Attachments
 *
 * @author Jonathan M. Cameron
 * @copyright Copyright (C) 2015 Jonathan M. Cameron
 * @license http://www.gnu.org/licenses/gpl-3.0.html GNU/GPL
 */

// No direct access
defined('_JEXEC') or die('Restricted access');

// Import the component helper
jimport('joomla.application.component.helper');


/**
 * The Attachments for JEvents plugin installation class
 *
 * @package Attachments
 */
class plgAttachmentsAttachments_for_JEventsInstallerScript 
{
	/**
	 * Attachments component preflight function
	 *
	 * @param $type : type of installation
	 * @param $parent : the installer parent
	 */
	public function preflight($type, $parent)
	{
		$app = JFactory::getApplication();

		// Load the installation language file
		$lang = JFactory::getLanguage();
	    $lang->load();

		// Verify that the Joomla version is adequate
		$this->minimum_joomla_release = $parent->get( 'manifest' )->attributes()->version;		  
		if ( version_compare(JVERSION, $this->minimum_joomla_release, 'lt') ) {
			$msg = JText::sprintf('ATTACH_ERROR_INADEQUATE_JOOMLA_VERSION_S',
								  $this->minimum_joomla_release);
			$app->enqueueMessage('<br/>', 'error');
			$app->enqueueMessage($msg, 'error');
			$app->enqueueMessage('<br/>', 'error');
			return false;
			}

		// Make sure the component is already installed
		$result = JComponentHelper::getComponent('com_attachments', true);
		if (! $result->enabled)
		{
			$msg = JText::_('ATTACH_ERROR_INSTALL_COMPONENT_FIRST');
			$app->enqueueMessage('<br/>', 'error');
			$app->enqueueMessage($msg, 'error');
			$app->enqueueMessage('<br/>', 'error');
			return false;
		}

		// Verify that the attachments version is adequate
		require_once(JPATH_SITE.'/components/com_attachments/defines.php');
		$min_version = '3.2.2-Beta3';
		if (version_compare(AttachmentsDefines::$ATTACHMENTS_VERSION, $min_version, 'lt'))
		{
			$msg = JText::sprintf('ATTACH_ERROR_ATTACHMENTS_TOO_OLD_S', $min_version);
			$app->enqueueMessage('<br/>', 'error');
			$app->enqueueMessage($msg, 'error');
			$app->enqueueMessage('<br/>', 'error');
			return false;
		}

		$app->enqueueMessage(JText::_('ATTACH_ATTACHMENTS_FOR_JEVENTS_PLUGIN_INSTALLED'), 'message');
		return true;
	}
}
