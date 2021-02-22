<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Service[]|\Cake\Collection\CollectionInterface $services
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Service'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="services index large-9 medium-8 columns content">
    <h3><?= __('Services') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('type') ?></th>
                <th scope="col"><?= $this->Paginator->sort('customer_type') ?></th>
                <th scope="col"><?= $this->Paginator->sort('processing_time') ?></th>
                <th scope="col"><?= $this->Paginator->sort('eservice') ?></th>
                <th scope="col"><?= $this->Paginator->sort('access_url') ?></th>
                <th scope="col"><?= $this->Paginator->sort('technology') ?></th>
                <th scope="col"><?= $this->Paginator->sort('no_of_user') ?></th>
                <th scope="col"><?= $this->Paginator->sort('access_point') ?></th>
                <th scope="col"><?= $this->Paginator->sort('payment') ?></th>
                <th scope="col"><?= $this->Paginator->sort('focal_person_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('focal_person_designation') ?></th>
                <th scope="col"><?= $this->Paginator->sort('focal_person_phone') ?></th>
                <th scope="col"><?= $this->Paginator->sort('focal_person_email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('updated_by') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created_at') ?></th>
                <th scope="col"><?= $this->Paginator->sort('updated_at') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($services as $service): ?>
            <tr>
                <td><?= $this->Number->format($service->id) ?></td>
                <td><?= $service->has('user') ? $this->Html->link($service->user->id, ['controller' => 'Users', 'action' => 'view', $service->user->id]) : '' ?></td>
                <td><?= h($service->name) ?></td>
                <td><?= h($service->type) ?></td>
                <td><?= h($service->customer_type) ?></td>
                <td><?= h($service->processing_time) ?></td>
                <td><?= h($service->eservice) ?></td>
                <td><?= h($service->access_url) ?></td>
                <td><?= h($service->technology) ?></td>
                <td><?= $this->Number->format($service->no_of_user) ?></td>
                <td><?= h($service->access_point) ?></td>
                <td><?= h($service->payment) ?></td>
                <td><?= h($service->focal_person_name) ?></td>
                <td><?= h($service->focal_person_designation) ?></td>
                <td><?= h($service->focal_person_phone) ?></td>
                <td><?= h($service->focal_person_email) ?></td>
                <td><?= $this->Number->format($service->updated_by) ?></td>
                <td><?= h($service->created_at) ?></td>
                <td><?= h($service->updated_at) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $service->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $service->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $service->id], ['confirm' => __('Are you sure you want to delete # {0}?', $service->id)]) ?>
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
