@include('didyouknow::board.information.modals.view_author_approved')
@include('didyouknow::board.information.modals.edit_author_approved')

<div class="tab-pane" id="editor" role="tabpanel">
    {{--{{dd($author_approved)}}--}}

    @if(isset($author_approved))
        {{--{{dd( $author_approved )}}--}}
        @if($author_approved->isNotEmpty())
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
                                    <strong>@lang('didyouknow::board/tabs.tab_nav_author')</strong> :
                                    {{$author_approve->getAuthorName($author_approve->author_group)}}
                                    <br>
                                    <strong>@lang('didyouknow::board/tabs.tab_nav_editor')</strong> :
                                    @if(!empty($author_approve->editor))
                                        {{$author_approve->getEditorName($author_approve->editor_group)}}
                                    @else

                                    @endif
                                </td>
                                <td>
                                    {{$author_approve->created_at->format('d-m-Y H:i:s')}}
                                </td>
                                <td>
                                    {{$author_approve->updated_at->format('d-m-Y H:i:s')}}
                                </td>
                                <td>
                                    <div class="btn-group btn-group-xs" role="group">
                                        @php

                                            $author_approve_list=[
                                            	'id'        => $author_approve->id,
                                            	'title'     => $author_approve->title,
                                            	'body'      => $author_approve->body,
                                            ];

                                        $author_approve_modal = json_encode($author_approve_list);

                                        @endphp
                                        {{-- View the data in Modal--}}
                                        <button type="button" class="btn btn-info"
                                                data-hoover="tooltip"
                                                title="@lang('didyouknow::board/buttons.tab_tooltip_view')"
                                                data-toggle="modal"
                                                data-target="#view_author_approved"
                                                data-info = "{{$author_approve_modal}}"
                                        >
                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                        </button>
                                        {{-- Edit the data in Modal --}}
                                        <button type="button" class="btn btn-warning"
                                                data-hoover="tooltip"
                                                title="@lang('didyouknow::board/buttons.tab_tooltip_edit')"
                                                data-toggle="modal"
                                                data-target="#edit_author_approved"
                                                data-info = "{{$author_approve_modal}}"
                                        >
                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                        </button>
                                        {{-- Delete/archive the data thru Modal--}}
                                        <button type="button" class="btn btn-danger"
                                                data-hoover="tooltip"
                                                title="@lang('didyouknow::board/buttons.tab_tooltip_delete')"
                                                data-toggle="modal"
                                                data-target="#delete_article"
                                                data-title="{{$author_approve->title}}"
                                        >
                                            <i class="fa fa-trash-o" aria-hidden="true"></i>
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
                <i class="alert-ico fa fa-fw fa-exclamation"></i>
                @lang('didyouknow::board/tabs.tab_data_no_data')
            </div>
        @endif
    @endif

</div>