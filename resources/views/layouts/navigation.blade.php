@if(auth() -> user())
<li><a href="/posts">Shop</a></li>
<li><a href="/product-types">Categories</a></li>
<li><a href="/users/{{auth()->user()->id}}">Profile</a></li>
<li><a href="/logout">Logout</a></li>
@endif