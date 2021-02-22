<div class="row mt-5">
    <div class="col-sm-8 mx-auto">
        <h3>
            My Services
            <?= $this->Html->link(__('Back'), ['controller'=>'users','action' => 'user-dashboard'],['class'=>'btn btn-danger float-right ml-3']) ?>
        </h3>
        <table cellpadding="0" cellspacing="0">
            <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('SL') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('type') ?></th>
                <th scope="col"><?= $this->Paginator->sort('eservice') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php
            $sl=0;

            foreach ($services as $service): ?>
                <tr>
                    <td><?= ++$sl; ?></td>
                    <td><?= h($service->name) ?></td>
                    <td><?= h($service->type) ?></td>
                    <td><?= h($service->eservice) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $service->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $service->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $service->id], ['confirm' => __('Are you sure you want to delete # {0}?', $service->id)]) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>


