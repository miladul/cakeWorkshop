<div class="row mt-5">

    <div class="col-sm-10 mx-auto">
        <h3>
            My Service List

            <?= $this->Html->link(__('Add New Service'), ['controller'=>'services','action' => 'add'],['class'=>'btn btn-info float-right ml-3']) ?>
            <?= $this->Html->link(__('View My Profile'), ['controller'=>'Users','action' => 'view-my-profile'],['class'=>'btn btn-primary float-right']) ?>
        </h3>

        <table class="mt-5">
            <thead>
            <tr>
                <th>SL</th>
                <th>Service Name</th>
                <th>Service Type</th>
                <th>E-Service</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $sl=0;

            foreach ($services as $service): ?>
            <tr>
                <td><?= ++$sl; ?></td>
                <td><?= $service->name ?></td>
                <td><?= $service->type ?></td>
                <td><?= $service->eservice ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller'=>'services','action' => 'view', $service->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller'=>'services','action' => 'edit', $service->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller'=>'services','action' => 'delete', $service->id], ['confirm' => __('Are you sure you want to delete # {0}?', $service->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
            </tbody>
        </table>


    </div>
</div>
