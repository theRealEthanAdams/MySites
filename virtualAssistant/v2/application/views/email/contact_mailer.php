<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<!------ Include the above in your HEAD tag ---------->

<div class="container" style="padding-top:20px;">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="well well-sm">
                <form class="form-horizontal" action="" method="post">
                    <fieldset>
                        <legend class="text-center">Contact Mailer From ursvirtually.co.za</legend>

                        <!-- Name input-->
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="name"><b>First Name</b></label>
                            <div class="col-md-9">
                                <p><?php echo $firstname ?></p>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label" for="name"><b>Last Name</b></label>
                            <div class="col-md-9">
                                <p><?php echo $lastname ?></p>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label" for="name"><b>Phone</b></label>
                            <div class="col-md-9">
                                <p><?php echo $phone ?></p>
                            </div>
                        </div>

                        <!-- Email input-->
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="email"><b>E-mail</b></label>
                            <div class="col-md-9">
                                <p><?php echo $email ?></p>
                            </div>
                        </div>

                        <!-- Message body -->
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="message"><b>message</b></label>
                            <div class="col-md-9">
                                <p><?php echo $message ?></p>
                            </div>
                        </div>

                        <!-- Form actions -->
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>