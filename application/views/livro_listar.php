<main class="page-content">
                <div class="container-fluid">
                    <h1>Lista de Obra(s)</h1>
                    <br/>  
                    <div id="example_wrapper" class="dataTables_wrapper dt-bootstrap4">
                        <div class="row">
                            <div class="col-sm-12">
                                <table id="example" class="table table-striped table-bordered dataTable" style="width: 100%;" role="grid" aria-describedby="example_info">
                                    <thead>
                                        <tr role="row">
                                            <th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending">Nº</th>								 
                                            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending">Nome</th>
                                            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending">Edição</th>
                                            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending">Situação</th>
                                            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending">Ações</th>                                 
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $i = 0;
                                        while ($linha = mysqli_fetch_assoc($resultado)):
                                            $i++;
                                            ?>
                                            <tr role="row" class="odd">
                                                <?php $id = $linha["id"]; ?>
                                                <?php $usuario_tblivro = $linha["usuario"]; ?>
                                                <td><?= $i ?></td>
                                                <td><?= $linha["nome"] ?></td>
                                                <td>Edição <?= $linha["id"] ?></td>
                                                <td><?= $linha["status"] == 0 ? "Disponível" : "Indisponível" ?></td>
                                                <?php if (isset($_SESSION["admin"]) && ($_SESSION["admin"] == 1)): ?>
                                                    <td><a href="livro_excluir.php?id=<?= $linha["id"]; ?>&id_obra=<?= $id_obra ?>"><button class="btn btn-danger btn-xs">Excluir</button></a></td>
                                                <?php endif; ?>
                                                <?php if (isset($_SESSION["admin"]) && ($_SESSION["admin"] == 0)): ?>
                                                    <td>
                                                        <?php if ($linha["status"] == 0): ?>
                                                            <a href="obra_emprestimo.php?id=<?= $linha["id"]; ?>&id_obra=<?php echo $id_obra; ?>&id_usuario=<?php echo $id_usuario; ?>"><button class="btn btn-success btn-xs">Emprestar</button></a>
                                                        <?php else: ?>
                                                            <?php if ($id_usuario == $usuario_tblivro) { ?>
                                                                <a href="obra_devolucao.php?id=<?= $linha["id"]; ?>&id_obra=<?php echo $id_obra; ?>&id_usuario=<?php echo $id_usuario; ?>"><button class="btn btn-warning btn-xs">Devolver</button></a>
                                                            <?php } else { ?>
                                                                <span class="btn btn-danger btn-xs"> Exemplar emprestado !</span>
                                                            <?php } ?>			   
                                                        <?php endif; ?>				
                                                    </td>
                                                <?php endif; ?>

                                            </tr>
                                        <?php endwhile; ?>
                                    </tbody>
                                    <tfoot>

                                    </tfoot>
                                </table>
                            </div>
                        </div>
                        <div class="row">         
                        </div>
                    </div>
                </div>
            </main>