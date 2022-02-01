<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">

                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button style="float:right; font-size: 25px;
                                margin-right: 40px; background-color:hotpink; padding:8px;
                                border-radius:8px;" href="{{ route('logout') }}"
                                         onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </button>
                            </form>
                       
</nav>
