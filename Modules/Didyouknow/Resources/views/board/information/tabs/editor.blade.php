@include('didyouknow::board.information.modals.view_author_approved')
@include('didyouknow::board.information.modals.edit_author_approved')

<div class="tab-pane" id="editor" role="tabpanel">

    @if(isset($author_approved))
        {{--{{dd( $author_approved )}}--}}
        @if($author_approved->isNotEmpty())
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
                                Goedgekeurd
                            </th>
                            <th>
                                Editor
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
                        @foreach($author_approved as $author_approve)

                            <tr>
                                <td>
                                    {{$author_approve->title}}
                                </td>
                                <td>
                                    {{$author_approve->getAuthorName($author_approve->author_group)}}
                                </td>
                                <td class="text-center">
                                    <div class="checkbox checkbox-success">
                                        <input id="ch2" type="checkbox" checked="checked" disabled>
                                        <label for="ch2"></label>
                                    </div>
                                </td>
                                <td>
                                    @if(!empty($author_approve->editor))
                                        {{$author_approve->getEditorName($author_approve->editor_group)}}
                                    @else

                                    @endif
                                </td>
                                <td>
                                    {{$author_approve->created_at->format('d-m-Y H:m:i')}}
                                </td>
                                <td>
                                    {{$author_approve->updated_at->format('d-m-Y H:m:i')}}
                                </td>
                                <td>
                                    <div class="btn-group btn-group-xs" role="group">
                                        {{-- View the data in Modal--}}
                                        <button type="button" class="btn btn-info"
                                                data-toggle="modal"
                                                data-target="#view_author_approved"
                                                data-title="{{$author_approve->title}}"
                                                data-body="{{$author_approve->body}}"
                                                data-author="{{$author_approve->getAuthorName($author_approve->author_group)}}"
                                        >
                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                            Bekijk
                                        </button>
                                        {{-- Edit the data in Modal --}}
                                        <button type="button" class="btn btn-warning"
                                                data-toggle="modal"
                                                data-target="#edit_author_approved"
                                                data-title="{{$author_approve->title}}"
                                                data-body="{{$author_approve->body}}"
                                        >
                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                            Wijzig
                                        </button>
                                        {{-- Delete/archive the data thru Modal--}}
                                        <button type="button" class="btn btn-danger"
                                                data-toggle="modal"
                                                data-target="#delete_article"
                                                data-title="{{$author_approve->title}}"
                                        >
                                            <i class="fa fa-trash-o" aria-hidden="true"></i>
                                            Verwijder
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