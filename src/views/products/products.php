<?php require_once("./../../class/Drug.php"); ?>
<?php require_once("./../../models/DAO.php"); ?>

<?php
    $DAO = new Dao();

    $drugs = [];
    // $drugs = $DAO -> selectAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>DS1 - Drugstore</title>
    <?php require_once("./../includes/head.php"); ?>
</head>
<body>
    <header class="container-fluid mt-4">
        <nav>
            <form class="form-group d-flex">
                <input type="text" class="form-control" placeholder="Search">
                <button class="ml-4 btn btn-success">Pesquisar</button>
            </form>
        </nav>
    </header>
    <div class="container-fluid">
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
                    <form method="POST" class="d-flex flex-column align-items-center" action="./../../../controllers/create.php">
                        <div class="form-group w-100">
                            <input type="text" class="form-control" name="name" placeholder="Name" required>
                        </div>
                        <div class="form-group w-100">
                            <input type="text" class="form-control" name="producer" placeholder="Producer" required>
                        </div>
                        <div class="form-group form-check w-100">
                            <label for="controled">Is controled?</label>
                            <div class="form-group w-100">
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
                            <input type="number" class="form-control" min="0" step="0.01" name="price" placeholder="Price" required>
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
        <button 
            type="button"
            class="btn btn-primary w-100 font-weight-bold mb-4"
            data-toggle="modal"
            data-target="#modalCreator">
                New Drug
        </button>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Quantidade</th>
                <th scope="col">Preço</th>
                <th scope="col">Fabricante</th>
                <th scope="col"></th> <!-- Visualizar -->
                <th scope="col"></th> <!-- Alterar -->
                <th scope="col"></th> <!-- Excluir -->

                </tr>
            </thead>
            <tbody>
                <?php foreach ($drugs as $drug) { ?> 
                    <tr>
                        <th scope="row"><?php echo $drug -> getID(); ?></th>
                        <td><?php echo $drug -> getName(); ?> </td>
                        <td><?php echo $drug -> getQuantify(); ?> </td>
                        <td><?php echo $drug -> getPrice(); ?> </td>
                        <td><?php echo $drug -> getProducer(); ?> </td>
                        <td>
                            <button 
                            class="btn btn-primary"
                            type="button"
                            data-toggle="modal"
                            data-target="#modalVisualizer">Visualizar</button>
                        </td>
                        <td>
                            <button class="btn btn-primary"
                            type="button"
                            data-toggle="modal"
                            data-target="#modalUpdator">Alterar</button>
                        </td>
                        <td>
                            <a class="btn btn-danger" href="./../../controllers/delete.php?id=<?php echo $drug -> getID(); ?>">Excluir</a>
                        </td>
                    </tr>
                    <!-- Modal Updator -->
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
                                        <input type="text" class="form-control" value="<?php echo $drug -> getName(); ?>" name="name" placeholder="Name">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" value="<?php echo $drug -> getProducer(); ?>" name="producer" placeholder="Producer">
                                    </div>
                                    <div class="form-group form-check">
                                        <div class="form-group">
                                            <select class="form-control" name="controled" value="<?php echo $drug -> getControled(); ?>" placeholder="Drug's controled?">
                                            <option value="Y">Yes</option>
                                            <option value="N">No</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="number" class="form-control" value="<?php echo $drug -> getQuantify(); ?>" name="quantify" placeholder="Quantify">
                                    </div>
                                    <div class="form-group">
                                        <input type="number" class="form-control" value="<?php echo $drug -> getPrice(); ?>" min="0" step="0.01" name="price" placeholder="Price">
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
                </div>
                <!-- Modal Visualizer -->
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
                <?php } ?>
            </tbody>
        </table>
    <?php require_once("./../includes/scripts.php"); ?>
</body>
</html>