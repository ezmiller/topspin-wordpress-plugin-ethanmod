<?php


?>


<div class="topspin-store-navmenu">
<ul class="topspin-store-navmenu">
<?php foreach ($storesList as $item) : ?>
  <li class="topspin-store-navmenu"><a class="topspin-store-navmenu" href="<?php bloginfo('wpurl'); ?>/<?php echo $item->post_name; ?>/"><?php echo $item->post_title; ?></a></li>
<?php endforeach; ?>
</ul>
</div>
<script type="text/javascript">
$(function(){
   var path = '/' + location.pathname.substring(1);
   if ( path ) { 
     $('a[href$="' + path + '"]').attr('id','selected');
   }
});
</script>
