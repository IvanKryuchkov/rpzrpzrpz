
<div class="bg_cont">
    <div id="content-row">
        <div class="row-container visible">
            <div class="container-fluid">
                <div class="content-inner row-fluid">   
                    <div id="component" class="span12">
                        <main role="main">
                            <br>
                            <section class="page-category page-category__history">
                                <header class="page_header">
                                    <h3><span class="item_title_part0"><?php echo $model->title; ?></span> </h3>
                                </header>
								
                                <?php 
								function func() { 
								//global $model->content_ru; 
								return $model->content; 
								}
								
								function funcr() { 
								//global $model->content_ru; 
								return $model->content_ru; 
								}
								
								$foo = 'func';
								$foor = 'funcr';
								//settype($foo, "object");
								//call_user_func($foo);
								//echo $foo;
								//echo $model->content_ru;
								?>
								<?php echo Yii::t('app', call_user_func($foo)); ?>
								
                            </section>   
                        </main>
                    </div>        
                </div>
            </div>
        </div>
    </div>
</div>