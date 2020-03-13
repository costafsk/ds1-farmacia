<!-- Modal Creator -->
<div class="modal fade" id="modalCreator" tabindex="-1" role="dialog" aria-labelledby="modalCreatorLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalCreatorLabel">Creator New Drug</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="./../../../controllers/create.php">
            <div class="form-group">
                <input type="text" class="form-control" name="name" placeholder="Name" required>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="producer" placeholder="Producer" required>
            </div>
            <div class="form-group form-check">
                  <div class="form-group">
                    <select class="form-control" name="controled" placeholder="Drug's controled?" required>
                    <option value="Y">Yes</option>
                    <option value="N">No</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <input type="number" class="form-control" name="quantify" placeholder="Quantify" required>
            </div>
            <div class="form-group">
                <input type="number" class="form-control" min="0" step="0.01" name="quantify" placeholder="Quantify" required>
            </div>
            <button type="submit" class="btn btn-success w-100">Create</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary w-100" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>