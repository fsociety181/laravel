
@if ($paginator->hasPages())

    <nav role="navigation" aria-label="Pagination Navigation" class="flex justify-between">
        @if ($paginator->onFirstPage())

            <span class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-300 cursor-default leading-5 rounded-md">
                 Назад
            </span>

        @else
            <a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="relative inline-flex
                                                                            items-center px-4 py-2 text-sm font-medium
                                                                            text-gray-700 bg-white border border-gray-300
                                                                            leading-5 rounded-md hover:text-gray-500 focus:outline-none
                                                                            focus:ring ring-gray-300 focus:border-blue-300
                                                                            active:bg-gray-100 active:text-gray-700 transition
                                                                            ease-in-out duration-150">
                Назад</a>
        @endif

        @if ($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}" rel="prev" class="relative inline-flex
                                                                            items-center px-4 py-2 text-sm font-medium
                                                                            text-gray-700 bg-white border border-gray-300
                                                                            leading-5 rounded-md hover:text-gray-500 focus:outline-none
                                                                            focus:ring ring-gray-300 focus:border-blue-300
                                                                            active:bg-gray-100 active:text-gray-700 transition
                                                                            ease-in-out duration-150">
                    Вперед</a>
        @else
            <span class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-300 cursor-default leading-5 rounded-md">
                 Вперед
            </span>
        @endif
    </nav>


@endif
