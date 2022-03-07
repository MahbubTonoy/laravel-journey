<nav>
  <a href='{{route('homePage')}}' class="{{ request()->is('/') ? "active":"" }}">Home</a>
  <a href='{{route('aboutPage')}}' class="{{ request()->is('about')  ? "active":""}}">About</a>
  <a href='{{route('contactPage')}}' class="{{ request()->is('contact')  ? "active":""}}">Contact</a>
</nav>