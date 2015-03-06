attachments_for_jevents
=======================

Attachments plugin for JEvents (for Joomla)

This plugin allows users to add attachments to JEvents items in Joomla.

WARNING
-------

    This version will only work with Attachments 3.2.2 or later!

By Jonathan M. Cameron

Created February 20, 2015

For License/Copying information, please see the file LICENSE.txt


INSTALLATION
------------

0. Backup your site!

1. If you do not have Attachments 3.2.2 or later, update to it using the
   Joomla extension manager update function or install it first.

   You can retrieve the latest version of Attachments from
   http://extensions.joomla.org; search for 'attachments'.  If you have a
   previous version of Attachments, there is no need to uninstall it
   first. Just install the new version over the old one.

2. Install the Attachments_for_JEvents plugin

3. Enable the Attachments_for_JEvents plugin

4. In JEvents, you will need to change on option in order to work on
   attachments with the JEvents event detail editor.   

    * In the JEvents manager (back end), click on [Configuration]
    * Select "Event Editing"
    * Select the "Intermedia" or "Advanced" options setting
    * Enable the "Show editors button extensions" option (set to 'YES')
    * Save

5. Install the companion Attachments_for_JEvents_Save plugin (available at
   https://github.com/jmcameron/attachments_for_jevents_save/releases).

   This second plugin is necessary for full functionality, in particular the
   ability to add attachments to an event while it is being created.

You should be able to add and see attachments on any JEvent event detail view
on the front end or back end.
