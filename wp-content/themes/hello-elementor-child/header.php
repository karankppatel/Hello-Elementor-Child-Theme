<header>
    <div class="container">
        <nav class="main-navigation">
            <?php
            wp_nav_menu( array(
                'theme_location' => 'primary',
                'menu_id'        => 'primary-menu',
            ) );
            ?>
        </nav>
        <div class="weather-placeholder">
            <!-- Placeholder for dynamic weather data -->
        </div>
    </div>
</header>
