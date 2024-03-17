<?php namespace ProcessWire;

if(!defined("PROCESSWIRE")) die();

/** @var AdminThemeCustomer3000 $adminTheme */
/** @var User $user */
/** @var array $extras */
/** @var Paths $urls */
/** @var Config $config */
/** @var Notices $notices */

$logoOptions = array('height' => '40px');

?>
<aside id="left-aside">
	<?php if($adminTheme->isLoggedIn): ?>
		<?php echo $adminTheme->renderSideNavChildren(); ?>
	<?php endif; ?>
</aside>
