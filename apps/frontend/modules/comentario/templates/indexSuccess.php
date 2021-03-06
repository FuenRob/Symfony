<h1>Comentarios List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Texto</th>
      <th>Fecha</th>
      <th>Usuario</th>
      <th>Tesis</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($comentarios as $comentario): ?>
    <tr>
      <td><a href="<?php echo url_for('comentario/edit?id='.$comentario->getId()) ?>"><?php echo $comentario->getId() ?></a></td>
      <td><?php echo $comentario->getTexto() ?></td>
      <td><?php echo $comentario->getFecha() ?></td>
      <td><?php echo $comentario->getUsuarioId() ?></td>
      <td><?php echo $comentario->getTesisId() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('comentario/new') ?>">New</a>
