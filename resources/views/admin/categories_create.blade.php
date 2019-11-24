<form action="{{ route('store.category') }}" method="post">
	@csrf
	<input type="text" name="name">
	<input type="submit" name="submit" value="Input">
</form>