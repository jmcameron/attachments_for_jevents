attachments_for_jevents
=======================

Attachments plugin for JEvents (for Joomla)

This plugin allows users to add attachments to JEvents items in Joomla.

WARNING: This version will only work with Attachments 3.2.2 or later!
         If this version (or later) has not been released, please contact 
	 the Attachments extension author, Jonathan M. Cameron, to obtain
         a pre-release version at jmcameron@jmcameron.net.

By Jonathan M. Cameron

Created February 20, 2015

For License/Copying information, please see the file LICENSE.txt


INSTALLATION
------------

0. Backup your site!

1. If you do not have Attachments 3.2.2 or later, please contact the author
   and get a copy.  If you have a previous version of Attachments, there is 
   no need to uninstall it first.  Just install the new version over the old
   one.


2. One small addition to the JEvents code-base is necessary.  Edit this file
   on your web server:

       administrator/components/com_jevents/views/icalevent/tmpl/edit.php

   Around line 26, find this line:

       JHtml::_('behavior.calendar');

   insert this line right after it:

       JHtml::_('behavior.modal', 'a.modal-button');


2. Install the Attachments for JEvents plugin.

3. Enable the Attachments for JEvents plugin

You should be able to add and see attachments on any JEvent event detail view
on the front end or back end.
