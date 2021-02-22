<div class="row mt-5">
    <div class="col-sm-10 mx-auto">
        <h3>
            Edit Service
            <?= $this->Html->link(__('Back'), ['controller'=>'users','action' => 'user-dashboard'],['class'=>'btn btn-danger float-right ml-3']) ?>
            <?= $this->Html->link(__('My Services'), ['controller'=>'services','action' => 'user-dashboard'],['class'=>'btn btn-secondary float-right']) ?>
        </h3>
        <?= $this->Form->create($service,['id'=>'element_form']) ?>
        <fieldset>
            <legend class="mb-4"><?= __('') ?></legend>
            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Service Name</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" name="name" id="name" value="<?= !empty($service->name)? $service->name:'';?>" placeholder="Enter service name">
                </div>
                <label for="" class="col-sm-2 col-form-label">Service Type</label>
                <?php
                if(!empty($service->type)){
                    $type = explode(',',$service->type);
                }
                ?>
                <div class="col-sm-4">
                    <input name="type[]" class="" type="checkbox" value="G2G" id="" <?= (in_array('G2G',$type))?'checked':''?> />
                    <label class="form-check-label" for="">
                        G2G
                    </label>
                    <input name="type[]" class="" type="checkbox" value="G2C" id="" <?= (in_array('G2C',$type))?'checked':''?> >
                    <label class="form-check-label" for="">
                        G2C
                    </label>
                    <input name="type[]" class="" type="checkbox" value="G2B" id="" <?= (in_array('G2B',$type))?'checked':''?> >
                    <label class="form-check-label" for="">
                        G2B
                    </label>
                </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-sm-2 col-form-label">Customer Type</label>
                <div class="col-sm-4">
                    <input type="text" name="customer_type" class="form-control" id="customer-type" value="<?= !empty($service->customer_type)? $service->customer_type:'';?>" placeholder="Enter customer type">
                </div>
                <label for="" class="col-sm-2 col-form-label">Processing Time</label>
                <div class="col-sm-3">
                    <input type="text" name="processing_time" class="form-control" id="processing-time" value="<?= !empty($service->processing_time)? $service->processing_time:'';?>" placeholder="">
                </div>
                <label for="" class="col-sm-1 col-form-label">Days</label>
            </div>
            <div class="form-group row mt-2">
                <label for="" class="col-sm-2 col-form-label">E-Service?</label>
                <div class="col-sm-4">
                    <input type="radio" name="eservice" class="choice" id="eservice" value="yes" <?= ($service->eservice=='yes')? 'checked':'';?> />Yes&nbsp;&nbsp;&nbsp;
                    <input type="radio" name="eservice" class="choice" id="eservice" value="no" <?= ($service->eservice=='no')? 'checked':'';?> />No&nbsp;
                </div>
                <label for="" class="col-sm-2 col-form-label">Access URL</label>
                <div class="col-sm-4">
                    <input type="text" name="access_url" class="form-control textfield" id="access-url" value="<?= !empty($service->access_url)? $service->access_url:'';?>" placeholder="Enter URL" <?= ($service->eservice=='no')? 'disabled':'';?> >
                </div>
            </div>
            <div class="form-group row mt-2">
                <label for="" class="col-sm-2 col-form-label">Technology</label>
                <?php
                if(!empty($service->technology)){
                    $technology = explode(',',$service->technology);
                    //echo $service->no_of_user;
                    //pr($service);die;
                }
                ?>
                <div class="col-sm-4">
                    <input name="technology[]" class="textfield" type="checkbox" value="PHP" id="" <?= (!empty($service->technology)?(in_array('PHP',$technology))?'checked':'':'')?> <?= ($service->eservice=='no')? 'disabled':'';?>>
                    <label class="form-check-label" for="">
                        PHP
                    </label>
                    <input name="technology[]" class="textfield" type="checkbox" value="JAVA" id="" <?= (!empty($service->technology)?(in_array('JAVA',$technology))?'checked':'':'')?> <?= ($service->eservice=='no')? 'disabled':'';?> >
                    <label class="form-check-label" for="">
                        JAVA
                    </label>
                    <input name="technology[]" class="textfield" type="checkbox" value="Python" id="" <?= (!empty($service->technology)?(in_array('Python',$technology))?'checked':'':'')?> <?= ($service->eservice=='no')? 'disabled':'';?> >
                    <label class="form-check-label" for="">
                        Python
                    </label>
                    <input name="technology[]" class="textfield" type="checkbox" value="MySql" id="" <?= (!empty($service->technology)?(in_array('MySql',$technology))?'checked':'':'')?> <?= ($service->eservice=='no')? 'disabled':'';?> >
                    <label class="form-check-label" for="">
                        MySql
                    </label>
                    <input name="technology[]" class="textfield" type="checkbox" value="JavaScript" id="" <?= (!empty($service->technology)?(in_array('JavaScript',$technology))?'checked':'':'')?> <?= ($service->eservice=='no')? 'disabled':'';?> >
                    <label class="form-check-label" for="">
                        JavaScript
                    </label>

                    <input name="technology[]" class="textfield" type="checkbox" value="ASP/ASP.NET" id="" <?= (!empty($service->technology)?(in_array('ASP/ASP.NET',$technology))?'checked':'':'')?> <?= ($service->eservice=='no')? 'disabled':'';?>>
                    <label class="form-check-label" for="">
                        ASP/ASP.NET
                    </label>
                    <input name="technology[]" class="textfield" type="checkbox" value="C#" id="" <?= (!empty($service->technology)?(in_array('C#',$technology))?'checked':'':'')?> <?= ($service->eservice=='no')? 'disabled':'';?>>
                    <label class="form-check-label" for="">
                        C#
                    </label>
                    <input name="technology[]" class="textfield" type="checkbox" value="C/C++" id="" <?= (!empty($service->technology)?(in_array('C/C++',$technology))?'checked':'':'')?> <?= ($service->eservice=='no')? 'disabled':'';?>>
                    <label class="form-check-label" for="">
                        C/C++
                    </label>
                    <input name="technology[]" class="textfield" type="checkbox" value="Ruby" id="" <?= (!empty($service->technology)?(in_array('Ruby',$technology))?'checked':'':'')?> <?= ($service->eservice=='no')? 'disabled':'';?>>
                    <label class="form-check-label" for="">
                        Ruby
                    </label>
                    <input name="technology[]" class="textfield" type="checkbox" value="SQLite" id="" <?= (!empty($service->technology)?(in_array('SQLite',$technology))?'checked':'':'')?> <?= ($service->eservice=='no')? 'disabled':'';?>>
                    <label class="form-check-label" for="">
                        SQLite
                    </label>
                    <input name="technology[]" class="textfield" type="checkbox" value="Django" id="" <?= (!empty($service->technology)?(in_array('Django',$technology))?'checked':'':'')?> <?= ($service->eservice=='no')? 'disabled':'';?>>
                    <label class="form-check-label" for="">
                        Django
                    </label>
                    <input name="technology[]" class="textfield" type="checkbox" value="NodeJS" id="" <?= (!empty($service->technology)?(in_array('NodeJS',$technology))?'checked':'':'')?> <?= ($service->eservice=='no')? 'disabled':'';?>>
                    <label class="form-check-label" for="">
                        NodeJS
                    </label>
                    <input name="technology[]" class="textfield" type="checkbox" value="VeuJS" id="" <?= (!empty($service->technology)?(in_array('VeuJS',$technology))?'checked':'':'')?> <?= ($service->eservice=='no')? 'disabled':'';?>>
                    <label class="form-check-label" for="">
                        VeuJS
                    </label>
                    <input name="technology[]" class="textfield" type="checkbox" value="Angular" id="" <?= (!empty($service->technology)?(in_array('Angular',$technology))?'checked':'':'')?> <?= ($service->eservice=='no')? 'disabled':'';?>>
                    <label class="form-check-label" for="">
                        Angular
                    </label>
                    <input name="technology[]" class="textfield" type="checkbox" value="CodeIgniter" id="" <?= (!empty($service->technology)?(in_array('CodeIgniter',$technology))?'checked':'':'')?> <?= ($service->eservice=='no')? 'disabled':'';?>>
                    <label class="form-check-label" for="">
                        CodeIgniter
                    </label>
                </div>
                <label for="" class="col-sm-2 col-form-label">No Of Users</label>
                <div class="col-sm-4">
                    <input type="number" name="no_of_user" class="form-control textfield" id="" value="<?= !empty($service->no_of_user)? $service->no_of_user:'';?>" <?= ($service->eservice=='no')? 'disabled':'' ?> />
                </div>
            </div>
            <div class="form-group row mt-2">
                <label for="" class="col-sm-2 col-form-label">Major Features</label>
                <div class="col-sm-10">
                    <textarea name="major_features" class="form-control textfield" <?= ($service->eservice=='no')? 'disabled':'';?>><?= !empty($service->major_features)? $service->major_features:'';?></textarea>
                </div>
            </div>
            <div class="form-group row mt-2">
                <label for="access-point" class="col-sm-2 col-form-label">Access Point</label>
                <?php
                //echo $service->access_point;
                if(!empty($service->access_point)){
                    $ap = explode(',',$service->access_point);
                    //pr($ap);die;

                    //
                }
                ?>
                <div class="col-sm-4 type_error">
                    <input name="access_point[]" class="textfield" type="checkbox" value="Portal" <?= (!empty($service->access_point)?(in_array('Portal',$ap))?'checked':'':'')?> >
                    <label class="form-check-label">
                        Portal
                    </label>
                    <input name="access_point[]" class="textfield" type="checkbox" value="UDC" <?= (!empty($service->access_point)?(in_array('UDC',$ap))?'checked':'':'')?> >
                    <label class="form-check-label">
                        UDC
                    </label>
                    <input name="access_point[]" class="textfield" type="checkbox" value="333" <?= (!empty($service->access_point)?(in_array('333',$ap))?'checked':'':'')?> >
                    <label class="form-check-label">
                        333
                    </label>
                </div>
                <label for="payment" class="col-sm-2 col-form-label">Payment</label>
                <?php
                $payment = explode(',',$service->payment);

                //pr($payment);die;
                ?>
                <div class="col-sm-4">
                    <input name="payment[]" class="" type="checkbox" value="Free" id="payment_free" <?= (in_array('Free',$payment))?'checked':'' ?> >
                    <label class="form-check-label" for="">
                        Free
                    </label>
                    <input name="payment[]" class="payment_checkbox" type="checkbox" value="MFS" id="" <?= (in_array('MFS',$payment))?'checked':'' ?> >
                    <label class="form-check-label" for="">
                        MFS
                    </label>
                    <input name="payment[]" class="payment_checkbox" type="checkbox" value="Online Banking" id="" <?= (in_array('Online Banking',$payment))?'checked':'' ?> >
                    <label class="form-check-label" for="">
                        Online Banking
                    </label>
                    <input name="payment[]" class="payment_checkbox" type="checkbox" value="Payment Gateway" id="" <?= (in_array('Payment Gateway',$payment))?'checked':'' ?> >
                    <label class="form-check-label" for="">
                        Payment Gateway
                    </label>
                    <input name="payment[]" class="payment_checkbox" type="checkbox" value="E-challan" id="" <?= (in_array('E-challan',$payment))?'checked':'' ?> >
                    <label class="form-check-label" for="">
                        E-challan
                    </label>
                    <input name="payment[]" class="payment_checkbox" type="checkbox" value="Challan" id="" <?= (in_array('Challan',$payment))?'checked':'' ?> >
                    <label class="form-check-label" for="">
                        Challan
                    </label>
                    <input name="payment[]" class="payment_checkbox" type="checkbox" value="Cash" id="" <?= (in_array('Cash',$payment))?'checked':'' ?> >
                    <label class="form-check-label" for="">
                        Cash
                    </label>
                </div>
            </div>
            <div class="form-group row mt-2">

            </div>
            <div class="form-row">
                <div class="form-group col-md-2">Focal Person</div>
                <div class="form-group col-md-5">
                    <input type="text" name="focal_person_name" class="form-control" value="<?= !empty($service->focal_person_name)? $service->focal_person_name:'';?>" id="" placeholder="Name">
                </div>
                <div class="form-group col-md-5">
                    <input type="text" name="focal_person_designation" class="form-control" value="<?= !empty($service->focal_person_designation)? $service->focal_person_designation:'';?>" id="" placeholder="Designation">
                </div>
                <div class="form-group col-md-2"></div>
                <div class="form-group col-md-5">
                    <input type="text" name="focal_person_phone" class="form-control" value="<?= !empty($service->focal_person_phone)? $service->focal_person_phone:'';?>" id="" placeholder="Phone">
                </div>
                <div class="form-group col-md-5">
                    <input type="email" name="focal_person_email" class="form-control" value="<?= !empty($service->focal_person_email)? $service->focal_person_email:'';?>" id="" placeholder="Email">
                </div>
            </div>
        </fieldset>
        <?= $this->Form->button(__('Update Service'),['class'=>'btn btn-info float-right']) ?>
        <?= $this->Form->end() ?>


    </div>
