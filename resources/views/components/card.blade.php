{{--$slot is a placeholder for whatever content a component will wrap--}}
{{--Do not hardcode href="XX" because then
everytime card component used we link to same URL, making
component redundant and less usable.

Inside index.blade.php: Passing href attribute value into component so
that not for every card the link is going to be
the same--}}

{{--attributes variable to get attribute that
gets passed into that component (href attriute
was passed in to accessible here
-> Any HTML attribute that gets passed into the
components like in line 9 index.blade.php -
They get attached to the $attributes variable.
-> Then use get methode on that to get whatever
attribute we want which was passed into the component--}}

{{--Easier way to write line 26; old version:
<a href="{{ $attributes->get('href') }}"
class="btn">View Details</a>
-> New version in line 26--}}
{{--This takes any html attribute we pass into
the component and output them all at $attributes place--}}

{{--We have passed prop value into component
 in index.blade.php : :highlight="true">
 ->When accepting a prop into a component, first
  we need ot declare the prop, using a blade directive.
  giving is a default value false with => false--}}

@props(['highlight' => false])
{{--
@props defines a variabel the component can reveive.
Add a class of highlight when highlights variable is true.
'card' without value (e.g. false) always gets applied ->
We want that here.--}}
<div @class(['highlight' => $highlight, 'card'])>
    {{ $slot }}
    <a {{ $attributes }} class="btn">View Details</a>
</div>

{{--$attributes: Takes any html attribute we pass
into the component and it outputs them ALL right inside
curly braces.
Any and all attributes that we pass in are gonna
get output whereever we place the attributes variable
like here within a tag.

This means: when you use <x-card> in your Blade views,
any attribute you write there (like href, id, target,
etc.) will be automatically inserted where you placed
{{ $attributes }} inside your component.--}}

{{--Try: With link now reading: http://lava-network.test/offers/1
 Problem: Not hard coding the href link otherwise
 every card woudl always use same link (We are in
 card view.
 Therefore we need a way to pass the href link into the
 component so that we can access it.

 Successfully passing href link into component by
 using attribute value we get access to within that
 component--}}
