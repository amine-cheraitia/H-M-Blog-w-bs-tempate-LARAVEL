@component('mail::message')
# Bonjour

B koul rojoula warilna zabek.
## Liste des articles ##
<ul style="list-style: none">
    @foreach($articles as $article)
    <li><a href="{{url( route('articles.show',$article))}}">{{$article->title}}</a></li>
    @endforeach

</ul>

bisou,<br>
{{ config('app.name') }}
@endcomponent
