<?php get_header(); ?>

<div class="container">
	<div class="row">
		<main role="main" class="md8">
			<section class="posts-list">
				<h1><?php _e( 'Latest Posts', 'hgabase' ); ?></h1>
				<?php get_template_part('loop'); ?>
			</section>
			<?php if(locate_template('pagination')): ?>
				<section>
					<?php get_template_part('pagination'); ?>
				</section>
			<?php endif; ?>
			<section>
				<h1>Heading 1</h1>
				<h2>Heading 2</h2>
				<h3>Heading 3</h3>
				<h4>Heading 4</h4>
				<h5>Heading 5</h5>
				<h6>Heading 6</h6>
			</section>
			<section>
				<form>
					<div class="row">
						<div class="form-group sm6">
							<label for="exampleEmailInput">Your email</label>
							<input class="form-input" type="email" placeholder="test@mailbox.com" id="exampleEmailInput">
						</div>
						<div class="form-group sm6">
							<label for="exampleRecipientInput">Reason for contacting</label>
							<select class="form-input" id="exampleRecipientInput">
								<option value="Option 1">Questions</option>
								<option value="Option 2">Admiration</option>
								<option value="Option 3">Can I get your number?</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label for="exampleMessage">Message</label>
						<textarea class="form-input" placeholder="Hi Dave …" id="exampleMessage" style="margin-top: 0px; margin-bottom: 15px; height: 89px;"></textarea>
					</div>
					<label class="send-yourself-copy">
						<input type="checkbox">
						<span class="label-body">Send a copy to yourself</span>
					</label>
					<input class="btn btn--primary" type="submit" value="Submit">
				</form>
			</section>
			<section>
				<p>
					<p>Primary</p>
					<input class="btn btn--primary" type="submit" value="Submit">
					<div class="alert alert--primary">This is a primary alert</div>
				</p>

				<p>
					<p>Secondary</p>
					<input class="btn btn--secondary" type="submit" value="Submit">
					<div class="alert alert--secondary">This is a secondary alert</div>
				</p>

				<p>
					<p>Success</p>
					<input class="btn btn--success" type="submit" value="Submit">
					<div class="alert alert--success">This is a success alert</div>
				</p>

				<p>
					<p>Warning</p>
					<input class="btn btn--warning" type="submit" value="Submit">
					<div class="alert alert--warning">This is a warning alert</div>
				</p>

				<p>
					<p>Error</p>
					<input class="btn btn--error" type="submit" value="Submit">
					<div class="alert alert--error">This is an error alert</div>
				</p>
			</section>
			<section>
				<table class="u-full-width">
					<thead>
						<tr>
							<th>Name</th>
							<th>Age</th>
							<th>Sex</th>
							<th>Location</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Reece Farmer</td>
							<td><?php echo date(Y) - 1997 ?></td>
							<td>Male</td>
							<td>Carlisle</td>
						</tr>
						<tr>
							<td>Ian Austin</td>
							<td><?php echo date(Y) - 1992 ?></td>
							<td>Male</td>
							<td>Lancaster</td>
						</tr>
						<tr>
							<td>Elliot Garner</td>
							<td><?php echo date(Y) - 1993 ?></td>
							<td>Male</td>
							<td>Manchester</td>
						</tr>
					</tbody>
				</table>
			</section>
			<section>
				<pre>
					<code>
.some-class {
	background-color: plum;
}
					</code>
				</pre>
			</section>
		</main>

		<?php get_sidebar(); ?>

	</div>
</div>

<?php get_footer(); ?>
