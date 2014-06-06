
<table class="table table-striped table-bordered">
  <thead>
	<th>
	<?php foreach ($apartados as $apartado): ?>
    <?php echo $apartado->getTitulo() ?><br><br>
	</th>
  </thead>
  <tbody>
  <tr>
      <td>
        BANNER DE PUBLICIDAD
      </td>
    </tr>
  <tr>
      <td>
	Introduccion
	<div id="intro">
	<?php echo $apartado->getIntroduccion() ?><br><br>
	</div>
	  </td>
    </tr>
	<tr>
      <td>
	Materiales<br>
	<?php echo $apartado->getMateriales() ?><br><br>
	  </td>
    </tr>
	<tr>
      <td>
	Metodologia<br>
	<?php echo $apartado->getMetodologia() ?><br><br>
	  </td>
    </tr>
	<tr>
      <td>
	Procedimiento<br>
	<?php echo $apartado->getProcedimiento() ?><br><br>
	  </td>
    </tr>
	<tr>
      <td>
	Resultados<br>
	<?php echo $apartado->getResultados() ?><br><br>
	  </td>
    </tr>
	<tr>
      <td>
	Conclusion<br>
	<?php echo $apartado->getConclusion() ?><br><br>
	  </td>
    </tr>
	<tr>
      <td>
	Bibliografia<br>
	<?php echo $apartado->getBibliografia() ?><br><br>
	  </td>
    </tr>
	<tr>
      <td>
        BANNER DE PUBLICIDAD
      </td>
    </tr>
<?php endforeach; ?>
	</tbody>
</table>

