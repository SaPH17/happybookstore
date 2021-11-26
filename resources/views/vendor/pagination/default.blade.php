@if ($paginator->hasPages())
  <nav class="flex justify-center">
    <div class="mr-4">
      @if ($paginator->onFirstPage())
        <div
        class="bg-gray-900 py-3 px-6 flex justify-center border border-gray-700 rounded-lg text-gray-600 cursor-not-allowed">
          {!! __('pagination.previous') !!}
        </div>
      @else
        <a href="{{ $paginator->previousPageUrl() }}" 
          class="bg-gray-800 py-3 px-6 flex justify-center rounded-lg text-gray-300 cursor-pointer hover:bg-gray-700 hover:text-white">
          {!! __('pagination.previous') !!}
        </a>
      @endif
    </div>
    <div>
      @if ($paginator->hasMorePages())
        <a href="{{ $paginator->nextPageUrl() }}"
          class="bg-gray-800 py-3 px-6 flex justify-center rounded-lg text-gray-300 cursor-pointer hover:bg-gray-700 hover:text-white">
          {!! __('pagination.next') !!}
        </a>
      @else
        <div class="bg-gray-900 py-3 px-6 flex justify-center border border-gray-700 rounded-lg text-gray-600 cursor-not-allowed">
          {!! __('pagination.next') !!}
        </div>
      @endif
    </div>
  </nav>
@endif