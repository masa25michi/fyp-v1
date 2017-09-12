<style>
    input[type=text] {
        width: 25%;
        box-sizing: border-box;
        border: 2px solid #ccc;
        border-radius: 4px;
        font-size: 16px;
        background-color: white;
        background-repeat: no-repeat;
        padding: 12px 20px 12px 40px;
        -webkit-transition: width 0.4s ease-in-out;
        transition: width 0.4s ease-in-out;
    }

    input[type=text]:focus {
        width: 100%;
    }
</style>

<div class="container-fluid text-center">
    <div class="row content">
        <div class="col-sm-2 sidenav ">
            <p><a href="<?php echo Uri::create('student/dashboard');?>">Dashboard</a></p>
            <p><a href="<?php echo Uri::create('student/course');?>">Course</a></p>
            <p><a href="<?php echo Uri::create('student/contact');?>">Contact</a></p>
            <p><a href="<?php echo Uri::create('student/setting');?>">Setting</a></p>
        </div>
        <div class="col-sm-8 text-left">
            <h1>Course</h1>
            <form>
                <div class="input-group margin-bottom-sm">
                    <span class="input-group-addon"><i class="fa fa-search fa-2x" aria-hidden="true" ></i></span>
                    <input id ='course_search' type="text" name="search" placeholder="Search Course Id Here">
                </div>
            </form>
            <br>
            <h3>Result</h3>
            <p id="list_result">No result...</p>
        </div>

        <div class="col-sm-2 sidenav">
            <div class="well">
                <p>ADS</p>
            </div>
            <div class="well">
                <p>ADS</p>
            </div>
        </div>
    </div>
</div>

<script>
    $('#course_search').on('input',function(e){
         $.post( "<?php echo Uri::create('student/course');?>", {value:$('#course_search').val() })
             .done(function( data ) {
                 $('#list_result').text(data);
             });

    });
</script>