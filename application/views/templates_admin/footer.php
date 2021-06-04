 <footer>
    <div class="footer clearfix mb-0 text-muted">
        <div class="float-start">
            <p>Copyright &copy; <?= date('Y') ?> E - Zakat</p>
        </div>
        <div class="float-end">
            <p>Created with <span class="text-danger"><i class="bi bi-heart"></i></span> by <a
                href="https://mazmiiskndr.000webhostapp.com">Moch Azmi Iskandar</a></p>
            </div>
        </div>
    </footer>
</div>
</div>

<!-- Vertically Centered modal Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable"
role="document">
<div class="modal-content">
    <div class="modal-header bg-danger">
        <h5 class="modal-title text-white" id="exampleModalCenterTitle">Yakin Ingin Logout?
        </h5>
        <button type="button" class="close" data-bs-dismiss="modal"
        aria-label="Close">
        <i data-feather="x"></i>
    </button>
</div>

<div class="modal-footer">
    <button type="button" class="btn btn-light-secondary"
    data-bs-dismiss="modal">
    <i class="bx bx-x d-block d-sm-none"></i>
    <span class="d-none d-sm-block">Close</span>
</button>
<a href="<?= base_url('auth/login/logout') ?>" class="btn btn-danger ml-1">
<i class="bx bx-check d-block d-sm-none"></i>
<span class="d-none d-sm-block">Logout</span>
</a>
</div>
</div>
</div>

<script src="<?= base_url('assets/admin/') ?>assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="<?= base_url('assets/admin/') ?>assets/js/bootstrap.bundle.min.js"></script>

<script src="<?= base_url('assets/admin/') ?>assets/vendors/apexcharts/apexcharts.js"></script>
<script src="<?= base_url('assets/admin/') ?>assets/js/pages/dashboard.js"></script>
<script src="<?= base_url('assets/admin/') ?>assets/vendors/jquery/jquery.min.js"></script>
<script src="<?= base_url('assets/admin/') ?>assets/vendors/fontawesome/all.min.js"></script>

<script src="<?= base_url('assets/admin/') ?>assets/vendors/summernote/summernote-lite.min.js"></script>
<script>
    $('#summernote').summernote({

        tabsize: 2,
        height: 400,

    })
    $("#hint").summernote({
        height: 100,
        toolbar: false,
        placeholder: 'type with apple, orange, watermelon and lemon',
        hint: {
            words: ['apple', 'orange', 'watermelon', 'lemon'],
            match: /\b(\w{1,})$/,
            search: function (keyword, callback) {
                callback($.grep(this.words, function (item) {
                    return item.indexOf(keyword) === 0;
                }));
            }
        }



    });
    $('.title').keyup(function(){
        var title = $(this).val().toLowerCase().replace(/[&\/\\#^, +()$~%.'":*?<>{}]/g,'-');
        $('.slug').val(title);
    });


</script>
<script src="<?= base_url('assets/admin/') ?>assets/js/main.js"></script>



</body>

</html>