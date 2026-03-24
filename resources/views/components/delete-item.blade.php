<form method="POST" action="{{ $route }}">
    @method('DELETE')
    @csrf

    <a href="#" onclick="event.preventDefault(); this.closest('form').submit();" class="text-red-500 hover:text-red-700">
        {{ $text }}
    </a>
</form>