<?php
/**
 * @ WebVision.sk 2014
 */

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>
        <?php wp_title(''); ?>
    </title>

    <?php wp_head(); ?>
</head>
<body>
<div class="wrapper">
    <header>
        <nav class="navbar navbar-inverse" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
                        <img alt="Lamosty's Blog" src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>"
                             height="<?php echo get_custom_header()->height; ?>">
                        <?php echo lamosty_format_translated_site_title(); ?>
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="navbar-collapse">
                    <?php wp_nav_menu(array(
                        'theme_location' => 'primary_menu',
                        'container' => false,
                        'menu_class' => 'nav navbar-nav'
                    )); ?>
                    <form method="get" role="search" action="<?php echo home_url(); ?>"
                          class="navbar-form navbar-right search-form">
                        <div class="form-group">
                            <input class="form-control search-input" placeholder="Search" name="s" type="text"
                                value="<?php echo get_search_query(); ?>">
                        </div>
                        <button type="submit" class="btn btn-default">
                            <span class="glyphicon glyphicon-search"></span>
                        </button>
                    </form>
                    <?php
                        if (is_user_logged_in()) {
                            wp_nav_menu(array(
                                'theme_location' => 'secondary_logged_in',
                                'container' => false,
                                'menu_class' => 'nav navbar-nav navbar-right'
                            ));
                        } else {
                            wp_nav_menu(array(
                                'theme_location' => 'secondary_logged_out',
                                'container' => false,
                                'menu_class' => 'nav navbar-nav navbar-right'
                            ));
                        }
                    ?>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>
    </header>

    <div class="container" id="blog-main">
        <div class="row">
            <main class="col-sm-8">
