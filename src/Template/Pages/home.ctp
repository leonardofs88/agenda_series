<h1>
	Próximas séries a assistir 
</h1>
<hr/>
<div class="table-responsive">
  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">Usuário</th>
        <th scope="col">Série</th>
        <th scope="col">Dia</th>
      </tr>
    </thead>
    <tbody>
    	<?php
    		foreach ($schedules as $item) { ?>
    	<tr>
        <td><?= $item->user->username ?></td>
        <td><?= $item->series->name ?></td>
        <td><?= $item->date->format('d/m/Y') ?></td>
      </tr>
    	<?php } ?>
    </tbody>
  </table>
</div>