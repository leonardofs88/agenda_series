<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Series[]|\Cake\Collection\CollectionInterface $series
 */
?>

<h1>Minhas Séries <?= $this->Html->link('Adicionar Nova Série',['action' => 'add'],['class' => 'btn btn-primary btn-sm']) ?></h1>
<div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('name',['label'=>'Nome']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('category',['label'=>'Categoria']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('number_of_visualizations',['label'=>'Visualizações']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('description',['label'=>'Descrição']) ?></th>
                <th scope="col" class="actions"></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($series as $serie): ?>
            <tr>
                <td><?= $this->Html->link($serie->name, ['action' => 'edit', $serie->id]) ?></td>
                <td><?= h($serie->category) ?></td>
                <td><?= $this->Number->format($serie->number_of_visualizations) ?></td>
                <td><?= h($serie->description) ?></td>
                <td class="actions">
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $serie->id], ['confirm' => __('Esse registro será apagado. Deseja continuar?'),'class' => 'btn btn-sm btn-danger']) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
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
