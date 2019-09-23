<?php
$categoriesCriteria = new CDbCriteria;
$categoriesCriteria->compare('parent_id', 0);
$categoriesCriteria->order = 'title';
$categories = Category::model()->findAll($categoriesCriteria);
?>
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="top_menu clearfix">
            <div class="cat-title">Меню</div>
            <div id="mega-wrapper" class="stickUpTop"> 
                <ul class="mega-menu col-sm-12"> 
                    <li class="categories-li"><a class="drop">Категории<span class="label">Новинка!</span></a> 
                        <div class="dropdown col-9">
                            <div class="levels">
                                <ul class="level2">

                                    <?php foreach ($categories as $category) { ?>
                                        <li class="submenu col-inner" class="col-inner">
                                            <a href="#"><?php echo $category->title; ?></a>
                                            <?php if (!empty($category->categories)) { ?>
                                                <ul class="level3">
                                                    <?php foreach ($category->categories as $parent) { ?>
                                                        <li class="col-inner">
                                                            <a href="#"><?php echo $parent->title; ?></a>
                                                        </li>
                                                    <?php } ?>
                                                </ul>
                                            <?php } ?>
                                        </li>
                                    <?php } ?>





                                    <li class="col-inner">
                                        <a href="index.phpmain_pageindexcpath6zenid2h7l2anbs0iqlvlqjuaieioho5.htm">Sunglasses</a>
                                    </li>
                                    <li class="col-inner">
                                        <a href="index.phpmain_pageindexcpath7zenid2h7l2anbs0iqlvlqjuaieioho5.htm">Helmets</a>
                                    </li>
                                    <li class="col-inner">
                                        <a href="index.phpmain_pageindexcpath8zenid2h7l2anbs0iqlvlqjuaieioho5.htm">Bike Parts</a>
                                    </li>
                                    <li class="col-inner">
                                        <a href="index.phpmain_pageindexcpath9zenid2h7l2anbs0iqlvlqjuaieioho5.htm">Tires & Wheels</a>
                                    </li>
                                    <li class="col-inner">
                                        <a href="index.phpmain_pageindexcpath10zenid2h7l2anbs0iqlvlqju~1.htm">Accessories</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="clearfix"></div>
                            <div class="categories-banners">
                                <div class="item_1"><a href="index.phpmain_pageindexcpath2.htm"><img src="<?php echo Yii::app()->request->baseUrl; ?>/design/images/cat_banner_1.png" class="img-responsive" alt="Mud Runs" title=" Mud Runs " width="370" height="230"/><span class="title"><span>Mud Runs</span></span></a>
                                </div><div class="item_2"><a href="index.phpmain_pageindexcpath3.htm"><img src="<?php echo Yii::app()->request->baseUrl; ?>/design/images/cat_banner_2.png" class="img-responsive" alt="Trail" title=" Trail " width="370" height="231"/><span class="title"><span>Trail</span></span></a>
                                </div><div class="item_3"><a href="index.phpmain_pageindexcpath4.htm"><img src="<?php echo Yii::app()->request->baseUrl; ?>/design/images/cat_banner_3.png" class="img-responsive" alt="Walking" title=" Walking " width="370" height="230"/><span class="title"><span>Walking</span></span></a>
                                </div> </div>
                        </div>
                    </li> 
                    <li class="specials_p"><a class="drop">Specials<span class="label">Sale!</span></a>

                        <div class="dropdown col-9">
                            <div class="special_text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque porttitor egestas dictum. Proin dolor lacus, placerat non magna in, ultricies molestie nisl. Aliquam dui dolor, bibendum eget diam ac, pellentesque ultricies dui. Pellentesque mattis sit amet nibh eget pulvinar. Curabitur nec turpis porta dui sollicitudin dignissim. Duis cursus leo sit amet quam posuere, in iaculis quam dignissim. Donec est nulla, tristique quis dignissim at, rutrum non massa. In ultrices tellus turpis, at vehicula justo fringilla ut. Cras a eros sagittis, placerat nulla ac, condimentum mi. Mauris ornare sem vel laoreet fermentum. In hac habitasse platea dictumst. </p></div>
                            <div class="list_carousel responsive">
                                <ul id="fcarousel">
                                    <li class="col-products">
                                        <div class="product-col">
                                            <div class="img">
                                                <a href="index.phpmain_pageproduct_infocpathproducts_id11zenid~1.htm"><img src="<?php echo Yii::app()->request->baseUrl; ?>/design/images/11.png" class="img-responsive" alt="Fox 32 Float 100 FIT RLC Suspension Fork" title=" Fox 32 Float 100 FIT RLC Suspension Fork " width="220" height="220"/></a> </div>
                                            <div class="sale-label">Sale</div>
                                            <div class="prod-info">
                                                <h5><a class="product-name name" href="index.phpmain_pageproduct_infocpathproducts_id11zenid~1.htm">Fox 32 Float 100 FIT RLC Suspension Fork...</a></h5>
                                                <div class="text">
                                                    Our online shop is the best place to buy bikes, ac... </div>
                                                <div class="price">
                                                    <strong>&nbsp;<span class="productSpecialPrice">$522.40</span><span class="normalprice">$653.00 </span><span class="productPriceDiscount">-20%</span></strong> </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-products">
                                        <div class="product-col">
                                            <div class="img">
                                                <a href="index.phpmain_pageproduct_infocpathproducts_id12zenid~1.htm"><img src="<?php echo Yii::app()->request->baseUrl; ?>/design/images/12.png" class="img-responsive" alt="Fox 32 Float 140 FIT RLC Suspension Fork" title=" Fox 32 Float 140 FIT RLC Suspension Fork " width="220" height="220"/></a> </div>
                                            <div class="sale-label">Sale</div>
                                            <div class="prod-info">
                                                <h5><a class="product-name name" href="index.phpmain_pageproduct_infocpathproducts_id12zenid~1.htm">Fox 32 Float 140 FIT RLC Suspension Fork...</a></h5>
                                                <div class="text">
                                                    So, it doesn’t matter whether you are an experie... </div>
                                                <div class="price">
                                                    <strong>&nbsp;<span class="productSpecialPrice">$105.40</span><span class="normalprice">$124.00 </span><span class="productPriceDiscount">-15%</span></strong> </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-products">
                                        <div class="product-col">
                                            <div class="img">
                                                <a href="index.phpmain_pageproduct_infocpathproducts_id13zenid~1.htm"><img src="<?php echo Yii::app()->request->baseUrl; ?>/design/images/13.png" class="img-responsive" alt="Giro Stylus Road Helmet" title=" Giro Stylus Road Helmet " width="220" height="220"/></a> </div>
                                            <div class="sale-label">Sale</div>
                                            <div class="prod-info">
                                                <h5><a class="product-name name" href="index.phpmain_pageproduct_infocpathproducts_id13zenid~1.htm">Giro Stylus Road Helmet...</a></h5>
                                                <div class="text">
                                                    Do you remember what it is like to be cruising on ... </div>
                                                <div class="price">
                                                    <strong>&nbsp;<span class="productSpecialPrice">$514.25</span><span class="normalprice">$605.00 </span><span class="productPriceDiscount">-15%</span></strong> </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-products">
                                        <div class="product-col">
                                            <div class="img">
                                                <a href="index.phpmain_pageproduct_infocpathproducts_id14zenid~1.htm"><img src="<?php echo Yii::app()->request->baseUrl; ?>/design/images/14.png" class="img-responsive" alt="Louis Garneau BioGel Air Gloves" title=" Louis Garneau BioGel Air Gloves " width="220" height="220"/></a> </div>
                                            <div class="sale-label">Sale</div>
                                            <div class="prod-info">
                                                <h5><a class="product-name name" href="index.phpmain_pageproduct_infocpathproducts_id14zenid~1.htm">Louis Garneau BioGel Air Gloves...</a></h5>
                                                <div class="text">
                                                    Our online shop is the best place to buy bikes, ac... </div>
                                                <div class="price">
                                                    <strong>&nbsp;<span class="productSpecialPrice">$743.25</span><span class="normalprice">$991.00 </span><span class="productPriceDiscount">-25%</span></strong> </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-products">
                                        <div class="product-col">
                                            <div class="img">
                                                <a href="index.phpmain_pageproduct_infocpathproducts_id15zenid~1.htm"><img src="<?php echo Yii::app()->request->baseUrl; ?>/design/images/15.png" class="img-responsive" alt="Marathon Carbon Pro Mountain Bike" title=" Marathon Carbon Pro Mountain Bike " width="220" height="220"/></a> </div>
                                            <div class="sale-label">Sale</div>
                                            <div class="prod-info">
                                                <h5><a class="product-name name" href="index.phpmain_pageproduct_infocpathproducts_id15zenid~1.htm">Marathon Carbon Pro Mountain Bike...</a></h5>
                                                <div class="text">
                                                    So, it doesn’t matter whether you are an experie... </div>
                                                <div class="price">
                                                    <strong>&nbsp;<span class="productSpecialPrice">$213.50</span><span class="normalprice">$305.00 </span><span class="productPriceDiscount">-30%</span></strong> </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-products">
                                        <div class="product-col">
                                            <div class="img">
                                                <a href="index.phpmain_pageproduct_infocpathproducts_id16zenid~1.htm"><img src="<?php echo Yii::app()->request->baseUrl; ?>/design/images/16.png" class="img-responsive" alt="Mavic Crossmax SLR Disc Front Wheel" title=" Mavic Crossmax SLR Disc Front Wheel " width="220" height="220"/></a> </div>
                                            <div class="sale-label">Sale</div>
                                            <div class="prod-info">
                                                <h5><a class="product-name name" href="index.phpmain_pageproduct_infocpathproducts_id16zenid~1.htm">Mavic Crossmax SLR Disc Front Wheel...</a></h5>
                                                <div class="text">
                                                    Do you remember what it is like to be cruising on ... </div>
                                                <div class="price">
                                                    <strong>&nbsp;<span class="productSpecialPrice">$435.50</span><span class="normalprice">$871.00 </span><span class="productPriceDiscount">-50%</span></strong> </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <a id="prev2" class="prev" href="#">&lt;</a>
                                <a id="next2" class="next" href="#">&gt;</a>
                            </div>
                        </div> 
                    </li>
                    <li class="quicklinks-li"><a class="drop">Quick Links</a><span class="label"></span> 
                        <div class="dropdown col-2 ">
                            <div class="firstcolumn">
                                <nav>
                                    <ul class="ez-menu">
                                        <li class="  first">
                                            <a href="index.phpmain_pageproducts_newzenid2h7l2anbs0iqlvlqju~1.htm">
                                                <span>New Products</span>
                                            </a>
                                        </li>
                                        <li class="  ">
                                            <a href="index.phpmain_pagespecialszenid2h7l2anbs0iqlvlqjuaieioho5.htm">
                                                <span>Specials</span>
                                            </a>
                                        </li>
                                        <li class="  ">
                                            <a href="index.phpmain_pagereviewszenid2h7l2anbs0iqlvlqjuaieioho5.htm">
                                                <span>Reviews</span>
                                            </a>
                                        </li>
                                        <li class="  ">
                                            <a href="index.phpmain_pagecontact_uszenid2h7l2anbs0iqlvlqjuaieioho5.htm">
                                                <span>Contacts</span>
                                            </a>
                                        </li>
                                        <li class=" last ">
                                            <a href="index.phpmain_pagegv_faqzenid2h7l2anbs0iqlvlqjuaieioho5.htm">
                                                <span>FAQs</span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </li> 
                    <li class="manufacturers-li"><a class="drop">Manufacturers<span class="label"></span></a> 
                        <div class="dropdown col-3">
                            <div class="firstcolumn">
                                <ul>
                                    <li><a href="index.phpmain_pageindexmanufacturers_id3zenid2h7l2anb~1.htm"><img src="<?php echo Yii::app()->request->baseUrl; ?>/design/images/manufacturers/manufacturer_cannondale.png" class="img-responsive" alt="Cannondale" title=" Cannondale " width="553" height="92"/></a></li>
                                    <li><a href="index.phpmain_pageindexmanufacturers_id1zenid2h7l2anb~1.htm"><img src="<?php echo Yii::app()->request->baseUrl; ?>/design/images/manufacturers/manufacturer_gt.png" class="img-responsive" alt="GT Bikes" title=" GT Bikes " width="561" height="244"/></a></li>
                                    <li><a href="index.phpmain_pageindexmanufacturers_id2zenid2h7l2anb~1.htm"><img src="<?php echo Yii::app()->request->baseUrl; ?>/design/images/manufacturers/manufacturer_specialized.png" class="img-responsive" alt="Specialized" title=" Specialized " width="560" height="319"/></a></li>
                                </ul>
                            </div>
                        </div>
                    </li> 
                    <li class="information-li"><a class="drop">Info<span class="label"></span></a> 
                        <div class="dropdown col-3">
                            <h3>General Info</h3>
                            <ul>
                                <li><a href="index.phpmain_pagesite_mapzenid2h7l2anbs0iqlvlqjuaieioho5.htm">Site Map</a></li>
                                <li><a href="index.phpmain_pagegv_faqzenid2h7l2anbs0iqlvlqjuaieioho5.htm">Gift Certificate FAQ</a></li>
                                <li><a href="index.phpmain_pagediscount_couponzenid2h7l2anbs0iqlvl~1.htm">Discount Coupons</a></li>
                                <li><a href="index.phpmain_pageunsubscribezenid2h7l2anbs0iqlvlqjuaieioho5.htm">Newsletter Unsubscribe</a></li>
                            </ul>
                            <div class="clearfix"></div>
                            <h3 class="second">Customers</h3>
                            <ul>
                                <li><a href="index.phpmain_pageloginzenid2h7l2anbs0iqlvlqjuaieioho5.htm">Log In</a></li>
                                <li><a href="index.phpmain_pagecreate_accountzenid2h7l2anbs0iqlvlq~1.htm">Create Account</a></li>
                                <li><a href="index.phpmain_pagecontact_uszenid2h7l2anbs0iqlvlqjuaieioho5.htm">Contact Us</a></li>
                                <li><a href="index.phpmain_pageshippinginfozenid2h7l2anbs0iqlvlqju~1.htm">Shipping &amp; Returns</a></li>
                                <li><a href="index.phpmain_pageprivacyzenid2h7l2anbs0iqlvlqjuaieioho5.htm">Privacy Notice</a></li>
                                <li><a href="index.phpmain_pageconditionszenid2h7l2anbs0iqlvlqjuaieioho5.htm">Conditions of Use</a></li>
                            </ul>
                        </div>
                    </li> 
                    <li class="customer_service"><a class="drop">Shipping &amp; Returns<span class="label"></span></a> 
                        <div class="dropdown col-5">
                            <div class="col_cs">
                                <h3>Shipping</h3>
                            </div>
                            <div class="col_cs">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam interdum feugiat ipsum vehicula sollicitudin. Integer sed lacus eget risus consectetur ullamcorper. Pellentesque rutrum ullamcorper faucibus. Nam porttitor iaculis enim, mattis tristique velit tristique bibendum. </p>
                            </div>
                            <div class="col_cs">
                                <h3>Delivery</h3>
                            </div>
                            <div class="col_cs">
                                <p>Etiam interdum feugiat ipsum vehicula sollicitudin. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sed lacus eget risus consectetur ullamcorper. Pellentesque rutrum ullamcorper faucibus. Nam porttitor iaculis enim, mattis tristique velit tristique bibendum. </p>
                            </div>
                        </div> 
                    </li>
                </ul> 
            </div> 

            <div class="clearBoth"></div>
        </div>
    </div>
</div>