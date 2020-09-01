<?php
// echo "asdas";
if ( is_shop() ) {
    get_template_part( 'shop' );
} else {
    echo "page";
}