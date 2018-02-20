<div class="content">

    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
        <li class="breadcrumb-item active">Register</li>
    </ol>

    <div style="margin-top: 30px;"></div>
    <div class="container">

        <header class="page-header" id="pheader">
            <h1 class="page-title">Registration</h1>
        </header>

        <div id="newregistrationform" class="col-md-10 col-md-offset-1">
            <?php echo form_open('Addstudent/add')?>

            <div class="col-md-7">
                <label>First Name</label>
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                    <input type="text" class="form-control" name="firstname" id="firstname" placeholder="Lalanga" required></br>
                </div>

                <label>Last Name</label>
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                    <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Ariyasinghe" required></br>
                </div>
                <label>NIC</label>
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-address-book"></i></span>
                    <input type="text" class="form-control" name="nic" id="nic" placeholder="955111540V" required></br>
                </div>
                <label>Contact No.</label>
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                    <input type="text" class="form-control" name="contactno" id="contactno" placeholder="0332230188" required></br>
                </div>
                <label>Address</label>
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-list-alt"></i></span>
                    <input type="text" class="form-control" name="address" id="address" placeholder="address" required></br>
                </div>
                <br></br>
                <div class="form-group">
                    <button type="button" class="btn btn-success btn-md" id="submitbtn">Register</button>
                </div>
            </div>

            </form>

        </div>
    </div>
</div>

<script>
    $('#submitbtn').click(function(){

        var firstname=$('#firstname').val();
        var lastname=$('#lastname').val();
        var nic=$('#nic').val();
        var contactno=$('#contactno').val();
        var address=$('#address').val();


        $.ajax({
            type:'post',
            data:{'firstname':firstname,'lastname':lastname,'nic':nic,'contactno':contactno, 'address':address},
            url:'<?php echo base_url('Addstudent/add')?>',
            success:function(data){
                if($('#alert')!=null){
                    $('#alert').remove();
                }
                if(data=="success"){
                    $("<div id=\"alert\" class=\"alert alert-success col-md-10 col-md-offset-1\"><strong>Success!</strong>New Driver Successfully added to the system</div>").insertAfter('#pheader');

                    $('#firstname').val("");
                    $('#lastname').val("");
                    $('#nic').val("");
                    $('#contactno').val("");
                    $('#address').val("");
                    window.scrollTo(0,0);
                    //('#imageLink').val();
                }
                else{
                    $("<div id=\"alert\" class=\"alert alert-danger col-md-10 col-md-offset-1\"><strong>Error!</strong>"+data+"</div>").insertAfter('#pheader');
                    window.scrollTo(0,0);
                }
            }
        });
    });
</script>