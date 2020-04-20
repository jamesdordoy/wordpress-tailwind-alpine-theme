<!DOCTYPE html>

<html <?php language_attributes(); ?>>

	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >
        <title><?php bloginfo('name')  ?></title>
		<?php wp_head(); ?>

	</head>
    <body <?php body_class(); ?>>

        <header>
            <h1>
                <a href="<?php echo get_home_url(); ?>">
                    <?php bloginfo('name') ?>
                </a>
            </h1>
        </header>
