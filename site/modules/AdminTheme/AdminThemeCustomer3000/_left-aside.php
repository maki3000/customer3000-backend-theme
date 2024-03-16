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
		<ul id="child-pageid__<?php echo $adminTheme->getFirstHomeChildId(); ?>" class='sidebar-first-subpages sidebar-nav pw-secondary-nav'>
			<?php echo $adminTheme->renderSideNavChildren(); ?>
		</ul>
	<?php endif; ?>
</aside>
