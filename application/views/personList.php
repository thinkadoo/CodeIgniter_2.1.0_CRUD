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

		<h1>People</h1>
		<div class="paging"><?php echo $pagination; ?></div>
		<div class="table"><?php echo $table; ?></div>
		<br />
		<?php echo anchor('person/add/','add new data',array('class'=>'add')); ?>
	</div>
</body>
</html>