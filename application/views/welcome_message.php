<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

		<title>Home Sweet Home</title>
		<link href="<?=base_url('assets/css/bootstrap.css')?>" rel="stylesheet" />
		<link href="<?=base_url('assets/css/extra.css')?>" rel="stylesheet" />
	</head>
	<body>
		<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
			<a class="navbar-brand mr-auto mr-lg-0" href="#">NAME</a>
			<button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
						<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Page 1</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Page 2</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Page 3</a>
					</li>
					<li class="nav-item dropdown">
						<a
							class="nav-link dropdown-toggle"
							href="#"
							id="dropdown01"
							data-toggle="dropdown"
							aria-haspopup="true"
							aria-expanded="false"
							>Dropdown</a
						>
						<div class="dropdown-menu" aria-labelledby="dropdown01">
							<a class="dropdown-item" href="#">Action</a>
							<a class="dropdown-item" href="#">Another action</a>
							<a class="dropdown-item" href="#">One more action</a>
						</div>
					</li>
				</ul>
				<form class="form-inline my-2 my-lg-0">
					<input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search" />
					<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
				</form>
			</div>
		</nav>

		<main role="main" class="container">
			<div class="my-3 p-3 bg-white rounded shadow-sm shadow">
				<h6 class="border-bottom border-gray pb-2">Form</h6>
				<div class="container-fluid">
					<div class="row justify-content-center">
						<div class="col col-lg-4">
							<div class="jumbotron">
								<?=form_open('', 'id="saveuser"')?>
								<div class="form-group">
									<label for="Fullname">Full Name</label>
									<input
										type="text"
										aria-describedby="FullnameFormat"
										name="Fullname"
										class="form-control form-control-sm"
										id="Fullname"
										placeholder="Enter Full Name Here"
										autocomplete="off"
									/>
									<div id="error"></div>
								</div>
								<div class="form-group">
									<label for="Username">Username</label>
									<input
										type="text"
										aria-describedby="UsernameFormat"
										name="Username"
										class="form-control form-control-sm"
										id="Username"
										placeholder="Enter Username Here"
										autocomplete="off"
									/>
									<div id="error"></div>
								</div>
								<div class="form-group">
									<label for="Password">Password</label>
									<input
										type="password"
										aria-describedby="PasswordFormat"
										name="Password"
										class="form-control form-control-sm"
										id="Password"
										placeholder="Enter Password Here"
										autocomplete="off"
									/>
									<div id="error"></div>
								</div>
								<div class="form-group">
									<label for="Role">Role</label>
									<select name="Role" id="Role" class="form-control form-control-sm">
										<option value="">Please Choose Role</option>
										<option value="admin">Admin</option>
										<option value="receptionist">Receptionist</option>
										<option value="accountant">Accountant</option>
									</select>
									<div id="error"></div>
								</div>
								<div class="form-group mt-3">
									<Input type="submit" class="form-control btn btn-sm btn-primary" value="Submit" />
								</div>
								<?=form_close()?>
							</div>
						</div>
					</div>
				</div>
				<small class="d-block text-right mt-3">
					<a href="#">
						<h6>
							<span class="badge badge-pill badge-danger text-white">Clear</span>
						</h6>
					</a>
				</small>
			</div>
			<div class="my-3 p-3 bg-white rounded shadow-sm shadow">
				<h6 class="border-bottom border-gray pb-2">Datatable</h6>
				<div class="container-fluid">
					<div class="row">
						<div class="col">
							<div class="table-responsive">
								<table
									id="user-list"
									class="table table-hover table-striped"
									style="width:100%"
									data-order='[[ 0, "desc" ]]'
								>
									<thead class="alert-primary">
										<tr>
											<th class="text-center align-middle ">ID</th>
											<th class="text-center align-middle ">Full Name</th>
											<th class="text-center align-middle ">Username</th>
											<th class="text-center align-middle ">Password</th>
											<th class="text-center align-middle ">Role</th>
											<th class="text-center align-middle all">Edit</th>
											<th class="text-center align-middle all">Delete</th>
										</tr>
									</thead>
									<tbody class="bg-light"></tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
				<small class="d-block text-right mt-3">
					<a href="#">
						<h6>
							<span class="badge badge-pill badge-info text-white">Reload</span>
						</h6>
					</a>
				</small>
			</div>
		</main>

		<script src="<?=base_url('assets/js/jquery-3.3.1.min.js')?>"></script>
		<script src="<?=base_url('bootstrap/dist/js/bootstrap.bundle.min.js')?>"></script>
		<script>
			$(function() {
				'use strict';

				$('[data-toggle="offcanvas"]').on('click', function() {
					$('.offcanvas-collapse').toggleClass('open');
				});
			});
		</script>
	</body>
</html>
