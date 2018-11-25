@include('didyouknow::board.information.modals.view_author_drafts')

<div class="tab-pane" id="author" role="tabpanel">

    @if(isset($author_drafts))
        {{--{{dd( $author_approved )}}--}}
        @if($author_drafts->isNotEmpty())
            <div class="template__table_static template__table_responsive">
                <div class="scrollable scrollbar-macosx">
                    <table class="table table-condensed">
                        <thead>
                            <tr>
                                <th>
                                    @lang('didyouknow::board/tabs.tab_table_title_title')
                                </th>
                                <th>
                                    @lang('didyouknow::board/tabs.tab_table_title_who')
                                </th>
                                <th>
                                    @lang('didyouknow::board/tabs.tab_table_title_creation_date')
                                </th>
                                <th>
                                    @lang('didyouknow::board/tabs.tab_table_title_last_update')
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
                                    <strong> @lang('didyouknow::board/tabs.tab_nav_author') : </strong>
                                    {{$author_draft->getAuthorName($author_draft->author_group)}}
                                </td>
                                <td>
                                    {{$author_draft->created_at->format('d-m-Y H:i:s')}}
                                </td>
                                <td>
                                    {{$author_draft->updated_at->format('d-m-Y H:i:s')}}
                                </td>
                                <td>
                                    <div class="btn-group btn-group-xs" role="group">
                                        <button type="button" class="btn btn-info"
                                                data-hoover="tooltip"
                                                title="Bekijk"
                                                data-toggle="modal"
                                                data-target="#view_author_drafts"
                                                data-title="{{$author_draft->title}}"
                                                data-body="{{$author_draft->body}}"
                                                >

                                            <i class="fa fa-eye" aria-hidden="true"></i>
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