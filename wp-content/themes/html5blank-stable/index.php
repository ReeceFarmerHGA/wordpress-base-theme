<?php get_header(); ?>

<div class="container">
	<div class="row">
		<main role="main" class="sm6">
			<section>
				<h1><?php _e( 'Latest Posts', 'html5blank' ); ?></h1>
				<?php get_template_part('loop'); ?>
				<?php get_template_part('pagination'); ?>
			</section>
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
				<label class="example-send-yourself-copy">
					<input type="checkbox">
					<span class="label-body">Send a copy to yourself</span>
				</label>
				<input class="btn btn--primary" type="submit" value="Submit">
				<input class="btn btn--secondary" type="submit" value="Submit">
				<input class="btn btn--success" type="submit" value="Submit">
				<input class="btn btn--warning" type="submit" value="Submit">
				<input class="btn btn--error" type="submit" value="Submit">
			</form>
		</main>

		<?php get_sidebar(); ?>

	</div>
</div>

<?php get_footer(); ?>
