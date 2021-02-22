<div class="row">
    <div class="col-sm-12 mt-5">
        <h3 class="text-center">Login Now</h3>
    </div>
    <div class="col-sm-4 mx-auto mt-5">
        <?= $this->Form->create('User',['id' => 'element_form'])?>
            <div class="form-group">
                <input type="email" class="form-control" name="username" id="" aria-describedby="emailHelp" placeholder="Enter email" required>
                </div>
            <div class="form-group">
                <input type="password" class="form-control" name="password" id="" placeholder="Password" required>
            </div>
            <button type="submit" class="btn btn-primary float-right">Login</button>
        <?= $this->Form->end() ?>
    </div>
</div>

<?php $this->append('script'); ?>
<style> label.error{color:red} </style>
<script type="text/javascript">
    $.validator.setDefaults({
        success: "valid"
    });
    $( "#element_form" ).validate({
        rules: {
            'username':{
                required: true,
                email:true,
                minlength: 4,
            },
            'password': {
                required: true,
                minlength: 4,
                maxlength: 13,
            }
        },
        messages:{
            username:{
                required: 'Please enter your email',
                email: 'Enter valid email',
                minlength: 'Minimum 4 digit required',
            },
            password:{
                required: 'Please enter your password',
                minlength: 'Minimum 4 digit required',
                maxlength: 'Maximum 13 digit required'
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
<?php $this->end() ?>
