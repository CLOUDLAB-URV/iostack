<?php
/**
 * ------------------------------------------------------------------------
 * JA Mendozite Template for J25 & J32
 * ------------------------------------------------------------------------
 * Copyright (C) 2004-2011 J.O.O.M Solutions Co., Ltd. All Rights Reserved.
 * @license - Copyrighted Commercial Software
 * Author: J.O.O.M Solutions Co., Ltd
 * Websites:  http://www.joomlart.com -  http://www.joomlancers.com
 * This file may not be redistributed in whole or significant part.
 * ------------------------------------------------------------------------
 */

// No direct access
defined('_JEXEC') or die;
?>
<?php

if(version_compare(JVERSION, '3.0', 'ge') && (JRequest::getCmd('option') == 'com_finder')){
	JHtml::_('bootstrap.framework');
}

$app = JFactory::getApplication();
$siteName = $app->getCfg('sitename');
if ($this->getParam('logoType', 'image')=='image'): ?>
<h1 class="logo">
    <a href="<?php JURI::base(true) ?>" title="<?php echo $siteName; ?>"><span><?php echo $siteName; ?></span></a>
</h1>
<?php else:
$logoText = (trim($this->getParam('logoText'))=='') ? $siteName : JText::_(trim($this->getParam('logoText')));
$sloganText = JText::_(trim($this->getParam('sloganText'))); ?>
<div class="logo-text">
    <h1><a href="<?php JURI::base(true) ?>" title="<?php echo $siteName; ?>"><span><?php echo $logoText; ?></span></a></h1>
    <p class="site-slogan"><?php echo $sloganText;?></p>
</div>
<?php endif; ?>

<?php if($this->countModules('jalogin')) : ?>
<div id="ja-login">
    <jdoc:include type="modules" name="jalogin" />
</div>
<?php endif; ?>

<?php if($this->countModules('callnow')) : ?>
<div id="ja-callnow">
    <jdoc:include type="modules" name="callnow" />
</div>
<?php endif; ?>