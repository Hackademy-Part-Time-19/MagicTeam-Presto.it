<x-layout>

    
    <form method="POST" action="{{route("revisor.request")}}">
        
        @csrf
        <textarea name="text" id="" cols="30" rows="10"></textarea>
        <button type="submit">Invia</button>
    
    </form>

    {{$text ?? ''}}

</x-layout>