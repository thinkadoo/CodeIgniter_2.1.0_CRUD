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
		<div class="data">
		<table>
			<tr>
				<td width="30%">ID</td>
				<td><?php echo $person->id; ?></td>
			</tr>
			<tr>
				<td valign="top">Name</td>
				<td><?php echo $person->name; ?></td>
			</tr>
			<tr>
				<td valign="top">Gender</td>
				<td><?php echo strtoupper($person->gender)=='M'? 'Male':'Female' ; ?></td>
			</tr>
			<tr>
				<td valign="top">Date of birth (dd-mm-yyyy)</td>
				<td><?php echo date('d-m-Y',strtotime($person->dob)); ?></td>
			</tr>
		</table>
		</div>
		<br />
		<?php echo $link_back; ?>
	</div>
</body>
</html>