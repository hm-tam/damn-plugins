<?php
if(!defined('WPINC')) // MUST have WordPress.
	exit("Do not access this file directly.");
?>

<optgroup label="<?php echo esc_attr (_x ("ccBill Non-Recurring / Buy Now", "s2member-admin", "s2member")); ?>">
<option value="1-L-0" selected="selected"><?php echo esc_html (_x ("One Time (for lifetime access)", "s2member-admin", "s2member")); ?></option>
</optgroup>