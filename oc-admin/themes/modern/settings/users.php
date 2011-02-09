<?php
/*
 *      OSCLass – software for creating and publishing online classified
 *                           advertising platforms
 *
 *                        Copyright (C) 2010 OSCLASS
 *
 *       This program is free software: you can redistribute it and/or
 *     modify it under the terms of the GNU Affero General Public License
 *     as published by the Free Software Foundation, either version 3 of
 *            the License, or (at your option) any later version.
 *
 *     This program is distributed in the hope that it will be useful, but
 *         WITHOUT ANY WARRANTY; without even the implied warranty of
 *        MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *             GNU Affero General Public License for more details.
 *
 *      You should have received a copy of the GNU Affero General Public
 * License along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */
?>

<?php defined('ABS_PATH') or die(__('Invalid OSClass request.')); ?>

<div id="content">
    <div id="separator"></div>

    <?php include_once osc_current_admin_theme_path() . '/include/backoffice_menu.php'; ?>

    <div id="right_column">
        <div id="content_header" class="content_header">
            <div style="float: left;"><img src="<?php echo osc_current_admin_theme_url() ; ?>/images/back_office/settings-icon.png" alt="" title="" /></div>
            <div id="content_header_arrow">&raquo; <?php _e('Users'); ?></div>
            <div style="clear: both;"></div>
        </div>
        <div id="content_separator"></div>
        <?php osc_show_flash_message('admin') ; ?>
        <!-- settings form -->
        <div id="settings_form" style="border: 1px solid #ccc; background: #eee; ">
            <div style="padding: 20px;">
                <form action="settings.php" method="post">
                    <?php $enabled_user_registration = osc_user_registration_enabled() ; ?>
                    <?php $enabled_user_validation = osc_user_validation_enabled() ; ?>
                    <?php $enabled_users = osc_users_enabled() ; ?>
                    <input type="hidden" name="action" value="users_post" />
                    <div style="float: left; width: 50%;">
                        <fieldset>
                            <legend><?php _e('Settings'); ?></legend>
                            <input style="height: 20px; padding-left: 4px;padding-top: 4px;" type="checkbox" name="enabled_users" id="enabled_users" <?php if($enabled_users) { ?>checked<?php } ?>/>
                            <label for="enabled_users"><?php _e('User enable'); ?></label>
                            <br/>
                            <input style="height: 20px; padding-left: 4px;padding-top: 4px;" type="checkbox" name="enabled_user_validation" id="enabled_user_validation" <?php if($enabled_user_validation) { ?>checked<?php } ?>/>
                            <label for="enabled_user_validation"><?php _e('User validation'); ?></label>
                            <br/>
                            <input style="height: 20px; padding-left: 4px;padding-top: 4px;" type="checkbox" name="enabled_user_registration" id="enabled_user_registration" <?php if($enabled_user_registration) { ?>checked<?php } ?>/>
                            <label for="enabled_user_registration"><?php _e('User registration'); ?></label>
                        </fieldset>
                    </div>
                    <div style="clear: both;"></div>
                    <input id="button_save" type="submit" value="<?php _e('Update'); ?>" />
                </form>
            </div>
        </div>
    </div> <!-- end of right column -->
