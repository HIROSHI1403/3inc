<?php require_once('/var/www/html/3inc-stage1/inc/config.php'); ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="<?php echo SRV_ROOT; ?>/js/3inc_base.js"></script>
<script src="<?php echo SRV_ROOT; ?>/js/wow.min.js"></script>
<script>
      new WOW().init();
</script>
<script type="text/javascript">
      $(document).on('click', '.yamm .dropdown-menu', function(e) {
            e.stopPropagation()
      });
</script>