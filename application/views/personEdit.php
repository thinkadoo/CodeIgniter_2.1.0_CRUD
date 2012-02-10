<!DOCTYPE html>
<html lang="en">
<head>
    <base href="<?php echo base_url(); ?>"/>
    <meta name="viewport" content="user-scalable=no, width=device-width"/>
    <title>CI CRUD</title>
    <meta charset="UTF-8">
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>
    <link href="css/docs.css" rel="stylesheet">
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>
<body>

<div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <a class="brand" href="">soapbox.io</a>
        </div>
    </div>
</div>

<div class="container">

    <header class="jumbotron subhead">
        <h1>CI CRUD</h1>

        <p class="lead">CodeIgniter CRUD.</p>
    </header>

    <h1><?php echo $title; ?></h1>
    <?php echo $message; ?>
    <form method="post" action="<?php echo $action; ?>">

        <fieldset>

        <div class="control-group" hidden="true">
            <label class="control-label" for="id">ID <span>*</span></label>

            <div class="controls docs-input-sizes">
                <input class="span4" id="id" type="text" name="id"
                       value="<?php echo set_value('id', $this->form_data->id); ?>"/>
            </div>
            <?php echo form_error('id'); ?>
        </div>

        <div class="control-group">
            <label class="control-label" for="name">Name <span>*</span></label>

            <div class="controls docs-input-sizes">
                <input class="span4" id="name" type="text" name="name"
                       value="<?php echo set_value('name', $this->form_data->name); ?>"/>
            </div>
            <?php echo form_error('name'); ?>
        </div>

        <div class="control-group">
            <label class="control-label" for="gender">Gender <span>*</span></label>

            <div class="controls docs-input-sizes">
                <input type="radio" id="gender" name="gender" value="M" <?php echo set_radio('gender', 'M', $this->form_data->gender == 'M'); ?>/> M
                <input type="radio" id="gender2" name="gender" value="F" <?php echo set_radio('gender', 'F', $this->form_data->gender == 'F'); ?>/> F
            </div>
            <?php echo form_error('gender'); ?>
        </div>

        <div class="control-group">
            <label class="control-label" for="dob">Birthday <span>*</span></label>

            <div class="controls docs-input-sizes">
                <input class="span4" id="dob" type="text" name="dob"
                       value="<?php echo set_value('dob', $this->form_data->dob); ?>"/>
            </div>
            <?php echo form_error('dob'); ?>
        </div>

        <div class="row">
            <div class="span4">
                <div class="well">
                    <input type="submit" value="Save"/>
                </div>
            </div>
        </div>

        </fieldset>

    </form>
    <br/>
    <?php echo $link_back; ?>
</div>
</body>
</html>