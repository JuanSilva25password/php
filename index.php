<div class="container mt-4">
    <table class="table table-bordered table-custom"> <!-- Agrega la clase table-custom -->
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Acciones</th> 
            </tr>
        </thead>
        <tbody>
            <?php while ($row = mysqli_fetch_array($query)): ?>
            <tr>
                <td><?= $row['id'] ?></td>
                <td><?= $row['nombre'] ?></td>
                <td><?= $row['descripcion'] ?></td>
                <td>
                    <!-- Botón para editar producto -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editarModal<?= $row['id'] ?>">
                        Actualizar
                    </button>
                    <!-- Enlace para eliminar producto -->
                    <a href="controller/EliminarDatosproducto.php?id=<?= $row['id'] ?>" class="btn btn-warning">Eliminar</a>
                </td>
            </tr>

            <!-- Modal para editar producto -->
            <div class="modal fade" id="editarModal<?= $row['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Actualizar producto</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <!-- Formulario para editar producto -->
                            <form action="controller/ActualizarDatosproducto.php" method="POST">
                                <input type="hidden" name="id" value="<?= $row['Id'] ?>">
                                <div class="form-group">
                                    <label for="nombre">Nombre:</label>
                                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="nombre" value="<?= $row['nombre'] ?>">
                                </div>
                                <div class="form-group">
                                    <label for="descripcion">Descripción:</label>
                                    <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="descripción" value="<?= $row['descripcion'] ?>">
                                </div>
                                <button type="submit" class="btn btn-warning">Guardar cambios</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
        </tbody>
    </table>
</div>

<!-- Botón para agregar producto -->
<div class="container mt-4">
    <div class="row justify-content-between"> <!-- Cambia justify-content-end a justify-content-between -->
        <div class="col-md-2">
            <button type="button" class="d-flex justify-content-end mb-3 " data-toggle="modal" data-target="#agregarModal">
                Agregar
            </button>
        </div>
    </div>
</div>
