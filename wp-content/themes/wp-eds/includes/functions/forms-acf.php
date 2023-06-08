<?php
function forms_acf_generator($form_name = null){
    global $wp_query;
    $post = $wp_query->post;

    $forms = get_field('forms', 'options');
    foreach ($forms as $form) {
        if($form['form_name'] == $form_name){
            $submit_two_column = "";
            $fields_count = "";
            if($form['form_view'] == 'two') {
                $fields_count = round(count($form['form_fields']) / 2);
                $submit_two_column = true;
            }
            echo '<div class="forms-wrapper"><form name="forms-' . strtolower(str_replace(' ', '', $form['form_name'])) . ' " class="formsACF" method="POST" data-formname="' . $form['form_name'] . '" data-postid="' . $post->ID .'">';
            if($fields_count){
                echo '<div class="register__form__wrap"><div class="register-col-1">';
            }
            $i = 1;
            foreach ($form['form_fields'] as $field) {
                $required = "";
                $required_char = "";
                $placeholder = "";
                $fieldname = $field['form_field_name'];
                echo '<div class="forms-field-' . $field['form_field_type'] . '  input__wrap label-animated">';
                $id_field = rand();
                switch ($field['form_field_type']) {
                    case "firstname":
                        if ($field['required']) $required = " required"; $required_char = "*";
//                        if ($field['label_as_placeholder']) $placeholder = " placeholder='" . $field['form_field_label'] . "' ";
//                        if (!$field['label_as_placeholder']) echo '<label>' . $field['form_field_label'] . '</label>';
                        echo '<input type="text" id="f' . $id_field .'" name="firstname" class="label-up"' . $placeholder . $required . ' />';
                        echo '<label for="f' . $id_field .'">'. $field['form_field_label'] . $required_char . '</label>';
                        break;
                    case "lastname":
                        if ($field['required']) $required = " required"; $required_char = "*";
//                        if ($field['label_as_placeholder']) $placeholder = " placeholder='" . $field['form_field_label'] . "' ";
//                        if (!$field['label_as_placeholder']) echo '<label>' . $field['form_field_label'] . '</label>';
                        echo '<input type="text" id="f' . $id_field .'" name="lastname" class="label-up"' . $placeholder . $required . ' />';
                        echo '<label for="f' . $id_field .'">'. $field['form_field_label'] . $required_char .  '</label>';
                        break;
                    case "email":
                        if ($field['required']) $required = " required"; $required_char = "*";
//                        if ($field['label_as_placeholder']) $placeholder = " placeholder='" . $field['form_field_label'] . "' ";
//                        if (!$field['label_as_placeholder']) echo '<label>' . $field['form_field_label'] . '</label>';
                        echo '<input type="email" id="f' . $id_field .'" name="email" class="label-up"' . $placeholder . $required . ' />';
                        echo '<label for="f' . $id_field .'">'. $field['form_field_label'] . $required_char .  '</label>';
                        break;
                    case "password":
                        if ($field['required']) $required = " required"; $required_char = "*";
//                        if ($field['label_as_placeholder']) $placeholder = " placeholder='" . $field['form_field_label'] . "' ";
//                        if (!$field['label_as_placeholder']) echo '<label>' . $field['form_field_label'] . '</label>';
                        echo '<input type="password" id="f' . $id_field .'" name="password" class="label-up"' . $placeholder . $required . ' />';
                        echo '<label for="f' . $id_field .'">'. $field['form_field_label'] . $required_char .  '</label>';
                        break;
                    case "text":
                        if ($field['required']) $required = " required"; $required_char = "*";
//                        if ($field['label_as_placeholder']) $placeholder = " placeholder='" . $field['form_field_label'] . "' ";
//                        if (!$field['label_as_placeholder']) echo '<label>' . $field['form_field_label'] . '</label>';
                        if (!$field['form_field_name']) $fieldname = strtolower(str_replace(' ', '_', $form['form_field_label']));
                        echo '<input type="text" id="f' . $id_field .'" class="label-up" name="' . $fieldname . '"' . $placeholder . $required . ' />';
                        echo '<label for="f' . $id_field .'">'. $field['form_field_label'] . $required_char .  '</label>';
                        break;
                    case "select":
                        if ($field['required']) $required = " required"; $required_char = "*";
//                        if ($field['label_as_placeholder']) $placeholder = "<option value=''>" . $field['form_field_label'] . "</option>";
                        if ($field['label_as_placeholder']) echo '<label class="over-select">' . $field['form_field_label'] . $required_char .  '</label>';
                        if (!$field['form_field_name']) $fieldname = strtolower(str_replace(' ', '_', $form['form_field_label']));
                        echo '<select name="' . $fieldname . '">';
                        echo $placeholder;
                        foreach ($field['form_field_select'] as $option) {
                            echo '<option value="' . $option["option_name"] . '">' . $option["option_name"] . '</option>';
                        }
                        echo '</select>';
                        break;
                    case "checkbox":
                        if ($field['required']) $required = " required"; $required_char = "*";
                        if (!$field['form_field_name']) $fieldname = strtolower(str_replace(' ', '_', $form['form_field_label']));
                        echo '<input id="f' . $id_field .'" type="checkbox" name="' . $field['form_field_name'] . '"' . $required . ' /><label for="f' . $id_field .'"> ' . $field['checkbox_term_text'] . '</label>';
                        break;
                    case "message":
                        echo $field['message'];
                        break;
                    case "submit":
                        if (!$field['form_field_name']) $fieldname = strtolower(str_replace(' ', '_', $form['form_field_label']));

                        if($submit_two_column){
                            $submit_two_column = '<div class="submit__wrap"><input type="submit" value="' . $field['submit_text'] . '"></div>';
                        }
                        else{
                            echo '<div class="submit__wrap"><input type="submit" value="' . $field['submit_text'] . '"></div>';
                        }
                        break;
                    default;
                }
                echo '</div>';
                if($fields_count && $i++ == $fields_count-1){
                    echo '</div><div class="register-col-2">';
                }
            }

            if($fields_count){
                echo '</div></div>';
            }
            if($fields_count){
                echo '<div class="register-col-1">';
                echo $submit_two_column;
                echo '</div>';
            }
            echo '</form><div class="forms-result"></div></div>';
        }
    }
}