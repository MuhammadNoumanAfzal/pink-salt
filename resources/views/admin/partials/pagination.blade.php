@if ($paginator->hasPages())
    <nav role="navigation" aria-label="Pagination Navigation" class="flex items-center gap-1">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <span class="inline-flex items-center justify-center w-8 h-8 rounded-lg bg-slate-100 text-slate-400 cursor-not-allowed border border-slate-200/60 text-xs">
                <i class="fa-solid fa-chevron-left text-[10px]"></i>
            </span>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="inline-flex items-center justify-center w-8 h-8 rounded-lg bg-white hover:bg-slate-50 text-slate-700 hover:text-[#e07a5f] border border-slate-200 shadow-xs transition-colors text-xs font-semibold">
                <i class="fa-solid fa-chevron-left text-[10px]"></i>
            </a>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <span class="inline-flex items-center justify-center w-8 h-8 text-xs font-bold text-slate-400">
                    {{ $element }}
                </span>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <span aria-current="page" class="inline-flex items-center justify-center w-8 h-8 rounded-lg bg-[#e07a5f] text-white text-xs font-bold shadow-xs border border-[#e07a5f]">
                            {{ $page }}
                        </span>
                    @else
                        <a href="{{ $url }}" class="inline-flex items-center justify-center w-8 h-8 rounded-lg bg-white hover:bg-[#e07a5f]/10 text-slate-700 hover:text-[#e07a5f] border border-slate-200 hover:border-[#e07a5f]/30 shadow-xs transition-colors text-xs font-semibold">
                            {{ $page }}
                        </a>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" rel="next" class="inline-flex items-center justify-center w-8 h-8 rounded-lg bg-white hover:bg-slate-50 text-slate-700 hover:text-[#e07a5f] border border-slate-200 shadow-xs transition-colors text-xs font-semibold">
                <i class="fa-solid fa-chevron-right text-[10px]"></i>
            </a>
        @else
            <span class="inline-flex items-center justify-center w-8 h-8 rounded-lg bg-slate-100 text-slate-400 cursor-not-allowed border border-slate-200/60 text-xs">
                <i class="fa-solid fa-chevron-right text-[10px]"></i>
            </span>
        @endif
    </nav>
@endif
