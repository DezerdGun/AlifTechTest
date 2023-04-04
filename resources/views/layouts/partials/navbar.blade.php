<header class="p-3 bg-dark text-white">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="./public/images/bootstrap-logo-white.svg" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">Logo<use xlink:href="#bootstrap"/></svg>
            </a>
            @auth
            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="{{ route('contact.index')}}" class="nav-link px-2 text-white">My Contacts</a></li>
                <li><a href="{{ route('user.index')}}" class="nav-link px-2 text-white"> All Accaunts List</a></li>
{{--                <li><a href="{{ route('user.create') }}" class="nav-link px-2 text-white">User Create</a></li>--}}
                <li><a href="{{ route('contact.create') }}" class="btn btn-outline-success me-2">Contact Create</a></li>
            </ul>

            <form action="{{ route('search.search') }}" method="GET"
                  class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
                <table>
                    <tr>
                        <td><input type="search" class="form-control form-control-dark" name="search" placeholder="Search Email or User" aria-label="Search" required></td>
                        <td><button class="btn btn-outline-primary me-2" type="submit">Search</button></td>
                    </tr>
                </table>

            </form>


                <div class="text-end">
                    <a  class="btn btn-outline-light me-2">{{auth()->user()->getAttributeValue('username')}}</a>
                </div>
                <div class="text-end">
                    <a href="{{ route('logout.perform') }}" class="btn btn-outline-light me-2">Logout</a>
                </div>
            @endauth

            @guest
                <div class="text-end">
                    <a href="{{ route('login.perform') }}" class="btn btn-outline-light me-2">Login</a>
                    <a href="{{ route('register.perform') }}" class="btn btn-warning">Sign-up</a>
                </div>
            @endguest
        </div>
    </div>
</header>


