<h1>Lista de Apartados</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Titulo</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($apartado as $apartados): ?>
    <tr>
      <td><?php echo $apartados->getId() ?></td>
      <td><?php echo $apartados->getTitulo() ?></td>
	  <td><?php echo button_to('Editar apartado','apartado/edit?id='.$apartados->getId(), array('class' => 'btn btn-primary')); ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('apartado/new') ?>">New</a>