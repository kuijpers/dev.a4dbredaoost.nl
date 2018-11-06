@include('didyouknow::board.information.modals.view_author_drafts')

<div class="tab-pane" id="author" role="tabpanel">

    @if(isset($author_drafts))
        {{--{{dd( $author_approved )}}--}}
        @if($author_drafts->isNotEmpty())
            <div class="template__table_static template__table_responsive">
                <div class="scrollable scrollbar-macosx">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>
                                Titel
                            </th>
                            <th>
                                Auteur
                            </th>
                            <th>
                                Datum aangemaakt
                            </th>
                            <th>
                                Laatste update
                            </th>
                            <th>
                                &nbsp;
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($author_drafts as $author_draft)

                            <tr>
                                <td>
                                    {{$author_draft->title}}
                                </td>
                                <td>
                                    {{$author_draft->getAuthorName($author_draft->author_group)}}
                                    {{--{{$author_draft->author_group}}--}}
                                </td>
                                <td>
                                    {{$author_draft->created_at->format('d-m-Y H:m:i')}}
                                </td>
                                <td>
                                    {{$author_draft->updated_at->format('d-m-Y H:m:i')}}
                                </td>
                                <td>
                                    <div class="btn-group btn-group-xs" role="group">
                                        <button type="button" class="btn btn-info"
                                                data-toggle="modal"
                                                data-target="#view_author_drafts"
                                                data-title="{{$author_draft->title}}"
                                                data-body="{{$author_draft->body}}"
                                                >

                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                            Bekijk
                                        </button>
                                    </div>
                                </td>
                            </tr>

                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        @else
            <div class="alert alert-info text-center" role="alert">
                <i class="alert-ico fa fa-fw fa-exclamation"></i>Op dit moment is er geen data beschikbaar.
            </div>
        @endif
    @endif

</div>