<?php
// Field options
$options = '';
if ( $meta['options']['readonly'] != '' ) {
    $options .= ' readonly="readonly"';
}
if ( $meta['options']['required'] != '' ) {
    $options .= ' required="required"';
}
if ( $meta['options']['disabled'] != '' ) {
    $options .= ' disabled="disabled"';
}

// Field classes
if ( $meta['options']['class'] != '' ) {
    $class = $meta['options']['class'];
} else {
    $class = 'regular-text';
}
?>
<tr>
    <th scope="row">
        <label for="<?=$meta['id'];?>"><?=$meta['title'];?></label>
    </th>
    <td>
        <input name="<?=$meta['id'];?>" type="color" id="<?=$meta['id'];?>" value="<?=$meta['value'];?>" class="<?=$class;?>"<?=$options;?>>
        <?php if ($meta['description']) { ?><p class="description"><?=$meta['description'];?></p><?php } ?>
    </td>
</tr>