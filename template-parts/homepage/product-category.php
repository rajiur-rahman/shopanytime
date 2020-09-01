
 <!--shop category start-->
 <?php if ( true == get_theme_mod( 'shopanytime_homepage_category_section', true ) ): ?>

 <section class="space-3">
        <div class="container sm-center">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h2 class="title"> <?php echo get_theme_mod( 'shopanytime_homepage_product_cat_title', 'Shop By Category' ) ?> </h2>
                    </div>
                </div>

                <div class="col-md-12">
                    <?php 
                    $shopanytime_column_number =  get_theme_mod( 'shopanytime_homepage_product_cat_number_column', 4 );
                    echo do_shortcode( "[product_categories columns=".$shopanytime_column_number."]" )
                    ?>
                </div>
            </div>
        </div>
    </section>
    <?php endif;?>

    <!--shop category end-->