<!DOCTYPE html>
<html>
    @include('meta')
    <body>
        <!-- jQuery CDN - Slim version (=without AJAX) -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <!-- Popper.JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
        <!-- Bootstrap JS -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    
        <div class="">
            {{-- <nav class="navbar navbar-expand-lg navbar-light bg-light"> --}}
                <div class="header">
                    <div class="left-header d-flex">
                        <h3>Rekam Keterlambatan </h3>
                        <button type="button" id="sidebarCollapse" class="btn btn-light btn-sidebar-toggle">
                        <i class="fas fa-bars"></i>
                        </button>
                    </div>
                </div>
            {{-- </nav> --}}
        </div>  
        <div class="wrapper">
            <!-- Sidebar -->
            @include('sidebar')
        
            <!-- Page Content -->
            <div class="content-page">
                @yield('page_content')
            </div>
        </div>  

        <script>
            $(document).ready(function () {

            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });

            });
        </script>
    </body>
    <footer class="bg-body-tertiary text-center text-lg-start">
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.05);">
            © 2023 Copyright:
            <a class="text-body" href="#">Anasya</a>
        </div>
        <!-- Copyright -->
    </footer>
</html>    