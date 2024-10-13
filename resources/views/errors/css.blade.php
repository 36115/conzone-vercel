<style>
    .min-vh-100 {
        min-height: 9vh !important;
    }

    .error-container {
        max-width: 700px;
        transform: translate(0%, 6%);
    }

    .text-primary {
        color: #3282fc !important; 
    }

    [data-bs-theme="light"] .navbar-brand {
        color: #000;
    }

    [data-bs-theme="dark"] .navbar-brand {
        color: #fff;
    }

    [data-bs-theme="light"] .bg-light, 
    [data-bs-theme="light"] .navbar.bg-light {
        background-color: #f8f9fa !important;
    }

    [data-bs-theme="dark"] .bg-light, 
    [data-bs-theme="dark"] .navbar.bg-light {
        background-color: #24282c !important;
    }

    [data-bs-theme="light"] .nav-link:hover {
        background-color: rgba(0, 0, 0, 0.05);
    }

    [data-bs-theme="dark"] .nav-link:hover {
        background-color: rgba(255, 255, 255, 0.05);
    }

    .nav-link {
        padding: 0.375rem 0.75rem;
        font-size: 1rem;
        border-radius: 0.25rem;
        filter: contrast(0.5);
    }

    @media (max-width: 991.98px) {
        .navbar-collapse .d-flex {
            flex-direction: column;
            align-items: flex-start !important;
        }

        .navbar-collapse .nav-link,
        .navbar-collapse .btn,
        .navbar-collapse .dropdown {
            margin: 0.5rem 0;
        }
    }
    
    .nav-link {
        padding: 0.5rem 1rem;
        font-size: 1rem;
        border-radius: 0.5rem;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
    }

    .nav-link i {
        margin-right: 0.5rem;
        font-size: 1.2rem;
    }

    [data-bs-theme="light"] .nav-link:hover {
        background-color: rgba(0, 0, 0, 0.05);
        transform: translateY(-2px);
    }

    [data-bs-theme="dark"] .nav-link:hover {
        background-color: rgba(255, 255, 255, 0.05);
        transform: translateY(-2px);
    }

    .btn-nav {
        padding: 0.5rem 1rem;
        font-size: 1rem;
        border-radius: 0.5rem;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
    }

    .btn-nav i {
        margin-right: 0.5rem;
        font-size: 1.2rem;
    }

    .btn-primary.rounded-pill {
        padding-left: 1rem;
        padding-right: 1rem;
    }

    [data-bs-theme="light"] .btn-primary {
        background-color: #0d6efd;
        border-color: #0d6efd;
        color: #fff;
    }

    [data-bs-theme="light"] .btn-primary:hover {
        background-color: #0b5ed7;
        border-color: #0a58ca;
    }

    [data-bs-theme="dark"] .btn-primary {
        background-color: #3d8bfd;
        border-color: #3d8bfd;
        color: #fff;
    }

    [data-bs-theme="dark"] .btn-primary:hover {
        background-color: #3282fc;
        border-color: #3282fc;
        color: #fff;
    }

    [data-bs-theme="dark"] .btn-outline-secondary {
        color: #fff;
        border-color: #fff;
    }

    [data-bs-theme="dark"] .btn-outline-secondary:hover {
        color: #000;
        background-color: #fff;
        border-color: #fff;
    }

    .dropdown-menu {
        border-radius: 15px;
        overflow: hidden;
    }

    .bg-primary {
    background-color: #3d81dd !important;
    }

    .dropdown-menu {
    --bs-dropdown-link-active-bg: #3d81dd !important;
    }

    body {
        font-family: 'Mitr', sans-serif;
    }

    .btn-rounded {
        border-radius: 25px;
    }

    .sticky-top {
        top: 20px;
    }

    .card-header:first-child {
        border-top-left-radius: 15px;
        border-top-right-radius: 15px;
    }

    [data-bs-theme="light"] .btn-outline-secondary {
        color: #000;
        border-color: #000;
    }

    [data-bs-theme="light"] .btn-outline-secondary:hover {
        color: #fff;
        background-color: #000;
        border-color: #000; 
    }

    [data-bs-theme="dark"] .btn-outline-secondary {
        color: #fff;
        border-color: #fff;
    }

    [data-bs-theme="dark"] .btn-outline-secondary:hover {
        color: #000;
        background-color: #fff;
        border-color: #fff; 
    }

    [data-bs-theme="dark"] .btn-outline-secondary:hover {
        color: #000;
        background-color: #fff;
        border-color: #fff; 
    }

    [data-bs-theme="light"] .border-light {
        border-color: #000 !important;
    }

    [data-bs-theme="dark"] .border-light {
        border-color: #fff !important;
    }

    .form-control, .form-select, .btn {
        border-radius: 50px;
    }

    .collapse {
        visibility: unset !important;
    }

    #username {
        color: rgba(222, 226, 230, 0.75) !important;
    }

    #text-username {
        align-items: flex-start !important;
    }

    .logout:hover {
        color: var(--bs-danger);
        transition: all 0.3s ease;
    }

</style>