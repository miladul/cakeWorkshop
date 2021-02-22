<?php
//status find
$statusArr = [
    '0'=>'Inactive',
    '1'=>'Active'
];

?>


<div class="row mt-5">
    <div class="col-sm-10 mx-auto">
        <h3>
            <?= h($organization->name) ?>
            <?= $this->Html->link(__('Back'), ['controller'=>'organizations','action' => 'index'],['class'=>'btn btn-danger float-right ml-3']) ?>
           </h3>
        <table class="vertical-table">
            <tr>
                <th scope="row"><?= __('Organization Name') ?></th>
                <td><?= h($organization->name) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Organization Type') ?></th>
                <td><?= h($organization->organization_type) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Focal Person Name') ?></th>
                <td><?= h($organization->focal_person_name) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Focal Person Designation') ?></th>
                <td><?= h($organization->focal_person_designation) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Focal Person Phone') ?></th>
                <td><?= h($organization->focal_person_phone) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('No Of Brances') ?></th>
                <td><?= $this->Number->format($organization->no_of_brances) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Status') ?></th>
                <td><?= $statusArr[$this->Number->format($organization->status)] ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Created At') ?></th>
                <td><?= h($organization->created_at) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Updated At') ?></th>
                <td><?= h($organization->updated_at) ?></td>
            </tr>
        </table>
    </div>
</div>
<div class="row">
    <div class="col-sm-10 mx-auto">
        <h4>
            All Services of <sapa style="color: #3a945b"><?= h($organization->name) ?></sapa>
        </h4>
        <table cellpadding="0" cellspacing="0" class="table-bordered table-striped">
            <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('SL') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('type') ?></th>
                <th scope="col"><?= $this->Paginator->sort('eservice') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Access_url') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Technology') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Access Point') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Payment') ?></th>
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
                    <td><?= h($service->access_url) ?></td>
                    <td><?= h($service->technology) ?></td>
                    <td><?= h($service->access_point) ?></td>
                    <td><?= h($service->payment) ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>


