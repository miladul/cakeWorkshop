<?php




if($authUser['role']=='admin'){
    $backLink = 'view/'.$organizations->id;;
    $controller = 'organizations';
}else{
    $backLink = 'user-dashboard';
    $controller = 'users';
}

?>


<div class="row mt-5">
    <div class="col-sm-8 mx-auto">
        <h3>
            <?= h($service->name) ?>
            <?= $this->Html->link(__('Back'), ['controller'=>$controller,'action' => $backLink],['class'=>'btn btn-danger float-right ml-3']) ?>
            <?= $this->Html->link(__('My Services'), ['controller'=>'services','action' => 'add'],['class'=>'btn btn-secondary float-right']) ?>
        </h3>
        <table class="vertical-table">
            <tr>
                <th scope="row"><?= __('Name') ?></th>
                <td><?= h($service->name) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Type') ?></th>
                <td><?= h($service->type) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Customer Type') ?></th>
                <td><?= h($service->customer_type) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Processing Time') ?></th>
                <td><?= h($service->processing_time) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Eservice') ?></th>
                <td><?= h($service->eservice) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Access Url') ?></th>
                <td><?= h($service->access_url) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Technology') ?></th>
                <td><?= h($service->technology) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Access Point') ?></th>
                <td><?= h($service->access_point) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Payment') ?></th>
                <td><?= h($service->payment) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Focal Person Name') ?></th>
                <td><?= h($service->focal_person_name) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Focal Person Designation') ?></th>
                <td><?= h($service->focal_person_designation) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Focal Person Phone') ?></th>
                <td><?= h($service->focal_person_phone) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Focal Person Email') ?></th>
                <td><?= h($service->focal_person_email) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('No Of User') ?></th>
                <td><?= $this->Number->format($service->no_of_user) ?></td>
            </tr>
        </table>
    </div>
</div>


