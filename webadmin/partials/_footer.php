<!-- partial:partials/_footer.html -->
<footer class="footer">
  <div class="container-fluid d-flex justify-content-between">
    <span class="text-muted d-block text-center text-sm-start d-sm-inline-block">Copyright © Food Saver
      <?= date('Y') ?></span>
    <span class="float-none float-sm-end mt-1 mt-sm-0 text-end">Made with ❤️ <a href="https:/shoaibhussain.netlify.app" target="_blank">from Shoaib Hussain</a> </span>
  </div>
</footer>
<!-- partial -->
</div>
<!-- main-panel ends -->
</div>
</body>

</html>

<!-- plugins:js -->
<script src="assets/vendors/js/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="assets/vendors/chart.js/Chart.min.js"></script>
<script src="assets/js/jquery.cookie.js" type="text/javascript"></script>
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="assets/js/off-canvas.js"></script>
<script src="assets/js/hoverable-collapse.js"></script>
<script src="assets/js/misc.js"></script>
<!-- endinject -->
<!-- Custom js for this page -->
<script src="assets/js/dashboard.js"></script>
<script src="assets/js/todolist.js"></script>
<!-- End custom js for this page -->
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>

<script>
  let table = new DataTable('#reequest');
  let tablev = new DataTable('#volunterr');
  let tablec = new DataTable('#contactt');
</script>