<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Coral_Nodes
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}

$s = cn_affiliate_box(); //plugins/cnessentials/cne.php
$rating_list = false;
$avg_rating = '5';

if( !empty( $s['rating_list']) && is_array($s['rating_list']) ) {
	$rating_list = true;
	$total_rating = 0;
	foreach( $s['rating_list'] as $rval ) {
		$total_rating += $rval;
	}
	$avg_rating = $total_rating/count($s['rating_list']);
	$avg_rating = round($avg_rating, 1);
}
?>

<aside id="secondary" class="widget-area">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside><!-- #secondary -->
