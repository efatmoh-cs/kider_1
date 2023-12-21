<!DOCTYPE html>
<html lang="en">

@include('includes.head')

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        @include('includes.spiner')
        <!-- Spinner End -->


        <!-- Navbar Start -->
        @include('includes.navbar')
        <!-- Navbar End -->


        <!-- Page Header End -->
        @include('includes.header')
        <!-- Page Header End -->


        <!-- Facilities Start -->
        @include('includes.Facilities')
        <!-- Facilities End -->


        <!-- Footer Start -->

        @include('includes.footer')
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/wow/wow.min.js')}}"></script>
    <script src="{{ asset('assets/easing/easing.min.js')}}"></script>
    <script src="{{ asset('assets/waypoints/waypoints.min.js')}}"></script>
    <script src="{{ asset('assets/owlcarousel/owl.carousel.min.js')}}"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
