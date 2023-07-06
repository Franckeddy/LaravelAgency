@php
$route = request()->route()->getName();
@endphp

<header class="menu-wrap">
    <figure class="user">
        <figcaption>
            Admin
        </figcaption>
    </figure>
    <nav>
        <section class="dicover">
            <h3>GESTION DES BIENS</h3>

            <ul>
                <li>
                    <a href="{{ route('admin.property.index') }}" @class(['', 'active' => str_contains($route, 'property.index')])>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M10 18a7.952 7.952 0 0 0 4.897-1.688l4.396 4.396 1.414-1.414-4.396-4.396A7.952 7.952 0 0 0 18 10c0-4.411-3.589-8-8-8s-8 3.589-8 8 3.589 8 8 8zm0-14c3.309 0 6 2.691 6 6s-2.691 6-6 6-6-2.691-6-6 2.691-6 6-6z"/></svg>
                        Liste
                    </a>
                </li>

                <li>
                    <a href="{{ route('admin.property.create') }}" @class(['', 'active' => str_contains($route, 'property.create')])>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M13 7L11 7 11 11 7 11 7 13 11 13 11 17 13 17 13 13 17 13 17 11 13 11z"/><path d="M12,2C6.486,2,2,6.486,2,12s4.486,10,10,10c5.514,0,10-4.486,10-10S17.514,2,12,2z M12,20c-4.411,0-8-3.589-8-8 s3.589-8,8-8s8,3.589,8,8S16.411,20,12,20z"/></svg>
                        Créer un bien
                    </a>
                </li>
            </ul>
        </section>
        <section class="tools">
            <h3>GESTION DES OPTIONS</h3>

            <ul>
                <li>
                    <a href="{{ route('admin.option.index') }}" @class(['', 'active' => str_contains($route, 'option.')])>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M10 18a7.952 7.952 0 0 0 4.897-1.688l4.396 4.396 1.414-1.414-4.396-4.396A7.952 7.952 0 0 0 18 10c0-4.411-3.589-8-8-8s-8 3.589-8 8 3.589 8 8 8zm0-14c3.309 0 6 2.691 6 6s-2.691 6-6 6-6-2.691-6-6 2.691-6 6-6z"/></svg>
                        Liste
                    </a>
                </li>

                <li>
                    <a href="{{ route('admin.option.create') }}" @class(['', 'active' => str_contains($route, 'options.create')])>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M13 7L11 7 11 11 7 11 7 13 11 13 11 17 13 17 13 13 17 13 17 11 13 11z"/><path d="M12,2C6.486,2,2,6.486,2,12s4.486,10,10,10c5.514,0,10-4.486,10-10S17.514,2,12,2z M12,20c-4.411,0-8-3.589-8-8 s3.589-8,8-8s8,3.589,8,8S16.411,20,12,20z"/></svg>
                        Créer une option
                    </a>
                </li>
            </ul>
        </section>
    </nav>
</header>
