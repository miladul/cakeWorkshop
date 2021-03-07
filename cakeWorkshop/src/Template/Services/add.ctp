<div class="row mt-5">
    <div class="col-sm-10 mx-auto">
        <h3>
            Add New Service
            <?= $this->Html->link(__('Back'), ['controller'=>'users','action' => 'user-dashboard'],['class'=>'btn btn-danger float-right ml-3']) ?>
            <?= $this->Html->link(__('My Services'), ['controller'=>'users','action' => 'user-dashboard'],['class'=>'btn btn-secondary float-right']) ?>
        </h3>
        <?= $this->Form->create($service,['id'=>'element_form']) ?>
        <fieldset>
            <legend class="mb-4"><?= __('') ?></legend>
            <p class="text-center bg-dark text-white">All field are mandatory, Please fill up all required fields</p>
            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Service Name  </label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" name="name" id="name" placeholder="Enter service name">
                </div>
                <label for="" class="col-sm-2 col-form-label">Service Type </label>
                <div class="col-sm-4 type_error">
                    <input name="type[]" type="checkbox" value="G2G">
                    <label class="form-check-label">
                        G2G
                    </label>
                    <input name="type[]" class="" type="checkbox" value="G2C">
                    <label class="form-check-label">
                        G2C
                    </label>
                    <input name="type[]" class="" type="checkbox" value="G2B">
                    <label class="form-check-label">
                        G2B
                    </label>
                </div>
            </div>
            <div class="form-group row mt-2">
                <label for="" class="col-sm-2 col-form-label">Customer Type </label>
                <div class="col-sm-4">
                    <input type="text" name="customer_type" class="form-control" id="customer-type" placeholder="Enter customer type">
                </div>
                <label for="" class="col-sm-2 col-form-label">Processing Time </label>
                <div class="col-sm-3">
                    <input type="text" name="processing_time" class="form-control" id="processing-time" placeholder="e.g - 30Days">
                </div>
                <label for="" class="col-sm-1 col-form-label">Days</label>
            </div>
            <div class="form-group row mt-2">
                <label for="" class="col-sm-2 col-form-label">E-Service?</label>
                <div class="col-sm-4">
                    <input type="radio" name="eservice" class="choice" id="eservice" value="yes" />Yes&nbsp;&nbsp;&nbsp;
                    <input type="radio" name="eservice" class="choice" id="eservice" value="no" />No&nbsp;
                </div>
                <label for="" class="col-sm-2 col-form-label">Access URL</label>
                <div class="col-sm-4">
                    <input type="text" name="access_url" class="form-control textfield" id="access-url" placeholder="Enter URL" disabled>
                </div>

            </div>
            <div class="form-group row mt-2">
                <label for="" class="col-sm-2 col-form-label">Technology</label>
                <div class="col-sm-10">
                    <div>
                        <input name="technology[]" class="textfield" type="checkbox" value="PHP" id="" disabled>
                        <label class="form-check-label" for="">
                            PHP
                        </label>
                        <input name="technology[]" class="textfield" type="checkbox" value="Laravel" id="" disabled>
                        <label class="form-check-label" for="">
                            Laravel
                        </label>
                        <input name="technology[]" class="textfield" type="checkbox" value="CodeIgniter" id="" disabled>
                        <label class="form-check-label" for="">
                            CodeIgniter
                        </label>
                        <input name="technology[]" class="textfield" type="checkbox" value="CakePHP" id="" disabled>
                        <label class="form-check-label" for="">
                            CakePHP
                        </label>
                    </div>
                    <div>
                        <input name="technology[]" class="textfield" type="checkbox" value="Python" id="" disabled>
                        <label class="form-check-label" for="">
                            Python
                        </label>
                        <input name="technology[]" class="textfield" type="checkbox" value="Django" id="" disabled>
                        <label class="form-check-label" for="">
                            Django
                        </label>
                        <input name="technology[]" class="textfield" type="checkbox" value="Flask" id="" disabled>
                        <label class="form-check-label" for="">
                            Flask
                        </label>
                    </div>
                    <div>
                        <input name="technology[]" class="textfield" type="checkbox" value="JAVA" id="" disabled>
                        <label class="form-check-label" for="">
                            JAVA
                        </label>
                        <input name="technology[]" class="textfield" type="checkbox" value="ASP/ASP.NET" id="" disabled>
                        <label class="form-check-label" for="">
                            ASP/ASP.NET
                        </label>
                        <input name="technology[]" class="textfield" type="checkbox" value="C/C++" id="" disabled>
                        <label class="form-check-label" for="">
                            C/C++
                        </label>
                        <input name="technology[]" class="textfield" type="checkbox" value="C#" id="" disabled>
                        <label class="form-check-label" for="">
                            C#
                        </label>
                        <input name="technology[]" class="textfield" type="checkbox" value="Ruby" id="" disabled>
                        <label class="form-check-label" for="">
                            Ruby
                        </label>
                    </div>
                    <div>
                        <input name="technology[]" class="textfield" type="checkbox" value="JavaScript" id="" disabled>
                        <label class="form-check-label" for="">
                            JavaScript
                        </label>
                        <input name="technology[]" class="textfield" type="checkbox" value="jQuery" id="" disabled>
                        <label class="form-check-label" for="">
                            jQuery
                        </label>
                        <input name="technology[]" class="textfield" type="checkbox" value="Ajax" id="" disabled>
                        <label class="form-check-label" for="">
                            Ajax
                        </label>
                        <input name="technology[]" class="textfield" type="checkbox" value="NodeJS" id="" disabled>
                        <label class="form-check-label" for="">
                            NodeJS
                        </label>
                        <input name="technology[]" class="textfield" type="checkbox" value="VeuJS" id="" disabled>
                        <label class="form-check-label" for="">
                            VeuJS
                        </label>
                        <input name="technology[]" class="textfield" type="checkbox" value="Angular" id="" disabled>
                        <label class="form-check-label" for="">
                            Angular
                        </label>
                    </div>
                    <div>
                        <input name="technology[]" class="textfield" type="checkbox" value="React Native" id="" disabled>
                        <label class="form-check-label" for="">
                            React Native
                        </label>
                        <input name="technology[]" class="textfield" type="checkbox" value="Flutter" id="" disabled>
                        <label class="form-check-label" for="">
                            Flutter
                        </label>
                        <input name="technology[]" class="textfield" type="checkbox" value="JQuery Mobile" id="" disabled>
                        <label class="form-check-label" for="">
                            JQuery Mobile
                        </label>
                        <input name="technology[]" class="textfield" type="checkbox" value="Ionic" id="" disabled>
                        <label class="form-check-label" for="">
                            Ionic
                        </label>
                        <input name="technology[]" class="textfield" type="checkbox" value="Mobile Angular UI" id="" disabled>
                        <label class="form-check-label" for="">
                            Mobile Angular UI
                        </label>
                        <input name="technology[]" class="textfield" type="checkbox" value="NativeScript" id="" disabled>
                        <label class="form-check-label" for="">
                            NativeScript
                        </label>


                    </div>
                    <div>
                        <input name="technology[]" class="textfield" type="checkbox" value="MySql" id="" disabled="">
                        <label class="form-check-label" for="">
                            MySQL
                        </label>
                        <input name="technology[]" class="textfield" type="checkbox" value="Microsoft SQL Server" id="" disabled="">
                        <label class="form-check-label" for="">
                            Microsoft SQL Server
                        </label>
                        <input name="technology[]" class="textfield" type="checkbox" value="Oracle Database" id="" disabled="">
                        <label class="form-check-label" for="">
                            Oracle Database
                        </label>
                        <input name="technology[]" class="textfield" type="checkbox" value="SQLite" id="" disabled="">
                        <label class="form-check-label" for="">
                            SQLite
                        </label>
                        <input name="technology[]" class="textfield" type="checkbox" value="MongoDB" id="" disabled="">
                        <label class="form-check-label" for="">
                            MongoDB
                        </label>
                        <input name="technology[]" class="textfield" type="checkbox" value="MariaDB" id="" disabled="">
                        <label class="form-check-label" for="">
                            MariaDB
                        </label>
                        <input name="technology[]" class="textfield" type="checkbox" value="Laragon" id="" disabled="">
                        <label class="form-check-label" for="">
                            Laragon
                        </label>
                    </div>
                    <div>
                        <input name="technology[]" class="textfield" type="checkbox" value="HTML" id="" disabled>
                        <label class="form-check-label" for="">
                            HTML
                        </label>
                        <input name="technology[]" class="textfield" type="checkbox" value="CSS" id="" disabled>
                        <label class="form-check-label" for="">
                            CSS
                        </label>
                        <input name="technology[]" class="textfield" type="checkbox" value="WordPress" id="" disabled>
                        <label class="form-check-label" for="">
                            WordPress
                        </label>
                        <input name="technology[]" class="textfield" type="checkbox" value="Joomla" id="" disabled>
                        <label class="form-check-label" for="">
                            Joomla
                        </label>
                        <input name="technology[]" class="textfield" type="checkbox" value="Drupal" id="" disabled>
                        <label class="form-check-label" for="">
                            Drupal
                        </label>
                        <input name="technology[]" class="textfield" type="checkbox" value="WooCommerce" id="" disabled>
                        <label class="form-check-label" for="">
                            WooCommerce
                        </label>
                        <input name="technology[]" class="textfield" type="checkbox" value="October" id="" disabled>
                        <label class="form-check-label" for="">
                            October
                        </label>
                        <input name="technology[]" class="textfield" type="checkbox" value="Voyager" id="" disabled>
                        <label class="form-check-label" for="">
                            Voyager
                        </label>
                    </div>
                </div>
            </div>
            <div class="form-group row mt-2">
                <label for="" class="col-sm-2 col-form-label">No Of Users</label>
                <div class="col-sm-4">
                    <input type="number" name="no_of_user" class="form-control textfield" id="" placeholder="" disabled>
                </div>
                <label for="" class="col-sm-2 col-form-label">Major Features</label>
                <div class="col-sm-4">
                    <textarea name="major_features" class="form-control textfield" disabled></textarea>
                </div>
            </div>
            <div class="form-group row mt-2">
                <label for="access-point" class="col-sm-2 col-form-label">Access Point</label>
                <div class="col-sm-4 type_error">
                    <input name="access_point[]" type="checkbox" value="Portal" class="textfield" disabled>
                    <label class="form-check-label">
                        Portal
                    </label>
                    <input name="access_point[]" type="checkbox" value="UDC" class="textfield" disabled>
                    <label class="form-check-label">
                        UDC
                    </label>
                    <input name="access_point[]" type="checkbox" value="333" class="textfield" disabled>
                    <label class="form-check-label">
                        333
                    </label>
                </div>
                <label for="payment" class="col-sm-2 col-form-label">Payment Method</label>
                <div class="col-sm-4">
                    <input name="payment[]" class="" type="checkbox" value="Free" id="payment_free">
                    <label class="form-check-label" for="">
                        Free
                    </label>
                    <input name="payment[]" class="payment_checkbox" type="checkbox" value="MFS" id="">
                    <label class="form-check-label" for="">
                        MFS
                    </label>
                    <input name="payment[]" class="payment_checkbox" type="checkbox" value="Online Banking" id="">
                    <label class="form-check-label" for="">
                        Online Banking &nbsp;&nbsp;&nbsp;
                    </label>
                    <input name="payment[]" class="payment_checkbox" type="checkbox" value="Payment Gateway" id="">
                    <label class="form-check-label" for="">
                        Payment Gateway
                    </label>
                    <input name="payment[]" class="payment_checkbox" type="checkbox" value="E-challan" id="">
                    <label class="form-check-label" for="">
                        E-challan &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    </label>
                    <input name="payment[]" class="payment_checkbox" type="checkbox" value="Challan" id="">
                    <label class="form-check-label" for="">
                        Challan
                    </label>
                    <input name="payment[]" class="payment_checkbox" type="checkbox" value="Cash" id="">
                    <label class="form-check-label" for="">
                        Cash
                    </label>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-2">Focal Person </div>
                <div class="form-group col-md-5">
                    <input type="text" name="focal_person_name" class="form-control" id="" placeholder="Name">
                </div>
                <div class="form-group col-md-5">
                    <input type="text" name="focal_person_designation" class="form-control" id="" placeholder="Designation">
                </div>
                <div class="form-group col-md-2"></div>
                <div class="form-group col-md-5">
                    <input type="text" name="focal_person_phone" class="form-control" id="" placeholder="Phone">
                </div>
                <div class="form-group col-md-5">
                    <input type="email" name="focal_person_email" class="form-control" id="" placeholder="Email">
                </div>
            </div>
        </fieldset>
        <?= $this->Form->button(__('Submit'),['class'=>'btn btn-info float-right']) ?>
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
                //$('#string').html('Test Welcome');
            }
            else
            {
                $('.textfield').prop('disabled',false);
            }
        });


        $(document).on('click','#payment_free',function(){
            //$('.payment_checkbox').prop('disabled',true);
            if($('.payment_checkbox').prop('disabled')==true){
                $('.payment_checkbox').prop('disabled',false);
            }else{
                $('.payment_checkbox').prop('disabled',true);
            }
        });

        /*$(document).on('click','#payment_free',function(){
            $('.payment_checkbox').prop('disabled',true);
        });*/





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

            'technology[]':{
                required: true,
            },
            'no_of_user':{
                required: true,
            },
            'major_features':{
                required: true,
            },
            'access_point[]':{
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
            }
        },
        messages:{
            name:{
                required: 'Please enter a name',
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
            technology:{
                required: 'Please select minimum one technology',
            },
            no_of_user:{
                required: 'Enter no of users',
            },
            major_features:{
                required: 'Enter service major features',
            },
            access_point:{
                required: 'Please select access point',
            },
            payment:{
                required: 'Please select minimum one payment method',
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


