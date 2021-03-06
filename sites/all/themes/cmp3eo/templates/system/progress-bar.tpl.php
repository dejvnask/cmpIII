<?php
/**
 * @file
 * Template implementation to display a progress bar.
 *
 * Available variables:
 * - $percent: The percentage of the progress.
 * - $message: A string containing information to be displayed.
 *
 * @see theme_progress_bar()
 *
 * @ingroup templates
 */
?>
<div class="progress-wrapper" aria-live="polite">
  <div id="progress" class="progress progress-striped active">
    <div class="progress-bar" role="progressbar" style="width: <?php print $percent; ?>%" aria-valuemin="0" aria-valuemax="100" aria-valuenow="<?php print $percent; ?>">
      <div class="percentage sr-only"><?php print $percent; ?>%</div>
    </div>
  </div>
  <div class="percentage pull-right"><?php print $percent; ?>%</div>
  <div class="message"><?php print $message; ?></div>
</div>
