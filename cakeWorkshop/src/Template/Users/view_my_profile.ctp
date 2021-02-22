<div class="row mt-5">
    <div class="col-sm-6 mx-auto">
        <h3>
            </i>My Profile
            <?= $this->Html->link(__('Back'), ['controller'=>'users','action' => 'user-dashboard'],['class'=>'btn btn-danger float-right ml-3']) ?>
            <?= $this->Html->link(__('Edit Profile'), ['controller'=>'users','action' => 'edit',$user->id],['class'=>'btn btn-danger float-right ml-3']) ?>
            <?= $this->Html->link(__('Password Change'), ['controller'=>'Users','action' => 'change-user-password'],['class'=>'btn btn-secondary float-right ml-3']) ?>

        </h3>
        <table class="vertical-table">
            <tr>
                <th scope="row"><?= __('Email') ?></th>
                <td><?= h($user->username) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Status') ?></th>
                <td><?= $user->status=='1'?'Active':'Inactive' ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Active From') ?></th>
                <td><?= h($user->created_at) ?></td>
            </tr>
        </table>
    </div>
</div>

