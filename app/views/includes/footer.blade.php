
    		
@if(Request::path() !== 'posts' || Auth::check())

	@if(Request::path() == '/' || Request::path() == 'contact')
		<footer class="footer" id="bottom-footer">
			<p><small>&copy; Rachel Pierce, 2015</small></p>
		</footer>

	@else
		<footer class="footer">
			<p><small>&copy; Rachel Pierce, 2015</small></p>
		</footer>
	@endif
@else 
	<footer class="footer">
		<p><small>&copy; Rachel Pierce, <a href="/login">2015</a></small></p>
	</footer>
@endif