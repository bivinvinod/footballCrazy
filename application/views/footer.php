
<footer></footer>

<!-- ========== -->
<!-- JAVASCRIPT -->
<!-- ========== -->
<!-- Custom Theme Scripts -->
<script src="<?php echo base_url(); ?>js/gentelella.min.js"></script>
<script type="text/javascript">
  $( document ).ready(function() {
    <?php if($this->session->flashdata('msg')) {
      echo "toastr.info('".$this->session->flashdata('msg')."')";
    } ?>
  });
</script>


</div>
</div>
</body>
</html>