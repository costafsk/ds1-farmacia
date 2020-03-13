<!-- Modal Creator -->
<div class="modal fade" id="modalVisualizer" tabindex="-1" role="dialog" aria-labelledby="modalVisualizerLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalVisualizerLabel">Drug - <?php echo $drug -> getName(); ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
            <div class="form-group">
                <input type="text" class="form-control" value="<?php echo $drug -> getName(); ?>" name="name" disabled>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" value="<?php echo $drug -> getProducer(); ?>" name="producer" disabled>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" value="<?php echo $drug -> getControled(); ?>" name="controled" disabled>
            </div>
            <div class="form-group">
                <input type="number" class="form-control" disabled value="<?php echo $drug -> getQuantify(); ?>" name="quantify">
            </div>
            <div class="form-group">
                <input type="number" class="form-control" value="<?php echo $drug -> getPrice(); ?>" min="0" step="0.01" name="price" disabled>
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary w-100" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>