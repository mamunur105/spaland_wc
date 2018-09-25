<?php

function custom_user_profile_fields($user){ ?>

    <table class="form-table">
        <tr>
            <th><label for="user_facebook">Facebook Profile</label></th>
            <td>
                <input type="text" class="regular-text" name="user_facebook" 
                value="<?php echo is_object($user)? esc_attr( get_the_author_meta( 'user_facebook', $user->ID) ):'#';?> " id="user_facebook" /><br />
                <span class="description">User Facebook Profile Link</span>
            </td>
        </tr>
        <tr>
            <th><label for="google_plus">Google Plus</label></th>
            <td>
                <input type="text" class="regular-text" name="google_plus" 
                value="<?php echo is_object($user)? esc_attr( get_the_author_meta( 'google_plus', $user->ID) ):'#';?> " id="google_plus" /><br />
                <span class="description">User Google Plus Link</span>
            </td>
        </tr>
        <tr>
            <th><label for="twitter_profile">Twitter Plus</label></th>
            <td>
                <input type="text" class="regular-text" name="twitter_profile" 
                value="<?php echo is_object($user)? esc_attr( get_the_author_meta( 'twitter_profile', $user->ID) ):'#';?> " id="twitter_profile" /><br />
                <span class="description">User Twitter Link</span>
            </td>
        </tr>
        <tr>
            <th><label for="dribbble_profile">Google Plus</label></th>
            <td>
                <input type="text" class="regular-text" name="dribbble_profile" 
                value="<?php echo is_object($user)? esc_attr( get_the_author_meta( 'dribbble_profile', $user->ID) ):'#';?> " id="dribbble_profile" /><br />
                <span class="description">User Dribbble Link</span>
            </td>
        </tr>
    </table>
  <?php
}
add_action( 'show_user_profile', 'custom_user_profile_fields' );
add_action( 'edit_user_profile', 'custom_user_profile_fields' );

add_action( "user_new_form", "custom_user_profile_fields" );

function save_custom_user_profile_fields($user_id){
    # again do this only if you can
    if(!current_user_can('manage_options'))
        return false;
    # save my custom field
    update_usermeta($user_id, 'user_facebook', $_POST['user_facebook']);
    update_usermeta($user_id, 'google_plus', $_POST['google_plus']);
    update_usermeta($user_id, 'twitter_profile', $_POST['twitter_profile']);
    update_usermeta($user_id, 'dribbble_profile', $_POST['dribbble_profile']);
}
add_action('user_register', 'save_custom_user_profile_fields');
add_action('profile_update', 'save_custom_user_profile_fields');