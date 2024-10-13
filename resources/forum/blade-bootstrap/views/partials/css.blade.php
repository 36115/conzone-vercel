<style>
    @media (max-width: 990px) {
    .collapse.show {
        max-height: 300px;
        overflow-y: auto;
        }
    }

    .form-check-input:checked {
    background-color: #3282fc;
    border-color: #3282fc; 
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

    .pagination {
        --bs-pagination-border-radius: 30px;
        --bs-pagination-active-bg: #3d81dd;
        --bs-pagination-active-border-color: #3d81dd;
    }

    body {
        font-family: 'Mitr', sans-serif;
    }

    #form-card {    
        transition: all 0.1s ease;
    }

    #form-card:hover {
        transform: scale(1.003);
    }

    .card {
        border-radius: 15px;
    }

    .card:hover {   
        box-shadow: 0 10px 20px rgba(0,0,0,0.1);
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

    .list-group-flush>.list-group-item:last-child {
        border-radius: 15px;
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

    textarea.form-control {
        border-radius: 15px;
    }

    .collapse {
        visibility: unset !important;
    }

    [data-bs-theme="dark"] #username {
        color: rgba(222, 226, 230, 0.75) !important;
    }

    #text-username {
        align-items: flex-start !important;
    }

    #edit-profile {
        text-decoration: none;
    }

    #edit-profile:hover {
        text-decoration: underline;
    }

    .logout:hover {
        color: var(--bs-danger);
        transition: all 0.3s ease;
        cursor: pointer;
    }




    textarea
    {
        min-height: 200px;
    }

    table tr td
    {
        white-space: nowrap;
    }

    a
    {
        text-decoration: none;
    }

    .deleted
    {
        opacity: 0.65;
    }

    #main
    {
        padding: 2em;
    }

    .shadow-sm
    {
        box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
    }

    .card.category
    {
        margin-bottom: 1em;
    }

    .list-group .list-group
    {
        min-height: 2em;
        margin: .5em 0;
    }

    .list-group:empty {
        border: 1px dashed var(--bs-gray);
    }

    .btn svg.feather
    {
        width: 16px;
        height: 16px;
        stroke-width: 3px;
        vertical-align: -2px;
    }

    .modal-title svg.feather
    {
        margin-right: .5em;
        vertical-align: -3px;
    }

    .category .subcategories
    {
        background: #fff;
    }

    .category .subcategories .list-group-item:first-child
    {
        border-radius: 0;
    }

    .timestamp
    {
        border-bottom: 1px dotted var(--bs-gray);
        cursor: help;
    }

    .fixed-bottom-right
    {
        position: fixed;
        right: 0;
        bottom: 0;
    }

    .fade-enter-active, .fade-leave-active
    {
        transition: opacity .3s;
    }
    .fade-enter, .fade-leave-to
    {
        opacity: 0;
    }

    .mask
    {
        display: none;
        position: fixed;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        background: rgba(50, 50, 50, .2);
        opacity: 0;
        transition: opacity .2s ease;
        z-index: 1020;
    }
    .mask.show
    {
        opacity: 1;
    }

    .form-check
    {
        user-select: none;
    }

    .sortable-chosen
    {
        background: var(--bs-light);
    }

    @media (max-width: 575.98px)
    {
        #main
        {
            padding: 1em;
        }
    }

    label {
        display: contents !important;
    }
</style>