<?php /** @var TbActiveForm $form */
$form = $this->beginWidget(
    'booster.widgets.TbActiveForm',
    array(
        'id' => 'horizontalForm',
        'type' => 'horizontal',
    )
); ?>
 
    <fieldset>
 
        <legend>Legend</legend>
 
        <?php echo $form->textFieldGroup(
            $model,
            'textField',
            array(
                'wrapperHtmlOptions' => array(
                    'class' => 'col-sm-5',
                ),
                'hint' => 'In addition to freeform text, any HTML5 text-based input appears like so.'
            )
        ); ?>
        <?php echo $form->datePickerGroup(
            $model,
            'dateField',
            array(
                'widgetOptions' => array(
                    'options' => array(
                        'language' => 'es',
                    ),
                ),
                'wrapperHtmlOptions' => array(
                    'class' => 'col-sm-5',
                ),
                'hint' => 'Click inside! This is a super cool date field.',
                'prepend' => '<i class="glyphicon glyphicon-calendar"></i>'
            )
        ); ?>
        <?php echo $form->dateRangeGroup(
            $model,
            'dateRangeField',
            array(
                'widgetOptions' => array(
                    'callback' => 'js:function(start, end){console.log(start.toString("MMMM d, yyyy") + " - " + end.toString("MMMM d, yyyy"));}'
                ), 
                'wrapperHtmlOptions' => array(
                    'class' => 'col-sm-5',
                ),
                'hint' => 'Click inside! An even a date range field!.',
                'prepend' => '<i class="glyphicon glyphicon-calendar"></i>'
            )
        ); ?>
        <?php echo $form->timePickerGroup(
            $model,
            'timepicker',
            array(
                'widgetOptions' => array(
                    'wrapperHtmlOptions' => array(
                        'class' => 'col-sm-3'
                    ),
                ),
                'hint' => 'Nice bootstrap time picker',
            )
        ); ?>
        <?php echo $form->colorpickerGroup(
            $model,
            'colorpicker',
            array(
                'wrapperHtmlOptions' => array(
                    'class' => 'col-sm-5'
                ),
                'hint' => 'Color fields, not bad',
            )
        ); ?>
        <?php echo $form->dropDownListGroup(
            $model,
            'dropdown',
            array(
                'wrapperHtmlOptions' => array(
                    'class' => 'col-sm-5',
                ),
                'widgetOptions' => array(
                    'data' => array('Something ...', '1', '2', '3', '4', '5'),
                    'htmlOptions' => array(),
                )
            )
        ); ?>
        <?php echo $form->dropDownListGroup(
            $model,
            'multiDropdown',
            array(
                'wrapperHtmlOptions' => array(
                    'class' => 'col-sm-5',
                ),
                'widgetOptions' => array(
                    'data' => array('1', '2', '3', '4', '5'),
                    'htmlOptions' => array('multiple' => true),
                )
            )
        ); ?>
        <?php echo $form->select2Group(
            $model,
            'select2',
            array(
                'wrapperHtmlOptions' => array(
                    'class' => 'col-sm-5',
                ),
                'widgetOptions' => array(
                    'asDropDownList' => false,
                    'options' => array(
                        'tags' => array('clever', 'is', 'better', 'clevertech'),
                        'placeholder' => 'type clever, or is, or just type!',
                        /* 'width' => '40%', */
                        'tokenSeparators' => array(',', ' ')
                    )
                )
            )
        );?>
        <?php echo $form->fileFieldGroup($model, 'fileField',
            array(
                'wrapperHtmlOptions' => array(
                    'class' => 'col-sm-5',
                ),
            )
        ); ?>
        <?php echo $form->textAreaGroup(
            $model,
            'textarea',
            array(
                'wrapperHtmlOptions' => array(
                    'class' => 'col-sm-5',
                ),
                'widgetOptions' => array(
                    'htmlOptions' => array('rows' => 5),
                )
            )
        ); ?>
        <?php echo $form->redactorGroup(
            $model,
            'redactor',
            array(
                'widgetOptions' => array(
                    'editorOptions' =>array(
                        'class' => 'span4', 
                        'rows' => 5, 
                        'options' => array('plugins' => array('clips', 'fontfamily'), 'lang' => 'sv')
                    )
                )
            )
        ); ?>
        <?php echo $form->html5EditorGroup(
            $model,
            'wysihtml5',
             array(
                'widgetOptions' => array(
                    'editorOptions' => array(
                        'class' => 'span4',
                        'rows' => 5,
                        'height' => '200',
                        'options' => array('color' => true)
                    ),
                )
                )
            ); ?>
        <?php echo $form->ckEditorGroup(
            $model,
            'ckeditor',
            array(
                'wrapperHtmlOptions' => array(
                    /* 'class' => 'col-sm-5', */
                ),
                'widgetOptions' => array(
                    'editorOptions' => array(
                        'fullpage' => 'js:true',
                        /* 'width' => '640', */
                        /* 'resize_maxWidth' => '640', */
                        /* 'resize_minWidth' => '320'*/
                    )
                )
            )
        ); ?>
        <?php echo $form->markdownEditorGroup(
            $model,
            'markdown',
            array(
                'widgetOptions' => array(
                    'htmlOptions' => array('style'=>'height: 200px;')
                )
            )
        ); ?>
        <?php echo $form->switchGroup($model, 'switch',
            array(
                'widgetOptions' => array(
                    'events'=>array(
                        'switchChange'=>'js:function(event, state) {
                          console.log(this); // DOM element
                          console.log(event); // jQuery event
                          console.log(state); // true | false
                        }'
                    )
                )
            )
        ); ?>
        <?php echo $form->textFieldGroup(
            $model,
            'disabled',
            array(
                'wrapperHtmlOptions' => array(
                    'class' => 'col-sm-5',
                ),
                'widgetOptions' => array(
                    'htmlOptions' => array('disabled' => true)
                )
            )
        ); ?>
        <?php echo $form->textFieldGroup(
            $model,
            'prepend',
            array(
                'wrapperHtmlOptions' => array(
                    'class' => 'col-sm-5',
                ),
                'prepend' => '@'
            )
        ); ?>
        <?php echo $form->textFieldGroup(
            $model,
            'append',
            array(
                'wrapperHtmlOptions' => array(
                    'class' => 'col-sm-5',
                ),
                'append' => '.00'
            )
        ); ?>
        <?php echo $form->checkboxGroup(
            $model,
            'disabledCheckbox',
            array(
                'widgetOptions' => array(
                    'htmlOptions' => array(
                        'disabled' => true
                    )
                )
            )
        ); ?>
        <?php echo $form->checkboxListGroup(
            $model,
            'inlineCheckboxes',
            array(
                'widgetOptions' => array(
                    'data' => array('1', '2', '3')
                ),
                'inline'=>true
            )
        ); ?>
        <?php echo $form->checkboxListGroup(
            $model,
            'checkboxes',
            array(
                'widgetOptions' => array(
                    'data' => array(
                        'Option one is this and that - be sure to include why it\'s great',
                        'Option two can also be checked and included in form results',
                        'Option three can - yes, you guessed it - also be checked and included in form results',
                    ),
                ),
                'hint' => '<strong>Note:</strong> Labels surround all the options for much larger click areas.'
            )
        ); ?>
        <?php echo $form->radioButtonGroup($model, 'radioButton'); ?>
        <?php echo $form->radioButtonListGroup(
            $model,
            'radioButtons',
            array(
                'widgetOptions' => array(
                    'data' => array(
                        'Option one is this and that - be sure to include why it\'s great',
                        'Option two can is something else and selecting it will deselect option one',
                    )
                )
            )
        ); ?>
    </fieldset>
 
    <div class="form-actions">
        <?php $this->widget(
            'booster.widgets.TbButton',
            array(
                'buttonType' => 'submit',
                'context' => 'primary',
                'label' => 'Submit'
            )
        ); ?>
        <?php $this->widget(
            'booster.widgets.TbButton',
            array('buttonType' => 'reset', 'label' => 'Reset')
        ); ?>
    </div>
<?php
$this->endWidget();
unset($form);