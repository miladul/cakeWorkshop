<div class="row mt-5">
    <div class="col-sm-6 mx-auto">
        <h3>
            Change your password
            <?= $this->Html->link(__('Back'), ['controller'=>'users','action' => 'user-dashboard'],['class'=>'btn btn-danger float-right ml-3']) ?>
        </h3>
        <?= $this->Form->create('',['id'=>'element_form']) ?>
        <fieldset>
            <div class="form-group row mt-4">
                <label for="inputPassword" class="col-sm-4 col-form-label">New Password</label>
                <div class="col-sm-8">
                    <input type="password" class="form-control" placeholder="Enter New Password" name="password">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-4 col-form-label">Confirm Password</label>
                <div class="col-sm-8">
                    <input type="password" class="form-control" placeholder="Re-type New Password" name="cpassword">
                </div>
            </div>
        </fieldset>
        <?= $this->Form->button(__('Change password'),['class'=>'btn btn-info mt-2 float-right']) ?>
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
            'password':{
                required: true,
                minlength:4,
                maxlength:13,
            },
            'cpassword': {
                required: true,
                minlength: 4,
                maxlength: 13,
                //equalTo: "#password"
            }
        },
        messages:{
            password:{
                required: 'Please enter a password',
                minlength: 'Need minimum 4 digit',
                maxlength:  'Need maximum 13 digit',
            },
            cpassword:{
                required: 'Please enter confirm password',
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