</div>


<?php $this->append('script'); ?>
<script>
    $(document).ready(function(){
        $(document).on('click','.choice',function(){
            if($(this).val() == 'no')
            {
                $('.textfield').prop('disabled',true);
                //$('.textfield').css({"display": "none"});
            }
            else
            {
                $('.textfield').prop('disabled',false);
            }
        });
/*
        if($('#payment_free').prop('disabled')==false){
            $('.payment_checkbox').prop('disabled',true);
        }else{
            $('.payment_checkbox').prop('disabled',false);
        }
        if($('.payment_checkbox').prop('checked')==true){
            $('#payment_free').prop('disabled',true);
        }else{
            $('#payment_free').prop('disabled',true);
        }*/

        //checked

        $(document).on('click','#payment_free',function(){
            if($('.payment_checkbox').prop('disabled')==true){
                $('.payment_checkbox').prop('disabled',false);
            }else{
                $('.payment_checkbox').prop('disabled',true);
            }
        });


    });
</script>
<style> label.error{color:red} </style>
<script type="text/javascript">
    $.validator.setDefaults({
        success: "valid"
    });
    $( "#element_form" ).validate({
        rules: {
            'name':{
                required: true,
                minlength: 4,
                maxlength: 20,
            },
            'type[]': {
                required: true,
            },
            'customer_type':{
                required: true,
            },
            'processing_time':{
                required: true,
            },
            'payment[]':{
                required: true,
            },
            'focal_person_name':{
                required: true,
            },
            'focal_person_designation':{
                required: true,
            },
            'focal_person_phone':{
                required: true,
            },
            'focal_person_email':{
                required: true,
            },
            'access_point[]':{
                required: true,
            }
        },
        messages:{
            name:{
                required: 'Please enter a name',
                minlength: 'Minimum 4 digit required',
                maxlength: 'Minimum 20 digit required'
            },
            type:{
                required: "You must check at least 1 box"

            },

            customer_type:{
                required: 'Please enter customer type',
            },
            processing_time:{
                required: 'Please enter processing time(E.g- 30 Days)',
            },
            payment:{
                required: 'Please select minimum one technology',
            },
            focal_person_name:{
                required: 'Please enter focal person name',
            },
            focal_person_designation:{
                required: 'Please enter focal person designation',
            },
            focal_person_phone:{
                required: 'Please enter focal person phone',
            },
            focal_person_email:{
                required: 'Please enter focal person email',
            },
            access_point:{
                required: 'Please select minimum one access point',
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





