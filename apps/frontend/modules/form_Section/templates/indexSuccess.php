<h1>Lista de tipos</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Nombre</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($secciones as $seccion): ?>
    <tr>
      <td><a href="<?php echo url_for('form_Section/edit?id='.$seccion->getId()) ?>"><?php echo $seccion->getId() ?></a></td>
      <td><?php echo $seccion->getNombre() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('form_Section/new') ?>">New</a>
