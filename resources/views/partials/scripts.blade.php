<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
@yield("javascript")
<!-- <script src="{{resource_path('js/scripts.js')}}"></script> -->

<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }} " type="text/javascript"></script>

@vite(['resources/js/scripts.js', 'resources/js/bootstrap.js' ])