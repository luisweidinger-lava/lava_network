
<x-layout>
<h2>Currently Available Lavas</h2>

<ul>
    {{--The @foreach loop:
    For every lava in my database, this makes one
    card showing their name and a link to their
    detail page.”--}}
    @foreach($lavas as $lava)
    <li>
        {{--lava id from $lava from @foreach loop.
        Blade renders {{true}} inside highlight ="{{true}}"
        and outputs dynamic value as string before it
        even gets passed into the component.
        Use : to bind dynamic value or data t teh prop
        as its value.
        -> 70: Every ninja that satisfies the condition
        greater than 70 of his skill is going to have
        that highlight class applied to the card.--}}
        <x-card href="/lavas/{{ $lava['id'] }}" :highlight="$lava['skill'] > 70">
            {{--text inside h3 is name value of
             lava we are iterating within the loop.
             h3 content is rendered in card component
             where slot variabel is--}}
            <h3> {{ $lava['name'] }}</h3>

        </x-card>
    </li>
      @endforeach
</ul>
</x-layout>