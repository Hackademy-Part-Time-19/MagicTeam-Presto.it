<x-layout>
    @if(session()->has('is_succeded'))
    
        @if(session('is_succeded') == true)
            <x-success-article></x-success-article>
        @else
            <x-error-article>Si è verificato un errore</x-error-article>
        @endif
        
    @endif
    <livewire:article-form-validation />
    


</x-layout>
