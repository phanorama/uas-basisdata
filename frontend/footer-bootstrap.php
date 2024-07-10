<!-- Data Table CSS -->
<link rel='stylesheet' href='https://cdn.datatables.net/1.13.5/css/dataTables.bootstrap5.min.css'>
<!-- Font Awesome CSS -->
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css'>

<!-- Bootstrap CSS -->
<script src="../assets/static/js/components/dark.js"></script>
<script src="../assets/extensions/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="../assets/compiled/js/app.js"></script>

<!-- Need: Apexcharts -->
<script src="../assets/extensions/apexcharts/apexcharts.min.js"></script>
<script src="../assets/static/js/pages/dashboard.js"></script>
<!-- jQuery -->
<script src='https://code.jquery.com/jquery-3.7.0.js'></script>
<!-- Data Table JS -->
<script src='https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js'></script>
<script src='https://cdn.datatables.net/responsive/2.1.0/js/dataTables.responsive.min.js'></script>
<script src='https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap5.min.js'></script>

<script src="../assets/extensions/flatpickr/flatpickr.min.js"></script>
<script src="../assets/static/js/pages/date-picker.js"></script>
<script src="../assets/static/js/pages/form-validation.js"></script>
<script src="../assets/static/js/pages/form-wizard.js"></script>
<script src="../assets/static/js/pages/form-editor.js"></script>
<script src="../assets/static/js/pages/form-pickers.js"></script>

<script>
    $(document).ready(function () {
        $('#daftarPesanan').DataTable({
            //disable sorting on last column
            "columnDefs": [
                { "orderable": false, "targets": <?php echo $target ?> } // Set target ke 3 karena kolom pertama dimulai dari 0
            ],
            language: {
                //customize pagination prev and next buttons: use arrows instead of words
                'paginate': {
                    'previous': '<span class="fa fa-chevron-left"></span>',
                    'next': '<span class="fa fa-chevron-right"></span>'
                },
                //customize number of elements to be displayed
                "lengthMenu": 'Display <select class="form-control input-sm">' +
                    '<option value="10">10</option>' +
                    '<option value="20">20</option>' +
                    '<option value="30">30</option>' +
                    '<option value="40">40</option>' +
                    '<option value="50">50</option>' +
                    '<option value="-1">All</option>' +
                    '</select> results'
            }
        });
    });

    $(document).ready(function () {
        $('.daftarPesanan').DataTable({
            //disable sorting on last column
            "columnDefs": [
                { "orderable": false, "targets": <?php echo $target ?> } // Set target ke 3 karena kolom pertama dimulai dari 0
            ],
            language: {
                //customize pagination prev and next buttons: use arrows instead of words
                'paginate': {
                    'previous': '<span class="fa fa-chevron-left"></span>',
                    'next': '<span class="fa fa-chevron-right"></span>'
                },
                //customize number of elements to be displayed
                "lengthMenu": 'Display <select class="form-control input-sm">' +
                    '<option value="10">10</option>' +
                    '<option value="20">20</option>' +
                    '<option value="30">30</option>' +
                    '<option value="40">40</option>' +
                    '<option value="50">50</option>' +
                    '<option value="-1">All</option>' +
                    '</select> results'
            }
        });
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>