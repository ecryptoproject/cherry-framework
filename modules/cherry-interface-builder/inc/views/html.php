<?php
/**
 * HTML template.
 *
 * @package    Cherry_Interface_Builder
 * @subpackage Views
 * @author     Cherry Team <cherryframework@gmail.com>
 * @copyright  Copyright (c) 2012 - 2016, Cherry Team
 * @link       http://www.cherryframework.com/
 * @license    http://www.gnu.org/licenses/gpl-3.0.html
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}
?>
<div class="cherry-ui-kit <?php echo $args['id']; ?> <?php echo $args['class']; ?>">
	<?php if ( ! empty( $args['children'] ) ) { ?>
		<div class="cherry-ui-kit__content" role="group" >
			<?php echo $args['children']; ?>
		</div>
	<?php } ?>
</div>
