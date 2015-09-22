<?php
// Field options
$options = '';
if ( isset($meta['options']['placeholder']) ) {
    $options .= ' placeholder="' . $meta['options']['placeholder'] . '"';
}
if ( isset($meta['options']['required']) ) {
    $options .= ' required="required"';
}

// Field classes
if ( isset($meta['options']['class']) ) {
    $class = $meta['options']['class'];
} else {
    $class = 'regular-text';
}

// Button classes
if ( isset($meta['options']['button_class']) ) {
    $button_class = $meta['options']['button_class'];
} else {
    $button_class = 'button button-secondary fonticon-picker-button';
}

if (!isset($meta['values'])) {
    $meta['values'] = [
        'menu',
        'admin-site',
        'dashboard',
        'admin-media',
        'admin-page',
        'admin-comments',
        'admin-appearance',
        'admin-plugins',
        'admin-users',
        'admin-tools',
        'admin-settings',
        'admin-network',
        'admin-generic',
        'admin-home',
        'admin-collapse',
        'filter',
        'admin-customizer',
        'admin-multisite',
        'admin-links',
        'format-links',
        'admin-post',
        'format-standard',
        'format-image',
        'format-gallery',
        'format-audio',
        'format-video',
        'format-chat',
        'format-status',
        'format-aside',
        'format-quote',
        'welcome-write-blog',
        'welcome-edit-page',
        'welcome-add-page',
        'welcome-view-site',
        'welcome-widgets-menus',
        'welcome-comments',
        'welcome-learn-more',
        'image-crop',
        'image-rotate',
        'image-rotate-left',
        'image-rotate-right',
        'image-flip-vertical',
        'image-flip-horizontal',
        'image-filter',
        'undo',
        'redo',
        'editor-bold',
        'editor-italic',
        'editor-ul',
        'editor-ol',
        'editor-quote',
        'editor-alignleft',
        'editor-aligncenter',
        'editor-alignright',
        'editor-insertmore',
        'editor-spellcheck',
        'editor-distractionfree',
        'editor-expand',
        'editor-contract',
        'editor-kitchensink',
        'editor-underline',
        'editor-justify',
        'editor-textcolor',
        'editor-paste-word',
        'editor-paste-text',
        'editor-removeformatting',
        'editor-video',
        'editor-customchar',
        'editor-outdent',
        'editor-indent',
        'editor-help',
        'editor-strikethrough',
        'editor-unlink',
        'editor-rtl',
        'editor-break',
        'editor-code',
        'editor-paragraph',
        'editor-table',
        'align-left',
        'align-right',
        'align-center',
        'align-none',
        'lock',
        'unlock',
        'calendar',
        'calendar-alt',
        'visibility',
        'hidden',
        'post-status',
        'edit',
        'post-trash',
        'trash',
        'sticky',
        'external',
        'arrow-up',
        'arrow-down',
        'arrow-left',
        'arrow-right',
        'arrow-up-alt',
        'arrow-down-alt',
        'arrow-left-alt',
        'arrow-right-alt',
        'arrow-up-alt2',
        'arrow-down-alt2',
        'arrow-left-alt2',
        'arrow-right-alt2',
        'leftright',
        'sort',
        'randomize',
        'list-view',
        'excerpt-view',
        'grid-view',
        'hammer',
        'art',
        'migrate',
        'performance',
        'universal-access',
        'universal-access-alt',
        'tickets',
        'nametag',
        'clipboard',
        'heart',
        'megaphone',
        'schedule',
        'wordpress',
        'wordpress-alt',
        'pressthis',
        'update',
        'screenoptions',
        'cart',
        'feedback',
        'cloud',
        'translation',
        'tag',
        'category',
        'archive',
        'tagcloud',
        'text',
        'media-archive',
        'media-audio',
        'media-code',
        'media-default',
        'media-document',
        'media-interactive',
        'media-spreadsheet',
        'media-text',
        'media-video',
        'playlist-audio',
        'playlist-video',
        'controls-play',
        'controls-pause',
        'controls-forward',
        'controls-skipforward',
        'controls-back',
        'controls-skipback',
        'controls-repeat',
        'controls-volumeon',
        'controls-volumeoff',
        'yes',
        'no',
        'no-alt',
        'plus',
        'plus-alt',
        'plus-alt2',
        'minus',
        'dismiss',
        'marker',
        'star-filled',
        'star-half',
        'star-empty',
        'flag',
        'info',
        'warning',
        'share',
        'share1',
        'share-alt',
        'share-alt2',
        'twitter',
        'rss',
        'email',
        'email-alt',
        'facebook',
        'facebook-alt',
        'networking',
        'googleplus',
        'location',
        'location-alt',
        'camera',
        'images-alt',
        'images-alt2',
        'video-alt',
        'video-alt2',
        'video-alt3',
        'vault',
        'shield',
        'shield-alt',
        'sos',
        'search',
        'slides',
        'analytics',
        'chart-pie',
        'chart-bar',
        'chart-line',
        'chart-area',
        'groups',
        'businessman',
        'id',
        'id-alt',
        'products',
        'awards',
        'forms',
        'testimonial',
        'portfolio',
        'book',
        'book-alt',
        'download',
        'upload',
        'backup',
        'clock',
        'lightbulb',
        'microphone',
        'desktop',
        'tablet',
        'smartphone',
        'phone',
        'smiley',
        'index-card',
        'carrot',
        'building',
        'store',
        'album',
        'palmtree',
        'tickets-alt',
        'money',
        'thumbs-up',
        'thumbs-down',
        'layout'
    ];

    $meta['options']['prefix'] = 'dashicons dashicons-';

}

if ( is_array( $meta['values'] ) ) {
    $meta['values'] = implode($meta['values'], ',');
}
?>
<tr>
    <th scope="row">
        <?=$meta['title'];?>
    </th>
    <td>
        <input type="text" value="<?=$meta['value'];?>" name="<?=$meta['id'];?>" id="<?=$meta['id'];?>" class="<?=$class;?>"<?=$options;?>>
        <button value="<?=$meta['value'];?>"
                class="<?=$button_class;?>"
                data-icons="<?=$meta['values'];?>"
                data-prefix="<?=$meta['options']['prefix'];?>"
                data-target="#<?=$meta['id'];?>"
                data-mdyam="fonticonspicker">
            <?php _e('Select an icon', 'md-yam'); ?>
        </button>
        <?php if ( isset($meta['description']) ) { ?><p class="description"><?=$meta['description'];?></p><?php } ?>
    </td>
</tr>