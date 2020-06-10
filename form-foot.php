
	<script type="text/javascript" src="main.js"></script>
	<script>
		document.getElementById('login').addEventListener('click', function () {
			document.getElementById("signupform").classList.add('hide');
			document.getElementById("loginform").classList.remove('hide');
		});
		document.getElementById('signup2').addEventListener('click', function () {
			document.getElementById("signupform").classList.remove('hide');
			document.getElementById("loginform").classList.add('hide');
		})
	</script>
</body>
</html>