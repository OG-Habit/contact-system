<nav>
    <div>
        <a>Navbar</a>
        <div>
            <ul>
                @auth
                    <li>
                        <a wire:navigate href="/contacts">Contacts</a>
                    </li>
                    <li>
                        <button wire:click="logout">Logout</button>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
