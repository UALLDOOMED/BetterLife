<!--Adding Template Specific Style -->
<?php 

wp_enqueue_style( 'ilist_sl1_stylesheet_responsive', OCOPD_TPL_URL1 . "/$template_code/template.css");

?>

<?php 
	$customCss = get_option( 'sl_custom_style' );

	if( trim($customCss) != "" ) :
?>
	<style>
		<?php echo trim($customCss); ?>
	</style>
	
<?php endif; ?>
	
<div id="qcld-list-holder" class="qcld-list-hoder">
	<div id="qcopd-list-<?php echo $listId; ?>" class="qc-grid-item qcopd-list-column opd-column-<?php echo $column; echo " " . $style;?>">
		<div class="qcopd-single-list ilist_sl1_numberlist">
			<?php 
				do_action('qcsl_after_add_btn', $shortcodeAtts);
			?>
			<h3><?php echo get_the_title(); ?></h3>
				<div style="clear:both;margin-bottom:10px"></div>
	<?php
	if(isset($ilist_chart[0])&&$ilist_chart[0]!=''&&$show_chart_position[0]=='top'){
	?>
	<div style="width:60%;margin:0 auto">
		<?php echo do_shortcode($ilist_chart[0]);?>
	</div>
	<?php
	}
	?>
			<ol>
					<?php foreach( $lists as $list_sl ) : ?>
					<?php 
						$cnt=1;
						if( $item_orderby == 'upvote' )
		{
			usort($list_sl, "ilist_custom_sort_by_tpl_upvotes");
		}
					?>
					<?php foreach($list_sl as $list) : ?>
					
						<li id="qcld_sl_<?php echo get_the_ID()."_".$cnt ?>" class="ilist_tlist1_<?php echo esc_html__($column); ?>">
							<div class="ilist_sl1_qcld_style ilist_sl1_qcld_column<?php echo esc_html__($column); ?>">
									<?php if( $upvote == 'on' ) : ?>

									<!-- upvote section -->
									<div class="upvote-section">
										<span data-post-id="<?php echo get_the_ID(); ?>" data-item-title="<?php echo esc_html__(trim($list['qcld_text_title'])); ?>" data-item-desc="<?php echo esc_html__(trim($list['qcld_text_desc'])); ?>" data-item-id="<?php echo esc_html__(trim($list['qcld_counter'])); ?>" class="upvote-btn-ilist upvote-on">
											<i class="fa fa-thumbs-up"></i>
										</span>
										<span class="upvote-count-ilist">
											<?php 
											  if( isset($list['sl_thumbs_up']) && (int)$list['sl_thumbs_up'] > 0 ){
												echo (int)$list['sl_thumbs_up'];
											  }
											?>
										</span>
									</div>
									<!-- /upvote section -->

									<?php endif; ?>
									
								<?php 
									if($list['qcld_text_desc']!=''){
										echo '<p style="position: relative;margin-right: 33px;">'.esc_html__($list['qcld_text_desc']).'</p>';
									}
								?>	
							</div>
						</li>
						<?php $cnt++; ?>
					<?php endforeach; ?>
					<?php endforeach; ?>
			</ol>
	<div style="clear:both;margin-bottom:10px"></div>
	<?php
	if(isset($ilist_chart[0])&&$ilist_chart[0]!=''&&$show_chart_position[0]=='bottom'){
	?>
	<div style="width:60%;margin:0 auto">
		<?php echo do_shortcode($ilist_chart[0]);?>
	</div>
	<?php
	}
	?>
		</div>
	</div>
</div>
	
