<ul x-cloak x-show="open">
    @foreach ($users as $user)
        <li>
            <span class="flex items-center gap-x-2 rounded-md px-4 py-1 hover:bg-fuchsia-900 hover:text-white">
                <span class="relative">
                    <img
                        src="{{ $user->avatar }}"
                        alt="{{ $user->name }}"
                        class="h-6 w-6 rounded-md"
                    />

                    <span class="absolute -bottom-1 -right-1">
                        <span class="flex h-3.5 w-3.5 items-center justify-center rounded-full bg-sidebar">
                            <span
                                class="flex h-2 w-2 rounded-full border border-gray-400 bg-sidebar"
                            ></span>
                        </span>
                    </span>
                </span>

                {{ $user->name }}
            </span>
        </li>
    @endforeach
</ul>
