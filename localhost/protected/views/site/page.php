
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
                                $lang = isset($_POST['languageSelector']) ? $_POST['languageSelector'] :$_COOKIE["language"];
                                if ($lang != 'ru') 
                                echo $model->content; 
                                else 
                                echo $model->content_ru; ?>
								
                            </section>   
                        </main>
                    </div>        
                </div>
            </div>
        </div>
    </div>
</div>