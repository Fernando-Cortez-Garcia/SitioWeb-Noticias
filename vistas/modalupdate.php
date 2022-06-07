 <style>
     .areatext{
        width: 440px;
        height: 200px;
        margin-bottom: 10px;
    }
 </style>

 <!-- modal para editar la noticia -->
 <div class="modal" id="modalupdate<?php echo $row['ID_NOTICIA']?>" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Editar Noticia</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="col-sm-10 alto-text">
                                  <form method="POST" action="../php/editarnoticia.php" enctype="multipart/form-data">
                                      <input type="hidden" name="f_id" value="<?php echo $row['ID_NOTICIA']?>">
                                      <div class="mb-4">
                                          <label type="text" class="form-label">Cabezera de la noticia</label>
                                          <input type="text" name="f_cabezera" value="<?php echo $row['CABEZERA_NOT']?>" class="form-control">
                                      </div>
                                          <input type="hidden" name="f_fecha" value="<?php echo $row['FECHA_PUBLICACION']?>" class="form-control">
                                      
                                      <div class="mb-4">
                                          <label for="text" class="form-label">Titulo de la noticia</label>
                                          <input type="text" name="f_titulo" class="form-control" value="<?php echo $row['TITULO_NOTI']?>">
                                      </div>
                                      <div class="mb-4">
                                      <label for="text" class="form-label" >Catégoria</label>
                                          <select class="form-select" aria-label="Default select example " name="f_categoria">
                                              <option value="1" <?php if($row['ID_CATEGORIA']=='1'){echo "selected";}?>>Deportes</option>
                                              <option value="2" <?php if($row['ID_CATEGORIA']=='2'){echo "selected";}?>>Política</option>
                                              <option value="3" <?php if($row['ID_CATEGORIA']=='3'){echo "selected";}?>>Técnología</option>
                                              <option value="4" <?php if($row['ID_CATEGORIA']=='4'){echo "selected";}?>>Videojuegos</option>
                                              <option value="5" <?php if($row['ID_CATEGORIA']=='5'){echo "selected";}?>>Educación</option>
                                          </select>
                                      </div>
                                      <label for="text" class="form-label">Cuerpo de la noticia</label>
                                      <textarea class="areatext" name="f_contenido" ><?php echo $row['DSC_NOTICIA']?></textarea><br>
                                      <input type="file" class="btn"
                                      name="imagen"/><br>
                                      <br>
                                      <div class="mt-4">
                                      <button type="submit" class="btn btn-primary">Guardar</button>       
                                      </div>
                                  </form>
                  </div>
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>

<!-- Initialize Quill editor -->
<!-- <script>
    var toolbarOptions = [['bold', 'italic','underline', 'strike'], ['link', 'image'],[{ 'list': 'ordered'}, { 'list': 'bullet' }],
  [{ 'script': 'sub'}, { 'script': 'super' }],[{ 'color': [] }, { 'background': [] }],[{ 'align': [] }],[{ 'header': [1, 2, 3, 4, 5, 6, false] }],[{ 'direction': 'rtl' }],[{ 'indent': '-1'}, { 'indent': '+1' }]];
  var quill = new Quill('#editor', {
    theme: 'snow',
    modules: {
    toolbar: toolbarOptions
  }
  });

  function jsSave(){
      //obtenemos el texto del quill
        var contenido=quill.container.firstchild.innerHTML;
        fetch("Save.php?contenido="+contenido);
  }
</script> -->
    
