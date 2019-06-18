<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Schedule[]|\Cake\Collection\CollectionInterface $schedules
 */
?>
<h1>Meus Agendamentos <?= $this->Html->link('Criar novo agendamento',['action' => 'add'],['class' => 'btn btn-primary btn-sm']) ?></h1>
<div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('user_id',['label'=>'Usuário']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('serie_id',['label'=>'Série']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('date',['label'=>'Dia']) ?></th>
                <th scope="col" class="actions"> </th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($schedules as $schedule): ?>
            <tr>
                <td><?= $schedule->has('user') ? $this->Html->link($schedule->user->name, ['action' => 'edit', $schedule->id]) : '' ?></td>
                <td><?= $schedule->has('series') ? $this->Html->link($schedule->series->name, ['controller' => 'Series', 'action' => 'edit', $schedule->series->id]) : '' ?></td>
                <td><?= h($schedule->date) ?></td>
                <td class="actions">
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $schedule->id],['confirm' => __('Esse registro será apagado. Deseja continuar?'),'class' => 'btn btn-sm btn-danger']) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
