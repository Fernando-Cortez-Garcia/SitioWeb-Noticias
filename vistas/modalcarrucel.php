<style>
 img{
    float:right;
    margin-left:10px;
 }
 .header{
   background-color:black;
   color: white;
 }
</style>

<div class="modal" id="modalverr<?php echo $row[2]['ID_NOTICIA']?>" tabindex="-1">
  <div class="modal-dialog w-100">
    <div class="modal-content">
      <div class="modal-header header">
        <h2 class="modal-title"><?php echo $row['CABEZERA_NOT']; ?></h2>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body header">
      <img   class="w-50 top-2 start-50" src="data:image/jpg;base64,<?php echo base64_encode($row['IMAGEN'])?>">
        <p class="textonoti mt-3"><?php echo $row['DSC_NOTICIA'];?></p><br>
        <p>Públicado el: <?php echo $row['FECHA_PUBLICACION'];?></p>
      </div>
      <div class="modal-footer">
      <p>Autor: <?php echo $row['AUTOR'];?></p><br>
      </div>
    </div>
  </div>
</div>