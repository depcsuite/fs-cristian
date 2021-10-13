<?php
function navbar() {
    
    $nvBar = "<nav class=\"navbar\" role=\"navigation\"><div class=\"container-fluid justify-content-md-center\">
            <div class=\"row\">
            <div class=\"col-12 p-3\">
                <ul class=\"nav\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link link-cust\" href=\"index.php\">Home</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link link-cust\" href=\"sobremi.php\">Sobre mí</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link link-cust\" href=\"contacto.php\">Contactame</a>
                    </li>
                    <li class=\"nav-item text-center\">
                        <a class=\"nav-link link-cust\" href=\"trabajos.php\">Mis trabajos</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>";
    return $nvBar;
}
?>