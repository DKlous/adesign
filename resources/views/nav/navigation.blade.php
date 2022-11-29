<!-- navigation -->
<div class="logonav">
    {{-- <img src="/src/img/Toekan_def.png" alt="Avigail Desgin Logo" class="logo" /> --}}
    <img src={{asset('img/Toekan_def.png')}} alt="Logo" class="logo">
    <nav>
        <ul>
            <li>
                <a href="/" class="navlink <?php if ($_SERVER['REQUEST_URI'] == '/home' || $_SERVER['REQUEST_URI'] == '/') {
                    echo 'navlink_active"';
                } ?>">Home</a>
            </li>
            <li><a href="/about" class="navlink <?php if (substr($_SERVER['REQUEST_URI'], 0, strlen('/about')) == '/about') {
                echo 'navlink_active"';
            } ?>">About Me</a></li>
            <li><a href="/portfolio" class="navlink <?php if (substr($_SERVER['REQUEST_URI'], 0, strlen('/portfolio')) == '/portfolio' || substr($_SERVER['REQUEST_URI'], 0, strlen('/graphic_design')) == '/graphic_design' || substr($_SERVER['REQUEST_URI'], 0, strlen('/photography')) == '/photography' || substr($_SERVER['REQUEST_URI'], 0, strlen('/fine_art')) == '/fine_art') {
                echo 'navlink_active"';
            } ?>">Portfolio</a></li>
            <li><a href="/contact" class="navlink <?php if (substr($_SERVER['REQUEST_URI'], 0, strlen('/contact')) == '/contact') {
                echo 'navlink_active"';
            } ?>">Contact</a></li>
        </ul>
    </nav>
</div>
