<?php
//status find
//pr($services);
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
    <div class="col-sm-1"></div>
    <div class="col-sm-11">

    </div>
</div>

<div class="service_view_table table-responsive">
    <h4>
        All Services of <sapa style="color: #3a945b"><?= h($organization->name) ?></sapa>
    </h4>
    <div class="">
        <table class="table table-bordered table-striped">
            <thead>
            <tr>
                <th scope="col" width="4%"><?= $this->Paginator->sort('SL') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('type') ?></th>
                <th scope="col"><?= $this->Paginator->sort('customer_type') ?></th>
                <th scope="col"><?= $this->Paginator->sort('processing_time') ?></th>
                <th scope="col" width="5%"><?= $this->Paginator->sort('eservice') ?></th>
                <th scope="col" width="4%"><?= $this->Paginator->sort('Access_url') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Technology') ?></th>
                <th scope="col" width="4%"><?= $this->Paginator->sort('no_of_user') ?></th>
                <th scope="col" ><?= $this->Paginator->sort('major_features') ?></th>
                <th scope="col" ><?= $this->Paginator->sort('Access Point') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Payment') ?></th>
                <th scope="col" ><?= $this->Paginator->sort('Focal Person') ?></th>
                <th scope="col" ><?= $this->Paginator->sort('Designation') ?></th>
                <th scope="col" ><?= $this->Paginator->sort('Phone') ?></th>
                <th scope="col" ><?= $this->Paginator->sort('Email') ?></th>
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
                    <td><?= h($service->customer_type) ?></td>
                    <td><?= h($service->processing_time) ?></td>
                    <td><?= h($service->eservice) ?></td>
                    <td><a href="http://<?= $service->access_url ?>" target="_blank">URL</a></td>
                    <td><?= h($service->technology) ?></td>
                    <td><?= h($service->no_of_user) ?></td>
                    <td><?= h($service->major_features) ?></td>
                    <td><?= h($service->access_point) ?></td>
                    <td><?= h($service->payment) ?></td>
                    <td><?= h($service->focal_person_name) ?></td>
                    <td><?= h($service->focal_person_designation) ?></td>
                    <td><?= h($service->focal_person_phone) ?></td>
                    <td><?= h($service->focal_person_email) ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<style>
    .service_view_table{
        padding: 25px;
    }
    .service_view_table th{

    }
</style>


