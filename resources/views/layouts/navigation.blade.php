@if(auth() -> user()){
<li><a href="/">Welcome</a></li>
<li><a href="/logout">Logout</a></li>
<li><a href="/users">Users (Temp)</a></li>
<li><a href="/user-types">User Types (Temp)</a></li>
<li><a href="/payments">Payments (Temp)</a></li>
<li><a href="/payment-types">Payment Types (Temp)</a></li>
<li><a href="/products">Products (Temp)</a></li>
<li><a href="/product-types">Product Types (Temp)</a></li>
<li><a href="/posts">Posts</a></li>
<li><a href="/orders">Orders</a></li>
}
@else{
<li><a href="/">Welcome</a></li>
<li><a href="/login">Login</a></li>
<li><a href="/users">Users (Temp)</a></li>
<li><a href="/user-types">User Types (Temp)</a></li>
}
@endif