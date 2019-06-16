<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Series[]|\Cake\Collection\CollectionInterface $series
 */
?>

    <h1>Minhas Séries <?= $this->Html->link('Adicionar Nova Série',['action' => 'add'],['class' => 'btn btn-primary btn-sm']) ?></h1>
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
            <?php foreach ($series as $series): ?>
            <tr>
                <td><?= h($series->name) ?></td>
                <td><?= h($series->category) ?></td>
                <td><?= $this->Number->format($series->number_of_visualizations) ?></td>
                <td><?= h($series->description) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $series->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $series->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $series->id], ['confirm' => __('Are you sure you want to delete # {0}?', $series->id)]) ?>
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
