<div class="content">

    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Dashboard / Subjects</a></li>
        <li class="breadcrumb-item active">Mathematics</li>
    </ol>

    <div style="margin-top: 30px;"></div>
    <div class="container">

        <header class="page-header" id="pheader">
            <h1 class="page-title">Questioners</h1>
        </header>

        <div id="newregistrationform" class="col-md-10 col-md-offset-1">
            <form>


            <div class="row">
                <div id="myDIV" class="col-lg-9">

                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-question-circle"></i></span>
                        <input type="text" class="form-control" name="firstname" id="firstname" required></br>

                    </div>

                        <button class="repeat">Click</button>

                </div>

                <div class="col-lg-2">
                    <div class="form-group">
                        <button type="button" class="btn btn-success btn-md" id="nextquestionbtn">Next</button>
                    </div>
                </div>
            </div>
            </form>

        </div>
    </div>
</div>

<script>
    //document.getElementById("spanUiqueId").innerHTML = 1;
    $(function () {
        $(".repeat").on('click', function (e) {

            e.preventDefault();
            //document.getElementById("spanUiqueId").innerHTML = 3;

            var $self = $(this);

            $self.before($self.prev('div').clone());
            //$self.remove();

        });
    });

</script>