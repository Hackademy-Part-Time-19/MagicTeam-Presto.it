<x-layout>

    <livewire:article-form-validation />
    
    @if(session()->has('is_succeded'))
    
        @if(session('is_succeded') == true)
            <x-success-article>Articolo aggiunto con successo</x-success-article>
        @else
            <x-error-article>Si è verificato un errore</x-error-article>
        @endif
        
    @endif

</x-layout>
