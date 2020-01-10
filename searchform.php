<form action="<?php echo esc_url( home_url( '/' ) ) ?>" role="search" method="get" class="cn-search">
    <input type="search" placeholder="Search CoralNodes..." value="<?php get_search_query(); ?>" name="s">
    <button type="submit" value=""><i class="fas fa-search"></i></button>
</form>