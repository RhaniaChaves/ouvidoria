<!DOCTYPE html>
<html lang="pt-Br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ouvidoria - IFNMG Almenara</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.min.js" integrity="sha384-VQqxDN0EQCkWoxt/0vsQvZswzTHUVOImccYmSyhJTp7kGtPed0Qcx8rK9h9YEgx+" crossorigin="anonymous"></script>
        <style>
            nav, footer {
                background-color: #195128 !important;
            }
            .nav-link, .navbar-brand, .link-footer{
                color: #fff !important; 
            }
            footer {
                min-height: 16rem;
            }
        </style>
        @yield('css')
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </head>
    <body>
        @include('layouts.includes.nav')
        <main>
            <div class="container my-5">
                @yield('content')
            </div>
        </main>
        <footer>
            <div class="container-fluid">
                <div class="container py-4">
                    <div class="row">
                        <div class="col-md-4 d-grid">
                            <a href="#" class="link-footer">Lorem ipsum</a>
                            <a href="#" class="link-footer">Lorem ipsum</a>
                            <a href="#" class="link-footer">Lorem ipsum</a>
                            <a href="#" class="link-footer">Lorem ipsum</a>
                        </div>
                        <div class="col-md-4 d-grid">
                            <a href="#" class="link-footer">Lorem ipsum</a>
                            <a href="#" class="link-footer">Lorem ipsum</a>
                        </div>
                        <div class="col-md-4 d-grid">
                            <a href="#" class="link-footer">Lorem ipsum</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </body>
    @yield('script')
</html>