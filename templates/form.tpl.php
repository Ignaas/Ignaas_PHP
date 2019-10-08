<?php if (isset($form) && !empty($form)): ?>
    <form <?php print html_attr($form['attr']); ?>>
        <!--Prasideda fieldai-->
        <?php foreach ($form['fields'] ?? [] as $field_id => $field): ?>
            <?php if (isset($field['label'])): ?><label><span><?php print $field['label']; ?></span><?php endif; ?>


                <?php if ($field['attr']['type'] !== 'select'): ?>
                    <input <?php print html_attr(['name' => $field_id] + $field['attr'] + ($field['extras']['attr'] ?? [])); ?>>
                <?php else: ?>
                    <select <?php print html_attr(['name' => $field_id] + ($field['extras']['attr'] ?? [])); ?>>
                        <?php foreach ($field['options'] as $op_id => $op_val): ?>
                            <option value="<?php print $op_id; ?>" <?php print ($field['attr']['value'] ?? null) === $op_id ? 'selected' : ''; ?>>
                                <?php print $op_id; ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                <?php endif; ?>
            <?php if (isset($field['error'])): ?><div><?php print $field['error']; ?></div><?php endif; ?>


                <?php if (isset($field['label'])): ?></label><?php endif; ?>
        <?php endforeach; ?>
        <!--Baigiasi fieldai-->
        <br>
        <!--Prasideda buttonai-->
        <?php foreach ($form['buttons'] ?? [] as $button): ?>
            <button <?php print html_attr($button); ?>>
                <?php print $button['text']; ?>
            </button>
        <?php endforeach; ?>
        <!--Baigiasi buttonai-->

        <!--Message - 7 uzduotis-->
        <span><?php print $form['message']; ?></span>
    </form>
<?php endif; ?>
