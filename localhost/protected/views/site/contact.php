
<div class="bg_cont">
    <div class="row-container visible">
        <div class="container-fluid">
            <div id="system-message-container">
            </div>

        </div>
    </div>
    <!-- Main Content row -->
    <div id="content-row">
        <div class="row-container visible">
            <div class="container-fluid">
                <div class="content-inner row-fluid">   

                    <div id="component" class="span12">
                        <main role="main">
                            <br>

                            <div class="page page-contact page-contact__">

                                <!-- Heading -->
                                <div class="page_header">
                                    <h3>
                                        <span class="item_title_part0">Контакты</span>
                                    </h3>  
                                </div>
                                <!-- CONTACT FORM -->

                                <!-- Map -->
                                <div class="contact_map" id="contact_map">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2679.5369044614117!2d35.0457699!3d47.809812099999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40dc61b226be169b%3A0x871622b7cf804fb2!2z0LLRg9C7LiDQldC90YLRg9C30ZbQsNGB0YLRltCyLCA5LCDQl9Cw0L_QvtGA0ZbQttC20Y8sINCX0LDQv9C-0YDRltC30YzQutCwINC-0LHQu9Cw0YHRgtGM!5e0!3m2!1sru!2sua!4v1435573774748" width="1132" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
                                </div>

                                <!-- Address -->
                                <?php echo TemplateBlock::model()->findByPk(TemplateBlock::CONTACT_BLOCK)->content; ?>

                                <!-- Address -->
                                <div class="contact_form">

                                    <?php
                                    $form = $this->beginWidget('CActiveForm', array(
                                        'id' => 'contact-form',
                                        // Please note: When you enable ajax validation, make sure the corresponding
                                        // controller action is handling ajax validation correctly.
                                        // There is a call to performAjaxValidation() commented in generated controller code.
                                        // See class documentation of CActiveForm for details on this.
                                        'enableAjaxValidation' => true,
                                        'htmlOptions' => ['class' => "form-validate"]
                                    ));
                                    ?>
                                    <fieldset>
                                        <div class="clearfix"></div>
                                        <div class="row-fluid">
                                            <div class="span4">
                                                <label id="jform_contact_name-lbl" for="jform_contact_name" class="hasTooltip required" title="" data-original-title="<strong>Name</strong><br />Your name">
                                                    Имя
                                                    <span class="star">&nbsp;*</span>
                                                </label>
                                                <div class="controls">
                                                    <?php echo $form->textField($model, 'name', array('size' => 30, 'maxlength' => 255, 'required' => "", 'aria-required' => "true")); ?>
                                                    <?php echo $form->error($model, 'name'); ?>
                                                </div>
                                            </div>
                                            <div class="span4">
                                                <label id="jform_contact_email-lbl" for="jform_contact_email" class="hasTooltip required" title="" data-original-title="<strong>Email</strong><br />Email for contact">
                                                    Email<span class="star">&nbsp;*</span>
                                                </label>	
                                                <div class="controls">
                                                    <?php echo $form->textField($model, 'email', array('size' => 30, 'maxlength' => 255, 'required' => "", 'aria-required' => "true")); ?>
                                                    <?php echo $form->error($model, 'email'); ?>
                                                </div>
                                            </div>
                                            <div class="span4">
                                                <label id="jform_contact_emailmsg-lbl" for="jform_contact_emailmsg" class="hasTooltip required" title="" data-original-title="<strong>Subject</strong><br />Enter the subject of your message here .">
                                                    Тема<span class="star">&nbsp;*</span>
                                                </label>					
                                                <div class="controls">
                                                    <?php echo $form->textField($model, 'subject', array('size' => 60, 'maxlength' => 255, 'required' => "", 'aria-required' => "true")); ?>
                                                    <?php echo $form->error($model, 'subject'); ?>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="row-fluid">
                                            <div class="span12">
                                                <label id="jform_contact_message-lbl" for="jform_contact_message" class="hasTooltip required" title="" data-original-title="<strong>Message</strong><br />Enter your message here.">
                                                    Сообщение<span class="star">&nbsp;*</span>
                                                </label>
                                                <div class="controls">

                                                    <?php echo $form->textArea($model, 'body', array('cols' => 50, 'id' => "jform_contact_message", 'rows' => 10, 'required' => "", 'aria-required' => "true")); ?>
                                                    <?php echo $form->error($model, 'body'); ?>
                                                </div>
                                                <div class="control-group">
                                                    <div class="controls">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="controls">
                                            <button class="btn validate btn-primary pull-right" type="submit">Отправить</button>
                                        </div>
                                    </fieldset>
                                    <?php $this->endWidget(); ?>
                                </div>
                                <!-- MISC INFO -->
                            </div>   
                        </main>
                    </div>        
                </div>
            </div>
        </div>
    </div>
</div>
