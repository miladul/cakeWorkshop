<div class="row mt-5">
    <div class="col-sm-6 mx-auto">
        <h3>
            Add Organization
            <?= $this->Html->link(__('Back'), ['controller'=>'organizations','action' => 'index'],['class'=>'btn btn-danger float-right ml-3']) ?>
            </h3>

        <?= $this->Form->create($organization,['id'=>'element_form','class'=>'mt-3']) ?>
        <fieldset>
            <p class="text-center bg-dark text-white">All field are mandatory, Please fill up all required fields</p>
            <div class="row">
                <div class="col">
                    <label>Organization Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Enter Organization Name" required>
                </div>
                <div class="col">
                    <label>Organization Type</label>
                    <select name="organization_type" id="" onchange='CheckType(this.value);'>
                        <option>Select Organization Type</option>
                        <option value="Government ministry">Government ministry</option>
                        <option value="Government Department">Government Department</option>
                        <option value="Training Service Provider">Training Service Provider</option>
                        <option value="Industry Associations">Industry Associations</option>
                        <option value="others">others</option>
                    </select>

                    <label id="type-error" class="error" for="type">
                   <?php if(isset($org_type_error)){echo $org_type_error;} ?>
                    </label>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <input type="text" name="organization_type" id="organization_type" placeholder="Enter organization type" style='display:none;margin-top: -2px;'/>

                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label>Focal Person Name</label>
                    <input type="text" name="focal_person_name" class="form-control" placeholder="Enter Focal Person Name">
                </div>
                <div class="col">
                    <label>Focal Person Designation</label>
                    <input type="text" name="focal_person_designation" class="form-control" placeholder="Enter Focal Person Designation">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label>Focal Person Phone</label>
                    <input type="text" name="focal_person_phone" class="form-control" placeholder="Enter Focal Person Phone">
                </div>
                <div class="col">
                    <label>Focal Person Email</label>
                    <input type="text" name="focal_person_email" class="form-control" placeholder="Enter Focal Person Email">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label>No Of Branches</label>
                    <input type="text" name="no_of_brances" class="form-control" placeholder="Enter no of branches">
                </div>
            </div>
        </fieldset>
        <?= $this->Form->button(__('Submit'),['class'=>'btn btn-info float-right']) ?>
        <?= $this->Form->end() ?>
    </div>
</div>

<?php $this->append('script'); ?>
<script type="text/javascript">
    function CheckType(val){
        //content disable by js
        /*var element=document.getElementById('organization_type');
        if(val=='others')
            element.style.display='block';
        else
            element.style.display='none';*/

        //content disable by jQuery
        let element = $("#organization_type");
        if(val=='others')
            element.show().attr('disabled',false);
        else
            element.hide().attr('disabled', true);
    }

</script>
<script type="text/javascript">
    $.validator.setDefaults({
        success: "valid"
    });
    $( "#element_form" ).validate({
        rules: {
            'name':{
                required: true,
            },
            'organization_type': {
                required: true
            },
            'focal_person_name': {
                required: true
            },
            'focal_person_designation': {
                required: true
            },
            'focal_person_phone': {
                required: true,
                minlength: 11,
                maxlength:11,
            },
            'focal_person_email': {
                required: true,
                email:true,
            },
            'no_of_brances': {
                required: true,
            }
        },
        messages:{
            name:{
                required: 'Please enter organization name',
            },
            organization_type:{
                required: 'Please select organization type',
            },
            focal_person_name:{
                required: 'Please enter focal_person_name',
            },
            focal_person_designation:{
                required: 'Please enter focal_person_designation',
            },
            focal_person_phone:{
                required: 'Please enter focal_person_phone',
                minlength: 'Need minimum 11 digit',
                maxlength:'Need maximum 11 digit',
            },
            focal_person_email:{
                required: 'Please enter focal_person_email',
                email:"Enter valid email"
            },
            no_of_brances:{
                required: 'Please enter no_of_brances',
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
