  <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright &copy; Sistem Informasi Pelayanan Pesantren Al-Qodiri Jember Developed by <a href="https://github.com/dwiadisa"><b> Arrohim Dwi Ksatria, S.Kom</b> </a> <?php echo date('Y') ?></p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <!-- Plugins -->
    <script src="<?php echo base_url('assets/theme/') ?>plugins/common/common.min.js"></script>
    <script src="<?php echo base_url('assets/theme/') ?>js/custom.min.js"></script>
    <script src="<?php echo base_url('assets/theme/') ?>js/settings.js"></script>
    <script src="<?php echo base_url('assets/theme/') ?>js/gleek.js"></script>
    <script src="<?php echo base_url('assets/theme/') ?>js/styleSwitcher.js"></script>

    <!-- DataTables -->
    <script src="<?php echo base_url('assets/theme/') ?>plugins/tables/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url('assets/theme/') ?>plugins/tables/js/datatable/dataTables.bootstrap4.min.js"></script>
    <script src="<?php echo base_url('assets/theme/') ?>plugins/tables/js/datatable-init/datatable-basic.min.js"></script>

    <!-- Other Scripts -->
    <script src="<?php echo base_url('assets/theme/') ?>plugins/chart.js/Chart.bundle.min.js"></script>
    <script src="<?php echo base_url('assets/theme/') ?>plugins/circle-progress/circle-progress.min.js"></script>
    <script src="<?php echo base_url('assets/theme/') ?>plugins/d3v3/index.js"></script>
    <script src="<?php echo base_url('assets/theme/') ?>plugins/topojson/topojson.min.js"></script>
    <script src="<?php echo base_url('assets/theme/') ?>plugins/datamaps/datamaps.world.min.js"></script>
    <script src="<?php echo base_url('assets/theme/') ?>plugins/raphael/raphael.min.js"></script>
    <script src="<?php echo base_url('assets/theme/') ?>plugins/morris/morris.min.js"></script>
    <script src="<?php echo base_url('assets/theme/') ?>plugins/moment/moment.min.js"></script>
    <script src="<?php echo base_url('assets/theme/') ?>plugins/pg-calendar/js/pignose.calendar.min.js"></script>
    <script src="<?php echo base_url('assets/theme/') ?>plugins/chartist/js/chartist.min.js"></script>
    <script src="<?php echo base_url('assets/theme/') ?>plugins/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js"></script>
    <script src="<?php echo base_url('assets/theme/') ?>js/dashboard/dashboard-1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
<script>
        $(document).ready(function() {
        $('#id_santri').select2({
            placeholder: "Pilih Santri",
            allowClear: true
        });
    });
</script>
</body>

</html>

