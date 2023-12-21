
<!DOCTYPE html>
<html lang="en">

@include('includes.head')

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        @include('includes.spiner')


        <!-- Navbar Start -->
        @include('includes.navbar')
        <!-- Navbar End -->


        <!-- Carousel Start -->
        @include('includes.Carousel')
        <!-- Carousel End -->


        <!-- Facilities Start -->
        @include('includes.Facilities')
        <!-- Facilities End -->


        <!-- About Start -->
        @include('includes.about')
        <!-- About End -->


        <!-- Call To Action Start -->
        @include('includes.action')
        <!-- Call To Action End -->


        <!-- Classes Start -->
        @include('includes.classes')
        <!-- Classes End -->


        @include('includes.appointment')
        <!-- Appointment End -->


        <!-- Team Start -->
        @include('includes.team')


        <!-- Testimonial Start -->
        @include('includes.testimonial')
        <!-- Footer Start -->

        @include('includes.footer')

        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    @include('includes.javascript_lib')
    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
