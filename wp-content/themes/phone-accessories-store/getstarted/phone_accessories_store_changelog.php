<div class="changelog_container">
<?php
$entries = phone_accessories_store_get_changelog_from_readme();

if (!empty($entries)) :
    foreach ($entries as $entry) :
        $version = esc_html($entry[1]);
        $details = explode("\n", trim($entry[2]));
?>
    <div class="changelog_element">
        <span class="theme_version">
            <strong><?php echo 'v' . $version; ?></strong>
            <span class="dashicons dashicons-arrow-down-alt2"></span>
        </span>

        <div class="changelog_details" style="display:none;">
            <ul>
                <?php foreach ($details as $detail) :
                    $detail = trim($detail);
                    if (!empty($detail)) : ?>
                        <li><?php echo esc_html(ltrim($detail, "* ")); ?></li>
                <?php endif; endforeach; ?>
            </ul>
        </div>
    </div>
<?php
    endforeach;
else :
?>
    <p><?php esc_html_e('No changelog available.', 'phone-accessories-store'); ?></p>
<?php endif; ?>
</div>