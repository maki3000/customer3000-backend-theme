<?php namespace ProcessWire;

if(!defined("PROCESSWIRE")) die();

/** @var Config $config */
/** @var AdminThemeCustomer3000 $adminTheme */
/** @var AdminThemeCustomer3000Markup $markup */
/** @var User $user */
/** @var array $extras */

?>

<footer id='pw-footer'>
	<div class='pw-container uk-container uk-container-expand'>
		<div class='uk-grid' uk-grid>
			<div class='uk-width-1-3@m uk-flex-last@m uk-text-right@m uk-text-center'>
				<div id='pw-uk-debug-toggle' class='uk-text-small'></div>
			</div>	
			<div class='uk-width-2-3@m uk-flex-first@m uk-text-center uk-text-left@m'>
				<p class='uk-margin-remove'>
					ProcessWire 
					<?php if($adminTheme->isLoggedIn): ?>
					<small class='uk-text-small uk-text-muted'>
						<?php 
						echo $config->versionName . ' <!--v' . $config->systemVersion . '--> &copy; ' . date("Y");
						if($adminTheme->isEditor && $config->advanced) {
							echo "<br />" . $adminTheme->renderNavIcon('flask') . $adminTheme->getLabel('advanced-mode'); 
						}
						?>
					</small>	
					<?php endif; ?>
				</p>
			</div>	
		</div>	
		<?php if($adminTheme->isSuperuser && $config->debug):
			include($config->paths->wire . 'templates-admin/debug.inc'); ?>
			<script>
				$('#debug_toggle').appendTo('#pw-uk-debug-toggle');
				$('#debug').find('table').addClass('uk-table uk-table-small uk-table-hover uk-table-divider');
			</script>
		<?php endif; ?>
	</div>
	<?php echo $adminTheme->renderExtraMarkup('footer'); ?>
</footer>

