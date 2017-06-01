<?php get_header(); ?>

<div class="container">
	<div class="row">
		<main role="main" class="sm6">
			<section class="posts-list">
				<h1><?php _e( 'Latest Posts', 'html5blank' ); ?></h1>
				<?php get_template_part('loop'); ?>
			</section>
			<?php if(locate_template('pagination')): ?>
				<section>
					<?php get_template_part('pagination'); ?>
				</section>
			<?php endif; ?>
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

				<input class="btn btn--primary" type="submit" value="Submit">
				<div class="alert alert--primary">This is a primary alert</div>
				<p>Primary</p>

				<input class="btn btn--secondary" type="submit" value="Submit">
				<div class="alert alert--secondary">This is a secondary alert</div>
				<p>Secondary</p>

				<input class="btn btn--success" type="submit" value="Submit">
				<div class="alert alert--success">This is a success alert</div>
				<p>Success</p>

				<input class="btn btn--warning" type="submit" value="Submit">
				<div class="alert alert--warning">This is a warning alert</div>
				<p>Warning</p>

				<input class="btn btn--error" type="submit" value="Submit">
				<div class="alert alert--error">This is an error alert</div>
				<p>Error</p>
			</section>
		</main>

		<?php get_sidebar(); ?>

	</div>
</div>

<?php get_footer(); ?>
