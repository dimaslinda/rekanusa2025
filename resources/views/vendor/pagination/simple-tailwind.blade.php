@if ($paginator->hasPages())
    <nav role="navigation" aria-label="Pagination Navigation" class="flex justify-between">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <span
                class="relative inline-flex items-center px-4 py-2 text-sm font-medium leading-5 text-gray-500 bg-white border-2 border-gray-300 rounded-lg cursor-default">
                {!! __('pagination.previous') !!}
            </span>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" rel="prev"
                class="relative inline-flex items-center px-4 py-2 text-sm font-medium leading-5 transition duration-150 ease-in-out bg-white border-2 rounded-lg text-secondary border-secondary hover:text-white hover:bg-secondary hover:border-white focus:outline-none focus:ring ring-secondary focus:border-secondary active:bg-secondary active:text-secondary">
                {!! __('pagination.previous') !!}
            </a>
        @endif

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" rel="next"
                class="relative inline-flex items-center px-4 py-2 text-sm font-medium leading-5 transition duration-150 ease-in-out bg-white border-2 rounded-lg text-secondary border-secondary hover:text-white hover:bg-secondary hover:border-white focus:outline-none focus:ring ring-secondary focus:border-secondary active:bg-secondary active:text-secondary">
                {!! __('pagination.next') !!}
            </a>
        @else
            <span
                class="relative inline-flex items-center px-4 py-2 text-sm font-medium leading-5 text-gray-500 bg-white border-2 border-gray-300 rounded-lg cursor-default">
                {!! __('pagination.next') !!}
            </span>
        @endif
    </nav>
@endif
