<h1>Lista de Tesis</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Titulo</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($tesi as $tesis): ?>
    <tr>
      <td><a href="<?php echo url_for('tesis/edit?id='.$tesis->getId()) ?>"><?php echo $tesis->getId() ?></a></td>
      <td><a href="<?php echo url_for('tesis/edit?id='.$tesis->getId()) ?>"><?php echo $tesis->getTitulo() ?></a></td>
	  <td><?php echo button_to('Editar tesis','apartado/new', array('class' => 'btn btn-primary')); ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('tesis/new') ?>">New</a>
