<?php
require_once __DIR__ . '/../../functions/UrlHelper.php';
?>
<div class="d-flex flex-column flex-shrink-0 p-3 text-bg-dark" style="height: 100vh; width: 280px; box-shadow: none;">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
        <svg class="bi pe-none me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
        <span class="fs-4">CRUD</span>
    </a>
    <hr class="text-white">
    <ul class="nav flex-column mb-auto">
        <li class="nav-item">
            <a href="<?php echo base_url(); ?>/users/" class="nav-link text-white <?php echo (basename($_SERVER['REQUEST_URI']) == 'users') ? 'active' : ''; ?>" aria-current="page">
                <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#home"></use></svg>
                Users
            </a>
        </li>
        <li>
            <a href="<?php echo base_url(); ?>/cities/" class="nav-link text-white <?php echo (basename($_SERVER['REQUEST_URI']) == 'cities') ? 'active' : ''; ?>">
                <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
                Cities
            </a>
        </li>
        <li>
            <a href="<?php echo base_url(); ?>/jobs/" class="nav-link text-white <?php echo (basename($_SERVER['REQUEST_URI']) == 'jobs') ? 'active' : ''; ?>">
                <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
                Jobs
            </a>
        </li>
    </ul>
</div>

<style>
    .nav-link.active {
        background-color: #495057 !important;
        box-shadow: none !important;
    }

    .nav-link {
        transition: background-color 0.3s ease;
    }

    .nav-link:hover {
        background-color: #343a40;
    }

    .nav-item .nav-link {
        border-radius: 5px;
    }

    .nav-link:focus {
        box-shadow: none;
    }

    hr.text-white {
        border-color: #ffffff;
    }
</style>
