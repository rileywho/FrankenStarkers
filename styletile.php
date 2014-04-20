
<?php
/*
Template Name: Styletile
*/
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * Please see /external/starkers-utilities.php for info on Starkers_Utilities::get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	FrankenStarkers
 * @since 		FrankenStarkers 1.0
 */
Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header' ) ); ?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/styletile-header' ) ); ?>

<div class="container-fluid styletile-container">
	<div class="row">
		<div class="col-md-12">
			<h1 class="text-center large">Hi</h1>
		</div>
		<div class="col-md-6 col-md-offset-3">
			<p class="text-center"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sed diam eget risus varius blandit sit amet non magna. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
Sed posuere consectetur est at lobortis. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Nullam quis risus eget urna mollis ornare vel eu leo. Donec id elit non mi porta gravida at eget metus.</p>
		</div>

	</div> <!-- End Row -->
<hr>
	<div class="row section">
		<div class="row" id="identity"> <!--brand title-->
			<div class="col-md-12 ">
				<h1 class="text-center large">Identity</h1>
			</div>
			<div class="col-md-12">
				<h4 class="text-center">Branding</h4>
			</div>
		</div><!-- End Row brand title -->
		<div class="row style-row"> <!--Guidelines-->
			<div class="col-md-3 style-titles ">
				<h2>Guidlines</h2>
				<p>For all permitted uses of our trademarks, you may not:</p>
			</div>
			<div class="col-md-6 col-md-offset-1">
				<ul class="list-dots">
					<li>Test</li>
					<li>Test</li>
					<li>Test</li>
					<li>Test</li>
					<li>Test</li>
					<li>Test</li>
					<li>Test</li>
				</ul>
			</div>
		</div> <!-- End Row Guidelines -->

		<div class="row style-row">
			<div class="col-md-3 style-titles">
				<h2>Wordmark</h2>
				<p>Donec id elit non mi porta gravida at eget metus. Nulla vitae elit libero, a pharetra augue. Aenean lacinia bibendum nulla sed consectetur.</p>
			</div>
			<div class="col-md-6 col-md-offset-1">
				<img class="img-responsive" src="<?php bloginfo('template_directory');?>/images/logo.png">
			</div> <!-- Wordmark -->
		</div> <!-- End Row Workmark-->

		<div class="row style-row"> <!--Sub wordmark-->
			<div class="col-md-3 style-titles">
				<p>Donec id elit non mi porta gravida at eget metus. Nulla vitae elit libero, a pharetra augue. Aenean lacinia bibendum nulla sed consectetur.</p>
			</div>
			<div class="col-md-6 col-md-offset-1">
				<img class="img-responsive" src="<?php bloginfo('template_directory');?>/images/logo-no.png">
			</div>
		</div> <!-- End Row sub wordmark -->
		<div class="row style-row"> <!-- color -->
			<div class="col-md-3 style-titles">
				<h2>Color</h2>
				<p>Donec id elit non mi porta gravida at eget metus. Nulla vitae elit libero, a pharetra augue. Aenean lacinia bibendum nulla sed consectetur.</p>
			</div>
			<div class="col-md-8 col-md-offset-1">
				<div class="row color-row">
					<div class="col-md-6">
						<div class="center">
						<div class="color-block"></div>
						
							<h3>Brand Blue</h3>
							<h5>#446892 / Pantone 180 C</h5>
							<table class="table-responsive color-table">
								<tbody>
									<tr>
										<th>H</th>
										<td>3</td>
										<th>C</th>
										<td>17</td>
										<th>R</th>
										<td>134</td>
									</tr>
									<tr>
										<th>S</th>
										<td>74</td>
										<th>M</th>
										<td>92</td>
										<th>G</th>
										<td>56</td>
									</tr>
									<tr>
										<th>B</th>
										<td>76</td>
										<th>Y</th>
										<td>89</td>
										<th>B</th>
										<td>134</td>
									</tr>
									<tr>
										<th></th>
										<td></td>
										<th>K</th>
										<td>89</td>
										<th></th>
										<td></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<div class="col-md-6">
						<div class="color-block"></div>
						<div class="">
							<h3>Brand Blue</h3>
							<h5>#446892 / Pantone 180 C</h5>
							<table class="table-responsive color-table">
								<tbody>
									<tr>
										<th>H</th>
										<td>3</td>
										<th>C</th>
										<td>17</td>
										<th>R</th>
										<td>134</td>
									</tr>
									<tr>
										<th>S</th>
										<td>74</td>
										<th>M</th>
										<td>92</td>
										<th>G</th>
										<td>56</td>
									</tr>
									<tr>
										<th>B</th>
										<td>76</td>
										<th>Y</th>
										<td>89</td>
										<th>B</th>
										<td>134</td>
									</tr>
									<tr>
										<th></th>
										<td></td>
										<th>K</th>
										<td>89</td>
										<th></th>
										<td></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="color-block"></div>
						<div class="">
							<h3>Brand Blue</h3>
							<h5>#446892 / Pantone 180 C</h5>
							<table class="table-responsive color-table">
								<tbody>
									<tr>
										<th>H</th>
										<td>3</td>
										<th>C</th>
										<td>17</td>
										<th>R</th>
										<td>134</td>
									</tr>
									<tr>
										<th>S</th>
										<td>74</td>
										<th>M</th>
										<td>92</td>
										<th>G</th>
										<td>56</td>
									</tr>
									<tr>
										<th>B</th>
										<td>76</td>
										<th>Y</th>
										<td>89</td>
										<th>B</th>
										<td>134</td>
									</tr>
									<tr>
										<th></th>
										<td></td>
										<th>K</th>
										<td>89</td>
										<th></th>
										<td></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<div class="col-md-6">
						<div class="color-block"></div>
						<div class="">
							<h3>Brand Blue</h3>
							<h5>#446892 / Pantone 180 C</h5>
							<table class="table-responsive color-table">
								<tbody>
									<tr>
										<th>H</th>
										<td>3</td>
										<th>C</th>
										<td>17</td>
										<th>R</th>
										<td>134</td>
									</tr>
									<tr>
										<th>S</th>
										<td>74</td>
										<th>M</th>
										<td>92</td>
										<th>G</th>
										<td>56</td>
									</tr>
									<tr>
										<th>B</th>
										<td>76</td>
										<th>Y</th>
										<td>89</td>
										<th>B</th>
										<td>134</td>
									</tr>
									<tr>
										<th></th>
										<td></td>
										<th>K</th>
										<td>89</td>
										<th></th>
										<td></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
				 <!-- color block end -->

			</div>
		</div> <!-- End Row Color-->
	</div><!-- End Section -->

	<hr>

	<div class="row section">
		<div class="row" id="type"> <!--typetitle-->
			<div class="col-md-12">
				<h1 class="text-center large">Typography</h1>
			</div>
		</div><!-- End Row type title -->
		<div class="row style-row"> <!-- Body Text -->
			<div class="col-md-3 style-titles">
				<h2>Body Text</h2>
			</div>
			<div class="col-md-7 col-md-offset-1">
				<div class="row">
					<div class="col-md-6">
						<p>Donecdui. Nulla vitae elit libero, a pharetra augue. Etiam porta sem malesuada magna mollis euismod. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Nullam quis risus eget urna mollis ornare vel eu leo. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
					</div>
				</div>
			</div>
		</div> <!-- End Row Body text-->

		<div class="row style-row"> <!-- Headings -->
			<div class="col-md-3 style-titles">
				<h2>Headings</h2>
			</div>
			<div class="col-md-7 col-md-offset-1">
				<div class="row">
					<div class="col-md-6">
						<h1>Heading 1</h1>
						<h2>Heading 2</h2>
						<h3>Heading 3</h3>
						<h4>Heading 4</h4>
						<h5>Heading 5</h5>
					</div>
					<div class="col-md-6">
						<p>.color-block{
		float: left;
		background-color: @brand-primary;
		height: 150px;
		width: 150px;
	}</p>
					</div>
				</div>
			</div>
		</div> <!-- End Row Headings -->
	</div> <!-- End Section -->

	<hr>

	<div class="row" id="ui"> <!--typetitle-->
		<div class="col-md-12">
			<h1 class="text-center large">UI Elements</h1>
		</div>
	</div><!-- End Row type title -->
