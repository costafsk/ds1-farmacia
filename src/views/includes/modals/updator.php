<!-- Modal Creator -->
<div class="modal fade" id="modalUpdator" tabindex="-1" role="dialog" aria-labelledby="modalUpdatorLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalUpdatorLabel">Creator New Drug</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="./../../../controllers/create.php">
            <div class="form-group">
                <input type="text" class="form-control" value="<?php echo $drug -> getName() || ''; ?>" name="name" placeholder="Name">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" value="<?php echo $drug -> getProducer() || ''; ?>" name="producer" placeholder="Producer">
            </div>
            <div class="form-group form-check">
                  <div class="form-group">
                    <select class="form-control" name="controled" value="<?php echo $drug -> getControled() || ''; ?>" placeholder="Drug's controled?">
                    <option value="Y">Yes</option>
                    <option value="N">No</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <input type="number" class="form-control" value="<?php echo $drug -> getQuantify() || ''; ?>" name="quantify" placeholder="Quantify">
            </div>
            <div class="form-group">
                <input type="number" class="form-control" value="<?php echo $drug -> getPrice() || ''; ?>" min="0" step="0.01" name="price" placeholder="Price">
            </div>
            <button type="submit" class="btn btn-success w-100">Save</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary w-100" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>