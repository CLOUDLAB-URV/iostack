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
defined('_JEXEC') or die('Restricted access');
$total_item = count($list);
$i=0;
?>
<div class="ja-sidenews-list clearfix">
	<?php foreach( $list as $item ) :
		$i++;
		if( $showdate) {
			//$item->date =  strtotime ( $item->modified ) ? $item->created : $item->modified;
			$item->date = ($item->modified != '' && $item->modified != '0000-00-00 00:00:00') ? $item->modified : $item->created;
		}
		if(isset($item->text)){
			$item->text = $item->introtext . $item->text;
		}else{
			$item->text = $item->introtext;
		}

	?>
		<div class="ja-slidenews-item <?php if ($i==$total_item): echo "last_news_item"; endif;?>">
			<div class="ja-slidenews-item-inner">
				
			  <?php if( $showimage ):  ?>
	  		  	<?php echo $helper->renderImage ($item, $params, $descMaxChars, $iwidth, $iheight ); ?>
			  <?php endif; ?>
			  
				<a class="ja-title" href="<?php echo  $item->link; ?>"><?php echo  $helper->trimString( $item->title, $titleMaxChars );?></a>
			  
			  <?php if ($showdate) : ?>
					<span class="ja-createdate"><?php echo JHTML::_('date', $item->date, JText::_('DATE_FORMAT_LC4')); ?>  </span>
				<?php endif; ?>
			  <?php if ($descMaxChars!=0) : ?>	
				<?php echo $helper->trimString( strip_tags($item->introtext), $descMaxChars); ?>
			  <?php endif;?>
			  <?php if( $showMoredetail ) : ?>
			  <p class="readmore">
			  	<a class="readon" href="<?php echo  $item->link; ?>"> <?php echo JTEXT::_("MORE_DETAIL"); ?></a>
			  </p>
			  <?php endif;?>
			</div>
		</div>
  <?php endforeach; ?>
</div>