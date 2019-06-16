<h1>
	Usuários <?= $this->Html->link('Adicionar',['action' => 'add'],['class' => 'btn btn-primary btn-sm']) ?>
</h1>

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Usuário</th>
      <th scope="col">Email</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
  	<?php
  		foreach ($lista as $item) { ?>
  	<tr>
      <th><?=  $this->Html->link($item->name,['action'=>'edit',$item->id]) ?></th>
      <td><?= $item->username ?></td>
      <td><?= $item->email ?></td>
      <td><?= $this->Form->postLink('Apagar',['action' => 'delete', $item->id],['confirm' => __('Esse registro será apagado. Deseja continuar?'),'class' => 'btn btn-sm btn-danger']) ?></td>
    </tr>
  	<?php } ?>
  </tbody>
</table>