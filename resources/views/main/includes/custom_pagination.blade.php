@if ($paginator->lastPage() > 1)
    <ul class="pagination justify-content-center mb-4">

        <li class="page-item {{ ($paginator->currentPage() == $paginator->lastPage()) ? ' disabled' : '' }}">
            <a class="page-link{{ ($paginator->currentPage() == $paginator->lastPage()) ? '' : ' text-success' }}"  href="{{ $paginator->url($paginator->currentPage()+1) }}" >&larr; Older</a>
        </li>

        <li class="page-item {{ ($paginator->currentPage() == 1) ? ' disabled' : '' }}">
            <a class="page-link {{ ($paginator->currentPage() > 1) ? ' text-success' : '' }}" href="{{ $paginator->url(1) }}">Newer &rarr;</a>
        </li>

    </ul>
@endif