<div class="row mt-5">
    <div class="col-sm-10 mx-auto">
        <h3>
            Organization List
            <?= $this->Html->link(__('Back'), ['controller'=>'users','action' => 'admin'],['class'=>'btn btn-danger float-right ml-3']) ?>
            <?= $this->Html->link(__('Add New Organization'), ['controller'=>'organizations','action' => 'add'],['class'=>'btn btn-info float-right ml-3']) ?>
        </h3>
        <table cellpadding="0" cellspacing="0">
            <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('SL') ?></th>
                <th scope="col"><?= $this->Paginator->sort('organization_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('type') ?></th>
                <th scope="col"><?= $this->Paginator->sort('focal_person_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('focal_person_designation') ?></th>
                <th scope="col"><?= $this->Paginator->sort('focal_person_phone') ?></th>
                <th scope="col"><?= $this->Paginator->sort('no_of_brances') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php
            $sl=0;
            foreach ($organizations as $organization): ?>
                <tr>
                    <td><?= ++$sl; ?></td>
                    <td><?= h($organization->name) ?></td>
                    <td><?= h($organization->organization_type) ?></td>
                    <td><?= h($organization->focal_person_name) ?></td>
                    <td><?= h($organization->focal_person_designation) ?></td>
                    <td><?= h($organization->focal_person_phone) ?></td>
                    <td><?= $this->Number->format($organization->no_of_brances) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $organization->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $organization->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $organization->id], ['confirm' => __('Are you sure you want to delete?')]) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