<div class="row section">
	<div class="row style-row"> <!-- Buttons -->
		<div class="col-md-3 style-titles">
			<h2>Buttons</h2>
			<p>Donecdui. Nulla vitae elit libero, a pharetra augue. Etiam porta sem malesuada magna mollis euismod. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Nullam quis risus eget urna mollis ornare vel eu leo. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
		</div>
		<div class="col-md-7 col-md-offset-1">
			<div class="row">
				<div class="col-md-6">
					<button type="button" class="btn btn-default">Default</button>
					<button type="button" class="btn btn-default hover">Hover</button>
					<button type="button" class="btn btn-default active">Active</button>
					<button type="button" class="btn btn-default disabled">Disabled</button>
				</div>

				<div class="col-md-6">
				</div>
			</div>
		</div>
	</div> <!-- End Row Buttons -->

	<div class="row style-row"> <!-- Forms -->
		<div class="col-md-3 style-titles">
			<h2>Forms</h2>
			<p>Donecdui. Nulla vitae elit libero, a pharetra augue. Etiam porta sem malesuada magna mollis euismod. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Nullam quis risus eget urna mollis ornare vel eu leo. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
		</div>
		<div class="col-md-7 col-md-offset-1">
			<div class="row">
				<div class="col-md-6">
					<form role="form">
					  <div class="form-group">
					    <label for="exampleInputEmail1">Email address</label>
					    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
					  </div>
					  <div class="form-group">
					    <label for="exampleInputPassword1">Password</label>
					    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
					  </div>
					  <div class="form-group">
					    <label for="exampleInputFile">File input</label>
					    <input type="file" id="exampleInputFile">
					    <p class="help-block">Example block-level help text here.</p>
					  </div>
					  <div class="checkbox">
					    <label>
					      <input type="checkbox"> Check me out
					    </label>
					  </div>
					  <button type="submit" class="btn btn-default">Submit</button>
					</form>
				</div><!--End col-->

				<div class="col-md-6">
				</div>
			</div>
		</div>
	</div> <!-- End Row Form -->
</div> <!-- End Section -->
</div> <!-- style-container end -->
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>