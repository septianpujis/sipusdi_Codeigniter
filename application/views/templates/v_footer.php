<!-- Page Footer-->
  <footer class="main-footer">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6">
          <p>Special Salamander &copy; 2020-2021</p>
        </div>
        <div class="col-sm-6 text-right">
          <p>Design by <a href="https://bootstrapious.com/admin-templates" class="external">Bootstrapious</a></p>
          <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
        </div>
      </div>
    </div>
  </footer>
</div>
</div>
</div>
<!-- Javascript files-->
<script src="<?php echo base_url("assets/js/jquery-3.2.1.min.js");?>"></script>
<script src="<?php echo base_url("assets/vendor/popper.js/umd/popper.min.js");?>"> </script>
<script src="<?php echo base_url("assets/vendor/bootstrap/js/bootstrap.min.js");?>"></script>
<script src="<?php echo base_url("assets/vendor/jquery.cookie/jquery.cookie.js");?>"> </script>
<script src="<?php echo base_url("assets/vendor/jquery-validation/jquery.validate.min.js");?>"></script>
<script src="<?php echo base_url("assets/js/charts.min.js");?>"></script>
<script src="<?php echo base_url("assets/js/charts-home.js");?>"></script>
<script src="<?php echo base_url("assets/js/front.js");?>"></script>
<!-- MODAL USER TAMPIL DETAIL -->
<script>
  $('#modalHapusUser').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget)
    var modal = $(this)
    var id = button.data('id_user')
    $("#id_user").val(id);
    });
  $('#modalHapusBuku').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget)
    var modal = $(this)
    var id = button.data('id_buku')
    $("#id_buku").val(id);
    });
  $('#modalHapusTrans').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget)
    var modal = $(this)
    var id = button.data('id_trans')
    $("#id_trans").val(id);
    });
</script>

<script>
  $('#modalUserDetail').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget)
    var modal = $(this)
    modal.find('.modal-body td#nomor_induk').text(button.data('nomor'))
    modal.find('.modal-body td#nama').text(button.data('nama'))
    modal.find('.modal-body td#level').text(button.data('level'))
    modal.find('.modal-body td#email').text(button.data('email'))
    modal.find('.modal-body td#kelas').text(button.data('kelas'))
    modal.find('.modal-body td#telp').text(button.data('telp'))
    modal.find('.modal-body td#foto').text(button.data('foto'))
    });
  $('#modalBukuDetail').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget)
    var modal = $(this)
    modal.find('.modal-body td#id').text(button.data('id'))
    if (button.data('sedia')) {
      modal.find('.modal-body td#sedia').text("Tersedia")
    }else{
      modal.find('.modal-body td#sedia').text("Tidak Tersedia")
    }
    modal.find('.modal-body td#judul').text(button.data('judul'))
    modal.find('.modal-body td#penulis').text(button.data('penulis'))
    modal.find('.modal-body td#penerbit').text(button.data('penerbit'))
    modal.find('.modal-body td#tahun').text(button.data('tahun'))
    modal.find('.modal-body td#halaman').text(button.data('halaman'))
    modal.find('.modal-body td#genre').text(button.data('genre'))
    modal.find('.modal-body td#sinopsis').text(button.data('sinopsis'))
    });
  $('#modalTransDetail').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget)
    var modal = $(this)
    modal.find('.modal-body td#id_trans').text(button.data('id_trans'))
    modal.find('.modal-body td#waktu_pinjam').text(button.data('waktu_pinjam'))
    modal.find('.modal-body td#waktu_kembali').text(button.data('waktu_kembali'))
    modal.find('.modal-body td#nama').text(button.data('nama'))
    modal.find('.modal-body td#nama_kelas').text(button.data('nama_kelas'))
    modal.find('.modal-body td#no_telp').text(button.data('no_telp'))
    modal.find('.modal-body td#judul').text(button.data('judul'))
    modal.find('.modal-body td#penulis').text(button.data('penulis'))
    modal.find('.modal-body td#status').text(button.data('status'))
    });
</script>
