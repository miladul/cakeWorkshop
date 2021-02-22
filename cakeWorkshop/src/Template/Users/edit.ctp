<div class="row mt-5">
    <div class="col-sm-4 mx-auto">
        <?php
        if($user['role']=='admin'){
            $backLink = 'admin';
            $headingText = 'Edit User Info';
        }else{
            $backLink = 'user-dashboard';
            $headingText = 'Edit My Profile';
        }
        ?>
        <h3 class="mb-3">
            <?=$headingText?>
            <?= $this->Html->link(__('Back'), ['controller'=>'users','action' => $backLink],['class'=>'btn btn-danger float-right ml-3']) ?>
            </h3>
                <?= $this->Form->create($user,['id'=>'element_form']) ?>
                <fieldset>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-4 col-form-label">User Email</label>
                        <div class="col-sm-8">
                            <input type="email" class="form-control" placeholder="New email" name="username" value="<?=(!empty($user->username)?$user->username:'')?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-4 col-form-label">Password</label>
                        <div class="col-sm-8">
                            <input type="password" class="form-control" placeholder="New Password" name="password">
                        </div>
                    </div>
                </fieldset>
                <?= $this->Form->button(__('Update'),['class'=>'btn btn-info mt-2 float-right']) ?>
                <?= $this->Form->end() ?>
    </div>
</div>

<?php $this->append('script'); ?>
<script type="text/javascript">
    $.validator.setDefaults({
        success: "valid"
    });
    $( "#element_form" ).validate({
        rules: {
            'username':{
                required: true,
                email:true,
            },
            'password': {
                required: true,
                minlength: 4,
                maxlength: 13,
            }
        },
        messages:{
            username:{
                required: 'Please enter email',
                email: 'Enter valid email',
            },
            password:{
                required: 'Please enter a password',
                minlength: 'Need minimum 4 digit',
                maxlength:  'Need maximum 13 digit',
            }
        },
        unhighlight: function(element, errorClass, validClass) {
            $(element).next('label.error').remove();
        },
        submitHandler: function(form) {
            form.submit();
        }
    });
</script>

<?php $this->end(); ?>
