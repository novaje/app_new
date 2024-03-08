{{-- javascript --}}

<!-- Library Bundle Script -->
<script src="{{ asset('template/assets/js/core/libs.min.js') }}"></script>
<!-- Plugin Scripts -->
<!-- Tour plugin Start -->
<script src="{{ asset('template/assets/vendor/sheperd/dist/js/sheperd.min.js') }}"></script>
{{-- <script src="{{ asset('template/assets/js/plugins/tour.js') }}"></script> --}}


<!-- Flatpickr Script -->
<script src="{{ asset('template/assets/vendor/flatpickr/dist/flatpickr.min.js') }}"></script>
<script src="{{ asset('template/assets/js/plugins/flatpickr.js') }}"></script>

<!-- Select2 Script -->
<script src="{{ asset('template/assets/js/plugins/select2.js') }}"></script>

<!-- Slider-tab Script -->
<script src="{{ asset('template/assets/js/plugins/slider-tabs.js') }}"></script>

<!-- SwiperSlider Script -->
<script src="{{ asset('template/assets/vendor/swiperSlider/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('template/assets/js/plugins/swiper-slider.js') }}"></script>
<!-- Lodash Utility -->
<script src="{{ asset('template/assets/vendor/lodash/lodash.min.js') }}"></script>
<!-- Utilities Functions -->
<script src="{{ asset('template/assets/js/iqonic-script/utility.min.js') }}"></script>
<!-- Settings Script -->
<script src="{{ asset('template/assets/js/iqonic-script/setting.min.js') }}"></script>
<!-- Settings Init Script -->
<script src="{{ asset('template/assets/js/setting-init.js') }}"></script>
<!-- External Library Bundle Script -->
<script src="{{ asset('template/assets/js/core/external.min.js') }}"></script>
<!-- Widgetchart Script -->
<script src="{{ asset('template/assets/js/charts/widgetcharts.js') }}"></script>
<!-- Dashboard Script -->
<script src="{{ asset('template/assets/js/charts/dashboard.js') }}"></script>
<!-- qompacui Script -->
<script src="{{ asset('template/assets/js/qompac-ui.js') }}"></script>
<script src="{{ asset('template/assets/js/sidebar.js') }}"></script>

<!-- Bootstrap JS -->
{{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script> --}}

{{-- untuk nampilkan table --}}
<script>
    function toggleSubTable(index) {
        var subTable = document.getElementById("subTable" + index);
        if (subTable.style.display === "none") {
            subTable.style.display = "block";
        } else {
            subTable.style.display = "none";
        }
    }

    function toggleRincianTable(index) {
        var rincianTable = document.getElementById("rincianTable" + index);
        if (rincianTable.style.display === "none") {
            rincianTable.style.display = "block";
        } else {
            rincianTable.style.display = "none";
        }
    }

    function toggleRincianTableAkhir(index) {
        var rincianTableAkhir = document.getElementById("rincianTableakhir" + index);
        if (rincianTableAkhir.style.display === "none") {
            rincianTableAkhir.style.display = "block";
        } else {
            rincianTableAkhir.style.display = "none";
        }
    }
</script>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>